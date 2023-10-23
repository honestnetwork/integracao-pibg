@extends('site.layout')
@section('title','Lista de Pessoas')
@section('conteudo')

  <div class="col-2">
    <a href="cadastrarpessoa" type="button" class="btn btn-success btn-sm" title="Adicionar Pessoa">
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
        <h5 class="card-title">Lista de Pessoas</h5> 
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Tipo</th>
              <th scope="col">Estado</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pessoas as $pessoas)
            <tr>
              <th scope="row"><a href="2"><img src="{{$pessoas->imagem}}" alt=""></a></th>
              <td>{{$pessoas->nome_pessoa}}</td>
              <td>{{$pessoas->tipo->nome_tipo_pessoa}}</td>
              <td class="fw-bold"><span class="badge bg-{{$pessoas->situacao->cor_situacao}}">{{$pessoas->situacao->nome_situacao}}</span></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-xs btn-secondary" href="{{route('site.pessoa.detalhe', $pessoas->id) }}">
                    <i class="bi bi-search" title="visualizar" data-placement="top" ></i>
                  </a>
                  <a type="button" class="btn btn-xs btn-warning">
                    <i class="bi bi-pencil" title="Editar Informações" data-placement="top"></i>
                  </a>
                  <a class="btn btn-xs btn-danger">
                    <i class="bi bi-trash" title="Apagar"></i>
                  </a>             
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Destinatário:</label>
              <input type="text" class="form-control" id="recipient-name" value="">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mensagem:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Destinatário:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mensagem:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>
@endsection

