<?php // Componente: modal de servicio reutilizable ?>
<div class="modal fade" id="seModal" tabindex="-1" aria-labelledby="se-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="se-modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img id="se-modal-image" src="" alt="" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-6 p-3">
                        <div id="se-modal-desc"></div>
                        <ul id="se-modal-list" class="mt-2"></ul>
                        <a id="se-modal-cta" class="btn btn-primary mt-3" href="contacto.php">Solicitar cotización</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
