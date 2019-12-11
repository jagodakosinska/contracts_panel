<div class="container">
    <h1 class="contract__title"><a href="<?= site_url("employee/show_details/{$employee->id}") ?>"><?= $employee->fname ?> <?= $employee->lname ?></a></h1>
    <ul class="contract__list">
        <li class="contract__item"><span class="contract__important">Numer umowy: </span><?= $contract->full_number ?></li>
        <li class="contract__item"><span class="contract__important">Data rozpoczęcia umowy: </span><?= $contract->bdate ?></li>
        <li class="contract__item"><span class="contract__important">Data zakończenia umowy: </span><?= $contract->edate ?></li>
        <li class="contract__item"><span class="contract__important">Tytuł: </span><?= $contract->title ?></li>
        <li class="contract__item"><span class="contract__important">PDF:</span>
            <?php if (!is_null($contract->pdf)) { ?>
                <a href="<?= site_url("pdf/display_contract_pdf/{$contract->id}") ?>"><i class="menu-icon icon-file"></i>Otwórz</a>
            <?php } else { ?>
                Brak
            <?php }
            ?>
        </li>
        <li class="contract__item"><span class="contract__important">Rachunek: </span>
            <?php if (!is_null($contract->bill)) { ?>
                <a href="<?= site_url("bill/index/{$contract->bill}") ?>">>>> Podgląd <<<</a> <?php } else { ?> Brak <?php } ?>
             </li> 
            </ul>
             <hr>
                </div>
                <h3 class="apendix__subtitle">Zmiany do umowy</h3>
                <div class="apendix__container">
                       
                        <?php foreach ($apendix as $apx) { ?>
                        <ul class="apendix__list">
                        <?php if($apx->column_name == 'bdate'){
                            $name = 'Data obowiązywania umowy';
                        } elseif($apx->column_name == 'edate'){
                            $name = 'Data zakończenia umowy';
                        } else {
                            $name = 'Przedmiot umowy';
                        }?>
                                <li class="apendix__item"><span class="contract__important">Data anexu: </span><?= $apx->date ?></li>
                                <li class="apendix__item"><span class="contract__important">Zmmieniana wartość: </span><?= $name ?></li>
                                <li class="apendix__item"><span class="contract__important">Przed zmianą: </span><?= $apx->original_value ?></li>
                                <li class="apendix__item"><span class="contract__important">Po zmianie: </span><?= $apx->changed_value ?></li>
                        </ul>
                        <?php } ?>
                </div>
                        <hr>
                        <div class="employee__button">
                            <?php if (is_null($contract->bill)) { ?>
                                <a class="btn btn-default" href="<?= site_url("bill/add_new/{$employee->id}/{$employee->bank_transfer}/{$employee->cost_pcent}") ?>">Dodaj rachunek</a>
                            <?php } else { ?>
                                <a href="<?= site_url('contract/delete/' . $contract->id) ?>" class="btn btn-danger">Usuń umowę</a>
                                <a href="<?= site_url("contract/edit/{$contract->id}/{$employee->task_contract}/{$contract->uid}") ?>" class="btn btn-info">Edytuj umowę</a>
                            <?php } ?>
                        </div>
