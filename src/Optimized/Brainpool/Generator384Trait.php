<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Brainpool;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait Generator384Trait
{
    /**
     * @return JacobiPoint[][]
     */
    public function generatorTable(): array
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0x1d1c64f068cf45ffa2a63a81b7c13f6b8847a3e77ef14fe3db7fcafe0cbd10e8e826e03436d646aaef87b2e247d4af1e', 16),
                    gmp_init('0x8abe1d7520f9c2a45cb1eb8e95cfd55262b70b29feec5864e19c054ff99129280e4646217791811142820341263c5315', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2282bc382a2f4dfcb95c3495d7b4fd590ad520b3eb6be4d6ec2f80c4e0f70df87c4ba74a09b553ebb427b58df9d59fca', 16),
                    gmp_init('0xedda83773ac68735768d14a24f37a57ce9bedbc170921ce4d89dd051728fc3eb4b4ea69ab64fc288f1b29502b6e1d30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b63205bf00ddae73b17452b6a27ebf53df581348c6949f83ee1b6fcc7463bbe3c11ef6596a3b8897d7cc85b3035f11f', 16),
                    gmp_init('0x761d3a4a5f8093775521a326bc02baaf7b2eb481ead16a5c7b2bd39462363e0373c0edaea3b8f59381d7129d48772eb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd5393f5c8859560675d5abc72ebc2ae45a6dca90945dba8d4462d702c844e11a345294d5446828e48921ec979f4a32', 16),
                    gmp_init('0x80ffdfa1ea4fdf56ad184f44d3ab5005832cf70a0254f70f071ec79036c5f4676fce80c25f70c7af103b90824e878ba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3ec4dfce2647725100dabea7b5f59f465848a4b4fbb6080ac96ddf237f84f4fbc1247651c2770d2cebab9fd2412dfb', 16),
                    gmp_init('0x20168ac65e9bb101ebaa167fa90635f939f00d1d90ed0c6d97495c4579bb950ce059c219dfbbc32b3f9b162e47634690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6773700fe1c84330e5214b93138eb6621125a14b24fe40a6b98fbb28ac04a042063b62eaf733f77ca86d0f16dd326e03', 16),
                    gmp_init('0x73755839d7c082f5b3bec74afe05d085b3162b55dec72a6d6bbff45272c0a46f8abdf80b78b73e55108feb8752fdde12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6460f955efdcbf3bf7393081ddf04a64747781bc8956c1e5ff47be522f7f758244ae054e91e8aa160c76dc7302bcf181', 16),
                    gmp_init('0x7a30d2af9219e43d33be0b515a36f3c95c17b17dcad568ef85f51eae54657c72ed3ca9972dd90da5fc54207824db4187', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7a9ed77824bee6132a486d2dbe66b165110ccbf8f7868e72f75efd9f27fd557aa6e9c7a3265b3b4e0be9618d8a3829', 16),
                    gmp_init('0x24e1272a69c1339d1ea0720192f61aa079f38f5f0960c8faedab59eb73b45839efc350f023876d6e4bde607f6492b17c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x318ccbf708397f07aba57e45a1b99b3da92b638fab9b5123cb8050cb12ff55d02ca04884153f3ca5be9a6fa4d102fdcc', 16),
                    gmp_init('0x6c64153906e5540a6f5562626e4cf07a0a7709206e67fcd6519b9cb144a5af68a892df80129727a5f0c4d7c799bdd7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52a858b07ec4ea734d382f06b4a3132078c3c59bd5487fed24282a927cbba20549bf62999a511ccd5d8fdc43ecb0206b', 16),
                    gmp_init('0x6c182d0955164f22c52783ebf4a5b7ad50577172434adcdc377d71165aa33be8e14ba26c4a4cdde5f93a4db5a9a62924', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29d17c36e8fac6be8222a33a24cfcc959504ee698d6ce046f650cdce31a1f42a019ed5e75838a2e1e1ebfa3ebd501097', 16),
                    gmp_init('0x6aaeed397a139d1e8c059e4d23214fb28687d57dfb2b569c3f35b03f2ad19d6768d387929464d8cea82289c636e2ab45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10702e8bd01f829f02bc50cfb04c5abe516201ff9ac16d5eed84795d52bf27a1ab423724c8d097d72bc65dc9e675ab9e', 16),
                    gmp_init('0x6a32e9327607a977498ebb410be50a94581f10c618abbb3273ec71d6b0b59aad9cfe5bb03811c3e8ef94449ec590bdeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x746f20945a91d52ba4ac0d1499008c7b4f4fe2951e9b2fc9ee6435aabfce8519e866314f4cfcdecc68724ba7654b8a97', 16),
                    gmp_init('0x199ed4b68437e1afb613ef8f694bfb3b818a8375ea30532dd7f5363e477661d17fe3e4fd4ed3b16d83e0a265dfb80ec6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x324a464b6792011a7d85e4c8a4215907025728624313282dedac2232abdb92c1b6219a0f6a5d791066cab026e301f540', 16),
                    gmp_init('0x344c3e35692264867a27dd28971ae9bd84f65526d94f2f7df49342f78c7cd8eff3ba957369d839e1629dc4db06a7a85a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d2819ad4b10108992302c3873505a1de83d467f4a6e8e0ee00e1e96d82bb00313c2f19665476b17ecd1fd73d60e639', 16),
                    gmp_init('0x802e50b2b2cb80013c5833c41c2b396ea9f3130ea86756e9319433829876bbfdb288a5f22a0f4bb436e616af3f89ae04', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x435074af679b87539fec09a171f98689b5ac70bdafe69a75698397d77b8c260aa6c89fd31957528c1e91569c78b3edb4', 16),
                    gmp_init('0x4d1927e308e7e216f62c4126902d7fee91b783ce4e140b088500e44429ba2b07da27401279533f2cf177d8726bc4dc34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x771345e15f65956ca18c2e66102d8b315dcb4452fe7d6152ed6792178474d6d95de1c41a6cc4abe7f99f66e1d94a5366', 16),
                    gmp_init('0xb0ec34ea19762e2b853ecf6445044c4cd0d1d86c135ec01d66252f4290fc96a80ee900f1a9daf740c4e909a85a840c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bb7b6f36853ba913c7a436a714e9f4155373d7ae27f5860275261da67735a6d41ecacf0a42c3f84b7c7ed29e1123e8f', 16),
                    gmp_init('0x538128a675a27635015cae01b1dd3d3e9b194156ce8b3d79886894f4024b357a30f5a382e3fefe7c55cbd1bb92175621', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196ebe8392d081cbabdc263b10456184f3a9298b6efad6ba02516984e11b7c1eb7f21f22dbe450c341b8325fbe6e0d36', 16),
                    gmp_init('0x1b5719cb3bc8c449a379a780ef791cc7d1341abb0031fe4a5f8ed239ac298f2d8602a198d0edcf0e7b6c89b98d6d6e74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38a27891db57d152ea4dd97be670f62d383c68977be0e0cc141e0a47aa98aa4f2f847953a2b08d653257424158f07d1e', 16),
                    gmp_init('0x1d0278b1032fec0947ce7228118459762d28d36c25a56813f21c10854329add4e00c8f72f4d6db87c5748bd7e85e148c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d849205c01aed5616e2ca7cd1f18c8323b34bad23fb530e2b5be08897af3276b98ed6fcd80d4111d41ac21ae44ee431', 16),
                    gmp_init('0x2aad175be789ef9f76f2f30cf55cd97adb2c0ad36e61117e6ea1abbc820b25d23fc208dca380a23077eaca3a37eb4ca6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12ef8256d4da33e9ec991b5c992c0a908cc6aa9a06763e0a76a2c6920c217055f3ef74e804305972aa73002a52fbab05', 16),
                    gmp_init('0x66815497c55a39cec4d43ee6502101a63a4ae8dc932d268b8fbd9fb454914861d157310b29c200752d45741a7b5b4f93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5375d6dc4ffe52e8bda87f67dbce30026c515b909e72db81bbcb070bd8a83eb3bc76db66a3ab12963bb0c479b94c4389', 16),
                    gmp_init('0x79481dc01ac940b36c5ab226df9ffa5b8000656eb69a8335e02d29c8d06ac72472b6c0c5acb55ef30e7acebc288ecff5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86989641b669fbec33f547d67ccbdbe747472eaacec4c19aa63e6ad382f8f918dd2d9bec3ad83c29b768386366a2c6c0', 16),
                    gmp_init('0x4307d00dce768b277d142ee68e506c0c6e30d02fcd3d4e673bcc11055844ddc3d2bb3c6890165f4a73ffb3ae44bf4372', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4769077e311f54845835a260ca6f81f1929edb7be0a2657a5e4d1709c3fcdc90cfdc722fc58c308f2d26bd6f896d5ea4', 16),
                    gmp_init('0x857d879666d650ec3cf5a004f2bfdb5367d0a088858a41f946aa9d86821bf9e1ffded59f8bfeaced2dbaf5c16a06c477', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48ded1b69c68cf4928ca0865eccfb44f5f5f43748147c56c8570f87f3762d22742b2d530df1ad03d1c4e7acd4d30a751', 16),
                    gmp_init('0x59c2d075248553b57ccb976a564b227d974ed958fca5bc7d081fc7c0bc7a4f27d364fb0a1f06393325e0373f94bc8bdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3255c91e5faa4b7e54df06c6ab90f8c623a1f6b65cd41392aede9f0252141d36d02dfec8356343f1460709cc51af0e0b', 16),
                    gmp_init('0x6f4e493113e3212ac1c4ca27e389a3242b47a73f525f1b12a21b23adf982c7e3562272600b354007337887ef343f88a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x204eb9f95d078e50f3825b7dfac3c48879111e99561643a26d8f09c61c2343640009a3d8bf48d3465bcb38d91e53199f', 16),
                    gmp_init('0x104d1dfcadea944de980c6eeac1a2f77d9f67fce3d84760b3b8027748345386b12edfa6a8e1e54f1bda92c422fe7c652', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49fe4b8bf0b80172fa367e533acbbcb7f5673a8eb30386bb16cd2d9f0f2efbd297aa9146f72e8379c594ffa22f811725', 16),
                    gmp_init('0x75c68d03ba04f2d3062cf0f36f7948c93e0472233c18316d2fd9dd524798e3c43823edfe980ad32e9050bb37d08d8307', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e5d15f8f1e760759cee62cf33b4bed79e73e1ea9daf55e511d33d48d6b26f02c7f83d2ab4b3c102f7e1b4b4b806b6b3', 16),
                    gmp_init('0x4345cbe637383a24df691d440a2de8777c43d9c2a23a0b3ab7d9d314e8d42f736075f4b4c0148768c218ed2bdca1ce5a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5766b26034cd8c47efa3a4d002fab9eca8707ff56483f7764fd2bbe608c287195048d7e74b57774c25ef0d9f6759b643', 16),
                    gmp_init('0x80d6de220353250efcadc4b42c4ad5dc6e5655ad60afb8696395444f6c275b57a206d951d9b2aae9790e4c0d957aea2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31cb81eb8713361d32ea30b3a726a597f9d6867cc52d37ea61cb39baab0e30a17231041afeb88fdf60a68adca89b4d8', 16),
                    gmp_init('0x4990276f15f247886d9a73eb9e6ffd36dc1139c1b4f9418c5f82721ff788f1dd009b5d6f228aa6a8f5aa2d3f7d739293', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7842583366a313de430c0222e2f540546243c69e68ac3395b613f67f8573b04527f5fffa9104d49144b26b94bb041a2e', 16),
                    gmp_init('0x420712141498bfdcc9b1b84643ca94bbb03370111b0a5ae6b6faf14096e0e0d7bb7693940934e8747883f021a6526f4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a5d2b11abc5f09236381c03b5fb663b226da7dcdb2747c629101838cf78020e1ac5bac4369b668884e979ce669296a8', 16),
                    gmp_init('0x347a354305f78902e50b259ef928ade480912d5a008c0a119a39895c975fc88a58b99875c99930acb4ff6ab6f481fa84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f6795aa9256e587083c48656f97e20d1d17d32e952685fa213e5c2faedd9bd4c3bf874f27f266415363cc978413b9f0', 16),
                    gmp_init('0x8055398d421d76ea15063a4b8cdfeaee6b41d8db6186701426fc6edaf8d0eff21d8cbf099ddbeea780302a0a6d107428', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cbaeb6cd0f3e10469b8463b6e9f81a56a3eea05b57d8d275a54d2087dde6b0d75ee43334a6f97fefdd44382937ae7e2', 16),
                    gmp_init('0x6d5570fe87c65114aacc1eea13de06ac82fdeac1ecce924f678bd11d39305b3194957ed16b59e5ce27fc233d66260368', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4624658f59ffd22e41fdc25dd467ac49be762b594b862894d6b3ef7d220e90685c0358cae8875f468fd9d4275baf5206', 16),
                    gmp_init('0x74c8a8553dd2e5849b5639e8885b9b985e3403aa93b3725138c0c27c06deb21ad44acb58364223feaf6fde7f1a3dcf47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b41316855d0bb50acae4ece5b8ebf0c69358836221a8034b26473ab7df18d56d2859cc525fa3c1a2fc9fb3f327074f5', 16),
                    gmp_init('0x645265ae0dc1252418e5676a21a12eff9a81c5385be56416aa4864eb4207cd93695a39959450921d3f411a3acea2560a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f5f68e91b5fd15f9a9f20475e264b7bbeee00c2d4a2c3db5ee5dd1fbf4c8af9e2276dec916446ee5ddd6364ecb7ae84', 16),
                    gmp_init('0x78fa1415595edc8b1cac95a8a4ded77763bcd7f23dc20ddc6d075c8fdfd740a5016155ee3b29ba3eb3648258d8d4af61', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68d7d06a348b85c52f98562e951954a6694fbd31a6373571d85a2acc0297739a5257c34dac5410f5b57f7cbf2e5c5441', 16),
                    gmp_init('0x59c3e47cbffc17c9bb607a0c8646cc7cba2bc0178bda38bd0f5d359490aa2fe6a8d979e578253bc99edd7aaf6e58d88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f76471d83660c112c671544bf1bd67e2d5863e27345e30cad59cd13ae0c5e9024f1ff9d8bab99b8bd15971703a01de', 16),
                    gmp_init('0x375e926fa3a29e26144e78535ca6debe8089f3f952a4a0b6d85848091f61dd8c080a3bddf8ebaeca14d41432e924d54e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d10623a2d899f8561b2d3ba204e0b9e57e38403e62dc8ac5742498805ceaafd8b38c9b07f55a953c20684aae4b47fc1', 16),
                    gmp_init('0x4dbf3d6732f15d88a87887491d7c6a9983697681a8c95c8ca04f015f9e71ab4833aeae07f87a330923fb1ce2a7aef0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x668e12b1de78cbb0d29c567d1d8aae882a6734885fdf10b23394adb95796e9cab6305feb47dd8ce494ea706f8dbff3b4', 16),
                    gmp_init('0x72d6fbb4f61257051ed7f5b19dc35696409f45965f5d12712607acb71956cc120bde6de1ba6d3cd17c6f20b88183199d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x290e40c6b60cf9fdbde056af804df3cf1c90d03b97024b614aaa529b236645d9e8407620190ea6c4b84fd3bc9e0d7807', 16),
                    gmp_init('0x359b3b3541ca0a477cdcc185b4c923815effc0b72ad185c8985f84c650a17e62eff7339d4df54369fb27e7cd7dc1401a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68e71a9f6c078cdb957b50045d1e226d692c5e0b8647e2c17e0a00442a79096ce339a00c219092a8e48dc69600441e20', 16),
                    gmp_init('0x6d469ad9e0e5f882f689db593c821145cbff9e21f130c95ca2426d7cd1e260aef22477b356811bfeb7e9e5d3bbfc1432', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x33ef43ed4e12c3ac3f44d4179d1993beebc20231a88ba816e669a587da417e879e52dbcde89722af40c333508beba02b', 16),
                    gmp_init('0x17cea0a56553e92d4fd7a9bf7d4df8c2dcb9b2a2ab4f616e597b7889f9d4eb97e4ade9b1106ae2f3afbd1bfdd7948fb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62fb6196e0222eb9a7d709f05d4bd44897d4e87d6c5174ad684f25b1dd50a7efd0439f608ff2e54d3d9ebf5498a23801', 16),
                    gmp_init('0x3f76ae936c6f309425d1cbd0f17cea53e877091925e043ad991ed2089cce3dcbfafe30a4b5e5c0e1cecb868c2d155a31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b1ea51a5e1f0d550b692792e35d07e10432362a9254d56557a432aeae71c8061e6311d8ca0d638c4c3d1ec541e07356', 16),
                    gmp_init('0x5f33cac7a9275f3b8051854a09c5af671e0675fcbabd8a32a42ea35d7b4c0f1f3f32d4737e182c621f3f5602bd917d1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6475cf7602607e81b67fda435b36966e7feb20f9c3fd28de1e3cefa87380944aa0a3ddc8d08a419cc4942044e42a355e', 16),
                    gmp_init('0x11cb60fd4eec75e1af02260297a6952ff4783c6e41d44bae354f98b998d7df58628941e30a52b94f7b81c1523fbad6f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191b61fb670ccba334b7a4dae1578ce17887d5aeb1033ef6358fe8bdbaba32edf1bdc518514e9e86ffb06c5852bb04ba', 16),
                    gmp_init('0x15adc0c3d5e4bf4a6596a4bac9186e202f2e4b0a2b5bc294c0fba997b6b8f6d5e76d46ebab07ba091f245afacf03e0ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60984c720493b3078c1d4a7eda5414a249ab35b98156755c312176109dd294c8d13cd033137579a746182c11b8d5009', 16),
                    gmp_init('0x5cee60bdb763987bc7802930cdfce866f88b3091d0be2c64ca5a54f5536a9cd7486f6fdce3d0d44ee2ecfb1869a0929f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x458aab702d35b9b94321b10394f814316723db44b4663da49cf7d4e9360359761145ab33ac7c262961be1cbd39bac172', 16),
                    gmp_init('0xcaf5e5f0299eae8857ac5cb85b03f695ec53c7b6201b229fbc682aaf547b506ac443b4a453f2874df50670e8eb349fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c3f8720bd680327eac66a3cadbfd0b577f2bdede0a27b279aa00b111a12e5f238f26f87589f193a25c488c098c1f9e2', 16),
                    gmp_init('0x3c47f4c00cb7761411cfb858019eafce3ff43a68a2fea674e331fd12461853ac7b6877ecfa020f5b2e929738bdff2418', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4321091602ee6b2c40d15f4934b6e8ee9a9810389ce474710d18b6778efbd816eaf8716faf7bd048dce43384bf6acfa6', 16),
                    gmp_init('0x7f2dd85ca569b526da7a6345b4414e55d84930b0fd6cc9130d882ac02633206b646ec934c6a4b2c0ef6d408d282ecd72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x516cf83ccad6d8ac6d88aaa76793b9f8182447bdf6e449bc38a7b4748eb535e19a98dcff01062f7311541ee764288fd5', 16),
                    gmp_init('0x7feb5c92d4b39c5da4df25975dd23442d8a2f0339b8a0c325d95d60f94a002231f039c6e4d347fd1747795e98a88bcff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a0e69d0e23fc1aedd170da09d985e77eba93061812ca09cb6c19a6c7f2d66c776d4276c657fbbf49d48af76cda7996c', 16),
                    gmp_init('0x5a2bec3e3e9f8492b8571825f3e34930040965fcec8885eac6c4ecddabe9b98c1a62a9d6dfa9f3da7fbb06efbad99acf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x877f79d19048b64589decb22a305d526d6e46b935f87abfba5c823adbbd8fbdb4b6d03ca4a3daf4bc2c42f4b8079c0b7', 16),
                    gmp_init('0x6ae9dd3f4a5f74a996089c78df73bb9b1c228f41ecd34961245fba4cef8b6c81cbefa928b8f8029f4ed9ab780123dd60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c059257f609c11df5dd7f6310a22771e4e32d848d3a71cf46fb08b3fd3ef2cea64eb4c8de813271f11aac6684f98533', 16),
                    gmp_init('0x5e214c5877c6ecaa498f550c60f38c990d183a7ca68bf944af85b29f9e871b81248194ae5799e5ee6fbcd9a435c2d725', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x668f81caa5e498f71a73f36a05a9da68aaefd68b77d9ea5b0452dd0731289f15b9efb69240e5c605bd39edfa1f3cfd60', 16),
                    gmp_init('0x553440ea1ac01eba1b37256cb5515f64041e921451927ac6e2585c6b511ec5594f9cf96f1615a278913c5e389ad015e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3df42b5bceee6250baf20e6a058c9a8da9a2bcd710987d7a0dd3ed8d4e2f2870e23878900557e2783a2447d9cf389470', 16),
                    gmp_init('0x5a953605241179f2752156d934f6f9ad5dda9b468315f97b9f2fcc656bb404b9cf1f23aef860dcf25f677a80def9cfa8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6a780bb43528c6d0600c561f604e1687ba483153419de9a7630724a7583cae92098623e32e1c296cb8769fe801a88132', 16),
                    gmp_init('0x330f87d3340fc82e9be9db79927d0a18187221af0a0c16da2b750157a9e752dcefdd772617a5009405b3b298c8652f1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3801c1e315fefa24c9378fbaa589781cce2b53daa345484188fc3bece1b56da08757dcd87101066a46bfc16251797913', 16),
                    gmp_init('0xd05b0c8744fcc6905f547bb304e4509f44209f66655195d72fa5b25d6fc7b3e40f98347dd3f1918b8563776d9112652', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x275d91d6a39941353dd60e7aed98fc4d42dac72534e164f02deff0a5a1863dce579f329f400eebc03bffc10b9abf886b', 16),
                    gmp_init('0x8f598eb9fb98ae16e0e4242fc0da252b201073e922d445c0fa3b7c6bd9edf61ef3707f74c93f7dd7b4e77bb4bbfc6f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e533e216937310fe5c0c928ec366b54a4fc8bcc78444863bbbf814aa2dc52b00d091dc2e68e60b0f62d6111ded86551', 16),
                    gmp_init('0x207f783881926205a0e9c42a548d6a1a829db50c2a82478a565d467435620c1ea88c583cac39dbfc864394e0b3a6fa8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe1fef0b65f7c947d9d7f73e3d3289eff3a5b754fa1c18f9fc3063696f0ff268273ecafe780861882f2e7e3616cb89b6', 16),
                    gmp_init('0x745c877fc226cb8bd3e3439fe94174dc62b2ef930ef39ec2d33d56abdf588607fbc83726e753c72103ac99471070b7cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d30569c064ab51fbb1a102637e3a58aa7181b7094b04b5972b138379ef621e7b4aa2af057da15fc4f3267c979ded676', 16),
                    gmp_init('0x2b11293be259cdea4c89be17809c4f0465c2ffbd381789f80836fd72585512efad98f452e168c071c39dfba8eec9d3b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ff8c1a505bb84691ada5f8d5dab1668b89e6d59989b2a9a0659058577e4160300cc742ed78650c737f1d26ba305c6', 16),
                    gmp_init('0x2e3a769293b5e01cd0d18d970a93f1369ad40f98a53d69893c84f0abaf8958f29e334d7fbce727d1b12be1034bc7e3d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67b2781e046e8b5a1f732b4fc162c00faded93eb82dd9e55db5520fad17cfd14c8287d3b1c9e058273e7dd891361e59b', 16),
                    gmp_init('0x2bd38f46cb7ecef722fc65e7c21f9c6d84adf0be77cd95f4b139a11837cba498ec5bf798de5fef32fab54add5ab1ba4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a50ec6a90fa52946e2c90d6cc85fc180403d0f4461f71b35d34eda02ec3b45950d96b523c85abfec364b8c1df6496ac', 16),
                    gmp_init('0x5d53d76f8cc0225ffc98248e6eacbb44a752843efee98bf51ffa03bf4699097c94ceba66e067e65c65fbd4da61b73acd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77a2b3cb39f500547390f07b8a399fc9402418268f6dec73574eb5a0b3e6cc3c7c1acc5cdef0503e42fee71ffedc5a7c', 16),
                    gmp_init('0x83f1ba7ef8c5d6ef9b8f16fb27f6653f8d06adb0996529dc314772e761cb7aee61b1bfdd344013b6e555aeee754a5c2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34b36cc11da6e75dfa90f1c82832ae011c3a7f763dfe9653b15e3fee0c03078f6c95234327e11ff514966c9d3a65ed71', 16),
                    gmp_init('0x7b86f85ece526e70a8c7e8f860630fd1beefd783420ab2cb7034d0ff175653cbac781f0f78aebf8ce8f447fd745dd541', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x285a5857e89b55abf266d976b54c4fe0546f740f9a116bbb2f68c1d4b34d470930429222252515b4c46e362ad4460164', 16),
                    gmp_init('0x80120534c6094f967939490f41846379e3b2d080db593ae1c1b4704723e4b21760aff9a04796b6b8a2bab559c8b038c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x657e8211b2ba9155a11026ce0ce02b4863208676336be772aea0b9bcebc2f32e122cd1ac358f884f9b53365eb9ceb1d2', 16),
                    gmp_init('0x4cd58753115ba8fc903893a7bfc7555583e80d199b9d54c099e95454af041130bc5a40f9e4ae8e204500699b7b6d38fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x566d058d8f5f469a84b9c20ed936c6ee394ddf3bda0d34e53d14195876ac59ebe79523ae5fe40a96b8ba2a2997584f34', 16),
                    gmp_init('0x68b08c36234d8f922dc3c95eec34834b80d1bfb0407fe6624da75788e2e99f1f035572d9f01e845de13c3928c6eb2538', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e02ddd7db38b54efa63461e336e5863f6620b6f3801a63686026f086601c4d76d59167fa78927235d145deb54a8c429', 16),
                    gmp_init('0x6bdd5cae5d603734f7a2fd392bd20cdbc6615ac1027af7b601cfe3d512472df87bb4a3d93ac9bc0433bccaf68bef6072', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc634667cfc23a8c6acc45da5be0870b2676663e2a47449ffcbdfef1e70232ab1282ca9daaeb2ced6773b757838ff62a', 16),
                    gmp_init('0x6097b8e207d2d22b4f2e19eb72c14facf45de1597ce61705190532c508b108aa2f289ab94f2818ddd9ed96590e6d3a8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fbf33ab444885111615413771c787a3fd2b86a39fa6fd3f1952a256ccc4b533e6e57cfa2f967a0eb68a54625195de9', 16),
                    gmp_init('0x4ffda1b04a752abaa33d66acf658f39a4d60b179accb570e21a8ea0fb744fc915f0a5659519913c626411fa6f07cf80e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a811171956f276083b965690d9bc101d3965d7f56a3e73092319dffc8e9e229ab591db022ca38f490a82ec5623a8c6f', 16),
                    gmp_init('0x4866228e4721f3b73853ad1b03ee2e65a4a64ade28c12431ea74c1578b346dcf1b49ceb6e183dcb5e387622e5cecfef7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e50a965b869163e98cfbc8f125e4767031a0bbd824de01b4af262fcf8c5d4b200b2cfa69d6a3bf0af2d5b66dec1d02b', 16),
                    gmp_init('0x64430f16cf85e81456d5e19b2c7f4ac25ab0bd55b92d01fb1fc40552d139af97016e76f372eb274e7412a30db1f48a0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38e6d8f086338a47013fbb06cdab2c419b4e2b77e6123ad316c28201d48f99b9fcf114521209b99f619bfed5c72e7606', 16),
                    gmp_init('0x5de7cb61788b11bc9c5c330f56ddb1ae67c2b9fbcda278cc20b548f64366c0d51ab227df7a80099131a085aefb438b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45cbe8464e7c90fc9c14b1717ad023b372d8e45fbbc1df73a0411a803a777e47a6de9b4c9a337e9dfae4a4c5bfbbbe59', 16),
                    gmp_init('0x646b34bdaebc78d77c205bbedaff182e863e2c4d184ddb32162a4ada216b872f3b7d6b0acebd65c1e92bdcd5cbcccf38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c9e9dc7cb2b8dc0a34a9607ba39c8163290b6982130aa420359165a4ef90291898e616ba05ce6f51c77ea6d517bd911', 16),
                    gmp_init('0x3bef1c9e885bf3ed44783ba16e368f5752864e8a61f407a47ab9ce5c7f60a52e74210de0f27972fa5fbd7e110833bd38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2995e3cdaf6e6e2d6320ecc92958c88b8cbbc280e5982830d70346a381e91990ae0b392493f4b1fa46909e62fcf28763', 16),
                    gmp_init('0x7b187b0aa5be360e7eeab300fbb3d799158c5a3c881aa1cb05a3dcdbed431a7b48880eeb145e88b52aa2c093fdcf7ed3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x465d23f294c1e29c1ea33740d582445756c55edb6b92862275c17d28ee524a7cb4dd7f32822cba9eb85d8ac717700bb2', 16),
                    gmp_init('0x43d0a1fa51eadca2572faaafd4700d435a67ac28d61f1c85487be6591b0b27482bb4fb5288fc6580d1f269755c978a26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x827eea48170e0005364968ca31f64258d312dcd12a96bc53dc6ed2babad5f8c2129f41be63b064b4d0f553adac3e9422', 16),
                    gmp_init('0x33401cde06d8a549f44c643070d29418f46b85e3909d0b98fb08fefcc83aa423bb1473863664095ccdc92359d010f84a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x761c837c47fe68a5a0a1c2b9960540a3117c0c407a553216054b03263d0f3afc198ce71f7c645b88c317e7f94162cb69', 16),
                    gmp_init('0x5c7eda37647d054f5c792ca39fc5c71c84e02d24cb6283bf46b73d51ada579e94d770c281be9cf865ab462d4fd91889f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x762c3dca4aa1530abd609001f9f2ad6eb1666a505973516a1768c5ae4e1cc305f011d4e8f72e40b6431270e3b125f191', 16),
                    gmp_init('0x7b43835a277c4d318cfcf21ecc83f490cc8eebfb84f0fe47b7329aef0d8fafd1ce5324a00e7652175a8fec1a6c13fcd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b778c69dcb76cb4181b7f0e03e15d282bc7999e0054e9b47c700c6271eab7fc54b2f42a114eb00f96c47b238be17d6f', 16),
                    gmp_init('0x2f1ba1463c79400dbcba6ceb0f026c7a7b60e449df0e140a8a363a6b95cd1878057cab168f7a1613d6982bad2e2ff06c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d0865f43f0d9f8066dd0c6023dc52e83eda1a715cfbe91ea8ef6a60499d54ddfc19baa1b2eb5d4862c897d634998114', 16),
                    gmp_init('0x26522f9c6b9cf728f97291f27b53fc4608f29e297181503d6aac9f181fa9cf263810013d4485962a930a84326829139', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x572bcd5bb85cd14b690f5d84c1850089d02946aa24dbf470d4134be0ba456c40d33bec9252321278bfa7d0fbb60a3869', 16),
                    gmp_init('0x17b4756a0a1fc51f24dc447532be50f8c662045f72dacaaba4d2ed7989038434506bd58d5dba8d659bc137e15342b262', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x54f1ba4bd2963df866ea3061b5858e88c8d3b43be70027fb61c2230611d7d0042c6859eccf6dc2d06c29b3d219dca168', 16),
                    gmp_init('0x6852ca51d4038b7e33ae40163432eed4deca9b36a5a341317cbda320c7cf3b4a463a582128012b2c069a8245d6beabc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc2b82911fdd99571d46a35543323aa6e5b48eac08d5daa1bdb7e0cc0cd9a8ea16945266c198e73eae0fd6417cdb796', 16),
                    gmp_init('0x2818b06318ead83d6eef6e2f95d01ca41ad3ed5559b064224090bbef72a8f06c325ce1a7674ce6def54e604142a0c59d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86f3f8112a8988e19b39b3fa61c29da9756c58be6e472ce1eac60ef7ba9feb1437e24dda17084e232a49b3ece6e50072', 16),
                    gmp_init('0x1bc7d25cbcd9042dd7d9c49c1d068e31bc004bc7e86524828de65cfd14857811745408d38fba08fedc440afd30d745eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c1060b958d37a8cbd2904fa5c421f1d13ae26fc118ffb5b6ca894358b71658d4f0efb9d9167fe806979bafe9cabf05', 16),
                    gmp_init('0x60cbb0298d5a302cb538b308263b9c6b57553f3f79e6b77f1dd992995d65939aaa47db6e94b47a62eaba55b5e8b26224', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c3652d23790b8a08a232f1d1af423b426c6309584d978452f34d11baf18021f392301502bbaced6ce0293e3c91548bd', 16),
                    gmp_init('0x51c84f2d2e64e9526c913ff5b8c92adfff9a3f9ea6136c0b951d9e116b40ed1b9f4b9955f83342efafc6294c555ffb1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7450641bdf6db459a77e25c8f67d4e1e5af538e0ab441531ec2541b4a8bbad62de87556b42864250c4ad19002a04aaad', 16),
                    gmp_init('0x696e1103b6e17e3b9fcadba891eba7f4f82655a1bc8d6ded3769dd00984b3e8d87cfc15d36113a1ec1c469eaeaaa174a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7aba465d610077bd4e6e8bb82b0825446d9b8c120ba1aeb86ccb99b60c3b6ceb758fe5fda95b96123ce55652d638f447', 16),
                    gmp_init('0x63cbcee129e9a2cc9029df530761b810d2130333549d7e97ef25267ea75bf92b086f1b50b6fbc16585f6a1659d383d37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a71b658fbe70aba64eb8970fe33bd472efbd24bbe2b82ed624b5d43df634e36af0a6b69629fe873460882fb91f4c3cb', 16),
                    gmp_init('0x32371058401e6d5a389add67d501c9b5f290e7154d5b41cd1b2b2aa699bb64ef5aa309ffdb46d516e4832c514667ceae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3aab08006d500998776c1cda61eb290c37eb50917c263524e6d20820965444f5af57a6c8bba72504773356c802ee85', 16),
                    gmp_init('0x852fc88c3e297e1a66a538b994a016c7470a45a5cd70890c84ecfce81e9633f49f82e929b677c039661c4b25f351008c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbf911fc219530c144e07b17736a7bffd8a71dbc3084613445491e27e157431211a6841db39e9cf1429b94d32cc1df84', 16),
                    gmp_init('0x1c07391bd088fa2289a90608ae5b5ad7c854ed2e62d93bbd1aed2569ed2236210f135f860b0d9fab5e325329bd622d76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80c98f31d8fba32a2c1bbe703888bc6dae42888c467be062e39e495fe2c5e024c2c534c6870b5328d6789bacb7c9657d', 16),
                    gmp_init('0x1e714b06b7da16a6f900b7db5fbcf61da3def4e6e0077dde69d0fb6d7ce46b28d97009081314b263533abdb3006d90d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b832f1dc13922edfaebb19168abbc7d77cd3ff90c9d8b6366f1a31d6387ebe6ea776136f1967f8a0717e8b93cab99b7', 16),
                    gmp_init('0x7f16c79d6787f84d586c03ec6111d8824a56ade6dfab15b322c9d2adc7f499144bb493bfafddf220d7c95f0ffd34cb27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b14342d9810d4ff890191adbe13a8339e5fc80f396bd576a4a3c4747ca574efc96d6f163f4f5ff88fb6929fd47db491', 16),
                    gmp_init('0x749f6a8cbadbf6a05a30999e3a6ad249bf0fe0598034c81896b2d5198ccd993d3dff786a43e892410606bc114d1a5af1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3947e59d0a4629ca8cd8301e19e732582dc604895e70a4f4517beb773f88e71390b73efd48acaabc5aef34f8eef4d9b9', 16),
                    gmp_init('0x596bbe9e81e867d3e97418af89406908c8935b4cd56605b50fde7bab49b13de00ed12c876d23c15d8020a0ca5334b920', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80d2f0b6184316625e11d4feb6fda4d7e4845ef9295eaf376cf5ed6f65dda030416ccf953633cac325b14e388af2b6e6', 16),
                    gmp_init('0x1930f1c5799c26087bbbbb1e1f473da583420ffc3436a1d2c9a2adf6ea7e3fae6c94ad778257419f44213dee0c9cef2e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x476e0cfcb8260227664a737dd0ca40c4c2c6f49efceea818bc160f8ffbee49cfa748e78c78692d8968a823cdcd135d40', 16),
                    gmp_init('0x84244ea151a979f8667f051f88d01e0e2c0e6b79d566a092308deeedaa452692ba724bf207775b9ca8622d9ed11ebdc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x808a250a6e44698bcbc1bdf1c8e9b8bc0f53bc66d4117585300898f2889fdb4e28d6655225b751cfc072adcebe321cb', 16),
                    gmp_init('0x5123051f9ee86c24adfbff8219c737992cc3da612d2ff06370c1da01bb9721231d54908d454c1000a3521de4809a9f19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d8af4736c99067dcf7b7f559ef57a2809d6b4c3a079f6a5643166a0e952f0ec80f2e37d471494c475e992b78605bdfb', 16),
                    gmp_init('0x60717260d9a3fa5d23cc367d75860b724afc77ad9cdf2161630560331aae22fa8f713c0e368606c8a1608df7ef9b0036', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x877d9e8c9954d6eb154e7c507d5a17ba0fb36c6f31b090d7158967dc095bbf7ffff44280ce020b8fd9d7ef38c967289c', 16),
                    gmp_init('0x635f4cfe091b4056ecfc059217b9feeef748b215d9c92e722362ee172d4c26895740c19ca37cca5d2d7fe92812bcc0f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70dff0d70b29ed8f3aa5eee009ac18f2584f28b01f5db1e097a986525e13be56bc2798a506a302d95cf61f7209d8760c', 16),
                    gmp_init('0x87be15759362815436a2b616f3c31aac5b3e5a169b20929955d28fe6a4a4836afae3564acb3a34049336f84d03a848ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83cd6fc4f705e76e5bce59f223888da0d4c3722beda07e44b927c4b13433db4626251c681b5b4cf3c9a54ec2f846ce62', 16),
                    gmp_init('0xfcd43d9145a0124e44c250925f946ceb9a934359ce84cfdb8967d3660800c2ec211d17c0d80b7abc6ec9520d8436230', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30a3fe6f13fe9ead346193db5d11909c65aa42ad0391996af5de7d3dd729d011843d6a1a08c3659405f8f06be13a5ab7', 16),
                    gmp_init('0x20141f05dce4d72bb93a2e53ebd39b372ad3aac6ba9ad0aa35670f14290c45c7d8685e2fa7cd14f06480df2fec3b332f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2215d2b3ed143417a878a25c8b9ad646c6ddab191e85faa521b2433a5493765d9bd29f5a9010a340c18d50d9e36b3de9', 16),
                    gmp_init('0x8a0c91a31a3a87f3a5376a39da610872575f3615bd3c20339de210c6613fd7e63633397a726acaaf237f40fceb660988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x368b686c89c54c9f339d113670eb23dcb42d912cbf7cbfb51de54572628ce3e9a9c3009958659de308d1422e41b2f2cf', 16),
                    gmp_init('0x38675b04c13f18213a61ad0dcc49c7f48349481de830d522b258322274612dfcb6b6ec7ee8df38b268cb932957d25906', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e65b7b1147fbfaefbab57695a2d8f561f6de064ab72726df15b4f84b061745bcba486614f0dfadbacbeb00eb008b835', 16),
                    gmp_init('0x93d0c15271a05828f01cdfdd274d62eb9039d83befa2c5c9041b14059fc25c40cc92636aec37996083be215f0a40e44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x467afddec0563fa806c41d845cd8172c5e010a4cd1a98a9fef787602499976b1014e05865b774540b155aa3d565dfef9', 16),
                    gmp_init('0x1a9051a215d6865bf765995f7f36564664364b8d555ad8851614cb2303e5b6fa45a99999d9ec5fde3e6f749f9f21a632', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e666b6ad77e7cc77e35d582fe346671cd5c4faf89fe189fe4f16bdd6ed6117d4b2e0bc2b2752a9f5927d248225de4c6', 16),
                    gmp_init('0x205b762cff0243e92c53a7615832d6739649abb145dd95fabbf99419c5b58b0ec791069c4f647aa5f79546cd6e00ddd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31db392b6fa47281a90d8f037efe3710f575645ef2f613cc91e2af6cd5f66ba2d211a63978d46f6dc3a5183e85a96f28', 16),
                    gmp_init('0x53e9c04d1a40dfbc1774db042c56c0c746762a7b70c92efa791770533833dc1edd6b7c4039661390d18f8913a469f626', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x576bd5360589cb02f6899785350929fed0907c570ce7763b831b3b50109669b1288422c0ab3864c8dc373584224b6275', 16),
                    gmp_init('0x4eb9a7eeefef44a12a9e267e2460e1387ae9ab18ed5e056df56104ff5ec2d4164a591a3f2760af62cd2e5231ddb9667e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a73c9b7ba42899e161e4968db5adc2373876126e737d690321780092d3cc1e785bfd1c7ca8bd1176b176ce0b77342ec', 16),
                    gmp_init('0x654d4c324cc7aeb455ae50e64fa284fdd954122c3df3b898e411f81b1d91b72cf81cc6cb21d9521f7934fa231743d520', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3de409b3307d060c370b5d88abab2a6b2e0c83b2d7543cdec96f1e6a6b93dce1b4089bf98f7cbbb0da38329953cb7a55', 16),
                    gmp_init('0x63acf42545dbbcc145883dcad05908b06f30c9f1f5f7b94f9959c40a8e613fe373c3b280ef9352cba21e7f7aa92e9bdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79934bca8a70be910ad1bf1046fb6401a721b4b97c8154af1ae52a2487f1adfc23a376828ae7eb0006d04534076f8986', 16),
                    gmp_init('0x60592a59f6e1aafa13857c1e1710773446c582e7bc7bccb31ec72025642e53cc84c1bcafa12236723ab21c616b282b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x288b29b365f3b93e87cd2dfd923340e8a042abc538c0ef83b1bb897e13eb285bd07f1ad1714ee6345209d052971bcff', 16),
                    gmp_init('0x63c6b338cb3d46bc28cb02243e57efd6a465c42cff7730900b50dadae42aaad33c6dad56f586a6ac286545810fe7e6f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x195f970650d0b23b29f02d78bc7a2ea0d1e0461c625953251b2ea621626d27e1af7e55584e6bb462b99be73eaaa521c6', 16),
                    gmp_init('0x878efe2eec560969a638c1357dab208625b3baa9c073d698ccbb43600c48f97bdebc41fb223ca9c44022c5313e24a9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bf354abaa3fdc41ecc524fa37eb2103bd338b98a52881771d087621ba53eba827b3a61dca050e153dda1fbc4b20eda2', 16),
                    gmp_init('0xc43908c4c912e71998ac1d2e5ab670c3e2b94cee651252f873a645db918ba9e5a1ab416b95c35f876a80598446ac42a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xba91908cee85e2f4ab4c9b6a747275777a1874ebf23315e00ed280feb222922433377580d150e321bf3b1086cb4c2b0', 16),
                    gmp_init('0x3dfe8a98a670053023151213ff08a5210e153240976d96c2d00175e2d94cd1d68f8c3c294a782edbdfe6e9aa79e4a525', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bc710a808f3e8a7e4d7231c7396e4ec30eb39b46d28ec48ade2e40e050bd366d8f4894ee739e8e2ecf58b6b7dfc7a7', 16),
                    gmp_init('0x6919fe918887a229db577b31e5c692c46236e2deac50da6dc2a22c31f39bbd0f76db4c6022ea616281d0f2e3040ffc57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58b871cb13bda7a91f64012b5d59254d688a213366e48e7522ab2b18f5ed3675ec6343fb263869638d2fac04aa2aad01', 16),
                    gmp_init('0x5d987860ba38f52918d68c9db77c87beb04de27e03dd5d749a00f77c8cba17dd1133469734a436a319f85ab84eafc616', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6db280255798dca90d29e4841be1ce8d081a531da425b6b5e00b53c5015fa6ff27f3f769cbbd014c634149b669f9b2fc', 16),
                    gmp_init('0x40a6b245e0e7142c478e1c5cb648777dc8300404ee48149f00d48b374bb97d8f6bbc901e0bfde106d7185429e409ab60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a228732f74e48a7c6adbe3de38e4fef8020b007d6ddf4d41ba2cb407d6d042bd07321ff98ae4856c81efed446eb7215', 16),
                    gmp_init('0x26e1202885d6acc46dba980791f8a6e3a53bd789feac416457a625270803cedb2200bf329feb1e1e65b9eba412917102', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x700342108037fa0380e93844e7bdfeb86cb9c453e699fc627be3a9cb33ff574b8eb76ddf6f2c0ef2417b1e9a062fb6ff', 16),
                    gmp_init('0x73733d8becd9072b0e43079cd0afd59dee66d047cc4027487c2ef03e8b18f24018706f67a1e208e0bc3d053f57f528c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1232aeeba1d0009b6636b03de35d7ddb9eeb7209dd4ae878fd5fa37409290e75e9e7d6c767f39900e49011629e71cf93', 16),
                    gmp_init('0x73c983bfef9483a02effbde1a52c7b2bee6fccd0bcf9ff99a0f0a78936d5be9c3e39d5a2acc942f7907c2c3f5bde52c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d1f7f2bd1f87f58a2582f942cf56f1cad7cd3d749be7f145c3056d7a69a5409abd2cb5924973f61b9cd014e3122f1fa', 16),
                    gmp_init('0xcebb6f4e2b1adc34fe81ffae31effd2f62a2236784f60997d8d50620f46fc6f52a28052bb17e849918347599d46d739', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cfdcfd95802cac626f64c43acf3fd5ad99e7b711ef043e77f625828040ed5f96241aa6a58da3c616a3203c2065ded5d', 16),
                    gmp_init('0x50c0db83f4a3de818db6842ac3e4709ae015795e3aeb72e9da69c14c65314c070934457abfef8f4c1edf895c2f786852', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50d3a02d88e8e6ac4b1c57e0a890e11b923dcb2134b53545f06bbca0c58746fd9b41642eb40ba2e9acfc7312f44c7e97', 16),
                    gmp_init('0x59ec03cf1922f0c78534b6aea67963f7b3343114301387e75991661de4b22ec56dee586f67534906bdeb29ffad2ce641', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x57be6b56b8a9a086563ca2fd5740cb28ed4e23989209d8fac14dca9c14318e9658744075e553caff855822d1875d98ac', 16),
                    gmp_init('0x1468bf07b93d7394a367c76cf22ac7588cfd4488af3540d29c2a63dbb17a7350a71e71ed45fe5e1136015d48b4108dbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x267483097fc715f94c683c03acbd651de4cb868a0efc5417828f85fdc134f042e5052be46a7f30334801e249b9172b11', 16),
                    gmp_init('0xa2e548a22497c61df77f1c6271933e1120cdde93e802449739cc3f494608846e1d61fde1c8aa4ca34176fbd2066cf10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x560dd548a6c44d9692a9bbd3e81f522574eb1bfea61ebfcb25740f0dc05f06d448c362712511dced12191ce1713e6d42', 16),
                    gmp_init('0x83e8a95a28e6bf4c32ae60dc3f18971b527bcff096d4fc91d73c915aec78815262eb80e6e77062ea57acc5e316891d72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7091442b7ddde5e263c8791bfb5ca43768a4f40001cd382449df7a9ed3bedff4645ca1ab0c3e642b72056e87199a621c', 16),
                    gmp_init('0x683865d6dbbe6725f9e96c5fd1fd3663dd51102c549a9acd6f06ce0c4c6981dc83f833e8d7da5994ae5c2e0e074c2ff3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19edebb46e368014d81a7fcdbfe06b399087c01d3eec8b678be317dcc720fcba01d5d02cc7b4548c79978406e792b4d9', 16),
                    gmp_init('0x4ce3801662e2cbec03ee46291f056838b4cdf536a2217c963438cb0962baf9c7f32df3659ac3215d29273275b203a41c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e5e71f4b3163c684b4300e206394ca26ee7465f5dd719d5a8b5ab4ab1ee1f5071b282af760fcee69649861dd9dafb96', 16),
                    gmp_init('0x9b3d2d4af137a2e97944f4857bfcbce06e079dc0e3cb81b8d7257dcec945f8d082d65e1ea28e77a31037e75c9316efb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23053ee46c78b97301818b2f128d5f975cba3f283ed83d0c9b5ab5080c8ce67f442b4a6ed2bcc4444f079bdbb40ff620', 16),
                    gmp_init('0xda036338d29a0ced99f3f1de03b15aaa2e0a9e04296f0f9bc97ff055bc10ce028904c56fdce0f3635fe9eaed8a90870', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d6cf452e0a843051e356a94d07a1f2c5c49cc799a3b7efc64f33bed97d480269cc7f9e1e3f9b05368d4d148ee8a2912', 16),
                    gmp_init('0x8daf99a86754e5a402a557301b40e41ad4895f0d3d256a29c4e60bcf1273218c6e36151601d06ba81f9d9af5963d9b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27870aed889d7392a564b43c29fc1ad47f73ed0cbac49bd481b1171fc5bfa685072b88f14d8616a9a43ccf0b5f49cb31', 16),
                    gmp_init('0xb60479cf0e67b3774ef5cf380e386e4ebe34239f6da7b9e3e2d9eb7a8f404e7119d90fce3567debb9cf9828cb878901', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a84496f6b4ac1d638562b9271ce9818f8d3073099e7aa740f461fa7473e3d45205a111c4cae060a78c7e2b1dbaa36ea', 16),
                    gmp_init('0x367a4f7d4eea62bff9d75ac08f229c445a19029e243581e3101bf2f8ea548beb605d6287045604e33b7d26dda1c505f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x356b8b6983f4e5b735634ef45d6b93f32a3f2af88f2f2628b28d1bf6b5994c0eea8bc6381edad61d8aac90a1fe788b83', 16),
                    gmp_init('0x356801d0f95362a1e162ea6970c08dc70abb8cc612b6176ac29c4703c375fc553a9386dc524b5d7285360f042d0a6fa7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ed8a85e052a134f7fd8677c124eb356f3b5bdfdc4d775eeaea030a1354ab787e2657f934aab6504fbd4b7f094200608', 16),
                    gmp_init('0x9e61f29aa41a6f697bad71fac44158861065a8c81dc6660e8c9e9ce10ef665f2e38a02262352c106e6491acdf8a2f15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ee54dfb10d8bbbf310f5a46597f4c4c60e52d1a30f3d6d3c9519b7c02f8566edeae9bc7ca8a8907a5911fc7c1008aa0', 16),
                    gmp_init('0x3176d82e9e38c92aac647f7c3f070def7e531b392b39efeab78963666c3e1f30d44e07989b95b8b1b7bafc460d6bbbd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69af49e1b98d31bdab8520a3935ca8c9eb414c2c2329e1af00bfd600274d22d0631c4f73eec5e57c4bed52b1f3d97474', 16),
                    gmp_init('0x7a51de51a9e27b909404a6d50892bef0f4bc8704b9271e1c6a1664037c7b494149c23bb37469f343f0311b9a34717c09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x336620fcef8d1492c01dcb3cbbecdf691efc453b65e25b1c09473eb75d6af4e19da2326b9ab6f734c73d6c377c7ad513', 16),
                    gmp_init('0x779b332dfa51ad02788d155134e562a2d2ba83fcb903ffea7faa458d72de1ad42c10e218f1b88b8c8aba77607d2a7e0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x152c94e053b78dbc89e2f78330e277103dfdc4f4390eefd1a740c8796096490195cc296de14497db2f9175a4ac2ec6a', 16),
                    gmp_init('0x4b2cc93cbfc334c14df9ac2b8dc55107c233c03fc58b3d4e67eb681b6d0ccf195d196dfa09ac6702b8d9a72c9b5bb385', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34ca8fd5ebfd78043ffcdaada84ff4657234738bb135d47e9295bda1bb3eace521ad9260ed1e36959629ad00413000a7', 16),
                    gmp_init('0x72eb20a9cf115bf152bb635e712605d8d43dd7b716bd69b92ed9d93e78cbe96e0a3e708c619d499c784adab92cbcce0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40862c2970525c5d750f3887a70262f06ef491d46da8d658132b4ec6e32bb09db7dd0ec662527d7c7f7334b93f9445b6', 16),
                    gmp_init('0x489fd008163014d607d3238c56173f7471777fa87f992fb50078f54fae60c0b0a152f6e624dfe15e153cad93629dfdf3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e8d32ed5a8e0e773681c922ed2cd41614b1fb79994e72e36806b022da6993d62db8b4b53a9f12fb4ba74b3fe3fecfab', 16),
                    gmp_init('0x15a43d09971f6ba1177689b8bafc0fb4eebd393a3b52989e5ac7db158daae660d4cb6d4cdcdd3a7bc2f7436f741cc9ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fbc80602f38b4769091d399deb555343489ad76cf902b834fd8dde814d3bc700e7203b25ed220eb6b0aa5c526b3566a', 16),
                    gmp_init('0x6b53e3347979e995fc6bde1730f1c4a9e53cf12bfb4df76daa2645ac5bf28f845bb1d9449b9f0d4a287f359ccd1ce71b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33f66e34fb1f0d237f5c6b21db8617e8715541fe5b0f70b9c79223255703464db5cc89e213d4edcfd9640494a201aaad', 16),
                    gmp_init('0x40bb8e09b920d1cd79790387958ed0e719e53729823c15eacaa2d3ec3b0e0dd80e081a9eda8b847abb11ba7bf7ce7c8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdf359db9496eafd9c0dad503a0e34b10c5f60cd6e518c0bc51cab6685556ecdc525087a53f74b4076bc2f13e7cf3ad8', 16),
                    gmp_init('0x6899431d5da743f6f416c13d20b5dc0b39ef094d0851b1606f37265f2bc63c9a53844c44443b0f372a9c571a91d3ca06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a746e230de1600cf16a68a3b659e36989a47db9a91eff861727ce9025a7a88881dcb75533547f16c999cbdea1b79a05', 16),
                    gmp_init('0x49bf0c1b4546fbd67c8073540966509b534239470869bd299b604f770480264842d31aff2909142630b5debbd4a1a966', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x600242faa68cb1b9ce412ba1df2378933408e7952f82297d5d510f5931bd664d9e89ec2bddb44f852fdea63daff911ee', 16),
                    gmp_init('0x36c528620de5f670aa9b68b5df55228b2a08889352f0211800c0049fcbfeac42aa4a2d9050fe0a63faa0f25fe9538ef1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c17a9692ed05dadc61b08be04c4cd2e2612d399dcde4db60a49b308e330dbeb81affc66665d93fff4686bf1fbbe0156', 16),
                    gmp_init('0x13d2ed45defeb2e35c13f85f30d3eaf8cdb9095db0eb574863d1a713c328fd9667ebba13c1c185781ddc09d99b3784a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2da4b5c2d881c8db1bf6a31896d1b61625b7c327ef8cfb10366166d4996db31e361bd20dd95126289e427560261adefa', 16),
                    gmp_init('0x512f67cb09195ed4599974cc99c7b9f2d971bf80a0ead23902752ccfeade77b4d1f84dbfdd65daa3425d52fab2b5d60f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37acd5412ba2fc4881ddd3bcb3ecb17ede781407304f8817ed225d58c9578ff271e189a9370cc400d49b62c34d61d161', 16),
                    gmp_init('0x6f20c620c3c13dd3e5a56bc466bf6369e8c0220413b3e61d820b18e232d0e4d8880ff2946c59c5d3088bc92a0fde241e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22af93f7f76783de9383412aa830af5f271240d6c9980acbd2c59d841dfb408574fac00bcf52387cb4b3c3d1d7bab4e3', 16),
                    gmp_init('0x518436fbf8f5ceeaf6b27ba0b7f742c789b9867ae024c192b17e0cef449a21a8641d4e016b5973cacc2b0a0e5b46324e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x830bec102e1a2ba06438b961f6ecebf9b3f792dde56d3593d9bede374cfdbb79815643364df1bb975774f0231d90316', 16),
                    gmp_init('0x23a3660de43bfec88ea9dd54c3d55959c47fcb700f21e910ca13291d72b190fe987b892926829f8c932c07ac7aca4598', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85ffcce1b3ccbd6ced6a467b2f994a94594ccc83d6b8bd7af37360239006ff3785eee501ab8e84a30a6ae0defbbb5150', 16),
                    gmp_init('0x7718d7b9a0e78967d2794d25c90ede1c8bd71dc5d685022e7830f7a4ecd1118c5578ab7a8ced685af24d7d336ab0b00f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4470a0d8285caeb5cb040481fa39f4147235121f5fce404e5c8fe1d4c2b2ba8b75ef212d2c44e5d05f8c8efff4964919', 16),
                    gmp_init('0x28876a024061ed16266a1414d8e021b426a3d2a05e82dfc9e3777873097c3ab497dae410a640a280b5b50b46c72252b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x240550454c682ee601d4779b305fc423cf32b0551358b74d264d31349901f7bbbf295c20ff1315236a5521c453a45528', 16),
                    gmp_init('0x50f21e39c1defab37948ad19b69176e97b350c97844cdb9eff2bcf71de8da5ec9ac7807d9dadef9d1535ea28735f6992', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed7fe5a3cdf7286782f350f970edb1f47949020c657de974fe180da4f3be8fdb10bc36d7fe5cb14232196bb84d296fe', 16),
                    gmp_init('0x67a2cec47bc9f5f8b3709bc4a29002bfab4f17f884ae1f6f7428dc9bda6e5a0a69c3467cd489829234a4cac91f04080f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69b5a92e89a87de8831e2e3a8426e54c3337599efc4a296e788528d5101cb1e1e780c972ab32b9e350e44a1a1bd2dab3', 16),
                    gmp_init('0x2c0618d2017c6a364937f99a376646251465bd08f48d0b10947364d0c50bd418dee3dcd8208d407504b8021c4a2923ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83ab40ad55fce208a19fb08517e2984ccf72e01a9c72b1e35d6512c866fe7f01e9192f10e01cce2220ce04d9af6d99a', 16),
                    gmp_init('0x6816f56bfc4c11d967e59d4deb06c748bee406a11ce20e58328a0af80704f303bababaabe0906451bbbd3b0b492f95fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36ae2ae40c9a61fcb325cabbc05e2a9b8e5fb57058489e361a19207c814a088e6c0055562604a64c131cd89c4c0a6c2e', 16),
                    gmp_init('0x6d01f6f05d7dafc109c0f70abed39900fd3be0e6bce0143fa6495fe47c6f93e19aad327a82a2ea4ed89613c57ad69082', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x250f3dad6a8c248a3c511fabf827753800f937c5b63b505dcfccc0188f574f8b55bd8b9dd19aae6f7b7312bb7781d708', 16),
                    gmp_init('0x84a838d15d15f61883efbe46e76f85d6eedae09524f7c2abb3a52ea13902a7fe99e2dcaa611b0c956f30ce9a2e2c0edc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ac01280ab38a0db5f66e592df48f16104890802ae5ffeff5195e9fa8a43ff1ee24ae17ec4a80d286590258b90129bd0', 16),
                    gmp_init('0x7c530b1c4b672a641a91c912ff32ea58dd298676832f1bf07240406462d4660c0701399ac431cd99642ad7827d908da3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65d03cd21e86d4fbbfb4cf24508bdaeced388f6d006531600c4b670248ad27d5dd78639aba08719be7104705e4c153a1', 16),
                    gmp_init('0x80e8d5b2682148a421440dc6f00f2ca305ed529b98ade483c00b9555c92760cfac46cddd4e253e2edf0357585fee5b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23e3f5e27bc4c2cceb14eb7ef0425bdd23da9dc08e3115a87bd35f87b775bd7816ff5d180bf501f4e201c06dc654efe', 16),
                    gmp_init('0x44958baa4a2b85178a293e52900836b1a931496845dc3c3f8732098fd3dd22c03646f2712618df1ddb57ae1f9d84ea94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eac1acb05277053bc2102bcccd826884f33cf306b15ed6ca7372ae3e7899bdd63f726f01a205c921a96887723667741', 16),
                    gmp_init('0xcb90690059d2a4a7e3ad3d1cbb6918e3234c0f1b2a3ae7c39d10dfa87e5ec30c0d68fb4c98ad0f39afe30b8c20f1f79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x769ed5c7ce00b9012f1d0ac0cc430a2a55093377a013a837b5bc8caab2c7ee37ec74c0dc9074985175e366e302fa5820', 16),
                    gmp_init('0x44646adb5c612e49f047f140c5a92b9d0938681e43e9c9a6416742c11a944f53d36e31d2687fe906ef593d37ce133246', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a37e225c70ef5626426c0a637f508af0e38814f84b0187abecfa44ec1dad807e6f5d7302d79c5b36da6bc6ebbfc6886', 16),
                    gmp_init('0x79ab312d3d873b5d5482da60be8c38aec10ca3a54c5030acfca649061d0a75f410f51a3aaae18953f39e6c419964c016', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x501f14a3d970136dc81297cd0e2f5beff2df36c91a703e14a4426bf28a373912af8ae3d4cfd95ab189c7d5b6cdf4b27', 16),
                    gmp_init('0x1904057944ae2d383f3deddf659b29c40f75afcde326fcfcd849193ced54c76f85207451d8e247e8a19b6de15096ba98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ce15bf3287fdceb9286a7ce162c6649c016094a4a578c297f394890a05cbbf3d2e5d0008a12d1e7532bfda94b9ce348', 16),
                    gmp_init('0x3b204707569b537211657a40ff9f1f4a2d61cca9018be373aa5cf756e31611acba0e739c5f212664a54f8f1446afc64', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1bad73b5ce5f24e3b755374b97ba50f52028b84cfcbd86b37fad614cbb6042677da5fc2a18984fc28e1279076043c833', 16),
                    gmp_init('0x18965f4e638f7efeabe1d0077ca21eb7e6569347ac806e0905192f14864041bfde9a6d556e0a1b0173b247ffe80d7cbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20040ed124ef217baa611d89ee1a2a12ac526fa722f885c4ea9a1e89a30e1712d1ee1e34082dc81b60d86d8f425ab186', 16),
                    gmp_init('0x1fb3af4e19d52917f25741882a27b98d04c63c371111a775bea4f2104d0f00d1e8f934399a1eb31eef8835ac59a61122', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5500648685175826e9828f756b1f7c18e1328359fa702a8255cbfa6a6374b94bb772272a574a8fe0fe6e5dd7b123fb0e', 16),
                    gmp_init('0x7dee1427c24e680196e46107e4eaabc75165a938c9b2c613ecaecedf05577d3f361571ae96fa39f0302285f60f914574', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef580852ecf316d214d1ef492e6fe3773e60aca74f2bfddfa7540a826e6aee67b910411d184e645e731b0467c621408', 16),
                    gmp_init('0x4ab8b414af22f4951dc0942f4a29bd57e83656becbccbdf3a69211e0ff97e66c697c4f97a062986c1cb19e11c25e7eb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40fc752e3692b39b232f0b0aeb1f70858a4696607f41b5a987bae9864285e76a08706a9002702f5c98528a0bf6d2e3ba', 16),
                    gmp_init('0x49ff35702ed062f598e1ea1833548973350954fd228908e2db93d48fc96e311060d84ef277c0e448554bccf231a0292e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e5c3e35d1657c7a352d2814a78a68118b6774cda5534ceb87d7cea26e6c0705a4b9f38fd3ef66a2c3ba5489d00629d', 16),
                    gmp_init('0x2c7180b3a4add26daf18af0806d4d94286a827958a20b05d285c3fa26b4dd9fff2a43d9c778ab27b87ba1835f83e9772', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ae098bb557fd0d7ba26109884d59576c79809b3e6813533fd88f94348146cb283a908b5baa7d5a4be5ca15af1a38561', 16),
                    gmp_init('0x369e328810f039fdaf9122d1d4e78ea8759c77f752ba558b7f5368852f891d97c1e52a841f93ef17e814b7234a0f63a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74ca666d657bec688e1496601931262f00c68f77f362b86dbd4c142869e4417bdd8a4b0d6cfb45fd42855a35e1be0c7d', 16),
                    gmp_init('0x794a9083baa59f67861248f74a9a3c64afba9a7ee3f342600c054b6550d2998ef128595bbc10de28ac6d054ac3395aa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7090cf86c90eb520e8c43450dfeaeb8089244632a2176419e6352ff0bcce1f68313c7f9287f6ee00bb56f2af66231008', 16),
                    gmp_init('0x3bb8177fb56eeda356473b130b50d3c159d64dbd2c332b96ef969cd527afc99dd94ea632a129fe942c02f64654e4001f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55687fd4a70fb482aa3adbbf0a345548303e38cdb78eb1830db77ce5942c7a5d0be12be4436c08362621b04066750ede', 16),
                    gmp_init('0x62c172d35293d5dda6a62406bb6e9ac4e1b473965b393977450b7706a3a2141465a68064c99b6245f13f6b36a7abf3c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x365b6ea9475a5301c90be98e2134bef1bfaae345c53cf15101e14be825f385efe22b880fc4475cb0dd5c86e94f8678bd', 16),
                    gmp_init('0xf96f7a7daf1051e48599221163a986cb0a277271797788e43e397b568779c4accd46f6c8bbddd7b600dfc5d0792c35d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x896330b914378101b5b7f768fb86228183f5afb2e231686adddaf216dc1dd4c6068a3a621aea7c3dbd0e34e59cf32a8d', 16),
                    gmp_init('0x38dadd94bd2cdb79451000ab2fb3273badaad515516b99d601ef8765e367b185737792d46b1b1151f72e232d57286140', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56367c41f89391e99c54cc41cef45b582cb00ad06a707e76fa39fbc88f80079967efbc36308c8722c31a5f95a06fe8e6', 16),
                    gmp_init('0x2d13669498b29eaa74bc2ce6b51d40849b6f41687d1a5474f7777b63135515a21ba735b04daf0e432f4b220f692224d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81676de383d143845aea53e9e783252cdf5646b338da1b8cd69189f940a3ab14f1e6fbd4a977330e8cde94dfde9b2cc1', 16),
                    gmp_init('0x28068e7bd1252327e60c8d0ecf672e718beac3890750a28ae9f3872e21c067a6d2407e58962262173223e47f85f322ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66503fe6a2a47cf28b3f8782777dffcd7f2f8a315a26ddd4d703e1cf5e8a228330de1517b324307774c6bbaad3947508', 16),
                    gmp_init('0x89bd9e72cda95bb773be775f027bee2ba15d92d3958f7ed375a418204750eb9f7c0e80263e24c158d42a18a92b1a9d4d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2a10d8176c3ec559bcb840e4ef483c8ed47a9f2fa884d85ce80fe5663ef6a1e243dd65745b59dab8f76318ed3ad3338c', 16),
                    gmp_init('0x44c64d7c10a4079e5a95fecb32e08b5869e1f853fa05de4f076f74c382b95e4556ad7c70d4c0d69b752184c711d7b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ef047817f2b44ec6f3d3cf6c1cb27acd01fa01ad8cf9d0a4f0f05eb4cf085d128d09ab5ad93a50176b96e22b73f590', 16),
                    gmp_init('0x37ff5c6ea8ae37977de02a2c920654b72a5bfdc2c77fab6bbbcf11e9a2c3c1ec56701b7fec837f8003080996b4b572b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57491e4d0d6827d43a2845f13c0fc67655d0ba42c16e60f03ddcf184da5d3b3a400d339a183292d0710c3aee7317668f', 16),
                    gmp_init('0x6a3d9c7a5cfa4e991ce67899ea5abead51c02b88d6e2700fd81bdd7419c5a5ce0e2fae164f6cd137a9ded517730de537', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2bcfb224a432a9a6cf65c5945eeb459d38150597fa1f89302ea3f0a8c2951ffb6a326a83e965eeb2376f84f94ed7cb', 16),
                    gmp_init('0x3859224aaf58900f1556178924121c733a50b8aa4e17f20387c29f2d4e8f9ce0da07bffdc7d3038fdfd25d5cc06ea14f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x725b7580691158dc1a01889cb7001824a8976932ae985c39df0b5bbd26966b4c4e02fd3d5dbf19a7a7dea34bbca13de8', 16),
                    gmp_init('0x428c3b2b907425c30363e0983dc81c86ecbc62c62aca75c3f106053d6be1f103fd3a814dab4273dbcdd10cbd5e888cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe34fdfdef08ed3ccb8136c39d4b6d919673936258516c85a35a48deff4fbc866f9142190773b1b9822cdff3cfd0bf9c', 16),
                    gmp_init('0x6de31fb7865279f820997997703dfd1f816e06c5e7d8e214c54f13e9e812293130569826ab43e5a810c80a892f7cff5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc312066a7c1cc70bf0d3796c8bd778e3fc31f6687d071ea19ad2059bfc76bf87e28697aafb58f76bb1c108685f5e5e6', 16),
                    gmp_init('0x6d7297449b847155a59095b72adb416a18b5de8649b4ad0df22d60b44cdca04de6a8cec7f87c8d878d8c6ffc7166467a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x160cd70d7aed5c5920466d192d9e8aeeb663d4037496c8ec8b0431a1ce932e2c8e33f0e622a60ba5e2c1ffbd3f2171e6', 16),
                    gmp_init('0x435d04b6897871c9a69eb2d93ef10efcd1f8f0194a97be1df89d3efe09cd2d376830d3126673a2a6a0a628bb41183df5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x779414a94d22a59ac504a4ca7e57e0abcec8266a06fd2b9bb04cbacefda00333595845b310f090778062f9cbd5690cc0', 16),
                    gmp_init('0x17b88776f4f536ef1af487019b7d1be581e13c0e17c9198fbb57c5dc4fc41e19430db7e9fc331e8b7a3d1b73e36db1c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2497d4f65893f757be5403156c995c5c8f9bac550b1157ae2dc565201616785d52b60c25fe17975d8e66d3e666725b07', 16),
                    gmp_init('0x89d08f8747e62cff4f2328647e8b89a73eac7cbb0dab4e1d73f576ffecb8884326291c01f7b007b45deac1de867ecd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e42798d88e2320c017037f28dc94d579aa43661a8ec33b71cec3743436cb2649a3a616c385348e240f635a862960af1', 16),
                    gmp_init('0x17a1449765262ad3b4c5f6b2c5ba507e62d258a11861e60552f2f4e669ea5278df0f8d6c7e28a16d3b0c046b47e2f6de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x894adcb527097815ef6a2db3206f07d50a0b789cce4cf39fc48d43c3a76c296468b90b0ab9c2db58d01838ea1f205df5', 16),
                    gmp_init('0x7f48e6db44cc4b9358f9d86fd6b33806b737bd1853413548f7496cda10c4f9ac8af538d42ab149d451f1ef00fbacc74f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5920664a2de793423a1be84a9c1ac35b18e10f3e62d1ecbb78a69ea36881cb7cd51f70398b52ea329fc555a1011abaaa', 16),
                    gmp_init('0x3ab8d9a47c71dc460f307722cd4d6d9d56f468f31c7b8482cae14ee32b06296b69351a6c975d22a31265807785604156', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5de43b85020fb1847ccf485e0386857fb874f5373f5e8df5cbe15c12e765bced4e0dfdf581783f3411de19475a06098e', 16),
                    gmp_init('0x16db4fd7919d3907f4d3693b6cc364eb6587c517645c2d41e3ea81ed18a92e57d709fd289eee8cd6f85134834511719d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x863fe9aa61b5a7a52bd2954d3465fd2dee22abaafede681cebf7da8eb48fa8c76e4afa01a3f68b8e91f889ab76333cf9', 16),
                    gmp_init('0x6c236f2a8c9ee8c1cfd9d0df90668795798ba4a9419acbf9d614c570b2dcaac3615bd86a54ba93959cdfe4dbc2db6a23', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x50768f0fb74d179bbe6f2afd3d2cf8a9dcbc97b4ad338d2cdf88fe610ec60a0787e4fb5c75ab084ade91e862ce1eb759', 16),
                    gmp_init('0x1eb6ec4efe0f4e88acf0284a06e5a4d27438a26f5f60d8cdd2353adde72d9a3c7bd28a32408592e2f7de7c45204668d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e057e89650842121f8368e7f63c3b833860749f880a635f78de1abedc2b133c20f1889834a72dff537be13dc9a5ea72', 16),
                    gmp_init('0x642324b348f4afd1e8ff8d882c6fa192460ec2ebf03eecc28ae675ff453114dc5e8e45da803edb6f275b305ef930cbc3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72e514709b68f02418d67a94ba9161851a8c60bd3028fbf5ff8062938f3afd69b5a4ad932cf594b90e55cc48c62b9706', 16),
                    gmp_init('0x7b068477c969dfab8327a73c204d31eaa7ef09a0958c0377e34da5e36d2894aa57d7c2e266fce779def6f0f5004066a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11807ce94f40fc6aa43e5dfdadcd2f2a0dfb8b0a42ab770f04abc247c3f9e12e95cc23fed3efd295a8e83d8433fdc17a', 16),
                    gmp_init('0x3e89640690089fad095b622dfe8cb98602652f9a30d998b974687f087028d97ae6210cbbe914d6c368873db729821c4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ded022e10b85270188d3653165065d5c553db94633b5bc7d80648c9bf2a01e7979affa39d1c834965ff68d390596a5b', 16),
                    gmp_init('0x2622aedafb1780514a1ab550dd6fcea94df886a4fd9fd538fc4288e111652e082ae382006c75d52e05944066275c4954', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44087f6d9d3178d2d0c94b4494c1fabda6146bed51d429c9ddbb618d1737a7894ee06a7006a5e6d0767f8c930ccaae39', 16),
                    gmp_init('0x45a0116f6335338255005cf9db9f048229a2de2e01ca2fe2a31623f288e48de874da2b62ab1e01a5993dc1897244bc5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79ea45723bc9ad3e7897f2436c322c51f705fc45087d7734d2829aafa3b32981be419be3a80b555ddf9d299930727a6c', 16),
                    gmp_init('0x1f65d7f3f48a8627fd141c90e00f8ba261cca5c4403a5a46a4c4d432dfbd82d23850c4f89165004df565a2f457b950aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ea12cbc526af253e2058e4e8a9ea7c20e9a3675d059d083bdefc8e6bfa2f89357f4e184d9aa35c1c60048db3563e33c', 16),
                    gmp_init('0x50714e1e531899bb11dcbfca8e555752f075359af7c0b226d0d54ffe436dd435f7e772ac97811f205f213fdef391aeff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80ab50ec7fcaa153f1d579674a878070a28e637ed2ec0380ef10fd1bf2eef1f8b03b286e9e642ba62e8064317cc99bb9', 16),
                    gmp_init('0x49b02801b5e004ab5ee2ee83466ddaff5170c46e1178e4d23ef96937af5923b427a9cb1563c719665396b2d85d77efdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b376425ee7a40cd81757a62308a6524dd6ee581896badf01b61a27cc64a925c91c37bccd79926f3092742b7f927fa08', 16),
                    gmp_init('0x4fcad69d3ef08550ffa1064b36af455ff3fa58814c0060228cd4c27dde85947c30e3dbaa1db8c3660e4daf55fa30c7a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x312ffb9f40388a1fd01d339456e16fa09e39bab48368c244175355dd779c38c9b3754059b86f862b8f13b35825e98b0a', 16),
                    gmp_init('0x7a8b0d282045df52c311657d57edd3be9cbeece4f03fbfeb978f5ceeca6ccbd6e43d289006c9578d899b754cd1e68393', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77f1159058b4422709e09879cce9514a4da979e609fb929938cadc9cbe764210422784a7af92c163750c3d89ade85771', 16),
                    gmp_init('0x6ec9570a8d409c3cbc6b0f66bbc62d023e618267a2a3cd180bc18ea0f2d90e608041053d084610e20bfed81fd27b36ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8401ee0549b1deaf2538ebe62eacb5ccf842e6782cfd9dc3ba10d31ea5e838a56ad9e33022e64b1bc283da4a823d2d62', 16),
                    gmp_init('0x1d9b271006d6680c68d02bf4edf093183f70e23a41ebbe26b13c70df3287fe1592f350396a25f18f04b8cdbe9ac6ba7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5190afc32d3904968e3610ddfa6ee38e7969124154100f150df288e9f989e4b8d38a11ef55311b85773da074749f04b1', 16),
                    gmp_init('0x42a5963c16d1d27fee94a186efc592935e13bbdf1f25088798c8f2dfcac6d7a7a04378c3cfeb09dcd9883eee25991459', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24e1d62f818ee5098fd1e7ddf4efb28ac3a7ee2352f0874b86d5a4a7c879cbd92af81063faaf0b0a972b652a7aa5f42c', 16),
                    gmp_init('0x5d0755803ec0793da0f19978f6b13eb6bd0cf214497b0bd409f63226e865d455b8f98e91beb01f85d68dbee1ee709699', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x80f435b4be241f023846b370a270353b2d432d7c1d5f903ebb92cd03b7c022d0f4c3d608c7568b4bd31de2396c619b8d', 16),
                    gmp_init('0xef97be51cb59527b88d15422e539da6ce559ec0d81a3a1d2331365cf4817820102254d04e6933fa51e1fd1addf80808', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88191b1c6f4e0d27ec757f20800a136d585de6e2c2938df13f3227fc0b4e92a4a6d5566fa5f6a03855a4c7c55a4c4e0f', 16),
                    gmp_init('0x776b5cd3ad992b9bfdfff932047fe55e4c53eb125dd86cef76e556a48c1df94fd5ea5ca954d32ada94e062fa93ffbf90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x330f01483a851fa1d4acce9195484f764c704cf936b9f44ad5eb16e44b7bca39d0af1f75d908a794713b59651b0b689a', 16),
                    gmp_init('0x4417968f2f41d2ee8a012cd39d72502c2f333c1772cbd5b4a483dfbe6a93e6f1610d6fa72392162b8e1c0550c6b77a92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67b603ffff38d5d0d993d7a191f021d537d44bb5813e2ec960e4fe5fe1245678223c525afdccf09a272b843f26ea96ce', 16),
                    gmp_init('0x2339cf58a61327516ec954ff2991273936c9566e08931cf844fd0337f4e8357022c26cba0f0736802db37366e25ec04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc40feed9eb74dd635729052a2fbffe19725d2dcdfca84a89d47b0a0988d0a1682a9e7c8d09cabb37784e8f018858c9', 16),
                    gmp_init('0x234d4592e5a930499848f0b42bae990f459cb8fce6405f38cf5d3bc2a3406b783f4101f496f57fbf5a4d3bffb004a453', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x864af10a1a6e39e6e42fbb42b0063d66baba48bbe2f4367432d9752292671dfe5fbeb9b4e53176d968ba30e5057f81ab', 16),
                    gmp_init('0x52d38d77a5e37ef2c847d54363f704006691d80c642e71fb877299cabb79e69f70d84a423a988a44ff3ff4594b46a704', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x742c231c391e6eb459924509341629544f3141cacbc12546b27db6da6e7266052a833017fc6e6a64b3546e2d1e461682', 16),
                    gmp_init('0x57a11cd32b501beb84b4ae10477191e1b8ddeb4bb0c390650938c03924954a38580daad749f96563c017d13dc062d9be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33bc7e81d81956caa85df78c8895f3a12ed633ddb99189d74765b46034b4ee916e9819031911f24e746d30bb2312bdc0', 16),
                    gmp_init('0x32e646d1729a6c8d0502fd817901aca5e14f59a2ade71e1c009329cdeb05e3f417a2632b2075a53486e8ccaa9c14aa99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x837827f3f7067c24dc55be16dfcd556a99089f1e3fc7937ee2302a78482ea2b0ace97c2f5ad07284cecc03f3425ebe70', 16),
                    gmp_init('0x4cd3e56cb11b093322beae3562360870414630d18ceb195d374f374fc4ad0a79387a9ffa788068f1afbcab2d4481e395', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bdaa3d6495ab0babcfa00f3a659ebfa336d45464820d40101948a2d9dafdc8636a351491080debb002bd36fc3691669', 16),
                    gmp_init('0x60cd5b8b7a8ca86f80d2781ccdb02379f4018ea023337c77bd9b56fc17d105f60eb8401341e5a4d8489019ac82a6e603', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20841c2edccd9172d79b997b24134ea535aadbc33e9901ab3cf568d58041e068f51e6858e08c8f866a3ceec428cfff6b', 16),
                    gmp_init('0x1491b633f72a196e801cc4edcbc88c729c7104f7c31435cb89aa00814386d3fd0e5b547837bd822c37928688293b85f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1322078d252e0c9ea2cc522fc9b37c3229e15bfa57fdd93b1331f6f60c4c6aece62f00c6af749d885d47cc87559becda', 16),
                    gmp_init('0x8fb5758e7beaf4a8440aab43f2ed6ed18398f7b05b80ca2dcf903348aeb82cfcfa27bd8956c68b5156acc6cd6f9224e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a44cec2f10854ffa2c6558a23502bc0fea169839108360ebe82c2436c146d64a061632021bb99683e891ab2721a39de', 16),
                    gmp_init('0x476fdb92474c64ace5af86e51ae0f406b76b8ba528ef180cdbb136d6afaf4135bd7e417e99fa00125217691a8ccc84c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x259c63ed0d47cdd652994cf07362aaceb4cff646e9842057fe52d5350c3fba5bce865387b91b0e856a297abbbdf05d2c', 16),
                    gmp_init('0x69e6fca1ee0c694a43270d22c273a9ffc255cb66759c80b383f44906df2155842e883947268a288571ff98b4387f4a98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b2e934ae2b0103af8bb634f77100b3ccea6d744d11192a2de7a51b81cbd63273e5f1e7b3c903ab8d4bdb94270b69ba2', 16),
                    gmp_init('0x387fae92d6b2ab24cad5ffa861a271c4a23ce681abd7d6eb79c70ddd838c4bfc60508fe4c6afe8df3689ad37031ec267', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x542f5fdb7f38e86a929fee2ea24eef9714377653cb5449d26786308c6d245defa15109d050f83b66dbce90c1cff67b5a', 16),
                    gmp_init('0x7811a0441ba94648bbc43d7c85646c64ca174329b65a54d8a9e059588394aab506b539da86540019543a4b582c0a8325', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e447ebc08b375cf9971a1eb65383c62d3062178e2fcfe6d0d1d8ca63a44830196adfd1bbf88d2bfa64fef7958e5ba2c', 16),
                    gmp_init('0x384e04762c825eb2e00658ff9b54259c8cc14ce1e54e32f32967b03974db3a0ea0a1c50fc034e4d9270cb32d562efbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3da623730f3aaf574bccd39c5bbbee976b6ddde97cacb30a102c11909e3a1cd9822be66daf86f0eda120a92e8fad9364', 16),
                    gmp_init('0x75fc616d652d4b58a022a59cd772e72afc75a7e83f6c454096b898f783a53bda0b9c49ccfaf8b73d1e5d33fd6d714726', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x571cf9027d02f847b283678f85710106678766d4864c79c402e0af40d3bef853dd2d390c0743b9f16ac7eae21fa1a62', 16),
                    gmp_init('0x5a0b244b1ae734df9c7e327d183049ff15feeff3757c7702557cef6bebfd9c75eebe91d8df56c678a33ba9ea8b294b2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ed4b63cfacd3a4e13fac2f4d9fcf1b6d631e5d140715106d70d7c952641673f89acb7f0e15782fe05e13068d175a8b5', 16),
                    gmp_init('0x84337f6ccdf37462944a8c224cd9a03c136e1340665a041e51615d9c2d2fd766ccd77b71950984bbe6bd1be3742c7a22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aeaa830fcc6fe12aeb6f1b210c2e4fab148b1ba1cd2817b4dc9e46a74b3c374b7e5a4a5fe1ba3c7fc89b2de2bad5784', 16),
                    gmp_init('0x12b60e62d8ab23135bfac6f8e19460f0ecd8e119e47043687dc2b7db53f04240187bf3d673eeff00e0a380eecbeb100', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59b27ea04ec3f1cf2f86245056f5e12bc55d3d2c282e52edf39abcf698bb7170f54a18e47f46db1c808cbd0c65c38182', 16),
                    gmp_init('0x7ae9e593faf0dc8971a306e11002a7f030ff79c38b4536a3860375b42ad9c5efc5257bdfffbc808e0f1ae22a79b55dde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x617e7dbec5bd34ad2aca51960e28263c9f139ee73b1cf4fda26cf057b6b3a98675fe151b1d80d8f1255e2f4c16414873', 16),
                    gmp_init('0x68dd86fef0992aeeb202750e9b48f87d6fce10247ee8ea8629b5dfffa6595ae930005589d9dfad077a1bf3a98305c1e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35b2d780d818d438b86d49aba633d7a8ad0b8da97745525fe9b564f070d29e16a285292f88b338e9e4490206608f2011', 16),
                    gmp_init('0x59eb1365bbf10c8900119c1d70cc0568875ec4f2eb6d2448973f4911452875bdb6ca80d0dba8e67f274b6992244db1d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59bb593d914f302d0f3be8880e29c37d599e83cc00e7acb059afb0304af246e7a8adefb0b0e7271d540dc305f17596ae', 16),
                    gmp_init('0x7dcca756b89f14afa3e2a19f1d02e2a9ae0061c28535f51c0b27621ba3169fda1feb42d3f097e48d01ea281bcbfeadf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x614f66fde0f552fc199f0f48160ad8ce8fad05d5eb32916853b728098a86960b1bd010eafe6022bc89914eccd16c2d3b', 16),
                    gmp_init('0x66b6dd8e8f8a2bf2d9728cc9f6bb3db2ccd3009b8d3bbb934290c74c98040f6b89ed00bc1f823f9166b2bd61cedf3fc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c43f4842389bbbf49b6f5f1fc56812f66d0a928ff0d8784d7564992b4c2ab26fd006c0ac75cc0a3f9419c613394f886', 16),
                    gmp_init('0x8c2f68fc56301e33e3904d3725b4706eae02b484b45a78d2cb8cb49caa970c06180e446678edea5edc81390719ff91e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88eea6cb80feefe63ecd45db3b33055de4c950f41d68e0a21a16fd32f80f3c0efc0efe1d603860990ec719bff774802f', 16),
                    gmp_init('0x84edb1a38941c12bd1476fce799016920c7d28f6e5e6e08a2ec0fa0d19b6a72ee0b1d0602e32e2ecf5880eb7e88cc70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81f0979336e275398468b4bb9e06b18eb3a2ba3a0edcc30f1e1ae0d5d76e8a5dbccca293c27878109d98c18dbca0247c', 16),
                    gmp_init('0x3b3584be0b2dc83df7148cfe01d93c7e4e64fd01c1f8b009acf66d8cbaabcfe9db3a4e589c2ae12a79dad00f1569715b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2544b7ae0d715fdeac4e4268ad06a2fd773cc86412ddde0c5608443a41592e148c7c978a50ca611cc32a2e45af798d0', 16),
                    gmp_init('0x48d7965ea9c4be60a1de72d2247391969b4adc29d90d0e17284e2feb938d359303e09a64712cbb01081f4183e4f790e7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x199b99ff9f5f350fe9ec2cd39eb89b1ec2074df7d4c7cdd4aa2027c7548cf0e8e2ad5073910ab168aeedc6d10bd9d28a', 16),
                    gmp_init('0x8bf249e379ac6b8ac5a9fdae1303ac123d8b7788ac74aff893204d6e924a18f57be19d03e282c9c2174387692481c44e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6927f85fb9c1f3e43eadb5c0e3a8a19dedfbcb17ce22ebaebe2094cb202be3613c5e60206f5d5a7f9d5c6fdf329c620e', 16),
                    gmp_init('0x7ce79ee624a354e55eb7c3f3fa99596654bedb40beafbaf5bdd1b6a07ba19589ebff4294f6ce6423dcb71ce3a958cf4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73e2acf902b9170bdad1027988d449793990eaad5e462fc730e4475b40ef11d23410936296a5284fad318f5be7af4d7c', 16),
                    gmp_init('0x65e327d5ba72c42f4ca51cb49c95a044cbb1c942ea4453abc04d074ebd18af8c201d121f4423f5d5aaa69874b27e8c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25c8d806edd52cd474504d553568fae5ba7a4a57e0b2d4a439122c6ed404b2138e5556489b6ab6169b84704e77ac9c82', 16),
                    gmp_init('0x6ba66fd1d0c29c7f6aec8512ba16f15e026fbe2237705f1ed11bc154aafe400d0b26b6e84c84dcbb47f439bad27a83bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d227723e431b1b3ae738d3806fe01a44b7d45b592dd81d46f5061efaf68d448f8b57aff48cca2f2c8515849412baa90', 16),
                    gmp_init('0x22fe35127c2e7d1b1f8029417e0366037ee89fc3f805036022123c6ec1e5728588f1d73828b4db9217245fa4fc14e35a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22efe40e03860f4b94177e7f314bd605f29a2dfb3cc2d19f3a7806fe2277a67ad30507a1dac9dd9b63496bbba4c82721', 16),
                    gmp_init('0x219dd3a54d37476ff3e77149c9271eb9267e91814de930ca4ed3e0aed1d67e292d30bbc53fbb7151d359580cd65dd76f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6021df743eac058c4e96c084efcd5cd21adb6552772297bf255a3a5303645b3d0ecb135cd2cf1ed265c63ad1436df6e4', 16),
                    gmp_init('0x8397d6fb1154eca1879f21f972a9b6ad4783bfceca41e7ff5c14585980bc8d6473671e4a1bb856d59ad20b6ed993d8bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50f9d66c277a1fa4f90b18f805b618ed92b40cbc371ec7f10ea61848eb112f07ddc2d39f31199d192cb1078dfeb320da', 16),
                    gmp_init('0x3c8d4b4c048562a05ff82aa530a6980d1fa3e5cc4c8d79edbde04e9c95ca1d7f5a787703bc565ba59db2918fa2151b64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44fd19588e581d30cecce951437666db1ee18663e79edd632be0299b6a65547a08a54075f2043b18f3f629a630dd2576', 16),
                    gmp_init('0x85de923bd3a448dbab471a09515d1fffa31383a45b0c88044b294e09f63f9939bfd2b7a7af9709eb3cf0fbbbd53dd7e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x633fac8895f2e00bdddf596722684182aa48118a41311d62ca0dce3da8eb6b3f4c3517c1a2764e656934e08f4ba73ab7', 16),
                    gmp_init('0x792b240c2f6b0fb399bfa10840d168e8eb7ad422f93c1365abd27c81329ec92ad1bc0b485dcfa5969ae5cb306b3b1ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ac57a7f6cb3b5f4a8e78798625291b5117fe8bc4d1d942bb6450820ff776e90f2084898d57840f2c0b618c83de2fab2', 16),
                    gmp_init('0x57a916c43b8c3531ef153c219b641d6cc4ddb3515f47741eccdb8d53e1a4c5723035a89c9ddb3f7f0d4a19403c506bff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f44b0115c5ee59f65e89f9059900c19a2f4bab7802bc313397d94bfd764b3d4a319c04dcde9cef29fdc63c006e049a3', 16),
                    gmp_init('0x83dc203163d35f8380e157dfc540bc784ae99a8c2b7ecb464c26b2983bfb726296c436fba4c90d9f56c0cb5c952911a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x493af321c5ebe9b5dce50f72581b3ef0cd61e1012e73a8aea558978e2120fe6dece16f84e373f4a06d400b7c4e6ee564', 16),
                    gmp_init('0x235969e52b960c2442f787d0ea3032b6545b50686f878ce1fd29ed0d1998c8de94d92a8303d141491a5a26f573ed77d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4745a247f7678e86246dd008e4c993689b67c88e335dd7281b5ec3ca40a526b43250e04ee3970f59d122a8b67ae1fd2d', 16),
                    gmp_init('0x676a66658488caa0d2a27ca6154d2bd5dbf8cbda5e3db623e840cbb48982241146069dc84ca0821c4eb82cd1c0604a9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32672f02eee39d1c4f1e448f6f10805de1c1241aa0ef9529c556ca42c691f0ee8e5789a8cc88041e629fb7c7b45a389', 16),
                    gmp_init('0x4b962891794ee8a3f416772f06f4f396160007d5d3b99ae9911b9a3b224af05d778b7705604acfece52e7c9c6ccf56ae', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2f62c19c58a4244f9365a0b7f707e25df0e70f05e42b0818f79fea8eecec1f0c0324d41e5aa8c0e8e81a461d28e4895d', 16),
                    gmp_init('0x75486c7ef7c60146250c97dbdd0e7c9bf3d453d1e7e04c8deb32e95e8ad6726352a986a336c82893a776b5f689574871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x646dfd23c81bed9daeaaddb45d5d53b6fcaf6b902381e5a3e45e6f3f34a8423b3803fc9e373ca943c2d5ef6cce8826c4', 16),
                    gmp_init('0x50ac8dc7008953e46f86022c07677592b65b5ba13010870322df4b3218154934c8d6c798ac19eda1733d959f54153a0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f241be9208ccc584d335e9fef1456660952e29b0361d8a07c97a690e310afaf2fa426cd526ccfec316820f07a1b538e', 16),
                    gmp_init('0x561e392f9ff5df528f16e524e0eda33f8a6d9f835d772b34da758f91a205cb9f76696640ca40deffc03c697c433006f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5817bf1f8cda1a716e8276e28051f8d760a6d9079b668ec54d7677647b60168c216b931e4e3d55b98d1436ce365b47c2', 16),
                    gmp_init('0x8176a939655fb86a0052ee6ac12c7b8bc1d999e8905ec19990151e40be4d1b735163ab5da45cc9fea1a9af393d5f5cb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60586a63c9898fa1810de9142bc13936cb450b431e37904812a9a653f040c70d1b23e6c7a44a4e16d2e0820a33f32416', 16),
                    gmp_init('0x6ff60470ee255d513a7f4e3a50c447efb06df58d9a4d913390d31725827fb6c92696206bbc6ce35933fc788eae150ccb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e191d10023a58b538fecb034b6a5e18464aa559feea4e14e0c0a674448d87f37c825a7b7b097fd89abac73eb50e3807', 16),
                    gmp_init('0x327494d9a21e16bc9886ae0d279a54e2837ef501cb6b3d6591fc7829ae9f2883679ed47793e33b72e10b92c1b277d964', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7acea101008e547201bfd3a97ce418c30f3c43c4bfe7b339cd982b15050594a0ba84b00d9e1e54e49670fe7c869c532c', 16),
                    gmp_init('0x7489ad436680edb163664c8f01a89e14dc66df6cd34ebbc05a19c6ac94f218600eabdb7f36e5825dcc525159c4029cca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18220c0a8ebe8c1eef9321f8534a83b12d2803efc278729a4fbb68273508e53acb10b734100063cdf4d84e687e25ef34', 16),
                    gmp_init('0x4a0d50cf334aa00ad32ed1ed88b854085e2bc4d64db0aab0ab64ef901f8da74c696d125367c57e555ae2284f578b8b3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x975dd3c7adbb8c96652206f5f00fd54340e83b8ee4525815a3472221f6bb9867e1ccae1836c690362e83bc8c4fc177c', 16),
                    gmp_init('0x21454694cab87137f7bccae292438f824a26a3292402c4b3981781fba346cf74500e6bd911ebe84c50e22e74a3f31ea7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76e87b220dd8aa34d68f594e561c34f2e3a5318cffd6c573ba991df67fb33e44b55971b144e87b919184690cd19e1176', 16),
                    gmp_init('0x32abde83fb5dd4d6324cdeddbdf2a55b5d3cf4d3a954d4920a0659c372de35d250217d1253cff12b2a6ab1a7d2af1504', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f1f5b47f9b2556dadbdd992e3bdd5bd6e1d732abf508f63706e361d4b7a5bb5bb23bda3a9591a518cf9cda61fffefed', 16),
                    gmp_init('0x16fadb40a32c95492ea47d41cd9aef91a60ca981ef196d6192c297b79aa656c8d4f273c578fa262cac7be7bf3ea101f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20942ab62f2f39012e9480513d0348595ba64938df72149a4531f9a164d1a50d5431b6aa937b2de830a0a88328a60d4a', 16),
                    gmp_init('0x886e18c716bf61916effb984f9be088a344b3fda27fc8b23f92e4c325004de40c512747286424ffb7657f21d173f26df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5313237b04d868c065cfef7f89fe549656c866d0560e4f81f993bf6a56fea2aa6d5971415a9979a0a695857c34f4af82', 16),
                    gmp_init('0xcae54f5221a3e3f2d4ffedde06c8e462ca4247ccf1385e7b712c870e70e630b65364575c411993d6e3932a5105cd813', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53f291b21a2954b134328477739a8287334fe8e583e6846a9658821e5b3bdb3495555e43e86f12ee312fb20278aafde8', 16),
                    gmp_init('0x71ac000b1ee480bf69c1b6eced524d1cbbfb7d07a870363a16f0b379a476adf652da9c4af94332eadddb75367dda10f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29e5419ae14c4a0e0c79577874cbf3b46ff73c4239c73cf085db26176dbd75a582cf2883bbb8d82d3e95c8b653d7c33b', 16),
                    gmp_init('0x788cb32f87ab1624a70eadd893df1d17ffe49dad1bcc42c6381000bbb39ccd4de9754b8439ddd79f1173c6d91606dbb1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4b3299ba45212a0aade6c16360cd3adda3bf211af1a129f06e605a1b07406567fb1efcd6ead801d5e7ee4d413454e8b9', 16),
                    gmp_init('0x7922cfc31cdeea3e856ae3661785f29ddf7f3e947a3ea0dd7e7e8868aff88173d0a40330153d71ae1a02c6b290f7cd00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f5b95ebd6074f545f38f6c8db1fad746cb10bf8639e0c18a9cb70ae3b92a1f932fe0bd0d7e125e368efb6925e832375', 16),
                    gmp_init('0x5f9aa61c60b89126f516bc796aec846f527d1328fb940180b34173751a93b58229dfd373048297645cee333e24ae32e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85b8cf1b70c74eb4d15a1b19cf33a02a66a0aa70e89325d3d64304168a07ac400d0a3f9570eb6977344a0e67d7eacf40', 16),
                    gmp_init('0x76da18209b040e39db09f909ca9d6c508b83be37854dd0dee5d1652825be84886f210391a39baab5efac312f348f1b8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1033403331b32f7d7c78a0c6aed1b0969f8fa9364ffa5701e82d7373d4420579f99bd1c22aeebc3668e076b1a889300', 16),
                    gmp_init('0x526601584116d3f24ac5762039aa3cb2c98a6c99da09aca3470d3ea12f9ba3f5aa3e68cbafa5792e7a9897fb863b17c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41be42b3b7694969e8e7592458d3b72f1524165548530d320625e419ea12d910b4430465299da9cba1f45d1930da274', 16),
                    gmp_init('0xdc5c55723f0c0705013d8e28082dd50a6587094b655dd537242e4da38139f317833659404c5845d3fd3d0c11accc41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x373fe833a1f1ce5c8a547a9be362c29f265f5de6a92300943da0a52689c0113346295e581c4f39af0937adb215b43100', 16),
                    gmp_init('0x5c8ec8425f797a06b9e7c55516ba06c8340c35d6028bee3f6d8e26b0ab302f98c34a1bab9a0a6f274891af7d0c2d9e05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b3013de89ee8e7b884abb20cc41ebba50b75dc2fd87ecc035d7833159449d0efa4ca10bbbcefad2119b6c9498bbfc29', 16),
                    gmp_init('0x48e2c80dca520ecf38bfb377f4ada83f4ebe8f1d5d602ced4b726084ea1a44a4e875b86948521abed205e0889f9ceb57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f780620b6ddb588bedf35f84833d14ae675db6de07b8bdf14aff0fdd07f6de80500a656cd28a2c4d7627f475df9eefa', 16),
                    gmp_init('0x14fd465231e8969f6beee9310abfc4df09e61243ffda3b981cfc37825abbd6b877701f3aa23768449d5bd9ac8fdf7a0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d56f82004de4cd46eec0b51aa333af520c3fd75eb68f63906d32c569c2346b49a5512f52cf79b538371d4411f5ecfa1', 16),
                    gmp_init('0x5e6f13d608d61403be310cb6693e141608f3b97c191edf31c1389aed9e5901a6aff217bb5bfaff6d9ddc225aeecba268', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24a9cea4df72ac769eebbeb7fcab52f276b2f1811cd3e55c63bd3ed83b639c88b91a2e919a3902474fc966a0b607e579', 16),
                    gmp_init('0x25a4de6fa53baaa1dba8655a6474f108a4368f450802514be3150242ab65bfa449e653d878eafcbadc5d704ef155e315', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cfe517898edd2b1c0b570ecc64380a370bae9abd7f8911ccb3c9ef748ee87a8cfa63ddb5667518e46253a0af7b625bc', 16),
                    gmp_init('0x2cb9b0073fee0a9ba522379f50255e1f54b371cc3e6beff1367177e3201ce968e382612567173738b184c7d2e760361', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4df75310d3f1314e93300256f2c9edc5e902d5a3e3097e014025e7d35a4b3968e62d34e61cbc895cfd8a1937f4a8db5d', 16),
                    gmp_init('0x5b811bd24531133562bda5d2794645d7e89f893b3c796b1d4b5869aa6a7003c1b59f701c0dfc555038539cf84494a8b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8553cc513821c61631cf513249d68fa40e993f0b596b64dda8e908c70fca276aa137355c340eb550ad3b4d928b9a9307', 16),
                    gmp_init('0xfb32a44da02b327653c99e8591363a4d8423d9b342e2f25240b37f5edc931e07f3a4fdea8d457fdb433ecdb2f4d53a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf4a78521d267078977001af51ea5e97fe656b827203e954c6beaf9f52816d6670e7b5e7b7a4895edd241c7bda2e61a4', 16),
                    gmp_init('0x42910bf5011ea1dfcb1e35c38fb5ae13a98e174177487b48463dc5037a7896b400ec2c068d400864cb1baa60c96c2584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b8bf616acff016dd801b84233efd6e3af8eead6e6d42b05040567cac30c6e434c719cbc4329d6aedeadab31a94cb998', 16),
                    gmp_init('0x7d98ae0033f3590239997be6ef9e5ba480b1c3896ae0f2cca4b717fec10e57bb02dda31d10c8704e0a45fbb1d7ea64e7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17b098f001b408c04e919d1520a6d015937e91eac2d30497f10804290991db52b671d61477d48794c7855356e134f655', 16),
                    gmp_init('0x10b5436f06b52fdae59d238b7b257fee783b460489a4b05c2728c0893823c804bb8adbaf939791e622d39a2dac1d7c02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21723288e5642bd16b2c2d9022ba2d805b50281be22c3501a538df1a6b09c96f1e674c582d16a7ba979af57344225b04', 16),
                    gmp_init('0xab9f081e386685a2c863ab6e1121633486bb622cf06d29f78f8b5834228ad8e5d7e10995284cd2a4bd7c50efa325d1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f884bc766f5bd3e7b870c96729cdcc6b456c912a83978eb6682a23fa0556fbacc138ae021841e0eb53b4e11a593d6f3', 16),
                    gmp_init('0x707d9e1ff2a2d2aef78405180d1664fbff400da9194a9eb899505c252bdac32270c3506ea15298633a18cd1f392816ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x295eccc8996db402bf22371743de45efec319c4c3b3c305ed987b56aee0dab44b245813570e3de787e5a808bcb88d55a', 16),
                    gmp_init('0x84fdfef91c6514707e57f9db10664166b65a2628de64fdcceee78991711cc35d6ca94fcea13d9f65ce7bc554488b4e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bf07308d5dae939158aeb94357f1a2c85ab1a80260b2579eb96202e038c9b6eb6b372de90ca4113a7abb23d1c66131', 16),
                    gmp_init('0x6dd05da6da2172ad67cc17bb7782337f282ef693a78484a8f919f0fcc5e7f265028bcc063245079a150f9f8804833c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bce251e8ee6f96ad8eaa2038c5f0787fab933b2ca879cde68fc3234a231695c681513c522dcb2ee284cb4e5576c8f9', 16),
                    gmp_init('0x4b45893a659580c4cb25134c62f9ece864dceed588887e95d4f7f572e55027c2d888fd91836a2e25dcff4a60449fb16a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fff8efe3609e5eea0476babb1753520df099bc83625a4eb57a5dc12eb0422ecca070b02033d1b9bc85d0a591e7269df', 16),
                    gmp_init('0x2617758fc18f1ff592e9d79a8b3671620789986405667cb61cfd1c80c9d2c4989ced7a4dbb1905d21f20922e63219b56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77c4a6db56febc1fb1786956ac23799fce3334784ff5b01824d3844e6c58f12454e7e223cc29e2f5f8ba2b818fa5495e', 16),
                    gmp_init('0x284acf046a3450f6d02d6dc2fc6480e41151a4a2daf70ded558bb529897170ae0734d3d56e6f1d26bfe75c3d173aa4f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x449e5f9cab2c9b305648d71b3468f35900bbddcb42b0318107b11dc87c3091a6e0e227ed2390c6f45385b4f6c8d57aff', 16),
                    gmp_init('0x67c1de74611cf9918553339e90c0cff0e195521032bd6e65018f580cf908d446472c9aa33c5e6a96670f9887ff7a90ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34384facf162fc2139b1c0c9395baa13ac47bb9c36b7b81c1eed11577c11262ac8e0f32ebdc77395e10d145bed0a3bc1', 16),
                    gmp_init('0x5aad0ba8032af71e02a62d27dea41126e68ebb4504bb3138936471282e79dd778687991b6ccf5a384006b16e08435af2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33d2de7c06dcdaac672c3c0bcd07f0bd2beb218b5627ee81bd6da647837580457065df1c120957fda39a5c43f71c1c4c', 16),
                    gmp_init('0x53c572cf4207d7c828af245716189607983c201073d7a058f26154a99cc0abeaff6f9711fe0aea3f898d06ab40686f6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58e673f892650dd07e18ce689b9280c79c816a61f5100af3756ca0781308786db521ba52dab8b7adddf759c7f1ea5b90', 16),
                    gmp_init('0x120d5cbb3079eb2098e64da60ceeeeb4aef58c18056dad52da96aaca2b7c432fe2e082783e5341e79cb25dfb48159069', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19cd789e2b0a9e3da253ce1c346a8e42e7f5799c197ac1213767ef42a19dc7d4b5809ace9a1208473193b13ed24a32a1', 16),
                    gmp_init('0x478c395ba45a11de5c3b359243e5af8603fc9a1442fdd293b54e65c9e065f54b23ed7ce00b96cddf2422978651106fa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80d70cb1b199a2730d75ba61510356337456d5d3a466b5aa6aeb0863cd7d81b4b22c1d00d182c288a25b5ae0c4a7aa6b', 16),
                    gmp_init('0x28a82a5fdfbf2b804677f960f19c41ec3264463bac1886b9ce35a8f3a1247feda3b84957d6ef63045fe287fd95c330a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d5414f74d0ba16e32c5942f1ce6e449acaad9a62e1f25eb28f72fe0c22f6e6ccef3a411b97d5fb6b45c3c88760e84b2', 16),
                    gmp_init('0x7741d09b4c33d5dca87d6c4a06a35028c022b671757d64fac737a4b9db09a0c9de088b47ef0f037aa653ffd4dd424481', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3ab33367614faba034456b83753576e3535331e5f6769079013825500d07b74136bed86c76c8b1465fc343df2ce4f592', 16),
                    gmp_init('0x179ba4378e05c57af051c4b847af1f4d702de037ad9ffb6e9c257b365c80bf7969855aa6cf3ed66ed9205e21c5d5eda8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89593781c0e5aa8777f61f87eb723f1b5b88feb1809edc87c255fa09d8e124a096d3b94910ef58be901e9cad3ad427df', 16),
                    gmp_init('0x71cf21a40b50c2478efd8f9a4453a58ac5f480079c4f06a6b40384fe77f59783cd18d2a98b3aded2a0d159c37294d68c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5768e8a5f9a1bd4020682a357ac1846c662f59ef2b90b1be20d9ec095ce83d877ea705c3a9e7505c117722a462aa8d7d', 16),
                    gmp_init('0x79d5052acaf193d142ed1209690f027be3837d4bda7e9616278a95997c6f52e4752843aa6f138f85836085bed19c8361', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6670f20134e6055eeee2f01139d84afae81cece2c5160715a308c4487a8884f8583dfab3c75d6a31e89126edfe13fc3c', 16),
                    gmp_init('0x8c15bd9a69d59509a3b62224d83f7cb7ccf8e8951e344841596ee4512e1f8b071276b53ad123e048cab57b3d7f8108a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x346d244c5a247a47fa99a94b462a55b6b607d312c34749a2931dd4da7e6df4ebf554c6598181e560ea5371d26f8eafcc', 16),
                    gmp_init('0x8addbdb69559d49a4710d1b0b04065a1cd45512ef0d397d6cbd1da19b5e24ee7528d790a21a707feda40bbff4546f6d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61e2c28806e355a124f46f4815433fc843210d6d8652cb387d1c864fab1969ece074bf7a9e4941c2b25dced8295d5749', 16),
                    gmp_init('0x2de6a9100be0181a8cdb93c37e8a5fb1e9a0b1f4f42bbacd1b8bf5d1630bb35402da83cfca9aca98451b2eef8598f969', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c684d15b41986cce7c0e91c9dcbfb7c47c82269dcf0b7c3da47fcdbda9fb8f21e1ac04988f9b97f04263d5b96a34885', 16),
                    gmp_init('0x6f1b965eb97a4f440ec082448a4803f166009f59eb74eb5b5015c3234d66296df87775ce4264dac52a749fb725c2e233', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1fb5d2bcc9db0c85364d0ad2cd7e2c055d07197f5116d0e5979999541bf9eb59990ac2216b81de781b34b9fbf75bce', 16),
                    gmp_init('0x8f8c2c1921dfc7138b0c5fb23ec566c0b32a9c3b089bd2a83f7d50100fc61c8dd5e90ac17d8f405fab9198e44bf69c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54aba60853164cb4078e41ee9aba4e4c25b146e526b0591088547c0c21e13e28015bfcea2787bd339479595eefd554ea', 16),
                    gmp_init('0x21125a5f03c8b9b6e0b4d251cb4a8822cd2526c33eba70cded56855e4cad474174881776a57645a327d5d8287ac93bb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d68907b209545ee9ef2350807a159a08618138277e86f7a8d0be5f0ede306260ea3824a8677def2807e66fdd7ed234b', 16),
                    gmp_init('0x7215f862f8a6e1cd7c16adf08fedb846d9da0405634c4695bb5b0a488fefeacb14e351ac1f83f9286385c5f6a1c09f8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc3ca8bf2ca5741267ebd860c94b8fdeb6666f4b1a55624ecb88d2c78bbb9752b210dd7d7d832333b7296b4ef150c68', 16),
                    gmp_init('0x261df3d5e7f5862ff5f9e03011b96b122ec958c0c8c5b5e2ed4beec7455474ca427a78f06b49218fe77f5230dc92f399', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x281bfe895ce7a749cc0d4fab9be087fc347ec059eb362ed9007adb5946594b747f96343b03bc76db79513646f2d7861c', 16),
                    gmp_init('0xf99679bcf090f5161afcca5dd31dfed41658dec589796bd675eb3d896d11e8078a1a3702adc62819181c18cdd3a4c2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63597feab6a3d3293a9cdba1b7f3bb4b339c09c07886d06247bb3048216b52e56453ef5bddfbdc88f1b14cb8571c7c8', 16),
                    gmp_init('0x381b0386d3d7d4628099bf9bfdf5f769482a59ca56c3f6f21c330741d5b8ef6a731278db22eda1b9c72852f8bef53e23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bb4e13a11e606c2501332c70de15b3b777c886acc6fc2b0c293004a657274d614574ac24879deb3c3d51bd7e2318bab', 16),
                    gmp_init('0x91ce652a2ae1889a6254b89238d3931024b6f17c0fbfa76301a4a4479294e3f2016e6d89aaee9ff0b2d229f870208fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f206fbee118d294d081cb18d6494c3de20b99b3f524962a18cc8ece36654de6d025c037c1d72e287fa05c03d5e9e6bc', 16),
                    gmp_init('0x1cfe45db7724e8114f09ead2b9096554ccc044a8be2495f7df43b7f26d04ce273b6dd33be48037d1def3df7ddcc10c57', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x858fcf23e391a4405596862e0510bf06bb075e0d62968abed7a828dca54f5fb7939eb5e145b4d64f3bee5c7406a03f1b', 16),
                    gmp_init('0x2fa0af297fa763cb829c9449b7d71b078d8d56a64e9aeed82f1ef37df9e08ad707df2ecb58a4249cbdd11c21e089df2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e2442ebbdc9222ea7b96da92dd104d14c45526383c43ea5f38359d357e8ce0812f7facc02a5f88dd821af8999f98824', 16),
                    gmp_init('0x5e8b71fd6f34073d17e3ba6ecd88270d88769a145d5678f0619339acbef124d78521d5cc7505db012975daf9b0e76aa9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x596a4b08c6a90faa1fb9be0c3e1b153623d4f8f324106f85bb03736eb6136fb6b875ab8c2f686799c7e7e4af5dde6e3a', 16),
                    gmp_init('0x679eeee755cc05f91c35b1064f2c8ad423710896a8ade40990b9b9a7890d4c6d012a295584470f95cd3492080e3cd407', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3d019bc744935f49651a62dad98d80d949f413bd0bd4dec3a981db4427f7fedbb2a807578a48d98eb6125c850b067f', 16),
                    gmp_init('0x2ef0988fc25d93756e9bf1e8fc07ff20458c03ea452357675ffd4b1fefece7ee2515d3ceee28c2d049bf9f7234e10669', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x370d10645b745c5989c6f8a215442c738074cc243145bb17661c438dff9f890d189fdf213621b3c636c782ae4c1c0a6e', 16),
                    gmp_init('0xb253ea2e9739ac4cab6564780f3439a80593505216557e62fdf308583752cc7cd7a866cfeb5ab6829a51aaf43361265', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21c2e1f9e4f6f7ddf41bd5cb9c2d0cc622e76816a7ce9f442c57e5b02dbadb34435eee87e0bc2150f82c9dce8ad1f650', 16),
                    gmp_init('0x40d8ca1cfc5dd6ca9e353635926b44d97241ebefeec3161c2dd3874b1ea14ced801ef8861042c80851305f0b7f07d54a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6346da5df277115d97dc14264e332bc2f931c5497d6d28bf0c8a317840f14fd36359a6089b44f563bcfa81d7f0669c22', 16),
                    gmp_init('0x8a38bdc2418f4530112f257da333a69d93792c769f42d230776b6ead444c9dc59e43dca4584fc33c71950f4d32e53591', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e2911ab6549ae657bc7829035c512e314006b013b0ceb81cc308709753c11aa17c852d02a541ec92d835e2c26c737bb', 16),
                    gmp_init('0x6bce09e135dad7b6a19dfc1ea68898ec11afa92b73a9ade152af83cb0f57b7137e6d3f7aeeb4a588b77bfdbf65b1088a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e6b22b3daaa7f94f9eb4c7b937fc6270af5de14e4ac826189578dd82cee0f5525ee327d5865b59f460c4c13a110a836', 16),
                    gmp_init('0x5ccd779637a29dc0aed2e761b64f0ebfdea56e324d7da64796b0b50b17e2c9ddc8474fb0a8ea712337340f9182150dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x337ff57784f3dab398670265e606951793bacc7ec3ef1696dfff1cef4163139bb6c6ef9ae943df74031206ee7e0fbf11', 16),
                    gmp_init('0x68bf443feed245d776e47f5b44f811b2b608c747b0ed07423621e7d911050735a3725e356515239f9a9e888342a7b9ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26b61492b25ae26d6ac3f439c2e721ba1b29c4264186a77f0839b1f05f686cbac8d3a6b40435ab79527216b89966c575', 16),
                    gmp_init('0x6928f9735d0e535ce0a690a6f415c744e3a558487d6c2cdc3f05fd997b385fa70d4fae95e2220c76bb73a79ac02b3dc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76d2b29da8c1fbcd52c28c72951ae927da999890af84a6b0cd9fbed8126822448e0b5301577667413231c8170459d013', 16),
                    gmp_init('0x38d87393fd60f1d702216ec4951e5409281fcc46d8ffee37b2305590aabc457cab2e95d3f21b674c58858b20ee170580', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x452ac78c2a712ae6dac1aa5f674cffa4da255ba9dc410061de9d76691d9efd61584b74ff05bda5b3eb36c6659d222621', 16),
                    gmp_init('0x7ab75e8e94cab75cd1893258faf0a22dd190cfbddf8edf8cc12563b06b82b918839709b8d911921cca8b8d1011499752', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42c870e039c154d58106e62b50ce1f4b4b0769c05037784e4bce21ba9ae62ba7acd15227e1c139b1ec7b389a38c6222c', 16),
                    gmp_init('0x4ad049d59af4fc40ac095eb1117d714924f4ef62b8834124f0d211bf7a4a39324dd9e4cea4807cfc697a7bd202e36442', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x331dde8388f337e53753393643f5109e4b858ca95d62238430da9a3dfdac0e5e33d345ddc65a14cdb4d1faef498c4f07', 16),
                    gmp_init('0x4c8d97e71b9c5fad8dcc7b31b2fb6ef361fd4cea5016e9a7d8032c57a5326fa587a7e1178c85dbc1c2563c570763b4e3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x89b51479ee073b31bbb47bdeef1abe626e9a9010c387fa24b9ab3388e73cd3c3d462afc8e8e1a84838a1c6a82376ce0a', 16),
                    gmp_init('0x257d89d35c43d05b02da3b92232c129050031318ff53a1416d82a7709d453bda14adc0b0f05aa37fda0934a0c96ab132', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2c62b0db03676018fe6af1ce2394227a49c94673857cc206ff487c950004817a4975e3c92719a79415107f3adde473', 16),
                    gmp_init('0x2637a77df43a19f6b4f6e6635adaf3bda82ec121b057bbc90a82ed68290fd1eb51330aa1ba7b7544a79f5b426fc7be3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d6e35eb7240ae6cfe4c38085ea9139e69c6314b8a3417e9935fed6aa67d167f7edd0aa3be33894bce22b0b8d0b6af07', 16),
                    gmp_init('0x4082596c910fb03f5213234b795d7115795991b4e96494181dea98e33daed17933e88ca5a9575cd6dc5b67037a47e42a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4210585f9e136f0ad54c398dc1435bd770e688e9433b04e2a21f944369b199436a528fcc43d32fb0eb85435be6316a3e', 16),
                    gmp_init('0x4fd90dfe67ad534f9329331dcb5b3affa853d272cbd8e4ed8d8289c375ed3f191c8507de910416b1b6dff26f2333b52f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x632836d344f42af168028287076b1e1add27ad7a70a9475971384dfacbcf35e226e0c9b869aff7528f0b8874dcff6041', 16),
                    gmp_init('0x52d198ec62cdec4dd57b430123b493fe8dfab32f1ce1826fd09cb344e29b7e041b97741ab0b30c6118045193793ca84b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18412e23b184e5f5575afa2d7e1663bdec5169150d9311d3be9715646a1749aef769a7e0c7626a4b1b219c08fdf5124a', 16),
                    gmp_init('0x87d9872b51abba830de44abadab40bae76cc0b0118604cf7ab24a2ca9540fe54d3257a8f4588ef2cea0015dbbd657738', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e38a892df0a85f5dc8dbc010e16a68fd90c7a40a954938fbbbff361a05fa635605e8a34539ba615e03be2e1896d3dda', 16),
                    gmp_init('0x45b726515eaa3a63ced5d722a822017c8848addd44f4a65c4ad912739a61f998de0af0d066260f4836afa159e21cfaf8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe2c0d85fe6b2237d3b7507c7a54727b50ef0d215e7ba362a2387ac786855ae78a2a67d1de08ba21b11eba8747791861', 16),
                    gmp_init('0x25b3f88a9fe4f72b220457574a2fe39efe7608f4e78212ada4729327d4b0543f7b93e914bdbf502b4aaa968c934cb2e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a043e2a47ef69b8b5d936f66d5e83aa9d67a743737ebbdeb9d7497344f11f8bade4d8be475c01ea9b6b67c83643b3a', 16),
                    gmp_init('0x4e3504a2ce4d092045a2114cba511763a4895ef6a146efdd8d9449a9f97ae6c0f526fb14c8b10e701c550c26dfd12bb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d44ac951f58ac0d9a179537e5c6555310eb9bf14c66a3f7f9e86f6efdb5ffd8af49e57ac8d6c56821b4acc57d36355', 16),
                    gmp_init('0x48aec7a0e16cf380fb95c52d91c7ab276ec117a0174b1eb88d5daddf40887bb4bc79a8199e1557d42285fa8b1543b2a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48112942ec8da2668fc614a4f75e96366b6d1a72d90d2f48f539f8b737c2bf14bda8eaa239006d5c1fe0a467f6569aaa', 16),
                    gmp_init('0x24c70fe1522f855f28676041167bf261f7305764ab02bebc26e2dab2b4bc0ec250019cb83340e310684110342a486fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b252e3a3cf4c32c0e6cc2c48a75401efd5a2b0d31ca7ca849a3a5a29dc61da23a1ba60e5415ead14865387c40a537b', 16),
                    gmp_init('0x2d13dbbc62760b02ca530cf396e2ab546810f8f5f0d23bc43cfe0cb576b640833b22f4ab134c0dd6f34e845db6da62a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15170883ada1fd9d7a2ca36f56431ed0f61e8cb6225f98c4c25008fe74a85685aff0e8e7521f2e651e5ecdc4eedd68da', 16),
                    gmp_init('0x548d3be9e59bc5627588307c06d594c782a169c5b8fca0d560b61aa1e408b9e5980a915b7c7303c9362aaec89b481cfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89fc7c7f5dedf5595d16ecfa0949cf8eadc996ec93b1dedf947933b5ef94da7aa5f4d97f70255d5ffa09a064070e9007', 16),
                    gmp_init('0x8210590828aa8b86caa09cba7b2c5e70320f8c520f7b3405651248b4ccc5cd3d476e63f0797e837cdde9cc9739283150', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e342359d40ac8b92dc8344d2fa5885d3e048bc1b1f6626820f5afdd3be8b99576dc67257faea8ce551412a73f7ca4f9', 16),
                    gmp_init('0x14c138a6290feb5013c4b576e833562927e3915f33d776439cba41788cb441221d99b85696e0f8acd48e2c761bee2ad1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6805a4e591bc5e5d736464f23410302ecb949f8557176d8bea59b702b3968c2fe49b964240963b623eabb6097b13de62', 16),
                    gmp_init('0x683ada314da2f247d58e253a999e3daf3dcfa9129df187b983f6b281ad438f1feb1a73ba6ee3308e74b19767a3f51e56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81a4c98568500281a92de1d73712338846620f6b5ec865bb1303f137012c898447edf8069f6cfd02f683ba739af4972e', 16),
                    gmp_init('0x6e1eac80b7bda1d1803afccd2abb6085867c96ed8af78285dff174b7baf6ee0527d19b194320b75bde619782acd126af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a8ca11a9c58ec993251b76bef1ec41efebc0defa75722b7b4d7f49edbba49c8953c21772c46ebf5959bf692b370e43b', 16),
                    gmp_init('0x1b406a9aaa18d51b43d0fff7dee349cf7f3b9e733155727aad35a33154276772c0e7d48488fc556b30fa161c03c0e0e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c0112b26f68446c96e298026e9fd4df3222928255d06a798305f4e77c3e43cd38dd6b5ce714d71c2134fc6567447d12', 16),
                    gmp_init('0x408b700ef3e23652403d946774ab16642ae380f0bb3a1aba3680af70bfb930a070921976c07f940c3f4c1b34444ebb26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5981dc4cbee2304ddb28dd18359e104743695c24706b313827e94921243e1a0022cb555dc5f6838f9bd6e8f68cc3847a', 16),
                    gmp_init('0x2f885eefc03c1982e93314fabc297fb7516e16cc15d0b8428a4b6fccbe9264693aa7c762c7728603a01ca69b5584d05b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9ed1f504a004645009e3451240653aa2b242d48c1c528ccbf4d6c4a4b4e6a3fe2a7ce788f9b5452c39e1f6462b872f', 16),
                    gmp_init('0x36801321b6266f503cb1fe25f7d23679d815d951316d2eb214c6860858d05b5bae2ea66d51bb2df134da6c665a79615a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6afabc0b216a0c4901c83856a9f69b3ede34882596c44480e7eb8b4d15d70087175839cd59377454f3d0c1b81cf88672', 16),
                    gmp_init('0x61cfd9056063cb77a82b06c24f10177626cb40b75161d6519d4a6c212dd1e845568cd1b11c79314c84fc39571d94e621', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c6dd7a95555bd31473c4936733822a7c923a98f2e8f7d59d1eb4046393bc1cd4e7932bb338ecb1957df9a1beabb2252', 16),
                    gmp_init('0x101af4c3edcee94541d9f7ab5f28eb3c71f44530c463d8ef5f27e4226527a6cee9263860f5e3b96035f01dc72bb7de7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ca24e32ce744de2d0a183d7091d56cbecdb648dbfc197c02450e13638807ef3eab4e8bdebbeaccc8af5dbea27330e55', 16),
                    gmp_init('0x6c06ded3720efae51e8844c7517b5b983e848216ba25e4b4eaac3d175e6b0b9db967bfd5032ac05cdeb15d29268e5256', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5538babc2c600aa72b69ccc57371752445a403edac03e712b8af343dbf76dae57f06984799d08a360d2dd03a885f77f4', 16),
                    gmp_init('0x72aa4a6e9aa7d58b163dc77142b94906602af7339087b85916cda264e967a907bb0bb8af3ee328fca3950dd22b4a8f0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33b4f5f3ecd2f32ab1da4f2c2289749fdda943b9b969345be901077e0495cf0824954ee59636b1434db83ae53ad7a667', 16),
                    gmp_init('0x8c1eea4c770dcc667949ed64e175d1d7b81dbb5a50ad3d6d56fd1218cac6cf91019eff96cf8cd1af184932fb67feae66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23f4978377bec523adc2ca054f30069d1c22f22424cd709ccc7f69131a66d0035190268f64718427ad78f595bb717e3e', 16),
                    gmp_init('0x30a8ca661e29b81b3abdd90e1cd0196c5393b625d76fa33dfb348cd733ed094294c306b305533a487945fc37dd38eb3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60d2dde716dd2ab393771f4932624ff3bf14fd84d593ac42cc82143af717d241ef41c002d4c38504a07960dc6a611b31', 16),
                    gmp_init('0x8249d98aff116aade44b16219ee9f4f4413aaca6e813618be63c130746de7f45bf8010baca022e37e308f69b5f6eead5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15430080f568c1f2ffc4b82c86ff1918aab466b3c0d8c1bbadd8f7a8c9a401e68e12dff8e48dab0db1fda04c6f80bc57', 16),
                    gmp_init('0x144f2a2faba62e1d180e7536de6a392a24adec0361a811f52bda962f0abd5ce91de9dc97227b8dd04cd6e22a9bbcf8e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a88efdc0a95ea189aa8b9e44da62658f21d45ff8ff6014206c2dce15e11602557dba30d8a247625e6208a99d9aefbb4', 16),
                    gmp_init('0x6cd3df1ac3559c2caaf43a1e1f1537af18821d7f6279a0fb6e6cafcc84dfa9aba6ac102a2a41052907d7c212b78c6bd0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3951f5e6c1dc385086b6746891cca16671aa9dcaf72c37dd678fcd6dea92645b7d631dd4774459f4cb8b27be222b7f5c', 16),
                    gmp_init('0x5a2e9d3ef2a84da630383e8fc5c466fdf1491e13fd475dc23e94d1b4dea84c2636aea84deffeb5d72aaf703791065f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53c59da080ddbfba6eb467e7b6476632eb281b893580639561464ae7ac92e1df03eae63009b04756e155ad9f79224d34', 16),
                    gmp_init('0xfe9dfa227077d1683d6e23eb2512867cf85da326cfe4af9c1f35478f0ec023251bd9c78f12a591bc9222dc6107a4fd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ce669bbc8312c4eaca4633dae2c86d2343e17470780837d0d2a51eba6151f94e3c805704ac6981c113aca6f49197403', 16),
                    gmp_init('0x10c2c0774d4bb0fbde5394bf3bf65425dbc929290042412485ff93f79533433b9bbf69660b82ca05fb0584edeff44032', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61481a07df7547dae8dde0a3fddebd44660241e6f804a82a2dcbf9db4b953d55e5b6f7d60abc1c1c13c879eb2d8a848', 16),
                    gmp_init('0x33b7eceef2e92c39a8aad417cb2cfd8dbf060cd9848f740c350065db57ce5baed646920aafcf0be8d9d57433796266b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d401f8826921d0656b6ae917016de746fc92355255b0bc4f405617a202fa98e2f51a4cab3f20247e1bb760c5c94c435', 16),
                    gmp_init('0x8b1f5aa5d0d10a9fa8359ffd40bf565fa20fbbe98084673ad99fdaab5dfc7c82528d3b60e9ebd65972fc88fd3a5c4c96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c7b0ce6788b46468efad2dc78600f331ccc1e55ae9ed70c731d21fee0fc13d5366df271bee3b81222429f8016688670', 16),
                    gmp_init('0x6d7be346c56d6af8a2e9128e0b813e7f6188c7003f414c0a848d9ddf4943ca814bae55ccfb951613c25573f009d9b62b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x243c25c830dacf058238ba99d60b51dfc9da8119a7ffcfb5203e07e4566d17cc2e85cca2f5977c564d8d78ccf8e86a8d', 16),
                    gmp_init('0x25e048bd4eba5366e635a08526ca52510c52b95ce06852cdb40d61a41c6951b49a4b6e275ce0ef41638bdb5e7103a482', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a825abb383ba32dbbbe46e4678513489025a35042b38c8b2d0f7923a0f5d2376a31bff69347d37c5e43a551fe822628', 16),
                    gmp_init('0x49e355046e4871d1d9500b9e0be4157033f1156d6d16dd8c71928eb679ea14dfc545de9ef62ed79fe565e7d1dc820550', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eaf72647d3cc4d7637b96819d853890e4b0a837fa77ed9eaa074989c71f5a74d0e1399d2efb6c1bd261b29bf0d7bbfa', 16),
                    gmp_init('0x16dedd4f82c0c7c6cb3db7c56a057b816efe4c4d6febb1a50d7903fd0fa5d3f2be8eda065d9fcfe5d685655a6abdebf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42a3ddd2c29a239ae485e285cf1649477f12afd7d1dff78295eec4a1447d9f9d0561210b858ccc6a65fcdc55434b678', 16),
                    gmp_init('0x8033b8774ed84faef13394970abd9e314458c7b2ec79f0449ef4cff9b192879c6ce9453a04f89352cc952e9c8b649e41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b523497c909b510846f07958eecb096a009f25d1518cdf436b6284bf31a809129d6cddafb80a4afddcf2faf0210597b', 16),
                    gmp_init('0x81fce2606334f89765f49e8897c0c8fb7c7f062f4ba95e566e52b647e973d396252280719ca3c7f1a39fde5199cc289b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x520303fb11c0f330d1be8134c0ac0a76499606927aae4ac074069918b434b197e4865815bd57469b89999e4d47faec64', 16),
                    gmp_init('0x58ed93cca7ece6f3ee08ceb66a35a6bb66100c9cd428a4f5194db16d39697992d19ba62322a04abb10fc0052953f409e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41b80270e68f3f04c98c70f72b303806a5481851c395bd16f7ddfa23c1e602d60117bff5d3bfdd034ae15f2af3debf1d', 16),
                    gmp_init('0x5c9c5207caa9b6869dcd663047876f0fde02590499ba3bdfb5ac1763e98d6afb8c27040d20d8544c4798199d0d11fdac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a6771be4a6117fb95d7ab687eb3a078a10863b0ea99560f802ccf12ca35ed4516d75937405132ff0c781aaf68765406', 16),
                    gmp_init('0x5feffc5b3609e2557df466012de3a3bbf9a4cead81ae6b9383d137c7737ae4d52addb4124ecfbf3c0a8011a357f001d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x533041bdfcd58a009f647cb40acbb1137882c88cfb97878fa88f97d4b9876d7cd6747a1171768890c0231040e11f8c6b', 16),
                    gmp_init('0x53fae4da8b35d48235ff73d5fbbddd605d7888dd4530e3664c81196dd4294550cd41dc712f8bb03f04e165b0ab24660b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x25b99e99d6a7a877244625eeb3361df54688909fe2ed76a9a15825d8144b3a5d1f0a6d090246e94bba31394039f7a871', 16),
                    gmp_init('0x44ab5f55596f4c546711fe9f074db5b4cc959e6ee1cf199dd7a7f0198e862437c1a4f43e5a6b033c392584985f772713', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54ec06b377f6825f029dee779cf527b12a47b61b36ae07a1e2a4fc1a5ff43c003cd70d73cb5748e1cbcb275ff6ed1cd1', 16),
                    gmp_init('0x579b627bc19a1973c73442c1c5b2021c2622d739070ffde07e6ea283b53ba2554c2b4d9ab9098da7520a7395b9d2330f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71d64f7639657fed552ad2f42bc7d086f4ed3436bd99aa6934f49683a471005b524f52548b3bb0cc1dfac71752296ac2', 16),
                    gmp_init('0x175bcdf04e4554ecb33e480c8334499981ce6fb30064a2609da82d501e86000ce71caf796262798c086e4541856b44b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13d68623184e85b769ca56ecc41743f401898ba580dbd387f49a11c177cfbbf6d1ef5941bf566a53742b6bdc4e64fe2d', 16),
                    gmp_init('0x8421ad994731cec2ced02fca801f62ad58d111ad93fcf29dbcfd62294e6c94ed43c29d284ebd9a59e2f84b4d62bbe312', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a89a0bae053887aa7b6c42728fa03f6cf93f81feb688c1790560cf6d87bbc5fc921f3c05d0ec002007da852af580e57', 16),
                    gmp_init('0x45bb99108158e9db4e301bdd47c7e23aafac126a5fb1c689f467af4a17ff9c505c512087fd055762a13482e92d0db98a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ad5fceaeed479b862978ee4460389c6c79d126027d84711d8322b2d938c1f6c681dfaf0cf3d7721908c969a549f64ce', 16),
                    gmp_init('0x3d865700368de3462f8361cb0b8cc71c5a61793440db848a1512d050eb0b14cba697d0fd536e492540ae5a6b263f5b63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3210f1eee5bf171901c4d23b62e0ff4e23b69d25979cd10bca37518ea33d8e8248fe799c045c923a9b6403b2e694967c', 16),
                    gmp_init('0x27577c2688e5c7b2a508554432de5fc2796e08ad99f7e012daf4ff84dbdf04cd83a7ef0ab0ca694b60c1626b5a057aac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x523f6de663dd2ecb66b0d9a67249ec54a86364750e5c7b996bafa3d0c4a443f52255234526e5b5280676c4d11ad36304', 16),
                    gmp_init('0x1d5fe04537532f3900b64987db900fad36fbeefcfc5dcff862f44eccfb3b82eaf1cdf718869ec1a7a1fe205ef06a4058', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18ab495acc089d5156ba71a247e81b51a57e8508c8282cd5bbbd3a40791d8df9f9bef07e32d3fe98ab859e3747f9a3f2', 16),
                    gmp_init('0x773ec532fa2cf0ce95b9112c8552bc782f0a0284ba96c91e41eaf6f5fe543598b1facaa78dc48cd73f528f90657db1a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x323e07dc107835e0b33b3bc85753e7c72fdb1ef2a36ab8a2bb072bec1a7ea9460e2e92ca3363925f5552b843c3397014', 16),
                    gmp_init('0x4e67b68cb021be7789425fc302044205066d1543a8eb2f09720b183f24849c50f07bb4cfa270cf792e2b392410f370fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x674b12ad9e8ed106ad94e73b33e8a143dcb5dcb45b0aed4ec62f6124b09660c879a21249305a2106ee619089a137cb5d', 16),
                    gmp_init('0x39f1df4d41f4c366ad95c3e4d178264c9e9b80dcebcfab6d8df30b3d1667cd855a61c9d25c0bba5e926efcbb82e7efe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a4ceecf6f6543daa07362089981155cd95c0061bcb5902d7239c57d13a90f2f6dda71ec713de5f42c0ab41909d6b6ca', 16),
                    gmp_init('0x6cde0e7fa890767763477225ef8a0090d1b304026622b0b5aa6f6035c6e4a52fe8f2c266c0cc0cf2dc81991c192f2e4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b9fee68629987841642aca1faf8fb567e90aea8f9d5ff4c92dfe6b59ff84724846cdee237c2200a4d234b9c62787004', 16),
                    gmp_init('0x84e8f6bb44eb911d6a4a372452cf39541b358bce6c043c67abbdfbb7d94c31af9b4ca45e26fda526fd5257523814e5f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f5033342d2bc59e8ac42d12120d90ffdcdb4496cb409dc787a867a5eb3a39d06e6a238b3140bacd314c6cb3782eafd8', 16),
                    gmp_init('0x7b582fc82b142f6b57fe87dad76a651bf853d70a8b6c66129b52474aaa7f359ca2ad64b5e5fb2fc532ff985a60640bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26015cf7eac26c38faf40c37c378d57a29a61cb0b0b5e4240df66d10b1db5737c8d83ba219c657283cb2fc26714b7cd7', 16),
                    gmp_init('0x77ddd945bce154c7cae715fabdbd913d2498a972b7eea480ab5d06ec65b7a24f6de230cfbabf80185a4a827765913c84', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7a8bc347ff7bb4804392535b8d04d8161d5ed990892e1200f2cdb8e4bcfef800662c05252134cd0d5bea83b9b51d502f', 16),
                    gmp_init('0x4ec959dc7cb2b961adf6dd6d09b844cfce454d1a581736ec52d7fb1bb537d160880d24aa26c02ec4582ef0edc3a28c8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8170b6b16fee2a118afb27616464a10e0d313456aaee1085aacda4902c4e72ef1479e4995c102a35f4be46de0d6f0a07', 16),
                    gmp_init('0x47765476480b82f1d24a7bebbc95452f573155b403f3ed2a9922b8ef6787211186b6a68fa79eaa2b6c06e8ca06af8afa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60485067384e7f1a0fc95562baa42449f6525a252f6c5e874e6ff6f5304ba3bd1c1f151e289c118679d30d151423043', 16),
                    gmp_init('0x44222405b0bbc39cbd4da4c8c7785646a9c16d7c9d4751dee8f8f8ef30db6cf4f589bea5080ad1100f75a1dcf05d93b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x863a3e5bc5f4676d93b3d3bca718bcf0f2eca063bc4b02e167c3a5681aa25f4a2d37434d85fcfec9782d26b0154e386b', 16),
                    gmp_init('0xb27f04f1b1412f9c9c07851d793174d0cb24cb302444edef3caf0aefeb309f6f11aa7242af385bd62b40930fa24b25c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e9d8a4603a02271eb7994e7f1830b15cf8679091958d3ca65a8f74c7df1a3d8fc89d06ba24e8915570da65a1bed1e2b', 16),
                    gmp_init('0x830815d1c046608805771c36bb991a086d03537c6c23a89fbc8430d94c83e788db5d0f6bde6bc68d14dae71e5e4bd97f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x739ab32cf4b4b367ec0e3edb503c2ea25bbdead735a1432513bb3a5b597e8e2a0df6f2eeeeed74616ee4322582844169', 16),
                    gmp_init('0x68e830387f97646768212d79143a829b6b3a3a57487ac754aabb1ae9a8005fcc453423496843819b94eccf2d6f1999f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3329c1259a33751db509c3593b21083e239ba4cdc832f2a1c2c7773f81e02177e08dcec2f0e301dfe92b0197e54fed99', 16),
                    gmp_init('0x3140fd44ff00eeea01bb33cf84644a4cf81582a5d1e44b3acd2967b4f566222dae2eefab7efb4c616388b3bfeb27746b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56ebe256401f37cad52a989baafa45783a0abf95e34e92685b214544b348d7f05095ec8ba9029304d470f955e50a3152', 16),
                    gmp_init('0x78e42765494613302515c32056e22a24de793e4128b10e9dccd829a21b201d58fe63d76ba8772fb263780e65809631f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37c7ed738757664ddeea568852436c9da4acd9a194593663092b5df91e4c2973461153c80d81e4cb38037016a87d3335', 16),
                    gmp_init('0x1125255385ec3a958e54d893bdbdb91842fa18d0e0666c449252ac9eec8146373db3589f5e530cd09e8f4f4e28fd5313', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x260123472adfadac5939ea508f4843821a707afa82b56f3f4e0555c41e372a32512940f0f2073c03565fe045db0bf919', 16),
                    gmp_init('0x7ec655a45b5bf7307c884993cc906744b3bb4e6bf95020a6cfab9c09200bb127073b7208a3392bffb5f69266325caa35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f48ce68a94e1fac51bd9a120f9795c9009b9dcfdc65ff894b89deedbe88f05431f8f3831a2ee5d29dd33b7e4e46ad0f', 16),
                    gmp_init('0x5a0ec2e74ab9e069ab24365599e184d4ade6cdb2b63693fae75b3bf798cc489a786086181be766c6be0dc25a0fd1bf6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c923807c67e9a537f1adeb8a02a30e3cfa6d17b1e87d894a8d599e450c5df6efca4c9dbc6d6f183ecd348caf3f533a', 16),
                    gmp_init('0x51525a5697e67da80b402749b1d91a0b2958da4f205a2c1be3739aa5b3db023cf71d7288c8c7b5588ab2caba3bb682c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bea6d7f8ab9a149116c78366a65fa7967d4bc96f2bb71c55620a2429031973349398b4622c9eadb305450da90cec6b8', 16),
                    gmp_init('0x4c2b2f49b71741d9cb70b76561176347ffd10e1f254ff45c033c98ce3f293574a9369a8e3494433031774786846a86e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2133d5732ae75a3886d68653616e7fe94c5122b6a2ce5e01b686bff94b0f109e5bbc5f38094f11e6034fcb9b059341cd', 16),
                    gmp_init('0xd2d444cd0566eb4faf690eba51534155b3b27609b5fa131208aa92837ee5db0f7108197e907ed396027cdbc167e122c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8aa0fa995901c5c0df3075e349144245b7e815561f6cb82fddd3112bd0e67605d8beb7b6fab5477e952363d9002428', 16),
                    gmp_init('0x33ff4e80a6419b9d264deed7ce23256297a9ba891131f5426fc7dca8288a707b4e3f4c78cff310d00da102525d0da64c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6453cf20383e03b9dfbc5be0062a307da8a7d4731ecd874679d3a307cb02a101b808dd5279ea1362f07522423b381ad0', 16),
                    gmp_init('0x77eead5563b1f97cce89360bce10467955146c07f9b15f55ecb7367de2b87d114d11448299729fc61ff968f39513fa34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4145bbea15f71c0340a87fb64b712171bd97bdff50c993c53502475dc0cfafdda2c230406ebce1b5beb17b23acaff8a4', 16),
                    gmp_init('0x3a9dc0d37889681d75cdefbcdbbfc2c135d84869e15ca7322f9c9790612e6a229b48337cad3c8abc9d1450345d72a60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a037a9603a09814b5ef309d6ecf2fe77ebd117444cb89cc395a745bdc7ce59ff7fefbfb89307e3a4a26231a601e8e', 16),
                    gmp_init('0x3512e993a85efbb5ff806074f776bfbf5d19e1e8e644eefc5038b6f338d5900918ebf825ec1cab279fceb2eda2cd23a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f2a294ef9e889332c82fe92c4d2d85242ecfeec05ffa6b5aca77ebdd603cc8fc3c3a88931b063f8dd4008add9cd0181', 16),
                    gmp_init('0x1032771f503126bcd30d6dbaaa7a673813519cacd22864da6a24aefaebe3102bf3cadb7cc62f4c71f2699912b677915e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x466abea5b0ded88d8814d965686b123149ee74d372f0d891838cc9c5fe941984277e76ed338bcbaf091273c27d4a64dd', 16),
                    gmp_init('0x242b7288c48a1b64c22d28c656106041349d5f576eade88495339e51cc2869ca656cc3c30075851836b5be7a897e1602', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33a6717d927ce169053665cf1c946151ca5b019f789809a9ede2f3a232bd03e0f72859a7718c72014333af527485b372', 16),
                    gmp_init('0x2104ac773145ff0288d6d7a355180c2d1c82ab7fd244c6cf904f4a4d3ce063d90d2ff7a261559e58b63dcdb59f0b559c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68b2ef97541dc628fd678deba178047d61282a22f21fa899faf0a6a8af66e90aed51719c1153e9825ffc49860bc72e47', 16),
                    gmp_init('0x1bfeadec45748f9ad21ae015c040de10c66e82c44c159756ae8b6f923b61bad696ebd1330332bf4f3bb5cf29b24426ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62178b93e6423acc5c5a003b15053ae07f046aae7eaafb9e396e8cf7b5b4d2eeea4abca2e604d6d67e5cdd6e04b8b1b9', 16),
                    gmp_init('0x3f71fc878f43c9fc2d2837c4949e5632c2c8474c4bdcb922cfda58a621a462eee39589d584d0ba049addb243eea9a9d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbbc6e08144cdbfab5367020c9a32cc130e9e97c2e3c3418ad8c52f19670dd0642dc2177eaac623b4f1733ca32307b16', 16),
                    gmp_init('0x6bd99a63c11838474c7372ed5fa321e6a28e05749bf713ed724e23af0e848a9b9151151e0c793aac5d539cdffe89df6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe24ababb13944961918735270c0b04664d1503b9bd5d5c82d97eb1c94c5e94de13ae98879b6243878b1bd6e3f6c40b9', 16),
                    gmp_init('0x62bb13d85f3f466f809c95622ca0f287abae56085dfea4909be15426f2d0f6676b730370ad6e8b241d64e6f09e669446', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a6e566ba7fafc6a0f97f1647b45c6c5974f9b8f8cceeb3d511230437a3d3e6c8a836d1c4caff75b7698bdb14647804f', 16),
                    gmp_init('0x37f81696cc39ad20b805fa1ac2ff980f5e26b6fac7a66e0d3ceaeea040758555a80aeb301e8282ea366f2834a272ec80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51a4912c91eec15a6887491a9396f658fa2d6088894096232addb5a57cc6f5876987bd01e753510633e5cbc0272c686a', 16),
                    gmp_init('0x7149cb4a9b95e368f21a5f8428e05549321c192e08d33777605084274b618753f7d61601acaaf4204f360c4c16a0b72b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a222e5309e648d4de603a0b2a5cfa00a4853043abbf89b90a6a75883e6248f8891f241965a8b67ced6181415a0cf65c', 16),
                    gmp_init('0x2f2e18fe305d646ebe9706e4a190338ce5eb141e3b8b9f7da8d6b5a8a54dabd54afe6106b87efa93df22d010e09f3d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66ec30f40c2e6ddb91cd45c121622c42bfc8ab6d18788599f35efe5f8c6fb3f815912e1d79103beeacb34d8970338be9', 16),
                    gmp_init('0xbb3c9bb0e89394ee58e18d69317760413c71567b6a9f2ab5e6cc458b7f1d09b01aeb5b368ec458d8d361b010d795cfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf86fe4a43633237e20abf057a3c0ddda333eac478fba214275bdc500a0b72148c31b21e6fb9a88f63f80a2f545a6d09', 16),
                    gmp_init('0x2f47b61eebeeea86d7c9f6f470d789bbafdd6dfd68d1e1597e1df025ea7d53caacbeaa94d1788896bb9ffb09326a1998', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x58cc00b0a8046efd31d4afc4d3e3775f0076b0f14334ad32d1a3a02d45c55d94b9c28546fc355cd5244ccf0dc95982c3', 16),
                    gmp_init('0x2d486ba56830ea234304ba4f0b4eb1c59756c5a18227acbf843c2d03090b5f3355e05eb719aee46a03faae2ac38c8295', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66ef52464e5856375634ae5c6cb61b109b8e94f7af20c4f70e5711d869cb27262fe48ddddc49770a65b44c91f1e4016a', 16),
                    gmp_init('0x20cbbb1c4055a3d264931fa67e8c7194e23b29d4fc958f3f0fe6239f02c1fcc3aa3639bd22c9b4e30d5904d1309b4b51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4410ef2c0667e7aeb6bc31b1608f20286632ac5102ec3dd4df59fe6c6a03a01b6f7d5ba7be26ec7ad93bc8a1df48d13c', 16),
                    gmp_init('0x1c08cd482651ca9b7d043069ff6c453ccb4583197116c8cdc3e57fcebe193a90eca40788e114fd7884c830abd93e048e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75fe92acea592d6d0da1c58b3727a3220bb7c42e0be9c2f3ed57bfec4b37e05673c15b2b9b106fee3309ab2ac0e5d129', 16),
                    gmp_init('0x31ec6d073c66a09e5ddc3eaacb33d53e10305296d61f301e53c9ef816b0fbf5f855e95971664a7fc39377b9b8f38a0fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x494e7f17969be547ce1bb015a296a9d152487bf4df2b64d6db8566c66b98cda4ce0eef2e97069b2abf618895f9e9d909', 16),
                    gmp_init('0x56c990bf13aa011000e531c61b0e4728e7726d41c8a9da32105ea3f2c82a123685dd5303f9472d1458e29ba9ad056f6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bebe6a697ffa9fa51a17d718cfa8dcc639efdaa7df5f061b8a936748f4cf70b718810e9415e6673eab0bd3d84493d6f', 16),
                    gmp_init('0x19acf0f59d1a96908b9e30f6ea3cdb13806298e1411aa7ed65fa583f9a045746a4e4921676ae1a5a0b2109849a43254', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82de635708933bfd1a48274b10825e0f8ab6abaf7e23a2199c766d1cac2fde60e3dcae38c8a8df8061fd862861c6c96c', 16),
                    gmp_init('0x3267ae4f5dbcb1b24a157b6ee60d7528d3d88015d43bcc6278c21689f59b4502acf818772ba8cad93bd3c31d62863cda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33dbbfc5e10d07b06ea3404ad933fb0e9cd22bcbf317f329c8295de8e313efe33b0de2d4f0c1c2323408a84851c7d90f', 16),
                    gmp_init('0x88ae0b0979055685c5bba03e9a2442a276c9e5201f537d80c5e1053fa09bcc5a94cf47f4614cd7bea5f4d45f12c0a26e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7db0790791afd0a0a3a9cd6bc4e2e5d9d638020bcab3c5267ef282e8f058ba7c79bc9ee5feea21a85640608a01e4fee2', 16),
                    gmp_init('0x195314e4b5be94d4afb71323ed5efd9783b6f852e98f6bc3aa3a3692202d81cd5a6f17594636bc3a1d07f1012051ca41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61612bbbc27cc00de96bc5877ddbc217cfe29e72a4f453fb3eefd89816bf376eb68f049daf83775cd1dbffca7732d1b6', 16),
                    gmp_init('0x3e974cf4d9eaad00fcf12ac96d050d968410250bb3695d1f1b77cf8d15a738afca8fc733f2c172a27ef442fb0514783f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f9ecd038ca1630c982b4df14056901b4cde1506bcdcab3a31e173c3ffb667e4c78f3c6df2a6cc8d7502e48953f7375f', 16),
                    gmp_init('0x549822a9592911ba571793f8dff595178d6629b97741bd69d090c29fa9f80cafbccb08f2a8e6155f43f6e34b2a39178e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ce78cc8efb4856212c9b5c71729dbee575a15ee30bb5bb06dbb5f0c06a03117170a34e63d6bdddb33c62f0d510daf1b', 16),
                    gmp_init('0x63635704228619a7b55fa64dfde14538439889803ee7a0169177715a15c02aff157d5d05733eb4f93892b16640c0cc84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88890e0ad0803128d3acf730bf6d07b50bf1e1d999be1614d8f28549ce3d5e0df2a85943032985cb94b2a227fcb40ec7', 16),
                    gmp_init('0x7d88851f089a8b0e2b257574e1ba16cf7f849788ec625aad736c5e6761c14b2840c651bd65318b522aac8adaf0ba9c45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c32d8ad79a4c6376eda36c6cec3c1e0d722a8ed63f3403455b0f094cf9c776e37e40eb8096eef1129ab1db07cb2e5d6', 16),
                    gmp_init('0x2873327e153b6d20bb26dea8db8c73b3d4ed885d698943c8e620ef5520da9bf578a8831961a542ce445f99d0d1f89938', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37e485136791ddec6d33b2012f6a90ef802b258cf54ef55759023e49a8f1abcd3221465532c001df4cd875e9f96ab496', 16),
                    gmp_init('0x860b3467c3395ef0c766c23aa078f25e014ccfffe969d51ef8ac80467b563811f0166957bf4ba960197b124103aeb988', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa65483020ae5c6e42fe6bdba757b678de8482c2d356948bb5032835062732d1c3f33f9fe4ec5c8b30da809ef7b42f4a', 16),
                    gmp_init('0x1d9d796d25d206883b2dfd4eb78389bdaab254bfd412127c8c786a61668d0bcc5f619ed83a4203e0d54fbc7730c5f29d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c87c0f91b36e09fd8f706a6a06aa581966cbc715b24a43403d810154412fd4e9cc727d586cb3aee8f6230e72438f463', 16),
                    gmp_init('0x2f3aec165a377606fc6c289e80cba1f8a74e3d7da3f50b8a929abcf323ceff2899d6f21f3e1a22528929289aa3e432bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20bef503d3022822f88d11a8218b05419ed8d348ff6d8f1ff97641c1ac5ba5b81b7a355b9364508c57c2c8d051717511', 16),
                    gmp_init('0x5af90ffcf4a6e3c2d299d185015870e25a15eb53e6afc6856b461e701cd6bd7f98b5d4139dc418504be44d38aaaba70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4936b6c43bf414506ebbc2f51212e1f17c18a5a067af61ace345e1eb04ae27725ea527055181b251fd39d22c1d5194f0', 16),
                    gmp_init('0x3ed8d1cb80a652ff6b0475671009fa97a3322fb4a981f5df94b46f1d0400173735bc428004d1c6cd2fe55ec5e8fdf4e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35b7694304c756a6464fd15d0750b0a11017c220e37675050b88f9c73071f0faa472558b01be891909e6635baa061560', 16),
                    gmp_init('0x6bfce672c2101056bc58089fb1e0202993bc8855bd21019c65040ed2889edd18c7797f4613f3b91b5a677227a4e9d6f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5294b62744172c5a489a254cc560630ab3c0f956b95915cb3f1bc9022b6f5f567709432ed5c3fbbde387a4bc9d277362', 16),
                    gmp_init('0x636e3b43a8eb848305a0109eb01ab8caf1a54dbec50ce496c224f8a5908370e26877ce698ab4a8f14bfe8f0630340dce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e216a540956ebd22c6768cf0a38721e8ed4fd9e75d2acc5d9195bee2bb64398c3120c4a1e0cbcb8ff6a5a36a1f5d8ff', 16),
                    gmp_init('0x31de86df79cb4a7a7b916c2bfe63840bbe01a596900b4cc18c8e63aeaa79b2d347b49df5613d5701b9df6b90b49df7a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3199a8b49c5b045ed599ceb4a7f31482c63dbc50bb56e65f561ebce15d4f3dce40ab9c50e120ca6a7359421307fc18d1', 16),
                    gmp_init('0x65df246d629676109a1233cac34b8f472fe9e2108a038e1a547b1a87dd3673c8070f4375dbf2f5b7feb7c43ea9979864', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27d0787648b07b829ffe50500e1035006fc5499c237819e3419f96063ccfd7786f62bb75042c5f501e670e392ddd20b8', 16),
                    gmp_init('0x3789a60e91ea1d5d759695d778016152b40f6b665d6b854ecad24278bb7cf70c88ec0634468ec07c6531c1a31847b245', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x383de4c981ffa0dc2d8de914e7a450aa3db8df75ed75662989eb53a28ce4a99ab83ecbc43111931cc9f90f7ee116a207', 16),
                    gmp_init('0x17bb23591e75a72aa5fc444fb1e3b6005a83fb0728e2d64e7d7a6f712d645d88963fc697a9c0093f7692622dacd48f9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x391dd194544570209125349fc029e93b0d7e6c236bebd882c551abc0d7cb4911fb995a76326b9bb6eca9cd1a954a7da6', 16),
                    gmp_init('0x27b727a069584e53d1811f1a9eb64cde35dbd3bd73f533b13dfd5614e0405cdbfa3969a5674afc8fa22b37a1b5987d53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19665ad98f4b5051dce980a9e9f3074f13dd0476a2af5376395474c8e8d253f13926b39ca5c5cd8d2dff743edaa44e27', 16),
                    gmp_init('0x80c51bb9013443352594b2ed9c916fc3fbd5a46abc988e11eec582b4305ce0aaa6c68b7d826e3f687bbd2df7f013d541', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a1c1457449bc6d765b2905348aa9c9ac1c43e383b24a0ad1c85336782c8a49d01da84c1d1a50882d800fb431daf5283', 16),
                    gmp_init('0x2940223f562a4d1d5e512917cb6e4640d15a1fe75f0d0b935f771bcfd1e4626acea46884be9f1b2c51a5c3c61f4f08ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c2eb55bad9b440ea93ebbcfe0cca7dce30459c2ac21c8c8b4280bb60882dfc68a6f35d91ee39c868083f89965ae00ea', 16),
                    gmp_init('0x7009562a7afc58a3f40259b22eb9872533a380327e6ab4ac9b386883ca9e62d1c07ade8e753b8e2bce437b5bfeefa1c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30529a42dd963a3eb29b30471c8af112f2b9afc296220843bd2d492fe7a6bbde38fd46a292b42d36e9ae82f2b82faa79', 16),
                    gmp_init('0x580bd2979237cecf222cce25cf9ef21b0114bc97847f987527f1e3f34309d018bb13eb71e377797a6e75c81e4f7ee0c5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4eef32ed395fa6472056595bc9498c7a953f8cc5361885b0e16a19bb1f0365838ef41bf3afd89e6ee42f9efad55dea5b', 16),
                    gmp_init('0x509ca7ad90e2ff386237aa3c5493f32331cc7708fffcc5127544df27635c6d6578cabc41ff431d92d0c7a2c7ce4e13cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39e3f93eae741dd3fdc1d1cf890aa8d34648eabd319ff061a5b1d64e70a36ee4869798c063b3748121cceb550926ab57', 16),
                    gmp_init('0x6c363b9f26de8752109a8d34407a6f4bee123fd1de88ffff0035806ef663b05092dd0e812a0222e3579677e76e612b8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d4129747ad917052b1e2800c85687ec0893365b7a0b1ec41858ca280f25858c0d4eeead3f0ccb512f4ea2baa1a43d90', 16),
                    gmp_init('0x352c8b4b79cd3378765c0ff4725acc63215fb4dc7755adc6fb1df9f947f032dd414a3e338ddc52f34efc3f2353629cb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x180c85cede550f0ea6d486912ccdd4b52f5440101578a84a6eec578c1451409bccaa1aebf8c8e1403b9f53a2b12e7393', 16),
                    gmp_init('0x6893fb84193f5e89afc4b7db3e7eaa09bbcb22a81b300d369e5b02d857b33bdcd7d249ecc3a8916012890e08a1728294', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x342e283abe4ca4c7a4e1f8de0e190cbb1fc351b3f8ff874cfe839da71571cdf0a48f8b1e268137a9de515f8ead21a4bc', 16),
                    gmp_init('0x6bf5ef8dc07864f8e0e2b114c6be265ee84590fd57e6ad65b2df4794f2d19192ee94be732b2a7d10f2b374ebef502693', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39ffad3acab251b85dcf2beca4fce3e766559f8f7e9808bba2c2ad457188f78b59e7ba8f0dccd29fa6fe06d93648da1d', 16),
                    gmp_init('0x3815f03e2cf343f4eb459333141c17f325eff308d63cdad4345889f398879f445d79e130d62b48b5f3be548c52fec74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28517f24de00d6494a9fc6b324541ca856b690aa61d39597990a27071e94628c7927ad5660ca53db1b254a0157fdba48', 16),
                    gmp_init('0x1013ff42c7b55050c81f1170f219cd7eab38b993f91863b691f808fe192bee8743e3815e8d58565dc7a9fffa3b28db93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e1692dce3eaec6a4233590b35de26328fd18369439350cde01356bcf5a9a724a4145af951261e24da0d8829cfaae1fe', 16),
                    gmp_init('0x3be45e8083625c4533bc3f78380ed5aa26a30603763d60597c4c56a720627a9fbf39bc5dee672229bf9926d235997d10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f65293988cfbed97f6480830884f2118e57ec817cf9722a13dcfba9422c7bf8dbb8d79a65c23c73a045502f109f0c62', 16),
                    gmp_init('0x5d1553ea5cf7a91c56b0a725ae10fcab0a1cbd160a62de9c65bbd0b8aacdd350533b02e7b34468e9d4e67231e9c44960', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69601dc250648f064e0187af17385986494fd2664e773e82bb92e456161186253a9ad882534ff24089f739e1eb3eb2db', 16),
                    gmp_init('0x5ea214fb71e8fbbee80d1524dae26c578497b90759d5fbda32318b3f4901ac84bd2f1aa98f2b6b4cc8b3cd5337119d31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x793a9fd293fd0d5cba197c39e599827bdbacb5f2a033a10f4b608f7c8b7d99a4f97e243ef102e1d9b4383e9aea992d39', 16),
                    gmp_init('0x177143eb63a81b3b1c72737f242516d2f0dd3cc10d4cf9bb4253f21a466ce5fabe21ea77207fa363b609f108a763fd6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1411faeebbb32baa897df2a8342ced009207a168665c684e6599c1aa811eb9c0f31ce1556e9091144ab3a4c0fea029a4', 16),
                    gmp_init('0xb01c7d23197c0ab93d688075a84f6b1d91c907f0cb2bcdd9a860b5b3246e1cf9974c4c97edd99c56ca00f4f7ac39d0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x233b5f39e638c54a7985f2548b8e5151b31c9bb8b7c1b29edd3baab5ceee080495eb193cb090d6f1d4b14410a9dff63c', 16),
                    gmp_init('0x29ae3066c0213f0d9d77d2962d0ce93346d6b4154af59eb0a22e3042b07ae26ddba62bf0611382030f9fb0c0d8976f1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81c94cda991618ac33bcb668ff112d9d4c0d8c7f52861c596b97b5f944619287878d81f1982fda4a5836d66d7a8fa689', 16),
                    gmp_init('0x12980ab00f5ec5249b59a72264f67f2966a780d51a4f167bc6e316319916e5e6f023d2b7affb9eee4a71266e9e810d88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca0f93bfacc5ec906903d1fe6209c6df25183b2d526f1f3128fef7e5a3126bf3ff77491c6d7d2ec6b14388e17eb43cf', 16),
                    gmp_init('0xcdc6e56c56a33c9e33c6517a4d18e4609b20b2b85fac61fe4c644109bdad2e0de79d871ec24647e528f674e41500c5d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1e1ce71e1fd0110f4d6dddc0370f0a153d8f6ee85649482bc216a9ed38a58c5dfb6868cc8ba66e80bd4219127ede4cf0', 16),
                    gmp_init('0x24c5e0596e3691439c0602b7f8767c97b47aa2a5e0ae2047b65023f5548367ca49be01e073609367766f59437b4f2813', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79eb0fb9ec042d09f095afac98cac62418537d6e3c579197473b4a3fca748de24f9eb77335c9611de222831f978b167a', 16),
                    gmp_init('0x552fdc252ee61fbd11024c43f62b37ca07c38a2f3c6d2097c74c7c33f29be5c31e2ec2639d595fea050788b5ecc2844', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50f535492b38ffc056976cac744a4b50b67b267713c97e28ed039b6b0bce3551f6c85ec363811cd61504a1e230233531', 16),
                    gmp_init('0x2c74e17ba7d1b4f3791e31990e00649513a7b9455c18afde697176760350b65c69008184d47badc56c1f6577993a4eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45d7c167f169fd74e1767c953cfcd909c0465fe5638655699b255f2d798b04bcc1154eefff841a7cb67dd7e200dafcb8', 16),
                    gmp_init('0x5f96de2ca647238763e5f11743047b90ddb87a8b77561992fff3e28eb3d60bda25b9d4b14ae541d4d9967a7487bbcc3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54c60b02d4f669646c20934e87add1da2d73cfad6942e1d4796a8c465b0625fcd996718116390d161f7662efac784f9e', 16),
                    gmp_init('0x4f953082fee5a5500b0a80e526cd3d9172c7b7f653f5170d884254278c9c076871773b7e3e5a9de74a06525262a4c20d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x155a07e48bb159f12c050861846a0a11d8279c0c8819b4830ee8f0c0748c2c82a2213727b8ddf48102876dfc66273371', 16),
                    gmp_init('0xb822a51c9aa5026ea5926ca95c880e6d38a6258f65876a3583a06d0671eea811b0ee727f225e81922d521cfe1b3a168', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c0a940de406b60055a187a5f91409012ab176744139db076a8d0e5ba078591f8d799e7294cd0e662647e5ea36a515cc', 16),
                    gmp_init('0x619abc726ee1580a26e7e6f81cd84bee0df3224cc6eb2b69bb5bf50e27034d9ed4b29e4edc13d8a272a711049754c1c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80bf19e7585c34ce55634335c710ebf5349bd3ede733d24e6849cb0be97fc40d8a4dabba49a575c43911c015c50399cf', 16),
                    gmp_init('0x62faaa22feb6b879943587530a0b0e283414d253d891f52e33ae22c59069a6fe463411857be35e807565c382dd84cb76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd97e2c268817ec48c009c191d274d30c9deb4997b91f3870c08249d68c3061ff6fd054333a705cbd34f97e5df6ade41', 16),
                    gmp_init('0x11a78f3db1bb04400c10019dad4d6282be8b7a180f29ef69a478724a4a2f55680c741323c3005a9532b46745a1aba98e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x368a3bba906b0a94519c6fed83266b07437710ef0f43b21a92e6feec656a59d27f75f99fbe399a3f9373cec8da3a7aaf', 16),
                    gmp_init('0x565c9cd29950569c687ded1d44cc41fab353706cdc7485844a36faf21896498dec8248160f0affcab2c20e9a2557cc43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d4f7b69f9e4cc737fe66516aa82f839e03c4f6482c004a5e175d8ae3886e0aab2ccc09cdf1467229549b143181454bf', 16),
                    gmp_init('0xd86f7f8a53a095dd47d206432ca9c3b34d9145f8bba6d23dc8c305e66fe8650dcac0cb9c33d117b42d0898cb9e4ef43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65de2f4fe233c2fd1893462dab14edcf75f9424c31714f0e65a5a8edb8fe5ba1d504da7e26f454fb3b4343c374ca5780', 16),
                    gmp_init('0x65830b15d024b2144060c717f185a91c97fed857646a1aaae9ce5ee009e5cc91633d6792e488b6007b902bbad49b5760', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d7e34a81a7f1cf6f65c91ac505013798d0da8a8c309b83da163a7982e2bff00003f18dd15e22eda930aac59b985362', 16),
                    gmp_init('0x471405e7c818cdaae5ab0bbdc557cf8b9e182b1a2e1e65b7607e0d464316f1ec76edab59536aa43449a5b81175ced2e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fc975aa1b8dc6115d990b0f49b342b58ead09e570b5f2d252cf50c55f26508bc161b43fa2999356734ef31c3e399e1', 16),
                    gmp_init('0x4e29d083249985c4095fadc598ef78fd488736b9723ef3e2870ffab798a1db1cd9f93888645c033f4d7c592537f8b7ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc620789f3517e43c56f13c6746a3784e820a3afc65ddf59cd059a7aeb15ca0743750cab92d66550f730849ca4ecd98e', 16),
                    gmp_init('0x289d837b8bf37725e5309dab7deb9153666c316212a531285c69b0a8641f3c6e1cae8eb12c9c390a43c4464b129a9774', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4b8b3b933dd90be6bf2511aa2de653ada036b5c2a829045f6da3ab36688073e93d4bdfc2a0bf7ecfbf7697c88251b4b2', 16),
                    gmp_init('0x38367afdc596cafcb870a3b8a7606bd33a2cd9fd1ea6635cbc4ee9f716793b93e02b795c5a2e8e57fc5d78d679588e2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x813b05671ec3985199ee2516d1367ac0ebfe24bbe4b45b296ca871b26f7e21f7b4d95ccd3b9b7a0331c6a0300e254275', 16),
                    gmp_init('0x59806300ab4fdce1043a6c8e44303c6be0672d55aff04b6055446c1a5c895c2894baef75fafe27d0731f896a8ebd4da1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a2db1bbf8ac1bb8ea3ff2b9fd9c5daa406b454ea11640a5e35dc1204e9de53627d15aa65ca32cb835664d32c651c116', 16),
                    gmp_init('0xf1193b7dcecc0581dd1f8f989799dda613b3bc3798cd10e45f46f15d087275b3d3f69e37bc35f42ae2c55ea977c44c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75cda91b8e67d145048d8d5cc98bcb922c2974db381c61f0457840140bc0c0c84c49ce156938f4a73b12960559e9a297', 16),
                    gmp_init('0x4d2d9284936d699cdcc647354e06de513abc8283370b2207a9f8e0c60f7f40127d7dddadc6fe04513257de4877870fe6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66fee1b60b14f07f043b66ffce544e0d28b7fb76085705fde2143d3d8ff14326c5a4ca656fb4ad1a44780855799378b4', 16),
                    gmp_init('0x113059fedd62dbee5957909ce7714d64791bbd9f639ce60ebb5e41c08c5539f41268d338fa1ebb0f4263d7004db44e62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75d45bbc5523eb089db675aa5f6e15156129d20a1b24b424f7da54dc0d4afa4375fcff8b89575d44b50782476aac3b60', 16),
                    gmp_init('0x149972d46a6ccd4238e65a1b96f29974827804e490c2683ae4c62c97bb5ac7c2a58ea2caa9e7402f5a7aa4546e95465e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2025e8929616ee24ca5e39b9b8859c989e27adcbed3d7489fa5287b338abd101e9f9702276c5ed743b50f95227796dc7', 16),
                    gmp_init('0x5eca57a41e016edd95d461cbcf9ad6996d6672d4db3f61b76d5e87a1180de1a1c1b4c52a3ebc5f03d4787c1d13220869', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x325d2408660f3483b2406ef499d37e6616716f0ee8e030147e6e464a33a9c6f3bed09d0db3cff1f66ec38e5e60f21b98', 16),
                    gmp_init('0x5399dca9295fff0f4306f93365bb67ce29e932daa025993243a822a3a5e3222f9a9a6b554eda0dd347f1fa66c26adbc6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ec9060f6131b64cd2a9ed3991cae973b800a3f9ffe6cb49788df2d96691952947e837bbbfec977ac1bb38cab6e23c78', 16),
                    gmp_init('0x62e9672936edc0d8509090a827f1f8ba404076ebe4edf98538a5e1deda5da0bcbdfd282da43f7843947cfebb3fe68374', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ee4922636029a023a662a9adb66ef7367f0dbd39b522ae439c1088d91ba96c94ea66a195d5fdc27e75513796ed201ed', 16),
                    gmp_init('0x68d15e5369f3389f3175074bec5eba464778bf9c4bf3d64a760e451296f6b91070ace61b4b7f3590b88dda509e3490c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69614818ec95a0137c7dde7248c6567745402b4ba18d187090acd511fbc2a62bb89a92734aceb32e8ff1ccc1fa8ca5d', 16),
                    gmp_init('0x62cbe78c4b8e7d9b2ff4c577d471c6f52315cf8b7e0b1615f98d2523d5da6b0104266f3cda133ace70e4cb00d7e594fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x341421e08a3d3bfbb62db70410ab8f861dd275f2ea78ab6990cd36863f445c249e6ee6ec2409c158cc883e8830085de9', 16),
                    gmp_init('0x6b48d1564fda92429e8eeaf1fa5e95d9565a20b7c446674cd5763f7f450072145929af500f3fcb15abf9ffc687a67425', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49c3d9e4e0eb29cd9c018d77b8f34f9ea5d9aaf4df5b4661ff118ede8986ae28f0634e09ee44939a51a748bdbbacc888', 16),
                    gmp_init('0x87957d7e16b829777a9f41ff00e5c820bfacc187a9990a9690097d018cfa4dbecbf7cfdb7d2c5306e0d78f49bd00aae5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1532ebf650a3175e94b335af69c5a0d0e3cf299f69f1f46b735af2dbb7e7d6a608a8a586ad11d0f4e4cde8ed6a48645b', 16),
                    gmp_init('0x39543ad276ded243c98541e379f225f2ec230849199ae6fbf29d9b25aa550dc4e66f4e76171877315dce2e304a168534', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48d350928721991d095ffdd03afbbaa9964a8ed6793d0a47a052747c6f9bbc3aa0134b7756ee960d9a7f1860dc95af2f', 16),
                    gmp_init('0x2b49525b585df850b6f6684c6730ca9cd803cfcf7c1711caf903dcafcb411a039585668faa4e119d89aedb6b7f035a8d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7c94eeff07619a658e1d07e2bd9f7c9dbfea1d9bd5f9aceecc5db09b7e74f56e45e56700a68a9e4efe1615b59c77cd0c', 16),
                    gmp_init('0x3c61faddcb2000e328cd4c16f48a1edef3b297fd744ace42c9b9158964a04d4e447bf5502c140ba97221a146ae98afef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c4ebf1233bfc53d668fc56a3ca4613c6b185decf6765692607b8f463e5f1a22c0f9a988c03520b05cb70390e96589aa', 16),
                    gmp_init('0x17bf9366cba80050d632eced9eada406d517db0408ab80ff17b94c83a35d8380b2b4d1d1eed754f76f0d1ee3067885c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7634819cec7adc10d7067fa5930004c9f6631550cc846e2ec95ad5509ea1ea28307dc4c51d34a5cb78bd9c022f390a71', 16),
                    gmp_init('0x3960372a6624ae6b654539f0424c9817e1cbb3b26f378eddbe3f6f257001f59e676750b490b2d863ddb11e682a9e76a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b5b9c4a7cded0ba0796e91f6b4e0b45618d4ae069f66af724d56a662a60d58e77722325095d36471956403ce838d045', 16),
                    gmp_init('0x388c8d97fb0d148497ee9850873c1b4172f19da72a7dcba1c7d700b5ee894d259f62eb97d48e66e26a230ed914755d91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc485f587a760668dfbc6786d25bae9a36c63679fdf60f5dc42b15c7c91d69168a3ae95a347cd47ab8df112513a80193', 16),
                    gmp_init('0x3a0c19f3cd5e4800906ef9165f2d419a821ae47fc8346b46144a26eab15ea90b3986a9b5de1e41bc01e1ad18aa37ea1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40d10480c4cabafeb1c954a1f4daa2253dbab08ac80dfe19099382b2d3f57f7b5a5d8ef79dea29ebb5cdba9c79e45b6f', 16),
                    gmp_init('0x1777675b797fa2e628b4a6166a8112603e0e91439ce4b5b7b1591e14e47fb4d3d02577d01349d4ca9d9f3cf6ae3d5fd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a7bf9f384a35439fc21ccdb234297ba5165d71f8cac9863669a1d05041fcba118915a5326cc88c871855dfabb47fd97', 16),
                    gmp_init('0x463ec38f1178f9f3154d45777440e8848196be455970d1f43d9ace7085f32e58d764a51bc4c36ab24c001e621d041b6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bf23925ac28f1714a7b820d662344cf8de783613fd4090830f953fd38ac9322f1a7928a11bd895a192488810e2a6255', 16),
                    gmp_init('0x12a767c0d6d26a59db5b715ab86e67150177bfdd6d1e696307960a3fe250b3abc888945b8a5e991c5d4654a55ed7ad41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x862d5c74761d076a81dfd1b0f5853606519a1bd6f088c00afd7dc65d8e25a25c657d8ae7088051b1107ddf010687e9f3', 16),
                    gmp_init('0x2ff063a3481014904f99b74af84570332726c680e4767da109124ea46591068a77f8d3c43fe7eb3f1800f8aa8405fd88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48f73efe5ba53c5c99462ebb8ed03bb9dbc65210e1a8e514a55c85838814e2d5031a51bbe6d2c69bc8975d8988c2b8f4', 16),
                    gmp_init('0x6893c02cc751a551a2cc85e7d43c8a59e617d8ce0c6dc1eb1b8174b3f4a2d0248b6ebedcebbc807a98e57a95f530b539', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c688080fdc74ab93384d01e55d75d394b2053928a3244f6f6502e2865bbda3ad200d1de8e0fa3788d610397d418b719', 16),
                    gmp_init('0x7fa8a66116c2eaf01f8dcba4248b57a21b922db4b953899806bd31a14d4081b67f9375130a698837d5d8b36b486b6c88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x840af157fadcc4cb42fbd45b84328da51e320b75a40c489211f742a68d92e6cb336d42823cd501c6388d42f49f2d209d', 16),
                    gmp_init('0x6294640f2a78711d0c3239742fe55a3d453b11b7c12bc61a942ea52cdff47eabef259d0d6eef508655dae39fdf8f234a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x227581f78667bbaf0403ab5a3e048e7d7d20a3a59919ff120fc61ccd50115a2789ce90f045e5f05266bba636d83e0a7b', 16),
                    gmp_init('0x656d432af83f0fceeec20d2909035c971f419b1b94f5003eca91afbcbfc6302f565313d21f5a7910452c1308a55d7991', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x749c1f8f595cc8b956cd95840ebd145c2ce1954883c2a016e9bd0973e4ab51b428a65de5376b5dd874639300624742aa', 16),
                    gmp_init('0x27659dabf8c59c26423c97e2963d2e4ed97ef662922461fd48f04c45d0c97e386a105bd944e960f6258c1f63dc665ef8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48f49f34727f4ef0caebe7f5cd80ebdbb076691adccdcbc1d9a401b86d141193092806d3c3f34b31a764fd48207ca07b', 16),
                    gmp_init('0x1a9b95e93901e2410c21fb736c1f60cf37ccdffcd085318ef0b97f538c605c02509a38b87f85edee3dd47d05b5eed692', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x232de6b39569fd4fd21d49152c20218903c91524baa137b35d277964315f16026f34f6c74958184a0e12c6a314b389e9', 16),
                    gmp_init('0x8c091dfa96cd2a96c87d5849fb1301ab654aea6fbaca0fa4e0f022a7d50c8c42c088b0c9d6fd251dceb4482ac40e0ac0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85a1979f42189c1e8196d3018d27fa5ac52dc3ae8ba7849efcccc9469dc0b7ce1a9c0600dbab575ee8c84619e562595f', 16),
                    gmp_init('0x3bbde1665377115b32228a744b120d44c964cea123212109f5c88c3caa6726ee575a7be368cbc4c2c59ff15a6370562c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19437934b548a373e7fb91f54a8f81cf4bb8c3de589c89e9c8093d058f8d73065f8ac7c9bc4b4bced08ec56ade1d7566', 16),
                    gmp_init('0x1b319d863b3ffe5447701085c2bfc33683c1a657eeb83e41c41a656df0489931752fb34f402b6ece82794da77e00364d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41b7c2aec1ee21163ea2d5fdde588811cb8b982f38a2921df334e299ed92ebba6e12321f634b4a31dacda19d81c35b98', 16),
                    gmp_init('0x369fbb4f3ce26aa7bd2b4029b7ddcb1c25b66ac2b4bc669b419e77f6c3936fc02cd5ddfe461248661281ffcd70d1507e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84c296bcc6f35f3bb7a0664443d0db59b172a471d595fbcb77c6ff831150be1cf308e79bec599113b8d5afb7dc61ac62', 16),
                    gmp_init('0x733b14ef846c8f0e47475c2e5698ee6cadbc132831f9ff22ee917cc6433efa33bd5ba55a1db9559605a5c38f48b1edcf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16a8061ae8404ad365c00afaba8923cab10338674ffb237e711d375f529fd2aca1866422a31ad92875c9d676f9e27ecc', 16),
                    gmp_init('0x80692ab77bd179a0e91c48e20c9dd1cb2b86d0a36a3e026de5bf557e72a1cdd5bb49f9339c7fc527f2a0cdb118f268bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6de540f0f798a019e8704a821243a137423c692e9c573cbacc2c9c46065d9bb05ac75eaa19d8ae63e5bfff41a601cc4', 16),
                    gmp_init('0x7bf417fc1094bb4a88076cabfff0a1ee4584f71d34319368f98b458086124b6001dbe1fd448630cc6123b2ebc28cba5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34358617dec8c792c19c51c9461e0c8f8d9d93adbe3c75b1aa441d8ea0470cdc0a973e1b0dfb3ea64686897054f74740', 16),
                    gmp_init('0x179fe4cb359c2e61f3f37f10df1f71badb4fb6bafb4b06b254ac6ca6e018e695bf1cf1838e2c2d7df62ec4b46ced11a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dc9d34616535ba3a98c6aa6de2ca493c55b3750766bce280505fe60fc0787cf35113e7578ca4391da0ca5d5a3db9cc4', 16),
                    gmp_init('0xe46c55f2e93cc12bb784044d1577bc726a9bc86d62bf1e60f8c3e7c8f35187460db2b28a9a1e4407308362b48349d01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x723b9e9329ccc09d83c1e749024bf1fdbdda624ec640fefd0b3c1898666beada9757337bc1dbd0ab44251bb61528aaa1', 16),
                    gmp_init('0x5a368b28e44ed025cab9f82b8e6a3965d12a7bfdc1589e1c41c3d916c7fb93e8ecee4923d9675ba8612317d9ae3b4402', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x673e74df4873adc0b2a7e04097c271b05e1a250c75ab14cc440bd6340acbb6aa93c7b8f22ab589d63d5d9c63bc93ca56', 16),
                    gmp_init('0x29f7174d4044d74ef985f40b140679b6b07bf915686611b304171e127bbc126a6886560cb09f6032b699b8688829860b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23269016c25e62754f1bb178b2bc3428f77b632807edbd2e20c800f3635b9e98c28d2daa02fa5252b7074afcd4986a4a', 16),
                    gmp_init('0x6e4f95007b37fb0360e1ed5f34028763d8e0eb34ff4477a7076a037e8c6c2b5bc1703f27088c832189f4810dc2e936c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f566aa33fa62d16f403361d0695e249076f8484f9d291e12bfa3593202245e7bb5907f2d3c536eb905e8911eff1be61', 16),
                    gmp_init('0x6b5ea60049de2afd86df25bf9abf6ab89a7fc70b3d4285a19f8bfaf0ed718b27f5b15181d4d82c1719a66b13f5d06614', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a035583701b1c82fb6ae45db9d9dfc33b7f02dc669dddb504c2145e0dc78fcce6967ed723f7a0084c1a58733c973af0', 16),
                    gmp_init('0xe6125640ab96df8fba9ad6d2a97b3bdc73f37706c77af08bdbaac91ec8b2f6db3e3bc51ac71a8c490ede264ffe89355', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bb6d407a9c61a302fbeb2d9cc9fbcf6cd8cfd00ec94410e528663cf4b213dce71afdf1f202cfe903c8165b18a507251', 16),
                    gmp_init('0x7814487fcc2bd96662b9fe5285539d08876345df3f1e940e3b94ea9a29167f55007a02ef504d0e7c4c1a36fdca495b5c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6eae34574dd19b3a8649faf2f291cb1d5cb45c0f1e81d1a82d8ea81eb05471f65a0e20123fe2535f6d32cf9df08ec877', 16),
                    gmp_init('0x48ffcb9f915d1c40aace9b6a58838fc9c9be1786eec3a752e15b3ea8c9577e888a98434486e1656546cde81dd8b0360b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dcbfb8ff7573d31526de770dd1faea30284a2d208a9f8ca2bca151a674f127e906cb7f63541c48c2719ffa4d143f272', 16),
                    gmp_init('0x766d4a58c4b4dd0e09b32e6330a3e6b24692f6d764764b4b14cb502546ee371f83f9ac9e787f6b7bcf080b518b769bc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfa99f5af24353c5f00d29c60665e55ff97cac3cc746673fe0fe5828defcdea838604ab0b06e072bcbc3919d1b693cad', 16),
                    gmp_init('0x4a9c957d38b200b10648d6328d0b5c5ff17896bfc8300394a1e7582708166609e94a1225a2bcd4a38c521b6903073629', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48d40ca31646ce4a782b59b0894dd773e27bc40c566306a0e5127cad5440c3b26712ca1df621a3586732fb86afa19ecc', 16),
                    gmp_init('0x556a9c06fbc4b67c406028f6a1dad6a20f349eb2c5a211c760d8269a89956c6852864b54b3cf13493444909fc2fe63e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40ac69293f268fd54d017f1a8d30f3c599656d5d8bdc4b5b5d30564b3fa119be0c52c798095e4da91d63470d90e58cca', 16),
                    gmp_init('0x312c79e3f4b0a2e155e3d256c147238bd620458526533e490d6a5462160149772a6fcb28a5c3d60f3bb31770cd7a3f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3303b0b128b1e275bfc2410a70199adc486e750c034d22d9432ae1baf7057f9593ce4a0f5e966ac5bb5924bc1170d018', 16),
                    gmp_init('0x10342b00cd9f6b8202e6e416a36d6c0311d81ac191995f685d6ca8235f75b9f3456524d926613c8562a461e0ad336788', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68268a1cb36f628cb90c04da51bdc9e1c677843d83b45c92c71a2c0ee54d6713eea558ea809f020d1adfd8bf92adf3ca', 16),
                    gmp_init('0x6359cd6883898371ec868dce95da5b67e0dc8406fa438470c9035f62c8f1594fbbea2ead7d0f91c43680189a335f3563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6247a4b1adcddba876f13257615c327d99dd581fd6c074f0ac455c18e942623ba8a4e3c77c9cac0c31c05863d60fc57f', 16),
                    gmp_init('0x1f74bf67a35536fae739120252c31324126a4699e62e1d757434bf5ac325947024e8880bdd911c661b81ef4424e9e0f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4df6becc112aafd52bc02106ad96a1c5eaa0f4ef9d9684f1a76e6ed09f311c667b0afb0fedffede9c2ac23b61c62484', 16),
                    gmp_init('0x53a233637b9257e8660fae21d0390430a1c0a4809cfbf5b94bdf9c4d11ab24320f5c320d0fe5024ca81463a04fa77bc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50f9bd19be58591a052b06ca9fb0dff4467fdfc2b89dbbefea3c8c9979536331da531b9cf73eef3cc9570a007aba104b', 16),
                    gmp_init('0x5f6037486a6eb2800f67c8897c67a806cf7b6dea410dcd979a73684e7308d1324136125f0d18f45c22303b1d3cd6cacb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bdc9dde484fe440f15b46a788cda0c0d525e9c863ee0d5cb5a19ca62538ce66e158232ae56bc52e1937202b3bdda7a9', 16),
                    gmp_init('0x2c7d744e016a2a79c1cf79a4348db25d6005de8569300b97d83b160e79fc5aa2efeb6617927b7c627fd313c16a90d622', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c9fe9ecfb336e1beccae7fa5a1c0006b6a95f205aede06a8655a83c2605ab48b43486d869ec988f74ae9a9cb6dcfb4', 16),
                    gmp_init('0x318a96b70ef7a2331c71e6894a58d20b7165866a322cae6815bb51609083ba868a3cc78386d45214a222b419ab127554', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7af830b2798b55c311b30051042cd5435f612d44107b8aceb578835dea993209e4c82c74c198cbfdeb02c9264c4b0622', 16),
                    gmp_init('0x471bbcde6f0ad5f4ea000049a8ecb345e9e5d0cf8f58aab295a4ec2496225b6a821ada317bdc7ffd854c23c93b0228c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4eae937a831000740da08322921173cf3330048bb91d0e0860bd9ab577cb7957703aa451ab77543af8e13145139161c9', 16),
                    gmp_init('0x7c27e873f3f7ef2fc23cebf4fbe06015eae9c2a4b66438acabc504cb554dcbdaa71d9f1888de1f743ec01611718aff95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dfc740bc0558c11724874b8b311debdf55f0c36dd4fc2f07bbf11eb5d057127249fcaa5e7c65f30e566d7669dbcad9b', 16),
                    gmp_init('0x439cd1fd2b12f11bc88bcc94045d16029d7fc4f8de4ebdc83ed1a3dc4cc7850125501b5271314babfd30edeced40ab78', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x21f7c70a90d2c091ca87359d8e9cc3bad23571ca43c430fd9f59125d74357b91a89f0f2fd141de0554940e47ee8a3e26', 16),
                    gmp_init('0x8ceb712f71ab82aca8509cad3ec299ca7be2e8b3ca7f36f9c1d8c507defc899b630eaf9a1310183c494ad92e1bc5e8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a8c6576ee5583f4f11cbf19b1d490c5654afac31c6d516e9819768f399e3ca04a70bbf00ea45ee15da9a5b8f9df4216', 16),
                    gmp_init('0x112378ccb3677d31c2955c9763e88d23a47f0413637c0945df19531337d6fc662fdd12750fa10c311455c9c50735e56a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e1c08344b78a308adbaea7ecbf07a78367865887710db28d8d5b9d57cb47e05b2a055202ce28e2a55fe73b7803ae5e2', 16),
                    gmp_init('0x8a73663f4232b8a3442df6ad494933707ff2772ef01e0d4375bd3fa63b8b2c29f7b12deff5cc66b058946453581d58db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c2c18343c234ad9142bce11ec61a841903e89760830823a25e74738dc5a56a04a9d69b5e57c4b96e6340f7181300635', 16),
                    gmp_init('0x17ec5dd1e6bb2c2565d5a9968c662cff394e16237ae4fafb94bd84fe088a654ad2a314132bc4f1832ffc8c5183aa4006', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1145069e1d89ddec6fa2ed693cd5c1cb68a609e215c70f12d8b2ed9bc404a02138dc623cc78592808ece10f528379a39', 16),
                    gmp_init('0x41a25c784937780755c1aefdfe4a7328e8429aabc1dfcdaa96d049c018d05c9b7575ea1a2d00db31abfc675b58037080', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75d1a7228b53a78cb5c5822068b43d332044d869f7dcdd7f4caf5edb55c18860b624066c0ec88bb9a1431b1cb11a1e2b', 16),
                    gmp_init('0xeb34796d2587e9666d6f6f493e6c00d4af6bfb98e7387aeea42c12a4c2bc03e85afb380d915940ca509fb51bf8b5f6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1793f42d5f16bead17094a084fd913902ae7035854f0495620c448f58934593d26fca678b91352780c2e685d9781a1c6', 16),
                    gmp_init('0x8afdae9689bc66884449b42b8b33ddd787ea221e5ad8f45fb511d63bcb43fd69f8fe6a592cd9c7211a20d2113b3698c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x614c504ba41e5d7417383643b9689387dad17b06905dad02ecc2a8c0674976007d9600b3de63073432055dcc27f24f6f', 16),
                    gmp_init('0x39b9b9fc2e4c11909eea25675bf68499d8bbb004bcb0a733ef49a2f095ad3288b6a9924fa8f1a292727fb2e5b2b82d11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3105dd4837b11e72720938eabf57690f7741b1ac44a748a233533ab0735cea6880e8153660d8c2385c2d79c18787971f', 16),
                    gmp_init('0x8a935fd24563c6abb4404031d973144e942fdb16ceec8054262408b48dc73dabfb39e7289bf7941f1eafd48a249a7b7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3681649009749ecd15fee0c3e4bdb3f9b99f70998b28952d6f5499ca7491359af074d93fb86ccfc5242c15216d61918e', 16),
                    gmp_init('0x2713290f54a45935d6b047c957ecfb29bc7f263f5cbd75a6ab41cdfbab0a415a46ffd23741f52b60d44f82dbcd92b9e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x547813bb25ecf626b740932576d37bdecd43b922aa479d5c1222f0a76292d8e940f3e1f83a9815f6aac7d3c715c3f7a1', 16),
                    gmp_init('0x3723d0115e2d2b61e6ad0b2bee0a02e783c956709941e65b1799b4381021e6fa1d74005ca57288c5bd7d66fcec35e0f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1270cfe837a9ccb85525df2d6c5e7be9b6c53ebe77c7c19bf63544fc32ca00fe548006439a7e1d7c696fe639d5792f36', 16),
                    gmp_init('0x9a63398a63a89c010735c98e62dcc8a2266f35547e1ef624cebf5d5a1e4990a442a7ed6240d5ae7214809b8d69971db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c1dfe31bb8d1a4215bc57cd8c53d0822a56b3fd174b46263067526554c607866ecf10e69e284cafa0961b72d89cf70c', 16),
                    gmp_init('0x7207b990ff7aa4e3e08ebfeaa98f582f6c721eff27de6c6949f65b7a92dc3642d59a1b3f74f2a20bd11e013d43528c19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x110aa32768c2ec8454b11846514da9691d4d27567562304c6cbed876b2a7f3b5d88910b0832bd3607ce53d549d4fb116', 16),
                    gmp_init('0x5627fb0bce0b328d542cd0b018ca9f08ed29bf4b524be953a59fa4bf7b4aec4613dfc1570b12aa215a1077c6d9f60dc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51b3f9cdf1979c96c848e530a71ffc368f0824788e2afd3b82dcb3d493cddbc55534851b22cad62fe158cb0285c88ac2', 16),
                    gmp_init('0x89455027a6add4d4fb16ca594ad580e3afd530e9fdadbe251663b37d2aecb0fd68b77a21ecab6ef77fa7180c3ce55a99', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3362c655a8f9cf215589dd5d83216fd176a07dd21cc25bcc8645d73772d8c27ca9dd0cd27e8c55eac542f17ce8052673', 16),
                    gmp_init('0x263ec6663bf97276e1a3d2acfe7662a103f357e53c7ec8b0724f335f2054c2089028709a620584897d6ca7ec60a8c389', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3541bb27e00ea6256f6c0e65e71072ce5a0d2b9bd09b0e7ca3b21788591ef6278c209eaa43c3d3957d38b23e2902c7f6', 16),
                    gmp_init('0x43c5d7562d093e629cfda54f8d263c4fa4375203ef36fb3132f0e910a7d097cbf6916f128f06c68662c503a8145e9c32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb1b002331bdd9f7fa65dfb08ade27404cd8ed4d98f63b9330ada4faa259a54a16b58c4e70aa4b6ed3985be5ff17c37c', 16),
                    gmp_init('0x17a5e55b15a5d9e40fffc758936edab840229f26c721c0a6ce0880655907b4609574c43e7663d9b45b7ede7bbb4f450f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12b6f57a7c6b4173b58832cb2a85b56dd6dc8f53a885e1e83ac590842523beb3866bd4a62b13eca04b3e7563c914495f', 16),
                    gmp_init('0x45c58667f4213fef01687049a014a9c72025b7ddbff8954c6a432056f999c3edc0cbe975826726332e519ecdfb945591', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64793bc066b82e57d441fa7d9a67e8e383d46698c56e0a3058d0d7155367f723243985cb28554aa49aa1752702b4ed94', 16),
                    gmp_init('0x89949106cf0b2d94640518fdeac3b1f64ce9c987fd0f4dddf191dc5b2713be98a1de33722505877edff1cdad42fb5caf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf95df94938e5e7bd86e34fa9be7fddd9a8a6c64871370aeb374241ad2182d637d307a22f3f8d3752d19a3d0e6ec2f52', 16),
                    gmp_init('0x3a8e01a061dc6161d4d3e6ba8316deb82e11841370e7b579ba8c3959c2ff2ec7276263d2450a4e33430bea87880eb8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6545d506ab86863b391a0384bad341d141adb663b275b7e2ce95c10703cffe2d9f180409f727d7b913ef1931a39107d6', 16),
                    gmp_init('0x3606f7015b8a66d9f43b5f829e5fa3a60b716e648886bc2e91d5d7850e580c27b221e9d4af0d3cd652b3df8ffe4b1e2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43a4bcc7e7025ec6d5f01dea70ec272d9dfbe9aa18f98d118a93eeaa7828476bd0e975d092086643af40c62197809655', 16),
                    gmp_init('0x1e4cd4fa28cc0fe44cea1c4b0865489aaa2ad53602ac9ca12b897e3499803a5493cadb96846a114363aac84e88254c99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7eaf6d337872e668a54ef6d36ccdfde91e9f52655fa331e7376c3b350031d3a676be3b405d31e422b422dd4fa3d66341', 16),
                    gmp_init('0x63bf4a05a12b9d41c1068d96ee0c72f34f8faa5d4c8b4c7d3c59dc2a17fde4eab559965c9a80817b4f87ef4b539cdaec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b29cc4739ab4a17911e0f6ddad14c72193f44c6d14e20e6794168d10c15a6a9265720a81778d2cf5494433417b43931', 16),
                    gmp_init('0x7a050282014e3c6ad781f18e5da4c68170c895ce4769558019d8457953fa273019ddf8ad32ece394ab2ab2b452bccf9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1975b89e3994ea21037b4e36c6e83b80f4b9f9256732f04abad2a1d548f413722eabfc3228f4ad77e5c7e4c3d7fa3478', 16),
                    gmp_init('0x5bd1615437ae1df5ddf414c3dd45b79e961781ca71400f8ee800335556387c97090bae146b1cd8ee00dffb553f5da296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51241ca020a6254eb634523cd983da5dfc1fbdf502e2a1f8dac7ac3fa171d99651619efa363ae3f7158b6e269ec794e5', 16),
                    gmp_init('0x17a27f6983a90236b1aeb0b0522dc2dd761d1b808b6a6845a0023c657fcf053dbc19079235a55e03a924f65e5d57c686', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc43818a62cdaa5d2db4dcd0c3cdc9d07fc038030b681bebfde38e1f2c202b02927f6e056aa7e4ecc90911a985f274f', 16),
                    gmp_init('0x12013fc9ae32a9564f2fb7130a6801b94ecbb89cb2bf7709411f4f4eaca57bc9d0c6c48c7f2ef61377cb1de7fa88217b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38ada0b54e7fc6ecebf53c071b1422b076d0bc290398c2cd8583f755401392999bf2dc9c3c1a75e2fc14df6506074e8b', 16),
                    gmp_init('0x5cda0012ed053bab2ea031797574ba40f01030d595efa0b7bebb42e2706f35fa5b1aedec1169f79c5060bd57697c4d85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c456b09702c98475284e56721bc40d84ec6152f23ef18d639eb28d502d259f8e6f5ce69548ad34195b549d5c0867a13', 16),
                    gmp_init('0x2153e3906ddc67e18dfff4684448a42027108f7237bddf5556e9c3d0bfe8cd5c7e71eb3bc4879595b9f1bce273259e6a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x519aad48064a6c1d5aa680e7e026a988f02136486ebe885228033f1da1fc55a96977eb3f6c7dde1ea1434ef96e3f7b81', 16),
                    gmp_init('0x5a29417bf92ae662263c613b8c8cee1e52c1fe4b58e815e566ef2ad3bca6808b664c5579f68de790b4439b13a202b8b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c060218be238ee1887cb838c4d246373026572b31786ada70f5fd33be4f6eefd78ecfac35fd31c61c9b8996a96a432e', 16),
                    gmp_init('0x546ecbfbed1ecddaefadab9bbfbfd5c9e7120b8646c5999759cdeab7000f42a3ed7508c03469dc1767dba941eb62f3e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27121e090b89485859bbaf1e70321a77b1ac5d79057407b65c728889cc6f8cc835df115c1fef99f1880b308a2652e8f5', 16),
                    gmp_init('0xc00fce4e71ff3eb8c014dc7babdc83fa42108ae3406e37d4803057fb5038d77979ef4423418ffe1f319b5869fbac253', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x368c1fe5038be75520939e5f980ceccd3b0c86fc24d207396b536049bfc5fec84c247642cea3103c16002e12be8bd4d0', 16),
                    gmp_init('0x7ec548faf38ac0a0a89129aedd75436bac6fc3db3220ec6a8833b3c3a50049541ea69bde3b61b70e7e292d502fc002e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85dcf305126b9a1d5d1e46c468d7ff4ac092a44863d63a64b468afed6b70741c5755c7c3544a61a607c09b34eddc78ac', 16),
                    gmp_init('0x35a0447bc9a946ef407cf42f2fadd7ad76fe9aaa490dac0003cfa1d353286baf2b2aedd7876b2e31b6f16e1e185e91d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d71584e216679d97aa3837ee4e7d5a5ef779c2c8e29072cc32ad6af39b784a82f6c99b2d36d84c5fcd569cd90372d83', 16),
                    gmp_init('0x3e5996f2e974bbb0626e49de2ad5c30efb6a6c7c6ae72247f12017f1fa4bc628374769ebbf79a1a589f2e3469f20d3dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54f42cd54c78770504797849184343715e74cba6b1a27134814aae86fa3018500cb53b750d02db99eb4efa4cf6e079fd', 16),
                    gmp_init('0x71399ee2cae5fe103a29831da2ce9caf5d8f456967f34a44e66613e048446eeaf6e7a062a65a97914411d940f85d550f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe46d554069ccc8a7cb9d53f055131c2b993b7f7dbd516735c0c8676b1960a6f7497c541e190a9c28a8405b93860f054', 16),
                    gmp_init('0x1ce8c4dfdd51861b8e2d2f42b798707239af718d07969a16d62b2f459388d203070f9e9fca62b2049a9ddebad5f1a048', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x803050798ed2052e6712c1f3773545ba9e3b80484e2c02f7e2523633d418276bb8de79d610a8d5af607f902760e9e531', 16),
                    gmp_init('0x206d35369e12064d29817592df12392a972370e538ca6dc8a83a33595249ac241db32b56b07bb996a188fc6e8a9c1866', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c608906178b17dd71cfc362a8e83d69b0f6be5cbb355bc6ddc6f588cc9112a2b0560dfbc8b7a76e6f65632518fc9c5a', 16),
                    gmp_init('0x239300a06773c1c995674025fd747e8b9b041da4e9e112552bd55b66c6aa9aecec9a17040f422969b857cba02cf97a4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b4f2045af15f7fe8f98fd75219f033640a3eca6db66f6835dd4103643d666fbf7a3e6ae5a56c08c9a325de8de82ff81', 16),
                    gmp_init('0x14841462ad11ee59d8f5a26b2aeb723ad6a7417b69e49140d796420a791de44f13d9cd2ec754a1357923f6878f3685e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20055a84952f4475c641a05d3ba080229a25eb79fb5daa98984336f6ab610b8731a250c5b4f30bd2cbfaee1a8b7248c0', 16),
                    gmp_init('0x46f73904cb9819064f06001cf16638cb5519ad12f16f12e65c30a08ef234e127f14d439fcc4eaf79886198410d4a0a03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28c2977ad6cdcdc2186df578f9b25c18258e99055a4edf638156fa7a7fe8fb7bffea733302900338143bf702a8e45407', 16),
                    gmp_init('0x63fecc5b5629bcf6c0ec6035f101a282cf35fd20af2e70748c2574c640f3190258b2cf8228b9bb1fc761b11b44e8e9d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b8fc884fc3afe07619e5d2dd6b8242d19619b7b8088516ddcdfcbc11bfab432941aa749bac3748337e1428fdb312822', 16),
                    gmp_init('0x4020cad2b9399c4287a233aa29ff24e6cfcf00e3eb2fa3b08416ef77316b6f19727f0df26cec49944cd057956c4373d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5da70da3cdfcb0113db7998a501a94eb11d8c6be2a7c7a2f1035af09af629f5fec3b12694e522d1955d6e90439f0f21a', 16),
                    gmp_init('0x5ba98ada234961e54803c440fdd31de0bc682b5e4f60bae5316c851d17793086da353fdb9a8cb78411f3661dafe999ab', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x84f93cecef5c2671f5e557152944cdb88504d2d7bb1c2fb069af66d9a8c1d9741048b7da1b960ac6266ecb97a9215d1f', 16),
                    gmp_init('0x30d367297a219deb271b9bc19c4570870a93cbc2825a052d00d4ee74a61984a8be9ae63c78bd9e83abbf5d57e9eccc50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x645bb16dc31050997c55fcc4913d58ce952e3fc4d60485f326e321ea71e8c6c539d51f157d59b0e183f75f04a4d5dc9b', 16),
                    gmp_init('0x8ab182e6af9f96c54e3d97ce728597bb9ba719c2e5df9174421aecee2ec2ca3416561cb6b42f1801c537f795e99b786f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f4689d16f846376df9991e20865175a3d8e8d9b6276f1386376cce94da3b3143a4abe72cf16ccacdc34fbe3aeb3fafb', 16),
                    gmp_init('0x5431216af039c4c70fa7e1c76f3b9c8cec72e244ab2f1b8632c3015c268a332df21ca5be7b773b585af3d49d6d31e7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d9b542af66e0fd3d436220e8827b001ebdb0e9dce6362ad8c67c419e1ecec3cea97f3a3dacb8a9fa3fab0a8f575e12a', 16),
                    gmp_init('0x7123776184ab9486be9ce42c88b2ed9cef07e81d5846329e267177841992744181dd26f4e4d7bc2f891e76a15e622976', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61609cf15222ec1d0c7c54dcf8d1769b627dcce20d24d78e9f175662b981fdcdcff3d6938ca9b47cabdce134f6454465', 16),
                    gmp_init('0x10b5b5b76124128cc2fdb5257e81c189a9ed59d27515f04f689b208164d88aa3a5cf03b505db6892997083fcf2302ca3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d66fdfb06b74ba67ca2bb01403a10d64ec3a74a10db4d5d8b8184d3ebf5c9a3eacc49567477390a155e1d8f1ca5354c', 16),
                    gmp_init('0x68abaecf321568cbeb9f6df7b3b6dcc971aea0a04ad069f76cf396eb4f3941af014c506d48d10a71c051f18df5f13c12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c6aa4faad4c64278375857af4b4728b2ac707a911b5345e044beb2647e7a043d2dc5dca808b77c2d82bad9f11f24ed7', 16),
                    gmp_init('0x49f1986869b1097d42bf811dcfbabe7d6a5ae7eb5212422a44a51253c7e65a84b12bfe8dc3b8a76e71faa1ec0bb74862', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80edd96eb378d0beeadc60e95a267c908270e9ca35e8334552bc2b342a881e8c54fdb1b2f8d1e963ecfd02c7c1b766bf', 16),
                    gmp_init('0x40e18d4c19464028d3137bdbdbdd6755c15377a53284b0e39ee933316a7fe88d20849c8224a0b974a36890a3a8c587ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13ae78051460a80457db5e659ad0a391348697ef624f0bf110d8c3f317554610783925cf89fce2f54465c6f61b7ff041', 16),
                    gmp_init('0x2d53b546f6ee17391c1649cd80546c2bbe42f8915bc2b03ee86b83096da6de209384f7063ffb4ba8ab498b46b337a1d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a41209ce65757ed118a8c4dd58be20b6b1a0dd22a758bfcf9b62d1de0187112d9498f673359c7f68741620175c86135', 16),
                    gmp_init('0x2ce17426f667ed3ed398c5731e45377a63c476b6987585d08c7d7c0c05b92d21f88b9b1c4d97ff46977568214be88d11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48ecd48ce91264dbdb1dc27d916b09c92204981a17c69efde47b6c4a77cbbfece06866bfc0ec63ac64686938a1647749', 16),
                    gmp_init('0x64407238e740cbe6db75927ec4b0163bb5f91c429b958ae0ccb8e4ef07d823c2771f7b35f5cbb606049e96ac1cbb51ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cd018fe2f4bf7bc75eee50d7a5c6f72c1664db944a49fac88c75ddc25b5efb4cbf7190e6ec45b9c8dc04e6a2c8ad668', 16),
                    gmp_init('0x5a0012f89296806b1e4921f0f8b55228e3358281da189bb862d3355d2a2a11d9ce1564a6ff632f95ae55d500fa8cdd24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7248c3ed6699fb1441e5f6efceaea1a31f738371f55c1026ab899508ab6ddd9479a66c659b6048eeb5e6feb4e9db272', 16),
                    gmp_init('0x53bcef00d276524a484daf5fc23dda979b3f51cd1ea9322ba65bd1f7e92e2d62b015fbcc4e317c75f2c21f657cc3efb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4595a6c532f7f235c57739966906912e6ff91a76be120f25e7e0d6342103ffc47700b719ee655d81f0c71d553f16ba87', 16),
                    gmp_init('0x84fdad9534463553a174d79895aabc46c0c9066432e724ef3dc1cd1d63904d05d65a45e42be5264e13df1ca31e88dc84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x728824bf156e162d27ae473018ee9155372c57ef89358334024b46ae55ba98fdccbe586a6882925a69d76a43776cffa1', 16),
                    gmp_init('0x79292d5d865a594979ce3c789f3bae39f9aec58bef7191ec633b60ee611f97b2ee32e37c39e5210f568fa866a149f30c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x34dc4068ecb8c5296904cb61d593b7dbd1613411cf973357fb009d30801883437a0c155ba8145ce7bfdd00a521d6dfa1', 16),
                    gmp_init('0x69264c75d025fcff78ee06cda90e2e1d54d7f3fe90bb73589f9bc5624bd8ff13b316874b91f033cb966c4e66d949b41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d6881996c003e5a87b2a937865c395d622cfe8d4976d37465ac7221b23b7b97ba897305357e8b180946801ff7381b2b', 16),
                    gmp_init('0x1fe914de4064d6aad8a07ce92362407ee2a21dfb6d685b1a1df79b6fe085d960fb6cbb68c4fb790cea7a8a332b25009a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fc6d9c246fe0e8cedb3cbb9ecd2887e1c62d7029765adbb10e4f9ce633dd9aa0f6b417f63bc7fe715f5deba123163a4', 16),
                    gmp_init('0x76168ae510ec6d0cb9f1bd8cc1ba683eaf2919bbf24434287cac0be5a4ea6af5a29a6d81bb693509b192fe00d78edf58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f78c486e018e210430173f48b1a7974c995c8379da2732b4c1328ae86d4261cf95bcdf646bddff4888b81df61590e8d', 16),
                    gmp_init('0x7bbc1a45165ac26ba1002555cc261ba207e813d06f682ea01e36dd79e08e974fc950feb58464dc1959efdcce86e0b3e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x358be3f6246fcbc75b38a41153cfa43c78a608fcc7c3e34a7b7595cdfbaa4672d9f24cc0f83660b61212cd484a3d375b', 16),
                    gmp_init('0x5665e00f5c7d0d3130133380f4a666438ee3a61a7c0dc0e2f5842a7e3c4d10125ca6c27932e7527a9f56a14c52ffd157', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18cf7e3d7e345818732f619ec98249492741e3af5ce91fffb60898404f9493f5acbebbc151a040a505e3fb9128895fe4', 16),
                    gmp_init('0x3e7d21a83b22cf306c14ccb3089ca6a34297cbc13d965a4448e983040be604d7ed81844c908651b86c52865bbac18184', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52e279bf8b1bf7440c64a12a350f187176698d01cfc023ad4c2cfbf1624f880f79b2e27fb94e39323da1b39d63705628', 16),
                    gmp_init('0x7e0312c5c5f01d32cb8367016c9de4f678e76a115b9ef55b15960f3f78a8b1f2b799d1745afa25eebb58637d3186cfeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x827d01ae805bf8fb58566ae88baff792fcd2aa8ad2c7a9d54c64282cf90da9ef58677fb45030a1e0b4ff985b99be47c7', 16),
                    gmp_init('0x34b72fba550520d3bf6e52f7dfecd7279b0088edb5489fbbe75ba4bb066da52bed30eba1ea4d5cefb075fdb2980242a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41cc05267f44bb32e100cdb0559a99f74d5a804c4444c28f9d30cc236474590a1e9b5bc7e2455f70313bfb5c4303f0b6', 16),
                    gmp_init('0x6e2ba470317212d7624bf29ee1e2a7c042b789b6b5b414a2de06382ca2430fe24d4e18a2a48fdcfee2b377e5d26d3ad3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae072fe32925126ce8aa256904f9ffc7a6f73bb0a8827dccbee45fc4021f46992d9ea7965a323fd1d549eb3422849ff', 16),
                    gmp_init('0x6b4f9c7417d118af72058aeef7cf069c52f99ce047d42465f33da9c747917bcfc69f178ebf4830c51b10551b79dafe18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64493e2cdf95bc1dfd16c5fb012cc135e636dde94816d18e5e0e5f65a18f189550611e39399cee8d98bf4adbbee57915', 16),
                    gmp_init('0x790c7f8d6f8c8bd7a85d0f3480286012e9cf4f26fd184e0845e2e13fc9c57c37e2ca67c8511ce6266d129f66ed5348ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65aaabf862ad00a4b55bfe7798d19e5bfe4092caa86d092e9ec441eb4105b2f440cda4d304acfbc38fa769913591fb0c', 16),
                    gmp_init('0x30b0b73b3d43c324350affcf73c937ed3d05a17fd34aa78669e0410b299a4b2b3ab05e24275cdb42c37ac3438ff6a0d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fbc1a377f6553e3e7975d491f12c192910ef22ab0f1ceb83fdad75abf1ce0f6eb4a3c985ebdb6fbccf441fad0742af5', 16),
                    gmp_init('0x14bd3d0a17b4f154760804c8c09a2c54c0487f1461a5a3713d307cc9a04064e56966172b1a644800dd298c66a57ef141', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd03313cdf665b8280c2c30ce13856e9b9962fade4648d0eee5ee3035e36b292ef0b203e5b444339948858f81e36989b', 16),
                    gmp_init('0x75947423df8d488dbf8b840b2da9d6f553a0c5cc06c7d7419e7180e0870a99029838a5ff38de591595064dfdec26c5ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbdb134d7e15d827ee7a8af348f8793ce984096550ccd1c8fdab0de7c55dc7502e6b59b75fe40bab732a0ed0fea01167', 16),
                    gmp_init('0x6b97d4e9ed25db82356e032aecb4c77a8929ade356627996a918e456d254df99cf7cf9e763fe922952e95839ea2b6d05', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8c68de38aa8775264115774e377b5f7054b853e38cfad740b41456030ccde50cad4dfea14ec57bab5f54250c833a6977', 16),
                    gmp_init('0x2043ad8a4b48360696407c4b19152942cbce1729ef4ca5895e9ae83daaf9cf48b30cda5161db6e3c64e925436d2663fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x826f8a0246c3d76c6abffd8c7e01d8f8b52c145efb8bd2489525fe2ea18774c3dd1530cab4e5a2ab010c9d1e7f3a6409', 16),
                    gmp_init('0x3ad15cb9cc83807ab663f6448bbce10e3b42db0c9817dc7303f8dd6f557d34663b0c5d5ec39c338c9e73934fc7493224', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84598e2b26be06228b05db4ae5e5fac42591d6a9972593ff8fde4fd786be65e6e91976e55189cd9999339aefad9b597c', 16),
                    gmp_init('0xf33415a99c91d55147278ae8d042e2c8ec5e82b8b37ef5676d12be5e566257944b18a7fdf0921fa35d9553afa03d059', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fee660ccedb8f28d1fa92fb9b92801fa4ffbbf6ab44536ab7205c793ee054716fc16d7e1c2f0f379d7d05d090adaab2', 16),
                    gmp_init('0x84821fa288813a3f2eaa21773bef26df31f8fb762ac0d378a511290239590d8264340394b48b4d96ceb7f196bafebaeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x848cd64fb9bdcfcf6e886d9ff0b14d070b7a1f52a8a120f9a727077ecf212e0e29ad02f6adb2815c630db0c30fd21946', 16),
                    gmp_init('0x34dde1cdb96b091cb935a6a88e850c495dfb8fef6739c730cef633dd4b173cfa0ac3071f0de5fd03a41716f5947733a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8438244970c83c90e9edbc47cf133ec822cefa66e4602a2113380f43335645d06934f7d85fde876ba89dceeaa06f00fa', 16),
                    gmp_init('0x13bc29785bdc1dbcff997724de42ca51067777e6bca1e8fd9549c6a3c22f7879775dba9ccee9428da44e0717604201b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f6d8df8b5951020deb3c3d936832fbb1bc879cc100271cec4313564f57a7a3b4fa6616e0412948881d317cab5765e3e', 16),
                    gmp_init('0x4e59b98f27f025767aee3139e6ed9ed425fd0a1403b714338ea5dd117c763267ae8a2aab91a79d13c666360d9469d4f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b080405cabe0be5c19ee66477336662ed3aaab77e105c491271b010d61308faf3d6065b23c388327eb56fb2fbb98ca4', 16),
                    gmp_init('0x4659bb8c885f6d6d0bf250c7b6d8425c05bbb0aed81721f75756dca2108cd50b66ee35f924bc911c7a0fd68c57ed45a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x252e1ad559cf545a79cec76f1aad5ef9fbff7f04c8c3ea92ccbfc435e733a8842d5cce057d7804e92c798d8b7488587a', 16),
                    gmp_init('0x22b331b0562490b37efd2a3d1a70e43b944cb119cadd41548f706d53ed3c63b61ea5886f07427cdc17052df98b388e77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x767594b49c0121f77ea660c5dc9879c70e8795f82d5a436233005a6d148576b7d264eeb5223cfe587b67322c23c37062', 16),
                    gmp_init('0x502d484a2a7e03cff74e0da48533e67c3f9156b4aab3eb181fb19a37793538543c9fa462eaa4b332b6e7449fc374863d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ddb0e5c0793f6f5096ae8a866cef06f1b8746fdf32a68f327cd643cef8938eff18013220bd25a80e74fe6175c058d60', 16),
                    gmp_init('0x375f06786107202f57edc27bb795876f1d90ff6b8bc13a92c067d8b9f9964a57b4b0506d923b678bec83cca09d9b347f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f84a73b46475609884e850fb34264867af5d64681f270df315ce1345b6ff38d0ee18bc581e4ac7154bfd68112a38b8a', 16),
                    gmp_init('0x3c90f4aa4311e47fa6c06d9dc82daa51bb217aa1f6341be47eea27cd2a9597d22b49cf85ddb5a236045220f0ea12c34c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5851758cd6a2b7bd68fc1649969c83ac24924b28080d9b67b7c385fa420ead447752b205cf2eca79d198878e7d9e5df9', 16),
                    gmp_init('0x854c44d49883733265bf7892a648d77004703306e8bd7e4d28addfebea3f96d4d80edec0ae1d57ce6ce95b5e26f22c11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8204aa5e7f84d48d776f6168b60e47a0c61ec75e083cebb2d84c3674e7752e16a68100833cdecbf4e9e72068942bf037', 16),
                    gmp_init('0x61657a874fee6ba20f695094226ef8c8af67fa2422c91cab85483fc598b8e5b3d4b546e17f1c2afa05cdd3f7ec6af608', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bbf13ba852cb0bfa727ddac9b906ec886add3b2e997a17b1826bd7628b11dc8720fd461bb0d9a940015c21eb79ee894', 16),
                    gmp_init('0x4aa7ded25f80fcd4a41c36bd5cf9fb40dfc846efa1cac4060dd5ba2209a61d76cc888920983dabf53b1f80adf87e0aba', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xc265b1bf7454f2b1d027fcbc85488285fee0cec021817a8655ec7c63fb187cfe73c11df875dcfbc90f230513deaa2e7', 16),
                    gmp_init('0x386f0c23877cd8ee13cfae877de888d04969dcd5504120961e4daf1dc3c6c90b84575ee1ff650b9d938c948f09e456e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3580aaedb95b753c8c91c93da197dcb3e52740f1fe8e93c8ae42171b579a3dab25243fd969360da117b466f4bd556290', 16),
                    gmp_init('0x82854a2e72c6fa021c86c9fa9d629f16a3c420fac4235e2798749fec0edd4adc112bfd388f890c4969a4cdef3a98ddc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14f22dec043b1e5ba430ec10446c2b48df386e9b2aa9d1d5eb26db5bf49c4130ba578e147b3728a82e70dc40d390a0ed', 16),
                    gmp_init('0x69ee1eed3ab32cef9da032e05957a3be0ea6da97daeb5572ec2cf1ec2e5ea43eaf9a2cc96b675b10bca0e679d0bebe9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x289c95d27f106bc4639739053a873f2f73570f45552f3e518b80ef45ac91e949e763408a46624afe9b2e1d4d95365963', 16),
                    gmp_init('0x894a77ece79b1a7aa4265806328da785e401b377e1abfc25e45b5440c4eb691d1d6faa4f7241e862194081c03b17991', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e45b6b6596b0e45b3ca1d1a86b5b9996bab7b4512f082b5d0994a3d9ade46a83b03eac70008bad30fa1021dbe3a3352', 16),
                    gmp_init('0x67613185eee13339087890f993fff0d3e74b829ad3c6e14438bb43c9cef05bad3707ef09cf6febe787212b4a06bc533e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48f3ff05ad11cb4fe5ecbf6cef4dc218177cd343c2ac7b4527d857d0667a3a330b46b0c7a0d69d8082be92b0f95fc28a', 16),
                    gmp_init('0x805ad69bfeb31d98805403376cf49318f20d99d52515c7589c8c2e8252c4db5d4d151b3eb7fbc114ca30596fb4b2933d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f3182e1ebc4ec3c25d35c30767c2c1606110097cf47f177c74ec6d17636a0c6dfd00f221aa43bf2d04e69855a8ab3eb', 16),
                    gmp_init('0x4baec4bd1bd917daf8e04f0be3f64ff75ce254993f49de58cf9ff8a63b776b70f909600f2f595c9c3a5cd042f3c35b43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x546ae2f2cb71f56171eca5075b29d68a87a31f77860d8a99232548afb43ce6bc6c3fdb420fa970b873980f923bb1fc2c', 16),
                    gmp_init('0x41cb9c3d6e62d20db88751d51e0fdc2446d1639e330bbb8d610ad895d7449b6ce65f694df9c6648e1d5ad59c60eae570', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8af8bcba6295ac1cc0db7a81dd68ac6454a05ac4249deea4670e5ca02ceba4067ab530aa6e7642e022d5a4ec75bd5743', 16),
                    gmp_init('0x2d2569ea5c547befe0a1a54374a0063761b2173232af587035cf9ffb2f00d9b158c04cf8ed29da6bb9037bab7c3a6dcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69d7a1eb8b34feb399fae9ee88aa256c177db6632b56daab1135d65f1d5247430a3a342b294416ab51e9b61748717eb0', 16),
                    gmp_init('0x2933b38b5997341a59238c66b7de91cda40450f0ec5aee82349cffa1e2f48b10ef38ec8392608d809b8c1d8ab0b8a5db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2514f2e2de87f63e2b80a5b71788c03c467e8ba02bcd8b57055034228b0ff1ad1bdb08d0a7441aaf8382488821eb3630', 16),
                    gmp_init('0x4958f5e046bea243629c96d4b648bf50ddc9c233ce101bc862e45531b115e20e842f2c85005cdb2c63957f5a32145672', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ff5007e2455a3196769bf363344fadcdee85cc407d6aabae8a31438742331898275ca08657c580756581ef5f0710531', 16),
                    gmp_init('0x77d0b7464828bc1ca556ab177dae0f44f88201ad2b41cacc37db5a38b1e93d3dab4b10e49f0d1c4b3ff15df9d5d4fe41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70205b1463b4b898fb690fa04a17746b1987da8ab74fb3b513941b6dc914e95b354ddfb84ba1c3046278bc8e4bec2807', 16),
                    gmp_init('0x7375597311067c93a84128b7d9f0ae5c0696a0acba8f0206dab6e2182383dc0d9f114290a5ab2106d9fb2f703e569cb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x102e341afe6e37b8ce0ba04333b5aa4802b13130a158b93cba040bf19283da8ae118093b8bb9f3990f0ac91c82b46689', 16),
                    gmp_init('0xeed9ca51dd97d78ab98a42e66439cd9deca4bba5f003da740f4d1f9c81a8929c91d097eef5cd6896b80ecaa58c440a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b418ba9fb95422d4bda519ca3e8bf55051c20d7572889019b5d2311fe8127b584b7c9ec9d3794f7babdd7c410068154', 16),
                    gmp_init('0x2234910d06f8d29f34c45a41d8e1c31a8dd13651f77552b6c4dbf20e07a31afac31584910d2722fc4e0ab5acb02dee19', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3d6311b88e00a7f861047d6c401f461fcdb884af4018bffcd40b856f73ec59b61119cc1f7857b41b634477c1aa4af23c', 16),
                    gmp_init('0x18440bf584e50228e9a7265ebba8ead3b18f8f58e1f702be6f4507d91ac55ada962609ebd38fea6ab0bdcbf37dfd34e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67d865625cb77f0df74f6a2f7913ec7e0ee18b71cc211fa7359cc3b8be3556f8a8dd82213c2a7098ff7a6873e59b3d4b', 16),
                    gmp_init('0x8ba476f3d39bd8c0013742f48b76d187817300fb3758e94002f83a03abec3896e9cf2098c918dff3634393fc178752f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1458be84f99dc18f0931021ed3ac8a237d797d83a2760101c478c5f8f8a4a4a02369282b9061c22c1501e3e75ebef2', 16),
                    gmp_init('0xa0cb3b8b43ecf57d3c554c9cf959c2de1d94454f378050a98c5bb5adfc90017e50f4a72478a09bbae3b835a20efc7a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50aa84470e6bb1566acbb78e124416c4cd147382d89ea72d7e055a16a5ed113d85921b99279d580bbfa5d3472bb2d3c3', 16),
                    gmp_init('0x1cf154e41152cf47c8c19463df13933661495e524a684be738ad03be7ba9d3fe1b358a826513d38793689b84bee2a400', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d3dac11f503e45041f6dcac52e6d7424c18b7b03fc99b08c51e2c2e012bada1b674a156f858c13ad77c80f4a964cd07', 16),
                    gmp_init('0x7c8e40b4f6e75e0600bb057e5103e22c92e7a789e3e4a1a318aa5de2d1c25defef1d05c87f083984f9d562c4bd3be7b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20afa60929bff977206b1f33b0d4e6b262f41ee8edbd39e46d436182bb4890a595efa5f885d0087b6dbafd3741060fc0', 16),
                    gmp_init('0xe53496b2b67e63b7e1d437d7b8a4f382a2b4e8f98c06b07be70793d1d26aa84937a2ca494b1114f70d064742e7fe414', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ed3e24571ac543b85986cd1b13fab11b65e48eed66585d1ab516d1b2962ed280a2d46bef22d9ca2a20ee1b64b9effdb', 16),
                    gmp_init('0xea34cc212f3c94f040e70daafa6497497e91b45ca611814a5052dc68846b7b2e37a0be1cea3b4d622177d2f6ae25980', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x555e448542f1b08288d524fb72d850574e7d1c97cf0ba52497c3983f84d7cd995292c1841c57269d2fcafb57f85f429a', 16),
                    gmp_init('0xbe994a9961f7c4d9b3db9b1f386119be162ab116cdd3c4da6b7666b98fab3049031c3f17ebee18420b2823ddb9506e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71f80337bb401ff7362b9af8308284c53b94e30718fe03035e8a94383592bd8b1d7869e8dbfb2ef5b493f0162d5d2ac6', 16),
                    gmp_init('0x4316f294cc080386466478bb1349fcca5f7d79b81c0682526ee56e2cf5a4dcf3d3f9664c65153e97f59684deef7efb69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bd4d8f475e887e98c9c7dea1d6aa9e8682402a5e53aa6ed96fa8134787ea745fdcbbac7508de3a6e3df6e6a8abdc421', 16),
                    gmp_init('0x8769442d8a99125e4aec079197254e6b144352d07097d07d8667499fdc24ff4ce8e9a5f2a0549a47790e142e0795f16f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6708fe5afd7f6c48a1f2e68438c78a86752fe47baec0c2dc904d93b36e131535cd462b424539a083a0063b90d2c0bd4b', 16),
                    gmp_init('0x8bdab31ef67910cd85332a69512c483cb88e8cdb196f89ec573cc6a704fe3fc571c2ad89d20a72885596c1e449d8a6bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x570973bf15b70d42d30bb5cf28804b4fede3f2768bfd91478e999ce821242a044f04d8df68b51fb3f1c95c6e3cffee17', 16),
                    gmp_init('0xfed64e303cb7003e2aae65009a11c819227e243fc5f3ae3a78844174ab23718c2af0ca6fa36da89541c2c509d14f779', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3192015a7f28c5ff719ea2dedcc96819475694ca004dffd8b579e74a50c1fa486c15f5643d95486b8dad207a3475bda6', 16),
                    gmp_init('0x79c37bcc8e756dd5e66d5050738db10cdf2d4ba2e010d27defe86b9a50d3dd126c6ec0feb23561515c8f97439c396560', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88555badc17fd8c5d971ed97cbbc06ba8ec9e71c5a16e05dff385439b761e1463c605ae3be34958f7326d0d6d384d5ce', 16),
                    gmp_init('0x54698010df18c286ffb324d1fb8983eee91e252c3304d09d11d7fb92635509a3120bcbac4d40bf2d6eca520d04cbfe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70717b6cb15f02b32a9832116c5bd9587038fe2b08808222fb9774594f2018a7fc523c4af53f2a3d7712b8e82644467', 16),
                    gmp_init('0x875622eb460122fdf4ff3d7ee4d7cce3561ad8a1d4c68123457a09c9282ea12a426373e61e7728b97c6739d8f9fca2d1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6c68b48c4a5e9c5133969eea1098f1afa3e4cf70ff6e2bfb4fdadce394f90b85c5996f31b9073c5a2245e851a4e4a6b', 16),
                    gmp_init('0x3111adc26561fd3e7ca925357ecd1bea0263523d291a98372f49251b563d3bdcb12059fea8044bc8eb083a86665530e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cc738ca10366ce3d4a59aff75763c9475b41b0a1c2fb5013e4cb9a191898c95ae23a062fc345b0a8a83bb00efb932f3', 16),
                    gmp_init('0x3bf352244cc5ae32abba738d0b4e1cdc2a66a5c5b65668aed8c9d0e7fc11c5685226f833ce9daf355ebce1124ed671d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84864d7ec78abff686a052f29c7f2f1eb0f9c86582a3d16e76a814962ee80adb3f15e57f9ef4a7121d07b9f2d7e5aa35', 16),
                    gmp_init('0x22bfc9b0de046b4be92fd3fe7d734cf8a595bbb00efe695c43542c3b87d198f3a7810331435f2863388ac57c88e2bb33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d9260d9ddd14acbd547f5b20dd8af32a97750c7ab0317f4be0c8687c404e0b76754abae47286ca9eabcaf1ba0cf0f39', 16),
                    gmp_init('0x84a0fe67c0b895c1bb475920f4973dbd960deddb8ad8edd1a1a4aefae34b5ff87e3b1245df7b35f3d8b78883ee4ceb22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f90d4eb222e8efaf9c05d84eb1f0acef427f87f45db9a9bb6567791e776110d7f3c77dad3e5febdb18f4474bc7b7c4d', 16),
                    gmp_init('0x8aaddd2645d853f0d60a72bf6e567893abe6925a04b76a36ed1a690a763e8f44cfc0166aba9658c1611bf333e00110b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x321b9a8dae5cdbbcbfd74b7bc2f885bcb957e53c18a1bcf3567c9e00507bf2fb976a35ff3fa9f153418cebccef7f082c', 16),
                    gmp_init('0x7cdd2d15ed06f11607951952ca5dc57129cd9222d7af8b2a76c376dbc952659ec9688e8a13a753723980034ebf4fc588', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1374dd8b2c41718de68cb3d8f60556414f53067fb3dfa56a44b594099e559c31313a6c9785a1e040f0c61a045a93c60a', 16),
                    gmp_init('0x4778371a2f415e3c39302cb30a2c5d1417f7201d3acd260781f745759bae8827d31a5c006a94c7ccf6770c50eae62c79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a1b678f5cd6e252abc35dc5ca341d98403edadf7c454d5b88f7ad866dbc714a83a7a116e7985a25b6eb810eb9115195', 16),
                    gmp_init('0x2cbbdef6160b369b51ba70147dac852a18290c0142f40d0477d40de63d565531bd65c297d47c2e339e758c3873e0cd77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b551e9d36a0d74e3e8f799d14314086ff88fdb0680aff9aa43e3a0d84009009fb4116b311f9bab440114e166ac32487', 16),
                    gmp_init('0x1b856a8d1b84812831c2f9ae146ec7ad14c5c2380351532cf2c0c69067f1320f4396f6ab01ad0d1d7809ada4359eb801', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85430dfc437e74f2441141cf5ea67ddfb3b8d2e08f847ab4efb64c75b1a891ad80617d35c166ef0ff258096b822ae8c5', 16),
                    gmp_init('0x1437031d664095b7e1b077b1d4a0ccd40d9082c96fc3a465a40c79865dcacecfbd60d35a555185d53acfa0b6a0cb927f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c22b6134fc354ddedc6715279f75136f207cd6093dc17f8d31b3645eb3184fbed323aa4edcc98af949c44e20a40b868', 16),
                    gmp_init('0x8bbb0e1fd4315add2eaf2cdab6912bbc6c23a526b7fb51e41aaf1c9698c8ae84b52b8884cdd319fb9ddf4d1a1b938e0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x329f9c004acfb1be4d27a18c0b26073842b6a2b1507aeca0af51e3494252b018d7a366029b9dd0f8b4f533b80e5494f2', 16),
                    gmp_init('0x9ae18d5794d40be7cbd685e9f6884918769e0747ee721d3ca1f00e5590564e833367f4081b698a20fdf03f6518fdffc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x386d973548b951431b8c207491f89b14f1c06733b687b2ac1f995f230d5b6d00fac291b9e68ace41a81222da5ebbbc1c', 16),
                    gmp_init('0x6cdca7ab7730fb6f7f7c248a950053503575d83b9c9ff9a46d411ce13531faa654027820ba3520854024f7d17a3c0eec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bd838a50c3a33b91229a2578ebefc1ce5c88d18aac59e34d6529f42546a88b4e517b8c3af1fd8170ba5acf2dbdc7787', 16),
                    gmp_init('0x83e8ebdf8f1f1b56187900e413ef284455f8babba4b7a2eb803461e23d1932edc0af4868eb823ef5510b4964ba89647e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43521cfc9b5b41ea7c9cb55b11b68adfedf6092edc840ad432da3d49b5a28aa0f27f8ffa4d85858f633f9a49c159040a', 16),
                    gmp_init('0x10d82c23c3c265cd2b639cfb92f214a144df71af5407c50ddfe240144deda8369c09f6ed0382761c33a0201d84cde043', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4b218d9363258a38a9931d284dba9abc21ac83fc037b4467d1e4fd133d0eb89f2b41d23d4bc7f4dbd5549ffdb8d8f8ee', 16),
                    gmp_init('0x9eb9a37903b255ccb8b31168eed3a79a2cfefce4406afb129620976e19f2d1bd0cf4726cae84be4b7f7edf46da56a23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7320cb4e6aedab0a226c900865404772df31f51be2850550d578362f3ee48ebf7e31b31d1b2b02b93d2e4c207fe447ac', 16),
                    gmp_init('0x4c8c28dccaddb36260e666ba0665e95a51518cf4e1ce8097b109f7242593740feca3b43f71916aac173a3b539cfa9bdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fbd15c7ae9d810e37084fa83dd4f6448066bc686c5a5898120fd7c75c3e4f41efa5d7c4c0101157245c4a0ec47cc92e', 16),
                    gmp_init('0x657565e0aa34eba4ccb8a2ad62dd2fdc806b0ec20ad97c08f272a1633587fc8f37c43f0cf5e45c044689763dd1ff45f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dbbe6e044bb460a9d9c4b9a90032bc1983ed26f4718ad1f7639270cbbd24c81bf04dcb4604ad43d822be78870bd8868', 16),
                    gmp_init('0x28773cb443954c74305ebd884181e119a7b114fafee7c025c85613ced287e7ff201a97141d7aa4591bd399a40b3961da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc0a19cd57c444daae324c57e1a315b5912c3fd4c1b1f41dcd93ed0cb07cbcc03bc0994b056e04fcbc2069d3378a192', 16),
                    gmp_init('0x5ac85ef4e461d9f61bbde0bd75559a1b7380b19ad4372da250dcb3ba6de0ddb9269c583d854525b3921a0efffd4e6cf8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ae0b5f5d52d286214c6d0446660dc3ec28108c314450a77c10822f67c6adc896b605ec361058523bd0cc06f3850ed02', 16),
                    gmp_init('0x1576224d2333c697df07b5c308bad1258a0ba6c872c98084e874c366520d105fea4948320319d2a6fd3776569bccf910', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b8d48fb997b75b7994c34fde7e66a99dc23348818f79c882f44afc62e3e1ef10c882a4201e2a7c1e4f703966ad660f0', 16),
                    gmp_init('0x59f65015f8ca060dd9ed070e14762a28d7b397349d3af0dd18f69d4fd5030db12e20df1f7d1d7aba63a862ad1241de58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b1aa0e87dc045c6a8ee4fa80d15e556370a0ca120e70c39582af59ce56d2bd02f72c05b4e914f5e10cd8b53e860452', 16),
                    gmp_init('0x7695872dc81cdcbd2e8d00d60026e98cfca4847f86486c9bbf6c470f4bded80a4cbdc74acc6eb865ad08c83e24dda174', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f36d55836dc0c38b48e754929953abf42db7432669fe9be47597375bc6336f4e2f970f763745afdb43878590c448bc', 16),
                    gmp_init('0x854750a4cad0d92dc4b84cc8475ddde7275f6436a4bf597dd3c0b805e4dc3707129b7e4f25be3f538e649d7fbed0abd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89e75506d14b58d48025b9cb79843a07d2768756ba7113db93320b504458042c84fe0fc0d66f946fea7da4407f04b6c9', 16),
                    gmp_init('0x26a3300cbdee5ba6f4e7d115157137f5de8009acee8b800a9586a2f8ad67955cad7eaad22c0a32d75106c14951826d95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x803ff2b550b26cb0e98fbe264991348afa843d14b975f1e5f8cf633b55670be29a956dd23d005017a1655a48d953dc89', 16),
                    gmp_init('0x436be9b4c6154c9f68a2942dc58e2bbb6ed7d68da7a49394d6b758086ca6148397c48806d127a2ea1fe1981c35fa0671', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x231f3cc27656a98de8694c3b19b380160096750f360f4e28cf423bc5b9c7b23e05d0f04b702a7fe91d8fd60e3c875aee', 16),
                    gmp_init('0x8a826a77e71600af7e32bf0d8003df4870db4fba88798a6bc6c3dc0092217cb184dd7968b7bae27aaae8e2c2ae074b6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc317f4d709605bcdfde40f42fc4b34a51c353b4fd468be733b986e94aea8ac9162fd2689a3e96716a699fd4b63f2763', 16),
                    gmp_init('0x9590e942727fa815ab85bb92bb529f8dc1de78b18bf745bf4708a4de0e89b2bbbadb5479003bc9b16fb23a0af0a0865', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6de239c2d6da0e3d6b3a3169c650a17c2129cd32e1f0b9d280d2601d7ed026cb4d20fddaeb864bc89a49554de0c75f5b', 16),
                    gmp_init('0x3c68ef20087807d1962479be88f165dfb8ce20ab569198b1e356d79c69886ed22c052d319e76fbc6c64bc9116f8c3b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5309e2c611d6766b896c081cfb04e36376a3ffc9eb2b5cc764256ccc2cec7081c3c848c94673f5bbc5acf9d81b97726', 16),
                    gmp_init('0x26953a9b9522d99a125476b75d1e8a36e67b52c4086c8fc0c574a6a420e61c93e95a260e22efd6ab7b0d63e86a0722ea', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x67ace593bfb1711e45932c3ad094ee8d8067f2a5a3050b287a1188e6387ca4bc8690afb4c90575e5b61e9f1cb9009c52', 16),
                    gmp_init('0x2f3e6b10e6834f16ac74383b85f3a07a541268fd88f830bbb140a3564bc8f4b2c1ae17afd66494dd3a9762111756ff12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5966c83cbaa6ee29d936e1b84adacbbf1e5307f37a425a01ca9f605e725e4bf13be7109b8ec098e26724eed29460e530', 16),
                    gmp_init('0x3fdbec4f5971ec58d1dc2a2e9a6b85279d38cfc261f8bdb6e5b11bb13e7cb93e7101f50d7448204f0582f2d53735fa52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507ca4f7986d61585ba27533028d6e2fa5ad0c101dffec884045b579d525346e74cdd26632a9446120f9a99ede2514b4', 16),
                    gmp_init('0x741dda324fa492130fb52b4ac2094aca6e2a2950870bf974ce6f185a9052d4c792706fde9ba9e2381b2be83aeeebae58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e70f907aeb619cbb68d1afd41aa315fd7f9df17b10a7623ab3c895b0530b9939a58db542e979c955f01b8af50643610', 16),
                    gmp_init('0x5ebad0e6d42d1d44b0f524b1757b55d5cd3949398d58f8b25e9f3ef6b9e071ebba0a151a3d6bca457b34055ffa2af7ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b54fc4cb10c003ac43d63abb4a8400a861bd36f7aa42e4e9f4b040038c4438dff8940b4d37b95969a1d46a143bad261', 16),
                    gmp_init('0x53d8dc49d9392fc6355a82a000ab5fc3b801369b275d38a08b321e99fe0c0b274c5630fed7630fca6806ac110fb1603', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb105c7c759968cf7c1878c37300bf741394e5d3960ce1e172b4780a4f1c914d19daa5d46bb7666f924a8f5d5debc642', 16),
                    gmp_init('0x4d2e3b88ae9ba93244bcecd05c39078a3efc09051f7c3b0fba209ec7428f050e1825c1d8550010ffbd3ecbae231ef35d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30acc9c3ec037e76ed0433d4ce8629c083652e0fa68c922c10c695120636ecb63eaad44778f9ce3883db5e768caf93ed', 16),
                    gmp_init('0x5b8316e70a27631b85839f4a187848fd861987d1b9cf1ff260fe6f2fda0ff78d3bdb78fc756472b73392d5a28bc81a85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1113f55e760cd4f330f8a4fc92947dd092c69e180a984df77acfc83377c6506c3987a8e953c10ea2181c995f7e6e99ce', 16),
                    gmp_init('0x1fd612149ed94ea664ebbea236161b4948db0e5df8b3e72cae3ccee56b868f7aed046cd5a6c567dcc84fbb00d20465b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85b2e7908d2dc213ae66d7dcbf2d8c3daab524d67fcc9f837c95e740ed9548cf025e8c139a98dcdfbd42906780bd892c', 16),
                    gmp_init('0x8c6abc0c3abb5b5830efbe9a42863714433f7256e008114042c6071a2e413c5560f1174f42b1150e08dfd147dabfcb44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37b2ec796f5872d5eff387678f1e748c3b2a672967028f330c5e268bc9b2debd941847ec1209d692f19646649e15da96', 16),
                    gmp_init('0x31f92c7937664534425548931565489e380c409df688f197b442088f51e170dc5038f5c55d4146910e363ffcc18256b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24b3f6b3151a290d9c5bc3bcb14c13f33a233a138d428cef4bc043dc93b3869efa270a5b3f33342d2e0b99e0ab81ab6', 16),
                    gmp_init('0x2aa53c5cbf15c87921e3766d4dc77c49c28e9d2eaa913a73ef000a7e1e6941fb1d8b0704bba3dea25eec7ad06ed4cfb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fe1d41ad4925a4e759cb03333cd5c627e94bc6bc6631482d1e989bd20e8180831e7626c7a549a321c3cdb2c12c10b4d', 16),
                    gmp_init('0x164bc6f342d87dc7d331eb66a2a266417456adbc888bb79d09d1f9b60fc5e59f9222868567e3f8b974e79affa253c676', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64d188645f559ee5a3c7bbc546d94bbf680173082cb11d0e3cf52a87514f1bac1e1af0bcf03f92df5889808c464a26ab', 16),
                    gmp_init('0x218ab2727832ed36c241fb3c2329fb2f40b59d73961fa20a7bef7cd4c3689678a2c42e974f6122facc6952d6eb810508', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ba6a8dffa87eeb217d6b770894051c1e4a133f1e20c90e3d735504026c6b5290be0d8f3aae45b019ce8c2733d6f7c3', 16),
                    gmp_init('0x3d56e6e51e4b2803ab8f4e14c562f9866411b9e1df7baa97d1ceeda134d77891070f815dc3c14752b71d211ac5e9c4bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x162ae0912b7d673b8d536ad9088aff6cd94098dbb94970b97804d6b71cabe7b54f36c4e809825b0aed5b61739a2c49b0', 16),
                    gmp_init('0x635378f6e10dc1700d317f367c0294a59b439ade0e70d0ee90e15cb2ad1d687124e1b06e7e6536d407eafa3d7ed4e7ad', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2369dbb6397c99f18974b5688e81af98df4ddaccbb1fdc04e18a5d2d02c7f72702a353bc5345a9466bf550b04d994b04', 16),
                    gmp_init('0x6f47b11daa3b124f93b08775925ff0a8127368f10742fa8fcd41cae93334ce6643f143e6500cb2c10ee188bb14504c85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a9d6bcc354ab66aefb8d283024d841753e4e8bff345a910f26dbb0dd8ee04e982b735dd82677f2d405471743cc2a64a', 16),
                    gmp_init('0x32c0df487e5344a39e8a0ce27d421174c69e12c01ffbae9ec9f3b3c4b6be24b178bc850484c05c4c80b47c4613cc1af4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a39686b9893bb648fc1abeb80e77f555322a20f31bc313018904f3b71c2cb47907467d4694c1be3b7248aa659f519b', 16),
                    gmp_init('0x150589c8277baa7b28bd77bbf4ea4f7436100bb7e9a2956f401e5d305631d67435b825821e61592b4c31862b30c72c58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x260e3ead9fb627579e9978b3e7fb663580a1d4e0f4b58412cb3bd9ac121a49b68d8da67f5aed2f8d67f49f6121fd32e5', 16),
                    gmp_init('0x822d842a07e1daf5063e0a93fba123e336411cb15330789ec49117614ec7445aa5041e3ddcdf2b1a30742e3eb20109e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28b8093fe0bc79219a7a7fcd69a3aeb1f10af5a05e6bf5469c0ac21d64edf80ca354bc38d0dbf89210d3eb053bfe0cd5', 16),
                    gmp_init('0x6cb549802578640ee1ce4f0a68a00b0996f05ee2e731a48804f54c09d927f31c2f260435119253fad01c496999be5492', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd7ed2d762d04d95f2c23d1cb7b88e3ce696879e4ce6369063841856d476c90ffb4cf0139c0d4d5059393787f852ea6', 16),
                    gmp_init('0x63b022c7c3d075b5cb90c252ef27942c264fb1cc97dfae430102f0d8735fd4c9e535b20f24a7c25fe9de8cfbc336c5df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7562e7ff417ce4a36dca7938378d1e09e8ca5a87b68f97195387791774afafb05cfbceb2f0f5c2b59ec7691fef4b486a', 16),
                    gmp_init('0x252d084712bfb9a3ec6f6912a1c5585296694852ce29e8a65475f1652cd08ec18390cd8597b19daf9e4989b4d649e919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f34f90fca7310b1e63667eba609dc587286e19266a17cbb695821e460c9dfc8aadaf852f2c325e3ca2a6b90016076b6', 16),
                    gmp_init('0x57aac92a2e0d13267b6a4211a641321080c9b4a1a2bb753280a361ba0ad866e6424fd66ce3d52e90c7b1fb5f33a2f662', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cf3507a1db9ea9b71fe922ca66e70920813d93cbd547d1364ae6632de9944d5cacd160476a8a57f4a42f4efa76f5442', 16),
                    gmp_init('0x82200ccb0347629f527798d512d2f1835c226c8950130748473f1687db58017f60654772bdc6fae3ed83174a24daf6a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79943704b53776691035edb576004d7bc2b7bc65501c99cf98cd4581e3c0ae50e5e96fbc74deffa4fe251f4e2ae70986', 16),
                    gmp_init('0x426d422a2915df46fcbafd19de4ba078e410ff648f5c89c93ff64506545ce74f216aa86ea212e392ecb8a38aa73ad9ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8255f36255b0aeabbb09afca8a2b1ecaa22bed15bbad8e0cd86cb0f240420b5db8248fe5d85d470987b32aebea1697ea', 16),
                    gmp_init('0x4a06b542011016c029045192def2887402bde05ad197a493f0aa837b5dc41f7fe79d6bb3ee2ed59b12ef044c5a851496', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b5099d351af9f32dd1de310cd45d09db078f7121a4e333c6ba2918f4c7aa5cfc7ffa748290fc776f42340fe2c8c54a', 16),
                    gmp_init('0x73f9a304c11e10661caf2c4e1564d80f5942411479bc29bdfb9efc64b3fc87a138d1fc7c8a4f27a7d99470be73a9c81e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bfc73ca30bbb6b18cd126e4999f50c3b88183ca7be8eb8c095b7e89946b3ec23851ba3fb696f61948b4ed54abfde354', 16),
                    gmp_init('0x43a9b7f3f267d71a54837e3765584efcbcf2ea403936c1774e750770febb625b2c8682ebfae4856b9680c07a0e7f3989', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44fb6337e956b05788d4e1ccc389f978b24e5fe71af23dae266c1c8b03a65788bedb7a13fdb9887abfb7e37217018ede', 16),
                    gmp_init('0x862d3e2b3b0aed20c36352591803a1f48f147c1ab417f4a0a922fc45e508436de9d8e8778c63e9694e78a905880665e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6af8b9a55f2a97b43840676f13c27b5f11709e82f6e6e93dfb5fd8ade92de82073d3456d920a169fc02c4105998e62f3', 16),
                    gmp_init('0x8c75fe9ec812f3c4d90357dfd2b89a34be7db62b9f56b947ed3ba6f43d7fbde54d25a7306cc9998c5cf2c475e2c5402b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x390fe80bdead76a8348ae4bf99ce7818bb3065025a14bb5ca224145b8aebbf40dd0c0d2dd949157ff7b9ca1e557d4b7c', 16),
                    gmp_init('0x6376253a2990da85dfed7686a9eaaed9b5f4888cccadadc177e23d1c419b1947d2d440a97c8575ae2c4ce34069595be7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a0c5d44f37d793e63b98df77fbfc2f05c458b48e972464eedf116b05dca84b66bb55b5eb8756d4004ae449a6dc04b4a', 16),
                    gmp_init('0x24378014ca1bdd3a4c0fe976ee3084d6c8c46bee5e16c319d2bcc3c546cc815dd63a8b61e6895977bcff02b97638ebb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b74974bdad3a76601b605a07ab9548b30c12027fd77be625d8cb88ff18fb6fa72826eb64c73f3d058a709cd5e26ec1a', 16),
                    gmp_init('0x14b0268d6150fa4e6927a81b9708090cf693af6d759d0aaf4fb83cc1a593b28eb8f185098e7163209fabf09888d451d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x345d88848ec121c4f81dacc44ea84fc4f4bde284447b2f66ff36ed2e7c020814f532ed85e7da4cbf57c95941db903d18', 16),
                    gmp_init('0x8038b6693ee22fbd4116ce75f4b0a48be8e3d3a8db113362f8de5209602d226137608e98cba45b39bf991b93c3f33745', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a769eefd61c7410ed0a13aa1a1b15b1c95e06ff38faaa3e6753663e95bb4bc6943c88db5876dcf08b29c42ce37390d5', 16),
                    gmp_init('0x5ac51243a7687077cc5789156c52376f5420402795c0b858f7e4bd26eda984322003b1831f87535b435ca3039a8f23f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c7a02db21946812818d3f4ad3ab538d49abdb4b9f2808fab499007616a5ddae8d79600d3073e6c0d9d05ba5ebcab91b', 16),
                    gmp_init('0x370a3d09911021391ba6ba3abaf3bea16dd393cf84e33801be5a98cb6526c54a35bb99828577fe31ae102078a9b4c0b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53647ac33c8800e2ce1ad0568603267bfde1f8e9d3347dfc38ca78d7ff02a55b6b71ae66325a2a4c57853ce338fe39c3', 16),
                    gmp_init('0x3b2bb7b74a5d252d8c720bc150fba60b04c01097a3b52852d853046c974071a099ffefecf299ea40d1a6ab97713ad94d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45cdd1d251ce1fb442ded7120afadc2f40cfbe9b588f3e9392759fb7d361c640a83799677bf9c706a4a830ba909bf5d9', 16),
                    gmp_init('0xa418027d8779d668998915da4d37fa241cc107fe13cc58034b11f0daa9da20ad2710950a38d4cc82ce12a0d46d103c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1ec718939601db5941a25fa71987c4bf79856e24438bf000e4fd38a346146503e44e9afe13ae1a9168b3b456c50cd6', 16),
                    gmp_init('0xc558d36b4a0d2e4ebc58d15a5ab0d5d070c0066ac78da40580009ec4d010cc1a6d629a74f177fd0ffae83e92268e2a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d91ad7c3518ccb368924c0947d00e73b192676ec358c526339fae86a1d7c857810e54353463519188e47b2e4b66ae55', 16),
                    gmp_init('0x688856fe3b6f4100e7e1da48a280e1601c34ca4c0224b0b2810bc0544b5a647b0116b4a43b282b38f8595f212ea3d6b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41654964689810928e6cea86e91436fe60aa27c08f0fe7fc2142f4df05eb3bfa85a958bb6bc55f21048f94af6b1f28a1', 16),
                    gmp_init('0x75d0f13a3010c4ef162bf8fc32f8c83e5be7b0a4c6792435de3887f7f4f63b7c1af5acc3b505c0cfc2c89c837e25660b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b9398701da35e9d68074c773f9f1d975992b1a00ebc741b4ac2107987f941bda975573335f37610e3f4793b2412ff70', 16),
                    gmp_init('0xb3c889cc4e770cf0d3aec60cfd8818d7d8b708ac12ede0ba4556e07c72d651157e39c4596c52ea6fdf7da1d5c8b4a0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5326302dea60bfdb2a2a8c989b0184f6867722fc5a52e9074fb9157655c20b54e2f0bb7e8622c49be180a33a6bfdbefc', 16),
                    gmp_init('0x1d93a117bb38240e7f34ea61ee8198b5d4ef0c5c8f18f5c069cc75f8a4932a86c81d2912657212f555bcafb7ccd13b69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f40b57f6756eae7e41968de84ef54a7fc8371a0fc5ba0af0cc701c0224ac2f0b528b0ead9cd8a39b74ad9283b9b4d5d', 16),
                    gmp_init('0x10c6c8eeb185b365d624ca744af3b9e72d60b0941e66aaa9081abf333c5495279ebb62f7f1a91a6c9d653736d0a8fb4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x377158a1cace5636b4eb77602d9a6a228028936798d6e94dfa2f81d7526b2b95b9bafc8214d7f601e93b4a99c0430dec', 16),
                    gmp_init('0x5b81735f9c0ca88dbe4e8ec96a99775498cccab84814ab0bf0c20efb4386a1f4e547b9f3e860928f9ee6cdde2a991c5a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x81afb8fb35d149d5bb9aab5f9c4b19c24a59998c011a3db61b9987031ccc40e817ca547aaf55c520fea11744b4ab8baf', 16),
                    gmp_init('0x4ca45b9192d6ae5da61a256ce3877755d3a031b7801035284a17a7147d629ae89609c75af13415738de4605b58706b1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a8da0579e5ad33493621a2972e2732bb0064a02eabf2e3fa0d56ac28b929b66b803781d29658601d1286eb355f9076d', 16),
                    gmp_init('0x87195dfbcc4bc9020d04102cb13e211d403afda9fbb5a69d3e3e127580966e1ecce609eed034aef2f5ed1ea4294a873e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0d933f8d53286990779f15397b8dec2a96ea65d897e320cb7b91727c2926b833a6a9f3a69d196df66117027a44c095', 16),
                    gmp_init('0x2e18377c7412a6cd152d9ffea9a9fb51c4dd47d0b0d3d0a69c50133a9b4ea25f01acbd285dabe05f02264f2003a16e37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ff7e7db2a258c6119d2965485a1d265bc8ee8a62aa2a9138af289bf2c0720726fbbba43bebb5e16a7870956ff830931', 16),
                    gmp_init('0x38946b6f5daa16d0504cc461f41f6a643778e1c4250ef848c918742b7f2c6e75bd44665a2220aa6b774925feadf3e60c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56e1bd3ee2c01b6020d9eab80bca1bee7f8bb8896b2969eebd0e92f066153be7f43a9747bde5e2f93dd42bdcd7d64818', 16),
                    gmp_init('0x3bce64203926ce6e5df0cc1ea4de1ac38d98d97552aee9cebd1d2ca849efcc68a82d4acce3b620d088d74eb365a06207', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c370b55758632f3708a38dfa01f6eda275b5c234e4b67d3d36bd912cbe6d2d31faefa8f4f48048f0e2e83406059da21', 16),
                    gmp_init('0x64d40f6b9e1b499bfe448a53d01440a7b500de5ad90656598df841dfc0673f67bea6294ce0f3cd446a1046c5478f90dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eda0bb89d193fd2e74095d115217ec948e8b72f75f8e6f7409730a7ef2bcaca3ca1b5d06b36caf9ae62e1fbce0d51b', 16),
                    gmp_init('0x4c883aca5d96b545eae046a90800f08ff790d6d4cc742bb261eab75ff5c95f6b5c85de2de3856b3945663329fef3d941', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79eab095c0caa9e1db27fe65d0e63ae8842fb43c3a3979417bbe4320a56b0d55ac510ada5cb54060bce7b4f52f610f9d', 16),
                    gmp_init('0x58f68cc720916f8c971407b1094b9d76137650b9d95cb2d6c1c6054550f5d8c269f283e63efde158ca7fae403e368433', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x476322e2aeb3ff4b62c8f7640ccb2b55cdb7f4236935b2645b79e56fecf5427a0789c41db3a876baa4c26db036881827', 16),
                    gmp_init('0x2e0474020bf4b36d3c2601f1af0265db9510a449b610fc4166b8ed559b61f60fb67f8074ab019fa403ce8604b947eaca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f1526ee98d1b221ff1cd71da261aef5f3403437005640936b2d47d8ce43fe1197fab8f350dd3d6ca121825aa07f6264', 16),
                    gmp_init('0x66f2a4830346624bfc7c390624810b25f344a28e97e047880f84ac784bca17fd33a483b668a171fe39e47131d0095293', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdec870a34c21f0495d69028c1611e676db927baf76d4c3669153bd0ab4125d41b2c9ce4bd694aa0d27a34493d413418', 16),
                    gmp_init('0x3f5845e9e30ebc4efc0296e412199915732146c949ac61bda6d1cb8a64f3d3da15d4e44f089495b0fef58de6f6be1fa3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x447ebf5252157f56a66d38a89920ef1dbd3db34394c25dabef06ddc92b4b3110baee9a7378a08fa82a452b07e5c86cd', 16),
                    gmp_init('0x3d1cc4f072a4d442c7cc50f7b68140c812e65899433cb4c48d6745b77fcbb40e385e3e244dcabfc5832ebde1cc90cf26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x600e57dbf04e23148304d869c094811c48fd3845d3f09030b2e240c175a7d1ba61dd2a72537c1d6ee5dee0e63fafd227', 16),
                    gmp_init('0x795fe3df2c391e1a7a1d2bbfc0eb53dafee47dcd1c9ef79a03e87dd8d05a9ddb8dfc4e06313e320a97152c5c9ebe16a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e554392eb9f0e06849a33e5b6c9a33b01bf91d0823895cc9f0af67289c524685fe0d7c446a069f11ee775721e9c072c', 16),
                    gmp_init('0x2366f6e18eebaad3fa05f15bf837e356e60c71744453d4463d59060b3297a64aa836a7ad27251f819248bbed5b99620d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fd440beee9c6d9190c31103394188b9863a1281b1217caef2e081537478678bde3314c8309705e3727a157a1f0add0a', 16),
                    gmp_init('0x6aff1a6b41b6ec042695617ddb7ec0e371668b92e0f590cc821ef4eeda4cdc27879cfab63820fc52fa39cf1f2b1a5964', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x770fbe60287d8ea37f023e556af02ffd1213e4501774edcaeaaa025455fdc9cf979bd1e52db178ad5eeb44b9bb47f316', 16),
                    gmp_init('0x40db3020933cebc83152fbb2f1cf63196fbe3ee2ef04de8b049d30a06e36a4f596f5829c3e5b660e7c438adc7c425be9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bddc38226fb55356c6e18497ac54ecc90f98a0957f63385251d21e11b727bf1b3fc324cf578ae6ef9601149b1c6b16b', 16),
                    gmp_init('0xc8cd1998b952b354b5fff980902852e18f5b4c230a003b07c6378c4eb88f7570ca449eab3c058fae840e6d080839da4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74171db094a222e6ab6bb0cce81e7ccf67b35b04db327175cbbb09ac40b50cad87de5dbaf31712a62a87931c9d733942', 16),
                    gmp_init('0x2b259d9ff9125cb7f1c6b3e79267baeb4a4a720db5abcf938b6f871d9b04dc7b18fe9e8193edbc6104c347831bee8c43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x630a9fdfcb3bdd71b5f1f16807e2d69f2e7bca0733c6b3f557f2827540607f6611f91516d52287d781090a3ff1a77bff', 16),
                    gmp_init('0x6e37c7209669d5c5eb2e0c86fe686d160867c8e59ba50bbf53450f7cd78cbc5711e0c2f1b12230afd198d256cc46a5d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36e3b1dd7e9acb7b24850bd24dd6d2f25528db0f96ac7ef51754fdf470e073bff5eda5b7ef17db1456783757dbab7c4', 16),
                    gmp_init('0x8cae1c6cfe108bfaa6917d8a4f35f58e5f500d3fba5d915949d0e436a2e9fa5c96dba7ec4b482b438b9949312a736d4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48b7678f6c256c446b2170ed0f5b17f93df427b033896fb4bfaaae886876a05b0c2b4e17148b01f6eb1effe16438892f', 16),
                    gmp_init('0x1d9991c5a0f6aa17f055614b78eef8a141826daa7d089c9cfb0be29fb45e75fa38243139773ded8ff64d483e39334d3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15fcb685b11f65ef61b271b2efcb1f710d537407638785f3960428f0abb4763b1b1ae6142f0d637fc35583eaeaae215c', 16),
                    gmp_init('0x87d9b4073d620f9284997feaf64159bff7065716cd7f59a0d53a4001bc4e29f8db54407086497393271d133d15da42e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86a48d47b8746b97f861538d86cd0144741569d0859eec269a836bacb2c7b6ee13ff6da36fb73776b820932396c398eb', 16),
                    gmp_init('0x778da67007041374820d3ada7eb42a6fd768f103223c8fbb8466fab9a4db5c950c88bc7eff9d63a17115bb7e64067d79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x154da53f3b9d492df692896521359b07311b1f2e2e9eb327d781c2b48e94033442ed313e544c2be6bbabd670437c1b25', 16),
                    gmp_init('0x6ff72c23ee106abe6759c435270112a6da986140f849d63d7a380a5b27bee2e24583ad9faf08ba5f5c69528b396239a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c7187381b64bc4299b00df77fb2e57b17a281e269e816d856d6d3731c4a4249f8795745b126a2967bd68a0f399060f2', 16),
                    gmp_init('0x6de32261d13d56b767cc57226b9f277dca4a22c65a14f48f5006d2db80e49ef3fd34a32241e9168877904ddf1aaf4b8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48e8b5855fd8c9c8f2a62e9c5fa91449540c5182858edcd1276b7a3dc6393581df9433a6e1163ee5ffa70e9580b920cc', 16),
                    gmp_init('0x281661182c4a10a3fcd5d9c90f34c8e6e47d006d3a528f91bba8215605d5803802220f2ca37739f14a86d3b299b7a892', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x593e5ebbc2a655646606e3a60c19dbaa0b0e736325bee32ca97753dce7a9a0578a5be69d0cf1a238b80e054248730ec8', 16),
                    gmp_init('0x3d19c9b9550c3f509de50fb42205d7378cd6538fbed01b683d4390065eaea1f60fed521f025120ac9f34099f077ddc69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d70c66ac935150272761bfd9099e721e4e9c8d2e7c727f10334f2ee5167e4ae0a8b98c5f0ac0f54fa9125dd8a83b9ec', 16),
                    gmp_init('0x5a11e17531dcca4cc1c2cb041e88491b7d9981992d78b1672f4937aac8cba0669bd8be83a42f13878612b6f92517057f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x858a724e679eb4020f72bf96a91604cfff7c29eadd8aa974abc58468cd4866d96dffe12a3a7314418e8e1a8296bea411', 16),
                    gmp_init('0x3a4f77e5a512162ec1b86c2266ee74136891e323beda483408ae2e02d9cad71bab89f8c821613f7f1e760e22b3bd85d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3926d08cf91137f5047aa23a0fb2a1de51d0247d3313f9c13da16ac21da42ef90fe0be691a458142a2d721d909326e3b', 16),
                    gmp_init('0x5eb71797fe1800d384f18dc67782e2f58f342b9a1c1b4fdbaae545079c2c8bbc168974435778520b2010f501e1af4405', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2cd8a06e696bb9ef8beb01e8d3d097af8264008b4530b92928ccf94de6902b4be2a605c64faf5142cdffc2a71f20c96', 16),
                    gmp_init('0x6c321503347ff2c9e2a0ace49e6c6abeaf5c1ae693fca93f6f42420cd575ea633d17d25fbb004a65155d57dc91680a0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8499ab78e4a3e48a5127f6d9c7b24e6f28d1aa41ff22ff619fa7b75abcaabf53a2456434f30983aafbe0a2b13a114b85', 16),
                    gmp_init('0x4621e4e64fe26bab557f9962ac02a21946cdee83a16d627efd2f217d547cb8b39d86a76a6d3cb5a8e2df84ab5542ffc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22cbea2995e5d37814645c532144375bbf9143528f03231e79ccf29af0eaf70898c6dc3ea4911762bdde735605bed21', 16),
                    gmp_init('0x3f49dff4e66327249b64d1941a2ce874a9809f02711e66010d71ca6499e4690f04ae40d1359515e31af41ba79aa2f2f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ad07959f82ca5a0a46cd289446fe9af7bf1a71414750c1a51436f79eeb9c5c1bd5d606929ff094a88b4c862a635ac30', 16),
                    gmp_init('0x10064b5cece7b146e69eae89ea150539ee08ca37557c154622a7f6969b2d5c7a6362f1a074339e666c6f1be4a485b00a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ab94772759ea419de35f9f642fd4a1dd4d75e36bcd6c4ebc93b2054496b25fba0aa7ebb7d175b26a598499cd533ad0e', 16),
                    gmp_init('0x2f4df4adcd7d4834f765393e31e703f6cdfd6f73933bf47dac4193ab9de7e36a214a0307a846f8f2a667bcd5a8a4b52c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ad99d8dac688d4762e85828af5429c2b37407bb7258518d289734a6fa5ee93050a0b8051cac4540c04777b263fb11fe', 16),
                    gmp_init('0x40d6fc31beab701ac554f30a426a65702bb1f4a22973a1fa62cbede32ce05238bfb2d550c4147e7c3ea79d1b1db4196f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49cd05ad2b4305f1f209be648bc47d212c7ae8497727e923d30b1eb453872b88f083bb4e902c70ce688eb3104cda0500', 16),
                    gmp_init('0x1d53fa2d064761fc46bb5da8e893cb4ddf368d9ba64a90829ca5bd9246760b9d8c62d451e431c5e97fa76dbd7e6e2e5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x487448b7f79aa015a49a01ad01667236a3bf2c98f0b488335c04eb6936ba90257c13b258242aa9feeb2811a2ec237564', 16),
                    gmp_init('0x5a4ac68033eacb78d2a6f4a9aead237eaf0179cdce91e6e8b734b4858f816dc3beacaec9f9e7b6a523fa5ea08606e3b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x101c081d6f4cfae2d10be1ad54390a78ac3ee0a5ca6184a8ec0eacf89b7c837f254613f4d5f5945f1924c34b04b81797', 16),
                    gmp_init('0x6cc38cb0fe8bc11c47c05c47d3655b93f02e9831fb31b0e80b3d9025b8eb321425f91e797fc484476c112569c1e13ac2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x584967f536bda57fb69a9aabc8a9c9c1ee3629a5a76a12428b362b4815662a2c33cf55361fe70fd68e7e6167ee445144', 16),
                    gmp_init('0x36c48839e0a0106638ae8ca7b9fe8f26f73305fe6e137df41567036f11998da49ce0accafa1039aec81ab8217443c7fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18d73cfac9aefef226c0559ce1390d6de73334c25fbb01af8b8178f9307f5f88531f165fcb435a14f8900faea5f7434b', 16),
                    gmp_init('0x388c455061fcfe23c4d760d4578bb0921e98000e5b473a94d1b4580efd0db41b0e501b6111a3ef692ffa2fb21d0a9654', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64b6cb6357a55180c25087dfc94ef0e7245444f8ab27459ec84c26174544cf8a0b5e427625df9191c44bb8e540d2955d', 16),
                    gmp_init('0x5e2ae31c718c797ffc6e757ebff88ded41f5fbf2b58ea7a8d8c2cdb6ef8f95f0c73a06795bc93d98bfe33235a23a212e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50c46c5051c451e6ca544bc230baed82cf3cd0f779423915d870c319f54300edbaa2235567da10a443912d0d430276b7', 16),
                    gmp_init('0x128855369c76b23c205180f2342e93b35687a9d27f52f499c7497f80f6017836316b40d60c5ed700a112d0aca0cbf0bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37a5692650a36ba238ebaa84360ffcdac39f731f0b4b5435ba287485272d562670d2775601e07f9a87234f8765fb1aa8', 16),
                    gmp_init('0x8bbb63488d410a8452f047a50914aa2ba70165a5956b43f4b2da5c24a6e3a84136c8850d2b0469b994f73282bab96092', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7decbad2e7eb93e6d3964d2ca8187df7781ab067e8a041823ff272c3d492ffe6f5c42b9967a84d011b9e35e7d7cc14ab', 16),
                    gmp_init('0x6a2b24b6d3f6f06ad81399bfed5b99d8ace5847b5cd1ddd066f76d1331ee31d88ce2057c90fd2aaf056b0ed9a13f2def', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4b984cec8cd6d200b374d5d1ccd1ba626a9df5fb5531b5e84ab3e4a2ed9bde4de5048e0f63d023c672b83bcc2f06dd72', 16),
                    gmp_init('0x86c9239db422713feebd4f63ea6fb01a9f2e951bdf85480f6fdb7b3b8138d54725e8e26207553f283ade61d39c892056', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c73b626c58fc840d22eb7d165bcb566a1bc92051e3a03ea162d802d692eb8ace60044226dc46b8f7119dc83302fddf1', 16),
                    gmp_init('0x5a0c0d0031a0a4fd607c63f69030ecf606f1f9128784517a681d1628ae1f3920d364d3617687483a1a1da0bbd27e70cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12cf2fa8207e9c180b62b234b2322309e2f1f56dcf25402d5bcc6eab3ff50b0f9583628e95a412d4943c39cef11caa88', 16),
                    gmp_init('0x789b826ec3a4e23436a3815d1b25f48c3c7c77a8d59790eb5932b07f76c78a359f07dc73e537aea8bc28358dc543434b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25f19dea874311c74a02a26b76c95eabc0196e26acd671e7548c7c1a82bf04cd218400347f8ef261e767c797fb1d234', 16),
                    gmp_init('0x61ab305defeef38b59afe7777ac95e4795eeea02adbe65be2342d3190ad0465b0c25076e7e52ddb1f10cd648fbe08186', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a833e02d7eea0159d7a32eff80045e845bdb8fa267f2d31fd86a18454d0a9b2bba0f840ba131e779be8ac4a7a73a42e', 16),
                    gmp_init('0x599f4435564229bb989be5a1f0e9ab5c776ef4167b5ff0b8f3c2c12faf4263e695de9f01dda6daee4f3afef980e1e10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79dcf3c6944842bef4a65a2b0407a4a17d3b007132f86083ffc7b9ebdc38bf453d7cc8b4f9895abcce1cad25713cb9f', 16),
                    gmp_init('0x39fe39c88de2597d78a8ba6209dc614a81db34324b3f086fe77e6becb3577ae9f33504e9dc26d5866a1a04dbec49a963', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ad14b1d77f51bb12f4343d6033ac5dd392f91f738208a4116dc21d976bc958a6f2fa7fae59198598c6e25d23b5694', 16),
                    gmp_init('0x4078e6bd6989eafcf41749da6e45f4e0fb2d6771599e2119178b8989fa3d6ab24801cac360318788975d232db1222145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13d4d9da8d4b11bd6da9c593021b5a16164d686084b5a2be3bddf828505078baee0ca1442288df5352c1c468bcefa7a1', 16),
                    gmp_init('0x3f2c7f16161483c2ead5934c2e1e3f94d8c586f9c55d22db461a733e85756f2c2ce0b91379c76f1b02f754e8d91eaeb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61335b34b58b7e8ea8f4990a39b1e766407ef3ecf8dce0d330f5ae1761f68d31fec37d0f757f551e8462a14d4ca5cfbc', 16),
                    gmp_init('0x53a7ee611f52b652e505b4fedfe31ab275dbb1c1b2dcc5d196353207cc45891775652c4235d457d321d070c56594b855', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72a3032e8cb506ffae7b4f93a4c2c3aa61f6b3a3696a26d529a41e3264a0830ffaf5e1d27d96b7f1775f591c573bafc3', 16),
                    gmp_init('0x2330b32d4a78cd28ed840e0ec03a7698cb432374e7afac7a806695a5e420233160302bd3e60bfc7e7f9fce39c4af2264', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23a7f664a8623df710c73cee09d1dbb89c1e812127183986cedd4d6e15978d152c29dc87abfb0046300870334e94a9f1', 16),
                    gmp_init('0x76ffe74fa8f144cceaef02dd609c4bb95339297bf42c281d6e979873f68cf93b187e25765d70b811df2d879a8f11dd68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33df2466f598021679afcfcfd2ac913539d4698a2c487b192189128774e8b96be3922a5e096294f26075c06e7a9401eb', 16),
                    gmp_init('0x7585ca679b6690194882176c1fac0734cdd14d418fc736851945cec247bff025bb575578d149cfdc8863ea3f007bfd2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d01cd31aa70382ee16b78e19641b2e58590d49224dada181f5a6b9324cc2b882bc3d005ab5edbf15285776e7395cc15', 16),
                    gmp_init('0x760ede8639521df7549c7719b5c1a3db2ee1b64c72ae3247348c2c56e07d4d60e34f68b86888ae4ec683ebe8c9f28ce2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20b64204b4ee4bc8829b5ce90e248eb0811f1600ca50c47594cfc62c47072b1f4751f1b2e2e1e442aa75f685d828da7b', 16),
                    gmp_init('0x2ebe86ee0992769c2d155637ef867e75087119b1fc6ec2b0a831291110f697760c5735f2d42c9a0d61b02b399120be09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd02ebf1403b5f30cb51f5bcdd458d9e27759ffb73235ce3d153e17202911274a3e3f3f530f95df6dd8b5e502e45c7e', 16),
                    gmp_init('0x15211db14166524623d9111f8c51160b93ffe70f7e2721ad4d9158466324069145ca890328eef79a21e8827096635107', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6a963f27ceac656d45399d760eb2052ebec02bbf4e6cd537c1e9f7f2e4be3fe87f354e12187938728fc9a7788020d837', 16),
                    gmp_init('0x5c2b31b52113044c560cc85571a3fe8acbbfe0727d1e5da585cf18f7640ee6c3464ec23c83e361bc5c7aaf15888861cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f4fd58e41bfe95a516d20ee4f09c430a0ceff0089905e944b80c830d37a6e1d26850d2fb0f0c5b95f9bad9e34b2700d', 16),
                    gmp_init('0x7090834f918910ad42ae58ca4850febf759190aacebac5cad21b1b9bcca3fca439e29a299ff71282f053bb62e189f3f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ec77adcc1114257668ee826c9c9655d0e0b3fc939ca4058a7b502c38af963e0a4af0c16dc11f5c82349f44545a6df2', 16),
                    gmp_init('0x4828099a500a330e43f3a217630023be662e2ddc763dae185f37baf3fd3e0db097126b1c8b50f9ee8018fa9e6bf42703', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3666b2908efaf1d5d393912cf4f1e32447569159e883fb98c7328c0004580c86db05675e1576fc27cfc99b921f0c3c38', 16),
                    gmp_init('0x76601a1b23a353c07255ba14e627b575ac1c8c8b7e4877ad0279c6e7a66f5c45295ad0087261fcbf9b3ff64a530d3810', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3910362a7ce752a2a7a8f8e65bd1d27ad3e499c0a3ca808b6d1b48b99988fcce517fd648e9c54930380424f3c41eaabc', 16),
                    gmp_init('0x6f608c0da22356831d4e6bbf370e7bcf1ffd4a79d3db2eaaa37c75c6f9d69ab51417ef990de33e6c93886f36d08fbe45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x874df1d2b0013146374a544159601613074084aaf6ed4045734e814f873b77a2e871e2b15af0f9602d3012135f04276c', 16),
                    gmp_init('0x58e2d4f6c211637c732ac83f4af36ae9fa4be7518d7e4afbdbb1c60ef9f94a3889e95d2fdb66de64c34301a96adbe425', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ebb3a9f057cbfc1b418f59a80b952c9391ee572235b29969d1b05fec62fb4f8e029670a2806e84a9ab88ce0a43e8076', 16),
                    gmp_init('0x7d00cf63ad27d1c159b20903be2b57608d7dbf570137d8255df22435dae7ad0fae94fa57d015501733a99b0c6f5f6baa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6137685c037b621e665602573a30714d55d2cc52639937f2e63cc3ba005853c12510cd5bb8455f3642dfbbb1c4925cee', 16),
                    gmp_init('0x3514f994ae3650bdd0c58b48c006b811197b11f40d74958d77e044515526b96127c662b73c15dc1a5ef16c62f5f99a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x690a203ddcfbaba23cb51c1a43f8addb1f3b71c5491491d5a1c3c39ec03f71776c483bd0c391e2be36ab6f793a42bb86', 16),
                    gmp_init('0x227dfac509af35988bd363180018fd2a09e04dc8dac24ec07c435a55870030a64287ac7976d3b8de0fcbb20b6a7bb97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x379b676dc44560b42282e83cd300eb66564952e053dc9e4ccfb738bbeafc67d923a71902be036b40f6e7535782c9fde9', 16),
                    gmp_init('0x5af51777690d7823f42200d6d334463ffa5d1f70948b8191c6bcda22a836aa737e845d4338e492041234b0edb75b0bbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x108841a2831cc2fa24af107a467cbeedc5a9d422b1f8c3252cbde69767eb544e7a0394c37fb45083b7acee7a292728e1', 16),
                    gmp_init('0x6674fa45afcf8f96781e1ce1b0ea7a5af476b1b2465fc4534f85180b28f97d2ca1358b80bc04d7120157d543e5ab3bc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cb9b7a3e7123a35ff224b4415058476fdac8abcfa90fd73e69554cc78c0475c54b2f11281bea044c8adb63f554f3429', 16),
                    gmp_init('0x113818ee77ece190755dc3155d68e8baff9b45a29ffc2a8c87a323aad5b4ac4896eac6346f2350153abe2d5de917da83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4148524ded3b09ff4a30cd7df3545be424454deafa0301dca545d88b5c6dac8ab382f4684d0082e8f596bff41f571eea', 16),
                    gmp_init('0x5650be26023805dae5c952d5ff00598730035c8cefd5e0b229ccf7670cf1ebe09d2b49dcd9bdeb5b7bc1776672985484', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55f5efefea0caca18c571e7dcea9b9dde9b9fd60417bfdc236170b9467e0dfa30ef0a7f4aaefbbcd70e1f6639c7a03a', 16),
                    gmp_init('0x2ef33339785bc6ab1ea91f3675fb16c0b6f0140ab782096dbe399fccad9ffb98bbe4de1f712539ee2722b2c328e3a9c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea101487f6dc8be484014284ec84d19a811241c059f61d8102c6612b082838822705e1969f7ca8d7961d7962257aa02', 16),
                    gmp_init('0x2b7d9625792791078c4417ecffe877dd422024d0317091750abe21168a97a61726c6b826b0f868e9106f750712baa9d7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x28b9c039b614790e21b56ffbec919f735e5ede96188b7d4eebe7b5f809e1bc11779e4f486295bedd6ac40acefce6ea9a', 16),
                    gmp_init('0x7a29b25ad6d30585c0603da2445af293370a2bf33abdfc057a556e39f9448c05d6cef19d04f978485ed6c867be5e7965', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83007e5529cd793bcc3b9ffb677a24ac3927a9fc2e6ce0f7158d772b371b1157459c9752f54e84df5bdf7b0938fee075', 16),
                    gmp_init('0x856e8502a8b7d6a0c013c61cb9038cbb93aa08da3502e062e964922fe6a27d0c8fae338f21cfe85dab65653fcb97baf8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6795ca14ef5fc573ca719f226386f42dc947b25c2e6a6aced280e048a348e8ea5a14b96d5d92a43e8b71fe1d307e5638', 16),
                    gmp_init('0x2d08cd46cdba51c475e21411e76cc2f3979a3cd4eb306ddb6b9b255e6c8f96211180c83adca861ae7de1037eefa4367d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42e9b168a719c6164a21b3dc8db9d3844cf5ee821bb4de36b3f7a9e1903610062b19746300fa168f32c9cff02052a269', 16),
                    gmp_init('0x4df604395fc7c6045f0e44347b3353d3149fc0e9a57fa64e22be4cbcd5b1b314db3979303ecd4dcd31a64d66cb2dfe1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39cc264734f668c51e7ddaaffb16be4e8ab9f67e5d5b926395fb5e43649506a57afc3eec958553a781f0744ba2c08e92', 16),
                    gmp_init('0x8398bf9c430697b2066d9164babbc683624297108993d672959a47fc5e09c672710beb420f6e42650b5eb8cfec2e3594', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1893413c0e36436340b4cc6b4561f7e5df960a2468557337b1afc35dea80cc6c0511f3f6d309f8e12019cd2db58629cb', 16),
                    gmp_init('0x4cafb4291acd47de213b8c6ab94580656cd9d36cc05d0dc27316ecf44de03fc4d0d012878cf34ddb2cccbd38e63cc14c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x307d89ec20ff239d505160a0bc5d92475f80fa57098026c911b6da12812e9f9c68ae0e03cc05783a6aa1b1898b3bb760', 16),
                    gmp_init('0x7bb74c298971daa4e3f0a287c9018ad8f1028219dc856a0e18ce918a4413bf05e6d63481a91e37c2eef2b7c3d5f446aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x226903a18dce9424378ee69fd3cbf10b61f9fca498ac59433b0a39637bed41afd8dd05c2145fb7143b7dcd3888d30e69', 16),
                    gmp_init('0x6c90335bda73d06bc74ba61bc08c968267d436c56acdfb070bb27bafd541d77b0a1617a48f7a05f5ed759fe30785386b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca171204a622b3d9a87198b8ec914f788451e35605c233d159c99ff11f6685deaa4aa7b345bd125c6c1a815805b5d06', 16),
                    gmp_init('0x81f70f7a6b63fe23f3a6fc00eb84f94d80957fdf22eb61ac6b49f8034a0533f85cb4b2fce9254f9216e2832580223b48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x474383db0b3df389c87e5f5bbda72618ee795cd92de1f5860dc9e6829998c8a6adeaea1757d04c00aedaaaafd87db90', 16),
                    gmp_init('0x5281e4dee2aac002d13914ed3feacb65adc4de4bdcb464e4eabcf6ade699ca9a246600835fab74bbfc3471dc6f84ccb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f4896818a6ba62569c460264d84343e2392dfbb07166a7622bdb56f7416c3e1026d2d84e6fa91a53f3f847d1f96728e', 16),
                    gmp_init('0x810e348706f294ba70db03806c7df10d41f51cddc27a0f2d67ad3dd6cf65b3e62a98ecd82620521b8400f80efa277bb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79f6ddf73c5ba59a320e63a4c2795f6026b956f5dae1328e3c8c4f859d2e3d6ed9e9b41b9616f046bb886d4a4dc0c8e', 16),
                    gmp_init('0x7af19642d05eceb7b580f999478636cf8abaa54115f9eec8f37cb72debffc93ccedea49ae1ec9fe1eac5b6f9ab50c26b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e6ed8e48a80b6c458d84415807b03a43a72728ab5a07d228fd5a44a1e37b286cad6b202295b95d6c6d8845824fad64d', 16),
                    gmp_init('0x345a90c75b4318703fc3444cb5f2f4e4cbc73216ae31fc0294fad7abbdeeae8b959a3270c7c71345f5a70052f648e333', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a9cb89156468bafd33a1040dc7760d586d7c1b6fde93104873e10f0fd8be104c93e848ff280033b3c8ce2c011089b82', 16),
                    gmp_init('0x5041197e8c1dfa9073b139494309434f7fb2e6612eca54e4aaa5893af29c30caf04442f41c0348ebd775ffeb8984d00f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bdfbd8c85f688acc546597aea43b22a1a2f6f7741133452c99c1f65a96694ba2f110121ae64a2a014be0aa7cf805b51', 16),
                    gmp_init('0x8ae5df83261e87cb73b37aaa2dfa49a407da683835d3e1a13ac83cce79f4cccb1c129893dcf2d9503c57502c9baccae7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3c6e962427475e9213ae4db25542db87df9ee5441b29ef4ff046d3469d1ef83756b11f815916c5c5be76769249e4fe4c', 16),
                    gmp_init('0x316a9bec152a13f1f720ccc9888907fc360092c6783b9caf80bc7ab55fd10a837d36a3616a26c9a790f13d2d1d421ba9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37bd29751a05bbc1b741df5f5e84efd831246adb2531e5a1955b1069e3bebe6d1a63e76886f21abf2f9b7960af56a7f0', 16),
                    gmp_init('0x5b620bdf262c8e9861da31ea53ce6f0d671d30905dfbffb431297bae626c0e3d31d94a88dd95403ee803f896bfe30e3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c0d8dd07d51f63bfdbdf84ce71b9ffc2c2268bcf7f115eda843566b7fceb3fdd09f7af9384e041c076e73989a9e94fb', 16),
                    gmp_init('0x58c1c4b3a63a6c9e27a7e248f3797e57c7ccd630957a53f7c4858864d9e9813ecc9c64137b0bf03aeab057b53b233052', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b4c6f1dfee27f6122ca55981e29711c6b86483b97e1277d8cf4e8094519da98fd8bc5fbcc4986a76029ad5c93359c36', 16),
                    gmp_init('0x6482ac96aa01f6252f330f27868150e62a70767b142dbcee88de33ae0aa4a4127073f7db42ce757794596ad3f62c4416', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49bd0eb4c70c944d63c49fdc5d5e9abf6048e6b17a49329256826417e3ca8caf050796a838628f92a854af797af073fb', 16),
                    gmp_init('0x510d61c3a9008b53124664d10dc299b8bf0a3615c06b9995855334c60702faa65e9d37fe14de01d3319b30c4e5f22fc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc933ba67dbb5015849e355d0dae7cb5d0f1eb8ac247a59f1461c532dff0ee20ca6a71709f43a292c8f33ccc803b4e51', 16),
                    gmp_init('0x105f49cefdbf70011c31645b82a97410886383a8538969e3d8c0ce1d9ceb3000969206ab17ad086263c069a23a171c58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34ff8c9c8e0700452637126377d694da8db85cd6a9d82122c4d2caa63590bb627732d4262cfdd2eb6f85b0f1d5d0e0c6', 16),
                    gmp_init('0x29a53816853dc7ea2b8f03e35e280127eefc0d8f2215323e444dcbef9458d34b5ab2b886bc622298a682e9da53a11206', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14dc9b32d195b210ce60a369307e6ebedae96e3f61984158d9a57d690d2e3f7c3c6f2a2601033c525bf49ec516ff8df', 16),
                    gmp_init('0x396e015ab2900f0d4cae47d78234c12b78c2c2e04a2fa8180611b5fef82f8795fd09359737bb3708b0f91d4d30d9e72e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f08efb121f6cb3399fc78509072048bdbb2de37c92808502b56784fcbef946244a8360cf6b3ba32bf7ee58484e643ea', 16),
                    gmp_init('0x1eb7191f12b81f1f284a908ddd46c216d2388d4b7a4c3b555c85af51d0cb24be139e0820a2f1bdb7fbb13a337ece1899', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a5b32b2dd8944cea93e84916799a480410871273fc5a4993e29670f93619ecf700189a23f5063ddc0c67d921127d657', 16),
                    gmp_init('0x52e4c438b96c88c3cefd651dca61e626e58329cec65cbb85059235223d74db2eadf738e35d134891e9a777f2a306795a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6244b655a15b6e152a2f6517c3366957e023d187357278f463075f445021485c4c019b8ffc7f00823c7e61588f144d3b', 16),
                    gmp_init('0x745095f0aac2b3fcb862e81da9a57cfff437329213d5acfe03102f1e22520d5ad7bb574165190736fdf209f91e9f4835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f191606f8ccef65b031f8d5e599efc0319dde975a123c663b3bebf7f55238c7cb4cb7a038c4219fc8f4feafed2bcbcd', 16),
                    gmp_init('0x75a6d6ec15f5eb90019b547e03f4aa394d611bfef5ddf9e53a4ca9857deafaf1adc2ca3a2fbcf2b5998f787b0e87f8d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8572ab71aa8e2689ca53fcb84e88ae130355ff9b3f73afa90667451797e99e5b41d7ca185f17a73332b88a38ed0eea05', 16),
                    gmp_init('0xa78a846c63b55f5662dabdd03cbc5c9b9cd7d5caf4a77effb5217ddabddb97476ff746ecc69898ca3e928d07e6bc13d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0ad576adcf0663f26c3c4c7776a445f0254213be7a6cbb5ce0acaef3f4c0b106e1c2998e59c61cbf4489b4409ea6db', 16),
                    gmp_init('0x33a27dec971c223e5ed0ae9e0d5b2a16b3f7b3a88f05df20a5567c79fc773f6485b707b95333ac209caeeeae73a0eb2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e83565a971301bbce874b0866e47313cad3cc7a25d985b8c51acbd8761a80d4d0f7cb81c46e7a9bd5a8f383b3f36e0a', 16),
                    gmp_init('0x1a9901c677b7a784b3beb01806aebb7f248bdc9bf2ef350055b72a78e3a2d49cea70b16b5bd150ce04b37def6edf2c05', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x769b791f884824e048b2d80270d55d351fe5449b1bef6f95c9e3340f6d00429a8ec710e8503a12ac67107bc0f3b211c0', 16),
                    gmp_init('0x6a33b056cdd430ad8066c9ec8ef8b9b6089d3b1b91073553ebca22a771a62fa828cf50412f9fd7def7bad6357e29cb7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x325412fc4aa58607798e5c2cb51ed8b6a5f6d146a6725f25cf58da42c9be7af23a4cf5ed9f5323368b5d9e994e093954', 16),
                    gmp_init('0x3281388487eeb67ba37bb19a5a8d4f11a64ad4ca5e410d314af448a1e0e42bd28f87a62a9ac15a8221171bf245b0779f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa316c39f1c89ceebd6ffa61b4575c47739c5c5d32f34e7036241a46bb42ae13916e59f83864af3429171e994792aa5b', 16),
                    gmp_init('0x7a4513faa48c6979eadbece01f2547e2abffecfe9261271a2a75b78036c7125e35052cbf01c4b25eae6cdcea693e444f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39f9b3d3c532e0970ff5dca5ea74894370e8d606b3715d37742f713d7bc5f1e7bed4bf03264aef8601bc20071a21c2a8', 16),
                    gmp_init('0x422868e32bcf228ca04dc151b34766f75693b8a253dff4e7b4d489f36d4219203cba8b3021d5fbda4cd2a69dceedb742', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6378ae8e46efcb70b289041eeb7e05c442c438571f2ce4774ca437d203b58c9124516d0195d5e68d32bcddea6386f64d', 16),
                    gmp_init('0x185d8e1f2f8ef1d2c8c19a5d9271015ec8f8835eaedd10f7698b6269f52147e889bd06eddab36c483ffb76b46dad8630', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8739d928430e74b1a08d699901e67a6b8554398d32404e32144f187735a8621d907b8042c97d83aa852aa2f1650fd87c', 16),
                    gmp_init('0x86b65170daad4e95f1ecd4a4bd2eb4a7d6720c6aa4653db1087fbe61ff26a60c8ac0066e35117957f3bc70adec28e5a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dab0191d8e74d6badd6cb7d7d8673866176806553775ef7b11dc0bddf2d2aaa2ee3fbede00bd2ac78ecf25e703b5478', 16),
                    gmp_init('0x50aa93aafba42f6f7ec9d69a014c80d943fc27d47fb6160d5319f9e4d14deb070eb451b26c5896796884287ec1dc4724', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37174e018b9dea8e5848cd57c5ae05c5d60e59dcf80a6447310b4c6ac9fee4c1c3b66bdf662294e0e44f98bf68ae0ca3', 16),
                    gmp_init('0x4ca315d52e568a0fa229bbae5773d5c3cf37f55b7c3ae8ed3398c98874ae320774aa24d1fb706c633f20b86a4b5cdda2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a5d0b93f34b5d6ba385209fcca50874558fb1abeeff939fbe7c72c26491988f49880b845d0825dcb81030f7f70ed54d', 16),
                    gmp_init('0x7ab22b69ed6127df2ee3c8369accedc0fe3e821a1ea96e1913533a57371374981406e8dc8ab6b3a7887f988e8c99b70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c03d9f1a9e10c6ad6de274a5cfc1b744ace07b24257390e9d28d5f3cda54ab07ee574a3c499bfdc2260fb7bca1f26bd', 16),
                    gmp_init('0xad2831e6ff16a8a0f7ebcaf75276be91002a24f798b7d9abb384121cd10302f35d7808a583c5f1e70f3d5b2fd02071b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2668578297454c00c6200246bc74d0975ec67339437597757c828074f03efe0c9303524b2eea4974cc1d8bd084dd3239', 16),
                    gmp_init('0x77e330705919ba3d5b1fed084f605feac21746f07ecceff7d18fbf6773645b83987e3b467eff060f892904fed8129e6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cf7953198539e0be03663f4e08dfe0b96e01267c2f906d8ad46684cc8a7fb8cfbee2515b98963424ef32e657b4bf926', 16),
                    gmp_init('0x7761d8af4b45048a2096dd058f196f78cb8f26fbb5289ea202b9d64d73c3a525f899d17b527ea3a6a24ecc75c8beb6cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x710c48621fd70c30f9b47c2f18886bbbd0b9e1f20e84fe6088b4d3b954f1e5a08d33dada5b54e57a9329fa0b04f212cb', 16),
                    gmp_init('0x7673e14408a38393ea3524b47bf3b272d46dd2526c6d1f77959455ce766ef847c5798be39f8f1c5e8cc8ce2b777545e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x433e65b6699848fd8b57409c6b3ade061c8abc998e401da1404015f03e9f65bbf3570679f8f1bde72ef42ee89fffabd4', 16),
                    gmp_init('0x26ed3d2fbe018dd3ade29ac3e1df5c46625a898f4791ff8a7627145d8db104440f4f54d26956ea92d1231ad2f9440443', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eac2af54cdd5444cb502956cd370272df3715bbd75402e61b1b9e62632fe679415a8f0d9e0d9b87b5ee69192375f62e', 16),
                    gmp_init('0x82096035e4f2fedbb17d3cb730defe3b79cabaac3b3348b4ef8be457e714bd41f8347d1a5734296c08a5ad6960d55d2d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5f8bf3fbd842d4ff2210546e5405a34cf9256ae9dfc4b4ae639350b10832dd9be6701da58f8dcf36f3b7486043bb56a3', 16),
                    gmp_init('0x6e6051fdda67503fe3a917f1e9dae4d094ae4aede3ffaf823bd0aa3afd0ff023cb671302e6f55cfc85a374d4ef698f1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bcf20be2c329e0c2a34be5723601d0cf4d25eca6615e28ae319ceea9f9489bb4effe6294fab5fb2e42343ea0407b3e5', 16),
                    gmp_init('0x73f42ef4452ff485a1a003a967cfe8804b7742346c2614e8d15d280fdb85e40b1a28796e9394f7650c9aa673605b50fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xebf007a4f80c72d5810487e4aacce5581e3a719e3bc4d7683aad46ce48f3c60da97201d948ae8ac48c0d52e9184c50a', 16),
                    gmp_init('0x3dd7cc68c6ca8be0aa566f9cdf2c2b92c81d8ba1a383cf76bb6bcf8aae1f30e83324d152cffb4904f5f7e9dd300d7ab6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c5365a51bf17ac6e75a6545e3022c0453385fa73987fe4a76689b68b4ab7d558841e482971f0cce4860c5d255a91ef1', 16),
                    gmp_init('0x1d48013732ef384cae3e8f30fd29a52dff4bdf99c8250d0fa91eb8b901d11d03635683c62bdc96a501831262aa918e1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cd4f53bec7b2a74174bf8b9a76f3a136b6ed021fe358e13caf6269112d26f2897815aa2ca7a994b46ca5796b412995d', 16),
                    gmp_init('0x4bde24b6409c3d5833bb2b42271742d6b522994729622443aa03b6ed4fc75d064adeee6c5614213ae5a2d87ba2bce46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e76a17888862ac6f6c5baebc78bb50d04704d0fc7f9a6bbbb1185fdc33c043445eed61c2f10420b46e113c1ecc6c6c7', 16),
                    gmp_init('0x5197b462552274072fc5408f192848e5af19ea42518087e924343415fefb6ee9176b878cdcbab0d19953dc9e34c0dbc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a8c8c91625cf0f7e08a126f20a685aeb78ee414987447e431ad0782354ed4c84a62cf041e5bef2cb8bb96d6de37a035', 16),
                    gmp_init('0x884f87e0bbda203f17ff38e53c7823daf0034bc3b824cc66db8418a734c4d2a3caf230d651ace3a61b4d9fa663442acc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a05466ce133d059ba7877b77503c829de86a3396bf420bce1044df86d9317ecf14843eba7d8d1dc9bfe45954af9e502', 16),
                    gmp_init('0x717a903203922af60f386f4171884b01b98f7b17d7db0316a019064135851bfdeed16a953809a59fae9c8fd7fea9f7ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x455593cc4ab273130a3e74241ed78f34f44465c3713f319cd7f2928e2ae5d0e28b02844c88f0a680f9b7d3f260ba76a0', 16),
                    gmp_init('0x5d95b400f667e42f4501c11053ba3af1137c3a4bdbe86fc35958c0a9163f223ee29d83eff06fa599b7aa17b8e3d0b43f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73d6ea3b48835c8de5b1a5172c82fb24c36f0d42aafe1e702104f0b04281b873164346db45fb7463c24bcdb6de06a78f', 16),
                    gmp_init('0x1babc2a620fcfa38958e7c9cbf9e602d85476d453229ca5a984e0a3397b7052f6bcdca49bde4b54c460fea49e70cb738', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5052cee45ef21ae7f450b3887e8969ea64dfef0eab621bf375a15faae20d42e9079c7de2820987a0b08d6712928b3b1', 16),
                    gmp_init('0x86a37637203d9d9b7e1f9b2e016dea9c295f2ac20717327b056bf2c65fbbb97844b9eff90a54b8c12f6e65d2a640f2ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a607d83bc19d4dd43f05cf1ded550ca1ca1733de264c2e0725cc57f74b7f34d51b7bf17b49860b6dd3b8f13ab2e8156', 16),
                    gmp_init('0x6e2cc740fb641cdffdee27fed61571636631bd6449788a46ab564c7a2aa970f3bf90637c96fbbafb7e497c3623bfcd3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb1cb5cec736ae345eea524d3535b481834267e0287641238716f9664a12723a73eb3f3e8ea279002ac5bc8d93d9926', 16),
                    gmp_init('0x223c75fd470655171125d96cbaa58899906c240f02de53f681e9dd22c9cf4aa84f825da012a1c1f0136935e129541584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8726535bd673a6ad5fbba92c29756f895f3886d7dc21c16c7ec84f733a83e6958497d13854991b9bd4db42d9fa1b923a', 16),
                    gmp_init('0x75dbb5c1a1bcc858b9098f5156754df15f31cb6ac7db7fc6a290d9f44d7c6cc19d8ffa98b7e4930ff5f8c2eec3d0fc66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bb25026dfa6947c5ab24f6f660ec1597fe33ec0b42b23d713c551777fa173157fa05b38bf2de195155ca94e11550457', 16),
                    gmp_init('0x80b1244b0d7b5563f9a48d764936207a293546d41a5494f392a14181ffce3128c676d0c1ff33755b5b073eef3f97dfc0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x29190ea2e1c744fd44b5c0156ac45ea8d8ef0cdc0a8fdd5b315cc4ae9495c00115fee53bbed094bb46cd2b23c80cce9f', 16),
                    gmp_init('0x3b84afc48da2c95c594a3e714aaadacf5cb9ade26de4cf727703b0324f786491c0ce95759f0dc2163a0713d66c047c4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x476fe5b85aa6b9afe86af9b3445c2c52e06848addd04f7a984b69394f6c99a224ac5ca7fd051d818e9f39fd3e3c0f575', 16),
                    gmp_init('0xf40d4b353cef6656f1abde6813f63d0b6366ff4f3bc71cd93c99a41b9be85f2491591d685a2ff42d1c1e9c0a7b562d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f72f328d44ef6ab962ab0dc9d5497ca163339ea60147b32d72ee208c461440f8f047641026bdf2d350cf22854f791a9', 16),
                    gmp_init('0x7e8ada1360d4d1af31722e5f964b63ccce8f5387911f01104739bdf8117c46fd3c206fc14d40f0a1b8381a2e3766bccc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5aff6d34731d49ed0841031a596ca3db43a5c4f12b86ea903111b9085f1d59327e11b199d76171758dc17323e650b362', 16),
                    gmp_init('0x88ce27c87be7af8a651ae94a403b26de67de5e90778f21538295024be98a16f17e1f3e4122753ecf81c4d78ff4b79677', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6238c2175280e4f3496211615cfd81c5f9e5d6f1e51e117870424a9a0631bc4c7e1f7d1d43c6329dcb7339f6d32271d3', 16),
                    gmp_init('0x3cdcb1727a85336aac6be1b5fe928902d6b7be347a22ea1927fb284fabda513232dc8e4be5e01e57a96103eabc3d0a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86275a54f8db4bf0e30bd74bdf3f5c0607851c6b87168250c447c547d12ea8ff7fc371d88be4971847cb7480287584d4', 16),
                    gmp_init('0x656f4c0db87ec0049ea45f7b90880d1fd96be4bb253eb87eddf9cd8d1a67b0109fa13b9c90a415eb99bafb3d3f1e40fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1804197dbe21189dba9f1a8f22fbbbe457ec0f7d0013eb6c6562f2accbc21c09469093cbd2311a2186bcfb34e7b032fe', 16),
                    gmp_init('0x12d67a8c13011f7ee993f6dee609b7c1854f712bff7ff5698c78aba521ab26fda0b97062d97e704885def177c89abe86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29253b45827c43ff1810c8eb2b816f41bf7943208e71fa3ab1adb120f648465b0edac83b83203b9877facd3c837657db', 16),
                    gmp_init('0x5e0d37ae64cafdc537c650a1009f82f0ba6a121dc81ebcbe1b1eb156450aee0a839d10a276e35ee0e361911fc2a783f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x489e7e2d972ed94188111b794d60e15529ebb210dda120829fa7d8560e0015e30a9b8dc41d17d28c2534ee0119400acf', 16),
                    gmp_init('0x7bdbbbcf6a20a179563302feea1ec6105388f296cf63cc4fc96fa42d39dc4b0eeebb2cc0792bcc19c367a80d5b587070', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66ddd451652368fc14cfbb0b0af95d677efd38b03dec2d8c97dc9546a2c68efc5b78635c7475f091a6ea7107be7efbbd', 16),
                    gmp_init('0x7ea503778972229fcb57800afa24af8841b01f4bbef27c5adc07c1038f922d7548b3556d654e76bb972fc86c12e1316d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x263430da218ac123f3349182c92047c13600a337a0afa46105daef195a963f4042a87c467e9a64a61dc97eb275ffd075', 16),
                    gmp_init('0x2a55ed90236d8a3a8c380220fa179c16d216765c23175c1b642ae443ab79758e265292f5302386c477e233753144e723', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8415c52815e524c299d0dcd23db1197c5e9318533fb8d72ee9dd9cdbd27b67233669f57857f0fb711c2f34e75e2f8cc4', 16),
                    gmp_init('0x3506674a3029ea2164286ca6f5ed3d3df7151aabe700c97e78d253433ebdd1c489640c2084457754b0db4e04fef5b848', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4840748367934b7a6420d6ae48e4477360a54c4002ebb74cfa1b9d0200be170d69b788d3a40b3cba11acc5ed85035e07', 16),
                    gmp_init('0x5d499835db75d5c5daa53d2b8717a901122e3b705b50c4762e17d8157953b893d4afaafeae022edb0d940a7f82327459', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55cec41a9f209201eea4b66c96b8a2a8f83c6e220bd8e191675f3d57580616530164f44f5c36e33334f9b715e9ef69c7', 16),
                    gmp_init('0x43a787f13711508279017efc1c851c6fc225d036d69f05ea106547f7fa3a9f4cf94bc138b973646c19dc2eacd5866397', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fd98899b70f31b2a99cb1b82097afa10af2519eb6c53e06e953442e6e4c1612decd1887564d15a254965f045bad6a93', 16),
                    gmp_init('0x7591c38cf2e6b6a380f322827a90d1e84d96c8815bd80d0d7c4a0f6bc81f4f2cca87ba9ad7ea58264140d59208c14175', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x63cb0ad1b8ef4c09e6a6e39539729e235ec8d412e80bdc48e9c0a35acbc9d6012190357fb843cbf63040960d3d94065a', 16),
                    gmp_init('0x5eb62db0bb0ca141de88516fef7d3642a3632a203c78d068d7b1261cab10d8b50f134af02b71814653eccb43bc5be7e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b2f1f4ee346b3c8f8c6062cfbbd385854815434c7a6d314a50fa521af94565b967494a3ef295a8171bceb3309dde221', 16),
                    gmp_init('0x507ede44d443e96887172634bf615cbfd17120248e1840334acb84242067e3c7a94f65db4366da9d1c95c34737fa1538', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2fb6f4e478ee7221f06b4f4588c27e7296089bd7fdde81e21bc6a07ddefefef29f6e4c4a1c2bc9f6c20df005063971', 16),
                    gmp_init('0x3eb42d2b92a96bd51658aaca9db2fd196b27edd68b9fd9819bd572ccaab5c7c931ac9f489ebf76ac62751981c14b424e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84375c36f900cb8da1627e9652b60cc5bd46e11e5f91904dbeb53d8bd6a20ce4e6b987189f77cb7d5119ad8f89340bd7', 16),
                    gmp_init('0x6d68e0b6d028d46b98f2638938508b240f017964bbcb85ce9e498189183ba9f691af3e857206b2bed977ce9eda261457', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82f6b97ef5b1984aae2f6dbdda7e75041e2fed4fa976efbd6093df7960a642105c9e3dbc8aad484b60333ff9d2c7aee4', 16),
                    gmp_init('0x284189a00175f2b8a5e973785c12e5888aab25208dfa8d35dd111c4f0ad7432c5fbb25c06be8dbdd401b437ba98c3e6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bd8e3fc3851bd746a6f680427f6763f10e54619bb7087e5449c572384e9a73ff990d6ba13e2b039e2f158c8c2495bfb', 16),
                    gmp_init('0x271c475e81ec1556b4e2a6b0f3d7700ff268db51bd3be76912e893417c373790652ce693dba978ce3ed46dd6c93ff11c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1155943d4566d490f0528a87b9f6edc4c0c61e31265a5ca31a79156b0704794b2a012463dc185faba6b73bcfc14c828f', 16),
                    gmp_init('0x61e0a40c4164cd4958cb3cd40c22713a68f0e3a8f7778ea13fbe9380b9b8c39385ed744d23db25f0784e4019783035e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bdfe3e9e309a3c7f2634b5c3345a87a43946d66f9e3f98114f4ed2d58a9c89da87208b17455231a504a0115c4101b8a', 16),
                    gmp_init('0x19d647683438c450ea85eb9871b46789df24cd7f3401bb6b039d532f9ab2ae0c947bec7aa88ea300bfcf46ff2ae532ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8729cfc596d22f6a2cf152d221e82a73378ccaa51f48515edaafb21c3c33873551d592d4ecfc0a783b6aba8bd9ec7866', 16),
                    gmp_init('0x66f2c6b564ca0b4cfb6b34db1f81fc351ed494cf6b66683b9edf760932ea1fac36c547d31a9b1da7919cda8591fa9f7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3376cbdc9d4d40e5000b2c5f0078819fa4dfa2905ac9f8c3c2572986227fa5f88fa962324cd2cfb68abbd8ff308114aa', 16),
                    gmp_init('0x1ac15cb81bc71fb26aba48b7dd90826909edb53cd21b562ca5911fa4de41426cf180012bc1bc2e073da9fc829ef95b6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2649ee0bd19caf280ca21ed5d6310e62f916cb5dfb3423957b0d3199bcbd792d3429f046a6a2d7ce465e51667dcc9cf', 16),
                    gmp_init('0x826468bf595b0568a24e6ad8b398583d883f741ba9874751491cfda207389486109ca56c989c3570c53700eb59af7a6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcb742371ac9f3d41c1d7b643e63f1e4e1c8e6c80441f27bbc31e8c25fd3da0cb69813d4680654559c6722d677bbd24d', 16),
                    gmp_init('0x6b25c7d06ed7e23d6cb4c0b95f528f46ff63f3b13a240059a776d2f524747adb8eda1d4e08a303b612f728f6249859a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25d04ede0566b9b99bace2117f0cee3e389e430937b6490eac8b4306fcc2226c0028bfcdd32fc0c5eddec53594e01e76', 16),
                    gmp_init('0x4aaf68320e29b101e9eedc85150a69ecf00b23eebfa05347215b65db74a9c0729667885a3bf2f5aee5ebe2fdf088636e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ab8b14a83c380d65db6f1ae75735a7c174c5eaae5406ccd2e544d6b942ac5d9c559e3f72446aaaccefe7455b98ff8a6', 16),
                    gmp_init('0x372200f5828053bb41f9f01ad30d356220f1706a1202359b0489b6a74145ac91658d55a1052d7fa83fbf9022329db360', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c4b7315308ac0bf58d4d1e031ef12369d69923241b8e39c6dbe702d87684f8c4c4017b0320d34a16d7678644c7c209f', 16),
                    gmp_init('0x49c3798a997f992597e011f9ef4edd4e1736b16b70fdeef3e8b21717bc8dbbb510f3696e4a04619ab47044d6a36ff16e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3de5d5e96a5d7e205ceeea3bc77ef9ce9e0fb98a30830e47d6306e8d92cda8b0aa18df46d002d94f0ed069c1c5c0af85', 16),
                    gmp_init('0x42c467f24cf84052d5415cd9b88d6e0cf109e542b3e55a780d4035ead5955628fb283ae259eae77ad6ac5a80715bcaac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x862a03b0480512eccba01a75b6446c343d5f9f83b3718b5c639ecebad44ab6aad7f0681bc5d8d4dab4f1a5d8d031ae95', 16),
                    gmp_init('0x7fc1ae6547133e2ad4bb7b000341cf1411276fbd3963e2383572d437293e598732713e7e053bb51fcd76dd78e97f7805', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89f819ef04bdef3e76f2f8e6aaa7dd0e3753c1e0c204a8ddb119a71ae0c99b2b1c13028d62b1f6f4ece0c85e4980cde3', 16),
                    gmp_init('0x5ada46a7957d24ea10514500b557891d30440e5cab76fab284a9a73e2fe799c53a9b9ca04976bf06e90f0e481e57389f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16be03cfd996df61f25ca0d38a2d253f399c8822bb1a2535eb612993120412253ba9a7938614f3412f92f9cf8fc90f38', 16),
                    gmp_init('0xb74d05df4b912bb032039753aab9ffc47b6b1db79f36d612e0546710b2693d539e1e77822da9bc5cfb88b86bc6ceb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b4e6eba074ed2707398fea8c02f4ee0934098b0541d3bb84a164e894b77263de43e6a9a80230fdfff8daffc1fa73c81', 16),
                    gmp_init('0x8ca188b2838337989e8b590115996a3810655624c3cca7acdee5f93a88005146f3d782bfae4888c00f9a3152e0aec682', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fa6b30e751d482b31df71735af507bbcbfe834ead68d8dd4c7d71b1e9d88d7c1a76d7c1c98ada581c78e5118ce5dd8a', 16),
                    gmp_init('0x521b0d21fa288da6a71da752de2daff79d27df90389da7b4259df687c548c4bf43d9f14257b74510a2779a959acef647', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6197d5d173d3bcc257f977891ddef98dc91f012f548f8f29173b76dd1ee6992a15891efdcea63226b8dc1e2090b3fd06', 16),
                    gmp_init('0x48b6956151175ac5f2bcc8c5d0bdc309486f38cd1f8fd52541818cf88fad4653ad6c0e02b5736e2795eba08b6d70d723', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2600f940a466ae845e356dd0aa2fa28c9ce71192ad7ca0fccc1fdab78efd24b15804c0e867b0002d431214179e9affea', 16),
                    gmp_init('0x601e241fd28310e74bd978c4e84f3d38d42aad82d897600755b6196120f9a0492a8797502d6e34fd02ad0c3454a719ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77acef3b647fc42b6919c692aa67cf26f865ca65b44338aa060d9d334c464730a095e6f6213664f5903a6a0290a3a68a', 16),
                    gmp_init('0x97ff9fae9bcc1e77fee5e7ff548823cec26c1e1a33836a7c00c2b8258d367bff3425dfc610e36d2bd6dd4fb4b4ea841', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1924e26c97f2b703b60d6b04294c6fed4417f0ae7be9c5a8c0114d89afb192ec45cd3b4e320deab51639f2a31e33c28', 16),
                    gmp_init('0x6a4b4230ca455895f34f74f95b80a96f7779267ce1f4b618eabae49c22a8e21679362c2be77cbe2ff4db72b074b9c38f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x108708e8c8c65bf93b31c53e9847ee6796a62e3b3290ef6071b97a275503fe1f7de059dab1129337058013ca4f6caf26', 16),
                    gmp_init('0x5069b0ad213a0cb65c622aff87095e9e6b6b1394ecc37a2878924cd73ee4728039cb4deb7f8810285dfdf600d851ce9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d39f5c9da3b058af95b911253cf6bf891a454046070a8a74f3f21464978d26cc513c5764643345550b74b55476f1a37', 16),
                    gmp_init('0x667b9ffe3aa1da6aa343d5692f508e7c36ae79b4cc8431d92d642295b77e3630f7498e696a098c10b7ae6826ba53a394', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d2f29744abf8df5f70b67773fa93d35f1200baad4ca53cbb450ce7fbe860acde82f23280d29bfd337f77c67237c87dd', 16),
                    gmp_init('0x19cd8b972dd77b410fffb9f6bca7252f2e2b5f965fe214e0ad2b22d4127933a9097a2af80873e53d9c008d6c91e9ec78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3869f965094aa4e70ff4cafaa1842046f9923b15dc49d7cd017e884875af0d2abb820d117b05aff2d1ff1538f145b666', 16),
                    gmp_init('0x2c41c398ad5a217c6e6870371d32abc7984f0db37052ee27f92e74e3599a7f94e165500dc89e58e80bf97ae5258ae8c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71ce9e43bb7d30a48a733f26d6ec9a85a59ce3b741d5901291e36b4fa4797d815c0fb0754c338c934b663f070858bc7a', 16),
                    gmp_init('0x6cd2e4d3e4c33eda6b90e0e7c0074e63dd83dd743b5d9de803d3564249dbfe8c7fe0489e86e84a58542938ff465eba9b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3547595c6ab1eaee5f8f0451d54529a28c5b7ece31376b75f8f7d5b9b0eb3c2cfcad6abe1910b7fb5b881c2eb55e6026', 16),
                    gmp_init('0x357ae32662bdb37449c8a0cef17a565c7181e1be5b38169dfb40acd9af984d5e5bf8c05cc5f0615ea04bb47bea5f36e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x126413422b151948d5b1879dc5d07c312d5f3173cd828bc2b62f05f7e00ba52361953b585985d3ad396fee18b050370a', 16),
                    gmp_init('0x303e407e8b94ff82ee4bf6412a9bd9bc4a0adff9d2b7838df2843acedaa30d9064da5d22f6eb44656f6086c7170ba008', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10a5553fcbf31b3ed10366a237ec4fccd41cf022bea0d5c9c60ee85de8db62313b8ea240d035880bc7f9fb4e82ae5f7e', 16),
                    gmp_init('0x248ee617c8c5897c268c0f14b09338f9b4473f35e08bad36732b7e41350487cb3ec4e93809cd800a85712dcb9bb4bff3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8897d40a3926d93386f0d8b800b2270414562f5b3e77c4dd859e5e871f082cb411794d9ec4559d5d193170a98e81e412', 16),
                    gmp_init('0xdd747316b11c50e8affe00c770b8bbc0c46876773c70964e096704ef944dd955b94e4e66793f22b741ecd6e8fbfce7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41defac4f6a6462e74e6109a5e7c3b9e964c695ffaf2d89ab89c2b0bc880b59089692f5d3b00d6a779891147e1b94dc0', 16),
                    gmp_init('0x3d877feacb483449951b766dca8f7bb3546c935ca075377a55a9dfd97b78a30033cdab3b829c6522ff907c50a3dcc814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x316b3c846e3f2745f7d6adbf6489eeea54f77f1afc8ca5302b0c8f7576341e236a587e33bf1f296c456fc51c21859ef2', 16),
                    gmp_init('0x1fbcd63302c4a5b4485a07ff72cb041d3ced9577ff46f43ca2b9d22c63a2da0b7f49a33aa92e62c4bf6d0210240ecb7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43fee477619455acf36fcc67e24dbdf7dd330340b95c7a66e30fdf4686fd3f6c0505ca0cfd641de3c71b272018c0be87', 16),
                    gmp_init('0xa15a34f6ce84519ff72430d95a9e26258ba29ed69e47505cddc68536c97ec06814832ebaa31a865b1ea805e5286d322', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x321def3cc8aed8a8833ce0a44a021cf6d70274cfd217975667cef5d5430a3d05f71d737af34f29acbced655f98a12f6f', 16),
                    gmp_init('0x3945b2543fbc7c8126d210b51b095a83a10584b21f2665df3102053112b1e945bc7e6dd6cdf4a9d4a760ece24ad75a0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e1f152006df89982a792dd0c1b0a64df76de010a26cecaa4c76d58bd90254c7960e7a1ade1c6f34a78c5354f4b601a0', 16),
                    gmp_init('0x809c280396b2652c476a191c4eff717f912d38355164ecffa45af3155fdcb16b76fe26349cadb4e6c876fd886dda2f5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a530d51f1bd9624aeeb6826cf4101576913e1efc9a1878f32ae4178d44815a832a6f9bb39688a070fee6dda69aec4f3', 16),
                    gmp_init('0xeec43aec60859d4803616d28356a4314d1797fdc77a3ab3ec68786639acccd60b22c1479fea9249a7b795fbe26ba0c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x872d2bb4e71337f9186ca02cf5b03e68308960f6e96c68599a1653730d8dfd39669b2357bfe79dfc620e2c1b25f106ef', 16),
                    gmp_init('0xb9765e3080fc12ec7b36278163deb22a5b186e584a7187ecfc1137f2d2186056d4c23b7af389d64879f3cd46b7e7d59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ad66017ab72f4bfd01e19fefc93c4391fef004de6e2be36bfafeff15dcefa741075aaad6bd2aa5427de9f9760c74e4c', 16),
                    gmp_init('0x35099e877389b23d3cf415497739071677c82b315403d8b8859741f06d19f3f2f28e33ffa571db308e1006748c2adfcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d3cc7fb66e253f019da08a4905f080033e25f0c3bb98a7a94f7201a7337de6aba1c910776457d18a26c6ed57b5d31a6', 16),
                    gmp_init('0x4bfd7ce57a8758eec877f231465934cebae535a1076f2803c0fcb110103f51787f71c13fdaa58b6130fcc2fe0df72be0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83849768274bd354317228b6d75c6e5746ffb7014dba1a9cb451d6bc47cb774aea02cc0700b4514b3a220bbbc759e860', 16),
                    gmp_init('0x40cba28df0799ab8ff0f1e690328c984c63fb005d0c8da391dada9ee8f05dec4eb1694c0f8c80778e712934b20eb6ad9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64c5d623c485198cf117cfe6ad5c018a7cee13ea99179686593a84a7f166bba5d2633ab3c5d0fef36188222de24ed191', 16),
                    gmp_init('0x555c5dbba45fd446e001bc35c5753c6dc0b2209408a702131fbd92a04028de81cd00fa1bd83101ea527c85df274eb384', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x37b01000558d0007f51614cf5c6d14958a748c33e68b5cc26452cbc33cf57ea84ca806a10208aa0c375b771d6cf37aa0', 16),
                    gmp_init('0x18a16d95e1e62f320d8c4359f59cf54bbd09e081ddabd4b7dddfc407ec974ae34e9cb63f78a917fc48d268662283701c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a6930126d43cb03e2b1d80723c6a4426c191d60911354a16da9733e64ab624d1590fc694cdfbfb330a936596afeffc0', 16),
                    gmp_init('0x626a19d8c8e65059372666b02df8892e0d46aa0d948be23e8775552cf243763be0e49bbbcf3bf1b240e2e6aefb571c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a75113c85ab5a24172b4a0e54221634769400f43b186ac05be359f55226017f7ebb679ec52ae029a0a8841d4f72e8b6', 16),
                    gmp_init('0x58102df6208550335b09ee9e5d8931f35044ae6deef5e9ee263efaa68ee2e2b8ab64481846ff1f666581a71caab360d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f0d26db635baa92c1e223c1c7dd84a59f23c3c754d6316289a84e1837b9b4b13737399b2259982153cc9908d45623e', 16),
                    gmp_init('0x59c8a4630797f9ce69396b65ffd1f9bd4163eeac8d8498a588d4d4d001af2d9e0f6ddefd4c28c18ca5ae9e8f67435a87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a942ebb5507ec03e8827e122fa2bfcf824cfad9fa428a728ebcf29e05ec17d7264418ad443505e40e5f7bce9291a787', 16),
                    gmp_init('0x696310f55abcac054dfb9add4f6312cb69a45f9d8ffdc7d4f3baa5dfa8bfd17e0425f6c6dd62a02226c8b03b4ca7c860', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75747944d03591cb275b9e54ec5216347663911dca67d010c9957bacfbd20834ec9ac46ec3b3c611c4c77dc3b87b836a', 16),
                    gmp_init('0x479a275d063acef9daee8f5bc628239cbe43971347a6f60baaf3258cc3cf38b30d956b39be29c024f2c41eaaad6bfc19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d92a2dd77aa93d8fd1c80a11d49062578b487c10f7830531258747a32d2924b95f2c3aa5239922e0e9de37848799999', 16),
                    gmp_init('0x64bcd33509825e78937b26437add896c47a0decb09c525da7e6f7c620eb9153a45263c9fc6400d47cd273e99bd683c5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x141def1de46c08a6a6fa9d1d60edaba9b3005d1f92a81d3bbfad40ce76ba796f8a2f54c496fad5a5f00ae6836ed0a34', 16),
                    gmp_init('0x4261b6ccb2bd7ceffde968e04eaf3d9d8d8d06c6b2ccee8179e39893136a86810cb49e90214b7e45a8241de77a556b60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x216f45ae4453fb92b18e008b0c56791f7ecc3f9a079513312eb9b48d94081713a6b6e629f4dc168a044e2b0b3a89ed38', 16),
                    gmp_init('0x4aefa0d4973357fb8f7582613304d1a35a6089b450f1ad3b7b856ab99d18ac2b040cdd1747600abd81f1dc9c9508e7ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x356094e477dd06e32f2a105316008e9e3d5bc875bbf8edaa18bc68ee491e341415d431511a05687f10759e4ca05cf4d6', 16),
                    gmp_init('0x1277dd2caa8b8bca8e6f1b6957b4735328e0a5c631db1cf9193081863e6be645985f1f0993dba513777d14c9752cf4e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4063b7acbbdfdc2adcd09c1443ffe224971815822bab08b8786d00784921ca46a6656061bc9664539c39e8aefe7256', 16),
                    gmp_init('0x86fb288f2b30b5e8ecea561b3edaff1a569eb0869ffedf166e2dd7a06a0d4b318d35cccadd03b2a8c6477638b38c1d67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8947f5a1bc977632eff97e5ba2ed28b13c4686ed74635375b9491388e3c569717237970f3aa4169518ee6cd922f551f8', 16),
                    gmp_init('0x128be84a1500336f1b3a72e79fa879b85564229aa824f76390f247b32a7efc66e31088c25eaf408c937d6efdfd1e8996', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3659fb515c018e50f164fda87f2e52e2fa070075158062661c4f2de18a0408abd86e7c169b010d2a623e34f3f0b1e97a', 16),
                    gmp_init('0x252ec5ab3cee602d1a3dfe3a182db2d8ca7a0385c1879d51f57ece8f989d40c53dea3acb5a06b75423d588baf82c50f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1132aad8e2270567ebdb37d162672011d08df620d379844de76d0bfd69b519cad4a8a5fafa43e3bfc19dd7e73c415a2a', 16),
                    gmp_init('0x3c0f09af435528bafcb606e5788a990f81f7c5d6c6c713d10571890df6a61bd0577a55c4021824c24adccbdc350282', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11390abf27bb2fc8004a8fbb4ff28e2a0959e5ee7b1ece541a35c49e4ad179b60ac199ee853486963c7224c9466a8f7a', 16),
                    gmp_init('0x88861eba44c07817ab5037823e68ba6b6013a2e79ad998c5681371685579352989b6c261c080915756c3dce364df7423', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x55798b8bbb57637968b242c5d5e83a857c4e4f34a327a8d1ecda8220c87b35b5b78fcf8ef053b3780741134c03240074', 16),
                    gmp_init('0xd21c5552054bf26e049a0802cfa693f13f6df8a1117021715fd404b9ea99a00633561381757deb97f53b9e7bebd6493', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x678698e225611629d15fd5741755104965aac780b924f1a9a5afabcedd535fd9ca9c1c12b80e4c9e04196cdbe97fc6a3', 16),
                    gmp_init('0x626d5c8e38ccac0530e270ea762047993485ff016632de49f8620bc7b8ec3f2d615fe3553013445b1e8a6bdc66e62fc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3942f50a4ca461ae9a9e3fe713517c99ad7ba0c125a1fad982b8550d768a39bee3aeba3d2e839934dcca387e4fc991fc', 16),
                    gmp_init('0x7c54de25c361c0b71e31fa8dc8f715c018db4ae92cd8058a31a75607d7ac70c1a149b5f1ab1fbc3be2ce0e05d3a535fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a0ae0fb6372590c17b94aa27545ef03e762c8522b4ddd0625c35bb593d566f35ed43e34793dfac5fbee3ecd56c057f8', 16),
                    gmp_init('0x5f460b6ebbc1b3afd9e8a18406b57c349d8b64ab532c29189ad61dafd456f560c38dc024595a22893b9da7d03db4f8d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f2eb6f37731bf7dd42c88a5c97be643d28e22541fb3da56f58192477c8d97e6ad698050e60650b686414d449876cba7', 16),
                    gmp_init('0x3cdd50f37bf8b8aeaff0e7cbc9682311975ed7ee60e4b9991d602af853751e314adeb46101a494a6f8b41f8f26024071', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c005ecc5852825f199c0a5c3b35bf8fdc8c5f0740f4a86d97bb7aa3c8370fec1bb4eca358a6a5649698714aeb62cf6e', 16),
                    gmp_init('0x130080e7a5682088b3317528a23634162f1d1a2ffba45365ad945511c365724e233fcd86c448981e77091aa351d82e03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d67846ecb33b7f18a2239e77b365735c1f84713d5854d11324c8fb6ec1074712a2e66aace00ca22890d45efaa23ff95', 16),
                    gmp_init('0x5aeee9e378afba30f2731c7502b26e1d6e81a69f5076f16bc506f1c57440fad121f6dc82ebc5c9cbbc1a0aac230e32bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x644c3667ed29748729805e8f1139b03858b6aed707bc5500e6f98d23ac3ace04e545cf8ea84ec255e2a0398cb9e37c71', 16),
                    gmp_init('0x5a486a9671c7ae41cafb21e9b237387296230a7065fcd21d862b1116bed58399e7b58845a8d18fc52557e62f4a01cca9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3811acf76e6d188fe2eabb9ed5f44efdf881dc3b9d4660c6f4122ac2160ed0642aed812e870add2db2b937bf506772ff', 16),
                    gmp_init('0xf1b58b2d1a5ad36d56a48f0c7f28e8d914c03808e0a6e14b339899b2ee8afd03f4a5315fcf8596a74929aad16d5c8f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a31c0f0e413be242606bb88e32b55d34b9568cba5037d428a6538207a2c18a78459835a06e3d76ebdddd81f7a84f295', 16),
                    gmp_init('0x7d0422fb0c87cb01fcea42bdb6aef3552df9123148540ba34ba129a00dcc236102685f83bfea246765ffd7bc81c53832', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88c6ae5e3e1c550ce6ff8102c48a32927579c61373f06af18d0445a4a91f3a4769f0b975c5e14b74bacb00462889f297', 16),
                    gmp_init('0x4a4dbd2f29b5d23adcda8e6c77e50263f2a2b0343dae579f4e1c87de3f813676a399141899cfbd540cc2862ced48a989', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30b2cb8aea2cef8dc5cc129a113d0938e97dbd3f2b820b1c85676c6febf073886581a91548ef978023ef48d0415035af', 16),
                    gmp_init('0x6ebff762ff5bde8e4de188dafc7fabff96aa619123159722ec8508a82e920dc38bd49406f02e1ab9b9bd1d3ced069fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7839d73eef97e14443c00845bbeeced7b0cdca90d38b6cef2426b7bf28ce97a25674fe2ed75f428edcb6c7abc771c107', 16),
                    gmp_init('0x1572b40cecd7a904994f74a233766c2d3a910c4c6f2cad946176c02d0fbca0f5c9d370df400234c31b7c314aaa6644c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63392d15ec94c2e81ed42af47def053cf262476fe9184c855914eae2952ade02a3ace256ff8e54810a4fe765eed57c78', 16),
                    gmp_init('0x7ee7a594b3e50d13b7b09dcdca709f39f3944144f048dc8da5069f3a4169718205a33695b9d2b5928e147b49956bcb2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4acb927a7974a7b9bbee490733ed901fd2830e93b545bf650c0cc4f621abb319611bec165fa0ed30f1ed8706d2c6880b', 16),
                    gmp_init('0x38bb7fc53a376e2bad047466e38ec7876280f4cc910587ffc591776f5211a1819367127779f57bc07b2f44cd46c2f58a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x73c05670b78fcb81e1b5d2522212a87b5abed45a55b30ad41ad4285e4354e8f7f1bafcf83e3dc75ed33b536d8979da0a', 16),
                    gmp_init('0x1f6c64a57563ecb47a01805025d56220c5ef773d3f2c8184b14efb3f19090561b6a455b714e3a9640a2b8c7fa8051d9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f9b7b6f1f9ed69a7c657ff24a1c570aa5ec9805a746dae881e8df8501e3754e6001d3ccb104655cf06759ec70b146e2', 16),
                    gmp_init('0x751e2a5ca459841cd068fd2bc2fd8fcb46b87139f5ca8af89449291e726e3ed4b2eb03728ff9dde48311e073957afa94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e6d8d61ba5cfb733d0003bb4621cb640630dea0917e69b1b03c410c8936f535b75d2b149feeb623a0de8a61ca9ca19', 16),
                    gmp_init('0x527d12988e8d5ac2c54ef6d23cb7fc9ebf9b37387fad2732505db5b2b323a4fee1310463e6adcb57a1692efaaafe208b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x606bdcd713f119e17a6c3bfcd0589d23e4db643058a36337602845c58d739b084d43fd75fe31846cecb16dba7923d092', 16),
                    gmp_init('0x65a7d79adf89ca3ca506299e6355de3006fb5a11be4049d40e810da52af8fda47202478a156575c22fed0919e96c80ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e8554f7113e77bc625acc67a80c85c0400145fe0fbf1514897184642b855890c43bb6fbbf16a02ebac0c71780e591d3', 16),
                    gmp_init('0x652b673d0e60fcc7d7c11dc0ec6d6a8c28bd364ca32c836d0328419c5069adb680958ccd11bcb7e54ecc874ea474ce79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48c6e3a7cf28c0bc13bb16ca664e98abae51db948d908177cf311538c2a2e01bf137b3c43eeec69d4e3ea548c52a9c99', 16),
                    gmp_init('0xa093cf06cbf6d5937d3556615e9ecdc558d180c7d44c7abb12ce0bca4640bd710b4b1de100754ae006f7fc8a2116fe7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e81a578f674c2808ac5297a82d419f3a20de0018fb3666aacb02fdb6f0031405bd0f5df0ce070ba04cc11eb47c787f2', 16),
                    gmp_init('0x5d2292a74cb0b080e77774986b10849c3d85d161c3582ce74063f0b6d647644785382f7197523b348aaa6b1c7faeecba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e650a5447260d23d38bd16553918ce802390881b7c1cc6e126b4c90ac56d0122e63854e08097d2ec4e44c860663880d', 16),
                    gmp_init('0x49b340e09ea196a1953eb6862fdc6d99c3a9fc031832d6f58dd7ec914ab24e75d6b460f58a7d727128d7a1e46eadb854', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbb3457a1b6afa5f117797fbed962656711ebd07f00d302c1691f77b18fd002f03adeabe3edcbccf185ab6c809d920c', 16),
                    gmp_init('0x37a4456063e895966820e2db21b3830d6e6dffb798f7de7b65b037f649999062d2df17e35794bcadc6abb4d9559dd05b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xef586b8640bae99784f65811f9420d09c223c51d5d772cd31010693f1176f56741afb73f2be8ad2be158e183b25d980', 16),
                    gmp_init('0x2732bcb36356b232610b0b72136505309fca4e614a0ffb1e5ac82e73a1b14a41b12c6eb566ab2103da3917dc5e79e21e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8641c7c7b695efb45fcd9ff1c06c53052a1a1363be37d5123b8de1e39c2b48d3588a1adead7cbf91b0803b74a4e14e58', 16),
                    gmp_init('0x27a6ed962cd56221b4a043114f5f582ccb891531641eec1d56790ef9afedbf2c4c8148cfef2a928ce12f2fcbdd65d55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f78560a4eb3d3cdb4a6a2d178450215261ab86ff17680af994fc084a1acc4255a0a49e948aec4ef412b0237da9784c1', 16),
                    gmp_init('0x7e237f877f9d1df32532efa1ba77d601df70c63d6bc0a477aad5f31d2e2b0f07325d82070ec6d0c6d5633f96446e0860', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d829e4bf986344c8dac873a69c787c817bbf29ec6d0682a1e168459b732eb40395fee1e36607543adbc71e9edc42609', 16),
                    gmp_init('0x64f56269f5a79a1e15dd91fa79f26e88186d457523b51f764e1a8f473531a602433d929f43f80730e710cbaf7c7adca8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7675e44945bd082e4579f5bf7a3d54f0cd13cc212120f07e45ff4cb9a1da961b34f13e4a213bb58f4c4d80535365e7dd', 16),
                    gmp_init('0x78150e510ee7a6cc47d4f235869e81dcd724d3b2d11a936d31897639cfed86103523b1f67f4f8250a6eab970ae592393', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721d9fbdba7d6ee0ba3afaf51a6378b493c435140d3a20f6df926eb996fc65762ad0917f635f61b1c2771ef6ddb726ba', 16),
                    gmp_init('0x43cd2e0e6c67abaab3becdc46e4ddb994fb89c0a20cb11d9a5f592dd508f3be431ca4ca9a7a6598321b716c5e70ed7da', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x460a6ca195167bc032a09a2076388ef51b028e48213b22af0fde5b13691cca2d239700e6e8357336211a653984d85c51', 16),
                    gmp_init('0x85587476f5d89a1112f6ec36d7064c279dc6c3cd8d0714fdd47eeef3c5fc21ca27cf2886d131333dd783c382d9763fd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e3091ba0458614180c86905f275a914dee3ad8e90267e6441d9b12ac1d47acb1ade2da69b7414e4f05ffd77ff1ca9f2', 16),
                    gmp_init('0x608114b84004dc32cbf9c9a1c284aa9b2b37121b802d7aed0643985f90fdee9acfff652f33274a753b6744a98967b5ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18b78245a7374ef6d0d3975984bc6f6c8b1160491b954ad11d9a423a1578259d9a1d92ec924ce4164ccb5dbcc53def70', 16),
                    gmp_init('0x1e9fb9cf7ecfddca749fac77b6fb6506a9348f1ba542732f9adde829ad78ca23f2fce3de625711b0aadc9fd0336c3b3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x677dbf37e8383707a6882db4739ff36f7c13cec0f5faeea381ed8aa34f9d602f6dd7de81113078a8d23bfe40df19b70c', 16),
                    gmp_init('0x1ec0cc4337959c23853bea332fd212033f0eed0d14995d8990c527c9114fdf39cfd648a1ea818991d800037e70e5d900', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b79ab8da8851784faef558bdc05d65ed2ae41375b5a899d0c1dabd1c37f204ea829825778223aef04d948fb678dd2b5', 16),
                    gmp_init('0x6e173eb880539a60ef50d2a1028da9e593950f30abda7bba736b5fd0bd8c44898a50c0f775f105fd19b2d5bb63956b85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55eee9bd91af0fc95c545f33c1b941dceb1568f13beaec6a74b0522e05907038afbc7f51d12ead4a3c962810b13db71', 16),
                    gmp_init('0x42fa0d479d0634f9c31fbb39f9dc9ac34b4951bdc3d330cbe29a6366a91813c3730da9ae438eb1d2136ecf2a43fb99ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x136bcbac6968ae228e75c21118a393857bafceed89000e36c1b2d5a87f219a440dfa455a17a963b68bf95580de8ed7ab', 16),
                    gmp_init('0x61ff5d3a5a6d2b2dacecb9c06fc1788c58efd92d6f88807b03860cc29eee4aadd28690c64c16c5b423efa38636e107a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3817fcb5c3a75d6f6eaa01f2cd951a2415ef90563fc08d99cb148b247b161a2e795aae647086c7a3789a49792c532c33', 16),
                    gmp_init('0x7596d80582e6e5b1c1df8db02e7b5c961a7c8e717b24865e7ebb9a5226ddf14ee4e0ee54eac109e0acc6f986b9afe581', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ffd82d3bfa4b10ec0c5e69a7e593ebf6231b1dd4feeac9a9c3628a2a5bd288d6c04e8025fe4b184bdb8063bd3ff8e10', 16),
                    gmp_init('0x4e1e901222d9098de3b6ea35129551a73cb1329fea29c80b06152fcfad3397d618c23106488e2d360309826a60ba1616', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a3447b339f7cb6fd2c7c422bdb78fb3c64d24ad1e2e51896547551f9f90b2f558199531ca518f171be3abbc94e18130', 16),
                    gmp_init('0x38c27bcab9c256c550447597815c61ef7a87162179aa872578a974f3b315b1923a6d2d062ce70914b75af3c33fe90dcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x165e1ca5eeb6918f5810bc4fa6e31ba6946923d1e5a7422a31e7337f2024a17d6466be9cf0b699e05265abb4aa2c9e01', 16),
                    gmp_init('0x358c95209bdffa777d93458c8416f98ee67560dbde98c02029f7332e580ea33d6df23e16fd2002ec257a786a22b2af8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42b4d820e2e4d001d9ad6d27c0ca8f546d359711ead6c83e797d5220b0b37bfb81d88c39d85f0fe582d690ff4246bd9c', 16),
                    gmp_init('0x57ac95651db3f82a99ad9042161a998fd56cb7524905e2aba16c4903a367d0c46536afb1d4892a29f2e253fe13446bf7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d5ce577772e2d54ee05a5664c8d77da56afba514ca746e9a5069a8bd82da50d02b78e7326de28cb36b0aaca80796488', 16),
                    gmp_init('0xc52757c900da5c8ab9d255592b18e467f0416ff7923b695208044a89b706a1f50b80b780127a2e0fc5544678f7fd166', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd0b411db6fb065714c5d73c4e32db5e629cf9adf7e0504f172f289a2b9fddfe1ca627dadae82a1892a1bb1e2beb985', 16),
                    gmp_init('0x4c5af035cc402b6236d28b19e654f72a32f4cca312fb36216e8cf728ba1a18b5309ea88ae33e875346ed5f31199e2f25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xea69880c556e41393493eb07cb5368092893229f488d3e5567cce62105de8412b155301ffefff6589705b5e336571b0', 16),
                    gmp_init('0x64aad33260efb70d8eef92465cc095149ab01ef9d7a1cc54280c91c2ae079522ab6a8e8e43ed7984b27745c88ae67261', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x456a2c82043f8b0bfa260e9738b046d206f4d29639582bd568ca365943fd66c028fce35c696d51d3be6a3dd5d7ab119a', 16),
                    gmp_init('0x1068234283beb0609db07d22a0f99cbf1af47f45eb9611ed55d79abec8d581968158c737f14eecac77026e6c443a478a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x458a83767f32c6bda9ce4dc6037e1fcf3140cf45995b3ab9d79b9734746bbbe89f0303eec1e316f5acbb26cf291d428a', 16),
                    gmp_init('0x4c71e9dd47f5257dd6ea1e3aecca1d1b293fe703b11c4f34f613ff1b182a4809fbe33a26dc17be7fe895912b7244abfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d2a3c5e12b341cf1d11a77cc03987a3b162452414358e81be1d7a863e6e43ebcedcafaf6c9b47ccaf1950a9045489d5', 16),
                    gmp_init('0x638008092b857eb977230832ad22bea2b4780ebe79d27f46b099565f2084ac067eeebd5d501d4ed71c11c4f164cdab2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66543645ba3aee2f082e4a397be4677e6559c575d4ddf6b3790489e1a298817fd6b010069aacc6c5b05e997220ea8995', 16),
                    gmp_init('0x5b40093dcd5eaea32b98143bb51609fed79703bd312d3220b66dc0acd04c84d104f32d3009e00c6910c7c44c61b8109d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ee6bb73e316a832983f91c04226ddcd75425720a002e245740614447634605cb9e3564b55ba74053eea86eae9363c24', 16),
                    gmp_init('0x34a93a12a544a4174bdbedb24e0d19d3fb73fe3a735c767807d09e16be533d699597da1ea4c0a90d75da630da6bd8145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4181d94f58aed87ecbcbed03a1964f0e145d01d08f6a2587d062276a7b5a295724e89cb91c03c0cc9090594cb01ef6ab', 16),
                    gmp_init('0x811fdc228a8f0adfbc828008083bcde0992b9a804f00a30b4e335cfcd4b414083dd21eb6868101b2f8da6f73079bd0d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87f0c94422640a7b8c2161612a80d3ec16b66db1a938880c91c4d461a54dc1573619d2b94fc73647d632f566467fc044', 16),
                    gmp_init('0x2e918af8ffb373a58f1e99f444bcb7a2a27a91a665de8ab7d5e0fca7cd172e93b780c45a9c8e6def80f6f3e5ebaf0d23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74cc471763d97fd51aaf7f0715350b0a687f92756342494179db6162f1c9de81daaa0f532b0edcb5fa164e7a7534a7f5', 16),
                    gmp_init('0x15003ce3103d86f0efeeb644ce3bb83a6c99453f0f2e795552014eda723b5895e0631154d9fb08656337c1931840de77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c2c8d90ad10a3a3dcac280e92a6db6cf02918fbd89deb7daf2af37166775d30a318f42dfb69fdda1f1205a99254a913', 16),
                    gmp_init('0x8862addb3e48d0ae749362d83176d35992bd6fd6be21a80c4e55825835a73ecf2cd04a3e08d89ed221d2e145a79f2c32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x250512c3823099d24f92f75a3a26f289d9829b541df4e0e9cd736265648d1c4594636dc27a170d7894974d5fd863378a', 16),
                    gmp_init('0x18ef5db68c4a245176534ae9821f6bc376dbb7e7bd04e30cf3eac7c7342dfa36a519b3a6214889dbdd8da2e64ce85110', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee2f5eabb9e6c2ed903d42e278ebd41611c798d407bfb9b3e8a666c1983ebb1b7a7e06c4b7cfab472aada93658694c1', 16),
                    gmp_init('0x2f33eca5c0e30513109a04d5d11a6fd8010ac55ac94bfe80b11e66b75ff9831a254bc843fe3009ce78ae9d78bbf93fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61022e0dedd9a91c1662184dfdae9fbf9517ee6db5669b2ca71d38034d85ddb8d702255deaa1ec0c791af7dd83c66e98', 16),
                    gmp_init('0x53460ae5939253983366d2940980fa6fd98b47abde6c025aa3c7e24952358dec8960e9dafe7c497ce534eeeab57172ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38df568f4ea3b712909eef16764f585918fcdc62c4d5cae1008cbb17f45343a2e7942906cfb91e1509dcf1cad4e9ef35', 16),
                    gmp_init('0x720060f886cbb6c4da81d2424534a3cb57beaa585e97fba2c6d3e9765b4c3bcae1a6a6b524962195ebad0497d39d3023', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1539162bbae8ffb0cf6193b8823790a12ccd82953ff801e7a2f48c4f84237e6e8eef84a17fc95a741f145158d604dbc9', 16),
                    gmp_init('0x7e4311d9d0dabd59fe2d21f710a17faf51b9bea1fb5e89943135d9e5c0cde8ac1bad2db0c86c3edc9cfdb5ce8341b930', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c5694d8286b73e3ced50e4e89ad782bab692d3ad41e955186582acfa9f9ab5bc80ebcf82f786bc06980d1e162b711a2', 16),
                    gmp_init('0x3d3363d92b687dd2090510b2490c4eb1fab2fece7f75eae903d3f13909b71c06648b4fa50ab4e7a92db4bb4521b6d500', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x54aaf703ce9413be2a3565639f46d1297ba8d301f55559c3818e90f0b318ce2681d8506e7cbdf47c309e3c112ad29dfb', 16),
                    gmp_init('0x1c7cabab8129b1a70e54460561ffa8b4cfff6e13fd3ec5018188cf4c4e7c03590f03576262ead60cb1a15730f9827d0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e83a75325440195df41799afc0f535229b3583fe49c16f2c4e31b9a29ad84d3655cfc6851f24fcda8e33aa9150bb436', 16),
                    gmp_init('0x17e34152f91ffea198f89c829919b434f5bbdfb6246269219a20a1fe8a30ea9f7d183f28ad5f22090268875615395400', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46c72abdcba13bbcfbe23a692e76956f5aa4bb3ef8820c795d6b5b20b2a62c7e31839521ef2fd2504a878ab71a936607', 16),
                    gmp_init('0x10c4eae95d1cd1efd9632feaa3e39773ac7ec0e800f16a4795df0a8e8899b86e2280a162a29e6a063cc546fd928c550e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55270a369c05a01e07fa7a0d022708f01ef0a7ca871fcfc34b741daf6b03e690e0d3110bc7df7d2adc583061af4c29', 16),
                    gmp_init('0x477f3ff77646e387351a8cd2f7fd857387e42eb4c0f79a057b989e8ba6c46a62a3c7121639c3bea58a431daa6abd016c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x238cbe5937f2cd78dc985978a757419797966c468f1feb56ecac014062796cb42d2edec25b20afa0362e3dacc96dd019', 16),
                    gmp_init('0x55aade166ee44c014a7baba2d1f6001b626c6dc9ccca7adde8b5f39e12177e329dec148faf817ab71df272a3959219eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ea0e8d36514e6c9664e1c4a35c85a59bbcde292c31ea989242afe50f79b0a590af8041792e555eec99f4c7c8d33b7fd', 16),
                    gmp_init('0x176bf672b58d9f93f8d773ddd8cb8e4b970e71936e2e5de8cbe057db2160d595bac4c9c3e5a011362531171d5b9f8c21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x143971915fda1b7b7718c2f5f2495b62ecee2ef7216c791515f87869c1f7ff9975524b982a7702091fb883b782bc48c6', 16),
                    gmp_init('0x2952689b84c5478349c5cdcd2323961119c070ca799d287a5793f9f4cc700b98a062a81185d7fc14785688e0f0da5ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd0d2a23d529bd884c645ee18b0e256034d3e910e9466efa72b201e7b6b75d59a3b0027927a8a527cfc4abf044c598e2', 16),
                    gmp_init('0x4444512045e6488f3f94088bfab3fa6704f7518463e0d05281d36886b23b10234291ce9a1a81515dfbc9a8ca0fa11f1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x533c38f2e33f73659ebdd45683d1201b9af85233a04dff3db0ecfb73a0454461706426477569e30866c7248c1f8d0842', 16),
                    gmp_init('0x101209d995d728a9a7470164a5b11f828c24cf95d058316a44e4fec5552f15fa6340f3a78b937ac8f3ca97476231bc7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c3a1b25b4839a5d2055fc6621e6158478ca9b087f81d0f98b9086df0b84eb6ce894a7df8ee6b5698b86f8df1a26debd', 16),
                    gmp_init('0xc8a4652cc4fdb8187b17e7687529bf53fe2f652396e263b51788ceb0244486795efa08cc7ec59610cb74b8f738c705f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2158f4561ebed6d386f08684298263a45f3d6a9d89b140c4acc30a4eeb17916b4257d6eafe3ed06a8d612309cd4ff9b0', 16),
                    gmp_init('0x6bb0e62b184c76d3565c56709fd346ac4921c26e0b93f8d17a776eb61dff9a0a8bccbc4db4715f487cef6373e3c09f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80112da227c202ecb5d1314721a5907a05f352cdc300d193126dc9f21525803df8aa3a07bba8ae3120e94d3c6f279e0b', 16),
                    gmp_init('0x665623561d38a453c75eaa9cc95013a3c3ff2f154ad38c6f13d495b2ab2d536452395fb0f4ce6e39b98206d943f72a08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25b95ace64350a0dfaad149fbb3a707f7f8f32128fd37127d58d9c9d0229d3f51ace5b55ed31cbba8a27339580fe6ce7', 16),
                    gmp_init('0x66b3d62626031d774652dd7fc1d2c601214863f2f138f3530bf83cffe19ccb802761b287a4258c53b5df46773724a7a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fe4aa6b34a64ddbf16c8cf2c38e0b92f74b4bc491e1b94993b99f195872be601321cfcf0c71469132052be193eb4134', 16),
                    gmp_init('0x2ded66c8ce8248814a1117aeafdaa8bdd161f45b2cf504417c834ee53ab720e948b58fa38e83ffcbbf4c9027b51b581a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36a9bfd025b6f0f8dba1b808a825df61bc979f9c265a30631009c4f71941d13e34f04a58cb168c6d23eadddf607db7b3', 16),
                    gmp_init('0x74dc71119c8704cb86689d0536c4b50263009ce6dc834d49f76c2f646598e2a318f4f5649abe340673f35465cf67b899', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x77d0fabab0d1bcf51374dd177d3573354313d0b1b14f92f2e6ab884dab5cce2c71dea879256b8ca988557b978bf3497b', 16),
                    gmp_init('0x865e5edc95110849719cc5af881d82cf3d99fac5f189a43365a245711464fdf74ed54c6a4713943cbe1bce83212f0765', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d2b638f84e7a4c7be7c9fc8bb455cd77b91447153e2c6adb67da4ee0f12a0f73c229ef9dc6e294aaef9b172f0dbc05', 16),
                    gmp_init('0x49c33d61d7a53ba594ba36fcfb3b47f37cbe24d3d45bee9587dcd713854151db6ec87e35f01664c565bbd87dad37b261', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6805fa5e7006fd56afe0a90b0c810a7052da8d112c9a0b85913ef492329e478881b4296f2b55d277cdb426a42362c32e', 16),
                    gmp_init('0x5afa822d22a39e207f93e4186c69c240a4a6f4dd1339d6d2de4673bc042c9af9c9a440af68e01a1753e6e48f89614a28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x620362a32b044b4d6ee747ead04750a0a538fbcc42615cdd33cd0ad2bb58c02e432169e3204c482c30aa34bafeaedbf8', 16),
                    gmp_init('0xa387f57170ee75ad7f226bf1419cebb6cf8339a19e5e7d6e9d805583ddd5dce59dfd582066fbcdf596e59dbf9c3905a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x401f0b2697c1b22c3e4abf3f18b43be573056411a4ac5a3fd8986550902a068aa708a872fef13572c85b5d1b12fa9447', 16),
                    gmp_init('0x829e4269b9151f3973ca9fa7dda83655f2b7e634ef664e879ee4f803b51ac9f9a6d4adae1f8ca8236e56c88b09a4aba1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34e886586095731f9763bd2ba16d36e50fc4e4b1f9d765a4c9f2d151b663973c0a08f390d39f91c8fa9c78ad5d074512', 16),
                    gmp_init('0x647acf6dcb2ddd2cc61379c999eb04a924906f5bceef9bc2d02f3a174de3a981ac3b686bb3ed5fb1ddf2cb0bbd98e4dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77ee2d04d2fa3cfa08ee98242ec237b4d7036c0a55d0ed3f24f3e552d8e9d1f35a1733a8506442b2c9d7837f50c1bc19', 16),
                    gmp_init('0xae4feb82bd3788551710d5bd12fe191c67cf624d14eefeda2bfd329bb744b52165822aa5fe242cdba1bfd26d0c4969f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84e07db669c10fffd5f93ddb09fe2f421a9fd7d92dc01623ed29893a6dff42d992a4b496ef976c58928ba34449c5ef6f', 16),
                    gmp_init('0x4c0b6e19d8764eeae5fc28465977b56e07bd9b7cec3f535c60c1e42a2e0bef6953aac8b7a172d2b367ca716d8164d859', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42803976318ef2b9e24e9f29c908a0bc938542f601b7b0a4b1ab2c61a2dbc5e22f6912b617177ea823cba43e0e77e2df', 16),
                    gmp_init('0x3ac9e92a2270f89845f7432013557c92ebd5e472466254a5a24ec2f408f23d4c8ae1e52b27906b24e0608dd15a495723', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6532b3eecb616e3a570a1f95c589ebe894caadb451c9dad067ce683681f75901a0398e1045ebf523e7f7a510713c500e', 16),
                    gmp_init('0x24db97c3fa3730660670b3b791fec37e122dd813ec27b80997a5f9540f0787fda82a9ef4d18654d920319df469fd06ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c68127e1f4167cb77e40a916ce8845534343d513ae989e9d890afb8463f6cf1bdea97551fcc2e5247549c9e356c4077', 16),
                    gmp_init('0x7213c7a286fef07dc9024eb844c4786c5bfa010123359730701f182984a6abd309f2be28798d88e08fb22209090ee0ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe690bd77baab5226d5ab4473058bef6c73204b11fa547f28e74f3946849a48be2fbab4ef590045424c740db1735772c', 16),
                    gmp_init('0x6218e0cce82a20786ea612e5644af638477f79834e82473baceffbebeb5056d3f9c0cfa571fda39645ff3eac8d708d66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9228df561145135fe12efa7e7cb5b4c04120564447cb662efaef95c734bf2d72b099a6a34e0b932b52f1d6f2d595749', 16),
                    gmp_init('0x539e6a7b3b0d74cab96fb84f6768ad35ea5bc25ced364eeff714a4211a00bb080c9caf8e53e5923191551d7985e71801', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6849a3ab5a0a9e197240e2c1e2dc4f4e3a1512756bcdeea7aee09a61dee506f1e144704be24f91ad8ed782f449eef62d', 16),
                    gmp_init('0xca3f06bb0ba571a0b745276afb587442bf727769ff970abf3cd0d14780f4a108e1512f787006211476bd97153b26fee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b5abadb5ee18fd377902064059296e2e49e2f32c47454c6170fb97c56bbfcca4505d22f36dd2f2472faf202a31cafae', 16),
                    gmp_init('0x5463e56e4b5499ebc1ecd1bd82f24a2bab913602a1950ab4d51686fffbcfddc5758126fa07d6c974157d94a3f71ff21e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xfd6ded60ee8ec3a81e75f5af6917617a3416ba053f69e7db476f327b7c148535851b9abbce54c7f53a151da2ad940b7', 16),
                    gmp_init('0x6b993c00cbc20dd13653d9a9b712d66da4abe7ae4ca6aec1d3eccad3d2d8f705b7078434f35edd242caa40bc2ad05489', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19c7ecfc926db586bc5ff32ce97a992ad6be0793371dc28236656ae58c7c6669467129a5f37594cfa826f58d375185ee', 16),
                    gmp_init('0x8327edbe7d1c54123ee8389c48ed9ff9a13055fad8c8aa8c894786e68a2bcb1f542b45954653a6e73d56fa5dfee39188', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xffe3e4cc03016014e37907bdf27d36d90e19542fe8a62ff1124067e5284622622f46ce533b8a1e87433e362002ff57', 16),
                    gmp_init('0xf5718afae0300235de126b2525edc931af7429a3d1718e87b3114769fe2b833114892a7e76628fb12c2d104150fbf99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cc7557ae03aa97ce1674874108991bacb11278a0927355e009c64ed8e6ff973d98a142c77904914f3dc4415f79cdbc7', 16),
                    gmp_init('0x5baf6b1883b4aaff163911fbe1bee0befd1e198da9701004370f2a39b846890fbd6b454ed23767db7d4cf16c6174c9bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x375bd1b351aec43b3c0ec0821084f911dd5f6595aba2025e6dd00b19ce018cfb68d0c59db2a5c71da8784bc843e9b36d', 16),
                    gmp_init('0x255546ff9e17f766216dae7fd8dab7de215451b3fdc8877ad5887f77953d3d1daeda351cd492e9a9f534670f8b166663', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c6a1be8d9d58011ba6e548d29717a4d41092f78e6386cc23ec29d4b849500b9d698a205e9838dbca388d65bf906a692', 16),
                    gmp_init('0x4c6c683b9c667e3d3caec5db61b4d41df943d06b6fdc7699441cef76cf3d9288a250aaf0ddf5c20baac6c97b1d25262', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ee626112e745a9cc12aec849d8f5299e75e4d72b7afa0bb8e687b54656e8ce2b6fff1483fa39f780f4cd5b6c8aafa1', 16),
                    gmp_init('0x1be011e31da01a2d1850485e8f89b7a730659d18170996017555617e53048a55331943578e32fc5b262f70faabcccb95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x259373ad1172461a4104cab822daf55b3653e8302948cb9005a9c31b766381101a75a340bcc2c1a3c452249299b7f78c', 16),
                    gmp_init('0x2812428fb45a1b10823b3b09be6d2e42736048476bce220c3d76b4e8fb8f247f14fb7d5122fdc3bfdcee0505512991a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1520ba8ace3cdbaa803a8e2c1092c1dc79885f9b8e4f2e37826a6403e7e5b3501016f88ddf1e530606bd52860f1ec0e9', 16),
                    gmp_init('0xc6feac512486124506b002d44a6def9077ddcef692b1c0abbfb53749288108f08978ae647b6c1605fdfbc1c86946a66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50663db7ac283c4204136a056bf129b0a5d42dc1434ec7cf3b1c969e29dda6121381def07a59032cf4d474bd631dfa29', 16),
                    gmp_init('0x353c98e8dfbf4fd0cecc0954afa00aee71d3fb3b47f936f19e680f458e01a2f9e173fd3227523ac19d2e8fec58b5b13e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x594fd046174843b8e6e7a90599723d8dd04a5a158a7ef6fef7e27c04866f6cee47684d2c936ee0aa305302a295737393', 16),
                    gmp_init('0xefdd5795313373d5da117f92746ea6a751954b172b750845ce012e1d4d4496f5cc2c9827ed0add0d03a866421c6e055', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32d61469bdd4f296ed940faf0d35dede1df39211d6e56b3d34147344a3f334667d8e57a84486cebdda77b7c3b6c9eace', 16),
                    gmp_init('0xd42c6db0ac7931702e83279d0cf1a33270d53461f63abe817202f7b621cd1a565f8c033d672adf2ef822b83054d696b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56e9bee77501d2f1d62ca37108507fd413f018bf2dda76845836f59189e7f2ef5a8789f0e360b2c749a833b2e002bba9', 16),
                    gmp_init('0x89b3be40aaafad00cf0f97a1e94b39a058a265832f67b225bc5c5008ef5b86ad3b48eb61c98cb7779cda05902a105ae7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73e8743f524f4146eb5b417eef60e8efabc316a211d8ecd2ebfe77bbdff40d8eb260272e757fcc94cef4f01df8d12c79', 16),
                    gmp_init('0x2c9f29a32eda20a21699ce24bb36cc2fc5dd91461a5e6e737da5567e32382516f958ed3d7ea2f1959ff7e1fcafc8448f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29c7d900d2c9067b1adc0ea477d930d2465befd9b4122d86c47fdd995bb254df773f278eef9691b2c5204785ceebfcbd', 16),
                    gmp_init('0x75043d0d632b98485da5aeafce1f51c5ae9419752397529cd3faeee37e0e6da8eb37b45fed955b4b4f723976f16d743', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7af72e488da561487d71016067d137d96f1d0956d622cc22890f39565017b2562c19396a2b95e70f2caa15292f581f70', 16),
                    gmp_init('0x8bd8c0c50473933bdd1210f6baabee89c870d920e551f00d4a69d0eacebe2ac506bd9d9049b4cec09015874b787848bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb42bc403ee58151069e39e59319632b464a75feccde5db01e51b1fc4ac22460986124fe570e00e2b4d4bee166a3b236', 16),
                    gmp_init('0x852e78e7e8cee4114f4804911cc506691770e54e6af15763da70e84c76326d28b5d833beeabd8be43a6a895b1424045c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x892661e525dea098cfe8245e8b055210b4ee085971d7e19e17d305b63ae95d0e1039bcb8757745e9b7c74a0a7552be9', 16),
                    gmp_init('0x73665a5815a4f983471e13a7acfd970cfcae9fec4177307d7863ffa56addb7c131422f36b4ff8c8d6f869474cd1226c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x185c11a1ded174590fa459b50e3f3c4a2b6cf9d2febb5a4c5e6282bff91e2754a67f08a80bad9b58227831dcbd5e5461', 16),
                    gmp_init('0x658a3109057113a1fa638268e308e7ee63e9853028b32de06906ab1ee4ffc3c106801a8f4fc6ab450db461415840b2f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e4290f380cb24f6bab5fb57ef9f6d76539cf80757c47cae93e7ae62060591f08cbba9bf63b09f3f3c1f65a7060e722d', 16),
                    gmp_init('0x8414498ccb07c867287695b480965b6100494251d4352bc4a02057da473083a3442a2ed60fa5d4398ad830ebf93575db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e98a4670e637cce390546be8d1d24a328bc7effebfc9d378a7bb7ea4e1c19d19c1bdda5aae66029a9aff24b7da231b8', 16),
                    gmp_init('0x23a72afa722667902034109f2aefbc6f83007f090c4e1f8acebc03425c0c7795e6d59b17b2705497fab2f5c34964c232', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b563dae86c1cc12ca7bb0b38ec7e6015c681cc343d99761bbe8586f63a39919afb08f1cf041108090632e379b17a51c', 16),
                    gmp_init('0x33aba8cfc6a37715198a4640b3d624d454d1dadd9a3306d9d5b4379a760508e2adb402f98472da9d71a3e1ba19cd2ced', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24dfdce31c10f96ee8dba0d2cb3d832445c5d83ed4001e7c4ebce54b2a0b7900402b0169b87df579f37c7f431685f4ad', 16),
                    gmp_init('0x20c013eef7741e2ba7b2b69736fcab8af526a359834e9dd6d87a2d4d6c304174ebde154d24d2f0f3289744c4354ecf5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33331deaf58b92a290324de1289e75fda91348aa4d72c4030b3a6e4fb905545ab5bac185c4a02eeafa4250d0ab30ded9', 16),
                    gmp_init('0x28de509de03dab9e96ab820da40bc648f873605ae33cf29c7d1f9cbb645100d1a869661f7e2e50abc77d025a00bcdfd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x557b73bafd0c1883e49963b02fccd32cef138c1f9ba454072af1df43efe30d712895e595bdebd00cfff2bd344dea54b1', 16),
                    gmp_init('0x4fdb6c4d6e7f133aee9723b771f13ff3396cd3fc806d25ec1e8c1a994cc56449a839942f1be9c58bcd0f2d580cc2e597', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcad255059dda3528a4b7994d088e75a90f09bb056d1536a4065de8f17ecd284feae79b62529c1c76f106ea4b3298248', 16),
                    gmp_init('0x16b745c33ebb8d297212141e998742baa82504918dcbaa606d90a0a2bb1ee7451b417074bc8cc850901465e8908835bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54e206fd7eadea1f9adc7a1eec5ba45a63894c2baa9f5b23c7f5bfa2caefcf189a82d8deed488aa61d4f9e0bef41210', 16),
                    gmp_init('0x2b5db72b64aa92b639ab850f25335ce15b277ff582dff1dee88df7643a54770142bbecc74636f28cba761969db474ca5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78a8c50d1e7f66a7a5579e82951e46e534a70c66e64917cd4af18f63c46b074e175c374bbcd29e062a2b39599d793ee', 16),
                    gmp_init('0x11568678db1aaacbdb7988a5bf1722ff4271fcfb2dc74139f5e6d8272ef97575c0523823c33e41c09bf633cdf1ebfebf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bd671757783bb85d41b3df84e15c8e2688db8fa031a3d821f15a952616e0e4e0289942105db094b8d58e5464e90bb85', 16),
                    gmp_init('0x72b495a16b8b97e65f5b4d03f2c99f32458b822ea9527bb1fe4b079bc729cbe78e590f84401069afb9e68e5b13e23d12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cb98addccb9206f473a6bd9309176b671931104190aba04ca843182b9ead2789ccb7e5e5bd572552b2effeea5608145', 16),
                    gmp_init('0xba42d0b36fe21f89f17d00990c5d33112789a812f6d0b4f60f6ce000e5aa8f36b50355bec5e24d3a2bc5ea8bdabcbab', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x58207c45666a81e537359504199c8fb691d3a45300d2a7454f9411ba82df2bcc4f8fe27277fa6410372031b7c12fe5e5', 16),
                    gmp_init('0x64024c6dd08b6e18ec88c58885d84dd3e2652a05dbe0778c2cc1a19feff89e71da97004db76d268ec6c911e27fbec12a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89fd11e716b4195c90933fa2b1804e7087133014b08642c7f49c5e3b3be5c35436673cc6d8775ff9819bbb8d817479e7', 16),
                    gmp_init('0x734b5f1e096b18aaf36fb3b3b96a48bbb353e739735b398f4c5152ee69390bfcf25291de7ace8f853c5c718480e75f76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fdbd3afbe7232ba02fe56c8577315d5b3da536d1636e308609e9085c64589d6b2dcd63739398d65a83b0c5b3b38de2b', 16),
                    gmp_init('0x6eaf4cf3efa887f003f0cac9729f7711b875320b92945dab1e30ef775fcec61982156824fda4475d28405f06f88a9787', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89c5fed5f8891824943bcd19e210ae7674e57a39bc28ad8b4cc55915bb8775995a2a417d485f48771e7d7acca17642fd', 16),
                    gmp_init('0x1c9ba4686b8c109ab210ecf2fd33e6120784b62620ac9bd8ce4d06c547c5e4971c294d4482af6d866fa087b9b174fdcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52aed6799bb958044891edc1ca4c195c64c7a429e7db961479e42b7f2243f71ce460776edaf6a79675476196bd63991c', 16),
                    gmp_init('0x55c582ed1b5515f1e89af7661fe8cb8905f063108964aedaef1110b4b37504d8648bb9b71ba6ae04177675c69d336051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7018248dc7ef51f8d167332c996104671a1a2cd7dd17ae57eadfb444477ff99a8466d92dd6d19f9e612fb3751979541e', 16),
                    gmp_init('0x36d3b3580c2d9266250e532bb8b6cfb93f2550229ad23e4be2f7f86fc47a4aae3b0f3d8f669f130cf14198fed3c6c94d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25ea7258085cdaa6421d2dc0ee9bd2117e2e97330beed99e594cc8652a556f9b1414b96208b22bf7f7994152f1614620', 16),
                    gmp_init('0x76f083134082aa0ea89ead7f1a5bfed43ce3b16a5b7e69d715d530675698310cc637819fb91564da95b7db28904cacd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x336c3102961b055a18264b5b9d8e56819b954604841ac4ce16179fa19a6378e929894ec1e6eec62c892967487868a8f1', 16),
                    gmp_init('0x226a895501d7d502b188f11e699522710ec6b203639c096a03c96268d2d023c777211f9304450b89b666922158c3c54e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cab22b052d085b1a7dad62bebfbc5edf36a01116a357e2fca666c4f59604e0c835fb9752997004330ee5ebc96e2f54b', 16),
                    gmp_init('0x725ef867fcab94a855de521f13e5f92afadeef74f5d45dd8667237e6772461fbb604355a3cbeb25629dd1e56406a493', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c47645bf7980140268b91e279b55e842c9246aab199ea33a9892d5bcbf090df19f8e05d3d3082a051b041356a4559c5', 16),
                    gmp_init('0x880dd77decdf98321d03a0f9d197d2b9b217a6dcb40df91d9ed015ecbb6dfa7d357cc5aaf9b22933ff3e27642491a85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8babcdf5f51c80467c11bd6750399397c7369568d9ef29aa84bc533fbabeec449ff16314535cec7e83c1331d4edc74ab', 16),
                    gmp_init('0xdd9fdda7c08a71aeb1474ef6709eab7497d885d959b0aab56c14694eb460e2c959392ef2da0f9cb687f0af286d4e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78efe7225aaf357a438cf92ea5fc95f77dfe6cb946008b236066e449917200176006ea6658c36eac65067cb2cae14555', 16),
                    gmp_init('0x5e6bc9a39ce5af468a192eee9eef40c27df70d42e2566d7c4e9d18283a9a2b8e7856944ab9bfd9ef3d09390dd4044e71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17050278f35f0e6f3c6ff0f5e666931b55b13934f7a9eddc12b979223825ef417f5a7cc1b94935c58dfc5685a64d2e3d', 16),
                    gmp_init('0x423931f67fc725651487442c3d35a623dcaf49383f60590412caff5b9cf65be775eb3b2de97ba44d34512943e281f199', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bf9cdc3e4ad7cc5bc49753c9ca0692064c5d22a642021ea0227ae6d1a4350551cb487cc09200baabe384a71478ada83', 16),
                    gmp_init('0x40bb77f2561fa00eeae119c754ef37015a8ac5c71f97e58748af8e6f7c0ea5c6f5072eab05ee4dd0ab58284de04c8fa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31a342b24f8663cbefbce947e18087183c4836b6de8fe8559a3cb0741566ca6b5005c8fce00d315c3c4db03eb15c1f5', 16),
                    gmp_init('0x6e1d79f972a899d3d5983f8553accad352d89f1b9853ca2fa3e032bb9cc1294f11a154cdbb4d6a0512cc03ba1462fe9e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x346d5a747380fd65a4648dcf99e4ad8030fa7df33c16aceba8ef444f863544baa5fa24f8d46466bac0ab6a32c9c9a480', 16),
                    gmp_init('0x68799827d887ef013247c1a6e3a61e204181058348321904e3e868940f8a878d652266ef8ac1008009f0ebe1b3fb63c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6891c7d5cc5645b29cafa12c3e10ff550901d1bfbb540a69fe4bd60e9d0802b713bb154a2554a4800a2776b5fc3d6d5a', 16),
                    gmp_init('0x6de188d39e1c907e214d0f9cd53509825a8cc41e2a88cae9e719b0730c6fe3a74954507cbfa57869127a55e487804c51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84397e6041791d0d0e517caa5a5006d091f94eba2b8c2c4579af1c9b6a08a3c143864d2a49d94024754cedeb0012daa6', 16),
                    gmp_init('0x1f40cad8545cbdb3b851bb619512a8998c19a6c471b738bce9e7836b56505d44a758e736aaec61f5bf2c1a20a90c0f28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x514b037d53feb076ab5b542a1da46a26a79a1a267483c42299317f420aa57065a38ba6899cbadeb60769dd63a8327ac6', 16),
                    gmp_init('0x4ebf07447c7bdeb04ee11228b7deb4abe8fde4264ecc9a920f1d96353bb8113aeb5e2b99cc50a284def102aefd7992a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e719ecdf86b43ac770fce77afac2b6fc8962657af36e6b2acc9c06e050a6df00811f9e524603f6676ae2b32ce6b78fd', 16),
                    gmp_init('0x1a2ae4b5cc9404de99bc3f92d74d62650f9eb4d2efa3601ad44a2cc5d244dc841fa347727842a2839c1478d69cf83cf6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ce039f07a73172e2a461864e14757666bc8abe7aa4a04816abc07b123717d1c1190ce6ae297381e8341f0dda1026c56', 16),
                    gmp_init('0x1e96756f30b8a628260c5941e2086a090747b0c6550942edc18cbf40ba54004acb0faf2e3e8f5bd4dfb97d9b6a93796f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6efac76e5ca9adfd95ac20f255a2381d65e1bd4d96ab04b31366e5bb2ee1dce6e82d2d59816e1a109551422da4c8279b', 16),
                    gmp_init('0x111ce3e18cfbb2bf150b67e30054339f6ca23161766442ce55308799d10b5f9eee5dd1cd16014ccc39fa308df4fa857b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27a55524aa7c5b1909aaa2376b12acae34606273f91d0a38470130ea3bc7bef3b5ecb4617ccec42977639f80e4f78719', 16),
                    gmp_init('0x210fd2181c730612d33df130038e1995d964f677b5b510a9e94c489e40da6c6c77f4f5ef417d836e1fe903309ea7e33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37d12bcd61ff75cf00c993d37dc667f64b976484abf259521468e001a68345967485848ae86511c661c6924c7710d1a', 16),
                    gmp_init('0x4a39c33edd7cf8b6b79e9a66c740fe7909c4ddb96f45262879b5f25ed06a4b54fe27797f97762fdaa6fc4de3175b95a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f83f570555503b3c0d462a18244311496bd6a180bf521649b23fa7377dce4189f1b4c9dd455ba74c434bfa8d991c5ea', 16),
                    gmp_init('0x2348a37fd88b47c9ab89bedd9461514c1588d37563481bdafff186f92cb0f124ab6196567efa6f8c97253e2106da02b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30a269662482b42fb9264a9175fa069c03c9321e449e9ae5794cd9010178e2a4fe5e4490a03a71c5d297373325a0d34a', 16),
                    gmp_init('0xfc986cd54446d8803bd221dea374181beb8d4375e8ef483ee68995af6320315f617fcd8d7f3a171df485f9fb719c59a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5777720d8cae628607acb3790b366ca1bb5e32876acba914f231d16bd89bd04690269724491dfca0b8ce49334d0829d7', 16),
                    gmp_init('0x4f531d2eff19ba4faf46a6b98c98fba8678839d4b33597e3641393e1c1d64308e8ce52fcd20479ae9a44a0ba84904564', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82a821aaa9dacdc0dbf29652fe638808bfb4df07d7dcd42a5a4204a904cced298286f6403a91293ef071da533ff37ef3', 16),
                    gmp_init('0x71e4f9b9e94e06bac97db7422d0e5bd21f4b19fe5f41057eaae8cf6bdd1dc22b2e3f5208d42994b248f8e615eeaf7dab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60dd93e1371e4507253570b2a2061dde88b60b7df03dcbd096ae7d219938d312d3f4fff963e20ec722c8ccc47764d237', 16),
                    gmp_init('0x8b4d85d9bde9805926ab4afcb34b4262a6a56bd06255905bbf7aba4d7865894ce94ab1ba414aa9f3100ea051249428e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x679bcdc155efae895259bafea08dbb6cb49ca0542e79e55b8691485165d4fa83a246455f7239a3b24a077903404f1238', 16),
                    gmp_init('0x63f977f4716c45ae886c3f7b09d002f6d9a405d0af7cff255510b7df8cdbd636b4293a8884032fa5e987c16a0b3680d8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3c78e5d2752cef3203e2451cfe15579b5747b346e608ff6006b939c12437fb3f9c92c7c4a057670c3c955fd188855b16', 16),
                    gmp_init('0x11ae8eb5852b9797f00df37ddbe6ca0c8c6bf73bdd659a24f4a1db0763868c89dc0a3e37ce55fd2880fba02beb4004ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8acf2ac54dac66f4e6e8697d983ee36c8490100b5c181f95686245f348928af2853334e174dbadec3e989ae1bc39707f', 16),
                    gmp_init('0x53398f2cc296439e2e912c3cff3287738541505709c7b142a7236612dca64ecce758c1aaf0510a862fa8534fa27344df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b9dab96504e3d8b0e58f1d7b0108e03b8fc2b582aa7661c45cc06c12fd8d8544007e592777233d69822f1f067465cf1', 16),
                    gmp_init('0x4a08c2c8c7b554b9e01f9dbf53f18e07db08182fe7f34897a822d5d8e0a94344dab2d37fee7a8be00350fec58fef9570', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c3c9f1735c9ba9b57e6db95d6cbc8a9bfca65835f5a752a8e40df9d93e9f97aa0be92726bcd8dc75cc91eb1af550746', 16),
                    gmp_init('0x8af01dc1e166a67fb1e8296ce3c65fb49f0993fdb56879d4ffd6748ff7f41c8965ddae0d85806bb58d907854b10716b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b7ed9389e5a1277297e9f1a794bdcda893cc290f6899535e88d37e85dc705b604796e6991be946ff2000ede128d12fe', 16),
                    gmp_init('0x2558a142debb5a762aa570ca83a1c258a2d086d9262d932e0a8e9d8754db5c24e2471039c89fd769a1c48419a8d7144d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ddd10cf5af5ed972badd5bb900db4f5778ee120a115d03e5d882193786e6741227bd3551d15d0a97eb6d2f44e235801', 16),
                    gmp_init('0x1ef0534b53b85123a445aadf07ed5225844f750c28603e659800ffe27d6b400d25035f31b0e77d3c7b7b87fe03f95534', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c678ca50e5d2485b3af87364a095708301599d9c3cc4c8a668f654bd2337b6adb5679868f095185d91e64e44bf30f1d', 16),
                    gmp_init('0x873127b2cd4925a0305294f00aadb9e991c5fe2f71d02fc4f634da2391f3795506c0e98b57002f80bdea439beda9d2af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64808c56d6a0a551d95e39c034ea665c3b652297df603dd79183edfb88f32f0b5b602f2e3c27377b47379b361b5fe7c5', 16),
                    gmp_init('0x36d8316ac7eb293af6a2fc7196b5f88d08d6f51ed37786dcf63e6a04b1685c89f8b0a251aebd19e00cbfa36f024c887c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b97b69aee9e506cea11dc947ab1f650126fd1b54222cc240d34c3848b30e6515199b49e03020152a6da17d7480cd71b', 16),
                    gmp_init('0x3e67588083e68dcb5cbdd5e726f52a24d0b36f988649406258c145c93bae19ce3a66232e196ed0eb21ba6d399234150a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x241555e2c21fccd543bfd588d49802a0fe3cd12a1df2f08c0259266193e3269b6dc88ff835f7a457204008b0c549b25c', 16),
                    gmp_init('0x2ce66ec9bf75886dd97690491bdbd8aaa36edff32ee1a5a6d0bc365689b24b6b2caa3947588233629eb3d4ee8582c10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61f29b38e4da36e92126d9025f3ccf9ed7f1527b4bda42e8230ac39869c43f4a46944c3517a4daa93b0ea257d6a5d92a', 16),
                    gmp_init('0x7d8dee558a807d4fe6bb8c455359ba146b9088526df210c00ab701f3067f6ba2f136d2f605bd046403211ae86965ff83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e5c92415788150a451a774f129cb46d0b96d91d2a5eb69bd00deb38547f2b99ac37e732886584ab45a791ebad31b353', 16),
                    gmp_init('0x24699bf61d3a536615578314ed273d1ddca3c21a99c468c8b43f97680bd8b1cb16e3c166232098c3d0dfde1e69976754', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3da3dd1eba0d21294338c316c3df1f50c433626fb6d04dbe7d6f4634c0acfd3786480c12069b3dadec0141bb25366f0e', 16),
                    gmp_init('0x7808fe7bd569c0984160b96bd0dab55ceb29f2aa4f1fbe17b7e92f7672ba823ce8797ea717141279dee6c71aff96c251', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ee3c93ea6cf878b77ad9b384434fd20759c484862b1d5f73660068db8dde982cf8ee1479403d5489a021e6d3e1d675', 16),
                    gmp_init('0x54292272dde0398270705916b952bd4713da461f809384b937d545701b06e1753e4764bbe2af16b4266ac251e380f6ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b185a2bb4190bc04b552b4fa47fd1b3abcfd0716a0a29e23b3d99811079d315c06d2c35ad60f4212814a9719a78da4', 16),
                    gmp_init('0x24e076e5615e042a82ed4bc63de1036792c5f61d100b5d9cb335cd998d233401c3d76411dd36844799fc6f8ccec03547', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa65868c1ad711d58d70d4cdc3e8d82401532cc734e14d8288aa0480593018b27979c476223946eab6af0fb71dd91a8f', 16),
                    gmp_init('0x8608a93d14b4f727c278301b8aa7812219d82816187ac6987627c1f477596b91f00d7985934cb8086fcebfc0eb661dbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c7541e39e06f11b7c9b8ef2b22e3fe5f1db83aebd05c53130e8e88cdf930116f4c20b8c0e4fa5e4c0777c7195d13bf1', 16),
                    gmp_init('0x7f14511b7d4353cbe4a66c41132acac5e9cb6bcca7e7549ca92ce7a3482809f185fec24ce1d7f3abcd1208ea5498de2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86766c29e79f10c699a5c670e8c55c0061f81a8afd9f5c3f2c98dbed8cbbfe4740db54df9fb4c4f94c2748f247f93a64', 16),
                    gmp_init('0x71617eb75cfdadf2e2615ff688bb1ecf9e1a60448c9acfc5480b832fecbd72e804261855d81650c16c95b3a61d84d04a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58ea382f9771b09f3a52b89dc199c5261f01763664bead5b96bd051a6ade7e5ce08acab097bd3c73f588e903d547d54d', 16),
                    gmp_init('0x3aadb9e357bf21e15a7a8197bd198c36c331189cb2bd4b3ec474ecf62b324ee54184845f1dac9d347705e0061c704128', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5475d8f66295aa4523ebbf323ca66a6c197701e92c5e7ff1008091393336252427037e7ce25ae3af08ada4c355d7e467', 16),
                    gmp_init('0x6d55b447cc7eca7f6e156b6584de3448d72c655b5220b632b7f297f544c7ffeffe9c8e64fd65f7e82ac57d62a176f742', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d8841a71a4a3f1a8500bcc0e08f2dc274a01157f98857f29f167d37325d93fb329335344acfbf86fad2a983c1a2c485', 16),
                    gmp_init('0x19067330a1c3b20ece5ed37973bb8fdd9c8732825db04c0b13d3fb4a5f45a8587d83522a644d67913b8fcaa84467b6dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x628400838ed230d60134c071fe9d2a153fc4867cf85119adedff37383e93a1ad96141f2c5a1efd3af8881631aa22830b', 16),
                    gmp_init('0x48b4bda5b84893e3dfef825ec8602c0035226aef17694ff2d388ce537c58c3fcdb4122f6a8604bf5f62dd248cdb9a89a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3747e0f47d684528c01619c5eddec79caa9506d45cfb430938892ca5ac41e68863c36e7924151aa724b8b14d4cb597aa', 16),
                    gmp_init('0x1ac212fdcb5d5237627b766cad609557798e9c565028420ddd13c97f91474d618f5ee1c6dba9f6cd096f70c485fd31e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b5ae8395853f58a448e9f2ae7c89642486327aab36ae7babca97c8fb3d53491c64779beaae93803fbc94b7ed40336e0', 16),
                    gmp_init('0x79353ff88d2357b9af0b16893c3dcaf59a9bd323a862e732836d8bd87093726a9689dda6997672262e299d92150a9923', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a58da712283869bd886192af2d495d4caf2dc61ba72bd470c0e82ae963b3120b05b535b4386b9dad965d476e30743b', 16),
                    gmp_init('0x1772e96e667928462503cdee65c54647f97a03874e9ed3cac84b1cccbc72bb1ceefcb017df8a1c20dafeecf33d60de20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68eaac879c391ef02e7180704ab4edd083679076dd71962cf480aa338bd38b3a76235f6bcf01ecbca43c4dfbf5c00282', 16),
                    gmp_init('0x3ac295096bdd1df095cdd519280c1beb3dc9c9d1bf35ed05f0c32bce0c086f11cc1bdd655d66fc32db4a58893e0e5396', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65c4ee82c5d7d357d8f312d9b9a1ae01b4db70211004364e5e7245aad9fc1a2f5f276487e4a0432307ebfed9b67ecd79', 16),
                    gmp_init('0x3cbe3840de9c72c08ce573d1bf3efa01317127caba97978431abfa244f08844d8b6de6e62157a0efaa90a0889ac9f367', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a17739b5245bbfaf16fa872b3fda891974e13fa9ab13b62ed3bb1e511208126b8c4ef75a1664d33265d36699e920488', 16),
                    gmp_init('0x40df7b9caef2de2d38c9b8b9597b7b886329f56c8995e9da041ae77fae50b0919cd7a43d05101852778b0a39e1107f58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2719b37ebcc64f4e3f77b3088db79f9b7e290766ff9bfd130322ef8711e9d09ce108ba4f1b2f0c9695fe86bd13cc8fe3', 16),
                    gmp_init('0x2e95a7ace1ddacf6219035a4cc649f822dc8adc6f6f4c0af6ab04b3d4ae5cafb242c97b34e62c07d8351f28c11c9a615', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c9bbc1cafe7c63350fed1dc2fd68e124170790197e4d615ff451d0e45969be9833efb987433bbf4acca8079e186d327', 16),
                    gmp_init('0x28aa9e7a9cef477301a3aef1b112f8b1e849c79a73fe01915e9062fbf0025d046eb08a36fab02bd955ea84d7296bc506', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7f5a050d8bd1b63e6c77f2948e2a0c91888e73d02634383c078877ddcb621aff2509729d4ac82efb0db5fe29b74d2042', 16),
                    gmp_init('0x839e42e108f722ca5e0b0493b9fc39633b3a00834badcbee3e8803f01eeb4da991f63ee3e202b31ed3fda5c8806135eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e34c180d389225212034df71071c657dddd3459c2e58a3cb57c2056b5b12fe768b3d334bcf1794337e71b3747cc8145', 16),
                    gmp_init('0x829ca2241fe97802c4f4944e29e4575f3ddb02e26f7d73e0a753e8e3f9da0bcdd074742cc34973b97a210e788c82cec7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x143ed90211eb8461871c1317192f3b70b4f8bcd4fb7cb2805d38086fe1187064a2f9bb20a5150909542725def3e7f206', 16),
                    gmp_init('0x35c7a7a9026b86dcbd6f3a29d73c0aa3cf413730d9c9f098e6ac350198dc77977d3d9200082800aa2b213748cfcfb525', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49173424533abe1a0d0a1805628f128f3f4d8e91453eea371ca42e370ba8fd01c7207f855d134593a416d56f04f11922', 16),
                    gmp_init('0x2a2087db5c04780d6b627caedef9267c353f82e78da864c957bb19b6fb4c8fbc6370e952b284d127f76c22ba57d0ad8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71d8e875c321cfd31d48b4649c6d7811ad0ddbb1aee639d626a01fb416103244017bba773168d13da139fbe872866d9d', 16),
                    gmp_init('0x4aa26c6975fc3ddbc373c533fe67a5fc378f42cc1126c687892215140ea698e1a16f4d7ca98e57413f451526f71b415a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35752c7362f13d0fa900bd05b5c144617234a1ae17d183cad6f3f4c2ef99a4cdd199e89beb9bceb00a5c776204aee54', 16),
                    gmp_init('0x33ae6ea558b378f3f3aeb6b27254ca505a082597899cbf898f1cfd6eb1e8b34d1412cf20febabb8a2f72219e5022ee0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x497c2c571e73a61304251caf380b727401f6ff2894eda8ab1e555ad3b2b3a58dcda9e546f41c0a48009e4096cb5221b3', 16),
                    gmp_init('0x26ea835358e457db0a3747be4eaa8720d5fcd9d8a9f4d2e7dbcb3783055ee5291cf4581738f7e2991c6a419176c017cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d9eeab6c21da0555ece35a3c288b7a2e2ff7fd5f097cf07f1c2c6552fc6f9dea46107d1f7680218fe5741ad50dc0727', 16),
                    gmp_init('0x89aedfaf679a90092d17407428fafe70246f8e884ec6a57b7261c504ea50d0da93052d9a4589be08d1fd762ab9bd5095', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32d9e0a68552ebe5229bdea93d735596921cc3eed9dc50ec495ac6614ebda82afea00b433c59e66484dbfd7d1c4c9f9c', 16),
                    gmp_init('0x4ff8d68de7927f85bfe0ceb768376fc97846a9d8bc5a9856e2de84cb6f2887459f3b86e0f47f1fba6d0a72d911411055', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29141e8abd653e7a3cfb78741f64fb8dc593629ce34f087b488af45d95db1ab564b817b148cfa31303bcb73bb325d071', 16),
                    gmp_init('0x45e32ad5163a41feb09783cc0d43070bd6e5dda3749757fb1a96b9d4da5bf1043f9d7cacd86433fc6a9370410169be3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87ccd09cb0c972686e2ec30f39a4df9e9ada6df30c1e7bc2769e8c3e3751a4ff8e233b2937e8dcd41beb1238a52c50b0', 16),
                    gmp_init('0x548ff31e52c2992d074f8a5dfabb876564e00352cef4d4492d016b6737af9c0f9f74cc029d1f32ab73214399ffb4546f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ce9e2a06b52b3080e630cf49d602acd112260ad5e150bc4e69cc12801da9b81138ee9070ecff8d458e882130799deee', 16),
                    gmp_init('0x60b8f9c917ff167f5a3a7795118bec2933ac19768d1e35130c8b8b18d83dc1ba287b5ad3955cc69fbf14ca6a64c100d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1463c1fec1e15f790384ca676a9a6dcec443f78e85bf13b0fb2f39724edd503885ffef762338a7d189ae8b8b83896a3c', 16),
                    gmp_init('0x3219d2a2113910a6bdc875c5386f3a5b05085d72b0e5f13af71c3521856ddc61e92a20716d280b41e602a35ee4fad26f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5aef7799761dd5c3cfa66dc07094d0b9bbf11a117079d514e15db6d45bfbfb2b8f791cfe04aeccedc96e5fec1288d5b2', 16),
                    gmp_init('0x88e5783d30af089cb49ba6f3c7d218c71dfe7d311a10f25cfd4c676c4cd01e1295b651b87b7f5dd17d6b90cc3b400a7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721e5052595020cbcb82d372c8ea6d0c11d0730cc7cfb901478f3dc2e35901fa9bdf87a7aaac5b7b36e6d35d6f148274', 16),
                    gmp_init('0x7eaaeca80d36eca30f15b5a51c70e156f6a2a98aedb45a9e8c167fb01dfeb1a9ac41ef0bbc07075cd7ba36698d09749c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1be1379832b07a361615eebd843a39c66b437db7a4496c037ee53941c0890c70d8198fca599e0143c15b9b6d27979372', 16),
                    gmp_init('0x6368e14378f7549f9f27af8fc4b50c4cf643ed0aa4e927b51a8cf122741b6fa1afc901ff41a50df903cd561be6739fa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96fbfd1143afc9106ca8216f220bf1691d9d16c5f315e0ba5f72dedbc469f9f77f28f27d5aa9c6d4079e488f7c14816', 16),
                    gmp_init('0x687124e6736d85bc08d4e2cf7b5cf7238eaa4eb2c22b4b152ee37800c06c9afc99536260b41813dd495bebee8ee200b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1983fc9cc0aa8ee65a061309e0c94abe1b5c55275094db90c0405e9cad66e4a747de1115c51ed75273f467cea1d156da', 16),
                    gmp_init('0x73ec00d50dbf6ce2a3d2064491b46663c37b842f6457d3532308bd19038058e12144ad108e14436863d8c5c2ce755cb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29ef417f997571e35eca470b4ae7fcb484f318161fe48900af5593c76a85b628230ad4a7e575a087c887ae7228d80c8f', 16),
                    gmp_init('0x3e6fc6b6f800fa10e9e69e62b0a7b44e8b273ce24f55b09b5ebe286d809455dcb36acee4caf02479de91421713bfde3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x117087262a62404ddb7f0f7092d42a90d25eb168dafeb2fcc2d93502334a29008ac1f25cdd9a192104afbfcfa050426b', 16),
                    gmp_init('0x37ce04a7ebae5143027adeecd9f9d88b4324d1725314816cec35adac2eb9f10e0022e33a8ed5bf307ad96f035426b0e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46513b383ae9c14114c056a67ea2565bc76b3e8271e5f3127e560f914ceb190d15df39a18dde91ffc92421f92aca736', 16),
                    gmp_init('0x29ebc34408e628606b847c46c5db99687b1ea8fcecaf395846027635137b32474d63a2c7f658eb3f799eea700509ff14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41cfaec304ca55eb07541d3cb3db7f6bd0bfc5b555246fd463745c4ec01720e36a98aa7cd1a04a3fb720d75e85ea58c7', 16),
                    gmp_init('0x8b7b78e26e8915fa3b755edad69b9e43b4a6abbb56744ebff48d6c5f9d5ae5bd593a6de5ae5e88447ba6805a10f3bbc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e9081a347e8ef4564ddcae84a329051f44e9663c5ddd16f74cba5e3f559ecec1660cfdbb4cda6d01e2a2738f6b97f44', 16),
                    gmp_init('0x531f6f3f5c4c35a29596159556f844c4f3be93a184211f17e2c104646953263e6444bda5aa75f7281947922a5776e51', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44055f00c9bbfde87212aea33061b694cb9e6f353a76a63033c5dd753c716484c621e1144035d38842d800e2a394e70f', 16),
                    gmp_init('0x62ee919208158d6d82df5171fbb113e53cb9a2a279fff9991f3bbc5345e66fb8ba3c00f02e800473a97bc47d33d6a7bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69e23d52a46b68cbb0180c5ffc6eace0d3521b4f92b706bafc437fee6173088a610ffe5de1517725ae90a549b056fb1a', 16),
                    gmp_init('0x51b0bed1af403eb63a251210348d86676033892c580f9bef1b6b0113245720797b2a8d8485fb8851acfbe54b372ef34b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13a8f28f0d41edd54ad326420d49e4724559c9e4a324a277e95c89bb59b48dee747fd4f06cb731854dbb514583c67b1f', 16),
                    gmp_init('0x35cba5029d62c93c9113a5cf39e0a00d4b0c6c045cbec9b6e8faa26e0d052a6c1effa148a7ad3cb86cbff3da1049f848', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd65d03d1975ef665328e89653a1c4428d2dc01aac6bd24d0c1b5475b57e0b472c5d8a382635e41c2ccc57518f513db', 16),
                    gmp_init('0xa5f7ba33db73f0f52ae6adab539c4e159b7a5038a19629c8209b8507f95d4eb2290ee3b3dae7db683ed5cefb2271cb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a1f9ebf3d21d0dd920085ea6ab57579c875edd10bf7ca2d0d2ab6a7e3d3aec1ee32e1cc74f55886bdbe385f8b38f0d8', 16),
                    gmp_init('0x8ad98356037f72920e1b8265b13af875cf5aa33bbf9560a51a2885b31e4f032fc08a962ccab1ac28b8f090cf748a002', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53288bbd08d776eb408e6ec08fec0759f5685a90c9b3b78b6652cd26ae96a200afc606aff8c831046e8b8846ff816523', 16),
                    gmp_init('0x55170f30322fe09a6d7a6da6207f854c267dccd9eac61e071f074424d6d5865bd6b016c2bc1a9128dc1112506630d658', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x735af2995661daf943b28090be7cbcd9d281f5532a5d2f16850be0727ac487d6b140a132dcbe3d1ffee6c042bc93a856', 16),
                    gmp_init('0x12a4c0d68bae4adfcacbe95cc0a6c77d807787f57510afe8a64694c9e3e756236b85e82b9812ff714d993e731750c3fa', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7d7511cce22bbf3877027cf3c3b95018329034d39b884634a750a2b91476deb8ef4a19d00d59053fbb3bddba0ea4e2c0', 16),
                    gmp_init('0x3ce7655c3d76aafa7c3e5398434d9d056f0b83421b7764b43b350768899bff415474ff3d5634f5238bbecfab6030280a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x727efa87384425b7a27595f5a88b574134ec4b91e751606afc20c99dc20f117e6123114231e2e4e5108fafbfc9cf2f38', 16),
                    gmp_init('0x39f57874d1449a347a437b1683bceb749c5ac095be2d69790511d9251ed63dd6a49b1cade70b43e6d069bfd3d36d7a92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14d3103a39d07779077f05df93bd825b4108c9c25b42df7c93b96386f12be5d290ca57b5be05ad24714d509577c21be1', 16),
                    gmp_init('0x5d3d1cac30ad1e0c4c7a3949517e37e66561ec216814cff236887f6020128c83fc0254379e31d39e793c2c50a387b420', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38e0fb3bcc6c2ceefa8fb5cb4374e5e2342a5ea85e81e931e4c48692052d9015185025f58dab0c936563dfb4f74a9314', 16),
                    gmp_init('0x77d2c329b85d92e979c1a3f7273a0c7879f54b16dc51bb0bcd795c998a2becbb5c6a1ee2ae6969682d112c0dc776623f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e76cfa25ba7f034a7e779b8c5decaafeaa88fda79fcdc21d155a6fda14bec8e4c4ece64e0b92b7a4e5d3ad33a2db4f', 16),
                    gmp_init('0x514d01fd435fba52b2447905965b6ec007134dd7f3944e5b1c2e09701acc90cd00b6176cf80d2d242d572267c886da6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50ede2b5d27b518fb0b1ef8b546c31381f30e5d60b6130a9adfaef3306a682b411214a42a4fb569384426a78aaf47872', 16),
                    gmp_init('0x8903f87685730be2813618dfb4566a07fa8020b26bf8cefa36686c63b83a2d74265c52570617fffa8b837e1260363963', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75cb58aa154c1df05781352f0ecb8ef2236f2821b4dadb33638f21d80b452379aff035d37dc4b07546abf3d1a163003e', 16),
                    gmp_init('0x1505c8da77db6c7f7797d61ba781d163b1cba6d1fe68144449be515dedad7cbe3c114286d92b012fe9544dec0f9bd2a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137611508828679ca5a16ce4434e83aa0578d2532d6624176a5c1d83078a630fbf1193a890453d824779b81bb8f0e4f', 16),
                    gmp_init('0x3790cdee045550bcdc5e206080953d6fa67df08a9c2a9877fc8841d88ba210c14073f70fd5d939f6c76d2f8dd62841ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fa88109eeff34d1c71f89f27e3118239f604755bfcc4b5da5b3d3e4aa7dfb68c0060fc3dddf948dc8bd2e615206f63e', 16),
                    gmp_init('0x23c32d3e8bf58d80eff37e10773ab19aefa81066999e1045981044d98c0db7cb1efa860c05cc8a610303e2ca6d36bf39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75311eb72a63c2a17e51660cf9cb509e749ed5b3dddbe273593f00fae069b79e1c5953ee4e932abf8f01c866a4f44adf', 16),
                    gmp_init('0x64160aa963839df6a8f73ce2f7c4e2f391b5727ccbfa2d5f1672d21ebcfea7717491ae342a59011b45912658447b104b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15b9b9b032e1e75337de32c605e7a2b0067152b9226b30fef4f9d9cf5a58e09aa7542a07829d8529ab7a280889b892b', 16),
                    gmp_init('0x2e995b860f0e317590705a733a44eeb4441db7aa46a6e1fb657d41dcb347fe7553fc036ff9505c2d7a8ac09514d8938f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x754dbc69b3b781102637266963e722727c84ea145a10976ea213e91cfa452ff9ab5c7ecc71156232ee604900f51c0e55', 16),
                    gmp_init('0x5e640bc138e59356c078defa02e48bf69bd22090653b89e5192837252e8fcc659a78904d76028c577f3fc6bf5d867556', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59fed55da126dfb888b7d159da25f184696703df4996c195cc39b47cb1117c53c8072699498ab08daf61d49e0bf50951', 16),
                    gmp_init('0x33c3b131b7d4929661741148cd3b3b50e49b3896d1b86634bbff3f00fc0f4c6a8c9c02622bf1fc2578ee92a63677b445', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x607ed586474b73f79b4fe91f196971fc2dd9490f79fc06eec5e315f7dede5344ddaa0fddc5b7447bba0ac0bce385afe7', 16),
                    gmp_init('0x77662c893e438d10c080b68f69ff10b28b107bfcbe2b9611909bb256810dba150e08c127a4c466bba8ffcbf22dbbceaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x831ae55d5eec50cd1f04a44af077eec59c7195dc0d7dbfbce9ac5da20465895d697af0c741d1e78a43627174b77708f8', 16),
                    gmp_init('0x25067c94ffdbba6f4ce1b6e38c048780962e13ea3447b3ea5421e735f841406e691b12fde93bb533405a0dd18fd99c43', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7cb7d598ec17d7317ef019f859af00bc7741e47b1407f66f4f76ddeb2d417e980d62ab13074e3b0e21b3955b51c45d0a', 16),
                    gmp_init('0x3ea5480dfb4f0635238f6fb9de28242a754872e3b0d44ceea9470ea341877e32376140489ce62d273d1c4345291557fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32ab261444736eab7080cc225e1bfdc3318d3a0ba0c1ee593c9eefbc3da81368e55959856a2591c03a9f49a041c11055', 16),
                    gmp_init('0x66724999ddc28c5705863a3b919b2bda3bd577bb838cacc95a3363cc9898890cdd7b0d4001f9d5772595bdca6e9140c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23dc03b6c413d05cb324643d3a234e51ec38a479a08ae78b0c735139607831a183c6ff5635835cd33460bf180962a783', 16),
                    gmp_init('0x1292198c5b83f6327adc7306c234608bce91ad60ad9dbeb5bf91813cea871255ae8ff53ddfd84320a9889cd148485904', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x884484aa8cedef2197058f576d6518fe96b5ba5d243451b6955f6f70fe1e8465e59edf683eb874e1c979fca5507cc35f', 16),
                    gmp_init('0x75f124052c684f0cd40c0634eda9d6c909424c758192f3ab40ceb41da8c00d96b11e76017dced1d50295b7dde4004120', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x518ae220d62fb2c274edf2c54b8ca6001483c7134b005506cd5373f5dabce77dd117c2dc41924bd3593599f169cb3992', 16),
                    gmp_init('0x4be832d0daa5717435148f37b16a573cd89c204e86e471c5fa06ddb159c7a80ed6095db8d9c9d238969be3efc4777091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93d16df88f78f2d7ab538886e4b70f38cacc8e0ade4a1a8f73b9e0fb2229d7d21837e31af5f099c174e1761e683e5b4', 16),
                    gmp_init('0xea984f2ec5b713e6b58951d3c31f0e505c5f7ec8f4a776661e1b451830a1c93f168fc9cb13e38483d0e9424c936b202', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70c09eece431c6a117a8de526b8ce4dc34d18da01091b0b8c53d21773df503b65304227c36925581904c9d6f8063b45b', 16),
                    gmp_init('0x6557275205237d7e3bd0594e2313cfaeb3f243aeea062a3072c78bc29735ea012dff2922b573e33e6f9da73303e9d296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c796a034163ae29f23b30b83c01c2d73a4ac67efd511957e085ce2f29cffcb85b39949301793f98503b455e32a77c00', 16),
                    gmp_init('0x40f06c1090d894627338fc101cb5d312a296b06406212d4c49f734351693a39defedfd3702263f69a637085ab6d03964', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d6d32554b8dc8bd621da38fbb19ca19d690e586082f6eed498593cd36a247c6d26a6204539f1b9020fa93adcc6cb1', 16),
                    gmp_init('0x3d90789c845422631555be7c68a72ce5c4abf463d743bd3a786d569a177f3bd4d0948b5a2e38b741fdc8a339b98b628d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x701182a5d0d4ee6e91384487c70c1757618663094edcd97839b314ce54a00e79304b2ff7d71f451e31a57287bee33a0e', 16),
                    gmp_init('0x18d05ca8988bc7207097ddc09468b51a900c556df07e7bacea2b0121eeb9cdce62a221e1564a127e85aa5f11ce55da16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76f97e84721b8a8cb01567eb4a30d6f35beb203df84ccbe2a8a0bd0f87d9273491b06214add74fdbd83dc8ed0f8ce3a8', 16),
                    gmp_init('0x71b9e3a730173651152787f0bdbbf0f3d325374d9f6cb1e2f0b18375db10ac4eca036dd2786ef6f70e53300615fbc5b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e1c3584d27486e6ec294906226051234be1cbf9bd93c4993473a2d3655e91e94902991394d39f281093036021b21653', 16),
                    gmp_init('0x1d9f63f787fdcead42ed80dbd9ebeca11a0e5f7261a110295b1e3f62bc5ff61f4274b4bc442e3f38c2facbd7fef08259', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x647be5b2057ce66bde9c5c494195d8f5c9ff429241a737257711bdc93cac917a33ef16b5a7f3322cf2d296cbbea99891', 16),
                    gmp_init('0x292c9f58c1c623ef66f88ebed0188f7d43332da220b5b50ce5fa93ae398d8979fd658047ee90ee9db495cbdfbcd8d403', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3681ff0916c17be0aae533c9b6f679a1709a8dd673a39e55089f54180e229874f8676e8bf669ee8acf48972c2d0f7d51', 16),
                    gmp_init('0x1e31dc6e9837871a109605067dbf115f9b070ce2a77438a322ffba880363f5e46593b86635c2804ba70e721d0e8a684b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81968ffe000d9d776cfad07066c72c8f66c44cee2c929ae3d3867164493cdfbf1f99e343c05a3f436bf98772c86b7fb4', 16),
                    gmp_init('0x50040d6967668cf1a4a372cd416f601281631f7dcd41b31aec9cea10d31a587baac87e0e5afbbff13684c0f0ab429219', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3d717023b2a4ed70dc00da176ad0418deecd692c2ff2c76ddd8d066bf36baca801bf5e77329bac748fa269c78a553306', 16),
                    gmp_init('0x876ccd183a19910e86056b6ccd86d677799c0d02f296cd4e346e09135acfba8814725315bb3306f93f508154cd49b977', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39b4412b1add7debae838490035e15b33666ab9ba71b9783c13d044ad4fbade511ec95fccc0b6054f88337c972ccf3ea', 16),
                    gmp_init('0x305e7b5291ae457bcb8a6867c384cdf14381e8699a089bf8412590cacfa1be71f70cf82e597815966abf94e21c4f39dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcc90557bd4b0696bc6cc9c335f80c667db7f548bfaa85c38774378aea4218ccb7e5826f10f9135647d0a8c1b09cd5e', 16),
                    gmp_init('0x54ca7460d7367c712bb7b674869f63bc347ecb53db9e2ba7af0815eff9dde41c7cf7ece744b37d4cf8ede189fd93280a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6551d58439eb4d17d3a80291650712eeb1841c3414b8cad75bb57bcee8ba50fe7d38afab2d3537a59dca1474c72b0b58', 16),
                    gmp_init('0x3af01cb8fc51222a5245267acc4b2b1ec58a2aa84d3ae3a1900426b612a747ae54353a9fef9b869af61eae56d4cbc3d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76cc09d509ea49b112e386b7dad21abddd8f935b60673e7f49ae7a95820d5dcad6a0a190d696d37fc8a08ad331e82a06', 16),
                    gmp_init('0x374bf8d9956b00f3e5dfdf8178c3fbd37546fb577e26bef9ebb20bf202718455163c1482885224e51639695480f758de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12c8baf043bddac994406792eef38a287b89d0fb49a53bfe2a099cfa16c0c1478b85bb37dc4ce9ed200d08db7804fe59', 16),
                    gmp_init('0x666ae9104d609e4b9d484eb6b1adf9d3655fd99789427c046a1d7b97e7934a657ae1f4077fa2a451baddac0a19c7cf0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d8961404223f6ff703483136313bd54ed66ea8094106c2a33c5b06e366ed0d2fb142852a255f5c682d340d9e9b6923', 16),
                    gmp_init('0x54321e26ec98ba790ac6d321575bd144e46d75e6269a2031512051f4825435250f14840dbfb552e6ebdaeaa6d857d496', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e089b6b5762898de46651c3661a8f48ce08c17f62c38f41504fc7e6f269858b106df6ada262e833adff3b224ea474a4', 16),
                    gmp_init('0x7583562422ffccbe6a2e326177f70d22d28c692ca683732c1959cb36118e5cbe1203ce1b9f5277b70469be2d5cdf51ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x330365c5fece79e3ec7827e34d2b860164781a40285276d2d22997dd4d63f5309b003389b96c863fdf7afad8c1cac450', 16),
                    gmp_init('0x291d5527ee9e4567fa880879e0c48da71860069bb1429000e014f0eaf91aa184dcbb0d0e8bea1021f79d0f7ccb005b64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x794d7eafc54703f7a122de49b892e8e502d22fae7c2fa79ea04087e7d06b6b6053678613884ede2e6ab742a0d893edf8', 16),
                    gmp_init('0x4ba1023a2d43023766a35b70353f057794d78461d8d0a411126611f83b6b2d9863ec5f41682b8fb039d1bfb3bd4f4ed9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14b213ad64e039b7189be6cc598554f8e3878fd6e1fcc3e7a8013b1e079489c1223921a9504a49df92aac2b8d2b0bb74', 16),
                    gmp_init('0x5985842947abec3fc3d77a47c97972a09e9ab04dddafa66745877b77280e49312ef64fcb6d674c04fdf02ec2fdf5efcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137405621ddc9db9ff58739c509de98022fd0c075791244ee8a822bc9effb3432b28f4b402c28b9ea01d62ca44f78aac', 16),
                    gmp_init('0x427200973a20efe5d6d4cc290b8248fbd1a1a2f6c084bc077230dcab6388a37758397aea4fc8555df19b97cf89e36a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5100daa11fde3c3b89336122b0e2880c868acaf0b1389c96d060cc77f7d98ef3082c14c82aa173275942fb1dbdfcb6b4', 16),
                    gmp_init('0x70b8ccc4f095f327c594d40a03bf93379916c04bf1dff0cd7a9c6d41a9ccee16817bb3659d602d3d323c41966ad72e87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ffba3eff482d5b7b421a89b4614032b449139771a0ea202819ccf8abf3389dd221453ef834eb1cc1a1dfc00bc40c0ab', 16),
                    gmp_init('0x3ee73cbb1b1f0917a0477f7262635f3ebd94f7bfd4273844dbf76c0febb427aa71bf9448b57ea4c9c044e32157446cb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83216e2c8e15c4bdc7c04cc68fe1b5543d424f419cbdca9f9c81c2b49235763d561b5f747ae8b491e53cd0ef35743e6c', 16),
                    gmp_init('0x39b745d931dd230fa34f2435112d640abe29c2516e5086ee99b19c4149d691516a2d8813aa97c3b267ea1a7448f69599', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ef749e45c4e673d461ffc18ce327326538106453d3d6ed56bc286f2962f4d84b6faf4b29f55b0bfe60f2549d5f0233b', 16),
                    gmp_init('0x8294c77b4b968cc66ea6085fcf7c92e288cef2ec5e1873e1dc886ab77dafbf3d61d84889ea9400c20e04d88a025e8a31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e6892cf1a33011d5160b8394b52e7f72b722ab2aceb46d52de4ae8785e262335b9727624f066a88f31aac3de8e6e254', 16),
                    gmp_init('0x5e141382f3a2a8c82d5d5be82474bf0aa2ce98b5286bd131a3df2e1a8c9f09badc533d7300714d935c12c738ab6132eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12a370e9526729d214012b8133b8660f82e0192f3372035100d64b6e6e6e3ba76ae55e89437fc1a9b3df5fdaf353e1a', 16),
                    gmp_init('0x4527f3e2edf83b04288b4336b4042ca63fa67022783ab883167b4fdf7b6b025fd043a89dda767781722c4ec2edc78219', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xece0aa2d330eb2bf84dfd04174edaec389aa1a4648ceec07f28dec5eb400cb198c979f3f9357269cfd94e5b455404c6', 16),
                    gmp_init('0x75f9f05e477aea7389bbe4a74ab0479fd6f20ab95fef38b10434990da099fbb05e09fee2401f598d01f3b10a3ee9dac5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45919fd23abbe89a4e4549eb11edbb5c2b539960f859533794757b952add1b71fd8b3c54cdec9f5107a24ebb6f0dc2dd', 16),
                    gmp_init('0x6336415bea2f63db9a78b5f39b532d94721139f94ac4d02ef0938bcca6ff3940b48b226ce83567f79034406dc41686c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68333aa36a139b528f7187453d6f586cdd995926d4f5f93dbad9b6c359836b17a3639038c8abac514eeddbbfcd44d968', 16),
                    gmp_init('0x6ac4b7f53ce4712275e48c13eecc402b39588ea5b845e775d17dd3fca0213a8f746f32e701368f6a398a5b74d3a6bb82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83577d0c8b9ab336a7ec67898ddcaeda14e73e0f1ad2871a688017c762b9434ef7e2738159a70db61796d7f1c6437842', 16),
                    gmp_init('0xd81843fbd0f02ba400c2352f440157ebbda4c2638a068e78e6917fd5a859e01e1251ba61668c06a2f0a5bb43c7275d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x623b77bd9d41ec8ada8c15d3952e0ec470ebdb8e16440bce5b12ab53bfb7c9716e9fa8cd6afb3f9d84efc78b69c9c900', 16),
                    gmp_init('0x22b1c560673ac04507303ba0a56fa53cbe6dfd62aa045bb7358f797c96ab2f40cd4e988f69a15fc4d2259ef7c23f9c78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26d9f681eebcddef0f1e5e7cfbddb56fc69c79c57446b8b800ca10fe80586fffb9f8dc195770a3468883c27b6661da88', 16),
                    gmp_init('0x3555b472c1b9ce0193c72ea2d01f926e17e1d61c0523aba6115e9e8dc8cb6fa8dad2b0e80efe94d17f2ee912b6e85eac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x628ea7b039f9be3cf46b902650c94c53bffe9fb1db9f5996b3ed27ed2c2b60240f4131ab52183b45ec55b4557efe8bca', 16),
                    gmp_init('0xaef05ffdd72299c2926d6d302c98670e5cfa9bb5bb0c8802e039b04fea61bb55df474a20b2c272657ee6cc8ae435d8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a9ec83e5cb30c28d115925d1223f255c968860e8cb1dc5f69f44ea79dc7f823992519ae2c687a42d62062e22f42d7fd', 16),
                    gmp_init('0x55ff0807cc25e8a553defbb2ca145e0fc1190b41dd21b073eb5163f611d8e0ad6225f8a08ad513ac1e9cf8053b3b189e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71023a816208bb9d177eb41c0e0a91afa81bc760270afbb63ebb9aafd968ea81895bd3079ebeec9d09e51cea330346a7', 16),
                    gmp_init('0x15aebdd2300f33597519e9cb44f5989646ee288dd20e7a07cea2b0dfafb58629ccc3b95bb4c2a5574971b9570f31faf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31cdae03681200697334b15adff7ae88ffa82b6ef4a10a8a061d7e4cc622ccdda4dbf8427704cdea4662b976bd8be1dc', 16),
                    gmp_init('0x5688bd333b057cde305c2fd0d5ecda9050f5982d2c76ac2b78576a248a72990f4953660fc027425d81bce9c519990c58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84dfa79993f7ee2386ba7936abd69c9f6692695b56cb15ebacc9fd2771758007086d93dfc727a3246491b005d0a451c', 16),
                    gmp_init('0x4dff9ee7a227a6fabde3c4ca07d4b39edc855b10fd3c432ac8b8c918867857ffd118dfae803cfde01940807d05e83476', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bcc8d174b99ac08a25a8f99c6069abdbfd924b630036eab77c72ccc6f8dd3fc9c3ac49ebe110ac9811d32f217325d32', 16),
                    gmp_init('0x357c2da2318f21dddbe173fe81d1335698e51ec5b447d297b9ea4856227d44fceb8ec2143983d4257e24432e192d191f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3412cd932d000eccc5617cbe8bd284669d9c80db44378264451922bfe6a9d4d8e22eae92e5e7fa603d1ea32550c31b29', 16),
                    gmp_init('0x245f55877941dde762344edfab44b1d830e7fde9fa135056fa680d56227946b0bc7bd67b3991c98c9753ccf36e08f213', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c2f1a1c10aa09b68575ae41013965634be762176a4ec376740d8869cf0107b01ecfe86bc1e31c3167309463793f2753', 16),
                    gmp_init('0x8cb041d2013ab9447ef9af213aa9e350bf36c629c08cd27a6be32daeb9b992883e97d24b3305065b96fa316dd32a649e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b46dc665d2b1acad77e5fd76ccd7eefd30e948834b232772c11f068d462813a505d1b51b958ddde2e55012d355734a6', 16),
                    gmp_init('0x29792edbd4100257d02d530e13ae900f6637677b61b59bf4085f9e5eff74f425694760e0ce82ad5f0b47b54b37261967', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74e5b0f7ba481f1e6e974cf45aef41fcc195abb58e69290b07568991343a2214e0e5f83b7d858a20b5072c1ec64fed85', 16),
                    gmp_init('0x6ba2fbe0664f57de2e0fe78a15d51a676352321a716f8d53aa91e5207afe1672c35310a27ec008bf6d905386098d06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57d52bbc2f947530e9907ca5607517a62e16a9d1979f3e63f6d4a838d2935c44e1eea290a65641e756cc44e199ebd07e', 16),
                    gmp_init('0xb9b28d6e76ecde436ec279a7da9f17468f20df71136ecf566d7b658c87bbb7735eef11a26039211ccac5f21a0137adf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6073818a9ce51131ae028a9b68f9033503c6385e8c595463d65e418102a45291ddf92d07e0846429deedc63e48a67e16', 16),
                    gmp_init('0x40c074e9b4e0ccef9dca8ef0e489b2230bfb7b0a5ccd897a080204c94ec155b838707ddc6a121619cb2286932c426600', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3665555b3555ce98b5ca991f6ce75a5335f76a410d56404f23fde2b332add35a57e9de27f5a332584e450f5b73ff5674', 16),
                    gmp_init('0x1bceb91463d2742c84d83e23d4c0a8e5a8e470da7832b22e966a045c91f896d45df74c68a29d42fc1055f379fe3080be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40754adf26793e7f3c82dcb61db08b5bf0403fdd1cca921e8f03ac78dc2a5cbcb7faaf71dbe61945df6d761d9ccf3af4', 16),
                    gmp_init('0x3e16ef4aef37c5f8e761ec3dc7c306bce613088045cce584832ae11b254cdf61236663d9893041d3d2eb1203b9778930', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35186e1aabd086f5f138cd458ffd956bca1c1e74bdac10807aa7114ba389250c2dcba1e57582061582fe8c0da2549795', 16),
                    gmp_init('0x1b3b07bee082edb441aa997a143d23c7b1f06641fc8c0752e6d84954d8a7a26b5a7c0f3049394f104fe4c99795554919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x731189085a5c40be478d6bc588fd80cedc2a190666fe8a7fe5da44fb7137e2fd77c53234c8e548eb1524eafe0e039af0', 16),
                    gmp_init('0xfe12cf76501f4e8b0bca8308c5965fdf8785806b86eed1a51da7872a75df5b8c18c97fdea5ee522e0b92995f7525d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bb53e944e2e3eba77d2285ebdfa2435f7ec9c1aed21b525aa25a86c841902ae3739dd7d3aa995f3c2fa00d4cf947b9e', 16),
                    gmp_init('0x3d3e533b02c1283ff0d99f7697d79b6b130473d3c4a5fdcf72b95bdf8d278f9c56c0dc1b2282ef2af03a333630684c09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1973c1475cae240f35ee0c3a2cef054f0f6c4fa3308d4a7bb3d9ca9b9b27d5cc49c988ec1033057dc89dc54af0bf1a2e', 16),
                    gmp_init('0x1ec96f928afd74ff4ea44be8b86b8324b06962151e24a2f81b6f5d15e5eabff9b9a179c317ad66759b004b4564ccf0bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcdd9742f399ade18c09fdd1426e93e2671b8e4e9ee989fa302c75f2330784c79543184abd5e639f1c5c7d3b6addd50c', 16),
                    gmp_init('0x4c70e9b8511b56016adf622c1c5617b1faf6167c7dc139abf012feb2a827a81c55a4fa97b65b902979beee304e48af66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b2e9c5ea17b21b6c6cbf4ac185024ba01c492f5fb65164483117592d3d5ee25e68906324fda2c41b2cffcb4a382af12', 16),
                    gmp_init('0x4ee24c2f356f89df54a299dd40dc27c12e68d4f035d39d7c356887ba6b8792694add7f51dfbec7b7855eb34ab12f0b10', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x845aeb1884a7f80ca5fe200ebf81b2ea34093520a2582c271d7b411854b91cac81e7623ab88f292480a5cfb1ea8b8352', 16),
                    gmp_init('0x47a7cade697d8b1da310f7b5a0456fbeb1077556cd314dd508a5221810ac0cc4023061a38eef4234672714f03e605391', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ad83006c3c0e3a69c3b034d871e5328dab4f2b6bd6cb0ee056ab49159f9320e88486f19e50c00ac1db892408b8a800a', 16),
                    gmp_init('0x47f294844c97ef32aa9fa5e59b35502c798a58ee6da6e40c60297f01c6deefa69b0a7b71350ca4d5aa5f2c500cf3a67c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97481427fc9c043a2b92e243c5cdac15b37344ed9edb58bbf0fe555bb32225f8ad403cc6ef61d0351ac769111d23c2e', 16),
                    gmp_init('0x6647dec7d2bf89fd847d9dc20ff0e00a70d5a2f617224c14e02e285f5d3b97a1872d5130ffd45e7283a9644b6ec69fd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29113cad2eddc76acdd267eb89b960efabbc716c438417d459dbe5c0b15c50e3b8f390a495b30294db2333ae75cb1faa', 16),
                    gmp_init('0x48b480a459c841243a46a91e678a410196b489266d70e28b4ac7653c216afceb070e7651f2098394b1d7b729284a82df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cc2418c83d087d68e79cebdbb8280519eb941830750af191120c047c8079c446a5482a3ca59fe0057780c0775e010b5', 16),
                    gmp_init('0x2c433950c5b40d5051b44a0297fb65ee16e1e42ab7e2b378f53d57d24aff203869e1bdccbda56bf6369989da2c569be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ef742df8907135aa53af3fc68b55049d7b812aeaab2239bb0881c97b55056f38931c9a41b3de68ddf90bf690d78766b', 16),
                    gmp_init('0x23f16f51b452609f5d1059f25462e14fd753dd1c5551d15048b9f3ca4e60d513ab0311dabfba0ebaffc66757290df480', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1645e1de1f35531d1e1567480794174489acb86a1aa569b93900362de959dcd5fd5b756f9078829f029f8e43877051d7', 16),
                    gmp_init('0x3e06cf69d77db5499ced638fafa8d038e0afbfe409a5c0c54adbfb36b7e4fc1dc82c027efde52be0e9e29f235e2af56f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19c229551d568e63538b02528cd7606a4d49e4d77158946cd953c8ba0d9ca44c181753bcfea0e35c7f3031d07bf64ad5', 16),
                    gmp_init('0x24a80cd9a76215e5afeefbace3151c0b6ce400b10ecf5423769830cbd61d408f26ec4b089baae2b605abf6de739944a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25bea27639b3e82b6ee8235c7d3923d68be7833b970c8426371609392811603738c844877004786c5396d9b8005b73d', 16),
                    gmp_init('0x3cd920efaa5d503a759df985dd66cd655df96cff3ebdbc51f8269a59c34020c74a27c928aa493b0c875fb3cf73ecade3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f5c5187a16e7cc6fc62519cc593e7cde2bc29694942b9c5f54895d9d60082dea91ac47998f7b2c8d3cf45b05db681aa', 16),
                    gmp_init('0x529a28b99a44f25aac458442cc7a781f626c4c88e3326101473cb9905d4a8a1dbc28416e20ed78295224f17d39e508ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d4ac8daa679be34497ccd99a320fe293e0426da4cce4b66837c63955bc494aa6b53157d5ebe1165ce71e056eecfa635', 16),
                    gmp_init('0x6e8c5c6a3a8bdf5376489ee5008cca0f7bd004bb8e66979872c80c0a20f012f9bff4543bd855cb8241c629674bebe753', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68a182fa4951c47edfe9d83a62db9f314771f02b9eecce5bd7882d4f9d6082e3b0456fb4107ea8a0c2ff97e36b17d104', 16),
                    gmp_init('0x4dfe2dd65295d34e918fc41270894597e7076199a7b5bcfafaa9ee4772a1501c206b8104b29c6ab8fcbfdd74e765a4f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b02f83eed74f28403b8cfcb579dff405c4d9198d4251cf21eb0900e6e1c0cf40499551d3c83cb6ca1f14f658bfedc1d', 16),
                    gmp_init('0x60aff2033af6296c321dd5be417e7c4cbcefddb1d91584f8c416a1d1c3319b618466881ef12da7d26f81ade1c1ad9405', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6443f3dccd0bc1fedf4fd3ae2f12464858bd35f3c99d9f15379514ca223a268684eba7d15aa3014b9813439b9e4796fd', 16),
                    gmp_init('0x45ae97c823859b98abd59028deffc252a85c3692e0ede7a4256836cd11e5cfb9dc51673f29eee6b1dca0930711c73d56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83933e7af0594a3d747c80704ebb3908139c6835aef060a5250519abac8077652920344906b5b60185a9744ba8be537e', 16),
                    gmp_init('0x1ee4ffc5eab2284012f6366d04c8fe2494c5d244e704bbcb0efae5de9282895c24ac89758cca586f8ee10267e99060dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x258417fc2912fc09f541e1518caa4f2dfa950582451861d12a24f86eb06400a7dd81a62aa3356d1a1369f78bb46b0dde', 16),
                    gmp_init('0x4fd22a91cdb07a348fa73529da48a46a13a4cc808054c6dbb1f500a6c561f19b50554bacceaee8ebf1eda313cb91cba9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x451395c9b8dac4201078fc26d92c922b43c52ddc60284b771ba672711f0a9bdc6f552ed401a932831d5efce8902d717', 16),
                    gmp_init('0x251354e88338aefbbbede9fcfc03a83dda488a7cbfb368eec88aa0dd104a876f3fbd11b0a2e2299a8fbe961663b42a79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x604078c9ff5cc4a9440aca827284b33019658be1c74fdf4fd2ef0b809f35b35108e0e5cdc7fde862c9c21f07d5a18c82', 16),
                    gmp_init('0x1a427c4b1076294236befa0984e3a625b85874b762c46729d90c6058fe86c97a95d2737ae855e13d10ee9590d9b5b583', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89f6be7ab3cbeb4aa6cec406faa1d5042915daee70aa8ae4731db25778db433424e15a64f8f8d509a716edb00978d41b', 16),
                    gmp_init('0x23389bde7e415497ed0f11e42e2524715a75f8d40bf4b2c2ad21087d10bdc3e2265d1dfca621d3de2d3b13e7540467f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67c1bd461e260730e5b96a82487001618e62df44d99e376e97158ca768cf4921d8daeb89aec8011cfe5334ffdaad06ea', 16),
                    gmp_init('0x44b7e939e471efdd3ceb6103dd92bbb7a0227ca85b15e979714132ce92cd07219e5e5e1e3fa574f35c415360bfe7f8dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b011412e15768fd5b65961749be10f2d7c23f709170608e344a99d31b7083c6612d79f566854f58ab68aa6d339e1606', 16),
                    gmp_init('0x4da9cac57e82520809100e8d62c1aea4f0f52a1877c63b915f7ea81a02e8367c8f8d760175f2f08dfa7e80498134f148', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55657725ebaa7084056f8db3a7a2a2773b40aea71b905e0aa1afcbc6412a8ce78ae59daf69bf2a111caab1a87d49d160', 16),
                    gmp_init('0x6a3cd018f00f50bbee5cdf3cb0b2cfab57699d5ce1a75c7fcdf45899352434260e38310c5992e50ef08e444f473052f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dadc6a18ff5e9f8490f2a41935f9fe4fb7de5167ccf66b94029d51159f83ba1c15933acdb3aa67fdb1567402e5f551d', 16),
                    gmp_init('0x737367a7efc6c0e4cccc2e88e694fc19f78fbf57890bf7598e0c2b7a20b97398e4aee669ceade03598c7643da53a52ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x625718d27cceef0a4a3dfcc922236672e105d78c8f12c01f529dd77310e068936308026239f9ea7210e60e8df2258dc0', 16),
                    gmp_init('0x23e06116f3aeb036d58b3a6dc1475332ed2df707ab850b8f808ba49f07cf260040b2aba434f32d1194f6974add1f21d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b702ddb4ffdda8f275fbd1e07d37ae3c64e46597d13231a0f59c13fc1073e8457c0a5dc7420c178873a27c98201d98b', 16),
                    gmp_init('0x17ff544b1cb542f543f983f97d9886178939e57b3e203308c0e80ed73da815422817a25f644a18f06de6782ef21f72dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb38a271622bb8fe8c71201e4a628b856c7c35415c8a75c9e51d6711509928101e8dd2d1902f9811945370fec5c45649', 16),
                    gmp_init('0x64d7ea73527bb4a1d942fae9f3edd7a1502aced37babbc73bb7c3e118c3c32ea551cbb11805161be03aac86d8acf0f92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4caeeeee10c013027d27303487faac0573c0aad9be9b44dfb005e8c0e2c02a91ff1f7d73bef9888410e907b4ed9c10c6', 16),
                    gmp_init('0x8948a0eabf0ab9b3511bd7effd552d7f9c540e81c8b6e8ad3c206326786be528a088de3fa830747920f04c4f76025df2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d2db266eb4a40403026cbe97ccd1872d7a6e654b7f17848011efbce7c820dace31b5bf8b36672303f438785357ddbe0', 16),
                    gmp_init('0x7d42d3bf786ee08eca3d933aec089de2525a5675574fced519178691d64fc6351a61257f9f3c3f1ff616e0baab377e6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d3bc761ecfeb3c86992a9679f3bb091b08095494a2efdcd3b2f9c12b85fed3a32e70ebc201d4a5845d80db227d3d943', 16),
                    gmp_init('0x1eaad0631838eb72568a915b895b595111cf3d38c4fe5797aefe181f4cab2c4e13d22e6f44e86307fb9a38bb1d6dcc8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e339405681d61047a9f886377bcaf68705de5e19ff0969a8da23e96db77089ab636dc8a67e9e9adc96b6709bd874285', 16),
                    gmp_init('0x6f2769b8625613dc5ff924e10a243746cd3b8886e32c3c273272910a6b9597990953ef6f0e920c06c9ab0b7e504066b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17fd2ab128ccd898bf4838fda85d18f1a4221ce804bf5a616e13ee760af98cdb6feaac3a6b7f327b064931cecf5c99cb', 16),
                    gmp_init('0xa27ebfababd3b635dc6f0727b799993594307726c6f5e8e2eaf423ef28a3f163ca031a6a3327fe2a7afe2b443f07897', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x26c714658368af82f18a7097a7a3f4003a5dc52369c7cdcf8f6f901a0dc088a8be1f5c39755ffbd11854c71eea89abc0', 16),
                    gmp_init('0x786527c24505522648cc7200bc31da7c864b31e8b2f80181deaa4875f9bdf7750bf028d83ce65fe45b2df89c500abddd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c246c608cf1964f06edbb90a8291e72a2f60cf4eae2ca863408a04788413b89fbd7198a3749e166fb20e9c63a685f61', 16),
                    gmp_init('0x33765e83b7359c610943b64b5349acf222bd9a603609414156557a5b17df42d58c1127bca57b5660690de4ad92f2edd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44ae8028ad28e99ebf08328f0904687c2b5d2b32362cd78faeef2774a71a83988d8c52f20882bdbc9c0bc69d8675edd4', 16),
                    gmp_init('0x39ef04a63418d6a128cb28853952df3589add3ef14878fd68eb0615237a5853fbaebbc3124cc5d1d4a5676487b733db0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6654840a4488a5973ffdd82cbf719a66e3cde7fa8c14a9d5da1cbb3b0acbe9e7dbfa9bf06585620d93fef75e261345cd', 16),
                    gmp_init('0x8804e3e9d174a9d9a725755fe92e223da39333dc664b467ec4c3c105d83b8c435729ceeb0b5d45b9250a1249048b80e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6477959cac4d48f752ed1748266f78fd2b2f53e465cf5b7a4a8b6b79a15d15ce2e849f6c0a400191f08eb1d3c4a5103c', 16),
                    gmp_init('0x18f3bd7ed96cd8d62df0acf71c67c0eb4ec2f854e5466b083fb710ecd68825eb9ab1c9404434f0cd69175ed1e7f5e5f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b189286d121e4718dabc02b690a9729b470cd44a212b31358fcf8be1122915fa11acfcde4ff39551d6ca76ec34ebe78', 16),
                    gmp_init('0x2491483c6828d2cfd9e04cfc05e24b99ea1d1cb22ab1ef6cc13e7a67438f44a3ad35ef74a34e2582494795bdb51a16b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264935ee8d72f468ccd0d592d15f45fd729b76588338b1980398c507d19ae740efe8ec251410366dbf85d9483778ace2', 16),
                    gmp_init('0x4c6b651f4c849eaaa86dcb8bd2ad0edfd67e7738a00ebcb2d4dc03341ecddeeae53e649ef10adf562c6f8da15f48814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x118b241e8c63b91d90478bb07d5797a3fa391738b6baf9897e95a8074e40bb3d977783ff804bfb5da8374e7065a611b6', 16),
                    gmp_init('0x378b336ac19dcf75c1a432cdaa92c33ba6794e42ec401435f085aff8db075d5e583226e10155a11d634777ad8c3ae0ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78434451df001ca16dd29846c9fdafea49138b44628e138d01cd056e4ecf44db27a249b75a4b597d9a963fc2a3a82e8d', 16),
                    gmp_init('0x13b951a17c1518b0ba04e88bed3514efe452a118bec093f08b14a44e181da45369cc490fb7d9616c210f532fee6a9835', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ac5efdc035117fe17b4c0a757539ab64ada03276975946f858d1ef989c2b8763dd1fc09b51ecf2ad817a4a087a17e6e', 16),
                    gmp_init('0x7e0fee2f41de41671e68a843204a0960b2b7b1f8c4e75ea28ae4b3d887b61ada5fa51101adbe7914b1022d94e72c78e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32862f30bf46c8a6d391279450b9f07025d8fa7a31c4e99b8fc8425234c548ac9539c107c7c1aecde9181e1c884f674e', 16),
                    gmp_init('0x4907eab0b7e1074319a1edefba1d3c09db6a6c8b8e0187d8fd435f1492898dacf2163d4735f9fe86a7008a1fec9b8145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5849979e69b41f34e2e7edbabbde9a509b07471148c5c5f470910d24818c4946e6c99ac9abc9c6c18f8804547b5e69b1', 16),
                    gmp_init('0x698aeb968977fadb4da2063cbff26ac32153318c21b26687ca2b04f909685fff8fad41b4452c76ab4cae470c63cdde28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x676df6d3d48662ecc72f1e566eab39561df26aa1b66f53a66cc08e90b78f64eb4d600d66c29ba847c299aaf147becfa3', 16),
                    gmp_init('0x83c0fcafbeae07e345df06a56ae1286100a70a125a2105fb29622712e31641c66f2898a30c1cbaca6f4c7e23c42d9601', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x375bdbe2c5e7bab8a34eeaeeab3c55d1dc790ceff36f5a36ee64d8216d25e8ee6ebdbe4cffafcd800383fb1a1a833e63', 16),
                    gmp_init('0x3c57b3499cc1634cf70eb55986fba269be74131a2f9ae24854340af1b6706ca9a350f420e4295bcd62748cd29118adeb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f00f8d7482f369489bb5b3b6897bdb12fd1438fbcd9fa409818a6cf65fd77bc9d4825982b954bda5dbb79d100056d3d', 16),
                    gmp_init('0x14de6c31ffa12833d334cc229df70b4022d7f7ec3e500daf53d04b5c01b4adffa7758b2718f01d5d788af39a91a5135a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7a5ae0c0adf76dd559cb9d513e9c6e1f1764b841c137b23c1d9f0e8ab1bb70f5c4c4522b83d62051563dfce4fe5db0c0', 16),
                    gmp_init('0x14982e8a963f2b4b11d4d222e2094adc074820dfeff32b65d72f04e30a2a8edf3dd01a14566f01ed32c29e2a476e56c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d360f37d1a62f3fb9b107685a3edac76a754468d34fe19ffd9a1e94d5e2ccf5412e0ce9fd760485186c4d410f0fcb0b', 16),
                    gmp_init('0x1212323332cc40cf7cb91b974039070d4b69657c0b0837cb0def86de44c9a8fe981624b00794a3fc5ea94f37e66e66fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x164df80d0aad621f3409226a9f4023c8b3f126269f8a881551b7db195fcbf254c178a93287ee4bcf2709d54fb8be281e', 16),
                    gmp_init('0x897fb54a7de26b8946c3f8d934503815624b34c40a8f1598c042ae193df53b1c16aeabe65b57f9e6ddfefaebdbd274b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57e0ee25f8f66189c13d2b72d9db98e4369242b7ea5dcd7c1d75b39c2ea8b0fe64cbd48c8b5923d5fc4151c65a34cee9', 16),
                    gmp_init('0xffc9947cd6ed9ce1926229a1f3727b7af1dd6e820dc84e06b6e38e1830f87ad22c4701a6f05f6a0aad2d6fb9880b8ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x896d17ffbb092ab7cf65b78bf1dc67f1d215b65bf0ae49d182a99c470b7f6fbbae93f18b94e0e30c8dfc3cb84406cb51', 16),
                    gmp_init('0x4e9d37bf8c649c0b46e66ab7f5add25c316e9b8f84d498de4833926954ed5ccd947323a8e7178cdc5ae96ced09cb7cf0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81651c13e6877e89d07a076934ed1af3dd12ed9a18abd6350eb72351a6e9e9982392b9c940a5dacba7e96f43fb09aab6', 16),
                    gmp_init('0x567309a306258bfa4cd7a99c771b28192c2619a4eae449839d2bee352e0b9153d7b60ab145d72f7615c71bf5c78b9141', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a520d95ccfc6dbeb14ad795c99386c2afaa6455ed338882731f56223c33da65ee018b89a60b79cc49ec2e64a01c4337', 16),
                    gmp_init('0x4870601bdf282ac45326092edcb57d4a193ff0d55924ea46ef7cee02acd1239e0a4689f99e612ca7cacd83b97efd28c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40327a75ffccb8a28068a120a29c8e242b27efd07612005312910d3db928e36bf3c71d820dda42db481a8354cff97ae2', 16),
                    gmp_init('0x2c5fddd70db4736a87f7d834bd9bd182e3641954c063e0ee41198d8c330e6dccca982d61df3783823134a8311a95c8e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e48a5ae484b9f25eca8b86c26994bcd17e07b8f0b3eb0d8948824cd6ba5025259afa2c483b59675a607c6a765fb557', 16),
                    gmp_init('0x2530010ce8ca3c26236617c747030f67fcf16b0b2c4cc53553c5d13715996ad4d95e4912e192e511c703a7b9e442e5b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3291563d4af99f3b2562c3e7fb7fa4d160ce6bde6fc91adf92ffdb576c88ab80467abf15b6a1b70241463cf8309bffa5', 16),
                    gmp_init('0x167e83e3b2c17e2a1d4e8aa3c56548802c2e7f4faba09ba83f8e23c3ecf9661d76ca27c24a2fa7d81ce8b3759c0575f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a80d1e312a27ecf82884c378e726aec0711b609af9640ad6c2f7bc439463333b01ad0e58894d823254c06f64218aae2', 16),
                    gmp_init('0x208ceee30aa7192af05e96c5fa0bfba10c49090212d621f5803e9005e2b3a6aa4e93149440175aae2da2614503b8e558', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf26fe0556410fce4acfb8fd574c8ce12063e0d4e15ebccda8b4dc7952a65ebc784eeb8904e6549206226a1420bf73a8', 16),
                    gmp_init('0x395137f4b9915ea848b897a12e09feead38bf6ca213257f3f1823d218b8e93572bda0463cdd209629088f3ed52cfdba1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d956d3843d8851dda581c99327ae22bcd5e205566f76b2334e607b319dc5791d0897a4f3341c25fbc8a05ec9001fa49', 16),
                    gmp_init('0xb50309524d6ab6f7083f18636e373d9aff0b39bb6d941bf61737c496e36ace3df42eacafa371232186a531ea36ebaa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64bfd2960f398696878d923d6a0bc2e7b4343c202ff8111e0aa21cc699767b901acd1e69054a6393f8d69fb85cf82b6b', 16),
                    gmp_init('0x5936955cbf00ac79e9666a0f00f13e5eec4d24f75f8e2205971bc835eb083b5e284c994ac65c759f3a114c318b8d1141', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69125fac09857f172ae010ba5fab92de6a6172565372a247131f2c47a3020ce5e6a7acea6dd8ccf8876a3658692a64c0', 16),
                    gmp_init('0x2834205da00a634019b5e10a0d641eab68ae2c3df1c1dcbcb15734fccff044377316d929674efa2391c1d2c200cb213d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2c30fae1d313a514813055da8870a4279a0f0c3764da889eb1bb2b5c3809810d45b301d30daa362f706df6967634cbf3', 16),
                    gmp_init('0x3969b2fe727404dd7ea6a80732a5e7f1e37733b8af13f307395f7818dca234721854c27f0f9c4ff10231ce6cbff5f277', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6820de8ca2b4f11d534a7c2cbf5c0c9bab319b355c37c0956ff6e4a312a7a14a1ffd44fed009e12d92de661fe591bd44', 16),
                    gmp_init('0x528c5d40c67b26cbcd667f23cb0d7507a675d3fb90bcdebd6ff6322dbd50b91bf05ffc7d251a1a6efbf08ee89f0b9077', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42cb9f66ede62891e858778917f957fdc61124f310793dbdc0f200c86f53de9b6fc552ad26068b4a89f21a8c8bf6c4c', 16),
                    gmp_init('0x541c643be3ec43976177867c8434204e3eeba941b52b1a539ca7f1edd06af9fbca1105d3c3b7e5adb40b9c4031d33857', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x898fa13bee0ae61cc2fad64150101e3832874edc433f82e3053d78b49bb4b2bd78d1220850da8c2f5999bbcce5f63c69', 16),
                    gmp_init('0x3b4c38ee787be89bee2ed30ae4c0633a686417b2219f64eecaa0406fc97e2b8f9afe9f6f8207f8b8692a366c4363dfb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d10d53efd79fc5d2d1df904eea96a3c86519fb0715f5c880787bba63ac03247603bbeb76720e5b3fbe61bfea9a59b00', 16),
                    gmp_init('0x3d31e7d52df1bd4e9b547d2041d89d22c3be0a85802f553015366897b104ebe902b39a877004d241f570b55b889e3730', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x799f879fb78216aa343d99deb7ec5dc4317b0afc19df20007d076b46fc06b2d28732c5fdd18f162299d2306625a50638', 16),
                    gmp_init('0x4b1fb8e07324088c00d9fd1ee26848a047fb50870b2e26573f828f61a9b325131187319ee61dc114e6e50cd6cd106bdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1643755f7914e00b85aed8146e2dd09c23c51c064c894412a79683cbb28d0b024e85501ad99b4258e19e228e6ee5eabe', 16),
                    gmp_init('0x4b855d60a72ec0fc8c2455543cfb092cf5a626dc503da2dbddcf4a56c7af4f39677d9be706a06503c5fb2110dfd058cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4411423b3127b48f4faada7d7de755e79e9d0487f1ef76163833a4423b3695d57f5f2b25231332d45d2e47bf18d8d81a', 16),
                    gmp_init('0x5f5a19367938f782f1fc4abcb475ff30d0162e22a3f104c9f6334001a78d93edca711ee2783b82f088a4529da32e45d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ce2469d3c68575d77a08cd6bc75d63db74f6d25238b10d23a0e918c0f657ea4b4667e81174195a7e4e0821be84744bc', 16),
                    gmp_init('0x4c2319b3f263b884cd7ee1f84925cfd7fabe50b6089ee371a1a904306518c9ebdc372dd250c28465761a75f8dad07b91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67f225fa700b45596be8846cebbc2be892fdd67e065f4dbb716fdbed9f8e6a3d2fadc96037ae795daa59c053776251c4', 16),
                    gmp_init('0x6ec066de7df441da0584ed31f35acaa57a17804e9404d191ad039fa026b505931338e49927a34f417b66310561316338', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x832e68d7627f6a31f91f0e72bf554896296ae6d1078b10439b26015e8bc574289cd077d25439fac3bc9428a960c23dd3', 16),
                    gmp_init('0x84bb3150297a11996b824d97afe5c4788996ac950ed231297995a2e9b2bfc4361c2877c3f3b60aae0fcfa7089be25e6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e76143890ac213fb44ad1d72a9a76d6fdc65db2e254f0f5c835797dbf81979f82d6bdb7b26286043eff795ece997947', 16),
                    gmp_init('0x40b97df022e641e7d437a26a935f8f543a9fd3a6bf9d4d8dbfe932f36c86575fd98dbb0695dc9db19333b7f4dafb0a39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28e2dd10cdad41fac49b77dc75a275aa204e60fa57cc9de74edebbb36c9f22a5c4a850c156071f9b2de99290a5ca585e', 16),
                    gmp_init('0xe557ac76efff07bb4221b331a2adc8f9729592660a6f04acc54661bc7a698979524ef362e60b2518456667bc91f8d40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72f753a062cc6aebaa95311394c2ef8c51fab74e93d4390abf19a71f0b88a1d9e8a49a5c717ac172cf9e8ecd4cbc391b', 16),
                    gmp_init('0x750cebbef511eebeb86fe24693b886adc615192652550742a12bfa6ebe8b8447d124011f94c7eef08ab1cdbf6f591968', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f9146019d0763cde9ed5db5c0128e47342b357cd1b0886e270981f68ec8b59960cdc539f8c49d25df421d58fbf64ec5', 16),
                    gmp_init('0x669f9caa3812d7c6f3db050579dd2fc1443ea23ec495ae532240ebb99095485a85304ab891903523afad50d78680179a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x832dfbaa0ff069edfa0e3e72a102bf2c4e8eec6680fd42e733b2cf6bccfc07e4cc5d4035b76f6b6a4f10d6453a53d804', 16),
                    gmp_init('0x46e23ee20bee6adc1133bd344e9c106ea6e82479da0b1150059b08c727748e590e44e7fa2dd31dff8e749e4468cde6ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49b12a915fdd55c76cb01b6ca1bd7ebdad18dc04d1582a6a08482cd9dbde4b829606260d1592568f53683f0c53519424', 16),
                    gmp_init('0x3bad50c70a6f23450f8c9ebf9c0522e88f3c9a0eeea04e838fbdb87006e7b83091d13e0f4f919ddea95d8c32bc40b8d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86705f3778f53ac04912b419378ffeaa4c68dc18b74f65dd68d77992ee764bae03039b4253c9e283e03cf1b268424abd', 16),
                    gmp_init('0x7e64c9a35b4ea724cd52c0b5f3f2d9789de63f2aa60a1749402c79cef6a4c32e6e4ceda486a7a1693ff7616eee585e17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x619cf98ba96ca3dee81e66fc8a39cb47174364c1db2f82bb2f8bff525368e4f89623002460d84eb715a8ee5378e7488c', 16),
                    gmp_init('0x46f4744242030321b615298c21c0967ddc9c13fd821e25287c65957228f3c75dc5493dc3804adce032cb5da748238f6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56ec8ea6fc6dedae232bb11c9ecebeca5c51a31ef417d1074e650e88e6c180249ad554735363c6a752cec53dbd395769', 16),
                    gmp_init('0x2e9a2375e1b120f3d0ea95b4745ad8e245f38ed9212cef7cef4a509448bcb62cbfa11ed98fe8df8b65d094ee0dd83e06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81b853fbe1cfc96bc8369e9d5545df2fa82e5a83026bd8d04e92b1e6df26f368bf04415dc8f6f45179bc9108b71f5c21', 16),
                    gmp_init('0x83c36241a994a17d633dfe7265516dd491c59841dd5aa85f05ca89a2a08c367599cf8596e1db45de6f25605b6c4c8f14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25b04f42bb2888c9fbcb65c32738bccc0157265b7f81ec4126c096ee7e9b9bcf6ac94d50f07dfdefa220a41a12061c3', 16),
                    gmp_init('0x8bbff0d35e1d89f15d57e5f9a80c2fe9da163714f592cc4a0ce9ea13d0b66a67a95e43c07cae879f823abbdd18d491f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40e596dcf2783c7ea12f6584e64b7d8733d53b0f82be15509f5a92cfbf82f04666d956a564eea5f3cfeea601230f7923', 16),
                    gmp_init('0x8630053e2debfa6ef7b5e83022ffc7638888ccbac7a7c9e97dbc4a78d46086fb9433a7f6094fe4aa06ec893876c1ce46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x225f261c7b77dbb800adbdf5d40e1e271720037d5fdf54e7e34787dcfa717ac2836a8d9e13305d972ebfd7445eae46de', 16),
                    gmp_init('0x679405379529405fc1ebba68083b92050829ab9ff9003fddf26a9774b31840496bb7ba8c839e27c8dcef3e65aa36a4be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1580f653e4f25423bcf2d792410440ecbfc093dae27c41e702d97278f3c7a116b867a56cf6d57dd7a4ca7ae0e5ee3a4f', 16),
                    gmp_init('0x72e0b01c93111f7538b5ec9a25d77cccb95431fc609439253c25245e7b8a89cc1bad558eea7dc7b847c1ec0c8bdd1203', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a44b5f5fdbfe350732c12f30c3a94f44b23b0ea8ac5e962039f1b01b65ea1fa91c2b2580eade609492598174a53f509', 16),
                    gmp_init('0x11072d9602131a76b77955d6cd59843dd5c4d33e17b10ff29ffa4eccfc21b02d0a0e39a83ed0ac3a5b584abcbae503a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x751d10beceaeba3c825bda1b84c5974f6e93ac21eaeb244ed72bd2e093a1aba6d60cde94cd54f7e8096c1e308883aea8', 16),
                    gmp_init('0xa0ec6ecc01374d56793b7729f7813d187c9a51af31a979be789393ef75ba7bbb8a5e0b26b22ee6f8e0de6a8e27b58c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x771c3d118bef6c9366561a7da75a1906ef4ddde59d04fa2af56df691d6cc44baf9beab0fe8920cbcac6738fff3f82093', 16),
                    gmp_init('0x80b945ebf378c16855f720c673c14b59bb71571a57bad78154923154c829c9db3752337f57a21ff141e58e3f397f7958', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6386587b754a3abcd9e03883fa6d4f417e814311f0c86847d84727a5a0dc9e4a0c2062a0809cebc2d2f4dc86392d188a', 16),
                    gmp_init('0x7238b916742561a26a776680b5bd1a6efa083d053b24ecbbec09c23fc47ab7a384e466df04b8bb9b9ecc8089f710aa2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dacd1b3d0e31c9e29af9dee12211bd7dbae38aaa04601c86982d2050eec120abe372f8f6266fec805a70fbba749f339', 16),
                    gmp_init('0x5d77d5211af7f0b0b5523ea551afc1f3abfbc4740440ba7d31e5ab0862acb49a53d428622cd82865792e8a3f5cac9f41', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xf5cb9a2f703833ac2333b16f0be815dd6c312bf7d8c519bddf4e40ecd10b74873691d0f34fecc7cfdc09098a01441a8', 16),
                    gmp_init('0x65a4b6ce9cc91ec304a7a7d3ebee4c94b658d89e58a60a5fdde951d8f9de7fb68004516d996b7fa08ffe37fdd4663eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x220400b9ee545aed082239040fc43bd504031d7434f9d7ce19fdf0822960798807b3e64e98caa0b933ee5b506b84ba83', 16),
                    gmp_init('0x12419ae2d00cb6d5be534d3ebd79fe70cad219f10b337e8a6aa800f184c374c6d67374bb130c2c9a7d9f9c215144b988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x706caab51b22d75f3dbc96471a6ac6417f7ee6acde6dec4bbe1bb23d4aa6692be7e5d785ce7e127a6cac0339723684a6', 16),
                    gmp_init('0x5c819143c83691da16a22adccd5f7b3effcb95cf13660f6a370d366eed9af8055bc4b0a92bea31e9fe2307d59b6524f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c76217628a1978ed4dbbc1d737b3fe58e606f3e7c608b4eecd3971dd5c30ef1b5ce6af2b71c7d466923795fc65886bc', 16),
                    gmp_init('0x3f1e15acb0041085df26c6a99b707b87b8fa96da6dde7d0bc02d298f4c44e5accc7018cd235786e1f6d19540105373af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f00d83a126760cd859cee1e431feb873dd969a4ffaf7077d4cc3204d68fbbe614236134c990bb415e8cd7987f24434f', 16),
                    gmp_init('0x4d7dff1d7fd766063f63ae4244ee3e96fcffa009e5e7338a948c45c85c4bfe4bfdfa02fc856347c685d7b25c4d6fd13b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fb347f685bd43dec62f889d615d62c12e29f8e976a66ef7791f5f03e2b12a528e31722c0a9a195f02c6a9045109003e', 16),
                    gmp_init('0x51fdb54bc6447d2d232ac8d021c45c346177d8f445c41cf6c1cdfd1985eef4d140b0844f1751e2347f4072b11a6d5e1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2046dc86092ffad1e62c90509e33d149bf46563f82975f789c4dc59f45643afa4ad0a25bdeaa89f0ba261b9f8621a82d', 16),
                    gmp_init('0x7a342d79f0d57f1cf18c66114e3443a55ed7130ea4887ef7c48cd26e88c6bde865ca6120e44e4b6bef59f77778c77bc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e5447d7d1e2dd59ff877179e449af1126dccf07c3beff4049560bf40d670e92cef5f88173221a93b130dfa5841e07bb', 16),
                    gmp_init('0x1aac1e60c8f7c54aafe8e17d0b704c92af372728a2f4c4029c864199a688fd8a56948788f18130eaa3e88ebbe9ccd0a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcce3db85a155a835bd0d6885c8c50c952b85e6f0107c177d111b7e2812e70b2c25882807b15097e1cb05dc544ee3be', 16),
                    gmp_init('0x7747c9cf6c3094535edbb2ce22372222a84caafb29739f681f58ffdc19a03cce92da445786cf4eab3d1c261ae752c5eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62d78b4c631756e5c41883629438ce5ee192d07e7995ad358ae94ba25b84f7f7c1fa9d006cf4bb7cbbc4ddd24865627a', 16),
                    gmp_init('0x5becff606fea6babb060ee81e513a75029492fdf58ba4dcebc8e43f3293231cbd9f8914eb90c848281266a63385b5096', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x558e2c61c6d5dfffee7c0956767eb491a034fa07dcb622a12db679d957c4843845e7ccbbd52cb76affb3d85b2d340368', 16),
                    gmp_init('0x43300841fa2173fb497f3e9cfbc77baf70c916f7687606ea0da0b9b9a28b033ebcf9ee5ede5c546755cef4be84b79910', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x581cce64813c5e994236da0053b1ee45cd7f29326b7334de14cf5faf23ebc0dd4e1f799f3b3520264b2fe4360b8e9d15', 16),
                    gmp_init('0x6e24a3e7fc12abfdc04059e9c7b8a3b980bb5d1c43822b290914918eb9672a8d82958211c2baa87d2e7c6e6bfe8f5abf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f6abf9e1335537131c3167af380a133b7b493077e8cf7120c2021ec96b665c543bbeb2293a5baccd837d05fdee2bee7', 16),
                    gmp_init('0x65e1923a83f566e19ff99f3602975337a1d3f5f9b31a322b896c7cec808262de45f365675e895f444e7b5e59cba2168a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c76399ac6d1dd38a08fe2022a7cb651b086b8b6e7be7d85c880f6bed5e5ea8d3a42e5f2df98f08f88d18576c75bc69e', 16),
                    gmp_init('0x4c2776c5874939530b70d682b01811ab0d4aeb269d19d0da2c12347067925b136f923e972121aab47728f8b2e03030a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a0510d4406b850558c4a35b66187e1df632c0c5abc37a87cbdefaebe77c514cae344facfbe3061892d98e60adf58a70', 16),
                    gmp_init('0x40b2c31b0aa59b9e2ebb2c8ce31add1b160a9784ddcd4f3d48c44fb6b017bfa9e2be06ae5fac49ca4cab0a29965e09f5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x73619349e1423c747be2e44af0a5c9f6a5a0cbcdda6ae1c7c7178263adf9b20cd76ab0b3bb97806400c76daa3907ecb2', 16),
                    gmp_init('0x6ed0e5d6ef74694ab56ddf9a0da25327d58bbc7bd7eb700f428cc3a07d53cac78fae73622a7b301466db66b096a0db14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x643ab9882a48ad6b53b244e1ebe5a5f1792f4ce01c7a5d1f92deddd98e76f6e89b3d4495dc59d65faeb25c8e58c89e4b', 16),
                    gmp_init('0x7489f02281a21598d84bb8b939cdc8f819d35443f94f561e4ac7cf3dac0e933e0184137545405eaade4c8115e4200be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66e41e51578b16c8c2c91d73dd0d5154ce6fd57952e7aaed7fc87a96ed18c39901522cc35393a963df33ca01e41d4f21', 16),
                    gmp_init('0x7deee49ce2cc35dc005b8145d724c974f180803a83ea7f7c85a4636f10958eed1f62898b54ef45629b43ae0aa1de8b8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e3d7aba06fed94a087a927b1ddc833dd8032ce0b3f0a3a216820931a964182793a8277503f4b74c6a1bc9ef0ee193b9', 16),
                    gmp_init('0x4b638f2ad312182fa7d354f95f0140daa03c8a56e041ffb942906864464d8877d2ba1459ed092171a7f3f06e026cdcbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38e63f721351188549febc12d6de441a4963be09896950087947bcd32fb3a89d68d4ec37ea84950660c785224708674e', 16),
                    gmp_init('0xabf4a96f0e57081a49c11dcff3d1b81d913ab50a32bd15f1abfcd91afd19899545686b6bba903cff2ba0ba3a735df4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39352fe57f1c8572d57ee577c858a72eca0a549b5e5ba96683b5ff0c1861f30589f2021af02f45027eba3f72ac16f7bf', 16),
                    gmp_init('0x3305d0a06670e1064498bf3b2f08307133db4e51cd475eb404204d3d4a82d9ba12131aa23e40423969db33db89717abc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70bf1dd406692a21333ce2d228afcf7ab85dbde3ffa97ef80a89a83f6a3de4ce0427f9fda38d9e0117aa25b5170e00c4', 16),
                    gmp_init('0x8b259cda48ac355a76f37ac6782db1c13501d87e33eba141a6ba9570f7cc8af655d7be28b5e6311decc22b3df21cd6fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6814c395e531c11fb041797b2e0b9354b892425f52d73fbc0d7b607769c7c42b7295f622d3607b9599ed1f628fb13e3b', 16),
                    gmp_init('0x6d2d669964d5fa8ccf67517f52ef6bf5ce1264a541cedecf078e38a6163169cc486c27d479ce15fcc0a44917368ab04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6afcb13d5aee43ce6db8039025742af3ffdd03ae7ade75e1659f2aca31b8f7f399058c315f3ff4eb2ce82b2247e1cf7d', 16),
                    gmp_init('0x55170e41b5b105b9db87c939dc6ed544e91298363e3182391a5b9b00ef64427408a322f13c5f56075cb170e23f0d0fc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c0062787714653515e7de2e99713aaf8180806d191b6766104510da1f4660b5619711906919ae6d6b69f2dab23474cd', 16),
                    gmp_init('0x196cd3269609fbc23058ffc29a7da3514bd0d7f8d12a3565c151cda36a3f61357d953b31a2d149e5073c5c309dbc7c81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d23b669bbd2fca3f82262ae6ec1c34f1b6bfbf0cf47430908ad0992b594bbd8fb3e5f2b9f1393a3863cd58c9e983ad', 16),
                    gmp_init('0x78dd63e269f37acfd2ed50e0fa5f31241d2835847036dca65daa7cad70e8aa480680f4320f073d58e009fe7710b860c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5602f5fc474587c24b61bac4553cc447d834606d531bb943415cc5283f6fb631f1ab0bf43b3d5a354f31cdd6feda0c17', 16),
                    gmp_init('0x175aea67ff18615bde98ff8706fe5cb079d49d3f98813515ed95bcea42929d0b43cb12e62cf2c8354c98b5213bb94af2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c261acf1dcc03a4bdc533301ad2d86e27d3d631fac890444f84fb77ae1c196aa5924c10469f4f2414eb41dabc5156ec', 16),
                    gmp_init('0x4a4965113afe15bc85519ad2a7c541507267054eb902f9c10f888a8ed6b66536d33ac9cf24098b2b0313441c603db048', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d5fa9e398c7b6ebe46f9818c0b3bfea5bb8e35541eedcdad7c3b5dd0ad56cdec399439d10a0c48052d3ede73aea4728', 16),
                    gmp_init('0x4b52876da62d9c146485cb8963f7bb1cc798fad9b4f9891038f594c31451ee9e4e9ce7e4f1230e752ed714445e97000e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a9e0df411056bc3a0fcb2334e507cfcc223bba05537b55e6b7df72af1a2cf87e26d8bcb672452447fc2096688a2501', 16),
                    gmp_init('0x8961210e8b621db67cf6b91f2685137932813504d4ee7c3d46fa2656d2b6fed9c4385ea23807720b8a04f50f5bf5b903', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa3b53e83a2a120081da290d2803320259c59a39bb3284a91a5ff579fac50829ec6ef347f461eb21ef8866eb63f1cfb5', 16),
                    gmp_init('0x2f87623abcdd7fc69912b7ed4c28289a9dfdf7eafa0d7bc0b65e246942508870cf0489ecbb47fae4f0065f0b06fe3145', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f8235d4e8b2e7f05e65681fad702260f8ad29ebda63e47540b487ce45bd0ee3dab6865835918cc415063d365771477a', 16),
                    gmp_init('0x562ac0e7fed2631a9fa3de5248531e64e82d69d92b8591bff9b09b38b95273920b8bdb97bca914ee878a256a9f107915', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f60e2c390539e44bca9e11653d35eb464867b003436d504147e0d5f8a3411aef8d8195319fb67c2d8abb95b5b87ed2a', 16),
                    gmp_init('0x3bfdd81bafc4b3db8909623b62a4be5582178244baaf2d49f8aad72653116e716ca6615806873c5ac562094691699be4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4196c9be10e186c7307d3a58170876d15ec7a02b3960931d5acfd22c2636af605ebafb182d23511b9727fa4cb9a9d862', 16),
                    gmp_init('0x40885dc8f17eea00adb48bf214e8440c72896c23b4991563806296a8844d39e2277e0cba4b1eb67726713a3a5812f09e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47121a298b4cae3ee4c73548b018a648e147d6d76b6be76282c6b1bd98afee86d4db0a9835b761a78678c270a0365f89', 16),
                    gmp_init('0x117726c72baaebefb3943914ff13695c1a9b81401ddb909d5200836ef9126f3033cbd030fda4056eb39133bbe3ff97be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc700d215a74cef2f0498d88601fd1072b4e362d191b6856d2ac33ad3a788f5e9b71f7c4f32673c01bbf224a9446648', 16),
                    gmp_init('0x4466bada7d88ca955bdf60940e412172f2a4a42a8d6739a104b3a8baf19abbe8de85233422d8b24aeb59188ba8e8b800', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50955016f8589f2ac4df8ba074aeab328a0c1efa00ce0aacf9266ea9a397d741edf7844f19a7a6d1aac2f8cd8edbcc9f', 16),
                    gmp_init('0x1231816538ee3b04dc2498696cc170270d46cfce563c559836502e4ba3c5a63da70e212c0e917d3efd0f1629dc2f9b0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc0dd3b39b0f3c9e18c23f27b0a672d7e8538c3c69b322ba600790a0aab8aa97f0da9889aeaf23f2c484c489dd3b962a', 16),
                    gmp_init('0x46c8ac17c5d23517df2d2353b1edf2f8fd522ef717dd47bfcfa1d140291010dad0aeacd8f006d4cb68614500f34cb8d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a4faeac813077aefbb7409391ab209c645ebd6cc1af6e6df61d4a0c1b2f49f20740bdb8b9e12683c11e2ec89dd04ca4', 16),
                    gmp_init('0x64440fca4f5d3cd598970b73a509ec67265202d11167a43611b69ecfc73a4d48e22cb495e6cd7312846363881052f247', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54a5bb4e5c3ce066c808c670daaefb05e0924c436e9490331580bae35cf47317e5ad12677f5557e5ee1a7853d5d7787a', 16),
                    gmp_init('0x6a1a9bb8532e2ef4557925fc311a5765777cbca728bb23c626b8906a07693469f3f3b2eec68fafafc81bd30ca31e32c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4be0ad8d07095570a0cc50b01139cce98ee2648281c0f42731736b6060faa324cdbe757ddd7ceafeeda808edaa8474fb', 16),
                    gmp_init('0x7111831ec28dc264bb05fcf5d6a13845cc1a79849cb3869abaf46f0047738c945625032195e3bd7928c4724d0e9d1e62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12768a1f09a29c5656ae2dc076fc0032be7630a8a84ce0a21f21ff27e190712b57ea9c5e9660a2f9b3131d61ea280db0', 16),
                    gmp_init('0x5ecd15b51dfe1e381fbd40157f62ca03427d275571350972e26c809d4e1c5f9390fb0345ab2efa71278c73d9e1bb22f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b3397aec6e258dcfffec3933339e7a148cd396d8200e4c326f998b16440e4a9e576581a001dd24386e3a6772d109b3', 16),
                    gmp_init('0x47135b6676efd8b0531005f2fa9eab0a94a3c589a1455aefde08c71d0ed8531318560c7ad334aa703f82e73ac9963b60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x175842ed2f74f8848e36ec7956b3c23616f119007263d52ddea570971d6d9751a02077845f401eadef82fe4886fb156b', 16),
                    gmp_init('0x1fc55a584ae94e9e2f5fb19c43d304f1e5eb677d8b39a3ddf827662d5f0ef4698e81e810182dd0173242a32e58099038', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x544c816944dc5e9d88642c10d7699b7d67db33bf5b26fa9f8e3d9f5944b5652db4e07bd33bd60629c75d3ca1fb9307a9', 16),
                    gmp_init('0x6b4c34893c8c776f24388453da5dcba47296a4e0fe2e0e10256e10c1fbc705b2c0ef7c1dddec25127891986d6a198974', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x25c80779815ac152e8b2c5f881c7ea2f93df249ec90eb98ae5283402edea818744a52dba18076dc0a3cec91afd809e99', 16),
                    gmp_init('0x58aae53180ffbeda97cd0c828d576589cd83d613cb999acfe4cea02e96335078e9af68fd64daacc68ea914c0fd2e52d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b4c452daec4fff10791a6ad6b09b8a65ecab9249776525f38ce5253804f937f4bb7b72950acb8f041ddf04945b5955d', 16),
                    gmp_init('0x7f3635b475510746132d2e2a41e9b6a92c2e9f358b8c53c9973a5c5ef5a7cf5c468051d9181576670a91337b03abdaf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59cfb9245f1213ff98cbdb86c9f77e5fb735409128568628cb754852af0bce60545a4513888b271de8b0b035b7b2da67', 16),
                    gmp_init('0x2a40605555b06e21a22ab0c3e0fd0822d2eaafe2dc33b27c33db7a90342bd4a1129a957adaebf488e89b091c8d9c5ce7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67418caef2f94ff8c7b92d178139bf10ebe671b6b1fc63949647ca7f9fd19763a1a46e2bf3dcd426f46d201158db0e1b', 16),
                    gmp_init('0x2801c867be5ab19864839bfe19235b3dae4714e08e0dd17ac16fee7576c137716bdcdcaea841af243ac90f850e167b4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25fbf9e2e88e4a1ba6228bf2836b7bb04c3a8dd811be4cee225b76aceca554d196a00cf92d39ba561992124f8d1fe2c9', 16),
                    gmp_init('0x395bf808847e27a5784578bec76f4da557f071e34efcbe567bdb68bb043c333d365584b141ad808f814b8485181b22e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x518bd5c8110467fbf7f38396d0d059f82361356a26bcf39c2a479a8f54c149c27829e375dbeb25f764ea64881183eca2', 16),
                    gmp_init('0x580f4e5b0e0d76ab21eca2acc0422dfe5010dfea7742a39f2737553d2436f0ee497d898c61a81b36c917de6903468be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb18cc30e2a9afddbb1c05ba606b138a6aee5e0614b1bfb03e81a6c476f365af412212a62645245612e9d877e61d1395', 16),
                    gmp_init('0x34d163697850b40b7335ba4d82759863aa521bd5794d59d600f824601b2b4a94ea4f9f3ddf2a01819c8be5cdc45de650', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b961957169837688409b4bfbbab2bd6a56aac6d43a5fb0598959db9a8b0319b537765626592a0bd7f69a31764333846', 16),
                    gmp_init('0x145852ba28950b22de4af0a6d50b46282da49891179760b6911ce9dc6d1ab6ab977c48f0e787321876d153a36fda8e18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41e23bc257e21b5f03db92a2561447818e06a7175160802de1cf522b765a10567be2edc8837c38aaaff2d0705c79696', 16),
                    gmp_init('0x75ad6c5b574f47aaf02a085ea1bd8b683a3335fa4a599152bea81c49f6ca1c5b503a0f455cf5f41f3f42f99cc1024bc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1323183f4376b8ef6c7e12457fd169f2e91185f05312e006ef65a8b4b44572327d4effc3b5b5efa35ebee1f4546813a5', 16),
                    gmp_init('0x670e5c035d10c813dee82f6c81da52e0a847042b3cc3cc7738928ce773cceb0b1365d00016241c36344f3d64d11a6f83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d17f2cfd92a83c8bb801a1a10379f3f7524165c7e96900ed9b9b02ccc5845c11c62dfbb66b478138cb95426f3b828c4', 16),
                    gmp_init('0x12a2e2a3213ae398370df5e046ec8298fedaaa281211a6c0fc829ef04532277b4b67d48540713302a7621e231d58250b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19b20646b0cc2e08faa3750846dce769f8066ef6ae1f6dbadd619da30c2f4e8230e0eb2c19f194e1b33ce1da865d85c8', 16),
                    gmp_init('0x15b0e68039dd4ed02a61860c2647d5760de3899d0b3347fdc89c344976d110cd3439001a0cb711e3eee587834f7d92a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fe8e2ae98dcf2638fba5807668bbeed21895c5f907dfae862ff94e1394c70d57684e02730a8101ea140fdaa2edebcb4', 16),
                    gmp_init('0x7e8d6ac450f23411cbc5767c3717049f38c2b02afeee12e127331e967551a7ebdd1d256d9ed656a345f0f9d88f165e37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a5f43ab64d20d35b1abaac90c39118b35546d68733ddf1ae88bd44e870619385d65cb042c67994a13a5d62238c7b0c4', 16),
                    gmp_init('0x2e33bcaa58be170366e8f8028fc62d9a3b157c834ce7dc9013307e586f44db03498a7e10397a94c74e38672aa3cde371', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x503d7617443eec69be1459a257a2ec8a398bed3c053888e5a566381d3bc81f08bbec5b2d82e5f0c13827d0dfe36868d3', 16),
                    gmp_init('0x329e046db7ffc8147a47b519b3681ac25aed2193ade2b658b10a0f612aec95f26d8c61c667bfee09bc6bfc4cc1118bec', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5199ce11325632558cf50d3cd76136e779d47539f083d8567a8abe285d26ff7291ad0a27aa39e936b81ee9198a9f0f6', 16),
                    gmp_init('0x50fcc0458206a877ba3aed0c765aef899f2019de4c12a2afa0bc1a7a09aef8945576ce88901d1d096618993b37ecc132', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c7801a8f6c01d364f0b998d5b82fd71409d1ff3af7b0dbc2ccaff9e81508fbfc388690918b2fd244c566dcf4f7bfb47', 16),
                    gmp_init('0x6e9af9c298ae5565a5fdea981491c5781a3796b71827f4c2205d020679c4598ca79d4f516e2f00079c77d131960ad6b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x849aa1dd82e7237378fb02a224041983d50cdcd8971aa96009f2ec237615cba29e556a753e1d7b7359b1ab8dbd6acc39', 16),
                    gmp_init('0x33d029b245dd4a62eed97887f61e47290bf896b88c6ace01bcad148b250e0d691c288da8b4268010d7d9b681ba743323', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ca56e5326b8f5f5b0b9d484468705a31b7d7b7542210eaf1faaebbec02941ac0ef2d9f912f99d0fdf1c02d605557603', 16),
                    gmp_init('0x2089e79284fd25a0329afec8f8c0d7fc0f1b0f38e981c36ddb1b5dd9f12a1e7762c80b30800e86406838be9f74946e0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16fd12464fb94d3ef4cc8ca5781d9a5636d85f10fe3b925d0cdb1e8d33552aa10e4d5a730d04fce25ade1301cf25ce33', 16),
                    gmp_init('0x3fd60d53060ceb06fa883605315c5806dd11a77001186719245025d2e169a344f8107f5f2b93682f63c3e8ec15145a2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29bc8f2e23e36964973594bc0f49322833f9e0d27d87a71b123e2fbf70bf1b2b8b35f465f8294778ecef63fc8fd0dac', 16),
                    gmp_init('0x707a93c5eaf4990daa74a428b73cb8e0b4edcd4adc360ce65a6870598496cd6b98ccbd4b2b2082b9e0a3173c2fd96647', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7adefda1eed917ca281a1f62125da45340039ba9524bcca1833076e781fb7dfcb7e12613b8268122debf54e5d48c9ec3', 16),
                    gmp_init('0x6a239e51d0be8338e78b92fd05ae65b8ec24c03aac125cc910c79aaf9ecbaa4eface2ee2f4839001abd9d079d3c8791a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54598555eda65b334f77c6f28ec495f007ed296cc420c5e5b2c1c830dad9a7dc2a635590c4ed6e43aec09210e9539e3f', 16),
                    gmp_init('0x814ab51d07a5afbd11b9131c5de04e17807b4e4bdc03caa864f2537035229a8ceb1e78b8323ce229baf6681eda3c4752', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47bc30e3e9f477a7d1b2d221d471a913096b970747609808462e9e4f5e4194a05cb49ec2aac5c10e75eb163b90c28e17', 16),
                    gmp_init('0x7a5e0800557a404907755292ec3b2e58e90dee87948d0ca6c13c508bf422d861b85f17aac307614eb7adba522d4f2e6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24cd7328ccab89e514d7acb5b7b98ec9e726ee3818efc062042117d768f93dfdc5e9866814d3a0bce844eb9103d2269f', 16),
                    gmp_init('0x39fd41b9bdc322f3038e932f07dd6e461c7742d8c8f880eded0d7e2463eb05fabf47777c65636546ef9f63245fd45800', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x498aabfaa0ad4ca72d9b9fd48c42541dee3f4c3058c52adc56bb4e63fdf03981228fbfa8d9af27b74cc6631f1083c947', 16),
                    gmp_init('0x5f94f9fad4e3e1adedd0439d8130124bf036f945cd32241154a442ab62639dd1d84bf28a523b43bba86c6409b01755b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dc7b29e609bae6ba5c91c3f8f14effcb7beaf0055c24ecd2216074fd3581dc2406572eac41dd10646e90c968b265a02', 16),
                    gmp_init('0x2b966f8cd73dd5db9c461641a05d431428f992617cf337d5e0cde198c9986f5b36006b5e84a91db0ef7de0fbdf127a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73827daaeae74645338cf6b2dde6968ce7f071dc5288bce7d51c29cad68356dd6b6976a9e0c69cf44bfa65848eead556', 16),
                    gmp_init('0x7ff469e32ff2c288c28f3d1ddeed570abbacc070b526214002dde92c6d9bf60618770f581ec899f4c04cfa224b2315b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x440d68e69d1a69dc5f68868ce6f5ebcc604d68bceae24e9f6c44f38b93e4b521c5528f3c50bfcb970f7236b8010a3078', 16),
                    gmp_init('0x5d40fba44d1240692787f1e89ccb00f97cb475588465235da4f9c02108d4a3c32c313677460c06afece2d564cd08c428', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31348ac1de5e7e221e84bcf95d124e4cf53485ef2d754b9b5926bbf95480e9386421d699d6f419eb565e657e3f1346ed', 16),
                    gmp_init('0x5e5912547c3844e66eaa7733eb76a996d7d2ee0f717ff936d9eb24822581a6e34d7805b8729d9268d3813ebec0aec556', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2ee9b870cd3d93e1837f5f3a6967441fbcd81362552a467e92a0f4dbcbfa174eb03271383154e52f7cbb03ee6caadc65', 16),
                    gmp_init('0x5637cd4d1ab049696ee2649286f2d1e964c1d37d9c6a564b3c1a2f509f0775d10ded549f6b1d9c122ed2f4a7dd7b5276', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe721e970699b53b5a8883f121792ac0bf4b3d917015b7420a28791b2db320128a4d9fa589b9a58074f7124a565b102d', 16),
                    gmp_init('0x32f2b59411f71383ecbe3309bbd37992bdbabbe1ea839a3b1f03928777be3fa4be1430d6db6c09cd40210a8843d1a045', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4907930e7fca973f1a470e5c372680001dc19287b176f2b17bfa58abea625290b449b56fe0f7b25678f496f6887ae88f', 16),
                    gmp_init('0x40f6848481aae959663f7b756ea3e99b7fb027f546f41d6d7e14bc26f4ebaf84993c09e1c9c72d184f0e882f198b6c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1553c749ab382e4c230ed90b4b7f6f13e4a189d62988cf97594634c0ec8680d6e4e859670df7d06860b493a265ac1966', 16),
                    gmp_init('0x3a77dc5fd5ada0f47196e908ec6d21c3d9d78ae8646b9403e8db2ac7248f2ee8c6f42cab1e5cf053bb2f545e046b99c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e840ab35dcbd2cd6b23473bfbaa5cfe95fcd2435a6d68f68f5d22cfa9ba5ffde1ec71af2e44b168279fc33da77b6883', 16),
                    gmp_init('0xfdd9772ee4c18b3d96ff34dc50e1f5632c97cf2687753917fb3f2b6cfc24f153e33aa7f427ddcb7e48affc701e33550', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf98a982c63166323b39893439e3f47d7aa45c321aa17bf395d0a498f0c95e8dc89370a2ab91e8b120a03f55f3754e4', 16),
                    gmp_init('0x590375d88583d63ebfa9bed06415d7da2d9e58e6ef4e242fde13f016c3f5071eae0b00241a3711222144532cff70bc60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xadb4afe0469ed90e66805ee9dc6fae41c1c4c1d0a79810d9c39a645a94ef5e27475005040db50c06f1e47b4dc4cb015', 16),
                    gmp_init('0x4017a6c310fe802e93d8d9dd15a442dcf1244901c3599bfb5278f3928bc1a05dc06bb617178ffb8150187d732036d89f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92ef41d30bb83f63848ec1743e7990bb32f2958789238cd32e6ae757f3b808ae32d4cc870f6f19c3ded7687c5f5be4e', 16),
                    gmp_init('0x5fd021716d0ffec0be2555cc11ad7444ba8ba3cbe4eded35a55f5d41570c6b958c55770171625341a7617f5177ad35b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7039c4a07f10cd83f7fff6b2950d1d5b0e007d0a1ff456d76b849fee6ab8a7985dd41405f4a22d5945af6d6d5a15d1ab', 16),
                    gmp_init('0x6bd1ca4c2db8458e52e1e7f35eab0ec8ca654e47a936a09854008fb26faeacc42d6a04086fd0437749f17b113bd664db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55157894f8922c441476f90e6a7f9983d373953f608981a5fc1cc998d07674c1ffc8da1709a1d14ac7b67ed176a6fe6a', 16),
                    gmp_init('0x281957597cae622afa066aebc1ea9975edb0bb8d15e1034b13e730946a867a84ccdb2c031d25eddff34f24a1368fe081', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66bf3510fb74af72e913cf9bd1be57484c0f789482adb8e06e00a3462dffa17f8a3e6b33bf2326e680f9c27b859f3779', 16),
                    gmp_init('0x2bd51c5d7fdf39b2b705b4d5f226cc091b8d245fc426dcbde5744011a3fc31aa050a05aa7c96577bdf64c33b5e3bf06c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb777cda1911e877d94031678a072993b182ba7fd64eedb0e313fa74c40ac41efead6b1063a000bb2229ec80fa4ccb5e', 16),
                    gmp_init('0x6bab2f581ba68925b3036f742ce689a65b27a46b731a678fad18ff4d4a1f241adb118d426df62aae1dc67e887569cd1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4422d771e481b314cbb253e2716c1e451ca805b44ee927d0d0ec4d47ed719ad6827372279a46cfbe0833911008b7a5e4', 16),
                    gmp_init('0x4b4f41bec35efbbf680cb99a0eca66c788f1288683f8ffd480755fa8856417f6451bba8d13908e2e9c9b13cafbe3c682', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x308908fbc8c22ef7e891583773dc52bac730391215843f04480f8fde6123aa3a52b246cbf4a970b3cc2c8153080c935e', 16),
                    gmp_init('0x21040d184aece025ef44c5d854bc39700c04920f9cbb4f93c243cac80c2ca65346e26e38f1343eb8e5bf896901d36a52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63187fff2cd33847b65d1553a6c0e62c6c772468d12a9c382511305b92f344371c4a3905e98097568d09950bd0d8d49', 16),
                    gmp_init('0x604c6a0ffe83298b5d85088bbea68b7c398fd2f3db2669605a2abdef4ccf208c39ace548d2d08f836b158a3bef0e0a59', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5bc5f0066edf1a97f325930a3123f93656826b8bc31c0405521babee38178b52c5926daf9d28a57af6bd143b467cc037', 16),
                    gmp_init('0x7c53297ecc004281d1e42d7611bf3e315c8092f76c4696f979d797d38d0e6a07c46bdbf774425ee1ad7446c622f1cf42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x666a5aecf89c5bf4d42d1f80da32775c005fce91427031b34f3ec58f380b272f5cace9881c65f6cafa0318df28bc535b', 16),
                    gmp_init('0x54cea05e1cab503c47c240edc8a9f6ff57b7db68873c5359fa7b0816d1051a0bf035fe3ea56d89c6de9ce04383e0b6f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fba9f07b823a0f0e55b45089ff023b1abc339d5448c0536dbe9eaf994a00ed8d5b91faa707fed7bb0f26dd9e1f6329', 16),
                    gmp_init('0xf33bd748153d08ab8c67135d16515c0235ee72816926133e319eba42afacd258cab195736bf2210531d9dc5428f02aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25215b637034051272d85dc02a435c101a9ca68b6a47beedf19833225685aa86eef9e3167c6523975f6c5aac08db4938', 16),
                    gmp_init('0x6c2a7fa4915b3ef90059a2c187957ecfe57fd2ae1ca295479b7d9a2f7c27d8c31f326ae74d1eb2d6add7baca956c9e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cc4e1a9b060aced8308d677c2a6277ffc361ea562cffa4007859b4bad511967c5c1d2110f0e8cfdc1f365cc369a3aa6', 16),
                    gmp_init('0x70b7b98bd7c5104871181a22906d5ac27d8e62560413478e28f9e62a6862bbbee9bbcc47157623b3383bbe3dd7c3e704', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x485721c166a59ec9462c8047db20e371044f7091a3562023d5d5a8fe8f7450b76698f2518c60aad67a43c3f6e6396ff9', 16),
                    gmp_init('0x132c8c40f49407116d92bb14564ea66b288da34c633680600d7fd7e2e2c87aed2201663834fd80fddb1c405e0ef46301', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62d8704a0f703125f5dd7dd73d6d906b4148a217ebbede8d0db7e12fdffba18f0ba3d4e9007dc840240849e4448927a', 16),
                    gmp_init('0x1c1039ca9bd4f6da815e3fea6768df514146fb08bf43d1c8f7e24899ad4b364a1c95d645b0294e0b6ad573f2ce141ca4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7893876876d9bc7e03ab0993513bb9fd7560fd5560826ba3bc39011f4506e96dc933974c0dcab96ec8cd66187d47633', 16),
                    gmp_init('0x56fde9f86811210be0150b035e90fa388474aec9a935d0ac6149631674472bf03929395a5eb566786064b2c478184d5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83e49c8e72da9eff6fcf1af368a5365423809de01db7d79ea6ffce0d2597140a5dcc50c9cb9c2ab96f50bbefb9649048', 16),
                    gmp_init('0x5a5b4a4571d605cae5a0071773bf7475763315c99c6feb19de89d03ff4681ad23e1ee83380f9c4f44a9e9d7eb2b3b12e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fa500c141260ff13a86c1d2a76a2357348bf3cc6e84d1be9597010a779f65e2e9484d0e9d3c53950fb7d23cc616655b', 16),
                    gmp_init('0x36de90217f29551bfc9d7fe721fb10197a9a6d6d0f4934489ab21b378b3e3a37b01ea6b107e294b8900c2203f7a620ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72d2f98a5e8da782ad7c252a59687f1fb42f9a101c7a54c2624cfde88f117a5e31933c966157fda72b7b4ef48e5bc468', 16),
                    gmp_init('0x208c50b6da8a53c5e6be25a7f8db3084a93acf933dbdde18ade7f8f6762b5a427985ec0fd7e3876f873415f1d563a0c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b16c718db21d72a2738665678e3ede370c49404653929be118f8a57a93642d1d64ba0e852114a57461667017d30f4f8', 16),
                    gmp_init('0x1ae25c6e83b8cf9e51e858d1b87d7561c3bb6ae57fe7b81d39253d2ee98b77c607c973d96b3d3f1ce987dfa5dcad2b9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x385579b67fa3a2f4c74143c2d8a25829ab4b17102efc4c6b5b9c29f25922e8083902e1c5662dc49adefac7d08f51b14c', 16),
                    gmp_init('0x86b2a71173715393e8e985b4e1ff84570c7e56e6ef9e20e440e13de6aad78370a8cddf9e4988de758ad4e600b1caed61', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4332a1c29000e89f7974fb06f20bcdbfdc481505030d55ff7324f1e69a1955e8ad5df1ccc22813915912c99f9431dcaa', 16),
                    gmp_init('0x7f3a85644442d96c45b660082bdc5dd6b51917fc74c83d819b95ecaf053a60c88fda2de1cfa9c6854dbc8aa5d9e1df86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa232456ce1981de3e392500d004cfb8fc0c8690aa046a8b92dd33e87c83daa815ecded2ace4d3c7072ee6b6df163061', 16),
                    gmp_init('0x635a3a3d69e0c02eb357c61d818ba0dffbc481343c57ab388c3434faa3a0906e85e6ee40a2e8f484d04f2b65cbdf3a45', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
