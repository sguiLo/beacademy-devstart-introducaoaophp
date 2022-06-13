<h1>Listar Contatos</h1>


<table class="table table-hover table-striped mt-1 table-success table align-middle">
    <thead class="table-dark">
            <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>  
            </tr>
    </thead>
    <tbody>
        <?php 
            foreach ($contatos as $cadaContato){
                $partes = explode(';', $cadaContato); 

                echo '<tr>';
                    echo '<td>' . $partes[0] . '</td>';
                    echo '<td>' . $partes[1] . '</td>';
                    echo '<td>' . $partes[2] . '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>