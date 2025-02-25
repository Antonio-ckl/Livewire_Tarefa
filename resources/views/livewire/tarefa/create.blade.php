<div class="mt-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="close"></button>
        </div>
    @endif
    <div class="card">
        <h5 class="card-header">Cadastro de Tarefa</h5>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>

                    <input type="text" class="form-control" id="nome" nome="nome" placeholder="Ex.: Tarefa"
                        wire:model.defer="nome">

                </div>
                <div class="mb-3">
                    <label for="data_hora">Data e hora</label>
                    <input type="datetime-local" name="data_hora" id=""data_hora class="form-control"
                        wire:model.defer="data_hora">

                </div>
                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" type="datetime-local" name="descricao" id=""descricao row="5"
                        wire:model.defer="descricao"></textarea>

                </div>
                <div class="mb-3">
                    <button type="submit" class="bnt bnt-sucess">Cadastrar</button>


                </div>
            </form>

        </div>
    </div>
</div>
