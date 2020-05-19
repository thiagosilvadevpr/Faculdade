from Finan.pessoa_fisica import PessoaFisica
from Finan.pessoa_juridica import PessoaJuridica

a = PessoaFisica('094.216.329.07', nome='Thiago Silva', idade=27)

print(a.getCPF())
print(a.getNome())
print(a.getIdade())