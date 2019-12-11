<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Nowa umowa:</h3>
            </div>
            <div class="module-body">

                <br />
                <?= form_open("contract/{$action}/{$id_contract}/{$task}/{$uid}") ?>

                <div class="control-group">
                    <label class="control-label" for="bdate">Data rozpoczęcia umowy</label>
                    <div class="controls">
                        <input type="date" name="cont[bdate]" value="<?= check_form('bdate', $form_data)  ?>" class="span8 tip">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="edate">Data zakończenia umowy</label>
                    <div class="controls">
                        <input type="date" name="cont[edate]" value="<?= check_form('edate', $form_data)  ?>" class="span8 tip">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="title">Tytuł</label>
                    <div class="controls">
                        <textarea type="text" name="cont[title]" value="<?= check_form('title', $form_data)  ?>" class="span8 tip"></textarea>
                    </div>
                </div>


                <input class="form-control" type="hidden" name="cont[uid]" value="<?= $uid ?>">

                <input class="form-control" type="hidden" name="cont[task]" value="<?= $task ?>">
                <hr>
                <input class="btn btn-hover btn-block" name="add_contract" type="submit" value="Dodaj" />
            </div>
        </div>
        </form>
    </div>

</div>