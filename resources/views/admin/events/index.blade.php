@extends('admin.layout.crud')

@section('table')

    <article class="table-record">
      <div class="table-title">
        TITULO
      </div>
      <div class="table-data">
        <ul>
          <li><span>Email</span>bolitakinki69@hotmail.com</li>
          <li><span>Nombre</span>Carlos</li>
        </ul>
      </div>
    </article>
@endsection

@section('form')
  <form>
    <div class="form-element">
      <div class="form-element-label">
        <label for="name">
          Nombre
        </label>
      </div>
      <div class="form-element-input">
        <input type="text">
      </div>
    </div>
    <div class="form-element">
      <div class="form-element-label">
        <label for="email">
          Email
        </label>
      </div>
      <div class="form-element-input">
        <input type="email">
      </div>
    </div>
    <div class="form-element">
      <div class="form-element-label">
        <label for="password">
          Contraseña
        </label>
      </div>
      <div class="form-element-input">
        <input type="password">
      </div>
    </div><div class="form-element">
      <div class="form-element-label">
        <label for="confirmar-password">
          Repetir contraseña
        </label>
      </div>
      <div class="form-element-input">
        <input type="password">
      </div>
    </div>


  </form>

@endsection