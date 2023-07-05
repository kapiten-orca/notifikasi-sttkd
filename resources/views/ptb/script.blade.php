    {{-- Script Data Taruna --}}
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        new Chart(document.querySelector('#taruna_by_provinsi'), {
        type: 'bar',
        data: {
            datasets: [{
            label: 'Taruna',
            data: <?php echo $data["taruna_by_provinsi"]?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
            ],
            borderWidth: 1
            }]
        },
        options: {
            parsing: {
                xAxisKey: 'provinsi',
                yAxisKey: 'total'
            }
        }
        });
    });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#taruna_by_gender'), {
            type: 'bar',
            data: {
                datasets: [{
                label: ['Laki-Laki','Perempuan'],
                data: <?php echo $data["taruna_by_gender"] ?>,
                backgroundColor: [
                    'rgb(78,115,223)',
                    'rgb(255,138,163)',
                ],
                borderColor: [
                    'rgb(78,115,223)',
                    'rgb(255,138,163)',
                  
                ],
                borderWidth: 1
                }]
            },
            options: {
                parsing: {
                    xAxisKey: 'catarJK',
                    yAxisKey: 'total'
                }
                
            }
            });
        });
        </script>
        {{-- Script Pedaftar  --}}
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                new Chart(document.querySelector('#catar_pendaftar_perbulan'), {
                type: 'bar',
                data: {
                    datasets: [{
                label: 'Taruna',
                data: <?php echo $data["catar_pendaftar_perbulan"] ?>,
                    backgroundColor: [
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                    ],
                    borderWidth: 1
                    }]
                },
                options: {
                    parsing: {
                    xAxisKey: 'bulan',
                    yAxisKey: 'total'
                }
                }
                });
            });
            </script>
            {{-- Script Hereg --}}
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#catar_hereg_perbulan'), {
                    type: 'bar',
                    data: {
                        datasets: [{
                        label: 'Taruna',
                        data: <?php echo $data["catar_hereg_perbulan"] ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgb(255, 99, 132)',
                            
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(255, 99, 132)',
                            
                        ],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        parsing: {
                            xAxisKey: 'bulan',
                            yAxisKey: 'total'
                        }
                    }
                    });
                });
                </script>
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    new Chart(document.querySelector('#tarunaBayarUangDaftarTahun'), {
                    type: 'bar',
                    data: {
                        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"],
                        datasets: [{
                        label: 'Taruna',
                        data: [31, 20, 10, 45, 67, 24, 48, 89, 89, 91, 11, 50],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                        y: {
                            beginAtZero: true
                        }
                        }
                    }
                    });
                });
                </script>