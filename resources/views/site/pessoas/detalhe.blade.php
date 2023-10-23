@extends('site.layout')
@section('title','Lista de Pessoas')
@section('conteudo')
  
<section class="section profile">
 
  <div class="row">
    <div class="pagetitle">
      <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/pessoas">Lista de Pessoas</a></li>
        <li class="breadcrumb-item active">Detalhes</li>
      </ol>
    </nav>
    </div>
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">  

          <img src="{{$detalhepessoa -> imagem}}" alt="Profile" class="rounded-circle">
          <h2>{{$detalhepessoa -> nome_pessoa}}</h2>
          <h3>{{$detalhepessoa->tipo->nome_tipo_pessoa}}</h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Visão Geral</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar Informações</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Disciplados</button>
            </li>

            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Decisões</button>
            </li>

          </ul>
          <div class="tab-content pt-2">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">Detalhes de Informações</h5>        
              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nome Completo</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->nome_pessoa}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Sit. Eclesiástica</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->situacao->nome_situacao}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Endereço</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->endereco}}, {{$detalhepessoa->bairro->nome_bairro}}, {{$detalhepessoa->estado}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Telefone</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->telefone}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->email}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nome do Pai</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->nome_pai}}</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Nome da Mãe</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->nome_mae}}</div>
              </div>              

              <div class="row">
                <div class="col-lg-3 col-md-4 label">PGM</div>
                <div class="col-lg-9 col-md-8">{{$detalhepessoa->infopgm}} </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Lider</div>
                <div class="col-lg-9 col-md-8"> </div>
              </div>
            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

              <!-- Profile Edit Form -->
              <form>
                <div class="row mb-3">
                  <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                  <div class="col-md-8 col-lg-9">
                    <img src="{{$detalhepessoa->imagem}}" alt="Profile">
                    <div class="pt-2">
                      <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                      <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nome Completo</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="fullName" type="text" class="form-control" id="fullName" value="{{$detalhepessoa -> nome_pessoa}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Situação</label>
                  <div class="col-md-8 col-lg-9">                    
                    <select class="form-select" aria-label="Default select example" name="situacao">
                      <option selected="{{$detalhepessoa->situacao->id_situacao_pessoa}}">{{$detalhepessoa->situacao->nome_situacao}}</option>
                      @component('components.MenuSituacaoPessoa')
                          
                      @endcomponent
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">Tipo Eclesiástico</label>
                  <div class="col-md-8 col-lg-9">                    
                    <select class="form-select" aria-label="Default select example" name="tipo">
                      <option selected="{{$detalhepessoa->tipo->id_tipo_pessoa}}">{{$detalhepessoa->tipo->nome_tipo_pessoa}}</option>
                      @component('components.MenuTipoPessoa')
                          
                      @endcomponent
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="endereco" class="col-md-4 col-lg-3 col-form-label">Endereço</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="endereco" type="text" class="form-control" id="endereco" value="Lueilwitz, Wisoky and Leuschke">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Telefone" class="col-md-4 col-lg-3 col-form-label">Telefone</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Telefone" type="phone" class="form-control" id="Telefone" value="{{$detalhepessoa -> telefone}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="Email" type="email" class="form-control" id="Email" value="{{$detalhepessoa -> email}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="pai" class="col-md-4 col-lg-3 col-form-label">Nome do Pai</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="pai" type="text" class="form-control" id="pai" value="{{$detalhepessoa -> nome_pai}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="mae" class="col-md-4 col-lg-3 col-form-label">Nome da Mãe</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="mae" type="text" class="form-control" id="mae" value="{{$detalhepessoa -> nome_mae}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Job" class="col-md-4 col-lg-3 col-form-label">PGM</label>
                  <div class="col-md-8 col-lg-9">                    
                    <select class="form-select" aria-label="Default select example" name="tipo">
                      <option selected=""></option>
                      @component('components.MenuPgm')
                          
                      @endcomponent
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Salvar Mudanças</button>
                </div>
              </form><!-- End Profile Edit Form -->

            </div>

            <div class="tab-pane fade pt-3" id="profile-settings">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>  
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">  
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Discipulo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                      </tr>
                    </thead>
                    <tbody>                      
                      @foreach ($detalhepessoa->RdMestre as $item)                                               
                      <tr> 
                      <td>{{$item->discipulo->nome_pessoa}}</td>
                      <td><span class="badge bg-{{$item->EstadoRd->cor_estado_relacionamento}}">{{$item->EstadoRd->nome_estado_relacionamento}}</span></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-xs btn-secondary" href="{{route('site.rds.detalhe', $item->id) }}">
                            <i class="bi bi-search" title="visualizar" data-placement="top" ></i>
                          </a>
                          <a type="button" class="btn btn-xs btn-warning" href="{{route('site.rds.detalhe', $item->id)}}" data-toggle="modal" data-target="#editdecidasao">
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

            <div class="tab-pane fade pt-3" id="profile-change-password">  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body pb-0">  
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Decisão</th>
                          <th scope="col">Data Decisão</th>
                          <th scope="col">Ações</th>
                        </tr>
                      </thead>
                      <tbody>                      
                        @foreach ($detalhepessoa->decisao as $item)                                               
                        <tr> 
                        <td>{{$item->tipodecisao->nome_tipo_decisao}}</td>
                        <td>{{$item->date_decisao}}</td>
                        <td>
                          <div class="btn-group">
                            <a type="button" class="btn btn-xs btn-warning" href="{{route('site.pessoa.editdecisao', $item->id) }}" data-toggle="modal" data-target="#editdecidasao">
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

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
  <div class="modal fade" id="editdecidasao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
</section>


@endsection

