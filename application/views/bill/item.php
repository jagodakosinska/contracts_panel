<div class="container">
    <h1 class="contract__title"><a href="<?= site_url("employee/show_details/{$employee->id}") ?>" ><?= $employee->fname ?> <?= $employee->lname ?></a></h1>
    <ul class="contract__list">
        <li class="contract__item"><span class="contract__important">Numer rachunku: </span><?= $bill->full_number ?></li>
        <li class="contract__item"><span class="contract__important">Data wystawienia: </span><?= $bill->bill_date ?></li>
        <li class="contract__item"><span class="contract__important">Kwota netto: </span><?= $bill->netto ?></li>
        <li class="contract__item"><span class="contract__important">Koszty: </span><?= $bill->cost_pcent ?> %</li>
        <li class="contract__item"><span class="contract__important">PDF:</span>
        <?php if(!is_null($bill)){ ?> 
            <a href="<?= site_url("pdf/display_bill_pdf/{$bill->id}") ?>" target="_blank" ><i class="menu-icon icon-file" ></i>Otwórz</a> 
        <?php } else { ?> 
            Brak
        <?php }  ?>
    </li>
    </ul>
<hr>
<div class="contract__button"> 
<?php if(is_null($bill->pdf)){ ?>
        <button class="btn btn-default"><a href="<?= site_url("pdf/display_bill_pdf/{$bill->id}") ?>">Generuj PDF</a>
        </button>
<?php } else { ?>
    <a href="<?= site_url('bill/delete/' . $bill->id) ?>" class="btn btn-danger">Usuń rachunek</a>
<?php } ?>

        </div>
</div>

