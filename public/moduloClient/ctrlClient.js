appClient
    .controller('ctrlClient',
        [
            '$scope','modelClient','$routeParams','$timeout','$window','$location','$http',
            function($scope,modelClient, $routeParams,$timeout,$window,$location,$http) {

                $scope.loadClientes = function() {

                    modelClient.consulta_dados()
                        .success(function(data) {
                           //console.log(data);
                            $scope.clientes = data;
                        })
                        .error(function() {
                           /////
                        });

                },
                /* Open modal details clients */
                $scope.detailClients = function(id_cliente) {
                    modelClient.consulta_dados()

                        .success(function(data) {


                            for(var i=0; i < Object.keys(data).length; i++) {

                                if(data[i].id == id_cliente) {
                                    $scope.nome_cliente = data[i].nome;
                                    $scope.documento = data[i].documento;
                                    $scope.endereco = data[i].endereco;
                                    $scope.cidade = data[i].cidade;
                                    $scope.endereco_cob = data[i].endereco_cob;
                                    $scope.cidade_cob = data[i].cidade_cob;
                                }
                            }
                            /* Open modal details */
                            $('#modalDetailsClients').modal('toggle');
                        })

                }
            }
        ]

    );

