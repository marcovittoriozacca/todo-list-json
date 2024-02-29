<div class="row justify-content-center">
    <div class="col-7">
        <div v-if="list.length < 1" class="text-center my-3">
            <h2 class="text-secondary">Ancora nessuna attività da svolgere, aggiungine una!</h2>
        </div>
        <div v-for="(element, index) in list" :key="element.id" class="my-3 d-flex flex-column">
            {{element.task}}
        </div>
    </div>
</div>

