// SPDX-License-Identifier: EUPL-1.2
pragma solidity ^0.5.0;

contract DiB_C {
    function createCID(uint256) public view returns (uint256 CID) {
        return
            CID =
                (uint256(
                    keccak256(
                        abi.encodePacked(
                            block.timestamp,
                            block.difficulty,
                            msg.sender
                        )
                    )
                ) % 10000000) +
                10000000;
    }
}
