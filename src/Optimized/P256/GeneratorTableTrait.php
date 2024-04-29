<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\P256;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait GeneratorTableTrait
{
    /**
     * @return JacobiPoint[][]
     */
    public function generatorTable(): array
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0x6b17d1f2e12c4247f8bce6e563a440f277037d812deb33a0f4a13945d898c296', 16),
                    gmp_init('0x4fe342e2fe1a7f9b8ee7eb4a7c0f9e162bce33576b315ececbb6406837bf51f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cf27b188d034f7e8a52380304b51ac3c08969e277f21b35a60b48fc47669978', 16),
                    gmp_init('0x7775510db8ed040293d9ac69f7430dbba7dade63ce982299e04b79d227873d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ecbe4d1a6330a44c8f7ef951d4bf165e6c6b721efada985fb41661bc6e7fd6c', 16),
                    gmp_init('0x8734640c4998ff7e374b06ce1a64a2ecd82ab036384fb83d9a79b127a27d5032', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2534a3532d08fbba02dde659ee62bd0031fe2db785596ef509302446b030852', 16),
                    gmp_init('0xe0f1575a4c633cc719dfee5fda862d764efc96c3f30ee0055c42c23f184ed8c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51590b7a515140d2d784c85608668fdfef8c82fd1f5be52421554a0dc3d033ed', 16),
                    gmp_init('0xe0c17da8904a727d8ae1bf36bf8a79260d012f00d4d80888d1d0bb44fda16da4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb01a172a76a4602c92d3242cb897dde3024c740debb215b4c6b0aae93c2291a9', 16),
                    gmp_init('0xe85c10743237dad56fec0e2dfba703791c00f7701c7e16bdfd7c48538fc77fe2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e533b6fa0bf7b4625bb30667c01fb607ef9f8b8a80fef5b300628703187b2a3', 16),
                    gmp_init('0x73eb1dbde03318366d069f83a6f5900053c73633cb041b21c55e1a86c1f400b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62d9779dbee9b0534042742d3ab54cadc1d238980fce97dbb4dd9dc1db6fb393', 16),
                    gmp_init('0xad5accbd91e9d8244ff15d771167cee0a2ed51f6bbe76a78da540a6a0f09957e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea68d7b6fedf0b71878938d51d71f8729e0acb8c2c6df8b3d79e8a4b90949ee0', 16),
                    gmp_init('0x2a2744c972c9fce787014a964a8ea0c84d714feaa4de823fe85a224a4dd048fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcef66d6b2a3a993e591214d1ea223fb545ca6c471c48306e4c36069404c5723f', 16),
                    gmp_init('0x878662a229aaae906e123cdd9d3b4c10590ded29fe751eeeca34bbaa44af0773', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ed113b7883b4c590638379db0c21cda16742ed0255048bf433391d374bc21d1', 16),
                    gmp_init('0x9099209accc4c8a224c843afa4f4c68a090d04da5e9889dae2f8eefce82a3740', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x741dd5bda817d95e4626537320e5d55179983028b2f82c99d500c5ee8624e3c4', 16),
                    gmp_init('0x770b46a9c385fdc567383554887b1548eeb912c35ba5ca71995ff22cd4481d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x177c837ae0ac495a61805df2d85ee2fc792e284b65ead58a98e15d9d46072c01', 16),
                    gmp_init('0x63bb58cd4ebea558a24091adb40f4e7226ee14c3a1fb4df39c43bbe2efc7bfd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54e77a001c3862b97a76647f4336df3cf126acbe7a069c5e5709277324d2920b', 16),
                    gmp_init('0xf599f1bb29f4317542121f8c05a2e7c37171ea77735090081ba7c82f60d0b375', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0454dc6971abae7adfb378999888265ae03af92de3a0ef163668c63e59b9d5f', 16),
                    gmp_init('0xb5b93ee3592e2d1f4e6594e51f9643e62a3b21ce75b5fa3f47e59cde0d034f36', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x76a94d138a6b41858b821c629836315fcd28392eff6ca038a5eb4787e1277c6e', 16),
                    gmp_init('0xa985fe61341f260e6cb0a1b5e11e87208599a0040fc78baa0e9ddd724b8c5110', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2377c7d690a242ca6c45074e8ea5beefaa557fd5b68371d9d1475bd52a7ed0e1', 16),
                    gmp_init('0x47a13fb98413a4393f8d90e9bf901b7e6658a6cdecf46716e7c067b1ddb8d2b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9482fb0e492539ec8cce745be070cda11c2e92960a201a61abfb9dc69e4536ca', 16),
                    gmp_init('0x351d9ca745f157f91a5d638ca7534e63f63d5e295707bfbb1fad863bf58cc1c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0643fb8fcc14def67a6a5eb1bf8e9125b35edc7338d816aa4110a6b90ee785', 16),
                    gmp_init('0x553438324a9e7955c520dacda2920e700da10d00e7012ed7bac0d100861f9cc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2e1b7c17ae931195b835a5153081eeb63764a1cdbd0633c49b1dae295ecff13', 16),
                    gmp_init('0xe6c0441313a3ebccf233a1a2aad758c387da1a9817dea2e6a3ba4989b2187d44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x492003a35c8c3794d24451d361c37440e512fcb2acbac2f4ad24cb7afc635a50', 16),
                    gmp_init('0x1f1569cfb333b4de4d832ff96bdc79a23c1bc670e0b2e049c9166b28b8188b9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb433462e7f1b6bc2cb34177dcbc6ee340703e87dfc2309e438bbb334eef87286', 16),
                    gmp_init('0xa0da54526ed2b5fe383f4e72c1692e6f9dce20806a2cea4b7ac047f6841496d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae3f7dba0bde8b6ad7ce2f8eede4b762c556dea678f859626a9e6235a674c4f6', 16),
                    gmp_init('0x1c0549fc0a69995a24b8c213249db9a97940500d085f8a5c1ee0553e711f4b53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa47420ce4d3da24cc186e905b5567b19189158875eb0c7601b986b5b19794381', 16),
                    gmp_init('0x2ebbffdf7be1bfe0e73df93619967afff3a5c08db9f6ac78696ce3a7e2769c52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd677ae721a5d60c9291ff705bf720876916eb1d24497c893551a403f2288ebe0', 16),
                    gmp_init('0x509497a204ad250672a8ceb0ded3dddf21882ae6ca10aa9d031dac28500c4395', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ba7a19b9d091485fecd4012b0da3195b870ac89f5e6f2bec74466489a5185a', 16),
                    gmp_init('0x30e0d2b5e82c1896e467823e24e3d48e7606220bc905ae001543c88e01de3a4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x366018516f5a5a2271f2a56eaa14f436b9c7de5adefd7c62a3b73fb2efdba936', 16),
                    gmp_init('0x91ec1aacf53ceb78195d35b2e9a028ca4cf24008d15af99d8f3ae9d3626adcb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb29f74c9d0dfe2fd69798d918083e0b79c0efe9aae3a5dfd5aa398b5f99b85fe', 16),
                    gmp_init('0xa3ce5bc3a6c29785d5d0712e96d7c6d92def63d30bf59e80dba642976da604dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78c6be72b982cc60eb36dd90b05f92e7a7dca6c6280cfa08adfa3814eb04054d', 16),
                    gmp_init('0x491ce81cbbaef8474b4d0c3c5cec23300b6764277e0f8951a729e7a30b0dfa2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99299baa8b91bcf5076cbf03f2482b08576b2b057cd50e962767456e87e030ef', 16),
                    gmp_init('0x5cc2e3d3333f8e18bf338101a6ceaa7957c12c499f4008444d8e6b7dd8d9aa9a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x34a2d4a3b009165987ffd1528603ed61190d0b710d6a564c2db2e35f12d0441b', 16),
                    gmp_init('0xbeaaed6a53a1e3c22bca71046e777fc0e7d766b9deddd81db424e7845e93b146', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c490528be759e4e8897bbd818d459aa416b9ae0b3c5dfc3469cea39f3f98de', 16),
                    gmp_init('0x30e50b46405cc74fade84c66242a8107471d9d7b4a4605eeebd949434e8d6e96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa98b0a07adc359aa1b58c5ffa95d23ed3abfb7ab74f644a9dce4ae33bda08424', 16),
                    gmp_init('0x4754c64722499b66e5319e8c8e1d1320752be80ba0df582d361287a0e831800c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16949b7287d4f481897299b9eb6fe80ccdc5849ae1d527e280e76bb98e61ca07', 16),
                    gmp_init('0xe7a4146d770ededebdf997b75b6012094d2d6ac6fedf983aa09c2be7a0420427', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa034f009c88daac5d21b6b78c85a696dd22f918d81bd29b3b52d7e5e883c2d6a', 16),
                    gmp_init('0xfe1b0036ca899c1fb0cdb8545ceceb06be06035f16267e7cf4336ef2c2c30e72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fb660a7f0e14da3a8420fe520b265cbb71bdd3c3f3f923b6d61fdb48f6752cd', 16),
                    gmp_init('0x6545851d4224637c4c2869c4d9577d598bc013bd1100a0c12f12e8c064c6017e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb52226ff319d4401a076e2b40962e9a14a096cf82b793e4d716a51dd28be8c78', 16),
                    gmp_init('0x701ee0c9f539f540ca1b36697e92851a819f7fc8e5b58ff3203367ca51686903', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb01a67f716475f72886a8f4749b86176281b195ff46f925ae1404a861abe45c0', 16),
                    gmp_init('0x7c521bbf5a3956e2acd56b13164ef99472fc676341b62c7fc72f0dbe0090106c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3e38861868e05b3d968ceccfccc4713de4464f87931979b7040fe40a058b5a4', 16),
                    gmp_init('0xcfd457887df0d12c3848e6b3ae97e68f3cee845bb771a2948f306d90e7113aef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3acf89aa3770e03b872c1d0e0ec1188637136eedbdbd88217c2d788ebbe0146', 16),
                    gmp_init('0x1ccedf94c3c6bd27f06762038c11cc48caba4be850a0ae08243d71c1d38a0d8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2099544a131fa539333ccab9a221197a82fe36db2dc7dff7a05f5ec904a08314', 16),
                    gmp_init('0xa5cf3dfd2aa33b1890fba8e5cb9048dfd406e5a736fcfe96e7f8c9c5e7573ccc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ac1f41fb4e187e6b7438645c660cb24fc7405cc6e1372f88136da613fa8dc8f', 16),
                    gmp_init('0x2122b32472d8fce1c1506fac6daf3cdf1db6fb884fbadd731d95f312d9509804', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x751d6513acc0ec70308f6e72aadfd39b99e0c3caeeede929502ff94ae9078c18', 16),
                    gmp_init('0xba9c3ffdca4a415885354baf6a2a2a4ef00948c1cbe05ac7998d6e95cece0d67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7854e90d1144129e46d90525e450a1a702e6b44d101402941fe1767ff462ea0e', 16),
                    gmp_init('0xd6728e8d1f9513ff4a3004bbf427c03eb7742ea17ef95b203bf725275902544c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5be0f5225c47801117b48308a03a3b36405ee09d17a3db4492cfcd5c9e86d900', 16),
                    gmp_init('0x83d1d9e6dff2c422d347e3a4e7b5423df921725241b34f5ac4cdd69bf58a5755', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe716aed2cf069e4d997789672e6d6bd2508676f2f4fd0a64f077e8daa245573f', 16),
                    gmp_init('0x353663e694fc72ab5912b06687b9a851d13d0df2fa07c9b3505fc26b469218d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a57c3e3548207ef2f4541cf25b5e81b6b2e5d2fcec451f4b5113c2b357174b3', 16),
                    gmp_init('0x77c7b303e69224601b1165729f3443328886700134bb92888cf5959383437e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2bf898d6f507ce864e5558a4c1da22d19ce1ecee329edfb7f987930657008ac', 16),
                    gmp_init('0x69c0b1cb5a6b77aa3f8195db3fa90c56679ce10ab5ff07988111534a727beb55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ce96505eef7208cd10920adecfb86ad1a87a974797e4fc58937f00facb006ff', 16),
                    gmp_init('0xd16b6ebd381f5ad5ec56d1f22fde7bc3669d20bebd955c2b818dcda107152613', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d88304ee583ce6087fa57391f3064f8b0e4ddee24203eb7fd0d7ca9782f1580', 16),
                    gmp_init('0x28a94e709ab0636ce8d6800898fd6518aafca3bd68eb1e110c0fb16d5616edd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x541c97a5c80be642b28aaa0aa37d9e1676754b6ebb642a20a0c1c454c543d986', 16),
                    gmp_init('0x54d35662cd2b63254d48455eb64b1447fb3ddc8c61678bd7b0b8f98424b2ea7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17c72727c8fc0eeb3267399202e5af9e7156421bea6e26ba5f84c3dae0c38e11', 16),
                    gmp_init('0x95c5a4f4fe664b3c40602fcce901802e7e539945a60cdae3cd8366bbae90decd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71a5bd27c625ca1b4b2a3a4635b1043363a5b8311d31a91915261b05d0b79fbc', 16),
                    gmp_init('0xc5bf524d066741ffb39452ca1a02f2efc76b6051ebaa32d0c2e37ccc8f277f6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e03fdaac47450a88463b1cfc84cb8b3cd4f46a7293541c3d955fd8ae32f36ea', 16),
                    gmp_init('0xdcf6d5f1201228da668e6b170184af99419e979a4c5009d68acc23fc8a68b8af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed42091a6c5ea880f2017de6157064166c04351af99851530c5e14bfa3d9aeea', 16),
                    gmp_init('0x340932a238f9d141e0d3092b508982c4954ebdd1e21053921a456364c16e9ae7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ce6da684b1bcf0761637ac1dca0b2142615ae8649e18de8d43e52a6d953baa9', 16),
                    gmp_init('0x3d9f4fb8fa93120be69b3bc90061b56807f3986bb6a9341d78e75c28f52689e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f4179b924a320c8087e87c9ceb758787835611ce53cad642bf3909a3f490661', 16),
                    gmp_init('0x82ac86b413a8baa0d9485f70af853ca0b9711411048902172e477122b437b2e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb570e73040dc054a20a5354975bae2b008b1ba9d9c6ab8f94ab8d853af22a96a', 16),
                    gmp_init('0xdcd8a2638f71e77f028c3769b5c0cfbda7c9bb7a5855cc9ccb33f661c85d1b00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8a34ad3387c634494567b56a196e517a5a1b3ba7ef715a6495ba2d5e264bd27', 16),
                    gmp_init('0x69ec8061504674347f6375adfe7d67a50e528e13dbcf1fb0a7f3956ff71ac586', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44d94323cbab943b04a11a3e75c7f20de1270b9641fa80549e40eb94589a7509', 16),
                    gmp_init('0xb2c5b38008401f0a03423bcd277b93586f93e1fdf14dd126e20a2b9b60437234', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa018366f4e91e90d8e5c643340e586b4714ab749c9052a0503e8465c6eade3c4', 16),
                    gmp_init('0xe2bbec1714110b167c6ce578349d8369d5f7284e44614f37f45c42026b26e8d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd7ce65d707da2a69ea25487ea254c45eb7d5adffe1ce3eefebccee647a9112d', 16),
                    gmp_init('0x85e04a4b4c966f9789b9016aa5ee6708a190aa498bee60a5ffbabe0d3a92b3af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9cdf1f00b88d896450bd3b5a6d45055c92f398a562ed958d6e1cdeac59e0af06', 16),
                    gmp_init('0x916d25fed3f2ad664d958bbcdc8d94b0828522dc197ca5468d7a32db6216ade7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5f0aea099634718e67d4c73705ae59e8af0bc36c998bef6c88ad96c3212f1a', 16),
                    gmp_init('0xf8a8b2b7c8593c955886aadd4ba16b784f5ed40dde29af7c755d7b1e7712b09a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45bfd9d5d1a663edab6b1b2d0540448338d6170e843ba51981372b939305097e', 16),
                    gmp_init('0x9d1dc12855afd2bbad88305470ce908683b9d33bfd2c15954ba058e908ddc04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7784f06cf9bfb4003407fae48fa79a96b0e2d44b1a7f80ef000349acd95bcc47', 16),
                    gmp_init('0xcca2733ec3edc43a3f8de493b2fee6cef464b5cdd4f6ffb602fbde0180fbb3b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb599ad156476693b671e9f9c02895e6fd1fc23c2dd66aec3cd31f1a0b63bd6df', 16),
                    gmp_init('0x6979d1dec4fab3324637360b8b23c4166a40c4f691134b458ea1cea38efa09ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x471ad0a8d57f5939f15f0d870ae25c9091428bf4e1e6e9172435158cfc4471bb', 16),
                    gmp_init('0x2234ca62778e8e392a367ab48094d138b0d7e9ff7f23982c454318fa49693a0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4dca1f16732ac0e92662b1227e854c11d9a6a35f83bc26daf8613f327142d62', 16),
                    gmp_init('0x551167e5b4b4cd46d49f381b91abc659bb979acefdcd3d7fac9eccc07a618fc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45dc683e625bae7349d201427daf6500b3040ebdf3523741a92c68146c180378', 16),
                    gmp_init('0xbd0197242631880fc89beaac3e588137d04ced33a08df78642a66ea68e817a27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf07278a0e6e09b66d9c4e240e716bb5a7f15c7dc4f395f821ecb1ff4615fae61', 16),
                    gmp_init('0x1a681b2b14a71ea5f7d7a0821898f7d42c270715b837eabcf7d0cb74896376f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93e498f09e88d0d67405e146be83337fa2d3e61463d4dfff2e06dae905566022', 16),
                    gmp_init('0x7d974929d221120d9096e0f3540088f43b27a24bc689e611b1cb31eec7c53f91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fc52457af0a0db0f143ab533ba858ccbe172ea8ffc68d6a0c4e04152466591f', 16),
                    gmp_init('0x489c1838089ebc11e9ec76fe5b434e1629f8cac232ec782244efef57396f8cdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed9ea11f2d7b0206cc34630510b36f5d1df4170c442d4d0a5ea48f58173b4df8', 16),
                    gmp_init('0x175d2f8031d029783d0e3d4c3f02b53752acbb37e2ce6a55cf5afd9ce069ce7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa2501b31a48c5f4fd7f0b5b30ca56d5a291cdb718f96715125d0b8c322a8ebc', 16),
                    gmp_init('0x71c932b14f85896233851e661a6fa8cbea58e08e6cbc833180d927b5aa8a775b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xec73885141fe54ffef6a0b570cd98d530e431c1aad5fcfe8f7dcecb7d96dff1', 16),
                    gmp_init('0xd6224f4e87ae875d91acc4ef580652511d5264ce87ed78aa9ec841ac7c7b552c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x477778364e6e1cde059a0e2532c8f0c69ba12b3112fb6dcfb183b5399660b7c9', 16),
                    gmp_init('0x2dd89d00b8389e317373efb6a7c89e8a5e0604c1f142ebcf5c205fa39918c3df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96dac3fdc7064a86e992a46a7c42a7b6e94a5c1c64e3183851c324ab088d58e9', 16),
                    gmp_init('0xcb1faff3ad46c1ad856cc4949382c439685be89b9487e6e380349312aebebc5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x353d458d3491b5a8c73d989017e14dd22ec38faf35f45d260fd8013b26d69d8e', 16),
                    gmp_init('0x9c7d37bf4f5bde243130fde40c040a8a825dfc12fb71a9a8842b9d0020f32b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe297b23ceb14f312a105dc378aeb8f811d21d271b947b2c58952ad132db29f92', 16),
                    gmp_init('0xe1372520f8cb70b4b480dbabb8cd91491223cebb85ed414160f294c8a5e58ddb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa737bb3da35a3b5e3171bdb6d33f07e586679fdea1d8de803f4dacc55b5e6a6c', 16),
                    gmp_init('0xc68f53e01f98ffd22b1e765d8e905f150d4e7d487692ed0ab730c7d69054745d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cd22338fb2b94b66b06bc920d24da97d91ae394d9746bcafd943b7b8ad88c33', 16),
                    gmp_init('0xfc3acdf838ab48b096c8640ab136bc2713fe51315eca1e49628ea784248fb1b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddad6bf0172e2240d57180ff0b1ba76e28e6bf035dc617ccaf0d4e79e330c098', 16),
                    gmp_init('0xb1371e6935a21897530a4736125addafa333bad2db9d1403e5a994d63b67b58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf462d7adb9e9fbbfcb1cad30dffb1ee0cdf7e11b0c63a0e0f53ac89c3b26aa73', 16),
                    gmp_init('0x406a0d1a783453140d53ba4a68733c7a49e8e0a300502cca245eac1778479e73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22ad3fee717113b91d6f05da10f6cd6889ef670c852039cdf58bebae5b2e97cc', 16),
                    gmp_init('0xbce4ec07b05351a2d0a598db6a4dcc1de03640043cb4cd37c2d34ede848b42a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe0f68925d3f70caf75bdbeb3ca895168af90e9597e6502273ee1e02abcd015e3', 16),
                    gmp_init('0x8531e310e483aa95362696c7274c77c55b8b5391e2936bbdaa24d42d2157cce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6c5ef5db04ed3ab5364f7c14bcc66e27c8ded40b882a8512082b63685ce7562', 16),
                    gmp_init('0x4149117a17145d88c5a533360dba511851ed33cad490a6f00747f96b177eddb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28e4adc1552bf57fc1d82b312af75a00ea8e76773e1927691e6c43114bb76b12', 16),
                    gmp_init('0x14d74c4efd9a01b3f4e4b65b6b9ea3f703a0a60f171628ff57e453a7ec4747bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf30ef720fcfe8d0c78446b476dd149e20d07018ea77661eafae5fba343040c6', 16),
                    gmp_init('0x18e1aebf6d6dbb4509278a77d903449d43cb0cf4429c03bc2f3560036ca02b72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85a0ba2794ba805ed271edabb3a097c6369b6886520764628bf5801fe76ff697', 16),
                    gmp_init('0xadf32e61eac3e24a554790d3dcedaa551de97ffa790a58b9309ed4da52142721', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf8f5dccf4c6a93d7a4a54daafaa3449aa87a8069875405d43725c5dce392d805', 16),
                    gmp_init('0xe58176cf66d63054389d3e336461327351f3da64a52143ba026619516cda02fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa118b0f24bc45d9c9b317fe248af581ffd42d88478182a90aca7f0b2ac51d8a6', 16),
                    gmp_init('0x698b53fd0f7e1798df7b25ae09464d6a81922408e376967d8621b55d5c87b030', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe12c8e4a865883a94e084ac8946e2d4517110f390207309d19d4b3167fa046f7', 16),
                    gmp_init('0x7cec04610fd9a2f3433b3ed5393126f6dd0c04e11331193453a55a28a12646ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcc8ca2e4e502d2ede9ec29566d715ea7bd24be788828675fa42e8729cf5250e', 16),
                    gmp_init('0x30b57bcceef8bd04f6b9880a8b34da5c9046bc05c03b2120602e0fbf730fd4a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x394bd474179692093d08e2efe3d1323648166c57ae22e466b9b127e8c2853c43', 16),
                    gmp_init('0x2b4d6d52151dc6b9207e3fc2f1d60767d52f6712d90fcf0cb17828cca064469d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81341ae328b1909526a78cadbc7ed64e1f177e3abc30f12018da08ba74cb5cbf', 16),
                    gmp_init('0xf2a47728b2deb5f40dd25cfe06cf034980babdc773bc3358461726673e856d6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca8538df38de82e9445c6656c59404334ed810396d058961ec2dd739fc722e94', 16),
                    gmp_init('0x3b27fc42eb9e05c311e73126a1fb9f12f20953a8a48b26a43a0a62df1049a527', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24bbe05bfa35ddc0ee9a4b43cf2e4e3af349f675d2af3c3d2318aa0489a95e03', 16),
                    gmp_init('0xd49405ee090a22cf17182d4dd2760faad40aa52e375aa14987df45ed8d793c4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x663e1a59f2357b75a1bb74624ca67b3dd31a1fc2f239ff4887174629dcad6309', 16),
                    gmp_init('0x292fb73b8066a8c3c102c183cb1cf918b907d44402eb52bd53286ba389981f28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46e22fdc70432f68aaf94227eac9c482f2accb5f8a3edd1370d45a4ded4d335f', 16),
                    gmp_init('0x1e1f378d8436fbb7d59f4b2940a2aeb39cb893a34c6225eaab8aa54c61bdb9a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2d9efe73063667096c36c23707beeab3ba1b04d8fc7ff249275b24522c23d03', 16),
                    gmp_init('0x1cc85228cc841b8f15530436c7101b92ea09a7e95839df45102e4c04f085db74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86f0d61c0c8a0982eb76c8e73d40e0df6df610b42ae2c020fa22eb9ba08eaf08', 16),
                    gmp_init('0x3059e9c7572fb0f3104df139995363514a0c650cc021492dd71fbaa13a0c1a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5657e12b48b1a9efe0b910b5273f35d0f662cd519ad9fffb1755f96707d4c6d1', 16),
                    gmp_init('0x72b5bef4b8dd49f9acfb390f33ae6a0abff9a35a1452c14188303f298106bdec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e378784112a2a521a257a892c9ec52759d03d9ae280de5cbfc50fbbf32d296e', 16),
                    gmp_init('0xa559d906505d0e674fcdeb66d5b8ad3e4c9118ef208fde89491eff584e42294d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b686215d40ae0010864edc6676d8d2b7a68b4faede3af44f8654dd55933564a', 16),
                    gmp_init('0x76b5ea69cf3a264552d30c54d19d95de392aee228878869f3b5f04588204ef63', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6d28b6bffd4daf313f85eaad8e4d71b91ca631161f99218f984a23176f922dbd', 16),
                    gmp_init('0xaf39d905141dd2fa40fbe1a61ccb4a1c4c24e9f0b84da29944abff02a0ef3cff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd131e661dd93d815e613947f2d302f2f50ea585cafb752509789404fc4fb240a', 16),
                    gmp_init('0x34342c8461a95da2e79b4c37f48f4fd47423d4ebcdeacdf422f60e1402501a57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cd3157a7fbfe3ddd3df0905fc14467ea153d02ac586c840b590dff99b168b64', 16),
                    gmp_init('0x9ca08d2117292c6220568e78bcdbfafb13ac4d9b72e02e35856c0d2b5abbb16b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafff5af92c807615712e02810be246a2d0434584477fe2e867e5fdd7b8087dde', 16),
                    gmp_init('0x659f6ea22cd060c2099a747ee10a2a22aacf175292ddabe7178346acd44eb3a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed860bdb5f2df8c456b243199d45356264dc554b09d9aee3b2b1c6fa06ef29e8', 16),
                    gmp_init('0xb837e74375d5a7fd7c6bf6b340417bb1e7630f5c2d8daa33501a1c49b9b90f8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e65fb3b08594f3a6a65739b8b079177c01974d056f6f88f3d8ef9236dbf52e9', 16),
                    gmp_init('0xe79bb6600ef807c010bea6890cf95987600d56d126aebb433a52541ec710d348', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6868cc8fd1d21243735e1c2e7e272c9d47dcd03bc1f1cf599df918b3f636e617', 16),
                    gmp_init('0xeed008a5b91bf9e6b3c5903879313f0a60fe30c8a4384cd71c8ddcf3fcbb3d27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8437a7cab8f3e67c05b8000a73853a82e89dfdb368bc666999fb69a100371f53', 16),
                    gmp_init('0x968fd75882812a40735483f43819bb8e10e124fedbfbe259248872d7879cbbab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec03b360eac8fe202c5cb49f10afd318291d2e65ce3a11e2c79da2a6113e2a34', 16),
                    gmp_init('0x86020ffb60a058437befde21012122728aa8156e65a136b7a42243eeb84566d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f2cf68579ca9d44c7b1de8989eb9e6133a579d37d4dd4f20409a178519526b', 16),
                    gmp_init('0x21a51e5bd1986a77e46819ddc47d4d7e2669bcf4f324b2ad355e35bb66d83fc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa79464a39e78b90de6a3035a591056fa101e2cb5484991a25eae0ce5c87c1b18', 16),
                    gmp_init('0x1361f4e3f72858cc249a57879e9a89f60d98de9c71562821beb585097b94809a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x701a78dd6546551f5f7b88e7e1bda6e1f456b063da3e65bb510cae477159a25', 16),
                    gmp_init('0x8bd65e64e6b9420019eda0a206beaa8e55fe9158099dce970a843a51fbfcdba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x544ef280aa8fbcc790e91fb694f30ccc5a9abef829e595f6594e28c6ded10d26', 16),
                    gmp_init('0x95b91c9dc45ac2ce9d6b1dfe8d8d70d3683d6f976e2c06ae2fc24f7276dafcc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c259414e492ea1c778469ac0cdc7f64c4c4acca4b1f3c5a812686c1afc59084', 16),
                    gmp_init('0x6e162f4d40b152e6916b4f0997ecad5ceb03a88b88f09232c8236db59f30f7c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2c26c885f34c6214de53c846b4aff9b57ad3e798d3cad5e249479f8b7ad18e6', 16),
                    gmp_init('0xb2121b284f48818851ce266ea117ba113bc515ca71981de4adafe51aa554cfad', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7fe36b40af22af8921656b32262c71da1ab919365c65dfb63a5a9e22185a5943', 16),
                    gmp_init('0xe697d45825b636249f09f40407dca6f174b3d5867b8af212d50d152c699ca101', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61779471478643436554caa343adfa5aa1dd10b8a60e47c0336dd1e7c68278c2', 16),
                    gmp_init('0x4ecee7d5a568791f03bff005c8986473327969992317a1a69d03ecb2efabd2cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b656a405b4e2d7380924e56022f8b808e90e9d2545cf8d976a78091df0922a8', 16),
                    gmp_init('0xee1ea31d12e7783920d04cc255d8c4d6d473b9e2b9850f694dadcac5999a80bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x521cf0cd89729d1a193d8758abf96019f7221aba0101b56baeab93965a7d9344', 16),
                    gmp_init('0xd60220dacbf9e9bac583fe0ed386371b7a1341ca5a95fba14529f28196b7064a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d78956ebd65e13d93db2be0fb3d8e5ea09e7ca1f6a60c36b504f88869d07e9e', 16),
                    gmp_init('0xd5149e6ef48ea8cd6542a89c1d3210ce7460a2da3b94c7b2f4dd615ac3d8c8ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c86b3ad8863a8dd4d56c2613639e7067ce5019bb0000e35bb430cf33b281418', 16),
                    gmp_init('0xd958bacceebefe954c62b97768daa72f82ea7c317bc0861b79dd3eed3117e0ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4acb1272e1353fa957236846e4db63165741b2adbd394207667750867dc4950f', 16),
                    gmp_init('0x726cd20fb743cdad8cf298f6cc71e29fdf9e4280b5866ac566c6e44463d8b4df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x176c11c1328ed07b562fc9efce42700bbd4bbdec1543d1a70b3184a32b3fce8c', 16),
                    gmp_init('0xd17f8dae934b8a3589592180b7de3b7e5c5d842a5bb51ab16ea68436a3c9f19f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x640c5ebf1a6b17b4234453550c81464a2a667f8af007d816f40c7a7bed7e8cbd', 16),
                    gmp_init('0xd6ae88fd829cfd2f2ae9c6eb701eab9eba069fb18cff9b0206e2903cbec5a5db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x493471abc939487b09d378b7cf26b9d2af42e93b573fe78863ae2b005e57d10d', 16),
                    gmp_init('0x60d9691165077effe96c54f99a845accbdadd5ec623364ed83259603c6056dbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bba04b1b4284b32451562c90ddb6b9bf1d26b97975ce3d5f70a04b07e86bddc', 16),
                    gmp_init('0xc34099c09c208ebf659bf9216699437ac6acfde4f4196e5f5223c5a1e9e349c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7085b59c1c09e312fc1c48cf4a13975e482c9028d974a0ef5dd2c18196a081e1', 16),
                    gmp_init('0x55a062a24931eecb3cc6b741515810a64e9f136375066381914adea64659f1ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b0a5744fecd37e210a6943f7c5a5fe41f9909eadec3a258d170e7804257f582', 16),
                    gmp_init('0x9e57a44ec0d6c739662a15a137e37d4656db46ba7b1607664817fedf37372d4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x526fd9e3e7b79dd1d8ec684abbea778fc52fbe5033f758e6d1d41eca113fb3bb', 16),
                    gmp_init('0xcb3d9fdbe104383aa0fce55430c0a98f2622644c6800f6008b72d1cf470b5e0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa13ff97c26478971f856f493d9678a6f06e224f2e3c31683f1449f9985e797e', 16),
                    gmp_init('0xeb1a964b225c83d5917d818e8fa1dc3ff27f6f0a7580c3928327ab9f539d666f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6965b6384d7061e685371fe7ff26519e76bba9dda2aea7817aff4fe1fdde3445', 16),
                    gmp_init('0xd1bcdae39c482511325e496638732dbef47ce6051a5f99d97cc4389e18855113', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ba1e12f974ac9f39ba834fcb184097148526336679189f10375c0c6edee30ee', 16),
                    gmp_init('0x3d2f132311bea6c277c3eea86a877be62067ebb8c7d4f388a96b83b67b43c5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1cbc51dde75c7da027e7ddbd4091a71b1ef589b36689789f5e40f96888acfc5', 16),
                    gmp_init('0xec678397cde7daedb312764ffdb9e23ce7d3292beebfba523bc5fed5a249a225', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc90ea1fbe9020055485b544d9567e8635a1658f6d17c5b108afbc67f51c57125', 16),
                    gmp_init('0x5aca66c710ede6b19667af636e660b1b6a3d07d6de19a69c669a504defb8d94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c3f267971138aa1731e9d2845a900481d3897e1543c8228758ea53fe107ccc6', 16),
                    gmp_init('0xdaee0c1b64b51d9c8be375f4bf3e6eca51a8fd4e95f9b186840794cd3dea9152', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67a51d096d01cb39aa47106437dc1824d1df6426ed18d43361067df977fc555d', 16),
                    gmp_init('0xc1095aea14bf7be0e175487a3fa794f24363755443132b3e5d9ac5946c12c1d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c30d9577c6b2d72796fac17b140922b2fa2a034e53c2be421c5eb4395a449e7', 16),
                    gmp_init('0x8025e3b5b08e1b92164b65f799c592d0b75e4053c3ce790e770ea481ae2677d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa88b8f77c8962303d3a1bb4a48c105b9cf25089f822df8fc1bf1f2dab3cd7fe', 16),
                    gmp_init('0x15b63b6905525ac21d4d29d246caa9900c491c0994d7154c6a3bd234f1661fd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa3bbf230c8e9682afe4e2b07ea8d9955379252bffee271cfa558c028b8ceb07', 16),
                    gmp_init('0xe6320cb09c1ec26844dcb0fe4c9162ec3b71b2bc7ab3f9eb99a8462e9fd83984', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34233278994634fdbafaf9cb5d606ff27d4a5cc6a003762fc35c99281f9d5429', 16),
                    gmp_init('0xa3258285f3856a65d34b5dc46e068d4568094c6b36d9d8f0dfda0ad8402e2826', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab4a32511333418179e60fc9914001943a36dc3515d65732e40ea55583bfd1f1', 16),
                    gmp_init('0xea6c64bb036c8668b4eb3bd0412fe057a57d9324279e98cf21139610c8e1c233', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd58add042642ec76cac5fae0ffae1b1164b7ea9c4a0cd289277d1148a50a1e1', 16),
                    gmp_init('0x8ad1183e2ea2fbc1c6f41fba2b27ab6bc5c046287663ec57fdf7accb06773780', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdba9b259dded5d77f7337f5cd8a5a8105f37668a4eeebb8908406d780b1d6d3f', 16),
                    gmp_init('0xb3862d3f57535b7b5aca994f4feb871448bd9bc4512bd93cc42e928289cd8133', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed3588338031f0a4e53a635b6cbcd9300cd3c187faac904d2c12b388701f3de8', 16),
                    gmp_init('0x87fe94dc7deeab863fb6cbbf1554b67d98eee3ec1ac407d85f4e485f7266ebe3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1998f4c42e98274507add742b1a3cdfe34fc1d585b0e4b25679a038031fa2a6a', 16),
                    gmp_init('0x2ebb416d190afa109700f8008b78a1e94c6c02387b7258b5607edb4bc6415142', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfbc341c8c669d7632ca9f0d41bc43dc1efe47b273b95775258fca6c4d9aefbd', 16),
                    gmp_init('0xbd8022632f360e3fe4014b1d4957d3d3950b069e200a9ff1ed3b6ea9d3e71ca0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x829019319d8f776a2dcb6c352620546c54dbeefa7c1e27f7f3a6db8a73e44b54', 16),
                    gmp_init('0xe6a26e713ea8fa1d65888d6eac1dd9a09f47a0a1011354846803f5e4fe5fe6ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd76d18abc4a87aedb1341c6ffb4fb06dadb3140b8620c1bb8796dffee9434837', 16),
                    gmp_init('0xf6bc4da32ed96644de0e4214f7ab933290a458e775b7ccc24faa04f9bb215b4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc48dbfa12299cf2a444cd57db517ac92b41ca518e198a281a5e743ceea394a20', 16),
                    gmp_init('0xbc83cba00e1380ba64ff2e411bdbd6cd9440b125991bb5e24a0580dbea77a75b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5c0c6506167ff604f481d1a1f1753d1c5e21c63ac60fe7d02e89f219c07f222', 16),
                    gmp_init('0x15a30b860817b8850cde0c77f49f75b9baf3f51a78813a86e2ef691e0c6ffd57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b71b816fcb527914439015b8bce969c2233bc4ff408a8ef5bb8cbe596a178d4', 16),
                    gmp_init('0x7e659d1da48a8e2cde6ef1c28d738fc0e0e5b6c1f6cc11714a2d7ebbb5507f51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x734c364e4a46f62ce549cba66b4c9fe0d39d295a09a1362a4a4716a24e93bfa6', 16),
                    gmp_init('0x9951503aaa79d049de981e3520c5f48eca13620890297c4fc6fa79998d10774', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x987f256d58cff9373be71969fc3a9301e8f9257ae57fdc00cd013f88b049e7cd', 16),
                    gmp_init('0x8e92695694ec505ce860ebd60007e39e47b4605207aaffdbb7254bbc6efa35d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79a3d9da07b66a8901175d9d2a9eb1490640291d9a054aecf0eb517f5fa194ae', 16),
                    gmp_init('0x84e1dbca7254b1b34b3671b858af03d86bd425f32f79bc4d4fc65e9c9fcf634b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa72cb8e993ec35de2f50838a4e371875c41860a21b4b3b74d66ec4e5390ccfa9', 16),
                    gmp_init('0x91a660e391681a4c7b5b7066fc5d44b9f1a4c6edbdd2bb2822fbe345af0fd4a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3393fd094d5b05828a3e4caadcfc98e05dd0e2e17785b26a6ac9060021e8b7fe', 16),
                    gmp_init('0x130437bec867beb82eafeaed9c5a668d8e56b30a8a9b94b70c142442023c6821', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41db43d818f963fb8507a52f4805eb98e955273186ec58f70a5db33fc75f4ddf', 16),
                    gmp_init('0x4210da1ad0865781dd2ec30777538b8fd53db5d79f7f2e31285c41fbb53425b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa16b2886134627e15e1b4586ee5b0a52e6a0250af650694ea09579d561528cf6', 16),
                    gmp_init('0xf40598ae8537ad99913ced79d81150f43493fbc813cc801380b920f9fce93f3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf7e078e17f3e1d47f9e7be17e4834482e47dd806702f9f8b81dbe564d20d1b2', 16),
                    gmp_init('0xd8bd0f435b22b2bfa62ddbae81b2497ee6600a25c7a08da47230ae89764cc6b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd317ce2018e3474cbf6c89aba95a74f6473cbdc15f0d73583510a66b8c8db2e0', 16),
                    gmp_init('0xd61a210a9093844b99c2c3e8e3979136caa274d022b860f3a5b34a2b274bc9a9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6608c243773c85dcbc666b9ba97323b234a8bfe70a2e3338c6e3197aa3fe67b2', 16),
                    gmp_init('0xa1a916bec521c168846f640da746e03fc22b159f40c543081923fe5ce5b47a28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70c1fd6918000aa99979bc856e976e5358bc6e018be062865fc1209b0378bc7f', 16),
                    gmp_init('0xf7daabc20d5bc522aaedf6f122428543f5a9f32f61e1cb0d6d68171ca6aeb856', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0956ae2a6c5dc23206a98117d5786318496614eeb65312c13e6eaad2bc73e02', 16),
                    gmp_init('0x433fe6601144e03c76e2058af2839356672d048dbbae94572d2cf6998611219d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30ac8e52250d76b2c0733fdeacec50aafe32c900bfb0192cbc63b9f4e77e03c2', 16),
                    gmp_init('0xd694b530c099785e69aa6584002e77a06704ba32cd8786dca11914fed1dc3f83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb98ebea3ca2a60ca52f249d7cf7283488b281a8387c0f597de22de51c5fe45c', 16),
                    gmp_init('0xe0c0f30b75bd85a2de15129dd8912c8ce983204faa480e1c44a701c43ef45a22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb92902a077e8e4c785a855ff7c710084d9f8d7283df687fcba43acb80c6c0bc', 16),
                    gmp_init('0xddbbd3cdad5f6a8c0d6e697a2d161e2004785ee3d92ed23cd088e9d8baf5dd22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa73c0160adda5f421ba6b3b7d6a51690c4758d5ccaf1ccbaf59e60de2128eac', 16),
                    gmp_init('0x443fda56044e838ca55cb6dd94f50a7c793759f17755d9ca3859291d64f1180d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bb99589230a0df5ef5a97ae7339621236bba6c05ecdb6af2d86a63c3e689186', 16),
                    gmp_init('0x189e83e977ed31595724d461a33c413e92643ed05bc1dcc4edfb310d1be3a018', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x378720c347cb4f2370ed37667a0997249edfe5d21d349618c65a933163ccbc30', 16),
                    gmp_init('0x8f1bddb9cf72538c93118ac0aaa79b6d16bcf955d1348f846a20327f1315729e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa65a3767559b10fec9dba87327404c399086801c76b5d18d33d38005e9583501', 16),
                    gmp_init('0xb71ca7025cbd7194e564913cd393e2e0a8c24997dcf28874ad2fa9df73f552df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe8fd21db78b1a619d98118c1055a621575fef32f47c2bfaa64a8de543bb1b6b', 16),
                    gmp_init('0x791e22aec3256e3769e28e95f5ad13c00f14ddcff0abf88997b5d9ba30eaaf93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafcf5a6575201206c8c2557c4dd03e4dabdf0902d2c5b43e1ddaa1df0c177775', 16),
                    gmp_init('0xc19f249e540e3f43d3d10b5cc45df251fae009a7293517d5cc45b4d397bd04da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c331fd579fb7e2ee820402278b3dcca47446940916cf87de805599cb44b7cea', 16),
                    gmp_init('0x20567b1cce061e76fcf3f3d8c3bdd6506192511ff13094077fc2b46ad5d1c9c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc22f67bd7cc643a26d5c45d51f6ba24ca8dafdb00b195f64b00dd4e0d6789065', 16),
                    gmp_init('0xc8fb0a3bd1d6e392efe4e67cbee5af859da87b73db5cec2fda5beff2814712d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x509bc06c4651a320a348b4c87f844b66dd01649d0a8d9a158f929b378112278c', 16),
                    gmp_init('0xb4b168c2b72246ec1760f4f17b8f64570f65fe86e735f945ec875c988e178f66', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd8de765227b7873763de93c34d8b561cf73a835fbb8e9c71c2ebaf8017e55104', 16),
                    gmp_init('0x2fd29465be13f2d15c4c628ad1dcf924c2f73fce1940db1b2a02ef80e52e08cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd03eb26a9a38b79b6020f71756a0a320e9227bab9467b68f06eb9409f722a81b', 16),
                    gmp_init('0x50c5fcb02c21a3e76ce057045262d4129dff1a286df208f595e25f86d8a85767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3a5786fbd518e33551dfbeafaddd19187c5472ff4c4284c6939c2c7e987bfd3', 16),
                    gmp_init('0xf74bad09535840e68477b9ff4ad8210ca3dcf2ecd928e0817ed31b6c8cc23e7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe4091010eb8cda72d3ad94e07c7976fff6986d6f1790dd7e834110d03f61c13', 16),
                    gmp_init('0x81759c1da40403239486faf093b0b79f986fbdb99e1d973c3d3cecdbda0b3ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42a97041eca520d411525ffce96e5e480edcb5a7e247a07cb67951d222d5056e', 16),
                    gmp_init('0xf2fc7f66cf0087066ec36dd26b563b26b64e483d6e9fd1fd48414dc8b0f7db11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5873b9f32aa7b78d28a7cebe93fc4323ca300c28d0d9e4b67bca829e0a94a6b1', 16),
                    gmp_init('0x17a7dbf4ed5e2eb5f4e0379cc39bb95a1f5054889ffb3df052bf9f98de524c9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd6ca71b1c27964cfe232c2ed65379d66fb899f02dcb3956c6745f91d3dafd3b', 16),
                    gmp_init('0xa85130b38fde293d9fe494a02707de58a02248abee88771ad6adf1421a6fe6e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc90e300839dd58951e80957063154403cb4e6644c774364813d00c248fa8ee41', 16),
                    gmp_init('0x62f504176d19e73c9c0710c6538403625045534717accd6e47a63667c3d7c1ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5edca7ad865a3d97d4c22df9c431fb469646960cfa20d4df6bf9c7ff1131f8b', 16),
                    gmp_init('0x9e58881e48e886bc01c9d71b5f0271be33525005f0e89d490ecf0b19ba6f779f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73cfdacbef8c6a4cac9356eb5857c526aea569b7160376b3b379f9608dc703cc', 16),
                    gmp_init('0x4f80f3584201e6d2394dfcdf253517ed78ef3b9a43e85885a65e18594e1e5c55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a13c0560bc7a0a4121b45a33b771c114974f325e77d1a319c8f9f41eb597e4d', 16),
                    gmp_init('0xc9e73c13890f97ff51fd18a0f22d73ce7bde87ab59136664af7e4869e41856e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6ee9f71ab3f761cb21c60ae448fb2ea57e23b198e1539baf790b4efa70216ca', 16),
                    gmp_init('0x5594644173e90b46c820b826a8e9f4bb76eed96a290f9f0b24865ba1c5759234', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96b25656017b6e7543144e1a680f272ea2bbd34597e95935daa789614260faf0', 16),
                    gmp_init('0xdcf8a6a001b37cac00ad8e5733bf99e1890bbf98707d4f5ac0e42520e366d412', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f51c431527fd5de455322bb63570df159b20724d6db1a818d9140f3d7f07578', 16),
                    gmp_init('0xfb97b65f1e044468912a4f8d105dade4044cd7048083be29500400f045e9298b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb971910c41cde2426f12b2b387771a3ca6350eae9c043c7a49a1be4aad13276', 16),
                    gmp_init('0xac28486ef006eefbd4e2e45b3bf6811f593d79298270fae3b338f3420a84dadb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x54ccc9415026d73f20a845b72a58e5b18bd27f198542a0beeea6bc92071e5c83', 16),
                    gmp_init('0x1c433f45b45145323a8f8715dad2bf22929e0bcc5d8ee496cfd08ef7140916a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29e34b1bed8aa8149d841014dcfbe83383fd5b1e946f64b2831bb80c01287c25', 16),
                    gmp_init('0xea4397df95eeb3a3c1417cdfccd96b25cf3a198b6e15a4391d23ad1d75a7e46e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87582edcb73eff9539c22c692dccd9f22f2f422cc47467394c5e3622af76167c', 16),
                    gmp_init('0x75b94350ad64a7bfde102c3c37236a888028f0677197be86c6fbb616f4d7ff6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2a076367c5ba19eea5b5f1d3c001919876f31533ab62409f3d5be3a53a3a383', 16),
                    gmp_init('0x79aa09b893b7fcc06643a0f5bb9dce305981aeff3f598bce65f2abb22e7e0640', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a107aca1f2736db1c25b7363566f11e33f657394b821fb046723ee874de6611', 16),
                    gmp_init('0x809b26510063ef3934ce64e8f700052e075d547a5c2132ac0358ebee58a805fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x206084c4fe23394c13309d38e8962018a25280129dec7b0ce7381d983bd73a10', 16),
                    gmp_init('0x6133a0f86da016970c08a9672ceb8393f5c315c424ecc0034912d18dd8d2f229', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd402eb372aadfc9654a0e0d49bf49f6e983fd1d30a8d846fcba4ed06dcfecb0', 16),
                    gmp_init('0xd6b34030dda63a22e9a626389baba86b1a4b4c24bde65e7910593f3deda08de8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc56dd686b0fd846a66dceb631977d5bad505671ae1abb34a7748532d4fa43529', 16),
                    gmp_init('0xf2acaa85f3f1b263555d2c60a76b8c11619e467816fb7eee59ededacf9a521f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x467bb346461875155dfb8e07fec9d0a07fae3d22195d966e5b4dd60f554659ed', 16),
                    gmp_init('0xd01effd05aa978e8a1f2cd586db82cd3701bc10dcd013e009b207d0b2800cf83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa217ac1f2a3f0f18d32e184d6f066d54a251b7f48713fd2021478fe34e0592fc', 16),
                    gmp_init('0x237ff4ee54584a0f9e644eb36c550d68e860753a3e69abf3c080635e0efb307b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcf66b98f8cddc0e46c879b630e9ec7e56914d6c339885a5fee64984adc97e515', 16),
                    gmp_init('0xa70717b904461211c25b41034ec6a7b33f07458d990033a958214ea806c8a51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1c35b7e83dc78c252aa94eeb7ea8e3d57cf59e4820a93da0a86af7404e21b27', 16),
                    gmp_init('0xa622031ff4e87d1bfcd952a9563ffdb4924bb475b7c4b4f5f410a29f634ac059', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d9252c60fbfaa34751c8953ad48677086402a669aafa0dd3ba52a10186154e5', 16),
                    gmp_init('0x3d0d01dcd2fa9d7fc4493342896b4cf3aea1fb7d7c7dd70777fc93f69603a8a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa07cc3af9dc3571c7d05dacf9afe3fa3629cc4d8054c9997e8280185114a280d', 16),
                    gmp_init('0xc714b8a61a49c636dc228dc77dd726901015f9d7dbf4fedd0fad4b744a44a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bbe38b26889769c760eb5b48f4a968ce510600ef28a5ca3d3b63b62aa4a8daa', 16),
                    gmp_init('0xf85707f600d3b36f5e2cfef91f9608509902b3a4e3eb6e7d7e08774e9236e49b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc5440c597814a47d9f6cc7d1513d7f38e40cd02e32847f01c30fb77122d32936', 16),
                    gmp_init('0xd27ee9ba383e1fa72edc1e1d23ecf4acd8a6d28631e41e5d9a42fa3747cabfd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd07e95892daa15afff3e42d52f5bab12f165803dfbd492c0cbe1a18d2c2e32b9', 16),
                    gmp_init('0x774e4d6506724528731f0769f893ef4e23ed98f15228e81e5e78ad6a2c1a4f5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e4d03c45cdfa79b7500e0479b9cfe0a7c1d96f374ee4bdd7d8501ec7989a8e1', 16),
                    gmp_init('0x12f744d0815a6475aac117cad7caa719ffaf18d5f3bd674098791388441c240a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x437f6e07b86fd8fc3a06ae0295829d324275a149e19d957c7601aeeef79f7b91', 16),
                    gmp_init('0x5fe8d37ca889f13abf38b8289b15d63c589a77119139683364b6ace375270033', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b68449b3d610359a9a249e94485e9fd8c26c7286b7c73f6939a8d0d9bb7902', 16),
                    gmp_init('0xe59063a1e9379c3e0bf198e5c36d1581fceb260471836682cd7f44b1e03ee653', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd2ea9fb217fd7e77534665997d06e4635533528adc6cfcbd360cdeed45046203', 16),
                    gmp_init('0x16ad23b09f909a705b06420824500d4415dff2d56a34c3f58599f27a3e8ea623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x952c3cb1accc9ca2335955a7c3ab3a4cf04b356c1999d6bbc29b56d4c371d9fe', 16),
                    gmp_init('0x59b98546f7d62f06a7df9136f6ece5d0664464f11808c75ed76ce6d24189a13f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcecdff7a5cab844f79ca1e2a6483ee28b80a7c8a3447db8fa969ecfec51cd9c7', 16),
                    gmp_init('0x9323e54d2286800892af68819c7d0f6b0d09d06b645e5a3feb76eac729389632', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdfcb4ee15b166eac858980450b97cde51551ee775264e57c847ffc768bc2c885', 16),
                    gmp_init('0x536a2395550613a153c4fc26c82c0f411c7738947babe97575d4a6431345d92e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5885cff254b123485b409eb88958224e803e0089bac61d1e0b2a89eda94f574e', 16),
                    gmp_init('0x83216e65a72bf298b5a3b70f2ee0cade884a4c6bb7fa01c9ae6cf88e4efeafef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x157966c09be6500c8a87af3a047c97bbdb8cce2d84d79438738b852bf510208e', 16),
                    gmp_init('0x40446d5ab712264eabdff7b7bb8cbe07008fc64432da43dfd60eee250d207357', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a002f610f90a08417d17453e33bc476d23b7438180af23381b3c5d60776090', 16),
                    gmp_init('0x30922da21fee7aa1963f415207a9b3e893d90b768a2bef87f82c98a82445e13a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6b21e3c4b1e990ad6e1a8ff813f6e23e4924ad3b4852ea81c9fccbe8b96fe13', 16),
                    gmp_init('0x335bcdd8c3334d48e54b781e34eb28a2ff65509179e6d2d6a006b96af7bb1417', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d01c86339dec70595076388b655fbc246bd73bc9820a03e35790805fa8c8fa4', 16),
                    gmp_init('0x9fd55dddfa2fdca0b0b494b461a8dbd6789eb1a45eb7eed010d61edcc6dbde83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa231e4c478c7296f0b4bca9d539522d997a7b36d977fa4c7c365819ac3936565', 16),
                    gmp_init('0x80e0c98bec7fbe91c0d94ec68803cf942ba56e0096f154268ae56a0635ec5f19', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x241c567a4227f1c506c79b97a6badca61c37101cb8971583bf9f4172b066fd48', 16),
                    gmp_init('0x40a62d93d4302d4b9363817c043203a48ea87138aea366057f7d2c6792857b08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ea220c78bed1c8d609077a9243b173ca518b52ea200446642ae5b50783dfb7c', 16),
                    gmp_init('0xc644dd2f1ec88d3a27417d9d954c829828c2a2b452324480e5d9e6e88415e13e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde2fd23b826978e9cba0d3c4ab327218dcec3ac242b4c82a861f7db90df9591d', 16),
                    gmp_init('0x400d71133b6243f305ecb7ec84b92ebbda9a8a1f88c036a4b4e1973d0457ad84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c8651ced75ae94eeb27e145f21c1935558dd9397551ce0d0f02e89487d70d2e', 16),
                    gmp_init('0x9532e363ad04e53e3bb36e293a2454c8f3ed01a82d75cf129cd3da9320f35d28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8df889b0304ccbdd993948b024e11340f02f3af938fbc3772ea8254af562282c', 16),
                    gmp_init('0x74525b673205ceed6c741e63188af35e247f7044cef9bb157256abd961d195cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x211a671daacf935d439d86dca7a03fbbb2b21c2e5edd208c9ae50a7e3da4a543', 16),
                    gmp_init('0xf46d47a89bfef4a0436d68dca868838a37810c54418a6cf7532117bb36b69c0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0fd758cd98b80f8001fb80cf152f245078864cdcc2c0da6f9d528950dddb2dd', 16),
                    gmp_init('0x53e5d835c13368d5f8691fd313b08f311c8ce96f89409a7c7fd94ff873ede6b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x298a401a6ee92414a708fbc0a52e5a71e93e7ca26bc0ec3617a4f678c5d62af3', 16),
                    gmp_init('0x18f9a3aa04fe0466e40985ffc80c90df4866e6b9604ed6ef94763ef0af0a3d96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3170c58472d1a0f67de59267946335d84e22ffafa13415c2e08cbaa04f542e36', 16),
                    gmp_init('0xb2083612fc3a7fe237515093feb9773d006f75695999be1bc6c475aef63288b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b099db0c70b101c32b2db74238391dcc002060fa12bad98e94c733ab6025d6b', 16),
                    gmp_init('0x9f529e2e79a81012ade148d1f5f01656b5d4ecd04852eeb422502ca7f82fc98d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92fab0a90a2d3e029db481694f063fe5d8dda8070892d54c799b23a5dc7548e9', 16),
                    gmp_init('0x55e7b4680cb246bcf431714e0c2679ffc8a0dc68ef2d08488c712cd04917758f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60ea8cdd9a9cd83d643976f1021e038033d2e0ad04572cd6dcb5d5b2e7795486', 16),
                    gmp_init('0x262967e6f092d4b0ead5790fd0685f4b475534ed19cd709307d5cc267caf96a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91b065be180355179d0be11b192c8712c4df67d326411622e0d8050b9498f7f8', 16),
                    gmp_init('0x35b6f77fb671620ff9ff3490017e264df2c7b425789639e3c740d9e3f23195b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1228c7e6bc4d4a41f408b832247dc145ddd013e96749285924f9181974eed127', 16),
                    gmp_init('0x61044d3dde684ebe492b6cb25f9a6b0490f8cdcb12f0f7036a01cc351a1da910', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e4a1f4ccac9cb3a9c390697489ab9923ecdc737a9c4d14b51dcbee24060e322', 16),
                    gmp_init('0x4936b75eb328d7752fb05ed2406e7bc4fb00a98d954fbfe04e2183cd904619d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfa822bc2811aaa58492592e326e25de29493baaad651f7e90e75cb48e14db63', 16),
                    gmp_init('0xbff44ae8f5dba80d6f4ad4bcb3df188b34b1a65050fe82f5e41124545f462ee7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31a8747df8dc746e4c13d030696080153fe448a57324591794a16baa05f57b5', 16),
                    gmp_init('0x883a2c64fda8d58660e8aa6c1e387a321431c18c42b8def21827ee579c0343fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85b2c064ff912f5ce596645e7bea4bc8dbef3a12b228ebf5752c453f7db3cdec', 16),
                    gmp_init('0xf64b278f39d1153663c7fa2d2fcc6d00dc980b34e64cf8e08f4d08204a03f81f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7163c2b9b973c17f9571975c0d5934a4eccac6096513cca015e2e65580b2322', 16),
                    gmp_init('0x308a9a797af31fa563389991545a6b7ab841a4f4e09952d73933b2232197ffe9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x110b0376c40214677851fbacec16f29c24daff63e584d673288a5ae48607b030', 16),
                    gmp_init('0x84432b85318ee6734c6eb89f8461c70c87be1556fb298749f43aa112b3617c3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c714524875d4eede22a0772517690aca18159998ef9afb99afbd3916a334020', 16),
                    gmp_init('0x7f090565771aaf5c4889e729ff7f3d8c152fcaafe7938c2c6102a85cba701655', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18784e449f6471d714f6e1242b1caaf83295f2538bbbed4e54edd81c75a76f08', 16),
                    gmp_init('0x8d76ed7f4a1e1ae71777a8fdac71e671fc9d74a7a60a25320b39605d6b824993', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bffab8c03ab8279811b3923ef4b991f02a50c382db2670c6cb04a6a5c42a280', 16),
                    gmp_init('0x2982b620ceb1d098332ac758529f1aaa982a369aa9d24fb6c9c742364ddb9261', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58a2f9e07d05e6b9aef56dd7703a037d9c3365748c0cb03ece8e33c9fa6fad81', 16),
                    gmp_init('0x6ab64c5ac5560e0c1b682f8717fa6bd798bb2d32d300b825400615e3b109594', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9a822ba07b6bc2afb88219241f2d6c59e5cb1d7b595f7fff0ebcb0ed3444c74', 16),
                    gmp_init('0x48e4749ecb370ecb0e7b8740ff7b504f2d6abbd72aef8a785f9ed1afc2338891', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef020dcce7ebba240ee6dbb278f676fea8a99cec10cc13afb22f11f9eb52583', 16),
                    gmp_init('0x594476b25a7a14b0097f6c0f4b9695306ac300f97012d4cb55b278197a3f17ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66aa4fd12add747a9d76b8258b28b28c18b0c59b8ac074b7e788e04ab021a9be', 16),
                    gmp_init('0x10c65e609047474cca94f6c567e1dc3f9d64422d106aa10888b5a3ac03a15a99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e4a8163c1d6a21395dd144cfabfa32c4f39b5246fb56643b5c23ec1f0a1958f', 16),
                    gmp_init('0x2574a45b79e8c8d1033f4a3ee29c6fa84004085fb2c43d66a43b3f5148636f8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe31d414bc13ea8427c2b1a4ebb312cc8d10a694ea5ff8400ef0f43b30a7338bf', 16),
                    gmp_init('0xf8ab200a672a9e53a87559754bf051fc35cee4f5d7185bc0d23c40b0f878f170', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6966a16add61104e3327e0ed594519e281798261c6bdb0ee8275a8464935db5', 16),
                    gmp_init('0xba0de307a9031db2c1a5ee572c3c755e2d7453a34401bf013a34836c1d166838', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x54bc18d7a99899547ddc6988d7ee1b3f2b481ab443da43ff68f41305b76a6987', 16),
                    gmp_init('0x4b2c8c1211e6eaf37391b851ba73e2fd52eb8ed4bb73b119fe457cd05b9aae49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f380071781dff16f33d8173a6fb4d96ba770f18355cca4cb2a64c6196260250', 16),
                    gmp_init('0xb1521ec4ba6c681da33705176ca2cf621b8567660590d693b1519b2e6b011955', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbafbbcf680c1c52aa863502262b1271b788785464876750038bf47f5fd1fd820', 16),
                    gmp_init('0x1487997c9db4dd812ce7bf5ac89bc0fde81c34a1231fcad6eaedad521bf074f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99eba192aadb019f41e0be2b789273a058e6ea55222034f3ea6d95d177ae84da', 16),
                    gmp_init('0xfc4dc4cde1efbfd9f4f806644530184db630d866d7108d108da39dbe02155cac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b1938f7103389fe2a3c3bfc75c220ec24e79f2d0986e0d0e917081294299b7e', 16),
                    gmp_init('0xfb12aa6ef17102833140e98e1caa3ec90acde851f86b8232c57b2857447b84de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19b738fc965208dce81ef0ea907bf3d8b46c5f5f8fa42e6eca3a26ba0409ca06', 16),
                    gmp_init('0x6faad12c8f69664be02610b7e55a7acf7cb418df147531e7023530a35741156d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6771985cc0175907c381fdc06761b2cb71d35a2c4a53da0fd410740d10cc4c4', 16),
                    gmp_init('0x85506185f750dd98f29bd6601e5d9c3dbc745773a6ff3094c20f3b237c976570', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d50856433968435fc5945ce21621e089d4e993b7604a5fa896bf7c7f7f96003', 16),
                    gmp_init('0xccf57357e968c6e7c6bc5d8aa2c7eef9d6c0d6dc8263a0d90271ccaaac7e969c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88b7ed536b0eafc109e8af784b774eca455bcb21253ca7715410802d54242a28', 16),
                    gmp_init('0x22b053206245345e47fbf9dd3587bd934e366a1c8f83e347fb9681ec794ed8ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c7716e62ccc6873e4432457540e80d981903d7ce982ea1a80c3376ae718be8d', 16),
                    gmp_init('0x5a32ea941fcad1bfdb110b6c00dbcaeba59e60c87a45fecb49ba01cc4164d021', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37114012a86b3d2052d72b0225e875751671d2b3e71daf8016144ec9bc1a94c', 16),
                    gmp_init('0x4d1d693d51dd7390ef8c21a54ad05335c8518c362ac424838c0c0b6cefc2073c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdae897c18d42e1a11c57c7ccdf9d70e013d2b7e10192292f37876c952cb163ff', 16),
                    gmp_init('0x5f4c0f44a1b406a46322b3cf21d9789b8f0d25be5f08faef1c8bea7d89379690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc98214c8984293e34b5a32e84ea2cc350980779ee9bed36efbd1e09877f88ba', 16),
                    gmp_init('0x4ebb4e8e525afa9114c4a64677d63abeff60e7eef354c4e0a462efc87885278', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8a801d390b6698163089fea4ff8ef3ef4c671631a8e1e037048622fdf2da37c', 16),
                    gmp_init('0xad9434c776bc6367abc626c8f5a7bfa1898c6f78d44e0522a4c6789b77a8615', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad3ae029a42a10f9814e5e0290f5bf8751ac8629b640c7f1573194dfd70187c', 16),
                    gmp_init('0x2af040d4758846e3785c55f05fabb33dd034fb081662a0f67dffcf4b3fc775a7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d35c9699761e3f285f248239267756f5194b85279f96b7c60aafad170aae231', 16),
                    gmp_init('0xc7226cb62df608231d660ab622ebf810edf58aa4729a66f15867063accd6ac71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f2b065a7800cdd89910e1c2a6397ab4d9c9823c2b473903501a327426432d92', 16),
                    gmp_init('0xacfeb77e5e7a2e4eb1472cf700826c5093bf02de33dbecb6d2d1c4963e17c9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf3d4047a6d2234ce2cebb45d60d803023ad869fc32b8193ce0d3fe18cfa3fac', 16),
                    gmp_init('0x48fa6f5229fd40db24aa21f29c0f9dbfafd63ce496882975f4626d938fc7d419', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x870ac12ba3dd777468991da7fdadd0af2f3352569662876be3065e088a6edbf5', 16),
                    gmp_init('0x7543728b999a76998de7efd769d05a67d03c64022e5f297e1906d2dcf02f8ce3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbb2af6ab1f96144ea1e6c4ca311f822cb0a69404accdcbbaed925ae1f1322d4', 16),
                    gmp_init('0xebae75b92f13561aa1b60d1ed6433f9d9a9fc9787b7e3a5faa492b4f4a8c5311', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b29fd1b522213409b667aa14226d09f3adf06c6252d45be8a58ada373a6b7a', 16),
                    gmp_init('0x15fb4490352f3d4ee9924e663efefbd239d03897d388cbae0c1482074844ebac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dba7b597f261fd4cafa8a267f9b5f0bc4c1c93e2df2e8f2f069a33ca1138f7b', 16),
                    gmp_init('0x6aaf7d3e5de7efc63ae19006bb8007f58136e6b7998232c0dc82d8c7a39bf268', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbec13e6da0d5592a0bf5fef8034db346a9e8c749fdbf0f07aa6e46350c06af3', 16),
                    gmp_init('0xf859978fd619e5f8c0e57348b745e4d442243a3264edb6647caf0f7cb6d243ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x348a2e442626919d31bbe82d5f5305c6ec9d429a9b64df288da87770179a70af', 16),
                    gmp_init('0xa1b9fa79f55a3e808c747bce00230105b2a7c2c5b7e13e5aca84861487b66e82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2820910fb5e0ff1288d9640515697bfb8f8e3c46c59e494659476eb82cf4b3eb', 16),
                    gmp_init('0x94d9c37635a1a28da8dec339ec825a12c0f9bd31a62b982abda69d20c1d6df4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a4ec851999c9e1ca86a4fbf931adf5f36e926a4fd9b9eefc7476d76c4d3a201', 16),
                    gmp_init('0xc99a2ef82f6262de69e03c11a4774a8b27d31e5af73cd55bdd8596f768635f89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x148cf7fd16f0a1adba6d73897768feda0254295c49227f9ffbcbd75eec3bacf9', 16),
                    gmp_init('0xfff2799def47dcc378aa8117e505b36c2abf4481c576dd9baddd8aed8d143036', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1ba52d88334d45784e935d62ff1f60be15da68840dc1f981efae72fdc978567', 16),
                    gmp_init('0xa46baec7a86943a77c5f7cf713dbb78fd9a46cb0bafcd40a77fa482a362dc291', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2c392ba6ec31de1a7650860a2d365c5da88b77c165c55b9df392c1f5c5d5653', 16),
                    gmp_init('0x5b7396ae40589537b3010946e5903d655cd94a9f671b864093152947af189f45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae6eb3d8ef2aafd2718b7b969612c2f19414c77c175f043d228eea512350da1', 16),
                    gmp_init('0x99cdee9fb6006cae2dd034f7fc4189b566d468f0ed43da4bc73e09f370a14bc3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x55d9a959844b5aef388ff0f7aa02f29acbf5ca9aa567e0e65572aea8750e4f5f', 16),
                    gmp_init('0x69cb7f9aa5dad203766d574fbcc8ec524c9810c633ad1b15c858eb76bca97db0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c76689ba78a166138f9434c2f72e662f517323e3f09b5d30758cb4d57c6f8fb', 16),
                    gmp_init('0xcd3172990a409d3a288489b0c63d6dcdf0b11fc3136bc05f7dc5b39a9bcf2306', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b0043ebe46f3e11794d86838faed480c176eb064607fcfbc06a9887feb142e9', 16),
                    gmp_init('0x173ccf23a30dac1adb17884636222d870f23290f3a12588804b2c52d62c68552', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fb5909a93dfe46af0c6a4169281bf8746543768ce5e12441ee45f92ed69f1d5', 16),
                    gmp_init('0x549991ac0be8809f704a4e3a3bdf775425d35688fd0562b013d4fefe99a56cc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79ead27992ad6fc232728dcbb73463c513d7a5f734ff6481f6dd4ae717f1aa96', 16),
                    gmp_init('0xa95de9cffbaadabf1a6e439356256542de84d71111b3955a80ba71ce4b0a3fb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf01dee116a3e4a414da377c3236dc07445210457612d580666c3eb2f1637a274', 16),
                    gmp_init('0x24cfadbc9af48bf342615f231e1d01cae6923f6ecf94c497743fd470839d3465', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x318e0050f24da1ceb5279e3631ad743f8ee0aa059c77f8adc805ca72f93a9ae6', 16),
                    gmp_init('0x2792ee1119ce9299f4d17ca51e504bd094536fdbaed3a8ee184b5694dc447d79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc34ace1ce5dd90408ae227e16feaf2537feabb0cbeed3e03506f1270bde7bc7f', 16),
                    gmp_init('0xe1ef3b3a009857e2e623b8be80166f12d6554299bd55a442aeb63980697806c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bbc5471d2f1e43bb88032f490c0a4b495ff8a1aa3501495137945b4dd30585a', 16),
                    gmp_init('0x467b189b0c1529f04a9ee2b15f2226be09f0428102f9ead96af97eef348b05f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b4645c389dbfe9f00fbbdb9e100b796bf9f5c2298a21ba75e8371f56afd841', 16),
                    gmp_init('0xc0d370e6fb9944a30d51d52781161d80e158b7ec83fb5a87a99c9a5edca8547a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x940148c610c1fd1189b51a90f7760d78a647c001738775352624f808c0136275', 16),
                    gmp_init('0x6967f95f1367a4f77aa24c4ab505d6695d4b3ae5604e1a425d63a1115997aa47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c6b94ff7180c69c3b5ad54cd3b6d7fd6446f4c549604564d8a0e970f154768', 16),
                    gmp_init('0xa84afe0696a2d9ebd71027bdff70036062085b9673d6cb8e0a98238928f3c0e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc41833926039b49c91b56c928da5f98e864d230be511a7bdc3a13dd39f0fe850', 16),
                    gmp_init('0x3537fec9c8d40f7aeb8095d426afd558065a7ec9e01a0af01358f446bd38666d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc2cd77649dd764a9b0ef3b1b65592acedbebc89ae27b3f4fea097ba99de8df', 16),
                    gmp_init('0xbb1fc03a547a1fbe112b9429eaaf87ec450902d2e1633703d0c1f3cca78f3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2baba3f627c67d70e0c14001af96f546c0b04dddf051ba6ecfe4413774937fbe', 16),
                    gmp_init('0x77e5c765b2208b88d783b0cd924eabc9ec2dc4b190ac81109390e557573a1df4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6e29f959be28c47fae5abca185755c08346924376f5412c1d4d3d2de4351964c', 16),
                    gmp_init('0x34565d9f500f32f65052ec6cc184246def640c527a0bfb63118824bd563fd88f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8efa0f79b5909a0b10cfa381496e68943b09f0776ed90cad61e0f0efe5e84da4', 16),
                    gmp_init('0x242418e7934cd6139fa46f1c5daafd1479957c4897816035fde19f42596969d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd691d4a978970f6edd8288decbb740ed41232da85bc5400d3f9501038c0e49cc', 16),
                    gmp_init('0x7a79e7874b78f397f7fbbdb5763e0c52ac5be1d02ad043f2dd0bb4c1d00f4152', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0d4af73cb8fdb30b9d6d6d0f360db2f1f8973e31eb3f3974acaf2c0023ac4ce', 16),
                    gmp_init('0xed90f8c8f15d7ddcbbe9ccee3e52953061850b1c863aae77e3df0360a47dd6b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a5d6846a2e0d7c5dee5b7df7a7bbc49deb1352a4530f58f3d876b9f2b9b930a', 16),
                    gmp_init('0xdc3d7c096876476de5ccf03903c4ab58ea5b73435e27168586ff345f3b2caeca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b277f8ce445915bfd851c4d332b75e3165cb495470922f00bc6e130b886719a', 16),
                    gmp_init('0xcf44d77b164543bc6e4b52ee69ec913955213780cea31a3d078b30fe6ed37c38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8764496a389bb5262f0431412e275df87679d056741db59afa7dcbd2816959ef', 16),
                    gmp_init('0x599b69d61d002ffd9e0b412796ed961f2856ad4172f9e3f1660311cbe0cd5010', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x829b8dd0ed5452e8a6d6f71b65b85f9038d1d60251256eace399da6192397d42', 16),
                    gmp_init('0xd300ec543fccf46d99e73c8a896241af5c5adc4263ad1a5d91b71631e3df5612', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94d393bc812471b133de3fac17adb8cab0bb506a871c75b9639409ce3aef0f84', 16),
                    gmp_init('0x5a826ab4eb4b63f21e1cbc386b239a07dd3f402650acf12a85ae61b9378ba7c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe925a006c6f2a3482ea231dcce55180f72a1b40690a1cf86eadecf09028cdcb4', 16),
                    gmp_init('0xe402787fad4569964dd045436194510d8ead37dd62073759bb9619760589af3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a72b5a0889e4e2dd17509702d34bd2ee2dbd126564aa3b4ed455784effed1b7', 16),
                    gmp_init('0x3531e6ea4a1d20e2c8c33fc047c8ea9685e64b8ec74d9845b5f29fd89601dc5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88ef3688969b1509ec01db905a3615f7cfcf8a096442a045368f5340ea0046bf', 16),
                    gmp_init('0xe4204ddf22f356b9df93deea7a4b46fc8ae2d212f193196cebe6ad23bfa86f2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd7f01cfc5a371e15a78666f2fade79009141dc41d8d9186a02043f25d0467317', 16),
                    gmp_init('0x888dbbd987726c26ec7361406c15ef5728a01743697fbd895cb957d5cf7d014e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbfe86d71283894f072db42a73b408f285d6390acdf4c55033be1811b6799f9a', 16),
                    gmp_init('0x445b3c7d17c68718a558a73fbf3e51fc7faef77d234e71f850de611dc79dc6e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e50a0b9f77c371bbe80bf9d91e31206e4fbb9b7c774087c3bd7590a7dea02c1', 16),
                    gmp_init('0xc3405d3c4e0fe29c616c6f1ddb8b95177423934f158e1b2833c946dfed45c201', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xff046a9eb2bfeed9c00f2ef0796f458ec141c259a845631128a7d4110cb71280', 16),
                    gmp_init('0x432f55acc0953a170a01eddbdd4cfcc9012b6e6ebd28487a7ec3271f5ec33919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5890c0f334ddc2b08fabbccc41287df4011745f856de35acb2bd41c7b0b3da07', 16),
                    gmp_init('0xcc9eac788b1d9c045e4604fa4f79272655a279ce3e2a8166623d0ae88d3813e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf717c45d14d3dcd31a95bc1f5312231fef2b1865ab6a77e25f2782aa33ca3ce3', 16),
                    gmp_init('0x422c40768c99512dca9b54ed0aadee55af53e2bddc176df06894ccdb50ed88e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eec95670d54650cc14b66dd02436893ffdc67942d666817fdc73e83bf780c2c', 16),
                    gmp_init('0x14bb5350997732c2fc281de065ea010579ab66153a07ff89089ec1a1edbfcd32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60e269b4f3370b20c2feb5627f91b32c738e097502a9bd9ac368430d5b28cd88', 16),
                    gmp_init('0xfe00175a6579f0a9609211889728df7602456138c6c846b0e29ba8a42be2066c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2209938b8c24ad5601e037acd13e8aca06d74f465c3813b80de04e8ff43fae7a', 16),
                    gmp_init('0x9bf8e087b32b55a528002f3a42008c8c53b8e6af17afd946866f6aa1c7e52306', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x799297a1e67399490aa5ba05fcb46855964bdd1704d0536b153b1932861cc594', 16),
                    gmp_init('0x132ff18cd523c9b0e1069118789fe50127da86ae0bac6e909e9110920f8d309e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0e2410cd09c01a1b79470f6ad3da82908f69591eeb51bd853d6d6e9019fc555', 16),
                    gmp_init('0x1e29648c71bfded42ac3b57ba5b2fe898bbaf19f6b667930cf340818c1ac6d8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d9be94efe42807079ee0eeb5501241dd8d190adc77e1b16dc8c47a2572d0aba', 16),
                    gmp_init('0xa9708db5e9e898a2295ef934b619d91bbad1c67988b710e6f8f731fb31fa0876', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7ff399f359f33adccc8b4d00c53d2da01e8d05eeb9c3d7454bd04ac01a9645c', 16),
                    gmp_init('0x4dddeb8f46852216672efcbb7da1ea092a82a5219723665a119c0cdd46b6edf0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2127039ec882421660cbc6531492c243cfa62ede506d1e31e0c07b48355e8732', 16),
                    gmp_init('0x85219c6f23ae35aa0194b9dbbb7f0a5cd693f3f3bad7bd68d59235f460cacc07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd659b87f2a2ad4017e1b44c540379e31e6bcb55c30a0adbc6f15b01492205e77', 16),
                    gmp_init('0x845d83f4f6e49e35fde13c935acb728776a0b2eb631cd452e15820b5b448991d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfab5b54b2bd8e0eb97ad0f5aba02b42b9e1ae3e6771a53226091340cf2083347', 16),
                    gmp_init('0x5758d116186d41503c87aaf2260a3eafc05e37a616a69afa9ccc9cd83d38fd2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91fa0534bf36fd471f067857de8521d0a49cd1b2e4b1fb8fb4e7eb431114cc35', 16),
                    gmp_init('0x358d02069a62fe2620dd5a3ce0f981dc12688ceeccbfa6845638b951bc92cb28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x685d275727971fca579096770b7ea56ff3842e4718f4dab73f672614ff572554', 16),
                    gmp_init('0xa82f89c220ab45fc06e39c8041e0377cc58aaa2ac0f4cca4b71af6d0a0979e03', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe486c7dffeabb058c1f9aa2349ee7eff8b2c7e63cf570cc5c7d0b24cc5852e50', 16),
                    gmp_init('0x51fd75ed5606a12e9ee88a5c9f51e05a694463d63392ebd866ba3cadaecf107d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69a16e245a5fcb8821ff1441906276e963ad9e86c339d0ea74502ca378692e20', 16),
                    gmp_init('0xa7c968cd891afc0106f01e9a4cddba10113d28620f7da894996e69a9b3116c8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4acf44bb8e2ffb7c964105cc66ae0415142c86735b00b1dac66aa6455c881907', 16),
                    gmp_init('0xad99a8fe0ffd587b3544285ad10a545799352b2f7cd84b252926b456f63cdafc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdcad8b2a7eefb2c721190e12fa0e745a7a39f95bc79b0d1747bde79706bc8d71', 16),
                    gmp_init('0x8bf1287ab91faf9b2211993ce07c0fa32726c4077b717b56470cfe2ea297fcf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ddf22834188a649dd7aa292c8234eec34ffa562b601a2aa82bae0697439383f', 16),
                    gmp_init('0xe71c627b0d91883d74abae97d38c0c6b3dd5d045131f8269632fa81823d52337', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89be840a1731eb21f3f78331882eba59ef4c1ad601c829f81f6b16a30ef15db0', 16),
                    gmp_init('0x70ec8c193cb32816f4c5644675e9016c53b9df77ca29a81f791d68c71d0b8200', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58b065791379879e1334e9e0797bf39ba5353afcf865df8f26dc88155822b4f4', 16),
                    gmp_init('0x55a98aa4145a2c37027ca55f0262836c1ca4a076fc4e52596607a8210c60fbca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9f8b3771d318bc54dca9848228c57c413fea55aad0e2f87d7273629aa99ad56', 16),
                    gmp_init('0x7aad641f0d22377c6551557fb70a4a3995de59a31f63cb4d4e919385f5c61b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa345e058a64b3529763a441c23381f358a3173cd74b4ded14b2bd10c34fe39b0', 16),
                    gmp_init('0x7c6dd5a6d5caa70f91f0855b28f9d949ce8c6a75ab369df53709480babaf79dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e218f3b641dec95513a7190e5207a865199c8df557e0d709dde20720523a7e8', 16),
                    gmp_init('0x65120ac1efdafa5d445a159d2bc658f9ab9fa70fcc821c50edaa0ed47090db7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a10bf830190a2c8201acb8746d6ccb6afd0bb9fe43adee13fbe07b9926695fb', 16),
                    gmp_init('0xb5d585b3ec1a271576203848688a65c5f28fea6c43d45288755c72b2a4eb7e47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadbba24f50e000a2fed9b396fbba71cf5cd8982354afe75bd3df8e1b4354f993', 16),
                    gmp_init('0x7c112ba338a4d9afd3628f1206ac8f2d5c756a550b61eb2625b83ac1a2af4773', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12fbddfac9010433ca5cf5ac30912876a7b0960a60584596241a8e967d2c8614', 16),
                    gmp_init('0xa5ff20d29027806833fd91428cd2cfb54d4258239c19f495f077bc1d58b0b174', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c8039bee6f3994c1f455e000cdb9fe0d77460ea61c45079d48a96f55c19970d', 16),
                    gmp_init('0xbea167d2487ed35599fa1ce5569edebb3afbe1730e033715c25775979ac55427', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bece859a2b978777b8ae3a1faf99a3005d0794ca05afc8653f764302d9aeeaf', 16),
                    gmp_init('0x35f933c4c50651fcfbb8910b0effc368bb22038f6f8980f755a0da3c85f9eb5e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf41d7f4bb5e50430cfe08cf8b5e2ee0ab63b9998a43d1fc584b6b8ec2b519178', 16),
                    gmp_init('0xe6a669bebd9af8d6f1046de3faa82347ab49acc36919e1f9a7a1665dca6a3551', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b2369ff19ddd591f85bc3da3881ec450d80e91bd6616f3d2a937e108f089b4b', 16),
                    gmp_init('0x5df102ecb29a762c2d22213dd27d78763970e7b02723e7c1f065556f67f00f4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd65f827ed62d4e7f3332d691d62d3e611be82ce1bb61fc8b1a71313e1e3501d9', 16),
                    gmp_init('0xf24b60fcf09a90fe537b7ca5166b87fc61c13aad5d730be1ab9446c6eb55759e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeca3eef00455b406c7661093249bff8f997cd06e999c1020bb180bc7b8352aa1', 16),
                    gmp_init('0x9e6bc281e78c25b8f6b863f37ca79007a8359b399b78ed2385f3ad39ecc12ea3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55a9b5b6deb05c385ee6c8b5782cc0ade7994df35fe2ea12cb62fe240f2ed84e', 16),
                    gmp_init('0xc4f22196ac9f19ab29174d190ed7f43ae8ffb4d712a0d8f0579dc550546495a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf91386ebe69ef8cf41bb5a14a5e51ca1c20e8839a7615c7ed6d4d26b5e4c47d4', 16),
                    gmp_init('0xf43574316fed3b26606f08dd4849f9c45b8e120559b73b3f37d18a490e9cdd72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79de576dc7db71da1f7ed60a62548bc49fde1eb648bc00b29bd2cf87075495a2', 16),
                    gmp_init('0x3b2d3d0e6b186a02785e6dae47dc79c68314f5096493a746802c8c6aaaec6fb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c97699d44b7daffcba214b7fb45ea98468f41ce1b0dad7bfd94a8b61a93d03f', 16),
                    gmp_init('0x4737a353a4cb0fb1238ff9a6ca28f2ec20680f327453615967499ca90e6f2ba7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe04e32162404b6e264b3695957e55524c3ff903511964ceee92acc82d1e7bb', 16),
                    gmp_init('0x3987db5022f6358fe5d6cea57a8db34e5b9164646f046a8cda759ad0da62e84f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd5b806ea4c696e07cd6783471bd61bfc7a08f60a51a9ad2c53009ee20ca9e67a', 16),
                    gmp_init('0xd4d0be409375e77132f37c90d9e4c348aac0b16b6e428e6f784a6f319b05f005', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3af4990957edf8f150a94a6368d224e24efcd577e48085c2101a4aec69f7c360', 16),
                    gmp_init('0xd1706030d3b1d91d531f86482e733c3348554dd62760895cd39dc2aa687d7a7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12d805c8ae7f1af3ccb1033c5c15b2971515a21178ff09f31c72aa59df7f547f', 16),
                    gmp_init('0xa431415979654ed138036615a3b8898b8657a4c14ff1c6d01a31bd8ed1e68394', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31a7e05c623c8076c1a582f3fe227c4e213d06221263d3b539a523ae770373be', 16),
                    gmp_init('0xc23d2ef3f8d1de67021b0aae3423db1e8ce82b9951a254308ed78790e90950a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0c2ab52f8cf7ae02f8f451d94774ee2c82bc56a88cbc44b9ea22681c57e51d5', 16),
                    gmp_init('0x9ea4f0cd1f306929806cff053c53272403891da1c8fd0909188896aec0b1efa0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x740a66481356d23ed15513462dd98458a33a9fbff13e24bdb42610edcb923b45', 16),
                    gmp_init('0x7f6d048c25cd523f2f4e4788a75606cfa897993907c8480ba8c13e3851ecaa5f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a5b506612a677a657880b3a18a2e902e9a521b074ca0141a84aa9397512218e', 16),
                    gmp_init('0xeb13461ceac089f1c42604fbe1627d40626db15419e26d9d0beada7a4c4f3840', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc8fe9ecccdaf543521473143eb337c5da74be4d8455b67c1b68edccbf8d5842', 16),
                    gmp_init('0xc2a5d01cd9f2fc3f75cec6140b91fb775df1592d458677c8567e1ac9487100c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1064063233318ba085292ab99728a9e3bbb9026bc697339152ef40e2518473fd', 16),
                    gmp_init('0x9c6832823b8ba2d8c8e7829e6585883ccfbe190d0c21d039afa6162e785cf805', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c881390823d8ce8006b50f37e8626171b0b96cbc1184de23f389be0c37da54', 16),
                    gmp_init('0x82f5ca516726bda3a42aaf13caf61ae4b3e32b21384d2adf567c651408ee3df5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38c8ad8ff05f27bf5eda410d54083f212b423ed2eda238dd3567eec8653f30f3', 16),
                    gmp_init('0x83c2617876dcb116f3909654ddbd641f6583fa982959df37a060e749ebe9217b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f789c12505a876c23a5d12e930f5e51280398b6e32d8d7762b66e34fd7046cc', 16),
                    gmp_init('0xd0d9f1b3a291a6e564c974dd964e47a26320de848e0b3fd61487856590683e4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fcb8cbce860bb095858fbe3fd35184277a9a2a38f920cbf543e6911b6ef1584', 16),
                    gmp_init('0xa8f1a83d8b721d76d54c0823ac30459d5992f6d6928a4325c3c9f7c21d3110f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c7a4efa52a32680676e37e7fc8b8d71cb4cb3a72a5c98ea355c95a1fd698f73', 16),
                    gmp_init('0xa2c4a71ab2150c7b16c424c1d0ade69b94b07cd5ea879e7c122443bd120cf142', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7811d0b93f76e2bd73515c90de45b0ee50d71d346764078ce8f51340462255ef', 16),
                    gmp_init('0x99bb76370bb5ac7a54c02e9401b85132f51ed0513ad43768a58bef9b1be3252e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaf532bfbec94d7d3798d6c6e4cb1ecfb998a3f0afb9323a1bf6578b3517b889', 16),
                    gmp_init('0xe7bcc2a44e4a22d0f1b51983b721939dfef1d3823e27338ffa19fe6749fdca6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc3583d944a8b50ce0c7b729d5f816f2a9eed0823a3fa865093e110f1353d2ea7', 16),
                    gmp_init('0x53967ac09391e90f5964627ef89fcccdd6c925a6515f1c432b183e9e0b667bbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x280a27d97ef8d60346e877e467a90e1a4f6c1826b9d71d5fdf0b36a7a032c75', 16),
                    gmp_init('0x8ca3591d1507693c41351993ed79a6addc7171891f30fd676c3043cb76c0f2b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd591cf283cdee501f3a0f018bb7ad00d53f213a6628401658eddf0e0502e3099', 16),
                    gmp_init('0x87ebe5cfc478e6e44e51330d350bc5825cf2eff88b116fd633bc2765455ac5af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86192922e83c5bc0829800f8315da4d5dc75980f62e2fba9c03562bd884a85e9', 16),
                    gmp_init('0x9a468a0e4b1b52df9f84e2c1fa2cbd6872eb2277193e431f34b026a6cf94138b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0aa0d612f3235c4c01241e1a4f9e8714a435eb5a414e6b12b26564632a940a5', 16),
                    gmp_init('0x22340eba76f7642819b34cf9a0181f3e6c691cdda7d1bf9393f882a68b950422', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2eb3910bde2ab995012c29df8bbe0f5032c3b2574328e5f76628d837008e2df0', 16),
                    gmp_init('0x3f29c02337474b3a77d37d348da4999f9540d120ecf65f490910cc4ed274eaae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd32e851a25c965c2fba2f5bdf8f0482610ec719690525db1fe39d9aca1dc428e', 16),
                    gmp_init('0x6bec05a1fcc5d64e45cc6d22a98a834031f58d904694f768b551d5b501cfe158', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6e9db88e64c7ce22aabd16a780900f0a21426e21b190a39bf02b84b682867f0', 16),
                    gmp_init('0x53ca790b7ad2ab7481d93b76e8c0d5b127041ba5f970b623475b3af10f1861ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe644041c2ed2cff4f54d0746449c0331c681312779800dbf71fc28e6e42f662d', 16),
                    gmp_init('0xbc79ffb9de665acf4ba0050d00c7b4d052e1678f917fd7c06711c11d66e6d591', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd1ddb38760e449d785c15b9b6199a5ef06d5378a34539409add0438f20d6102', 16),
                    gmp_init('0xcb54b8739050638aedaa1f1f7883b700163e191211513983da0a6491ae003b7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb14b0b942c15ac6974719da5058f18d77b825cffa6774c660621d9f7e801ae2', 16),
                    gmp_init('0x96ae967f4513a67487483ce636bac7de795e4fbb668561438b0de51e5c1dc5f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61a273c22599901d9fe4a73e65ee698fef6d940902dc15b6f3f7341dc2c77cb7', 16),
                    gmp_init('0x5bbacd334d3ad3d3f4ea219f5eeb0cc9c5c5ad9a70ae1f74854611f81ddb25ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa626c3f311cb5315b59f52272ca6064b4c287dfb6f6e6aaddd030872b7314c65', 16),
                    gmp_init('0xbb882a6b990ec04cd949b781e9efc624ee365bd68035523ab6607db5a63f1919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd2e8e65ef7601b64cb02c98229d04b55e173a38e30f292db998d56e377d8976', 16),
                    gmp_init('0xf58ead362342a31ffc31ce8f2d46ff68f60ede0f35428c0511696f41c867bc22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45af3cdde409657d16d066739a778615af13ce53415b8d3eece636d0b24e5799', 16),
                    gmp_init('0xa4988caf8a60d7a73b941c0c7496f37c1e0867d2e800dd10924a679bf98c446f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bd61f9c38223efb40225ea8a4304c259a9b07eaa3cf1b86609b306c2c67c998', 16),
                    gmp_init('0x77b20409916c6f5c5c8f2096969450fa927d9c1e90424b18c340af9c28199514', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50c2845be4dc506f2673a399356dfaab886df7cdd3beb5341e56f33244c73526', 16),
                    gmp_init('0xad81723489b95f70a6a8d73b5fd47d25d87e018a680d49e2a744f4de53d49ab9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7afaeb4f7970777512ae27a41117a016b4cd7a97701e22766a45e17beaafa568', 16),
                    gmp_init('0xc6efe61933fbd27d895d14135041365a972e694329d390233ed53a2f81c1f2df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc402240c35341fe59606dc354dfb1fe3d0c0108d3434b8d5cd9a87b3cc16c2f', 16),
                    gmp_init('0x61684deb17df16105df2a69a71d1d7604e33958f7033b3c9c4694cfc55d78e18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9a002227e2412f9061d94c1496b0c3b483e629cad1e98a8b7e703e50e59ddeb', 16),
                    gmp_init('0x975eb2f93b7a022c43c60f8a436705818562a8bcab5f18ce5f393ff80f0af5a4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7ef2ee3c5c792a0c0fef6335224d9428a7d2c98f6743333ec739a5ea3ecca7e0', 16),
                    gmp_init('0xafb6862730acc011a4f67f51d5e609db81b21450dfbd3d20302b22dd552ac094', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x646472486e68db193539def6986c76b5e880be50c09223c6db02c92ab896d0f', 16),
                    gmp_init('0xf1f4ee22fe7063bbf2b3f5cef9047cfedb1b895dc63b4f9090d74508a4f528ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3704572716887acd7624a576c9d9c641cae4cac611807a4172f3583da33f0ffa', 16),
                    gmp_init('0x5c6408c61a71e74f841bb4bb8895ff4c57ba3eb7aa8bf2fc5fed3fc660fa35ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd42e1f15292fc712ea713544ff03fd17beb467e384d570b699c584da8d5825e', 16),
                    gmp_init('0xadda2b0a21f69acb2c1f17a55a85ca7e0c4cb2ec4b4340cbed1808977a8946b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2a979e54298db722d1eaa42c08bb697f6c64dc6814a00953c6f986532603513', 16),
                    gmp_init('0xef9dd74a1e6eb5c854278081935bce7e8cc666df4815144995755b2c3c3505b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae67ecd7d603693a3fb48be1f115d6874307ad9549cf786fdfb7dbf315fc7295', 16),
                    gmp_init('0xd23cd2aea5faa6d2072b94b84a82d9c1fc3019722c2aee3404ff9c5efa4f5b62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9f4186ab1fc59e1172bb15cdb17afb9681f97716c302e01e646ffb1d9fdee3e', 16),
                    gmp_init('0x9420a7f3cb3a3410df73142b883214344e1531c7b58df4f51e66cc5cced22e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44dc4d9e945c7db20e19d0c28f9ae7518c3b0da6f68440e7f9c18a469ad780b2', 16),
                    gmp_init('0xdbeb918745c2f9c9f8fd19dc683f5f95b47775e1c2cec39d91437413ab93b11e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27dcf55b80480256b08a0024f83bb6a4a9da3f7b8756cffaf0cb3e674814f217', 16),
                    gmp_init('0xbe18f54f548d5dee0bc8bab094a02a380a4e8fab191fc3bf14c94b588cf2ed4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88a467996ff7321bac8c9bd589d5cf2e64e639f9657dd5e0362527575748e77f', 16),
                    gmp_init('0x13bb751380982f1d0b2703ce8ea583a75f7287ff80c02ec5b7cbb84fbe6da255', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b8b0203b256ea4b9c8d24ac33959187313ce5b9b84cfd4a75a2a4fd5b9e310c', 16),
                    gmp_init('0x91117c4eb033615bd6176e377c4117a6a8ff804b82b3058399416605ad19fc9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89cb789f517f1ff2c6e95c0a52d798d114bf635521c7ad1cbc65da82a6bc3ae1', 16),
                    gmp_init('0xa3a9f5d8efc0f55fdf6d7ebf5b94658cb6fd080bbfb07dd097c3234e607ff499', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5e7398c5bcc103a105c2406f914c3372a4ff1e8c7f3c15f8f1e1e2ba7615b36', 16),
                    gmp_init('0x1f3ff58dc974e4ce46438def2a15f8c547ffc19370b613c04d982e3949136d80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x869cc5794942b544fe08d7bcb9e9cff57b4f1b46873cc23d40423ade3c0ff1c1', 16),
                    gmp_init('0xc4c2ef2e96bdb88fab2317c57747f0c6e8ae4078a44f6597ba20e3931d28539b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaad218355ac9532bdee0443ff4eb61fa47732e1ac8b87159bb7b0432ed3e10db', 16),
                    gmp_init('0x793b1eeebaf82e3b3a7dde28fd5f8b4a72032772b31cba2763535abd6fa05fb3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe51416421640aeb57802554eb5fa77aa9cb53529975e04a6701f090ec49e853', 16),
                    gmp_init('0xcf331cea65905469278eb4a53a91030df568394190c9ee36336e3d1376405cb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8525d0b3ef76314283d8640f8db563d543e17e0a2710f1a2bf7fbadb5ab7aa65', 16),
                    gmp_init('0xe63a7e111f91fd606cc431c1e676976d0dfccc1923f092af9be830fdde8648c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x977ba06765cacf25de8ed25f64c0c6771bd3d92295f80f46c4a23f1c1dc6afad', 16),
                    gmp_init('0x1bc3bc43aedb8fa28833faa0d081d9992f75a1241dda1a154d62cdc51d7faa09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b3e00b320971112b39e7d7665bc22d4d8432893c3d8180f29dd16ed044c1b21', 16),
                    gmp_init('0x9b442543faf3e2d2f11325d9c0df76844fff41a9f0b6a9e98de24014b7f594c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bc328612a123abe4c3cb60771fffacc10220fd02f8eab7865f745d7dd81983b', 16),
                    gmp_init('0xa6b5826ded0c8a20250b305caaf00a7f4334885a8fbb848dbd99f28511a637b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a3759b87c0c6228171864fbfa379a1e5e453919505c7294f30b43ae18cbd32', 16),
                    gmp_init('0xa88356cc1f9f211f1ea5d75b001e1e1e6419a83a7c8df6d0c327f4e1a6cf9ec4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67cba4e8e9ec04ac51baefe1caf96c21ca8cacb7441f806175f76c1ff7c8537b', 16),
                    gmp_init('0x5b65ededea1c8984a1e1c61f2fb1cc047bdf043ed0403f6e1ceb5057385726da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x778468f5252b48e4899db93959f2e87626ddc475bbfa75b7c828bbee5ab90065', 16),
                    gmp_init('0x43341ab10eb39ca06f65136a7f01e2e927bbcaef00acdaafc8f76aa2f2d79ff1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5958ea6d57499931a073d686468f3922af9e9c8ab546539368228ce4b6a1226', 16),
                    gmp_init('0xa031a882f70f7dd7ecbe19719d45bd8296876dbeba2108b91c100688c66961d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdec3480f5d68a92edf310940fa30d6040848c9c516ed80d26a9c32597e189f07', 16),
                    gmp_init('0x7332d2e4f241e886436ed448431a7960ed5f41f8cf2193e81be2ef80b18ca938', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83f07bf82e425ca7c1fcc0c3c74a5fa025c75b8c683c5417e4de3f85b3713a52', 16),
                    gmp_init('0xf2ec4f10a25b8bb9049794c912c7d3cfcab5b760e1fb45d2a111273f9fb0ffb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x439f864eb2f0852899fa24688e7aeb3727a76bcfb6baee4c627cf469e42f35fd', 16),
                    gmp_init('0xf56850929086dccc7f3af4671cb58401efa584fc6ea729153865a5b530c62d57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x938dba4f9b5a42d4e6f680686eae0076d855d8d200c265539ad9a09121ba21b0', 16),
                    gmp_init('0x48afc0a89af756566e9aadbdd136b90bcbf1bbee3f2b697c374d995e4d5b4325', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x613483aed9ed08b7e70b585390c06d34a7bf278fafd65aa7e792984f403482fe', 16),
                    gmp_init('0xedd7bb3007929c3b3e6f5f2b4585ad862bc644b0cabb61a555dc8a6d37d1055d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7efa89b76ca031e73a81daacf3b49779cfaec64f5fe76bcfb53e49a63f2b24f1', 16),
                    gmp_init('0xa99ff3ec61f4aeff78ced222fc16ab211dbadf3ac554a455d65dc5d4af8e4b83', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x224a02299eecc99a0634a786f116445779c3bb5b5501d267f0699bf9e2f2b734', 16),
                    gmp_init('0xfa41a8d29b6d22b4149a08ad871d7fff07b704b673c7afd0840f585491ec7fdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafd35b35bea5bda1760f78b8af6b2261e310d10e196e11dea8df3dae1991e607', 16),
                    gmp_init('0x3555f48e204e99496d8ee266b81ec93bab7d9872155af415e0b73bc4308126f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe63502ee153cec59fcdadfa688b6f24078368280c2a4707ac9e92f475d254033', 16),
                    gmp_init('0xa7c5837b1f621e11ad74e80f0709ce482c915a0c4bfcf3607e8aa88968f05e3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5ceac4035eb4955a0c7cc97b56175d505174da42f93e68f7e16cc51f0b9a00a', 16),
                    gmp_init('0x660cb9301fcd56b9854a459c3396d1e48ceddb7586fe794f157ff80e67984a57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5648dec272eb968712ab45c533f000e2b1fd631dcb982cca2b9609afe1e08f33', 16),
                    gmp_init('0x95fddc70708f7043f478f5c64d77a2693e72bbf2e011795126eed9ac4269f1c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa643c538afc5667b3e774b6d5268d6931f0ea68ba3187b918daa3455e8a5c546', 16),
                    gmp_init('0xa8d602ea4377db0e460033011cfd35194893db480dc64a7beb1e337cd3fff857', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1941c19f3380ed2695152f8ecbec8f03c5ba57757e3e8aa4e3b8200bfab98c43', 16),
                    gmp_init('0x8e66b834595db2b6e2b6db2a48fb8c53d8f62d3db8df56398fa210da22abe217', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe415c462be679028ec64fd2a2b75f9c944995a27d329c764f556db22343750b', 16),
                    gmp_init('0xc3056e7177f984e227bca21077f8cddc6ef691a45ff7ec06a6097c15becd56cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc586431d10b4bd67fa73bde364d8a0bd73321b9f79c0189e6670d1042d8c2f4', 16),
                    gmp_init('0x99fade52ce8ad9564a33c279e6bdb4ab29e2cb05ebc338b40118c88ffcfd274a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x956d85ac3fca3e4f3a3b61f117d48acda172f111c50c5f41830ce044e750b852', 16),
                    gmp_init('0x371a37ccf6deedf98911e9cd3b8293a72dcb5b21adc5c7465f09724600eb56d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xee993ba6b0c4f1dea9bfbacf9af2d6c207e0bce70549a42d12b077f1d1ff0f18', 16),
                    gmp_init('0xd87fd4d94578db2c1f6c5d58ce85bcfeb435c80df70f2cb18013876ca50782ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd9bdb44b1b3520a36148a999fe559bf5e4066263414b9d7ad77107b51f2ca098', 16),
                    gmp_init('0x552624fda1dd30cde5e5518457563f010de0c9740ee3ab327406bbd75abca6b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba49517aae9fe2428da0dc41a52f31fbe5a8889e05628cc9e47a7f754fdde3fc', 16),
                    gmp_init('0xa88fb6e1ca9455950b4ee4376013359adfde1c81e3292caaa3efd232efcb7d01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d354193d97a95b878a0d632207686b5c365429884f435b7dc9d02357a6fe7cc', 16),
                    gmp_init('0x6f5d4e0da08835283f44255459cdb5685249918f8b53468cc41afb5feebdbcde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3398f17422af1ba4de2cf82737612b54a64c1f84dd2017378892a2f7d14da68', 16),
                    gmp_init('0xa34ad4d4d1fd3d60eb7252d1e8a2b020afc7a7922d41453a3f07631b55a90e3d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a89a61457374b4ccdb5d111b56493fe167d5ee4d1041ce2ea6065ad7789b84d', 16),
                    gmp_init('0x45b04e87ed480d5c08c2ea979fe677e6a72e280634711999ef9b7d7f018e3ea8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55b66e6dc586296f8aa4bba0ae54ddc73bdbbc488e7cdb0820049d0364e11f7e', 16),
                    gmp_init('0x9043a91f1dd1419bc386cc04cca223ebccfe610621b594f904bddc671c77d076', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc9f9648a870ef92a2a9b30e781377c9834c5ebe073275936e76b23742e14c34', 16),
                    gmp_init('0x829bff2cb5f8c96f43116633dbe689db299917f1828c7e058892157a94be556b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb3ebc91cdcb79a8ab1d0013a1821a0b06614d6a97448f012046400ecc4bb506', 16),
                    gmp_init('0xa95a64538a676683af1a685e85539258b21826f5e8f7d202cbdd181f49b3e60a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c618da1faad041af4f58c1d0ad98a758d4286c82de5e74e87de6c8595de4837', 16),
                    gmp_init('0x4c719117bcf3a19d88b80e3849fd9671ecd36649642278cac0b8583b634a7dee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22bdcb12aae2c57f67de7cee87eec09af08dd2bb64e18d8cb6ca448b40dc67c0', 16),
                    gmp_init('0x53ef0c95ab3e7dd1b9987a8f0d909c4775fcbf3b3b89c7748a9a5c843b0e7ddb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab8a886a915a06a2e585e2dde671c11ef2cae15a368a6c0c2589342656635396', 16),
                    gmp_init('0xe773cf7c7da843195668ff8248bcd5abb9360583f7d2d6ad7e38fa6a3fc92c23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xded37dd152738517b92174e3aa64a3bfddfa9e91c66ab7024f5c2279ade5d1b1', 16),
                    gmp_init('0xb14e3c5a84e78c402b3caab3824544b8f43b076d5912844881cc777712c778bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62b7c8514241838cdec664b8b695604aa9e890866d069a35ac243e5881df49c3', 16),
                    gmp_init('0xa71ed62152ae0335594896ae8d4922db8fb53b61387cb5509be3680ff6341c21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66cba1d92cd4a26d93db846167f0e9604107e653812f738a14aed835cb801e98', 16),
                    gmp_init('0xfd5ef5e6e6fbf96666d9066ac3917211d6ade86959a30e4a5250d590dedaa27d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4897bdbfa45c89c5f9751f0869dfc9791b59f5de949f002f3af146e2e44f47d0', 16),
                    gmp_init('0xe77dc20f7afc138c34e8eca9417b093f526da001a8f0119581e501aace1320bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x520dcd49abd6d7a3b9e33fe845fa5f29cebb8dff96c18e27fa41e92588e11179', 16),
                    gmp_init('0x360604d1b132f797a20562961f6a57794175a50fda6be47a38f2b5ed1f6a40db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb1cfcb556486576c451e07bda722f2ecbfa318df6190786e61bce9b71581bd3', 16),
                    gmp_init('0xfd47ce7571f94d205044005ebe4d6e3cb39cf319c5bd1a645bce8d985cd98a09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b087369f3feef1cd5d0927a529d94a4322c52732fa98ed72781cec811281711', 16),
                    gmp_init('0xca9dd09cc5bf86d6fcc732c222b78cdf1327be68971fa79d04bcd9b5108ec5d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1fd8bbbe48e1e09c0d54ac2e72576a018b82e417b4c818f90122bdb673a3111', 16),
                    gmp_init('0xad215d8a34a308569bd77e07bc0916c0c7ec4945bfd51169b887e650b8c704ef', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe5e892363a31885cedc2f995f36d1f90ba82337d0b1fc80d3438c84a72bd05a0', 16),
                    gmp_init('0x77439de4da1b87d21301eb01e79b5c3eca73995b9cd099aec936de2be1a69f5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc827ed763ffec8d144d95fecd3177c78fe6784fa0f696a510c665cf973b4df41', 16),
                    gmp_init('0x1e4c4475f2da5ed560e17d7b66ef3cd3bfe9a6106c0047b32e5b6a2380f91f4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d2393df9435ccf5d1018611642cf1d8357d712952a24b514f09528101467d6b', 16),
                    gmp_init('0xe66e63f263fd0f7d7acbd85b2d5af46d72a707a7510473a807c673c6b1bc5458', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb511001491b7465725ed93eeb3c1587d8998961b956e7dc2405904b346340d60', 16),
                    gmp_init('0x9c3981f431fe4c4672ab899ef769f9788fb582b11859479168cd6178653ecaa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x453657a53aab893f3adcfb2bd2ff873fecf93a9cf242e590f0b1e93c9d159f7a', 16),
                    gmp_init('0xbfb5aeff88023dc5da2ef0913a01c7286f949bd4e81dda5d99c22b708a02fb78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27a0c221b72432f0ffc3dda2e480e645a32f06e363cdcde9973276c64cfb1a94', 16),
                    gmp_init('0xc3f6ab3eb3a0a792f2f2ef8dc1821e9d91e3b03d78674297ab98f8c2d4098584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x435b54cb07b04c464d14adeaa13d73e7bc052853a723909331ededf3d46cb42a', 16),
                    gmp_init('0xd726c031e4718a1a49f4a54cc1e0585d5edc4c79433949a6b7e24deddaf72dd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60aacaeec40e84091cb2f03148e4774ec12883ed0e4c688fc193d479678e27d3', 16),
                    gmp_init('0x9677dffcc5def66dda54f7c803de04ee46d400783a680f4bff7c610228c4d2de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1805b819e14edd7e19fbc47c4e13da0e89cf813e5b65d57ba97d941b1d2fc263', 16),
                    gmp_init('0x101f6428094381715858daa86bcb31489c8c1af8e551ecaf266470b4f0870ec7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79481a2aab0f1180612c78017b1c51e36319c47b85cae6cfcc326b493d9eb773', 16),
                    gmp_init('0xdc61463f8555e09dc6d9625e70f28a4b8cbd8693297f950b37d96c11c1162620', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc73aaf4366d3194f40617a8a2a775f45f41e2081427fa1b39a2b1b70c076d1df', 16),
                    gmp_init('0x9201ec69eccf916ef9ce01be3bbcdcfef75b57a51d893720d279d516e5ad6605', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6ac0ad271bae59b5a861535e82bcc353fb37fc78e50f376af71acdeb0028fe6', 16),
                    gmp_init('0x53fbe5579ea7cf608b6999aeefed3475c5ef07bc43191afe6a51064068570fb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3ddee8f7d5c36d277189b6af61d52c1bc8a2738c17eac07d3683f7985a745c7', 16),
                    gmp_init('0x487199d391932b871be51b86aa7bd8f47c28c2f17bd027b1a39f0940778efcc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fa496cc907cae20c0aeda8052ac58b069bab975255a517b526f51dbd2943e92', 16),
                    gmp_init('0xe7be908162a448873f6c08acb28b6433b1507f3e1d1bf694d5264339738a13b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45c78ddc2035f1e5af68aa1186c0a1d540144156fc3a3587f4c733e84d4170b3', 16),
                    gmp_init('0x11af9946238d5c0cb0e1a9d144fb3a512cb046606420cc7316efa3ed511faa1d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xe4107e431e221f5071e7474104fa90a45312f0c21fb084de21579992fab5c2cf', 16),
                    gmp_init('0x1e5f11e6cf701c9a3948c668741c2b323c7892dcff7b2410d028403f2b955c2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d5295db41e6f839a757f11164d63319a0654d2666872435510f99b4549e7a36', 16),
                    gmp_init('0xf98acf28068072323af16cac763b38c6ea7b44f99730ba3bddb68195ce32eb67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85df9a65ee179f7daacf9701debc1142766b7b2b911c3d485bb5b63c09b67b7e', 16),
                    gmp_init('0xa6b4b7aa39af6308bb6b7d5eff0e297386fa949d1fbc6ea588b3869e830a36e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3877152e0bbff37eff26ec4601bffcda32242bc07eb98697cfed817743a29747', 16),
                    gmp_init('0xcc70a7f9014bc61abe16116cb99d37309fbd1f6ecffee641ba573e25f24d4637', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23c493fe7f9fcd08a8d8a1865c2d292885d3166704a1d6e4127cfde60b3510d3', 16),
                    gmp_init('0xadf456a9e43414230c275d9e4effe6d8f799e35e26b9dbd713462ec43ae89a47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8dc9073c673523c08d114540d125257c86b3488933e6f3c006a447c3b80ab86', 16),
                    gmp_init('0xec7787216fd41e684b5dc67e84141863ca4d4599db3ce9e02f61194f048b4d6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94406d0b314dd0edde5993ebaaf235ddac36eb6c64227c39acc691808b49a71f', 16),
                    gmp_init('0x61aae77e864df179cd207c90906fe897d0e27261ca63cf94471c1944d0b249a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x437a6a6e40d04569a67834270a8e16495e3bffbd135ea79f59469a0606bba654', 16),
                    gmp_init('0xc2911e15587f2492ab24825ff34dc5a014a7c3761938d4103755406037a7c0f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c2ebf43de886c14337136df5bee8d3877f10972e8c6873fe5cde33c60e50c32', 16),
                    gmp_init('0xa703d9a6c5e8399c6525b93d202e28e7be2d08c39ae8c9989e2f8917ca93c124', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6cd740bab120fa05ac96720bce3bc619ce5a7a96e9e45c805bc04662647394e', 16),
                    gmp_init('0xb9fc0fe7c1b0fb9f4ff66a2d4a663c77b59355675ccf55f0c66b62b3f119695a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x987536d727940eb9f391e5b89ec55f1299651bf35c6049907083d9dec3a2355a', 16),
                    gmp_init('0x12f19ad674f1117243e0b1c149e57b48b85f6c7c683adccdf0c75c4c1bd05276', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc2e65b9dc8bbc43ccb94cd05cfed4c53ddd80153cdc93b3291f23fe06eb8394c', 16),
                    gmp_init('0x36cb9b541bdf3dc223948c9d2f4697243fedf8318dbd49246cad3e4383f6c688', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd515ac409a4c4468f19d38b17ef2ddddd1f86dcf71a8f8a6b0f0547c52f3ec22', 16),
                    gmp_init('0x51c0481422449b2e1ea5e4840052bd464cd57df0031b806eca1462eb25a2863b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc99e1f3854d32145e63491acca09e20aea9ff28380169ff3fd1e77f6e5942d2', 16),
                    gmp_init('0x31e28f89d9a5a4f4d976c9d49e0031b5357b613529cf9112b3e040022a099464', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70b9d4985e5b0bae2453cc38b61cf3ddec99e6dabe6093fa59a1e9a5971c857', 16),
                    gmp_init('0xed80461bff4b625086b810ae46373cfb33a83da1ec5461aaff9cb63dcac8dfc1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x447d739beedb5e67fb982fd588c6766efc35ff7dc297eac357c84fc9d789bd85', 16),
                    gmp_init('0x2d4825ab834131eee12e9d953a4aaff73d349b95a7fae5000c7e33c972e25b32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa263919b4945a1d447501f2a3c0804c3802f779ea7f6803aeb0421211a6b665e', 16),
                    gmp_init('0x873200bd2aed20fc2e9d3c9de60d60c5ac3f83df4c00efe29ee4040030bcdcfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8b6533e03ca017f58b14df965def4f6ddfad856082632c273e1998edea6db68', 16),
                    gmp_init('0xc30f4ef5ec4454862f046dda50aa3ec66bbd70dd9c5ca0ed69bd25b0ae760da9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2890d721e57e196118e63add579547f0acad16e63be0aea8f6f1d3ac4d771f0c', 16),
                    gmp_init('0x69b5b8159ddc032aaf77e1d1416752ec7dc0e7f77ef540690a5728ecb5890d78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf35289d35582847c548ef18729edfb755f0173072cf8727c66d5d4ebf924e753', 16),
                    gmp_init('0x75c1781ec5ec13fb93df08a1b50e1bd8c562fc57292d0f04aa45b5c2eb13a20c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x929f5cfaec5be4805430c3c0595033cb946d1bf2af7a9da4f8b6930d2670213a', 16),
                    gmp_init('0x29cd3692293320c6c5ac64bb51e390451b383964f7f20170a53059c5cd486f14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfd06b74da4417164834185fb6734e01af141fffd6df23d72395cb673018017e', 16),
                    gmp_init('0xb647b7a9b72ba9138103b39587da7950003030786b779777a0ae7be4ce0dff50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b8b8867dd4d9c6f81690628033de305d4e3ff5e71da17814f5822efac7e9e44', 16),
                    gmp_init('0x8bc6273e511680b42246073c7dd5adb564057e6dbbd723650767022aa8cd12c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x755e74c4ad5dcd11512d6d08f15dbe981089288329a247b04c81905792db860', 16),
                    gmp_init('0xfe16afa753ad9e4dd249b2d823815bc2b2937464cfc2777a7d6600dba0d09849', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x823c8de5a5e97dbe7bbf9038d79bff6b585e6c58dd17aeb9c6327e20cc2f3082', 16),
                    gmp_init('0x61fba612a1e936cd17edce97abbfe885cdf006775a45964cac1b42a9958bd76c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88fba84cc372c96968a10c0d7eb0bbdedd2ca2a496da12c3a9ef6955ea26ba6b', 16),
                    gmp_init('0x512aef649d39be0fd266da45b514788d484a9e28e00cfdce80414781e44972f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f0c3cabe40ede902faea8e759acd21cf8a00249e4d1558eee143c1f0f870d2', 16),
                    gmp_init('0x34b55d934f6d2c56bce7a5998ab1ac23c2f725737aeb5f8a5f537c956e60e8cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1a0accbec055beb8e50f6e7555c6f2c1a1ea5d41739b17e39c48a4294720cab', 16),
                    gmp_init('0xe07968fb7e98c8541836f83077eebcbf084a2a71d080254ea6d453f574b185c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9211ea4a827801d81fd65b91abef80708101deba1f12354d3a5357fbc1f6b0ba', 16),
                    gmp_init('0xe7e91892e2152ab3c74ba7e95899cd444ee478b7af28bbb2d91415f9a2b8e349', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae93b86e6a73c7e50db358931e7e6a0249bfb7e46b11bb62a828fdfec26c42a', 16),
                    gmp_init('0x7028f6dd14787e13a942e3edc1e20b37278a39eef5aadb6491063343b9f808ca', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9022e314949ccf3e8937542b8cdec18ea2f8d5618688ce241ebd8bac137de736', 16),
                    gmp_init('0x2fae5e4f2904a39466d0bb045226ce087f49366c44ea7657f4ef5c0844c42ecc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa77663f5fcdf189cc2731f7801b1133ee130a96964396297872e52cf757a603c', 16),
                    gmp_init('0x4e139cbdaddafc58dae982fa5476a35a8ab86c568cbace48d91745804ca8e468', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e5872e3076fe945fb0f2d3f1af7857af73f35183273c05191706cb8d09b01f5', 16),
                    gmp_init('0x4213c02ec8d7717180cc1d4af3bef0ebc13179d4e09a85a7c30758d9abcd5fde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a7098d2db889a1112911d2965f2870ea93d696bf79b5582e83e2130461dffe4', 16),
                    gmp_init('0x39d474f5ee8b69fae5a42c936f76f32768682783de26b553f3ba5eed161315da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x292220b1a5da3f504afd1e344c17df827bd155fb2e6168c2b539b747efe45b1f', 16),
                    gmp_init('0xe316a0532bf175aee37c795ffae98d7ff7c344304cdd41045fe40b8b534bb026', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7da5f99d3d6c3e86cd6cb74ab4e765c563b807e9a10215090493d0686db76ed9', 16),
                    gmp_init('0xda269ac028102f19e529dd1342c75643191cbb6b8c72013180f1cf939752c9f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3644e14807a44f0ac3224f8721093a340e8040654b166de43e850662a3abd540', 16),
                    gmp_init('0xec5a9150dbc2797611c285309fa1e29300177ceda66fa14de1c6fe1cd55da631', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffd92260ea330bb7ac43ff1f15417fe91a078f4b263234f284100f6f2472c9ae', 16),
                    gmp_init('0xcf4b93b0ba2111475999633225711e5f263d2e9c868b8a34a0cec1d866d03ae4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedfe7dae17fcd838e55b38f4993bb4824c920a5ac687ede31a2fd21e89142ccb', 16),
                    gmp_init('0xc88692122e0daf2161855d2b4f55beb81da442b69d51142ebb951d31ac593d75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34a8fa8c48884176237d162a581b7c63a8239331db50a97fcd2c725d04dfb784', 16),
                    gmp_init('0x51d8381001dfdf52cf3ec31a3fe1e53c2e73fc51a1eebd57213b4be5247d5003', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5311968b4059a69598714026bcea0de8e7f7475cdee27000f3da71c64a41b208', 16),
                    gmp_init('0xb78d732b3dc22978a6c6581e33b3da113b3c1dc02436877f691e1f9e048e4b69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa826e880bc8555ba968dbd4d1d0d26fadf180f578c520280b544b022450cc54e', 16),
                    gmp_init('0xaaf394288cbfa120d8c52f2ee5ec51a25cb680fac4c8ded7a463b4d6ccf176da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf65dd1f22ffba594f7a22bf6f560e1d5af46e6ec7c7033bcb3d01b5c495daae7', 16),
                    gmp_init('0x9d71b820ce1b66e820e6fe637cfc4cd0eb06180f9eacd9b28d4e5a99c2556738', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dc1f3f37aa789d31a9a309315a28fd7126e7f99f8781c270862c0c4bf4b3ea', 16),
                    gmp_init('0xb1e8b4ae7aff7442164c269569d32f93920564232cae4286c2c42a8650c5e9b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6670e7edccae248b41bf480aaa807c60afaa80472069a11abefc15e3afcf1ee', 16),
                    gmp_init('0xa7fd14c93a51c2f3a395f72f4957ac131ef39891c93cf38a378870abe0c67fc8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x73baff0419eda72389386cf2b5156deddc34c10619515eb5741145c144cd3397', 16),
                    gmp_init('0x1e97de634977ac5f6a00d1e8c18f825e779ef92cf826134941ef2a139adcb8e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fb5456391ba430536ca35ada0f4871e140b55dc318d93bcacc1fd7cdfd83618', 16),
                    gmp_init('0xf663d87766c6b8a3ed3b68c52109daba2f1e6499aae5d33e3f39f5cb02430626', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45f8330c33e60a18344388de44bed04e3e10246156d312977eb0f952161fb913', 16),
                    gmp_init('0xc212cf6dbfd6906ef80e8076d8ba7760f06d0879f6fc337370d4817c0c15c3bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd554ded0b2862113a145c7ebdf98e4b942d91e70b46ef479357bdb041cbd9a71', 16),
                    gmp_init('0x74b8f94b6c36708eff0f7ad45ac393145f29fea9a7a61c99a43a4a8b3c8cc32e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5544dc49acd7bdab65f5a01c8bcd5991965d4be1f3edd7c75aef9691ee393654', 16),
                    gmp_init('0xed3e85895087fd4ac04c05b5b8935192241efe9703d58e7323610bbf8f53206f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44130b2ce9e1013554e17c99d42eb14f44ce7343e662a7a0e8b93f55bab5593a', 16),
                    gmp_init('0x49197fc77907224f31ca51215b0580a1776d1bdecdce2e3fe3a5763dbf5b8e89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2757b790619ee7734b3d2ed55ae2f695741dbac025fa9e5513f3599428a15dfd', 16),
                    gmp_init('0xdf46d2d554c2b12e5cc975213cd5500d1768978a3ca7156dfc8e840cf042c341', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb889d78bcf05f1c763c4e454296251719f61776622130485de82817f3be28c8a', 16),
                    gmp_init('0xbabb0b07fa511b9b182be4a975c700eadff631e5782fb8c33037fe51eafdf89e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe872437de50e2bc8d98421ccc1143ccd148cada5d3ad4984efedf426bf840a5b', 16),
                    gmp_init('0xf984bc8912729616593bc91f66248bf5ac3a346cf9396464b84e58551377e86a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8117a991a354ec2e090d2df5125fd3d9bf259ae601fad6dc95cdd857968488b', 16),
                    gmp_init('0xe4ebb986182aeab0d19e6a01b6eff51401533aae5c02d245b6eed915801a3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc56cdcaba4d775c0392ef6d5e6f3334a9261fc50a1781e3d4956a9b8b36afd6a', 16),
                    gmp_init('0xd16056e2f386b070cd2edeb17f594ef566f483b2568cc723e6086beef3f87c26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94054f36a1b6bc146ca2519f3a756b62b14f6191e97c17af44b05f8625e92803', 16),
                    gmp_init('0xb848d8f95e4c4c074b0d80d7ddae8fc99e6e5d1fe37f86aa0e1e9a9b3786f08d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3d6e6738f3ff2869cfd28583e48abb123941334419c0c131dad980d2cfd2cd0', 16),
                    gmp_init('0xff448f5fcd159b68536da8ff737de59b001fa568c2f6f8f14c579c77794ae2dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf99a41f785fee4d8b84db4183907019377dd55ea7721089dcd7aeec0bacba6e6', 16),
                    gmp_init('0xfb3296aef4c8145ba37757c917f8be49ec328c8928e4b570de6e6d673d26512a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88f9778856e45c07b03132d72237d40656508d6a3a09ab7a09588855dab7a64c', 16),
                    gmp_init('0x4a745cdd46b55c7434531af257969e5836c30092216d2673a05e98e11575f103', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9cf646b91a4c25bbc974446c2976fb982683bec78b098cb30e2e5fb31fa4e33c', 16),
                    gmp_init('0x37b0624dc1f65a891e408e258b821f319e205827ebc1603219c45e060e0d4563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfe251903a452329835917f8d5547844f6cae5469245e15f58c496939c224ef48', 16),
                    gmp_init('0x4fac9cac97ca9be0d836b9405a1b36a0455aaaa1c321e408ae6960a05136dfa7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83cb43de151b64999d7a653827764e0f4c566749fe5caf63e98b618cc6bf1e67', 16),
                    gmp_init('0xbce28ca24b98f6f8efb1806e624418f82874422cbdd1169ea27ee8b3099acc97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcc411e541368f9f2e2c3b6c3f6131016cec29f6bbdd3e7a5bccf5cb64d405a74', 16),
                    gmp_init('0xfecb812fac774584571527fc350186d0be4fc2009f16fb0d645be6b618d1bddb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ff3b3e560ceb08c03340fc15e25022484e8628701d53dd8230ad748dc0f057e', 16),
                    gmp_init('0x7f17ad6f3bb6578f6f7fd17057867843a010236ec47017622d41f7daa817965e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84d6e7f91e9d174f80dc73f390d4654fd64fed987e38c62b74d4780e769ebf5d', 16),
                    gmp_init('0x555f4e86e407c4de4f7033de50ad159b14a9f3aa8a268f2bb0586f1662cc379', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e9edb2dd8ffd83fdda19de173d6af996367a8f2d422bcb515114b40325e69f1', 16),
                    gmp_init('0xc0822216ceff954eab3556ab65f3bff61c727454799f281b720e17e3402b7e9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c6c923cf1a4351cca356ef3efc35de10898022a45c4a1b196282910aee1337b', 16),
                    gmp_init('0xa1256fc84d40ff6a5efbb2319eaa8e84845362c1c6ddfa2acb451d5cd9c84abe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ee280e804c41c4befabc19de6ec2d32f0876894eb5ff820bf252f66a288f038', 16),
                    gmp_init('0xbcd969f94677e39284c0586fecc9eec011d7833a98e6c6f41c5aab86b6f1ee6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a2ae3e9c7cd7eb04521668b55dde95399a2d8e1e5c4a7a139d6c50353e90f60', 16),
                    gmp_init('0x4bf6b287c0264e856faf20a6219efe23f3d4d34082a6f7e64e349b189a948322', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1f0166e05c205736dfe365d91fe288c2c34304f2f70a86aa0bf3256c0c708c8', 16),
                    gmp_init('0xe647653e916c3b520444632be8a33016fb655f22efb5a00ae718d73b3896ed38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ab0c75e4cc5f45bb0e4f5640b7225888c3e4465e863c51318c8936f8c320512', 16),
                    gmp_init('0xb04daa0234ae0af7e8948891d80d8c0951c3714292fda61a33743af64f0a792a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28089687abf6345c7f121ab42979c7badd58bd80100e7d5d7e0f09ca476edefb', 16),
                    gmp_init('0x5d071cf33d3b3191a67e19ebd90541c44dd31b07be0392122ef457229d1b0ae0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f637ef68fa6072822824b73d2e6d3e9ed79ea8130092a10b923dc396304c13f', 16),
                    gmp_init('0x8fe2c91f76bdae23dfdbdf045d762e0a7d98288cbbbb3438a69ec6ed13b60200', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb15b0de281904cb70585e852425edab7b9ed3075a4c269dd12d99bcf344897a', 16),
                    gmp_init('0x96cdd169c2660710898aaf8cd732f85814698b2f97d0b82ad9de83ce5bfe7ee', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf81f5be38b8ca534e8a5c7938d18df9e0d238966f74e1a6b826fadc0523b716d', 16),
                    gmp_init('0xdc7f49329c1f06df1d56d29d380e0328660758503a878330464002f512632401', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7459e772c29c4c3f158ea76280d631820e4e1a713bd0572546e0c52790789539', 16),
                    gmp_init('0x892bc7f5183444eaec7e8e858a2ec1a9383af5e04f7db3913cdf5a471439d97f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6008450fb1286385af6ec35c16d490a3b41278951a5521584c5685039d19d8a', 16),
                    gmp_init('0x7b4b79c067a37c72c8f6d45e7be9ca84f0fe008fa726573dfd95dbb3590d2c4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e1c7c383d7f8492c604c9f87d2efd3f345e4fd95b8881c4f4727e8c8ef2dfe7', 16),
                    gmp_init('0xc629dc2b09f0be266d9f4529ff7ea8f1c2d747d667b0c5bd3f85cca2c55e5f2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde5382b1967df354c64c09798feb0e1c59e38cea5c44de7226987b39496cac9f', 16),
                    gmp_init('0x9c47b678b69c918562c3b00991cf9f2bc2e3e29473d841157ce082fdafa473d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74dfabecc5345e5340cb0798638b5965e2ed30366d621c903b4c7c0831bf35a9', 16),
                    gmp_init('0x48341b4c8956a77069281e79c517ce993f5fa126c564848d3615b07b36a268e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7227b0807f2a9085344b99d51194ec8400020516a25ff3e7cb2963786807a23', 16),
                    gmp_init('0xf5507525d45d39e845da847920a075abe7bf8157b728cdc91c471983d4115894', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c86799b36e7d519e63138a90228dc28022fc19d8429b019acebe833f2f21873', 16),
                    gmp_init('0x5c0c2c12a5a3e85d61ce9fe475a272d15dbf4306e861f0ec8905b7d7e5159140', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd2b2e8d42344596465abe73a3661d39005cab5fa1a8f35e5a797fc2044d14c0', 16),
                    gmp_init('0xf13012df9b0870a24d505eeddac0f671fddb6f0cb9accecea560acf222496315', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183950fddd7be0a112de04490cd9ba82eaafc3e392c6cdc9a94a60e30f18a7ab', 16),
                    gmp_init('0xaa8cbec079204cc381cda4cb3f77a930cc6e77e9d46108bd6ae5ddf8560b4b74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b2e84c8f0df7eb4cefbc9b83df9dd8f25c655aff228f6966f4eb12399a1566', 16),
                    gmp_init('0x6103769dbca23175d042d698797405cc824b55840cd8096859a4b3c05c56bb73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x675107e17bc4604da088cf12640a72f1f6bc238850e7187f5fd577fab0f2928c', 16),
                    gmp_init('0x6034e0018ea3f8d35d664043d781f304b26711d18b1145738740be4015174f14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb6d19295f2ba070759da0a3ef99148531286a0fe245c6f87d09eb28dba6f34a', 16),
                    gmp_init('0xf29b2d29d7bf46dd9e388fd4c4a791b9ecfcfa2dc9685b1f9b5f3c822bcf0452', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe42b60f34a9e51b9ddb77e96f0b512ac26dc449c991c9eb348fcc264147c34d0', 16),
                    gmp_init('0xff0cc44f2cd6f0ddbe07cb0c7eb81c57bdf8bf104fc3c2f06de84bd897a87eb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff429fcc103c13c10aaf67650d906651a690109827e4db5074ca2d2a0a435427', 16),
                    gmp_init('0x2addf9668a4ecdb094d409c856186876205bee534a3a0da28e50450d39853824', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x85685474d77e08482397f463e53cde1d022eca56c3915c978ed9c7e787354b7a', 16),
                    gmp_init('0x20b50eb50bf587b6eebc913b2a6f728706a891dc1fd6fdbd8954402bd16e04c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80ecab9f02b4cc6c691ec77b5af1694c45faf0843c5344c1186c5ae0464345e7', 16),
                    gmp_init('0xf424148aca6d55c6fb5fc8f83e19fc8432e500ca5bccdbb497a3de52e042e3ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x617344c752b23e6549e9d2092fcc92dea713a215f677137eaf6cc7fa7b26165d', 16),
                    gmp_init('0xe9901617a437835a49b7d10bd18220b29899ac16e37171a4c49bfdcb86b2a286', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe15d0f2321cecf4433f1c0b1843eff4f5d139a212f6bc03d2540306574362bd4', 16),
                    gmp_init('0x9a84cbe2707ec22ec1bfe039308be32623ed4bf8a4468269be6accdaafb46fb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8ac03ee55fb6a22da04c1da9e40fc2e9018f7a6e101bad1021bf76650442770', 16),
                    gmp_init('0x5a358e65599d1e8ea436c751b34e6d17a97602bf95041d023a2864f11b00c82d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1e3e83f22961a15baa9060c6a031abaa43dbffe2aaf9dcc363877731efffe4', 16),
                    gmp_init('0x59190df64dd74b5de869f22aaf60d21692f7db6b5625b6535ccb48da896a7824', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a731fb525bc95c66c6cbcbe30cc8ea60c73f8d0aabf77b8fbe06d86f65460de', 16),
                    gmp_init('0x585855c5e2ab63198f52954bffb04dc435867e3c52508ee3e9859a1dff8dc207', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7a38889ddb5553d58f94187dc6d34dc5b4273b92840cc66d376b93b369f9c65', 16),
                    gmp_init('0x5437b5bab121917208e37b26192145bd58a22b94187d1ab73b1be4e0aca7ee5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa20b606132a8f224bf0a6ba02cd7967f3cf90a7835ed524e642abadfb51634a5', 16),
                    gmp_init('0x9c43ce9f697db99dad3d5fe8373b315bc674757e3cd45edf26c13795f226afad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x551b5b794a2170c6768e49cb4db9703344a87d89f414dc7e2b5994fa8d201492', 16),
                    gmp_init('0x20f3f82a01775b759ddf271ea3b6eef5035435f704d353e018b42675f7985f33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16f1f93f125670991438ec34fc5cc0ab58b2635603aa97070432244b3ba54a8', 16),
                    gmp_init('0x8bcd341158951576f29b11be49ce658d93af27546a3b4e6ed7c61fa664f2889', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x987f1f01103eb89241d3e1d802596f512f63f5b9a8e3abb37ae08ae3f41f840a', 16),
                    gmp_init('0xec349554991f2bc8f39b5e4f13ab094537d27be14f7e0570c5c8e8768861028', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe61586670bd034788c08fd67cccec31fe2581d0aa02845fddeee493ce7c16d94', 16),
                    gmp_init('0x65ca03ae9e7124be8c5b2b93f4b6f0ee4e65cd1e47a443bbfb4ed19ab14810ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4343dbbf1a2c2be471c56935cd7f05c2899ecd810d6783e9da2481e77083cb30', 16),
                    gmp_init('0xc0152534a259144554e1aac1696809be0fd47df55831c8eccc757ffddeeb4ada', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdcd37f0b38d56a26555a08a216c85347f4cd907e2871cd0bcd6dca6653ce728d', 16),
                    gmp_init('0x6574dbd77cda4c1872c37b62b3c6d6f3caacd346d29dabeb8d7d136997cacbcb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1136b759c12b3b11b319e52d6bf9597d9e3607554615622addc6dc1b12378c16', 16),
                    gmp_init('0x7dec0fcf45168fdd09f0abc60fe9ecb29614aa28e751cce379f59bd0b3488127', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f1f5738159984d086f8c11b6445072d95c410a18d0145fd0e6dafff34d3977', 16),
                    gmp_init('0xab98c1b579c0b985cb829f87d3a748c7937e953f3dc6820614bc90ea00154b71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53893eb71cdd4336cc4ad13793faad48f40f467d713db134970e6d827b299740', 16),
                    gmp_init('0x27728a7e9485fbd83841ce28ea75dc8dd8a132ef21fde8cd51ea6f1b3fff7509', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x934c89b9aa1cdc489b8018b75e7d2586953b9a779a2e613fbe840ca84d6a6a96', 16),
                    gmp_init('0x856af4ffbccaf40a4516d6d6b31b2e9d107d2df0e2e4ca9febef148533d838ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd64e9dd754cda2757e376baf1fae5604e1e27707bf03bc130b3c956738000fc', 16),
                    gmp_init('0x432193eb0c2932c96df89e3e19ca79ffbe45d022b91e48f8bfaa1c50ddf4ac12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1bd257b592c69435aa3227fb295f467df7150b8829ed224fce56020573aa9b8', 16),
                    gmp_init('0x177cc0cc4bc60526d0b4922e396a0e4175ce33d784cf7342c16568492b51d81b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff9845a87effd516f2c69c60e4a91b21d883d03c8551c055ef82151733878c4a', 16),
                    gmp_init('0x835b9af4a4e2428f8fd8a48edff5e8ddf1f33746b65cfebc6ba6847d7488df68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d00885c9a9df2158f5832665cda09c3a8030f018d3a3511febf5ea4acc506c8', 16),
                    gmp_init('0x3f853c3a9671c7f214c0474409fe88a145d17acaa56ce133d4fa660e1835aa2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x954e13e8bb91609ce8767a30845293de5faeb6a15baf86fc8ca9b88140f51524', 16),
                    gmp_init('0xecc8363ff92a4041d93c6243479ecbcfa9eea431141e7cbde9fdb3d945e30a69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d428c6f64278eaf5bbfcb81caf299943e0c430de7ed9b79340229009cbdf013', 16),
                    gmp_init('0x9c1ade723716641b573a0646beec01e3193ba01db2d8924476c7ce8de6ac77ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2217ef6fa41fb93dfcd50c5c1d80497412953c36930d9e31f798d53c4f77287', 16),
                    gmp_init('0xfb5153e0ce7cf3a2b5dfbcf88d38c843d709dc739c5e93cb97a04a7724e7b5da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7af6ddec6d18ab02d12c12e9f5efb870b3f11bdef5fdc6334f7b2324cfa9ab07', 16),
                    gmp_init('0x304e6e352e694813ddc63eecddd915eb32f5b43e1c99acc955ed240b4999f264', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c3950b17b79bdad122c6eae915d5c351f973baa9aa781718af5396c85c723e9', 16),
                    gmp_init('0xb99b7362209110dbb494bb7ea186a8b0b01dacb57c4906ae5e38775f76834763', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef57b1ffb961331096868e27350eb3d252c3490039dd8baacaee11dba958f2b', 16),
                    gmp_init('0xd45b7980d1a9e4410eee47f99ecabd308598f8bdfaede84943b9e0339d9c13f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x803c7a2ccf961cdad1ded2f844baa944d59dcd190725d62a3717d6e23c18abeb', 16),
                    gmp_init('0x83fb5040a796e9286b1acf169c4b4409ed7c443c2a6721cd6a439bf0e29bfa78', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd2bf28ba7c2a51a90f573a82589f18e07e50ab01786df709c762ef1943e832a', 16),
                    gmp_init('0xcac3f4313bd00ac7087a10a94b4e7ed27ec9db96055144648263af15b20d37c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84feedc3620ebad8fbe9218bf89db7610b63f06c8f9b6856fe43bd70a38305bd', 16),
                    gmp_init('0xf199bbd5a9c7c1654a3f5b5c17da39482568e12ddb32c53bfff41ff86073bba9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34e5e85eb967f82cfd9bcc35b7d9531b1cf8c6c365ffcdf361eac4bc112c9666', 16),
                    gmp_init('0xc0ce68313221a36b82846575ccbc46330f47ed63c1e3a526b5a1853c992a3666', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d890886cb475bd421501871dfd7fdeb3c399f34f03e03f0582554a2a1faaf83', 16),
                    gmp_init('0x970938bd84a2f69a46b14def6cb0616d755b7179214633d2498413ff2ce31fba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x727362cc59f4d863a6c493ef0919e1545941720025d92665c1652be351209502', 16),
                    gmp_init('0x17b0f4229babab589f100b8c2ce91d20a18d37f9bb2760bbc677d1d3d7042b0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb5afd1574fd7a9042ef73d190a70593b2065a28c35a2d166c5fa15ba3f891521', 16),
                    gmp_init('0x7955a0ac880179cb71c573a608e6388fbdd4f9934e541d61aace31c0f0d1acf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0c3f260054a6cec973a14c4bb49eee9f947daba8271d368455e7928a447f959', 16),
                    gmp_init('0x508c73090e4b2c4f382f8c10cb628208b1b5540258d272c9b039d248968b671f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6e1c5814699e69cf5d74845410e16291bc3cafc1640d35e0604c5b8bdff8874', 16),
                    gmp_init('0xc25ae34dfa827e624b1e0a9ef5a2efdb789999f3812b2141885d8ef93076daf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e81b231f795ca7a40cb433be415fd0410761be13ce4de23021f9f025b37e1d3', 16),
                    gmp_init('0xf3855a1b0e9bed13125e896cee6c7c4e4ec84bf2b1c2e0e03f5fca264155681a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67e3d9a5c6f539c6923729be3dac09e26002de365f76d2a944ed88dfeaf0a062', 16),
                    gmp_init('0xad17fe9d1670dd21c604bcefb6abe481d54a03d5ca72746e392cb84a785188cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8035e21c7d8026d84a36d8e6db0f2abddcdf29246f5b3e6dc497715f56c051a0', 16),
                    gmp_init('0xb8810a44b7a2bef375dbe6837bdd318b3e7dc63098b6235601ebb2fb2d0dd12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fbf99b277da3d933935ab93e753a748f11fee4341da301bb60914e6301ef90b', 16),
                    gmp_init('0x806a00260128ca94b259a27cc432519e4973193c0a90c38403f839472c9df49f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196908dfd618a53306baf0010204fcecafe5aef589651963ce00c309ff12c69e', 16),
                    gmp_init('0x3f65bf6b2f916e040bee1deadd21054eb6b2e3371ffb886b8d3319041d114831', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18845229180712b0f19d2afe08b90c48d0260c1d29be35e3d6d940287ca2eb91', 16),
                    gmp_init('0xd535a17d0f51d9cab122be6c54ed1a9f0fdf00a69598d38c6a917d4a0f091533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb77fceb8961a2af46e6e1d210ad0f3577b530cf797a78c7e498e01fcb89c5ed', 16),
                    gmp_init('0x7fd1dc3871cee5ceecf339be4c99ad411f16c7ab68899afa59ff1c7eed25b46e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8a535f566ec73617f5622df4373713269e4c35874afdf43aaee9c75df7f82f2a', 16),
                    gmp_init('0x455c08468b08bd737e02819085a92bfcde533864c8c7669c5f9a0ac223094b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4eafa17a88814d84d36e2c6048bdfa175799c8f19419149be8b043c401cd7f36', 16),
                    gmp_init('0xa47974d851ec201fee45531527efc47b5036a58cad4543d2c778c64a0b2d1c43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86eac93dddeb882dc2a223236c24b4bce0fe2459051541ddfb14f217ab348fa0', 16),
                    gmp_init('0x948f3853cbbc4d8d5a436f9e8d6f46716c26d96351cfee8a4ee380954da51cee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc6122fc44fbfdb25cda9e496cdf1c58971dc987a8febc765cc319d54b96214fb', 16),
                    gmp_init('0xea205bec8343ac419031c9868877f91f08a6e48c1e271f8a3702bd8fb7adfff7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bf09ebaf9fb3aae3f5e7d784859f407948ce77e87e5e1037af41ffc99222c03', 16),
                    gmp_init('0x509cbaafe2e27a733b48b1dbe7e5ba309c9ec0e1de20e1d4a145f742ea72bb54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b4fcebe1f52629e85b6220ea2d65d248be074267f1462b71686977a8d215bfd', 16),
                    gmp_init('0x1f3307a9a822157ef96fb1cada9254fff9d502d09d21add606eaf00a475ec26b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe85e2dcbb7e70fc619130bada2f3735b5e1c470475c48280b453a2c1d1ae9300', 16),
                    gmp_init('0x451aafa6d51ce0bfc7ba7b5b823c2707deb7e185df8c31bb72a0dfdd1546e25e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb6d94022c181213724b4042c13019fda6f4fffddee86b987e97be9ed0e9d6b84', 16),
                    gmp_init('0x93ff3f41629287238634478884d77ad3c23273eaec4f382ae1bcaa0fbca7cb21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f5fb0f228c92f82a3f027da1ba7dbf6836f4a80ceb2152f2525d55605260cb8', 16),
                    gmp_init('0xc55834dada4999870e38de15366783f2fa3e8751fc5ec33272fb4b441852c964', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc453bfc7281cf5c4d92ffc6aad7e567ee0d54ada7c4c386aec11fc70323ba10e', 16),
                    gmp_init('0xe6fa24418b36635d2df5245c3fe776ca67adb73ebb9e9ba2f2c263a396ee110a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33685622b18d999657aed074b4da002b9f9698a9cc3092ea4aa44442da1cd60f', 16),
                    gmp_init('0xd42f509ef1247cd9ba858c00dea7af175fef5a4cbc50b8b24bf737650fd57d67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c302e77f4602e9d8622f79df3c7d730657fe995ddbb2e9d6b96e60ec43e4011', 16),
                    gmp_init('0x776bc24768d62940c335017a576b95798349cd4299a3fe76991210b65c5d5b0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4813eb5c08f00080f7d0f9d8960979d95b2c88833999222af053b6ebb7576342', 16),
                    gmp_init('0x43fd4233a4240f66016848e33524aca2dc67d506a904f64c155eb97376316', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x871257a6d8fcb31c3754cc46fe2bb9083173b811bb7f88c67b65e413a304e88c', 16),
                    gmp_init('0x10c8e34819baff2a2856cdf59cb86527cee324d7b43c076c31b8b859f97623c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80c3f1f9a5ae997af1322dbbae386e56ba41f74edc1111c09f67171dff69b2be', 16),
                    gmp_init('0xa932140a009de852980e2765b1d5a9bf14b74b35cb7a8bf8904b97c4102d2f5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xad6090dfdcb41a019af7cd273da8a366b7a3030e99e53d5e9c837f4fe476c81d', 16),
                    gmp_init('0x77b5d1dd48f4c91eaccd75c2cc5bd8a8393fdc364f3048df818abc84ee6705dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e4573da81bc84dc2626f6ca66f6a11f227f1d7586bd4cb5ad180dc0caed764b', 16),
                    gmp_init('0x8cbbeffd96069f25f1bb9fc93651b20b2fedf3c7d11e7fb49c83115f17c2f2f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd90b45bb71ad697ca2adaa533b09863c4ac3240623cb59900a24737ce2725490', 16),
                    gmp_init('0x3326928ec1bb350f09d8b5687378cbd80cdc07bff3c466ccb0f84f84afeb1299', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf13583cbf65021f7977aac8fc30c25f1a9c655f50187a3db5252b56c3f0e03e', 16),
                    gmp_init('0xf8fe31f81a9b57b3dbf60be46d83d6f8ca20edffa3e1dc84bb2f5bfc575ccb22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xac25921731213fc7ac05393afa1f06befb02d84cf86babf0a76b3a657e933668', 16),
                    gmp_init('0x6c79a03870dba8ba850ec13eebd8ed7c6f864189c69e1e7a16e77f6732776fb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd32a0d2c402577af9cd9c99c12311dafc3677bfd6dc6cee6560b276cb62ca483', 16),
                    gmp_init('0xd17d4ad78a74b3073a262470597d0d96d4c582b760d3d174959a5ddfa435b18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bc3374ae979f3a887320fbda7b431bf86842ac3abea996d9a617c12128de7e3', 16),
                    gmp_init('0xb431f02460854e5de00c77ae6e4bacbd55f2db39b4c0ccf067a0b32eae6e5e29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda2535f6cda744d628e91651abe7add0b2a3a6939881b969142fbc118fc3fcb9', 16),
                    gmp_init('0xe756083c27486df224454c68510dcdd3ed8df5246a0960d978086193902a869f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf9c149453ae02b268bc872fc341119329cf10daf6d89a5b4acb2323835e057d', 16),
                    gmp_init('0x92acb89f25f23be0f385313f05c7a542440b9e181c5c479b6f564b282da20fea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf9b693139850548231f27aa78a00b5a64f93343e10c9845f427a5acd29d4728', 16),
                    gmp_init('0x6ba7497f4ef2827662da43171b28c66231c02fa3f0ffc37d8f765c8f40f23d2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55bf0839b5784f8a96e97da35adf014ef2705d6443b3d9e5d2acd7c2021d6584', 16),
                    gmp_init('0x3d980733e4b61ccf27acbf6ba8bc7dcf089e14202ae5a5a80d564f428ed744ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e99a32a4e4acee86691f0403b6503812adf34fb31fa1ab6389f54f13282e42e', 16),
                    gmp_init('0x430039527356c74e8d3f09f2eb7485d1dd899a3675916797229b297ff15da3fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfcf24e1653378d519f2ae14e7815d4872a45ee6e4be573d0dd69df6e41068c5e', 16),
                    gmp_init('0x186bb0e5336fffe35c675e21b592e7aee9176a4b2814855b761f453f27c19d75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdca86cf66d2c78e9ded0d075b4488f3b54988a09e08b511ff3082d81974671f', 16),
                    gmp_init('0x56750dc1225020e00be305243be34a80a4980aabf46b6d4b73c17c649aec3a03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bc280d02f5167eca1fdb65343d91f2f843451aa4849d1008b7d95f0620da860', 16),
                    gmp_init('0xb33f6d77bbbd31e5e2626bfa705ee6e0f2e19a2fdcc1632ebe29104107aac76d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb6e06c516305bbc4e466557075b929fcde1adf89f510a848a52f2c3693c4a205', 16),
                    gmp_init('0xbdb4277c21b323f5c5e1f126e79ed73b63f99419a82a9f87537f4d865db36d05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa61727a4f5f8ddbfe55703a07bee1e8daf3674c6d797eb1329f315f9fcdcfc44', 16),
                    gmp_init('0x3fd9e4f9b02696ade692d5a2bbae158c1b9010462f080f393b82a7f0ef3d60e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed9e43f84241c4e6b395d5d6fdfbd68771ad4b388d9e4d692f821f6f9e27907', 16),
                    gmp_init('0xb5af874aff6b2347f5bc0fd8eb120e0ce9151cfeb8ba1905f13f4f506e78c4fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27708f23e8bdb74f8c89f34b7cbf6a9e324a7181c96b10c893fa154a553faea4', 16),
                    gmp_init('0x575f186149caa4a4300225d66cc2c973fc6d68b3d1965bd1b21ade75d0802d2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57a7e410076d8f7dc55268db48fee1f92e2a860e5caf07ce36d0572535b38f54', 16),
                    gmp_init('0xfd7f0f03c8ecad24194c8a23bc82dd21dfd76e39a907eba75fa781e6245f2809', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ed8369aae243bf757dd0cd934b55a4fcfc99d57b30c8656a8c081b7a0f69001', 16),
                    gmp_init('0x8d916d516a90f28af38a5dbab4fdd7de9e3959c55a9244f9616ca32a2dba519e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24799ae2f3ef5dbef52d9b258cca5cf3347a7249d25c497946febbf9a7a79593', 16),
                    gmp_init('0x9436b5262ec87b7b32c3d1a9d363e3009994361f9beb1398d6388d75d0920d55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cee417faa66dc6109bfe97cab77ae6cb0844aecb2da65107fb5bf4597445fb2', 16),
                    gmp_init('0x3040efebe1e5b9f596d871e7f9cf0bb3a667e8569ed0e31f4fffcd61a8223a26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf15017c6884c7026ed3111cb080d5d60456cd3afbd0b650660216eb50bf5abdc', 16),
                    gmp_init('0xdea7ef1c2c5f02a8ecd8341e3fc5e232cbdc675c27b85584b75de2b8adef85b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c85a7df8eb3edd81da49d4efdc216685f9ab4e94444bcb137e96dc1176701f6', 16),
                    gmp_init('0xe2625f6813bb92b4b00356dfecdfc66aaf7a7b000bc3f2ec4d817802f1bb52d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe196e20f89b4beaa6e0f831f7512dfcc8978e6dc4ec141e869f252b1fe78e9b1', 16),
                    gmp_init('0xa5d66d85f81a85a62a6408be76b2ed9a908d0112beed35f44417561fca77eed7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9be2a2f68fad9f2205dfd1ed91c998fa1c66e06d8f71f05c2f2ff3673c5e24db', 16),
                    gmp_init('0x1362fa0b6e4f8c15a6cff1c3289590855960afcd16762b6a9fc9c9155e4795e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7779f5de6c1b0302f397fcd71539ed14d609e525618ac3d576ee33e57b1cb64b', 16),
                    gmp_init('0x9a8423f474c3ebeadfab134a7a2e3fae2a829423caa9533d8e18d1cbaba3aab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x338fdda9d0f38cc83e1397278149a0c57f78e95026917ba063cac4af02e34dd9', 16),
                    gmp_init('0x8f8fa4f59f5972c203385e79e65ecd331054cde1654a9d2751f7c7ea954d31ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8605b94be423a2f11e5f6d9aaeb28ce8dfa0618c2019a6f53ed8587691d1b492', 16),
                    gmp_init('0xa8e561287de75758f3ef6e0c2143d1a8ee23526d481e925c571d77bf78ac6598', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x45a511c97f608bf76dbc4189d991ece618c452b1b42a627f3cd5f4e4a9aa52df', 16),
                    gmp_init('0x73be0ec773ea9b6d3fe3337fcb625ad25a919b27d22955ce7b52bd12125ec16c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cd2a0bab6ace28a2bf7ca0444ab1b75020688b6b3a0e5f213cc521bf003e44a', 16),
                    gmp_init('0x6adf08c371d224056d1310756218d126bde2e7d1c97ea5d64993eca97b19c38d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb57ac4fe72b93438ef40f1217cd4c7b95c7170db6f7fb1f656753efae75bc7f', 16),
                    gmp_init('0xceedbf8277a9f3b5f28c34cfa57e94fab1f96c0e4049fc6204f172dd0972e9a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7451fe377b24776b323357a021c84544edc4e459a0829db27ad039a2f521ba40', 16),
                    gmp_init('0x16396435fcc70940d69002198464eade36b09eb9985d5439d0a61cd3e518dcf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1178b3fb6e4bd148cf4682d9ca1cae99354557b05a5a8142137433cf833125ff', 16),
                    gmp_init('0xdfd697ea9babd95b382de637ea310ed10dc8adcd08e54d1be80f9709d8486abd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc31f323d127261f91589068f2acf1870008cb862fae8019282155e1da2152bdf', 16),
                    gmp_init('0x2689dd48abbe75809ec96dfd936414f1bfc9c1be1030637dedc121b6ccd2022d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ac7a0826f94e907f8a83b7e8d2756938444d685b48ce44f3b3695ccf662d955', 16),
                    gmp_init('0xc80f40920f33231cc9d7e5234cb59ad9e3f481c5bd6c138dbc6a2dbe646b3dae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58fdc0dfe5dcaa324a33a3bb84ef35ee9d08bab256a19046c47a8cbab3f4576', 16),
                    gmp_init('0x90ee3b9e9ea9e0e7c3df9b4606b8871e1e801392607577593a45e3e1a0110e9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0f48b2859ddf2111ab7fa8700569e02cc1ab7ce0d3465cb7cd879ade88803e5', 16),
                    gmp_init('0x3d4326b6f883ca369c9a64727e60d7d3932e4e070b828edba6932202876619ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d03e705c0bc475a881e580ce503ba506101a11756076ed3a2e1d75449e23fe9', 16),
                    gmp_init('0x6fa65113c3ff4a09db7c876cfb9453c56601f1086eb5b6339d3c68a567b4d038', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ce8700f0351766da019c8e10ff7b8c0e2b48a32216539afa96d67099e1f515c', 16),
                    gmp_init('0x73879f4f3b5ec4a7bacb2f42f7ef5d2ca7a9dcd3e2c3d52c95193649852eed6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9c1e53ec28889ba152c3a612fecd63f5ef01ba2fc2e5f0043d95a53eaa99aa', 16),
                    gmp_init('0xd731b36622fd601af161d8990a6b8fd17ea6d315a2b8c8f7aa396b087e003bde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfac44261dcb7c109145e1bb0fd7cca1d807200682cacea2445aa3775e4dcf274', 16),
                    gmp_init('0x9713fdc61566a8a87cc723d5d4ee97bd732027c6274594b163698600f12f0472', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fb68ebe1b8a3c0b187025ddf8e690a84435de4e901f72dd2410978c33dbfec6', 16),
                    gmp_init('0xcdc87fcbb7891dc91feca8ef55d4709ac715ac677de203833a92902ec95d4948', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf891e6165b403e0046591e43a199281368373ebd409adc682b5e4b6abdc39d21', 16),
                    gmp_init('0x129f53b12bbdfced18aeb8a8e2dbc43b73a97ec4f5460254d5908e17c5ca579f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x20e118564880c79cb927e3501cf2a53f030b86e3cecac60728cf1ab99076f57b', 16),
                    gmp_init('0xff67b352ac437ef731bdc3e3fb6de9979fe0dc9b40e1b71e8583bedbada7afe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4eed0b4dfbb5c3073fefe10d9289d72b62df6c0f0ba0405b9e849544d4c20855', 16),
                    gmp_init('0xace0fb288a56693a1941d3287fc115c81136ccd32d34fe3f4c087a3f8bdffd1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffca2a5bb86606ce8f7c7fd903061a21940a51ac64a84a5c849e3aed4b661da4', 16),
                    gmp_init('0xce1cb0e32b71cdc8a53cc9a148f46c8c478f87ade5687f6f8984835eaf9b8a5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42e0437c7aca84f70a45b1168ed12d20feb99f12e6a12de783d637e60524722b', 16),
                    gmp_init('0x2de1da0901d920eebafd84ccc9b4ea3edbea2a6daf54265a766939c81fea76c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff209cedffc116ab636535150dad354a4e2b0671b636be583cac1e139c8cfd22', 16),
                    gmp_init('0xad79f397469d0f7e207d41d24ccff1c80d4f4b92c9684b942389b14e93bc5535', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb30ddefbc268d8659025f8240670dfde0e411d07935382a4c4ad7478ecdc9426', 16),
                    gmp_init('0x7dbf4fd5c014c1534ab3871bc983d48b5b93309caec0238ff33e104b29c7275e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33d5f02d0b079ba958604080d33b4b156d9e6ec87017f77ce807e5858f4e983e', 16),
                    gmp_init('0x1eb5a76d39c478473c3d61655bba1eb7a71aa9259630c956d70db8791ea37a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70d96ccc51afb00c499ea8fc2ef48c949a7cbf2445cc228c6f24fc37bcec904', 16),
                    gmp_init('0x9b915ef5ff0abc21fc61582d55f0e97753bdec7b34681bacf62f4db2a3ab316f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f1bd23da6261690a9e974d9adbb5e65d0e3116c9705a1bcb695a79f61e52a73', 16),
                    gmp_init('0x4c7a8f6393ada8b8b8769e430743eade590502e64b1850a857da1451ebea8f2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a8222ef9e8bb71190f30cff81cf63f0422a103d58fb12cab99a48999b3ac988', 16),
                    gmp_init('0xd24a183e19ea8e1a0e7bff3acdbd84f2881ff21f1a2115573030280dc665b755', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x963bc9fef7b637f3ee6298b7dad880aec4a0760529f3ef5a5842fec2fd2bc078', 16),
                    gmp_init('0x7ed3383fcd1e762280a3e5092980a4f1c5ec0428f443a3c27ddb231f5afb8657', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9a4d09a8dc935ec8b8bcd87e4a8d86cd1ae0c830c4719f5fa281f3fa8a4d326', 16),
                    gmp_init('0x89b4e59ec839f9c05edd81c41e336f77618eff0672aac13fe6a8c7887d9ddab1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89fe6dad861da844e631addcb7c8bc4974805654d88fd93a6871e76eafb608ad', 16),
                    gmp_init('0x2898278231f4e8fc87b57dffb725df39aea9d513e0f0a87b601406e7864d4dad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb150e2e8d4e7c3e5ecdab57b08bdb173c72e26a6e9500fce4f5f21825b6e7fa', 16),
                    gmp_init('0xef367c87de05b875f2006d1494c959d6d2013cd9c6155901f7135ca79c00dd1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc348047f3bd79759510d7ac4e1166984df2fda6ea2232a0b0718981b19ae4a29', 16),
                    gmp_init('0x584781f2056a1c5613da8dd20e0dae9a8422e99f0549aebf34959ac4ceb09235', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5c9cc4f8723a027b0318ec7fdfd7dac93fdd478e694fd54add1452e899273a8f', 16),
                    gmp_init('0x84efe07a1dfed259a827589d3708af964f003675a11acab5addaca695ce80d6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3ea757deb82767a824a072e4c20a4b8bd467275c0f80d40f2e4327bcfc91de', 16),
                    gmp_init('0x13f2bf92ffae215623f2abf6056aaab3bfaf0850149c5383145e8c5df582f54c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ac8e192bbdfd85c5be2403952007431d0604fcef55536f38c8c98544883e382', 16),
                    gmp_init('0xfcb7e5004c7a8c8039c8fff2f0963976de76eca13d4d9d2e51373d9bddfeaadc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a6cabe1f8c78b4f154a04034f63c34af6bada2932f50e57c5f483aaa556ed7a', 16),
                    gmp_init('0xed9f5029fad500451de544fb7d555740feb87eafd12207162521483ea054a72e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99dc0698b79121182d515d44e0d67362c6eb65432e48094ebca43077ef01a3e8', 16),
                    gmp_init('0x67c69cdd23b982bc697ac71171d80044b7a67034d7f8f294528645fe40f61114', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9cd44dc242811d04a5ddb4e150cb2609b9c96bd28139b2bce73b8ec1fc74d145', 16),
                    gmp_init('0x86adcadafc464e33045ad0badd8443a33339b8fbfe816e5d5c6c406240d456f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xabe2f3618e04061644024357cfcfb9f37724d883e8764dc3383f7b004cd535ab', 16),
                    gmp_init('0x4f02d64cb755b293de0dbf2b202df7957fde7a18c3ac8dd990711b34517b9c1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed19a56a1b59cf5cd880f08099a2e4dcf318de811d6a8871bcc2887a735a8087', 16),
                    gmp_init('0xcfbe683e6c3b56b630254512ab54afe1a98cfd5aae96da46e56ca0873a9fe557', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x227cd0d78c39e72137c6fb1f77e6099e4518dba599e6e4e0db4b66b36909970c', 16),
                    gmp_init('0x2225e771c819391d87d6c8741cff5defa210ec3f7eb99ec4285a4ae31f809727', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7318f2cc7ac20e1aaa73845640c50eafa68a7f0cdf05d32abc64dbab7e6325f2', 16),
                    gmp_init('0x65746b8246e7281c0d2b1bd53182a7702ff956ece9fd3f10726271efb0013899', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x363146820aedc5b6827ee930a8cd053b7a41022f7d44ff77cd9adfc989e65b59', 16),
                    gmp_init('0x1d87db62178972928e8278f920227fc1c143c903b5c5b6e9c80a164269b4c2cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a247bce25c45963a8b9841059328be683befeeffa594c92bbcd5a4df85fa6cc', 16),
                    gmp_init('0x8b4487f1d473b4f30c92b3080f221cdd2cd38dc8ef4d646753337b0f8e2bc2d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf65ed6b6686b18a3e74a68ce189d1fec5b6c5dc7f19e9faf017b158bcd4c2506', 16),
                    gmp_init('0xd6d0bc68328baae85255dc2fd376e7bd4128efc34cd6542bcc52dc253913dfac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87d600fd202009c17de4bd6144abc201eada9af5476a97e159544a87aece4a11', 16),
                    gmp_init('0xf2d9fac94931e5e58dd72d4431473f9e5cabb39652a3bc0dd019658f9a4d4876', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66a0defa11f6135729dd9c276fabdba8ff97c5a66424975781e4f9753b47a80b', 16),
                    gmp_init('0x3e24aa6de37aca41cad8df2561aef474c230a428526edd200f7195f8ff795e8b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xbaffd4ebf8a8b5ab46ac18444f3dcde3351a3a75556c6c4ae7dd9ab328523eb3', 16),
                    gmp_init('0xfa93dc5dbc95e83003a8eb3795ac09c24511ccfbf48b6ee1978300cd5acf387', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcafb6c8657874a09751a418ae4eb8eeee9817b137d07f1eeae03ad0f9d2157ff', 16),
                    gmp_init('0x2adafb1ed5c5c67a01a1cbb99ab4e2e09c6ab445913b9e0e16cec08173ce8988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91b44522441c89ed7778b51236563fb71afac0c166c2e13ad0099b4ef4737641', 16),
                    gmp_init('0x3f4463bd37fda9762c13235ab02fb428c9d7dc666e077d03f2512b29e101bbe0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x894890b2fad37ccb9a879a27cf8ea9a337d28a48a4bf795c4700eb8ce51b2cf9', 16),
                    gmp_init('0xd46800ff7c5b301188a0abfdfd48e438498e7116a3bc2ecb0d187ac835979d3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x296d135de82db07aa37ea6c7c8689165743eff76538fefb9c6a2bab826dd01df', 16),
                    gmp_init('0x14054edd92e145e42b87129776c777cadffaf618e5e66f604950d320aa3a0dc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b46d393ab8e7935b7c5e38255f2bdc5d15f33ed2466a2df427abb1ccfe63974', 16),
                    gmp_init('0xf3ccefe1918b71a20554f01e26b9c5d6bf7eed5ff5415950abedd0a2fcfb2502', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b0942f391367a318f13c2f1f19e4a9654ffe1242191b2c8c67e6f06d650f5dd', 16),
                    gmp_init('0x7432aaa6366cabc0e055c1015613c25f023c6782e4e73a62c2ea5bcc7aeddc6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x463d8e29e481aacda1697678f8b8c55ba26e2a1e94139936bcff60267e460d62', 16),
                    gmp_init('0x400f734b7ae2a66ef1fd6c6724f852968f9eac14da469b0a226650888c11217f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36377a62fecc11a833edb8fc4d2e4af188862b435655b147a375e8f04e4a96f', 16),
                    gmp_init('0xa1de191d354fdf838d930c557854626384098c21430913268bafb7e051e08cdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65ed3e3318fca1ff1dc6ac386974adfb7b75ff75817d1ee6289d10a1d758ddca', 16),
                    gmp_init('0xa0af48f26663b83e53e5b3e2c50170dbad540a47e750380055c81f702574bbab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1041af730f5e162bcbbed5709d83251c621e89eb269e62a141fd3e1679b5a59', 16),
                    gmp_init('0xad42176aa8f58b19422650d873bc2afbfb30690e1eac66d9d8d2b4022c5514a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbbd8f0c432db2ac8366893255833b9eab6187b010f996c885f694280f703588', 16),
                    gmp_init('0x1dfa800172bdf452b5faf53dcfe82b729fb66f2b251d8a2866dc602dae9e6efc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xda2167ad0b1e564703371ad0f9e92007d8893170cc85758deae8db06cddd597b', 16),
                    gmp_init('0xa21992b62546ed361ff6700ea798ebf6cdde2a52144f9f462681727e3de7fa04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbc1dfe363857973cefd61b7ed7b5c6390cfce38b355f32067a40ad1d98b4cd9', 16),
                    gmp_init('0x2fbe210034c2e5c897e6ebc2a186bc8d4d091e6872f5b00230f0ab4a081c5f2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c3fdbc237f6c678bc863b872164f29df4ee23dc26bf29c09934a222b3f7dbb0', 16),
                    gmp_init('0x39260f1037929813f0aea5394a4b18d41f0646380020f8add64cbdc972e16d32', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6ad2a098fced766ed22a34d257e4c96479f0b1a76db3c5f835208d8ba111101', 16),
                    gmp_init('0x2d5b8b1c58f85e3559a4c01bb9eb62a0de429d82b70e89aec1a7ba9d5fb37ef4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf657e9015f9855a5eb9acb6ebfe5941a08fe3cda3b36a5dc2b1f0bd0f65bb830', 16),
                    gmp_init('0x8077a8bb3bcaac496dc83cd25da0e7ffc2abba9cf2c8e35ac3b9a74d87b193fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1a2ca556c3bcd7204f78bd66bd8d475bbae4f184531ee4376fc3847702bef6f', 16),
                    gmp_init('0xb39b59af0488313edf455417dc020168b0b47ea81fd52b4011b2d1fd8f6c1ca3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe46eabc9f8e2f20cf0ef002c94979625855719520ec5a6e7db47ffceeb3fa150', 16),
                    gmp_init('0x2532cfc894c18963adb002810c09fc3a50f68cc24c227e4bb934894c4a0b139f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe924ad49fe3b8030ee1901658ebf1851e6c4f2c824d613e0806028fca0455367', 16),
                    gmp_init('0xfcc97d979a143ed5752085393d6fbb6f52da31aa4fa6752b5fd18cf828257e92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38136959c7525f69dfcb04e096395097a0acb88e2294af94e0f0bcea876ab854', 16),
                    gmp_init('0x20136ac6a0b1841139e0257cfac06a9e5aa59636de810fe6f615b5aadfef276b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf49d9c7dc5f7026fa00b935105fb22f68dd4aa5d4dd1f9e2e91f093942f8f1e7', 16),
                    gmp_init('0xf5585d4203e3acae6ae5d3b3b994f67901b0013c4e4d7a8392228ab1914d9972', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x107a4485aa07fe2e14bb5af4516750f0e06a970759acdc147724967e5833c4be', 16),
                    gmp_init('0x6ea22142b8e4d7cd813794ec48e680074d3a4fc91d760c4a6566ec48c87c80dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28b04d03e46a9d48b0e3c355755189e65c4cd4417e9827a77b3a9677fb219a79', 16),
                    gmp_init('0xf658da9e5a14cf1459cfe572183e206b86166ccf86004be5f8bf7cd9102dbe24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8618e592d6036fe6fb9a11d7d914d22285fe50c9767fd95c59e7401ea3b1c126', 16),
                    gmp_init('0x3211a2188797809ec3318ec138256e9b1b3c5b73377e9aec789204cb07684433', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f4766be7cc1fe93d6850392886aefb54c16ba6511460ad8b2822d9c57774af9', 16),
                    gmp_init('0xcc810dd6a7331cba3ab178906e6e5f511ca94cfdf9b7326ff7cd7f64dd4de990', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b9692b014d724fc935ee6a977b1486ea178aeddef98026ee9d749fa0c2c179f', 16),
                    gmp_init('0x4c935caf2fa8d161bf262ae1e166e909b246c044118849d260a1c2357614fcb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3249e02c0f8ee791f2adab41d6f361721ceb7fac84d598e78419f1e48e57705', 16),
                    gmp_init('0xa666658701369507dcb778c1f2486b5a501945d716738422094b19e838caec0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9dcdeb8f6b27a1ac7c45723d596a802a6067cf27df32bddd4dc6cd7adbd5d6a', 16),
                    gmp_init('0xc6a1767dd5f26757c1335f1607345b223e54815436800fb5e53282ab633f2165', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa689580bdfb7961cbdf9e7693dfbb4e917e202510587f8d2c78bceafb25b93ac', 16),
                    gmp_init('0x4657ca94b4f0783eaa7f2f015f059ff2fcf1f817d9c4fd3aea3d1c4d6f589aab', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa6d39677a78492762736ff8344315fc596439591a3c6b94a6cf20ffb313728be', 16),
                    gmp_init('0x674f84749b0b881666b8babd2d27ecdf824a920c2284059bf2bab833c357f5f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f06dcd2ce62e80d4a661caa2d2a108675f3b0caaeeadd251583948c5974bb08', 16),
                    gmp_init('0x8bc2550ce1922db985807be931d9b2e831606905e88f53e89655da995083c99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ef66d7c5dedb0dafc8ece7be26cf352406fdc6a1cc8d3cc054b569cf15d864', 16),
                    gmp_init('0x2db3325db89de6a506d40c5221fd505e9f470e3b1cce4a8b54625427740907fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xec61ff29918a1d05e0c05b31527e97b7eb3228b94bdc794c1c101b8fd5c7c27c', 16),
                    gmp_init('0x2fa1d3dc1b257a1d0960f82c7759298fe3c46c47690233dadf01167d9ddfe51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82df4e5fc06dc46014f3a72f75f28c0bb283cb952ce5416ac695143c17c7c05e', 16),
                    gmp_init('0xe4e188c98c96420a275216211217cbd1cf15d946842db300b9613d02d8fff26b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bb18bcdff79176169a3fb20e7d116d1c54f84d4c1b00e1ac23e42e21d7dd05c', 16),
                    gmp_init('0x42ad92172dea4874f81b6dd5d7f5821595187587a4d2a41656c549f2cb96a309', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x261efc9bc12b0c6a7d9e5b8d38e47a621324c22f8fee949d80ae1d41540368b0', 16),
                    gmp_init('0x8a9d2adbe386fce9fdc8852cd64fff797e340be1e39b5d3013ad2559bdeb011f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a79bfbfe71e347f4d6c6698316797e2f5ac2a3900f5abf0c409332de46e2050', 16),
                    gmp_init('0xe98b4de6d316e200b6f671f3b224efa9ca94faccb6dfde317a3f4781926250d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d48dfd77a2c279149aa7e59d9e7692df30b335f56e8ca4af1033e9515eb8034', 16),
                    gmp_init('0x3cb47245165dd12f3d5e79649e054763080210ea2a3e8961e873087a5ab0ce30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f3fa7c10b9878cf552f2572bdf5a5ba0e867737aa8d3616856ef847d4598089', 16),
                    gmp_init('0x7c27c1d9db7b9e55c7cae5b3f6cd1d1e1de1b2e886e5a500ed4b37c59825d989', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93a5c01e7bb98923a49123fb4fc54e6f65f0a5630c8db13eb5143dfc540535c8', 16),
                    gmp_init('0x2d440e904980c2f4c16a84358e15a5c166a16204935bedffc49574083d59b844', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb9198671b7ebb21d2a4b4298373d40071e2c88697a4800e50ae677014bfc0d8', 16),
                    gmp_init('0x17fc6939a5ff362b041e4e90fe1e9d2807e90760d5c244b5775250f36a805701', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fb0b929161272bbb35da0e017d67031e54704996bb0f652a261a5669e2047ba', 16),
                    gmp_init('0x9d467ae68217df94ca72621c99666dc86c420ae7717009d357fecd4eddb24158', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8817e631bfdb29c5686db122ec8ad7f871e4ed9d99444eea9b77255b15d3ac8', 16),
                    gmp_init('0xd157cc02d749cfd4c293c342158697c4f5107bfe96dd8358bf2c496232b9a312', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdab09439e08e83d5d0763ba9de33e4381c3186beafbb723a00bdbdbae2df71c1', 16),
                    gmp_init('0x763cbc1e544e1cef385ae86f20d20b3d6e96330ca4b44e3bb873484124c3a1e3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xac25da80089cf4e033d4db5710ff5936fd683b4d0dab013e6eef62ff4514c6fd', 16),
                    gmp_init('0xebc69d985cb44c7b883da9312a1b338c810983e8243bf37a60b5397705830541', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb467cd65660c13b84aec42b5296bc037c1e6b5ea71a0d289b456511069962f3c', 16),
                    gmp_init('0xdc91b9bc4d36ffeabb3f5d2a011664ac3cb212df6cbda472f75584cb22877596', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeea7e66c49ba3c8bb4d748671e165547e631e4dc5427ad6081941c7e32fd0e3d', 16),
                    gmp_init('0x83fed45b9f88926128843f27be9b7d985acbada23019e3cc10411f68d91d5868', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92f9a6f93fa37761979280de26da6cde08533abeef2160f4919b1597b43c7e8d', 16),
                    gmp_init('0xbf618d715147afe8ed41d3a6f5e542df7309284ecea312897746055552bf1285', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a3de2d3e93e21bdbad194b35403c67b7ddffe6c44408e5d119f14f26ccb63b3', 16),
                    gmp_init('0x2f809b90611112c8809f2736ee813c4c49c01d9fef58226001c532977df93fcf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cc4767a0677248665fbb469f6e48d447db4ba1f065935fbb5cd34f827d3c9ff', 16),
                    gmp_init('0x557c538d8cd381ad94f22765e37b7edf772241168378473a3016c53cc5aa7383', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7c382f4b53b92db05100d30123fadaf34896f70ba7f6d8be4eca34dd63f1117', 16),
                    gmp_init('0x1b91e5116761bf880459f777705dcfb5ae4eb76ed3c4a68cc1220c5e1934cb9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ce4fd836044baf3a1623065bce83b11fd7516a5b209d887d79a7081afaefc6a', 16),
                    gmp_init('0x61042108aa50f3681e31bc1ea832c7144abfbd4ab9e4acce38606dfbbf9db9a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x555aa998cd86121387143bfc83a6f497e8231fd91838e3e850bc81c5a6774a96', 16),
                    gmp_init('0xb0532868d207bc6999d441e71350bbb89a0d5d4bc8e26fa69d40972d86db0e34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3e5fc623ebde5383057718fb12db4eebbc69e0d4ff63d759bbd7fa90e22477d', 16),
                    gmp_init('0x7b9cf2b9ddf57fceeee497a64cd139a3e62d7eccd5fd57d78191f5c6da5f613d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a42f5b348a7ad7b58cd78f8d77c36916572b921124121232f7eef3af7dac7d', 16),
                    gmp_init('0x957a9c38552077813497f954b8bf9216172af29328cea96b27894a318195e46e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84b8cbaf6945c266dbacec2a8cf6eca671cd9ede1d889c4eb3868678b914b225', 16),
                    gmp_init('0x40a6eee647c236ff34d5ac01c492104dce62a2bebc8f14aca0a42d0d04b5ea85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b47f537eb05ce3d3a5b09ef1b45d3a3134deed5143071d3e02ba1d4202afc36', 16),
                    gmp_init('0xf2fc450399c85f0c2dcb06fa0e8df573345acbe9b25fbda34e89f76a6f8133ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53cafae5df3d6bb0c1a61ba35d6178b64f37060f7513ef504bb15c4a67551756', 16),
                    gmp_init('0x1b39e92ffe9f693ad3718a7b00221a281446972c93ffad4b52377138a941e0fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b3dec9cc524e8ced56516f536ae418f7915a1dfcb8bad86aabf2e3c77d17f68', 16),
                    gmp_init('0xb8653937fdefd9ef050981b416cd5d4747f2a96aa6dccb68cfae7a20c9232402', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x285250edc3bcfcd9027bba12176d343a26035672d5b4a81155d4e37a2fd20bae', 16),
                    gmp_init('0x7866c086f4ad7ea83f7284ad1046c1716e9b1a2cf1eff323f9de455a54e0ab97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdbc091d89944b44eb651d0cc325161c03840e563817c6662f0f2efdb220ca9a7', 16),
                    gmp_init('0x92d80eaae8567952d57926d1e4aa5fc6367309fe96192c84d20588316c8e76b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1e3c56545d5a75c5836fa12fc78baf65d2ef616abb75196cc8876aba636a50b', 16),
                    gmp_init('0x12b8847a6e1efce76c736a67f6a5f3136b7fa576d22d7a6edf77914eab3128b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9018baa11e938f23b322489c6ee06d88ad3a6dd5f518e8d7d6be4fd07ef7d72d', 16),
                    gmp_init('0xc9c382d871f9c6c9e8c147f743bf00b74eb56d8002736aeb1267044fc036ce68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x584d729c81e134a76d87cdabfa9b228cf45c1b6b5d34f3b2517f13214e583340', 16),
                    gmp_init('0x2fdd80a4560d80abcd307c593030affa8f1770a66494c07072f6e5e974fb24b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa77f7298d5478dde28a8842dde8ad36c86c0e6eeb2ad008b08e24680b5182e0f', 16),
                    gmp_init('0xfa48a69c911b4fcb0f1e64bbca515f6a3368ac6e2475b42ca2b37f28c4b82d57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaaeae00c837df7d1e2e028dc2383c453c572df0b5eb817392c83ede0235809b', 16),
                    gmp_init('0x325788833f324b80b4a2307bcb49f299835c3c42a1d2e7e5cd61d8a5c154fd62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xedd513bbfef3fb2463336038135004a3dd2f1e9bff60a8a607596c1f536ba602', 16),
                    gmp_init('0x257b598c3bb3f7a97c592ca290f0188b61854d442da5dcac3b8086f945dbf993', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c7e46360c2131a65139efa4394b8b906cf59df0a5ed016f60042c40d612268', 16),
                    gmp_init('0xcb6ad55df72dd8cd747fc75ce2f453ca238d8a5a782e7098bcb4b601260166a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7efd4f7497f886cb8a5950d20f3e933aec2227152243bda38c38d2fa8a4b89b6', 16),
                    gmp_init('0x1874de017416a66f4e0990488b16813b2004f637c692e8df6f90f9762499522c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64131deabd6643e5bc2ecc7b711a36db89e20caa2c0e2a3bd43a35b812fbdc8', 16),
                    gmp_init('0x882c7fac32d67028f2b380d934957598603ae268b1fb020a5d3ff309a9f99380', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0043b2547ab787dd7b0d40606b76f3432480a1ad7b6db4bf4b795195e411ddf', 16),
                    gmp_init('0xbb75a0a9297157da435ffcdd3f79d614eb9fdace24c28f2afd7cd7e02d2d212', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x366bb7acc275c2378a16416fe19b6400443821cc59689b0675eb00064bac9f32', 16),
                    gmp_init('0x7d107b708785af064f0783ab8d61cfc01fdce50c07f0268a42f0e5cfbc85d47d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfee7cb9ea3b7bed169d47d406c94c46b2a424b9ff5f946f1426640292892c6d', 16),
                    gmp_init('0x403eaa5228613cac26de1d1626ee1537805488897f61a685bd8ff6b896f7daad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb767db257cc73c006b27d0e39bbe32ecb98c55c37b3b562303cb525286dd27eb', 16),
                    gmp_init('0xdc1308c3261229cb5ceacb816b99d85b64b700b448600ed415521a47cf65dac4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc472c1062ed0366f818debc07ef8890e1fc5147dd0dc267c171f3a2a3e07e4f1', 16),
                    gmp_init('0x41820e01945f70e96432ab5a84d667d885f3b7b1e22b5d8a571c683d86b0daa9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x454e27cbfa01cbe542cddf6fba29971ef8c49096987f88efc0512999fa863437', 16),
                    gmp_init('0x134a4b214cf01e9e9e7e5f8f2f81017c6b8d88d5c651b986179b00e551a6bbe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86f88f399545e3d685e1b7a4b8ecc31eb39d6554613f053f4369534aa2f8acb1', 16),
                    gmp_init('0x2ccfdd69a68238d6b37c978fb591b1214eea62bee916527114b042d105098a19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xecfef25fbc3698c06226d5629c51fffb94130623c2c03173828179c8084a599', 16),
                    gmp_init('0x8132b98bf295f2c0b2471c839f9a7982ee9d57df992f62b23dcb4c13d520e922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2a3be1fc9948e747df7669660d9f9a0e1c6a33c3dd35602d88377b6fcadab66', 16),
                    gmp_init('0xa93bd8e6b524be6706507ed74d235ee1fb2de8a53480ad25ef4a12484c1aeb12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4366cd148fd0c312cc8936952b904bbf896dec1320eb0a985cb709dee63e9e1d', 16),
                    gmp_init('0x2ba2ad81e31075c1e86995697bb39803fbe7cc19e0df40456a57ed87db364bf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x354e7ced56e78db9367e124677c080be82fbc777be2d8097b89d2213207c25bf', 16),
                    gmp_init('0x629d62e9bb994070e6ebd824a5cfe5585fd756cb05a0aa215123a3995a864211', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf11f5d1ddcbbe3469ec2c0fecc2f9b18075969944b3b7edb644630ba41330c21', 16),
                    gmp_init('0xd20045d6570278c2b3e3750f788716610caf2cbd5792771554e06c7749ee7ae0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc751c9aaf5de805b79b5cf720c099f498b80a78586c4bd2e4a7d82e075e1dad8', 16),
                    gmp_init('0xcb986437fc799de2beb4c1fd6dc9a4ffe6f8970a3a0a8c02d136b3612e4afc8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22fb2ecf815e26814b887223fe0b3fd9fad4302c3e7bc9e196f264d366f70126', 16),
                    gmp_init('0x5c41f017985133401d3e2d7fda5dc66e2a4413c312b6e56803f991f610b811c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaee9cc41b9d1d02178ab5286b50f9ca80cf657d697aaa757d3121b21099d9ba2', 16),
                    gmp_init('0xb72cf302db52a36f7be97bfb00c6b1f5312e68e26a17490e78d60483bed2ad58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6c92b5a52d770dfe13ee8c1c102a021adc53adf247962ebe38d54e8feda2a97', 16),
                    gmp_init('0xe280e93cd72417962752676cc984e02a0e74911c82171670403f3e7fc8f8a8df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0d3f46a7912ec56bff60af2b1ff0cefb0da8ff0ff391a463ff0824894d208d', 16),
                    gmp_init('0xdc371b80ae1f7169b0474da65f909ff0b213c0d1a71ddabfd62f53f79d45d1b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c21a0c6d87027973d483896be3ffbe52ad9381ab187cdd2cd3240ac19c24451', 16),
                    gmp_init('0x15e1e64e69b11a88343a31d7ef641eeca04be5eaaaecceecfa43dfe9236f3116', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x778d146b44137535f47cd8387e5441e1cb36c3737c071145c6e822c819cfd890', 16),
                    gmp_init('0x3c85ba133b011af72a52718d9786cd3796ca45488ed20acac9a87fa7d6f057f2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x55d5398d1666432b557582c99ad534580101fb06a050e62c320f09c3839bb85f', 16),
                    gmp_init('0x576e229049ff8e2d059c6a9e8ebaa72ad90d6a7f1833d9e1f7f631184fed936f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x419a4f03ae7617ccfd23639585d56f8d28b1eb93fff3c118f642e95b4f491155', 16),
                    gmp_init('0x237c2d343a6e835b2e334b1484804545c7ab4a22074c68894b91ba6ad489bbc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bb46408814f888b7858058dddc0a7a39f01c1e6f7b910d1c07e2b9212ea285a', 16),
                    gmp_init('0x8a3016bfafae1125a40fd9b892b4a4fc1e52a34b992fa94edc0c8a79907dc702', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2157eb3dadf2828372304ad31abf75ec3e61dae0b35d0fcc0841ba9e49e8f34', 16),
                    gmp_init('0x817697da70df31d0fb42577ccfbe5a2064bbba35b187f4e1a8e983289eebef3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc4e70e02fa14ee0973e2678627a548c88d076b8297f0145012900d539785a', 16),
                    gmp_init('0x5729f224b8cb4cc3a5f5a1cf3f3dfb4f877017727a3275c353990475ca62e3bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb76f40233e918ce57e54f059669a910e4c3758a2b96ee4b24e9c6714b80f772a', 16),
                    gmp_init('0x5197211a7aed93c9618f274ceb0999856ba24196b16ae252b481d7c72eeff74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3e492fdc1f88173587739e1b7df0876d136189aa3d5a6a3112d4bb1e114cfb5', 16),
                    gmp_init('0x3604a70a73f8c48b1fee2676bf15fea39c88f06e46754eefbceb9aa5697f7045', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdc386db7f409d9e0fb28652a88c376d227fce62d1df14515d4eb281c2d5c502e', 16),
                    gmp_init('0x526c6376cf20188ae7e69c459d7ad72b372c3db3cc760b7b23b47a257bfc1e4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbebfc255862842538a4e52310fcdc1791dad1b3f64d4b7871a2674bbac55ddff', 16),
                    gmp_init('0x850de265c09604ce8a3a11c4b776576c3cca822d650baa706d4db0ca3ea2f303', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef938fba5e02418a0a8da901c55d8f9181ec6eedb69003fde49e72f50e08ef14', 16),
                    gmp_init('0x824400400839f5da0dab07948e47b80e6f667f2a4fcd01b884d5ffb0cac193c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36e984dc73d20d602fb2931d160784715da3543a21d9224e91af41e4c99ead51', 16),
                    gmp_init('0x1437714721bf485f4bfbdfc9ace32b203babbec1704280afc6fb9d426e0e5e3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ee47b1e63b15d114c9af29039895a092c0cb5078f86a05b68119a550bdeb2cb', 16),
                    gmp_init('0x6ed220b6c3014a344efd69719dd7c79b23b9d3b2811f174953ed9c7e453ad96d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91b6750043f604aef315147954d793af785e24816776464d7a8b77bb23093df0', 16),
                    gmp_init('0x7fedb1e5824a00d477c7ada96e21c5d933685f8f9caf67f5cde8c37d2cc9f14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2530f0d5fd4f42a58f231ca3c63afeb70a071eb5c5296ea61688a672861140a8', 16),
                    gmp_init('0xadcbe6a85cb4c684bb07d89392cff66340cb6d19bef1b4d571ea3723a918d4bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc5d9c3c7a1c4883e7c497e1a03602fac5b3493028a9b3848a2367b86fb7b8dc4', 16),
                    gmp_init('0x3e59b9e25cfdb79e5808c38605c50af3d0d8f72fd1fd4936ed64978d1b2df0ea', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x884286463ca0872694febab24bfc3383cc268940efec85ecc62dbc9c32513926', 16),
                    gmp_init('0xf778429c01c2dd5a69660db365d81207ce0eb122ebdbc15a0ee4282aafb8a54d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x789bbeb0199b2c38b48c9ad4808a2e9f0f3d27b94cd4417f005791ea7c2ae635', 16),
                    gmp_init('0x14357e6199189bc68680b79f62f1217a7fef5a9c2ca1550fb781dfecbfe96db6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bad9d36f76f0819d5a5fd168ccf6f4ad7f1b49e647f7da4ed2bac196520f1f1', 16),
                    gmp_init('0x49f99de33e24e659bcd9fa7d9dec0e80499981a24eb672586a1970725698df4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87c1d99c5ead72de2cbc4a513a0a9bbd5156b3fd89b84639b1f11f16f529b1cc', 16),
                    gmp_init('0x7e1654c6985d0bcdb8617a6ca55ef683bb0d0eb2c5b275e3cf26978dd5a94d6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6b3a4b1adb0c46d67a7df53d124118ba6ec16dbefa783df0b1e44a8b185ae66', 16),
                    gmp_init('0xcb6e8d7638896231361a91cd969e8d8bcbf0a5df5b248dd7beb553f8bfbf21b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec07b834f2a5ee0550651821d38468f5dc7fc279d6f25a3201391bc2fa4e24f', 16),
                    gmp_init('0x83fc544920187511f73485cf787edc58eccd3c9377755dfc318910fd4d270725', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f848f5a6c9114a4e227e3a7d87f10c1f61060c17ff3f1c2a9684ce4ec630e3a', 16),
                    gmp_init('0xa028552ccd06f9638629c83d1a9da4264ba3926bfe359724aeed9ff686ca610a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2800043ada0982e22ddb6c3ddc7f43d53719a8b66bb19be6f0f679f10b79847d', 16),
                    gmp_init('0xf99174667e82909b6c0796584a4dc3ba87058dbb8513ae9fe5b0083908d9eda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfd1e54be949c3588b1a2677c6ca2eb211b9557645b44e154dfef3cdc41bcd10', 16),
                    gmp_init('0xf4e31f5f600958bb9c5751bd5b052fafacd9915d08553965ac015eb9aa62e732', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3ab7e11a14ff415cf9be92a49ec4b568e079636bf00e32016c8dcddf4af9b61', 16),
                    gmp_init('0x5d946bfa1e316edd91fd72e6c5750431d03db05cf3efc38fdbc29b8d92e40c9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b3e730c046c9e5512c795e3e771291b90e4bf5e2a870e724fa61d92228da5fb', 16),
                    gmp_init('0x8c40964da23660e9e80cba07b8e0b48c65a3a11c9c23472bbff0a638bc169e48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x496ca72c0a9f844c754324eab9dfd896736ed099f5f128c93bbeb943d64c5c17', 16),
                    gmp_init('0xb619b92668fece3d11129ac79f4e5e562578f2a97237ff73d9672e3ccb0e98a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xafe915df74438fe71d54b8a54b42d8f737e9cca3589aec5db8e91a589f894780', 16),
                    gmp_init('0x3caec3408d204686a94b4342333f2e36909e8be73ac0af452f969553d511d444', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf064d13b5447a158e160bcf6d078be95410beaacf463fca19298988ac2cae99d', 16),
                    gmp_init('0x91295b62fafb0e0c7b090c25bd2ddc8d2228c721f2335bf7c66e8f8ed4682815', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc05482810ffac855866a3a36d35c9e7c0a632dd6981c8aff5a31fcbd182fa6e', 16),
                    gmp_init('0x2f9cd2cad0f1f533d1aa8b89465d602bf5e664584b76d01f6ebcfeab661cd145', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb4958c4e21de21d47fb60c55edb925559eaa8520a5ed115e3e0b5d5ad4441fbb', 16),
                    gmp_init('0xfcd6e7bf996640efe5c041fbc38cb7e12db9f6132d4638414c7e3c9f4add7118', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa41e9e9ed5876481e77ceb19f84df2582cdd704dbc1a71c7fc4da1176bd00b59', 16),
                    gmp_init('0x50dc31723b30f2b6da4e1ed1efc739b85cd253563dd4359fe8dd28cdcf2e6f15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3a43f5e7b20444d232ea0b64606684b878cedb730d70c4a5aed684c371f07f1', 16),
                    gmp_init('0x34c64f5b248fd6b84183227369975ee7ec7877a0cdcb0ecc53cd22f4e01dfda5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc02a0f2e94cc35ac2c5f09a87d6886df32a6d94ebf58e793ab0c96ef401403f9', 16),
                    gmp_init('0x8ebaa8a18e491aae0f716d457c5cd473abb913066000adb521f59639a7ed80b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x452e9869a46be14ac2662ffd84c008b148e1b4690ddc9b44ff7c97a46b559d49', 16),
                    gmp_init('0x8c5e8a8f195f80d0f5c0057b6761ee525982856c3b1ee425747c6046da0d6ba7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f170a79d27219b8276c8d6312b7d65f6af2b72d39c2b06ffee1fa912975566a', 16),
                    gmp_init('0x54a6aa2de8864a0cc799b0077d4e8578a0a6a793f5db695f5a576c88ecf3e6d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19a7f5d48c6d62bb51cde0dc3ac474ee8bb24f4256829e60537a67eb53ce94da', 16),
                    gmp_init('0xa2504ba7a93075c32f6a51d44200a2e8fb625306ae25eb03730447163025e7bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8d550a10d9265571a765de14913e26b9a6c22e3eca47658a69173875f7a8d33', 16),
                    gmp_init('0xded908e0ed161c307d1790c97073e188541c3aaf586f670d1777b77bfec3abee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbdaf5b020a4f34dc011eb0b2b5fc6fa417ee18afb5e15b9bb9696cc6d47dc697', 16),
                    gmp_init('0x3cec0c6cbdfa836c8cf575e47b57aa0855122e7885b7a477b911cbe786a479e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39fee9fd2d62767570090e18f245626b9ac1b330802aa4d80f0f0ded60106d8d', 16),
                    gmp_init('0xa4ed4a25730ad5b3414f1238a7434b81c5f7e608422bbc8fba2715cc8fac1771', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x265dbae95f39d15dab84b7fe84ce70db8aef7c9f43e106202a00b91b6ce05e10', 16),
                    gmp_init('0x58df63d09a3037adf3b3ce8b56cb5dcb0663f3933d64c67fff7f018b171324f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14be9987b11d148038809b87c78cf13a3a45062dae0e6f28e7efd2361161bab2', 16),
                    gmp_init('0xb1009f268e95f8454af646e95e96cd34060c9ff44e4bb74b6bae9a3e4700a3f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc43e083f17e6639689f749d53a5668669ec8303db636d7cded15bc55b3fe5938', 16),
                    gmp_init('0x54c6029239fbcc5835090303abc4402eab623071624407477679756ed83732f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb85215d2e0e93cd59cad484d81501d991a6a55184a5c130b05a78ab6a03780b', 16),
                    gmp_init('0x2511cd6b26fd9a07f9bdb3a11d663c6ddf8f56684dd531bfeaf21f928e7c4786', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7868f1700a3f848665ac50da77b266ba2bcf0fd306b44180c31c70f79dd52975', 16),
                    gmp_init('0xe89097cf31217ee1113fa1c6db11276c68f6f9eca69690443016ed503c626fac', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xd0e0919688e932b64134bf13b346027cd8a7fd0b7d761d04ac24e6436e12e1df', 16),
                    gmp_init('0x69c9a59fe7d1452b4eb60b691dbf867544cc4bd9846b8df6a6544db9fd28fbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49c696ad84a3a2cc66d8c6be3c064abe8f7137ddf287be11e27b29cc18dac2d8', 16),
                    gmp_init('0xfb7cbedae854b6df578962c7088dde4b4d0fec2acfc3e019ba5cf21de3a6aee8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb517a454a13308eb398a7dacbfc1fa8509c10140a96e3e02bb0d8510084aa098', 16),
                    gmp_init('0xa3d877d0c1f879a60ea3e2fb0f26fa3a4d48b54692447fd6004b59f4540efbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe7fe1a77506aebc71c42027371d3ac4795f5bbf94bf153888eb8b6730050f080', 16),
                    gmp_init('0x6a87c46d10e65daf1de51e7893cb5838f8edfb37676496a848c989da99e9e32b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8ec14384b5166f67bc22712d8f3e387cc26d27ce093643d6d95acaa4744bfa1', 16),
                    gmp_init('0x761134b2113fb9a632368fb269d60f610a637ac5c3900060c6924e6332b65f6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa019b49ab61c68029b684beed1b4bc5eb71b993348271ef1c11746e5260aaff5', 16),
                    gmp_init('0x5cf47cc5d82a6289ad17385454f78688c2226b31f87a019395c6dd62d5027088', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x320cff78db7bfae794e74ead21d4f2e64be6b1f00f8d99f2f62c3be93227a4bb', 16),
                    gmp_init('0xaf9fe8d4072a8692ab7796a254ff62996047237409e2f970581cc906b0f3d2d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e02fb86b5061741069f16f419b123085a47fd7bfa47b09505ec3921fa72672f', 16),
                    gmp_init('0xd622305feea9f183265ab8ce550b0c1e11741a026ed5c3deb24f5d49f4b7502d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc08de7c6a7aed8517edddccb543426a206cf35e0a95a7373b5b5a5e5c2ca683', 16),
                    gmp_init('0xddb76d855ea16e19b7c8299cdfce0e79c3c8d7b7e0ea68c692406db57db5f259', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a32684a8423a6dba2cd693b4230f6cbf9a1355d00bc321fb8cdb44097bbedd0', 16),
                    gmp_init('0x28bf4a6ae88b127980007dc929d2b089be4a953740265c9d73aec28625cddf15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1f8c76ad0c47c3d18e6f7a44ce4390995b652faf4fdd7861c67acf8252ae5cd', 16),
                    gmp_init('0x74d45dc66120e802ac7997b01f61203239bae8156989f4fc7eb97bc3fe6d2dda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e2e5a2a0e8219ddec85ea796fdb9b69f1e91751624d3c8e0b8b20b43b7950fc', 16),
                    gmp_init('0xf8575fca385c8a95c621ed2d3e97d04b3da949dbd9403f582608fd2a727056d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6cb83693f3890c093e33ec6267620d8c96d65cd67dffe5ab790066aabdc603f', 16),
                    gmp_init('0xd823c8e461f3cafc8f2d9bda4c510b72fb1ec16a4c661735cace03e0c96befcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6e4088bf8cda64216cb34dced59c1be4a57d6b825de9f4209e7e0b414a892d0', 16),
                    gmp_init('0x8a6df7d6de277701b4d764d9952dd7ef4cdc6f6760267775f6a08ec6a60300a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a6c9c91ea6c332136bec97152424ef0bf5b3598b570db4a29e3a612e2c374b0', 16),
                    gmp_init('0xe4bc7f4f65cdffaf79a7885dc90132a0461534f4340f4d583bf7cf8db78c08bd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x68f6b8542783dfeeeb5b06e70ce08ffefd75f3fa01876bd86a703f10e895df07', 16),
                    gmp_init('0xcbe1feba92e40ce6fbc8044dfda45028cf5293d2f310bf7f90c76f8a78712655', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1b40c548c1c0d5ff3cf09cd0e55e541666623f172e992589d10531d80c15fc7', 16),
                    gmp_init('0x1ea8aaac3f384ff9f47d811207f4708f00924520de9bb62417ca84682a318024', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bdfca7181668f4de996e6412418a776713b08d6f94c2308e418fa233aa89692', 16),
                    gmp_init('0xa721f68565167b849426151aeda5333c7dc0c6345e2ef1393dbdb431a510308', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x963e315dba2a02df4201bba7bc72a37ef1e49c2570989e56a25b597e831eba7e', 16),
                    gmp_init('0x5c02ba13c84a3935a2a3cb7c52167e11869d0ae5c0d5f13c3dfa4b328e7c79c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaca8ac95b752105635328552518d9e4fb2393658f89aae4d079b2342c37ea1d7', 16),
                    gmp_init('0x7f12c567dd75cc2094304c4b92872189e1edbfdc413935e9ddefb1049ba973a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79cc32165d5941a28c0821207c82521e163c1b41b3d25d4402d58a93ed8d3763', 16),
                    gmp_init('0x9cf893e8073053d027cc1d59942ffc3eadabc17581d3626b36aab0f0bc5f6bfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa904704db667c0e206c21af98d85311a37d669690597fbf5db2781cd3245b7f', 16),
                    gmp_init('0x1a1c8c3674a836a42d6fa3ed40f1c189cb9eecd2624f1d47ef833df14ddf6bef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fa2d990059943937be369478640da20b3e960fd626f217c6c38ba21348560a9', 16),
                    gmp_init('0x9eba0cc3915ac7e83754a352a6985c3afe39cdabc551c5eeb9609377bae52757', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d431aab91f57d8cd672b8e1d2fa92a818491483ff15439ab61f78fd77f0953a', 16),
                    gmp_init('0x8d667c3bf19121ebc530c83ce15fae0f48e29a908707e7c17c59d769d68f260', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7bdfaa7fc579c888275247200d57597e6e4c087b13db4a8590da9836039279a', 16),
                    gmp_init('0x1d2fa9f7c76fd5d14bd23c461e4585f6a7e6e36988bafc31dbbd0aab42152ae1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6deeea0d5a3e1137dda4b35b2e31c60ff32beab333a3ea705a31171365227c70', 16),
                    gmp_init('0xcbb93f0fc7443e400014cbafef6acc84287aec1e569083dbad6da3810369b9b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9504e87a52e6a5108bd75f71b68ba4b707e015ce6891e8cd69b6093ae31413a4', 16),
                    gmp_init('0xb6071d8fe3047cbf66bc455d63c7f186261f8470d70dd9c35a297af9df51c38a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28135c10635578d8d4ac9d2bb1fa9dca579b2b83a5564a4ffb5fd5e88421b54d', 16),
                    gmp_init('0x9ed84abe3851be1506fa9d74107f8c15ef0494cc91e310d8adccf09b8ee5d868', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb7b973aa8bf19f04a29a5793ec0794873a39f9f9b8197585f4b8c276064184e', 16),
                    gmp_init('0x349aef9136dd9245d5fa500fda87860a1599ec23c2586640a21a6aa9735bf117', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x339a057620b1077bd6c3cc5a09ffb5687996a812ace24a9a917e5591e8e4ac10', 16),
                    gmp_init('0xca985fbedd6a947f43854df78acf553e5039e788f41cc66ef76da8644d1312a0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7f9460a23d474b66c3b41d1793b353d6646bd35404739e0dd34dab1767ea1f34', 16),
                    gmp_init('0xd0d516778fb0618769f1f2bf8f076661c6ff815124e34ffc58bec2cacd9063ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2292b0887db3c979f796a57e0321efc800d59722771bc762e45a0052b8c5bdb', 16),
                    gmp_init('0x10b668847507e38270cf0501cf4185f634c8f01116662d894bcfe7b5207256f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdb43e7f84c329e022a60e3646ae0a2a2de44235b14f77aa0dc5b74c9bdfc0a9d', 16),
                    gmp_init('0xb0168da2be36b591b8a56c814cef9fa48839047356d2f054f0b1093a9e9ad713', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf6a16b6054bf7ac1e01efce48208425eeaf7deb95dae05a07bcffb0d1840a484', 16),
                    gmp_init('0x716c92116b36d29159cf3e324c399409acdc817c6fe7ae3587dc4e6e638f9111', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9af3081ee0d21aeb8515e9121fa78980f8f07ce35643a8930bcb1774283808d', 16),
                    gmp_init('0xa976c8489c47126085af26550fef4971976b925115136d19966c2f8e39b39d33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3affa9b5cb5e8730995b8a7f7abce4bba45d77fd9b76f4961495c285ffcd7198', 16),
                    gmp_init('0x2d4d554f8eac633d75c98089bf7859cd10a58f03876b2f02029f302430eb6635', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eb733632c806980703ac9383bf883590f41395a4e6f8a0a2692f42cad8426df', 16),
                    gmp_init('0x96c56ec117307a9a030e4b2cecc08e8d9252e97c83fe1b833ff759ee200b4267', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x948f395d3e8454456a3efdd5ad2652c1bc7c0ed17ff78b361617acdcdbc10ba4', 16),
                    gmp_init('0x98ba0006d11ae9b572a41300a1b5a9ef5a63d297ffd0987c1a6b40ca6da2be0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3979d5e079d5f45e1741b91f8b4d0e68b7e87be761033dbf7d16d7c1a16453d', 16),
                    gmp_init('0xc55f9335d799adb9a4d092575372456917ddf6628a6961a4f3cbb83167b6d737', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c11fba94fb7606a406d776727e416973c9b5fd6837e27b17c533b16225a4e3d', 16),
                    gmp_init('0x26a6c35de3216a9c19eb94d54cab3ccb14b271f8c9958360c52df5ef6569163d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54c3929ce5b8c2342c383b88c1aefc12f65a9b4627b5202ccea199a5ed326504', 16),
                    gmp_init('0x4696302560ea16d0c489aa284914ab4447a53d9e608a67268bf011fa7ec9e107', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb9c78a6cf98b900fdb8f62b67116cbf99b84da4ff66ebc4293be10f4bebf743', 16),
                    gmp_init('0x42e03d6cc97964a075fb6e9d80f3bbd385a7af8e430fde3bf768a159f142e6e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3744e9b28666d6c5b84e8e83c19659c87328158b0c0d21353044f576bb5ecce7', 16),
                    gmp_init('0x9546e0f8d99047aa0e0e6956eb29ec3c28e8b5f052a6f839201321416a247721', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x371da99fc11424160d29f157b4c415970ce5984677788ef9209343292da66409', 16),
                    gmp_init('0xe697cc8d4bbc143565dbb44552523bf83bf17374e766df8143fc5230d298657f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11343e17e3656d53324cd0a41ef3f2de14068f639442535150c928de45fef996', 16),
                    gmp_init('0x4a9e8480deba8eeeb04ddf9306273765d0ce4d65a086f18e40150ae75792aded', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9c39cb60a33d563d2958f49f1b6ee94582f2d7a846967f0dcec9b4d78e6d8483', 16),
                    gmp_init('0xf097bf1ee493e51003d196b7bca16546bbade52f3dbe436894b3356f6b2c50fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcbc809ae94d7802f33e8a4eb3b323ed141067a6336fe96a71363784b6c7f27bf', 16),
                    gmp_init('0xbd9cbb0e18115c85d7aaceb5dfdcdb0507ad4dd8903daa9aecc69d63caa30fa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f37acc90eadad7443768f724013083606d0429674b4df3f55c31f847a14dda', 16),
                    gmp_init('0x2f944bbaaa092c26d7bbffecee1bcd0b77d8f7c78a8536cbe22fcdc325ac8364', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bfbee24c6e5261837151ef349506cf4822c3c1cb43b223bbe5cc18760a81cad', 16),
                    gmp_init('0xd75127caa3409b590cfd289fe71be1518d9fc8ecacfd23766986b9515ff0013e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5413358c281e79da4ec5ffee4772736b98ea18588e0932fb5674e8e8cc7d59be', 16),
                    gmp_init('0x680fd4de969cb024e7c48fd20164515a53e25b15c900b3672d7ea1f6e4f80590', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1c1b0327ffec73feb5c7e72fd64cacdc769ced171b57ddc22849804f58b08e', 16),
                    gmp_init('0x6e8fb87a8d35412795a16812870a6a7c0d8beb6cf7b955aa0f1c83acf5023ab2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e2fd12691b194f05dcfc1a3c1b85280bed773963a457ea58eb80c9f876051a8', 16),
                    gmp_init('0x122abbdbf5f4fbb2371b35a1508a31bcebb8baa592c4fe2e6afec74fe9cc9005', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8181bc6badbe124c07879421041e8f176b07b2bd63afc5cc21115782fb33b93', 16),
                    gmp_init('0xbb012f5118cce7cadeef104be967dd75f9acc5b14bf627dc911a5e167a54ead6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2de758d4beff1b592004f56813c08fa0a275f0f76625f5fe367ca8fa56a80e09', 16),
                    gmp_init('0xdd9acf3177d8ee67d7c032b0265e64a07a1adc6695dad6c99d62edf5436a1cd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7838321620db08b90ed9922d448a6990ef1e169eb30aa255f24498daa2720307', 16),
                    gmp_init('0xa2821b13a3192358b51f0760f456ede9f3f68f9e7f9acdad82a85bd18db7cfd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf597a0acdc1d4a5728c5a173c6ee12a4568bba2cdf5b564ec25035b2fa3628ac', 16),
                    gmp_init('0xdb9168e332bd4557bb1bb7289622cc0772ecf91d412106e7ea0310d6cd3550f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69c0a197952bd5d941901dda1c9671cb4f1e86b7e98fac908efdb312b83b6500', 16),
                    gmp_init('0x24f0d0df9fe8c1166c43d425cc76f2fe0afea3ab84c8cc8efdfc2c9d3846b42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa222a86d6f44fb908a1071821be40f3c42a5457d53a285678d683d4ab75d6c3', 16),
                    gmp_init('0x56378793001a8e76ce448a25aee2df426071fc94b5a8c8f613265a4e644cb028', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f27aa1bfebab9675c7073426c00051a9dda5bc91ea695d5f130159794ce1a37', 16),
                    gmp_init('0x90dbb8e8337893c0ef2fafb59f0a0fc897321e5b3092268c72f75ea0d1f12afb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8568b26bcd9715b756f0c64392f35e2e9e01b91773f3c5037fa85739235790c9', 16),
                    gmp_init('0xd3f2261a584dd2ade9078e0ae4363ce80145e5f8fb85479fdd3f553826b1f5ac', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3d9285261122993897566e7430181e25e2fd65f1b1b173747dda97c55c38d4e4', 16),
                    gmp_init('0xd32ca0a5d468eab53ff057035c2869eacc0ab138197abc7f6faaef00c0ccf0d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5551c1b53b0878eae3fedcfbd314c30f0d23b7fe32845dc2d9de4a8bd4904297', 16),
                    gmp_init('0x2faaf850def03ffa2dc6f85e00e65a5cf2be7383db6967a6ddbdec1a85153809', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b180e372b902fc3f7c159a25e76dff891c81b6519be4e4ed07232580dd7718a', 16),
                    gmp_init('0xf2b6b117f36b58aafaa4bc9d2905211e58491156702d14d0726626299afd82db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a9cb41f4e7d95cd6bf7491e6ef96a09274b136a6beb56c9b1488fe58e2058c2', 16),
                    gmp_init('0xedd93d45ec97a96602b907a608a21208050886aa9aa7f367ea95ab2bc86b1495', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf352ff0391d69c9f45ef4f4098a83eb2134ec4b274e467d5fa81a51193d3653d', 16),
                    gmp_init('0x4472626ccb6c5ebd020bd73dfda6d5055c1995f972c582d079e6678c8a44f28e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe46ae49aac77cfbb8eabd472366f4340911cde8a1d8392df78d15204d94b75a2', 16),
                    gmp_init('0x9aa6ebebe5f5335e845017effe90f85b816766c987d4a6f44799fd908a81c0d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x670ee471034d8c230afb45cdbf793ca1f15cf6c2240e0154d661df1aed4478da', 16),
                    gmp_init('0x5ca0c7425ba022ca2546605b138750e81cc3b8160ff24770628ffe4ff4f563f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdab5fc7fe5706d90b6ac29ed3f203add378c76b944d45159245cdfd17a53cbf5', 16),
                    gmp_init('0x97f6cc216d0557b45039598fd8b4919787b15173c166c997bf8c1d4b3052fb1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96f2e354349d9bdbefbbfa30acec6fa93cfeb38828d6b35bac4e290443dbd581', 16),
                    gmp_init('0x9fcd80885d526cf4fe5d8e3960dbaf435a18f1d504f5d454d9a4ffee8f59952', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd981830a1604c171176180985e55afb73860883eee9cd10741275b1ac38b82c2', 16),
                    gmp_init('0x2422711875e196b11978d1d254bf33c0e0271f012581e9faaffd9ddbef8cc058', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc4946e517e8399ac8041820b14609a35e72cf0cf2fbd706a1eb34324a4e9c2fc', 16),
                    gmp_init('0x74890120b1858a4ce99a0f68f47b8237e48bf38ed14623123434763766398ce8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b1c7861cb06bb47f7cad9cbc69708a33c738b2daf49ce28cd6584ce8a0471', 16),
                    gmp_init('0xed035874ebf5b517c0e8304c4823441639be7c26e7c2a835bd2d39266390366f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1653b64da9be33dbfa48c8c578094d8fb6ac3ab0c8808e8f5cb9173e84960b03', 16),
                    gmp_init('0xa583708169e5d5609f4b2bd83e95a8948b38e0e4a1b564e7f806a54eb0f73c69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa069c9743a7cf65c90a76efd37a5d13a5d1e99d5eb79ec9ab9713128037aed26', 16),
                    gmp_init('0xbfa8bd1f061877d8d8190f9e0e972deb502ffe99db84fb9e49757a5afd297cdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51076dd7ed2f153f500c679ca685cbf4979bb7f290c72df2c5577e31bb63640e', 16),
                    gmp_init('0xb397274a2d6ddf76aebe650172e0fda6c8bea4e9e720ef021f69728782e4476c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf50b99b7468810b73a5a7dcf08bd17915c08966a2ecc1e07606304b1a44e8de3', 16),
                    gmp_init('0xe2b5061e55f18f0c8789973a2dedcebbe975f18d21721e854a3f3ba6db7f3588', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a148954227198c9b09c743020a46e97d83321fba27ad800a9103a2d60dc749c', 16),
                    gmp_init('0xaa215a188974e422ea3c2440a37608c4bef92dcdc39b6f01f2e1f28ff0fa3cf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x598d7f61a5505770645f30e25139430481d2999182816fa7dddc6b6b82accf8b', 16),
                    gmp_init('0x9f3121f74f8f2609546c5162b273ebcad2289a8f353540b91b84673c0f6cb808', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5a4878f4cc4453cc7a3ec58a642c871ebb7d208e87bdcc1e0cc372dd962abc', 16),
                    gmp_init('0xf7148b2288b0dc574d72b14df29030175832a64c8e50a9fae85daabc9e2cc3fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x715a2012f49f4c4d64fd2091541c581013c4ef1b056c9cea9fb39a5464aa7b3e', 16),
                    gmp_init('0x5922b3b1aa606c0a1f79288f8a913b62421bc588a88b47d0d9a33944bc7d081d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8093ca11ac87d03aa74356789578652cb07adef81b3e0d685c3fa7018ae2298', 16),
                    gmp_init('0x32074f216ef49c10b16129ec307e9cf3e4509a0f6db6006f06c36192d35c93b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49ec8c5e6aa9b125c409ce897fb87876c71ccb101687ace4d1bdb697620db220', 16),
                    gmp_init('0x99a97d4fe5ea629b3da9cc34865f5429842c3073e53b9cce99b8aca0677338c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf5e3efcb5a92f1b320feb9fbdd6c93fcceceaf38ed9768e793925b40128aa5cd', 16),
                    gmp_init('0x76cfa2899bf3de054e51e2dfeb07bd2b84e0a6f4b110cec9ab2799c7ceaa0fb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f8fb70d4850b4483e6f190e05e07b7a2f4f14a7d90a656851ebca315e771268', 16),
                    gmp_init('0xf53e7adb461ba2bf12c2ed74726192a14e1d3c311c92b3ab1afd3010c909c8dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf8b2be9c62045acb1c320078c03d084800f385ade168ff2a2c15b625a3ba4ee', 16),
                    gmp_init('0xd8835d9003cfd523d1955020049f17ebd0a8a06c08d307e740ead285431a9955', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8d5c71a6497f61fdd5d142ba678732cd606792f742dab1a55ec0f2b28d9819e', 16),
                    gmp_init('0x1cd14ef132137f823b6ee4359b63dc79e2f49f1361d45c3cdc78be8ea9138ac4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30128814f6ac04876595ffc144469d8253b60aa6bd66c3e91ae9a5558c3b3d61', 16),
                    gmp_init('0x5d57c66104d3c4ec12c4c890b81f7e14ac30f673875adc53772b5e6c8f2dbb38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2265b5ac65baae3ddd63eb61c880d8c4ecb34351456004906a93dbe660bca3f3', 16),
                    gmp_init('0x97a198bf5cacfe0f61a313a3b10964983c80a612d2393d5a25829c6c517409ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64d0c4f5a46437fa24af7e03f4371ba5fc7af0c38c1cb896e79c12b6916e8a30', 16),
                    gmp_init('0x86654d5973b6abe36d03198de496a8c57cfcf2050f1fdce5d81d912650bfeb69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaf381cd10358492521fd8a9f5fc9abcb599899459975dcd0372d23ff45bac36e', 16),
                    gmp_init('0x681a087fb7df0fbdc9457f22951a2648589b82f1ef4d4a90ff3d887ab1b119a9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x42531823ff5ed0b0d77f4880da0b0e07400f246c3cdaa859e1994056037cfb4', 16),
                    gmp_init('0xc90e8bccfae00f7e628ca4d0c8661faceea3e4f534ec5dd400b7325ed8775d23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb0d7a6dbed426d40dbaa6c128d47df6637385a1378241662fd6e1483e66b5a8b', 16),
                    gmp_init('0xf652634815abf316fd1c0d687ef4a316239b77371572068bf6c4fb12cc550ae3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27557aa0e30bca48b1f5e308e8c0e4bde6409ec8e6a52af7784f673546c34577', 16),
                    gmp_init('0x8399c75846105b3b77c8d75a49fd34f318a2ca7374c4380badfeb9b80416193c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40bf36bdea2de0a4542cb5c539a534c68723275964aa5eb9c1a74b282375988', 16),
                    gmp_init('0xe8b5b2b681dad75337d16867767ee3c5977abe33ae04f7f080d2a3d4793301cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e687817d25873648e50783bf561d7decf6c2e50ea95b301ee58fdb6a401f4d3', 16),
                    gmp_init('0x989cab886e2c9bfa62f809a0506d3cae900b96f12ea1912890281e944294d86b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xae3648928593bc5da2f5127ccee442f3496df469a485672bed413aa6d4d4ee9c', 16),
                    gmp_init('0xba85f10c8713f5adb736b39d4b8d57b7ed5bcc4a2d7f35e7cd0acccef9a54fff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98a41746253e5cf6d1036803ca67dbee205359fc40effe2dc5963de26d2aa8e6', 16),
                    gmp_init('0x579ac6947e3463d6b11542f5a2f5cec9e30217faab7ed21969740bed606cf75b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3754e99f0786e2e13d70139bfcd5ce698be44e3392eb68e10e789e3ff0cdb59d', 16),
                    gmp_init('0x24c2f87496addcbe012f3c27206480db61019b6f632734f04239c0ffeb6a8499', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1685442230540fd92216e443e21a9461800abb08c61eecd7ca2cc8f752c2d31', 16),
                    gmp_init('0x700855c928e72142fb2e642d02bc9343e76192bf89983941cb8836824a50fec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x675b60bcb5e1e7c43e6f9f583214cef0672e0841205789fb49e9c05cf9e01d27', 16),
                    gmp_init('0x77108626b5227b4de011b62a9cb6c72cb563ddde73f08822a02ed91c5c80bca3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbfa6314b09d513ea1ca2a2e5338951a53cad83d2e50bcfaf4a33bae373a7cdad', 16),
                    gmp_init('0xb452e8194c802c782a5f85bbb1eed1a7261190f8c84047a1c5f88930295cb953', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc93c33ccf68ce434314124ebc2bc75e2cc82e7626d76ad40c1d5c120b853417b', 16),
                    gmp_init('0x6f042c8b50622bd720f2c2e2f575ddf3cfe2f63a9d1e1c7d29e94d9b0f7f0362', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe687082d0a961cd3ecf0975e6dd98e200c6dc74dea6518d8edbcc8500ade0fb7', 16),
                    gmp_init('0x2135a448684c95555e5f0e5321d1a72117c1e85ef88c22599179e0f31d4d6ece', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13025fad6c16b0bb04261e46af00a271f7bdf0d378b5c67495526ee5adeb22dc', 16),
                    gmp_init('0x6eeb1b119c216b635ca9df2d3ec4a2bea60aa874a2ae76d2b54046ce8388aa81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ab16ef862a9a9e94bfc28d795074975f3beda08aa827ac9c83cb5f0ce432daf', 16),
                    gmp_init('0x584e0e0a97c328b1a359183e28dba7c5c7e9ce3ae74fdb013117588aa71bdc48', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9bbf06dad9ab5905e05471ce16d5222c89c2caa39f26267ac0747129885fbd44', 16),
                    gmp_init('0x1bcc7fa84de120a36755daf30a6f47e8c0d4bddc15036ed2a3447dfa7a1d3e88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf8ef49b4bbedf4164adaab192fbfb78c90599d29a4c5181f3ce59840d8490005', 16),
                    gmp_init('0x979e67a7ee97216402bbd77665a4b73a58f2128837deee671a462e83bd62afde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x646ff7f65b3b5bd3429cfb2ae7500ee922758bbae7860be08b7ae792b4a7b506', 16),
                    gmp_init('0xbc112a9d064a18a55a61e331804a8fe8492dfc4fc08e6995c979c1252b36f946', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe63ab41d2c743f01b3a9b22d66d9101fe44d4fc2e04eba7eddeea19f87b338b', 16),
                    gmp_init('0x1f125f145e22f4758d3021bbb90b353b7053cb7e45930daf9d212f2591b00a85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cc0547aa617d39a9d0c1000b27e507ebe60ea2783385a80154b71c9c103b553', 16),
                    gmp_init('0x7b329ebd2328045abdd728cb39fc94c400185a0aac228b7d5799cba3cd45a526', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1516534b9efe26dee62280c7ebc5fd4a6beb2ffe723b53109890459558583600', 16),
                    gmp_init('0x60e343b6a7ce88eab0e74299ecaa5c592bab43c9e74e0c0908428e0cc3a0131b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x946851990bc1db4e0563ed536daee15468da2bdaacf01b81ac2ef45419e717a4', 16),
                    gmp_init('0xca5c78420dc591a8b3b8d0e6b2667dc057999590f70acd9ca75f0fd1b526dea3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc1d6f42b05d00e6aeda82df286eb6e2578042f6caebe72144342466113bd81e', 16),
                    gmp_init('0x6d2cdf43ac02382a93d74bd97fd76ce63976b531546dc8dc41e3d4415d7ee1ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1b98f1be7e0e8fab1258f8ea452d1f5dff8b37ef12b327bdf82c36f08362735', 16),
                    gmp_init('0xca83e9ad9a976a0b7e05b49a83bb2ba27e19ee33df74090af96138c9cecb11b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc65b97ea03f9316becab66324c6e71cb711c812896e4022d620a694fd0c3b70', 16),
                    gmp_init('0x10d89e893681fc2753842a68d37b860c78b02d429450be089c1245dde69e081', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3536f25c8fd607ef6d08a06bd967962d56a58de7301440083b40bbd839046346', 16),
                    gmp_init('0x1e271fe17de3509e73ba16a1a529e1c39e6c3d1ea2d9b3e29401062bcc14fea6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd518f0c66805279e27388b02d1ed1a41b200bdfe2961065343779a00efea3f0', 16),
                    gmp_init('0x764705d02013d1e4d1103e38c05df536c63a31962831ebcd1f27741670e9cc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf50246be23d4de690151f34b7f8c3c1029b51fbd40ef530fff83ed6847f6f8', 16),
                    gmp_init('0x2107047f29daf1ca2b232c4fbc2174ab4c6e166689df3449b4cca8a6bb1633a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x609907f31ab90dbacdc6e0c09f4fbd126d45b8604229f9efe4c445c10d3be344', 16),
                    gmp_init('0x273a561a693cdf6b3c3ce2c80a98a2dcd8f618e7c36cc0e5f28b06ac098459f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca9dd5d44cf53398f69de3b336529330ad69a7a48cf4bb15185ceaedfd4f1b81', 16),
                    gmp_init('0x6e4b988651be2c56402471fb44467b3e66c9760bfaada10f8cc62cae42b7c8bd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb12fadf52943dfa54943fccb3b7893e796357686c10319e31ead3233444c0448', 16),
                    gmp_init('0x2e2459599b0f4ace96f8f6677b2a6a71d05e70332fc4df296575e76b369de57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6054b2225e75b6a4be2df29f6cea3b793bf2d82d8d98b36858627e5e8b47e27b', 16),
                    gmp_init('0x6e7106f3b190d8edb0760cd1f574e0f81d789cf5afad1987001829e764ae4b62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48388e34f1c5056843255dda91d8fb3e67ea3399c80d8418f536c45464e9151f', 16),
                    gmp_init('0xb0ec63abf4e44e9e6a25339315482bcc99b1411153de83101bee49edcd7a9434', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee7fc202708cfeb0c2bf930bf33a68ad086d4ce99a11e38d93ca698eb99805', 16),
                    gmp_init('0x9655cef01b024882124be02ef3455711811836ea35be799b09fd5f4e10eeccaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde8e6447ae1453da5e65df81050109c9593a0073ca0b2419d7dfb4a58e5b833d', 16),
                    gmp_init('0x5e1463c150913d8e332288cbd6de265987e03132901c6c9f0fcc19aa14c5cc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16cf2eee40a0ee4ced279a2fdd4b0e94a403a59c9330e24754205712bf6f44e', 16),
                    gmp_init('0xb8e9cf624ea7d5a8b52e38390dce53bdafcf53e490868b9b53225c3f611603a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb18b12d0a4ec7e9e8e555b4e4e58f385b267473eb871317b3e2593eac1f7df48', 16),
                    gmp_init('0xff531922a359fb445cec426bc5acc33b3c83f7e483d1e55991b3d590e846b546', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77b20a912e6b23135066e911891524bc4efe3560e3e92350b52dec8f375f2b54', 16),
                    gmp_init('0xa3dc291825cea3f7f7b10bfcdd038a72df623da1e850e0f1caa801fcd6cc67ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f51ad71c8dc9433c7c1caa4c728694402cdd89845211e0df253adc699c9fd24', 16),
                    gmp_init('0x2bbbef11df7e714a0cd305fbcc2e4d038721f6244624a9969c3bae886d2ffd3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc1e164748d9c4ecb9f79cfa01eb3a0f69f02f864cb7c7cd3ea6a3d9c467b9766', 16),
                    gmp_init('0x104e006a2e19ba8b46a9a2e228ca25c46254dcb278d2fb650ffd437efd6e8f30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfdf340d937301ebbfa5822ee4346d8556f3dc933eee3bdb7e3c4063fd7cec42e', 16),
                    gmp_init('0xa3e59a63968cc6e1d70c1fe738cad2c4456e6abf50de30c838f634b7cdb6908b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x510869f66298a7cf0cd84489c68f7b4bd1d983ea87c3ea8fe51cdf4fed6741cb', 16),
                    gmp_init('0xcee1ab93a5b40cc2ba412433bba63ce930380a05e0a5c27857252b046fc4ac9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe3caebc8b9ea5d79ec6452917b7dc983f9e8a13a96072415fc189454e1dc4fe8', 16),
                    gmp_init('0x97f093d27bf05928d22035cb8b01f97651300365a14f86a116b60b721307b403', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e83c3a6b43fdcd300e419e6f78dcae11455ea638f8ff5da5c0c0e3df00d264c', 16),
                    gmp_init('0xcd3da4cf0228e56cb257110a49af64125bc0dbf6915fe8498e70f5a400603714', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3312db942a865b89af41a5ce58fa00339902e0c0a9f9b846414d65d3c119eff', 16),
                    gmp_init('0x6e3eda646b3724df104eea317809e86f0aec59db5f515585fe95a3a9f8b1b950', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
