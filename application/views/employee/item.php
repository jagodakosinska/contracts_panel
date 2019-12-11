<div class="container">
    <h1 class="employee__title"><?= $employee->fname ?> <?= $employee->lname ?></h1>
    <ul class="employee__list">
        <li class="employee__item"><span class="contract__important ">Miejsce urodzenia: </span><?= $employee->birth_place ?></li>
        <li class="employee__item"><span class="contract__important ">Data urodzenia: </span><?= $employee->birth_date ?></li>
        <li class="employee__item"><span class="contract__important ">Imię matki: </span><?= $employee->mother_fname ?></li>
        <li class="employee__item"><span class="contract__important ">Imię ojca: </span><?= $employee->father_fname ?></li>
        <li class="employee__item"><span class="contract__important ">PESEL: </span><?= $employee->pesel ?></li>
        <li class="employee__item"><span class="contract__important ">NIP: </span><?= $employee->nip ?></li>
        <li class="employee__item"><span class="contract__important ">Gmina: </span><?= $employee->district ?></li>
        <li class="employee__item"><span class="contract__important ">Miasto: </span><?= $employee->city ?></li>
        <li class="employee__item"><span class="contract__important ">Ulica: </span><?= $employee->street ?></li>
        <li class="employee__item"><span class="contract__important ">Nr domu: </span><?= $employee->street_nr ?></li>
        <li class="employee__item"><span class="contract__important ">Nr mieszkania: </span><?= $employee->home_nr ?></li>
        <li class="employee__item"><span class="contract__important ">Kod pocztowy: </span><?= $employee->zip ?></li>
        <li class="employee__item"><span class="contract__important ">Poczta: </span><?= $employee->post ?></li>
        <li class="employee__item"><span class="contract__important ">Adres US: </span><?= $employee->us_address ?></li>
        <li class="employee__item"><span class="contract__important ">Koszty uzyskania przychodu: </span><?= $employee->cost_pcent ?></li>
        <li class="employee__item"><span class="contract__important ">Rodzaj umowy: </span><?= $employee->task_contract == 'D' ? 'dzieło' : 'zlecenie' ?></li>
        <li class="employee__item"><span class="contract__important ">Adres do korespondencji: </span><?= $employee->address ?></li>
        <li class="employee__item"><span class="contract__important ">Nr konta: </span><?= $employee->bank_acc ?></li>
        <li class="employee__item"><span class="contract__important ">Rodzaj płatności: </span><?= $employee->bank_transfer == '1' ? 'przelew' : 'gotówka' ?></li>
    </ul>
    
    <div class="employee__contracts"> 
    <p> Umowy pracownika:</p>
   <ul>
   <?php if(!is_null($contract)){ 
       foreach($contract as $cont){ ?>
        <li class="contract__item"> <a href="<?= site_url("contract/get_by_id/" . $cont->id) ?>" ><?= $cont->full_number ?></a></li>
      <?php } ?>
   </ul>
   <?php } else { ?>
    <p>brak umów dla tego pracownika w wybranym okresie <?= $month . "/" . $year ?></p>
 <?php  } ?>
 </div>
    <hr>
    <div class="employee__button">
        <a class="btn btn-secondary" href="<?= site_url("contract/add_new/{$employee->id}/{$employee->task_contract}") ?>">Dodaj umowę</a>
        <a href="<?= site_url('employee/edit/' . $employee->id) ?>" class="btn btn-info">Edytuj dane pracownika</a>
    </div>
</div>