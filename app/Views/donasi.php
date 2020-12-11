<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2> Ayo Donasi </h2>
<form class="row g-3">
  <div class="col-12">
    <label for="inputnama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="inputnama">
  </div>
  <div class="col-12">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputemail">
  </div>
  
  <div class="col-12">
    <label for="inputpaket" class="form-label">Paket</label>
    <select id="inputpaket" class="form-select">
      <option selected>Silahkan Pilih</option>
      <option value="" selected="selected">
        Silakan Pilih
        </option>
                                        
        <option value="pengobatan">
        Pengobatan
        </option>
                                  
        <option value="Obat Cacing  Tetes Kutu">
        Obat Cacing &amp; Tetes Kutu
        </option>
                                                            
        <option value="Sterilisasi Jantan ">
        Sterilisasi Jantan
        </option>  
                                                            
        <option value="Sterilisasi Betina ">
        Sterilisasi Betina 
        </option>
                                      
        <option value="TNR Kecil 5 kucing">
        TNR Kecil (5 kucing)
        </option>
                                        
        <option value="TNR Besar 10 kucing">
        TNR Besar (10 kucing)
        </option>
    </select>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Setuju
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Donasi</button>
  </div>
</form>

  <br><br>

<?= $this->endSection('content'); ?>
