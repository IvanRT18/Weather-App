<?php

class climaModelo{
    private $_ides;
    private $_idmun;
    private $_nes;
    private $_nmun;
    private $_dloc;
    private $_ndia;
    private $_tmax;
    private $_tmin;
    private $_desciel;
    private $_probprec;
    private $_prec;
    private $_velvien;
    private $_dirvienc;
    private $_cc;
    private $_lat;
    private $_lon;
    private $_dh;

    public function __construct($ides, $idmun, $nes, $nmun, $dloc, $ndia, $tmax, $tmin, $desciel, $probprec, $prec, $velvien, $dirvienc, $cc, $lat, $lon, $dh)
    {
        $this->setId($ides);
        $this->setIdmun($idmun);
        $this->setNes($nes);
        $this->setNmun($nmun);
        $this->setDloc($dloc);
        $this->setNdia($ndia);
        $this->setTmax($tmax);
        $this->setTmin($tmin);
        $this->setDesciel($desciel);
        $this->setProbprec($probprec);
        $this->setPrec($prec);
        $this->setVelvieb($velvien);
        $this->setDirvienc($dirvienc);
        $this->setCc($cc);
        $this->setLat($lat);
        $this->setLon($lon);
        $this->setDh($dh);
    }

    public function getId(){
        return $this->_ides;
    }

    public function setId($ides){
        $this->_ides = $ides;
    }

    public function getIdmun(){
        return $this->_idmun;
    }

    public function setIdmun($_idmun){
        $this->_idmun= $_idmun;
    }

    public function getNes(){
        return $this->_nes;
    }

    public function setNes($nes){
        $this->_nes = $nes;
    }

    public function getNmun(){
        return $this->_nmun;
    }

    public function setNmun($nmun){
        $this->_nmun = $nmun;
    }

    public function getDloc(){
        return $this->_dloc;
    }

    public function setDloc($dloc){
        $this->_dloc = $dloc;
    }

    public function getNdia(){
        return $this->_ndia;
    }

    public function setNdia($ndia){
        $this->_ndia = $ndia;
    }

    public function getTmax(){
        return $this->_tmax;
    }

    public function setTmax($tmax){
        $this->_tmax = $tmax;
    }

    public function getTmin(){
        return $this->_tmin;
    }

    public function setTmin($tmin){
        $this->_tmin = $tmin;
    }

    public function getDesciel(){
        return $this->_desciel;
    }

    public function setDesciel($desciel){
        $this->_desciel = $desciel;
    }

    public function getPropbprec(){
        return $this->_probprec;
    }

    public function setProbprec($probprec){
        $this->_probprec = $probprec;
    }

    public function getPrec(){
        return $this->_prec;
    }

    public function setPrec($prec){
        $this->_prec = $prec;
    }

    public function getVelvieb(){
        return $this->_velvien;
    }

    public function setVelvieb($velvien){
        $this->_velvien = $velvien;
    }

    public function getDirvienc(){
        return $this->_dirvienc;
    }

    public function setDirvienc($dirvienc){
        $this->_dirvienc = $dirvienc;
    }

    public function getCc(){
        return $this->_cc;
    }

    public function setCc($cc){
        $this->_cc = $cc;
    }

    public function getLat(){
        return $this->_lat;
    }

    public function setLat($lat){
        $this->_lat = $lat;
    }

    public function getLon(){
        return $this->_lon;
    }

    public function setLon($lon){
        $this->_lon = $lon;
    }

    public function getDh(){
        return $this->_dh;
    }

    public function setDh($dh){
        $this->_dh = $dh;
    }

    public function getArray() {
        $array = array();

        $array["ides"] = $this->getId();
        $array["idmun"] = $this->getIdmun();
        $array["nes"] = $this->getNes();

        $array["nmun"] = $this->getNmun();
        $array["dloc"] = $this->getDloc();

        $array["ndia"] = $this->getNdia();
        $array["tmax"] = $this->getTmax();

        $array["tmin"] = $this->getTmin();
        $array["desciel"] = $this->getDesciel();

        $array["probprec"] = $this->getPropbprec();
        $array["prec"] = $this->getPrec();

        $array["velvien"] = $this->getVelvieb();
        $array["dirvienc"] = $this->getDirvienc();

        $array["cc"] = $this->getCc();
        $array["lat"] = $this->getLat();

        $array["lon"] = $this->getLon();
        $array["dh"] = $this->getDh();

        return $array;
    }
}
 


?>