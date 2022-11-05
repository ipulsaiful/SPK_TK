var count =1;
function addmorefield(){
	count+=1
	html='<div class="form-group">\
                  <div class="row p-4">\
                    <div class="col-5">\
                      <label >Nama Subkriteria</label>\
                    <input name="subkriteria[]" type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Fasilitas">\
                    </div>\
                    <div class="col-4">\
                      <label >nilai Subkriteria</label>\
                    <input name="subkriteria[]" type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Fasilitas">\
                    </div>\
                  </div>\
                  </div>'
    var form = document.getElementById('tambah_sub_kriteria')
    form.innerHTML+=html

}

