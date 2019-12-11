<div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Nowy rachunek:</h3>
                </div>
                <div class="module-body">

                    <br />
    <?= form_open('bill/insert') ?>
    <div class="module-body">
                    <div class="control-group">
                        <label class="control-label" for="date">Data wystawienia</label>
                        <div class="controls">
                            <input type="date" name="bill[bill_date]" value="<?= check_form('bill_date', $form_data) ?>" class="span8 tip">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="netto">Kwota netto</label>
                        <div class="controls">
                            <input type="text" name="bill[netto]" value="<?= check_form('netto', $form_data)  ?>" class="span8 tip">
                        </div>
                    </div>
                    </div>
                
                <input class="form-control" type="hidden" name="bill[uid]" value="<?= $uid ?>">
                <input class="form-control" type="hidden" name="bill[cost_pcent]" value="<?= $cost_pcent ?>">
                <input class="form-control" type="hidden" name="bill[bank_transfer]" value="<?= $bank_transfer ?>">
                <hr>
        <input class="btn btn-hover btn-block" name="add_bill" type="submit" value="Dodaj">
        </form>
                </div>
            </div>
        </div>
       
    </div>

