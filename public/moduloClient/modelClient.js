appClient
    .factory('modelClient', function ($resource, $http) {
        return {
            consulta_dados: function () {
               return $http.get('rotas.php/buscaClientes');
            }

        }

    });
