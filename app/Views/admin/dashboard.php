
<?=$this->extend('layouts/master') ?>

<?= $this->section('content') ?>

<h1>Admin Dashboard!!</h1>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script type="text/javascript">
var flag='<?= session()->getFlashData("success")?>';
alert(flag);
if(flag==1)
{
    toastr.options = {
  
  "positionClass": "toast-top-right",
  "showDuration": "100",
  "hideDuration": "500",
  "timeOut": "1000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};

toastr.success("Login Successful");
}
</script>


<?= $this->endSection() ?>


