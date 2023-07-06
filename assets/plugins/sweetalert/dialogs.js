

jQuery(document).ready(function($){
  $('.hapus').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin?',
      text: 'Apakah anda ingin menghapus data ini?',
      type: 'warning',
      html: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
      window.location.href = getLink
    });
    return false;
  });
});

jQuery(document).ready(function($){
  $('.konsepberita').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin?',
      text: 'Pindahkan berita ke konsep',
      type: 'warning',
      html: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
      window.location.href = getLink
    });
    return false;
  });
});

jQuery(document).ready(function($){
  $('.postingberita').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin?',
      text: 'Posting Berita',
      type: 'warning',
      html: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
      window.location.href = getLink
    });
    return false;
  });
});

jQuery(document).ready(function($){
  $('.sampahberita').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin?',
      text: 'Pindahkan berita ke tong sampah',
      type: 'warning',
      html: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
      window.location.href = getLink
    });
    return false;
  });
});

jQuery(document).ready(function($){
  $('.simpan_data').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin Simpan Data?',
      text: 'Apakah anda yakin menyimpan data ini?',
      type: 'warning',
      html: true,
      confirmButtonColor: "#33cc33",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
          // window.location.href = getLink
          $('#form-tambah-aset').submit();
        });
    return false;
  });
});

jQuery(document).ready(function($){
  $('.simpan_ubah_jadwal_berobat').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin Ubah Data?',
      text: 'Apakah anda yakin akan mengubah data jadwal berobat ini?',
      type: 'warning',
      html: true,
      confirmButtonColor: "#33cc33",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
          // window.location.href = getLink
          $('#form-ubah-jadwal-berobat').submit();
        });
    return false;
  });
});


jQuery(document).ready(function($){
  $('.simpan_ubah').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Yakin Ubah Data?',
      text: 'Apakah anda yakin akan mengubah data ini?',
      type: 'warning',
      html: true,
      confirmButtonColor: "#33cc33",
      confirmButtonText: "Ya, Saya yakin",
      cancelButtonText: "Batal",
      showCancelButton: true,
    },function(){
      $('#form-ubah-kontak').submit();
    });
    return false;
  });
});



$(function () {
  $('.js-sweetalert button').on('click', function () {
    var type = $(this).data('type');
    if (type === 'basic') {
      showBasicMessage();
    }
    else if (type === 'with-title') {
      showWithTitleMessage();
    }
    else if (type === 'success') {
      showSuccessMessage();
    }
    else if (type === 'confirm') {
      showConfirmMessage();
    }
    else if (type === 'cancel') {
      showCancelMessage();
    }
    else if (type === 'with-custom-icon') {
      showWithCustomIconMessage();
    }
    else if (type === 'html-message') {
      showHtmlMessage();
    }
    else if (type === 'autoclose-timer') {
      showAutoCloseTimerMessage();
    }
    else if (type === 'prompt') {
      showPromptMessage();
    }
    else if (type === 'ajax-loader') {
      showAjaxLoaderMessage();
    }
  });
});

//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
  swal("Here's a message!");
}

function showWithTitleMessage() {
  swal("Here's a message!", "It's pretty, isn't it?");
}

function showSuccessMessage() {
  swal("Good job!", "You clicked the button!", "success");
}

function showConfirmMessage() {
  swal({
    title: "Yakin?",
    text: "Apakah anda yakin ingin menghapus artikel ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Ya, Saya yakin",
    cancelButtonText: "Batal",
    closeOnConfirm: true
  }, function (){
    swal({
      title : "Dihapus!",
      type : "success",
    });
  });
}

function showCancelMessage() {
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel plx!",
    closeOnConfirm: false,
    closeOnCancel: false
  }, function (isConfirm) {
    if (isConfirm) {
      swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
  });
}

function showWithCustomIconMessage() {
  swal({
    title: "Sweet!",
    text: "Here's a custom image.",
    imageUrl: "../../images/thumbs-up.png"
  });
}

function showHtmlMessage() {
  swal({
    title: "HTML <small>Title</small>!",
    text: "A custom <span style=\"color: #CC0000\">html<span> message.",
    html: true
  });
}

function showAutoCloseTimerMessage() {
  swal({
    title: "Auto close alert!",
    text: "I will close in 2 seconds.",
    timer: 2000,
    showConfirmButton: false
  });
}

function showPromptMessage() {
  swal({
    title: "An input!",
    text: "Write something interesting:",
    type: "input",
    showCancelButton: true,
    closeOnConfirm: false,
    animation: "slide-from-top",
    inputPlaceholder: "Write something"
  }, function (inputValue) {
    if (inputValue === false) return false;
    if (inputValue === "") {
      swal.showInputError("You need to write something!"); return false
    }
    swal("Nice!", "You wrote: " + inputValue, "success");
  });
}

function showAjaxLoaderMessage() {
  swal({
    title: "Ajax request example",
    text: "Submit to run ajax request",
    type: "info",
    showCancelButton: true,
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  }, function () {
    setTimeout(function () {
      swal("Ajax request finished!");
    }, 2000);
  });
}