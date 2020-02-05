$(document).ready(function(e){
    getAllBarang();
    getAllGroup();
    
    //datatable barang
    $('#tBarang').dataTable({
            initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        },
        dom: 'lBfrtip',
        "order": [[ 1, "asc" ]]
        
    });
    
    
    //add Barang
    $("#fBarang").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url : 'db/barang_create.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#submitBtn').attr("disabled","disabled");
                $('#fBarang').css("opacity",".5");
            },
            success: function(response){ 
                location.href="barang.php";
            }
        });
    });
    
    //file type validation
    $("#photo_brg").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Kamu harus mengunggah gambar yang formatnya JPEG/JPG/PNG ya.');
            $("#photo_brg").val('');
            return false;
        }
    });
    
    //edit Barang
    $("#fBarangEdit").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url : 'db/barang_update.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#submitEditBtn').attr("disabled","disabled");
                $('#fBarangEdit').css("opacity",".5");
            },
            success: function(response){ 
                location.href="barang.php";
            }
        });
    });

});

function getAllBarang(){
    $.ajax({                                      
        url: 'db/barang_read.php?id=ALL',
        cache: false,
        type:'GET',
        dataType: 'json',
        success: function(data){
			var s ='';
			for(var i=0; i<data.length; i++){
                
                s = s + '<tr>';
                s = s + '   <td><img src="img/items/'+data[i].brg_photo+'" width="70%"/></td>';
                s = s + '   <td>'+data[i].brg_nama+'</td>';
                s = s + '   <td>'+data[i].brg_harga_beli+'</td>';
                s = s + '   <td>'+data[i].brg_harga_jual+'</td>';
                s = s + '   <td>'+data[i].brg_stok+'</td>';
                s = s + '   <td class="text-center">';
                s = s + '       <a class="btn btn-purple" title="Ubah" onclick="readBarang('+data[i].brg_id+')"><i class="demo-pli-pencil"></i></a>';
                s = s + '       <a class="btn btn-danger"  title="Hapus" onclick="hapusBarang('+ data[i].brg_id +');"><i class="demo-pli-trash"></i></a>';
				 s = s + '  </td>';	                                    
				 s = s + '</tr>';	  
                   
			}
            $('#barang').html(s);
		}
	})
}

//$(document).ready(function(e){
//
//});

function getAllGroup(){
    $.ajax({                                      
        url: 'db/group_read.php?id=ALL',
        cache: false,
        type:'GET',
        dataType: 'json',
        success: function(data){
            var s ='';
            s = s + '<option selected disabled> Pilih Kategori</option>'
			for(var i=0; i<data.length; i++){
                s = s + '<option value='+data[i].group_id+'>'+data[i].group_name+'</option>'
            }
            $('#groupBarang').html(s);
        }
    });
}

function getIdBarang(x){
    var id = x[x.selectedIndex].value;
    $.ajax({                                      
        url: 'db/group_read_counter.php?id='+id,
        type:'GET',
        dataType: 'json',
        success: function(data){
            if(id == 1)
			$("#nama_brg").val('SYR-'+(data[0].group_counter));
            else if(id==2)
            $("#nama_brg").val('BUA-'+data[0].group_counter);
            else if(id==3)
            $("#nama_brg").val('BDP-'+data[0].group_counter);
            else if(id==4)
            $("#nama_brg").val('LKP-'+data[0].group_counter);
		}
	})
    
    
}

function readBarang(idBarang){
  $('#editBarang').modal('show');
    
  var parmData = "id=" + idBarang;
  $.ajax({                                      
    url :'db/barang_read.php',
    type:'GET',
    data: parmData,
    dataType: 'json',
    success: function(data){
      $("#id_brg_edit").val(data[0].brg_id);
      $("#nama_brg_edit").val(data[0].brg_nama);
      $("#hbeli_brg_edit").val(data[0].brg_harga_beli);
      $("#hjual_brg_edit").val(data[0].brg_harga_jual);
      $("#stok_brg_edit").val(data[0].brg_stok);
      var s ="";
      s = s + '<img src="img/items/'+data[0].brg_photo+'" width="100%" />';
      $('#photo_brg_edit').html(s);
    }
  });
}

function editBarang(){
    
}

function hapusBarang(idBarang){
    swal({
      title: "Kamu yakin?",
      text: "Data ini akan di hapus",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, yakin!",
      closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: 'db/barang_delete.php',
          type:'POST',
          data:'id='+ idBarang,
          dataType:'json',
          success:function(data){  
          }
        });
        swal("Berhasil!", "Data sudah dihapus.", "success");
        getAllBarang();
      });
}