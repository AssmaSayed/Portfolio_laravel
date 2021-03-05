<section class="container">
  <h1> HEADER</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">LOGO</th>
        <th scope="col">TITRE</th>
        <th scope="col">BUTTON</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbHeader as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->logo}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->button}}</td>

                <td>
                    <form action="delete-header/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
                <td>
  
                  <a class="btn btn-danger" href="/edit-header/{{$item->id}}">EDIT</a>

                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  


    <h1>NAVBAR</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">LI</th>
        <th scope="col">HREF</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbNavbar as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->li}}</td>
                <td>{{$item->href}}</td>
                <td>
                    <form action="delete-nav/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                    
                </td>
                {{-- <td>
                  <a class="btn btn-danger" href="/edit-nav/{{$item->id}}">EDIT</a>
                  
                </td> --}}
            </tr>
        @endforeach
    </tbody>
  </table>  

  <h1>TITRE</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous titre</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dbTitre as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>
                <td>
                    <form action="delete-titre/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  

  <h1> ABOUT TITRE</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">TITRE</th>
        <th scope="col">SOUS TITRE</th>
        <th scope="col">DELETE</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dbTitreAbout as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>
                <td>
                    <form action="delete-titreAbout/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  

  <h1> ABOUT INFO</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">LOGO</th>
        <th scope="col">TITRE</th>
        <th scope="col">TEXT</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbInfoAbout as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->logo}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->text}}</td>

                <td>
                    <form action="delete-aboutInfo/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  
  <h1> END FUTUR</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">SRC</th>
        <th scope="col">TITRE</th>
        <th scope="col">SOUS TITRE</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbEndFutur as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->src}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>

                <td>
                    <form action="delete-endFutur/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  

  <h1> CTA</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">TITRE</th>
        <th scope="col">SOUS TITRE</th>
        <th scope="col">BUTTON</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbCta as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>
                <td>{{$item->button}}/td>

                <td>
                    <form action="delete-cta/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  

  <h1>SERVICE</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">LOGO</th>
        <th scope="col">TITRE</th>
        <th scope="col">TEXT</th>
        <th scope="col">COLOR</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbService as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->logo}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->text}}</td>
                <td>{{$item->color}}</td>
                <td>
                    <form action="delete-service/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  


  <h1>PORTFOLIO</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">SRC</th>
        <th scope="col">TITRE</th>
        <th scope="col">TEXT</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbService as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->src}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->text}}</td>
                <td>
                    <form action="delete-portfolio/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  


  <h1>FAQ</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">TITRE</th>
        <th scope="col">TEXT</th>
        <th scope="col">LOGO</th>
        <th scope="col">DELETE</th>
        <th scope="col">EDIT</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($dbFaq as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->text}}</td>
                <td>{{$item->logo}}</td>
                <td>
                    <form action="delete-faq/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>  


</section>
