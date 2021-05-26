$(function() {  //method ready

           $('.tombolTambahData').on('click', function() {
                      $('#formModalLabel').html('Tambah Data Mahasiswa');

                      $('.modal-footer button[type=submit]').html('Tambah Data');
                      
           });

           $('.tampilModalUbah').on('click', function() 
           {
                       // Merubah caption tambah
                       $('#formModalLabel').html('Ubah Data Mahasiswa');

                       $('.modal-footer button[type=submit]').html('Ubah Data');

                       $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

                       //ambil id
                       const id = $(this).data('id');
                    
                       $.ajax({
                                  url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
                                  data: {id : id},
                                  method: 'post', 
                                  dataType: 'json',
                                  success: function(data) {
                                            $('#nama').val(data.nama);
                                            $('#nrp').val(data.nrp);
                                            $('#jurusan').val(data.jurusan);
                                            $('#email').val(data.email);
                                            $('#id').val(data.id);
                                  }
                       });

           });



});