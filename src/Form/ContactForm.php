<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

class ContactForm extends Form
{

protected function _buildSchema(Schema $schema)
{
return $schema->addField('nome', 'string')
->addField('email', ['type' => 'string'])
->addField('telefone', ['type' => 'string'])
->addField('mensagem', ['type' => 'text'])
;
}

protected function _buildValidator(Validator $validator)
{
return $validator->add('nome', 'length', [
'rule' => ['minLength', 3],
'message' => 'Campo vazio ou nome muito curto'
])->add('email', 'format', [
'rule' => 'email',
'message' => 'Digite um endereço de email valido',
])->add('mensagem', 'length', [
'rule' => ['minLength', 5],
'message' => 'Campo vazio ou mensagem muito curta',
]);
}

protected function _execute(array $data)
{
$email = new Email();
$email->profile('default');

$email->from('noreply@amoradh.com.br')
->to('contato@amoradh.com.br')
->subject('Formulário de contato do web site')
->send($data);

return true;
}
}