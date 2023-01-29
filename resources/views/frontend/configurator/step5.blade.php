<div class="configurator_items"  data-col="battery_capacity" data-step="5">
    <div>
        <a class="btn select_item" href="javascript:void(0)">Pomiń</a>
        <span class="float-right">Aktualna ilość produktów do zaoferowania: {{$productsCount}}</span>
    </div>
    <div class="configurator_content_item">
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/battery1.png" width="150">
                <input class="select_item" type="radio" name="battery_capacity" value="1">
            </label>
            <span>Wybierz, gdy: Sporadycznie korzystasz z telefonu, a bateria nie ma dla Ciebie znaczenia.</span>
        </div>
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/battery2.png" width="150">
                <input class="select_item" type="radio" name="battery_capacity" value="2">
            </label>
            <span>Wybierz, gdy: Zdarza Ci się grać oraz korzystać z aplikacji. Potrzebujesz mieć dobry stan bateri przez kilka dni.</span>
        </div>
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/battery3.png" width="150">
                <input class="select_item" type="radio" name="battery_capacity" value="3">
            </label>
            <span>Wybierz, gdy: Codziennie grasz lub korzystasz z aplikacji. Często korzystasz z wifi i nawigacji. Pozatym potrzebujesz mocnej bateri,aby mieć telefon w gotowości.</span>

        </div>
    </div>
</div>
