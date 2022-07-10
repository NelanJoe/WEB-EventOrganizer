 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0"> <?= str_replace('-', ' ', strtoupper(explode('/cms', current_url())[4]));  ?></h1>
             </div>
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
                     <li class="breadcrumb-item active">
                         <?php $url = str_replace('-', ' ', explode('/cms', current_url())[4]) ?>
                         <?= ucwords($url, " \t\r\n\f\v'") ?>
                     </li>
                 </ol>
             </div>
         </div>
     </div>
 </div>