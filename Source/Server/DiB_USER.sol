// SPDX-License-Identifier: EUPL-1.2
pragma solidity ^0.5.0;

contract DiB_USER {
    
    struct User {
        
        address id;
        string name;
        string dname;
        bool exist;
        
    }
    
    mapping(string => User) public users;
    
    function createUser(string memory _userName, string memory _userDname) public {
        User storage user = users[_userName];
        
        require(!user.exist, "ERROR: User already exists!");
        
        users[_userName] = User({
            id: msg.sender,
            name: _userName,
            dname: _userDname,
            exist: true
        });
    }
}
