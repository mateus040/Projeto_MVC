-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_mvc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_mvc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_cadastro` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema db_cadastro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_cadastro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_cadastro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `db_cadastro` ;

-- -----------------------------------------------------
-- Table `db_mvc`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_mvc`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;

USE `db_cadastro` ;

-- -----------------------------------------------------
-- Table `db_cadastro`.`categoria_produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`categoria_produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_cadastro`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`funcionario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_cadastro`.`pessoa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`pessoa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NOT NULL,
  `cpf` CHAR(11) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `telefone` VARCHAR(11) NULL DEFAULT NULL,
  `endereco` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_cadastro`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `preco` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


-- -----------------------------------------------------
-- Table `db_cadastro`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_cadastro`.`usuario` (
  `id` INT auto_increment NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
