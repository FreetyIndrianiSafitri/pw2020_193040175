// Preview Image untuk Tambah dan Ubah

function previewImage() {
  const foto = document.querySelector('.foto');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}

function previewImageLogo() {
  const logo_merk = document.querySelector('.logo_merk');
  const imgPreviewLogo = document.querySelector('.img-preview-logo');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(logo_merk.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreviewLogo.src = oFREvent.target.result;
  };
}
