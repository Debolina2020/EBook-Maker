<?php
 require "./includes/common.php";
 if (isset($_SESSION['email'])){
     header('location:flip.php');
}?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youth Reader</title>
        <!--link of minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jquery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--minified javascript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .content{
    min-height: 600px;
}
            #banner_image{
                padding-top: 75px;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcReFt37qpcy3mpefsTBTp7niuyDYXSE3_ceDg&usqp=CAU")no-repeat center center;
                background-size: cover;
            }
            #banner_content{
                position: relative;
                padding-top: 3%;
                padding-bottom: 4%;
                overflow: hidden;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0,0,0,0.7);
                max-width: 660px;
            }
            .container{
                width: 90%;
                margin: auto;
                overflow: hidden;
            }
            /*.items{
    width: 30%;
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    float: left;
    margin-left: 1%;
}
.caption{
    color: #000;
    padding: 0px 10px 10px;
    font-weight: bold;
    text-align: center;
}*/
            footer{
                padding: 10px 0px;
                background-color: #101010;
                color: #9d9d9d;
                bottom: 0;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
        require "./includes/header.php";
        ?>
        <div class="content">
            <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <h1>Welcome to Youth Reader</h1>
                    <br>
                    <a href="flip.php" class="btn btn-danger btn-lg active">Create An eBook Now</a>
                </div>
            </div>  
            </div>
            <!--<div class="container">
                <div class="row">
                    <div class="text-center"></div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="data:image/jpeg;base64,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" alt="">
                            <div class="caption">
                                <h2>Watches</h2>
                                <p>Original watches from the best brands</p>
                            </div>
                        </a>
                    </div>
                    <div class="text-center"></div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEA8PDhAQEBUWFRAPEA8QDxUQFRUYGBUXFxURFRUYHSggGBolGxcVITEhJykrLi4uFx8zODMsNygtLisBCgoKDg0OFRAQFy0dHR0tLSstLS0rLS0tLS0tLSstLSstLSstLS0tLSstLS0tLS0tLS0rLS4tKy0tLS0tLS0rLf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBQYHBAj/xAA+EAACAQIDBgMECQMDBAMAAAABAgADEQQSIQUGMUFRYRMicYGRobEHFCMyQlJiwdEzcvBTguGSorLCFSTx/8QAGAEBAQEBAQAAAAAAAAAAAAAAAAECAwT/xAAgEQEBAQEAAgICAwAAAAAAAAAAARECAyExQRJRBDKB/9oADAMBAAIRAxEAPwDrkUnaKZEbQkrRShQjhKhQjhAUUcICijtC0BQjtC0IUU1nevfKjgG8Lw2q1SocKDlUAkgFm9h0AnP8ZvXj8ezUvEFNbB/Dp+RQoubk/ebgOfTSNHWW2vhQSpxFG/MeKv8AM9SuCAQQQdQQbg+2cNr+OPEy2Ksy0yaS5abEAZQNBr/zNm3K2u9LE0qLVAFq3VqRGVVazG6kk3NwNRxzW6WaOmRGStI2hSikssMsCMUnliywIRSzJFklFcJPJFkkMVxGW5IikpikyJlxSRNOQxQYjLikiVgxTCWWEJTGbIkbScVplUbRWk7RWkEbQtJWhKIwjhKFFJQgRhHCApr++m3PqeHJW/iPdKZFtCNS2txoOxmwzk+/OLNfGVAT5KX2SDlp98+pa/uEDVNpbTbGOztc1EXzXYuWS5YMCeJW5B7W6GeLaJpOaZworUWVBmdiPv21y2JJB1425TH45mpVVq0SQb+UjiOk92FxAq2Ngr/jUL5WHN0Xt+JByuQOQMtvwe4+JqUFNTHFGIFQKKWZQSBzzcdBwHKa1X3droHq1WqVno1Go1CPMigKuR+OYaE8dLW7yeM35xaUhTTEhQAiqEVGawUBVGZSRpbnPNuptJ6j1fFJKuHFRjUcAkgtdiDdjbNe+mvPhJN+1ufTbNzN9mwpFDFFnong33mpen5l7cuXSdP2ZtbD4kFsPVWpa1wNGHqp1E4820qdCoqJhqV0BR2ZSMx8twQSToRzJ569fZseulD6tilZKGViXaoXzOODIABY0262NvUEsNdihPPs/G069JK1I5lYAjt1U9COBE8m19vYbC2Wq93P3KFMGpVb0Qa+06Sqyci7hRdiAOZJsPfNafeSpkNSoqYVOQqkM49bHLcjlrOcbf2zUr1X+2eot/IXGW47Ly9wv2k0dgobWw1R/Dp16TP+QOCT6dfZPZPnvx2BBuQQQQQbEEcLHkZ0fc/fkVMuHxrANoExB0DdFqdD34HtzDfIo4pQRQhAiZEyRiMCBkDJmQMCEI4QM3CSigK0VpKECMUlFAUUlFAUI4QFFHCApxne9TSrYkuGI8Rna3EqXu9u9s07NOa70BateseYYi/pp+0DmuI8As3h1VqKAWVjZTYa3IPAgdLzA12If7Ji9iD5STlPI5uR79pt+K3dwxa7UgDx8rMoPewNpOrhsPRpMGCU6fPkP/2GWuUNnLir1CAtQHzougqX1zqOT8bgaHlY6HObt4hKLmwCiwyNyVrkC55XuRfqbcSJqtXaWUutAtlJ0ZgL6EajpwHuEzGHweIxVE4in/UW6m2njKeII4Fvn66mDK43aNAuDVSqCDatVFTxWew0OV7WOnW3ynr2JjsVig1DZ31ggMytWrOooU6Z4BgVPmt+Fdefot0Nxa2IRa+OZ6VI2ZKKt9pUHK9/6S/93poZ0zCYVKSCjh6YREBtTproo5nT4ky7nwl5nX9o0JaOM2c3gfWHp0qts+Ipm2Yga5Qb+G3U6mwvewNs7sfwwj06KpRrkE+I16ni8/EDMczd1JJHcWJzGMoJVRqdRQyniD8CDyIOoI4TTMfhamDIDZnolh4dRdGptytbgw5W48vynLbDbZ+sCqVxRYuPzG4t1Xll9J4S4t5vf0/4m8pVo46mtHElc5/oYhbAP+wbqvBuI6ChqOzdnDPWYVag4ZrMQf0rwX14940xrA2TiGpNW8F8gFy5FtOtjqV/Va0xoa3ce+ZPbu/9eqGXDpkXgbC7ETC4ZrIt1y6AZSb27XlR0Hc3fg0MuHxZL0uCVeLU+x5snxHwnT6dRWAZSGBAZWBuCDwIPMT5satY2nSPol3gZjUwNQ3ABrUL8tfOnpqGH+6FldNiihKAxGORMBGQMmZEwIwhCBm4QhAIo4QFFHCAoo4QFFHCAoo4oEXawJ6AmcmxtYl2bqST7Z1LaLWo1T+h/wDxM5JijqYGO2sGKko5Q68NJou1KNQtd2ap0LPmt6A8Jum06tl/aadjq12hljsNTu1uHAenmH8TqOx3RaaIoAAGlpzN3s7EdU+Rm7bv4i9MXhY27A416B0uyE3ZOn6l79ptOzdoU8pYeZW1uvHT8Op01seoInOKu1XysaFGricpsfCXNbS+vw98xWx96alKsxANmP2mGYZexZL/AIh8Zm2R0nHV+I65i8P98rclSuey2W7AnyAcu3SYuuiurK4DKQQykXBB5ES/Y+3FqLTqI5dLqUuT5LEZvLyNri3EXnorYUVA70FYhWCcPvCxOfsdOHcc+NYcy3p2PWoU3OHLmmxDEA3ZSGBuT6geb366nUqlIk5qzkk8r3JnUt4sX4eGrv8AoYD1IsPnORhr8dZWa9JrW0QZfnK0xB1U8uHof8+ErvK6o1Vh/afbw+PzlRe9SbX9Gyt/8nhCt+Na/p4NS95q1Klew6kAe2di+jrdZ8NfFV1yOy5KdM/eUGxLMORNgLceMixvkJGO8NCIwvFADImOIwFCEIGbhCEAhCEAhCEBRRxQCKOKAojGZEwPJtU/YVv7H+RnJsVxnQ9594cNQpVaTVA1QqyimnmIJH4uS+2cnxm0iScunxhKpxmDq1b5BpzYmwHfvNdx279fipQ8wNV91xMu+Kb8x98Zx7NYOxNtASTp7OXshGrrs+pch/Ibg2Op0FtJmcMWQBeXMZnW/tUieytTFQEEXFr3AvYdew7zGYgVMOwWp5lIDA3BIB4cOB7GF+GT2fUqgjwnztckUKtytv0OTdTboQ3eZiucNjKZDrlK3D3W9WjbncW8SmOv31A4sLka0GBAIPcET20q7VCDmCVUF0qHy5wovkY3AAAF78Zy78Uvueq9Ph/k9c3OvcebC7VxGzq9ifERrXN7rUXkwPX9Xv5idHwG2UxNFTSfMlycp4q1tQRyM5/jatPEUMjcCfs9f6NQ2uO1NuYHAkEDWwwOzdp18DXYDQqclSmx0YDkf2bv0ji+jz8SX8p8Vu30g4zLhwl9XcD2DU/ITnqNMzvdtlcSaJS9gpJU8VJ5HvpMCjTq8tekGTW3P/O8rpqW0AvPQlHrr8v+YZdL+iTDYB81TV8UnFaoH2Y1GakPgW4+nPp95867GxD4avTxFFrOhzW4BhzQ+o0ne9kbTp4mjTr0jdWF+4PNT0IOkOkZC8LyAMd4EoorxXgOKEUAhCEDOQhCAQhCAQhCAjFHEYBIsQASdBxJOkwW3N5lw4Ip02qtyP3E95+97PfOa7e3nxOIJWs5Uf6SjKo9nP23gdL2hvXg6QNqqVG5IjD4twE0TeHe3GVbqpFJPy0jqR+p+J+AmmVcRKhjmU8dOn8Qmra2IJnlqVO8srEOMy+6eFnhFjPKmeQNSVs0qPfs7ab0WupsCCpuLix6jmJHEKGBB4H4GY8tLKNb8J9n8SGvLTqmi5Rvun/MwnsqVOftnnxiZhbmNQes8mGr6ZTy4ekK92Px+dixULmVVcDgSBbMBwHp69ZPG4Fq1HxmBDqAc3+ohJCt6gqyH0ExlVp6BjnegKJP9M50POxFmX0sF9MneY69e47+HqdbxVGI8M01IPm/y4MtwmAuFdjoRcAfzMcxFyPb/wAGe7ZrVVUsAGTMVNMtZiQAWKDqAR6zUc+/l7zTsLLpblbT2zJ7U2LVw4pO5RkqgtSdGuCAFJvpobMvvngoV0cXQ36jgR6jlLLm1r6Xva+l+tusrCrLM3sLbdahpSqMmt7D7reo4XmDr11QXY27cz7J5sPj8xYgWClSL8Tx0gdt2BvdSrAJWIpv+Y6K38GbOrTg6uym3uP7Tad3d7KlCyP50/ITw/tPL04Q1rqF4Xnh2btSjiFzUmB/Mp0ZfUT2XgShIwgOEV4oGfhFCA4QhAIoQgE1veHaLeZKbleI8vG/ciZraeMWjSeoxC2BtfmbGwnFatElTWr1Er1XZqmfKWVLnRad9NBpft63gztdqlQMtR2BHM6+0jmO81baGZWNOsP7WGpA6qeY7fKXUNpVaOrM1alfrepT/UjfNToZfjqqVkF7EfeR14EfmXp0K8pBrWIUqeNwdQRwI6ieVnmWr4e6ke3/AJEwlW4NjNM1YlbKdPbDE/mXgZ5i0dOrbQ8D/l4Qi0gXkamhkC0qJlpG8jeLNIPZUxCGkoy2cMxLdR0J/wA4DvMTiNGzCXu0oqG4IgRZ5WKljeRUwIhqeqhU4z37Kxb0r1EK2UoSGy69hfUNa9iOXpPPVw/lD9vlcftPOomea6eTmz/WRwbEszksSWLZmPmNze5PWX18XVzKi3YnQKqgkk8ALDjKcILCPD02eozqbBLgte1uR19vymnKPdtLd6tSw9LFVGQiocoCvnZTa5VzwDdryrd3ZxrYijS1N3Ut6Ld2+CEe2ZtdpUcMPqdVGelUp0q1YsbkuVuHB4IbEa9gJn9ytiCljMRrcU1IU9qhGQ/9Ib3wv2p2ls3Kx00mIr0yp7cjOi4/BBgdJq2M2fqQRcTUml9MXgdovTYMrsjD7rqbEfyO03/d7fJKhWli8tNzYLVGiP6/lPwnM8ZQNNsp4cQeohSr8m1EzYSu9Xhecv3a3tqYW1OuWq0eAbi9P0/Mvb3dJ0nDYlKqLUpsHVhdWU3BENL4orwgZ+OKEBwihAcUIQOafTbjnp0MLTUkCo9QNbsB/JlW5op1sF5kUgs6EEcgbD4Wl3064QtgaFYD+nWAPYOpF/eB75gPoqx+aliaJOquKqj9Lj+VaIlefeXYj4VvEpEmmxt1yn8rduhmt/XRRYaEU2++L3ysfxr0HIidgxVFai5HGZW8rA95yverZLYeo1NtVNzTY/iXp6jgYsJSOJCMLm6nUGY7a1IXzLMXQxJymix4Xamf2g+MYrY+/wCUhpEyBaIvcX6/4RImVhJ3kSZBuESNcQJ3ivAmK8AbUTzky4mVleMCpF1MtFI8hf01k6Seb2T2YPHVMOXek2RijU81gdGte1xp6jX3wryV6lqSjs3/AJNPJQSNze1uAAA9BLqS2meecdPL5PyyfqY9VGWrtMHCtg8qgtXNZqthe2QDKG6XA0/mV05TXoFXRvQ8ZqucZvbOznxFfCKth4uGwhZvygJao3TQKTOm7oUwyYiva3iVTl/tQBF/9pqu8OCXD4LBG5FR6VDDPc8FbNUYDpxAm97uUAmEw6gZfs1a1rWLeYj3mSN/b01KV5jMdgwQdJnck81eneaiVoG18CCLHQjgek1fEKQxUFRbQkrr850fauEuDNK2tgdc44/i7iavtj4Y+mx4E/CZ/dbbtXBVNWz0WP2lMDh+tR+btzmstcc/STo4kjQ8Jhp3rDYlKqLUpsGVgGVhwIMJxCltGooyrVqKNbKtQqNTc6AwhdfSkIoSKcIoRocUIrxow++OyfrmAxeGAuz028P+9fMn/cBOAfR/tX6vjqOc2WpfDVL6WJPkJ9untM+lrz53+lDd84PaNU0wVSv/APaokcmvd1HcNc+hERK6yx+GsxW+OyBisOVX76gvSPfmvoZXuttX61hqdRtHHkqr0ddD7DxHYzMq2ZcvMcPSaqR88ViQxBFmUnQ9uInszoVygcV07g6qfUHT2TMfSZsn6vihXQWWrdj0Dj7w9vH3zVKdW3sOYeh4iEsWUH1Knn85aZ5sWLMGHPzCXhrgGQpypTZiJO8rqDnAsLRXkbxQh3llJbg/5ylUyuy8A9QBUUkk3PQDqTylgt2ds4vrbtLdtbuMq+NTuQB5042/UO3UTb8Bs5aaqvGw4/vPZknWcevbF6/TkwSTUTZ95d3yl61BfLxemB93qyjp25fLWknOzFntcgl2PAy36WHsldAXYe+ZLC0FdXzC/DnbjeZrcZ7atWrj8ZQwVQ5ct87jQa0gbgDhYaD1nU6SgAW4cAJoeyMEv/yteoeIpqQOt0pa/P3zeqbRI1q4yp1loiIlGKxdG81jauD46TdKyTFY7C3BjUscm2zh2pPmX7rGxB1Abr7Z5PG7L7pu+2tlh1ZSND8OhmhlWUsjcVJVvURUXCueghKbQmVfV0JGO8jR3hFCARXheImAEzUvpK3d+v4JhTF61K9ah1JA81P/AHD4gTayZEmB867k7dOGxIVzalVsj3/A40Un5e7pOs35j2TRfpQ3TGHrnFUl+wrnzgDSnUPH0DcfW/KZDcnbZqIMNWPnUeRj+NR/7DgZvWcenf3Z/wBawVYAedB4yeq8QPUXnEkbgfZ7DPoypTVgQeYsf4M4FtjAeDWr0vyu6j0B0+EgpZM1Luh+EWHbS3Se3Z9HMrdGX48JQ2HyD5wlQvJUxc2kJfhF1v0BMIoEnSpMxCqCSdAALk+yZvZO7datZn+zTqRqfQfuZuezNkUaAtTXXm51Y+p/abnFrN6a1sfdJms+I8o/0wdT6nl7PhNww2FVAFRQo6AWl9NJ6EpzpJIz7rzilJijPWlKXLRkvTUjwHD3mt7Y3QSoS9L7Njqcoup9V69xN4WjLFoSauOV4fdLF57eS3DOGNh3sReerePYdTB4dHovcklajFQdbErYchx+E6eKQmI3uwobA4gEfhDD1BBmbjUjAbHrs+PwrA/fw9CqT1DUWBHvWb/Tmk7iYNK1LCYolg9GnVwuQWsRnaxPcLa3rN2QTEaXrHEslaUVss81alPYRIMsitfx+EuDOe72bLKnxkHDSpbmOTez5TrFejeYDauBuDpLGbHI8whM3it2Hzt4dQKt/KpW9u3pCPxTX0hCKKYbSvCRvHeARGEUAMiYzFA8u0sFTr0no1lDI4KsD8x35zjW3Ng1sBWsLst81GoNCQOBH6xwI5/Ptpng2rs+nXpmnVUMp5Hl3HQwNE3d28ldctU5XGmYcDbn29OU51vtTU4rEspBBbiOflH7zoGP3L8Ny1NiR3YqfRrA3mtYnd7GCqzXoBb3FTzMy9wpUi/Sa9s1r+zcCyhAR+Em3tnn2hQst+83KngxeyAmyrTW+psObE8ydZBN3Fdga5uBqEU2BP6j+wmpzazbI0nZ2yqtdrUlJ6sdFHqZu2xt3KdAAvao/EsRoOgA/eZyhhlQBUUKBoAosJetOdJzI522qVpy5KUuSlL0pS2kimnSnoSlLkpS9Kcxa3IqSlLVpy5acmEk1pUEkwstCxhZNVWFmE3yxSU8JVVmAZxlRSdTqL2HpPXvNtb6nh2r5M5uqKOAu2gJ7TkO0drPiK4au+Z2BAHJdOAHIdpLRtf0YY2z4jDE/iFVf9wsQP8ApHvnR1E5R9H1B2x6svAU6mf00y/G060sipKJO0SyUBWiIk4iIVQ6zx4mhcTIESt1gazU2eLnSEzzUIS6zjbIoQmGhC8IQFeEIQEYoQgKJhCEDx4qgGEwGNwcITXNZ6YqpQlfhQhOsrnYktKXJShCEXpSl6U4oTLa9UlipCEhFgWSAhCRo7QtCEDBb9YXxNn4gDiArg91YGcXo4AUl8Wobv8AeHzjhJVjYtzcd4OOot+Fz4bej8PjadjWEIImJMRQgpxGEICMjaOEKgRCEIR//9k=" alt="">
                            <div class="caption">
                                <h2>Cameras</h2>
                                <p>Choose among the best available in the world</p>
                            </div>
                        </a>
                    </div>
                    <div class="text-center"></div>
                    <div class="col-md-3 col-sm-6">
                        <a href="#">
                            <img src="data:image/jpeg;base64,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" alt="">
                            <div class="caption">
                                <h2>Shirts</h2>
                                <p>Our exquisite collection of shirts</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>-->
        </div><?php
        require "./includes/footer.php";
        ?>
    </body>
</html>