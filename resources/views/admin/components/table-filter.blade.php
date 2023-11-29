<section class="filter">
    <div class="filter-content">
      <div class="filter-header">
        <h4>Filtraje de tabla</h4>
      </div>
  
      <div class="filter-form">
        {{$slot}}
      </div>

      <div class="filter-footer">
        <div class="filter-option filter-confirm">
            <button>
                <h4>Actualizar tabla</h4>
            </button>
        </div>
        <div class="filter-option filter-cancel">
            <button>
                <h4>Cancelar</h4>
            </button>
        </div>
      </div>
    </div>
</section>