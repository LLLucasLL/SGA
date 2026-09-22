# 🐾 SGA — Sistema de Gestão de Adoção e Proteção Animal

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
</p>

> Sistema web para divulgação, cadastro, adoção e gestão de animais em situação de abandono ou resgate.

## 📌 Sobre o Projeto

O SGA é uma plataforma desenvolvida para conectar pessoas interessadas em adotar, apadrinhar, doar ou apoiar animais em situação de vulnerabilidade. A aplicação reúne informações institucionais, formulários de cadastro, login de usuários e administrador, e uma área para gerenciamento de animais e interações com a comunidade.

A ideia central do projeto é facilitar a visibilidade dos animais, incentivar a adoção responsável e fortalecer ações de proteção animal por meio de tecnologia acessível.

---

## 🎯 Objetivo

- divulgar animais disponíveis para adoção;
- permitir cadastro de usuários e administradores;
- facilitar pedidos de apadrinhamento e adoção;
- centralizar feedbacks, contatos e ações de conscientização;
- apoiar ONGs e organizações de proteção animal.

---

## 🐕 Problema Abordado

Muitos animais ficam em situação de abandono, sem acesso a uma comunicação clara entre protetores, adotantes e entidades que possam auxiliá-los. O projeto busca reduzir essas barreiras com uma solução web simples, funcional e fácil de usar.

---

## ✨ Funcionalidades

- Cadastro e login de usuários;
- Login administrativo;
- Página inicial com apresentação da instituição;
- Listagem de animais por categoria;
- Formulários de adoção e apadrinhamento;
- Página de doação e conscientização;
- Conteúdo sobre castração e resgate;
- Área de feedback e contato;
- Gestão de registros via painel administrativo.

---

## 🧱 Tecnologias Utilizadas

| Camada | Tecnologia |
| :--- | :--- |
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP |
| Banco de Dados | MySQL |
| Servidor Local | XAMPP / Apache |
| Ferramentas | VS Code, GitHub, phpMyAdmin |

---

## 📁 Estrutura do Repositório

```text
SGA/
├── A_ado_apdr.php
├── A_create.html
├── A_create.php
├── A_delete.php
├── A_list.php
├── A_update.php
├── ADO_ave.php
├── ADO_cachorro.php
├── ADO_cavalo.php
├── ADO_coelho.php
├── ADO_diversos.php
├── ADO_gato.php
├── cad_adm.php
├── cad_usuario.php
├── cadastro.html
├── conexao.php
├── doacao.html
├── feedback.html
├── formulario.html
├── formulario.php
├── index.html
├── login.html
├── login_adm.html
├── logout.php
├── pagina_protegida.php
├── pagina_protegida1.php
├── processa_login.php
├── processa_login1.php
├── quem_somos.html
├── resgate.html
├── sga.sql
├── style.css
├── teste.css
├── U_create.html
├── U_create.php
├── U_delete.php
├── U_feedback.php
├── U_list.php
├── U_read.php
├── U_update.php
├── images/
├── img_pessoas/
├── resgate/
├── uploads/
├── README.md
└── ...
```

---

## 🗄️ Banco de Dados

O projeto utiliza o banco de dados `sga`, com tabelas principais como:

- `adm`
- `usuario`
- `animais`
- `formulario`
- `feedback`

O script SQL completo está em:

- [sga.sql](sga.sql)

---

## ▶️ Como Executar

### Pré-requisitos

- XAMPP instalado
- PHP 8.x
- MySQL/MariaDB
- Navegador web

### Passos

1. Clone o projeto:

```bash
git clone https://github.com/LLLucasLL/SGA.git
```

2. Copie a pasta para o diretório do XAMPP:

```text
C:/xampp/htdocs/SGA
```

3. Inicie o Apache e o MySQL no painel do XAMPP.

4. Acesse no navegador:

```text
http://localhost/SGA/
```

5. Importe o banco de dados `sga` usando o arquivo [sga.sql](sga.sql).

---

## 🔐 Fluxo de Uso

### Usuário comum

- acessa a página inicial;
- realiza cadastro;
- faz login;
- navega pelos animais disponíveis;
- envia formulários de adoção ou apadrinhamento.

### Administrador

- acessa a área administrativa;
- gerencia cadastros e registros;
- visualiza dados relacionados a animais e formulários.

---

## 📌 Status do Projeto

Projeto em desenvolvimento com base funcional para demonstração, estudo e evolução acadêmica.

---

## 👥 Equipe

- Lucas Lica — Scrum Master / Desenvolvimento
- João Pedro Jesus - Desenvolvimento / Product Owner
- João Vitor Mota — Desenvolvimento

---

## 💡 Observação

Este projeto foi desenvolvido em contexto de estudo e apresenta uma estrutura funcional em PHP e MySQL. Para uso em produção, recomenda-se reforçar a segurança com validação de dados, hash de senhas e proteção contra vulnerabilidades comuns da web.

---

## 📜 Licença

Este repositório é destinado ao uso acadêmico e de aprendizado. Verifique a autorização dos responsáveis antes de reutilizar o projeto em outros contextos.
