class Conta {
    constructor(numero, saldo = 0) {
        this.numero = numero;
        this.saldo = saldo;
    }

    sacar(valor) {
        if(this.saldo >= valor && valor > 0) {
            this.saldo -= valor;
        } else {
            console.log("Saldo insuficiente");
        }
    }

    depositar(valor) {
        if(valor > 0) {
            this.saldo += valor;
        }
    }

    toString() {
        return `Numero: ${this.numero} - Saldo: ${this.saldo}`;
    }
}