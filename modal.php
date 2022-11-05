<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data TK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="CrudDataTK.php?ACT=tambah" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="namatk" class="col-form-label">Nama TK:</label>
            <input name="nama_tk" type="text" class="form-control" id="namatk">
          </div>
          <div class="form-group">
            <label for="biayaspp" class="col-form-label">Biaya SPP:</label>
            <input name="kriteria1" type="text" class="form-control" id="biayaspp">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Biaya Masuk:</label>
            <input name="kriteria2" type="text" class="form-control" id="biayamasuk">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Batas Tampung Kelas:</label>
            <input name="kriteria3" type="text" class="form-control" id="batastampung">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Pengajar:</label>
            <input name="kriteria4" type="text" class="form-control" id="jumlahpengajar">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Akreditasi:</label>
            <select name="kriteria5" id="akreditasi"  class="form-control" style="width:100%" required>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ABK:</label>
            <select name="kriteria6" id="anakberkebutuhankhusus" class="form-control" style="width:100%" required>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Fasilitas:</label>
            <input name="kriteria7" type="text" class="form-control" id="jumlahfasilitas">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button name="tambah" type="submit" class="btn btn-primary">simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="edit" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data TK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" action="CrudDataTK.php?ACT=edit">
        <div class="modal-body" id="modal-edit">
          <div class="form-group">
            <label for="namatk" class="col-form-label">Nama TK:</label>
              <input name="id_tk" type="hidden" class="form-control" id="idtk">
            <input name="nama_tk" type="text" class="form-control" id="namatk" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="biayaspp" class="col-form-label">Biaya SPP:</label>
            <input name="kriteria1" type="text" class="form-control" id="biayaspp">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Biaya Masuk:</label>
            <input name="kriteria2" type="text" class="form-control" id="biayamasuk">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Batas Tampung Kelas:</label>
            <input name="kriteria3" type="text" class="form-control" id="batastampung">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Pengajar:</label>
            <input name="kriteria4" type="text" class="form-control" id="jumlahpengajar">
          </div>
          <div class="form-group">
            <label for="akreditasi" class="col-form-label">Akreditasi:</label>
            <select id="akreditasitk" name="kriteria5" class="form-control"  style="width:100%" required>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">ABK:</label>
            <select name="kriteria6" id="abk" class="form-control" style="width:100%" required>
              <option value="Ya">Ya</option>
              <option value="Tidak">Tidak</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jumlah Fasilitas:</label>
            <input name="kriteria7" type="text" class="form-control" id="jumlahfasilitas">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input name="edit" type="submit" class="btn btn-primary" value="Simpan">
        </div>
      </form>
    </div>
  </div>
</div>
