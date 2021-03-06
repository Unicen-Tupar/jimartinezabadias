{include file="src/views/templates/adminHeader.tpl"}

<div class="container py-2">
    
    <div class="row py-3 justify-content-between">
        <div class="col">
            <h3>

                {$category['name']}
                
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <dl class="row">
                <dt class="col-4">Descripción</dt>
                <dd class="col-8">{$category['description']}</dd>
            </dl>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a class="btn btn-primary" 
                href="admin_editar_categoria/{$category['id_category']}" role="button">Editar</a>
            <a class="btn btn-danger"
                href="admin_borrar_categoria/{$category['id_category']}" role="button">Borrar</a>
            <a class="btn btn-secondary" href="admin_categorias">Volver</a>
        </div>
    </div>



</div>


{include file="src/views/templates/adminFooter.tpl"}