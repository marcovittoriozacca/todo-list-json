<div class="row justify-content-center py-3">
    <div class="col-6">
        <input type="text" name="todo" id="todo" class="form-control"
            v-model="elementToAdd"
            @keydown.enter="addElement"
        >
    </div>
    <div class="col-1">
        <button class="btn btn-primary"
            @click="addElement"
        >
            Aggiungi
        </button>
    </div>
</div>