<?php

class crud
{
	private $db;
	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}
	


	//****************************|Gerenciamento de Usuários|****************************************//
	public function create($siape, $nome, $email, $senha, $campus, $regime_trabalho, $cargo_dir)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO `docente`(`siape`, `nome`, `email`, `senha`, `campus`, `regime_trabalho`, `cargo_dir`) VALUES(:siape, :nome, :email, :senha, :campus, :regime_trabalho, :cargo_dir)");
			$stmt->bindparam(":siape",$siape);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":senha",$senha);
			$stmt->bindparam(":campus",$campus);
			$stmt->bindparam(":regime_trabalho",$regime_trabalho);
			$stmt->bindparam(":cargo_dir",$cargo_dir);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}


	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM docente WHERE idDocente=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}



	
	
	public function update($id,$siape, $nome, $email, $campus, $regime_trabalho, $cargo_dir)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE `docente` SET `siape`=:siape,`nome`=:nome,`email`=:email,
				`campus`=:campus,`regime_trabalho`=:regime_trabalho,`cargo_dir`=:cargo_dir WHERE idDocente=:id ");
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":siape",$siape);
			$stmt->bindparam(":nome",$nome);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":campus",$campus);
			$stmt->bindparam(":regime_trabalho",$regime_trabalho);
			$stmt->bindparam(":cargo_dir",$cargo_dir);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM docente WHERE idDocente=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
	

	
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['siape']); ?></td>
                <td><?php print(utf8_encode($row['nome'])); ?></td>
                <td><?php print($row['email']); ?></td>
                <td><?php print(utf8_encode($row['campus'])); ?></td>
                <td><?php print(utf8_encode($row['regime_trabalho'])); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['idDocente']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['idDocente']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nenhum usuário cadastrado...</td>
            </tr>
            <?php
		}
		
	}
	






	//****************************|Gerenciamento de Atividades|****************************************//
	public function viewAtv($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>

          <tr>
                	<td>
                		<label for="input<?php print($row['idAtividade']);?>" class="control-label col-xs-11"><?php print(utf8_encode($row['descricao'])); ?></label>
                	</td>
                
               		<td>
     			<input type="number" class="form-control" id="input<?php print($row['idAtividade']);?>" name="<?php print($row['idAtividade']);?>"  
     			placeholder="<?php print($row['limite']); ?>">
             </td>
          </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nenhuma Atividade Cadastrada Nesta Categoria. Fale com o Administrador...</td>
            </tr>
            <?php
		}
		
	}










	//_______ Rad_____________//

	public function createRad($dados,$ano,$turmas,$id)
	{
		try
		{

		    $stmt = $this->db->prepare("INSERT INTO `periodo`(`descricao`, `num_turmas`) VALUES(:ano,:turmas)");
			$stmt->bindparam(":turmas",$turmas);
			$stmt->bindparam(":ano",$ano);
			$stmt->execute();

			$stmt = $this->db->prepare("SELECT * FROM `periodo` ORDER BY `idPeriodo` DESC LIMIT 1");
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($rp=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					$codp=$rp['idPeriodo'];
				}
			}
				

			$stmt = $this->db->prepare("INSERT INTO `vigencia`(`codDocente`, `codPeriodo`, `n_turmas`) VALUES(:id,:codp,:turmas)");
			$stmt->bindparam(":codp",$codp);
			$stmt->bindparam(":turmas",$turmas);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
	

		    $stmt = $this->db->prepare("SELECT * FROM `atividade`");
			$stmt->execute();

			if($stmt->rowCount()>0)
			{
				while($row=$stmt->fetch(PDO::FETCH_ASSOC))
				{
					
		            $idatv=$row['idAtividade'];
		            $d=$dados[$idatv];

					$query = "INSERT INTO `rad`(`codDocente`, `codAtividade`, `codPeriodo`, `carga_horaria`) 
					VALUES($id,$idatv,$codp,$d)";
		
					$conexao=mysqli_connect('localhost','root','','scad');
					if($resultUsuario = mysqli_query($conexao, $query))
					{
						$cadastrado=true;
					}	
					else
					{
						$cadastrado=false;
					} 
				}
						
				if($cadastrado=true)
				{
				   echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php'>
						<script type=\"text/javascript\">
							alert(\"Atividades cadastradas com Sucesso!\");
						</script>";
				}	
							
				else
				{
					echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php'>
						  <script type=\"text/javascript\">
						  	 alert(\"ERRO!! não foi possível realizar o cadastro!\");
						  </script>";
				} 


			}



			return true;
		}

		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}



	
	
		


	//****************************|		Paginação		|****************************************//

	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li><a href='".$self."?page_no=1'>First</a></li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li><a href='".$self."?page_no=".$i."' style='color:red;'>".$i."</a></li>";
				}
				else
				{
					echo "<li><a href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */








	//****************************|Gerenciamento de Categorias|****************************************//


	public function create_cat($nome)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO `categoria`(`nome`) VALUES(:nome)");
			$stmt->bindparam(":nome",$nome);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
		
	}


	public function getID_cat($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM docente WHERE idDocente=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update_cat($id,$nome)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE `categoria` SET `nome`=:nome WHERE idCategoria=:id ");
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":nome",$nome);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete_cat($id)
	{
		$stmt = $this->db->prepare("DELETE FROM categoria WHERE idCategoria=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
	
	
	public function dataview_cat($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print(utf8_encode($row['nome'])); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['idCategoria']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['idCategoria']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nenhuma Categoria Cadastrada. Fale com o Administrador!</td>
            </tr>
            <?php
		}

}


		public function perfil($id)
	{

        $query = "SELECT * FROM `docente` WHERE `idDocente` =:id"; 
		$stm = $this->db->prepare($query);
		$stm->bindparam(":id",$id);
		$stm->execute();
	
		if($stm->rowCount()>0)
		{
			while($row=$stm->fetch(PDO::FETCH_ASSOC))
			{
				?>
				<form role="form">


                       <div class="form-group col-lg-6">
	                       	<label>Nome:</label>
	                       	<input class="form-control" value=" <?php  print(utf8_encode($row['nome']));?>">
                       </div>
                       <div class="form-group col-lg-6">
	                       <label>Email:</label>
	                       <input type="email" class="form-control" value=" <?php  print($row['email']);?>">                             
                    	</div>

                    <div class="form-group col-lg-4">
					   <label>Campus:</label>
                       <select class="form-control" maxlength ="7">
                       		<option value=" <?php  print($row['siape']);?>"><?php  print($row['campus']);?></option>
                       </select>                         
                    </div>

                    <div class="form-group col-lg-4">
                       <label>Siape:</label>
                       <input type="email" class="form-control" value=" <?php  print(utf8_encode($row['siape']));?>">
                    </div>

                    <div class="form-group col-lg-4">
					   <label>Regime de Trabalho:</label>
                       <select class="form-control" maxlength ="7">
                       		<option value=" <?php  print($row['siape']);?>"><?php  print(utf8_encode($row['regime_trabalho']));?></option>
                       </select>                         
                    </div>

                    <div class="form-group col-lg-4">
                       <label>Senha:</label>
                       <input class="form-control" value=" <?php  print($row['senha']);?>" maxlength ="7">                          
                    </div>

                    <div class="form-group col-lg-4">
                       <label>Confirmação de Senha:</label>
                       <input type="email" class="form-control" value=" <?php  print(utf8_encode($row['campus']));?>"> 
                    </div>

                    <div class="form-group col-lg-4">
					   <label>Cargo de direção:</label>
                       <select class="form-control" maxlength ="7">
                       		<option value=" <?php  print($row['cargo_dir']);?>">Não</option>
                       </select>                         
                    </div>

                    <div class="form-group col-lg-5">
					                          
                    </div>
                    
                    <div class="form-group col-lg-3">
					    <input type="submit" value="Editar" class="btn btn-primary">                   
                    </div>
                    
                    <div class="form-group col-lg-4">
					                          
                    </div>


                </form>


                
                <?php
			}
		}
		
		
	}
		
	}
	

?>