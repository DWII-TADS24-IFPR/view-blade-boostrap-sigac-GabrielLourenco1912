[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/tv4lKYZS)
# 🛠️ Atividade Prática – CRUD Completo Laravel, Blade e Bootstrap


Criar **interfaces completas com Blade (Laravel)** e **Bootstrap** para todos os modelos abaixo, com **CRUD funcional**, conectado aos **controllers e validações já criadas** nas atividades anteriores.

### Modelos que devem ter o CRUD implementado:

- [ ] Aluno  
- [ ] Categoria  
- [ ] Comprovante  
- [ ] Curso  
- [ ] Declaração  
- [ ] Documento  
- [ ] Nível  
- [ ] Turma  

--

## ✅ Requisitos Obrigatórios

1. **Views com Blade**, utilizando:
   - `@extends`, `@section`, `@yield`, `@include`, `@csrf`, `@method`, `@error`
2. **Layout responsivo com Bootstrap 5**
3. **Validações com Form Requests**, exibindo mensagens de erro ao lado dos campos
4. **Controllers conectados**, reaproveitando os da última atividade
5. **CRUD completo:**
   - `index.blade.php`: listagem com botão de criar, editar, excluir, visualizar
   - `create.blade.php`: formulário de cadastro
   - `edit.blade.php`: formulário de edição
   - `show.blade.php`: exibição dos dados
6. **Feedback ao usuário:**
   - Mensagem de sucesso (`session('success')`)
   - Exibição de erros de validação (`@error`)
7. **Relacionamentos visíveis (se houver)**, por exemplo:
   - Aluno pertence a uma Turma
   - Curso tem Nível
   - Declaração está ligada a um Aluno

## DICAS:
## 🗂️ Estrutura Esperada das Views
```
   resources/
   └── views/
   └── [nome-modelo]/
   ├── index.blade.php
   ├── create.blade.php
   ├── edit.blade.php
   └── show.blade.php
```
