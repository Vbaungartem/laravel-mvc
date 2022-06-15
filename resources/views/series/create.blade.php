<x-layout title="Nova Série"> 
    <div class="form-group">
        <form action="/series/salvar" method="post">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </form>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
    
</x-layout>
