
<div class="configurator_items"  data-col="performance" data-step="3">
    <div>
        <a class="btn select_item" href="javascript:void(0)">Pomiń</a>
        <span class="float-right">Aktualna ilość produktów do zaoferowania: {{$productsCount}}</span>
    </div>
    <div class="configurator_content_item">
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/low.png" width="250">
                <input class="select_item" type="radio" name="performance" value="1">
            </label>
            <span>Wybierz tę opcje, gdy nie zależy Ci na wydajności, a smartfona wykorzystujesz głównie do kontaktu z innymi. </span>
        </div>
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/normal.png" width="250">
                <input class="select_item" type="radio" name="performance" value="2">
            </label>
            <span>Wybierz tę opcje, gdy korzystasz z różnych dostępnych aplikacji, jednak nie jest to twój priorytet.</span>
        </div>
        <div class="configurator_item">
            <label>
                <img src = "http://127.0.0.1:8000/storage/high.png" width="250">
                <input class="select_item" type="radio" name="performance" value="3">
                <span>Wybierz tę opcję, gdy zależy Ci na wydajności w grach oraz aplikacjach. Zależy Ci na wydajności smartfonu.</span>
            </label>
        </div>
    </div>
</div>
