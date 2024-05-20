<?php
declare(strict_types=1);

namespace App\Controller;


/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 */
class PrestarController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            $prestamoTable = $this->fetchTable('Prestamos');
            $prestamo=$prestamoTable->newEmptyEntity();
            
            $prestamo->fecha=$this->request->getData('fecha');
            $prestamo->estado=$this->request->getData('estado');
            $prestamo->usuarios_id=$this->request->getData('usuarios_id');
            $prestamo->created=date("Y-m-d H:i:s");
            $prestamo->modified=date("Y-m-d H:i:s");
            
            if ($prestamoTable->save($prestamo)) {
                $last_id=$prestamo->id;
                $detallesTable =$this->fetchTable('Detalles');
                $setalles=$detallesTable->newEmptyEntity();
                $setalles->prestamos_id=$last_id;
                $setalles->libros_id=$this->request->getData('libros_id');
                $setalles->created=date("Y-m-d H:i:s");
                $setalles->modified=date("Y-m-d H:i:s");
                $detallesTable->save($setalles);
                $this->Flash->success(__('The Record has been saved con el siguiente ID '.$last_id));
            }
            else
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            
         

        }
        $usuarios = $this->fetchTable('Usuarios')->find('all')->all();
        $libros= $this->fetchTable('Libros')->find()->all();
         $this->set(compact('usuarios','libros'));
    }

    public function reportesid()
    {
        $usuarios = $this->fetchTable('Usuarios')->find();
        $this->set(compact('usuarios'));
        if ($this->request->is('post')) {
            $id_usuario=$this->request->getData('usuarios_id');
           $this->listado($id_usuario); 
        }
    }

    public function listado($id_usuario)
    {
        require  ROOT . DS . 'vendor' . DS . 'tcpdf'. DS .'Pdf.php';
        $pdf= new \Pdf();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('unismon');
        $pdf->SetTitle('Informe de prueba');
        $pdf->SetSubject('Informe general');
        $pdf->SetKeywords('PDF, reportes');
        $pdf->SetMargins(10, 25.2, 10);
        $pdf->SetAutoPageBreak(TRUE, 13.4);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // add a page
        $pdf->AddPage('P', 'LETTER');
        $pdf->SetFont('times', '', 12, '', true);
              
        $regtabla = $this->fetchTable('Prestamos')->find()->where(['usuarios_id'=>$id_usuario])->all();
        $usuarios = $this->fetchTable('usuarios')->find()->where(['id'=>$id_usuario])->all();        
        $data_user='';
        foreach($usuarios as $usuario)
        {
            $data_user=$usuario->id.' '.$usuario->nombres.' '.$usuario->apellidos;
        }
        $html='
         <table cellspacing="0" cellpadding="1" border="1">
         <tr>
          <th> FECHA </th>
          <th> estado </th>
          <th> usuario </th>
         </tr>
         ';
        
        foreach($regtabla  as $reg)
        {
           $html.='
           <tr>
             <td> '.$reg->fecha.'</td>
             <td> '.$reg->estado.'</td>
             <td> '.$data_user.'</td>
            </tr>'; 
        }
       $html.='</table>';
       $pdf->writeHTML($html, true, false, true, false, '');
       $pdf->lastPage();
 	   ob_end_clean();//limpia el bufer
       $pdf->Output('Listado.pdf', 'I');
 }

}