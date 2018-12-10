<?php
session_start();
include('../config/connect.php');
$emailDariGet = $_GET['emailGet'];
$qKecamatan = $link -> query("SELECT * FROM tbl_daerah WHERE kd_tipe_daerah='KC';");

?>
<div class='row'>
  <div class='center-align'>
    <h5 class='light'>Cari pemilih</h5>
  </div>
  <div style='padding-left:12px;padding-right:12px;'>
<p>
      <small>Cari berdasarkan</small><br/>
  <button class='btn' id='btnNik'>NIK</button>&nbsp;<button class='btn' id='btnNama'>Nama</button>
    </p>
    <br/>
    <label for='txtNik'>Nik</label>
  <input placeholder="NIK (Nomor Induk Kependudukan)" name='txtNik' id="txtNik" type="text" class="validate" autofocus>
  <br/>
    
    <label for='txtNama'>Nama</label>
  <input placeholder="Nama DPT" name='txtNama' id="txtNama" type="text" class="validate" autofocus>
  <br/>
    
    <div id='frmKecamatan'>
      <label for='txtKecamatan'>Kecamatan</label>
    <select id="txtKecamatan" name='txtKecamatan'>
                        <option value='semua'>Semua kecamatan</option>    
                      <?php
                    while($fKec = $qKecamatan -> fetch_array()){
                      $nm = $fKec['nama'];
                      $kd = $fKec['kd_daerah'];
                      echo "<option value='$kd'>$nm</option>";
                    }
      ?>
                      </select>
    </div>
    
    <div id='frmDesa'>
      

    </div>
    
    <div id='frmTps'>
      
    </div>
     <blockquote>
      <small id='divStatCari'>Status pencarian DPT</small>
    </blockquote>
    <button class="btn waves-effect waves-light" id='btnCari' name="action">Cari<i class="material-icons right">send</i></button>&nbsp;
    <button class="btn waves-effect waves-light" id='btnClear' name="action">Clear<i class="material-icons right">delete</i>
     <input type='hidden' id='txtDataSembunyiKec' value=''/>
      <input type='hidden' id='txtDataSembunyiDes' value=''/>
      <input type='hidden' id='txtDataSembunyiTps' value=''/>
  </button>
  </div>
  
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <strong>Data pemilih ditemukan</strong>
      <h5 id='mdlKdDaerah' class='light'></h5>
      <table>
        <tr>
        <td>Nama</td><td id='capTotalDpt'></td>
        </tr>
         <tr>
        <td>Alamat</td><td id='capPemilihSaya'></td>
        </tr>
         <tr>
        <td>Kd Daerah</td><td id='capTargetSuara'></td>
        </tr>
         
      </table>
      <div class='divUbahTarget'>
         <label for='txtTargetSuara'><small>Target Suara</small></label>
  <input placeholder="Target suara" name='txtTargetSuara' id="txtTargetSuara" type="text">
      
  <br/>
      </div>
      
    
    </div>
    <div class="modal-footer">
      <a href="#!" class="waves-effect waves-green btn-flat" id='btnUbahTarget'>Tambah ke suara saya</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Tutup</a>
    </div>
  </div>



<script>
  
$(document).ready(function(){
   $('select').material_select();
  $('.modal').modal({dismissible:false});
//  var modNik = M.Modal.getInstance('modal1');
  //$('#txtNik').focus(); 
   $('#txtNik').hide();
    $('#txtNama').hide();
  var kecamatan = "";
  var desa = "";
  var tps = "";
  var statusTombol = "";
  //$('#frmDesa').hide();
  
$('#txtKecamatan').change(function(){
  var kdDaerah = $(this).val();
  //kecamatan = kdDaerah;
  $('#txtDataSembunyiKec').val(kdDaerah);
  
  
  if(kdDaerah === 'semua'){    
   //$('#frmDesa').show();
     //$('#txtDesa').append('<option value="dd">dd</option>');
    $('#frmDesa').html("");
    $('#frmTps').html("");
    
  }else{   
    $('#frmDesa').load('dataCariDesa.php',{'kdKec':kdDaerah});    
  }
  
  
  console.log(kdDaerah);
});  
  
 function getHidden(){
   var hKec = $('#txtDataSembunyiKec').val();
   var hDes = $('#txtDataSembunyiDes').val();
   var hTps = $('#txtDataSembunyiTps').val();
   console.log("Kec  : " + hKec + " | Des : " + hDes + " | Tps : " + hTps);
 }
  
  //setInterval(getHidden, 3000);
  $('#btnCari').click(function(){
    var nikData = $('#txtNik').val();
   if(statusTombol===""){
     window.alert("Harap pilih kriteria pencarian!!");
   }else{
     if(statusTombol==="nik"){
       if($('#txtNik').val() === ""){
         window.alert("NIK tidak boleh kosong ^_^");
         $('#txtNik').focus();
       }else{
         //post melalui NIK
         console.log("Pencarian data dimulai!!");
         $('#divStatCari').html("Mencari data ...");
         $(this).addClass('disabled');
         $.post('cekCariDariNik.php',{'dataNik':nikData},function(data){
           var obj = JSON.parse(data);
           var jlhCari = obj.jlhNik;
          console.table(obj);
           if(jlhCari === 0){
             console.log("Data nik tidak ditemukan!!");
             window.alert("Maaf, tidak ditemukan data NIK !!");
             $('#txtNik').val("");
             $('#txtNik').focus();
             $('#btnCari').removeClass('disabled');
           }else{
             $('.modal').modal('open');
             console.log("Data nik ditemukan!!");
             $('#btnCari').removeClass('disabled');
           }
          //
         });
       }
     }else{
       if($('#txtNama').val() === ""){
         window.alert("Nama tidak boleh kosong ^_^");
       }else{
         //post melalui Nama
       }
     }
   }
  });
  
  $('#btnNik').click(function(){
    $('#txtNik').show();
    $('#txtNik').focus();
    $('#txtNama').hide();
    statusTombol = "nik";
  });
  
  $('#btnNama').click(function(){
    $('#txtNik').hide();
    $('#txtNama').show();
    $('#txtNama').focus();
    statusTombol = "nama";
  });
  
});
</script>








