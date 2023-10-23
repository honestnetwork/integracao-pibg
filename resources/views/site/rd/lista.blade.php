@extends('site.layout')
@section('title','Lista de Discipulados')
@section('conteudo')

<div class="row">  
    <div class="col-2">
      <a href="cadastrardiscipulado" type="button" class="btn btn-success btn-sm" title="Adicionar Pessoa">
      <i class="bi bi-person-plus-fill"  data-toggle="tooltip" data-placement="top"></i>
    </a>
    </div>
    <div class="col-12">
        <br>
    </div>
</div>
<div class="col-12">
    <div class="card top-selling overflow-auto">
      <div class="card-body pb-0">       
        <h5 class="card-title">Lista de Discipulados</h5> 
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Tipo</th>
              <th scope="col">Esdado</th>
              <th scope="col">Livro</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
              <td>Marielle Cristina Silva Duartes</td>
              <td>Discipulador</td>
              <td class="fw-bold"><span class="badge bg-success">Concluído</span></td>
              <td>RD 1</span></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-secondary">
                    <i class="bi bi-search" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a type="button" class="btn btn-xs btn-warning" href="">
                    <i class="bi bi-pencil" title="Editar Informações" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a class="btn btn-xs btn-danger" href="javascript:func()" onclick="confirmacao">
                    <i class="bi bi-trash" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>             
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
              <td>Artur Martins</td>
              <td>Batismo</td>
              <td class="fw-bold"><span class="badge bg-danger">Parado</span></td>
              <td>O que Jesus Deseja</span></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-secondary">
                    <i class="bi bi-search" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a type="button" class="btn btn-xs btn-warning" href="">
                    <i class="bi bi-pencil" title="Editar Informações" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a class="btn btn-xs btn-danger" href="javascript:func()" onclick="confirmacao">
                    <i class="bi bi-trash" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>             
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
              <td>Breno Vito Duarte</td>
              <td>Liderança</td>
              <td class="fw-bold"><span class="badge bg-primary">Em Andamento</span></td>
              <td>Material I.M</td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-secondary">
                    <i class="bi bi-search" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a type="button" class="btn btn-xs btn-warning" href="">
                    <i class="bi bi-pencil" title="Editar Informações" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a class="btn btn-xs btn-danger" href="javascript:func()" onclick="confirmacao">
                    <i class="bi bi-trash" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>             
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
              <td>David Denis</td>
              <td>Discipulador</td>
              <td class="fw-bold"><span class="badge bg-danger">Parado</span></td>
              <td>RD 2</span></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-secondary">
                    <i class="bi bi-search" title="Visualizar" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a type="button" class="btn btn-xs btn-warning" href="">
                    <i class="bi bi-pencil" title="Editar Informações" data-toggle="tooltip" data-placement="top"></i>
                  </a>
                  <a class="btn btn-xs btn-danger" href="javascript:func()" onclick="confirmacao">
                    <i class="bi bi-trash" title="Apagar" data-toggle="tooltip" data-placement="top"></i>
                  </a>             
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection