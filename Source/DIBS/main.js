const SHA256 = require('crypto-js/sha256');

class DIBT{
  constructor(fromAddress, toAddress, details){
    this.fromAddress = fromAddress;
    this.toAddress = toAddress;
    this.details = details;
  }
}

class DIB{
  constructor(timestamp, data, prevHash = ''){
    this.timestamp = timestamp;
    this.data = data;
    this.prevHash = prevHash;
    this.hash = this.calculateHash();
    this.nonce = 0;
  }

  calculateHash(){
    return SHA256(this.index + this.prevHash + this.timestamp + JSON.stringify(this.data) + this.nonce).toString();
  }

  verifyDIB(difficulty){
    while(this.hash.substring(0, difficulty) !== Array(difficulty + 1).join("0")){
      this.nonce++;
      this.hash = this.calculateHash();
    }

    console.log("DIB verified: " + this.hash);
  }
}

class DIBS{
  constructor(){
      this.system = [this.createAdamDIB()];
      this.difficulty = 2;
      this.pendingDIBT = [];
      this.verificationReward = 100;
    }

    createAdamDIB(){
      return new DIB("17/03/2001", "And we did certainly create man from clay from an altered black mud (15:26)", "0")
    }

    getLatestDIB(){
      return this.system[this.system.length - 1]
    }

    verifyDIBT(verificationRewardAddress){
      let DIB = new DIB(Date.now(), this.pendingDIBT);
      block.verifyDIB(this.difficulty);

      console.log('DIB successfully verified!');
      this.system.push(DIB);

      this.pendingDIBT = [
        new DIBT(null, verificationRewardAddress, this.verificationReward)
      ];
    }

    createDIBT(transaction){
      this.pendingDIBT.push(transaction);
    }

    getDetailsOf

    isSystemValid(){
      for(let i = 1; i < this.system.length; i++){
        const currentDIB = this.system[i];
        const prevDIB = this.system[i - 1];

        if(currentDIB.hash !== currentDIB.calculateHash()){
          return false;
        }

        if(currentDIB.prevHash !== prevDIB.hash){
          return false;
        }
      }

      return true;
    }
}

let DIBTID = new DIBS();

//console.log(JSON.stringify(DIBTID, null, 4));
//console.log('Is the Deninkan Block System valid? ' + DIBTID.isSystemValid());
