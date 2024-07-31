<?php

namespace App\Model\Entity;

class Organization {

  /**
   * ID da organização
   * @var integer
   */
  private $id = 1;

  /**
   * Nome da organização
   * @var string
   */
  public $name = 'Euller Gomes';

  /**
   * Site da organização
   * @var string
   */
  public $site = 'https://portfolioeuller-euller-gomes-projects.vercel.app/';

  /**
   * Descrição da organização
   * @var string
   */
  public $description = 'Desenvolvedor Full Stack';
}