<div class="span9">
        <div class="content">

            <div class="module">
                <div class="module-head">
                    <h3>Podaj dane nowego pracownika:</h3>
                </div>
                <div class="module-body">

                    <br />

                    <?= form_open("employee/{$action}/{$id}") ?>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Imię</label>
                        <div class="controls">
                            <input type="text" name="emp[fname]" value="<?= check_form('fname', $form_data) ?>" class="span8 tip">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nazwisko</label>
                        <div class="controls">
                            <input type="text" name="emp[lname]" value="<?= check_form('lname', $form_data) ?>" class="span8 tip">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Miejsce urodzenia</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <<input class="span8 tip" type="text" n name="emp[birth_place]" value="<?= check_form('birth_place', $form_data) ?>">

                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Data urodzenia</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="date" name="emp[birth_date]" value="<?= check_form('birth_date', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Imię ojca</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[father_fname]" value="<?= check_form('father_fname', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Imię matki</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[mother_fname]" value="<?= check_form('mother_fname', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">PESEL</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[pesel]" value="<?= check_form('pesel', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">NIP</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[nip]" value="<?= check_form('nip', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Miejscowość</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[city]" value="<?= check_form('city', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Dzielnica / Gmina</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[district]" value="<?= check_form('district', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Ulica</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[street]" value="<?= check_form('street', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nr domu</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[street_nr]" value="<?= check_form('street_nr', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nr mieszkania</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[home_nr]" value="<?= check_form('home_nr', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Kod pocztowy</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[zip]" value="<?= check_form('zip', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Poczta</label>
                        <div class="controls">  
                            <div class="input-append">
                                <input type="text" name="emp[post]" value="<?= check_form('post', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Adres koresp.</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[address]" value="<?= check_form('address', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Urząd Skarbowy</label>
                        <div class="controls">
                            <div class="input-append">
                                <input type="text" name="emp[us_address]" value="<?= check_form('us_address', $form_data)  ?>" class="span8 tip">
                            </div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="basicinput">Nr kont</label>
                        <div class="controls">
                            <input type="text" name="emp[bank_acc]" id="basicinput" class="span8" value="<?= check_form('bank_acc', $form_data) ?>">

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Koszty %</label>
                        <div class="controls">
                        <label class="radio inline">
                                <input type="radio" name="emp[cost_pcent]" id="optionsRadios1" value="20" checked="">
                                20%
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="emp[cost_pcent]" id="optionsRadios2" value="50">
                                50%
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Forma zapłaty</label>
                        <div class="controls">
                        <label class="radio inline">
                                <input type="radio" name="emp[bank_transfer]" id="optionsRadios1" value="1" checked="">
                                przelew
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="emp[bank_transfer]" id="optionsRadios2" value="0">
                                gotówka
                            </label>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label">Rodzaj umowy</label>
                        <div class="controls">
                            <label class="radio inline">
                                <input type="radio" name="emp[task_contract]" id="optionsRadios1" value="D" checked="">
                                dzieło
                            </label>
                            <label class="radio inline">
                                <input type="radio" name="emp[task_contract]" id="optionsRadios2" value="Z">
                                zlecenie
                            </label>
                        </div>
                    </div>
<hr>
                    
                            <input class="btn btn-hover btn-block"  name="add_employee" type="submit" value="Dodaj" />
                           
                   
                    </form>
                </div>
            </div>



        </div>
        <!--/.content-->
    </div>
    <!--/.span9-->