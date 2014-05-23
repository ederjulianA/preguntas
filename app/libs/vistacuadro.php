<?php
class vistacuadro
{
	var $elleft;
	var $eltop;
	var $nombremap;
	var $nombrempr;
	var $id;
	var $i;
	var $imagen1;
	var $imagen2;
	var $imagen3;
	var $imagen4;
	var $imagen5;	
	var $imagen6;		
	var $imagen7;	
	var $imagen8;		
	var $imagen9;			
	var $eslocal;
	var $imgsector;
	var $enlace;
	function cuadropeq(){
			$area='';
			$casa='';
			if($this->eslocal==1){
				$area='<a href="#"><map id="mapeo2" name="'.$this->nombremap.'" >	
				<area id="m'.$this->id.'" class="areamap"  shape="poly" coords="0,16,32,0,63,17,63,34,32,49,0,33,0,16" href="/public/empresa/'.$id.'" style="z-index:'.($this->i+3).';" alt="comentario">	
				</map></a>';
//				function redireccionar(){
//  window.locationf="http://www.cristalab.com";
//} 
				$casa='<h3 class="textolocal" style="position:absolute;z-index:'.($this->i+10).';"><img src="'.$this->imgsector.'" style="z-index:'.($this->i+10).';left:0px;top:17px;height:30px;width:30px;position:absolute;">'.$this->nombrempr.'</h3>';
			}else{
			$this->i=0;}
			$resul='<div style="position :absolute;height:auto;left:'.$this->elleft.'px;top:'.$this->eltop.'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->  
				
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.($this->i+1).';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen1.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.($this->i+1).';"></div>
			</div>'.$area.'</div>';
					$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
				
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen2.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft).'px;top:'.($this->eltop+64).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen3.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';			
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+32).'px;top:'.($this->eltop+16).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen4.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+32).'px;top:'.($this->eltop+48).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen5.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft+64).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen6.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-32).'px;top:'.($this->eltop+16).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.($this->i+1).';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen7.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.($this->i+1).';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-32).'px;top:'.($this->eltop+48).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen8.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			$resul=$resul.'<div style="position :absolute;height:auto;left:'.($this->elleft-64).'px;top:'.($this->eltop+32).'px;" >
				<div style="position:absolute;height:auto;left:0px;height:32px;width:64px;" >
				<!--<img src="imagenes/grandc3.png" style="margin:0px;" > -->   
			</div>
				'.$casa.'
				<div style="position:absolute;height:auto;left:0px;z-index:'.$this->i.';" >
				
				<div class="minicuadro1grande"><img class="objeto" id="i'.$this->id.'" src="'.$this->imagen9.'" usemap="#'.$this->nombremap.'" border="0" style="position:absolute;left:0px;bottom:0px;z-index:'.$this->i.';"></div>
			</div>'.$area.'</div>';	
			
		return $resul;
	}
}
?>