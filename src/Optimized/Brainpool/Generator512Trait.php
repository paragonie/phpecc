<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Brainpool;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait Generator512Trait
{
    /**
     * @return JacobiPoint[][]
     */
    public function generatorTable(): array
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0x81aee4bdd82ed9645a21322e9c4c6a9385ed9f70b5d916c1b43b62eef4d0098eff3b1f78e2d0d48d50d1687b93b97d5f7c6d5047406a5e688b352209bcb9f822', 16),
                    gmp_init('0x7dde385d566332ecc0eabfa9cf7822fdf209f70024a57b1aa000c55b881f8111b2dcde494a5f485e5bca4bd88a2763aed1ca2b2fa8f0540678cd1e0f3ad80892', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f4945f680edf9800a63285758f399b3d18d8141b8a18064a30d3035f4cb6581957877f3a8f0f72597116e702915a4f4f698f404089a4cc5080447def02f4850', 16),
                    gmp_init('0x6d6b4b188b699c5649826b716292f29d149ce1238d3f1e0f5a2c366b03e5d1b2fdf99bb1709c700fa5c3b602b0960cbf63a42e4181fd929ce269ad21be592e71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dd87e12b0a4cc436cdd42543f20afe907c80ef3bc2459309c09cefd830151bc1f6fb975ceecade4780ae53e1853d62f56e34abfa9ac7205d4abf882ccb8d94', 16),
                    gmp_init('0x26ef5c6e1dab71d756ff0067376fa7543d903b4a6334c4bba0b382e1716d843acdab8eb772327b3febfcb69c0f37c5f8cce5bc75d8de6495cdeafba05b02c37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c1e42cb14c9364511176a4925392efb1b89c57e7bfc0e12232c1cefbf203c8d8160c23543944c489164073d800156368b6dc2eacd9a4ad9a47f437a0f8cbfef', 16),
                    gmp_init('0xa22cec2642c92c8c0fb10a3c52b2b2cb3256990cc16d00f3cb55d9412e925759eb4e08c0be4541627e934216d4e770e378decd4209fd169f1318b6342f73e2e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8672838ed83a55b9e3c9bc8c2bf177810a4abf8dd044a3c1ae0ff1c9461693d2aadc73e8d9472bb0c393c273727cf25d17bc4f43d413540b500d6f7d9d9aaa5c', 16),
                    gmp_init('0x151d93c1de2ed9ee52b7a5643c936c09ea9d3a0a7a668f1ee1b69903a8863d2fa5a88c91f28d09ebfa11d3cc5b06c0dfdb58bb174dcc0c7762f8a1c2b51f7f35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a8c99362918696a71a9181463b46ceb432b4e47c049b05ca4234a3ec599287b2fc48d681fabc3868a3f443997b9bdb49c3952e09da7c550a70f0914ccac21', 16),
                    gmp_init('0x36c4c484b06b1f488815a1d5710cba6bf5d71e9162650619a596a264282398e55565c68035fceb73ea623d7d3f285881923c9de31c7ae4aeeaca33a7d578a310', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74a4bbc7d1a22ea7783b62c3ef7f473c3bcb810dfd2826b540ce49b6a78fc1958ee59581616f83f9c1df5ccd7685cf85b55b556c926f2a3dbecedb316e1d30fa', 16),
                    gmp_init('0x73d3c07ba1bf290817495d11b106ae2bb7a2e873ce087973e68c55af183e3430007dbc9e60fd30afe9a929aead052089dbb183a1fff72bda1b031a2415c8761e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3710d454f9d798d4ec7946ed923f99b09dd2b2b9f81023ba658bc73871485333b35fea80f6fd9f3a351895aea6ef2bba7ad43a8f0932e427a63da5bc86a490b2', 16),
                    gmp_init('0xa9279496656056c254f55d7bb9c81827c6f1fc8b76c5566eb158f2cf33c5cf21df6b5f87c867f7499fdb893b612018f6eda0c13149e51399884decb5c65c08ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x595b061e1aa360e8cfe49337d863265ddcc04fd8188cbfdfd9cd604c8aac22754492eb78493d967171d60de7d7a6fb36a0bcaae472b75daa973c40b0fbd92c64', 16),
                    gmp_init('0x6a3fe9031a5472af2a410f997aa69880611a61ccb943a00488a0a9fbde5bda3c44b2058b82bf9cabd2a2cb6fa4d26a1e0ac0cd086e05b92f904d51202dd6a26c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a2f396b2a0fc061303ef68278b3163d1ab6118fdce3e012823115e15be5b8fe10f39f5659ae4373c4709a730b9f97c8d5b6f23154f76b1a6d4348220516bce6', 16),
                    gmp_init('0x2701c29ace9eb3c6af7a916f3cc098c067d4d752e21f62df8414db0752ff1f6cfc8c044b8befcfc5e146dcabc028ddbe67c3f4c7e7ecdf2c6ccb80d31b9bb792', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9018d91a9ef584e5e5359be155a58d80a0f3f87b3053606d780f00341164209312082c66a9ef7c94289f56a5eee694289e29656152501da4a1eb911c7353e301', 16),
                    gmp_init('0x30b56337977ca5c1f9e48f7c68dd11bfcb5d48a02b86241f26709006a1dfaac006cc328709eefba9fb571e45527fdf79d134521b4ff7d351ea4749c79c5f39b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ba8afa32b0268f3d745af5dc708a6710fdf904c9b988af0da4a46906a39750ae15dc4d2adfc436ed94d33f7e240c4675acf8bf303d037faa14d4eb6a54d2223', 16),
                    gmp_init('0x1659a9822760e9ddb0e8688c0494c8a23bfcd19e971e799b3a989c886011e69fc28d642436f808c788eed7a528dd33f319ec42e31f0e67995295de25a86099d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x661dafd56964ecae5c38e8e42f1993c89aea9422f84b88dc5c371d5c62e68e9a17f711874b8f5ec2b67b5b9c96c4e3ad74c799aa8c04c0909fed7e841e9a3ef1', 16),
                    gmp_init('0x91c294bcca5a4accb3088f186faa284e567c143080f6b686151618f233bdfc03768ff6c863f41a2519b39c3eb5447e714d84dcea90a1f58df250dc39c61c556c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa4953b146111914cf029680149103ec72a6f17fed00cda34b9f4b19acc9589f25a4db22cffd0ecde03f7cbf9d88e7db64f4ebda90bdd089788a2cd9951e1e27', 16),
                    gmp_init('0x2472e89131e4f9e8e220f4a9b1d514b79e9fa524011def7b6d612b559efa9dfca51f1f702f2396882943f0d9683e1b64eb74b239b6449fcf155f639bc6dcd77c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77bea740013fc519cab2c7b55991b47f864f46510c00c7a521f05845db650dbc1006bca2508be5bc50fdea5ecd222628d9a221da4d35ce2166b47ddf2d5721fe', 16),
                    gmp_init('0x15b48320c1a04c2a273c6f76e838e4f99eb524baa6808c612de9aecd4db65dbed2a9885975db218f41a4c84c80e3d9d933ab304fadbbe33449a4fe7242c58aa1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x57a23c7844fcb2479b59cb12231b19a7e5e3e6ae72db7467303971826c84c5f117acaeede9354632ed6cfd02d5fb38fe928439c45d04954d5dd3c6fa7edd84e6', 16),
                    gmp_init('0x878f0855e17928b3e5c1617546f71270f461c3b2d8e8b0e4ee5e005838534e2a7ba999b2fdfae6d04402db9e15090ad454a05790573bd74ebcae4052e333c748', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17cedbcb5ebccc24c489be76aeb84ab159c56d6656be138e855258b3a80c400c5fca5ae1ec5f5c77c74499f5f9e1ca78966c7cebb303376b7b88585e0f7508cc', 16),
                    gmp_init('0x4d69cd295eec4346c5ab083ada8093f6212e0b95c921888dc43a29df513c0a17bf755a855020cc14c9d9a0f8e5c35affcaf62487c6de0a0fece1cf7231cc2cf4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c63f32702d85d6d1ec3d985791d63c477284a40f8f8f964957e6ffab98a452e81ec260e13ad8a05fe9048fe8af11084ddb0440bbfeef4635d009b3c96f88830', 16),
                    gmp_init('0x9bfc85b9c25804ada8e1e92f0eddc60bd294fb1bc478f412b32b4e987fd36c772fe4634a02a16510bc8bdd175b283aed4cce7d0e85d6aee0c938d36b5082ecba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8abbd0a0fe50595b1959fdcf864a335d0dfa671733e6e6c21bd352b0c807e513d2869399624a05363592a78d1843ba870316c8fc0fbcad571787e2eef2b9947a', 16),
                    gmp_init('0x235b3770df2ba3b5f53da042a513c002df257a80a1a0da2a2e38021067bf8f5eeee650b3fb9d4a197c7403583420f755a0dc1c60bd9a63b0d973977e5930b5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59600f90adf3c752bb19920c3e73caa1ff72f32124a4c8d4c81e4de814ed283405927203c37cf802ef44a1e4da565f77595972657b7eb9eca65c9776bb2bb66e', 16),
                    gmp_init('0x38c76071d936496975648c7075a596e2cbd78d67f91fea8408d7a5f0f0cd4eb5b4f7661d5750c991db3d5ca4b42741a3937bd660f739c4742136f0372d8ad405', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f098bd7959966d7b4f4c1aad014b075fd4fbc23c0439aa7f2dbdf8d9bd182ae4c0285941652fbb4358420a1cb90934ff7115e6a9f157f912704fe1d5de032d6', 16),
                    gmp_init('0x98db5c56ea8f113f532abbda6c255858f9c175d7fdc8ca839b62e865861cc5d16bb970113fa399886f2afeb6469655576dd2e052faad71fc1a8c9d9c6883d74a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dac0ade381dc2ca2102f957dc706d7caad86b6106953652057bf4b4548e327eb01638e655fc9cc6e9237e82bd5251ddf65c57c163451925c6910c2de8cff63c', 16),
                    gmp_init('0x9eb0d83c9180115504f99bcc55fb9d058518a75569c0fcfa0c27926bc3edee604bfc2b6b36628812e88d8bdc13b3c747ff174919b82dacca2b58e6dc7b400cf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ba27a3884da478913b5aff787db05101314838d0fbbba191b331a70875ab99e8ccf4c89f0da3103e9b3eefd987e4ea2ae13067ea86ffc7b3cc5b2f70b9d74d6', 16),
                    gmp_init('0x931b05493ad20ec0986416bec5035bf21a4a5a7aff1a012f7d979b956b0f2aedb66c0f04838809413177de2a5b12c2fb90267ddd83b22a183479f238314a36f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3eb9c6ef0cc861deab057c405b25ec8098c77e2e385216480584224bda2f77a244bdea7dcdccd89d96c92015c48da67ceea839dd3373d6ba163b79e6c3c8a9eb', 16),
                    gmp_init('0x3d1ee9fa38efa1a485c89101ff07237025b201cda34469a69daf56ff7e574c75d375f7609b930cd27ee6b84f5b368eb770b9841577074d30e9545dc70f050afa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c4a3c443a6a79348fcb325f9f455f5406d780f85ad6e612072a325e25e7f80b8f9997db237c4ae5c819e876e8a6e45cb3febea332a52c26bc1beafa82e304fc', 16),
                    gmp_init('0x4fc20e55ad9c0a9e50e7d518d56a514fa2624a8d5a52e3bfadb83ec3ee99d63a81628f2a501ec90c0a1909e634d640594fc154d0b3f572a61835fb2738f15ca0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fd4e1b557da277c392ee96fc6a4296b754c4758720e72e525cb7975d726872b6691ab22bf32e280ed499ea1cfa8fcad5e0346a6e3f18fbf0a96132f176d4ed3', 16),
                    gmp_init('0x5568e00fdf99541bf7ee2ae438ba943305fba52348425e9e3003edc16ee70e9bf707a052c6ec6f28ac12781678ae61917176eb46b13777b2cccbc747b31df367', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e966936bf98388f46047d658f70a10ef14fa213881c86a1824204d3a57ad625e50869acc2cd2eb418c64b8b050707561bc17a5d480f4e3dcbeb22e41da09c28', 16),
                    gmp_init('0x2921a4f827c68ce723c555d08c210834c40368443096a24f708c47de303266c745ceb8de25329bd56e7b5640461b07a535515cfd2314faec8c56ee436e0e821a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4414635db9489f91aa6449a95a7da954d0dffdb2ff091807e87451f355e85b9b669e8405142a4e85c77b37cc24b82fd470c3693a274178724f04956c8bd4ef20', 16),
                    gmp_init('0x99ebe683eecafe9b249810a982dc7206ab763b8ce674420b41ce6207a5b11c68697f194df4995286f355138d6de8f51d409dcf565f97829939abdd4510600222', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8eeb7205cd31a530beadc896824f02181d53fad317e4ead531a9bbe092306c12df43e2b30dadaf648c41829dd3dd2bbdad6d262f84075f0fbee3f67e00ab4d6c', 16),
                    gmp_init('0x8b66a88ec66997224e8055bd147068bcdfd250a782d7b3148e0559ec9f115e6bafa0cc0826127ed77e9ca81f1e4e4409f0ea269a80975e2eef11f356681a6126', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x253f18fa9a64cfb95e0f2ed154e2394fac7c1cd3fbf6da4b6342af1ca53473ac1eef9bf955fb6c7426455581ea448873b7aebe9b93aa7b169a0782c65710d25a', 16),
                    gmp_init('0x4372ded2e6019bc24d2bab215c992ba97f8ef7073c64224731ae8bf02dc50849b7ebdca07b1eb659d18b82e362b8ff833d347ba09c79d69c1d02661eb45c20bc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x36c7b649497630c958739006a3fae3d60746d7b2f76702fa399995dd08ecd233d32d81f9b19752c4e4d1827e91e2ed44ac300d175919b693785a3311b71589c', 16),
                    gmp_init('0x93189001b4d76e37f9f26dcb141a4839f3d8dc746e5ffa8e4cf17f81b577c310c906e7910fae5d92d86302c5e56070948e014b71cf5b84562676025b6b8b6491', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a6e2f84274d465cf146b4ed120c2f5f4593c335ff6ed90db6fa428c66c193404289190d354ecda6f87a54e5713620493ce2b664937243005a31b27096216f16', 16),
                    gmp_init('0xa9c359ad384adaed742bd9d6fecd6aedfc9b44ac55ffb7bc350dc5a1f763db7fea176479db65ae01a1e1d9e2ee159b4ccb10ea08b409c8ba2fc2ce585fe79eb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa40fa41f62091f024d388dd841425153422c43506512dd0b80cfe74a060e1cf8b7dc0907a93a8d54eb466782b3c29b2e8ad216f2af674b3f735cd9a198f8aee', 16),
                    gmp_init('0x2a4c2d595eeb910329248b578bd4c6380ad5e61707c36bffe83278e0eb3a51962799b4c47f8b1994955a8d3e59edfd567e9b6d770b2f3155ef70a76a1fc13e95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55794ccca57b0dee5239f5d77374479a40f4ef3d146e5000065a1d6a20b50620b0a0c8b9e822d51a7bb7994c7d4c9b98de88a5d956a1105d9066169d842309a4', 16),
                    gmp_init('0x54f72798244e5ba53b566b2b178a9e1cecc7fb37a331914426072d3d75e9bc5492824cafb00451d3950dbf1c06a32676605d5f187ba9604f3e5375c08b1b5649', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21864f1718aa9f9066ab19bc2c3ff0397cceddad3612ea868968281181f6fd4153d919c348e6148d9c5ed8503fe3189b62c0981f2184272a2a9d3178bf599ecc', 16),
                    gmp_init('0x84bd97d3b90f1481cf35fad2f9aa924f8f8a38900a1f856554520796fa8e4257489a890c6a3dc8d75025b7d1ca2bce35f9f51a58dde0b443d2cee34b185c0f80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x760db487575e8f97d87935cc3974760d6e2b8dc3c9471fca1567dfcbbe232ed87088289afe398110d5c6f412d0e3285dc65b43597a3b4c68fbd6d8102416073e', 16),
                    gmp_init('0x34dd8449f44e5a93fe597056c410ca3eba2cd2c42cc9ebfbdd8f6d1b1d8cb3c827d9bd6a0845314d09707f6aee40c4880f7579ce4782c5d90ecfadc5057fc804', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7a8395b9dc46773b848f6924ba1676554c0775ffba481a7ac3bf31a03db680511c844d8b0817867105e2b9d6f7d8e1aed2e647e36ea8a38cf9a5f25cf522d9e', 16),
                    gmp_init('0x746057f90a6325f0dc5da36111917ad24756f9f2b2a1d4b2e6f454bab3b88a187d36b2d4e9894c0abaeb1f5168db365953418c76ba6c2c835affc48bddcf5c1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64a47c32a42387be6e8c263121977f16f228d0d4c4b2c61b7783a5c0c87168f5cf45cdcc1a27bf6dbaaf2327b76f2e279a13a7796f1fce3b38220da8f596f78e', 16),
                    gmp_init('0x1026feae59f676a30437b4f29683ea8810e5a5dfff648e559226ef51af514b6b728592b5ac149fae4fe7c7e1f52d18e192e95d7666e158140ab99d1b8e799d21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x983c4fcf17677d0ed28b1fbd6e269ba8a29dcd030e2aa352ee1ad2a5ad7def8db8c8e7b0f48a1bf3f1edd0b6629b45173e6a42f3b3f47abe9711afa9ca8b73e3', 16),
                    gmp_init('0x916c146fd253157ab01055dae48000a5cbfc5b500f8d839a6429974160bb5808f41d9f219a493cb65dd7aa7696c9d6ba798e56f17f04ee2c30e003a707d577ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64ba3fda31bfced41590788bc48422a5a1f9f67381556d0cfd05d62084240c1d65e2a89f339b5bc1efa241aeb5aa42368cdf5384210e876b86f473cf649e2489', 16),
                    gmp_init('0x45efc735c402b0c84fd4bd9d5407437019853d8d4e5cbfdc43e6509f9b32284e577ac135d5ce74b2f01299df2e99c367e8122784e73ddafc5627e55055120fc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x687f13812b37a18d662bcd56368275743152e8131f11a6750d11542980f90d2a365ebf68a7d3c6ea39898890af9844d51c7c516f100d210c740800e5c72ae0f', 16),
                    gmp_init('0x2265294e8ed97d8f883f30e55209b66996a7a785d09cccbfa73edb6dde066e4fd21e74183ff03ab56787826b29d486096340f9bbbfa1026cd15dfee64299b0b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93273ea5e6b3263b2f899545e79749a4869a4e69c085f91c02944b9225a8833a850be26fdec609ea5d754b254137f903e38af888270fb6199290a7a13a220d50', 16),
                    gmp_init('0x26c351293f583123775bc9c7a0b4493ddb86bc9cc8725f5a93799b6d3ba4a5bddc630e92ccab97d1068857799280733054a294ccdc5fcbcd90a24551ec5d91e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f6d1157bf7c159aa1d0dc9c0f0e60e29ee6896ef817ff933465320e223b9bbedd9dcc2ba6e17c073dc8847cf2d3dfe16e41d9723d23a366606340c5f8d68824', 16),
                    gmp_init('0x49d735b67d7c605453ab3eb9cf90b5f332cd0700199c39d31d3ad11fd0ea2d69d5276007877077a191b63e6f5e68ab6a6ac6cb129ea75c791a32bfe772360a45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38be51463c6512ce7749bcc8c0daa327d9a34cbc3980e01c7b13a060de8833c44cf32b6bbd55801648bd65448e46233691996b0a9b1b72425e274466c12ff4', 16),
                    gmp_init('0x173af85a9ccdecb60a5602887b748ed8a2a4886cf6563dd563d026d4c103efcd74aa20d1834945861fe3fbaab922899a68e0a5fc4257356728c4e844a2355150', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x953cdf2420c9330360b5c4238b7f86f84e2977265c0df036e325ffe32a42c69e000f8ea4c19964dc91ea04d7af3bbdb06d4ccec13bad8ed554741ac7af0cafb2', 16),
                    gmp_init('0x86c8028e73d34c7083610b84eed60b21549b5f85ae5c9bdd5923b30cb0eba52d67e13f554558bd6773691b802ce6e6b4c0be9a9108dda4e6f158323dea23fc15', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x67f11ffa87d1201cebc939dd710c5e17f3f3c56cb42a196d7e3b10411c96929b4b49d04b19dd05cebc3b6eac79f22258bc676c5dbc9f4e9d927b0396be246cd9', 16),
                    gmp_init('0x2bb85c89c4e87c2ad6405ea9ab9c1446799b249b93fc62b2648d1532ba33b0e3c428c54f7bfa919fb92dc7d963c0767dbb939b75ac9bc1ac8c9fb5a70065ac1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x187c6b517d4df8c67d59a6e9503e3163f54383462825bb0cf903e03ad08c212cd81f4b8e68f9415b0e9305a03e9de3dbaea9d662cf7042c3687efa43c3dbb435', 16),
                    gmp_init('0x3d50226e560ae2de447823a720105849cbbfcfd69bff5f85cdb8868b03557a08048cac821ca8968840cb8eff8ba386cd58ca8d79e15d82f2661c4b6964bb1d7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d97cfca63f5bd3da8589f6489ba0ccfd667c0dc8b51058808e889c5e2f1b729326d47f2db43db81f6929856108f9d53a1bb8d027f0aa5f91005baa8b6b0bb97', 16),
                    gmp_init('0x593d143084f24c1544db6d4529e74e9496b028398fbb9f785a6ccec0a60c0f1206b58681a71c46c29284c1c0b2ef903c0501b52b03662de48b14b500a1fd8643', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ce85b2f1660274f74a4750dbec42caf56aa9b1c98b552612c9a4f4a750d1051fe73cd62519cafc897ab9499e6b563e39ecef5ee9c68b10a36ab6b1d487f3099', 16),
                    gmp_init('0x9b3e160901e59cf605e4c4594359df55570d0e741fd042313898436f845c793b1c297353df5ce706fad65bfa765548ff0f82c14160cdf02bfa02a4aa15b950d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f8f592ab4dbe164408df6543bd10633dbe99b9c11df59867f667d1ec7409ca5a408c0ea94ea8f878c64c7881c299a493c831ed14bb89029dafbc8c5788c0020', 16),
                    gmp_init('0x7301f05a2825a79c5174d95d08b8baa769264b9a0ee3ba52653df2d465f88889af0fc1a1cb6504a7870a1cbbabfe546e8de849912fdf1de145d4a32504ac3208', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79b86d64325bbd3a40a76a7012e2ea542d7e9c966bb163b6361482b01d7ddb41f9fe956234f504bb76af30981a089e82dc669acb52733823bb4cc5b6c9fdf643', 16),
                    gmp_init('0x63ae536bbed619bf74aa72bc1f5ddb3f1ab5e57b145b86f05a24026837f104fa0655d0d2c4f3569fcbb4c1cf7bb6ba6250bbcb199816ea8164b1cadfdd3021a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a1957ebf3c17fc54829ef411c36bba9a815c47a059eb6889066bc69e871022305222211ec2f846083fdd137c4286cc111fcaeff057f58e6719e35f76abe32f3', 16),
                    gmp_init('0x264fdb3687c5ef320edb962fe040245f67ade5933056cc4d0cbe1a64a23a394c4cf90aa52de59cdc4a939cacbd3fe1331772780ba9ae3587e84e8d211d2251d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cb54597b944ae405864fd8d04fd3df0e3880003d76aaa8fa109b7e1d6eea113752a9ce1822e97d522294deaf9c064aa2369beffd7f041ec4bd7ce719dff1875', 16),
                    gmp_init('0x78821db8e64214c188aa172cbac276b77f10d996da8b87bb493e4b5b0b07916eb0b593bdac94604795be7f14c0c25b6ad236c3514d32cf927b96944dc40559e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31ed9e07170418cc5815fabc33556abb533488f4f5be61a3ee9b27831520e63fed95299a765d502fd010c990d6bdc299f345d682738b49344ff3b8dae754e3f2', 16),
                    gmp_init('0x5b9e8c1e6ac609bca23a870b8f9f22dafb8c2f90cdfcce55af8af2522dd74a856e3cadda92c57e6ecf824b5cfb08a925b7184edb67265b10783b5d623e0e89d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81eaac6c29b3cec28e55a4257e48d755711befca680186ce025389e77dc9b0507e2c766a339befe911204e1d58e7182f04d2fbd356539863eed540744f330c13', 16),
                    gmp_init('0x68cf7eb9c9741af8cef0198357ec40f035fa0dcf6d3d6e90a321565fa236b2e4e41566dc9c360e8a5f1b4af342dd1f67fcd506d54d52ec256ee533cde8d9c4e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e2f955163cc4496e1defb8c5addcd20b62cdc07677b0982d8c8ac5e80f527e77ccdde5672a9a0dc07d2ef393174295811deab93807b82eb068dfb2581a2b2d8', 16),
                    gmp_init('0x1740593b1ccb034e7bd7d53f68e68ceddf8e87eae68f1e23cb6f29a446a8874bd6efbe89c787c5880948bd932dc4531c898e8f185c34ba5d0f7ea150927f1b2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28967867a7895c3927ccaf5d1074644f8c0f309c86ac7ce60e022306f690220916a7d703951873614a49f66ef95be0d5012079ebc65ad8c8e1a4a447c855b5d7', 16),
                    gmp_init('0x993f6c77097f1eed13702832422619d6574400c43227d73724a27f524b837bed8b67c52a0bd27b8bf35f7b4650376f92c570856d52ff9af509e355c5404db60d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8308610373e3a5911462c6145023123cde8aeff1327503f5f0e83fcabfd40a538ead01861b5346e1066b4f2672207c491dfd87ee44aa82489197e85a30054db', 16),
                    gmp_init('0x6723f31004d4e774d0689eec782d49ad986929be8550028c7da748da352d83449d33485292fa40d79680ef4b45e8e802eaa429ef7b90803d34f2f871f243f2d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2354663dbcc86ef467f2c9233d21217dcea7a40e82c9919e5c33918092666279157f6f52f2bec490ce1aa5304ef734f99c2067b8002ea70e40375ed171914fac', 16),
                    gmp_init('0x76c73e805db821f0111dcdd647967381bfefe9e79c53669a22b72b76fcc546648b938594875bb55b71316d58411cbdfa313db38ee4aa482cc5f5faa6ad3ba24b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33719d860324b4bbda330df56b4462003301af55625796fa61816878c28e1b3b4b8f8295a3899c18b082e11398e65d2a18108f236cfe64d6f9b5cad2a1e81a6b', 16),
                    gmp_init('0x5bb16d0f50967ea8986c1e4519106abe83ccbd2de8e239b5b91e03c55b7281bc0ddc715e1082ae0874482f11adb7b51b725da2a8b442a2b3caba6b76fc354d34', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x43d9f3f7e02aba747141937190a7de353271b22d95c9c91739c599ff0ffb50b52bb928bb3ed1cee6c87e84f638623a6434e4f91ba0cdec393657ac0795cc63b6', 16),
                    gmp_init('0x4edcc771594b57ad3a0e558e6f2efa20d38d26dd47884c9eac6d662113f28d28bd197f1fddcbbdab96e94e5b8ef8143e84092a25488b7f2e7af805c57ef148f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5a06b3670842099f4001acc7c7161cfa70f868fe3091cbdfa69ff83aaf5b39d6dda878e9c675590131a02ceea5ec1efd8733fe08c3b63b2bd2e37f66a05b6da', 16),
                    gmp_init('0xaa5f6a84e3f84530841b4ec44f75a577e2de4ae6b6d0076cbf1f2b98a957474248dbabbe0d9208ece66632ddc5fcacb7d1e46a565a4b37a990545de985e20530', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44ceb28e7d1237e10fa3543503e439c8804b614a01ff07819a7e0af7e993bb2a0d5600c3deab91cfe7b02a7b6387d02dbff243b29327b8ef026fa52f9191f283', 16),
                    gmp_init('0x8dfb22c971b9444f9582b10e3abbc85f13a313c0c50601d460a52137981346f6f721891d9020d3e44ad07876a6773d440c4a4d28dfb8449ae84a4ee793a09d05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf0e23827b2513475308c3970c250a7da032ad984e8d4f701ec78375b4104ada4ff27c548cba8dff05049a35828e34b39f8f66b793efb4e9814171e6a8221eb8', 16),
                    gmp_init('0x4956c95b26ccdf3be808f20aa56fa6a69210209ad1c70bac9330a3b69744119aae4ba3eec30c26fcd77f4d113d3fcc6f56373168fb74be7e02d5c5b1e7d67a40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3777cf7bce1483cb8ea00536c788cd96c4431fae6355ad46b7d6ac811ebb42303e5e7ddff797928f36392586291afc1efa5989fc8d78072e0fe8420bff709606', 16),
                    gmp_init('0xe235d97678bb011498a0fee7396fcf818302439a42de5c9500a4225875cafb1f6e7a761c301a1c5a3b02cd7486dcbeb9a34c8368ad2287358917486a6878851', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42e05f9202f8288811bffa1723bb5ae00e58c5d993b2a4ffd0ae928191c2a8aaae2172bea6c80532b8b000feee66784dde3eb3c3bb910bbd3a2bbd913d42a951', 16),
                    gmp_init('0x292578ce8e9692009b996ed4c7962876a1cd9bdd7bfa387b4bf6292c0878776a70295e3ed6c813d1bbaf6997927e487e183b66803de1bc5d0a1ff72de6bb6f2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1eb92adbeac89e30b6e937566acca5bb58943b57fe1432e4773d98d8263f0418dd39da8992c0eef28282bedbf415cc226ada20a43deffd0ddabbed4116615ddb', 16),
                    gmp_init('0x25c5e8c63c4c1f072cc50e75c6a8b5cf7cce7feef0fc9562edff0f009ab3e68ad0b92523e3d7409f836fab3fdf8e9c8bffc9f9910e96e880d8f4384e352c062d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xff41c2ce3266c0e1153675bfc4448e96d23a82c98d4f6bc3bff7cd07399f1ccc0f8c53545ef6d404cfd49c2da36394cd1e3b651c39c1b36575299fb32eec928', 16),
                    gmp_init('0x6200e2770685fa3cfe76023b7eb7f51224e552669e299315c0f7cd0ef82b268869d88affb9f21806b10e2e7823aa51b14cdb4de067c52404270d25b8f6d423', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bbc7857c81a40600407cd2038e3eddf2ea570eac0ea40606ddadc706779ff257a6419bc0f87aef07e517d4fceff875c2f16c6c4e684017a6f729942499437c', 16),
                    gmp_init('0x65d92ef83329b9447ed63baf309bd25f938f7c818841dc0cd0e3e46e8e90eff74a7e805c0fd2f47c35cbc4324fa63ad4d0157431a1e887d3dbedeef6874eeff9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2716388786c252d661e6bd306e8667eb59fb0b83d1c6a215df5df0d8b7d7799ebde871ace8da77caac6ea212849d7660a76200152092df7f692e9a9067fe6a40', 16),
                    gmp_init('0xe9b2a52cc01638a4ce3459cd75494c2019d9f04fdd810254e5b6908c0fb1d0f2c98668dd2aabf8538180274a0bd10d026d6e5174092cfb9ce0149988c40e7b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68666bf9bd8add8d939386b8528a5167e4ac294a21becb7993c7b56614f89763f3ce4fcf1312f42406cb0474d71e465123a71dd089d0674f3139609e2528a82f', 16),
                    gmp_init('0x132da77657ecf7d75976f045e95d28ed734e2c7d548644c8a9152ff3083f8d596201b59cf4b140233cba668e57bb2c48b55595554f7fe88720be5e9a879a69f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d9447415a886fb18e77cb51b76226dea0e37484283410c6d905824a0d0186ef4f644d4ab291db505089feba144d0c9f239f776d8b749f658d01efa9a888a618', 16),
                    gmp_init('0x7a6e5e8283f008ad22323d149608a9f32c8c0bf22926bcd725be6810e0dd59ead330f6715e65409c1b4e5f7f793df0a865a3237c2d4173523e3f7f55fd85dca1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x910e73b899bc583eba24a95a7fc486a7d8a05f0e72a33454d721a1ba4ea49fab766f9b22b401a80390675c9122a00a23c6e41c43200a90eeb8e7918221fc0c24', 16),
                    gmp_init('0x51ce725f91dcd2aecccd2a5a3b2626d30d24e4bb41cffdb747ec179d4bf6473304b49f3d2af01ea31c137f0a4a6138c9d204cd39d87d4a1ffc1d781e7f46e1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e8c5edc84718c1c2e60eba7f11db6d3f4e07b2df3f3c2f275f9d730aef1e117ba733f5d02477a4b15460bbd490704a5c1a9ac2cb57f67349390588a16d19447', 16),
                    gmp_init('0x6754cbcb73f933352abf58c4cf5a754696266ef3b27cdf97bd15e1038965f383188008d96d98e72c0b2e8eac95c1e599b439de12bdd00fd90030b4260b9fc67b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x595c609d53a4ba87a750bd3715f1616d84775bd0b4f014106d639b18c269083c725f514c30fcd111b273baadfe1520a543af26e55c5a527cbaaa1ff45c07b450', 16),
                    gmp_init('0x9cf4e48505e24b1c9514e56d23d8b8b8593b9998826bfadf34c2353f5974f625d60a3b5900b91756d38c1a41a2520af693d482a8449aa59e47e603f3a80c3c78', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x973cb47069cb3d8bd685c64bbcac26b85b4c743fb15169b595ac1bd4a641c2a1f8cdced5bd9e13d8e78aeb6a360280f926db3b23f2ead77dfa907523c9a087ac', 16),
                    gmp_init('0x42c475c4227d160b4debba1e74dd9548ce2c211c31e5c865119977dc1aa4a3baaaf556d64cc2780ce221a440d028378f76a3d5510591efcf2bd96b57dcd7bf6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8213579d31c87f99c9a86525bf55ee31227f7eed2a5c4c4ac822019ad5e90fac5262c3fc58d6e1f9bbe0b1edda1134c66056cd743c0feabcebd40e76a7180b4b', 16),
                    gmp_init('0x589dd75aef947288cf021d8992fdd8de371cc57081797cfa7cedca7f27d5445411105300db99afed34499ec516a9950a8f7635bc19b1bdc86ed4e26ace3d1f21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68c4a3d7fb3907423e1ccc2652c446ee5218d79ff7e30045a6b6cc16667e16eb78e8f8de04bc0f70e784550d7ec2f5c27daa53ba39d6f59ceb56af472e624f28', 16),
                    gmp_init('0x9c4387c365ac914d7c227e37bbd5898257b8f2b8cd44cb8a3328a202adcd39a7d48c1273d4717895938986b2bf028a790f5303310d5501381e65eb317784b58d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x356f92eb6f3b85eff1848bd5d4e893bf13932819b67cb4f7dadbc918e7b848fca1245f7d00a045a5323f911a3a3448d614ecfb915daa71d16ab857604480ffe0', 16),
                    gmp_init('0x8cc1fdd848c2f1ee7dd8b9c184de5ac15605be3545663227e1b3eb13efa6cb1c728db01dc21d47cd1ae2b314606839358645e1ffa54651e196254e8a6686e6db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe73f1c05d0ba029d9f24b32b39ecfaaad9839a072ae2d278e6e7740fae259fb8115aeb32922ff036b4eb9efd27b2ccd4460ce9a8895c8791da6c3825b55808b', 16),
                    gmp_init('0x5a56a82766828ad826bc55763b338e945c16a3d2cbd711891872c6b331eaade9ba424dda6808d462b67783f86ffbe10ad07edb8c3f87ebf5cc4d48702f6cccd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11d10a0d12d0eaa77ec01f9a2e0775ccc8cbfd5b9a94e09cec5afa2ac1390c7e5835c890a2aaab56a924aee406dc1d9d3bcda464c007e4325e3d0729b12ef768', 16),
                    gmp_init('0x6dd40ef7d8f64a4788a406680f29c88a337c57c01d8cf22aa50ad4f99b7837cee44e2dddb2e24bfab2cad9cdc08bffffde0791dcf5b8869a7b331e279c339dd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44d26aa5532e3a03c139f8cd919cf772b14b95cdc2068ff13a2d06997ea7e39d641949f62c2bfb673e5a5275f299103f77364050bf0741d1a3f792fce302599d', 16),
                    gmp_init('0x2aa1668eefbf566429214ad4b5a2642d2ee82ac149438a7c026d9cb1644dc63f4ed2317c8b4abfeba33ffe09956cafa17f61fa2b33d7466bd1ae233b38ab0fb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fa65dd7e633cbfcc054d26a1fd00a149c96778346895d55122b30963efb39b1435f16959dbc90229dda64b41519b75d970e4cc7017a1a69276d5ea3572a80e5', 16),
                    gmp_init('0x5faadc16a72b55ccc88d478629c7bcc832c94b6975ec7c8ace18d61a7ae2a48e4b56c02e0884529fd2f9fcb551950d150ba0dd522d11e9eda49a2c39711ea00d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x397120a971787ca2ab0322f2e4b027cd44cd4b57fa78fa3254b09a96216ad6193ec1622afc280a8aebfa1abc0ae335c00c6b873d5ab9594f84f97ff541395438', 16),
                    gmp_init('0x7d86b9521a40830be31abe31381d2136f47fd79d30848f71a8903079ede9b747e04856987b4de350edb963f26e305ccbd12c33d19cd0a01e45cd94197c66ac6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb09a9d206a95c8f4eac92360e893959a8c29a76a146d29e4bd8284b16064ceb61fd2c00c05c5c0df1934af8d5518f8f221db3ae3cfa1354e33b6b8c0637cc91', 16),
                    gmp_init('0x99aa4163c7f26bc6bee88ce101b5e44fe0ea8cf83aa7cd8295fab56476b9a623feb59ea2e5ac185ccdd8c46b6a5056ddf4b212b7b85cdf5956c1bdb897b3b42c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ba2df0b20f1102aa9c1ca3d103bedb6a3bda3cc63ea0d125d8dc53d04f95fec7edbdd76c08a0adbdc37c156e2216fec0364433911356f0c3a461e382ef046e3', 16),
                    gmp_init('0x1149244f846738fc274937cd6f2eb4b971fcadb4158e9ac26104771da3a6999ec4273c104b8e6dcf8a2bde81b2475536ebb2ab6dafb3157f7c2293b5893abd9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3ca963a5b7dffbf7c8cfa8dc97349efc432bccffa24a1f9de2beb63c9106be892356812fc1ea2490707e8d35730950fa87a5ba55bb6be63b1251db041b17505', 16),
                    gmp_init('0x34bdbfb89ae37b8a0b870f28ba3a559c9306fdb31204df594fd5ab1252983bcc8313144f0b9ad9876c673953a497b3b334b16ac1bfdda603787c95b87431e93f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27307ce8433483ce62c2b45758b4a3e56965cc91d6dc91bad46862eba456f1d6d56d72bed6d73621a4da7a108edbbfc11ebf193169e3bfc931d807999a384cfb', 16),
                    gmp_init('0x4da6b6495408a18c4304f18eb203b387e8f7d1b60170b3c73317bab3fd0c12c1c1416b62d0bb48535359fc1db3e77181d8793d09a994175d9fd8ea33b9231779', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76485e9a0ba75ba80065e4d603c988c78d2e693405d14da1962ec731ce20aa43dc237f30c5b99a2a7463e76c2dcb1ff3b3098f4c0c4b85b368f7cfbfb56f7f0e', 16),
                    gmp_init('0xa66ae3691e6ca69948a126f403f66f7107865a67faf84c29020ffd06c629b206b021194b762b25b72f2c33cdf8282a017fe3c3270521cce04b4b7301e42e9941', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a5a902fe3d264028740c92b0238da3d813b15eb6ed0737b2a2711e9cfbf0b29a66e18b3f793f6387a7945cdc132a046dc6edec63bdd444c7d7a436742431182', 16),
                    gmp_init('0x8c30babcc57d9977b10a2e88f90d9c5b84db99d1e419a6717471ae5f19c1ac3bf8de9c1805aa44503af14b0f05f483ac3922879d3b442c825bd6bfd10e42968b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x587cc9eb9d4f8f03b1b95adbe76fe004c8e07b6abc58f244a38e68e3ae667b6cc86fb6443a99b21f57047dd63c3b1b521d41a5c508d653228eed7ac0a4383347', 16),
                    gmp_init('0x22b97ba0f14ec7ca4d77c6401240ebad18765e57a81cba0bdb3230dc329e82c06501262d98fb9d0b63e61db24e21cd0035fe1d935cdb5847b1d5285b43768389', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa50aa854af9455190bc8af20d966185de731c3e5806aefba9849655a65586657f38fb1a51d728abc8ff67f57fefa419e5895970d8a770aeb1d40151117e5f8a4', 16),
                    gmp_init('0x103d254cec21172f10068d1ab3b5927e06a97ac7d3ca3fa8d924a467a5a29c903b939d1af9611a5fc0409920622bbc96fd95b1f362ac6f3873eb872fb6c2c3b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f5f9955038499c4649d9172062965775169670856fbda2f60befeada9443cd1c20d53572581fd339397b69317e92150824c6ac93453ce8f23ef0886bf6717db', 16),
                    gmp_init('0x70b540a5f62e1697a1af6b51988b2d3252b0e08fc071cdcf619902347f5a8862b184725c3df0cbfe0a37caf1289ab44698349721a5a52a1c77cf07879e98c01f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e9a983b3ef617d1a0005e43029a0b4bb956b4cf9e725d8f47bde4a34caee25378cb1968ead3e36502e05a86090ff3a757c76b9952507fc472a9351ec48336a', 16),
                    gmp_init('0x96df4fde0dd279d2519b3b0f3c90ea975baf2850f1a364c52f69a0d1fcab35723cb3c48e918762cc7d1078d39c9d3874c69dc5d6d4c414e05fe2d4051c1e06b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1163355087ce1803d553adb4ebe10e7ea52e5af25effed5e2ea6bb887d2427d753e72638b35bf9ba09f50d5cdf2cdee43b9a64b9ea191606f43034de761a5aef', 16),
                    gmp_init('0x296a58dfa053e576aedd46891ceaaf26b04745f764141a479e958bbe72e3a90f8b1310a3aa01cebdece434929a6ada4b0d123efb853179bf0c199bd975b18fb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c3e171c3359493ac55f36a437f0e51fba98b7d556e583967c6ccb06c0f0f6a113de3aa909b3aa4b8effb14c6c3df6bfd205f4ce698c46bac7b59d696c357215', 16),
                    gmp_init('0x223890a56b4a7ed4bd866787c45c2905079c1cc0633e886b5656fbccfca7fc8d2a7f6fb4980cd73b4f65fbe6535b6e56edecd5450d6a90c72c9f2224718fc0ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x277b6d6aa936c350917a3181ed0d32ce02708b20b91c29fdfe6afcedebc09d244254e97cb536d3c6ba4535384c725f63eab3dd39c7a79673eda823f79266991d', 16),
                    gmp_init('0x252bfebd096fbc883bf5359209d074221895f45a07e98a820397b006b301502aaa8b26b4ccd06d0bf3de79277584299dc1b2714dbc0e5b59b46af83973cfcfb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x270b7fe0976dd82b06509168f48912bcd38b3f5cb149a6ead611e7c591a47c2f6a8876429700af3e0661fe40e64ac9f264f7feb86ef538f5bfd5f7bbbc6fb2ad', 16),
                    gmp_init('0x2a2fa40a6067745299830b546ef4acf28b7aeefc91d1e5f8ed8926b494af207647c3026c2d4c4b5e86c32636ef48d0dd9831e7414efc4b059891831521912bf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe994f77153ad6cba40e6d235a01d6b5bc5c14192b970ad6a9ef1003ec8077b342a8e79aea3623446b8ff021117d8bd845cd2a788c0346ae91681b0c79cc226', 16),
                    gmp_init('0x41bbbefbacb4939eab7cf57eab5ed93e4766b8668a0cc536b7f10a2d67ad2578357136f6347a285cbbbb8d7dc760cfa1677a5f9f45a4f283f884f49a85db273', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61cd6eaf768b1fc7ca7529b749cbf4593fe3b32c5526f384661e2fa45c74168d3cd4fb234fb8bd6d7c9882e19673182d5259b431d534f1c84675d83183eb9777', 16),
                    gmp_init('0x732f2aa4fa859d9461d6aeccf62ea30e73e812905e4438ebbc34f1013720da78c6c4e1d3869cbdaae1e1300a5f5cdf6d488b7782a36d668de4a06348abf2669b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bb8e87ace7a1f5511ee61b0314bc4808bceba7083364429e149afd5ff5481db27d0dbefb9a584c5623e4b94ad7c591b0d200ec3fbcfdc96d86131c79b6e25d', 16),
                    gmp_init('0x5034e79c83d311f564885f2df1e1b38a64ec1287d3997aae65b4c689657a0f35af2e6ba987b5c93d8e2c115ffb7351f3d34bb2c06d4e821bd6affcb24ddcf82d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x444a4eb827823dbd9c4a2b22bd29ab98a4fc8174b3e6cd6add6ad853051becfeb410841e98e12d86368241c2ad2cd5416e982b729d9be42d30c353f66e961f72', 16),
                    gmp_init('0x94c169caa24afeec1c73c3f9674e9c9d31779642d2bda2cad29d7b3bdb4a3c15d6e4a87fe41e07681d7092a4f77c709833c5d25c0c08a42ea6990c1a01d7d888', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53fedaae02ba12404b66f58c8ed6133711bb9a3ee723395c53c0df8d51605070426317fa54007624ebfcbca9f85fbb7da4e4db127225b7fdabd443aa4429f18', 16),
                    gmp_init('0x4abef8530c330771877617e54c34475bda2a5cb8636cf860a078992085c5144a3c611beb5a7c3e0db27691c81dfa0f2c785164f99f41c9f483d649e00185f94f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42581cfe851dde2b9dd35bf93ba8aaca08b3489b6ca883d30574cc7670f97b946d32658aa56455d5ce49423455c1ec85246f89d062ae46f1edf94022e492d938', 16),
                    gmp_init('0x87cbce7d21133d9c89245e26672447e85b131ef4cad795ec7d20c6658caa095614c8e57d446b0b873506bbbd4f9c36e04492d48071db9e661ebf1d70b7563446', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29fc652d4785a4caa66ba61588e061c2ce9d95bd769099ecc34a5ac0f6d14548d91d3d64ff6aec5379376fdec90225b060dbdc266e1524aa27ec4b71ba64864e', 16),
                    gmp_init('0x2347adeed5d46ee0bea0b4390d927f95290490753b928442b2412e8568980791a20af373df939cf4c47981072ec0c451d8aa4c4ccdff910fc4627280db23c803', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa0f3775e2320e54d67a13193e78973e6ae2e937e8dd8ff83fd893063a81201cd0c01c761d0fb368cb4349d71eb3be597ff810fdf52987b01f65c75a57ef633c0', 16),
                    gmp_init('0x451318d5d739d40d67c98f33fe3cd40e4df5f8e7b0bb249154bb62cb19e4f9d34e24d1b23410666e9b18ad93c74a30fc845b2cad0e5867b24af7c18455d65b15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49e27580cb39f23ce5aa2e66ffeccde01a6a3a5bb3c1bb68ef90930bd201c4c02969d83f8b19bf9e918ee397383abe2fff4f1c0f36d7b8e64583de33a554a824', 16),
                    gmp_init('0x67c2b2b80b39faefb0c33f6d80e27c00c374b9cbe928eda4836639be8d5846d812b8fd0f6023f20ad28b8c1739f477b91c237dc4fd2e41d2a172d0b911e55c7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e99682cac6afb68faffed8f7dafa8047e03637b009d258df302703d0ddd99035c0c6fdd65d4cdbd710b2d93a0190908be8d424d82f657b86d5b0fb4d258dbe0', 16),
                    gmp_init('0x3e2fd0cac36779c07c23a4faac823e28884b04d5e7c60b67797ec72478c788b6d7bc5b44ae604ddf83cee77a88eee6303b56ff72ad510a961fae7f77808cf937', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x206fcaf8b7c6711907beecb818e83f0a5cb00c765337d89474e700bc328ab79da6b415df3204ab46afa3be8eb8d543845f5a825837a9f14eba9824ebec0f2136', 16),
                    gmp_init('0x1aa78d8a56d20705e752e42c4d466c2174b29f651df1c19c52b89f7160a5e9e2acb6dd89c26f813e6a577d688bdfdf9f4177c5e8f25d9def29fb7cb51f2f6474', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e72195a892c23439ccedc3f7ad5351b6b630cc22b503f7bf8c14b4f67e52f48b2f624ff3a4e6bb8036b4a23cb2b293346a24e76e176cd8fb785f6073c3d807c', 16),
                    gmp_init('0x5d172457e906f70cd7e865c9626ae7f645fa1842528349d317efd4045d053349008ff96d5e6f256b9e5bb379e5d1ac3294317ba5cae20955232f42c6dc7f12e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57f8ee77f4050812fe22028a902255a27319fd112e1bafaea4b37a8348f99d99045cdf6a92b092199bc3836d8d7790ac6ab7777b8ab919054f4ae0596e208bc1', 16),
                    gmp_init('0x855a2c245c941be3cf15554793a146660fc6eb78813b52e3a8559c932463bd9a3c71b6fa3a153e2a0b50cd053074cd3252a533925be5b78de67a131dc198372f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x608bdf0d739bd0722050389038ce83662fca86ceabfc8196873ab2ef6a233f632e71a6a1e17b2fb639f2492ae6e6c1b18ab3dcdc77fb5c61091a1340fafa1b3', 16),
                    gmp_init('0xaaa22574f1b1486d9e81610b7261c438c7eeed51ec53845b9c94a7fd5e0e347d3bb35c5019d6ad41bb3d41f2052d93586d63cb2facaf8c0171dedd814000ea50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x328e5f73bd7218ef6aa67bc66d80efb0c1e533a898a168e6e6a6dc3b027cda7da02fb83a971e1a098ca91e06a70a1c6a4897d875c560e09c3c9be3b03da175b0', 16),
                    gmp_init('0x28a8523421c6e82458ef81f263ac29a6947608ad78553200e2d9477cb6153f4994cfbd72d3a21508bcfa03d35a1563c52f195d5ae35ec357b610caab684fe8ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21362483e9b0adaf59545316456e2e12d89c5e620452558d18a7bd05b6d302a513e07796d2c34905eb7036c7fcf25d19f22a1574c26a6ad319f61eeb5c251258', 16),
                    gmp_init('0x3957a117c36d0b7969f25172097c1b1db7513798ce5120471a1a7b48a9987d33aafd6b5d1fcf6aff7eac0a98e606396aba16116621de0442b56d69e4cc4bd06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94f6a945d09b4c5eadbd62ae5eb96848c502d83934c88279d3fbf04cbd69ca761dca7d30fc1935e5563c006103a68d3d6dd4b611570d40bfd4e85a3c9d1bc65', 16),
                    gmp_init('0xc037afeeeb9d647fc33ed1785873cc72a6b2e9b35126adc6a67787f6bd620fb843ce124fd5f2342afa4e52f5c1b0e250e5e66d0208943bd81f75025cabe8e39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ff50664c345389c92afb1ef4567c5e3e3c06caf20f6d608ee305aaf4a0efcc7360ea98b89d52800cbd37198effc34743e4a64f52b923b64c708244add9978ff', 16),
                    gmp_init('0x599f109fa1aaccb1153ba0b8b5913452bd8d0c0939ad3cf2c8a5c53a44d31cbc5c3e21a4afa69114ac146117e633d0cdd9bd0ad301109be3a9d9236c4ed161d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0b37a5fdf5d0fe8ddd5b0bbbb7d3f28837186a507a56a3d0fc17114fca06fef0d8219cc07e2cd0bca66efd12ff5b019884c39706b76deee7914a40f050e25db', 16),
                    gmp_init('0x486fc906c18b418a00c5120c2ac3b29d2773c0beab2d4a783a386a7b6f6ef49d65c554182022dd87177a4831b19f659da9f6f4c055d36cb12f34b5fda35665ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5c19f40a7b19e77f8f4d0dd6f31e30b60c01141da0b842f84d043286c9fab70322ca4c4fe962dc917befcbf1c2901943f1125028c35306ff8c43d6bec3a4e1d', 16),
                    gmp_init('0x1ce21764cff62c7a785ab83428babbb727a8dc29951cff17695038b60ecfbe6105bbb69c7e8d3e5cf21899c6511cb7845020a8c9310416d5c3746acf952e6dcc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66c75189d8d46f60a702fd55942f2b6f6161d0984176839bf9328d8ff63005f76e278fabd6a7b198ff2485e56a5c2d29d72c22714e7408c10fbb3f698e3ca924', 16),
                    gmp_init('0x7200fbfbcc3aa26eac3e3558730e370d6a80d7fb2d09159b5d733c84cc884a563c293a6d8feb7ea6b427a4bb244fe24d513e59d9c0499c649bd4ea0565c5d186', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ecfb6fa07a67ecded7b5a4a626dc243127e077855199d8e0ecbb367df6088e159357aa8a8817a404eb4f891160a211b800fe9bd30f2eb8dca30a9918fffebc', 16),
                    gmp_init('0x79cf6aa19a406bec747d8721dbe08bc959bf15c8550c5e995a0cc0030b14b8a97b478d87de2364d27a3b1e2dbe0573827dc9bea727a7b7d15a73384da99c014e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9a8ca3a75effe9c4882780e217c567196d65b487593bb7bb7d3e9edae9b078d48165c7693e984a4e56c92e2d2ee70ede073244edcdb3dae8811934816e3d97af', 16),
                    gmp_init('0x600711a9bfb810f9ae586879ac28c5b057f4dec0ec9cc37e79cdc970eebdbb5902a58a09c50d490f91ec163596300e64c57ee13cd89853aa898a229f65ffb123', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1131bd88fc6b77c159f0e010812cfe08025273155c001df3d5441ee4d7b7ec13c114518744c11d1142af348ba2563480489fb9cddf5542c5f3062985edd35823', 16),
                    gmp_init('0x4e8c3a736d758cf19629108956c9f0cc81d58aa1f2d68cece2ba40f6bdf4ed554ebb4e7944b42e9005eb6c954899580e96364b666628f6b6c31d5842817c1079', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8be299f3f400338e08597f19dd98d9be49ad8ef6cdf88ac4bf659371a703b92af42d446e4c8163898d998dcdc6a4c9a8d8df6491e8e57eec703823408511013', 16),
                    gmp_init('0x5aff63491c2d77e1069940b16985d6e88a9968ac4d9f0c5179252113d1454752606af5e5bc818ece1ab72ed62e8f8672edbe309e337ffe6ee0ae2560896200e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68f0fcd7676af8e7287271746f98a8eac83f8fe7a3fb5e907313963b71aec9389a8dbd3fa81a2dbd738211a1a425e3f97b3205a753a7f9b3515845403abcc507', 16),
                    gmp_init('0x84e3bc7232f2358be4c29f5ea407862498ead981d6f91b16a4ec929233a9e1c05afeacf016fcdaf7ff6e1a62e94f524c410a632fded1a9933dc24bcda3aaf085', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ddbd29e1c4329bbdea94c7ff27e4753aa160300e9c3fa4c2c99001fbdd195fb43c12b922b308680b3207f5227eb861a95f2564a601db769a5cf1d08ac55e71b', 16),
                    gmp_init('0x1760db0ca851572f37e33e699a63785b78c6093001aadddf159ca3b5f19035dd83112394eefcb973beb720084d44b6c444a450d05b446a6835d4327f12ecb9c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dbffd702c99509f07b897f37e89ca2d0b6b993d0cadae8a954e92ada232c989959ab8e359dc0bc39252bfee6209306eb107b0d6c779a1df41c984ee60ccaaf9', 16),
                    gmp_init('0x41fde269f77ba6081c35116a20a8b1813eb498ae570ba78038b0d0c2c7e11748b53b31172af9a4b58a0d1a463693e6eeaf1422bbc234cdb1c71ce3fc24b6d294', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b765f01e2179173dfb20373d38531400aa70356f9293de378b92cc104b14e1f4f4aeda01442b625fdf380ed95225a6bc4546039d8a9de8a5d8b28fe206e86fd', 16),
                    gmp_init('0x47f4cb2f58dcf3a74107454426896acefe3205171384e5016e90cdd6f95597043e26d493926da7ea6f08e8e66504b3282fb4302f79c0e740d1780053fea5725e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f929021b49ff8b114610eab622e27877b61d72014800c1f7c0df8f082a7b7f0e2ce4613636dc3afce546b4a823df938e73c0add601aafe18bf63205486cb467', 16),
                    gmp_init('0x562e042c2b081efe680cac77ef06ad9a8e47d5ae6c9de21eaecf56b39cba45c6184164a2926302ae9389a105b6ce557f0ea93907076dfdac30fbbaa62664c1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d3ee495b049e9a46914fcb1cf37d2e66f04557d20b0f59aac4cf3478acb342f7dd4dce7a8af59e75409755e322a2b20574cc49462c7f604a0be13cb3092cc76', 16),
                    gmp_init('0x2d1df3594a9062d5118b35567bab075e55307e5c67c1f3955dc843808d5c345341dc5ab0e392e313ca8312da1b053b723043cf03bffd4ea00c1c1395fc12d0e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x797eca6a6bcebae24f407a4d3d64d6056c3e67c0b0d7ab6daaca680079ec845ef38a92a9d7219228b00f02a586cbfd62f00072ee9f5d88f28975144d55d32d95', 16),
                    gmp_init('0x1204795d9ab508039f309271541fa9fec8411e22ae6bafce7bd953c14fa3058bacce27300c3be42a4d1e0a9d7d13e0b37f2cad1d0fb5cace95531b8969aa3c43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14bcb2feba885365ef375b8b0599425809d59c4c8d57f2c38038602c5ab815508f7d77ad9262ded076beeb12dc128616cda728f3613d15fbb5e685e8eb04e746', 16),
                    gmp_init('0x9d12414446c2c7b6cc4b41177e202559c2fb7b87c051c6e0dc2a69f230da05fe8cb3f3dbc4be7c67f1bca96b289f037605919971f1b99468975c0d67d186658d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45323775ce8491e8bc1b381f12b1db86409bfbea91becb930794479bf1e7d9ae6bdac80a5f36e791a7f578156882fc943c6082c98a8454e15b6afa11bfb6b751', 16),
                    gmp_init('0x208a47821a3f054cd141b598c73342270e11524e81ab572b04760b3091457ddef16f9407d732f943638859344ba934bb65a1aa2640748fc183321eac42cff5a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d9202046a80af51c55cb5fe38c8e3b7c33b8dfbe0b0ab7dacee3d73b40dc130f116497fb6b44d3244b167190b7edf5c3607507a3465c6371ae0eccd7ac200c9', 16),
                    gmp_init('0x4d590172dd20d358148a81151e6d89b7c0b59716a34f0b9ed46c557bf39e7d95180aecf389cebc3f029f636ebe7b4b4a164ae2f1ceb3b4d37c7251f51f6133eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e0fdc54181eef99bf7aa91cb04f5b30cc9e0abcffa92771dd5fe8e598bd84f8083f0cabbf43bdccd5dfb2863afe9ab6b09a21d1c6d41cc34883a430f47cca6f', 16),
                    gmp_init('0x4b7a42176e80df4b183125a0d8d9a0fc1c660d556fca6e3f54aabefe4ae40754efa58758d15d55c81fddd0e9e2d46babd568622fbf70a527bd92faaff2cf97c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x198e0b4e996f9ba16bbb3d177d731ab3145fe5550f0444e11b533139641ce0ed28f1435258c1fea10f6785683f205a7ffb34e65597f8f306727e4952b85e8c4d', 16),
                    gmp_init('0x33c6fd0a02484b7a5f1c90d547ec7146940e6d6f74113e86f421a9436e116ae6912589d809c7d7a20784532df3bd677e6dbf08631352a26c5cafbc60a2796a38', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x21487383ef89e1542378590d4730df6795b6010abcc7232dcfdf4a51756869e1788a444a2edc71b28b550142aad0e2afce38255ffe5a696426a63acb136bf34b', 16),
                    gmp_init('0x900dc94a521924bfbf0cce31671d4a544def8ce6bdf6358d313b022ca6b5fd447542b30045a01b608e374a05c8ff45de84d5cbc1dae4bffa22cb6735478072d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8aee94566ebff11e7608efbfc530631e3c44f012a04a532b4a6fac24b92603bdeff32a31689807ebe9474ad953d1ef1d8dea38967c947011e6544f1afabff0b4', 16),
                    gmp_init('0x418b41e0886cfe22953320da5d0e3668578c897b2833c3738045bebe3771ab84b52817522902c455aad832783f12c12f12dc27170fa8e78c61fc062798e16fe4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c4b2a9183acfa17481fd32e3c563b73ef139aac2f398abae7e4ec50e41305968d9b1bfc3791cefaf072e70aa54086ed0653e2f824936651eb977f0fc2e5975', 16),
                    gmp_init('0x87129aa7198908990963719166e225fc4144a206adf28bb05a50a9af142eef9a90e585425be4818e1a609255cfa92fb74dfa9d692dd6c28d0d644f56903a82b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0fe020a284f3de2a8fed925e8ff76efc9eff375ee0e93aa22206e980fdf66b28bdd38bd38e2c7fa1b74f478a456178f0f04809c43d45008a6d09ac379abd74b', 16),
                    gmp_init('0x3b9e37b5e1e83fc8dfb03a1684b29c9b4d0064d7b9883de004128abdae7e5416df8f15dd27a7739769112d4d88fa7c2616c27327c3de04d91c52a70d2ea40001', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ce5b2dda76b53521c09f3df01aa2e490754dcd5bc30e289fb5202c2016054c96779aec135770fe8f531d420c8fc9b47044bb831af13c7d3698d6c35ed125393', 16),
                    gmp_init('0x6e28db2fe3def887ee91f23ec4c3bf2f7e321aeba31765c0fa342304fc803c61db27758a9ec55172869432525564d8131b168f249b3fb7dc4279b9abff2dae2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13ce18151e08457831477467970f6e9e28799414ad6533985b49ed6055b6254e6799d1ac4babcd9a2b3bd344263b2a728c538a2abe1f33a3a9c45de4943c6fb4', 16),
                    gmp_init('0x71f2ad705ccbff65decbf9755f3bf0bc6a1a15a19d2974911cebcbe22b5c0a86eea96219e69f7f72773d312b2ea34b7e6cd3b9174f0e0d5969a060e23ac7d851', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0198891554dbf4c6df1304f0b2c848f64c19fe365c5824ed7c06dbbc13cd5f31c54d1e9ad776a3dfc90e5e94263db538b7213aef879888a1330be9a4a8e8f5', 16),
                    gmp_init('0x4c24d7cb63c687e21776857df536051228019211582255843cc987f21b7ff1affae0bd2d8c57ce3caadbb4c8c943cffc6bba763eec93991303a0a30a3ce1b761', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71b15f57aa55cc50c1b5dd7172b31e761fed35b579a21d5f023e6a58e22019c462646d36e8c74b8fbe7865e91448dca6814564df41ec464d89fc1def3db81995', 16),
                    gmp_init('0xaab5b997445dd403d195122afc3744b123f8b3d15f7190f5d96b63099660a527cd877a38abf434ff3c08de2581f732f33cf1f5fb4491809e23e8085468621fa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51dabfc9465669dce40331dca0e79cf725720bb36d9a3cc151e0dd380eb8422457ce0842cc54e9a363c2ae5f68ec2cb3deeb82e35ec758d55cf367f45350f75b', 16),
                    gmp_init('0x86c27784c21f86183dba62d59df552a7124dab44bbc7c782ce6e352f50f952da08bbea9aaaa81ea0cf083f52ca163e14ee1dafdad7dfa2790ca8d761198c4876', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ca3880f24d909fcfa75aa71993e1e02797257ff196ae156dd4163a659bae15561de9840827c4b8b2a029571dd0fc33642bc030265b631a1f79b7633f5443422', 16),
                    gmp_init('0x36fa52f340aa09bc5263aeb42b66c9e40bec0c844aebc8231fd800cda6998bc8e7985c5eb8c5618789f6d08345e7947735f91df8885dc573d571969698f8d031', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x197d298258187229a315f17d5c040fb3945548bee982de82bfa9d2b917b94985d9b57f13d7f01151c68fa7fbbcdc6fa9b4e398b0759e1be04a3ef6dfa4acabc9', 16),
                    gmp_init('0x1592088c77ad2b5a47c9840ada3415c29b26fb48bc55a34a88c6fc791d4ad5d5f5c0cf83f167e2ddd7769b0811c6f42a6aed7319857f9c59ff287c815042835a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61cbf798a402f08761e47f4e80a2a583a586053dbf9ea5e82e9bf935a60892eb4851d28199ee5ab76f825c7af3a53461f2d29811651860ee7379fd009cdbe9f9', 16),
                    gmp_init('0x41010e839ca17bd0ecab38618a05ad2e32b966e0a8f93b428d09f5e0a6d9a9106a6a6fc8c88ae8cb81806274507adfc4fac7cd3479c4c418bc2531e11d2e781f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b83935020ea4d3fb73f84bb173603bd871f1a8ee6deb434666dfb67467e3b3a83d9f7ef1e3d4c0cbff9c735817370df816a1e99f8f9e094fc01eeaea2ccccd4', 16),
                    gmp_init('0xa2ddd9f0beec7879d8bd2ff4a523154eb84a031711be8882af715e18d3e6289b82dfb2c4be5de2443980f9a87f3bee7451c3b0576a7831a6af270e1c5a61e0e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d1336a2566e86e829278b59b96bb15504cf99066b8f9b398a7140dd7f2cc8169f5d09cc8baaeefd80c446f0ed20cbfb6c68a1e4a72bc76f3421b14fdb769674', 16),
                    gmp_init('0x926d3cda4c4476f15297a28f44bfe423c60aced787491b6b9a78b3551112fff5c678ab7e3937712515325fe2a487d62556f4a8b67dedcbeef653d615d41688c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7840f23bbbe98772a8d003dccb3f8baf2711c7d1f89ded6b8386910db288fc84a0a03baade28a214f205fd92b06ad8abe8629067a914ab80561bcc5c29d3a2ed', 16),
                    gmp_init('0x1f21bf28f32e0f5781fa13dd3398f238f8f2d357806603093db1ad78d997ba7035604f9144e1290f285e09d89de5331794a0fddc1bfc2f220d73f2fbcbdec40c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3a6787221456657378069c3a62a7b2bba7a55da19a22704bbf48afe8004f68120f5b6a3d89969d73a0bb5362a35ec052aff751648f4bcc3d3bb0e51b4bd9512b', 16),
                    gmp_init('0x96a98108fc965c0deb4b8ee0b4556a13041c235a76bc87e29cc7625b2b862008b6c6cf90c795c725368390bced11ddd9cf66473c93a7aff99e4e6550236e7a20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2dcbcc0c5441200d41b3f551fe77a20f9698dfcd8f5f43bbfab076dfa768deb4fb28666436ffbfe58aa130a904d55c6808ea65a5232b5ecf3ac27c8c842521db', 16),
                    gmp_init('0x2a67e87410acbb231f4004fdb60100bfb517a939c6caeb90b4d36d11a4a92cb62058f697bcde1c09ea054feceb513a91a09c3ae5e66addd70fc3a850735ebedc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67c6728d7a58d8a075b35f5d16316bcd188bd410a356f718706ff64229a43acca2de856151d4a72e47461df5438a502ccc09a8a69c9ade489135fccbcf173b62', 16),
                    gmp_init('0xa163a78c0f939404657d68dbbcbd9291d14600bea364d5328e939f7cf788a805d69f00f1f2a40dfdf7259a87b799414803ae674c7ba5b8fae20110973688f72e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9aee9b1c58ba50a5ed9b462cbe518b49bafa0f6a3cb0d7ff749659f3d749116ece0ad6526ada607a503e653994119b0ba24e56147832467a275b01a607a51634', 16),
                    gmp_init('0x78f4a3018932c8d935ec9f2d5be52808f041281e27414886a855aa6f574941cb617ebb7be85daac941824a776ac44ddc09fbdbb7964519685c4ab4c339054866', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1be142427aec1c49aba0bdf1717d08669857367d39b121f9e8a126bc3b3e29e4d4082407f6cab5042fa2509448f6f421553919a7afefc667d3d464346d4cfb93', 16),
                    gmp_init('0x99d3a5ea9aeaed8561a72f4f0d2051a78ad80b0acaca585e036ec2c8dc335b571d34ee97c8206527d867f3aebc7b835d67311b343d8efe6f261421bc8a3a698', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3f140b4381bfc661f9d4d36f75cfe753ec86c7d5d339a03ba6ae9f13455da7bb4d7fd148f1ab0015210c9462ea0054cdae665dbe18506ad82359a14b5631c2f', 16),
                    gmp_init('0x175c722d6317c60842e67084ccabf575f1c054faafd4bc04ebea9e298826f37780e588f14a40cd7e846831162321dcd807354e2ed867889c9640d4c0a826609', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ff12a62fa0eb2c118a7736adec13e040126fb80a2650a8623b7dc8227979d1c50d80ce331c65cf903c1677135a0668d61a32388922c048c939b7c4a9bce8d11', 16),
                    gmp_init('0x70233076dab4ae4a54fb5a3f3a4f2262f1b842d0c2881d05b901c6c6fe4f221d97bfbda1611f4869e2cffc830db996436bd69370afbf6ac70575baa114767d18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x654a7b4cbeca8c201f4a3c14269cc028edb045ef74597a9505ea68176cbbe7476a8a020342bca902b06ecb8057fa2119ba094a6892efaca20db23c5094db875d', 16),
                    gmp_init('0x4b6ebc4e41bf2ae3594b1d0d522e3baf941ebde2def0135314375c2761c7b480943a95e64eeff42f8ff0633bb9ff4bb7a99772ce0b1b9e260b2813cf7b510a9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3226ef1ad0f8846f331ffcca59192dcc3c59add11785c82055b47f37aafa84b39031da804e9a621cddb16fc2a375b4a77f8456ed44a02eb13c92cefd9a23ad74', 16),
                    gmp_init('0x5cd8d918945ebca549f75bdc4315eb426bce1051f27305f320314e1593bb123bba5fbc6bbfb53fcd2ffd3feb65e3e8b7735d4e5a9f2c706270b9776affc9b7af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96d51d9b26941aff2bdc391496f33e008974b9cc55a2ffba5f04e4851cbb29092b3b5703c8f2de082a41d9b7a81296c2356a19a342788f249581f6c07d256d05', 16),
                    gmp_init('0x8d206b62ba0c4f3d8443999b6f9445de381deb2629f67e8302e14edb9167f8979b94776a659d5de1f9cd210a6dece7645fdc03133c6ba1ba0817c18041ee06c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73ff96af54da29734183c276caa892217e3a13f6ffc57c32ef05cfcf2af55810fc5b35399f27d088b08ccc1c80e55fa4e5203575d9f419ddb248f0832e8dcd4b', 16),
                    gmp_init('0x1ef33a49fa4896aca0ceb8bceba3c4b95907981d73ae9ccc6d4b47e891b1024723998fc92c2cf910c42da7a6a809039ce1434f59369158c5b7bdd59feef13ef7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b36ae99532af7c512c0f0bd86e0436cc280203619a1b245a6dad5461d8d6f4fde6a48dff9a234ec911a5e21717a1b0c271570f1900192068c3f4ce1f8d1be25', 16),
                    gmp_init('0x5873d05c95d3766f58b8658663c74d8d6d9a4c59311492193dc1c8c8321be533a2be13aa6db698dbed0f27ea532bbe22e3e90c2c30afcaf497bb5181bb091558', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b81700adc2a94c3119b8cf125062b74a6bc06d94f3b349c7c93630788bd3bc1372231b4ff1d9458886bd53a2402f39dab2d962fbf8e4bf468732cf0f306f305', 16),
                    gmp_init('0x9ff910c6b11ddb5a4e3c4608041013f3297792400f66422b3ab426d5c2edde0abf017ab95f35e3008ce3ced606a22cee0d97c6c442c39bc34fc158226d945351', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fec5eff36d4bd3e3dcac1eb1344dd7ca45ff6d68877de64b347d2f6f15d8ae6de58fd2f049b6e06873625e25cc5e00b3585641418cd88b02d9f1e983bb1d5ae', 16),
                    gmp_init('0x6cab239ca2d7590189683c7a20168ff2e6c4a273ddc37d47e3cf187221ed7042e3fe4bd3f2c88508ce5000a4abb30859a0ab779733d0361694e99a6f82f9f2a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1044905d38e9cf3c49d6e06162abe7a1bf36cee65f5167c9ffa04897cb9aa6bf2f388a6bb3c008cbfe8ce8f3555139807bd442dd00b89b9674b64696f7d795c5', 16),
                    gmp_init('0x9d6865b92d913acbe5cfa65c5da8e4eebdbb2fc18d9c430e78e9eb2e54671bce17e0b477da48a98af7a3d73ed6357e1714b6f1542e45f281ed4862fdb250ca6d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x538b7893dd6219e6f0307345e984993e22dcdcd74802d5fadf4fa78b24f05e4ad682e678c453e00a72de26da142920cbee8ee473728a18c122e40830206ba369', 16),
                    gmp_init('0x674075497e04181ddf4a7294d7dff1852dc75388247b7c26ee3909aa26020417f290c9d246b00e4468e835798ff0aa39ada5a82d5899199c5c075b0a038ecce3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x875026710de84aa0afdb6f1d9aff6ac10d69bf9fd7b8eca29d69d2723ed13f32abae80c604ddaf4f77aa4850484fc25ded660659038cadaf25a221039feab6df', 16),
                    gmp_init('0x151c339b0a7438afef13ac43f9d4db79372dfc42bc8c4f6e944206551b2266bde2b06047ee42d73c714960fe05a0ff72835b18750fc2a59b6921673c1bced411', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fd0244ff1a8ebdf746881009be4987822833988720dcdaeea968067a128950168a91019902f4b033d16c31d5dacc592c023f7e104f9d81b22adad0894d63802', 16),
                    gmp_init('0xa9daf9fc2acdaad8d0efdf7b83f6f2bc8b8331d99c3d1acac23a8cc3afe4e527bb000ac8550ef382f90e45904331c0ef35e7bbce7327b92353999b97c482b2db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8654c94d778db92a70fa389311fe66cca33b7151ea8f4056470d3d07360b2b0549737a26d0cc2504f5e41159cda7dd46a797db27832cb442185f8c7e197b35f6', 16),
                    gmp_init('0xa0e63c800658dbcd14d8c23d1562011ce46517c15ee4d21e7bf69f7d0cf842e7f3fc2753c91f4f6d4da04b587cd09d1cecbb3927976214df7fc3b2dc4cdb365c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x119d08748d040a82a2f1f9079af43f28050bbf02fdbcada74314e7c426edd72d9a4ebb71125c2d5f0f2da2b04dcf7bdd6c0b4d5691c240e50bd85578106f4746', 16),
                    gmp_init('0x2ea5f91da0f44d1f2dd2888e82f9e7940e9045bc90a309d595929f160aa4a8b8561518282d1cf543bb2b3a774a9448fef2d309fce79fdcf19dae85e1eb221708', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x890d3dea6d143cb33b2297a9933f1c491d26af74935974277e0dfd8d8ca8b871d96b9c317d12875ce22b6ea67a6323994478b0018395bb168418e2f9e9cd02d6', 16),
                    gmp_init('0x6283cccc3a9587a38802236754712c9e5b001f6c6263260bd696228c90db625a73e7d90da8c68dfe7b0b499812b02db3073e68b6b93ec7f2a7e31a42f2e976a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x860441084c062ec44f271ddf60bd9227153b3ab0dbde3ff417e987f5a7520ca4dabd472cf46f2e6ab38f14f25b4f88a566251b6acd5d875ebfe9d53865b39784', 16),
                    gmp_init('0x4502080914e884c193809e4a420964cf1eabe70133868da3935a61eadf87c8d869b1066d5e21d2d235b0869e9cc36e9740b6479b398424d363dd76150bebc47d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x706c8021f436760af327c222a16b0814afbab878a351c1a1801397a91c024ee5eb56ff6ffad10c01b3bd1b2a3cfbb97d95bf9e54f80dafce127ea5a6f2a8454a', 16),
                    gmp_init('0x521c3696ba471f252f0eac7619dc3d2d155b35e540cd70e5aac13afae900acc60fd12e04eee4224fe1b2b8d33a15663777d1555f66c6c95f9647345ebf2ab339', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75e30eb44581ab58ae6d1cacefcada715c2804b4f2b29aefd808950e3c46e434fed5c39978a5f129bcca3715dac8f8acd7889f2b9f732fc66f9884187552159f', 16),
                    gmp_init('0x7ce73f7ce3f61e2795f91a21b04c611cc7d16f0fed60a4afd921b740abe1c3f5f8b2b2f11f2de70141eba487138eefe56f214e90b074227fbb393da84db3b3c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cbb444df8b6d27b7d7c02a06ee8cbd1cb3769e169f3d242df3105064ec5696aca158da7816bb67177d0ab4ca449bb4772b97f898947a49517898dfd52ac6d99', 16),
                    gmp_init('0x1e0345fd4bffd32f436e41cfa700c409d6246e12f5b608a4f1a61e25c62880ecd10bf91494a6d60c68e5aa1e96541490bda9c78105a89bcee008dfb44153aec6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c761d2ede220deeb6546a20c71344d47f9ea9f913f803225b25a4ab5e5bf5605b565d55880b8025199d15c45d6ca3ae8db342ee06b504cb3f5267398bad13b0', 16),
                    gmp_init('0x12298fae2d71a4173f99be5439f094a3673126b9b0a3f9143d7124e2a42d6e1f6fc6658daa75520106a853305dbc2cecead16ff1d84e15b767b697e051cf031d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72e885422da0b1766f35b4c600ae6e57ffa20d2591db139168094cd78166f08937a1a1bf8e5c9960185f70ea59d8a11528607156a0532fe5c746af0c50ef5a4c', 16),
                    gmp_init('0x958f28d4659e999261774890531cb4c30d443c22fcd321d109db3f4c09f32e688d6941e9a531e99560a2947c29b03d921c9f5fae6941bc3a3c80da8eb64167a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97707737a52c93429751573c46219eccc4ea68e88596d46fd6eae203537dc834b782499d036ffc3af380ea8a5c730cfe9ebe9b539789c15edcf14a67eb750549', 16),
                    gmp_init('0x3361723b8f9101d94aa56a9c2bf05b6f650a57bcd28a7a1fd6195d15bd7db969d1ac028b7ca80a36359f9d77b85ad2e9ee6a822d2e9ba1d872f267f782f470f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b88922c709cbf6b90fc2a344db215fef120a8adf988245a464fb35212732cc8fb7d77f8831b5b263a54cbf8d74b07f02caf8ac7088105da560ba2c9d368c187', 16),
                    gmp_init('0x2437399992fb3b40acb658d4d9eb3d51cd3e74049d551ff4857bc626df340b66942f193771b7eeed594001f38e97b64b6311fc7fe203cf7ef9fa0ea70ef00b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38db13e1d7b5639c2cc422e5b96e16d57a815280b44aceafbf08a0c6c17ef8c524c538ff6202c92ddb093c33925afd190b0dad015f642d23774bc591dc269889', 16),
                    gmp_init('0x29f38449ca14620ca2c460e5be7fbc904c5a1ac891d01ab748ae384f3ed631acdb878971d6772684d8fbce357da035259df826e3b64446aaa80ad9cd44c67c57', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1098e2d0b30374ddabf3af287d7d3399016d26d52ac1585478acc8541873cfc3bac141a2065ad228bc70a8156359e2f898d097fed9a0de89985c80ce8918c862', 16),
                    gmp_init('0x2b8b66db114c618a1713fea9c8c0e012bbb8c271fe92906af8ef507cddfa65df64136aba66b1fb02d1de7f6ea794a4c09179091d84f1e67d14050c219e417ecc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82321098d30ef19a5ce9a3b547dd0fa1a049a5eae5e987886962f7eebdccdbfe04f65ea8c65658c8ffce7472667d6d1c72aa1e54dc6d05278185336b73ae1ccb', 16),
                    gmp_init('0x82a33e817c7a920ff231e17e6aca3201131751b58160d5934bb266b1a882eafec2c291d6dde05fbe57765bb5ee3d60e5066e3831550beadc830ddf513fa2c296', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17abdd27190e207b9c2510b99baba841cb6b4768454fc56aab8bf47404264269eda4ca40b7a93612bd4ed12676167ad7728ced30fdb7fba3b321b71b600d35bb', 16),
                    gmp_init('0x83f571c21e0741ae872275a169952ac37cfdb85a04df74ae701c199bfcd805a17e0ef3ebf691eff42307c582f591757ad077447685e7ecc8ce887c44fb7e88ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65fbefe136018b99a3170477bba7678329a7e7aa9d8db1af006b234e4fcf03d765b3fe8bb4d4313b56d75346eb5873c082959d8106f3b35d91d20262e5d8bb92', 16),
                    gmp_init('0x4b87f64082b7910518194b1aa04cb352e098628cb150d2bf682e67119d7da9f7196b6c0253575b1bf03c40fc08f74b763a1c2a4ce4cf00589f386dd801591c46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a88ae98c6264b750c18c7e9510af032f8ac90b1a4a9a39435106192f24f3279e7c6046c4c1a419007f50c7bbb8729d289c4cd1614394d2f861a6c3d7fe7d494', 16),
                    gmp_init('0x7c3089252da4b0936d3776dddaa8d174734974ee66c3fe08d73382990d1d506ed7fe6ddb134a6b0be3ed525d8674b9419071c89720b3634c51a2617388345b54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bbc0674584c33bcad510f64a2baa142125165b553f28e6877e7993eb3ddbfdb028d6b0e4b64145fa342527d3db19d07ef9d97f6d19adb4cf28c19b12ab10d5b', 16),
                    gmp_init('0x9c58525fbc66041372e49175a02338ba051a443c2335f5d07ed89d470c7e889cb05f15ebc95574bd1c3908b97953acb0085162d638f02154a28d3fc6529c1fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16dd0eaa0111cea4d235782b12b2ece908e22109c497f41061fa4325c2e71ef82793485d24a4455eeed288e131953e18d0e4d8be48921bbebc986b9b74b49e60', 16),
                    gmp_init('0x8a2e7f05f5b2fcbd55524ef95cf1ee530019f3f4052297d6e34ba9be01c694e1010a7b39fe89324e9db4f8ffc2c689deb4ad00273a4dd23e084d431811ac6d4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74cde9961b8f4800268d4e9ebab0343756034660d19981046ea7fcd1f77717f8af87307a62a0b9969f5b9b20af21dfed0b86277d0973497e322e22b0c5f8a268', 16),
                    gmp_init('0x8174c1f7f225683cdb62a04d67d7292eb0b697801c90239fb7bdfbfef74419d085713e8e5f78e3d6b7a6621a488e35e3cbca389563a5ddef86371360a5aa0fcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38ead0b35eb6a46bb269b91e411d40e255f7fed98c879437ad06825d650f1d8730e544bb8f2404564137871757ae32abfd33455f296f49242eb07e860c4ba2c4', 16),
                    gmp_init('0x94c71689d93b491f6bba3ff2dfa21d223a2a65377a35796ba9496fbdb0644cfed4f7ff887f98635c8f8db4e4f5f94ee5902d83ff9e13e2aa7c07fd50ca79888c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2919b74ed8a3d1420dc1b1be4cc6cf40cd174d44d8b509d6141605abd5ccd76ad5dd770a0e1e68d585bce919179ceb92dee5b16e2603ec0f0dc7ba2d21275299', 16),
                    gmp_init('0x56a7d677bd74938dd31b42bde9b70cb16f98c6ccea838ca3090aa818774bbe3462ed18877290beeb0a3568e92b55a33544634ff589b1da8a53ec39e7d867857b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x525d88e1b5482e294a6f278cb8832c600ff2475c5818bdc0ae5b912cc7a8d39ed1b6f113f3ab022ba03cc3c46609491c59da83dd6b561c34c5679e7a136a7f8f', 16),
                    gmp_init('0x3e8c23dc6ac81111273170a00c9b721d5b816353dfc3dd05c225d38ee8e30f3bedc022f3af5379c7eef0e3eabde212d2927b36d3bf4492fcf9ccef880a0f9318', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5008519df89ec08d371b69f4347db6be6405eaa9598ee767849ba7e1674cb5b861b777f2c09f28c7820853b69730d0f80af7ae993f12f89221e4a29d1b5fdd32', 16),
                    gmp_init('0x67a965a015d75d03b67e445bd31c7b4c584ae16b3c8687b50d7bc415a111b2bb84319b6a9679e89a414cbdb2c7d140cacfc4e06f51516c7ca0f5e2a9e1ad1722', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1736031cbbdfd8ba71aac09bf4108fbfdc7bff3ea6b6d69b496f44ee87572c6d7b66c706500d9aea7cf4db6cbda73f660db6730ed58de14610e16a659f64d960', 16),
                    gmp_init('0x82e498b32a143f14820c30a19194440bd45128b1aa1694171127c8a32941ec71bc3737decd56d0dc7c3e1aad018220525754819fe0cfd1b7cf45ecb7a2971dbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8e5fd70d816ec4975df98e70b8e847314f823d8a9f5f56454cb804b9313347fbe806f268a9250d6457e7997cb1722c876d5b2b61c3eaec0ad51cb52963147b7', 16),
                    gmp_init('0x311801e95f5f8004d81f76de4d5bcc9da913bfcbc1d9e5f8d3d4b92e7f82932e6bdb75ed517a539f95f92d82900d6487e17d7df031784f847522465d14ac3cbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7dcccc1059ffec93825dece73cfe0361d5a9b9d7371523053875d6c755bab70dce3e0216fadb8d82dcd4f50776d728dadd32adfbb4737e1501e980203f86284c', 16),
                    gmp_init('0x90b15eef729afaa1330a46b703a1ccc3ac2eace35098d0c075fb69e0782ebd6ccc6da0fbdb10a91846866b6a9bf8dc85837d3547463bf41e0aa892e0880440df', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6a096c3bbcada0fd6479b0c83de34ec5241a88e484a59b5f6e085397a7c2ce0b176252fa18b24f983bed6b385416350bcf43f1ad454ec668e2a4c71875b8b844', 16),
                    gmp_init('0x4b6bcc9c0b0300c9ff2f05e38bbdd4149e964b4fee6c1cb8f6e2a0d7ffd05fe881924d1aa75517859c117c7a0c58a2980e5611c90e60bcf1790976de560b6388', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fa2334b02d19f4cfccd1f8941a2e16faded88ca7ee1bceae496d995370a03ac07fb9afe67691b491bea7d26476c9b5585a0ae57cdc86006af55d7e092239c6f', 16),
                    gmp_init('0x508491db9be483dceea1e066f8659f50fdec03cf0a6cc8446ae3f1f7ab2f2638ed16790360be38b2b2687d0a783d3b86a1321a84256e751535225d313b15becc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b401f003bc8965081ecf959e0915bbf60c2fabade680cdb1b1fe1f39b75a5f5943004b7c050def6c432342d138d4a0f1db57c97fa3b229d49cae276e66c14d1', 16),
                    gmp_init('0x6e204a56e9c275b4954916ec3e813209a86ce3f7da74e28a345b4bee0932a3d509b921f01ec23bc03609fb434d848f378b7d988d4c5c41d1e9a11b6439017208', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75bd846049e4fc1c874ddc7682c17de662a2cf207c07fc7e4951a368a0265ef8318279d1d39d1c19ff3327908bc3a7ad3bfc4aa3ec7a9c5f63cf006e0cfed9e3', 16),
                    gmp_init('0xa395d39f48e693d56b6c8f93a1a2aa3f3e5e16e2528ec20bfdd57232e1f506e71ae0e1b8574308e0171fdda0d2c4ec6ec95e00d75b5f5c30a1ec5ec15d83323c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x876994dfb63afc991c79ad0ecd25a72ec90a93d38c8e36cc392006abbb3b70390d35dd2d9ae0245b95a35c034bde2f6b24c73131cd8081eea5157e37e4c37b36', 16),
                    gmp_init('0x21a528f8d00aaf5bad0248e17ee608cd25f9659049ea4ab12b84da32d70e1a03267b5205c4470ee891cde3a4c459a8b1c33a39cec28e32cf3e36196b9e63ec58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x951a2a0ac90353caf0cb6f86a62a317f63cea05f011928cfc7da52fcce2856e195689a8b1f7928382558920c9967e6d06e65443370ceedf72854028ace91693', 16),
                    gmp_init('0x21ed24da2235c2f43e301b79373c0d5eb52bb2e70da63b5984740f136397d57fa1ef087ca905c647efbd06d761bb5bc6fa8f68bbf4ee3df422f874a19caa1b2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdd07cc1738e0452c76b002186f23cfbf8df7fd7b97b8d962b0e1ec34a10e85f3ed79efbca45106aca1d632efe16264913cf134d68e1575f6bdd5be37494c4f7', 16),
                    gmp_init('0x5991afc3eaeaaaa4d949ce8f4c842ff577dbe91d8d6dfef5c6f174174937222672c0d954ab98d18fa3416590ba48d6f58456fc691554e1a2d70d472ddcfa9e2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54788441acf7ffb37170ff321697582129dabfaed306e1aa392cb2dcb9c4311a7e0046c185138a6fcb4d8dfe03f003da10a004e59f5d7bf18cfd2477d7378097', 16),
                    gmp_init('0x1eb799e1180707be4011614d12c13945e67438d4f37852ceb168014dfe380eee9fc1a7c158336772e9cfa07a658dade9fc3675f36effdf7328de3d1ba59b7b90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7885d41bfcc4b328d6dee68c044991551cebbe8712fb8728f6f698ef7d87a3d678784f7b0f3897cfa07c89cac615b39f8c2f2e86aac930a82c2117d3604822c5', 16),
                    gmp_init('0xafb1b6cd8e1172ae037aa5f4f78ec08506e57cfe3f8187b2dc957fcca98c6096acb315b7dca8c0d405535d648ba2e4dad9ded874e00b06441667614e642cff3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bc544d29e6531366b078b01f4c02d29274b02a6e26ea965de2ddb386f8dcc4c6e89dc455b835e4cd8dc5a38ffb92c9920a591916d17ded95b2944a0c94c4497', 16),
                    gmp_init('0x1acf0e55bdaea2d149d4f7d018684f10bee83668217896c96a8e3732c0791ed6d24240ae7c51c3d2ce044c07473c31907643896a611a4feda83b3148c2e3d99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e2a8f129bc8139f47ca2fe4500b7654dd48945bcda62291fa3f9a1b7b54299ee5cd674671ae5312d895da3bfa9072ac4de4bd3995fec1535c3de707cd8d417f', 16),
                    gmp_init('0x38afbab8e46adb105558923fe4dc8a092dc3f017f9e12ea8078cd6779c2a2c3422ac18996367d26f441a9bc83ec3718c7bbe59c24cc6a21f08ffa6e4819d118d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x935c4a2eb20234eb4a3e4dfecbdb06b10de1c0ed566c73aa502d9e761df325edb7969cf0ecb4351f2ecdd905877e4c7e526dba2abe92fa4f45af3baf60cf9d77', 16),
                    gmp_init('0xa84d0cffd06d54736fe4c5b6e006808681d6e1a394a49f637ea80d3e1e758053896b19fd6dbab2f24b1c87a7a88744d2a8f78cb63c55bef344d225a2fffa8f7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa430c1273e01f27b536d062b022c4b1d96278af1a48455bb0e78ba3af57b22501d82e0fff1cfda5ef7341415b6480db7c626f2d127bf74a1c080e746244ab9ab', 16),
                    gmp_init('0x76226ab99b0013a0a20f95423d8f36c1b0749ba6c05e7d89938dac2e3802e81dbeb5a0a369bf5678a3c42bd313a560a993e679d265476cb34b71eaab60855154', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9377955b6381d96eeef7d9f5faba83c0abc5026cc929cdb01ed37cfe5b731dcd7eb5878e4e8c31e3ec444df60d23526dc16d34886c6c5e093df24c671c637d89', 16),
                    gmp_init('0x15195fcba41804891d8fef6e5d3dc267489ae16bcb3a0c31b20d6c8105e0121b47e457571cc86cb79a1e1d3485d95ebf027d374e3528e3e210d94d2fef48ba65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f256f921e765b0964c87e2fe35479cce2daef9beb3ce7e2b9be67af26a7d1573c4caf920a87b409b4b7afdca8b3bad9d7b47c7d0a747798fa3dce93288e3d45', 16),
                    gmp_init('0x66a353bba361f8221af7ab4265d74e8a260b527be100e36b438697546c93cbbc784beb736fc5563e4c46224162513021520d94fcb26d7e55cc7df9c9cd0a16d9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5805e9ed03217da4c00e125d421db12752e7a53833bb6658a908c478f6c266fdd039d8f69bdd5b19464bd040d507bcc216a9e774e0df59b02abc8c679383edbb', 16),
                    gmp_init('0x2a95a3d435651c6f3d6324b985344096853b325e3dca982422ee13cad6a2b81a6b6179446c08d67d77694019edeccaeb8024163affb28e876935731681792cda', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3faade8837727386c4258395c50db9a5a885fd67f7b768b20085803c8ca74cbc68ad423e6b13708bebef1c90a07c32c15c0f06bc68f6a0c3edce4d5d879ae6d5', 16),
                    gmp_init('0x4d6f036f29c144d99547bb8372af49423e6c7a91740c487c073b0c321efab617aa1dd9947174522b2698af04c1fde1c62d1274898eea4cd62afb597b144bee53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87702a5c21d57a18956dab9bc87858dde4d0d507331bf58ec592f0d3cca976804a5c058ef1b7a9b5bf7183b755791a3be1eda45204a01b5cdce506124e2d7e1b', 16),
                    gmp_init('0x1288c07c6d17f7c406304f9bc207698f6677efb69234ea23df0a46027cf57a3e8d53d49049e7c0030004c32e03e4a7da0fd74d15f8cf117174322817915674d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x336f93105068054937615d051050752504e4a0b723c3b8a1dd894fff2190f7bf4a229c9b9db5c37662da67946274c7d5640050828e12332a5336a61baba085f4', 16),
                    gmp_init('0x37e5dacb80428fea8b2d6debd71a9e6d9f918a52107d626e1c8019d5e3ade5b387cbe84b3c6d3a1311890592860a2d5736c661b26ec2dd086ff1d612d872f6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ca26991b3d4873067737b26a470c54bdc05d9d8f41d88752fcebd7d48181b85f5b7d92a3f386be71465f774590d6adb827c27f80a589f4be8ca62009ff24b3a', 16),
                    gmp_init('0x1963a06eb037be7ba134416b6e693f1a832e7a01d6fb74b2e41d0ec4c5cda317f045af3b3c3974f40db5a86f0e1dbeeccfeac210472d3c5fca104cda1d866fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4820ee533d169981c9af60626b12ed2172e7561534760f1f648e173927bc7ed265de2d6bafd95f7736495ff4acfeff577efc9586b753c5884f362cdaed26a742', 16),
                    gmp_init('0x625c4db2b240e05b055d780d363c6ce8dfc03ee0003dff64c51e61f6b44aad7f33f300a37720917ab8f91ad0cb026506c358dfd3b5c4f6a665d07e70311356bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x989cde1a18e4ce0adb67d3f9f999d6223ad5981105b6769c164bc6d4d7206243fe426fd2a257ef942c9d8e93850a7206eac2c30a6ea674ee142294917966b9af', 16),
                    gmp_init('0x70765b22c42eb75d04e54c6a2830681bba88ff7f8f6024dd7edec23c2ebb8a069836b37c38c0a467900ad564bace22402c40514bedbe4b5acee6b6daa148cc14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ba6ed3128103c17cc5826cf7a3a34cdcd6d85a9a4f2030e0549c8e60cc7d28efc1b7f98d6c22abd3017012018971c7e970aba494cc7e6ffc7d66f6545c78ac6', 16),
                    gmp_init('0x6a5f8ab6493b73e2735314fcc08149b8bb3902cd239da377c3b9e55a03a6fd4543d68ef4745504b5394ad6bf6bf7dc4fe763f701fef7190d5db65d6b39361cab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbce6b6733053c219fef937532356f275880b2af06ca6309d143fce6058b0c543a4f1162b8713c3d5b86ff9a3c9c53af4e50aaa87b061f20d766470445536437', 16),
                    gmp_init('0x23dcaf5006967f2a1c150bbd814ed9a1ea6cbebfb79cc23a12417b0117dbca854b9022987fac820d2c41e5ef6795f72a38115b20b4d3f96d30b52d804f370031', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b3117c796d88099297cd043282392390f9b559c49e86069aca7a4d9d2cc2f2a72bebc60b64e0264db11ddf0922eb4f8fe7fa1ab8de3e2887625f04e32753aa0', 16),
                    gmp_init('0x26b7e89827e1acb2ef384ee39bb24e025e96753bcc66bb743b280a1b50c80f0a895506896d67f8c3e58c6b88897afb19aa482a91838189a67f535c634e3ece86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e2365afcee852cc04325d6a1a341fceedbd8372fa76aa589990a22c9c1386ab6342d7b39a86b6a05bcf2c81dcd01adb48259a1be53a0d835a8c182b232b7cd4', 16),
                    gmp_init('0xa12eea165a9551eba739ae7bc88ba5df544fd5b4f331bb59a8a3f1ef2fd37c7f384aeb87e864b30525a79f618fd3910e96aab9725a1647c77e8326f3e0a5596f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a9d0496816458dd11522c01d4655bdbdb7b33ca10def585da69a7ff6451deb8ae176ea89df306a543827890ed85f13cdde112e464b116c7bfd31028142b1baf', 16),
                    gmp_init('0x4efa34df24f1ebd258bba2003bfb17c88b3721f7ec50a8015a5f4098cc759f6cb615208aec936b689fc4d350645a38b525c4b94403a9596874c155c3fb663aec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4599c35250ecf5272e1b8ede61d99de108bbf5bba1d8d6d1611e527fdce429df79697d6eb63fe0cfb593f8427307c1a9e7a44059a476db8bb00cd8a5f58c0565', 16),
                    gmp_init('0x6be322afd8dd37cfe1d7ce70a3bfa93adffc59d82812d14ef836e0d99002a5250e723f1b9a398522e51b2f71209d6a7c97b26af7f17889d408f4f1effa820ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4039bcec56f982ddbeded0ae5705db8d225c2e3eafb43d96c8e068cffab52d8f6cf5efb5584282c7f1be737b99fa1b9c316b43144aa291d5f0045c73d35529ac', 16),
                    gmp_init('0x9fdf84cc762e186dec74699472df57673baf29e0e45b751c60de60284ab7bbe2822b05e6379acadefafe7b5d3c1a9d5b32655e3886cd3ba90d7b66990cb59a29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97c2977bd55886e771eca4c2900ac44212d9392c9c022abd9c55c840601ca6fe0240bca1c9f604c2ad34ff230af542e855c1f79be71a2d7224b7368929f99f4c', 16),
                    gmp_init('0x2700fb36f5b5754171098c0a6de0495253486ee998ec6d45b9f7a9954afb19b4b093a1faebcc5db2e898f7ad8576736d7260b0fab8654511b5708ec020e8a42', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1d1ba5adfd71c2cb100359ecaf0961b2c90a3cb02b0b004340c31f6b03d30b06acfab7afabdc29f13f38ded5831f72af758a195bf2d97f80e1440567fa8bf914', 16),
                    gmp_init('0x8af7b3179369d8b6167ea796702961cd1ea75c1d6663c21450a6056d0e088d216f47ce6f804d65df1bc8c45cfeb89a63e1efa7a3c5b07b8deb15ae91b1fc83f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ed84c6f1cf062136297dc465127d636ff70a63a12ed380ced8750b24048c026cfd482746a933825044a812ab31a19f74add466b32da4888d264c16f40d8a701', 16),
                    gmp_init('0x54af04e9733c4290c43e304c5c0481633a27b36791f5c1e1494ce3c24de5d7eab07dbde0bacad9f83468fc089fa475d3715bf9057997c66aaaafcf8e102b8822', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a20f047df67f5beeb9cf0db8865036eaf1167e43bb0f0588722379b6a916404cd8061d4bc25c112667b02d31e895ab3d3d11c760115dc9743112a111de2ed25', 16),
                    gmp_init('0xa79157bfa69154639aa2342773a20351f0b439ff25b30970d4d714ad0a14dc5442c084645c4f8cee71c7432833ac5bb25d97c8c26bb12d13012a6c05692dc97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa72eac0225b8f9b7b9efce95c34adcdebba4485117404d8a5639003413dab9aa2da43e059e536e881f92e99806a26b3d417e39db0e622165cda1c10a59873475', 16),
                    gmp_init('0x56d01f09927a9b6e16151a6d410ac450b69b3c03214971308d96a4690f2e77a9bba08562355341c2d42d476b520eda3ddc3a6bdfcfae993c74260830317209a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x908182cd431e0bd781b25a7fc79fddf141031a6b525dc61288bf7f84711ae50be60c63fd53c198098e310a85c5bc039cf90b32e8a0c1c9a71591da93a868b989', 16),
                    gmp_init('0x740f8d60ffabfd109a1553e2db3eff83998fa82321ea6528c893d5610f34134095571d4f5101f8be96d7b5077a380c0910fcbedc7e08d62e745a420a84b1a443', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b2145e387d758afa6b63756a7b029a42266abe20ab16548b4a43514dfaf296448a20103c96ab2ec4675aa7b5219f9d603f4e9babded9ee4649c0c687e5f7dd7', 16),
                    gmp_init('0xb141a06752ed2335e387221a63fa1d1f0f0a46a05a1f2d8e2ee08d5da4e31eba0b1e25edfba6844f227199a641a9bf3e2be360790739ea925c80e7df2186287', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x239e3873f8b73705d260bc075ccfe1666bcd0eb9a3b7b9f9f3ff1e68bf3ff21dde6eaa91ad7c4edc2e41fa82b2798c1c737febaecdda0134ad4de03e92362949', 16),
                    gmp_init('0xa1acac26acb9e367495a4d228b74780eac43d88476d099e6aa2b921d85009033039992688e8f614f8c56e55665f1be363c1c5bd2639a882211a0498263b2fe0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e2d04c3cd5aac9e9dfb88a0158e1faf1760a1795812c9b43bf607eaf9455f5ba90dea8751094eb014bc28362e15ae52f7a2b752eb88897340bb07504cc110c1', 16),
                    gmp_init('0x6de7db1de09277888a975cb677912da906b2a8df980ff2a6654421a3e7dc10b212ba6443cb68a1a693f46e7332a66b9117bad935b55481f75bc55f31e7cae614', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46082c3ef67dede6c14fa139773871792fd1a979dd67e2dc383a207a31de06b60a0968552d4210ab6e16e681bbff3de283e46fefa300bd528ce9152708de7f8d', 16),
                    gmp_init('0x21290c2c3f2495d6a5890f5fe598b7814df9b111838d62e62f313294280ee361e131ef7021bc241bc641df70ba9a49bf2a6126c60bae43e26227c1fb891c5efe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a51cdf83906006cfc98db5528e81286703afe6b5db6a0feab91469d99dca7ceeae065856447a4ec62cf35a4fed13d2f9486f7b8af93837dd58018948019d7c2', 16),
                    gmp_init('0x858231c0fc0aeadfe584f8f647327fd1fbec3b91fe03597ce38900a3086095476f4796bbcb7293594e25cc957aa8bf7a6d3b18da7513a280505815cdf1697f7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15d282a4c53dd53ff624b947b5a3d6e23b89d5b00164760b6f8f2613cafdee96f26fe79b0a57509f64040fb3d3e90d4280dedffad2d3116dc758dea68ecf4396', 16),
                    gmp_init('0x14575752c84230744ef058434aa7064ccd40542df06ab6ade8ebdcec7f6cfb60c4fa2c0b2695657e49282d8fcf0c06575eff1c368d24b8c9215945774db1ed53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c3c3b6efcc43c72171c5c4f9fe9be25e9aa7e2967198a6d087aa7c1ac41a33ab45ff7655db5243e6d54f8fce871fe7d59b9fe61cadb35862479ed4c4ac8b2fc', 16),
                    gmp_init('0x323ea13e84522ef32b002a1bc302295851e8ed23d3e77700780f9bf47757f0d2360ffdb72383c77e08158ebb6dd6a626127bbfd134d93b23f91c94910018c3c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x942d5c02ae6f4d38fa3f11a096c712937148d2a87254e0fcd7f42d852b27d9e51187317ac7bdd58305dba86dc6bfe33cff16a9a28077bd42d1182891615d58b9', 16),
                    gmp_init('0x946b79606c56e375de6b52c4412129f7a4174dbef4b3b915d387e4d8a690dadeca04539727f137b38eecb14afbcf2ccaf54ae1d9a725013cc377ae6d1384f91f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f0a0b3c25ec98b934faf0c602827bd50d14ac26b16471c6daa0748113e2b13ccefed6db97eb924c1a7af5b07dd1b732241e5d64ef4f50dc7328c205e7433c8d', 16),
                    gmp_init('0xa27e6453bd88c2f4cd491b06b763bd9dcf267a90008d1636d8a0b28696993f14ab15ae9373a7bf7485bd9c21390e2e6c93964e58979b1e21f79bad354a272d59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8c56b02a0c3c09620d2909e5c3d47a53dacff6f623a0ffda313176f011f30f0146a419b601984a55f700a81bef708598c1bb60425adcf6b54c78517503da32c', 16),
                    gmp_init('0x6d3887fce3dce13f662a51e9d4e3f61c4c809066bf9faf2be6dee369415fda58e19c58c44db54d7e9d917b9822cae91d5c2b5107885471e72776cd137d274985', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4475f251f13e87fd836807ace9968c6539ec52d49181fba5149810bc44a77096b14e9feddc36253e1a38dabe3c40890ab6b4b1b08c30b21d3a0a49721b03705a', 16),
                    gmp_init('0x4681eb2ff33589db08aba4e4c09447c306290a129ef69e2ff26a2a00594b0608025e1a83eb35c4ca5baa2d7d4e2335e31c7a537c118a544afe4a2017e527b6a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x804d069c91ee01c376190158b92a19ac4a5da98aee9315ab1a6cd75e7bfd750aae45cbfef76d025e53fb948f805502b90618dd533afde318c728fc44ec3af822', 16),
                    gmp_init('0x61f06e87cf7af7c15d787176dcc971016ad522b078180c885ff40e0aaf53b9a8cffa60ac8c8d74549fec6d1b2a7910061828eeae4e5e6f719100f40ef9ce4c13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ffcc34d41f966bb5e21e37aaee447d06e307412302a54b43fc859519bd372ee5e283ef1663e2689b943fafb2464f7458b18ce324d9f0f70200a34172bb504cc', 16),
                    gmp_init('0x7a8fa0f009d7cc578aacc44cc81019fa410ee7c8fea110ac279bd9a05ba1085bdd4018105d04649ac2e50b85e11c3d344fa6cd10a87d987cec9e2288d78cb74a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1633580644de4ce3e9b3c66d06b4f4f7eb1ae839d392be468262dd13787416c9daf5402a299f60ca71f5240d6aa0850e2570f017c2bce4ba318e0a5bbefbc210', 16),
                    gmp_init('0x6147c2237d686aba0a534bfae7cc5be559ffdb4e80f49c69f106dbcaba14bd9322d7c474d1161352449f382392ab5c817c565fdcd8d9610a1ac44d153f4d57c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92e272a4c7183fa2ea33a04d0b1d87b711c2f706ff522df776267863e6dfbe2497e76b511d21b30f78acc6b4d2e81cf45e0914b751c12f457b8b4e74880ae7de', 16),
                    gmp_init('0x69c8d9783a4c90249d652e38ccaa062c7ba047e115007ee3988e00578c5b5b4b4887512e7a4e5a9cffc2a0a4e92541054fdc48281a01211c889aa63fef549c9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8068adaaef17f3e3c1ade3259870704217acd30f18d2ca58616e8314d36ba98947671195d2870733a573bfb60bcff648ecd7ee56f33f589c168a600528097e2c', 16),
                    gmp_init('0x4fad2e432753014153c2630fb7889af3904cd0fc5c846c01d21d520060465b0ade387d7cb40aa84672af8ec359fc386132e259b479ab43007b85b61faffee986', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94e0c2530bf8f9840ba2806fe58387baf8c9ccd338b7b729a3e90a3bc341cd215c08525ce8b209327ccb5bea9b7d856b0006748a28851be707a2bb928f987ec0', 16),
                    gmp_init('0x4f460a1b541f0c89bd1b7fab10fe6952a19a62750973bbfba9ac5f722d1e84a705ca56d2ec32203389f2d3fa472634dddc6f6a107285737459ce3e009b818e23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69b8c66a427b28249ef75bd20386bf106825ebfcab42e0c6ef41f9a4fe7a5938d114337b7fc1e1285c2613c962f55712f5459b1df90f7f09d8475467234fbdb0', 16),
                    gmp_init('0xa691057271d9998854d4c93d8198ee4da0725e59c8c50173e09fa278f8762e2e5fa46513898d6910c7c456f89998a5dbfb497afe033f315a22ea35d917af5710', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67690a60589b842834d268e28530504dff71eec1fca9252f2c9e6ec1c282ea72095d2be6241e695c3a277deb5e46dc22bb990f472ac22c08f3048595b356b6ff', 16),
                    gmp_init('0x2aad0302cc496f4cfea474d2e8a940a1c31a04a8b9e210999eb9850ec963b7305fc327e4aa48257a83b28707cc5ef358f20357d578287015e72d63dd7595dfd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a38acd72057daa7ddffd6d3560212b1ac5a447115854ef07f158c1b051dd01962585a4d3426bff757e61317c1a86e5fc1efc9b3692a3f32462199fe9f2c4a5d', 16),
                    gmp_init('0x137a2c79d25926f32356c8fb8740459f23668cc64df4d9b0de064e7c244d4c42f5c688d98fa479fe0ca8f612dae146025e6f998cbf3b7df6a6c8c8e1296e098b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa538f0ea44d0009b7dd99c15d0273ae48439ef6e099c19f8195a18b74682ee4bf105e2b2694862ddc92e70664282b39342f0a803ee9e502a8458f18111348d41', 16),
                    gmp_init('0x20f529748095c8a3e92be6a06f71bf5a273031cba40e9f90d7f2b1267213b418a6f0d010d0b3a1625233716a46a56aae603f3b57200cd6ecd7607493d51a5f03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4de00025663e9ee393afae077e86b8860a65971b31001d0ecd04b165dfdde636c170762fea4e8812729afdd6e98c7c244cca284611d5c6701bdc7ede6add801', 16),
                    gmp_init('0x7bfd5cd4808d39a7eeed227dab8391459ac9c003746db57310e0e8ce351f977d26932a1f7a552bb8142e945437e26244af6d9a7224eeaa158b4122295e8f31e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9694cf37658daceefa308be72948f59631cc161fee8498ba6d7222b161451a8962fdfbcc280868d71569a66902a8222ab3054fe58c5ac6beeca2667880b6c9f8', 16),
                    gmp_init('0x8e8800482381d786533ee0f35cdffad3c34190af507c28677a7ea5295623a67a6a50900444607797e25992f3947da335293bbdeba7f5c6e26a66160791098dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa63e5e1c2c49bfa46227e72f3c9bfd55efa669fa77b4d95ed908108692f21be7354c0485e59f66142eb9a90a06ed346624e15dff0cd661a32d57ed9e3e9a340e', 16),
                    gmp_init('0x92e1fcd14627be730103d5afdb3c547c09782cef3ec8eda13128c01b3a9f0a33527ebb5a55d1296c2285f7370e8f9d886cacf707950603d8f687ba7e1edddb5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e28f5f5df97a1d395017234cae5ca177dd0193fda027af896741774aa16becd51e756a7468ac77f701c62843f188b10e265732e87984f66d33f38eea5b3fac9', 16),
                    gmp_init('0x6d9805b89b4589044482c1e19f78c1cc8a9ca0b4c1fc291f5a930ba975df5aa862856d8662da347f0e43a8d010b8ba96a1ec568e1225d8a7d0f2c867048e957', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb89c60edff13613055a19fd7881c26585a6a1db9703559032f3d1fd6b50be821e30391dcafe3efa9577d170907f0cf983add207d2cd482d0e778c5bba66c560', 16),
                    gmp_init('0x8f09648497b76721c4b05f39d211ad81c2f8bbbca9c3fe801a1d553e2589524efbd42f7ba0adb3fc372aa4e3ccd09e1082d0044c3fb2bc6f392cff2c16d8f2cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa52a578dafbd549c061a9839ff74c5c8e7e7d524111dee4e174eea1fab73ed97f43081452882f03dcbd7f7f4b3083dd6fb5307bc96a0e76912ecd608065cca0b', 16),
                    gmp_init('0x6991f0c7f592319f7ffe0c454bc4122107159ad46240c5d5d83bcf9fb16330a767d0dd6f13dce70cb3d9ec1f6c18677af91be00f283fe78e4011c0b31da50a14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72927b11192ecb04e6ddebfd9beaa321b65dc29c7bb737a7afbb78621a294ff679ed047754f5b216a3ca59d4a53f16ecb77a3095b301ced58e9831b6b353d2f6', 16),
                    gmp_init('0x61c15f194348dae2236ec0e208513bc85b67e9987ada43dee56d1c09f28907970820829cab00bbf9657c9c15e3a1770fd2037d67b2cb0d50afb9032b4ba2dec9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8717d3df354ff4c84bd70f702a948d2d13641467d806620a95c1cea21f7df8153aa8918bca2554962b6c4b738b7fd3fd48efcfaf348d77990251ef084fff8306', 16),
                    gmp_init('0x8355f193eb118eb630e667ab1d5c94eaffe2cf86e37ec22747a52dc779ee220e56c87e41d1788d6439b2df3faff990073ca1be87c76be1c5f8099e2218642f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30b4b2e092a6fd4da7d6897ffae42653033baf15d29d172198f56d1e0a969b63d9f3a309787b249d80badc1f0b780879e3ce614d4cbc7303fa2d25ed19631a9a', 16),
                    gmp_init('0x953f39d02a57407b353980adfffa21627fd9dcbee55ef35ddfe68d716cbd86776300b624ccaed41e8023f1695fc1f53665d542726fc80ca085aaafde7f13bef3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89be6c5a88c10654c430be29d3ac4fe79ddd71eae684bc42ec9dda7fd05b03736a327157b39749c5d7b80d81f22af1e90f9da8e528e163eb7947ab1bb60fd368', 16),
                    gmp_init('0x23a4f00624cfeef268910b17022a7c895fa3c37f69bfd251f0005d0f29c0c7b8c54f6ed5246fb4a2893f87036ee13f83afe024c5ae3c5e487076d5a37529c879', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a8b41f7c52cd7e8af820358d7f2d513d3267f92810a527c04dc7cc332705811d3ba448992f88c0b3bbbf33fdc14f8d4085903e53966dcd1649ac293c0a88e7', 16),
                    gmp_init('0x183e980e8756dfa1700245ac6fd49ace28d14f65bd70bba53000bfdf39f1635183bfb315743c25ad27fcec3e6c677b94017361e4ceeab4dee7e27f12aef7c972', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9733f1da471449a4a9a128cf198721ef2712df4a145f011d2af5d8ef5037b91d4c2f23c9f5ee22fe0046751453814a5566cf6223cf3e53211004bbe46814a90b', 16),
                    gmp_init('0x92d3e3f0be981d224d83b2ad73ba2dd9bf376f3d5aac74041d281a04e7fd11f156cfb0bf3eb505772e71c271452f9d6e506a91e8d496e26fe043c90cf0251be1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x801b01c1053e5bae0b21b6d67b4eb6dfc811e827397119b838ec27023e0a3671f26bbe6b5157a61e0e4887e8df77f60e123e34c89049c614cfa4707f3d911f73', 16),
                    gmp_init('0x93a49a56ba856b071a9c8c576624758a6a9ffe4a1552b96ffdea7d6b39a7f8a777c07d13df4a3ee6031b56d914217e0bace5250a2f5e37504a57226291d02a7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7af18126f65d5980db52f8ab2d8d803e97e2d458b75b275b7760996735d5eed8308593acd03a57b395c1a2bd3fda76c98d7a28fa573e0cf3c00ec0e5dd31f6c', 16),
                    gmp_init('0x4ba5d4e5831399af4e9338463e7f0ceffbbc50c18f49fdf81dc52edad2bd879d68851cff8c4271647e510dd892ffbad8437e7a3152762ff313486eb7291c6a5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3837e16daaa62f82ff41fd2a2ac8915a29cf7fbf2fb717dec1faecf4130ece7b457fd376b1950c294e5f51e89d28da5f5a7a65c0ce0f66c80a48e451c4824c16', 16),
                    gmp_init('0x14c3167edf9d466d6b51361d5a7697b6b6d2aa861c905741e9dd4d608acfaa23658d71abd37a83b734ca7015b000594df67b731f5df6f69f01bb4e612e3681d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f352070e9021aa7e270c13d9bc3eea34615d40cc31d22ce4951649454868df13e90fd0c4bca0387bc6da97654ee5a6fde2ff98ec60a5f49398f85bf3da76169', 16),
                    gmp_init('0x24cfa97be4478c31f73465faad7777209981cc4e85769198daad77e0c037f15c9bb48069e8b3ed65ae96b22c2020519f6ac674f3afd9e059a12ea64abb647e29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bb4e6fb9d263b289f487664dfeedebb64a2d69da75b44e7427dba421bccf87d1066bbbd5a7fed8e29a1be04fcb89743de927d03221a650f71b8de6b5c3446d3', 16),
                    gmp_init('0x466ad0e7a00de4db8fd1a4fae8195223870d7fb71c5d328206cfcdc59cc3f2fdcb2c6ac3f8c60b5a2298ced6ed31f6380f780145784feb03337222cfa136c052', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74a86a07d29c3e85f0048b05981deb6724e0adeef243a4761b129068bb63f9f8899693cb060f5be1603c07c2c4c0625f1cce54da00875b2e381923f1132197ef', 16),
                    gmp_init('0x42c811b9dc26ac42a44c2e44e955b5ccd7d4d55d84147c415940bd6c02ef07e3ec5bfbe30d5c988ed237a05002c7682c5a2acc76256388949823c6853cd1c4ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43e4e0a182fe42086a64b95f01076635ab7c4e858ee7b7b659329ae98923801c2f6ac639914495bc4cf53cb0daf9bf41a1516b3b68e77ce9c281e2fb427af7b8', 16),
                    gmp_init('0x6394e3e2e3c302d2036531129ca65456b79b79cccf473ba5a4142230bd0dcbd8b8591cae32f7dab871f7ec20cc0ecc465c28d199dc6e91a392c4b19482acc4dd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x631bdb4f09c98450b314edd41482d20f773cc26e57b95d1b109099af53190497c0e5527ef9ce3ef6632b7acec32b319b7b0c3424a92874182e9559a63e3a1255', 16),
                    gmp_init('0x51398ad6a2824b1ca0a9c169963108cca9bdf138435592c9c635c75e77ad42e6fedb7be60a3e3b06a21014f645ad3431c1b8539dc6d2ab99102c723ba98bb83f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10c54b0c93116fff491ead25ca02537acfb91f5dd5f58913d6cb3d53f79a20f7eb314989f72e0e50022589c73f880ffc73758133dc59701b2c4bd31f7e7d758', 16),
                    gmp_init('0xa3c9635dbff08dbe79762fa12563561ff69bbc2bafa2bd08bf27a3388a94b940dd5737c28d54e9bec48afab4c5e086b72aacb566035482a39b71742a64f158e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6160be4b07a6e0d50e292756728ea33056318c3ca285d3ffe7a4c26fda7d6e32f9dfd5be84fc0b2b6ab58ba501ff1e1491b5b0ac339e0ed1e3e9f002c421477a', 16),
                    gmp_init('0x31b11e8ee6d7bfb53871947ed0d8b57746dbfc18a4d4c38eec0ad5f73ee01840cf14d81012090137ec38c4504a674a492ee6101d11b146cf2e60d2ae573f27b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74570a22d4f058403716b8ec71752f55e6258d26414b2a0359f5fc76166e2949f572d1a9207b473aad426aa2c1e475030466e560b9c6ca9ec778056639897460', 16),
                    gmp_init('0x4ef64dcfcd80a64d41e5009a42eba9f7db97369eeb6d2169daf4ce8ab8a3daac3e92b7487750279a8167e32e70d4c5dc01667ef3a239e44136830191519a29cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c126ce8a6478e33c7b2d381d2123c853e7da9e97e6f1f0648dac979c637628521cedd1cb9ed178a87055f162d6f64db3c74b2005ae5d6b4546be481c21a958f', 16),
                    gmp_init('0x7d45c79b111887b4d37ca9ec92a0538f3e72d53a1e69cd18152f1ac7775cae522103528a9b68e690cda113489f29e68f08b1f08f43acb48e59dee581c0a7ed17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c61b25d293fa5e0cc1448df357c8b175a61b0d49f6436bbffd44297fe26e0d22028e627c9d54119b254f1eb6407854d7c6fe922173ee4fc1634c0ddd1005a5b', 16),
                    gmp_init('0x85c44712865906549bfa0a3f789ccf8857b4a49e100af24f1f002573cc379ee632327bf2cfd8c563b66391c62a91dc9dd13788082d9c71debd98feb06c77bbba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7eda62114b44e89c4905cc7a35199196b7d91d722c2799063eba14989cf0b5b07cc398b7f51c26826fd1c994d727e690455534ea279f5c9cc524e1f471bd928c', 16),
                    gmp_init('0x84a2ab5ae03811a5f9297bdc4fc65c80fd0c2fce933dcdf6fd6259474552c73b7f88f4d5383f3d1591ed7e8035d86f58076e43a2bb4ea08f8ba2f18bb5edd688', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721d4a2530ff257e9bb3c3c156a0c0f9f7af2bdb43fe65a4ec3edbe82497dcfe2cc688f5a51e7a83a1a306b073103d8fabd052eb10b9942803e2e3efa52886a2', 16),
                    gmp_init('0x272cc66ec9a14fdb4e90b59a024fed08f2d529ff71be29f035f5c7b918775ef79bae7f9133743d0285a50296e0cc44062847567dcb382e37ffff878b6affb77c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8204e5f6a1d9592ba8033373001e2cff258ec19784172d792d8ab77f087eb94e06ee664a073a36892508692825ff3ad9b7a9e8916d42253db761b3756255280b', 16),
                    gmp_init('0xaac50f2cf8aeec49c26217c02c968e4fcb07825c6537b6b172c9df9e5de7fd0ed0e0440383c9dacf115c06687adb6b8c48e5152b009b93d2b230a0f044c0fb46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x924224a50083568200104af7d2d2b2cce4a81e5540431e21aa352ff7183b3729674c86c24f4dc35e7491ac739a47d41511ea537bd9eca6fcc3aa27d922bccd24', 16),
                    gmp_init('0x9253692013bda56dd9633dff2734fa5aab6889fb17ab246f7eb0f9833b02f0d4b4bab11be64694d332ea03676cc54f0935f7f637602e214280f077f95ee8731f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ab16a36359471e258221fb0dd1a61f4a9d3e91441720045f87144e725ccbbfb466745a76fd4a8bb9fb4165e84281cdebf43ba03adf7c8ee12ba68979a0da6d7', 16),
                    gmp_init('0x8b51c47acadf99c9dd3ac370bdb407eb04d661979e27c4d5c099184f80c2c1525018209b609524e5ccf7cfba761d387fa6addabe6e4c806920845aa674d81617', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e729f022a3d6a9205080f9dd56345a153f60c13cd3e48252ec002d5862a1155d9cfd4c4655cdff75db1c55a557db70f3a0a1ce92503c285b0542e10a176a89b', 16),
                    gmp_init('0x9d43e220d277df9bb191a0047be39a97389c8d828c25a991efe653791971838a2b5831a51cac3608f0d779975dd94d07bd83729e1fb524d2bdfa4ca42fde73d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cc2cabad4406d5fc2c9ac0217883d2231c6b18124af3f53d86f1ecfb75e9f10d2cbb713ff554db10b2bb5375c3af87e72c8feee32de2649fda51c93c0faf003', 16),
                    gmp_init('0x59b2289e4b94d67a658ddcb58daf26b5513b847378fde1ee209f28b64169c3c7e14decbd3f738e799f161c90ed1e6397d6e7a60f467bb38fe7c3dab4dc70eb67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa795f16034fa14a7cf8cae87c498ed970c13803e4e96420e4c9f1ee9586f35ecace8d90239a9a0367e9dd93ef42922756268a09379df1c58875081698893304', 16),
                    gmp_init('0xa047f97952a40546fb8c83f049d0d716dc684b19c9c2a8905f4551c239d2d83c8525a2fdcab2495a55950e57d73b04c682bcab2421fa1f18fac7b5b3cc3fbaba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54af001b579f2bfe39b75e640a13ddf0787219de45d2507cfaba7fb78a74374bc2bb86a90713277f0befbbd986223fd9d2a7a0757ff7f34eb644c0af69b79874', 16),
                    gmp_init('0x7fcd97e8068b114531294bed5a1500cc5a72ff75b38c7b6b9108fc5bd7d49b18d719ca2b85bcfaf04db8a16324d77d0f506d186501f95fb7cac5cdc18ef16f6b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x68f71b21cd356186994e68b20ca511a14a02a8f58cf436d3e852e890e0fd31f3e2914eb2028ed45d7324234fa14a2b7a8d25d1a1bff000005c228cecf0b48f4c', 16),
                    gmp_init('0x3a33097c51a1fae62c53625214cdb4f9782acf0b1d675505c15d5db8149d3a1b05ff714454264b5061ed041bc391482afba71fdec12c7be7084f22edd1e6c5f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6688001f4c9d078ea07d63b918192627142cf7e251f621804e236ec8cfa981917a66fb3b51bf2239f8f4caf61fc7d6862f7d71564fdcd80817eada5dbb20a4e8', 16),
                    gmp_init('0x2bda5f21d261989a3df2d874431377704b0a400f1380db903c451575ba09383d1420b213b612a2f5ddd6b70bc44637d45fca134231f7e1d7b06398595de1753f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c5896a4f4efb3e62159a80386b96588f1f4ebb3719df522567d453e89cba4e4ed9ddf414da3265d6cb94bc00989f7fe866afc0c47c7b73ff8fcb9488f34b602', 16),
                    gmp_init('0x3b3e410d5e7f99a5ed074830c7ca41d9e3feb44f8b54b787544ec76946e4ab8cc1da1dd9e39942e882f04c33a7b9776ed9ecfb0aa62d3d288b1d8d9a7c7c8675', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2769def6a213c607891006b53b89061efd58b05b8c55d87ce88d4abb9bf9e52f017b7859a2a3745945598b840fe181dff4b25c4d894b0f90f9938c68645e8aeb', 16),
                    gmp_init('0x54427ccb25e16f6205c4f5660a74f16989658358c0f3b3febb93f0bb6f6439bafbff869b499b8f9e9165892b841c7ddfa75cd14315f37c48d6cba96f22d3db93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e7988ef39ecae061e9b3c00142f27a818aaaa8e220937502b8a44ee760ccf1eb13f959f4132451dcba4289338578c91320494808246a7f8410477c858ab3fa4', 16),
                    gmp_init('0x5b72bbcdf27713f3d291611a20fe090cfc4563bca1c47bcdd0c0c3151793a082d0e0df55e2ff9aa9c1679853ee844d2491e4d5c0ec66ed0266e4402a3e8bd538', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52d79ac8e3339ce3add5d6e9ca62a23f1799d174750ee25a95d7add5bd9c5a8d500ff606aab5e378e41bbb1b84b2eb983499bf9b1ba8db50ab2afe9168e072b8', 16),
                    gmp_init('0x79cdc18ac7abf7ed3e5193d9655617be9be6901962acad945ce7367a843afc90e38efbc1d548ee3329f7572c06fdbdcdc53541e86b77746dd9184a4976cbdd2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x950a3078f49ca03e3b5717ff38b0c874726320b2c79fc15442ee7cc95a1dda422491944b07bdb384a08c8ff1f7787ca0a897361bc673e4884e29f588c6548bd2', 16),
                    gmp_init('0x8a50cbc93d7abba81e06784145c9b65d04049f1e9a14466b63b8e6c9843de07dab5ea710ab7349adcb15d0ce38725879d9315c7f718f08461a06252264854ac3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70bbb389ad291c2851c2d8d6f2f51d64acedb405692557e075eaad4af33ef06969bbb1834e1d4f3c550bd8e99f7b0cc4f87f65746b3cb23a14ca878155dffd22', 16),
                    gmp_init('0x460aac3ab6667667100434db2f4c6fc99701d0f929c835e335b043f2ebbf05d92aaff128ad4265134574890e48d08114c375ec28e45e4d0bdcaab7030cfdff2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a7c52f6dc55cd75e8cefcc55f87c6f0d845ec29bdc78d3f8aee263c80a90da061f537613994d418e1b95e9c44c5e02b6845506aec0d7c5f4253a505820bdaca', 16),
                    gmp_init('0x64dd118f33bc89fe72581dd82eaf6d039b3248ae70733e61cb67b1752c0d555162500f7b97760a97172de10d289f5cfcc932a6f9163f2d2f814a9281f55b4833', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x632c93e1a5d672db4508337570370b90cb49ab72c5f6f225b789f208719692f57dcbd188a974ed661447706307bf6cf43110324240ab346d1703c5c4ef31526', 16),
                    gmp_init('0x3ec29a4df5a5ece45b59cb201db8a41617baffca6967101d2986ae59662617668a769098d6eb1623be733d20cc13d886120a23bb1ced467386c45e232cd5cc24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5155fb694fab88170f8059c1ea9d4bae2520cac7f1a7bf8c7312e79251abbbd93fca378f6c9806a50e3a0e2fa7fe053df47d990d11073f3c35b3f48ffc639e41', 16),
                    gmp_init('0x6771a20b2d697ab611158c3f1fde5a53b4dd5d9ae418ded93dd579a8217ed88ff6a707d04f59676aab448e7d290c1f779bfbf21ac3b9d9d8252cfdcd750213c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x820e0175f508bf4f34f2a42469c0e8267cfcc1df281aaf62840eac008a268d3d53d35cf7735146df2e60ebf0305b48650df1d5109f17372367820886aa8d7c7b', 16),
                    gmp_init('0x6a1170d697bd678a74b0baadcc72aada47ca31a1866046c8e364098f6a13be0c453f079853a3c18913e2802d9f90bf71653dca0f84a37d04a91110e6991046f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5131eb5ed939c914dceae1ddb35ef425d3602c84d83c471338aec2f944859dfb5f768268cb3e5ff06f0ef3f7a6d31e4f332f3f45eb227b978987434d33361c6d', 16),
                    gmp_init('0xd3afe14b30605da3278dedb7e56f545b0a6760e1858c5350c8ec572d50119f6b8aa798b5b47cd54402a8a3b7f1d06c3230e3cf1e61013b2c1168dea2da31d55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb28dd90f3c5b110d645dadb49f806e6a0eb89490037385e0e82d64cd54a649f26ffaea164cc7528c5074a7149220d46c083ef9d8ea95fce1ee142205f62dad', 16),
                    gmp_init('0x3582f5277c0047c5e51df0c7ccad33c58985d2119fcce904b2eaab2fbb47fc9bbd98eeab704872e3f9b9c3d323a5dbfee054ddeb4f45922350d2a22bce14f88b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45116678db26aa0446bc86a048ba3965dfaf3e0e69062162f31d8d4b42f22e7b581000e476066e5de198e3dcb973d8847293e86100f785789925a03544d8381', 16),
                    gmp_init('0x82f97f7d12d8a8391a9c6a788c0106200fd893f2e59b3bc07c473bf0686173ab3d9cb292ac93305a1530e366467f986df47e6a8b5a9362127558233d8dba7654', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8963e822d4c9325d857cabf63e9452b27981da5bf587d631f27f6b089160e2e5f23ee7957db5fcb3522b3c1a024dde27e4e1bddd575e9e8d67263b560358d4dd', 16),
                    gmp_init('0x2fec2ee2a8c558362f2086b9965e44e5fd418a50bc2ae521aab3d89b40e5e8d2bfe119e611db734c9ab7f3ddec4e246d1186e4e86de28827668116e8b7f93919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x341e4c50f074870299959e8767321a331188f602452497423edf566984f9389b005c114f03c882351418cf2d000f58ef3cb0e8f9f20bad29056dd45139ec98dc', 16),
                    gmp_init('0x6784f61b0e8d95c42ce22c3b3cf73e6258b083fcdf6734fa3bc8ac273aefcb8d8189dbbe74dfd55c5abf18a28d64d1f6ca03f0e579050bbba025f9b9e6a5c18e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63a876580cfb96feff4125effd7d7fd72746e8cf8a6e717be1779ae1d1ba22c3d3c353f2303b92f0ab6b9eb0688372da3d10f846a0bc8fca7d828bee4f662be0', 16),
                    gmp_init('0x90049e5ee6223e6bfc57c3c7934e9f3e3fef037f3457fa852d14e50ad0bf2cf35da4e0cdf874349464b3bc63ecdeee67d8b420eda6dd8a070536d76c5dd1a9bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97ed744428dd56a9e0c6512821af1084b83608418abd4df509496b5d584bc8e8f29a06e8a89eed56c793b550227e5f82cbaec5557e25bdbf466165eabbd51469', 16),
                    gmp_init('0x333a8dae5e836500fb8b73e008378aedd986c60363efed17e728febb4bca72bd3ee41c6a8d9473a0e5db4b92ad3a2ae719fa353c3f9ff7c30c85b14ef6f1c85c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x131cf38b4ca00ac86092fe071d0ce192579a56d05ed9b98c54fd002f61688fecd07e25bb1a2c1586c574fb8dcd6b6b0995be6d9cc34b4efd97116e8edbeda420', 16),
                    gmp_init('0x1c3564a9ec92245c8e9312a3a2154ec69873aedeb7b6a0a3ef5bd5e4ced906ef6c1169feaa70841683a75c5b18b2a7d08c3da5068cbe64ecaf21de7c0b3406a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24e4f5013df61d71d27a5d26e67872cec47d8f9431352c35985d355371241e2af49d6ad2deff32a342607760e816b48114de69946fa224079ed9f1f1a57f3bce', 16),
                    gmp_init('0x65c5503f3368479b3ada2250f8c0aba57c5164a0ec1d9d235814ab79ec08ff0127ae644511493b6bc939ef4a6e8eea6153242d1db808f8e65b3c612cc1c18a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x339ecc5a838ab7bc19187d0eeff50beeeb10c27bdd4465f2198da4259c02d1d01ac1226f6ec2f3ddbd3d672ac1c15ed47ab758260aa79a2d26fc534dd3d7cb05', 16),
                    gmp_init('0x720ed39927b5ac99233156ebc224627dc18f38837addc7145b08e9b1af3130cede49a63d33c4c04b1896e33056746277088e44287a768fda60c46fcef421143', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183cf9346822517d07c753786d6d64324f65753517ca2bfb40d48fdef9c5b1e6e5007623fffc7971366048f9e4b5c3845bb3e923b47f6af13bb8b43e5172f205', 16),
                    gmp_init('0x4d1f8ff726a476212576d39c6e202c8ae47f2fde07f6a056466b9b0452c8089ce0db58277a3c481c592bed4c980ac31f4b4206817e4f0627356b99ba629f6ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x238197ffd5512e45f4bff041ddb8a64e3faf29504be759b4d730b287e1c95226b05a4267ee3b4f50f83d998d021e97e6051f1c4cd036efdad129ccf6bed0df4c', 16),
                    gmp_init('0x4c547ec36414951cf2c20b818181a86ac3e29160ef855702a17db2911c2d4c8db3969f53f6f9baab13128098741a1145ffd38b463201a226dfcfe87922036bbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x781dbf87b1a0fc9aa589c2ba7560a00fe8ba14f6f6ed1b2b35ce6fa5bbd74624bc2cf19bdcb190245d184823c4dd491b706bd39300b043ec65e5d8f6c8176577', 16),
                    gmp_init('0xa52e47d169f2826eda95343a1631230ed237f871b2bfa72782159b90019b44b60fa7ebb1c0aedd7b63d22a4f8748fb7e994f3b70940202154843551d6ee1165b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a84444255a4099d2d6653852e53dda5491d8ce980101fcbdf31ab2ea9c256ddd70e352da6285cc9054bd7f9c67bc50d36cbac7b89093f38bccd811dd1bff763', 16),
                    gmp_init('0x2a8b35db6aada863e6a2cec80ae1082306f514071a99fe4f45d8bf50651e60360bed61fddbd94005c5cc312a3ee6ae73c17af6184515e1a390ed6aebfc6b4e4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x498f0b96bd71fa5c4f246924ab7f087a260980c841d8c6082252d20ca940dfc32d5eec6ec9f9496726b707eb72a91a3deebbd8ac01415a0dbdf15e1f8251e024', 16),
                    gmp_init('0x9d4b83809ea533536a678abf2b5e4ab4234b5b561397fd4558b2e25a311ca46cc1e9130f40c50109483a3a252fd88431841a5ed5278e2fac7a23777005908b73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2858a261baecaf0c1f6db986a3314c66e51495fcc44fd385628feb7e380f29ba1c9b8512a47a4fed8d97e6b51b55c8a09e97dc481a3ba8222dd2a8a8b219b4bc', 16),
                    gmp_init('0x225b5ea3cd8f9d0dbfee457dbe49ab98fb4e3d186c9e3ffee9d4f31850005f8046cd301791540119aa1ef1136ede6bdd517933374ad3bdd110e940e0ae95bad0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78cd360d53deefbddb01ff8770a8461c1f421ce0684d25e12aec1f269ebe44ec24dd15fce223a689fc6f2a4f6ac2a47f5efcb8545894b93f2a83b52c45a2ae2c', 16),
                    gmp_init('0x372b552091df404c3539dcb0bffff1e7b26f4137406ddde12130834882571f384c804f9266bf4acb0b1bd8eb8b3b5a15a35711926559cfd53d7e3e3be65c0563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f1c0a8bb7815a4274899ae0a116b3280e08453ec31acf3b6cc7e6eab44c58621c7c4b23e23551fa459119e7d88d638f5f8b196760483492a153ab2e39b4fdc5', 16),
                    gmp_init('0x8f544e0157c58e90648b75c076a34d51c0e4284b31d47edf0cbd4559bc2a91dd8cf6e874b1ff0f2f073cd49798de0d1636b4b1c8deec8c6d74b381d5c0ad2a41', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x65cc5ca151804fcc0833d23312a25dad0791787ae4a1ba8c3a61b5a7f2fcd374e3f98aefb55d299c84382fe2ff5a5329fe88d0f0e503503c993883be6174743f', 16),
                    gmp_init('0x6b1756037dd07dc494bce2df80d2fbbe9acda7b6d2c999aa038b30e9a03c29ba1a52d9f6ac8f1d179cef65d893b9e0c7ae48f65ea4d8cd2f333bc6b344fc8dbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa74ab2a4260be95a29415ebca9e24780aa63f56ed7eff2d4127162897c723ea6fdbde284e6ff41917ce59f072cf178284c62fcc7f38977e6e28b559f94011af3', 16),
                    gmp_init('0x7a5e952fc1fcb002aa84ab2ae2e825e29692eac87d5e776f73289f9f6bf3682cbf939e6101c5b4a1d6fad1803e7fb270aa88f0e106b7c2dda1f5e4f32a90358', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8410651bdd917c3cf96533f507a264adb2bef8da259c1b39444af79d31c3f187d58b05e1ce7fc28834499d095a16887c5f0e37f3c795ef71022bff48fd3c9881', 16),
                    gmp_init('0x1a676c7d584315dea66c064b0f497f5de6cfac71ffbdb04869fe0cb247dead30b97b557ed27155bbb711ed09618dbb404c376f3b93d129af3b00bd1d5f51abb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d81895c231c6afe19c66049496a01c7ea23653b16e4932e9b3214ef84f947c1b0ce40b08f8cee4551ea652c9a5ca86a5e718bba486ed3a6718a222379fedb80', 16),
                    gmp_init('0x141d802070d55dc92ab0c607acaeb4c56750ed0eacc543600f1a7c953f7bf01e30341b850799dcf9964320386101fe2d16b33f068a346e275bdd7095d4885960', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9065d92c9151049393400ec102060bef54828e9235f510c27a1cd0b2a5f5e68f989a65ea34112646ad57a77e80dfa8bac72f6f818565a7e89f629e0441ef5cc2', 16),
                    gmp_init('0x529553e712bdc607168877841061038a3dda8e76dd3b92fd168d2a2fe5af8e0b9d0679294ce8ccf5cd9d89f5fabb524d0e88f9c0f42dcc529a77b66c07ea680d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x318f1fa2c5f9be9ecafb69fc9a4bb33075ff29a172cb556982d036f9250f45136db95714305fabbf33698022a3f04be05c3c7591250663fef8a360a61acaa569', 16),
                    gmp_init('0x841b2a2857c83c689e42022911ca2de3c4c6004e6a2921c5259d4781c19cb0b8b909dbcaf619ba45273f3d2ccccad63d66a1c476086d5ae50076024ba6c15bcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56d138994564870e9ba336bf549e2f2b668fc7e9752ee4812ca9fefbb1e73391e06a9e8962c4781b886bf817214b511bf293ba8e1f44665fb7c3dd1280d57f09', 16),
                    gmp_init('0x834dcd68f6c6fb761a6c5c0d687dde336d3aa64cd5a9af8eb5969a4364f7518ff6f6e0ecdef2529f1d95258b460ec7b8cbd315acad50e38c06e93365171ff6a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c29c9ba6e8a47998647f2a513b42881450b5d96c09c342d0f4417c8cd0d8d97666335795abba8588fcb0297c111ce5de8d42395018e1f7c3f9b4c8c4619a193', 16),
                    gmp_init('0xf6830e9b40d19a5934b22ece26ce2f0968ab4ffbb561f2151e223b92e7492ef023a73e37ccc4352f8e9045602de7c1888d7cf4c6bcc112dccaa9d5623f19bee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ad70158bd03911694e0216aed8e9862cead3e85e029ac38477e33d55d796e375376334a99afa229ea0d2ba61905a675ea17c051645c42c6691ed0548a5f355d', 16),
                    gmp_init('0x1ff6ec2de942f86e8b61006919147b3d7ea2a9c55a387572ff254abd250dab40dec55a6d7f422490895db8da7b8edbca37a37cb9a05d78a6198d10e0aea168ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f249b17da26715a03446bf3d09bec77297fba14a2466b400252d356f7f227875aa253776b0e3e9fb7b33c378551a9522869b3c28362c7756d6f76554202c977', 16),
                    gmp_init('0x22a63f17b84c52b63ce52524ba1609c74aebc228fb9efc9e9091c3a94e116928e49f510df5f8a7fe0c2d8c185c5c1f250d9fe05bd21c85d44d4010e9fa0868d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35417db9fd6a986f4ac16391095740c4c1fab2ceb493a9ae73a62ea7f2c3194eec97fa21a2582d378b64ca0bbd686012e785b34211db7e5b95519af5b3fae177', 16),
                    gmp_init('0x7966f9653c6e7cf892c466ea4477e851005e33f7e64b53ab014d6892470a181096cf4994ac46e59fbcc4b6809aaeff345790c3158484631c4998fe062a1844c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88d309ce9a6de9bfa4666632c13c11b67bcd486740e443bbae9cc0f9fd3d3eb89412a16ffe231d13332ac7679f7a88bd843a06722ff9b132afeafdbe86c4c7a3', 16),
                    gmp_init('0xa1f9203fb0c6c2e03c8a2746e70213bd2b24cc03432d77d8633262c8ff848be6573a9fd6f648eff56a8a39db233178258ac4520efc08e24afadd47ed3ed3efc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45dc42f2c67e00d1578514242754e1b8952717dd05c2b073af7a5d2904405d02202009d00d06d18f0d5976448837a089e1351e742217cf7aa379fee48290cdb8', 16),
                    gmp_init('0x957c2bb7a4973f931b6a6c8b1e0262f83804f8a3b52eb53e4bfb1ebda38f70a3af11b5acfef49504a15c2476455bb4fd3261a99792832eeb0fc776e6db3c05ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35297e3a74e6a7e1358e23741358e203363a3830896b88fe527f6b775b0e1a0b07ccd72d5c076e82a4bd41288795e9a803f4e0d1119ab3ad10fafcd554281474', 16),
                    gmp_init('0xa33b5ad85fe4e751bfce38169afab1f237f8507cb9722627240e1189e36d1284ac66e8b91dd0d85b95653a9dc84296cfca8f726f88fd1372ad90b6df635cb2a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26b6c97f281234e9286f4f2261df2f410b3c9290fa219c5b2759138fef9e7a78198a56c28b7f09ab71281c342b826607d676aa12795f85438196a3daee06105f', 16),
                    gmp_init('0x5f024ddfbbadb27f08d8528d432052f4eaca83fd2ec6dbcda2913715087f134f2f6367c8f5bbe028026cf7087b97b1b59bcaf7ead1257a391d19b7b8cebedd4f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x148e580e6511d2e02005e50984c7d486142a9101963a2d90fb5546098c1ad41da0381138139cf7955ee9bf20719e1c8691d43a93e2d7b13d4888a6553af584ae', 16),
                    gmp_init('0x40ea8c6ed37f525a4fc7c6b9906f394ccc459b3baa919b1d793c74ac61d3bc5b5a817f01ed893ee157aa6813631eef289117c42507441529914469b361985bae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e320748f6500a4d7bcc2266e20d54e82ea4faaa8ba25019c73237a1b05a5f681a8d5221353b31c6fa822ca6c601efc08da5c9150046de13dc47e248a322008c', 16),
                    gmp_init('0x33b00d81517360f13fd3017bebcd58746e2543bcf4ce8f92f30d0006f523e756b3d99123ef90338afc145b4d84153250b3a503b995ff0fe964aaefc080cbc89e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42abfa622edf9f3eec072fee7b6ce1ff3ec2852d7b376e38acb2ff32a7fb08dae1e6e71ea142108d4cb8c61c592e3b973ac5af2be035136867100a4336f970b5', 16),
                    gmp_init('0x61cf39ef4772067d2498b3f0b0225d8a289547ab65e17708884e0cf08c48642bcfa4fff8853abb1d8c6ac6e8ef26408c9f1542e7657a006a175c37a480d144cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e803ead92cc66af1069a59b02627e5dc498ca8c23fdc901ca1e183cfeaa13c846ff943b3ab3eaeae70b4d453ada6b3c88b7019c7c86ad0a39588059f1695159', 16),
                    gmp_init('0x532bd0b492c66bc22c92333fb7e5faad28aadddf324978b5790ecabffd204c84702168e1324047a0a9c1a400143496e2c1ca2550f56eece8e2ba541178207e0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32c0266a46ee7bed2312f3730d8ef34187d286ba98f33e1c6ea254524c19c0ca48d9af902b6d9426f1ca588151d5709a7a37d4a39255b6fc1e700c9ded462170', 16),
                    gmp_init('0xaddc04a56a8f3b541f22829345ec3587b185445ae793cab6aafd02f84a645a0ddfad5dcbe4569d2df2244046a26399ed4e0ae6196870ba26a0d023d884c40b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x942eaae2afa064320766c14ce52d1c71f4ffbdc4de8e5955715cbe7b151a3c7c52e6a8c91760e015915d90f358bfdce8603fe5f3b2d1046de53359470ab0cedf', 16),
                    gmp_init('0x331a280712df095878f7c1c0cf0d7b5bc55032d4d0b7019593849cb56ab1e4606b50ce3cf67ff2041c5be041eeaacac59ea5040ecddd4378a749f28ceb2b0ff2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ca4325403ec3a643a2fd9f3000e1f05d4e554394d3c509417abfdfbfbacadb82b906770c00a37617746988ad6310f018ea0ec1e202b2786cbe77cec141a646', 16),
                    gmp_init('0x211af8c2c75ba5a68b089f7ec168fef59de039db004255ecc277a0f9800ce123496934c8108d52c7d2b6edbd36b79afdf47840dc269b466befebf5853e617473', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa72b18bd3850c2640d8d48f62c66e24c77b0579601939de25cbb4d53d7d092e81a6c2cf9c6741c02b0eb960db2d11a56766d8199f692acf5b6492e9a9f693681', 16),
                    gmp_init('0xaad2131cbf3eb8049c63fec8e6a26f19a218ccedcbdff90b39276a8c8dbc3f4c49518071832f03ed15cc660a0a216754755a5abed7c0f42b5469947a93e5bb88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cc3f1cbac9f8044e2e36599205b134fc6320e26673d33e7642234d39f22cd30c1ccdfd1995a071864638d08e7c68e57fbdbba20ba7bde89bb2c89c05779536', 16),
                    gmp_init('0x7b47fe567d0c65da98d1f77ffe75ef50225d99e6456b9c903cfd0caab0432554dbb56353f8c28478653a11e38ad144ab48cc97ef0da1cf2286dea2a8ab181b2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x500a919ab00cf03e41621cbeb80334df9f96e907110a6eea2749690a974ed6cc9179cf13922c1e5f1bfeeaac27c264384e2a4a5485a55a24ed226ac6529bac49', 16),
                    gmp_init('0x7cb350e5412465da7a83a2629250207bc9b8c2b8421582154b38472ac76b43e656aafd89c1fbb4d231740aba24e5b18adfd39f299f6357b0d649f7cfaa5e3253', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191f863e8af65be8dfe82b52e3a0794dfe253cfe43370d16b54fbb80ab7a045cc18eb9244ecb29fcd80ed5cba2dc5924dca9428e63ac4feef49567a695a9373c', 16),
                    gmp_init('0x611cb1c21a49108c4db015e542274c5d75c66be8b7f2c23cb562c564dd75a277f81fa121b345ac2e6bab70018a29f172b97deb3f68dfb668aa2b68b04bfd204e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86d9ec2a1bf3b88b092c70722c09aa469e1ef27ce55528be1a80ed9977454d706899143a5af52621e4048439de8e4275609897725336dea9389b3f9bd94ef02f', 16),
                    gmp_init('0x7559e00b3bc55714f8ab9e5b16c93c8aa5f96af2fed1d36b7e815166b5c36823d8fb3246ba5123c779f956821752f17600bb123c93355dad19d5a01955b333eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xde0fcd2365f186393328d29d2e645ddbb7770287a970d4e31da67eb817a9bd5b2051388575f334f4e596b4c68f51b3cf51ba170ba957a9992ae7b819d692e98', 16),
                    gmp_init('0xd20006b59055c5ee9f0a70be607770881085fde013f17609a19dc88edabf225d886d06e2cbe1a2b0d4ab1835bb72ff0062bc64a8b37ef0bba27b740e1549a7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9293abd28d578a0839ca3a676dfdd418d4aa807bb48b87a793a4543491a6c32bf96acf71136024b54f9963db9d07e0da58a0197b55f3f4ded316a9c3f953f376', 16),
                    gmp_init('0x68962983f44d2bf68bf777c9964ad14dced31cc869209d06b77a76eb61155f0bc1ccdcd77f95db51c29f19b938678071c1a5f2d672e4eecbe90fb6c880304c30', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24ae3d76cbc620d017a8452cd97e779dac054de2873563d995faec0470b4bf66d57a3bc6ca513f69ce1bb652dc86ed754923512a378dc0327ee3ad827cb90cd0', 16),
                    gmp_init('0x39ec3f980fde0095b959a257e074bcfbdfc469eafebb3afac7d8d808f472df547d71934278474db626903d94d6a228175e936941788c7ac7136bb1ecb6e60c47', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x12ee090bc5787f241ec609bc2cf1a739f7f0f0fd2fb1bbeedf9633a41d292f71c3f4deaa95df31c24f0d536278d0f466f554e516b6f63b4b33a176d4a840841', 16),
                    gmp_init('0x24fc47d437cef20cfd33cdca9c8d219702c8b51d9c87a04a3471339c5788ce57bb1999e17f949a2c6d9e8fd4787b91008564ab672f0e1cc4d7d19d856ddfc232', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b0923f79df4b243385d0cadbb88c9f9f1ea8255742bbca60f83a4cf602e27eb998508046684f6a49c11f4faed0870752badb42158b92dbbdbaa67d8c190dafc', 16),
                    gmp_init('0x37df2885034f78c382f8ce79c7196c46932b4ccadcce7256f1c660939d0cb16374356ae6a6745492207de581cb8885c1d3bdf3dc7f3e4586c51a800ef573ce81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x425a3cd2023cb4bde61c4bdfc01ec1548b6d151eaa8783d77b3d4d8a3cf7828ba14f4afca471fa0a30dfabb3bbd3ebe081c77b2c904171472192b6ed8b19a4e', 16),
                    gmp_init('0x496c90aacdea76f9954599322c1c166387d03cbf48c8697c3591720478b6fc7302c46d8724d9acaaed4159ca314f1858ba5a7675be05df31a533d70598f11d97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x825ba9952b16d2a4797a36b8201fc163affd174f2f91cee2eb7972880926ea2d897c6c3adfdacff5f92aebbd1b28d014f9e13a7af9e303c8b9b35b148ac712ed', 16),
                    gmp_init('0x43f476715c32c8ebb68a0d7915af21e40197a36c8196243850f2cd43c76b9ef756637982daa76cda9b663921a938410ebbce43a907186014ed9c6c81e9239f43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x999e918d3a8e0f1cf1a162be3d0c983438e907c2bac53893084f9431cb6a482057bbc2a7b165227a2729e3338112a303c21afb23246d7fbbcd014aa5abc3877f', 16),
                    gmp_init('0x49a5585b5d5441ebb715f861e41cfdfd22c4428d2480a7c57988c862b4b6179f4aebceede8c7951a5fe7c71cbf4b644185cdc9a9becc4be5ef6f5c0800c59f71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3821b9463a351181e328a60a89ebe2584e835c85a4d7c66d8fa9bc1a59a5413beddc2d6be50eab9742ab1660f3d77f0ef7fc40da6ce272a4213befefd5ba5a', 16),
                    gmp_init('0x97a079027c863c48b05c48f78fec629239c64c34c0ebafca54d7edcb7bee4f8ac3276959ad7fb8a93f494d3a1e1fd2553048024d38ba0076067801285b66db14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91a2da8a9ca3855a210ff3a0f80621e9c5995f65cc0248a107d8b6069ef01736bf8cbbe0ab87cc7bc9922e8ce0effbba54efe7b2f0b16591d41faf41c62ce483', 16),
                    gmp_init('0x209e68e4641e052e6aec243a12fea861570c03ce7d458df17d33c5fbd2b7b4cf44993fdece12041cd850a78f7ff3addb83e2edb8870d95b98984a0636f34a32d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cc744fdb200f6f389bea305d2eb57320832a9f941ba0cafacaad3a99a2ef504f07cd7b74b59da1299723619779e9be7bc234064116afbfee2b1aa81d97324cf', 16),
                    gmp_init('0xd04a6e59c6155d0a567d2ce05cfc4665966011418a645a421a06bfdeed2a139d1861c9726f916850d4ace2ca39f05dbcf2427d3c3a5c09507a4ed4a57c42ac0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93022cae2233d50711f6a893720142799a8705faf4a514b086fae2c39aff02e565f7585c937aa46e46e2e058fec7d2990326d5588ce0c163534a094ae91d1406', 16),
                    gmp_init('0x50e32ea7b22b3e64f8ac1a72c01c22f8262fe06f097f61038e2f25c4377187d574ed6a15fe6fe44d086c93f40cfb7c666930630e103fc95bb86cecc7046e2aa6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x660b0c900d9afbe5a95585eef385ca33ae6bfab6da5e6096dd84bb2ddfa8309ae8f76d7a2dfac9a815801d628e8e32de68d5e539c39b30298097f249aeb1e55a', 16),
                    gmp_init('0x890bcacffe90317cf47cc12ce1b855b009f040e4db4b576d63417b01f719cf4be3a3ddd0240c6f055521c46cae2860dc5fd253f70614d92172c26dc2cf68eea5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e23922ca00b1c02f33aa481df5651f729ecc8315d5a22974da9856b8a8d700bf4510e73f91d303b5bacdf967a39e559b919038cdead8fcdc07e79bdaecf2cdc', 16),
                    gmp_init('0x725ba04e7c4240ff3a6b95d85b4a071f7704cd4a87b161a5c37dda186abb6cd96716884f8e6b9898a9ed252d9fc067802cbd94e5518f51c5242a4d1bedfc175b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a2ac35264eb2219d72794ac703573fb50cd4f25527b67bc482001d5d9cba835f5fcce6d67a03e252611b09322f3ca8c5848e7b427d60639c24b95cd75820655', 16),
                    gmp_init('0x4fa407b9dadad93c4ef5e1c92b700f985cb0662ffbf86c6d59fd7291c62424768e2f64f75f859996bbf2fee5ef475a97367d5cf0ab0e9a994960341cce50973c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x222a550b156f013a39a51db48fe9382129d574ce4c61dda31696f835624e66ad8d69de0a6337d0261a4e6de767353adbdd28b4e9a33855409b76dc055abb362c', 16),
                    gmp_init('0xeb183773edd47729ab6d9044e41d99f9906a59f61bccde071b604294653acb206dd20f204b6f44eb578c41f7efd11b0a2274af029ed8e6ace8e84480a57bf5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x319e3491ad138f17bffc935ba8a72bef8fb7c6fc8865d511a38f4e732a11b5c0cdbdc710dca655a6a3edb58216824c05809c608a816c9d40f552a8d43ea0fbad', 16),
                    gmp_init('0x46ee1d16b88b0ef95ba74bb8a06fc43298da52db03c40fbc42cb189ff0450a5fe7b33a569265de85dfad77b955ec5a690b717f75105108a8272513b41b4c6586', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x468a251bf92995842bc28cfd17d8ca81b237c468e1ca0948e00e429a5499097366254301fa70fa8558fed8270e221d3ce24e39e6e28fa4c030adb560ba83b5fe', 16),
                    gmp_init('0x59e28297e2b81fa4570f5881c823cac9c8083ef43f22e13b5f956d8a12b6e3a7c3206fc5628fe56724f3a60a1a9faf69c6ffb28cffd07d3f1328b1b330a72009', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x93764ffa60e229b32afd4d676c6232e1e407985bcc59beb0a238906b9fc2ba52f6dfdf8ee5e5972cd927d766a5aa238a1f767051bf76ae3fa5234f9f7183ad8c', 16),
                    gmp_init('0x172126a871563eee32dfaa531134694cc670d83feb5661d22509a23a0ca11d540b8aa776debc18a12f0e87ac9404e31b321823508eeeb95aba2701909c12e70a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a86165057a7fd9f1fef94156badfd614c123c5fbd0867d0873c7745682bcd84e4941e640857179389487866cec20dd577b71a9177ca7599b4995eff5cd708ca', 16),
                    gmp_init('0xa23863fb89e26f4f72952baefff7c0091920bdd3cbb872ce2a8cfc38bda67548cc3b1cfc4ab4811bed8b025db077dda6b9c07ba72bf36a095b43d92a5da08286', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19c4007c19243229c9e17989345d8e4010b0ce6c3e9a1db67280ad69ee89c59aff1c5235ba08c9300458189843e9447fe3b916394b58b150b06950f53094c2e1', 16),
                    gmp_init('0x7680cb1b7952425c927d8cd0685cbd4130cd0a809a345b2c9a2e80b3dde194c260d2db6fa3176dbaea30ba3ff2050e10ca5039057c059e60b5a187339205fc4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x779a2d911445b54c8272178b4f40aa08dbd19f25dc558e7c6fd0ebfdab1c4b4366708b576fabe78c589ab2d9a21bae98233862eff623538cc26573591d84e00b', 16),
                    gmp_init('0x430e0102cf685005c9f61b16439231c2da6f8815096f7c9ab946be96db5ff7f3b7f5c65b89ba467eae9a2c73c9e8520b4af25ea869c3fe15cf238dfb57b850a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x224de20178c5d9d10544039896742e57b5126ffee77472f619456421a2fac08281c5727beb76b9df7a000bb46105a18090ddf5d951e2df61d998f2a49c49bf10', 16),
                    gmp_init('0x69582e56a924e41c57326245f78df6c310cc69559a3469f4d07f88aab78298f19aaba48af084982c821f27282b6ece706c8fe2397b22c1cc83c0dd3bd1137535', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65d0fe70c812431f4afc40b2dd8a4b4bac1335de51340fe591712c1f5812d9e7be18ed56ae7984956bbf12593192b39ba69ade047a4e715feabf91a6e0f04579', 16),
                    gmp_init('0x94e600a65e1cdff144451d143a736c8799d00d3d511afaf562a7a17a2100e9f6b3fd2a23d4695666d8f2d67059754cc4313212d71c04f2c0acae89a1c4315b57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5233c31f2044cfb6210aed81d214756ac3d1f1a4ad6c6023f72dffbaa7baa8c8d7b44aaa0e397c472ac934e9562b6463274b2b1357d01692b38a7cc37130ba69', 16),
                    gmp_init('0x3a433d63833fe0ce07fcf4ff37f3df2b513029a6003d3a192e0e288809094e4c0fe6bea2cbfc32a82d04041efd78f011d45be9e285dfde6c0bd8c33ccfdadb6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b178ba536cf794d8168d6e66bcf9fb2940c2dd68a889c386d6c4eda1f9ebb18f9ab5c0f63dcc1a029d15422c752909dab71d74c864f1a98e2053d2281420883', 16),
                    gmp_init('0x12088bafd29cf64da6bf9a9ddb570b861159bc3a34f1f567f8605b7bfe5f7625c553c26ad040ea8dc1f5b03e147528bcc39435b2c3f06134dd3c25c212f7a2db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2bc8d3e5fe3f4324e90bd37bdf9fb3bec14c1b019778ead6a2101a3b11764e3b728e1bf2c3814f03af936702d8eef02b3abb0dc0774c490fdb960dad6102cb4', 16),
                    gmp_init('0x9d1b32b96a32b450ebaa550eb096da792f89718af43ae0c07852c37f571e75e954ecc8d7269eed432e8c40bc3fbee6dcee27f3ed3ebec988ac520832c03f8fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a5ed2e031c540c8473b6e5f93a2b32653c328f8cc3dd69320d9320512000dee4b68c7ef0afa8ec7e608966258da1cc4b49f015488ec18528aab9b9e2b1c40c7', 16),
                    gmp_init('0x40f2fd693a0516a904faca87097a1893e798f786eb6b22a150d41d832811afb96150a33071e010fec07f24f6f8d25b198d15b4ef6fa859f0a3652e925b83237e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x662a34948a0c30e325f8cb745fdccd3533bdf9596589e26b98a58f9c545d8a343f6e0becbcf9118b65411e30fbca3428aa4756410fcd4153df82c2a23433e8f', 16),
                    gmp_init('0x73941ff03f2af44bf6f9ba0a4a591cf2adf3185d066f70d39b9478030ecbb6c305a3b0a2fab80bb06b203775075bb0d83dc24b28b2b8783f05b703ca2f63d234', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b6ea4c4491debe5e478ebfffaf34461731c7ce417422a3497548516cf7934fa6fc803b9f31c26f175c97633f5fba0b49735f31824159d747a8bd93f5615e602', 16),
                    gmp_init('0x57eab9156a181f705388a934d955c27259cf13ae05542b27037fbe20935dede960793b0b4a81f75cae96838e18d0cccf2c7ef63ddaa822c137c558a28041b23e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d7c9ca6391ee43a4f0d8d60e2df4bd2128f379399f5db7dd7eabc856df45d8b69bd8f4df16e49e8a14b650490ad08325d0116e6ef8c672c927aeaadb7190597', 16),
                    gmp_init('0x3d665aa7ef9f7ae35c0af791cbe22e3028bf7cfedead61b11a443b9d27c63a82ebaeddc2590b33e9ea3950d84318628f191cd57f3f343cda97f6469a0bf40746', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76c18d02587b345dee313d16247fd3883ee92c2dc18b95dd2cff739eb11ea80b2a83c7c2ded0b9c0e17d44518253101eb49512767cbffcd368de3e88cef7f552', 16),
                    gmp_init('0x69255ec219d1311fee137e3652261113603ddc02161929917bece9a0e50c049154f713549064ac706154243c9c81189deb076527779e2023301a3fbe87155c17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x286eb3043f4ec7731cc3c7ccc837e9f2faa735c5ffcbc0bf7d30fb5a6bcdaa9aa21af163e822ce63cd14daa07766659add715d6c66abf21bce6fb025ab56a105', 16),
                    gmp_init('0x99629223cf0368b4a51ac9fee788ccfa3e502e05aca65cb62114cef02a57b9e82f29d751a6bad8de249117d2e6f9a1faadcc2f745a9360a826b9de137aa5c318', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa73e7bb085e9e9542f91b36924d6d01350d219f79902f817e620b830b85485bb6a0a7400ea3450b363e791101e10a32f68da8f0ff21a2415f9e8f2c107df4d08', 16),
                    gmp_init('0x4a8a99cf7fd72ffd3508b6086edb354eacb452bdfb35ca44bd6542b144c2ef4ce03318da6bed60398ce0040db8824c4bc2d55e297fcb169ce796ebb173755c8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72f0c4ada70614657842e2333ed6a5d6ecd6beee7d0282d36a85b48383489c65ce7b1b0637910db969de8f8ae1447fd22957217bb6fa8333b3003c13b41db6d2', 16),
                    gmp_init('0x2dac4e270abdc3f023718cc666991ffe4321f91a1ad8497bfc3692dd5e6baee04690209fb49cd75a3428358030e4898f04620349d5525220018fcdbe641d3831', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d5510cb283f86f55711cd8d3700d64581d4fc2dd82d10439b9805805be2237792db9a82cef184465b025894cd04f5d0279b8c5f8ff44d7f36595159ec79ef89', 16),
                    gmp_init('0x5d7d1dd42ca12ed427b849728eb39c028638e9ebfa8136956ec457c22ed6065813b0b02fa1a63ad117606487388e0cedb855624562a5ad7284d9b652938855b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ce9f37e4e75fe29dc97e58c09d99c37592668af1d70e977517b2bda884e80fa3d374b074f5b46e376a5fd4aadbe455c30d4210772c5056019064fda34b45e50', 16),
                    gmp_init('0x1ba890a2eb798f544963b42cc8835ba0768fb099f96b529ef09b56860bd99199b94a56a761555f34368ee0e9bbb2f8e24ee4f51ced65d2d33b937e1a41c5617d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48a0956303714d863ffcb135600525b78d4ee535ba70444995a5336c09eed71dd8c6ba13c05e38e46ecce7abb1021d2697f18d5a2f054775c772b3e544ec7612', 16),
                    gmp_init('0x1cb253d300f9ff5ca2821295eed2342a5a7c8017e25272591dd01b8f001773e1b5cca6046202cf10e1259216449f9908292d77a11b3f06e6abe98a112997f79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9933d7b3220eac39d6820705a7e42427bb7996e4b21602839b1f0aaea9fca2756ed0d7b6e95e344cfa352caac4def3f3c2cefffe211560ade1a549b48ce62ee1', 16),
                    gmp_init('0x384b08145efa5b48a1cf3cbfae0377c0227472a778e5b18c9841c03e7768581a87a4c595459ed1150f42ef625ba507bd422deff3e08e7474116951917bbf7c2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e7dbf7bd488fcf49b7756f539d52d061a5033e586392945130b0fcf29e664d43c36c6e6fdb61d1bb81d6d9b1907850ba2c6adf5f74415c5183dd234b5566fe0', 16),
                    gmp_init('0x68fc71afbb740d9b0e098cf76c63d7ef74b06b1eb196ecf40030da4ec0313afd25e4af1a3943a0d9d1c92ea25e2140a91b28a1103e59804944576845412b2d08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69d63fabcc46b489fb037a51dcb7702f007c048f44d58a514f13c1e3c0389c5e66886df0d9fb904b9209a8738da816e53a574b46838fa7398f9aa35bbcafaaa0', 16),
                    gmp_init('0x1f25de3f596ae06cd97e589f43e1a90d8c2b8bc247312cb701cd6ae91799f0e0f60c4600924258130880e69ee2fb57b9ca269296aec7f26598f3d2c2a6ce148', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e277fa8c027ca037ae7cb7b2b82f2a2c22ed0ea5ece8939893ffb102a156432f3a4c977d8736aec73d4bd1748adb4680ddbba8f5cd3ac73b374083462a6d879', 16),
                    gmp_init('0x2220e741b1abf66d6fdbbe17e0ecfcfe6a0a447a8998636b1c8aba9153693b73f9a72ce05d825ac45befa85f6a656b5ae42a82d269bb502a44646cc517c15fdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21bac87380f6768b6eedcdf5f905a27abf5ac84b0169ee44ea2cdc734f7913665648ca7b162d60113661f4043db96a25acde80c7e8f255f47fb2bbf71d33531a', 16),
                    gmp_init('0x416cceb980b95b0cb1a991d2c452bd7a937947c1125acdaaae14a2f4efe549da903b42297df1f25e3492ec7c6b8791f3ba7fc366db0e0f53a2762e4dc7a2e6c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36fa1778e5001659cb79ef57d4d965a575da90d59106c4fc97dfb48736577a4a63ca30014e9ac1be196f8913960fdd34b4c66ef4ded1ce068de3f31d6a7f3c0a', 16),
                    gmp_init('0x6f76ed02ea2d03b950b90b2c157e5272de5041eb2517955b5892cc5c20721f16605c45c0e075e99d736096b343d07264704aa73fcd00bf894760ab2674407ffd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x219c741f6491b9db4cab63b212c4f9d0c24aacd1d293166f9f8f8e05b834048df6bb4b6bec7370c001b9295705fe02ace75bf90dba8369b2803c145f8bcd54fd', 16),
                    gmp_init('0x13d009a15949ad1cf2963a082559c9f552be382ddedb9079b5f9f10032465eb87b98638a95fc400d112cf1dad85ab49d2392c2803c5b1b7b5c072d8293631a00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6aa3602445f28ee52dfe5ae3dc895f88c4b19379c81d13da0807ffe4d7a0a121c8b83f68afba93cb80d18e6b94ec3baa252bd6af8de673b6696c5e4651f36c97', 16),
                    gmp_init('0x4fa62958dec552c67aead2278fe9692e0c3fdbb2a45a3e884fdc5152d102155a701e0092bc60ddf442cb786c07c1f2b564d26e7047a4c8ddd13160c057f537f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f3be90a9d07a38fe7cea15ff077625bc1a1b6223d10f16b1a14066d8b0b2c4974bbf3846ea3c431b5ad27f9e19eaf10455cd687acdc5e85254c446dcbebbff', 16),
                    gmp_init('0xa35b2358f0435942e4a954067ab4c36d04dd0ff611773b3e142ca059a43e1f3b5d7b10ea1a6f555268e9a9a97bfcc46463f2ab2387d5e6353df73dac5af29b03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa86f990ca86d9d2ab2307587f7bbc19c51cdcf85ffc481ef0f128d58b8a3d9e0ebfb72aac88fba4af6aafbcd9437cb7ecd5aef1740cddf3e605108c257a483c2', 16),
                    gmp_init('0x366f013825dfb23870f951b30aaa77f67e28440322f562141f2badd7ebc5815890badf805ae22e19d95cad6d7f5ac50fff78e717c9909fadffcd5c50e7d570a1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ab58c44b3547147ac05daf108f32631ba3b5d9d00586acf7e6a4db3f29b81ab22d5e07661528eecec0083b2675ed9d181a84c6df5674083cab7a7a9ecf3684f', 16),
                    gmp_init('0x8bcef468a5aadea69fdcc585cae4f524ee586b081b4224d8db9e34dd3f1e4cad8c8d8db173f540dcc3c08c19bce6586275919d55ce0f29715229f8ff7ded851b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77431df629ca2ab6d90bfdb04186b0e9c03054c6b7437dd7cc2ab1d1f5396787e42c3ed3ef47ca890b21b9ea9cac4809d88961078ca8f4ca66ee1dbaa0e958d5', 16),
                    gmp_init('0x4f904b08b2d6a19b367b24608eee914caf63a887c99637707a422ecb759a977c6e50feeffbfdcb21c2b0f4b98d2268fa4f768c85a052de73305b440f9359464a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa25b2512b925d3a1f98821e7be7e380ffcd2c5db990eab414fdccffa2368c821ed37e85b86c999f5df63ea6a00a65224a6764702c381a1935878468ee361286', 16),
                    gmp_init('0x2b1f58b44e15bd6f81a556a6a9dd021e6bb5b201640a622128bd911fc4d427056b8dcfff175cd395ad9b98e3dcb3089b392561ae1aeed7b3aa8b3f2159bd8986', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bf282c65096181b0bfcdb325dee8c26948c331b03b23027c45ce167fe0e75b5bcd31ef179212b925a84919e17d1f8e53af352c4c3634b806de94684ea8c28a1', 16),
                    gmp_init('0x654ef0a27800a3064c5b0ae41cfbeae0b3c7b5786b144dc4cd4cef7b62061c44972ca995f627404eb38ff52a217a62aab5668e7f0fd5f800937e222172f87b5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x386e8e12b784e0a3597b194f2635bc69690866056444b963169fe556ce5fb44483d29cdf3c48661a0475d254cd8e902f2eaa5af8b0aa48b4100ad16a8927e6f8', 16),
                    gmp_init('0x5a5e4d2dbb377ea535244b32c948a9f07acc95a2690b8aafa630f12e8fdd5525102507c27079e9e0d1bf1e48613358b6aa47a16b2ba4f9730abc897aabdbdd9f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67697d6d119474e978ec2b0fc20179faa1809617c584956ffb979502fb2c915089d5bb3d18ac12d748b47ceaaead3af4b79d6fd5c4372a06193f094ae24ab03e', 16),
                    gmp_init('0x41389d961cad16f6aa645f9a634f7e5e91545c920fdb25c3ebe33ada9c69251863616a748fe5cad2a8e484a0ccf602b4fa07c57b10236399238fb558e907212d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e329658242f0da34cba14c2c14ce9787b0189f8c7307681c664a86cefaa206cc335c1ed3cbbb14c60e9dd02977ef1d8d0c2f9d2e7302e83a44737fcfdadd384', 16),
                    gmp_init('0x8f8684069e3e57ee64cf011dfa21b0ab97363f1b9a7218a4a19038b692b114b3000339de2a8b1c383c6e4b67b3809d464fce754bb6c68440190704d0c68dc75f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x819c3e8585e48789a30b7e6b2c79f6e338ba93c0b8d83f777f7c9edda0a918f3c74e9f8c25296c9964e1bf1d83f148bd984e0e64018891b228a7215153c7dca9', 16),
                    gmp_init('0x88d2d49090704069aed985783b4fd2e94c9f014219eaa01b3c15d36c9a5bc5a41a8e51abb92149873c361817a8971c4ddaeb6a6930de02f2f1c1415e8ac2621d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cd5dbcbae1fdfca8968cb84993e9b12d4e895762550d7ac7430890542c8444d176e28e00d1209b7ea3909b49d2e80b01ceb79fd4f8f81815531880c79f52da3', 16),
                    gmp_init('0x437cb5a423c4f6f61f8351ba78a509cd800898e907edfbd793dedf94ca585e1c8e92bdfcfb6d08408f89a230bd8eb93df937578eed9377d4c2aeaac9a48097aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e5188d0b1d01d775a8e5e4d6e04a42f2d8b094e794eed1b101c49ac02a40c8953613741912f6f7e775cc763ddaf8de6fe4175fc5cf82d67796eb7e830f143e7', 16),
                    gmp_init('0x54c73f2c609b89317ee54a78a678aef569d5efc486e4bea6a17012a01a95a1d9d8a34e5ffa1905c6724e1a179ccb98677c95f80fd35c066da39767b0ccdfd0aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x182caaf8c0c041e0f03cf7e745e3ee17ed6ec665038d9b8341710dbb1de804ed29be0856c3b52e3ea713b66bb2415021cd795905aaebc7dc810282638c949fac', 16),
                    gmp_init('0x2504f0eb4a391e4a4bcab8413cb0af4b083fcd471d37ceff0b1a304fdcc46ce3c047c792bbe9432b13873ccf10597ad8c618a612136945e062b7ace5e303c09d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66b86112d881290a277964a9d049bf88eae3bb5ca0b681c3edf5cd3d3f5444e3c4ac0d3aa46d0459080d0d8f39de07796c519a3dabc35d5e3610d674b39700c3', 16),
                    gmp_init('0x1f1fc277308897b6f766996c191966a34d55ec6a81d179ff7e9187114d6e1e1738d48291a9e31ddff95dc3a58197fd33a444f1bc557c4730cf5015d7a836d4db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8176efa88dd84d55998364f1ca4a40bb014059e3a481392350d0d47a560c7b95c9bbcc06abaa324e9ca02dc5fc759649ea8d1b29896b6ca135c6054d1c68a88', 16),
                    gmp_init('0x12bd5e177dda982c05673b247e1682ff0751b4adcb43d56d481384add5de205609557cb00d87d472bd57f3ba295f62a915c7cae8605ddc6a955986a97d9e673c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x953ef1da4a333b24677a0e1acd280be8b9d0185aaad65c8fecc30c931a97d1a504b55348a7467e49e5c56c1c9e049b5031a7223499539e7ac8e71af119ea657e', 16),
                    gmp_init('0x9eaa640148d90694432d826be361dd23a71bf8086f6568829afeb72b4200790f6a2dc6dc1e7a1233b3fd8e1e5969b9cd7afdff1a69043c929744b14b61705c02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507eee325224affd76de92c323f5ec47b40b0f87f1f66e9df6b1b2f388ebafebdb3fb579e9028ab4b58378fbb8bf5cefd53167b03da6606593a199c8bb785bda', 16),
                    gmp_init('0x5ac425b1c62a5a6ecd51f91348c30b9f38493dad2e142e0b24f2dce275b8e5ef811928450af8ec9a00f71b49863113920b17ff6cb0c514641dd4877510802ceb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2c9315a05a293e10ce55c74fcce3bebb64ac0b2a348e8eefd9232961ad830d44fa8b8df07add6d11795c8432b6ff14719fb2599f6509bca9291f06cee5ff3a82', 16),
                    gmp_init('0x11b5386542ecb8130df84021de11ea93eb67c7b13249ef18328add6e6959b4ec1ab6816250c6676f4623e1a1f28301b53439642a5422410a5ee839d5a16d95e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b1074a29f280b99fbcaed348fd8140f429e5545e6c59ca46a3685ce1b05cc273338a0eee56c91463bdb122e7399fad01ee5934687c12276bb4bced7f6ccd369', 16),
                    gmp_init('0x9b385ffd76146de90bc5e5d14fc748f82a6817c12c8a0b36e285c0981cec86664210dc1e7e9b41ac5f4451c7b2bf9f857f9f9924dec450e835697f675e5d0ca2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9cc96e79753767fc1c7f5ccef6f60a7ee5128def0db1b13e379894f3f9c35aac7c3a1401f1d4db6394b6ab4d45e84e5ca06c38c68d604e639662cf372e70ff78', 16),
                    gmp_init('0x89e1a445ea118332a2fd7f0f96d0ef8560d2ba4bf85aa576eb461ab67b1849209cbff16ae31fcb55e39a97ba7b903a3c0c987a3efc614e5b393ccaca1907d9c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6309d997a05bf920e616d204c4c0d40ac616c3a7eefe24fcc6287ace631aaea384683ec52b07e9d13974305c62fb0de9562237865f1b40c67830321d86679a1', 16),
                    gmp_init('0x489254ae59ff66d9e55202bb9d1e8cd2eb8c1d7d746f231b7a1edbfab80bf5650b1fd9759ce7b4cb9dae0732a544e436e3908434dba480045132628b32efd50e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9228737a549d7756b165bc32c86db7d8fee1ea9335909ad4ef962695fabcbefa0a36703ee7268b7f4a625c39c0d95ac3ba4410f438a7d26f5ab372b006b379cf', 16),
                    gmp_init('0x21138932acff34289f20dbc13ce60b92472080fc548364d2b18d615651fd14028d1be63526bd6daa3bdfdaf5bcaea900c5bbe02c557e723e9567f006eaa5b106', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6401d832570214eecfaad1f622d4d6bdf81e54043cfb6ece439e8c3e79f881e51ba15c32879b34ebded0ccd6721bfcb7d7235a3162fefb53ac63774429c8f6f5', 16),
                    gmp_init('0x3e100e99af33f83ee72ffd5dd16fd1d143d33e5b777a6f9733b4b562afcd967c234bc189e99505420921ada32ea35e9a7b321c04aa97733ea6a27e97c996e58f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b6f71b1171c1fee4139cfa45c8efc28674e67d40aa7028837a21e1a101f116a366f10779201b2fa58cc8da2f6e52ff784cd5d484bfe3a44b62a40ac17d4801d', 16),
                    gmp_init('0x122b945a19ef1fcc1f56b53eb7200edf82740fb60411319e4fba7ef2f9d5804c7019a43af80f06f0c0d32d0a8b00557d550daa2418a2044b10fe72fa2a28216c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69a9ee0bfb7514f489c3f9e9c6bf3e090accfaec4293493ae4f58aa566ce27b60940048c11fd1fb7027637bd80e073221dd7e3427dd5a4774a1dd8d11338b5a4', 16),
                    gmp_init('0x8b0e93db1122a93caf294cca6f7ee9f0d58eae3057cbb983919550fb6637748c52d20afd302d118ce9a014502301be456d5d6313bf0a69194eef067e4d9048c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1919c73864e16e9d84e832fb4a8c5a58b962fda0ccff04a9bfd898950e07ee9ad68fc8cc16e5973be392f24e7f0b9d6a95730e2bbcdf75ff5f49c5cfdcef40b', 16),
                    gmp_init('0x62bd1f7c9cd19632f51079194ae6cb53508edb2441c47bf42cbb67225e5aff845eeb27cbeb532ca36ec33bd73e8a1a758e46abbfd01dec214cc4be4150b3df7d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7836eba2cbfb793267830943dedd70ed152c217488ed81f483ac5337a81aa1786619d8f62e5ea5269a80f30e5cbcb01eb4bca89a07427cd86355df7892dec857', 16),
                    gmp_init('0x1beb255992f9667477bb832958dd25868ef43590d2742c9b59b7ee1e7deddbea76827e64c92dce29e5f6f84b22ccc0cd536684062826231a54c2c7a3c4215c2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x781513413efcd0793bcb0f6db93c50ceead413be4e7ff7915de5f890f6618ec9546e993ad0ed213149042a871c16ff99c1d88d7bd515b606ea3d4a163b8cd093', 16),
                    gmp_init('0x5a6216e860424669bfddca2b2a2c5a137c1922027a2ab8e15db441cf267b77ae259a410d7515203c1787a1d3797ba65c4652e7e92b29607b8768eb907f44f6e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x829cde20fa447074dcd79faac4d8cdef215ac3a75cbe42bd3f32fc673b3627dcd4b7c59e8bdc2bb850a8e7b9a019a37c176a7f43d3c010679a9dcff6673c3349', 16),
                    gmp_init('0x58ca63487a09baa230d31515abf263f497ff0c2098b2823fbb0a5022e2e0748c88fcfc39dd83e2e8128ab3a344d214c26e5d702f5a7a0bc1ab899bcd01917faa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1980c2e42d190eed863c6abba44323466b9a1b55131376642307b6bde0f583f0b51afbf8657c9a2faf2a7170378aa9589840a5370251daecb7779814f12d380f', 16),
                    gmp_init('0x862bf1de8011d2ca917afe1bbf3f231e2c7525edfbc8a19b55bcbe8e59975c54960e832dfb3412055db1ea4be8a2d323e8b9a996560cb4fc0e8a9620f7c8674a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e9e6ebad90003ec4f03fc827b2663bbeb1805876bcd5dc2fc32c6963c970021a38d1bed481a25a1d6210d92b1c6c992a32d75e5111febef741842b92dfff3de', 16),
                    gmp_init('0x26e3addefe654252a7614b95a613e9eadf532627d9811daf10c3c6f4d68c33baafaef060e5425f3ba68c65e4d51c6eea42508015cf27ea26e874bb4c96d27ca7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x306c2262bf282a0c9c7ed7f93987270d144a04df11e38af689c6f8b8c73328240a4823fc6bb15cbc1d9c0f0bcc3d8d2d5ca1f5e6259c481672a4e3cd3fe097e7', 16),
                    gmp_init('0x5f1c30dc91e2fc7ae40ce559e9b5d5ce73808acf79fd97d8a2f186d8affc5b1e549d041136921553c2cd28bc3f1188a08dd212c8c49b6d7e95aa4b0b6432501c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x31241dc427ed457a6f3d7f4257b41ec6827dcc96cda2a5be85f71c0e450be6026ac0103f550cb2c77a69ef5f4eea5ae447ccd548e144a546fd2cf78268b0439e', 16),
                    gmp_init('0xe03c6b938b95986272e39926b6072862320ddd73e686800d5ecf22485a75f4ab20063129fc865c6ae0c10ee121c9c59bc0fc79d7ad78323bc2318b4aa875452', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x938205c5fd9905512089fceb9418518f91f518180834662551cb5e4bd3ad6236f19ed243a58df5708ac8232147196dc61b0ba2a63565a952729e2e471178691c', 16),
                    gmp_init('0x237feb51dd2f108d4c1e68453b02af78aaeac07d33e49e49be9df23c58a81a23515ff83854988d82149f6405ff7e2f259ca7129178c51f63102745cb1286349f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29185d3318c862520e21f5801186ab82d2a46575abe24d53b2551b48f36ea70822360de1b4851aef704e0edd84a250575f895f832a9534f00405e33b55f2bd17', 16),
                    gmp_init('0x2b7f6318a6377819f55dace2329c946ddb4888e28254cacfbe71128f7f647ddb92fe8701f14e169d9762c9da5c413e104e6447fe8c4d82715a8f3af303a0d70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1dcab0f432c1006b6349907189d873635ccf9dbce13cae1472f790b5ba0a6ce354f448aea575076ec1e827c797fc9152b1022fe7a58ef99a3bc5b4d2966fff6', 16),
                    gmp_init('0x4012fde619a80dc98f43b40feeda2ab423d5dbf9ef0baa6b38ae5362a60eda43706e3fba964c95122b628352486421aa4686c1a290ea0baf9bae7ce1903778a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x415aec462e5d194a3873707b3d128e46f0aa53f1b49154a23a09149dbfd2c19a3a32603b62b5789c49110408dd3f97130840021b98d056254c1f2f6a48e7cc61', 16),
                    gmp_init('0x9b1b4a6b856d62162d5292ce37c205c8c8138fd2bf8f4c26e6a821e82d3e2eac6e266bd0d70adf08fb569e1a729de535e93aec8a60204e6b91d3123898f5814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82ca08be4739781eabf51d7f7b56aaab68d8787b1eb8333d25a3ad1d23edc80b982dd964be12f61af5b3f7c336872830cfc177e98cf72db8df577f993fb29b18', 16),
                    gmp_init('0x4c134c081b5cc93ee2112d6de07d4df1a0950080f6c85aba49b6b96a2723198804a6bf6f1832a1ee42bae1b448c0cba974e3bbd567ce0057898194b11620ac98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x219b2db77b7b09cb3918dcef0d0155105ace98e0c163d0e916d558666fab806bbc894128b8cd0943e17d7ced79e25ba404e0261b87d1b865ac6b92a33226b13b', 16),
                    gmp_init('0x23e7b947e7d39aadb02c13cdfaddb85388cbff79b86a37e036994c61796eec562afe4eced517e632580c946f319999cb9c87021b4ae40ae4afd62f1fe32589d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b4c0ba8d3fe1a50916df84ef3ed8a1320f93f0aba0ffee18a563730bd2f63ce1c1e1d45f1ae5203c7dfed3866c1ed4bfb9a106b2d3ac1188833e1533169ab70', 16),
                    gmp_init('0x2742e462afd40eacc1fd83c9210f948edf5ecc3e0c5442335d78cbc56b614134f3dc5c450945ab71645332f32e01253c79a0d73e52eab2527a583d2628f5ca94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41164d5dabd7eb5767211e6c01219774b48a0f3ff293dd2d728e3e4ecc743e47145e8e12ab516a7ccaa0f6d4b043b52128899719fefc6ec3d5139c47d075300', 16),
                    gmp_init('0x68132317c12abb355d7ea52f53d966fe76d29dd80c80bb02a9b1375e5e54f24db7cbfd2482aa5ec64d9a0a2157a9c80a14eab44c932c991789c087768d6b9946', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3808dec2f0850833b22356a5c11f2447ba195f3b215a1e6df05144a881ce7042649a15f65de58ddc97ecd33e3e72d8f2b97c084e90c4dbd5a36f8a2a7e7da0de', 16),
                    gmp_init('0x21a6f196bd768a7fc8b483d3e610b248f9e87b1a0c343f24bd65a9e993a5a702b4d47db32869fd300a9d2b66b7df2de049568997f18c31fd3764f24e3e6d7e48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x872af4c73ee64b0b2119c7ac560efa78777a6eb49fee0619a6a7b1dfeee809263a2fa4389ba85a7baa334dd3eb84c0c4823c5cb68e2a567706c31cf1037dc374', 16),
                    gmp_init('0x714d8d361cb00d5b553cefa6183ee7dde319c802a762659871482fff7b2a1b92854c53ebad3b0d8ed2c79b0eda3afa44a38250fc8be55b24c8ee88830efd3ba5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8532c1ac097d703b925a55d3b4f3e73011a328eb7b15623ae96eef0e69315cfec7843bee9554a4edc12889d48db989fb7e81b8351a8ed4bdcb20f4364b87ffc0', 16),
                    gmp_init('0x97443fb7a155ed184a408e45dbbf88e6408a4d1728928f94083390d92b73fc890c9cecb7f71445c34b07969c2b92881b0e7e6fe049ad9de172f05da2405a7f12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cb9e813969a068f7ea5d5421c8511b65d1ffb76e77b09a7aa3b5e83d018959052cb1712e0b7506751b3067e103415529fbe06f94eb92cf196df430eee84ce3d', 16),
                    gmp_init('0x8cdc55c849ca5f71ebfb47fb60ad17bc00a949d9f4a82a935949dd0ac6c1c66e97179f90083f647700050221d80b5f21aec9f5872efc40b1f38213b08416dffb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6be41feac898c45ee0ff45e0bbbc912b3367c064c43cb418506dac627d51f77447f65556fb594a47705799ab14d3cb57ca607512d4adc923c7e3319fc64acf38', 16),
                    gmp_init('0x64a8b8a7c69a8cfa526052028552cf94fc3570142e32780c19d9e2b8aa0bad6442a22e136904479f75ce7b12fb32e86bc1c24a87907a00eb3c25d4113e9d5f8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x719c6f77c671f4dc61bd12869e44597d2c558f11d8f91f315f3232e3844e164cfc6878d93e3b809d2a2fc03a5839bbd1353f5f2945d332fd8bbeb755e9672762', 16),
                    gmp_init('0x11805e44d0e7a4fb37fa847832c3c8d253835a7c3a40ca644a1ce7619bb834f13f67786b3123edba07a7a93ad6298c6b7a16c8636a3531407b99714a161fffca', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b34f41bf7c596008e8f14a276214304ffdd4473957224ede9068a1db6dfa8b736b38851148a67fd7e982322a87407b5a6d89cda95632b7792f65381ba9150fa', 16),
                    gmp_init('0x8287ea256c0eab024a6cb136572a0dd6b16f50ca0e5b95c1303dccf52f3fecfa0f24e6cd263f3e3b82b001a3c7eb36639a7e3c270158302620f70f098e1b43af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x84f063fa9335e7aef34a9c74a599a52180f42a8f6767c110ad94947770f00e9e135d020478d9254f56ebc94de40028893edf926551e27c93d2a8629db2d92235', 16),
                    gmp_init('0x914b8abdae87ee1cacc6f9c55db2a2587f0b7a5231719e79afc0881a3e2b6f944d490bce0e5da766aead00676068576357ef617756e11fb3bb8a68d46bf27619', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1c02747f0d1a8984db3d59c08ca9417c82481f2e2029a554dfd5997e05f689d2f6c03ec892d057dda7ae69f942196860deefb0366cb9c2e0fc6bc1a5f1a803a', 16),
                    gmp_init('0xa9e5e8cd37e34bb8819f04d84b71d1cfb69460acb183ad60f67dee6e55b0e9c454d44cf09eee46c6098e984cf4426ef9e06796d4d9569100f73e5cd85bdfc2c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x136a61e1c0b789c536578797e838a28c8c4685d817404a3aeac90416d3b059a306428e41a44dbac39d94cd99b749b1b004612863adcace421371ea01c9ca2db9', 16),
                    gmp_init('0x9632aab470e1327cf111bc8569632c2ce9feead94b810de17294b6b52af78b07ce0cbbe61ed5b9c951d80ade42cccd2382bef8f8f4b58112aa316d110004f354', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2f99a7920a45736715a47bff6a32d314e4c0cb3281d841c279d8bbf9e0c677d0dd87d06668325ce7a9176de61ffaf7713602718ca420197f008f35a22445ae2', 16),
                    gmp_init('0xcc99448cb5b57727ad7ccb7435133de9886dd5072b1a7cdb579a0333aef74c5a81440289444071c7e8fb5c33dace96d9803df46a8980efd17a3ef6db704d689', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66c0fa59432d446f2eaa66856f126e3907983b57ed662ee597bd226cd72b56d3192d633d4931aafff57396007b0d2b56b183af08db648d4cfb24102d9754ad8b', 16),
                    gmp_init('0x1b86d030122ad3a2b9eb553e9f6f157e501aacdf78b4909315021670cc3b2059ccf332e1dcea0521e41e763bc061f3d7a733413521df6a0b77b109621f1aa7e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7379d29173ff62b39ea6dfa152f23318eedc1533708d9f047eeff781885689f1be216587d3b31c947e143bcc3158551aa5a9b21fd8499430082dc8af88da3469', 16),
                    gmp_init('0x5cb0a6325c87ef4b7c21568377076d0132ce9305675670ac1d31a952edc5c3541059c45ec42a0546a9545783451c4c5489c42cf524c37033b4982142c6b13d97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5699fb81a8012a1dd922894a06f08b3313cdcd606e51c0b5d846d6546a519563e0b4ea187c043d122c64446ebcc7c1042de0eafd2e44d97f0edbba5002b27633', 16),
                    gmp_init('0x823280ce6c0c30b918fa1cfa067e2ff3a31b352bd58e6d7e777d5508c940ecd2c39109edec03aa91eb238c6b1141d863c2ece58518ab74a8a19b71d4c4e068a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dc1d00b1fba41023938fe40cc1128628bcd053f7e5da2de44b072958d47075b2fe518d899a170a010574ae6679e842de3b1513f55ca5c5c0610820c1eb30207', 16),
                    gmp_init('0x564be354a9f59ab426d9e2711da12b7314fea1a9b7b9296ef9fcbf3b589140922ca4b04226b80b79a9959fb0ea6352d9a3f8d9416a75354829cc0e9f6995a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9dfd160711ef2dfd8621323134e71b6c0825e9d447beff82b4cf8dfd8763f61e8d7111a8cc73cc036323708cd3f0e55e874550c31f3a458e405fc811bbb33d7b', 16),
                    gmp_init('0x18202d316e686a4b243983d6f1b490f3935d52215121281f911e5117376a950b50fc8b6c5b8e7856a3a9565ffdf52eb044f90e85fd16db04d0966ec340bf8c8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb7507dd25f0c1bbecd13177c125fd25dc1a76370d461e2a1c6bc3d326ed9d8f0f46504df2f2bf66e241113a52222ff45e445d5bd2d74cdcebdfc2e23a0b8dc', 16),
                    gmp_init('0x45f282d139e8cfcfe9f4f6d9730928cb77a77574082c0083d1f0aa5b4ae49347757297f4bd8b9f95d5a600cab805143b1a416daa08c4551252f0c8ae7b8d6d04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9861f83dbff17525986619959e67df8615d21a057a04ec6a8861218454b7c50e46fda432250c51bf6582d94ce511b7da67f8b000b4f90b912bd1bce678c2d7ac', 16),
                    gmp_init('0x20511409a2ad85cdb96273662c2745d43bd757d8afcdad563666365f912f30517301c932c3fd7a553eb0b81d1df9ac374411658a73aee986852849aabd626a48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46069fb12d328af40f78946d1b08a23c5ef63d685a91406e3ac3014ec499d1dd18ca01416b82f291af3ac0cc564bd9499251a9abac2303895844caa2ec8073fa', 16),
                    gmp_init('0xf881606246c7e7dcf76eb46803892b81577fe12c07b171f249743928a6dc5f3094760c115f085dc63ce87c01a81890b3df934e41e4e49e349dc31a0379bdf79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x492eca5f267c94b0d0500a39fc283237e5da174325fc3aebee4defab5aeed530c37753d8d21394977f84e93d8885f4a843fff282e3b9ffa2c4688714a2668dab', 16),
                    gmp_init('0x11c0fd99506582b310a9a8d6b1f6dfe6542aa0ae65040e1042df532346d92adc21af8516e52fce68aeabe157d301f4d4473a83f7416629fb820408bd54344d61', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37c2fb0940a554bec2b649bc22dbfdea14b1f18d63cbb9086c37d851ad3b60ba9a90d09365e0e9ec675530bde95e8d0965c58f3e5794f008f53a9801e7676f79', 16),
                    gmp_init('0xa7d6b847de484838702b1bb1710e0fb27584ed695bb173722d755b4114402085f584d4e2cf77fd23875b56177db0009056045ba3650913f455dca44185883e8e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4c7bfb94848f7c6f57c99c2218ab5dbe61ce86f6be2962b75e1b1bd9bcd8af9eafdbc98003ffca928887f20b9e7eda833d3244d488a41ec7eb6f147fcfe32124', 16),
                    gmp_init('0x3f5fb150f234b9c1ddc8245d58ada29b0c4d1a378cb1f48286f456563e11b64b72486b2ee253454e1fbaad80e12557eaf12973a1709b70c52a50357060242d4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fb893f8347c1bd8fba2c86c5ee146414c1a74b828edd783672eac254016a0edc9ac2d023c32eaaeaddfdebe7c77d59cd648004724f596bd2ab8851ce13037b1', 16),
                    gmp_init('0x6cb425de0d9635acc2a15db7b6ee7426cd417d32f2cdf93ceaa306a3fb7e49809436a869749e246d4cc0b878997a8e708dcca0688786fe35ff8cecac47c801dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7c05f81cb38e1109eb1170b7780602cd5604b5120714bc472e4a9f953951e7a43918590d78a2931fb0e642cae97181d921398cf2e7ba1c43aaa4d6c9c68c4d8', 16),
                    gmp_init('0x8372fa1b352e9716e136655ba70de9de09f82ea7c87c8d0d99662fd06d4bcf200df5446484ae1047a261311a6f9325ed1a3cfdd08d31abfb59333bf56105a535', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb3ff5b5f85b09abab6506576678bb1215e756f53a9ecb4a24acc401e1eacc0fee8bc88aec1054bacbc29e87bf9cd22b8a97c8dabcad0b15d5b905796951a9be', 16),
                    gmp_init('0x740f573e089a378a265f789088949e78cd026c8af22f5ddab9d5b5d1d31a9d270dd1ca5c3173870fc2cd7ce2f549a113809fd937adcc8fc7e32b1d667b3f73ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x702a43bc323e881d55ed2019b90020ea90764476108e679209213218745e62023c8bd5719f605a15f07180d35dc3a765ae709ca84e926651895e68c2c03d948f', 16),
                    gmp_init('0x46b87427629f65cea16d2dfd7dcdf603c9f3e546775f1dd0383513f6271e6972c49037be84bd35e72ffdc1622ef769a4f0f6ac7c13848921a3c3efaf556c2725', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68a654658a6b9eeaafc10ec145a8174a6f19f520d0e8d05f1f0b88fea524b722ecf2d4562b7912baa0364f17a4176a66bad1036194b5fc6a7484477bd44057b2', 16),
                    gmp_init('0x356073e727accb9f5aa609b126c3fd7aa2a258f88e1f27853905c7bd232ecfc2fd4682220bc266e439cb73afa9be0ee7d70330f713c1cef66b3035915dd900f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15dbf367f5fc6b2508f87d5dab7b9601ff6b4f566819d1d12152aaaa3535b91f4bd241e1ad13c9d124dc4bcc477d262adc713ae4aa8ee4ddd2e6b72cd8ddcdbc', 16),
                    gmp_init('0x80a88332ff7369ece401e7e22429f212d948b0c83e6e96a6f9eabb6b8e05d01cff962a3e5e3200617119507260d68b6ad20abd20a36c278791d10e759f32872e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9f90481e6bdb9fa1e654a39817d7c90558791ee70ebca3add4f66474cbb266a335774a784f9c75bce27f5dfeb08afeb9207a7d881d9dcb936e93daedcf39340', 16),
                    gmp_init('0x1adcf58d04235be2db138f37b872b662ee5b036d38da5aa7109537e56477251770ed7e1e2ba9ebd7bd745b629387f6f09ee034554999fbf4ea0cc657359ce2cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x926fe313b457199c446754743e3e3784f53935b0fc1df1e8de1cd2fa65431e716f0e602c69d36e0d6a6f5ce7fdeb33fe4eb239ff3d91106d96bfdd886c3e059e', 16),
                    gmp_init('0x6398396e7f9083e3f8742743033469815bd38d80dc029ae620878106bec5210f0edad6a21f1c11274e67c47c1f9aa29d91a6ba3e2de17291efecad560f21ef86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x456e25d3ac3584326acea30c1e02751c7db1b37a4f43b6b27331aa6b248a0e94a3978762180688fdabb1a84a2e9f07553625d340fd12f2f4786a7e3d5bd14c76', 16),
                    gmp_init('0x95f154049eb2591c33b8ccc85f9cc17353349e07c22fafb6a216d4531c490017def4e6ca233a11f67f1819094b46051094ca381f04bcb78dfd21d5e94c179def', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98a0494cfa42966bb74130f8cff58a84c2936d8401ae2917683f8d6ed382fc899e65e087a05a320af48dc83da0c740120e7fe535872b2fd2c257abcb3efab4ae', 16),
                    gmp_init('0x506a9d9a6923729536d02982990d0e8de788ca75d4ed2f5a221cf44e73eb060a7002251485e4efa04ab6902b78055522c790655b1bae9c2caab3aad50463459a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b473137fa5f2c09cf8edcbd5deb56158fddec110e07159c72710c393f49ca1551d582cd3dce15f77ec539eb4c4714a8c40a24c47789864344e5a93ff9027560', 16),
                    gmp_init('0xa2c4de49adad91c54b72b5f70834bf6e9f03b65e8dce46c1a267b092abecf51b47f143cd40be252a8a5360ba1a4902c36344e373936144ddd18475eecbd9af29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfd616609d858775ba517f70ddce69a423d3ae62ecee2e92dd0a4759a1362c89ee618e932b8d03fbd5e08789ed8b5ae97b462e9b1ebd91953f1dca7b084b91ae', 16),
                    gmp_init('0x6bc031a096f121b393a516193ffffe000d99c4b3341cbcb2442f6382b631cbc44a7f4855ac043bc14f9ddb6a429ff2c944a5989883340830b36015225f31a032', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x914db7daa24305dbbe70337b60295f5ff964c58da7beb42d060a093d4f8c6a4c6a0912a9a8a21bcb1f61958932f65a3a5264defe2ce289eb75f195ae1480e055', 16),
                    gmp_init('0x5aa712ffac3284993b8cb53ef94539679c9f867beca95a9211c9f8bf47066498f93b7461c557f6f71100ea9e82ab3cfcde1ceb196af219ac0ef6e86145cc43d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x431e3bebd41bf80fb4acaac77273fcafcc7c49af9ef8d3e4f2c604f65694d5825c3844698d6b07b54f1efffcc50508efcc76717738ecdd33a4b18f59537a5842', 16),
                    gmp_init('0x38549e416c6ea13236754e3068722eb50401583e227476b0cacd14aae9ef4d209e0a7096009357dc1059331ad11e157d51dfce69218de3a2b84751e5fbd63e47', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x63c789bd16eeb2076d69b3a37e677263962014158cbc8b31a2c0120139ec69d1f7f4ab5596e6f544db568e1b2a03ebd114ec26fba10d1d4d141f20f952140da1', 16),
                    gmp_init('0x1ccc78edf7a5964b42ec5398fac3654187e61efda5a99de6bf96f4d365f538a86c470c762332a86bcfbfbe6cec78862afa7c2dc47bc44047e3e0febd6384dfb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78e0eab1dd3e058272a9ab174826289e028f7d55d68454205ad24bf8d45b40e92d94582c96e23261f544c19400d9e6f6ebac486287fa682ad3662829fa87ff0f', 16),
                    gmp_init('0x6b3a65912565c76771513094e442e3e0f75f05defbb6e4d42c0bb311c1d3f54697c68a62d327433e174588bed0123c16306a093d885be25890ee3f12355e3d18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94ee7cf6fb8a18fe2fa4983c7e9c80435deb8c3e2dfed48dbbca5533c2fbd166565e3f1e93ef4b71426e26a54e8a5e58d9d7cc024d5e91b27fd79f9e2e478e47', 16),
                    gmp_init('0x9c5aa0954fc34b313f30dac39cde317967f3522ef8e07a63cf3fdfde67cbb8d7199b5e4b65c630e60c1e7d874c1812fa6ae8f464be6eddda0673b4d33e83a38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x448b01a204dfc3b81587f0b02615eedb7e26b76a6d22fe70495317fa3009db5a06a02ba698c460f0c6ab31ed1940c93b7b9385ac1c5e8abd1d62a4a88d13462a', 16),
                    gmp_init('0x8a618ecc8bc03416280cd12af34e773b4d2baf74e677cedaacfd3cd2614702628a8c3eb21097af6ef1702ef209b8fe23ee641bfef2b1202dd17052e8bd754fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x203a15268a75fa7a3ee8314d3d3f4959f740c5e1fa0a73cd6aaedf5d386230fc9b9df4f0fd5cd86e2fe55b185a18e7abf4ddedca3fb5c04502624a5ae949e6d1', 16),
                    gmp_init('0x82a6dc5017110f0b9d1decd5218dc3ade17da002436ec4c43b76ff0e422e7c06982675afcbcb2604dd0ca6be01e9297421c5be6499e5de296ec46ff47b7b894c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d361345e452e66e35be2f871bbdf7bdc5ad10c1e2367841b0201863475be46ce5565bd533d1b8614cca91db3778283ed63cecf8c6a80585827a614a703844c8', 16),
                    gmp_init('0x5370dbd93f493957722312fdbb7055a83ecf6442b8c5a4311ec42c156f4b39b8da4306832343f38dbe044d960a91ffc7471a7101f25cb95c91353e3800384262', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fb7d0eceedfb35875ba4f0d7b3c93eca5af04032096111d57eb0ae81bebfcc0f18ddc263144cf7e979f09d33537bcff2f9168e2d660791035090e9d16aae329', 16),
                    gmp_init('0x264636fae61ef669741aaba27062e2815537a81c17e561b3e3d421507f497d5568b6e0bd65d62152820cf3dbe981dc918a94061c16d5ac33dc2b63cded49e988', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x121e269cc901e54cb6e34d8b8ed2e7da30ea5d706449baf02f97367a3cf4f72f846a9d8029aada83a87c35f5fd822bf7a2f9cedcca12f70b89d604ea0f7ac019', 16),
                    gmp_init('0x3875d04d8088ccef8269e348b554fe83c762cb9fcc1c1c8ba2ec037d5d6dcdb855931ad024ec06a07e4bfe419e9a91fd218d9a876fb54d0ebec42a9501bccc36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x767b02d81e37999140ab08b1edcd3bc6a32fe006abb4edad9fc8dc240b0b3f1870c8e0bbd8938112fe2095d6736284d9b30a909d3938447925ec6786790c4c21', 16),
                    gmp_init('0x80d75a3a337d9100b63448c6d67a4b33c29b84998b85bdc1e4086b060837828d2a0147c55a146d5128d3bf4abe6b1aaecafe65f7d88916bf818e62da48fdee54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7de5d6dba03a5008164ebe91eccc5b03b01e67554d7efc1634ece2fff5b68716b852c1a92b8bec833376762992312546999312bfdd5da7c7a901accc0a394f04', 16),
                    gmp_init('0x14a58cb4571b5c584b9961dc12dc8841fd989a44be0157918e11201a3d7730dfdb3606d5d830216e94df8737232b3a2c5b210c365c1ee2babd391ae10c455b24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b39408d5daf1183b086ccdbdd9a45af879b541d6464b4550025579f6f0b72854cb96c9e259700b7e9e62d71cab2cfd01646d38e7d68364ff2423106bb108858', 16),
                    gmp_init('0x5e3c71f189db47d179663fe08247adee98e8fc73d4e03d676a571435aad22a54dceb8399d530736b1a14775dfecbafed50e020507f967eb76a32992d7b5a5857', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6075f8e86e9a8125bd34be36e96125f7e4f30a1a4590779a929afea0021c43128b06adf54279e53fd273806127bd844c33ab7502c956878a85914476586f0ca5', 16),
                    gmp_init('0x2c7d71c1b4887eb967461cd4607917dd3750e0feba922c9f0744250e966ebc4f41f75db308cb43705a0acb528f2eb913576ea14dddd8b6e20a447934daaf516a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x575a896ab5eb084a834febc56f906400b562ec471adebbd32def96f091164b48ec04b3da3af37b77432acde4f80d29ba4588007f4dcdd516ee8a24262c0e343c', 16),
                    gmp_init('0x3915fed52cfb55136d532076cc1fb5546cd7f3a81f15d0fce65e2835213b9d91f3430ba64ceb45da8089eb4cfd2b325bc99daef08771282a9166dab207f778bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d35c33efa1ed0d419b62c1a58cf61cce1106b42f40868dfce0b390eb40c8e5d252b910e2fd202e5739ed39d199a7357cb096decc9be5b5ccdd73fab6c296409', 16),
                    gmp_init('0x2a604c59acf72349ca146e8a603dc1c822d1d4eaf76cd6c2900878043e2a6b7460e665bf2961b6f2bfa67a91796de51bbe18d43e837ad219cfdc25434117ae52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18aa8922e66d417d85b1b6c2b5c617ec18d44da1e4ea6485b9f586330971b47e1f31c070d305f8d61f8a80b3df871346bf0d0413067dd9e2b38735f24a9858e6', 16),
                    gmp_init('0xa83b4fc73400274acb7bfbd35681e4cf784c243f3b25a6522652d3732d06b13ded8ce84ff9b07115945add07e4102e6c23282c522097a5e6b9648fa3d5fbd02f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x99b80a160886133e049b0021cd2446e988484192d78485c8bc50f8cf0c138df7319107d81f7d7a952def679aa37398dc62264dbf8e7bf823192425b7041a9902', 16),
                    gmp_init('0xc1352ca170be87ad8c4839810c352b116973bf46106fca30b7e6b2be4d95cbe28f1e29f557c9caab59c828a0ba1306eadcef528380e5a0a749205aa3bcb8774', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35e34de8c9eb1467959a49872289447f7e30ddf6646a858bfac027e50bcf463c10a8c871d6de256df2de83cd15761d270a022067693146c954b9dc47437f779f', 16),
                    gmp_init('0x99cfd5a524b7c7af9f9af00729e6b7736360938dafd7b5e77e7ad54bdfa238cf7c6fc5ee4ffa1e5636ccbd7c7e4a3256855bfec3942ac00cd1f20de363762a17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x307ce7e9b6bd0c650ca32fec7f013dffcee9af155a79b0a7af1eb29df76819e93240e238c5c5a16249b88fbe8d8bb75bbbb5495b9dff03961f855dcc9e3f1372', 16),
                    gmp_init('0x35108def1cded008e857a57abb81f3eadecdcff199ca36ee69e999befc0cf203321f86875806b7623184b8c3edcb0cc29e817345ea68c5efe94c63090ff5b669', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c58f497c81aa077a47f3531cb8f37a71d7243e7af8b6cd2101113a2fb3a48f309c13297e46627a8f360c7267ffec07e345a9439ab24100c3cda69edf0106473', 16),
                    gmp_init('0x4e9c5ef52f827517051b2e1c04aa0ec432671944c44871f77513e330e8d785640bc4f1d43d46b3fb2fc0379fe4d729ff0e6ef097c508092677fa248db6ba843c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61fd5e16e0c3c2b46b0564c7593eb44ab8ea26c3ff1a53e554866880e45b38db3be1388e76d5f46e23fac07c1b522001d891dbcb222c364949a727741ff498b', 16),
                    gmp_init('0x5c73d9b4afa6a3c7171a514f5c25e7d425faf148225f0ccfe283540901d8708453aaa7297f2589b6f181216820f782729e7c80f710766e924b03f5bb7f7e2089', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92decea15a9a08f97e86098a803636fc56193e6dff051a7f2c71e02b6e716ce9b7050ecddf70134a845c0584c250aa804a2b7e7ce8299aba8aac93b4c485ccc1', 16),
                    gmp_init('0x821dfbd662cfc82f1132af6cb8035a247fe5e9a1776c1296ba4ded643efc1b5d2b895e008fab54db0c8f5ddabdbc312baf5d7df157e071aa83af766085f9a7ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c728e1e59c77e1d9eee7d0dc44cb04ba35ae3c6ef3879a8d7f5caabb1dce6ad96b749e1316e3182784937caa085175c8d47390c51523232db8506bece9bfe63', 16),
                    gmp_init('0x7cbe6b9cae9d57366e8bcfbcbafb887986c5b5063ba3ed001aa995e1b92ab4277d2f61f19699c989c6035ef2d7abfc0d292b5b86482b952a53a8813d3cba4e66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9caa017aa812b30def3f86cad73d9a0babd86e83f5817b90c53da62da29bb09353cc0cab58c96782f30e11f43865a155d354cd9d80f48b146b1a1f695ba95b87', 16),
                    gmp_init('0x84e3cb70c892074bceb8172b76d97e5fe0badaae9cc343e6e43c05ae3f38028331c121704ece85a4de28411e2119445d21fcce13e5d69c7f543d1609ce55f41a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56433867948c1f0b7e9084b69d33b5daf5e001f5799f15eb897c112ada1b83c11642a033da88652090d183bc17ad068678aad1de7dde75416a0f4ecef4670d41', 16),
                    gmp_init('0x4a6ee501f4d0dc1b7897dc8755825f3b293b9d01d6772992f88ae34d7855ecb69d7fdc2bc3874552bae46cb9ef9d501f430aa6497560782aaa9908ddb82ff10e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x119f0e4e1b1a8ee6060ea4b3150c03140cd3005b09afb93a26f00ac17f4245e6b0861aea413a7e56ed19a1eaf155ff7a31bfc80872ada52593fa596b662c29ce', 16),
                    gmp_init('0x2fa76f07bc500589cfc3720b7c02ede7ec2529cd31a407d90ce34b03515a7ff2a000545617d1087de4d9b47f5feb9811682adef892622b9b79929fe34dc6b371', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e8a9cead09d08a2cfdc3428b668a400d9a3d3c5d6b598f46fbe36ac07f81f8c63e000a2481cf1ba0989a28e808fc28e217fed4c20baa38412598de08ed4486b', 16),
                    gmp_init('0x4abc0a49bd3d6ab52b22df2bab410377129de6fecfc04b0aad9f8444addd056afd21eccf6e96c201036bbeb1425276ac8f8a88bfeefcdf152e1867b8f4356146', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c01992796d78103efc82b5e8e201e274781e0ac064c803512333b071c8fd18d002ff542a1fabf661e363a88d06ab23d2037365de6e60a57139c6e5a57bb9b69', 16),
                    gmp_init('0x5d8c3d4980bfd2b81d217cefef854ac3e077c93e0ce27f43296d88452dd7aeb51b3a5e195577cf919f2674f7307efcf50ed66287493cef2d2e858f03ffaa0d78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a9902ff2be99bdf0e96f130a84e03fab4125f698a96e98dfebbbc0d0f5e98cc28b6753f9376481d14f49f44b5f26c628b9c5ad9ea9d58778e78745637922f12', 16),
                    gmp_init('0x68451982f18df3b32556a0c468a95b12271bad0b64aada7e697ab4226b9d6425555fe57780cd6921a431c56c11e206b51b5ed9982b763e03fd58c59c5af7b8c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45d2e9051600f64669aa983197d5db3ce5d2ca9f3ff8fcc430b5c3ec1c6a4dce46862cd5ed9dbfdaf33a0bf62eb0e7a1dc3dc98151b4de5d1c295943107cd593', 16),
                    gmp_init('0x4d13ca8b11797434ea1e1a7be68ff6259d593f74b2e7ba896994c4e70d28ada76ab0740f5bb35360edc3d08e42fdc3f2c4ef9799a6739494d8f47e6c5e9f977c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79d078bd6c02f3a8fb6ff143e5482f33a24ed321218e505041558f25b28158ac1391516200eb59e9bc8644f3b5142eb0d72017bbfe76cb18d3a2adbe681a49bd', 16),
                    gmp_init('0x7d23456353f39a5acae7b4583fcd0bd3e052d80ebfcbf09ef4517924262f0a632d471911f48bd978ca3ab2f04c0c9031791a0bf9b002da0a8cb0d11a450f88dc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x994e82ffba645f979cf5441e7fdc8e8ce7ad18734efc8bf2c80578cd4c4e69d1259747c0229ff407def7cc4e03bb66e35ca4559d0e3fb134de3205ed455b75b0', 16),
                    gmp_init('0x6b10fbda2e7536c6d510fcae5cac218cce5df7e8bf537f4afdb142be756373247b2a7fc869e5bb51010c2653668e7a2fc7001ebe494f87ce8fcb56692afe52d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c44387449618db7be11932d30ff11e676c655e67b497f5b76cffb8e8590dc63ccdbd89dd61557affdb41ccf3dacc2afd0c79921b95a86377bad9088ab924803', 16),
                    gmp_init('0x1eb4fbc26008100223795a8358216e524b19a9da118c68032465ace102526dd08abc8db459bf4a17ed40c84c61c5527918490fce43be10012701d54c2e05c7aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d00f81ad7d5ad6a4aaa95d0469e478241fec5dd251d295b2ef77516944ccb6ebac86403c7eeec51ea55530bcc8321c88c49396d5860fdf5a3f60a692ab7cd0d', 16),
                    gmp_init('0x71412bef31a05a5ec62d8b585bf8a9fd7f5a80bcd88a9b83fbc0a1d3e1358f7a4335fcae0037915ca53a5f1fec4f46ceea5fc97d29c02eb3e42b965e6526e1f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c7140df7a9d28889cdc522021b4178bbb2d7dd07f2a44551b4d905f1eefa9ea62ddb7fd43606469b15e0b983943aae7a2950b660d6cacc86b6232fbc7619098', 16),
                    gmp_init('0x871f643aaa515433210efc532a06906e3255316a241df42e996fcf5f426bb1e83682a1739f36f9f0be0a1830051a1f9e7587df2a2b3ba80cd810a60e53456906', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1419bde69a14af84b63a8620df5737ab47144cd77e46d9aac9ee293d11616c833b52bdb60ce9ad131a64b8053fe71e7928a1298b87eb411362dabd84954dfc35', 16),
                    gmp_init('0x67b639687c57a5a93bd41b7b62b8f758475081f808d0e06ed34f224a9dff31a7df4dae5fd6cc2b27b1bfee2fe0e285d3e9ce661da366ba1ff5bf2e0bc48da6b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f8f5d3220159aed32c234251c7b69eaf71b16df904b0f9f083e8a22e52530deb8814e78140b7d2792480ecb53b4354df8909634f172f613b3b73a5b6e9d296', 16),
                    gmp_init('0x4b78e4a88a1d1a0081395366b0ce52944f5b097b2006797da4d0bdc09f46a8c8bbd9815bc4fde41ce13d761684f83e1633dcdbe7ec5b78ac80b98f933f0e6f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1759b28982813743a83fb785a97593b73b74e77950011dbcb7988e561f95fbc46e0f076643ffe564d1fe1a589553ed0f81defa6819d6cc735f8a4b4da2adb541', 16),
                    gmp_init('0x645d360b1b92825b255cfbf0461c896dcc87985a00c79481280648f0ddb5f40dc665322e6f84897e86b34edf6fbe31d993506d788c54e5000c04a0b94a0a5d7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44b9f47824c16f5419939bda6765827184b497c60225461a0af212b06474bf79fa26e52c57bc3dc187da388056d22ee47c1552e0fcca7a20942fa6ccfb34f5c1', 16),
                    gmp_init('0xa821fd65dd6852690b3e2f1518449785d8cb62576b9fc6b296a9a114246b5bb3976a753a39fc09ded5513c1e26410c7a981a3832834b889bb4cee6184c051213', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e06e108e4e00742636517f28a46a83fc6627e6f940875edfb557c6f4b886b5760b137e7d51a0637ba314aaac51329fee5685ed933c3a647371e4145cb7398cd', 16),
                    gmp_init('0x328fe8946bed09dacb6ff7978ac78a2ff8ddfd5797bc88a1f7196a110a26e8819983c0ac827b0f1e9ca9ace9ba0c749a75858078c650e509311d4ff73ffa87fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b1bbcd1c15fc988389686a1d03ce439dddc3218902126c4f8da0d54baa212bba90249f54189eea168e78d792988ca33130aa960286e3a42bb43900430b9c5d', 16),
                    gmp_init('0x860ed7e65fc72be862320ea02bc4ca9000622f097815cdc58e4e6016a34ec4a472665d6dd0b97b1cf0ea5acbf0a41ad3bb6c7fff77f5b93331795f84ffc267e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5182f12fd88b94e23201ea6547025202755940e24ae27c74edc5b106022558c80023bb1323fe3198e91e9044c36d24caf3b07492bd2e107d8a29925db013d667', 16),
                    gmp_init('0x49bfa5b6acc6bc1c7904e3cb5393ebc76ee85c5a6f02cd825aafdac322a3ad26c7acfdb7e2e2a3133591165e0924df44f55425c1435fe06a607156f3c5d864ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75500c6b2bb55451ff94e88072f3e50cd82a0b5952ca898131c264b59f8a542cddb591a05b016dde4abf8d128b7e0f15b93c451a999f9376ef01e5df76c59fe3', 16),
                    gmp_init('0x8a6fe758be9b23e5ec25153cdbfe7d7638b61a0adcc76aa5f0d8a658814eb4e80e5f09c181bb5a1c02217ce6ab16472236ffab1e36fb16f96159ad73fa4d73e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x199f81397470ba52882ab679763c699f3126fb8b5b07f2843046f0a1086309f0aa333693d7dd6ba8e949e3d3c4b3065a3aaa95c56aa7883b41e9534dd4f80ae0', 16),
                    gmp_init('0x6a91ce154b02aa8603c964466d00d6a68e90e934e7bb39dbfe33ed45c9d29ef72dfd4c756b42bf1bd7d1079af867395173860b633fb38fa4e87e796045862d9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44d360e8dbe717bfce64c97b8cc7cd2e8308a6278ab23c01ed7a0ca4d4fb8db1054e5a82356018a19313fe5f878b5c4ed7cbcbe59522fe936e2a74eec3e01786', 16),
                    gmp_init('0x9c8e3e07a2131d6b88770e1e234fe8ccd6ebbb7d3111f4d9bfb279124a729f74fc12fabf8c20fe0508fcb3f2876de59aac6bf9e55b5bccff7e8116425a759aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x415cc6b3ada683d479956112d4d2e252707ddcd2623360bfe81edd615dc539b5f316a19ebb63283b10cec42854675fd1f522f8375780e43e53b398ceb3f259ab', 16),
                    gmp_init('0x3994dd960f9ae2208cba3163fd9f35324f89322595ce5b0eec5ef63e83ae83491aa38788e355fe5fa8c65a7e6d024681ae0277e5d9d324664d1e8079b5d09975', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6432ae2708017a04af3279ade21333965cde79089c4470372621188204deedfd40fbc7df8e3115996574a1f4758cb32d3cd90c632b9ff5e129b24f9974c2b69a', 16),
                    gmp_init('0x8d6fcdc7150919c814c215b215bf4cee4c08e3fcebf0357787ad97f15328bc1d7fd4e429d2368e9805cc78feabfb1413298b04b990f911b3175748aa61cc2c24', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f538dcb5071bebbcd0f9f5f418e1a76554d49fba3c9eefca4a90cb52f54542a8eb7a6130110494b68fdb63376a5348c780af6b8a3c995911e07a42701d7a5cb', 16),
                    gmp_init('0x9386a6c6e19015a8962f3f4cce3e926663018ea44c7471a3193b17999928a3f729f38e9649eb3c8f18ba314628b7b6d6596ddb00d46d7ea60650ad7f79c0afd8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cadc3154f225797daf347b4892d903b2816c5632bca46afbce05467c84460d1b656d95e8fe7f0380c3dc0d3284e7efd5d542a975bc9cf3b9deef0d6422d64ee', 16),
                    gmp_init('0x5da65a15ca34021894df8882f7554f55b21081d417c7f3e93d9cb05640984fdc52121dd2ba2e10d769a4a637519b5a9de901078aa1ee131ebc321d0d9184f1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x534e2dcf8c8a64d029fbc248729b18c3cfa251df9b799dcd4b9a8fa8ff4ce87056ebb95f5d49a63c8f47589d0edb7fadb09b9ada63df502d7153ff31ac8b4e43', 16),
                    gmp_init('0x9b1b1d0206794a96710e2547074fc7460ccf779d1c680247df03a246d054cdfaf5e747b449ab4787d9a9e903eb9b3cfd293f2f4962ec7125385a347726e18398', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x992c1defa338ffeb762436b69873c69293197188da20e76322c201f1f2c75d07d278d9e8ebe355f8b0eb3f2458e03fba943c4e62067c4de0ef85e9d1af2cfad8', 16),
                    gmp_init('0x6cb848d47fb8820a143e2eef5c4796dec1f8a05e2b839045ad3df4aade7e9ce2b13e4ad8d69270e5e3137bf89d47000e783e6b6d5581ee7c27667410cf8998cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9494380a0cc1db6bd01044b80c0853fe7aab2e77edd1510e267604fbff3db54f3162d8dfdc6fa98e2380524fdb79441c152d2355d76d95e8c7bbf3ab7d591498', 16),
                    gmp_init('0x143ff6786d5d5b4a120e798974b5532ff0ff559acd05f79686512561bc503a9617c2a201c9df3e3e48871008bdeaf91d3672e231470617686a230fff4ffc8a7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x491fa962f8fc5e4ebfcf76d623bfb754931753f4daeee49b4f0767a7ef30fb9cd7e02b622702ae06cf3a3f2634e8f9ebf775002be48de756edc7076e8ae29679', 16),
                    gmp_init('0x9e0c6a380acd8df21859e5a10f76667c4369a5f6e6962d24a58f06b96e70c7f9dd5d6c908b2f267fdff10ce3578552790a88d7e7469b1e63664dd3ac436713f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74b8c8720e99a31057f2a0cead967a7b96395ac21b7939e26be28a18f682c75d1d72ff15966a2cf0199286c4b6be57f15062aed3a65c50ee41cc895da01584bd', 16),
                    gmp_init('0x7c80dba406a2f80cdf7811edf21e8ccf86c675cda717f9913c57eb0169251a5a421df3c514068e1be2e1d2a4132bdf57d92968eaead30b39b7f601c21c0bc9ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65053dbec6f500298878120b0078bf5da6296a0fc09646156058ff9d980b846b9bfdc241e35dbbf2fe21deb43ba3451aefac3333772aeadc1dfd78ea705730e2', 16),
                    gmp_init('0x39a623f0619cdefc10c4a0f004d983c129a0e0f6dfab4440144de57d2005b0048550fe245331473dece60640ee69914bd2039639207898e3aaecff8207d4ee7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6cd5798500f0713b434b7be7d01724f4464f23d0a5413e783cace3580654834cd0fbcc31aec8e0bd4ec9d5293b84628fe6970547fea6c9758e31297c33cddc8', 16),
                    gmp_init('0x27455f2f118b13d086c4e40196302946f736b64063b98d4719a9f967612fc9661b50a2573863a95f97c84f15e0b333011ac35df4463c6a72a73f09a4fe287312', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa021a3c3cc006bf2aabe46c48cda2b9ec2233b24cadeecc06ec482fd4515edd6648003a0be08a86f0befe7508ce7f2b6cadf3e7460bb17db5f63dbcb7d1c594d', 16),
                    gmp_init('0x879e79e4017ff68999f8b108f8eb85c442e6772ae8400d5311568f9e1164197e7691d9d426c36ec8f62a9c97ad3111d685dafcdcf4b8812124d452f46ddf9737', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6301b032f57a72a622aa505f8385e22d4abed4170bfba543dc8aacab5865cb9844b071b08b90ce0438088f5871f364662b7b55cc28f586438155588d6f349c90', 16),
                    gmp_init('0x6ffe42cf7eb11535c3d70960a85a24821f01f94bfec5ba31429967254dbcc69cd9785838a9a5e4258295676ef1c5a42307c9861882b4e7160d7131c0d2237120', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49fe03ccb26aa4a99d7dc016313b02eb5a0457e9e13f7f46367538a8a69791753aa58caa72d2530f0a8c1f1e8cf04d7de513f3f4f8ddddfe345972d3b345eb42', 16),
                    gmp_init('0x3fb4ae37e7fcf37fb99c6ed952ab249acf54edeafce418f1b20c4286054397372a5f313b8e8ba86de18decb0e7b72ac12efc3984f6e476a571f9fcde4841e023', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cdbfb8724a053041114cb460c500ab721d9ec805b02be4624cc2f735933b0cd18e4153015e991f6eb74ffbe35ca4f46e32fa8b47213bc795ed0efac5dc96ddd', 16),
                    gmp_init('0x594b62def98930a0d4e321ce77abb6b2a0c9415d2f422fbffd34e8120c4280e14f901f33ec9e79159974723af76f22fcce2fd97ec7404d3d730ebcbab72ccaa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d38ec8ee60529095c4500ac31d36f30c838579304dbbdd483aa34de0c629ff02d35acdb43e5641cf93a25af9ec31a43196145151034853b5c9f8323639fef6d', 16),
                    gmp_init('0x3973dcdbdb34d82f33a9f720a76d887c2027b1dad24f16557432da951eb4f15b09d70a78b16def18594c32c5f3fd0214510487efd2ee2db64e06e16c7fc929fd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x52da33b41b4664bf034c9f3e655471ebbbc1ff646c21d1198cd56ab40ebb788635e5e0b044d3f268301978aef15ccbc06d2736b3ac7579ed9b46be26f9881e9a', 16),
                    gmp_init('0x5902bd030a3d896f00541f5ae75ef5907ef09921502d3f17e43493822e71a1df29443add73bb9f0bedddeee38a94f46be5be4290861617edbc4ba0eb46078b6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x899c1502faba34b32017123ab84dcabae01bc16cbb549815c5d7eb6d48faffbc9abef3da96c0bb7c60a4271ee08c5e10208f5402b31194610b98cde543b20815', 16),
                    gmp_init('0x664127895c1a2a9350020b3b242a366c1db8f987a7531c762eaa6d1893ba18625f165966e71fe1261c37681a732d019d2ab028a0d0bcb47d94cefb37fa5401c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29c4648367fa54deb4646b1b2d5c8b4fd5173bf144e1e166653fb18b4e9ea2885e43e8fe0efc474bf48ecaccf38e543165730533478dd0f36d1fa74bcefb9511', 16),
                    gmp_init('0x8cc6e5f2fc2764df23b8f56f82c98cc76f9f671e0f9f69bb6f224f9b9bb93718c8253e550356a6fd0f0422dd8812a16f314cd8a3b15fff64fdc1a5641d309cd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x672e2d24241c7b89fab0dee50b1a5f8123780fd1bc3129d1ecb8303e21bd1c12567ceddc974807a439ef9c0d0d1efd4f83ed0d3c92e0f1326d9c37715ac6ad21', 16),
                    gmp_init('0xa2f527f128a803f3d9f13e52e76a7663d94c6b83260f380c7fcf1eb7300ef9d7f5ae6edacd9059f43f06de875b3666ca0072ebee3b839e538276a4b275d123cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bbc9b2c08df7f00b2fcd45f7cbb33e76b6f96ee858f60cb4adf722e721b9540216fef135fc4649d9f32244a02d620f1c59d49620963ac08df238339f2732e3e', 16),
                    gmp_init('0xa25eb34a0c8edea87adda1eaac8827484dd24409e9ae0cb787d99515f2596aa6b06e10060701b3818d0593475682e6b0025586708be7806e01c38699ca8c21f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d29f7120866669c28a6bf0db26425be1c9a511fb02fbf5f810b13d0bf4a2f91282d4ad92c9d6f74ebcd5e63386061b2fad88babeb1ab994654aca003e35ea2a', 16),
                    gmp_init('0x800659a95c445667dfd12181ec29077cbd7a6e16a8a7dda90875c963e90c69424c5c3a6ab7e6187efb8f4cb18250b8f1e11fd19d60ad3b6cf580e473a90e571e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96c74b3836de00120def7fbf5c2be413a5ba780b5b1d9e0597313b1a63ca95e7f0821f6838b9530170d8d27d6a80cf163d7ec1a9fc7d5580de247996259b3f35', 16),
                    gmp_init('0x294387fc5805e72c1b55d60cf0bf0cec9a70adade888602e3050b93a21d4645a90f49fbdf31135800a22d1cf2558a35449c45fe858bc7af7bbc6347c6e4bd038', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45b1f4e932f38ae3ebda9ed70ce993d39760db897533ef3e193775cae16f0cdb5a6728571b2656308607053ab35d99529f987fae280ba56f32eac6b585d7832b', 16),
                    gmp_init('0x97b98e3450f3b5f296d0731e750f362e40dd13abacf95f134c5f2044bb68e4dc7704d270ad25a8de3484c9dd609d490fc8ccc4dd03f4351e222d0645df6eda2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x454b5a01d8b074b0d8b9996df0aae20f477e55bfe6483a53dbcd44d8fe9aa4b802d2207740f6544d0925fc85c4d24d03dbcd997b25a2c5d835d584b0625f5d3e', 16),
                    gmp_init('0xc86e7e45e74b82df84d59f8836a3107de234dee63e932e2e8cf518f39eec3798e85974b61dfec721068a6ce3958b0395554e3009017069c32e1f64a3c60a8b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf1a1fd09c169c2276d5e383213a7fbccf98e9c3fb5f3c054f2d55f95fccb9a9f2e18609494d877ded859db4bc36b4d65b228991dc54f8fc5d6859130d7b7efe', 16),
                    gmp_init('0x8befc76a53413cd284f3787b38c59073ac1b80050b88f261341260189aee4d3a76ba0a051719f4d83cec474dfe76b75fb61831ab6d06fe65554f739312bd0396', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7e4ed3f54e355f3408f2d9039a24112049dc94bd0e0c2f6fa244842eba4af6a8a748aa651fa51a476e3ab8520eece376ff68885ca11e9c778af4f6577f35fbc', 16),
                    gmp_init('0x8c2102c3517227137597c69f3ae709c229eaf63389fe40595d8b5f0b98d0a1faefc5d60d7934a0c9e9b914276d991c26dec118ea8a2a20a7c9d71d93e44236c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c467ae0bd85b667530c8e65cab4739f2ec6448ed7e1a7e2a2e9ccb610f9ea0fa4b82aff2d18e48786ab7c9a49c367f1d28641ef7932e4007d885ce5d06358d2', 16),
                    gmp_init('0x40d5f43015e4c1901616c2e47c5a00c335e2199dc395068c26a02ef817f846bb686af959db40ba8e80dc91d68c5180a5adada15e7a129e217a443359eb24ecc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x361f2c854ccb1af548fc4871e7a2b70566d8610433a8d27a32b503b45ae47e8ad2707b6ed391cb87aa6da378a87f76d7e96cac39d4b18c6e7971c9d7c64996c5', 16),
                    gmp_init('0x501c1faca4b4fd2009e3300b18f833db0d490d031a6e09ea32ca3612f2ae6d1b2d8bdf7a6bcdd9cddf4f4fa9cfa01819ab0bba922ecfb061d70601746847d634', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57d147b6152a70ddc2a9a024d23a3071eb1183a0706b30395f6fbea15d7eb193c24266c32b5a449f0ab92329103ad11ce5516da5900b2a000f2ee58949f69115', 16),
                    gmp_init('0x67414d5c57df0be6f690461600e6375074947aab73094f2e4c781f34c84e065f93efacaf1394254826797af5bdc2a9768e5ceb58222ee8dc2a586230efc8127e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68524eca3b3148265530427f3363edc3350d63f70e3a2b3a38dad56e3e4ed406c7918847d536de6bd2b8eb8c466458d5cb83d44e06a58548d8b7779d4965272f', 16),
                    gmp_init('0x613dd11294b43866b10e777fecf3e1d0c05a29409760a5ef1a5e3144096f5ff1d399f9856e2c1ecb35c8b01d39fd608de19d19ff18f83676eb20389133961aa1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6eaffce0b4b2eecfe5684ab3450beff395275cff9502a71d2a36d0d5f9f1f747671265162936b982c81227869564c350777e565cb04ca4d683d12bdda5af07e9', 16),
                    gmp_init('0x90cdd900e5f1abde848572e4124c4627c6c6a146aa320ad309a889701c4ac4c6073e59124a38001f2ad4ff8fac454f8f961cfeab81b005b9dc3e5a62be7fd9b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92d075fd7456f9b80aac5eb3e6b0f15ba391975d6cd365695d519d6ba07608811a661f97f89c15a9ed2a082060a8be097154af6ddd0e3e562395d6c82ca14f71', 16),
                    gmp_init('0x1e4bd8fb9a07b0990e8030f9531c678b7c3dd0cf274a71b11037712e3db7e1b6ddcbe0b431a1a8fa8dbf058b3cd605cb555013ce9dff13858d7a1eb9025daf57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e8f701a3b476bcd0d109251a02bb1fd95a315877ddafb0871e4c19c968fba858b84e1ec14654fd524f2a944bcfa06b245cc009c1eb2132ead4519d77ffc5aa4', 16),
                    gmp_init('0x201670262b8d2b8bcc5f9022633c1af16b9e4ee1ab01af75ed709dfba88b3e8ef39faad1e128362742af50ea17b562d7ac300cacfc9ecf377532fcf2c5d3ce8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58cf107141bda0f0d13a98062e8d96548deda92cd3b2c9112b4f41567ff7d43a8f57cff39287d7dad3650e58b823122997316323659823d4aa553cf79725b4a', 16),
                    gmp_init('0x64d9b43a69a38358698095dc993c5a2fc3a9bad3b6645ec5312319cacc925480ee20e2a987f09b89e7a5dddd099b9fc306e60a2f1b3a67fd0455ced52b1fc5ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90222b343fb5e05428950017501e187a6a0b2108ef5f0bc77f143dd7eaa58ceb968f9daf878e467df978a672fafa5aa9ccc3cdd33b408af10ad16386f9a56966', 16),
                    gmp_init('0xc22fbb0e2fa3e0c429b0f99e8f6693fdfdfc4edbcfaa35b64bfe8b95b11b30da44edc4703686a23097cd5e9ded5a3d77fc2a73a1bed1b15e828b65c1a27bd08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e6e227042ee4a0b4690aabb85bb867cca3614d4b9c327a0689af35ad0bbfcfb56daa69ffbc5382264e8decce75e1dac9b350702f37050e7fdc82b884820cc92', 16),
                    gmp_init('0xa68f1f432ebec9759f11566dbd2eee1bf22be258a661880848ce80c661772c9f22bb0216953224f8892940d1078c5cb06edb8b846f52a40b82ceee70b0e0589f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21c02b949ce9e1f01147084157297a778c4c8c7b9f2172098a076bd01261c12068053d98753481614755641a69dadf2d3aad00f1775bec2f10b51f0233cebbc', 16),
                    gmp_init('0x86c1580dc5fd15ab687e7424c38f146f3cbde13134878fe90c532f74f2dd66cdb5dd31fb0aae0379d3e7a535606e28ce72db433dfa33c8a4663e6295697df66c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x172bd7bf6a2b6e045017a7cd204b14b7578fbb5b929aeeba96b6921c8b57176cc7682bf1c8390fc349ef0926b0d9c278db3bedced7e9a236310fdce8ee79282b', 16),
                    gmp_init('0xa72b315f637c6752de7480d3bc7ea4a2f30eb75fec693b28345dd9959ec5ad08568d957f13a49acff9ca20f093aaada811a9c20855b011f490bbdc8ed0841f72', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xca922795c45fffd6c644a71c0fa76b17e4b403fd439afc524779309d52251921a2a6a2566831c57f25ee116e9f254f1c5964653a30c4e125d69f6dd8629bfe9', 16),
                    gmp_init('0x3f86c13f5e84bce8d5f20b8cee258b663b869909b308798b6b53f412d15ae09204b1626951b9e31681e7c7ef0c0bbbb497151ab764cbc15ccac5fe7b7be2dd8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f4b268b2904019688630d65a5ab2c6b984d76f189c7b8a5c7ab6cfa046003279f2566c91877fca89066f39f3b606f8cb112911962aaa164799c54ea83dd4e89', 16),
                    gmp_init('0x100ecb7aeac3a9bade0736074a5c0a6c58f7bfeb3d2351f5659a75ec8b67f1405dd36d8379bfdaf801a2720fa0f8907c599405acdb54c30d3ea6fc1857a467a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ce53d1265cda3eef3aebe9e150097f5ab7c3a9e8b5cc3e0f5dfefa442983f83294b88ff13edf9e9c0be8dcd31053943cd637b4ca0fe9fbe02b14731a82ba6b0', 16),
                    gmp_init('0x1796bd81a889f36ac65f2f7e54f703ecfb2799e580920bff235744f9cf7efa6c71a683539db6f9be681434d43b6cdd464ba92d241a4706c58fa30e2dd395684d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b9fa3889560e2c0916c7ebd8591ab7bdf2e1df79e5db1ea0404e49a218cfd8aa84542ad0b2223b303143520589b1ff638a91d2d7aad13a69513343eff9cdbc7', 16),
                    gmp_init('0x4046564da63b45981955e1c556e265a0146aeeb37e72507cf22cf2c2c6e9b9c5d691cf835fedb724c9dc577dc3751eb42d64d3fed04077410dfad6bf37780a0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cc708b2d811092c0b169b943a38c1aeb146332b0269d4887f281f326677c2fa1ee0ab2c76568a87d6e0b928063058e2b4b305d40f9ef489aa52612ef3ee65b6', 16),
                    gmp_init('0xa8096fa664dd5d2d25e1efabf4ce04ce86f582901ffcae1b41b58c59d4c9d8233b26c5ae0723527713afc89853116270883326bbb1403bcb746e2bdcaed824d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b99d87fe8b596e27e708fb0de1276a8f261a984a17c214da891b32d0c8ad2a4c906fa37ee8bf6088696362fd0396aee12da80ce739ba43572d681435a8aab38', 16),
                    gmp_init('0x21fabe95fe02308f22b009050d92abae7a48696187bae322a31996aa9b558e6f819247a551453e10fce4830c4e4e754acf989da4d9db568bb562bb6f1feee205', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47230e8b506729ef1602fcb5950126ebbcd7a5a956a1e9a6cf428d55574aebf527f22b203710dd5a05be88bf252a0e34d00223dfc0a66960f5ac2e522a488e55', 16),
                    gmp_init('0x658f55ed00b6b16008dedd70c50ee4b20e5647b31690ed52715c514b40b8fce63eb68deca702e8e2806e546989edc2eb9723165dc26d6bcdc06dd2438e270f2e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7ef2c8ededc30c73c76c4401ffdf111d8b3ced6513ba28b64a2bcbe6f40f491c4ea615b813d6c5fc4b56e36c338f32fd216a1bc7d4cd9de421cee9025d980103', 16),
                    gmp_init('0x5b3ab9d077a30b7412ebf6c8d3e84e19c5ce57c9debb469eada9748197032bc80c7b0a09c7f0ba02d353d362548c217ce316d0ae19da727cbda3d42322628712', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8832f3c38039915966df28636f299216f7ada49147e072ebab923bd548d4a52ab625ff3bab24e3985fd8d54278f1f4d765fcabed7b064cf683d11733ddae32cc', 16),
                    gmp_init('0x3cc2c27d3a355d7524df8359c64dda3daa8d5ff39b560195e110f1bca5417286433f30ce011695f0315e7ffce0d19a6c0e524c760749ada5127505b487e89d42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x420185be6110be28be881ee1e71106ae48da5c578b60d67228f14ef30c72c7aa73f7dc2e4be91282ff8a2f54f013efb664a4ce158b39a3ec954b0e36249845fa', 16),
                    gmp_init('0x2278cd38752ec805ef43ffb93c2f49005e40f2ddfb9686f7aa523bc6e626d305ff70ac093da45b64ef908f924c3a0d9b8bf0708d30d7d35b2b3933fde9af9bb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5231ef89f4bf03ad68272f151fbfd41431c4af4896239368a39f6d120383a1ddd40ab5c4188b910adc9e288977e68cd44d62027d9d39a6c365097d0458708cf0', 16),
                    gmp_init('0x8df571b34eef3d5372283a016eb411d7f847387296d597c14c7669e3cabd2c15af47be3a0d21670207e17db537592634de473403234538ba4444b5ed5da528c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa83e6c9c3666c7799f2a64b01204da3fc55537e7b7b0b128829ec166545fde23caa6a0a87f7b95c6fde136bd54026324fbce9cdbb92f66b12c441441cb32ee2', 16),
                    gmp_init('0x41d4de3bdde59bc58441345d8386ab0bd97f144fcd58407d7aeaa356158d3912114575d72d347457090f8d09445897c82a5f5719e968eb80cc21212172453176', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x957f4a7fc1476747cd7f2a479d53d90651001d7b2c83b66421e504bda3b58b97b9d46bc031112da21dfd8b97e3ccb8cf83cba0b9b870653ae3da6ed4803bb895', 16),
                    gmp_init('0x3319e3fb874b662cb9fdb88ca500ae7995550bbe4a76ef1dc921de5509925b5bda0e843c07c7ccc6ac25b0be0af8dbad6c84c615249cf72a83dc2f66684ad529', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19d88799a9f7c6ee17d9f0b4f0f6d8aa8e7c2c2455ee5bf84adfe56ea29bde6293d014551080dd9a5e36f3c57836c5055ee0d5efa63fa19803ef45acf464235a', 16),
                    gmp_init('0x14ebfd86bd31987c6ba51c68ec47b451a75a9d91b77b98bd61a1d156c412974e0b71cbb66f7cbfc41ca46f034a240f5c31b1ac15d0eddb485ecc9f99143386fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a10cc1d8cf1bcf24f18dcbedbbc27eab8e379d23bfef0a2d40f22f754fb418e121f7ddf4c23b7ab5e9a0be835b0dd0e2e2c8eec24c3c383bb009213a3c7fcb8', 16),
                    gmp_init('0x437edd05360b2a11a74b1e2f46a348b65789e9e560287eaf119857f0338649bcb3381fcfb2c0e2857926924b32d9fd22b6cbb90207d0974f3c31885dda22df8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf66d0d9d61594daf8cbac6f03408bd0d5c45a87870410ebe3ad4647be129210b3382c0b2fafff8d80293e65649e03327e58c55af9d7f3e1cb42ec4a62995c05', 16),
                    gmp_init('0xa526c5c4035037e6a9e3c34205886a12d3b4a032db13398ea706859685c197d2b3216904841b5953bd67cbd8bbe1d03a8c9e431a26d9dfffc6c97c6f784af4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x690ab77c1a3df7d0d1494ea6fa3cabc2a4b8ce245147026f5dc89ebcae38f9ec62fa128dc93356946d70be89c2bc9ccda001f721e59ad56669acf6e099406cba', 16),
                    gmp_init('0xa64a8f76e287a94796b478caefa927f804a405e11043556d12e4536c28c58597f53698f7076940d5499780ed9d178d199ae70636f2e7dc7770ad2daee4301251', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e586c424ec4c17cbcaa03bb3204177a8f43106ab6d8ae1fa2916e9726c83d0c6a5a3613b699bb27bd2e7fc1408353154ada0a7d3844b06abf40f6a23015dda8', 16),
                    gmp_init('0x4818bc6f5837854b31c81ab481c431e64ae93f3c4aa05344bd728fc24997ccb3011885762b51fac6ddc47f410f6745a3aaf531281da559bd5c8d116b8c52e227', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82b29f5faeddc6b3ada9ff19e04e9f6c62a44a8c2045a70b735d2e7cc18bdbcf4801a39bb853f205a9de72a3c50c8954078c8f77588e4f9d8f8cb088f7f3916f', 16),
                    gmp_init('0x8fef83a7de57f18d020071fdd1f2b8546d97b1870eec0529d31b3cadaa535ab0d8c125c43c9b8460a544b7e2a89c3e43bab47a7797315e26e92a49af7c0e3a83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa78a794b84742112e4568e452660ee279476acc93a380b4b4e932658d6d58dd1a88b0f763e94ef661bfbf4e422714b1af0f159a649e8f35fc58c701e0d1f0aca', 16),
                    gmp_init('0xd4e3647e3f9a1a9b2e82f1f974891354de66079cf07c1c61fe19d8b0b3474be1a9b248bdbd014af7559c97af3cdb49d9e200e235e5eb91142697bd03a4bd89a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd328a6e96480f41d807ea16366e54acee770bfe7d58b5ed4679b2384dc3216e8c157568223e4aa3e9be971efdcd1955862d72dcdb1db7cf08eb0ac7d514c354', 16),
                    gmp_init('0x7e218250a6c105eba751e609c380ec6e1178353c46c1daae36e981e27279c3895f4c5b2c23a8e743377edae2aacc795c58dca5c9959a6555fb2d96f859306401', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ef568edbbdc9f0fe9b1d1fcd62aa726b14a5861bfac79953e849b15fe4dbf9c81f5755882d47501f2707fb0842655950313fb21475d9025ae191ad7852ac63d', 16),
                    gmp_init('0x66dae2466e034add4532ba52208b0b4fbfc51e7c34a178bdc3e7e27e1a1df8ad3dc055366b113e199cedd12ce3e8d414ffab135ff1cfa4e658f1637754fdf9cc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x458f766f79bc48784d89285174a450cd529613583bba9d5e07c7049ddf4cc1e3dd6f15814d6e199175ff82269a058a1b65ee2128bae38fedbcb3c89ee2991aa8', 16),
                    gmp_init('0xa525cb6228901f2eb47a8d995818a67a17e0199642d933c66af8528271c9a888773a69ed6ccd54c0580920073872db2ca62adf1106bbfec0be816d535d760c42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67617c33362462262e26d43fa8636a13630a6a60e3d8a87d49f112c94fc5dbd30fe9d7f91a8140383792aa50e7f2db82701a1bf1f7785ec6e0e0d98b4f5fdb27', 16),
                    gmp_init('0x39ffe8638e1acaa828c987be4a037842dbdaaa2a12ff9f27e27a0eb933931b3abbd8213b3bbf6d5b641b243636cefcab2c7442adb637c0a51b864f9fc574e004', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6044844923d12f20c2e988926a3b21b00d1543fd3ef23c72d0e5f2dd8f891a4db8c184a541a0847a2af3926e37681b56d50c68bc812a0bad0c26f647b2739c31', 16),
                    gmp_init('0x357bcc9aeddec85cebd84687cfeff7a7b15822f963b1c3bcf7735c8f9d28cc6ad256a43f890efd94c448504b16f2e6ecc6db4ad1b4a210918fbf632d6166e6ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3baaaa30984c099960868dcf3f16ba658055650ed50f36e9ccdb0fb5f1514a6c47c8d4de8c6f8bb197ee768d30b9eedc1324e715c39a89377ea41fd0ab338828', 16),
                    gmp_init('0x41cace9e86ae1143d3a7edfcd73fd0a5a78f2033e8a47f61014963643c6efffec887288c513ef65d0bcd7ff6241268dad8e0bc03ee06bb320b696375468b1c03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74df624a85b987006754744ad2656523776488ddbeae7205c51200c8303ed144618d720403029930c2db3391ebbe8237c2cc01607e73b32c45d378d02fddbb9e', 16),
                    gmp_init('0x38124593bfd0f8d8f9572e8290c8f05641968e36db018f98336d8d5f6aad514f768dce19688898f0d69ddd0c95276efef00cb5cf5a38a8f0063ed1c457b72257', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x490297dab786dbb299bfbcff97c59b6db04ba8c0a3e520bf5976c478c3e5729ea9824f327845d7d8d0dc89dfe16405fd16950f696183cef7643430957fa8369', 16),
                    gmp_init('0x41844a45a7375c1c49adcc43435cabb93282d36badcecdb8436123cb18a2d9d647139b9c8bdda98346993f5f0541a4e94755769549a3ad706740934dffdae44b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7be56fa6d9764a50cf155565f55d962d1622ddcf397266da384c7e483ebcd2bb8aa9a93e44a3e91733aa07729f5ffb23f536b1ea1dbedeb2135da25eafbe5a94', 16),
                    gmp_init('0x82ec2a3cf31e4412692dfac80adee1621a3598c29d3d0aaa9d7ac95ea4a8d3d715f1926588628ff265da7c45bac33fb43bacd08f52fa672110b52d98f5831b8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f4c46fbeb74d5a6d52576060b84ef1a46d8760555643a5ac63377e8780ce8d6fb2c6033dbfb4ea0755d39606c878fbee0b54a2a8d672f3b8000ffbfb39f447a', 16),
                    gmp_init('0x982ee622c7e0a91fee3e76d234e6b5c66d7129b9ef7755c62454d0615e5d08ebdb170fc2a7076e3e3c9c2d49c9e69fd20c0e67c4037b8d29ddd17baa120bf853', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x599367344d723c1e7fdd58ec1b711f5efa65931b640688f118dee7ac1c79189799ad3bebfeb533d9cfde8955d18165c79c01109dfdfdefbdb0708369efb45280', 16),
                    gmp_init('0x67ac607fd5438da8e76071e7e1e30a598cea5659358bc833c230177ac93039af19b1ff3ad8def5b861918df0ba93c603c14bff07135d894b3ad47f125122b5c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e2de20bb3c9c357e65b22882c82741444dd41426eb5d3aac6f77874136d8aafc14db16b1d9d888e194936aedd3b425341bf78e7890fa2fc1cedde2a843a6957', 16),
                    gmp_init('0x53e6bed9ed5424c2cc244388f9bb79dc9824aad6685641583c5d394bb828088d0728c658ac88e4e8ec46b9d8bc7496d5e454002e407a71a9b7f4bfb340b07941', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55e35ce3fa0b7e73e313584005062f67bb2285d4a69eb30bf748f5cc17f0c5888f3cc2dd772a56fd860e5ae00e45468a6fc2fe76dddb00b122843dfd477a8a52', 16),
                    gmp_init('0x87cecf86744c3ab73da6d8ccfa993b8e9583998f9e98f42a8459ee1e60349ab853057135a239acb69aa6be21be3783bb0bcc4c51728077100bbcddd1b54c656b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83f5e82daaacca2b608ea56e20b7a042c7d2041f4a281ca7cc97727720120cf3edf1b88df5966c2da6c127ceb6a6bee5b50edd1cd485b2d394f0d6d5f2edd822', 16),
                    gmp_init('0xa127ed953993408ea28b73b789a3f115eca3e4cba20280f36204059228e41ba4319c4894ba67a468a40966aad050d2cba1050d7e2a59693994511add34615067', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94ab0b2dad8de54eb32bf36221b2477c7ccae4c37752abed446a0fc5235163b31beb49bd48f0277069959698fc83df832f28439c547d933590ed9240c5fb1425', 16),
                    gmp_init('0x7cd0091bf10ea9de7b4f1c111c90a45db10df20d1591ee36a2406fd14f19fd0e003bdc035d0bde33c9f3072854c3ee5fd0d2268dbd6f2322a7ddece0be34bf5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9447fac5443c40f78dd7e55100e043f5f6408a813a917ceb2d4eb6768f1c6176a23ec39268919fb6c2f50deed5dd24be3cc2da691ae359176ccaaaa238d6cd13', 16),
                    gmp_init('0x7d428116854a6a05362c106d3e9d1ec815faecf4bf8af0d8be6b75350feda2547de4749b1f5747a4b584c03b7ed7aafed9032a1838b314957ca0d32a305f9eb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47f6e881166c04a6f32dfb1b3fb39096a76441faef088d141cd8dc7d9b1e9d322c42525ee0ecf581ec131b036c9b955129bb9687e5b749b4de536958bf6e7a4e', 16),
                    gmp_init('0xa5aa0285de938ce6c3473f424b8431e8f71455661ecac2bf9826abf4da4a3c2867810f7167ab215f76494d2b6265c1c354679d5844cffb9e849c302d921da961', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x299b77aea02e82ce129e2e455943cf16fed86165fba88390267cf32decaf020aa89cc181ae9978de213dd849cf873d79ee62525f8ad206e1dd1507272045111', 16),
                    gmp_init('0x955b6129e088eebbcbfba7215ae10bb9895cc678eb4a25a9ad8c178d8d34a5650d87f1e79719809c4ea827144139d233abda0693654759faf0b693ec8461ac93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6aa23d096aaf7c70ea005a565df0f8bc6a619f69a30491e1c0ef9b8eb5fbdb6e357f3dc7f0913f2f6b59b289a8714a8733472d5a5cac093ce35a57953912c349', 16),
                    gmp_init('0x2a88d3902baacaf54a9c929c94b1dba93776fb3bb9a836920bfc9ad27f35b460657cf2f2364b92c5d2e5bf34694a7cbf55ee5cc33283b862a4009f5b1fdeacb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x314664d621cf93343d1d184f7b0434b59d53fdb65f494dde6cb546b8048b5fadce02f0e0523abec3dfc1bec3ceaf9ffe3f28d03b717c665da2dd24d5aa8fce06', 16),
                    gmp_init('0x8c7f1ae17432603bb984f8195476d5aa82bd7ca0e3f01a9eb94715e08d7b392bfc8909b7e833953f809d1e8925b06c8c92dffffd68fbeb62aa612d3ce111c94f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c0d472e3c44c073adbcbaa7e2170913a4608d8c37f6552042ce008c00481d435f6f8cb20854aaaa2172d9198bfef35cda9af410c7e8fb79c8defb8df8158330', 16),
                    gmp_init('0x3316ae0cc4c34cbc271734433325f2bd13fc457be430a02bca646c9ccba7608a2c2824bd2945820b19c8c1aa4ef34916d67c4854193d47bfca8c5b1f0ecb5a5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75bb36e1a8710ca789fe5b0c726acdea8efce436fcb7e52606cf18584a17beb37a2226fbd0c9b3b643555047c21d30db6a1ddf533ce2e57417a9ebdb5f643f40', 16),
                    gmp_init('0x835a06e34d3430c225a4aab7ef2dd312f82941f5bd26ac4237f20368418ec6d6b75769a487fca81c96adc1cc4201485a236d984b04ec576e17e57a2184bbe748', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35dbde37b1cbb59843ebc57b7353a916e9cc84c199d4a40050f46dde378d41f028f0d85e5ece7f5344befaaf5040ace11c9239ec605637ab6e36d456059b3b93', 16),
                    gmp_init('0xff5db65d7c0682a33d3fc4c4ad4aca209630706caf90584853693891f0885a4b93cc6757b5d76c314a07dc5a0915f6dd114af7ac2d636a3a1c89f2470ef4dd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3806d2565b89c88cce399a2a9b08c2becb4b3edd38a7df616320a5ab9c7c2deae2fd348f3de5282e5ad94bf961b8af8636ea8179deb881e6baf8f8fad27b24a7', 16),
                    gmp_init('0x214f199d3e459f705dd14e29ccc49b58fd4247858bea23937d8bace8010d1cd4c917620ff9893d1c86cad93f22131e4aa2b09d80f9bd360826d2b9570d31260c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68b7a6fc79efa8ecb38d537a54497421015960a8bf57e6bee09fd73c488701ba304fcc83222310c9bab047341f4ecfefbea444f7530964f3639683294d87cb0', 16),
                    gmp_init('0xb9d8bd4e0e249da05f714715a9366525bcd1a269ddc044980eaffdf971b4de49d2354070150946505917bf03e75d8d072797cd22a402bd4c728216c8f28d2a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f68e06cffbe47ddb7516b0aad9d5e1787429f432e77494f31e7bac7036c6527447fa70efcef21dd7565d8ba275d9580fdacfc774800040b7038d379fca9281b', 16),
                    gmp_init('0x82fa6a7ec73f47f38b759166832cc845bd73678fa9ea817e6284f6ab1e939a6089b576b9b52bb64c65569567e4b59d0c81a2da7f3db5b2c4fdc164e6c3327071', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b02aede90ecb07d3448ec1c6b13dea67950fa51f68114c0e078d6e8be0f541c8e53be03a7237e6a7721589c1bc5263ec001b13f65018ecabee2a741c5cf3a89', 16),
                    gmp_init('0x527333f3d3c5e9d5e63ae282b6dba1e05c8f65b87c1881c783350a490dca345a7c9a185638659f960409db451ce9af2c5447ffe260a175cc2df2faeb9c3f9bc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a0f55e23f113bbba8672694de435d0fe77d18feaab49a23b3c5f4764045e224ecfc304006de6905b4c8a9728fa5c8d9e0209e31b625901a5759a876c6dad835', 16),
                    gmp_init('0x34915872eeb5c561c6d261aef4b10e733f921c176ab0dccd81e025fbb71ce284233244922614815126c32cd39e734c660caf166439b0b14112bd245d99ec0cdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3433d38f24caffb7a95d98b1402a4dd0ff71e3a48e7c74d9e27742ede27169e19f3e6ce67d16855c68ba9cf8f6818b51e04cb46fe4177ba3bb5dfa370d78cf80', 16),
                    gmp_init('0x80cc014258ec3081f615f2b9f86439574b30b2ef1f531c8629f33d9d379b7f8869e827c4b7ef4eb147063cb9788cd49460cf197aca3038f40df0176a5223c5a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a9ac15c2352a5a571a97bc20ad5add907708a3273359d7b5c759a4fb5b49914a37277afe6c62d3bc43518f47b677235c81199a548d52a99d81f4528b86fcc4a', 16),
                    gmp_init('0x19721e488638b2e22426f3796af8e9f517867a1587e5b3a9ced65d151e982a2a0e5535adb39947896da1b5ee738da92ba2729223a1fcd1831a3fc2ede2cfabd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x211744bc722cda577f2c84162eef87031fd661e29bb44044fa0fc8d69327984b8c028f122a61384ed9d0bb01ca1cf0a0c5c5fba46163c818534af5bd7fdba42e', 16),
                    gmp_init('0x165f3c6018be3587cdf9e6af5576d5afc1074ee7278b6c8e06061da4c12915208b9753ab9b4f76a537071565b79fe31db6df395615c62e2c7b9e4ab414f79970', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bcedb779e94b61eddb8bc97e217c7561a7eff4bd1d8c4362deeb757cca696057c767068f65315c270f40015d07c11b53f079e96e2e6b24701b9f3173969f5b0', 16),
                    gmp_init('0x1a1ae3015bac913d4cf704d1083b6c01fd607b6a4e662ec17e8990267cf786bb39cb6ccddd5a4d3d1bd099e62a4135b886f1b8604b7387a8059070859570080', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e4c5d53bc4e5b8b14bfd8afd1d31b9968a98a8bb9f9a16c81c5c259f758e96376681c8a82562c86cb1ae9f46c20c5a826519b302fcd86043a5ced38253dabc3', 16),
                    gmp_init('0x4d44f343846574cad5c3570ad202bd481cdac65c0c9ac500af2fc2123c2d73062fcbb1097cdf6c0bf064c4a5a7862f096c848e48d1631a677553b307ffb29ab9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa939222172b2fa6104646357fd0f825005ddb8034b7c45199d2ec8e06bb1ab84ea56f7d3106f0bd579b4501fba425f2492d05dcb946b408529fee622da1fbf8a', 16),
                    gmp_init('0x9b00cc4b311ee9e8667d13aa7f9154ca8b55e373bec6621ddcc9ac81f8d3e87cea9b2541798fd25138abfaf19ce36e9ce5a0d0d3d17f08a27862aa72f27ba32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28b2655d7e3c1219002b6f36a28d6252f7e030eafdc994a924feee075d65ec8729d467fa163529e0c59e5398e8e742d247e1c597d0141a1ba6f887711d2144c4', 16),
                    gmp_init('0xa05a5a330c485eb9893cf13218fdec3267146d78841e1cfbf12b6b767bbd77f0f2c965aebfe68d0327a83d6d5361ab7e8e6f0ed3c4307c75e8f7a75fd6830fd0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51bcfe133360d50db2972825c2394d47414d01dfa0c2c1c6c24f2462131ae18cc164edec9a5105182b3981dc21b8061e684b4fecdbddafda883941b8440f9f5f', 16),
                    gmp_init('0x4b2a442e3c8710ffd0ba52dc1900000195759000d1f7326ab2b18629b7fc19fde9ccdc8fd4b8c73f1572cfd996760e32d3db6a84686ae96526cab873ecea90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ab540bd35ff7bd3619f6955d2881bb3f928ca598343483b1cd3d30774a4c35362aac587a4f4f523c335f1f9229dae3e5606918b3348192be0376b8256cac80a', 16),
                    gmp_init('0x2bcb94ed5aa724049e9403bc689b75e4f4498354eb571715afc7b30410d8ee07d0221d5fec442c9348fe9eab0f090e45615d1667d9e0d3d12d036754349ddb25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a7f0bcefdca3a5043b924e8553c9a20fccaaa11a35459b651173d05c790387b60e63780cee07296ee73bc2a0cc7d437e37b16f52fdf6de841efdf80e6bd65ba', 16),
                    gmp_init('0x6f6bf9f9cb71f9d7c70b584abba9f5da0f8c19c2cc23fa81f928d55ddf73a2c03e967c4cb5d98dd4eeaf3aa05aa9185e2866145387fa976f5abb50732eee1ca8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f60c5856b6900e51c9b109fabef9b6efc770eb6e1e36c794e85f831fa0dcf5d78a09c45eb4bade1d93e500caf93bfdadc4a7f460494af1d157495c1f739e69e', 16),
                    gmp_init('0x2ae8b16981ed77a7c6cbd2fb4f3fe104ad426e47e8750a6f60779f4f07a2d7760032766b466755a053e38f2f5df5e25fbdc51bde975ea413bdbfe627df9b51af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81c8ff8af5d6a0ee37ff5858399230bfa0b566bb2917005c3f87340ff53588bf6f970fc4fa6aeae183fe4b824c0c5379f994535bf73b965721008ddb685535c2', 16),
                    gmp_init('0x68be7452a8de3516f8859646db9b938319d9c598a47927248f594e9b40d5e26994b6972bb5f5d203718fd4b7e5ce85ecb90c74ab8ac1d47542137e9c851c702f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x438cf9a71e7b7e1a896dd545b6f70a90df522b1025663368e7dbc342350248c27f6bf56a9a182aaed5b1220e01b8bb12bfb62b4d1de1fd4e029216e7b42dceaf', 16),
                    gmp_init('0x48c4b28ef2fc5593381c1dcded29eb1880a35b5c16599218caa8d821e8cf51fd6a747d5665839dbaaab65e7b2cb7b7f0f4ccdbb0071527f3fb20458272efbfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52871da6a15723e16f04e2c4b039dab49a315267326a8af1765225035070d14d8e211fb925cdbe0f375ce8a67071820f31edda93015eb9c503beabbda98e48f8', 16),
                    gmp_init('0x16b7f5f37f443d703d97869dabb102da6a80fa9fe6b2dc8ab71c25caff9147ed5133c2f1c4b7b9c3769df07c7eb3a50a71e73ef65c06a3637efe346eb2b2d4b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6485147b8f612a27c9e2bb8915bb55cd09faf4a03611c05773eafd1308f445d11abd75ff136d926dbf11a01ed1a2bf7734715373987bd467e6abd5c70a3c26f', 16),
                    gmp_init('0x641010db75a0aa17efd0222ccb76235a9d3d430ed32ce1fe7e667b7fb41c718623364d2105a46ccc37468e386d6cf866df51e20d98cc4e4caf0224807e1f1c67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaac3ac76ed42e16ee0a5b84e1431a480154e2b8840e98dfd2f1c67cac6157a6432a7535f3a56887b15c29a6e88c937b88ed1cf8f3d6027fccae22a0c56dfe5f4', 16),
                    gmp_init('0x91d9c31fad13a33cf4615b92abdd920afb530d49168360ab379046738460e686a1816b4cc4b3606b949a15ee4cbbbce3e25cc6302ba0ad24c3a618d4254e7d23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x627e4a8fccd99ed5c439fc56f737acf1bbdae684607433605a6cc4fa4271ffff6086a9393739f41c926b630e8477799ff05b77232c6078b294141230c318dd02', 16),
                    gmp_init('0x322bc95cdea369688ec9f4ae4a1e7596d2ac834d633b8b93bb1e0580a7810e69a029e5f5fc1baf6db71e362b5fda9e8e6f1e6138a172368f272127edaf3c8dcb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f87f593759900e09434879db17460fc1f58fc5620a35dcd40b512896fe7096819dc53a8389afa95c74dfe7e45bdeee83b8a73d52adde0afbd611f47ddc7e653', 16),
                    gmp_init('0x4ff922f9b424732cb054d5d4649b901aab5eca54f48640384182398c8e1c65d9063875915e2b3ff792000c28b758b41f2a8a8a9fc35b67427b2151c4cf4e52da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x247b1e8bdf799ce0ce8d88a0264640015172858a297e00fd3629720474a96eacd533dfe76cc94cd7d200c52a7bb1925e67fc164e5db363087c986eb1ceed966d', 16),
                    gmp_init('0x23100049b18c3965d5f0c8b4c4347798e5db97f95b722763c43916d6752d1c5a29b7a88b4d879e09a8541b801b7c0bf7eece9ad8a1f72ebfd165d4a123b78c1c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3fec31d87e2f4d5d74fa6627647710701f762cb51687b2374d6ae3558f40084a92fa7798a6a70e096a7aaf730ded835fb9973fe833489f6b2d007fd7bb1f4c4c', 16),
                    gmp_init('0x16c4122b1bbcb4a376a9363b9dbbadff109bf9199835338147a42861eb1dc92412ec0ed65276be70b7fe04c9b3176e98385bc25da36be1739efd1508123ec09b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6c6799d33ff3c91587947c0658acb665d091c95e1bbce23fe190c6cc1ab9d96d3e63bdccca4080d48d4432f7d0c76988718272ef4558b40df96719c9094449f', 16),
                    gmp_init('0x7cbd9daee5cb1668b792aaaf992f2271493d4acb2d4c92d6a459d1d96d6fbe95034bae0fcc5c83c32e36bd95500e57e50efa3a36118649b059a8d42ccdca94e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb2c6469316ae5aa485ce8d87b673e827c20bb648f82848f1141b8e4c35c2136eb91211b0c4283b2ba28d2adf2af4b823954ed196d6236a82b6b7d88b30191cc', 16),
                    gmp_init('0x6d684a24bb0f98d1b046ce51a701b620bcc7e1c9521be182b5df81a51722707c0ced4677f993738588e2bdfdbfa5584b650727c484d030647809034b0398e9d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b523bc77cb8e241d073416f319ec39e9250dc97ebe05b8c05d325a08ae1e1b0793f04b367c3568c8acb4abac5f3a6e61f1d5f1ce7fe9b115d15fcb83e2ae56', 16),
                    gmp_init('0x8fe0e8b0a6b38e954d8602e9b2ea1504fca9bad2ae91c7ebdbada2043b9def9285dab8f72ca35269f822724e06768211e799641a56abd20ba482c41102f31749', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x875d54d3044de86d4f38a80acccc67b88929a295e487dfe4cc54b60225077cfc8a3a813d94c7437ea92179bcdb80a005fdd47be0ebe5de212bf6b2bcb338e965', 16),
                    gmp_init('0x64bb4240427fea6835caf4d9f14a6d1cda0a057956af00cbc433976157ea901bdfb769772dc4aca2eaf5e086d5f8906377f75e2a805d8e9252e91b9c070d51b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bf13a65db30fa1c810dd8235dcea05ae6735bf46852980b04da597b317326fc802df0d505195a74cc3a9be6c610e5f5c953fcdc035a84ff1a452c26ad6e886e', 16),
                    gmp_init('0x35aea4e4b44f04381dc97f5b832a7d59a3dc085e3d8b81f79463938d57200c12e784c7406bf8ced0349dd8f91d2863d6b984a358a29ec73154bace7ee510d3c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a1f27f0a119953be06ceeb580c28832208561c42b2b5944b5d77f4b15a59caf5bd54cbf266c1f837891303fbfe9d15003ab278dff95335fd82447629413fabb', 16),
                    gmp_init('0x2e582184cf857fa76c654cb49183ccd53062d2ca37e8e67af6c307e5e2dc7d5532c0363e8ff6a0da7a9204ff36af210bba4b1124a5d05c6fb3be502ad35f0df6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7483f957293c4bf531974a0151c80df7ca4e547a2011b7a365a5664f3c7fb54a63f3a319aab8d665858dc8d05848f1116f711971d6248edf04dad598d957a1f', 16),
                    gmp_init('0x110ca793f34320f106123854c9592da97b719532e9dd13ef02f1a201e6bc0477024337269181a718600c34163a2dea69e8b09907df280573f2e781e5aebb1d93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a0925d6cff196d8e62adbf47e703b6aeb18dccbbd49b1773d074b4f923bce85cafab534b2dd9f7f18efc60aef80daf97b5f1f66ae4dd3b16dc3a69157bf5d3f', 16),
                    gmp_init('0x54458b61e3d846238439f6a8f0ff46caf2faf52d8dc701b64bfb356a93ac250f84acdc68c355921ce6aa3b97a23f0d29c306066c423f1db2ed8d96bdd2d769f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6036ac8c5d1c17bd35673d33e709fd7d1b33cdad0d031cd4bad43276e0f6b64252f6c871c008b1145acf1894b58db528008bad64df0fa56c6adb05a3901e81b9', 16),
                    gmp_init('0x8c9fd15a8ada59addab7843899378394944ca06277b32f58bc6093d53f6ff77410149f0b04d21e384b83604bf71040bdb7bd2b3857534d5eba5c0e1ca1ab1a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58878d5220891de0b9536b7961e77234230b3e1d7c2f1229203a678f3345acdfe1b4ce07a3aecb5bce0c1741e6407c82b8c7e1b4a2911c6969454d71da57bce5', 16),
                    gmp_init('0x17410992c5273a970064cea7121ab0567d8250302ff367eb671d1443f208f508377e343eac99ab9ab96cbc016c187c2d095c2cd461f43e62e8c9eca1658e29f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95aa6ac3fedaab0e905ef99268913788a5ec2bc4a172fc26ae339c8b73c10a2fc7a3dd491f024362514f649216350aeb578d1a3cca75a136ffbfe5ee6beb318d', 16),
                    gmp_init('0x567c2ece1aa045cddc5a96366fc641f7417b21b9ca90f0c98e1480086ae67b2ef14b5c7fd280977c29d4164cd54f58319a19640118ad34d88b60fea4e3dea9d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a43ed9882703357e39cc6cbca24038fb9c9a4d5ccf1f75aba4f76e0ed1a949a20ab130e1f41b2c77b624b64ca3bc2747798952a5a03b45d2c5ac6c0386173d1', 16),
                    gmp_init('0x88a1f3140aa9debcde787f2ae6190d5ff057b87abaf7166a066a36834458e7b8698f7cc21fadd874b315b2f6c22e568b7c000c45c0c307d202f3577bec33a7fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52ca8f29e6bed91f79063c385a8509b6fa4e7b948b07290cca005d2665d6d896f2331c4f84c5b97e65ecf8263499dde484c46d63c270397cd9993930ae3a214d', 16),
                    gmp_init('0x309aeb999bdef3fda8f7e7bc29ab4455160e8ad5e48b7e996e51f9899eedb10a0927b2bdaaa038102324ca74d7e003d9ec96e3af73ddec765027b0a15362a668', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd32f890dbf155e5f70dd31937679884a11f5a3e3eb530cf8d4f0eebe6fcf1b00f8507b0e23f2037fca6bbcec504e95ae43c1327d5fe961c62ed29e5f69282dc', 16),
                    gmp_init('0xab99ffd136730d623223f0bc740a5a2a3303a5522c45069bf7c23cc1f54ff696978b979e09cc75eb666c8955ee98248936f15ac61c669c7a720e0aef9badc6d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x530b7e1a88967f705955d29e4b2a9e3d3413e32a99488bd0c07ade9cda76212a149a33030eb6fcf02b74fe21651b4761355e9cd6b4bc9b0317698d2b1f4a0385', 16),
                    gmp_init('0x9d838a4134401238229c82ad551f41222a015ec28bd99c5da08784bd620c3a59543ee3eb60bd16b7dfa97942f5e7bb1fae4ba3171c90f6a28df2c1b85db7961c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a093955f169634662b055b90a7cce04a14a318fe743c4f59b347c04c64fcab3d6671c568e682da57fe7f8365c69657b88c4db613d5a3454c27203170aa0acc1', 16),
                    gmp_init('0x549e9fe0788f46be1b63b438a015209c747543279c1f40e2a00dfd5c5050bbd07e10cb1f9f277b5402df9ab0984fe983f459c76fee54f022b978f078ccd72611', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8172e0e30ce5c749435f7899bbd9caa71d467cdddec87cc8f37890bcba6bb6770a0148a6e72bc9b6068f900a115a054c093face04f5c014193e2c93d3eacd243', 16),
                    gmp_init('0xda6e5cbd94ff561750c5ffed2a5a839974e31938a2222540ebec9d6ef4c3fddb11ecae34151a15066561a8fbc600d2e2b68418b4a915e84f4f7f847838ceb5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f8a7ad794905afd173d31b5e909d2286b4f8193a9a76d3da0bf5fa184956987d6faa5adbb7f641a9161f5be223f03d342447eaf7c124ada7f32624507530d9d', 16),
                    gmp_init('0x42a70ae0b3b339a29cdebc0dca5a01bf77896a2b12d73a9491b2d4d1f3061fa987dc32fa22a119dd48e5cf6823c3943911f79e97605dfed5412cd71e3922bca5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a830fdab62e38a9368eebece0d37fbdebb332241d24115898c743209aa750d6a663f9d355cc858801f0576af44eb5d299c968d53eb8897ef833c5693b6e94fa', 16),
                    gmp_init('0x4231a170c06716f1515b0d2f962ad0f2463e06b5ef99719c00899d10da41b586b8f2882ba30ddb929fb011673b39d1ab375ef15097c6e7954c63261b9268609c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x315c9b0acb43b896ff03a3acfaccae2193411c9b12546ad28734ddc2b23e521dfb37190682b42fcf991df2da9e128450adbc8969a11c7fa6b5aaf207e87eb7ee', 16),
                    gmp_init('0xa3f999709f494c12e723e67161f83259475a18850c76d35a682ee829c9e10af903a79f64acf90ea7a82e65c3af382f0da6eaf06db8e8db90f0ebdfa2ffa3bd94', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cdfc00b867c4ad0b2e7bdee5a8862c08e7876bfce82e611ab5a62e0b06a1502579f0e437f7f5624b337803cca73a0f215b1d9b93b464c95cae2b30e09cbe4b', 16),
                    gmp_init('0x152dbb9bd3e20a801b6427e096dd667a09cf64d328725022350edc5aaaeeed79870af0d8f4b0c4e7a150bdf4b5a8ef44aafc39f304c6a3c120c024b666b45e0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa442567fba786f926241d55c0c44877cbe3a8c55e00be830fe66dc4573ecd52c5b26450faf7ff261d76a6357fab48ddf1796635ff67b358a50734d691c1b895', 16),
                    gmp_init('0x9e944f66dd6bbfb66bc597c75be4c013cd44e1ef6a52e899252341a81ccc33d9272225c93550310c092691deccbe6e7d0ecdfea3c66be2a77fbc16057c5fbddd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3fcb4b6a4465fa7d3c24625e9cb0b1e0fba9316e3bad95db80cdc7e6e724e642807946496b85e2d1b14f39bdf7886ef4e26467d06a420c644757ff879fb88007', 16),
                    gmp_init('0x9a7158a0bfa26c5f157b2854ef57a3d2f59457d3c05d78a3eb6212cc2b95a8cc7b001ee2f2e6637daf62ae8e0959d2b60a75c2de2d5c59c96ecd98d263f5b445', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42a2b3aeaba91d23b8bb743b4f134953d0e8e593f9dc76cf4682f07765060c1be9629e71b16e18643e29f6e4a289a0173a77442392c2a92cb0f95b7e6eebd4e7', 16),
                    gmp_init('0x49a63a38d7ee0bd70380e06d68ceabde1868ca594c602aa48e627f5a9d2f75273db16da8a569f008fbd0b72101563fdfcb5e1200c3956839b7d9710cb326c13d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50562dced450f272d09cf6f080a673d3e989659f4a7cc7880bfd36c57cde9ce5b2dfd448fdc93238605f953f972956baea888b7a268ac0b0795dc741ac315c90', 16),
                    gmp_init('0x398a1007741bb0bdc2d273faffcef761dc98399bb49def23aaa6793ec93184b18b85a795dc7dea14db7f31b90dd8f15f57f0124a000af44dd12cfb667c01b5b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e658157704b33fe0af3cdcb772c77876eabdd007dc9d83a986115cab80ba7659cb6840ed5a18a8f48755856b391670ed478c83c4ea37c344a06f78c84e8b6f9', 16),
                    gmp_init('0xaa39d31bb43bdea11e1b3fde839e2f165735c24b02a5b74d233bc8a2c0dd47b4fd7a6e02b457450a16753ba3a3b55cafe7cf977af24af6d861a599f35d169fb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b53406671e54c4ce333cca9a9f33f6568e95518147583bcdb6b0a0cc28fc3393dd7a698e2f57ea6dfec0a7081b43b5ddd2d3b0d8d561d07ae97faa19515f766', 16),
                    gmp_init('0x7f8899b7d70b3c2810bdef95663db6a47795d74d6ead264eb2f2016d45cf675cbc00a55c84cdb59a347db7a4394f7f91674b457a6dae670f012f9ce13aa763cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ab0012348498a78f3280594a12c3eac3f55866e7a35c9604990dabfceb15e5903d5aad35900fdafbbfb732961a779708eb016b86eb323f9a9fe982171d29f54', 16),
                    gmp_init('0x652b407bcca7f7c6cdad434e23d6c660308fd00ff6ea377ab80f0f1d4e5a3d5fd5a72aaa179de2fdab7870902bb3f404837308b80e80f80cf83138a5521dc05c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aa8314f59a5bda9d63e9611287c46cea073a84b4ee824c7d19619736aaf1125a0cad09ce887e10926e4676bc3c30a6f4057cad4d8cb1ee4eb4efa59a9571ba4', 16),
                    gmp_init('0x9a7c30630b759708883984e8bdc56696a85eac5a4d9acc86166a08090bfd283278e75576b4c6a99e4d25525d3de1b06438141b47226ec8d6b09b0ce2f32799e6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2e0e5761ae2c15dca4a156e162583419bba3700941c13193bcdbe046f48c633a0c53c0526806c6753859994cf9827f70443156e201e36ec3bcec2d9b99071f60', 16),
                    gmp_init('0xa0498b49bfcd4dd42ee07e0c1c143bbd970dc27735d8c29e228c078d2f2318c944c28d42f31ea9eaa9bb5d5815065debe18fed4b2203db8b57ccf52502877a21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17776f150ab449dd8a637568ef03ed23d091193938ace071104e2845a2bf5db78b70e3d0e844f70a941daa736346f4b1fd2273022258f4c5570eac46939f7415', 16),
                    gmp_init('0x80ea23428812f39f581735ff7200f3de12870c83f016c063afca6e2fcc5ff9baba7365f18c34bf6ea91215dfb210aa9697a156d4b7289530e70ed9acd7c4c15e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x713e6f69fe53bd32b168be200fbb35116f490a003f4df2b9ba60dbfd19566cffa94bead46b5ec875ef30a8fe3dfa053837aa401cc78079e0ea52d68595d9d82', 16),
                    gmp_init('0x7809501d2a67ba0311b268ec7e29de975993baa8c350a8a5c7ce4b2d05ba4ea63c330ef44657e6395418b6eae9513bb60b9ab604b5b81db2735d78cd0494cf0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e538fe9de5164bb249de559dd0bb04153d7093e9e7bc747feb6893b111c7bedfb827c552ea53f9f84663fcf1bc915357d07a0c671574b840790c6063585d621', 16),
                    gmp_init('0x4476f9b5024114e6967a348666dc9d71e679c438bd739af9020266d086cbb93d5592158087b3f72ef39fbd78e66b9a51154938a9af58421c5ef0827914da7ddb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49b6a8124e2f5a6503678132e62858688ba33b58d6cf1dbfb8c0dba558b1346ba0d45bc3039c5361032c0266c384f428ad9b7c581f244ea3d0803a4d10850d70', 16),
                    gmp_init('0x247de16a1e32e259c868e0a4415e50e9164184aaf9362ba2fc5a77f170bdce2bb086c67645ad8e504f53531653abdf14c12b3197548ce05cc2a24ab8e8ec4b78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x681d98cc5e0b007a1791bc4a4f3b44d298dc1a4525888cc5eeab32d6d3469d0448f05e4bbd9a34a3b7f7d5626f537761f41d1f33c0ffa14d57243c13e4009ebe', 16),
                    gmp_init('0xa2f03f98c2a7c3476044369022121a0819a3f9182e75636e251e06734ad053c98ed08bb9912832e3db25a4b54771c746f54e157cb36a2f3db262715c96a8016a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97313e321b206f274f7ce195668626921c88daa3a28d78142c888b14402f42509bbc0ad1acd5666de575b70478bd935fe01d0829042ae86ee1edd9c394332a44', 16),
                    gmp_init('0x79f08d8a74cb709f019243f81d8ba64ca9f5ef1c6bfd1a26a0a7e7eac2eb2fa7959990ac125f3f0b32c1e646735483ac09810aa49a4ae53fa594f0669a851c14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5912744a278608b753f7ef589ee785e7a37bf28480dddc5e5a39e5a77e44c16ecf90705e8945906b5de786b2930ed245a9b46ef2ec5acb8a4db84d11e7af5874', 16),
                    gmp_init('0x2734a2b1520d7b35e45157e325c5ec78d8452656b1ff11ef94d8d41d42a4afb96e1a9192d595895770b8cbee0db48f5eb96d7acf46e6f4578d3fa67c7c0cf886', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a28d11dd2608c996b656317048b73902c4088a6592e9e850f13e003f11c603bf614a6af488743c5afa61b53e39d76a430ce2c0e28c66dac51a0958a389874fe', 16),
                    gmp_init('0x2e321388d46425bee6c776cd1b45d07eabea67497a0f98067116d565fdc1718ec6304e90cff14814803a4f9da60a995dd30bc0d6a9baf246014973353b630aa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1398385a6118706abf1945f2d8e06b3c8b643bad64d10884a06923bfe1eac4623b9812c7e952d6f3cc8ed8c6f6f6eb09c6e7f2dfe601290550361835d2780f09', 16),
                    gmp_init('0x145896864dd79944e90a8e5f4eabc82f2a3ab145d86f028d5b929876baa5e65ae77f7ef328a3fb73c60f944fb216f6ef5b6713f9d9d2e2a4527ecfbb3c4a8449', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42e36effce65838ab602db06bc036327d550b355650750f56875a05cce850d7a425166bb476fe8122d8ccebca535df08f926156f840f223a349a0173f1b6e675', 16),
                    gmp_init('0x844f86e72fabb106896638ef24df7621d6afd885f8c918aeae418f2ca283454cf9ba239d09bbda9868ce4a63bdcb694b376406c4907701efd7ed78aa94aa9b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b3822192565f1ecc84b9189bd5f3ea372ccce5d0018aa31ed8e8ad0f1d4cc10e2e73bafe3cc43140f07c3c8db2f5f683a03bee7ae7b36560b749c350b69d5d7', 16),
                    gmp_init('0x361bcc415d601607ddbd37f653905cb3c381252c206fa8ef1bd8a3d9533a6f3bf51cffa4be8df1df0645693e5c82955b1f89f16d203e7591d8a744b06b57c426', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x448595699dd5aa0d7aeaef6f21a4734feae37cf6588515c08ff7c6561c8021291288add86e9861eb5f2a876dbea9f44d6b6298424a15f0c39b07e2bb6583bf89', 16),
                    gmp_init('0x1b66dc069eba5e6ae4c48e0dabcf18593d84e5bd9c785fcdac90edc195f5dbc401dc54a415eef573b8874b7b26061c39572e46faab8a9002ccec626643b7938a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49136ef76af62da3221c934f2350256a385170a4c1931bf39cf438bd5b56186752a94bd69da5fe447ef355f72429655e6502497b77617cea8410a3a07dc2f2b9', 16),
                    gmp_init('0x618ffbc2c3cda4b7b4b3b5250ec0937a22b3d427af3a0b82a34b713b2082515528b87df8a885c3f125c1683f459ba8e501ecb45a19c806429325cfa422109e8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2530cac58526d1b97bd44364869697ac89794be54efa97b4dc97b438205b0e25ab173bb69c244b915f85011cfed97dae07384b51cb265c8dca8a2f6995d1e556', 16),
                    gmp_init('0x35d84a56bcc60008df446d454f9a2f136fcaf8eec0ed09d879697ea3f1f0631eabc20216183c91c19395d0fbacc17e32d2664d358e26bd0c13c8a8ecba10e95f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3af1abafb299e137d84593f6e974c2c116d2173a6c263776877da5cc8eb3d5b8a4769c575d1acf007cd70a191c0a6a8b84f9775ba09f197a97d6d550237ca1dd', 16),
                    gmp_init('0x6c0661ccc82b6618228dc4de65767c290191c1bd5a0be003c8a7be71c5d03c7a32be9f0d8dcc094d19be0504b49c807b0648354653b779b7def6d5b110b1f3a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5572550949fbd130d8d4546129552cffe13040f9b0b53b91ad749489e4d9603a89eb9d28bc5eceb4c53faeb6a19711cf8b44d7e8c337febd3e9c0c04a4adf201', 16),
                    gmp_init('0x98e3d77fe913c42dcfbe7c1c7db9e264f53e5de0ecd717d286b2b7873d38bee43711790b90f10075b51b20a735367e42e2940f3c6b7625e9ebe4bc8f5f516217', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dc3022bc6f867672664d9173fee757f375d7669dfaa3cf1475ac803ca27e83416e822930ecc13c3d35f64ff7306ae5bdeabef00df95f15fdc51e86570fe21a7', 16),
                    gmp_init('0x9b2392afbecbee77cac50efb6a6a1db02e5d8ce01855524afa1b9779ad66fa744f66b49a9c1e77fd2fd1f2a337cd8d4cbae9f8f188f2e0228abf978da41a57f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49375e1feb667acdbd88126b6770fe768687b0f7f0da1e1825052d9e6c944368b6c7ea56166e80f933c158202c9df126a5250b98cb5aa518a9c4e43b246e130b', 16),
                    gmp_init('0x1053a72844b8f5a983d86e7b2da313bb6d727b27ba9edbccfbf817982a6df5646b8366fd72fc87a5f48845ff1790de6aa23d2fa8e02bf02ba8e59993ed346387', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d113d6db855555ddf917e77285de7352af24a78c42136553278fd077f56243598e853bb6b113e926723d60dd711839b282e106fc865530815cf55c20f556e73', 16),
                    gmp_init('0x8701c118c8f5d02c1c3f220533cb462c4880df00869520523ba86c4d399cf3a7b4bd6479eeb9968a97df9a70715f6a8ba93ffb88007999fe229519e59c13f6d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b01c903a69e3d471aecd7c4facc9d016d5325f7851edce3d76737803d2bef086f23d49153d0add53b8ae8c552d5135715c7743d4304d7b9d80f025a384d3261', 16),
                    gmp_init('0x2a070a78d76fd72eaa9f58b2bdb90cdf913c7b9325812e2c3a2a7257b60b97cffe656ae958af893d883a49bafcedbaf499589b1cec6d39cdbfedcf4636c7ff5d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7425cd0e534dcc9107dfda3216e973396bafd3f7af5daf173d55c9fcaf73eb627d7cbd9be06c136b472540777b545ba33a2e4d30f4bb2b80a47ecbe9e1b9040c', 16),
                    gmp_init('0x7b58c3835cacdc05c0a5523e8a2fa8ab41ef5417763ffcec5e19b16a865f954e0979927cd8291775aff524bc78f619b5f09286ad3b95f73d623e2d14472c9404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b93e3c90b6df92e3a74cf5c5ba2efff0b1ea7d4d89ede01cf3656dd7fca4026ed89d3f5514ac7229dd9a1b7cbf5124781d9884cad5af6575345be1b454be164', 16),
                    gmp_init('0x7896218fb780895612e016224e5c14695f41caa26e93b33a38a6213fb40ac27d5626578015f92688c4dc6a69ce4bdd1a9e2edec97b840515e3fda7d84838a5d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b08414ad62c2580ea69bdcc8791e2752084acd27ba3b197a12b18ee5608ed8934ea399cdea02714c4118c2aadf91934ba840bf14e6c67362bd9ada9109834fa', 16),
                    gmp_init('0x1b2f7d2b92588c08c5002c84c8f12993d8865bb1115b7545a64a589105ccfefeae12b07fdbc88373a2ee6bdd1fed0d8c48afc444776d433326aa62bca3c98884', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e6d0ce95199b86b710b9a08d8a43cfc6efa42ebbc90385174741879934b67f4e4f8a88d9af5fea424abba658bed6adb7b3c497d0e84aecd113288b31b28f480', 16),
                    gmp_init('0x95c4ef314b67b9bf585d28d2b491c4c6c8947d40f5161c3584c59e5dcf57027e6b4bda97fd204171bfa1b479a7907a3c40cbf5a3c995797b10e25a8df1b1d712', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d829e2f4e3ef26e3463e6c5af028a184f8af1e862d169b0c82fa5ca23b104571e29e1602dcaaad39166eae60483f0f1b8caa39294272ce2182a90c372542dd5', 16),
                    gmp_init('0x547bd8bbd0dd610679b7f6e21d180a46a3cd3b5961b1eead76d7bef6a8a312500259cdadbf18f95c2e0a9094ab251f2737f6d9e1c4828253cd7de1770ca75872', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f66d9f57e332f35b9c76b14e8073e93c1ee16889b3658e9e2cb0ed8af0f1f4c8a304f3b2c1c7a1791fca7d7c0836d252acee38f8ae7e65bcf832c59810b36d', 16),
                    gmp_init('0x7f62f1096340747d522cda6c73cd5cf43ba02c339d7a6eed82f24b464a6c9732e23a38258e127bd69cd7917414623335df3e7063f2c73de2225a1a738c5653e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9571e3639a0e95800f23f72fedf5c0e464e306dd52c46d8c3d7c992b2c2956d7ad44fa46ba0f0e6d345612a68aec4f14956194e538562650fd8d13eac614f684', 16),
                    gmp_init('0x5d50dcab8962b3c4139dbcfd7dd6a6f3b1ed0a8bb539a7c2d72fe046983972557fc32133a8ee8dc7ed29d1909a60e884600ff21340e9edbd6838efa5cedd4d89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7dd9d5042322e2a0f7747c3ee197c5ff67af40b8bb53addb241802196d17f6412aa60e9591c828408f4e9a3a7bf48b326aec145ee20af8205e29f0b487cf6dcd', 16),
                    gmp_init('0xa165b0aa0b413eebc38674bf0d26cc5ed7efb1f2d73cc8030302389f1d884a12f12e6c7fb4ad7b408ca8603daa107f9dcf041f66b012cfb2233accd23c30c5b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7766163a5368f926840e36ea1b2b0051163e2f52584d238c0914b8c5198f27f7ed06514f4bbbcbe3e480e256fabde1f5de5ecbe53be867a5470b3dfb7437d438', 16),
                    gmp_init('0x19496dcd7338f8122c0b557c99fc6abd5a2dacf76fc8bb8538e3ea52bfd09c21bd704abd6f23e3a3bbf7705691622981d8136538db2b6ee2171ead39534b83ea', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x571f9201eeac09df2a05e085a0a1b612c8da56facca0ecb34f48ea96a2b8cfb121fc912e9e52aa86a89c5dc2350cf39559a65bb16353be2c6b05c73739b23046', 16),
                    gmp_init('0x32b3921b432257db3d5a0b9e69e40eb6ed0b7f944c68cd3e1c6a4c985dc5069347e271dcd5eb46ceebeda568813235fc5cfb69886f967d8f2d4b4017e8cce532', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6937c931cdda3cec9bbd4e9ea13643823ac9fb0f4697be6e5082565ecf69ed6ea88aec38fbb53c1103db26734b38779ab0bf78bb7c2f36c7e3bbc3ba1b45563c', 16),
                    gmp_init('0x7996a342c9b4af5ad70113fa355bab29e7882db44c846d63845f5c02f09f21c80f2bf02e1b184b1b8bb6121323e076ab22b9c8c3ce7338bbb8e2c08650ca84a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x383b825f0b56e5f4e248c754c117889877fc7a2db6a41ccc422c5ab7d99e35eeb060eef40366ba40b2e910ecfe0f9515eee47b61a8d71a339cc4df854c09f38f', 16),
                    gmp_init('0x6c6ae924b75565e4e5aeb5886e83ab82ee1938ac45c24f64b212ec6fa26a18247915e600d2288ce997d83e1032f3fe14da715cbf3c6cae3e873d12212b4a343a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x916fd8cdfaf80be8870b1b09cb1b55fe8c617b6100ac6fccd0ae35da2433d90d5c21ffa1d2fbf5dd51564210e9db779ba62fb0d1444a834e40eb92cce674d656', 16),
                    gmp_init('0x82149e733ea43ee21ab89b95b940ef0fda8402aa1efb5b7ac60e17e0e4ef92a75b12fed859687d7574a2cd1b4cdda8b12e9904fe9be208a8f1ff07f15f46bc15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0f7378676bcdd0f159eb31289eb81a0c387511c01a07ea1aba849145bb6a978cb0bac1a489cdd49a583da73ed6243162801c889c1c3a572cb1cee1e906c8858', 16),
                    gmp_init('0x669d78270c80ae5cd00ed110992a57c240d7e410208f2b9271e6d80c901d992458294a8a5455aafb316505e834a0d31b20859b5a168010bee3343b7500316039', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93fc0d4004b5e4f337b8b9c725e18492c8e417759ceda9ee2802cb2bd5b890ca014e3c1681a6e339d2c8f0cf4618cf1b2ad23e41bc15b681bdaa4ab1a9eb9629', 16),
                    gmp_init('0x455c68e5093b41d15c475e427ceebb44604703696ccf74849e72d1a97c5e133e2296aab26b2ecc0f894328770bab51f29f641a60720a77caf067e3fef83c2700', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1904836ad329f588c92685347bfd85066653c584b1532ad8055cb9d00b80069ccb1f3b5b83c29dbe89c12f77718fdfe84c598246005464636646aad1a7ce04', 16),
                    gmp_init('0x3b0d2a50750344594339519a6fb782552df1fc4592329bc5cb7269bd53925cca0e047c79d4ad52ca5882dfa71a38624f9445f663c97f33d34860546e99721ff9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x341b8a0baccf3b4363b0e80a7a6accd7f4cacc4fa2233835dab51efe8746a7f06c62d2a68c6aeb9f0f5fdf120f4139b8795b62c2e91dd3cc31ad2bf6732318fa', 16),
                    gmp_init('0x488b174b7b854b877c23cc35a4e37953ae54f71c0590b66dde87fc059ba115c47c274ee739a33724e7d7931ab3a12c5ff9b7603daa7775645140d5f59ccc568b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a9d57cad1eaa7869142cfc75a7155cd9484d78f392fe0366fdace3011dbaeacf90b7ed39c9db1aea57126974600f5e7e8e254c7a87bdc65602e621a4fdd5437', 16),
                    gmp_init('0x1eae97efa0c1e4c68b07f235bf59f80e9645c68dd5e42f21c1fd38a7b9d20e3bd1e68999f3825e5d9721f8fb44d0d6159dd53986839d367755c156077cbe984c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3367a03b17af471d4d16a5c52c4f566cdfb8089d313e4623605097b03a466c5263e906ed08c6883edce7b45406d9516b7e51571077ec3c232f53264f1cae9992', 16),
                    gmp_init('0x25c80f7da1e8a4f3ab61cf20a7359ca99a5f6b36b88d8555e551511b5d0a982ec46b70954b043d486290645b0728561ccb3d7eca46645465ee007712961f0953', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e3c30f4427800a024f9a14ff9ce1ae4128be340258fd9b289248a1af670cc39908084f5d3fbf2a8e4b1870decc87de72a2c9e6a65d5c98310905e0ab83e266e', 16),
                    gmp_init('0x462c27580e1a4545ebae57ba308aaf60fe109484edb23181333bbc8ff3f021590e282889c0fe9751d1aa87f9b0cc880d92b7850b08a812c29f6c076eeebc8edc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeb776e3068dba6b993ff7d74d5f7afc2208cda0ed7d397e29b9688550730d2483aaab4351a142b359023304375fbada77ce4742b8de3ee5100652b17f3e2da7', 16),
                    gmp_init('0x8835db7518d3e18bd373001ce013c09693c93cd77f11f5f3eb88d3783d249f955d84129e2cea16d8e36c77903a57b0d0ea594d7cd64e3e12852d447e00cc091f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e5880ffdf780d8080fcb00b62f195704c3d056f3447b1bf73d24f52e4dc2b2780a69fb1097f364efd94baf1f1a789ad613df9d728d93a73d478eaf433475e81', 16),
                    gmp_init('0x77157228fe96c366304f15afc2797180a9383f6c7294096cf4fdd848dffcb555c12d6dca7c171b2656a454b6a1804d05aeab8204bfa35dcafd4dba5c83f8a26e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78d4202478bb73e60fa0caf92df5e8222a39b676dd26f781fe8678117d58f1592f82ab8dc9ce7bad7b52e0758aaddf60a7f9aba72d6f666b52554a8751e5293', 16),
                    gmp_init('0x479bea276d1526c6d8ab8b422b39a12b4842974dd3c5a6859560f93ea8081357ede71c9609fa1411bb0cc26e2f1616875c870caf8b046dc812b6051653077c39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37535d91616c486d15af31f83af04aa30a60e5274b8383ef90f98c90c410c558444d6f5f11b64b6c84b5e614b29b59fe78159ad1fded6bf57a5983a182c1c461', 16),
                    gmp_init('0xa9bb97dbc064776672ec22c50488cb5af7d5396f1f3d4f289fad3b7f62e7420b6e04fc2c835f9c754e39c8d30ece4ca9cb473e653eaf53b2a158e88505e5b4a3', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x25d226328b5bc632cb7d7a32c15f1e4daf1562afe25253f2c60157520839906abec7579ef47cb6e3972e44bc6d8bf67c55b6e626f46747964665e8013ebd0567', 16),
                    gmp_init('0x185de4c6b60781b9972c503a1fde825924735b20a7aeb90fe5133299a58c798e08a80827a553f9e839bdb7556dee2cb3753c076b95f540efdb397e8438810af3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52e5af5f0781fdb239ba7061b6a2801994f6fad7fd4841ba779bcab0b40e1d2d2b07a4edf303739c7b7f17eaee5d48cf54fcdd3762823e384560bd4c147cae5', 16),
                    gmp_init('0x16588c9ecf9f23532e85ea98f9d2fd37a46e311853d7c37ba8fb7feecad0f8bcb5259760b8c37018319c8b994247e6a53328f4c2d034f960d71eb4f16398979a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa233872f32143707cfecbddb96faead0e32bfc00d53bd1864c2d832bf375b47f5e1620b04bb2eba22518fd3497df4f96cf9249f79e7be3879b5d8ddc434aa7e1', 16),
                    gmp_init('0x23de7261377cc17567ff0e93a8adedda336d310544dabd56b7d0197ac3ddb882b969a4b11ef056037ef93fb478c12da6d3c1e074434fefc67816150e8cb3578e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x741e0da2e1738a4a9731dfb10473161c0cd7b19c15b32477f0d81d446d6087db42f399087c26e61cbdab2fb066b98e3a8fddc42a854d354d61fdbf16a8a93304', 16),
                    gmp_init('0x9fa559fbec634c85b04cd647c5c3160b77f7259dee74ab2ddd9dd6eb6ac8eb0fcf7612ec740937b40539674ac1a4204b7f9ccd6ba72acef9d5a308dfd3480f3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x953b2096234f6d1dc19be9bdfc160a178da71c979bb3d753eaf7348224ddab6be02ba788c98eed7a85ee0271b33f9d73d36745d9c09720fdadd75d2bd53b55ed', 16),
                    gmp_init('0x9e1cf8716a4815d59d47b359142ae1278f57c70bf43af54486273161ea53d8d499b76950d7347a267bbb76a4d6bd3a86b0f2c7ee39739a4285362450bdc9fe6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ebf2c4667f9ce5d3601a601410fb9a4e60fc0a45e9b6569fb426f22693768d53f2ad7aeed707ecd6bc09c5c31d2b429fcb12388bad13eb3d164132854f6161', 16),
                    gmp_init('0x7a41a60f6ab45ce48847a0e3c83c18c71b092a30f22ec6863a58adce213cf31d132975aeb1cf4caedd157b8f8145e97f94fe0470df63b1be5e2e345b1f63907', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59409ba88a137c480cf03110397747f4ae3ee08cec97aefe113b2a9f7955c046e7abc265fb7aedf7e5a0aa50b0e7a7bb0fe35b17afc745c7ded5566ea8dcc965', 16),
                    gmp_init('0xa595c490b65e87ea11e45fe8d713b465e12aec5d1520f2a5ed6c6329698ec67b6d3b2393b654db53d2f21fb2394e455690b60f15ff7017cb1844fbffbe2ab5f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8abc62aece867f198d3990121cfe7bfa9cf6362288bd9cffa2bafeb5d1610b62a9cf53d00f21664d008eb492d1d427dadc8fb48eeb59660a68b4b5cab80747c1', 16),
                    gmp_init('0x39a7aa54eb3d41f202062b9c06740e9d778afc0881dc966652b7779ceab5a83ad18d681fb0ded8fe172aa798608b8db47b4ef40391beb43a42fdaeff4bf6e3e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c519b313074297281cc54fb867c0011e2d2bbb594a6333c399067a7ef9ab63fe6b8831ea81ab20edfc177d3045be808bec809b60882abf5ce165b131d73d41c', 16),
                    gmp_init('0x82ee539f9846cc690463b79c02c51ea6a7a50f1ca449c25afa1723a4fedc78995863a373b0ac8ec57b4dc85115c3efed518f3d001dc38170f1d0aad03665201d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9dc2919a17f38793fcd5514d5e0989a3e5ebb631bc794d436ba4dd01fc74f876037ad62ada5abb4005b065748224a087dce881b968f9c565def561c58facd293', 16),
                    gmp_init('0x712a1530e783d044c7a70747279cb8d26d25ec1526425151059d0c9c1c03a82d598f76dca3ca95558b5d3bed4f53810d3038f7ec90afd9344f2b7e28452a7fd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x759d0c420886212ce110da23d38b74c262e94a1ce9011a47d3d90df78ee525aaa7794a19979b64609497e708efec9b355d44b06355270922de0690a5db40fdb2', 16),
                    gmp_init('0x2a5a4960ce7685e583f147f0da4c79294edaa5811ccaea340bc85cea00196d63e24c924cf6b596e3e61dd4a78a971895eb7cf5c3d4ced71592f63e0c4df3adb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x581dd65fc7e637550c862fb2bc7237b5a5d6bbf3fd78a4a496e48ae2d0b3ccdd627733b060130b1e8df1a17c77e0a1d31fd69344f1aa73d95b3063b81eb90bd5', 16),
                    gmp_init('0x652b408adc0408a2e57bc8d0806aaf42423a59c6fa1e51fa8afbb8acfe73a139949cc01d9b8575628b60418d7e9294e32c40305f1d86101be37e8689db11982c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61843396883498f81f93abe5b3ad9ae6344ca2fae1058761b7dde418766d10db1733b7a070c8ab6f5384652b3e9dd36057cd9bdb252931cccd57602f5b4fdd53', 16),
                    gmp_init('0x8b36bdcfc43bbc05f9efac9a0373028647f72e1e55f1e8469b5defbb6c5bffdb54a315b77613da13f079fb4ef74a1813ffd1b2eb9a0937ba6db8649029a61fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b45f1abb173885ff006278348754d04e0771daf74c53fe876814e87788bc1b3a951ddfd500589e15ed95495e54601b1e31353f0d5658b8f92128f0a7c30dfc1', 16),
                    gmp_init('0x8a833d7df6163288073be9f98b66337a050d70d19b0bd5e2f2e1781c2dbc001306a221ec5e4b803fa0ac4eca272fed085522ad291da043897aaae36d65a25c1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x880a9730f5ec93a6fc3987f5b725a48e16a11d4bc3ac12a8906384705a202381b432702b18fd198f282b09f51cd067d040931e587fff302efa20010cb9d504ed', 16),
                    gmp_init('0x9f68305df68be4ffa7a8e49d70bbdfad585fb462ad746c1c6e593e841b75c5b2326adb46680498b4b88e4038f36dd00d455ec28a1ec98202fa29e4c862dc8619', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7f2ec0989c4c5c222942470e5f33800d2eca37a1af9f22332497a45f61fc96addc3feca203254a3e8324d6fdfe85342d3b396a22ca6177a456875331c20d6cad', 16),
                    gmp_init('0x5adfa5960d90a2852ab3f95469743fc34384d3494ec8c0876b287cb0bd75d28c53cf849f6c16cecb109e68d10516cb693dc74b2fd3579b14578bdd2ef81da0ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2568176e6416c16b7a255e6ebc3a351debfe3627c7d420ef6a7cd0691fb632491640e28b9299c02621038c2b8895d631257d518bf277aca8acd9a4491792cd3e', 16),
                    gmp_init('0x5be50eb7a7654ea165a125228e2f605516a6adf2e1979d0a1b6b748bf7f257c2dc016696f96ed15ff3ef383ea3a8f0a6089b732833e6d318f64f59136144369d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7596df66efa224090ea2033b2bd4d36dc961c1281dece064cda05f7afe54471c6173587403087f5d95e398257b1f59797f095d8f5a104c817d927fa278278192', 16),
                    gmp_init('0x268326941f950d136b304c2b5c5e33f1ebdd09bc23541ebe5269b23e230bedccfb9c60eff296fcb1f204d36ba773fd1c13958cf9cdea63e35dc98131e106aa0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91bfb503d41e0d354ae992ba4baf4a819243be06c45bda880dfdb4fea5ee8421892dd40cb877ed82097b86ce175652d98c66ff394309c7c50966bb7aa110bac5', 16),
                    gmp_init('0x82a3ca5ad427775456c4aef49f0eded90bbfd0e3fd865c05769e7d94b2629701252ab5086840e349a91a38737db96dce95d9d836703ed18233a05f7bb78fab53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x225a192cd082fded89514cfa75bf360815c69397a34dd5dbab6da79271e129a5b9500414516289e159fb0353ba1e9ec4065d4758cf4c2d207e836cbe9468011a', 16),
                    gmp_init('0x876a4568371a55a1d051f20ba839324fa3ce950db2a176c75fbd30bb6f64ffbd7436e4439a63e09d6fa6e05b0aa838a887711e32d2a43e5e3188dc2cb4304471', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e68cfa0b17f6422844456559c433ed8c3a992337893bc5c329f7f5544afc4cbab27c6862537dd1c95e0b60d9ac6cb06ed98d3cadc64c4d4aaeb13d865043f8b', 16),
                    gmp_init('0x1f528b14c926818d2bc62b06cf24c5550b87671b49a2e8030be374a1dc784f661d90894ec5b8d789b665d5dafe7bd6f4886ffdbdbf5cf462e3ea373a61b104d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfbc1e5c70f370061e40209536b0e1c88da0cf822018ce6440caf25fc186c533e05f923cc26ce2e9a695c54b2ef80c678b2d786efc472ac02dceb035e016fc73', 16),
                    gmp_init('0x1d2933a9aca6cc0ec3d0cf162cec6ee17b52a9f204db23c0800139b045a79f870ee7494b984198493fd3f020bdb5ddec1afb17306ec66af16fb46bcb881b9545', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50ca9ce4eb09dc89e90ac40e585dd1b7e040e2c17c279e1b0875720f89c3c201e32236484e1efd9b488aaa91c47270923b3356c7a4829e50e3774b41054b1a5', 16),
                    gmp_init('0x70abacaf8c789bce9170e48331ca966ddf9a0c04f676853a30c76ba8a026d9ab5af28d66ec69108e2d99379cf73de8bd7b03465ca9aaeccf368cc992035fc72d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2300faa1862d15455f6901cd0b0b7690112073def0e96302966adc8a2ee53c0053d850e4b1b57e5aae4380815683a1664a5b450a92a4090e1434a04d1c28cde3', 16),
                    gmp_init('0x57ffcb455df3b0f4e34d35fcf0a752509205d95367d4a43f7318f509af1f7ac85f08ea0614908f8d85c4fad458f0206eb7908d0acc6ce8f9f15086f588117e07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e9cf5e85c0101a6c6f4d0a8b365ea536333c14f93401910db407d00f0a60b78dba369d17a796db74ee3b9c67b0b7461c85a40dd7a43a036b8d4c367b78b4fa3', 16),
                    gmp_init('0x1324bb8d154820f6f1bbc93f3acf4cbdc1c5a7c1a9b34ab7878fb9b7cb81c1f4c0116e9383757ebb95eb78faefe524ad145983b0176a77d2e4aa4a5945c488d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x344209cd0e9ece47041dc6567466207e953dec530d14f09b367755fe86501686a1f9612b377a1a22782a007d08d420e5ae70755b47dd82c6ae6b042de19c171f', 16),
                    gmp_init('0x5841f60bc9fbcf55924995dd97c96bbaeb17327eac412c2d024f7bbe76ff631a627618a1db567e2d9bca0ca904602bf0c47be607e82a3a6e593935f47fd5c4e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c6fbd837c1f25ab6ed2af673521382242e3ea9dd5bc09e1cee43f8889b0258acac2f350de7a1abe5d75ad0f859c1b02b98a7362880e59adfe76ac83acc719e3', 16),
                    gmp_init('0xa38022f01cd48f3e473db1bf440d63b132147c2cbf11c4916aff0ee76874cb68ed77fd40aba149b6fca2cb26a038cb8854df91e0c8258607098b5c849799babc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2420ce3765fe318033bd48409dca1339f13a8e3643275837d6186bbbeb90453a0bebb50cbf7e279d096b71c1a5f3241457b32f573934cb46322bf85f65246c3d', 16),
                    gmp_init('0x6b04ccd3ab20d75c985b75ac7254f9716579abcc68badf082e696f8232ee12cb905542f73950ed59c5fbdc6ab0d9ba204588ed2625d534f774149b7788102c8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78c17334b3ed41faff1fcf3fff44929e16787b2efc95016161c9cbbd219f3cc084645e1fc654c7282afe8f88fa5f87c91bb62d85eb2da2ed142c0ea287095edb', 16),
                    gmp_init('0x26870323f36a6dfdddde90b8825b1b90aeac68bc03e29a3b5a61c836e4e25320432038b774c04ce8c99562a3e13f2cb00d4f96ea1162e1f081c22ea946606dab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c5a4fb9fd02763f0ff3e2fe00fd79a124f97f37559c00d5aa3c19dc15afc588b53854e8d2423760093a04971bcf9570b694bd052879023ad76afb9967d208cc', 16),
                    gmp_init('0x338978495f5c3644b09445ca7e2417edfcb391d34fb86dba6edd02e21444d5de0241b087302295b15042d644d8e259c4051f9dc36e0488ccc840bafd9a0ae777', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x95836071be8ec842b3107ca1b6be2662e20b19956498ca7a4e9007c7025c1a509e4ad12768a071c1c4130e5d6cab8e1ea9e78f4b2064947964b9555424062884', 16),
                    gmp_init('0x3840613bdd30781f57b67e80824e18be46fb60121c4795ee056ab678dfe6364b0e6d42717a73b577603c9a723605ca681e6d0e7349f0f96ae89e0d1bfacef589', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a196c601bb421db8f3f6bd3dc38aa2f748529c9ca6af26302bd862736d24040cbae296bd55cc76d1945ba6cb1089be7808e05363d62cf9ab8b40171d07179f6', 16),
                    gmp_init('0x8ea1d2de9840c6793f5e886cfc62d6fe8ec93fcf1d8993eb3fe683abde1ed477c9213426521ea14cfb0014e6460e98e6dbbfde272ccd85eee0219143ad96de74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x102534ddf0439d5ce04cf6416bf03a33c39cf7f3fb501beb12f5c2b13e0746296b9712570fc8b19028da297a7df7b3b1402c78b863b428f35af687a4fb27d714', 16),
                    gmp_init('0xa66d07bd4d2a7ce7fef83d3f7ab5546bebf95d763418cccde9ef8045d98019479633979ec7a7d48c6df9fae5d1c6758dc83c0914c2ee14a3fe93e185bdce7796', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18adb9aab32bfb81e08d0f18ea3b8db1ab68d514a2a3b956b64075b723d4053715e697258ca44dbffad05df058d86c6a2ab8a29636bc5e2b2d957128ccd8d329', 16),
                    gmp_init('0x844659415188b090f0108a5c0deb1a8e28b363e26470965e2697e7ca65af68b9b3e00287b336bdb03192a1e4b27b8eec91087314a8b84f2ab32fdb10efc24fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8dd651d0a7d960b0a8d2e38b8e40bedf4adaaabc759f9e7fbee0f9ca312e9e8f393d3d1edf47157da894af10d3012806b1f3f5293ef3ae6a70c3c5fa6b81611b', 16),
                    gmp_init('0x13e1f0d64bf89bba4fa1eff611b9d4fba1608796bd3989385a0e2d6d7b0b7f1af18298166f04455ab0975fe9567ad671fdda07ee5b998404134b0a07639a8caa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b526ce4cb351b1cdc8c01e8f660d1440538ef141b9410a332b1b8bf4e6fa710d1e8c1a6f633132a279ff73e4398eaeaf64938c02694d1f7e6887758a8b4e294', 16),
                    gmp_init('0x83e82b5258aa7250f97e9507435d7b0154068d37d246c2eb0e386d0049537ffd9a3bf304c72b7241a3551e9b8f85fde32194b5c0fd329b59673b1e2cf169cdb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25c2bd742e43a3ed92ff24aa470f2989b0801cb22f65a97e8977f12fc3f1e63324e7c924fba11d00a54139fb040378f3b582c14715b6d7d30c6757c27840c5fb', 16),
                    gmp_init('0x1821e9e2ed2e5acb0d861fdbb8902c04acee5a586d13e1399fae1d8fb1c3a2394ae36ccbc3c953efe226dc9d186c4611a1903a4179f56f669b96afaf182095e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90d77552825425ce6029ca941004801ea3edf83a2fd06f6eb288da8c9441b752944457522b07e92f8321b234a584f2b9b8b6d6ecdd4167c07598a8dda5e0bab7', 16),
                    gmp_init('0x829f94f95d24a28ce46ec2c4859f43a7fd94f640cbf5ecfeddd2c320dfbcac788fdae219f243628c3e8b21beb1e378674e66d0c84a032624130f56373425d0f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2b5d2a328fe6a37c65a863133dc909d16894927efac337135595dacb688b9743a1835724cb02cec300c1a263e2db1ca3dd313b882ab50651c473092b10e7b28', 16),
                    gmp_init('0x616fe59dbd491519484bfa9a501a96d51e4ca60b2bd5abbe95f905e49e4e99d720ed7137825713d390ef79e66bc6e21e639fcea4fce007ced710bb4a7db41f1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f6e172f67087eddd6c4c23b6c8211d5f547cf04bb31b4cb48b12486af9cb9a808b25d3ea3d354f53c8214f318d30eb4794304132813053568524947d3f5bfc7', 16),
                    gmp_init('0x2afbbf00c4304f9cc4ffc82d0666d02626960f4d1aaa8024a4d8bbc2d103fe838d73bb30daa2f145ed78ec12187fc3811fcc42484c12deb29147ec87958eb48d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f0ab8abff674089f3235fbef40e89e25ead4371acc24b080c2ce4dc3cd1c118c233c4a10593e8f55db63871d2eb7b6ca6041f45f77eb08932cc7e90c6937d3a', 16),
                    gmp_init('0x543beacfab4e2beb9d7c26828547a89a00d99241ce443db09c5a7a8669c981276165ca4ee9b03fb479eadd3394b35f5b06cd2be559460b7534282e037d7e3ec8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e7df641c691e9030ef73fc00d132af2069c12b740b0f765800913bb3b6f267b5fa67909dc0e5e05040857934ecbaa079f04bba4a9ac41f885bbc40c9da32256', 16),
                    gmp_init('0x3f6377cccc07f4c35c02b78643f2dbe485876c839996ba5f9c4d48bd724a490309b3b94353f2984dd149b5fd43a8eeb7b3b2f08c17794146a4478d4350acd141', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2695a35c1d6a2ecc24425122b33a1c3c16728ac9efe1eefcf8e0eff7bc1b490d113b6170bc3c9355262af6269f40b1e587a790c1ee605bdc0dec9bcfd4b5bc06', 16),
                    gmp_init('0x88d828c346fd14e9967e9a5b4b3b7f95447bc1ecd613e7e157b95eb532320b9cd51dc460a271eda4724cf76d9b37604092ec7f3793de7b06c253a45c3b3cb574', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x421da02aab95b56f49d8c494bf5a16d4ed8af2b0d19ce36b912b105ba6c7369a9fc4be148f465502878418eaacc5f49561f4c0764c08be476407d4aebf85e76a', 16),
                    gmp_init('0x9e1c209234bf7011dad1aa63113da134713a659a4a3ddbe4de78ba3d3c3e02abdba27f7b65563c1ee5546cd01f19d015e2dea1f2daa59d1e0c91e3f28db9b2ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd19d84617a51e07f275bc622d6e66705650b42a4223dd590d9099505490234ebebddec4eb7184dc9634102d5609b5cc6f225a5ad2beee7a666061ad4e00d09d', 16),
                    gmp_init('0xd97743a3e5886a552beec30be4ff6cc2129e8cd35fb882eb9722bde0a1c1fd3ea977366640c727241cc61b4e9644f89d624d293408888c1705f8ae31f4ceb4a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9261c37977bb81e7078fc96a48308fd3a9a79d4279947de012086384b5c7a88084fad2900588b2a0ab6eb78d2ee2d1cb51f3b3b285594427cf1431ed7f0a45f7', 16),
                    gmp_init('0x2977f8ddfb226627122e6b3418be743b23dd251ac690d644f5f2011dd19fc4c9dbbfca47451c0e9ff697cb4dbb141464da4ee412aff6f839fd73a92761760f4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x920f2e604269cd8cfb436c6caeb91c1b818d3e2aa36fe14c6c5ff6faef6a0582cf751e26f4309535e785563f9763e0253765eb00a7e096174eb046a9f68167b9', 16),
                    gmp_init('0x64c702c58069f0d041723a4173df17945a06b5e1e578ef7848edd04ed2f557b0cd4cb813dd2cfe68502a7284cc96349fc1f7f12a6c84d1474f8f8b74dd609d3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x418d8f8e141d2d17f304ed53cbc336ea2a6cc059a84a7ff45d7ff04d929de95d91878f5e3b331ebc9a33bc6223d13a0d6c56661bad001a48b0f73f4f7da211f3', 16),
                    gmp_init('0x3696cadb322251579703050def9307b0f1ec44c276dea57315648f3a194d95b0996a20fb17637631c3ae0f9cb54f3ef570bfb523330b371efcb61c4a77f09fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f3a66204293814c0977155250ecca7c99a5d67bd2b287e44b4e05aa11e582b90be678e3eef50b4811d1cab84a0a06dad69e3e67fe6f21a3bf6d32d28075bd39', 16),
                    gmp_init('0x8e2ac9e4d23dcc4689695a00844f4b1cd0105351bfd5351d94bc27a7f1f157ef1d954792b8802e1f4fd0ac14989ae928c79bbf6b74352438b7247b898abf08c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ef36a3cae9dcb4f8dbb682563e999a36aec4d0a4b7fac107eb619f1f22c60d904435f84f5343ace27c4ad54270bab3208bd5b28d7b4c1b70a2082c98fbf36f9', 16),
                    gmp_init('0x2823af75c1495aad122d480aa8543d581ee7572aaecdda060d727f8ad238f03d05623017bdbf6d4a75c183265f5d92eb21eb300c88ef171dbc9b27f9cc71cd2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6340a4f4e64ad7957c5b6a07b56fabcd5121ac9acf0902df024bac1ce7192d358cabdee43a19621fae1a1fafedce8f5c2ee27461e1d861a550447cda4eb6af19', 16),
                    gmp_init('0x27d59a2d25897fde0f481acc19e9b16d9bc02ad2df4966c66f2591fcfb821fc377547f5e8394d0e0d097260d993fc239fe7551a7f5466f2d10a72a6bcd2796c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d68de2c2646a3015065a879ef7ce6592765b28cf709bce1ad65a0fa9adb33d5744fe4032662f11c51fa2cc42b1118045fe3600813b7dbc953da490caa78f061', 16),
                    gmp_init('0x46e425d7577f7f170dae9b1ba613636173d365f435b69e369be8b25b3b8d52bd92a42ca5373920acec4e9c9855f221c039a6ba74c1361727cbf3b3c6b81afc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x600e61ac274d97087d8c00ef077a1df114b844ec54b0df00006cfd755cd17a0bce61af0061ca962c92ddf620b0e1d2c9150dc5898b51dcf1e931f349778264a2', 16),
                    gmp_init('0x54aaf80f596fc5740032fabf79394d9cd0a95347f054f0baa794c060e5b02d8fedee915668ad8eb93d8cee62b82dbb9e954ddc00455406cfdd2c4adfb0b4e312', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x901f19b3e24cc30dbe567e1574232dc99c1f886f2a1d2499831f2a7238345efd3d7fa107c5413b0ac62dd70f6fac430896f3dd59c5d6d94216a1fae8dc169a5a', 16),
                    gmp_init('0xa9cca28beb6f9981a4ed1b423dd38882127973502bacc9a11950be524b40a23c74559dfc34a6deb8ffec010887139debb070952ee3aa6c27177e2c3f70ae0888', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89b026b0a66e1401dc9cf2a7a6165a0ac40c71d3cee25d81c8519130301bbd8d629edf944e3ff3ce5bb253133fbcc81089a7823bdaced63cb2d1e9ab1a35ee1a', 16),
                    gmp_init('0x64116298e1604c495ab9d6f28fdad27e50dc080429dcccfd3221bbb0174ec01dcd26fb9e75ca3fca60ac6f2a486cb2afd064fa7877731ee3dd5a39d3a1ee30eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x899eceea028ab99b54e2b2b2772b87ec1bbd320ee1060c4400930d014d957ad1e1f8b9627942c5c5b7c372f183bd0c1e2f227c814ab08497e3f01657b2ee506b', 16),
                    gmp_init('0x7f56e3bd018f930098c196fccca14b600206203e5dfd991260ae9fa4b6c5f97db3c45785972c0de3e070f454234f27c2cc0c2f4e18c380e3259063525f405730', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c5592a8c00b663c91c8df01f42721d08deb5e8bf53d119332eb09f23124931ca24240411355e81ae5e622e4afdf0bee33c62fe4e501cdc072ed88f148a04eff', 16),
                    gmp_init('0x7c5adc1b69b3525ee5b74ae90b9bce61324835b7165e04e404bfbab7d8bd42a3b5889d1907c94a343f9c22c35a0d6e2c40e3f554cd28460059e515a9163c6f22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81d03cdc83b4b8532e98969775489de9a55ea519a9876f6b7cf9f6e5de5a5cd5ee1e9da00f274b3aed1bf656057feedb39258674afdf55fece1c72e6b0ce695a', 16),
                    gmp_init('0x29e9c0693915f7c44517cab6df48c0498e64cee5f19527069e3d87481d11261887b576acd0e2757d7b8b9d0f11e9a92663bf01916c64ac6687704672cb01a878', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe6cc8730790c98965709b46c3a4c5fc78389cfe15da8c894898207fcaa62a977bfeff962e207398459115441261243a64a28310f6ed55e1ea6fb1fcd4b1d247', 16),
                    gmp_init('0xa8eaad0e9485e13d5031a6dfd89b6e6688ffe2869f3ec09dee11c2d14c95070df7bbf614b6266361ab919fd4de0a17abc55424724c51a1515d1477e105bcefaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x305fcd87683977a6a1209e7d0ae980bf17ab0318b0914edb3e2efcfa7db23e45a6d7e051ae26bd1eceff92d09ab00a00ff575565d03e1465963039dd350cee6b', 16),
                    gmp_init('0x5023e1ddded0847f0216b4a058ddc610aab21bc1f8e6569b7be52bc56150c104dde8eef89fdbf6a95d37aa370cd4de96e38d9bab106538460c7f652e88df8c0c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x437ca685adff765fadeef1813f608d37a23def4b28364aaf3387d3c7c500bcd803b14787426262bb06f672dcbe14bbb75a25b58c7a121b4d162ac430365a8f7f', 16),
                    gmp_init('0xa338808c070ba0befd9e9a3d628ef7d805075f92fd2304633727c3fb3a7223a0642f64f68da1e3ff7a3d600321c5bdb13172e547543a6aaec7d06fc9b56ff455', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cc10d6daacc15aae14ff5295d5dcb2efc9c751f672904aa36f8135733377d197000c35d9f7cbfde7598c9c18722229f227b2ab751aa67434ccf874c43ac80b4', 16),
                    gmp_init('0xa3c5ee3364d827910f3aaf35dac075a4d9720bb58c2e5b02b668904800788d0d2beedc30945d49a62042364c7537dd073545292f047ba3c627375befc9d40102', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8203561b1e1383913231b8e27927b11a8033a6924bd966fea56184b9565432918671689949a5f2ebf51ae90e76556779d4f4b04cd8be4e281ea6b5de6f283b5d', 16),
                    gmp_init('0x48fcf3d34066a6c0b119ab5686880010d9ec6eac63efd074e6819f54205db94dbbc5fcef2c51c8a2cd5799dfd950c4fdd9858d02731fad2ce43e5ed601e0eba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x266b85e3b54558683782ff55d36f6196e52001a412692601bfcfdc0e02b03aceeae87b050848c920e52127ee22f62a8993a5a719ae3ef5ffe6d807d5b2d19c55', 16),
                    gmp_init('0xff698491f058b93e0afe0734a117d0a988d2e1f577a6fe7c864c58b880bf037705e779d7da8735fb28b0283200d6ac101a75fbb905ff2888426d89c428a11b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bf4d8d3a34c989557024e8b64e3d9fef351a15c16dae3b74776cfe62ee5dbea6b913aaa3d6d47f36b08accb5d8ea73fe609f318434580d85bd199c52d652390', 16),
                    gmp_init('0x9f5b7ddbc05fbf8552d75d9fa93947d16da2ddaa3eacce7dadd444aa0a394bd8de501ad9888eb5a32ec43c0145ed2cf2215befb65591efdd97fbf18441c09fbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x210c7857a0724d4a83b368e9c759dab990a8665ec864f0171e8a003fae5b8a6ac5463fa4973fda8750c54168f5ba9704a4f9d2636eea4973c9175b079b621d0a', 16),
                    gmp_init('0x225e1582f991cb8dccac94dc2f8b18ae876d606546928f3f15408c30dbbde3c8a2d4189aa4b88779d07e251c892619e7d82fc6b2cf39ebf66340099d04751716', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x746716b47094a971ec03e67698cdfa02a34ff0c6e0c65456a49807d7e6279c041a97425a68fdfd0c57785a84563128cccad897098fd1213f28e09146d8e67168', 16),
                    gmp_init('0x64d055669cbfa377dc8ef9caccfd2b9ad5e1fd61caea4e9acfec560cd3009715711d9096cdce2edb51f46bcda256fc8811b42aea8bfde29239151ab7fe3e3e96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31e3f8af7a1dd6d3e5d0723099bd4aa2d7a116d7a29a0c4077cee2a89f938f08ea84760fbb74e023173a1930c3f71a42135d954e970f760ba8d76763e2dd7982', 16),
                    gmp_init('0x3e8526a4297018639c643eade829161c14eea238810815ca09b42701018779b942d81d558777abd547a04b26bb3aa4d3568fc4fb4582e61c883e806b11182840', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20800c05fef9c93452a10839a9373c93a3109a498333a1fb19a2b0b73a2c76b117bdb7b04acaad8d9d3136f78f3951bbb3dfce20421a9bbd0465fdbcb444e5a9', 16),
                    gmp_init('0x349c25e6e841e75b3c399fe450ef32fc73d10c8828b985c50289cdc13924e7af50c8717868e0d5f97feb6f1fcf6477755349a9b8d311f4260d51a5d420fff24a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32be626cd986253e4ec72d2357a5549fc3c2886524884171a502f0c41cd0bc9b37c60ee17768fa3b221e7f88a94258aaad84487682a01e06d9eee8ecb69953b3', 16),
                    gmp_init('0x59008aac46d7615c0f0ea7c928d4a56bfed6815a307673111811b556d4db2cb2cde64a0c7dfb759632528d4e1c8480c7d2368b5a61d9352fa723e9fd351baa21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa913253a7775a61b6f673e6b2a6fbb3589c8689fb78fb80f5ae922e37b39313ce7d50d2760a432f9b29a8230702c2dbf15c53cb8fc420697a38584e0a9767218', 16),
                    gmp_init('0x1f392cab1dc82a3faa2a412172510a402dd70f4663515666d251b81d27ce447c4af65f10fea76fcce42d369a94026de7bdb33b90771b3c687281e40c2f36bcb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3529213d5f0153411461afe9fc3e5f326f22dcc1b9669d6b417e45101734abbc44ecad8d72b80c964348ff7162d037834a1e8fd364089777b663fca82f08b19f', 16),
                    gmp_init('0x811b7db5460ba92ce19cfc6b3d855302805868b5c19a8ab24edaebb05f46223c4bdd6a01cf3f42b02c81a121d4677e8d4d80a2b81f65a10eb5804f50d7797117', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ab22bc4d5b0ec3dd6d4a1baecfcffd65a492bbda1deab349c1e32430400f7dd6cf6d59aec68a819a420233fc7a277c2f627d56162da6adacd4ea8152c759bf9', 16),
                    gmp_init('0x8e37312e53c2467a8c54d89183603b611a4a218017c42b86502c252b2c2479eaa4350c6c391a5a39fd5efdfbc3cd5bf8d34960fc5e991b683be3e11ee8be4e45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a6e393da3aff57d583edd866dd5e3f61f1507c99629ce5ad63c3cee6fee7bbd1ba34d24a2493da3c21b7b24855d5f265b306f899364dea82ce81c74a851d8af', 16),
                    gmp_init('0xd4be6c1244513ab057f45c8cd5d315da3500f187c994fa9ed1703eb32a6d00afeb73225317ff0baeae9af289fd8cb09a0870d7bc6d62339947c005e947e9ccb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dacfc0b41586c17cd87c500be84f944afe0331e8f5631101505f005c51e1050869df5f6b6b3f6f464771c2ec0e71a3ed9a63e6cf36eb15aac691e3bb9f42758', 16),
                    gmp_init('0x1dc540d21572a6b51b21eb3a843c376748edcb82a6df73b7154326bcbba0ce718348aca4a95c513efbc1f78d0c3128ad3209293f38fd2abf63292f9a12b9c0eb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e7eabd5741fe87ef7aeef45b907a9f291dd6d7daaafa67a46949db137182a8ec3dd3cc4aa97da7dd16c477e1e0053b795c65adb48cb9856e4f55f82363fd5d3', 16),
                    gmp_init('0x5aae4ed3b50da631712206816cfe5a33ae134fe8658c85a7f4c4aeb4726f62f22fc88e43998ca0a7b0f4c2929370ce8e4bb81df6692f4ed37fbf348d8b1df571', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44612626d0f7fc728a2852bc311b9f9b636edd7a0467f838ff73c9456a74b0930326ab8173ce39de0dd31a2a38973555bd7393ed057bb048459e42a3aed7201c', 16),
                    gmp_init('0x30e94ac25b13bfa0aea6b751b01397b2a174ea93c1f8454ecb89f50b3a2eefc22b8aaa5b26b0ac5f6dbb1b91aece6bbd45641844db8acba536284e45efcd15d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41ce7df46ae5d7b98bfdb3180aa7f6b58d53723cc64213e12db16390f45810ec4c4804f6dc3e6206f2e3510f68c1aa4c5d83f5c67108fcdfe4b5465e3e48f070', 16),
                    gmp_init('0x3327dcfd56bf49b7b115cd3f5dada3a63b7863e6818aaeffc5c518d44ce839e4bcd4efe6e1487f64952301f97a70e00ffa9952b1d7833be33f867689bb23621b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x493a4d5028aa81250b96bd1bbacc47b1b7af7212c8bb112baca276b567ccc7014177b092b522a3b9773982955fc7ec478036a937bb3aa65fb2c8e76a06f11cb6', 16),
                    gmp_init('0x8d54fc3cd7d6b44d549e7c7ac810df909c94653f630b4344cdfa8dbf0f480730dd9cf0aab9ccdf4c9e5019bcfa84aeb85c1778bc44b9d6f5b67ef5581903bcbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cfa7745c92729eeda6e5bb0eccb72634edb65ee7acc2c2c195066c9e190f5802549622f1b524150580a29c0b40b59f4b201cfd72f38528eb6764ec6ec08d18d', 16),
                    gmp_init('0x731d8526bbbe7c50ad80f796f0d670979dfa30588ed7a67c1c770605937440bebc4fa4f57f2bba1107d931757ca866704a78ed001b80af43a9c27d8bf0c099bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaac07412859e8e8fa8582214c45e868a921c65e64fe56e14c75527caba98894c29d6ac6c983bc6b8c5f680e8f93acf2a8d6fc5a6d2f2894f3e8ecd0d43402c0', 16),
                    gmp_init('0x57dc5237c9579f7afa19c89c94a8dc5fe487f5fa085976324e13f6d17e3c3f11d36d35bb9e47075abdb7d67053a905311e57f4fe8f0c9ef28ba764b4a99ddfb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c56f36aafd67d9b1613ef6c2d0eebe37d32b4de758a43528cff5222a7fe0463dc9eb5841c1ae17b6ff73d49f3e36ed4b4f40a505ccbd0c1dd167ceaff0c4a4a', 16),
                    gmp_init('0x6b02f15e760b5c5c9ddac82c07a5b09d70d7503ab72b5b87e6aaa9196d8f43827e17b2501fb58beb8498348a56a887763868ee88724e820c20645af1d4750e59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f388ad8cc8994f711f61f040c98ad8741f2fd040b9c8e78ef6347d2e391c1e0a1addc321da122318adcd77fa25b79cb6912983dbf3cd60ac4525cd5c909d50f', 16),
                    gmp_init('0x84e61dab11067bf24cef23f5c9ff273ca4a9697b030bcc52836bbaa51684cffe63a0e19a3578dd5a3ab772faf9b9f198f4922c570708667ba2d687b582c015cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cc3d96b1851350bc2e87617ac68acf00f0083f93f1dadc993623eba030325a88e7fd6a8ba38d535f4a38d7629ce29f1af3ad6d360370ad96120f51d5e7bb969', 16),
                    gmp_init('0x38a0caf7ccdbdc1e200dfe0febab540f85427472bad9a8e4be3b79b090e9448053c0eb30b6da5df6960247385e0d98f81d614d55b31906d337028576426883e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9350ce55b33221350284158e76338bad54ba8d48f2b11b59705902aa6e4e1882dba143d506e5dfda890a32853f103e788ebede3ee33acffde3d1b557be0fe8b3', 16),
                    gmp_init('0x45ff387d73e635361669e6298d83e77168028c79c3a4c176262879b4c96b0458cd2427a535c18740b3b86c2026a8d02e4c5428459ee38de3bf0512ba68e073e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9803d2829ef1367d5b09c729fcee55337172e3f7ce7f901eeea95fcd08c5a47cd4b97343863cfd576f0fbb2a69e445cd4dfc8f61e5c125487bf3a42110d09224', 16),
                    gmp_init('0x163cb7b4ac9ed3e11072ce783de7b3133ce881d67df295602ff3d625bf5a3fcf4fb15dda3c7d62d95a8ee74edad55d273bec14b530e5856ee2bd00fcbef249c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bfebbca979f7100390783e4d04936c9ce474e8be1f108a21fe2ec1f6d131d1a0ebbe851b814d44fa889932b1781bf669cef397d685d2a755968280e8e329589', 16),
                    gmp_init('0x8c2e06de61bee56164dd71b3ee9c12feeef82dc7ec83baec2af9f518c06547ce056e577bb36729a78c548fcc391d62c3d7a129f3edd20100db0b5ddddb13ac50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2801fe1ffff164913d6ae5eb4e1005d23840070c200474f723ce9526ab4281fd88d1c5befe376f0f3827bb6ed681e4ebf2b3df931ec840015a4647f2566b8286', 16),
                    gmp_init('0x24cfe26289999dacc8f1140941fee4b8ba4cc903564709fba61ddfb1fd5e17a6eeb6e8520b6a0f8421f01e98d684bede64e7b8159c962763be0c2bf9df58c6cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x556bde510f04c6ad9ebb6e9a60dd6ac644a61e7d95666c259c5a4cea70e999205bb15d7b5c9a3a254cfd1d0813fa78560596bb2d9358c93fb1ea11f7d8843c28', 16),
                    gmp_init('0x86c6ab2e59cc8ebb2e72ddb816ca84d1c8109e39c8c829ac7c9df6ab4f6c112f5d11568e21d08d2887d38992842868fa06d19887d7010cc85dbc07a88ac554f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42f28ee78861b6d6b0966bfcdc6512e3582d7bb0c0a8edb6aba4d92a758e9f3219d19d3f51025e389223c031e1bb3ab65cff19c10dc54240cfa521cceb9b4f41', 16),
                    gmp_init('0x7601a423e48235253785255ccf24f5baae9c9af9c1736b97e045907aba8868fb58a462ca34049794ca25e753b0533b64bf698712c9c128fea1ed906f4ba47a8e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x38a590c83de478222705c0e61a7efe8205300f98bfa977e23f307953047e8805403c9c2b2e481d0cdfc8884bd69b0229d0176c561a34581e184c543f3d811bac', 16),
                    gmp_init('0x8dfa25826f4e8435dc19feec90f81fa3a386903b58885e1dccfb3668dda718ee61431a49b21fba8a7ac35c2dd1f5e82892502f89e8c4908b351aea2197d5b881', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31a9b325a9c10a174b4389e6c9c13d7aac64f05ef97b9a02bbcf56116c01c1de904e1941e614c1a90ce366061c3df073cb86d77af815f26fc1a06de951562b9d', 16),
                    gmp_init('0x1aa0e6d954faf2aa04e5e4e46eea757f8ea41520cc1d63c86f91c7c505bad33b31fadd31a45455da94ab512ed2a6d50019a2fbf74768565ac4585e8607eb73cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83b8e32c8ec236f5c91e6a08a5521eb9ecaf04f9cc9d4cd64dfa7c4d504d661578c97c7b212a4832bc8136ec553bb1d5a39968ae6998e4025156e6551beba632', 16),
                    gmp_init('0x80a53d15a30d87ef80dd86448632731344d1afda71bf29951efe7268ad799606976d04ea041ae7fc9432dc5298971bcb75164d7a40420691bdd49b6692ba6ad9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72ca5f8b8e828bf85be9ddb1f89f9a9e23478ce93100255a8732c8af696f8d8b41cd3e45fefc9e9f708d761b60d6b191447cad6c384c4210a8646bbec0d42e8a', 16),
                    gmp_init('0x467808c40996614b026ad481df28323373c9f59e4016917869aa6799a3e14fcf0c72cd2ac45026fa92763df1a6b967e8e10321d9d695ae8eb8c7c7f652aaa23a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x965af7e6941e1dbe94c1ec3f037385eff4eb5f70e1bcc80dca00d30770291105b3e3bde63d0d0cb901352aa11bd13d590669ff31c6186f3a8529ca46575c1642', 16),
                    gmp_init('0x69554ed9dcdad5c177bf809e7667832b1d09168734fa432b8dea09cec9d6d5b6fecdf538efcaa1a8012a5670292858d12326bcbadb9ff5d743919d8f8259815f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3028bce78529b4b84aff403a224de52635ee16df7a7888e7d90ae326f3c77ceafabc6bb8980713ca1accb29954a89c92c6be07229bbde0ab2a3356db28b60f60', 16),
                    gmp_init('0x29cd68a35aaf6935e19df0796378f5bd0d747baf6798c99263cc2b6b78f0212ea9745118a142f4b3940fd3bb3edf7b04349f03580fba08cc414bb1954e2c4ead', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69c70f122772445a78684da77510af301f225d28b37b14245a0e899d10ec31eec3216b4f64218c034bf67d330c45677146d3f676783ad43f1e5129dfab905943', 16),
                    gmp_init('0x68fe79bb6d1c1d5e557bdab957d49f39f642f538ca8cd140eb20fbb6972e7d90c08ea94bf42b4b12084b5e8c6291539c0504d34ec08e66ae28406e440a4effff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86a5ad8d9263aa9aa3587b2b5b64b16c8b94dd4a1c8798f3692814de8e51edabbed19cc6fde76a4b22c46eb24f7155074c4d80c5f4d83c4d15767057d95e8570', 16),
                    gmp_init('0x6476aa0bc5fff3d099dfe8a8b0596512bb713462a41f31a48ed0ecf3c593a4f9329d8129a3eb9cc3de495c8cda1f621a044f231d8661772165f4c52bf76457b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1374b16f32f6b72ef155cb63a2de134d811f22f8eebdc22e45a76b1eb5e4c7ca363a0ecf05225a50b955ff263226e50021e307771af74661fd511c34dbffe3d5', 16),
                    gmp_init('0x3e7c0fc6cd72caaa267052abf1220d2ef6bf56090e480788c09b6b7df528366d28935387a3c0efd85a010fa843ef32edb0fd470e7d1775fec4cec70207589bba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2def0b299729e78e62d72f9cef1adb70f16e70faf5328e8ae57d6947db8b40c30cc076d8026379e599cf878f3fcb2c343baf1723b42e4346f70847ebf200640f', 16),
                    gmp_init('0x42908025b31791601b22b73d9fea2ea32177017a5ad980e843242216e266103c38eccd088cd4ae80c4a138abdde3b85142dd22a4de1ee385329672094fe1e384', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x685ad5993bfbe9a60b690dceb8f97e760f0c1b0cb394f8d921307e802e593d8d8a864e8c157c9fbe55cdc646c2ba9bcd62071642330eb0142528db9192dad763', 16),
                    gmp_init('0x82d5f9c66a23caaa3d2c18d6742da1933c662354d5e49db816c5b8c8df9cd99f72bad9b9e6018ff766b40163316a7795bece5032bd0c6cb2bd2796dbf0c15ad1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e64874654eb6fa5e5ec7ea88078e6f4d390131858dd5e40b4f151452433a04c4d226440c45266b6d6c3cb52c70ae9139e315c32a19f5ac4586552e0b5af1622', 16),
                    gmp_init('0x25ea3dd7251be3d173f6582040890c4e31b191e02a7156214100d899d99b8f4732eba460bb4c495bcd2b75fa0d8b779d99d97334c6754c491096b45585cdbd92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ff06821fba9a874132c447a601a713b7af5524bee46b52620e069596f8ec5795ecdc70d9ac375dbce31b905563a6d0a2f698850ec0f40c74d0a853932ebd00e', 16),
                    gmp_init('0x210dda153b2e3c1a98c9d231433edd2bb7bd7c8fcd867281e9efc5a407872c9dac06220279bcfa0e117d1c6b8a478f2833c08afdc880e7fbfe1e92f1588c1b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x817d7b4e5c409033d16782475f2d0f5af6817036ee6954fa8ced6ae8a7e302c56e909db1d0a56348fee2d933b0357d4c5dc0309bac40efb4f73ee18f7d0f34ef', 16),
                    gmp_init('0x7bea704bdd0b33d5ba1296ed6c3bd6b703cc7105b4967efb0f6f84854f0ae82053d77630f52ee43c603050ba4535b6c186a53b7c81823cdddfc5ad6cc7556252', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f7732d5b9bc082f32310e977e19421567c071dcdf8cf909e2883ff1b77fbe0f328648ed26796ccb4310ae19331fddce2f296dd439cfdd7ef9b3cfa04166e839', 16),
                    gmp_init('0x97620f2e2a9373417e53b318321746d821d54d79e27bbd5919aa86a4da7f4da469c773e42f7b2f4c57bb02c939262511ae90af9f1e38d924c011df002255cc96', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x170cfd8ca22e79c07cfee8b24cb23ffcdd97e4a7cead3f612a1c712a38b20c6f7e89af74a85cb3118c96b0b1f294819b7cf0a285843fc103ad8b96aa75b7a602', 16),
                    gmp_init('0xa9c9b277c601fd36ba87d1b66fee714e53bb4aca519b3f5ae1f865f145ee16d7456df841d5aa189544ef4fb43c378749a40a567e30bd2fa84142f29a15d9c253', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58d125862a9f1de40995e2a26c16c52bdc02fab59e44808643f07c5b78d543688dcf4cd4c0fc4ccde26149c872e3d1bf6c0c6ea58b1f83646915dd79a1010c7e', 16),
                    gmp_init('0x757857ed281c519d1783d8f2ffc47d5f99f04173dbc6d88d00d08e9a9b56db5e8f45aa0007d5daf005d20d99e7d05c0e613f45eb9ef74d1c18d7f84b7072257', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2cea9dfd807167bb43c71fd3f0fe9755692317345ef3b5925c72477fdf6f03ff6201882e5d748693533b01aab5d4de9aad88332c2ca849204a862596600aface', 16),
                    gmp_init('0x4fb0503219fd829975723891b252de2aba6f7e3208680f7a49a22d7249c3dda204bee54a6e93739734f734dbc1ec02a8634c0aa20ad1efe17403d7e48c23d404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ad28de9f3a5d25ac1b14db4d10ef19db47208b87bf5ec95013036e49375635b4426f6721cf5137bfcc473172ba3e944d9a757f67c7f3ea3c3cdc83acabb027a', 16),
                    gmp_init('0x668fe600fd95bf2218348d9b4190769571294e4fab503416e314668a15a9f56c68b0ee198734b6518e32da7e920679f182b13d0e4e6737b3d656467cd5fc0ab7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ec3414d082bc9508a85762081d7351ff396ce4af3f3ddc648c733e624a6284a6c106543d5483aac36b70bc2650a09b74172f2e5d80e7712fbc631b03f924867', 16),
                    gmp_init('0x867d4e2ca703c671b8b7af88c28d73a335ea36defb29902d399587e76b2a4f6d6fe93f5d4e71b676729eb3e4afa6fb32b20e9f2ced259066e7985c07869efd70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11c5a3b18d3c1c83dd737f63dea4c83f5b96a5f80c6686c5faeecdb9bc5c66f1a192c4a6a8417cedbe0547bd2d7331a9e8b128443be9aff0db317f976eed1773', 16),
                    gmp_init('0x2dc0dc5b49c19ba09352d67ac508872b5b1cb333e2d6638dbb21479e23c94c0680b21aa18b3d66795f62affe9ddff867a6ebfb907e7e19e59bd152f5798da72b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3615e79c50c0c5666d5da9894e78fdfab6f2a63aecb904d221a65c54c2d5d4aca5d49ee2940c99527dfd38a1343ec6db6411a3df50153d13f1ccf2ffb58a7095', 16),
                    gmp_init('0x52ebb62d1d3d51d0306c3015a36b04835b60058eee5130ecfc46576cc7fe9a3844658918e31420adb31f48f06c7644a7e1570b51e41fcd793dbdba06d41dc5e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x447c81a97dd89b4875f7c6a938494d141ab4caa40840a116510273703d3e2c6d921c2a1212c8b2263d0fcf032577b0d1ea70dec16c739ead13931fe9e638fefd', 16),
                    gmp_init('0x4b020d9f5dc9503ff40c6f179f0fbeee3d3e6c38b32b252091b2dddf7a01a95dc25238ecf6e0e22e41604fb7ee1742219cb8ae79b3239122ad4026d1cef353ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58ae2078ef84a3d5483b83992106729e68201e0d0e9b80bce4bde5c99cb2c9136102da56597438d100fd4c3c444a2cdb9fc4935efe21803643b27ad74900ef94', 16),
                    gmp_init('0x6cc6a51e78c7b17e50b05e500e282a9b5999c23340ece706a96d656d0371749a94cb3be599835e1768b510b68e20b90d20a02cf491621ca6a4c624f301d36232', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4501d15765ca8bd94eba3649b3100cb8811f505dfe75f08529965f7447d74272e04a2fea1e735807227c6f9e49a554ed8dfcf081f5295fddc10036a4745d6f8f', 16),
                    gmp_init('0x3e91e2ff75b2c0114d99cceb1cb186db5311e92726b623beaad97ced260f92f0261a935acf37531a27049f79f38c9a481e116917b777d26d6105cba0037dd11a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7dc14239a6beb94c6e760c54d117ce6ea4d369eb90518952ae6ea932c09424632003d687a3806be52a72458f14e612e0c1ffca14d63a9cfe241431c8b065c78c', 16),
                    gmp_init('0x19f3131cac9827d8b8ea97828fb9f58706166b2086771ad9fd2eb3c8a140779152f1e312d30377cabb5b62fd34ae735e159fc3541ae2556bee32757cbd7cfdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e364ffd57d2f3ef6568ede3f305bdde9ea0be8bec1add2d201942f7c8d8d964eea9ba12e4dfd9b94f2fcb4340f1330440f8aca264066a0d89439b84ae197e68', 16),
                    gmp_init('0x226f51f576dd670c252dd56c2091a269caf34589b0703e264918bb5986baab73bf157a1de6fd49d95e7ed6c1198fc194c916f99cece0ccc5e11badb0cfc5d7ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4aa8c25ea84287f8b2d07f368a659c279eff316781622977ee11f8be9f439ebe168c9423142644378a5058eb7dca8ebf7533bb096afa8886a548f51f6ebb4ae', 16),
                    gmp_init('0xc5c4e009bd90de4477a6733f019ee318dd35acdcf384274ff60340377ef1ec77e71b383063665c37a24034d0ed8ba16aab6f15e4ffd47e603777254b4bc7acb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c1a88c2c0fd1e8c098498951b2ee3366c5d95a5e2d523c321bd7f12c77c356e7024f6c253fe1e006f2fbf22b05b75b5a99aea02c5234b4f58951e51d035111b', 16),
                    gmp_init('0x59edd75dda66091143738210d172610ff239fb882dbb6c5876274dc130df18937e49df8532322008258db861cd73d908cdf78435cb7ff1f41e0e24fadf1ab8fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c03f99334325db11139d9caf18dd4a21889c14f1a87595c4e2e1f423861311205abf425f4a7d41f3170b74d5156dee44134af510594168571b16cd22f0d352c', 16),
                    gmp_init('0x7f10a1507440ff6529533d659fb52ac27fdd4b58baf231407599da0cdf17de206045b28496928127e1a85623ff5219a612a4892c2f63fb7135673595d3f79030', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa66edaee753574cb9d682682701a4381134f1e52bc5d933714305ee8bcd4ce1eba43400410d9f169578cb43434f2483f87f0a19177c6a28727fa9fbe1880f36e', 16),
                    gmp_init('0x860ca64950e1fd892e8d4dbefe5b1b1246a58c89ccaf38279512b98d8d130f026479d2afbe1e7be3d2b8305a69b46c4ce49131e48916d41a2a6bf68cfd367875', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3961fd4a783a1091b19906d034aa086cd704f4e8711c83106b48952e724b64cad297d83832c197c1bb6e09b40ac4342fdaefd096943b2a2266ef45dd97f4a4bc', 16),
                    gmp_init('0x12d9b5f92a2a9ee2ab6a6e673d20d6976fc0309d4e39eccae9450fef8baf24dd6a6be93d864ccbe6e4dfeb9b7056657ce5c2275083f393a8e12cc79aba0d463b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83dc3dd6f555c4afe4f7d797984fb6344d190d1652980d2f1cc8b712de2539d7fd27c46d08c5df9cd39122e3b45567b95353bca6ec14e83eeff7c9d9b988962', 16),
                    gmp_init('0x8f5e1d0e2cdabff651a3cdf120d8a9b3d804000654952a8a3af6dc0777cb6952f075a11da3ab0af160c9582ec7bc7ef7350cc91e45848d2a3a20f2f44302985a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88beab1ed511f2ed61cf637ff1506d7a5d7f816999322473efc2e6b790704c3fb0201259f323b7d740ce3fed5d3039dee189d6bd1717edbdfe3dac8f21fc1a12', 16),
                    gmp_init('0x51145f49d5d24fbf16794fbca9ffb8fad0228fc315c549e5f5ecbe4da9b952ea9caed81c860cc55c5fd54350b06ecd713a5ce9739eb24382b64c82cd25d1cc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dec40dc515d3c400023792f75b671bbd120ba756e07c7329ad8b235007b2843fe70442f76d067da6d98e79553fa8c4b525350960004fd60f9a5c6a48468c5cc', 16),
                    gmp_init('0x97da4012214977a7370dd93326d0c718c72e7ab81248bf2415f6351a3ada7e94fbf02a9e59f17a35ce8c765f5d8ae5c19a8a662d82dcc67a116e46b044d2ec3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1dfdbd29ff6b96b77626799d25251236e84aa8d6753c41253005738cc97153138e1a589b41b1228a4e7d0e01d577d337ac9ef2651914995a1627ca785a6327a', 16),
                    gmp_init('0xa9f88781c22b62df6214d84bc94f8f9d0bdf85fd135e9e20cc165172d95ef7f9114f9a3d4adfaeae284e6ac5ce835e77110e1ed9213650f836731fc6f1840669', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b9e4708f2af75423f166579f30d5f4abf6f2c525dd96c677d45eba1574058efe44347c98172388a04e4ef0a4929b814f6bd407826268495895ac6481d70e218', 16),
                    gmp_init('0x2c663c34e6ef8e54318428cf447b6896da04f4b4d992a73abece73ae7ac12c1cb308e367e664af8b0d2c65b9692961bd381c3c3f86da05659e9c856e97de7f03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cdabb417e0ae6f76130b26b09b130a3ae7b9d633c8802c560739fc050853a852157038d8889a9cd8587aa4fb5109aba4096ad48612ec3ac151dcd9fd9dc2aa8', 16),
                    gmp_init('0x6abe9f4a5326578b108479e92a2e8924fb2a52bda7fa0fd3e703460363fc31acae4e550b021951df2117ccd7847a020d8577109c5fd9dc552fde38b40b5e63d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x915b79e02100a7692ee89bc8a88601685eee4718764f0a0ae7aa7001a589c3bc04f377f2363745c8ad60a686ea45230d77c5a3c5f29c99a8952a8c521ff6b9c6', 16),
                    gmp_init('0x3790f88b4cbe7bcab71ed6ebc99841a43b23308abbe0efd0504bebe2a040a2bc021c157557930f8077d82c4b1dd6b5ceb0b3eb23320003d1ef4e3e5f60ea5b21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x644294d3f6d9e6909f60a78c1b61d77dae5c2a3a6bcf0608fed28e984848b3c3a5e89ffb09f5b7dfa53284f62cba37e98746b9796e12011e54617c97169ebac3', 16),
                    gmp_init('0x96659318edf98d7a9c0afbf50ae5390f872b6ff87d4a960afb41601a727a6fadd36b6a9f232b1622c3912a4c521f3ba45f2f4bfeb6b73139ece06553a1504573', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8118221ad16de2ca0d95c50543a3792516697ff4de86fa81a890d950e0fe19f9cf432a0a93f934a35637827c959f94a072c931181ac49ca86492f4bc347b4823', 16),
                    gmp_init('0x905ce6d7e0ab37b4309cec8cecf0c99ada948d59e6701d3f1ad8708913b1dd3e7bd5553c017db6e3ecdefeca13239abe2fe6506c2fe9f9751f2fc23dd7b6621', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23fab210e86e9820e1073d49ceacaa33bf80e8a5ee1ebea9b6ef2c5c3d7a5f638071bacc8a5700dc21c43c1c0df9db561d6b38fbad7a76cfd182b3ea3b082bf7', 16),
                    gmp_init('0x83e8d42b646940355184f299248b1df775356a5aef7e341908c08742a385a8edab71c7b0e311bc1179023cca279063381eb9dc7dfd5619ffadd1054ec492cacb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x534d42e72ad3e10c30233593af33c725306a6da2e73a38e5c53773f4b2956f742c753f38a1f2c55aff493b7135497eab725219ba76ff76cdc58f5b1f4f06af14', 16),
                    gmp_init('0x8cdade74338b991f90d4fe76b52f11977ed63dfdfbb69c66be6e335982181bf4db59bc8de7528d01c7cefbdc65218784ef9859c0f2a7fe03e0ad08360d390b3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c222f13b71079b04f1f4e035f0433900c4291a6c2454658d2ee3aa4f6bfe39b7d8a5e2cb20b27a3a6ce4e9ce3c3950a653f5e52df1293c1aafd1f530296cdf3', 16),
                    gmp_init('0x262d388b0ac9f3f19dc3a1a379a19b274a5670b03f38a5bdf0d037a07f209eceeb1df2b9e62ec221986ce3ec79796acfeb71379fae08c1146a05372cfa840c87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x637363836decf7e2e37bba4f8f93274c3742abdd44fdbaf1d0267821417a07813b600c2ec2ead33dcc0606a889d223bf6ea2f9c036b94e058d5b56185af61429', 16),
                    gmp_init('0x5fe8270eba7bc1023a39dd8fb576c4ca343a7585b0e0ae7bbcf49bc8472f3f3f5dfeda355634347e86b842ddfa1bd46e4011dbf6f6cd9f3b6794b1543f6f853e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1e9d0968c2ea8dd48929b1f7ba18d75204c565f21b1527721f3cc37dfdd41b203d60a3bea3f78f5015c8dd47a086cf1e9fed9d9bfd3b76e05f7d6a6aedf83a0a', 16),
                    gmp_init('0x5b31f0660db54c299590242e170e3b41c26fa4d1d1ec4c336b03b0d03ea66f5c6b002b3d733ae51535313346217b37905b298ab2d93681394dea08d017c66097', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2cba46fb09b89065065c046731300a2d6de241971045b7dd10031e56f8521baaf323b6c026193200bd1f7205b8fdb316405d827b1dbfc3ff5110ec729b0f1f4', 16),
                    gmp_init('0x429ab9cec7c0f7964575aafbfb83686a3454d063e7027a324f502bf27c29636ca86eb8d0c6f03b88d0367b0b288d752cb16d36bb003f62b24baf1854aee645fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ddde2bdf774a39c7170dde92a6fc842be5e38310b11ccb6e972231a74877d7383bf7aab248925aa3a5c0d5dc1e9c55f160e3b9edd3f4bd316fe5bf1c8222c80', 16),
                    gmp_init('0x8d3fd7215fad95f605556aebc571fbaf3fef977eb809f91cc553b88c35a7cf84d3f2f68f8d10bb7d3f111c747bb77ed6677cb36420706bb0ecb86c2ba328d7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a525ea0183d862e163802abb9a76a3194e1c53e5731a417f3f64b5a69b6c1b7b8edcd51c693b8c63cd174c4c459d58f42c4a9c02d3fd4a99ce5da12be4ca8b3', 16),
                    gmp_init('0x3be8639522cb8472403b861b9f6505cb8b871f9175e864c7323450ba3254afdc5c9948ba940ac72399f7fd003072709456e431d635809e2eb54aaecc6088f0fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a838028b33da32b66e4c8e141ada66bf34361df9c177e0b252e1e49a32052023cb4b99934c22823255b03c32ee0282579667946d71553b27ad6bf9cd08765ef', 16),
                    gmp_init('0x60bad8493c1864fb43151ff49711243404df251c8fa241b5665fb5369240aa5aac220924e1e4697d6a5df57427a454abf6fdeeeb18897e5343b6aa8addc3a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29775d9f8317e867da884603c31a73fbba8c19334677b40addd02514cff5a87bb5abf328bf0a5d5fd59d1b072fd7545f7c7940742a0f6ab3bd9f56472db31795', 16),
                    gmp_init('0x3c90b1dc9743446bb512b077730c8ada6e96e96c6ca9f6a94be0da401667e0b1ce038b573f2a8aebd3a7db3ac4721e8b084226a754e83e40ffae3dc55b5b581a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86e2331f7a39d921dc8135414b01572ce6537338291b28004fa21585b33fc2f087d11d607fafb2cf369a76b599015c02a9566864b74c0acfe9fbc6a0e9a65d76', 16),
                    gmp_init('0x98f6a8fc4a9016c1a608d914a64f396045ea30890d609b7b9bdce1bdbb0a63a080d7cf35f78289875db2297c6b02300fac2bf7012f48b2a73240e53b1e5086db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ca8d33c134f827cdeb857d3985b340fcd7f14e742b4f5dae0c9833a621059baf1aaebeef3423fdfba0a949ecb7e96a6b91d545fc37e6bcd2ea91a4f4adab36c', 16),
                    gmp_init('0x6921cb54c1e556a4311e487295d470647e884aa21e7daf97ffc8e95df00ce2c36cacd09c60914ea2705213448870901c33257e7ee768ad881b2c95504d3caa07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e186311fb7921c24769b6ad5c3cfb254665c51b62dda43d6e5710c9d6277359db984448178eb8da503dea37cfe30ab2fadfdc28915c467697b702fd258b8803', 16),
                    gmp_init('0x19b978f3a9d0cd8fe7dd3165d1ae88dca75ecd02cf804d736ee1c74cdf38efecd6aa65b0dbc6506eb08f9089144a3c9e2243285044afcf0811460c622634c727', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ef26e5877cec610552f187e6ec1ff51b9386d4f80a1d7e0f04580b3fa6aab6e61085c21affb01dca7b0c38ea3589939eba376c2e6279a6a32349b09e8c2e5d0', 16),
                    gmp_init('0x36cad5d29715f6879ff08b2344285fce6f5103ea9fdbb291d9d0fa10244cbf3c913da72c72cb620ba193b5933241cfc1826969445f0f08822f5c4d992ed66579', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x824f9f4aeab7fa42de9f8f13afb0763e2ee2725330bc5e8a7ef24fc43311adfe861064bbcf8b8915ca58d47bcbcd7458aa8d9227bf92b592558b9e29b482aad', 16),
                    gmp_init('0x90d54ca4a167273d9ba3312deb51d2ce81c08df2eba7b0f8af719f6ec4eb6ffe57508fc7d0ae260d28d3d58c1f17907f4bb17ba6ea9fef80e529d91f4f515790', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98860bf4fe5093c92b1d12bf3c4e6fdc6e153994686c45658c3bf80e6e71beb9aab157f784d332913f16d5615b4aff108bdd396a3754b602fa55a7024d8d0d98', 16),
                    gmp_init('0x7425f397935bda0a997b6bcb97e2d43a2863af39d098b0abd2de7072ee74f59e35871c67712d07fccb61cbe912305be4f1366e2830b8e8828da03792a4ffeed4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b3dca7d5cc679b876877986e4f898802ff5f85972a8e8ae01e0362802466c6aa201bf4e448679c44bb56f3d7f38dd9fd92be782f1649a1bdbb9cf1628ba19d6', 16),
                    gmp_init('0x9edb09d59778f92693a642b9c592aa1e69d4d49d2afaf3744c21f93b70ae7f23e7b64193a13565324b765a74daba92547a7a48c1e671b72380a7782ecd85c7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x537a619da1f042e28a05f55c9f5e3e0adaa0bc550fa48d2854f9bff7a9ce7b36ee6fb71f3e3181abfc6f9cf37edf03ef4a0122924fb8d3479de7bd9c80e765da', 16),
                    gmp_init('0x291ff9158c0e84cebc3b2bb8bfdc54df74fba67348f0abdf49cd2ba0b7375fcbdf743e7cb5d158c67cfcfee8feda41793cd3ccd4d7c746e46de79823cbb8483d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f66b933d70da5470cbf446dc7c9f9179ee9b7edb40b5a4c2b707fb59c2594e96d1d982d268af944c2c09015eea10ee936caf27edbea02b5f9741911dd0c9cc2', 16),
                    gmp_init('0x673d42d058d786b2fd1be994a5ac9745be8875003de99cc9801a8a15a5d7817f9a2ae24fff3456f1c976b7cdc131e3d08a693e68395d7a286945fd88bddb8dd4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7fa4a5e6e80f286f3116b358793b0df8c12cfbee7bc5314021a14ab22798008c2740f3d49c4b7bb132d28761062989d29b37add746bcd353da070256de5dffd0', 16),
                    gmp_init('0xa176f489f892a4da03849b01964829e50b88910d3d095e62130a02a44281a190aa6c4bb263099a304c3b5ef48a40eece4710cd7e6622f53f429bb1c26127c3a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ec5852996d4eac0da3eb117229cf22f515d381e09dd2bab5d1bb35b6da13fbc575b72134088c02c9d6bbf0298cd27b674a158b61d80206a8863b98385f8e82f', 16),
                    gmp_init('0xa5cbd17b98051b3b8bc57e0f8edf3db198c5fbede3bb9d2262a53d2513a095536105c663ec0da6ff4341478ae112e52f712c23b5d8ff1f64b6c5f50cff1d8d2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f65c718511f839b05390e177aa4479701af6fdac3fd7cfcfc65ba5fbcb94d7a197a8d208c58a9d8672256f21eb8c52cea93b5dcf9e5d2ad5a9e4f3645ae7715', 16),
                    gmp_init('0x96a40109712f39e76c5bd39d6b114cae4fc260af4f95b2f9525fc11b9beca75119c06bc17584f6dd15220a6527a409190ff4ebba36d91bbb8685ffa2bd471919', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10f0b0aaf56e88ee6a827cedba4bed1f8d72d421eb299fa3fd4ea90dabaeb5546096b5d7eb1246102d3041e6f65bfe7dc017fae05936fc6e48abdd21599c1e40', 16),
                    gmp_init('0x7db3a04dca241438c5154cb2f2354330d4bdc8ce5a310b2184c11c792ff2cd9b5f95e8b8d39a131851a23e5e3b1a019da0a32f0b530e4743c7f8006d0e56a3e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cdb26bf6a4a3e7dad40234adfb71a2dc12acd594f6be0a7a8609f373788bcffdb815c088a43b4e76710e73c9936d28fd3c4f0bedb124b1bcb05052f5930c89b', 16),
                    gmp_init('0x172f0c1e826d0a327aa369c71cae463b992544e2d6eb412a4d5b1b235a968d07a5f358513901362c4151ee092c619365a21a33cb4451fbff469afd1d0a03119', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ce7a32247da9a2b4d829ed8dbbea8f0527567b1b6d695d41cc5c8de64c1e259d1653517dac153643919910d00b07fcf0a663aa12ef07b98c93d15c270c139d8', 16),
                    gmp_init('0x85e24984097f0a5d7f87bf2155d414cb6b67e50a6772b90731f5ceac6e96b8fc0f0e60310c04f7418234941549f845c9559947d12cc33f71250056b1d45b06e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17b4d5bfa197ea22ee60d74e667619feeb31fe757ec0aaa6dc33cc00bdc4d4e00521f848d95cdbfc740a416e3ea94472feccbaf976076e4966232608549ec9d7', 16),
                    gmp_init('0x37995160cec725c7621c9085e7ea56ba9841a60f3e3d36f5d508838670fd9455024fccd301bc1f53c40e80ddcfc7e8a99f004a50a868c1e096789963ef4e80be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a1ec8bc85b93f96b427a369e67783b259a7799cfc86bc27df67c64bf19b3a2150195316eff48cef5ee6db7d4fb727a3f5044bb11fe9221c9b18c28a08e08199', 16),
                    gmp_init('0x75f57fd1b0cb1d82e1eca130df35d7176faba9a035cbfab0fe3256fa0b483d9cc613382e618bd2ac2b8230c44184059c827d616fa2beb54d19bcd21c89ffc4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6e4c5de1d9d74722d9199ec28c90bb53290175b6930993caf95e859735a703546068a535103dab86c6ec1756c4362323b366ab5cd42a4be6d0cec272d6830a8', 16),
                    gmp_init('0x3f8c666961f7aa78987a9535ffcc22eebf15c1f8bf1cb2aa884a4660c402821f424d84d59ab46749914cb3727618229e1a615c81c6a261a6246e26ef89e3c823', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f279750d8073ac5b9f187336645f5dbb15f12e63aa240dbb44889409e31726355f8e504f8e5301f74585147679d9b03c261a2370f6bebd8c13f9fc42cfa2ff9', 16),
                    gmp_init('0x604d57fe356ba1f2666e6a26670d5601ccf10ca72dd0ded5bf0aeb387bda9411a162deb9f9c9ba9112c068e839ae8d194025732aed2d99030392cdefa9fb1564', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a694d52c527ef0307537b411a78fe60d4d31c6139e8acf9d4cf98f18b1194faa0f3ec8837f7fc827dcdbf80a52d0081776c40a77478d47e8838911fda1d1685', 16),
                    gmp_init('0x33733aaf516532b032deec14e58d91e690c7eac3a5a154ab94f7891c0558947fbfbbf938ca3d7c82230f8a1b27a6d0c4e54f2051ba09cf9ab9d6521cde29cf95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5eb4ee992bc2b19a1e5769dc2ac0d38a6523019f980f45e91801371321e77e02e8dc9d83a530b99245e44de705b841710b1ceb32d00352f081c995c3c52940c', 16),
                    gmp_init('0x3c6d6f60cf2a1900bb948c71cecd111d82acad90a79f3fff28adcf2910e3f12e42bc1e2dd427c3f2bb4b94b54cb46492fa29f9ad07433f6d37e3c04911163186', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2423727634411a45738e68449811a1a51119145f212146f91bb42da8a097f560c0de45d03a84c39a9777851a8518144e6d0b07aa47d95c1847b60369c115fbc0', 16),
                    gmp_init('0x3dda63ff2a36dff08aedf762f28379eb2d1b0d0aefaa485f8a5625467a1a1ff33c34ffc8dad260d6a3e339de12193755a301c98b97dc93fe7b80ddc93f45ca0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e0a21a263c882be26a187a0b9de6db72370296cdd51b9da8334863e02a7464f67e48c8f7efbdfb14f3572a8eb1b6e0550e3ffba8d0c1647934ae7a9e31c5ed4', 16),
                    gmp_init('0x97de0284f9de2fc45f15d9542ace40f0243ee0619b452221ff1a7e75bc6dc0b38cb5d20e608828bd3758be634744f9512adca98d541f6d817f2abda3eeef34ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35d0774a7f2372a8a80be445daa22de0f9efa4bc6ece876b69c7e7f2ba1081db0fe0fd6c0593f9db8331b1babc3339b1a46553a0d8b2dcc14d3671ad89fde72e', 16),
                    gmp_init('0x55d74354ab4557fc06b1742b1ec17b81c4f7f50128c2ff381495011c3f2538b8c71cf9cf06371c98043cf22adf18b4cdb66f5a2230d37eacd0fd94f112a1ac27', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa2923123c0f351e0f0d5a88e083389fa6db393202aa40cb5dbb955794b0d781bbf41f794b98d9a902fb3ea1e600fc50dddcfa3af126c78fba65514fdc3547142', 16),
                    gmp_init('0x7f1e2e209f923cb83693ec6c3c4b6139cc8a196249d9375507050b5602c6a199cb64df70c02d78670f0a4ba0ed07e7deedb679adf47e5d9bdc4f5893f41695fe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x432cf7425aaef823da84f16f391d68cbb1484c985b8b1975a41f42d5796008a488485adb9faa66003ee95c2d44e2c2ad08591e30577a801280d1af0175a4f193', 16),
                    gmp_init('0x51417135a87b1e59dcc6e2e4ea6b7d9c5804723086a6c68315abc158235cc4333aba374842b4e10b20cd4afbe0d0c4e2f94f853b803683f86a6e9c30ee7d6bf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b593884ea9a69b78780e08e29d3e518ebce913287c88b22cf97eac42043b3283d0369eada00ff66baaa97b1bf8c70c482504691daa1e79ca8efa17392f4904e', 16),
                    gmp_init('0x2f0a53563410ef5cb163b36c9c5c164753dcbba2b48bd6bc42d36a35c101083071a2a15e28a105d5bdaf2988608d7ad79fd58c70250819aa61cfc43a79bb7132', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7839f14e925d4c64059f054a438178a83b8abbb6a52a191ff31e81a47c6da6635f8a3fc706e6e19db8ed82f2aa9982cf3cf012345c47a7ca481b08f082a5b9b0', 16),
                    gmp_init('0x61de372b0e39ec7b7e42585e972f3a9f46b61f37631cb91067fa3286a0e8e5b2eba1bd9dd99eecdee9f7d793545622ddbb29e27fdc387259ba0a4d7a19e5a960', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc0626c2eac9acc973c53ae83ddc33f8dcaaa688d50a7dffb5d3d83f36ea7ec1240d98d7922136a75ab2684124a1148cbb6ea059a956f9b565cdf1185206a1a', 16),
                    gmp_init('0x7a92bb61023f8fcce7efec6e63e57c2a8719db153c5a1ded31eadcb6c6f110813462da118f64bf48b73c6fb61d8bea02fd4cdd8dc7740bd15e21302c967db8f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ca829006e6362c2faf0bfae3349fdbb61b206ca6d3ca431a4d10d7ae37a730314964b1701af1607f22396015659c4a45458dac600cdd3ffbefdd9a0f67d615f', 16),
                    gmp_init('0x4bedd1940f1cc385dc1e56125c421845f033cea23e84496238ed225b6884e7c5197cea1f26e88c21383ebffb73cb4b9582c709336204461365ee2c7dcebc47f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2187678c9250df8f431e9e824fbe4db6608cb58cddf3abae412ab09dd71d0a8bd8d79f5573c2374372ea5b4f5e48bf5a8896fc7bb5e6703010c264608d7ae2cf', 16),
                    gmp_init('0x38e32e1664ac3a0f51b30b5cac53defb0a99f955247f9c9de9c3aebf9db3e2814fc852fd3e682ca831c781de0c2579878c8d6ac8c7a96ebfb023d5434d02cd53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e5dcefb83b0212ac42f81d46bc0e249d847cd178307b9243862867882f5e22455fed8f382e116549b7e91ab4c979a9b9197538acb0c169644d77a66cd5134c8', 16),
                    gmp_init('0x5176e576ef7d11d14e57a539c54c50d18db40cfe929c48a18e9a0f380de3e0cbabd56fdbbd7fb556201c3b151872d0a228b76c654508c6187ad91a63d43d1f48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3213f9d0a18bb8cede7692860d8876a81dac1e1e6cd602babea787170ee5a08d2e2d062bb5ee420ba4d5bfbc7709d489fa089063ff24bd43e2d850b6ff3615fc', 16),
                    gmp_init('0x8364d4133003f114d06191bb27c248fab062f157ea0308932d46ac415cdd43c2f47d38688a967b4e8bf16471e492a96206128fc75fdb230e852c2050af7990a1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x613ef91a3d2d840eb36c1a17af87695545a2af41b7ba30ec8daa538c28ea524af07163095abbc7866c343872efd6e32a957ddf50a5757139547dd8f68dceda0e', 16),
                    gmp_init('0x19aee83616023fa5e4158b1b8cb6d9211f16f0ecfc29d5d1625bcddf82543e94cb745d1f3e0852f4baa61b36a401f363491889e9b6725a516ae25c48b056ae90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8423a2f8d40e0f04dd109adceebc1346e4890d40465868f67e060334b2621fd149eb6fe237cb578c299301ffc2966ca9344e1eff3e88bca0aeda1f1ea0077ff0', 16),
                    gmp_init('0x6a49025536f72b064233ff0138a69f61da31af7e2bafba070d1eaf4cb75cfbe6d1472320d419ccb5c2fa9f173673085b081bda2bce7d324991d04db412ae8778', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81e0e6c571e72f8735ccce3a442455df86df8f5353d9eacf1e8628de1efcf81cf03acfc71e5a2696e7359945300f0444a8b618a0158e05145bee7036cb05eda', 16),
                    gmp_init('0x9ada27e0c3ebf9203bb8e816573b27420c9e55bd877ff61ff2fef4e98d777d3c9d94cb7428608f069359215368f7862b91df70b6f730e54ce8c317e0650cb428', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa6fb23bcdc4070ad8f9c640b012dd436ae6553167f354514e7d186d5c67805ff63955ea488ce07b12b3af267b159f3616cc37379d6d2b44d3e2f8dfdb16c781', 16),
                    gmp_init('0x30dc0632519c6fad1c5a6ce16bcc0eb522d8b09623c4d14690d13192aaac7bf4490886f4a049437411a7916f65ddcc017e62e5b64d3d47a969498af5ba4cd217', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cfdbfab3421228a5d572d82fc1ec5476424cefe35a4dead04224230be513fa4ddd1a11742503fd447ab6e8b881149ebd6596fb85617794ea4cfdf7bb3716f56', 16),
                    gmp_init('0x831cc346056e671d98a68d19a4df4c0dd3dde8a3768d80baf14a84f87578ddcff77f2b4191b6b60ba14f637806142cd8e61f520a9ec638343ade8b7e05c2c82f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77cb17f906ec4503feec943bb728990500ad3c22d652e50f1b84fd015b897529fa15a633b8396520dee3df05cabf2f783e487080396bb89dfa472d671e8fecda', 16),
                    gmp_init('0x29134a67882501308a0d3b98771f05038ea5a2a4655471f278487ddc02df49f678bd8167966068fe7a8ab0e5dfc5a88a32e08e61ec8ee15fe51db214ce71097a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x46474c5bacc3c4bf4f6365c700cc2927f5a301e42cd5c204987edd18fe9fb76865eb392c8bcbd971b8a6ee16c0beac086a69f9101d16bd40b6b32367d3ac2e09', 16),
                    gmp_init('0x5da55b03a53409349516d341da45971e648509831ca55b3052e89f08389a1ca5c821c16511db73fcc0c97a40219326efae6ed857614d55a6cf83be96069a7ebd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3535d09ca725365274a9dae323064052c4670451480def0d37ef9584f8721b0d6b73549d1067c0c7c06916d2e59134a362bb759d2c88c905813048f7a4dff90', 16),
                    gmp_init('0xa981d5fb313e1362d4f0fb25ce65f46773ebae1d877c7353c8602960c150dc3ca06d8f963caefba826f8a3211f345e70b5956f30ae69d7f6f422ba0c3dfa219e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9261a31f1924964b4617d1182165d1df8ede0d1c986d9fd77af21def1d73152573a2449623a059464706065f919329bca13c4c44ddade23234de2a4fccccf6d9', 16),
                    gmp_init('0xf7629b5a74dd7877b811daa5a5ca17385e63f89fcede643580435204df8dd7c66af7b4030f794293cd255d1f8ebc80a44117fdcb6200048725776d87bd1a8a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x872f4d0c4ace35431cb1895964939ed8cb970de5ac511c8267863ae0bf9ed03fba09661a3b517c38321d845edcbd6e8601cd1ffaee6190e6dd13c5796be285d4', 16),
                    gmp_init('0x6778a5493d9428a540d02617704d29c4a5f75c40c261ad85671f71a887da2a3a58720ab0a0819e8375270a55f1edd9eeb14d1d7ec495b2d87eebab242a11f42e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7461d498dd02a175d304d1f3d8048682ed15d551fba242600b7cdeea7027cc05bbcafe2ab67d998659caff265203323b5190576a746df291ec0dc92daeda827c', 16),
                    gmp_init('0x9e8fccf1a5fedc50d93217ae60b250a765e3c3cac97754e595034ef6d5423d8e807476448f67a6a129e26ca4117f52ac4961fb25b5612662d9b0abfb57f276ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x479922de7ff9aebb338df78d953a2c14e88afcf50109920f1615ef1bb2731046a529e9752eb35a4718e2c3e083b704e0d60e758b2843565889a83768259f57e8', 16),
                    gmp_init('0x3b15709e6b564da160312f9b82a0db806b0f0e8cf642d62db74666b2837de6c1eeeb0af639e089f14fe5922a67a71a7a07b2a47aee43f538511d891c921c9126', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64a653343c85e95844d13d27f8f5c15aadfce174776552f7f9b93599c8f17bc8f70aa8ca80535e0e21e5ad40b75bce0845198913f1a2fed93b77db2b066eaf6f', 16),
                    gmp_init('0x2172eab61ce91d142e3ab288889e1542d211533b9df6cad62207035cc65cc34bbfdd53e5454e93e4eb703d16d777fd72b03a359a4b9fe456df98c30dc68f6093', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x266222c9c378ef3ab31281c32b6d057d035d708f54955e055e23567e06cfb1b6c042c313c80c4729382691aba2bdae23df41d6ecc44fe40a27c8e788872eb732', 16),
                    gmp_init('0x92c3d3c9945a36ceb111f241b3261768aced14521b06b5450bd9a7143032cc6cbd35e7d2077c50a2d46958019011611e81f9539d509a88493358ff8efe9fef05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a9d4236942993be4e45517043ba129b0b09633db05c45dcd9b0dffd7f0b5325c386020d52a75ea0ddd70ee92d4e237b9e87cdf2afe41038c1b8563adcfad6b8', 16),
                    gmp_init('0x5200ff6b4e5ee3058a90f7cc5b961104937da6f3c9201c54f0935bb0cf87426e2481e4644b0484a146b29f6685d6ed81485b3cc2b09ad0bd5c0f11735e54ac0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f4003f2398ac98bfb60291eddfb40452149b1fceaa8bcce4a86d19e37a405d6423e64d38ec81d3f90d14eef7209315debf52c366723241005d422f006ace23e', 16),
                    gmp_init('0xe3766af4219320061ac01f31c6182cde71d74d7c41a1ddf76e5f9c7c5b294a18d884a941dd16ba9d807eeb2d3ba2c5becb92042231a304e4311982aca750dac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2803ef14306b3a00e0fe86522778fcc86caaad2db4192decc19a6edd748f8260532097c0ec5aaa030bce6732134cd6a7fd3fe82467099930eb57f0cad9f0ac57', 16),
                    gmp_init('0x929667e4634b89219d088f06d01f1298c48c38099c1cd0e63870899ce0bcf88a937e0d426eb35059f40f6a08daeebfa74269bb018a03b00bda668443e47cfc3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76a08d9d1ad7b60f501a532bbdec87c474ce06ab34f9a75ff1e66b04a213fb2e9c8607e1bd3cfa3f03aa4e614e01a648174eee75ddd21faa54884fbfc5a8a4b0', 16),
                    gmp_init('0x60332e1207f12dae081d08d2f4d10c61d898f0dc217386cc8cb375165766f5d59ac9264c3bb900e9daafa797ffe3eb2a9aa73f17125ffab3273969ac8d5b0b06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83e89a15c3e11e1b38f544408f49cf3b03edf18869fc0326632ffbf95e288923d8a82715c462ce2483691fd44433b4567bd7efccb45ec017bacb66eb03cbb02f', 16),
                    gmp_init('0x1755eb31bf48758ec0c7b612349838283b65125060666a4c9deed6ff1d6fcea618438c40884a9f6ec9335fd06ba468e7ee5f6479f42fe9edf59e53d26641a92f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6227f16bdd4ac978ab9655f5ff16c9627474f69fe4bfe7f32b0b374ced604476fa8852bf102f5969706680b6592cf4cb79a04ffeee6d3a437e5d68f33f869a1a', 16),
                    gmp_init('0x7004a90af9caec53f99d5b8314b37f9b9dd776bb6173b0fe8a006d4b06fdb7f0483a6b58026c3df1f7ec689918f76c163f66cf96d2d8c7522138604627ffc2b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8216669f84a805ddbff3985c518520a4a9adc58acd09d2abaccca898db3a50e1643d2235041859b604de2cc2a48e19e3b1f3cbdcdc4cb3d095485c8bc6a8a54b', 16),
                    gmp_init('0x1f13900adcba0969e8fdb9f0ff702fb7fde6714d746dceff9df0bfbc908c30660bfd780585a5318b00f5e208258f70b495ee88d609fdd9ed1c518b2fbb2a43bf', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x89d3d70ade6ce7e95b1125718e169d40b9a56592f579db790f79df5ec853753c04237543864aa8cdbfe6ce7bd91b2261157e7b36dcc25e1530e606e7b8a95f5b', 16),
                    gmp_init('0x4358c3c129c7e84d7ce2b5dfdb12584bd100ede0f4e46cce0460398a4079b3644a03c7b4fa97696078809947fe957f4a233fbead06fb2ee5bc725b6fb3dd1ef9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f57383bd30264b0ec5f9bd186de8a5fcba7b9a3ac8ad6785b19bd77e768afd5a9d7a39f5e9fb239fbee239b6ab9dc862a71ab13bd7131ee6212c9c470268e3', 16),
                    gmp_init('0x17ba12785f90614f7b5c92f14f14d4f7cef0e89f7e9c934d048d7008268661678754a87f5c6457942955dc5770a030571b13272010751fafc166128de735cee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x886c4a428a010b0a12409a707ba60025c953b1fc00ac0ac4299bbe48616ed161f976d126b398591d2f5b07b88724bf7bff53ea38f92d7fa280f47cff77661b15', 16),
                    gmp_init('0x661a56db1c4091a9c272a9028b3f336d3958b02a497af970089eadae9fe0675d434196555af4d2755a68392c33ac957d6e3897b0c07f38855c30b456e4535e2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78a4548ae3c3d14d39a577dc7dc223a273133f85464ce390fd877223778d13f0fe1365440205d043ca37a2ca21357fa3f323dde08d0fb61b2225949947a6ef7f', 16),
                    gmp_init('0x32a6ab485874ff222e1b7d88fa556ccd93c22dace52f014da432d81ac12f5503f97d994a3d0e88ac47dd4f35738a0c75d9f3f2f008226de506a5d0735c5b1fd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51b55ef2f081154285adf16cd21bd76d9638ce389ea92bdd3045da33a8ffae36ff0bae6684b34ef7e299316c978bdec4d8c2660e3bf6244c85e9c6b71cd10c2e', 16),
                    gmp_init('0x17d2fcda2224b0bcdcc339f766c0c18c6f746dd3b51a31e0ac0d6bee2dbe1b016b0448e82f8affaa58007582f096cc6268f255bc2ef4e503332c77a9db84fa8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x151cd1689b71a7c86e9f820d6c277418fdc163557caa58912eaf7406cae1c376bbdd82180cb722ca32c4c2971e7b98d72e5b85c9dc473c1e1f222eed8bee8525', 16),
                    gmp_init('0x3c84015a9f8145fd1243b25d601b10975d11b22fe93fbad5ce04ece8b8cb8af49a8d8e8f8c4cc88c83c5322ce126d8d0f8ab993078aae25317878c19d3853ae5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b2d30851c4a1d410e4f5cdeba1568a811df5983f6de77db76d0bab30012dd1c02b49dfde8707794284d38b6a0a2a6acaf75916b10b1b547cb47a8ed8385cbbf', 16),
                    gmp_init('0xa736b7e16148626a647c09fce2e7825fb0f4a1c1235e35e7e2af41fffbf7c7d9a65bb1d56d0c97fd82237575e13172dd27854d2c84f91d0f1f5499666229b3a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x320b2828713608f51c6e92479d806ae5a62fa2db105e17b32a9bc95f9ab3184cfe4fe0e3b66b8dcfb44d1f4188b570882a2fb150aa2bcfa91b7ea54d042fa208', 16),
                    gmp_init('0x9bc957543ce437613a7013505e9d727855040c73b9fa0d175292a569f72fc887f05e0548ea48ce2b6cd35051d56dae014ae986af18009a668453c10a15f0b298', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39c268443d8eedf007606c88ddfc533584e757b48ed83f5ff83f5750dbb616651454742bbec9ab9836a0560612dc22b243c24a2dc7a8d018a5503c94bcf22ac1', 16),
                    gmp_init('0x88f39404d3e94aa8621ce137ca3ef2ae5f01dcb1918527f1ae5966bac5c0cddec151be6ad8b08a6b641f4e4d8ce5a96572c19a70691f562b49258e3895f73a63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64670fd42f1fbfbe94a5854bdd9eb211600bfcf34b531a835763e4f8fa6416ed8db8762325c9f3bf8a22be9d8c0ae7b9d18926067d2139b72422fc44935cdd0d', 16),
                    gmp_init('0x8f9114a38f73456ec681c93c67a5cc1d466da02142ee7b30cb59fe2d7de9a8aab8b7e3d6d663f29db1b1db857ec6d8554b3337203ae486bf8ea70d4969a1f6a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5da01b50240ca87cac1a81b8da106b00b36d5c5a7e0370dbc62f7dd0e5d9f5369fbf10fa211fdc3c93c8c0ca1ab17b76ca1efc01489648de18c54673b5e87d91', 16),
                    gmp_init('0xa87d3dd13594f0f71360fbbfa53a14d6294e8668e6d527b509dcc02148664d158a66acfad739368ca15d2c4b1b385eca74278b376148784ed60905de2322cdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c9c98327a06a9e53b35aa80a2832082110887a6a851f3a094188514ae47a9de75b416b0a9c3d3beb87f5e9fd033305a58f53bc0a8caf01768dd00c54e43b3e2', 16),
                    gmp_init('0x56e301094ab2255ed14fbd8bb3d1c9bc6302475308603c892894779d8f4d9e3806f4c802fa37c3a3d9dbe0a4175e28d7d50ef4464ac6899b5bad5ddd5f78f345', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x744c7757b7fb3e140a09b5ee3a3c6e00408e300ad4c2e0f7d0a73d201399c9ff2e553457880afb9b3e14fcde477c148417d95ec11d85569b3671bc2dfd5d73a6', 16),
                    gmp_init('0x9db06a322d4a1c54e4b1476bb44e58c72281e39054fac670a9a5da2ea4c4d6f5acc6be662553ac91b2fc6b4b7c2ae8cf5f9710c71f1e4e5780ebae5b36f43c61', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85a04837dab66808383c0d8c282d373f7719c2df7d7fd54c39f41f430a3c55e14bf4c13f795e6d0c31a9bd9451314769e80d6fe641b0dc9e93c44da6fdbe4dc0', 16),
                    gmp_init('0x94a12c6636418bce10057055c93e9ab133a1c6aab2b4a3508e2afadb40c03dee05aab67e65d3281e5b0186b11a6a32f584e114fad57809a55fc969cffdcf2476', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94aa90b66c3745fcf93a98f0bf5145c7cd249fa3e919cb4746b297293d1b126deffaf47f5499a2fb87b453346f7d789e44ac71539345fcaaa3d5079788e949d5', 16),
                    gmp_init('0xb06853a97fcd5039d98e89861ae46aef242bf4ddce14e66727bab61e56000e363b58db7eaeb2c89b31e1e42f6ab33fd441cff175f95c9ecfc248fe559adccfc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b01136135a806b2720d3f4edef9e6ec053c6b9f4724bfbd7bae09e2b52406fef50f04133976cccac8652242c0a0c9d9ce80f3573d9c5af394dac5b69141b25d', 16),
                    gmp_init('0x849d1295c81d59a7a4af375ba72bf9e6e3139c7e5b6aeba037303638559816478448a0f556b53fcc85678cc85731877c6456bc8474dc666e6ac9d49aede3a810', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x106926c771a8ced05939ee0d4aed57f659a8c233fade54b5464dd17affe42a7b1a32ef94b3162aea541b6f90eed567702881289bc2a2e61e75aac8cd9c9bb8d5', 16),
                    gmp_init('0x7a8a0fc38319cf568fdc1ba8bf6d1db645b2de329134bb85de8c8b7e86bda4414ddd547ed60369265ff10056ea2f438c5d4c3812c2d43104fbb3bc0ec6e028ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71475a146ca63613721b8c59a5147e8ff0e5efbaf5c0758f783eb978e02c73672e9946cea3970a0c5ce39ed92b533e32de0a16e0d82e4fd28cb811c92fa49eae', 16),
                    gmp_init('0x7f14c789666bf1e17d77ad5c79856edcb5805689101e05dcdd8381c0d9dcc7e80cf00f4af6dc472abd9ccc2d7e019d23053e4e784e18fb97f9bd8b2d0fdb6055', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c62132dc79e390618f3ddbd5df1b28ed65d762f9d56e6f3b8f0ae3063d82c01cbcb5402c50b5b14d107941226b85956f25b48d3c5c7964f505adc75f57a2b', 16),
                    gmp_init('0x7a043730dab10fe926f618a6edfa4ad624a1e9ae2cf29784c18b04b13e8e83272fce07a50821b3cd13bd2b554ddf799e356f164c912f822a1f6c622b9b81b128', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35a545ff175568a13aa9f3ec74039672da7abfbdf0b1cb8550549cc5bb3abcfa07ed4613496292db26834faa1b707b2f848c2569f061001f369fe873660af0d0', 16),
                    gmp_init('0x546d6d9e9a64a1360e3531a1c586f9652467a02d7bae05267d1dcf56c2560a4383d92710b05f5e314ec10ebaeb9394877c7d13108a27ad17e299e3bbf3b7236e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x340781fca81e72e30217c9dd9612354fa2e41b89aec4cf887ad7d8d5edb021cf29f49eca8eb097ac829a18fc9b68268a617b7752dd17f79d389fb0ba07427888', 16),
                    gmp_init('0x1ae020437a044dd9d7b8a4ad314aefd64c3ae25da63b30cecc0322daec8322e81db58fd16da4a5d46f2a385711693e57dfefc43013c3718f224def39fea94a98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37ca483ae6837ba3b2e47cd657b12369e2cec269a131b7a1e06168668a751d1fbe903bc333af3615d9950ec4e25c4721eec7df843dc1d4c26254a8443c2fde87', 16),
                    gmp_init('0x24c31b401866f9aaa26a8b60e24e4090ab7f07b6fd1b90b0a900930df633fac623b02ce443d6070855403138e91dc60b481596c1a1ab9eddd75689c7395006da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9836d7e64fce2f74d6d3be23705ea8aaa53d76ab6c84a310975eee10c191d34e73f7b72f380f55298907bb7a991433d6608086b3659a658bdef8f48143924934', 16),
                    gmp_init('0x788fb98a57249754c1bd21f95125cd17770d74bad273e727e8cce6a9fb13c42680b222f976b9d23eac468aaedc18861df84f3f64a0c5ba10c5c40e18891618c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264eeaa7907d4f4629ec95f31ae803df6612afca66fdc5aa5a588a733107db86950d39f0dec21c5a44ae76b6329e323a2aabc48713cb5faeba07b167217f3170', 16),
                    gmp_init('0x1e9a360b305ecd6c10a07fa2d88151c58ef0d4b0fb6e86788631bb2adb8dfaacc55f48b6a2084195c90a0b455e1f6312cf0cfccddf870f627b068aab0aac8c9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e582a5a787ceea82aefa3b729ee0f061fef7b0cb4c08b3bae7f07d780b71334d4a88866282a8fdd4b3bea63c4c8fddeb611e41dfb834ec8019a4f56ef003aec', 16),
                    gmp_init('0x2cba0ac5202ae05eef089e595337db1c5d263264e01cc57e327edb6d6b08b5df71498849b91ed12140aeeb488891f2e3173c01ad6d4943f594a26b223d18ccfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x850b5a86023e66d43df47914eda0409636ab28bc916630a1f8194a0eb4b48b989898076828865471cd040864c65048045dab382ea182602a05fc056fcf4cb2da', 16),
                    gmp_init('0x4f3f9406b5ecad31833678c36cd01e238d7910be2254d2d2102491953592cd3f77ffe885b9153fe9f5e18437b551079bd3c37aa83a39fc1fd51fec9b9112d706', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f8f751b88d31c57762277ec48a7241502e160f57c6caae4c338ce9a0e94a514ee0f394a9acaa6cb50f509691bf4e4f8d7c27bf58e9c0bbd490c49b2ab3e18e7', 16),
                    gmp_init('0x3fc99d9873f87333c8fd83cd49599261e14d3ee3caf19ccb27f400455a8eedd5ba7152c434e36a0142a772bcc5b9316684367d250e11f700d506584ba5a21f07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57329b4a3d3728326bf0a793102e620991a497010df87dfa05998d19274f0c238efca617a3638cd752b5db9726f9abfa825c96d15595e6612e9cfc244fbd8527', 16),
                    gmp_init('0x3795e161ddc9f156bcb422d9bee0cbff7a39d7145181596ef2ec408a160bb2bbb55effceedebadfb8ef70ddf6d01435e6d97ba51a6de3c6f86dc8fa57b65df88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64a95eb1b0b52fc66a1dbe6560c713f8e9496bb4e6e8f76be66e8e4a51d984e57156d9c2654058c3ab3f1c741e297adaaf66dded8f80563b3c88354431f43dc1', 16),
                    gmp_init('0x70a08048d7e80be2699fff964292c9b262a05922f613bedbc8b81e542f4698c3c16f8dce21354d5798134e6e38ab4ee539d644575499674ecb57c92c80be65f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c75989dbb195f7591d90e89355be4b723eb2fe03cf84554d07cde0eb29a641f75df1675290ec40b34788425e4095c57109c2598ed36b10f44ab26865c30ae11', 16),
                    gmp_init('0x3da373383d6c461a90a0859826e92aeac9979bb16ec99d2627f0f789cf714db4a9f862d4d41e405ba86eff2b2a12e865814a54d99a5c3037f775206738e6016b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x72a9c818205bd6df085833ae858c379ed2b50a720237e3d17bb0db7d31dd99d364eb948233cba903d4ce62678613de352887bfcef1e71ecf62c66e56bef2efb5', 16),
                    gmp_init('0x9fcc4dadaccb8c92755a0e61a7c9466a310a4ac97a1997377128048b9a220d34b3233d397b8d0c7d8ee83feb479d18207b63afc6d5f1176c9b87d200f0b59832', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61def176c740c33e98f6ebdce69d235012b8d320224ce51cd5367fe80b3fcaa81abf7fc12d08c4d0f616281ef7588316d86975c5eabd6b264bf2d4c2ba05922e', 16),
                    gmp_init('0x43240d917e8452d1757171b0aec7bc82b8be1eaeeff86e3f41259507594744a067ce822fa6f5b2887d3d53cda4c62567c5fc4386b3c60016f0b38151d37ce96c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x400b638ef2f52d3f8d4bd4cd78feb0854d9be0a4a746cea5e9aa4c48d978e5e14ac432b8d3a1cb58779c2c47015ee1a870cd69a0587d730fce49c75ac392a9fb', 16),
                    gmp_init('0x50c94328513cfc1c3eeecc2e2258e3381b062336cfe18457f76e0f3f0cf1defbeecf174203c385a3da321f4b4dc4640f3faab8f976ab2ac64d9ab2b7ba094de9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec073ee2d384e560cfcf2ecdd35ed99bbe31c447459261cc1633a44659d4e2e2a4bba62bab5785cb35e38356a0e363c916e22fd871ab0f97fc02b7c6faf81d8', 16),
                    gmp_init('0x8c111dadda9b5f82b14cacd4a4fd3925b11f2f3e7c4b26cec141f0ab1e65a72da5c42c6ecd8c92f7a784e11034e61611f126b696630d7d0d756e854c68aa6168', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35b43d2527651619eb0feb09b3b9ab717b0a8dbcff07795f2d2d01e704c76f6565c45f04b356fa6496f0617c35571918bac2c879ede782515ae5361af9fb601a', 16),
                    gmp_init('0x64e6993a815cffaeae7f2500d70dfbe66e5d3e4a81540e17e6904d6f1926969e8e11834dbfbc9fa3a0404a7c94eef8f39588e06be258102fa802a905ef8c36e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x305f8d2d7351feca61af4e539eda17adc14db524d4ab347b80068c9cf7abfb779a5b4d8e6e649b7572f841c109062f1cacb25c58818c95acdb6bb50d22aee95e', 16),
                    gmp_init('0x7669841ed8ec2ec538538c99e04cf2512f8e2f8369add30a213df456dd660354ff505c98c8d880eae26b8fbdabfb3eb7b2b2cbc643f8a2781ab71b56d9f2d125', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa67f151a674c4c1326884c647346dcb660e41f9c9f13d30dc41d9ad6d9d19bcff4cd0abcd1c0f2389f8de62d431953d0fbb0ed903d7a8de425f186e1c9310152', 16),
                    gmp_init('0xe77690eac22dd7aeee8ba777368fcecda1b03d576e9d23e0c09f117ffc0c0cbde920952a69ff1f496e9be56b23a297abe00678f62567c78f29bac6b996a6324', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c2299c9f567586c62e60c2febb6c04e216474039b8b53a315448b6a615f8488e9938a121bf29722cc9e1a3ff76d59ce7b56560220fa23c2f44033afb0ae1eac', 16),
                    gmp_init('0x4d67a4a7ac45e232c9a51388821f336a85c75ab1d679c2f804a7b70512af3ff99bd2f16f4436e4caffce240591293b74ee46f4385d190c4c449be5fede0848f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45f0bf34b78e8bfb1b971c9381a27cba3414f6d4ec34d5e0f9474093f89f1d35357f54c96984f3e1833ae34d4baf07368f024b3e871b1ae61e758f130fd35a2c', 16),
                    gmp_init('0x3ab4f6b4977d9b6cdcde0386c1f7d4f78430c893d127e32cf9e65b49938bc3884f51e137084f7bd32243307334705161e024c0e6f6d88f75950a18a012da52f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36b289ada941d26d76ad82da19b7dea20f0e1f08e92be9fbec6eb776230af2fa1ee03b97164844b4db4fe2057408d0d3d27d1986bef341caf5ce67b4968ce0fe', 16),
                    gmp_init('0x72373fd185daab78b3014fb990310866346c36f6737e61b3f8237ad8fcedcefd881c4c3f10b1d5a60f9ac5aebba9ded27030b4bec55e64f098757a9e1064e455', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9772dc211bd75de5a6348ea2fdce93d6ad0a41a78546931cf71e964e406a3ddc2b78329c7f79f856107d6e9926ef1e5134e30395f25cbcfb2bad27c108439a3d', 16),
                    gmp_init('0x9ff2c25eff6d0400702ff3ab2a2433614f9e0d5e57102f48d32e9ed7ff03e441bf2f3c3b703505b441589f958eea43e5529920d7c4fcff4884de31c4bcdab319', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x793120afb05c9f6199b486306f957a52bf175fe85cb52de6f00415d10340aed49e6d3f96266081c54715fe12e5a163d233b169aa0706160fc81a19e6811ba301', 16),
                    gmp_init('0x227301989a23474a56d96fb349b7ab77dd089bf67d131616342abefb40abe488862cdd6569708efc275429a100bfd046585ee3f0caee9677a72b2bce720e2eef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73fc45fc6c3a6ff795b918a2ed4f536f04d4b261e0e086a95f4e79b553e9931fef068fa00bbc9cb42acae1e7fbff9b25255b098f6b1370c6192024ced519695d', 16),
                    gmp_init('0x25c77c039df39bc2f9bddaf4332f57e72f38b5291f3771e4e46cc1a6d58eb5abab7a751b71d63bd9dc52668d8e05ff88fe18276c85988b5ccd3e30578b2417d3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x123246ee7d81e674488fec350a1880108c073b5b06d778ac533fc9b278685ac5ebc5a76ec9a92c588043dad987e2ea945f9b7b1a454eb50b8dda3f3857079fb9', 16),
                    gmp_init('0xcfc1e36f80b625b1167adbad3da971bb93ecc5c968bc338a3083f7e73325ff74ca6ee4b1c7130ec6e3572cc74998b91a4f51659ad9febcad2083cfa6ba769a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ca65cb6d0961c15f1acc0c8687be2d9e042a2966f43afcf834146dd683e37975242652e73f7580612d607e1e5da0773030a3539a132b17e47c206539a7a8222', 16),
                    gmp_init('0x9a4d54f63e4690ab68889170e13cae5c3069862f8c9c5cd76f3a36a88142a41fbcff9e4e49397510bc9f53f3c87d4c6d1190afc99da8919d8589b205d3b1b981', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6154255a49851f52b632f6d77fbe665e21af5f5dd8e22993f34a5d943c75c7d6c02a449e8732726faf78750d8ad7435854853ae604af8e3617a259ae0c97fd32', 16),
                    gmp_init('0x965981c4bbece4ed3c7d866c0dda80eeb3365cd5d53c52417fa49040e2dc5f5de3e8658daf8355729f4991b8c5904ce680b8e910634b20f211b5dde1aed58b21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5feba26e8a1a86c2896296f6fe02519cacc69eea3bd06475430d60ff9cb9c000baa89b54354097266115bdf4cb3934f8beb864f241fd4b6ab00d8072c7047d4b', 16),
                    gmp_init('0x9f4884005a10ef4cd1c88a6af54ce61254cacecb2dbe9b7077a43c9480fce1b2cee8a80bd217407360a66d4acf36c9cd0f132eaa5bcaec5099fa3ba705df9a4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46967b483701d78a5fbcb48584acf2ed2d13e8627559a5274b0ccb80346898b0f7ee809d5a5aeceeb566a2c8796035c02f202a6b69a79b5e2e389fff6ff06396', 16),
                    gmp_init('0x164e2a24a1c17a8cbb5ae1a58c2d966cb85b19327abee12f35afc90c3a8ad2c7c319da1381306784785fe349be44de125fa66ced7364c1ca33544580bbdb1ec3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa3ba0d857ddef788e827b441455b300813e86d63295beb1a6fde27932f8c5b80d88120b7580bd6512e7b4ee3b746f557a241fda4246acf9bbb5e33427e4136b', 16),
                    gmp_init('0x22a1457c7c701a0982486c30cc9caa11c5baf7acd30e998e1d644a9a900eec25f7031ec013b2ac64d0d8f599a1bafa04e113259fc497cd21cc31d6f9edd304cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69127a582fc38adeda447137a6d2e3a151ff1f43036738e555daf2be6cc41407084df9eeb89fb02a5534b52f868b92edd1311cac6861bd5b72855c25da701b29', 16),
                    gmp_init('0x995bbcf66b0b54acf287312480f8e621018df82ec45c850b3b46932b6090ffc6dc0f2c207a8f4a9b97d42d1330a665a337da238d4afe1469c7e767ccb7770f64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b745cd7af5a16cbc1fcb6f3f13d469c84313d3c3330e046ece7735a36871df7ee5d5d625f03e1618199f6505bca0a4de88458bdc048a0ec9e56cb7f9d365694', 16),
                    gmp_init('0x675fcc22eaf365a43d719ee6f0142104717e5e16b7fd8123e9a4042188a398890164d57dfa7a0a035b18575a5785d537bcd0c3bc4a177bfffac4815df760de8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c63f63c3e464f43525a37e8ff7b50d341e6a9afb2a2bdc0ff4fbc1a98150e96688d19345c0653c97e500450c3f37857ad7a880cb9b83fb07be7a36fb92a1db0', 16),
                    gmp_init('0x4bfaea4975c2605937b8bc18e21f8a625dd63b14a21ea54b498daa9ae0676974b47ee677a771bc244d9a441c1fdb7c712b3ab32bfa2cb2bdec51e483acaed3f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bf9e01af7b257b497fa2c48bf9fbb38277f2df6cf8bb39be84e8e11d85a58c0e27b7a5c24ddd001a2ed85fa36cce5a35984e9cc073fb89e6497675cd54ced88', 16),
                    gmp_init('0x7162fcce222818f166558e1138fea26c740246d90846b75320a263b014edc9521b6d6582d8b79fc3d9edb85ff48d5670c818fd1d7611488542bf9c4270d1138f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e65340531dfd7cb6ae3d4734951cdc23c634ed00f49ebb05168f618d57dc32f0b905c5258596b68bd0ffb6bf258c9dd5f05bad72c3ee55d9256813fa6c1a358', 16),
                    gmp_init('0x62fa54ae1a9c6068a5eadee3d11b37f60c45689a4d81ae1c1935b58c2b7705eb7e2ccb0a5589160bf2a5193f52d7f1179f2400ebd6c3e6ece7e5e742592b19a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e373ba9d98938b0cb081a55ddae15b1c1e9192c83bec7aa68389c0b422e55ca3da278f0d4ecf6701680b387557ce46f22deaa3b827493e4eede67d4c0b7ba03', 16),
                    gmp_init('0x6129cf55c3847cf74ab57ee14e6fa6ce289f139910115adeb994804b0fbe0f9e90444a6f6fd6ddbd654b5a1a15f974b3e8319c7184ab28a2a5c8667bcae4d2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa78a2665685d969fdeda67641968663c731160665a8d9046d9e8efb1df33382977892336b51c535449c010f22902cfd62e9d4a60c66299d70fb95d467021899a', 16),
                    gmp_init('0x6b1561009d033ea58d75410234af8a39375c82f1f414e72cdd4cf68050166876307e6b05d3e4942b0efbfabec61a4735ee8dbed55c57617e8f7276da7f5c5dd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c6d11716520ceb81c21e74e31a6577f264af8f5ccdd305ec11e9aacf692d97c94b57f00986b0952f14f547b5c4d5e2ebaf58ce80847e498996e4a7338d87318', 16),
                    gmp_init('0x5a9e262d764b74c8bb406080f5404407a29114396ac3ddb4dd3e25e798ee3394f0c919834d6eff25d4a42106198faa61cecefc47f18af31a85f66e3a0901d22b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10dd03e42925db6e2eca9bc7ee1d79d44bff75abcd500b68d96b6fe45ee8837f7c9a449b5f10705790fe37170dd227b945c21c8cd15da5703f47cb663bab14c9', 16),
                    gmp_init('0x95c12645aa6fb3ecd7e8cb5dcc88a432c6fabcabda5d0152a21e63aea3da2f9a2012660cd6eb273e173b390cf47d2614de559e472553144e1f3c798973589844', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f73f9de7455de993cd3a80b3480c662791167ae35a0d132826d36c4b3c2360321e4be7656533a1c16f4f30c71cc10a5555e5850b6601e785a795c8a9556536d', 16),
                    gmp_init('0x95127caa864bd550ddc446c7b4f5871dfebfb3b34db6dcd65a7b82738cf616f13740fa995a7dffd0155fb885830c7f9d940bcf62280408c704fb109eb301ca19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66f1d1f72b38c9b5e6e58618a6479fa9c598e6d5e2e3e135b8f5602b72f8d3aea745260121f5ada2f23d4ecf2aadc1148a0f11ee07fcacf0b2e36c023929bded', 16),
                    gmp_init('0x5804b6ae09fbfd02d029bfdc5daf9d227565cc124275adeae2c2f5106379e6c4ce3dd0848a4bd39932a552eeca630d2ac147f0b27271045078d06768f3d26c6b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5c0d092546bb737ac120b4e6eff0e39cfbc237be214ac0ac63de15826de0cd6c45ae7cba97bb507c96bdc7545efe3ecda9c9dcafef0f0455dd769edac2b24d60', 16),
                    gmp_init('0x29894c7056c1bc8448a1d24ed82e7a7a09c8bba619169cc56d4af1bfe4d943563379b9e0dd317b0d9f79a1ffb41ce2c46049e3b262d1956dc3d66614d0c7ef7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa044e0a5dccff8b769e05fe71d11211b59869c2d2862ada21852b62135a402f79d4e0979257a6444977d983d69c8b58967dca37c99e703c9c1fc9b5df5df4793', 16),
                    gmp_init('0x78b0570c99394f85ef55610587cd47bd776b171543926a18292e98cd6bec03a48c3f3c1c5150cc6b325ffeb0526aa7a961090543133c3824d55f1d2e9bf3fbd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79fbd6aa5ed59ec49ee97d66afa4be975e51643d4d2df75cd9c3bf1af80dfd9ac13e0ea7166ce1868ff789c95eefa8188ae807963e41661364b1bdaba23c35b2', 16),
                    gmp_init('0xaa2da1587752e7429a1fc26252b8a3700edd050fd47571e9610d4a314dac609a5f94717fbb52a2adaff2d5d119e94745821e1bba9dbdd25c36371bbd86ac8aa7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77d81dc4ef5484d5a35df01f3cbab96f0084e3d3fe95d48c76116c403e0a31afaaa9a7def2d40192c3a82412c5fa75858e8a3e71f6effdf5a08f3aaa1ef9c9cf', 16),
                    gmp_init('0x75c0d9cf0e078a4141f16d74f4e7513227ed5fc30776d1cb643514feffbe705d7951a9cfde95e951609921398ebebca6a2cecde56ac0f826fd35ec3abf6e7ad0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ab1ff392d851461335692e71d480122c11665f1490b68cf177d51f49baf394e4ede817ae1703c8a1f80cdedf765eb166c1732fb3fa1dc76673dfe5bf75f0e18', 16),
                    gmp_init('0x3062d3b47c0191a1aa5c63153ac8f9cbfc242bd5283ff8279bcd87d04687af38fe7872bf2c6b92c333569f22661a3234ef7493bdf1a7754700964e438661cbe7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8386026cfa6fd7b9c379cd18fd82ca9243d192ba2f941201564a7f5459472269ec7648a8c2a8b890a4511f3b1fedf166f40090656e02c90e8f405341c9b3bec6', 16),
                    gmp_init('0x153399f897d9fc66eae0a9564dbbd715356266b98603bad5b3f60398ffd7a4811f0de70898a2c68a66d53fb41d2b068ddc491e890d397758cb2872011dd7d663', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7301756a90d3839045ee507ea2946929af978a951f32f2a3d9e3b9f41d78bd780f816b83e6a1394997f775686ced7364404147ebbf80afee9e51781b6312af19', 16),
                    gmp_init('0x1bb683b87e512aa94510b161a83b483155e73d7eae65c8dc15c350d644b3086cc764844c03fbe4199534710e1dacbd679ffa183a1ec11e5209101eed1a3e577f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d8baaaecd1f6bd78ac2287c539698d8fdf3f7366d0958315ecd2b2bde74ff49b0b5255a354667a66a1c76247382ad48460716238de068e81b3b9a0f820cdd5d', 16),
                    gmp_init('0x32c32772614a516e0f861ff18aca4701f20a7d094bc6fff574e5b219763d31091708264c571cca03dbc1b26811fe28b322239642cfe7714fd44305dae231b402', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x434ce80ef6f1f973c88d1949a1956dbc9a4cd7ee8870a015d77d630b92270953405c4b000b859a6dc99a13caf46c2f39ed7034f7d53338106fd3e08863a7bbee', 16),
                    gmp_init('0x1bc32bfa214782622a16304ac0bcf6d19789a0025f3ba1ef2cd8f3ecb19b4afb7896cc9b189e6eaa7f8b04001a1ce7d200bbcfcc9fc5613b8f704f55144d7f09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe12928a4f70bd84ef969ec31788d655bde97f8890a42a62adf0c0c2e6dbacc65ac8f2566dde4bfc34ae8122f2373dff8955d2c85a3b69b10f9e89307cfa967', 16),
                    gmp_init('0x3f85e3e3ea09937ea15ef2e15f0f8151f766f5b49270295bf091335d492056748e9dd6ca944f59300e0c7f1b84445077d68454cb09491b5e4c955f13d04411f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a65f2032037b7dee287e2c0a223bce8cfdedf470eb8fdc6a979a2c46647a4ffe973b804feb10cb2bfa947e00eb2acf3d652a6243713d89023cb0fb316895a47', 16),
                    gmp_init('0x50a88dff2412fd5b77f7498aa06d532532434ef47e97d409120a622e0de100864ef5e82aa2fed610f6a25ab3c25c3b07fbbad069a8aac278a3cfbd58a5f9ee45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x723de9d12e1b0a55a428b2cdbdc97c25c54106b7e54255c71253ca315e9294c80b767263203f66fea7ff190f50f9c08ce3b74923ddfbf021f72b60c8d330e79f', 16),
                    gmp_init('0xa548a2580becda5c536bc759c67f23c8695d51bfa717a88e977d1d8300c13f46a7f9edead263fd7b693ae997e1f99daa0b9ee05baa04e066ff19f54447741105', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5090c5c4db507330e8963f59585f972553bb4334be9c687af8090af2ac99ad18f1e52f114f4de34a9a5f2fe63d56ab40bf9806b9319117b730c52c4b6a12538f', 16),
                    gmp_init('0x3dd92e22c591e6c0ee24e5664d6fdce47337eedd7fac73dce7119be1bedb995aca28e544331bb3e9e9453738c4d20f09790f3e5fda00a5ea96d3ed52d8b00833', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7d98dd3c34aa253653110221c5c2160069d595835c21536472bb02499762364c5c5b218b19a63d2dc48740ddca75eeec5cad633c5dbe2fa2824a9bdee1e401e', 16),
                    gmp_init('0x320271df2d7a6152dfaebf64ef56fcaebe9425c0704271cbd1a464bf9a1e45e682816ce3d9984a84e4d9e45d378e63860cdee0145c35da3a9832c5b1bf12bd69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ec198c4524662a8db0e5fc4273fc421e34181a0ffe41e66f4b3c9e6ca9c314832b9e7cb4589223929a122866b3310c71a51ecc3d4737c327ed56d5f392102f5', 16),
                    gmp_init('0x7dcf40e56208f59a1710fc015ffeb386c4fe49cbd4cdaab09beece737465c58bae814fb8a12ae9f0467dd002711b5858e1708d439d3306a691dc2fa44d7f4b8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b5913f766c4ed95d5262ce1b8f1b2afc056fd658f28487079a83d9b945e84601bae0f47aca3b94e97502f33730a37219d189c5408ac7da5ca448127ef66efb5', 16),
                    gmp_init('0x3b4d8e454ffc593a3727ea1eea20b708c21fca9161306af0e46656a75fc450a8fb4edb0dbc57887724ec6f844eb496c33e9470f8da0092c9d610453cc2f45872', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x276c8033c06b265bfab4fc96edb31885f81858bac9f945b513288a716c47c11d2e41f71938c50e43dee5e084c6b3dd5065669bcd549d3f0be8993127e6fea5c7', 16),
                    gmp_init('0x7eb2cdbf80aab69f11d939d2af55dcf8dfb20615b845839ade57913c38e1372d4f6e446a09ee16fa3e10084b2481a2da035319c3256f4ad92c18aed3d353049e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x375d2f2d54a9e81cfbdf01c427584990cc32860ab39b0b2890abfcc1889c06aafd1c005c8c44907b0d1aea201aa9a340decd7fda44896edd645cb29f6cdc27ca', 16),
                    gmp_init('0xaac2c4b6922cc8bf436e31d64bca43ec97e870b87507eb6b8cf8a1437a35cbc10b482109f8454a9af6d0538288da8f31264db981b5517b4cc536dc8354e6925a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c91c0e5e291fa52875e9e2f61bf83eeeacf8ff3980407ff290c525e01abd58176f5953ca0bd6986aa2f9c9efcced921bea2d0e92e6aef482e87e27be62c9807', 16),
                    gmp_init('0x1e387c4ea5a2709ec39a8d773a4feb52032c337096b6ff90cd29328e4bb532430f3ab1d7e83767a978453e4a0fe0ea27d23cb4f32a6952909629051d87f42d2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35bbe2fc7204674bc345c963ad034c7f5a4ed673102734b31b7860283421592825d2ddcc4d80ee20e22cd3d97f9db1fbb7cd60d74aea54c81f3480abfe07c602', 16),
                    gmp_init('0x3ccfada630efa7b61bfe59b5032e995f3806eccd8cfb01c1fe179242a0cfdd3d584aff832fe93e10aaf323cc028dfa0b831f7969e7037f0dce3b89a7a799acc0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a3b15564a25c2f8d4a58b81f6cb0cf43c59fade51cb36663bdb80e13b75c42ff1fe14bcac8f78c0dded3efba8139a7e825ccb413106017f5d2ba0251d4077b6', 16),
                    gmp_init('0x2045c55a7540952a1f29029c14789fbba28174dc26b9c1463b72786af99d4a34d62d9649f088e925554546b4f5bef2c45db69ed85841ba644f874c117df961f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70dbddc3e6c71faccf0a4b400370e089d12e8b02231454ff9dc0c457d6308bfeed880aa5c76802e55c6c35cac6bc2cb3ca1fd23b1933333253c654f98660c180', 16),
                    gmp_init('0x4e37d02b2ddf371935f102c69131020be3656b5347b15dce2cde39c0cd05474a7042d346b99c5c83553c4f383e883985f5a7c409f7060d0978eeacbeaa57830d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c9b4aeca7b15820dd67fbf501fa74c1b0e07ee8df4750d5267c0d596effa72fa2b0bf33395377cf20a285e7310b25d70c168a12ad723a3436068a0112c0debf', 16),
                    gmp_init('0x2b750857c104fb265b3e35c91feb5bf8067ca533cf27064278d625eda19d3970a9f85d8bea194b96365200b72600e0f91444f4f3062a09b4052158e5d2969886', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d358db44d4d3f64856fb8b2484cbedc1405d6dd0af086ccbf4c590199d2cc38f43f65d179a617eca7b1d4a4c018341b3fa403284c817fa81f6f5ee48e56b45c', 16),
                    gmp_init('0xcafc355b6d31db3aab29c64899a531aa2238442246b4fdd0a90806889ecc5e06fef20deef5ddc75780406352b538d1cc0084b8cbcd8bb1f7e432b24456e296e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c7d067381e90f32de4ac53a60856aa09b5271a869238c3a718406bb79afe8e796befe0451f10f3377fb17452e039806837a4834557bf53025948f9be849fbde', 16),
                    gmp_init('0x6a7408a3581ef9ed52f6a417ec6327b9a04429ab0f316a809ffbb643ac37e363ccc81bd5a968f506da46061f4a7f28b8cd7717f16ec5605e3e3ee4a870c9d24c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ac0a089496a1d9b691f459992dab3576864d5af9038f318b84c392261fa90dee4df2db142580d3944559e8793533f2980ec51296254eb42f536f9b205cc47e4', 16),
                    gmp_init('0x83be23fc5df8423aadd1e966158fa5db5203c373e3751ece054c0a405330622a50f27e557480463054788668aea9d8a6aeead0c52935b7c0692ee17ba72b0a16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2600873a2c300eb09c70ccf152ff10a2dfd040801f1cb4b42ab0d0f6ea9d095caad387029400da18772146229ea7f8ccca1a833f8aba35be3c72ac76b4fc5994', 16),
                    gmp_init('0xac99c811f82be39c67fc942814862f0de2ea4066b6c86faa8b31c0c362c9e098addfbe5660f28cdb36a682060aa722585fe669486776ef5cd1218d6f75255a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b5c60e9f2f3c4ce7926e101166b1fb324bda27655b6b97d410c1427993d26a8103b09af4428e8fa3e17a9d2fe9c16029b2f160ba0c7b33ef92445c431576444', 16),
                    gmp_init('0x9b317425b7f390605bdaa2549610f3362fa822ef812c537197b5c4aeb3ea52e44330927bf13a9e76ac9d35769905850bab1fe7df381eab9902d5932adbd883a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61889fae9934c96ce24e80880784d418966ca5c9f5cdba38adb00bf7056e9fb5d01f6324332b0e91bc5c4e24ed43004eebe6df419a27931d8b6735fdf61a4be2', 16),
                    gmp_init('0xa53d3f83dd2f1e7ac3e9ec21a64120c0dcd45cc45eac8e52f21ca5636d7dff664ae2deb97b65b9b625468755cb076a16b552b7d21b43d62866b94c6ea34f959f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x904cfcf025caf4adf659dc338ae3ac15c2023ca10485968c3532d7eda5c2de896ebf16fa80892f4c7e52e5dd7df07448a0c4ee4d439e09083c91036c39d7e0c0', 16),
                    gmp_init('0x38a7ce3b6a35cc3921c532e787c37fd757e479445e995486dea5de9ff851d5f6c1682b510a6538ab12bc71ecad872f5716d530684c35a90bfacd8eeccb6b61f1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x62c48397217529b4ec171cc0112b5ebabb9ab74c1cbc84b15728ec9935891a32025c842c0d4d083922cd879d57c13d72b108d1bbcdb4b130b6e5caf1d8bed2e7', 16),
                    gmp_init('0x793230715d171c5f1fef285bb13b996b3d2729170e7518e9be6228aceccb489d911aea040dd0d2b969c2b31712b85e9087fb782516c3894ce1b06dfbb5228657', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91e4aa690e62f71c74d21d765c831b406fe21a42f5377a11acdbbc3409b2d4a3324d7e1fe5a484c349c83c6a9d6436c45265f1b82862e3fd5db401af3cf7edf0', 16),
                    gmp_init('0x4d713995495a82931372e36d57bbe5fcc4a2ead0311c226d03a0eb6d39fcf1ff9f6f6dec3cef242299ce8824498291d79671332c96f95ff2339c4b56b316e629', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35c9902a554f33771a258aa5fb5469fd6c91bde5d9efc687db2e55373e9394edc41e02aa10c83a945d51b9f09778bd113486fccf6e8f0a10e2bdf39455923b7b', 16),
                    gmp_init('0x2629516437ffd0c283bdfbef61fd6055aa40d7b337278bb5003f299c2a581e16b221ec3bf04c7cea14d73fd6e14625f3d71877721791ac1933a8625f5d775dfe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x502263f3633baca05e8c7812417aeb19a950f59e3d8e90a9d459369083ef8ea9ad3e13e44cd426ed5273b63db3295e447f6b2d5c0e2235d43ba1f8820421ff41', 16),
                    gmp_init('0x9008797c15e4b59ef713d847cc6e05fc05edfcf841bc2ba19bf8e3223b81ca5643aa60698a980ac7290373650ee56a5e61e891b97927dc599dbffd9daad3989d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x130ab32b4276aaf1d294f1acd2e7436ca92256c2d41fa2a12cafeffb20ea56ceca3dbf921f672e782c483ce2b5b2a5a6d25c6791d68ae4085ed793843907cd69', 16),
                    gmp_init('0x418db8474279531475b5c36a7b6fdeaaee8a74ceacaab86ecf59cda6835ad90f5872ed2f1f2da9d2a8ed448b95058746dd8f9ee1a32ba2c4b42ee669f9ed1a84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x721b9ca2889a2f9770753296645807ff2ac467bb9e06ddc565d11ef84b2e4c5953bd68aea4ec9d29841c71b2e47ab3a0f0bbb882398d2d95ba20dff8e4df0d12', 16),
                    gmp_init('0x18b19d1b006a464a564d45ebdbcfd1d41e1951a5ac193f2fcabd90240eb566a0d2be4ce27a406339c8d900a529a219520cec145434121a0366e8fc35313959e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x511e59bfc8039a2b31bee4d6485c410e1070ba0a1df63f392f3decbfd4a95af512ca1ce4a40511d2a5ee7dc788e19f1f09322ce6d752fee62cbc39e103e7188b', 16),
                    gmp_init('0x3f09a0004963b4a83b58a7252097ce8920b378087a3151cdb011e717524067bafa9c46c71c70755c4f82f843b879f31a51ff09613cf33f47cc53fa910947e0a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x875b062dbc54f0c445886c732ab761f5f6b4608eb1ae7678aa24cda4242e206e961482964ae7a8f15ee92e95d27c748efa1a8c8dcbdf8b014a17cb727c3cb280', 16),
                    gmp_init('0x310a90b10a9e7dd8e485f4b75cf64dfd45dd8c72d88c8e6589faed0d148ab15c53b3be7b72d973b82d68fb3cb7cc19f44dc0741bc800136e42565e6737fc0bfa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5903c65a84438d3f9d33f17d1e2cc57d2cd239232df8d126ef1c576b3cc1cde15a5567af059ba4e18cb41e52e5f757bbb852c325de28845af973be1c515287f0', 16),
                    gmp_init('0x7038623b8dab9b45b0b43107bf823dae738cdf33b4d6790a4536d1268fa50b41eb895db40bd85489f6282fc0258f8f48552385edd8f9280c5342421644fc414e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x818b07cf57480500ce0585429cd6b46574079c0ba5d449a84f749d3feae6974e25fb36919fe4c37cc34d0649ef67888d679763a6ac36e60bd415639824901e1d', 16),
                    gmp_init('0xa2da4f4c9ebdb9c42735b6f76a1739f9a3a119da719d4386020bcb644bf6fe75c432b94d8c8fa9aa27800c6cc6f93a1a88bbefbe88f5aaed3ba9d18371e33b25', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa53a1d5a09d39882757af8741ff71347d71efcab9f15c9542dd772025ab96ce29cec35e9761e7803cb58f188af5a8e3e8459be6572928f0adb82728348548b98', 16),
                    gmp_init('0x7387875fcbb03c8c91fb156c51475dc0c6800d6feb6057485b85ae4e06dafbc662dc5b0cbde18bd6950f9a990e76975c36639acae1083a8ff4825d2199e4a091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19b50edf87dbbf35aae1488e4aef5f284a6ac106cd7e3029a7927d0d875152d66db2e9893c4e25873dcf6b07e81bcb640dcaea1834d4aeefb16712f2fdf2f398', 16),
                    gmp_init('0x9f2b76f8a055685f0df109a594705a31b67268bf5ec8a02faeba3160089cb7b1f6174f5bdc0beafe50a7c24e47a54c4b396cd7625941ab5344c3542cf2553276', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61a536be74771431e27ffa111e76614dac8d87843574eed405a06f33cfb9c70bbb306f318cc782bf29a3a9cdbe6cb3b33d8fecee40789377141ef423f851d37e', 16),
                    gmp_init('0x7bc257668f6ef0c5656e9baa977afa9f3dea8d312de468987e17bb3b5e4f170a3dc58665d781e5bc9d53eb30f71f1126fab044fa9447a66691f7f6bece9f81ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81d840fafeb6db8818244e435006c23539c6dda61d896860cccf2db63bfa09a4e32158e12c108c47412ec92d9aa81b7ed6a4f066f277d0b95240e19516170a7c', 16),
                    gmp_init('0x4a8cfa02411f283c182929b2947415ff371c4a1c61beb97fb9eb31fe4795062d1ae369ef999c2f5f037c229599da2df9f9fa5185a5d72dcfaeb11e66934a69a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4db77c36beca3d7bf5eb5a65c7aecba9b5c71292968ce82b97917eddbad76dcabe3fe6d3ed34743632be0c7518b433d7c8541307421a70c11af4c5e377826665', 16),
                    gmp_init('0x841c1b9449320349d280c4676c49379732813ca7cea5b9df70a2ae73d5cd1e68a5636a1d8f79a2cc08adbe40fee20e7c0e13372f5b95c47060d75eed94e5a667', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa690a6aa4cf057c859894d6873eb63f224affb53db4cc57724799d05b6880e609ecaf451ab4b9e39df73049d9d2c0e718a8b8b7cf94566d6ebd903916fcb8bd4', 16),
                    gmp_init('0xac8a9a1274ced99cc36deffab53f8769eb80cb4b42303f929637b79c52b1ae05304ea5565235f51441b8ada6d9fc9768bb1859d96b89d186f333da99725744c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1661b7d9718156c49d2eb323e006ba1b61561b69d684bf3b17591de2ae41184d86773952bdd8bf51d1fe0c2454e988fced37a427dde432e4c8f0bd4549ad93f8', 16),
                    gmp_init('0x3f610b9ac4d81b469f2c80319aeb19bbcece036da9f1bb2de39187102c52427420910e5d24756de79353d03beb93b1a5567512dd757d56aa75cdbac86d912495', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46654e0bd4ada2944f496f1f3e8805a3e7df120c98807a2505d3f56fb35c91020a31e87f06bc308a734047e5126e6d75bbb1e3693f74d7c1b613595bfa4b1e3e', 16),
                    gmp_init('0x8b122ef60345749fe8d77e6753ca02ae1408252e3a370de2feddcf8add3ccc90f8fac117370ced11e264a7fc440dc688a7154b54cca6fca55b3e2114e247ef42', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2be2a7d1c4419fe2f1543b20abf1929af3f1b099ab3ab534f7149720003e2de2713e39457ecda1fbd6776be51eb07cbd032d186d74a617e7f996501389dea4e9', 16),
                    gmp_init('0x69ad323dfa81aa8178db6d12ff2a75dc3848e9da2fc9d9b4e77d4f05dff89986c1175112e3796fb344104490351906f05e480f342626c920fe548480ef3f2642', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2180101e3ea1e5181b3e1ea512566602ca5dabf59b2ceb7e2171a9dc105bba8c1506dbba3383103e6df7b6e1cb443cbdfd78494b7c28969f516d657e32045049', 16),
                    gmp_init('0x25ed6737ea566a96d22257f83495109d1f061eda5fd8536fa15dafd6e1e24e19a78a45d1650a360ead12474a825dfc1b2674f69090b06ad5dd323daf3c4f0317', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5eb3f1eff566b8e0e18de17ec588f4c08b6cc2e419a7d475d82a9e7801be5b3f49f6e2c725185a69eb866a21eeab6357db90d68ddb400e2d9d5fd17df26cd994', 16),
                    gmp_init('0x8f74f8e4920a8489dd0c726a9d5d063f483540b84c49348f68a0c62b33bf5107ebccaa31256c3180d3c01de50dc4f45f425b0605b4a98444c2751b1b2d801eff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a3e4a29fa44ff69ccaaaa9e7c1853cfc00a5cdafeab617c6eca724181b9972c07d1b4ffa59289430551fe1174aee4b22906764e24ac1a0f02f8e04eaaff3a38', 16),
                    gmp_init('0x24404379072ca59121696efeaa5a6f104f4b85355c2949b8d0b7d7c5989a057ae6334575cf0161a427d29e732ae210bcab768d28990270638caf84ed79175002', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa28738c46285c8d440fde9599f8b39eb21c7343539cf10127ad7c8e6ce0621ad5c4381c0ec3d4f9e040bcaad0baa1916a4dcfb14159303afa58ad6f2eea1ff92', 16),
                    gmp_init('0x8f63179e5510bb1088558b561058a3c055335263985bb3a4782ef3f3b321f66d852c1d8cbc12a507c39d66e25ec2983100280125f88ee2260ff5d8551ee2934a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ab7577beeafb6276e29cfc2aaeb48e6960343fdad3d6c8450e1fd2b032831db4a9ae261f455688e7b74f8ed05965712995c5644441f7a748a75ac601fc246f7', 16),
                    gmp_init('0x52090f604a33d0c283160cde0c20fbdd0546a64df51ccc1a0c25564e035a145fbace7fabf56dd9e0bee974badca00f17b6e972d24a3bc05182aba9c12ec04d0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65a4a6ca7cec8730c3e477253be6dc2a3a356a883fa3296508b8c5f85a83b6ac35147bf6ab6945bdb3ed307598fdaf8b87864a24c9d791c7a39566b2ba2117aa', 16),
                    gmp_init('0x1195aaedff982fe09142663f913b8d0a5ecabfb8a52c52227c2d2e2f189ecf62ade579eecaac08aba615a419cc7f8fab846f2b3f8475c0369fcfd52d6844739d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa51a9bd9b53ee05f6cc94fb19ba7faf1700699837d152628515d061aceb5362f5351eec15a8562b8f6d37be47dc246ad4380333763f6f62ad5aefc50ac03cc66', 16),
                    gmp_init('0x2f140a51961b2fe037836aeca76d915197d070f658a3209caa4c7d1a0fcee50cbe42f471e1265c4708b7206d7f075ef137fb47cd91e450b2a6f45a4b33d11404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10d0eea022be0bfeddcfa1baa4de7eba84f2e9b3533f194f263465e38b0b93c937e37f2b28c4786f7e2a19943c0bf72e3903b651147a11ba55cefcf1683d7cca', 16),
                    gmp_init('0x59e52d0714d53e9d1be778fc40c5b837af3424b34287c5ee0178514212c5efe64bc521ad46703835a219d9316d451d4763347188e5141b072d40b56f9956ceb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x397d637636522f774ec3127ae69f449a2d16eb2d6aab64112b9cd66805180e9961279adb25e027478e76d638e4e67234d925c4df9bfadca74ff4aa1aeda2a9d7', 16),
                    gmp_init('0x393ad17f984b9910563f12ea3d6824ab781b329a9e7d8a7b8f20d1d519d631f27cd6f30fb1b787f549078d1918fbc72f5b34dd6cf7a568494aef8e728cb07a70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa229c79ad9b215471f2dd4a550e4a390719700dffdf644addfb9db78171066f94c833c29119c9a121152174d1b93b16dd269cdaf7748fb90e266dcc741cb953c', 16),
                    gmp_init('0x9b795304839a1d4a4e0f9ee04faaef61d41481864b2bb3b38572a4df32c520410a6574ed356ec008e5795fb751329bfb5bf652f5a0d199adc3c62978ca0fb369', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d153a5245d57f0e10436a685411217b78fac04d407148a14887bdf5c34758df0ca7e7fae994a9114f5dbcde43927ea417d87dc8d2fa3534a161fa06d08c23e9', 16),
                    gmp_init('0x521a7bf95a91a698b520c89517bb553d8780488fe63fc81f286307d021ee369c8c800cd02719cf70b2a6d2b71e87c7d081881a448a1efa0c04076226aa5b8598', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6f99a9d3e78cec11bacebccd279a979c83f8f0b8610b1c0f498b9715e3bcaa843ed20b81b864c0e8c825fd0eca9991899f7e8215384d1c640c47f99bac0b71a5', 16),
                    gmp_init('0x7b96ffb8beab7cd7336df9bb776f18a8c5ce2e081eabfc2a37cfb5efb6d9f53d99d773c220ee1769d9d69955a8576f844179acc9a561e04744feaffa009ff6c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77a215161ca4516b68980b249e372a673d9d5ff1061f52626c6ffdb93e88dae51deb8caa29c0cd6fd1d9788d6faf4c9881c5c9c9335e53eb22c6c4e87bf3ce5c', 16),
                    gmp_init('0x3462ed5a11052d5817d75c35c3b6939e2c1d586860885e3978142c434b8295a4f50098571ee3ba4b0271a7e2ee85031b99862c20bf68289fc0c1a88c66bcf68b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x128137b85db364b9dfc9d5364b47577000d029f2a7ead1b072a4112f05acbd15f33540bc44078967f933b43a804846c3e5bdd61571e0e8846a64cbbaf0a1ceb7', 16),
                    gmp_init('0x88ddc6b5b5418ac8f5bd82335630233a71c2eab1449b15f4c25ba2830143dd888a67555e20ac6e2574291131cd92657509414b9e80e5a259e41654e6d22a4768', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x796fa67fcdb8b2f06a1dcffa1863aa017d51f21ef304942b1d1a7a0307dbeffa506667515e824c61827638c9db6fda2d389c176ced2c17dddb67468c24af5bd5', 16),
                    gmp_init('0x5981b52e454aa1dda10d52ef04eff6eac733571d12a3a86132125845dccb74ba892961cf9fee8b863eb311635b74a314bd7caf3faaa3642f84c27f738a7bd2d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ec678a3466f525695204274011e41685f3da1909160e75e9eb910d710b2e6868b6af02f406a958823947a32d7a58eb8ba9949c8a08626c1266530bddd38a1d', 16),
                    gmp_init('0x8d07322253cecfaf416020ebe4c0087ce42312aa96523c8386982fad37da718dbc2a4c83118b910e90c632805face3c305d6d6ed6f4ac89380b319375c0db599', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1908c5d41b6ca3c1c5da93e461fde29bcc930cbf10d70e5099ec96eeb0643a76983356a982e5d94e66754c085bc9dc89f6be3376190bd7124ffde67c7194a129', 16),
                    gmp_init('0x9bdbd6cca356396861de7f6d3e201a084b4dde091259ef66ac62ac6d0170273c97af6140cd09544cbf59c823f9419a7f1a53650d7dd32674eb40915cd5dcfd13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3a4e309a08dbd1ceaf149e284ce6c4e5184022110a68c5596d18a834f533b361732242a26d38f7367126856806f9bb91e3aea32c184f89b6785f882f7bed4f5', 16),
                    gmp_init('0xe61be4eb058d19ee98438b2fe04deaeb4084efcf77628d951aa899e17c8c859ec2d49cff11f36572d4de6a1b26c0be9bb97e7b449328d6096540f1d7bf3d15b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fa0d19b9704c8201d07427d098c32b5eeb10336cc5bc8b25c0c9d8d6d5a46610c96f09a2c2a6e1c4819f5d4d6b80f48c5689e3b035783f20f8dd88b23b9eb08', 16),
                    gmp_init('0x5ae48b5aa015ccd701a612a8d959a6b429afcf580657f2f3f7cf8c5bc6a3c9c849df2279c844b63d32850398a75ee07eff2a42c9de72d8affea6d1081546361a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87fbfe2189838246ca68b454a7347464fa8c9398f8729304dfd02613640bbe584a1aadbcdd531301d0bf1f982a31feb72ad95cdb96a5d0b0bff202b69f5cacdf', 16),
                    gmp_init('0x6f395c0c47b97e4bd794dd4b24a2c3b36c2c72e6f0f1f0656b19c42869771212f7bd5bf54f6e2523ad0784e1779cb42e7c2d9197f9eaf3d9b1e286c5d3d6610f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9221a21024e7b6000f604180a72184a376e495a6f08286d8715aace2c68d66eb9ebc0005ba2478cb754a9959d84803a958bc4199cf3c327f3fe4b8e7128db6b5', 16),
                    gmp_init('0x70a04682f851d28f288d1cd8abd8bb43cfe30eaa0dcfaa128a46816142507ea03c5dc990d45a41bf933cae88c33163809f1b4e871f0beded2552095a4f39ed34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13f1db354af8ec0e5073bed2012c3db02e0a10e5d6b5da5cd38b7cbde2ec35f502342d1e969a97687212553672a9206ddacbaaf9c6c4957913ba8e3b86d356a2', 16),
                    gmp_init('0x1e58aaaaf8d18b0ded22394388a475475de333edae3db647bd6c4c0bd7e4f09e6a20a4315adf199b1b9e9a94a433c50d9085f4fcce947821c286921b55fc3b76', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9abbbda2c7e754e983f6b9c2aacbd55747af3e8a6f7f8de1416b0497fbf052076305dde80c529a03c61a7602e3b5d6d51d6abb2e50fd5a334a5e82ab060f149e', 16),
                    gmp_init('0x3f42e07741db307998ff322c4879ef293779a2a6e0cc953945fb6b533fcf8a1d44b3badbab76d5f4d1a30089516c9ad39d394becbca7ce21d46309294a3e2a6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d6ccf584b82f024fcc933ff437866682ec382cda41c74a0ea803c0b484f16850a43a82863d342cd9782ee967a5c628a017bda63cf9bc4b7fee45251a5bbc2a7', 16),
                    gmp_init('0xc777f2a44fec50e981ff288462cab4f855b867b13f95b949336b1e52f81693e1b0b746556ad621820171e0cdca75abba35265679287caa20256fef3825415f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x885763f009e3900af2af753cf9c6b4101e96ad086c76b9916e6dd5807f96ac5bdd8b561c6a5f359e73ea01eb5f1283c0039bacbe0a923e0998bc5258800ffd8e', 16),
                    gmp_init('0x4fb017f215410c46274d2254d13d3a5780fa181cb61d3c94c21446e9a26a37b3395bb10a7e78cefd8b23c13b9707972ca439148ac5bab4afcee499d255fccc1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69625b45a3c1bb8a29eb037ad053a9f84d8acace71c017dae53c1bc5e0b00033c1bc6e668c30f4b81773dded89d7affaca5a54222301d6816264d9455fc7422c', 16),
                    gmp_init('0x1611b84a5bd3e4a9498b0e6d04caec22e4a5fda6f76017019fdf3ade5f301add0380f891839d5c123715f03dc1ffcf75ceca09c9304753681f14b2daf0cbb63b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x47727c103ebf993f34c846b5b7a38c45f0a91317b1eda78281a198df91a23f95fb48be46c57631438e4ea9ae4fd57f7352a0f714fc4f6c9ae7fb0e82264bb373', 16),
                    gmp_init('0x75652baa8690e6d2d229f8a8d81ce438d3dafda520098b488bd85ae1a8656fec9c3dd6be3c2a8e81a5690a70ceb8740802a7ad12097fe0f667400eff3755465d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73d2b40999000d38699b81f81dabcf46e97a916ddf484430389e6a2ddcd6ed0f7e20b87a0ddd66fee93a9c6084bfd60f55241e26972c1eb1ce6b02f2de1ce005', 16),
                    gmp_init('0xa67d7e8e2ebd79306faadd60df0e59b443784dfa67cc549733f2dd7e7e84b4f42850b056917c81a4000f95b04518ceb8287c1899cd9222322e377d1727e7774', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fe600a55e75664c23b91ff8892feefdd00bbb17ed8cd7269e4d4f776cb23e6b61184a0d6b024420bc730d35d1429258fcf7d9d64b84adddca3bd8177bd5da7d', 16),
                    gmp_init('0x224506bf81d5846a4c27abb40cd2eb932b7eacc43257e9a654c5e7bddf456d00d49954e3a6cc753419ef1c99ff1b0566bbc9f72e13ddfed977814e56d47467cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43ec6c48b84f5d9798f610608741367d41accb659b4f0f7eda5e036f6975be437c765ef374adc6ab373466c5326b9ca32f1ed80ca3d3a15982d433db02a6a7c5', 16),
                    gmp_init('0x349d5a6b04275ae64dfbfb66b57573424b79def6118f644c8137c7bafb43288f3868d19a6bd8a45e135e34f5198082175a7257030603abb6087481183043037f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e0dab7d90aeeb0d44708d6d5129519133966b8d570f5a1df301f28037f58f20f1878ae5cfeaa9d951ae0a6543f90a3a324e213e59e14168832cc763fcf7c93c', 16),
                    gmp_init('0x6851c2c16374a28ca05e0d77d9966819512fb85cdbbe75812013576560075bba7ae393cbead8cc9054ec6021e0d5cd94cd59ad95492df5f92b755b4cd9f7ffe2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43ec9a27a83f235515bb0042de4d9a6ed7508ca5b453a1956778d69e39d2f048b7b64e99479cdfd44d16ea645e48e944e90d1a37c5048184ab3484aa8f4a5caf', 16),
                    gmp_init('0x8dc9597827a9dcb2cbf45d1b34c8083b5f8b3ff092d46bd2266dbf3a668ea048341ba5e360415ee2ca791ee75ae3869e8423945f409f64367360baaa6e2c5a6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1e0475c85d66ccf4382c9887795849492cc9d37d70411aa7025df2b95d49d870e13df7ef3bd2bf5bfa4f231d135fbfe609a4e594ff9b4c2442d8e3b3fcafb67', 16),
                    gmp_init('0xa7adcdcb0ee7a1bc941354e69838a96fa00d867775f8596862de8e04bfab957da5997b866d5b271c7d78f1bda76ccea43a0d6779a8970d2bb261c1581f9be5cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e25eea2f485cad9e1adc3743dfa54ceb47804767139091955fca90868fd95f7fc0c437a48d6e219cd2839508caed86c89a7883abb863fca5c584c166f0bc6e', 16),
                    gmp_init('0x2b33a5b3f774bead8cd4abac4be531fea31e616bb1a6d1b8762de87f7817424772591e6063bacf5ec86fcf8b1ed2f6a567e67ebdd3a291a71ff18a442a4df0db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bb834b4d9a4781019a249439b4ec54e042245922d78a2bd5b580063f21166840d05e420ef78e5d90ad1fafb2a5ab65344682c5c9b18b033094b495b48071755', 16),
                    gmp_init('0x7ab8cd443d5a0c7dd87a4e862c37ae85d154fecde441ea4edd46609d9bfcb81f9904d1c36638f80409c1a4d4b065246d39e10aa5f4e880785bc7601363c390d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58ed8504d8eb10d1c9e431c5980aaf1b0774f5b48eb209bf91568fd74340060b5d1f7fc902b6f9c7fae2167cf61250a67f0567761ee9769c8ba51cb435f5271d', 16),
                    gmp_init('0x8f2a1e3b36b8fc1eec173b79d46420cd4e1a8815ab0a05eed1f3d4ef14107fbe0fdc4c275ca96e55f35775d014f6cd48f7c0d65dd9a86eb32d989b9390ea35be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eaed0408381045cda24dc2665d214a7ada300dc550846a40a1ecd9453ec726b8f43536b81cff9c47138d56ba8168dd3aa4845a34b9a79e851ca3d481a25a090', 16),
                    gmp_init('0x7d510f58b2274d9e3f0e64baec0bfd90d6d8376b76848567be287a2a3515b548a44e3c2d80b7bd9609d57bdca6e3229bc53945c774dbd21b243bf0e7380cb592', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x220f2b04f3243f8720e5eb1e0cf3f835e2ac9bf388d00aa2f0da285ab9fca9dfa33529706d21af41ccfdeb2c2c2f765f5a7ef1b2076bb8152aa97f364c36b8db', 16),
                    gmp_init('0x67697fdb3542ed2af1402cb4b3bfe6cf975bd960219c25a44711205e26bd7b54c994fe760df7c60b6fc1df05daa50ceb2b16f9d762e77911b28566a2ab79f810', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16998e63db2e4518e3b406e0aa5858be4447c11caa211c9e3f76a951bd04283337a10dfa4b4c95cf3e7859b7c18ab2299da025e7ff58bd34573ad2d7897a2731', 16),
                    gmp_init('0x9e9bafdaefc0ca5554639b2894baee2621fc77e6c7f9d7e9f9b78dd8d26f90919d82b9e5146f12d48fd9a11cd8ff30abe2997611fc896d9ae0254c9abd0105b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34035e16a65c24d9f36338978c4b2b3fc7e81dba1baf7b10e87b946abadbc961b29e3b5abf4fc07873751ac83f3baedfd3ad696322f5fe7ae46ca88ea70bc038', 16),
                    gmp_init('0x6f11c2179f16f8df9ad7e3b9c3ed7ad97e9dde9e89aed0faabaf14535cac47ca25665457e6777a0205415ed79804f022ac58070603d4fc2a36c6e267b4bc6e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39c7b98fbac5cd3825925fd2797d89a06f6184929126a66e7f59e9a05b4c66e7ea73d58293998fae7924569cbbc2497cc23bde52537a19479c08e194b41f16b6', 16),
                    gmp_init('0xa8c551b68a35ea648653c8e2e1e80f27a3c4cc1f5d19f19adf436067dce71429d377b0ef4ca56b8723ea8d20540d0e08b8a5c1751c04c55be310c6d1d24112fa', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7299c9f917d29ea8a3b384940062d20e0a168f01f784576e523a438357381cea06529b93a14d91f9d702fa83cf6fc79b2eb64056c397853be4e988de52c28035', 16),
                    gmp_init('0x6f77e4d20a6a5b19ed12efdffd6290308af826c6a16c3b044fc3e80569377c2f73c4ab3df4a5c679d387088bfe0d6633a0a188880601e9d1d9c97ab60ec5439f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b6448a6cd429fb9c7ad3ce5a39c2127fd5ee7a934bae581dfd48f167e9b961c44d2fbb30852d91893b69bc43571798a843dfba0d8a910f7608b99ff04b4589f', 16),
                    gmp_init('0x1a12cf8b951cf24bd8faf2b7640218617acafcc8ceeb68a92eb616c02ee0d6fed9b8de0931461d702f3bf219205f225bd23efe47973ddb674789a8de8c6da2dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17f76941bf2f16fff663e4a159e7ce75a97dc71bdd63c5c73300226dbcdf349439eec8fb0b1192aed216f27c8b9eef95dcb5dc6382f26362f7c39cb4e4d7f256', 16),
                    gmp_init('0x15cc77d328aebad252cb0915b1b94880e7c27996ff05677784aa433b8d53151ba3e3161432d788c42e185b3a2fc0e182fc32b09c8ad6b22592473eb8112b9d33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23a417335e980901677c78c0bc24426fd503c32615fc3983d4096bce4afbdfc93927d355b86c6a6c2d29e8a301347aa4a599e34dd15ca93808cda1e6b60cba84', 16),
                    gmp_init('0x6521f4173802475ceaa20620816356bd7946e604c7be5e08a74b15d6b4d4be270f5070bad0bd50db726a7d74ee083d55aa462ece39610cc9f90515f021b51f18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85d947b063387ba9949d4f803eb2aef8e09d5780b40dd9b33c86496a18ce9fc004e9758b7fab8f3663eb822de47cb25d940b58baeb1e8e1d0a5d71a30cceb55b', 16),
                    gmp_init('0x2984c981ef162599dbc64e68e3fe414042ae6e604df8fb6aa3c1e9effa67d299b3fb68167682042b8e9719a9737f402b953f645666a27cb8ea432774a7be6d71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e1f313c411d52be2d9544f63a8922867938b4371362060b224c6cbae58011d8f9dfa4c1cdb2e387d5279f8d8828fc03c60af4896d475ef6601dfaf7d2ad6c65', 16),
                    gmp_init('0x21f6ab6dc0b1f664f2372e803e2a847301211dbfaf76f1019fa3b27e4f40c4fe810fcac6356e1d356f04e26223829773b00fad10f1ee8eaa432170bba946c258', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55756571d1a3f1ff3538915b9a56b2d8a0cb044c8fb453deb5e81f830722761229c2e9542bd99cc8d484746c1972c7d814df55a4ae75f2acd0e7759eb8ae17fa', 16),
                    gmp_init('0x5f1468506507f35081ccd2148c080c70ff2963a909ad1ddbacac27aa67707b8fef37d60f94189f974f8fe284fd9c72b7a03e005fb98514f95a2fa901543c818d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf2e961f85b62a6a85fa59065959021a4cf31946f021a401f845b6ac8c7b4e27e7b8e52d5b520e5eb8ffb971a75a9da8e81a88b7c83d1116fc29665a1873ec64', 16),
                    gmp_init('0x14c9c6e9f4cbba2132eab543c9f39df845dcd4d356edd550f9fcbca334b4543b51f895acf42ededc19437114a2a71d85c75c9579580130d7540437684d822d9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7296ae99244171c2c783bab86d6bc0e1bf7298e7fdfe40b9bba4f9f87d7ccfb81a297b5fa4776a3cc219c7b2315bc27a8e6a72c2535e4e10f6baa7fd21e45df4', 16),
                    gmp_init('0x90581417f0793afa4d50a1a10e2f4bd90df050a97c334245523890f429071e0e0804f3ec7aa804538cb4d785f69193823edf0192f1c380785adc627b4daba935', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2347780bdcb88ae7a25978927cbe69ce2b63c3ac7b0b365608585da9c276f40d4b23bc548a7a5508795ffb72a2dc7e27e983d9587caa6295597ff0b3c65d4429', 16),
                    gmp_init('0x4592401c8c96a713a29efc76fcf0e49e37d233417ddc07beac0bed32411a5400ffd5a3790f6147c2cee8b8fce97e7072ce2cd1d1d0da99600b941f2abaf63e70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaad7a1125fbbd32aa37895eabcb3892ff81f5ab7e86718c1375f730c483ed7f7cc2b709126710f01b5b54acf962763e8880f1fc019269330166ade59b2dfae7d', 16),
                    gmp_init('0x4475e46e920f33173ef84541e70345638e357c1ba012f55639a2817d77de8b7ad30712268acc60e7d35870c5d150dc94f617fa6687ce9946df93ad051ed9e7e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8130bb25b0be613d7be1d5a0553d661e5dd862954ec386a5fe0faa4d8e7bb1a6422ceca65c538a32153f0c55075bab7011731b92a12c69a3c83588c7b7c7c315', 16),
                    gmp_init('0x48f0c2f06106bdb0bcd2061ac85b82e9d36e787836269be8c8b9ca6e1d21531fe27b2579b67c2d7a19e8e18d585fab19bb367fcae1aa3c1ea559da6c3d8f89d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93dc012a1611c4dae3fd6cb59222ebb578baad4859dd7a7fc3c662bf38cc60ab94a590d1c891749b5701f65c45edf504e6119ce657355f2ef837976cb2af783b', 16),
                    gmp_init('0x68cc44ee45c7c58431dde0dfad2c85318c55c22e7f26174804f3a2065b42a6027cf9ff6d77c629ee7dd63a47d96572c39bbe574751f0c61c6b278fd8f0ea79c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b68cef0c7ff919793fc34fcf37de6f22640159d19969411e7065441c291a6d27e484211c57b228e92dda22fc55df8a00af63945253a420e1588babe9bfd0c72', 16),
                    gmp_init('0xf0175d33c96e901edc33ee8227cfc8a27c9c7f665faaf61d0b45b84bb16f4241866c231d5c60f3d02f57ef768934e77a0c0eb7adabcf759810549879e50ee6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9b23f4fb18f0c610405d503585246bea0fadac9d08d703c44ef73b59d3d3f2d1472f5e2d954f571867dabf8b956944dfdbf4348b776cd4acd616d66eed5077c', 16),
                    gmp_init('0x5d66dc956e7ac3ff4db71f06b4e62bf4555f18353163a9c2b1565cd38fd526ade5d24dad3250e62fe968db0863411fd124a38eebec2064b3b728f100f8f0b182', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x72b296674532878051404baa8f18ac1908cc128c4051831e9e70079e1837ed7e49e5d6353160a4b47e538f390f5c046c283cb35a6da98a58accb6d17f9f1357b', 16),
                    gmp_init('0x4add0e4db79f8e6ea3a467bcd9739cf3bfa92df891736a6f69a4279364dab9b9ea77eb4153ada279e2eafdaa55af34531745a040d683ad1e0560c9033871c8df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83c6776cb9db02240d31cfc77509a40051a695b2d1e99419b45eb3aeb89264a3291e779229a6b6bce106efe7d3221fab2dbba39cbb1a015b1b96e7811729df39', 16),
                    gmp_init('0x953407d84e7eb19c1128e4f39eed17ca486e1eadc28e9c876d5ed2a33ba81b88bcfce6ed6a166ef0c99294807a3a8a18af7a807f8656013766b04f6ded8a9cce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x878094a9e4cdef870b7ccb6a06a9f5522a73d9444631abc4a436aefe9dbc611aa7bdc17e0f84faa1b4930aa81ddb16cee4cfd85e0ee85bd3271fdc7a50f9f411', 16),
                    gmp_init('0x5ae70a0b5eb95926b2610cda80d7415e5b74fd1b40c21eba3aa788522ae0d1d880c050d9dd79b13d6a0e8c7e0ddf3282f987d4b65b1421e1816157d4fcf6c69b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x880b3cf0d6fbcd788854929f6788b4ea76413cdc22977db8f6ab80a75adfaefd794ec725f7e6f8d19354ef05659d1a9f862918d80305b1e33cce5a81002faae5', 16),
                    gmp_init('0x5ab8ae07aa1e18120ea88699ab4f5e508c919e6664ff0df03c72644d1ac8812fa0ab4f1551132ebebc199f12a9b83cc1cb293f36658954bcf6ce268b7b871a13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bc321c70a298a67d19eeca1a800214af6ab05b339c8204e002a37d1da8a999b620a0c6874c2fe62b4b0fd95acff1f2ef7f3bbdc91990418139a3a4cdf14317', 16),
                    gmp_init('0x571402fea93e71f4f7f41c2d2a6b8a539b234ab953d87d6eb75fbd2b0282cd91b7097f8de1e1ef5c3d67f1c885f5c1e3571eab80cd0e38abb96500498087c581', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8922e76a7c868cfc6b35a2321f8c0397666ad508d2f9a3f1330569b7938ed99a483a2b5f256979a27d74c9cc3e10b8dbad4284f0149c9afcd208e5cc397c5fd', 16),
                    gmp_init('0x4e390a96b52fc6e4eacf478bd08a9cda0dc522e51fe1ff976562a6c4acef9d7dffed1d0ab30f35f7c51f382b9544b95b0fcda50eef70661cbf69a503dcce18a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3fae6b607da87d731b654f358256902601fb14ebe56fbabe96528e6f9030c32b03ecec7f9cfc4e5e138209e458aebe629e99e3364c4cc65e3c2a8653eeaad7c', 16),
                    gmp_init('0x43785a47f38538e334815dd049fd8972929a9d66486377320bf04ea834280bc9fc0477a806e95ed1c4d785c36bb2608e6a86da6296e455c0b97768fe25f7058d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ec5e4656f66a523f723d87ec5e64251b6674590c2e61d39e6a7300e9001bfe1d668ca6cd37067bd3f2d7ba6271edc01bdb8dc0bf73b488efb09ca50c2241606', 16),
                    gmp_init('0x3cf10c64444b458f968cbe04e7e4ec6a7895c8f5a4ecb5390c3d936fb64f04bfc966a8b659a50b69c52fbb76c069f5c6927c678ea67ef573223a66a1fd1d510b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53295bc4be6d2e8068c7540a99c418d1345b72487eba42a9030299a36859f1e209ddcded0ecb6ddac635433ed6cddc37461fa92f805b6df40cb35ff484f9664a', 16),
                    gmp_init('0x38478cee3b1040987c2d0e13033ac4c5c3dc7e43d5fedf6f1e8e6983fb589e1a597b60e6fe45cc1a65e65867288d125af942e805703b61154d078d3189d66b5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2156e84f43b4b426b1d04e632c42b0fb887fbcb7106933829b70946df86c6d34c39a7fa0aaad0558f68a6b427d74ca41bc941f6a9a7fd49f2d4205cf8c8f1939', 16),
                    gmp_init('0x42fe731e2e8b8257eff04a588001cd6ba695fa319d043e02f6ba1cdbd555916b9a2867873e302282f0e2042ff75f3067827ef5fe70d62dc3bd14d6aa6226aba0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88a679d63992d54e4d7ce0485099fac9b40d07102271fd591d180fc8f27498a579c3c269dac610e76b2b1639bd26948b9c19723981a37b6d480523679f442be5', 16),
                    gmp_init('0x2fe0158099d07b040be86c93f9eb8a0af3c5582a97753f1c198cb13eb5784ff6f23553609cd83ad0b5c6c62e86f90f9c9293410409a970b92480d03b275796c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65af5da77be17d19ddef18919b737faecee626d7942f68f000d02ec966e45c01abac50cb175f5fe3f0e219e721bf99d5fb5417248e68a9c8025038f8bb7c7676', 16),
                    gmp_init('0x82637c949dcc7b3ba89b315e6e8bc119ae59872a0aa06565381ccd656842d747bb228c9f1990928fc6f1887696c77c914966cfee002a7801bd865b3c307cf08f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58426e8b82bbd14c8f997e34e4e158622f27c6c315369f9a60e5873874be1544dcb3b3e20faacc20081068f28c32d36236197bd356447c23b1ba0fec78171d58', 16),
                    gmp_init('0x9d0f94af45f8d0a33070768ae84b7e0c3942fded2500ad2f4a2f39a45998e42d16011de58c26147f68dc433caa39497ddfdd0aff9b697bde788f6c85c41225c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4df4ec0404b5cf3447898a154e30785ef77d6717b3c8305653529fc0c6a94e0cc22acf9432cdf9b63dd66fe43b20c59ab24df345eedaa50b5c4921998b89b941', 16),
                    gmp_init('0x7204477a79b1ffdd2d8e869a6a69100af0747d81aef27336a29762d6713f8783ac28fd98ac41f09f4bc7a8369544aca9d43723118786664968591ab5c9c5b922', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x848b2e7f74e44eba1e3a2283deb6e5d3e09d9e7047739d192566cb4fe6b9f2502c56f8a11ed3429f32fb88f82e8a7a7fc514447da246c77cc8bdf282a9dbd68', 16),
                    gmp_init('0x9c920921a15ae08b3a728120d7882979c0319a2c79221d383b52836a137fe5f57dcd9ed575d13967b58b8e3a855cffe726bb8bda4ffb294aaba2331694d0a467', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7d684f3d2f051c6249229d89b9faa48e77241ae26dfaa42616f1d3ac2d5fda73a51509982a7d03f18761c81719dc019899d579d8d2e72afa109487eef47420d1', 16),
                    gmp_init('0x6fbcd300e1f8c6fede770464171dbb9c17f5cce71a56336476c47bfb6e322038831989fa08a3dc46500442483a72dda18e8416c01521fc9bddc09f10104d171', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c072fe8ecd88093fedf6adc18853804424c4722c843aad2a12386823a8ebb52613365cc689c9d097d9141815758db358a0ba79c37beab9996934d420e957492', 16),
                    gmp_init('0x7c84a106853cd9f25bca202a4b75a36b5397ced0f96c10ca24859e3166c9fcf2dbad90f9035699a9ccae088bdb7ba080ee5858ca93a9c024c017fce7b9e6867', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aaf64a328f7faff036aa0768f6e99459ddd242e9c187f83acf0e7cfe9a19ffe62f67e94ead1fc5778a9235ff1165cd442d0be3cd1c46840241cc026b41c45cf', 16),
                    gmp_init('0x23be83718212225b25e5becf3b9396960ee0d1f125de5ac9624c33f973226a367bf8393dc178d361938ce39b3226566621b41dc7823dc8d22babffb1c906f8ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f4d6f0c04e0e3d991e2223f076536ffce1929cdd3fa5f8be36ba2234695143638eca3ab55c2feb56849bd8cd3e68fbbe1234a120a4eee99589cec271d19a257', 16),
                    gmp_init('0x1527bf4b487da55074d9c6d871bc777c2740d963b04416cb1862fe1e87696de36b782e5cb441cfc7d49e104262b8c8ab0e2eeac96755d21289e834dd2a3da434', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34b4d07bc9e08bfa0ab4126fe5ebc539f93a3a32a11317bbe3d743e060866c770d6a7d75776a6b9692eefbeeae49ddf43b38379f90431131f612e17381fb3e15', 16),
                    gmp_init('0x181b95d452e8758136587f57197f15a305632e8bc28856cc33fea78b7fb95fe16d0bfec2fdb2e92594a903c88245ff06165aed7494fbad13aa14a8c67c8c8144', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d95f8150f2e8cd686b58a25e1df30cc9e3f20886f52a69f9bb216ca266322b0383862416ccf3f2e5a77fbc0b5c360e6d14b0fe97cc3c746cf2956e398dde639', 16),
                    gmp_init('0x74d2cfbc984349f6625018d4290af50862e83bdcf75cddabe1acd230e273334bb141228b3613f420bd42f20881aa57be6fadf779e2f866e42b56be93a066f122', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x621a69af8a2532d00b68a23cea5a4ed93a36532fae5d88a3fda5e07643d8c6c15a98c92d8c88f1837eb105e5c885044ef5b9f512293b1faeb9059d8a339cf0fe', 16),
                    gmp_init('0x41f2fad885ad9999995348a884f324d50eea52289268816ace78367e40e9f02cd530ed1c7d77e45e4903dc1f0271ea27aca5220d6883feb3061d6bb9f8094335', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8adf846af876d7e61c1b7160290a53b2851dfdcb94ce29220d322dfa723ba5a8363792095e946562aae29cec63295a0d7f0ff7331b37909eda1c2daa75c75c53', 16),
                    gmp_init('0x24850124c0d4e0519cc1b2265765374264a7abf91b9518bc6df6ab3fe7c74bdd4f9c9455e410e2b0618e43c63db3a9223141703eac1670d100cef2e5ed1e95f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13da37c65c768f882d829ed108b4c40fda57eddf2fb1c79c9e60405da85fbf80a34340511b44610c098b42e2fd8d5e48d4b1c4ca76cca2e7af38d2ec2d5026ae', 16),
                    gmp_init('0x80a621e66d63693fb1385f9cb58688f50cc2b77e6ea88e817966a58b18d4a72324a1caa6665495853385023b4528617cd136b5facc65a6b9517ee287b83d545e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a0869bf9cebd4276478e46b0eba9c6ce2659db5c7dab253b55683b888e89c2778730b183b134d64f3ae1abb884e6d64457b41f191af4065fd8ce6d639135a54', 16),
                    gmp_init('0x377394f9b5a5ead1f1b628f6d069ad16b5e6757bcd87d13a4f2d8a1062366a04abf3fdc833734452d43f0979ae43e6a8fa8f1ba4702cc6d6c3f35e5689d37272', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f5e854761562db2311c2f444eaa503d9b00d0f748a1fa70470ed9343dd67d3c82616c167f5d5c994ddeecbaedb31a201ca954eb0e317327f42d7ce3ed0a260b', 16),
                    gmp_init('0x571b373b5fb89b76568d1eb6b3d3bc0a2ebcbda95a4888938e709013a41ac5bc86a424f8a70b76caf805c9e9f524b7d8264c8a2f1440c4d63b3b008a161a0b07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e3dac3ad1eabb933fa911d0828a8bf2efcddc7a73a1c9ce9570a52ffeaec06aa8ae47e3200b4a10efedf97d6c20c2371f2bada71a3b57feb37bde266af9ed1', 16),
                    gmp_init('0x9fd4d73bd6f33cda4d507d2df178439d3de31cdd96b84efb1ef925b50fe8e3689340b40195197dcbdead9f7f0e0f0ab7fbb493d7647839cb3572e0f47888545e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd1f62653e90af62b6d8eb8f241ffacefa0b44908e1867a4d05d159aa6419ea351c2f3c5f32db35db11f61209bd6afea28e95b84a4a7586522b3e4393c14e994', 16),
                    gmp_init('0x1ddc7c736508e909d6ec9d2c7e64caa1d79b876714ca1b1f14831ffce9241a1adb17ef97af3ddf3fee63aebe0cb2070af8965a5acb91f2f082229a662a64a1a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b656b7c9f940be4e0a14804db8eb8e204a5c3dc3301e3824a346a3f88d245af097f46c1451f913f2518efaaadc3dab556d65601b43d22d1aab3c7e63f30088f', 16),
                    gmp_init('0x51a39b9d5524926ea6ac86f659bcd8e246cac0d7b9b1348b3951644cbf6ab917e8fee3c0bfe7b7d99a2a02c61a4ea504f02360b5a5287ee024f9369e2c100e32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9647eb98cc966a334429040396e567d7867e8ea72356df5c0f2c6a5b19370bcfcbc044643f0a3604852f15cc77063251cbbf15eaf1e3f6c587fae8540ec1433c', 16),
                    gmp_init('0x31ee7b3a1ae943bf0c823c3809cb2499b6dc72bfb1420718545744f3847e44a9116efc12fab8bed0768bc7ab3d30b8221fe574efb54652c4b2ef3b18cf94f093', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1b66cf65134a724ac5da321a7f31e9df9b2f80932b157fa26c6ff44715407317c13345196c4b5cf2b11856d10c5bd2c55095e8772a692dc786fe6de7b209f82f', 16),
                    gmp_init('0x1e504e06f23956cb12d0531b86b2a71dcc275b05e0b1b9f7e3f47d89ce11c6bf543eb386813e774480f47389a8dfee0683c0eacf36d2c357b0b5304b72cfb80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a03b3a2be37658998a4439e264095bdc71e6a7b5506006b73121d14795830f47393ebdf723bb6f877802831b549589532e4a4e6037cef320e418cb9b122a652', 16),
                    gmp_init('0x417395d252ca50cebdce63640c5ebb819c405bd760c66d8b694375982114ebd3f9ccdfdb9bcef3835d76fe23ccf4079ea4391c17efa8d3ab46a2de9abe73da8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x590ace510d0013eb5ef9e7ba115d95dc251e534d3a15751f5495929936082609b88ef2213e66c10325d293e7e800d14d8549b4a66c5e483a710e655a625e296c', 16),
                    gmp_init('0xa0b61e82c08c822b33f4c57acb25e1a5998c7af8acdc9e74843acf36d82416747cf31fac9e5920dbcd08c3ad8c33befeb08a27bfca05e2c30bb359af6c1545e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51f38e66c2e26e2cb6bd9fc328f295caacb7702b30e4cddc52816b185deefea2b8d5149943d77ed1e4831dafae06782229fea01c9af3dfe4f12d59de571d36df', 16),
                    gmp_init('0x1770d92e39d91f096d3df5a91197a9d2d4dd629de6b31ef4009117860ee41163d3214a2344afe5607c503a2af2ab8427ef063c7a4b3039fbc385835d79c3e78d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59db4c65ac688dee2a2f100bec38bb78eff6cb44895a9adc1fe5d807a92c879e7ff0ca49aade424c5815559a0264dbfe4d0d58d1fba41a75bf27e9f7e0c90997', 16),
                    gmp_init('0x569deda4baa0b6d917a3ffc670c293e9628fdcc001e3c72fbd28b794699af5390353b9277ab9a5725fb5eaceb480fa5d4cadf27dfe81ae7450e00182afe9dcbc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e75cc722de40715cc55d0d48f6ece4576916629d9c167a095f47e419ade627d0ebfbef5a6ee198079473f57ed37389a166967d998a90aac8acdeccd4394466', 16),
                    gmp_init('0x92d94d0564d5998feaf9783260e4b5fb2ae0ce5c3d7d64bff2b8902eaa2eb9d78d8043a9cd73d60966399cf0b85b91baae3473799175cdf10ccaf360fa2bf8c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f89e79f4573ca0a33e3ffa63141c433913b3bbf350592daf27cffd4aa7375d2e54576656d67f5cf13f78589ed71e891a494788e0795422f948b197bc3e01397', 16),
                    gmp_init('0x16f0a3a0498d1781ba3561cd5e15ad9eb88e9f962602c9e5035e8b3e7560be5b99d3bfc4bf322f2b9eba340ce9011353a31d1e05ead8666ae9bd3e3c59a2c8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d53dc8079bab004bb5fb8e904f23a3e095c09dd2fce66068e3d1d5607edb6fc0d19f1f349f1a1b26488753abb67d533b825281ec338d2d8371aefc663d08076', 16),
                    gmp_init('0x3e93ecf2bc22bc1c364b8bff2051d2043c7d7e6a8bac8ca503fd2835aa027a3d1e927ec8266e1837d7ed2a4721ca61fddaabb1a391a5ea791d78ece7257a6504', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfb11c130b408774634cf0ac86477969d13483cf9ab0ff73e91efceab9506226e9542e14ffc9dc3a16e653071c5ecc8b31482f949a5795a4b96302f61e24f8ea', 16),
                    gmp_init('0xa50bf9886e8265a4968653217c6fbf5a87edbca1cb96800456d2411cbafc2ae64db405afc0e1531e3ae4170cb7ccdd98b82b2fb87b564631e85e941770d8b32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5b60624847ef74cff2d9fdc1f0e6c11a2eff8b8aa657d962bc9121724e4a068bb42c589fdb8199ca1f06e44965a4d57cbbc3e40e5a55bdace94b743bc22c646', 16),
                    gmp_init('0x23b046413c7858c97a0585e2b6db3f94fa264ae00058cc3c81675869faf0026c2fca4fa2833e58fa8099db122592bf0b642b1ddca3bfdedad8165016a84072d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x371de38b6c3e863e1a159b5c19bcc8068cccfce92338baf94f3c890a1ca8b3b198bb050ee96d16388e74d4ab78ca8a9a837a619983edafe77a367ead9f96644c', 16),
                    gmp_init('0x27b056a55c763d7f48827599db51f4795e2a4bb57c568b0d2eacea3c28f04cdeb4ec25d4b42bdc270acaac9c07ebccf056552d7a23be2b186d97c1cdc851b5b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30be33cbd139eedc89e0c9b077807407b54c613f9beb64f77fe5c00ddbcf756490cc725ea758273267729a0560d3d964e65a2e1edd22b6f12bae7b370ed99384', 16),
                    gmp_init('0x639ff73f8483eb3486639a2e507bee82c79f127cabbec2cfa233ec6eab340216ecb95e201538518e5591849684a1eb2cc626002900cbad4ee68e326728e47133', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8126f15c8936e062ce7a67759672ddaf7b4c0bbe6b8329fbbaa45348048612b6b43ac74d46b237c8ccca8639cc37e2946cf262b839c37b1f9df2041b07367fa5', 16),
                    gmp_init('0x1ae2d4ddead033517e7eb0fa35bcddcdf28695c5dc9a2df98ef457e3fcec625e5b6133f88e8c7b5534c3842dc3f08eb289dc76c37a64a82080eea2ef9a1c9d5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95d987453e3fd98baede68cc18b4bab709fdfc26e5a6ae25347df7e93e558208ff0bae1a772bea7db22c4defdb9eb56b288a6ba2bd8def43c0552f40c4153c2d', 16),
                    gmp_init('0x29b880dfe3ac99f45182e8c7e32a832053fdc8dcccc4ec637e973f10e38420816c98adc04d8222a2a5766cd3e2fadf2e7524e9a9f315830aa3e2a8bb927100f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c988ec369b2830378dd851919962bd41d0d53d51dba8e8e3f88b70778820d2bcca05367ae32c2210e03acda2705bf9dde6e6782f69d49932f89c5e2b82c62d7', 16),
                    gmp_init('0xcfc4804e5154d4a1bf58a1274614ac463f695e2df03e75b3997bc1e7685d32e75c29c6bac3c4d9024ef7094e82b3c25490723e1336a167a2d5d2a3e665e600c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xb1d7419da19418220b1fb9983b339c16b5861ebffc8636fef9d7f93bf006dc2a7fda2b5e9a58da49436912077d9e304c8944a83c3b2a3d2d8cbd3e1557ec7de', 16),
                    gmp_init('0x9dc3e90c0c76cc914e0045f90407580698582c33da4c43d3e137b59385c5f4dcc049ac1d4b939f4de3a64bd393fb4bd915c998c00f522cada40e66830b1f16f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50ea31cb7be61386c6945e0ec96ee3d5c16259315430227c98828ddd789686b128fd391a398f54d24c489fae5a4e0666325d3b646be5fdc5e88d56992385150f', 16),
                    gmp_init('0x4ecb6a75f18f7aad0b3708e8dfa6fd0c9e896c0f2d12df194a772a66e96c0f23a2a4a8fd4b234b1e74054307603b9cf7784ca6c00476517962b48069bc421b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6473519ad8b0e313efbd032c0405d1ea426a7f5624bfacc0f80ddb73b50ad58da300619fe37eb1027c70547a72784634479f7b47a1d06973d1944276dc0a2569', 16),
                    gmp_init('0x638c9ba56b9e04405689f9feff8f9ab2e58207b8853d35be0a0fbdfc6fb1ef19b7544b61bd9497bbb4430fa8cbc07573684cef16a3e84c24c547504068c6d0f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x989a7fe34561f20b3264166d9d9c5686175ec008c78e04f3c2dd2e29b3ab47eb9137048e29853db1932284ee40b1630718bc26073696d0a52b2b85deac3819c3', 16),
                    gmp_init('0x45ac41d2f6f8433796e47f49e2e3963d888e25a5c479bf9918639d5423341f53305b696fc871a9cb51e77e9b8210830b6a5fa91e40f9bbaacabfc90b5c58c0e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5065468bc16950618ef0c2b60949cf232292f801fc09f2443b051b1145db6aa0ac619d811c25bacd79686c81e3b40affbfd1fe06d81ed9b6c5825bfffb16a48c', 16),
                    gmp_init('0x12da67ecee8e7a2759044543a4e9b9f8196320ce2a4bfdde0d9d4a4cd7effdf4c4d20271178defa561f83752bbaa256bc0b84d25254084f39bb3e94da8c929f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x226c001234df6fb65a16f917c5ec0478651459c8a881b875e42070b5af268fb7a20f8b46727d76c38913ddf1f990d071323c0dfa512e8fbefcbce6a958811185', 16),
                    gmp_init('0x509908599d64511156cac654f77c864ea36c7073bf9864f3ccc9d711a131fdecbc5f93fe6da5f3824b1159b2441a791c56362fe96d03391ff48e20771780036a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87e4988af215b3242198691689a8f6fff0bd1dbdf6f0be58d254cf13103d263dbb06d5baffa79957c981beed98448d85b0984d3c040a80b5d5e154851645bcf6', 16),
                    gmp_init('0x2a22ec8a8464849abc595cfa008c6246be601001c85ad7050bc5d5d495e1a09f7b493835023fb4a0208334ad961f8524d5c8e9c63e93de0cecd6e11390c595c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x811dcfdfed5f10304cbdbb42c1d051b10edde8f683c9679698d1b9c0d43760af6fa69110521bb2aa928a72583d3713ed9ed3e9a17d21e4f3cea6061cbdb7a121', 16),
                    gmp_init('0x1b00c3d6ee5c76e5b7add4f59639eb60f0c79105fcd556f0ef933013421e0304e2a35181a69b2c89e489771653fba9626148feca21129d8717389a4cd55cbc99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x558c93f5dcbf62f0458135f4b445784d452cfb41281055803cc4da30e7b088b2682b7873140ee277762849780ecb125b6cb54faa893d1cbff112336861b176ec', 16),
                    gmp_init('0x75cc1031d9e22d104537a5b31f6721a2dc990ed8cfb70770958531bb0579510966b8763d2ff2ce9d22fac68fd147f70f4961c645ef9eb25f66f4c0a0ecd477a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4dca6c65e3fc7143a8d86a9bdbaea3958a5b9a56c2a87537be7b146b308a9fa34b885b8170593acf5a82db918d9d154095fe6b260ed9c07a5e0aa9ae8061b4ae', 16),
                    gmp_init('0x12fb876c25ce8be47292a607e5e26baa053bb79ed5186ad05ee9ef68db5fbd55e4fd2e6150a80154b90657add91e8be741587c0fa35ae0d031fb31d607285156', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a455c4387fab89a88cdce7d6b1df1db0ff47b95cbb9366b59c3395a4a5c94e779a8ccc7ddbf32444a1c2aa47c320da06a7e1e6105e6b72a749241ed8a9e82b6', 16),
                    gmp_init('0x49f9136755aee425ca6fe48fab74dc68ab8e7e9579642a5d41774f0150d6727551d820c8ed2ba150c2e30adcb29ea1b36f9d76090991f028e50101b6ecc16d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66cc9ab8c150a1c417e961efdbb88d069ae0f34a4ca9578c1573aabae216d2e9a4e7d2c92a49c43a99a1686e60d519e2c71851acda6db443aa53087b33989a22', 16),
                    gmp_init('0x1d89ec4ceb1d75723fa669c39d25f9da0563adbabb9725c9b47128626a788e98b04f82d662f5a680c171f2580027817bf87199b7afbc39f3b39ad58223dc3d2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c1ca60201337c056541afbce1979458b57282c102210e0a443f6e8673509f8378862f0fb336e770e963557cad9640d1a510ccc2e2a6db3775cd80775a6bb02d', 16),
                    gmp_init('0xa907fb2897ec3d79019bac2aff80a5cc11aea86c4b1b575e3a2a14573cd46bcea083897769ce61af5c89a78cd8497557c5db05cf71c5ede5301f7ea53fb84a0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x663e381f9308e71b5648a7594adbed4067897d62f642ec9cdfde3a22dafb49d2ef2f027797e967b8bd8f9999072548e0a0781f0b925ec50fc45b89366841e108', 16),
                    gmp_init('0x10315d555fa3af0acb226552f690ec5eaa349105dd3e224b05e8b90fc80e4c5dca2d711b58e462b8d03aa0ef2034209a7458e385f114ef71bd09708f453ba34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x903b20fb0585f73b07f3ce1516af92494fa1dceca8652306d7d053298a3296a5e4788bc955ace4aaaba6592bbfa9cf666b3feecdbfbf670d5ba9d5a294c39daa', 16),
                    gmp_init('0x829250fe96d01f526cc22d8bca653462333d3c09492b2380f8fc6d22d7cedb3f616595e578d465d9ad1c5188b733c04ad9f5cab7ef571ff7354ca7aba021aac8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6a5856baad7857c68d5259adeb54e41b44cd9b9d21c6c1581cbe2d5409350005e4db96bd15047fd0be35d5e2e4d345a4e68a24a1ef0ccb40ca179051ac5949ab', 16),
                    gmp_init('0x388ea977626380bdec88dd744c5c9dfb460b233a99e8adffe6b2a881e9b2c339b0454f5f1ff8ce985baab07eda387bd6f99c97eae6bd5949ba1bc37c3fb41c8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74aeffb138d4d1c317a872f0c02fbdfb05524f53dcc38455afb61c734c369ff38997f6fd6a6019ddec68c89796ccf928b344bd21ffa10b9faf9e0d497aff7764', 16),
                    gmp_init('0x555a6b5fe47e94890e2298414815e2b129079dccf8407baf5737110dc27c1b5d067985663be88118c736046baf0f962dbddf49ec88adf2c538dada69a19551f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25180bf2b76b36c4debebec704217f5edb272dfc9458cf25edcd5438cec1a4a6de9b9d81f40699eac51401e31cc3f82ef6c4e6138e86f8411ceff38cf35864be', 16),
                    gmp_init('0x3de2dfd907acb28433ed0f2850b175bfba9e040bd4b8128e2b7d342d28b1310aaf3cc69390e7d16b3ea4f6363cfbb16f7f381a96e0b3ca57f70b697dc089adca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x611adfd5e5f6421728660a640786721ea3447f975c7feafd337dccddc62932729a3a6892cb67c056654f858a5dd7c520e1da98674bb6faa1481d46e68dd8af56', 16),
                    gmp_init('0x23a434fe2c43f6b7fb936bb183ee446fe8890936558167624f12fd3ed707a1a45b77957f127e4b4341a73fa66ccb4916af2522d4859087a6192ead281453b18a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x425ae0b40cec0a095cab524a675d2182909bb3fd66643e021d7533529b51c39be31981145ffc0ce5535e3c1ef1f7ca70a74a1b9a9fae687ac4d70bb187a31084', 16),
                    gmp_init('0x21b1c3b55c691083e4dec87e8a3585330470a17cd1b8aeefa8f38f27d67b480f1a58c5b70974722865fe344b5328995bd42f9fb8d9213c6ea6510375bdaac4c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f2ba7e90f16cae9a50379282cd431b99f225b1b82d8a998b0b008e55b609abcf2d0514bb3f3627239157a6f4ea4d9341fe4214688f39826756c7a956eccf900', 16),
                    gmp_init('0x4020343df0f26df03a6859889fd236e30f3dad2a71dc8464ed7df874329123265d2da3aa9ecf49592135ee90b834ae1f6dd3749451a43d6a2f4fd8564db46109', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94d6d41b4a415ed2e742e6bbb0277d7406f5ad6bfc2b70dced35a0eee04a260b50f0157af94530142809f79c7706a09b95b9da34c4ae4803f178cbea7b9a16e', 16),
                    gmp_init('0x724949f09a683a71b5f7767fc84b9534c13432ac4b69b5ee7bd0fbc3008a49af65dcc831ffff1e7751ca129c2a955f1fb0bd4da50a12ad72848196064ba47592', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6513dc78dc5c6256922f06e35767395021dc20c28cedda3e93c2c3fc9d283fb7b979ad49d6c6946cea39c35856400d5ec2b18198a39d774d9cdf22400b266878', 16),
                    gmp_init('0x447b6797a988a95b12fcf7db15d7e2ac4182fdc01443f28d487483222b6678b6b0530ad125a06adc532a67ffda04acf3b9d44fa0c1cf31945c5a11a1e624d516', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ac052bea88a65c721765d198106bcbe60e425de1abc13e7c1d4ea5900923dc54fddb39d4e0c033108ae643ff962194835795f9622fbff30f46f731fe6c0a941', 16),
                    gmp_init('0xa5aeaae719b0dfae6b08cf1ed8ae7f107e6e95773ebaaf63a04da20858343e9a37be1dc84725a42007204617ef6c56c8185d5a852dd10a80604e3c8de1a8bedb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73cbcb9dc735c6ae759ca3b17c7dc89aa6c5e072f596c36858bf01a797cfe718e33e60b2480849d8817fc691a4131a2740f2d8fb32b0dfb9c69a24b9fcca1abb', 16),
                    gmp_init('0x81f37198d190b1dbe62f00a2413bf64ea44bc58ec932467b9463ed8761d1f625bf3d92d246330002e15cc1e4fcf7020c4fa99b70956d18e51e3932b8df11c012', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85ae1ba9e554b8454e1358b252c52093f2eaba2a820e07d19a66e619930679f5f4d64c653ba4160d5b8e82ca65e20202312de6f5119d5b3da2033b84fd4b7df5', 16),
                    gmp_init('0x5a557f49d58a3f167d1ced2f9f8a4aa70bb43f7532cdea1e159e5122ad522e57688c360c4380d6381bee008b1fdc083dc72051c8ca98791f6790f5e70d74327d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x642deac5541ab5a5947993d40fbfbf38f7c88eebfbc74e10c08e61053fa9880c7b3485c59666c2d29b93e2da61fc3d4f82aa25d9ab0987c3d5e5b1b5ad8b3060', 16),
                    gmp_init('0x4fc643015682e79ff0876f559101b45a92be4e19f3a20cbb62cc0e6278b8e6d2e4a3be645f912d9484ac8bf23a6f80127e9888174546927441aeef2751489e15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe951ac292cb1ac2712ae82205807825e13cebf53be21d982638d9643afd252bc7c01fda32dab92e6fb15edc3a214aea368c441124a58803e3fbd895d3871c89', 16),
                    gmp_init('0x7462f6f907c9a8c57cb4cc8fea565fe531a60dab05a34a8227ff6ed88f91a4d76c4eccb63f8f18beb8b6fbb1a757ced772c3159c63ca361fc21252a4741e4bc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x417d7b4874dfd5bb852287193500b2da59bb7eec1414254ab068191559490a48d883b94def88503f74343299d14a8f58eb2507da17fbbbf22776bdc2a0331db4', 16),
                    gmp_init('0x32f17c5c57753d2550dd3302a91a627a2ea06f654714ac2ec996ff1f201848f74cc16029128284e9a69b0bb0489a5a6f2963a4ab4dfbdb12377a620192f7688b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x915391d2617862573e9b86957b6cb6531eca32bf18c32e230743e81bfd51b8b2327bd667c3c52b61c4c94fa1948e21d2144553c1817fedfa59d046d905e9a6ac', 16),
                    gmp_init('0x52edaa436911464f6032511d879f81c6788f31c936dd89f59e914b43584b0a27ad008ab9a17ac227b9ef923f0376d846a9168bb4d4ee8217603018e6bacddb47', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2bb724deb4d9e6416640c97bd50a965a73a40bbce38206a87370ce95c03d832e6923cb5c3d89263b0f7a966697b72a7d0c40beac2428405b4ba0c1b2fc9b6ea1', 16),
                    gmp_init('0x834342854b926a4686b3f41f80bf942e767bdba504fef6931f7768d2c077ffaafc3c02c564e7ed0265c90d8d7974c1bf441e36d0ce8744023ba6d4a27af871ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25cb8d9454a8021c077bb2ddc5c238c104c603937198f76ee0aaf065365a1946719769b1238b5932412b133c4cf479d0f07f561b840f603d6a98b22b4019eb0a', 16),
                    gmp_init('0x36dbced2d8f2e2c88087de5e6f058c93080e18a618df7338451273c1f59b496be847c35e566edccf7b954eb3e986a74f1cddce8124621614b46ffb845d4efaf9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45e465842d73cc01c7fca9f764d297f7b92e91af411d93e42126c296526edd0b2a3238c3db7aa0f2e8b6dd023cf037ad0a7498528f0232538c8055c9a5e7f058', 16),
                    gmp_init('0x5faec6526d217538fca331841780383c94dc7e1eec394490a9bd2c16975b0b1fb0c22e0d0123ab439a194ac133907c995839554939982b752ae6502d38670183', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c0127b7c3a450c102576977c60005e94d475b8b5be4c48762c7c5b70e74959c5838f4401bd127d9056f4a5cdee0e0487d84996226267b76948d1fbe8adb23ce', 16),
                    gmp_init('0x57403a3945ceba6f4a9ad8ef039bcc0fb82d3159ee045442f3f3522674b306a6a3d9b7b7b561ce3d520b4bf0b77ebae7004e3dae0610018fa23c9254ba27939e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x864756aa773c7b8e3d9412cec76968af3e660b4cc765eb99714215bb9ff891430415ad98e069c26b59cd6d811b2f77113d553a9db297fc30516e142307312805', 16),
                    gmp_init('0x9cd31239c011f161b2b76339586868676ac3066ef7ec73f1e4582d17076980cd37659d7f3f6e6523b27e61bc7f11128fff24bcf601f612d75d8d792f29810b4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36a58924e39a2127e61d2c58091ee4e0c3753b8295565dab2994bb5ffc7f5a8e3f1b1c929122c56e9f4c2dada721976dceab70e4f0f4d44570b147f8a73a768', 16),
                    gmp_init('0x4da56137610b453aac1b5027606af88ac02293f8a89cf6fd0866e9d039818d6ba8ec3a30eb5225dc40a14c80f3041c47dee3ade71e5f69224634e5e03273aaa3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x801849042d9c0b09ffad00b59aea91077b708e41a588ddf49215230f1ce5b03d51e4373eaadf70d6c34415dc99c78261d90796c33c76acff9df057a113744eb2', 16),
                    gmp_init('0x10a9a27a41d86471d3972a037414a4c04b6edb99d2fb40fe0234d0107bb5f024ea609d4f23da02eb218e01fcf85a7342c1818afadcf19ac135dad0d39046379', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40e8e1eec4d537c901bf12dd1ddba28a57cd31148b4b638a117a7a4c757004568ac6d1f301d9b9352bbcbe387052d587536f367a5dca589670ef91477258c01a', 16),
                    gmp_init('0x43e1a92a26b0edea76877d07d7696d0bdc38474225b19047d355ebf35e9a83c85804f8e50c03f212db3d078ed83de648fa0c410c6185f484cfd05a9ea14aa79c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e362213db0646f2644e4f645bba2eaf984ed81186e5662e562ca2ddbf2f8a980ac891e4325ed69fc00fd8dd5a26828f60e13b256b92fb4c1431f83bcfe1fa76', 16),
                    gmp_init('0x8b3daf97b48be7ac874bcd37277a994069f5f06490e61b8df7f1a064ce95d0f028026b8bb45f65e71ef6f129f4ddb6e6b111dd9d958bbea5efb73f9ea1a95ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ff305ad7ee7b5ec2f2284192e93d5050af093645b4b082e9f1deca13d70bc72aa91488a5020c8614de4c370cdbf184a3c8b3475db938f2b362b4cd879c3e876', 16),
                    gmp_init('0x5888b3421666c4b6769ea4eecd04924f4136616f5e1cc419427da9ab7f837a3ef75783c6d013540b84ec84a32c850de394ef7fba3c9b320068d78f0117f2a09d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3431e3eb33956aa876a12f0d9a80755ca45ae516c2fab20df1ae01dbeb40e42d08a366b313bcf272457f5999508b5ee7a71b7c738230bd1e1734c8dc75e23625', 16),
                    gmp_init('0x942d8bc03ba0dda0ac35aeb631d91effcd8a579fb48a4eb693aa100cd2b9e18abcb7499e41e16931206cc4736d5bd61e47018432306236942c8427014cc20b34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cce21905e0fc13f04666b34217287368bd9944982cf41561babe8fe75c96a5b9279cd5746360ed09f0aafc33084383ba38c04a8e5fd784fdd69ec746320340d', 16),
                    gmp_init('0x61a374eadad72034a28a5a9776f53dfad023d858c71791c47826f8eccef5621f2a2074eeac6a44997cbb50048cd6e19847f42e660d4fa209c6bae39a405c9611', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f5ac5a3de9b96b4eb59c0ff5c1a21aed5b6df5863f160e5ab8e519d8e7d5b1a47721bae3694de8bdad13e668ad54927162d1c0b038013bc867c5d517e03f736', 16),
                    gmp_init('0x150d0057a0fab44eb0900aaf39a6a76f6a54dcfab94438fa875a6de6053fe19f1ca556c8bf4100bab5a0ca33d798bef92f8f283c163b831602067a8ae830a60e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66e887679f24345150ff0308f683cd9e2071b2ab863b7697bf2aee64648f3b13d0ba29b016d1a3466f3b4880d7e86de2eed4d4aae280212cd8cee2a12baf685b', 16),
                    gmp_init('0x46ea8bafc576d93a4c67d117cc699f310421d1a5cd33eaeed138a4bb85cc4ce1d75b496cf539fd9a674f52ce6dd3aa4a6da245b7df138a504771aebcc5cae2c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d8f55173c152bc868e02b011d5bd8952d151cd6f6f96436ade069167db6b744f9d38d34925b88bff46ed042c2100d13910ec984194e45a4ccee748bf89c4433', 16),
                    gmp_init('0x741f419b3c61d1e35d4ed2cec773abccdc9860932c8557694b67aee3961dfb5227e1c1887077e18dbf0dce52bb94c8acfb1fca455232899f8119e176206ba035', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2e82cd07540d6fac2a2d51a08287aaa36ea0c411dbc442a0b3d0cb826fabc1fc0a9e532621916e462db1b64c3b5cfc7a850a6ca517013ce757ef8fdfe4b6f03b', 16),
                    gmp_init('0x5744330ba753ea51df99ee7ca0ac30edfc889487a66187626276783ca2785ad73e2c661f49479bada6c0e735162add861ceaf0764d5119bb20bdb6653d19d53d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x890305b63eeed3565e11bf6144aeb07dd95945d573d0fa6eb15b0fe685645ab5db2f44902370be4bda2a4632b60a7a76319bb6a89b4978d60c70bacee3caa23e', 16),
                    gmp_init('0x34bde0d4d55d071b8c69f6aaf21d0eecf7a2a9a11e81dfc304354c6853fe872f3d565c4dc0f5e70bfbb0edc91a055efe66a8c18d8d282a642a284d5948ede344', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65746f3bfd49c82b53468e0702f4323683ae494199a690466e182d0c76a0c0c38138c7726150a2ea254ee1a0a5e5e40b06522a21f9c9bd8d3784e68bbee2a8fd', 16),
                    gmp_init('0x9a46867b498cfa94616453c2e09b10443deaf87a7eab695fec9778c25671dfcb37171f0b035f37cfabd40a9ba67a6c26508240ff5f6054f46f7b25a9dbb511f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61da9b7deb3b0fb9832bc2e018f9d97d75d0b298ac0a015be890795df38f01a6e1461f97e8b1537aafd3430850c82c0819b2274868ba9374b64ea74dda70b072', 16),
                    gmp_init('0x2860d8caf662e75f4fa0dabdac0e265e2df592e9492a1956c35fb8ea17e3c512a7daa57afabaf4c72721dc361d1acb0a949100ebb327ea6e1d40359df45098ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27b0e3b3841e364d226ae548048fa898f47c1242ae02486285df1f7b9130d3565c36fcaa55bc31df8c7932f24427d00f2ac26cb40f13a365e71d85cfcd7668d9', 16),
                    gmp_init('0x93849beeb87c174eceeade1e4995a99d87a54255a6273ae5a81a83dda3e3533d3dcd05b3c428b2a371dadd64e3b4970b2810777149b188090afab141e457e7eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b951f805897fb13d45aaf31d6a4204aaa1cb09ad3c7a71fd2bf37ebc286dd3c7f0c84da3a7f7474a8c574ba3eeab40a27c4d2dda4506871aade967f476bab67', 16),
                    gmp_init('0x8f9842dbeb74372443b2642009e41b27576f760bf11c60197ef22d8bdd1772d7ad525c73b6fb440fa9d49d81e783b74c6e0f0a5f9e8b394e377bfa7cfe6295e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3315661e4ac3a807946da4e0d6175e75b7925c87ffc5fa6b4af08d82f70d6889c86ad8a72edfe42e3e18549dc47c14a68d8ee97f9f54317fd4f374950665532', 16),
                    gmp_init('0x62bad1f68e246164c4d6dedc8d60b9d5d9d569ed51d68e2b26b0d1aa9ffee2281a064126d2fd41993cfb26adf0f580c1594ea96aac0467a58843548923fcc059', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4688a4478bcda47cf31690cda38d09bda5f0eb36316645cb868ee0a8c1517509dca69e64e90f9d95f44434bcda3ab228c0d3c45bc76bf2c2b7f25e4dec356fbd', 16),
                    gmp_init('0xbff7e42790457770940794d56ec4d1a0a32f161a2520d17e1b3d23f1495a04738222f7f26b9c2d1a87592c8ca64caa16381babea01102bc82b5d2a1dd07f7ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9daaab2b60329bc2aedf1135370ea1e62682e9d3a4a2caf530bc6e3fc31ca3c1c8f4783bcad6d149f59469fbb57785a967d1e2e1aa798f5f1a321043ba3e287c', 16),
                    gmp_init('0x1e14c8e8cda1626c12abbddfa756bda37b11f2bbc0dd4e15413c562970e082ce3be0b947a67bd8006a0a9bc36ee1d8bb0fd594c0235a83948c230f0b4624ed3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6417f795ee9d5d3c08bbb35dd2fbc087414079d124447c4b8a16b6ce2a7839c60c5485375b197bbe2273213c84f6143f78d3735ed40d13448522ecef75a8d85', 16),
                    gmp_init('0x6081224a4e62c7f8d235f418ec28bba1cffa79292f0319c85f4e6875b6dccb15b8620032685dd094c03c880b2589f1d7a380673b4b7260fa8c32386d3540b7fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61c82898d8f29bfd08e5e3d85789af5fa0e1d5cbf5cdce3620ae1423b5ecdea40f0c4de7c3de3341fdd5a85740794a4e5f98984fee9679f420f552e133bdfd90', 16),
                    gmp_init('0x8d11e15e69d76668dbe4e94f5fbed2c64ab40044da5406a7aaf8bbd8ba6b85a1d117cc310b6aa3657461a68793f8dde05c1e718ad9e5c5d4a0500869fa255f6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15eef95acace1d022eda7ce09245840792f0357caf3449fe5bd728c2f15a933f0f391fd26671634bda34c8e29f16fceb85c72dda1b63006e46eef8b55669e5fb', 16),
                    gmp_init('0x1632d2c144eb0842810febce64c7f9f76608b0307b40dbc56df0eb8e42b8aa46233e5b698409ab912850f1c021b5789042972d001f8fdcaf3eadc862beea4e49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ac19294a1d43d82dc66952bc6e204d21b30967f205df12f600d1757e4b9726f2a7f03d6acf6c0388b161fa8b317cc6de1c3e750a5f5ac9c8004c7ad4316d617', 16),
                    gmp_init('0x7e96c0b97d391408cbd2d5958c37d58ec364f4762d0b6ca11d35be150cabe7146fe244d9d3b6a076febe4cb52e1d65ec25c88d7bcbca3a8a75a22fe1805ae44d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x643e018eb9e9b9238b3e64b2d872a14700255258b5dbd36b804fca3bfc88ea7d25d1fd3c409bf52d1f482c6ed04e138b57e9a765dc80208f893209413ca7935', 16),
                    gmp_init('0x283591b248c4fc22ff98493092b616b5730c2d327020fa2972b7a718aed9be2bd67f6b746baeba7f971ad7323badb193279da0e03f1a5f1018764af98b3d8e92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d9476f7d46fb3dbfbaaf334c26be8f7f221321f3a0c96ecce2ba7db14f512442a0293b1923a353cdab86e7947d7d268d4af6e9379649ce0805e4e4217abe6de', 16),
                    gmp_init('0x42babd9481c28470d76d5264d1bd04741a51f830c76b58f583af4a5c3f16ddb2e6a12de285b62c7371c6acef033a65dc1f6d30b9b9eea0a580dbea3b1aa8c02f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x44f5c10d034a172bac30966ef09afa55eadf3e6dad0286a1bdbb3643dca5e39bc2bbf3cd1901abc1124a3c49f57c749668dc686841318377a081640108dca5f9', 16),
                    gmp_init('0x9ec22d84e17c375c9e31cc61355e0eefbc063292ff81a8993fc54dbd47db4a0b00b3837648383a0b1e93dd969ebac36becd6b8b107d2e33d0d798ff534a1c1c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ae78b3baf89a13b5b464b78d46f16b9eaa5fd2101f5238842523f5139b3dc19825bcbb03c88ef2f61dc0c402f3c40e8a488e3e125b0f48b6c14b92a435e68f7', 16),
                    gmp_init('0x7b3c4011231124772140e473146ed3647562543395746597a6c90c14e132b335727c7dc53c902f4686b0a0aed4f4452d9e41cd04a24802e82e981a3af8f81127', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x257928f2af4a0d72e7a6da48ccfb4aaf6e88bb9154ec9f013b47a6603a131bd5dc6fe5fc40acf789a976300c946982b9ca52f788441166f897b1c7a567878893', 16),
                    gmp_init('0x5553d89b9ea1f99cd5ad5435ad27dc3e84974c703b25b421b454d57f39a7bb8ba6cb25f34390a92004c4607617cba3f8b4032a36bc48b2ca4b0b5a6ab4515a50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2f7eb716593aa8273a38a223f4a3dd5b53dc1e510148621e4ffb9b457fbd3b0efd3abae2daf41e5943bb5c9dfb4198ad7d84197d5b2ad0a4b256bc954799977', 16),
                    gmp_init('0x38c043cee434bdae0e333a548982ef1315677761eb460279a720b8a1d0131d4c595a148ff9298132775ee4f39d41b295715b5e76c4a3dad6786a4e6c318dac9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x269c744c883909f615aa4808a6a04b7a04eb2d265c38578508932fb31dd55d26b334a79631aaa9a9ca2c0189d1a538a428ca50360e4de5f4c59f6b217eb3354b', 16),
                    gmp_init('0xaf02dd2762809bf75a55356599ecb0a31e258f98dd09cbb41304674c3cf4ca316e71e4ab8ed9956f1deebb9415583b5c15d803a6f279948d8cc807ab4d9f228', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d6e1766442ffbb727ebd80f7dfd4c7167f13a62da4394bae7e4ab9c481140933338664b9a602de7bb3c7956472eb1ffe720c3b4906823496132ad43986b681e', 16),
                    gmp_init('0x696b8e4465d0ac5f9d0423c45a1a13dc1c632ccf63c8ba84e7eaa403ae1c367db19a5a0a267773aaa22f3ee4180ad1446b2dbfdb182f0086ff550b253590abc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9949acc834ace285b5d6fe7f83a82af9b40fc891def94c0864f16a9e8ec87bfbfdd553cb7977b43c71d4affb65c2e9c40faa39ae25e3800085cdc197ca083c25', 16),
                    gmp_init('0x73aed6eae8e282d6cdf84d38e62dfbc151202827c2e5db0a264eac66200f35453089fb70ece798a0ff5c4220c09d5d1bd6317f4d8f2f8ee8f0f858726ca9f9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x978dc13c2a8e79e6ba8aa4b92e8c40ae133dd305364eedf4f5b8ef54fb3894dedb4ace4bf94ead0d13227c731c06804b693747c5186f2e2d42fc157cebaf1f8', 16),
                    gmp_init('0x851972cbb701236fa9f169d906dac4d2fc65f9e2e3294bb2156d367b897280194ec83379115d988e5336620e1e0fd2176ea5bc8df26b548becf393cd5852fab7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xefaa1c93ca1eac4c6224dbf8d73ca2ad46a21ac8c2c11cd63be3661f822540ea71eec2172bb0500042de84c216f9f8817f66d643f378e96f086133f90b19a6a', 16),
                    gmp_init('0x9d2faa4699dc4b2bdb79842e4d4d51895fc93d6d7ee63f1194c195293b1645d931880c7c999e8ee7b790bd40a1ff94042c09a6107231f7fc20ab9f429451e46f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8722f6eba57b068c7c04c6f9442a81e4d17bd7d30789e71b8e46618738460e77adeea711f2e13553e8e03fc78a11e935e728636a85a604275fca13f5e8420ba1', 16),
                    gmp_init('0x50c0b1bc3a71dc20569611e7981efafcc8b44431e71e876f63b1e2d46e26f5c5a938cf36872151f8bf30335dce0644bc84d4e137797b21f14732f7dbb448a2ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60796db68a2a4837750462f7c0006bbb855439dce211c9e79ee1613e09e75dfe7694e1ebe697b6607af81045d18049a83a6f156d7101c23d9b4a1b0dfbc85c2', 16),
                    gmp_init('0x4591bb5a714bbbcf4db9b21e6c780b72fb550c8c8773d13bcc2a5dd147865bc84729d944f7ff9c28d7b43120401741bb011fefa50c5895a0817d71c55e53e80d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41c03df8d71220ee9734d7e79d1c2a056cf1f5ec74df830cd72ce781cdc3cf477510335135062ee64a3b2aa926c96fcfa4161582bce9a7c238b4785c84c6d4a5', 16),
                    gmp_init('0x4016ceef09ff8d41eabdb1752321e1f35ee00d9f2dd7b5f273b2c0581218a824cd2ade81d57b57e96d9ae5251b0c39ff127d09f85e0081735e5d30ebdeb7a5c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f5e09a84bf6f0f87342038389ff1752e3eb089d563b9c265c2c4e682b8da656f9cdf63cf48f97d85df9d788335de920695a9c0aa0660f5a8547b3ce6fa118d2', 16),
                    gmp_init('0x2a5113ee22baba724c787595aecda2c5818fb7493033e77086d71d848e246e56be0a8a88bca3538d73a6f36087f6ff337c27cdf8bea24d1df64dfcd15e54023c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ca2dd9e7e12eb92f667fcc545577767f9cadab0e74c0de90732b0e2db27bdab9cffc05f2caa9809a684410bdbf7f2238e84f0f4652a5fc86d8197201db71b71', 16),
                    gmp_init('0x221d01866fbcc1ebffdf1d191af0b493c114bb5eac96f834219d0901920936e7256f91379ff8f628b1fc4bc7bc330d795e5b82adf47f16995a9a5966519b150e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x658fc36704684d4c16837b7f3b68eb227d84d414d714868e8d49c0ef24ae9ebff86a0e4963514918d47483d755800ddd7edfe4c793a14fa4bbe76024039b9aa7', 16),
                    gmp_init('0x14be91bdb8bc1b5f8142caa01a073f2e2f77887e88679afbb74ee255ffcdea130e4fb44c85849b3c5752070c177537c3113acde6ded232cc12480c5d4a127825', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x58bc3cb18e50237b100e8f7e2fb4e7eb0da2cdf70b16584ab60682007b896819645c10fca67f91067e35cbf4b4ba4554719942274362d1807efb2c4a080e0e38', 16),
                    gmp_init('0x720b95862a92e709e95467d273ee27bffdd9269e8e352f78d9f72b4bcb922526b6b0ff8a1885e2d96d90516fd89975e2022cf86919bea181521434b34000e36a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57ff60d6a3c257b01f3499708bdfae1afbb2c5ca18f4265633e2ece941be07c480dc4596e321c19e4dd61d57b1344cfb9cf80b9c2cadd58cc71b66ce694d47a', 16),
                    gmp_init('0x46d8309a3adbb5db5b8a64db3a60f88fd3d84feaa96e4605364b4ad2847b0e7d0489d5df400edb9e43dbbd985cf418ee7b9ef0074e6e6815292be31784e72ce4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x914f61665aa2c69e2f482f3b6936f901dc0a2122b38f5d92a53b70da6af133c6759b6253d860255da446a9ec3145d65219eb7a4fa4d906c0414d7ebdb8a750e0', 16),
                    gmp_init('0x994b10e081e62582f0fc79b987e8fedd89d0f368836e4f1fa909f118930bfea3b5305e31987ced9b1f5f72f5695553483bcbbc751f56d841cc3692a391c8fa4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65e54fb14241a1d66c9100e4e3afdfa0c5f1d1673b5c56d51a001fe2f669abf0dc4db40cea8a601e452f6ca9988377f7ceadbbd80317bf25a4570eb796bad39b', 16),
                    gmp_init('0x33da2ec1ab4f83b01b23130c185ab8afa483a79a1061f441c7deab4303aa37c23235e460fbd493a2159b8e84e3228cc7dc144065c10d5b36ad8e857c1848ca80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa578cb9ff180e7cc26d64810414b629d6167025a2db1067396d7853bc6edbac71f6727cc3b9a58b828274578f269e23c2888f8ab3a6712d02bd3a6cbb5af1864', 16),
                    gmp_init('0x41074eb539fd357f06ff8525eac604c1d7dd0a50df5e7b4123a57fab3e75dee8a14d8374a64c6a2c8a17c3bc77933e1b490d81190da7e6327ed863c00dbd19e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30026656b6b7aad1e7ca742e44907d93f8556a2f196c0748244b21cc747cfd0f742fff9189413ad91308c60c0af1ad432a3f5043ddca6c88880113053e597338', 16),
                    gmp_init('0x2b7c4dac7dc86be9c2bf517b6a334857a76c53c9cc6c4629d69a03512b513828d7a2842095f20fdbef20b1be4eb3d84e172e2e598428f82f20e015cd72114dcf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a505936004ea5760b3f391174b20ea9fa37787f8ca214e9929386e468e3903a170673a6ad2898bd0b4fc81027318704d16df7ba7b2552680819399ec346b673', 16),
                    gmp_init('0x3b426132c3565beba907e2458b52f828680c4dd420b846f989fc2577513e9b2f53c121604fbf05deecc2d7a7c615161970f57bb9c26c67d3f6b2eee022a0bcf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa316fe873802d169776c61861864e1dd0ca22b7614635d1de3ae9580b8e4c25f5d455a04a6fcd2d27cd40e83def817f1c75f35b2aaaea8fabb74af817a7b20e4', 16),
                    gmp_init('0x7b0ca6415b49a7b386c0e9e465668a6750d5fa0f75178ed4e6445954ec117d2407e13b41d268d20398a20f7e5ba10b5d74170ff6e5a6d0982b60d08389bc347f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x911e67cf8fd4eb8a4e956dcfdd08cffa38054e515ba57b5dc06151dd6fb326bbe9e375c07b14e381c742833a6d5c5abf876d444978d37722a6ee5aa49a15b8aa', 16),
                    gmp_init('0x9d7737fd8a9f5b17817cb72be3e51386ab67ddfa6c25ffb8fc3008826cd6f3b337eff853a536b1da2c75612311525cb382458718ff00d3c0d692d6d748b4bb8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7458d32b959d7f3754c242ea4e11bc4d1121f3dea79b6ea22674caba7b22e204a2941decacc7a3145a86ded38b149ac7fbc94d92bb3e123c4347ede346e78daa', 16),
                    gmp_init('0x63399f744f7fa62f1edf238ae75c6714812f8e7209fa6bb23ac32cdc1ebc7f94d4a8b422954e644f6946a8059335ca8a76bfb2f5397e697cc22640fd624ad12a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x345b62aa827b2dc80f237faeaec0501fba3047f3accecdfc12d827b616a69e2599bd2a34c7b95e68490c0ccf0186e4828c34da6803636cb6f98459c13b020112', 16),
                    gmp_init('0x7ea1689d48971fd55cc2ad8234381af71ac14c42d80eeb65ba4416f1f1b90157dcf7ab1c6060b50e2f413e27674ac5bd5f3d70057ec1f6b97f23ede8842cea0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30a57e4648657e45ddb0f89bc38dead6d4429b25640e8ec4858ca942e2ceed7c5200d360c36484542491de8e09f1d64f98967975df8c13e204758027556a988c', 16),
                    gmp_init('0x985521c0504fa549f3deb607b5aff4f61465e3d6620f90f2bbb691dcc426ec45d954765e7aa10192c25470baaa4e524f029b93865e636527a00e0e381ab6adbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5782013dce8bfbd06b18df8f1e4f57e247e1780cff566cd224076715a4ce5ca26e4c0dede7efc87a0b1a775deb05c3e30917a693b736294d91c6df86aa109321', 16),
                    gmp_init('0x9524908929424f3246b0325692d4fe785ff63c8fbb4630feeeb351480326a4ff0af810e66cd4abca0cca8679dc133cfd9bfe9ecd1669cbcb2b1de4ea27278223', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54d5077b06accd293c58c604dd4d37fc98e9352d03d777a01b81ce94bbf049135417c19bed8570829d596df7d4aaa1c45060d761b7b94d92d1626d582092333a', 16),
                    gmp_init('0x7262cbc5e4e49fadca40141adadb64b6fc2b693ef9fb4352cf040add49b28a4e972874c31ce41eec78f107e65f1be93c388b2e647a3f482c6fa1a749a3ab99e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72e22eb204c5316ef56cfa9aa9473370178348dc4c6052d7edbfe1183e5e7fd647aa63c4630e0a7978afed9798f1617db3fe173f5a1cf7a76aa3e1323502cd62', 16),
                    gmp_init('0x9c0269931ca893f4e019b6ab167608c269c6052b13d0675c2f26e2e8f87653a3a054892e5eaa21fe987e2886694f8a454859d79f40761b0f9856b7227c6aef42', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x59ea6dbd884ce9bd469fe5a4b48d5c794274190e05ff90298b7f36b1c1edeb0a09f76b16271ccd9b974c1c5a0dfb7d7c04ac322022c203ba2f1e3a21a88b258e', 16),
                    gmp_init('0x4546260e64069403bea0528f83d6e7696f931af39d582253e56bec7d46c0387c8b84da45995c215a58317f91b3f5547a4da14a50ed28d2409cdc99a1e3c7f564', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c415a2362b180e865aa4d07c355fee3efe754a79388f7ae7e621dade15c9074a303165a32b6c5a0b45329b30e0f101ab140f51a25a29614aba70712cfc2c32c', 16),
                    gmp_init('0x393719e9fdf6b96fdf70e4b70d25a8fc15f0d42b3e92b2d0d15a3c1f084fbfffce91fd0f36c82895b3561f7719551454f3b1828a1dd983c203c1560de2499ddd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x870943864c12d79e633385d84d0594bcf1b5a9ada8d41b436538f8a070e41b4370c5ec994f53d033a6d14ad66aa742375736f958a3f3e57b35887d805322e6e', 16),
                    gmp_init('0x78f612776e65f85cb7e4165fcf38cb1aa7c5d198d80dcf5dd69bde0f3964c543acd316c5d1a62a5051e5c191a87947415c3e89109cc37387f1a0853b84466091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77546d77e20114c3b1e16e3ac43372471d5540b6065085866d290c81cbdeda4f8ce2dbdf77cfc9ba5e37fb216fa71041850662b1a1404d0229737b9fbd7a3b73', 16),
                    gmp_init('0x87f45be007e47ad4cce4dd502c5e3ca56d1bcf9cc300eaec64f1017ea250541fefb9d715fdd77f312be34cbe5eb1c84a7b568d2c1e0a9752d06b69309992d5bf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20b8b6299069d06d283d5af3f4b0eb56f252a924447d4fe935c2f6fd26dc21ef63915c38f5b32e09b184527f2911456ae789c096de9a79dc4da2985ec31027bc', 16),
                    gmp_init('0x8c9c98a755d752618161758e5825020461dffcd06bfe1932bc5fac35fb45d63a02adf33b3e98ed2e69f4d13845442bbf0da066af3f7c9db9d810a6c3927f9fcf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d29dd5a7d8368627e26edf9df85d3025cc18639a459efc9d557bb2d6c069e131b5a8b0451889e60d7c28a9c1ce492ad7993a4568901111b674e5aaf14c31cfa', 16),
                    gmp_init('0x18eb8affae65373be9eb0dbb5b12a9ea57b6bf0c1880db676396e3c7092fbc7cf8b13a3f1ac61d97d64ff9daff1c3d4b7e7d65215696d42b476eb285d8991e50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24f0fa67bb57fae98d297f250dece9b5f2441ea2a34729b33247798eccd166b8dc11148da309160ad561c2d3ee4068177c4ca8ed1b536daa7c4fba2c5ad25dff', 16),
                    gmp_init('0x6bc5186606bb4a15bb542345cbf562995c33163d90ce6e61026019d69aaa2344604500be709c1a47358aaba8f5b3b2beca50df735eb0ce3606edd02e7318325a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a14e160c5337737f191776f2cd6a90d7f31d54a0600b6c4d20b77e03568a119ba0b6adef52308e2fb8155280582c295ed3b76445577591d7b12ed628d19b3f1', 16),
                    gmp_init('0xa0b96aaa9e1698565399ab517adcc2bfaf7f0fbae92800cc88ec8ca99dbb6eba1686be44e566623760c9267d8b16816ae8a4c1d4914de81bf0d95996e9275015', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49d201a802709fe6405852466c05de7138981920393e5e854f420f4852309a2ccdb8e1beec80a875dde5a68a0172cb329147afec6bcae761ff8a03381c141d91', 16),
                    gmp_init('0x957485caea7b63763a5705bab5bd824df2fa4e96e35ff37df07cae252983bc5585c79c85acaed410d0e3c250df154161850110e028fba7836228f327f2386cf3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd70e14d53f9e0a26fa4a7fac6d9d2210e3e387c5c34a43ea56c1afa2b02395140f3241b04940dc5e44fb50f379fa9f46bd1fff9594a766e6af7854b97f6ae12', 16),
                    gmp_init('0x98199cf1646413a482625150b72d2e6997ade5a6dc32ebd6fa80d36bce906ae1f6c41fa57a914882d3f3fc6d97e83f53c366a987a339e596488875a147fea2fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x904ec0b221389815adf1d65e2d38762a11a9e05920781a6595933171d82529b099a955a580f6ec9ff62a6f6fb09ded3e1f473de34e932f012904d86d7aeb99fc', 16),
                    gmp_init('0x65ef1ea874efc4d009e663191b4ff38f976a807a4bc1f30d1a63fc4fc48e0ac784035778b8f9a45c506f8fbcf5c6b28d6997accb21662a7c56ec47adc699d31b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x143b97a7cb36b8c596c7e72402aa96a58a756e1badcc44eb2359dfd2ac16bf3de7589b7c02b6021556b361b0d25ff21d7101d9fafa4fb61a6f68ce48720308d6', 16),
                    gmp_init('0x8d5e68b43352f417e1b321c08ca06fadf8d52b7096cf245932616abdbb467ca882fc8233e8d14a6a044f3a6dd74397302ea76a8e896c26c1d329c19349b09fb2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e0991e70e52c31117d5373c64b960667ecf8ba0ec90c4286d49c5dc67d748335bfe2a27160f894f0f684bbd8def9eedda95668f89fda1d838a47f40109d8ce4', 16),
                    gmp_init('0x21708dd2b1cd81cb6e62064b6491118afd15d144481d7afcc6d75b889b22627f2edec1d571a04d983f979d5d943ee031b13a39d5735c681d82b647c37cced2f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x436d53afec8c93a4d9ac50e9aaaee13a427113dbbe0d62824e40d03fb037066ab70c1f1f3a81207e0af47415d07c1f35991fbc39a45a8c852cee9064f148fad3', 16),
                    gmp_init('0x47430308e41f8dba0f84f6b15e7e79541e48b4370cdd8574ba974053395d863bd322ce6dbc0361670d7c57fcdb01b3c347c8723581ccb7e75aa95106ccb6e047', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x270c1cd386d765fe2de68dafe5312a19b7c711d8a1dac3a31918e7c5a93f92dda39dbba64e58b9c6ec175a053d072b1ecb801dbd7c60e809e3c5ddd9603885d4', 16),
                    gmp_init('0xa8d274d7a5a72880e3d528b2b480cd90c6e7c9ab369a4ec41f6f232e87317e4a49b099f401feacbd9946e172fe4e01d6c37e190374599b8faf521a174a5afe29', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2da1492eb368dad445168e00fa349cdd12fea674d1614638a4b9af15927da84e612df85b7f014fa400db9957698e53922e63e84beb3de6034344f9ea4bfda79b', 16),
                    gmp_init('0x577a56f87d30dd62eb448d707d06def1ab2ad0a5dcf8970f56dbfdf3f8c2abfddf0cb9508675e70e743af210fc4ffa9b2b58aeadf032065221c65671672e2473', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52a94ed6136e6990e3a49dbdceb7ebdf1661d8ffeacb9633ff036f5136662c1928290d46d5fee67f7cdd5cf4111aa60b17259ce02876e7b1b360bdeea7944f5d', 16),
                    gmp_init('0x58531b0a193ae2834b3f1f4758e1ed8e2d4c378382df3e11e411446299bd34bcb0411d82131ca932763e7cf529a3ddce5cf5c86dfe16cc3dcef60d9d032c5152', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa614ee34892179a682aee288b83775468fc0c10948431b093c10daa1e5ccfb520c57919a7043c639e43b050809530df8484371d50756f43cc8cec60b4d6af9cd', 16),
                    gmp_init('0x93534a8ecd842dd741099f59fae7e85d84f16344b08c1038f52c8900644b295709b6a736cd95e8032c8fcb1406acf5ab0d9404a51f22dec846ff59e72be53c0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10265d9b05f6f4588f1dc3f0cde94f60141ddd5ad2aec01e690eb8d4a53955a4fbec472d16c7959b5ae2dfa970c6360eba20b26fb8fd01cf6a6c8f429af9e835', 16),
                    gmp_init('0x515706f794abbf8b848137fffb8849032a007624bfd61e44b10aa1abdca88f814983bb2bfeaf34f9da1606a732962d3ed6a41741c0a498cff12c0fe845245f06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c84de257c7ef5f6b66712cbff33990ba69ce77c1c97cfcc39c94f41760f362f3e37432c5c4f3d980d4f2f6f622b68178f7fca7d718c32c99c54b88239cf22ad', 16),
                    gmp_init('0x333b99d4092ad97ce128ccc711a668f7181bbdbf34f73ebf38112a3d7fdd0d028f29e50929065f74f942cddb3c0fd4cb549490a6ede4c8685ddcebe975f8c95c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x999f70c226f6ac57ffdd06597eeca6c8048a29253046107d71b682882adccdd59e00db5e0788f643d618660916d3da2a8569360f41034bfe6d324b3ce6e71ab1', 16),
                    gmp_init('0x827339f9b4b2f599e08000bffbefd05afe001575000ece3d798b4489fe04255f5da6b6e583c9e3c0bc8695730cbd318fc91f509d646245707f2570edd3dfcfb4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6088da379dfdc6eb6f31306d204f676df0f2bab0b8e6db72cee5f09e872d6de42274e40f9b0eec41cf68e4036b743beaf6bbaac6da53b8b22b388157019e06cc', 16),
                    gmp_init('0x60a8e63bad58592ab4a148be6d03b7ec156b7ba5923fc010a116ed8f45c6c8b5d81697cee413ad620a4b0da7adcabe0a74320e993084fd6791a780889e13f00a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x822b0c8ebb731e16080b15f90d4ae6d62bdac80ab69491932dd723ed1ba517cd76d79957468138f83ff359496d7ba87d1daed840e37d68029a893e2d8f3d8b7e', 16),
                    gmp_init('0x264da10bb668e6ef21c2eafabbf919b8343f5fb3c638eaa3826d76a60ac089e45b5dc6f72baf9d8d800923df5a720b092d61f330984f23aa1d109653137dee3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c8ac81ef3b9b15e89cc88148c8689251a6f8cee03e87295f5f604dd652695bc52ae98574667d004062c5d12512fb67d820164b6100712da0ad512a5f973dd0a', 16),
                    gmp_init('0xeb41e10dc40ce297e5a19868e45ac6e94982d7d8eb92e21960d8aac0eebe210bde58497913158ef17aead2c7d44af0244285e6dcc96f9e0c576a0e34415f2ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x588f279709e2638e8c5ab92134a16ba77d10d809ce13ccc3d5d505d79abee6937e92c0949c67f5248e230520b832e7a73ff3daf657c1cf09f353eebbdd7a8794', 16),
                    gmp_init('0x973c6e03b1cad8fa44775b8b6acac27b59b9b2ff54bc2dd3b05ff73d0d5291776e03ab566216cf31cb76b72140e3da8943ed896998513fc252f5ed1482daaec1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48e02a3badf98de2f5aa11a396ecd7ddf12f7705e3d2673177118a183f46666012770c5b06e082101a5e6d46bfc969a69a84ccb33396155ed4c587bd4f0d7895', 16),
                    gmp_init('0x2b3f405be4f3c5a620f7ed5a6481673923e8582be86ee3f1da3c938016ca1b89ec216143c4590179e8f27a2cd0fa8b0996d0e743309e5257aa5eb8c70e4da72d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ee52c5250641be636664d31d286c6e70cc0de6a3528d775a689f50965aaedc2269c3ae93c5412ee9a1896620ad5765169ab10912af695970f6e3d3caeed02d8', 16),
                    gmp_init('0x2cccfd06dd5fc1976cc4d0914cd8f4ed643c305b2a4ca1ee5552346ebdd093507deee8d7f0bc78ab285aedb3055530b12c9d46f1dbaa461b735a8ba0b52bfc1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c99eaf0f3fe45ed18c5dc89a77ae3c1a616dfa4709a848d4e7dca8a78d63c3eeeed2e334f8541626a91c27966a2cbdc530f9be21335dee7c1a1b4a0a35c6a54', 16),
                    gmp_init('0xa6d5fe6711a08e6e35260cac2cdd068e14e17d22e1347756bbdb5ef9bdd900281599f99ba5c50cdff98121cc35bbc4990c06c50e9b2cdc0f0041737e6010817b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51da87ce877fa479cc2a4fa44d6b0ced3a5c335de93ddb1810c7fbe8754e81a4c1dcab5be457fdf0ef8b044b48566a1a336c817fc8f67718581e669994a0682c', 16),
                    gmp_init('0x5d25ac9b91abb7a5c27a164686c977d5d595cfd120aef5714befec8c727c17aac998b49b090223b04eaa5a4607a289ae20c984e819bcd96ee01750bc5e1f2f9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbd413d32d1a788e35c90a017c35d051b15c1e0b0f7308dcc6fa027019bf9d5abab59a9fe6382764889a1a0cb6210bd20655eb4b7d2035ecbbd6efe8c3282115', 16),
                    gmp_init('0x131150203895749482bbae56f9c5561fbe4070b6d8cec92696b80c7b6591452486a22595c22102a28a3a6afd935cbc46a5381737a39cb345a330c6506c9a6425', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x17260862115e5ccda52178935186904fd7fc090457ac9091769d00651fdd9dd72c6c3382c3d2e1d766aa56309f9db81b25a7b9f5d4f9c21f6461de6b87644c49', 16),
                    gmp_init('0x215c47d1abe6c5b5d4eaf54312ee107869cf1580aafab3df50ea13fdc04429725d82483ddec248e321a5aa76453996af6fca9695b3957ead816f698c9ab17514', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7611773f44c3a4646c7fba30b0d7336f561a58f9ec6b69bd760691713ad61b312c20d546f546a24fea7130071d312dac214f894f9894031c1e43c1d037a1a2c4', 16),
                    gmp_init('0x3626fa61cbda601050d71a56b6733621a3ddaf3c78691fc6c324ec174a496e6aedece1f5c9370917eefe1497dc32afce4ed882ac4faa96f1fe1bf673ff9e6a28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13c0f518d900571f181cff685c85a08b49f84f7acbd58aadddbb12f80fe6014c6b95c8e11a7d9409325c97e46b2fd0696a88b44f7f3d9039b91cdf2fd402530a', 16),
                    gmp_init('0x103c26b493144a4fee608f87507420c63d797140019d921b6fa4a585d6d436ed39dfc8ff7f9466e2dadccc13657babe475e4e5f0592309f563b2cd16f9585b70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a387ff8adeeb28f0af46e473db075c49e9f0629760d672cb78775b8c008bf1c084141005a15273c6c1ad73578452ca78391c1153e8fef526ec61d24433327c2', 16),
                    gmp_init('0x76b3da201f6fad1f5551186f1183b4f1df2344dac417bb6ee53b7ac3c58687c586d19dcb0f08065716274d44fd9fa23717be5ae72747865e0d6fe05484978a41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5e25cd80f957b2e597df6c05831a027b233f94cac9a03f3c1d8f7caf3553922c3af0644213a3ae578f4701be6b488b5422b9699daecffaf1e4f86ac4edbb5d', 16),
                    gmp_init('0x7e56e76d78d75f6bec60935cf40888e23e6098b370a5e27d09270f9773a7314686fe23a3c65637bbbcc84a2e1e503560457b4e6f2eb2c81fe702821cd2fbc326', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa051063c8c4440d123315da3bfd3f613e69493fd47396b8a8090ac9b9f82ba0fb717ce7de750c6a52b8edc2ca6da49189b4e8a855e1c9fdecd397df1f95e2fa8', 16),
                    gmp_init('0x10bebf76902524ac7bc261030cb5e5f425bbd30ca8480c5309054e0c131b3f03670e0311b1d8f226da9f822f1c903ff7f2b9845ecf6a904260fba219de6010be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e831eb7f0e73deaad2e057d0711036a097950b36b4eeb6de1d29d2d8b09cc3e0f7de45d5e0a9c4d5ac7b41a500e3f89467778d6d08c5712ea0d282f73adc0e1', 16),
                    gmp_init('0x164ac798035936646238f8244432253746a6e845ac0e049e2cadcbd28741712b051a307d908a12d438d81180aff3c909064e82a90d3599c00931c541dd5210f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f47e995a58cf7a1fda2df472b5ee929c2cb7962b53a8e7ffa64a57fd43cf79bc6855ba26bb8843988ceb2688a0fc64be1ed0fa4119fb461db56e641bd2a665d', 16),
                    gmp_init('0x9e0373e1835455d7c6b6d2b78ab106a9708aaefcf779402b9299cfcf1df40e1f193047234eaed28da19f4ce147f6bbd5af14d40747248aecf15feec75579add8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11b0d44fc28fb12e0d10121ca40d3f4421af4ea82286f74fce91e180237ae139202de07817d93b40741bf4e8e967901f0b1aaac40a8f271065d82563c65302cd', 16),
                    gmp_init('0x35df5baafc13443ca91e6cccc01b8792502c2a83c7903c482b3779ce3b5bfef5081d6d84813eea86c634abfc5aed135adf44d19231a220b7d30c56aa74f9dc70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e38ef4217101324e994eff310dac305dfe47f88e8526e17b094aa4a8a33b8947f9248fae402301b63365a20aadbc2634383338b0bcaec86d173965ac58320d4', 16),
                    gmp_init('0x3533ed988f283f90a4fc30099aafc0b239b7966ad0e7fb76f8dd322fdeac912764c61acd62850f72342bc8a229da148bbf5271820d2ade26649a59f7494e6382', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78f5c7e4c3e16377a5f6397bb5c361d8f5dcac3643e7bca9791fd881b874ec7294e92d119371232dc6f6d8dd9fe8d10ed3cfc252eaf315de2e59eb7cabcce461', 16),
                    gmp_init('0x476d2b4fae3695997d852fee86b9ca8a0079c1a082c32474110193470d358d1d52f6ee2a4eedb64f8d84940b0e0acd2c92260c384d74324b3b4a265cd0276f8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x740bd865ac6bfd8208960fa200920195762d8ef09e8cb4566aede2760313dbf8c961eca384077913c582a4387d2e2a3194c24dfc1f17ffec26835c3b4c8cc438', 16),
                    gmp_init('0x77c25949b96730a2c8f7979fec6dd9468feb3e48f25d911e363f3bbad6824e0dca5f567c2b662a16e46a594f03e39a2720da23de44ce72fc7d1eec4c818b3b38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dea0007766493bedeb5780543a40bf719539bf6fa3de767793989b15538e7edbf571cc9d246d0a2c16e27d37d5e672812b40580b69f3d08a2cdae8dd15b1fad', 16),
                    gmp_init('0x2da5c1d62310f90b2fa56b7819bb799a7779269df6af9b36a2ee92e746d4b491f0ced60aae13bf39683454f8a329b2ae8a750df74b5673596fc8fd7b53c2ec56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d78c7d1c03885ed527bf2d691fb4513e1835bd9c8a8c40179722e9c804a8117ec04ec6791f9a420acd42591b1fd17657705560899df74285b485c958458a489', 16),
                    gmp_init('0xa10b136f9e2565f627ffd277c50ac4abf65600bdd5d822441cb2cc70af8e79cbd6287a207db05575087b25776212c1785d18925b4024d3af79038c37d3c56c86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2a848abe3575326a2d9b4967b017972f8c97334b91b221b4961e78a5fd3d530f2dac9ae9b1ac12da10e892ab4001b4877bce20247cf97a8669e785e6ea3b806', 16),
                    gmp_init('0xbe0d9aaed89e7a8874a8a83ff70e94c2192ef28ce2c7e7768a432585c47824a3de7de9095b143cbc4469ad544960edb17392d02e29541afab2ebc4dfbda89c7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e0d6aaaff3fb5d2277345097ec13f3cc2123e95732535828e48713da5ce468ab3ab0b594897cc2a39b4961f5f5c78478c47a9ea2c4e254559f7b6448e8cb95c', 16),
                    gmp_init('0x8855758562a707d0ca06aec3ef5e1c2ba749194ddb1e1b95affc0eb4cc9c4c66d0d0a26151276613f5f28772ed3c7d18199676529a5aab2c12ca4bd675fececa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4892098608dea5c2b88d28b1e968f7d58a38025a04f93d67f94d1a63493329778450daa272309e75b62241f00ff90e9c413648afc000793efb678fc12e00bbcd', 16),
                    gmp_init('0x22a8453c8a41c59ea9bea850507585373630a952b3d31b5bdb86e2bdb113967819f7b193b7a9319c047ee271543e1e1888dc94c940d4902513caec9a2412ab6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70163b569bbf05622e787cf7eb8492af8d1a4725a14741ff231fc90e2f5ed396edaf0e49617071a1bca00d0c2912550c85e7f6bcfc9665b512f45027aee100d5', 16),
                    gmp_init('0x4ce07d42e49fd54f7fb3c94d115d2401fc4633d833b5fce3fe0217995db9200ee282bc8295f9cf63217f18d597f62bf6fbaadefc03246d6b9c3d5786d03689ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d3a8b0e8efd476a43fa2f4dd51c19f94099eb83917aa7ca4d56d47b0653ad3ed73a277ee2395d8e40e83c65e4cdddeb62a0cb3bf2f234587f0594dfac5fdaf7', 16),
                    gmp_init('0x5fd11a3e85abf01b7c714fe929f945e34458bd5bda64171fb481f5bd70284076be02ca27c4f268209b4c1f797a399b1d64cd52b86a6df4c1ce347f645d7b9c0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa8fda0daadbc553c584c57da8ac0cd924155cff57e253966675fe3121bf51dfa3f52cb9f76aab0b77b82e61ef65d5a2416ed94c3eb492a802362fb58271137f', 16),
                    gmp_init('0x3119234e9881111bf33706ebebe70709939b7ad5cdf764216aec1e29bd4ef0e96c1f495a67a30ce77d8ab2d043a8505e969eb6fa9ea339ef47c76a6874833584', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1dcea0c7f59139cb39d456bffdce45103f4cf04eff4c394a81b1deecc6f050ead477c34729f1bb58ee0fe68b7b6817f88dca5901c19d01144d21924bcde252a6', 16),
                    gmp_init('0xa2acf591276efd003619d937c896e9cd4523e876206664e077ad897a2296a3bc3d007efc9fb38b0e002ed0da46122a7a74e4a502f4a6a6f1b6d68b83caf5b1f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28d9c781c25ed22ee3c39dd5773768083031c96080e3743dd65f1bd1bc504ddd4877999868b21e4e5ace7e0c70804fa3e563dac5bc4043ca2ea8e64eace1db49', 16),
                    gmp_init('0x495d52726c703ec37c7f5ff51aee4b8879a5fd106c1533e4a4374c7fe7c061f0b834fd3ef369f72284cdf996a50b3c3ef622606c8fac827b877a8745e9bbe8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2772c1779989bc441025e457a22c98b3b062a395c16186a78434a078490efc89699dad2240846b3c2a65ff728ab7d1d22d73d95406de5354818511d94e052946', 16),
                    gmp_init('0x48e578ca59f63c6039b268f8cfd6821020e433e7fb82b57f3e5045be3c7c9b88bb8652879d192115f03e28b2d04c6b3ff54d3ad433718c908fe97d6e3c2e5177', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a8206b5a16de2f3e1b4a76fa3c8cfb33037f602d419e6c65ce385f9b5dd8d4a1b553c29e35c335a490cf2b4eb493ca573144de15bc9f21030e8bc240c4521ba', 16),
                    gmp_init('0x95cd02f1bf33d425f0bc0db3522769b3abccbce0351120f52ee0057a75f746e952401bb1fd6a04a241c7c67a7c98bb7049e2c22d2ec5ae847fc6c3c115a42b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa25e983c0d9da228a2accd03984884cad23cf729e7531fafff6bacb4906e327de730c98f1d60858f6da6095426adf9e00f2205901fe4591bb0132fbe712d3403', 16),
                    gmp_init('0x172a91f61f5fc3f150b46a9acf0d3a91d2349b0b84c761f9d73b09e6d561ef382f14541bd3202df6e7980745bfe97ce39b67bc565eb09ea59cfa147ba81e00af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x474b44d1b056a56fc72797a9beb7b9b3e05f3c1ac20d9630d6f745f3814810480cd6fe3b57b1ab32f447cda6b7e05c66de36c886de3eecb67d61fbacb7de9916', 16),
                    gmp_init('0x9cb86b2a222ee4733ab8e7a44f5aa156d0e632eb2d7d89019d3b7f0ec1eff0a20740a890586a553f3ef9011c46cd40a049f966fc6ca39588434e922b1e2b6cdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25b662718313dd9c1b23fdfd2b044fc0a3936c4cd49c17bbaefed3045e6f8ebf9828ef4feb697d4ca61b80a6a7b5716f6627e66b2d66f1411bf12763bde9ff02', 16),
                    gmp_init('0x2335f208a5f2d5665d42269b6308c219becf3641cbd3274b7d60fa6725151cfe03f078bc549355910d884772cb0b7a6e3f326413091c3421c3c01222cc625071', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23bb4c3345d3facb1019a27eae69877d9e6d6c8a4ca45b52d3f1cc6bd3f66438e84a809be6099721d99874eb5a8e0e91f7ad96fc731e45c859f746d46176ec06', 16),
                    gmp_init('0xbe5faad3160dbcef57fa9a904082f54947348539ca9ad4d1dce63191b3493a7f19008623ef53d1ec68513fa35ff983734a96c09851c55c364a4ac330a310c75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86e57cbffc8b27f5c33c722bf79d5a69598401a13be0e8f2742808de400a13e788efc9215d4a16dd108d513e63fd9a04a4517437eec1217ecc9ff370fca39cb4', 16),
                    gmp_init('0x3866ced8945cbb00f1c4a263d960993fe33e1b39169890e22ec5ce2aaa11419855cd2e67730f77df3cb12473bab2490454cc2ee77881d4f3207e52433966621b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x115855922854fa296b8057c9906c4cafaf404dea6096e7b4d787ed76143d57416566c0eafd4a07b9d42f992ed9c1dddb40e0ddc37c2f781faf4582ab5133c6be', 16),
                    gmp_init('0x206928556475b23d7cf1003cca9cfdc786a051becfe5e1c9a7d005b64eee04c13edca876fad3b2732cbe01e63b20e89694ae1f21a836c7222298deb2b7d1e1c9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x605676fd2138bfcdc4efc55bc9aa974b2d819b7b0a5ff3d471c21cad381dbeb9e1d6ee55c955a11f1799f655a8c4edb3ac480a4cb6dd8f040762e378a5b64e6b', 16),
                    gmp_init('0x271aa91c478b2cd57abc94ba950d02d4b3b488efdecd712dd367b4386268f7c35c31da48ebb33b5cfc98eecd8eefb37d807dc52eedac44102f5b2d43423ef78f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6aeb7ab4ba56e45b88f614a5a3d89095351a4ccae95e3d96832d47debe9552308d78c4c5c1d2297c6122a6d767f7733950832f6e0b9df85d4c6af110b77b89b8', 16),
                    gmp_init('0x764d695897d7b0392de9b7ba7935186f280f26d594e29469dfd4ddf21161ba993c63b6aade008f756630c260193615f8921291035fa31f8880c7ec9e04a28e8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e9c5073ad86722dad9885627d99a14393db9492586335997f7b976026118de5a00376432ceab68e28ceb28fd0732234e0dda2d103e760625da8347e8652fff4', 16),
                    gmp_init('0x925fef883e65811c68ed7c78942732db8b9edc131286e69c4fca883ce7f9c2b9835361d7b44b2542d77b8ed3adb040c8eb8524be3f02d08869ffb7f0475d3e69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44823f42aa3eba1f9cda59d7e7a561d976e9614bc1f1ea7bc408a1d15b55b71d17b60971e9490745d0f821e56463d65c191eb0ef9c0730214f79ddc1e700f61d', 16),
                    gmp_init('0x29f56dc266d17a42629e383b6bdb9e9cfa3b1ea4997e8132fc16d961884c8f72c92eef3b5e98b3c209ee113b0e971b8b350c82d2243bfd4e9a62b13ac5694b78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x429ef85759e5097d2636cf4a5dbc2ee00b7705f07cc9c9a2043d3c5f6a4469e436951867d20051104a44b95be0b5fb3ad73c202aff47631140dbd4c005e53b9a', 16),
                    gmp_init('0x2beac73a5df8525ab15678620e8fa3223f7ffa70c86aaf6edee9b3bf7fed5adb5dd64c13175ccd468bef5b2a14e3cc535eab6d433ed5d05b2c39a6a2330fd6ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42f4d42d3e281072fc70f0cbe41e64852d8551f11965663f28f5fcd73288ca28bc4faa681684c37a86e6c2b3e00da446bf6ab68553f9df1056754f1614151f00', 16),
                    gmp_init('0x2696b0cab025f4757db815b1d6d58ab1f753dcdd1f5b3b47135a374613db23e62956581c9640017b8c6e8c4cb2acbfbeebb4078f581a46fe7f449b15af8a92ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a4a63818f55392079d1861f25f37b76b8c82519521ea765b7a9c4dae3b45ca100d89970c97da82bc707425e8ec4702694a54818d981e2d52124adcc708bf1a8', 16),
                    gmp_init('0xa01bf275b4a343681c1d7ea118b78c7ea97565013324be197c5227e36ca41b7920e70ee7bc2823ee4aa340ac5b8b70d65f0a8914e0d1d8dd03d1d382b518bb8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d452fa347dd9b6e0c4f29b577e1d6e4493ecf05218672f87f0f72d9f7dccac4744c8766bdde6dd466ec03e07f8156f480b37b9f831cfeec03917e39721261c8', 16),
                    gmp_init('0xb1637866927db16f2a86d7c696e503f1fe078831bc8cbd5012d759f14cf2f140b100502faddc34034aae55f27601fd01431161fb65f43e84a5fafbefeeadba4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78ccd63c887d4dabecc0a9fb1e5ac2b44c077b1f2d80cbb914970a750e46bf2f0d929b8ae0505155531c9f37479a34332534b99e740189caa64039de1f57836c', 16),
                    gmp_init('0xa2069b2a61c2acb865b2a962b239a9fb6862d44491ef464186f3f858dbf2c337dc5ba198b01f0d4ccdc27212e1c87abb85b8942aaf51fc8472ec6588257922e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90ed83ae17cdaa8637cc5429ebb965e997713172b97e4e7c615175c765f896cd54fd92c52601a6d4a831d4bbb59d167d14cea2c884dc09f1654c5ce86dfb175d', 16),
                    gmp_init('0xa5eee0b81e5c921a783d5ee550f444bd649b496673b4d4f2356229cadd70edb5ee47d367d3af21ebf3b2e9ed7689c5222337eef22032871753674eb5993ff858', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e757dc5aaeab4a398961aa436e9d235e4664648beccc1c3cc007a8b55b463619abe173e0f2abc06cd6e558d8b19bd8a2cab4ae3b28c58c6a2e9a76a0493c0bf', 16),
                    gmp_init('0x8500616e794e18dc90f6c9658fc9c8e079be00b6de06567ed178d0d11719a61e8df60e421603f43ce3873850caa2548c7cf4fbeef4c2460d57a957c7eea3c10d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x669f6541cbcf1a6dd5fad85bed6025c6bed1efaa7cb4cda376d92e0505163bd0b3b6fb6d4c0e7297bc8a44ce6df1f47fe23e0201bc91eb49f0199cdc8b547b58', 16),
                    gmp_init('0x34be5663ceeaadf6f33562846c0e126725aaa75a00e13f27fab6c60b69b2f55ce49a38fcfb14d556d3f6e22d0125a1568b67e3df7d619b13add2b16c46136c58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28f59c3e3a6cc2e7e62b8ea92a3e2adf9a51ac8979ae91faf729e04e55bd678f04ff0d9066a9c9aac2cc997a9b1b2279e328031496b6c47fbc4b6a76236c3ac3', 16),
                    gmp_init('0xa1748bde9e87131da95949a944f9a127fb6298fd05f4b794ff2740746da379b8e666c17ea21229810f50e59ae7a3b670d9a9dc1091e6b7f18ee2162ca8b93f58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b4f19f27f4dfac3d523831ee92b961a224646b57183efc872a1c8cb4c8c26897233f4f3bf21152ef353bd65985b8360ae27104803c4d07b882aa277f6b0e2e', 16),
                    gmp_init('0x92a4fafcc264bebc165ac9bcba23f93200261a093e9ef27fe30579b04f19b82f62090f2b0eb98e322baaab969624f93f0fed4b0e9d4adb75e393715114448c85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b6f16a56453a78bdeea9b96e4a50558d03a4b6ce8bcf5e6d02d9e6805d6f15fe35aea809b5e7777a15e8864aaa7354051a42b964e871a8b8e9ba6119a862f0e', 16),
                    gmp_init('0x3a5c03daccc18010970de2e4b0b9cbe039e202a0057eb08fbb321bbb61f79027e98a7ec8e46d329544e96ec94a400c1fb82758c56b2e783fd0d1bb619d31850b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5c738cebacbc95b3a907ec930808e39dd61f5a8559e6f3badab91e9abb676de7222acf0017f22651a09f62b8dc1f00599a4d41e9ca21cf1faed5284a72504995', 16),
                    gmp_init('0x4e453ba99e6a02d6939b5ac12129fea076221b43808e4452b4428aeff89a1aef7bf749bbcc5cde5c787275e968ca084c2cc95b42ee337e0f5bfe0643b1c6d868', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2657ed605ad27eb4e58f9c7a7e8e49f74a59484bd157880566f7db8a2b69c291d5b0d45c80f45010da75b07c7caac4b78ca6ff2aca5b1d8fa90c017c1e4362cc', 16),
                    gmp_init('0x287de39febd89f06320d5df5adedf406ff3f7918423fc0ab2dec3ff9ffded6c3d671bdf9e05ddeba51114834d80aabd95920fc5c6e9b74d03b6fc1a841a5ca7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b8cdc75cd676f3004049d85af27ae6cbfeda40576cc0d705d8ba080d08035a88b918ec394eb8858ccb99d2ca232a175310a012faae0247107ff5b1f52a2c896', 16),
                    gmp_init('0x78af855467a70eb1ab235818a58ac88107cb64bf3e5e4a3ef1f5b7302b0f20a00570f06ce80d592ec215eacc5b023660cf73f5b1a966954804a37d29b7980986', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7452dfb746ab686258de93133ef35ab35a7b5a4ac359b2c01e722a3e2b6139e2523a896d5ad9779c09d8100b7ac81ddc8f2087bda06104e48105986113e0ae90', 16),
                    gmp_init('0x56ecbf722feab42b8f2c437f3376e160a6c2660f76a3d835ce82a3822fa55c994bc26231c168c29a082e2917297fe95aaae789d2b3a510220aa67786c8d2015e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x505642e0941413773ce545ea849a9e561f753b3e8cdb13e096067858333ba32739a36e98c11e949de46903524d8bd3ba6e532551b4924dfb4444c771d6d1254', 16),
                    gmp_init('0x1821027e47f969123858af213c8487b9367a6d66252413825e3404b51cd201524f118d1a48495e48dea479821f22a6977100ddf08f9b1a5d59f4f1f14e84da90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16fc0fb4d122d0afcb785cdd285afd2c474b8f973106633199208d8f8272190eb02c8027800d5060ce1eafe8b138fbb9020b0312f40c28ece00b3df9c2b5f7e2', 16),
                    gmp_init('0x129a01529252ac2c0984a422408b8e1eb94a4039fadf1ee8cfcbc1f724cc4876ace4a4866dfee74ce4efa67d2c1171866631cb67069aee6ef0d98b2de01c40f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6074fc199b3cdd963fbcd833d1aed9ee011fa28b4568b154e3eaf12f1012fd7877b575aefff224bdadb851b12320ece074d526366f425cb5d455148b0f767d81', 16),
                    gmp_init('0x632ed563f231de229cfa58361fd6d1a170c7406a4425323ab18038156cfb81014c92f41adc648f09573632c279057ae1d858b4945df40a9c827e56628978f8f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ee6c07716e4475a396ad062b3f0383377dfed804769799a6125a6f3a9c03a4f0b5de4466c009c2a87e363fcdd0a138d16852c7458f1fa822b662947a34a06f2', 16),
                    gmp_init('0x7bd250fdcfe3932458707430dae16670c8a22de04a8d99892971ccfb6dfa62dfbc86a5bde004f1bed27984dfc0b0b229c1818b0e87d13f6672ab0423bcdbaf49', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x803f076b2977a593e6a5b7981e7635b0f711d14689d6c9f2fd2ec511a1c5428b579ce4a1aec5f6626ede13218f928b67192ba1e8688d51a2a7bf47977763c786', 16),
                    gmp_init('0x6f09ad4b691efd95cae51575b4e4c703b77a15de08e4c40043374d9cbcf5c5bdf59d146d18c6b97131cfaa476e334ce89bc79c0545097eca57ce8885a6953bd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39bb642d10a9621efd8d53a5e88dfc7ab81c33e1c28ceee2ba96a9df754a5c4ffedf516fbd82a5749829c2b40f27f73d6a99cde2a44c14bc07e06d317f86878e', 16),
                    gmp_init('0x8c216fc57940bf941941121b125cdd7461a5275bfe3cdd5633ff672fabc0b8450714c6db0537d09aefb7445aff33ffce25992cea568a7609ae890accb79142bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x997eeb9c3d01562e12f3fdde181d3f11de4699d97ad0a40d4b9b0fa955d9de187a33dad9d4b11699995c0ad19dd988f365a62ac40cde2ab7343ec53e57c0dcf', 16),
                    gmp_init('0x79e5160d8ca262dda5ebead23e60b3d710f0c52e3ec7668eba4d1141ac0ace762296b78f5c9fb310d4b941b91641a503e71f22684c8e87fbc44473b85d2ae2ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52c9203e7bb690a7c41fbd78d8a12075f4128e9d187a731a77b4efce2ed6db23015d25e40fd1fc530d2976ae66b50b8c1d5ff32a4098c6765242434e1228beb4', 16),
                    gmp_init('0x4e16ad230477b5acc751a1aa24536a3f23b379ce352e7c5168eb81f25446af845066a19f91027b9dbd505f25caddc7bb0988d9c83a43f9b378c2fc0f1c6e4c28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18f3587c00a9eb01bdd671079cbfa749e0fdb636572f3dc9e66bcbef04f46854c2bbcaa511989439ebe685a68e1b74e3917b04721d840e3c90e40614a4453efe', 16),
                    gmp_init('0x45f0008e8e45a7e79378ba2047e73e7b41cd2e8828ca93518fed3c9dd9516bb73ae692c89de8b626df706fbffa52a630ccfc7f7c9e0842c8cbefe60dba44cd2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4efe72facef007dd64c9c00f78a6dcc92b2fdfe0dbb7cc18804db0b9da91ecf230553b05f5524befbbc312a38739fbfffcb4355cae34538d58fb3499e7620acb', 16),
                    gmp_init('0x1d0bdf7ea382cde384f55edff614c2aab9db9f0249066738b0b0d03f614b4556f983ee226314dd9b70afca5598d3b7d8d67399f3ae01fcb56ef43dc87ff222c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x953d5c4f6c17df18f79b70adde39ea689c2db5d342ea94c378cb47f8d3dd8160ea479db026235678567de2fdc389289d2864baf2265693b49b68635889f2b6a6', 16),
                    gmp_init('0x31df6da7e9915a49d75cdf9378ad69734344429f1245cff14ed366d8849fa8fd15423fa48c73a3af620b265fe06b28380f5fc664a6a6275b3ca52f920ee5110c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x85e8cda215833687a6288776c7c1c5e99083118201c264a10e329d1feb6a48bc64e4937bc361b7d2e759f66c8ffb285148b136fd086f974b3f98f140335cf00a', 16),
                    gmp_init('0x1df2bc8de60b3ca99e74031705c44a0e31212af35d9c2d67f7443c08cd34eab1698480fde4e577ee170f57c979caffd929fadf604ca1d2f5b1076a400553c8bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa25e4cc163e3f031132fd86883ce0b48867b2feb250c0de85ff0d32f83caf1d6298e0a6a9ec4bcd449a38470d9af4d6fea187273555905ab55c02ef6f3c4dd21', 16),
                    gmp_init('0x10b8159ad731bb63c4adb45cae46ffac5b0878043cb8c77f9ead930ee97659241cb8d0377409057799f670f052e7c3ea5cb7f37a54f1d8ecb6d5aea0d63d229a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x33363acffa60cc0ea5267173ecf6e544cc19d49a3859fed8b9f952408934e7b6dc165d21308d2947cbe33d6251bf1b680202d1afd6e78730c991865c8de4052b', 16),
                    gmp_init('0x9db665ba873e98c50e410d841612f584b433c46140233d57268a932fe77237608a39f3255f0ada2a68dc278a9326c3a01f4587c64d7a0a9f0481a349e8ecf745', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35ba7f66398114ba04c6c0788e81d5c08970b405c7c7aa5adec18b7d70d61db32f6cb43a3dd17b3e820959e61a7f6a33f7f06fc7a86d12d0a3e03b3749aae88d', 16),
                    gmp_init('0x692803c60c41bbc75bcc2d5ec26f5457332a6af87a40ed869f70babffb44052398d172503a215052e90b81cf1910c272825b7d02e3904d5788d0963a1cea80ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f66478a1990edbb33c4cf63836cba796221c390372929e1e113fd93861ca5e3158da0188f94827371398e107dc193d6ba32e8a10f7b98b27a9f94c9e4a1986e', 16),
                    gmp_init('0x9e87e925ea71fe406a9b84f787ee4c394e3309ad17bb81adf40d24e430dfcd47c22a847e927dc158f4284757cc94e6f5cc7e993f183f25b60af9df4a36c104db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5cdae5ed8f6c3c69ea5606c6a71e83e68587fb51673d12a93082146f62630cd3a0b95877f1e4d458f10cf7c49e2e34175cd83c823ba8b2609a78e96057aef60', 16),
                    gmp_init('0x1c94eddb1b3ce70cba914eed11279b15b1d8e8768c7cda57ead91da37ae6defcdce6eddaebca48a6ab9d4b4b234bc889bcd9a508e7ffca7022b3927e175dbd9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbc44a06422b5c7779b4c6fb895e5ef1d18c8e4809dfa599de8f53b6210776c76b5694585db5980c74c6288d5211fab0339007677fc442d79de4488763ba190f', 16),
                    gmp_init('0x72c0cc14b722ba2aa25296925544646ec617ae364ce9e948e1de752d67932018801d0fe4f012aef4b62bd81839cfd16a20ffb0e342852343b7c486ab42616454', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cae4b8852ac62205b5f6509f489b8d2a8b35b221bb322baa390061f955879e4671e1e2115c9bfad9546c6745ce9952e817b2bb7acab659ec60b055ed4b6ebf0', 16),
                    gmp_init('0x1fb0f2db83d482268ca47947038c33f5cbbbc658f9f9900592571433e0f52c6dbfac23e73e33b3e148b3a23722c3da5a02c93db561da5a7cae8e5d603a3d9e44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x238b6c54558f3d1c68e7e75834feddbdee5a4c5f0f159dc9cb8098ece9a6446f571065ff49497e41d1fbdcfbe3e9918188352629e398113f1043acd1fbcde3b7', 16),
                    gmp_init('0x41c6ba92c33fd87ed4a81df1d7769dd73506334bd8e6ea6a9c4a725786500c321b98cf6c3ee9d1540f9480c3ec39ae416488ea4921f0271d3f2ee8f58f774481', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a8c8f7f593c92c6e9dd20387735d14b2945d3132f38083a7deed1688facdbdfc1870bbba58f82c3145c946cd05cf692e387c1a446d7d430861e15d1950574a4', 16),
                    gmp_init('0x574a645be0502a302347a8a2f8149ae77fc5ac853577000931a59b8b3fa168131e965f533062ef58002145e818e8035af6a9c877e3c5d8d417f8a0f126a34617', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x603694ea84ac3988fa8cb80ce9143aeb3bd542bfa033ba7b821bee57ce6879cd247ff8a3291f3ef7724b26b86cebedd2169e1bd171c4d04e884c5863b6e9375d', 16),
                    gmp_init('0x7ef453a1c6936489a7e6c6f0dfb4560cf322c11d4663bab78c18877385febca782a1cc8496c2fd974d09bd837eb71dca8379cf87eb3eea7c0380c99f727c8e90', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47a9af36968fd49096e443f66a71ac92be4922aa1ac379f5bbbcd39bb070fdaec8ecb1768d60234311a985dfd875140ca98c52bfad3b185cbfcc1eee74506f30', 16),
                    gmp_init('0x44ba18716fe679cf4d31cbe74f0508e645d2e7c5fed56adde107d5dd7e5de5ed627de4d6ae0c40c1adb1ff2d79dbf7e292e57b605898e42b6919484220b95c53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fdf04b305a7f498f160cc6a175402f3ebbd0eb37037c9797d7f785bbf43e4b90c64f55d4cdae2cbd36108d958e7dbc57a24da1779cdec626a349aa821099a7d', 16),
                    gmp_init('0x3ed1c4f485923a3dccd265804059485a1c46dd38335b74e206617af805e1288c2e9c3d140b4858d16f3be1e71f030c1b2d5447192fdb2393f585ba88e37706af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5abe0a27abaa3ad58f78f1bff4548cc3517d9c0a7cf907945cabe4b80deda44b8d17316c56242818aea397c0fc118f69aa2aab57c91e23d9cb74387129ad64fa', 16),
                    gmp_init('0x58f04bbf9708a948e3660776b53210b45be8f863f7f4b6b8cef6f0c4af92c0f699ba750b533cf1ad0450258e1dffd811915a01aad9bf760538d8a614d0d2b450', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d4e9c07ff2d70d0293de0fca27eaa98a55c8aa42a8d02304cc22f7d2f10d0f595dedccd4b1bf56ba5dbcd497a53189c9e71b9164204ead76409b379bb101ddb', 16),
                    gmp_init('0x5522733d5061cf44be001d8b7b4a801934361f629b7911b764e3c3534fb2a66306062503acf98ae46c512b85e496d5c5c74728b61e221474599f46c9c9ef9557', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x68c1cc8a2814c34f8d6d5fd9a71f5524ed25fd8b6b38426b777246f83e3f310cfea78e61c10bc4e9c14e1b86f1234198f21f57ddac6ebd213d41c00cb2286588', 16),
                    gmp_init('0x3d8dc63f138c920fdf064409d5fb3509dbadcce0973b6c7bde17ac6962c5a880467dbf47cb9f79921041bb9a1eb90332f8bf9fc253e72ebca70565dea819445d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5489db617a45099c0479801c15e6828a32c6f58fce34d987fc9c2aec3a0d4c561302e2dfafbf62980c84b5a948dee7469af2303f49c2937ee89d482dc36852a0', 16),
                    gmp_init('0x3dc6b798c2df858e719696e53691a1c908e97183743797dc065d19ae53e61d17019757d68c6e5ff09666b0c447af6a2d66564e8de8e74de9673cd55adfcf32df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b580cd1a205f16a68a9887cad9ad4767a96e94092a35f214214c5382706889970f6b413e2981a8264d7341022a7aafb3a6192a4188038a01a0a04be0b957c32', 16),
                    gmp_init('0x9e421531b48f6e8fe3c8fc243dfa36450ede730921b26146702f7e0f72b088146b049b8f5f53fb457717290f9f2677a97a38e3190ef2cfc5d2a4a0000e18e220', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10730e3a24b17339e70f3535f845243b1e456177fa6be8f88de20f2856ae86f0c60f3a55c0b13c3a8e86c9199d96c72ede702e60d5c794fb11f17fec5a35f2fc', 16),
                    gmp_init('0x58688b241daf4dd2048a105051c172c136965283d7d383a21a5e17e024f7c38cc2f629d933d4afd98fc93c573d798b0cd65395d9684067605cc98402c9c27b13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d509dd996194bdb3004831d5ca86e7c7dc8db0366fa924ce8c85adbb426189ea93caffd79a3b8e24a4f53bb0031e410c102cf4e5f2b56389f364a3f89be07a7', 16),
                    gmp_init('0x9712d7e5e99999201e3d9a9084dacc7ca4bb751d483e1616ed7bddc00f8a9c6b8103949799306aa2833c2339887f56ec143ee7de17a603cdd3f04282b0c8e28b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64fff9a3553a9c9d5970b4ebb1a65a0b29cf2d30f6b8dcd5867278bef26774526ae415dc2eb18d632e77c0f722c550ac7bd0b800865dc7c0725af0efbc6acec7', 16),
                    gmp_init('0x599cc2351eeaa51ef90a401b5b0563c179b85311da7baaa0ae17708361a4ac393d01287f548c3f21543d383692fabf36c9153e4698abdc124401e621ff7aea95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72a95070d4c22ecccf660c87fbbad49191e9baf1421b8581e912023dda0804e6c258579b9a0035c3693f2dfc8bfd511b3efc03049024a5abc5855cfc19e2151c', 16),
                    gmp_init('0x560a763d7e667a54b0d4caac7a1c6d9253ebe3a877d88e70c699ac45546e0bcd978f189c277730ddbd3800dad67fc021de268c46a23b5f2fa961fa576bb390d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x797a01068ac224c36244dd13528f3a523646f92fd74f24fa183875d0c280161ed0f9f1175af208da3a8a11a3eed47e13223dea975eb17b126c0536bf83b1ee37', 16),
                    gmp_init('0xaaa2d9ec97f351bccc622603790d697c464f3251f1b546db4dc374c3b0b83a21c6400cb9e0d777e90de9d8383c75748185e915fe035f83bb2a54c3a38fb79f4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92097078513f58d85196d55d42332071bedc8635bbe2694aba0961441cf5bd8ed2e3a862702f33a4a1ccf0444a184033e9f4e32e71559b55b7ce8e1ce12a57dd', 16),
                    gmp_init('0x7bbba1daf6291f7d1480265807094dcc9263b640ba5e7eda46371426efe4c191349e49935ebc29d03fbb10ef0b4830ff3d3d74fd3727d5ccb4ce30d8ae45656a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x389fc1a6f669fa4105d393b8185595eca06b0bc011f74babc6ccc4047d2f45d6425cab0e81710cdc462362c48d54d2248490b4766eb50e05de1087993b3a779', 16),
                    gmp_init('0x89409a6819c17cafdd64502011648ba53c3f2b508ed74ecce5c054d88f93fe6992fcaeb245b64f51883c6117b611b067eb2eb33554e06261623dddb1374d8089', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbaa903e4c04483176727ab5273a16999162a6cd66c5d8bce815c695511813705e4c4091ab1153154c7b4d07bd65f3b5bdad4808a4799afb37bdcf9b90311a65', 16),
                    gmp_init('0x5715c518e223dca87a89cb753380cebb7c4024a80330f25fa258e0a4ebcaa876e115a73abe2cdce0025a1e78639a77d45f332f706ad5f53b76e5986c46fb626c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a8824ccde399404ae7698cb709866163008b89fdaecc3ea3fe2aef31cca1c08bb5565ef7d5fa4466ef2541bdbaa5a954cadc5692153c3dd5c1d3f00a54ce775', 16),
                    gmp_init('0x457246acdac00ec43fc5d3f4339ec4eb83579383a7519f6b49198f4c299163b15c3410a6e92e3bfdb7cff9436103130351dcdc84af2576dc4ac211a9a299a838', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97f712771aefb43bebb4fe37b6505ff41f262dcfbeb0ad7ff611a71312bb4d9854091fa093cc92287dea27e0b74cffb5b4231f0cd65df3c80e229a70d3274a50', 16),
                    gmp_init('0x5a96b597df08d7336b50fc2e21d92970d5ccf37a6fa0d4f3ad1809e15e53987413537182240e9f6411c90d556dc0cb7b3aa602906c8c7dae83c37ee45e8a3747', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1df7d774ee4aa84e81d07c7f4d50f6dc05f6bb00dcf67a6a130157645560d7d4450b08339597be1e2eaa0b2bd1f8e4edbd69399338006f182c4b8e2d3062d249', 16),
                    gmp_init('0x89fcb54209530ff86656eaafca21f03a9d200723a75b457b9b8342dc5b5ca0447f4dd7f5e1de76c7e7a69ae634d50bdf9e19e2a74d16fa2811e2c389ea200533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x202b368a473835476dc156c3a02bb17d5bac626979c971630c4742c8332ff4a0bc2db1d756a9c25db930b74cf79c1e4c55a8a7172e5862e00ac7024a948e260e', 16),
                    gmp_init('0x8045158f61f37c0bb935a0ed5b03a1697c7eb5fabec57944ba9f7494c26c18479474a9b60fc4deb10c8a748da6e8b15228d0e311756da5b4cf343012fc3b72e0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4c15f64d72ff7b48287bea857cc9248cbb9d59945043775d46d59366fa75bb7045f3a2577f90b7234378cf4e7213915cb3aadc0bf984738170a1bd7289147f54', 16),
                    gmp_init('0x8f2c8a4b2f8f3a98287e7d6431dda0cbd4b08ca4c7af374afa9398c78b6303769bc9031724794a544694ca1ecba0cb66a80c78b86fd4d42791b82c1be9846349', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x500c20ae0b6152dd74cc7a65e5dea8d80a9ec04912e70e5572d0faf8b4324b27b92d599c1108212d0f1adff602c02287ef539ee6357deb5d84fbe36accf9ce9d', 16),
                    gmp_init('0x6add8c78f00cd1d2a784dac7f400b42c599d74aa401c6e17e6ec51a56acfe16ca00617e2634f2d7b4df9651c12dfc2f69f00df65a33fba89a1e0e7da8636b2ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b66a308fdf55bc0e1f4119544355292a763683c58a3324477b4aad95b44242d95464f2fce3309108c8fe3918c39dedfb4868bd1c5704da8f20953fd6f2d3c87', 16),
                    gmp_init('0x31f4d40c43ba6e91a9a657894a0be122eb108fcbe4774ff7f9cd1fcc5c6564c6a98b2981278d03110d3edc01c45fd84091316195405447c41cc634c84196e5dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64ca6ad58769e202b48c9822a60ee7508132b0d96c0fe72c543a60e48498fa05950a6cd141923013ffb16d58e82b9a9633488d9d6005f0ab2f2cbfa0d609d0d9', 16),
                    gmp_init('0x5ac52d0ee7a1d8448a9fd6a171d0def02e3d1fb6115ff5d6320b40e523a2305880b3e7fd02d2073f1ff5d4d9511a403b4b2563e3cf0da865f56816ec901406d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21c8e7c35e7b1865f5f45894487ab9c97557c43c69ff3333476ca923e18ea99a73dd082a0b92733c9c79614fd6bcd87e5e406214c60249efe1e3e5363b2f870', 16),
                    gmp_init('0x86dfc555e02fc560b245e77b208b5c67b58f7ab1f247485f59321ec37397bb3720d3f93391ccc98f8757ed73f2b762dd8261df92ff3f18dc871a76ee9e4a344d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d3ecb071b7d308658d2cf9a1ae7d80dfe1cb5ac728bafa712ee020b615c7778f4ab2d1b661470e458035af18fb8d5ed00ae4d43d67159e64a39dd1beecece0c', 16),
                    gmp_init('0x7aef230be8b8fbb483b343bdb8f88ef66b136c3df4c2e4c8d7c6b9da81e8acbce3d2a0d760d018de74d2598087ba765a5adee00a45e034dd268e9568cc3280d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81e13fe0016a2652fdd81b0bea9167f00cc3147706e8b8d0247caf2e3cd309f9bf7b6dd375a6a0825df5b3ed3a5acf4d2d3d2d9ac00928b3a8e73938c1f6bda0', 16),
                    gmp_init('0x2e00223ccb0e3b47eec7db496db8586e1b3cfba438208cce5e842554bb33455c031be1f8fdffa52320d259a31541536e75799801d94e59104e6c3e42430e6600', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81c55762110ddb709943545f680b81422f25a4dff9e8d2f463a3a935b7767174470d281feca6a14d14c3f0ebc95257ff83af4bcc85be61b9a0bc607152f41d17', 16),
                    gmp_init('0x3eb2f4bb37dd5a45a361b46b33f7928d7f2c68dd1292dfa8f54be6c1e2dc9261a7853016bcbe553ac0da5d077419a8191bdef11562aeea0f8ff88b50c10aba36', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x696234950cfa1b4b22192190e808e364d086ce0e0b6c20fe6ea886e257cd93cfaee4a2df964b9ce4236582c4336af9bd5445d910482ef949ab761789d76bc38e', 16),
                    gmp_init('0x48a904b9042e8cb8bc9da593af4fbb8583037aab199695e287c2324b46e9722c7755e1e84ad734fe482d827168cb62f09757143df9e0e0744700ce3172e18a15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e6bffea437b5b21ca5af05010b10cd4fd17b80f698b8fe96a2786378d090dbf93cb164188c857a285369794cd8b9fe00791186ee4f9de2ed919e38ec56e65c', 16),
                    gmp_init('0x1e7457b7f470a2d065db3608ace81f048fb3bc3b702a81956488703bb8ce743c75fbeccc10c396759ea16020b3fb98d95e3c9db6c8a4cf990c53dd006828403e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d880d373cf24b7c62b7b50ca408a42ec3c22a542ece241a6dd7a2486de010dd0243332f075aad8e39fb8926b0b674f1c762db1cb26ac97bfe7164bd280e924b', 16),
                    gmp_init('0x2e6b0f622d430d849ed8cb07bc6a15df95939179097ae039995eca99d3bfc80aa9e3fdc05da8f1e940400acc86cce470e361624addbc85d715592f8dbb5f201c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa837bc756c52163c7c231ef8316a95927ec0e23b34e177c42c2afb7ba846e8e139e2463225b4e3a6bba58ebc052507e0f36746c0247fdf40c76601e63c90c507', 16),
                    gmp_init('0x639c5d3899e536c5f70ee3ea47ca9db8593c732d49109e0143266ebc01179f43eb2984077119068a457ee859d01824edfbf6da0b11ce33cb8bc6e084ca60894a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55362e4ff293d4213a19c931efed78f42b0e9fb2c85f7042b1f79473d449ce1819606e21fc56f078cd2380a06d4e629399f5a2b7d7e9f30d63d2918206f04268', 16),
                    gmp_init('0x4685918bb4ec0bf1b4328bc527e3f6cd18d5311a6a2c72b3cb05559c372d4894af30ca64acb7f03f5337b0e374bc37c1c19a52ac333bdf47ff77dd400b43c8e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e942768830767830df7b8caf0176ecacb8bfc8b67abd5d37e7de5ea64d29d6e32bb9d6f72ceb3778880228923b3c46f84f0bff66a3002a573b2a6787c50d680', 16),
                    gmp_init('0x2c6cea88385054c8d4c00e6f9718ee26dcc9164557d606f48f113b06cab26055db2923240b6ec4dd10bfc7191999a79ca80d784baa249107e24f5613d975c97f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56868e278cf31fe9b2e97f09e1443053b7b5127ffded892a6047b03bf9ef286be445127ffacf0d659a42bb4e0d47464a999d301c9f8357757644e86c1c7b403b', 16),
                    gmp_init('0x68c628ecc03d2c7ac51766bf7fabc3095666b9160f409d58e866d4006f15cbd45f10e60187bca5a17aebcd71efc04cbb70f663594ae722c2681694f227e7602', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa39fb52963dbbb843c00f8c5d6cded81ec06f9c6f976af64789130839a6b3b3a17031eb0ae141a12442696f9b4155141055674229eeeedd5d79115f936176dff', 16),
                    gmp_init('0x2723dd313d592e1d7faceb06a255cff886a0358a4a3f5a0da711043730b4be7dff5227c86b206ef2a86445d7765b0ffae5f84f5c1671c01a0f690566a7be4c21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ea849756353c71fb6eb11330c42cba415e96ab9c91aa05b991fddc37da0a0e79c832246eabc9f9181b001ba97ca7217279cf0ed279fdef26b0e058e03d5a2f9', 16),
                    gmp_init('0x3c53a2cc1c5817535965dd4cc00241b225abbbd0e67fbc2e40dac53a410a1fd82cbee4e855cafa34ee21305a7d63f729f273b0340a412f74f818727f18888b7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8268c7e0c1fad55f6590a5f2e9bce7b88c2e6596d1618fc2ba84411aa8e060e4ba40368f73cc149cd73268fbcde67ec10cf1fc990a723906553b9de4eacaf21d', 16),
                    gmp_init('0x99f5e05b691bf0feb6c260741ae8248c98aa7a7da0e9155bd9fdb13328e904dc0418eb01030c76c48c9d991676181fac71174664b67203dfb147c323695db2ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c7a3b49a26a09e26690fbee9eb307320ff9394ef0f79a0e92992a89429046d1418448c7d85c78ae455e82190263e6c2a445220c7df80207795c0974d77e7df4', 16),
                    gmp_init('0x67f7296b2d6faa21e0f949879430d4660eb3e1d7a27060e206ad0ebf87f79c60cee909607e7c6af9eae4174a9d4268efd0502f3017d0bc3a94aab07f6a0839fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x183b8eb59d446b1df81e98a5940429271d8a74e99f66b25e8dbcf4cff3655dd202d5bc370bc17518b1618916642900b382482ed5cbf19b75c986acc02a66b352', 16),
                    gmp_init('0x42857cdf612e4aa103eb1696ecdf8c74c5844b7f24d6dccfb7d9b65323b2babc445d598370ea6b31b6703ae928fa15f02fc9899fce78d4fef982927ad6428604', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fa747c591faa495e4b3b5de1dec74b6b868ff6dd89f980114d6c3e485eae8b69c8b5f9929ece74838c90e4675625a520923ca57525ae5e9e49a64434b6ffaf9', 16),
                    gmp_init('0x1fd935eb883d4f80cec3835d3f73ed377f5f6f06eaf4a95eaa4db40c6e98c3cde9801e825c611e3fa5da6e51ee6b0a88102a9f503e970790ee0c621d66e25695', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9adc4a90ad225e960a7b987603f1f481e8bb00ae1759237a4dfc2b7d0075e82bcec367dba1d8c59eede670c3d13e41e34a9e8d81db28d316a7d09c0f6d9affe4', 16),
                    gmp_init('0x25a463434b9cd9abea4985b0e3016e5343906ff8b8a2c70a7f3dfbff127e5cc4eb2945e5aefa11c365f9f1e54273a7c86e610ed434e7ca1ab87d6638e349c75e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b62a8bd9de5da478930638cd2f6b1ee5124c148098bcea1b64446ea03a120c39d578c6dfd74eced01d7f04f42b12c7dd1bd655de29f72c29cd87f70a1b590af', 16),
                    gmp_init('0x45884c78cf3e68c84044c3d38afa6565ec75d5e6a831e1139306d7dd2b8b810142aba7c68aa1eb5c66a685b83d1cd704768fb9e602b53a5ba45da535eeacb43d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89b831852b3446db6c5cdd4335c74cdff45fa8aee6967aad2ef6129d5193bc91e3f621c24287a568f842cfeb7eb5769b4fcdd2b00f1598b5d2f39fba9a81b7b1', 16),
                    gmp_init('0x2fbdc7524738b0a3cd1d79af12765ec0921509d2cd0d630b6ad08f8ba1ddb29befc904576a8731943503c4a22528ae0e5b1aaa4ff4ab15942190a55fa5a7d6f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7000a7276591b51cf2a3529ba70a8734957f64012a88f38e2ef6c79ba51113ae26084e59edf533ff51c4d263f73b12d31c74af3e29749c440b1636c92bc0ccee', 16),
                    gmp_init('0x9f343d086e2bf0014f3dfb72aabf0d331e93f3baaadba2e40718ab7711b6220d74d99fa4374e0cd59d2f71be2b9ef3759e28cb06a7984734234a8ed23affecf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fc4ef7174e8de71a5093381373d9791b23dca1d8632d8aafe266128d19cce34b9f21f89db6b86abdbf38a0ded56280024921451bba29bd238dec9b0813279cd', 16),
                    gmp_init('0xc48c14e61b09b6f08f04754810e23d79d51b7798a1692d3529e9ec42e023a3de79226f0f7f4f20119852290db4f3ca8dfa70fd91b8788f2784a83ba6a54404a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x986b27c3cbbd39086553564fbf1c0cfd540fc3dfb197c727c515311ee5410c6b1700e1b6d0982db7dcf5efddd8352212e68b55d846b32766cbf11015c626eb92', 16),
                    gmp_init('0x8a289f9b90f5adce710acf4f0db5cba2759ce4826f420032e3bf0480d90f759289a98fe806e9a462411a896ad1930e55066c6b5b41747515a02bf3283842c572', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41e1fe8f03e64f899098cbf7a57d701db8d7124308e0cd6a38564cc80cb09e32f2f75bcfa2b59bc205b355481e77797bc16f7330393c797b7db8c7d71046b69', 16),
                    gmp_init('0x8a6b14b9fb0dc6616b5f16c371b46e1110370ad2488c73ba7a679df1d84200b6046c33ff10cef816db4566bc09d37be67c6d54568c787ef9935261ae7c44e1b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c4e9cf50036ae36069d83a12aeff8352a89b6b91e4a845dfeb23a25183fd13757c0b5c393765144fb06000452e80e2291a35183450bb8617ad340b7e96691d5', 16),
                    gmp_init('0xf2820ac53c65ef864d571b4c8c61fd4234ff70af53be855e33eebf2bc6ac9f5aea7e2f8a8c0d8354d59bf25bab3b8f6802afde28052c2f5b8a281c220252952', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91bbe7285eecf256b32158b5390d2fe36315871c1530c77b4af4bfb6a18fe8b7a2ce9a296fdeb6ff399aebeadf94832375c252cc43ab13122f533801def9dfaa', 16),
                    gmp_init('0x970347e9461e3587c95176f632ad2b547078cb0f4c98f4ad8cbd1d71ed24b8836de3486ef2c1e4a3f820cc387c3d0d9f3e782496a8be0dce6e8f7a8aede35a75', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x33dd850edb993c0315e4aab748a2cd8fcd6e8a323dfef840773a500f4ca085a7df77fbefe36f975cf8252e2cdc797eb58399bbddcab8a2e7ea603207e547e52c', 16),
                    gmp_init('0x626cd31ec2c8ba3a78f584260d3e9add788770da4a41c21df7652e7e34b2f60993764cf1b51652b12d7e9dc92d9912bd62fab5e73154a92f836f670a7f46c023', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f95d9575ea6033b9a30fd2077fb8cbe459bf49d0f42fae0c1c4f9cff2db022294ba5b373478c85cda0a704d5cdb12f32e599b467011139d49a29dc84442bd35', 16),
                    gmp_init('0x28e55c0198d394ac3f1d4ea39a697af368ee47f9cc20641db07147f213164576b09b6f870920bc7a296d62d2943207ca7e0ecbbab1fef91feb64e0cca180a267', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43f51bde32f42ff55d21d0124b0ec5779f4de3605bad6776487052c705fefd147d3c52d07b516ab74beee9d092ddfaa4bdffb58a302cb543b92bd9cbf05c81c7', 16),
                    gmp_init('0x586eb9f588dc52b54e6c81520c96cc70f458ee959152e58604621a73dca61d9fe207fa5e218db9f10bf9345f5d45a547815c2be4a6ca0e772b671b50b02faf2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f60ef44637fb86bfd7707297c66a5034286cf40a0bf0e0b65ca18fabb77e807db6ef6d0172ffe2762176a0f3628f7a00fb9b77a27cf6c6a5d3d7c74ae15597a', 16),
                    gmp_init('0x80ef53e0ce65dfaaf9672692980b70d66b13f55668f220347c6eef9c0407cc359bf6f14a747ec60161ed43d0138bc793e7aa074c96e32c603d4f0ad20b0cb9b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40916be2fe7dc461bf01e114bc25db778ff5109a9c7c870623c1452289a152594d6af9acd9e4109f0967d9b360b61e921e73b109eb2fc10451a0ca71f2349e92', 16),
                    gmp_init('0x5624574ba757da1759c85c5db67116f21a8936cf919ebea6e5378741b973403f28965532fc8aae3755f476245b53dbeaf104bac46aa3fd2f6ac759f7df423e89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc87ec81e9834285b2e5971544b11ed6baa77cd983e0313b1686936272db3223e533acafdbe9db0eed6cbb27117c3b62f230ec2b95e65748bf00e38b24843656', 16),
                    gmp_init('0x6434845a52aea9ba237ba597eecf1a9f039fc5dda2f220863fa135d7627ecb02d35326fbb4b62586349c39a49d9ca6f166b859148ddfdd5c0c74f9387e81325b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a1ebb332a0f2613d408203b6a2a0c4a10b6501b6546a8473735eb6cd068fe65d052804560598055434eda191d7ce3ff00f9fecfddd805dcd1e63cfe4b919460', 16),
                    gmp_init('0x2e5df73e526ce4b27676641140ed0e0420d24791f41b69c0d5ddbafd4628316665cbc92f573ddb6bfb7dd31641ec54007a0a0175380a90d47ad914de941c60a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77dafed1348a4850dac95207af4c8d0c451186e34f07f83fdd7a0b6888d5a67cde8bbf473695002027cda921c9ff9906b74955bae9e7a8cff08a9cac294acaf5', 16),
                    gmp_init('0x79858bcfc0e60de57266edbf261fc0371d36f3bfc9c8a4b01a7dff962ab8d002a22bb319ff69a9288b856d7fc5282aef56d0c52ad7a309c2a098f94daf32297', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cb0beec724c2d193199bceecd23b66ccef121995379ac0df2c26d018c4ac83eb7c2ec935b38fa5663303f3cb259fa593a2521928ec9acebc6a3737a7bd27459', 16),
                    gmp_init('0x51d768098c578d52af49a3a587534f5648a933b1b8f59a5b3d48c39849a0b9d2e62e9812c20429d1876de00a5fd393fbf38463666b83f28cb8c5710f76efa3fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1996494fe006e90d182d3d736fc31184a1130f9c888ebc3e54adac1a68f40f8e803162362c68b6b9920523574be7664ee5c05f13345549981baa43388df5e9d1', 16),
                    gmp_init('0x63f9316523fc517927a9f4abba04dd01d0d69c5bb17a63bcfd72dbc13c3614297826887688f28d2c910e19ec995676c4760026c0b5366679e87771f306e38619', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x179c9481ae90f5f08537b91ba2a3d965bc2c82f6119f4b7c58b182794139d12b00919a2cd586e86c9cb5552b5db34c90864263c8c5e48657069c9ff0bf41bf7d', 16),
                    gmp_init('0x7c088551e663b1691e7a75cf2ad52a18cddaa30bcea714378a082ac42a8d2672335a0b67bd8822666f6af74856e3f1c03adff74e478104fa8d20a44d53d4cadb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f895af0a5e49ac498fe1927f6853da020ecc8009584abbe35e8c2a981dd39ee8f505ce89741ca6f5a141d8be374ee19bfcbce7419cb2ba2af513e836da66355', 16),
                    gmp_init('0x75aa266fba4f4da6d3abf08ad9e669cc0ebc452c6cac7c4238a28ec6344b58d0d7fc24cf310785ee5921bcfb37f2dfa3855510e9c67c22d0bd32d4b93e152358', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x662c7f6334b5721d5b8e174d9e76f936880ac9c32303663dbe0519bef3b08c8de283b2296353499c2684e92a0b18867988ac11836fd72804ad60fcc873bacdee', 16),
                    gmp_init('0x35961b22774f85d0345229b96190b068c04778a26138cae0d20522ef1e09d18ef1a90be42626c9bbf1b8e11a286eb214e30022141b816ee56467fa5297d80c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fdaa124a11af2304a0329b1b7fa8da7c1c87045a583ebe9da3bb3773924094ceda9d19590f27a5d936948f9c090983d29b813550d99d4d91b0c856636b3eefb', 16),
                    gmp_init('0x11e892b213d1cab9e903244baed52affe8bdd838d4ba24f7b536aefd6c8ab109ee4cc6151d57e9d90f060a9cd76c3cce8b01975f7c8a8195986e7bda80626432', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e5ee325abb5cda2f82cb375574b539466f60ff3103c9fdc2e715785a50bc06004147fe46f5188db38062e47640cded8899e557d9202f0cc37c484557681320e', 16),
                    gmp_init('0x5cf1860a588b74dd3639d5d65e86b216213ff24c1545e55e9e5acae415479a342c36c0f5c4882b56de8a38e6a208c09e19c98eb99af104a7321ff082193c6581', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x24367e3971db47e0604dbd190f81b6a9a585175281f3aef63e8fa3bb93ea034a1343c719a47399b62312082ba44a97b13fd6a67ab6a748640c69232e09f01f0e', 16),
                    gmp_init('0x88f948f3d8ebf1a63a726f40a3b2996f8cbd7dabfd0ff731c447bbfbe09e5eb431c7bf9054050ec9c9ff540a4ee5e15ac8cd6a2bd4cd09353c3ea831ec9ba321', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3f03d644fa64543f98c29c375a95019d47bae5b693c8702fb63a0f4c1acb57b8cdf3893690010113af92ed42338cb49669106e5d7955e8492eea368795dedd', 16),
                    gmp_init('0x6e36335300b8fd89080ef72976d13479fb65d951b8c13ca79682a864ab44020008abb84c23255d0ad264d97ca5e3f56142079dd83684ec2dab0a1b209b723e81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3668ef3560b5046d7c493fc4a7559de88e84b4b8966967be81c070f119363264202fc4261aac5251a45c41e91700f35c70e2adbf1d0e0766559b55c99d05f9ab', 16),
                    gmp_init('0x2ab642f5bafa202e3c493d81ea769f46d65d19af8848e30141d0c334a5436d10bc34cde90879137e90a6035a19fff370089e0c0242ea7386b284f4d9b635b7a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f2b60fd67673b62e1fd2e2090c3c91806be192fb7ba64a71f3bb13e7784d61f16ec0e3a62f575ac5e014cf6690f54bc3169e32147aa4492a6d336d35334ad17', 16),
                    gmp_init('0x3c5f4f2045c8424e4f4607dcfe5ac1a17988d54e33370443b18ebc1947bd72b796326f6758e6fc1197f21af2b1a22c2735e72a9f4d9ebd430d54a0fedb87a827', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ca15c49fd2ea2d4cf114aa0bf5ab867f44be80bab65cef4d1aa570a9e2a0dcac1fb581dd8d7cfef9ba9cb62a32a60ba0febbd692e2a334c398b88bab498d522', 16),
                    gmp_init('0x6c5483731eceaa2f6f094fd900d43a122557dc2882206d3e27d56b054d3cc797ba1c6e6f15356c16c63f67287bc88f96db2ad2aa5fa362a3d3fd925e1b404c1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d5b808e85afbcc27966a2ae6191ab1faea82d3b1bc043984579c14e839472e40415e8c3a9f541f70122b894c8511819717aad50b2854ebe19680f8d41ec956d', 16),
                    gmp_init('0xa1e9592e288ebd06f68b3eda8156c1aa638e42afcb0b04db22082dc7ad37cf0beed153f9afe08f550e623a6efeda5709382f74318aa1e56e41c207cbb98b9dcd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x146a911045bf2e9059c7ea232a5440aa09aa45de29ba330135cefc29a9fbe18f809daedaf7956644bd5b6023b08f7c2098c6f331785c3487195643069e44dd13', 16),
                    gmp_init('0x1addb65a5607c2d0a84822747af009bc5c127214f510e1cd22a1cce51a6f5821d21b49010fcec9bfbcbc0058a9d836e81128ec6aa9f79ad8148c32c4d83879ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19829908f2a5f59ec17a9311762402ee3e2325c6876f3e130a58332cbb8df7b42897d1cdc71679073b1574b7f4560640ed9f0ff56959e7e6eee3d3c3dc3915d5', 16),
                    gmp_init('0x5adfad2ee0fa63b4fdaecfc742da8fc5560210bcfaa58a91e92a1fbe124a7f1423cd04b5193a58a797bd67eec038839e173bdbdd914a2e56dd2f6b54888d5bfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27c7b58e09816eda1a64fe6404e4ceb6cddc92707c9d91bb6c101c2e155f3e71211b30ed27f130ade1d25b1fc315dc935e8fefa5d0d8539cb86b5e821af923ee', 16),
                    gmp_init('0x55815922c06882cb88d9b622c5bba9f069838c3dd6628a98c4ebefd5f32d6faf3a4d2b957d9d1e7cd707bac6bf1dc823a76da66538dfd31138b4a336535ca34e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae752d09df571fbcccb8b201918d06d66b2fe60b757d7414302eff07efefeeca59f32a22d2516c9229950504d7e51392e434cc6fef82faa037a84aafb838b8f', 16),
                    gmp_init('0x1f19fa1905bd7152e456e90d9eb02e555ec623ad175443d3d8b9b236e4de0a6c6c50048b27420949541cf40499642f5fae3c299595a5772a6a30e958315d6713', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4389bc687aa52bff22b765104763c18514c597bf4f69aa1ed309861331248e5ae3ecc04edcf62cff1c1119a851990773ebdba0a9055dc8c4cc3593239ae72856', 16),
                    gmp_init('0x426973d6f838f39305b98cd4925576f369460958c8300c63f9042a0f65865fe3e169ee8250a7956450d92d790dff5fc8164d331be7cf4e682b1678c0e36c1fa9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x620b2a0c4d79077c1184d5abf8dbb26c5c2d5eda10994a6c7c3e2fd1984fe2b8e210507f126ffc315843bba0d5b3199dca1225cc60155ad765a2c6dc77a772ca', 16),
                    gmp_init('0x112eb9f5145c937b735f2a10a59ab665005fc5ae131dde7623ccc5bdf965151da0145dfac00e1ea64cf5f730f29cb664b130240a838c2680ffe74a8cb9b35d7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b9be8925bf6bfba80d18d0ca7354c274ca6fddb9305b1611a529caf09db391a0c38bf48c0611cdd1847370cef920b512515d1efaa2e926b728663259c9ee731', 16),
                    gmp_init('0xaf8e512cfbd457f667a59fc573eacd86118533e4bd694a6c36c39d1b5f534519879596d4c6b6008416c9d64f00a7490df9d78c1af8165183d5a1dd2e4f76e6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b696a88c132fe5349883843fdc01fc1b69d99d5c55f4c8ddadd3bceb8cf0be53b88a2f42f3a0a32018218a7da87d49a801ee9a1ab9b24b45d9dc8204b7115d6', 16),
                    gmp_init('0x48c0594e6d95b1e0f18b7b5421255445a38315efb4850a77fb9d555d334c09ccae56c8b022b37ff29ca099fcec2ee7678c408e78a90ab843e0820b22757c6f85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bd2ddf1be9e5ba334e7c1800e5c85829bc4d8e0f902054055582b74d96dd201a0e8d5380d81deeb4b347cb2fbb90a0f6cf56be61315a2b5eeb0c7a5099bd007', 16),
                    gmp_init('0x118699a4e4c2d6247aba59b11f4ffa650aad00ec38025c82d1175290ea194c11234d8b5187ff86cda7d21042fa056d261c1f8a63fc49b5a402e9e35b957e519f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x31d95a8daa1ff6c8d610a29590b49081e4ab3b4644cbb1c626f9de4d12784234ccb902421dcb012462846587bf7dbd628a52e54193181e880247750541569832', 16),
                    gmp_init('0x47ae2b1c7b3043e5746fa8790d79229000d8b1b6901035844d27da06f595b7988465d3f9056d5d59161287c455234d2097d6057dcb1ca2bd7b0705e53fd0bcf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9db6a04463838a612d8e132bd8cbf8c227fddb35448feab05ec286ae6601c29ad8bbd0b1fbf19006092253407dc16d77fa731532599d01bb6e0ec7b40a94483d', 16),
                    gmp_init('0x6c53945d86e7fa8c7777e337ad0f1ef1c3fdb5c37cc9621905609bc6ab1f05b17dbfa1cb80043736c0b619de2fd7a6aa33602ce95bd2a50610d0d7884ccae65c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6353ee639d996318dd21079b430c8c36e0380f5621182e921954dd4cc28537acfc31b993e3579f8d3c6c96c03eec37e2568e9eb0391db597eb9d989d81e4b629', 16),
                    gmp_init('0x6cb7246661948a2a165a0169eb0a7921902f4131472896a58632393d6ac61bb3e80e251937155e85329ccf2d7046a52c53cac8a4c16cea9dd3e48f0a4f1c99d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b09349319a480f86c67ef7e8078a0a34ed373bee53caeae8e9ef9d27060ae92bf0919873d70f6ac92cf5efcbd1b020828f84de1e6efd61d755cb64d5f3c4a0f', 16),
                    gmp_init('0x4bc79e3fd8a01f4f0e23b7fd40476b4c43b436b089cb49fa6a52d6bd90354708b97d9a6bc3bedbb16e20d5de7f1306f8946af73bcae2d00d8a302b057e89300', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x75cab4c688c741d516dc03b24b8129aa5bf62e48eca712120d32c21cba506d1e5031c258d12c477aa79fbb2219e2415b969ed603bd62ab6733aae5c386cf45fc', 16),
                    gmp_init('0xeb78e828d23739b7fff9b13bb7472ba046f4daae10f679bcec223bd9ff5d28a912f5c63b12199f25fff29fd86ea85cedd7a46160800d4d1ed519f2f6b866fee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c68b7d18f0c718fef06d0bacf7195073ef9176ad03d13c87808fc82b2b5b7f0012fd6735fe023dddc6dd1fcca35e7c551d4ed7c0213228fc6b3de4c77573caf', 16),
                    gmp_init('0x583e5f09a010ddeb1342f5db6d072111a85cbbba0b26f909b139a14f0485536b46e7a72b50ca18187bbf465d3996dbe4a52483e927762a1c5381da3845f91127', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2886033ab6b64cee442dc68ddf7882360d36b8beb63c6723eb6ad13df8afea02836a573b123c693346134610d2c08d5506c40fed80f00bd5b5b942ebdc00e913', 16),
                    gmp_init('0x3761cd17ecf2718f3b05d3b6a6305ab3b105ee716f47ce5f54fd9123ae3f9555f35fd4c8fb2458e2790865ed4509e4943fdb130ae080783db5cad0df198b5f0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26586fbccc9f6e7e0e6f012c5a03e69828187d1cf2bd7f0dc105ca788da64c6e6b7db10f039f1c9a2ff7bacb0d4c386955dd0665516a887d48391530f0276d2b', 16),
                    gmp_init('0x6302734d2377a9b65d1389a374ebc8491ac8fbb4d27233eee9073f9da902734f18172edd817b2fd948f108980b4bf35e07a83f0a4fbbfeea650c54afbca5d312', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76535939bca84fba1d75b08bb451119844d9ce360f584700ebf376ed4bfb498b6a90715bf30cbfa458ad08a6767814f0a44dea6ceae0444a32db7db7f75ac4ff', 16),
                    gmp_init('0x6058638e2bee9ccc67aa3de95983393d196177812cf8e228cec513f7b2ffc49dbebfa5a1e24bb35b57f71aa0602077dfa70c1156b1f2045f1a9cdebfd8e34d5c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x644e892fe25dff11f9d47d14a25fd4a5f3890ef7fede5974a4d90aee6c7e4a45003ea54803272e37367501439248989cbb7f8c486f4f91ea2646753dff56af10', 16),
                    gmp_init('0x6df4dc8dfe0607628a0bd293852463f901ac08215442f7d5b3e8f18f7d40a323795634ba993423ca176abaea8f9ed4266e4b070f763c575fac6b5b3b6570526b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x761edbe44500c56a072453f028367dc72f2f5ad77101e58e9ffbf7c895413678893f217e29fc313e3dd732067d7d203c1f2abb81beaa3b7ba5a34a80befb8454', 16),
                    gmp_init('0x337272534951052ee532cb26b6fef8a47014adaf7aff7f10701077560e267f5f4c012438e4740d14f61d7d8df3debdc45cb88d93204d31691deaa171d6769164', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83810cbcf6be052a36db270dd0d297d0dcee56ca5342fca154fed5b89109a84fceb5c8b617a2fcb16ba9183c2b1dfe97c090d387cf955a7902c1cf4eef188cca', 16),
                    gmp_init('0x669baac0574c81e7934e82ce4665671847464f2b35713d197b44eae2f5b816652ab3096289c9d211702073f62b4fb9f0c780f4ce450c720825b7ada189e65a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f387c0f0b6e272c5840548e09b09fc93bf2f63f1fbbbb0e0e3ccec138f8ae3f206008874e93c54cf39f6fac44c29fdf9c7149c1c302ea8f77fdc2c821f7c207', 16),
                    gmp_init('0x63adc21b0113783a29a82fb62c86fd91c9455560d854d04b83ac2c1d2134914f08cbeb21e73d9b17724a3af2a576883dea0bf53f25aede76ee5e3f45afc01a9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1162245d3854170594c84b482502f2c2ab516d8c4b83c209c326e3fa145d795cebd0d5a98800b5bb1d0ed5972ecbeb0aa681e6133dd978c8b17393e444939423', 16),
                    gmp_init('0x942fe77620942367e9cce2669af550d5f3abc2d6500bfaeb3b54add628c155b6cad0c5f90c34fb66f73cb426d934a522bbc4896f3a0cefb3021ad323f23cc23c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa59091a03529a5eb3394e3dd41c13b06135901f313367162bd242e4be77599053021515b55c65bed1d778ac68c0f3beadeecc63da9b211662b0dca533f0af423', 16),
                    gmp_init('0x7456ba5dfebc0385347452fad8ab37a6995c67e56e43e86bcbedc77a9369b59cbf5243553d1782dd9dfddfbb9209e5d45b1e53b3b7a532bfa34618afcf9aed2b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa0055ea9148a3efec4865d6bac72a8838424b4cc45c59f76922dd5950217836976c098d1a097cc77771261e57c6d361050b925127a96d6d1fb4600e0b7ca3af1', 16),
                    gmp_init('0xda06bc8fe4425ca7be0d10b7994ee416efd3d57f876a07e92bb3a880b2119a2fcf3b7873c6949d80d2f9eb92d2533732a5c47aef2893e195264fa7129fce8d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3061250e683e517fbcc803fd49a7a0cc25d77637ee9b85a304615e49969fd49bec843d827264e694b47119c98bdb6be752a7aa94a991d17f0851bd060dc77c7d', 16),
                    gmp_init('0x128ff4af42313ccad2581ca080252777ed6fa2906bcdac062fdc3cbb17d89923189dba5f29fb16fe5d8b3c45058ebe76ae69a39209680aa64474ce04113143ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26da98c4d1bf9e5ec258bcdf58335f474e5f57548be8b7144d243b5fb7bae60bef984121acd91092a6dfc4523b3781c4a406dab5c8608fdfe42f5f2844cefb36', 16),
                    gmp_init('0x48383026b721f5f46555be5f54cdb2eaa9dca1dedccdf7b89728085e4070e6a454b676ecb7db4b87eaf40258a58b2ef6eeb3bd673da7a2f3bf02f8e048f792ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19d1bce01ee96376c274cf9edb78d0cc696c8df056c48b6aa6bf795cdaa7412ca1c7382f0cf36f6f4dc64756941b06a893ee968bba2e7b2b30f3d608c3533005', 16),
                    gmp_init('0xdce9f75036ab9de433a2ffaaadcbade4d8af7c5bf748ddbadfe5975d94540fbe382a32ea63331f858f145b6acf7a9e64663156aaabe989c5f071d75ef6d6d8e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50dc09a82bd47d02c3db5bf4b9043b06dce6b14e9d26ddee068c4b14ef3c219729f1cb454a605b8664c1a7c09ebe177b9718e5e92fde54ace97715ab39ca30e0', 16),
                    gmp_init('0x5008bdfbed84b703ec0e1ec528a6e0b1b2f276e130c87befa881ab666313231f961b2ff03e0a5ae966257b871add2aecdf79cc8022ac949ba218734b36d14489', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96014ae89b437f182ee873a8dc482bbf5dd54970d3580e278c094c6be4f6650b876bd6c018c12cfb244f1aea16e6af8451b5069238db2d19907f02c8e0b98167', 16),
                    gmp_init('0x9a08f12b6d6e751538c35113279e0bbc7dda8a27dbc2e956367556b8f41d066a47fe11950c2be6686c10902926b330e0d080e732f9128ef750eed05f52c81239', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43f89a60aca2ec8764c5e08857f4f060de5687aef8ab67fdcad7ebf797b101b7c623147402dd527fccf5ebc9fcb20068460c0a7ee289b875212a1f44c53d3a7', 16),
                    gmp_init('0xa10b2024c40717e9420c60b7a56e1b14a51dbfe895ae6cfccf45a6b826c330a7f833595807751e7dface74f697b228618321896be02f0af8bf795ecd6f7428f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7eb82dc6abd5f0d3796b254e3f08ab49b98818542e97395b88bb0856240b9974a2d7083437e0edfad5cf3deacbfd23a88b7f3cc539f3a2883fd9184e08ab61e', 16),
                    gmp_init('0x5733086bd870d83a2999a239c253493de69fba3c964d4807f1b6fb84233932845eb7048c6f72ee3f62296bbddc2545a290822bc4984622258683a4dc840f62f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2156a3c1d77890fe762bd5c1f3fb14ede7ba408313269667939dcdc443c71f0b8534e8dd768f649732602a69b882885e836ca1965eed0033a02d26df590b4c84', 16),
                    gmp_init('0x20e02ba3151cc0a71a3ff1f8eb7791576960cad70d70e4a686b09bb84accd91caf5cf9f22b8ca3784e2e54782630cc86417ad3177968dddddba9559c1447d189', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8aa6f09ff0f636a595391232a0b017d73f70950851d9e4e8bbcd99a9924d6986c618a2c8dec8228d7be57e7738347ece34e022b440517d9b2da282e0301e042c', 16),
                    gmp_init('0x6f40b3d39906446a87b4e53ab9e8fbd49c6076e2ff8627cc400549e1b2fa609f3f5000d46e3a484a5557eb49edadf8e121b09ec2b26eb92e656ffd8a154591c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61992c37bbf66a2f1feef1ea657a1abdae7e26aeb3d10ed72b6c28f1baa6027cc88f7c510c43361f1cdbf437e66945f3447164f1aed890b70b1ffad0cfd1ac02', 16),
                    gmp_init('0x1a3245293c81f767a28fd74991f5f6920ad41f7a89e56dba33bf98328a41cf23a22439fee23c6aec729fa82d6c94927d200df340872568dfcd97db1b6ab993c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2862c07cd4a961976c8eb6196d7d7f45fdd37dc17da3ed6257faa2f835c3d2b2b4c8fd158d40c83fc64cfeb164b19696cbab6621f9fbbf938a09318d11aa88c', 16),
                    gmp_init('0x494535fc5b1d00e875de2bd0099c7dba1694455722d3f7634a41510e3c3732ccf137295edc4f3d1a19457f761fb61adb77ff13a61f45bbdd101e01ac55a2ebe4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x687916975092db597195c0a3f50db48b713862bbd726b1d7d454bd81205e53352c1555d9c7888b5b3bacc312e6a0ed0f847531032b58de023517d41f4f19be5d', 16),
                    gmp_init('0x779b8af5bab3645c111a7b9e8158756c9a01bd22acaa21d46af161b35e6a9f1be85ca49efb178a071d4219b91ff8f7e9ff12029d9db52fe66293d45bba5de0a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9032403f6d76b63911bedb2b74f21ef59567880e03efff1cc0b09b7245c980f80d6a75e48b1e6f3daca1e4aae7ff2e61fdf6024511c5ddcdd314a4342545baa', 16),
                    gmp_init('0x673924ea8e9f6c4e6709455ffb07a80b5528426b32d582356f009025ecdeeb5219cef32130b912a86c33a2f7fcb7caa590a162c03ca20bdfaa26c514d06c5ed1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7adb47b1d2293088259e2adcb5297d8c5f1768b152aea510b28dff5f2ba69a6b40e2c5af0d9705087229a32479ddfe7035cdeeb0e78b441685afdf1a4ca1fb9a', 16),
                    gmp_init('0x47479851564a487c4aa7cddbc77a3c68372965a6386948cfba204814b27bd53896a78c0c37c81d0c57d3583e59f510522168e933945fd0219f1714cf587ef33f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x907a2df13526dc19b08da79f5a28e06d30a1cada5f0a066313109184ab6df914da2d7ebd79bad29af3f67495b555d90cff3c4bdc7b41ebcc518f2bdb84bc69', 16),
                    gmp_init('0x10fa844cd71e120c7997c491e5b0420ad0e26043f2672f06809c439d1dcc3423c21e3f3f57ec6bed967838240deb0b05c5b5c2baf9d5994ff1ebee88842d1ebc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79d254e9e80c0f5772b0cde2c3ca5f56dfd766f97792aae1cf9750f5ccccaaf8eddefa92a6bdcf6e2bc9dfa25ed3f6d5d4c080a3f1c122d7607d93f043fcb130', 16),
                    gmp_init('0x3383aaf37f12af17b3b2e131c1b22ee46e5705c3fbed3eb2fd4f09f3f63416a1ea72092f37b9e0e8a6a9ec49770135bbc03b657ebd526cdc389036ed78c23c0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7eaeb38a0ee2e1bf2588d34bc5135d484f1b155388e7403d2155f41a75ae16a9ab92182e5b98f36c8808fc33a72d10061a4bae825dcb5251c1876f021bf827f8', 16),
                    gmp_init('0xa8fbc3d1c82ae0694f4b66b76d46fac929e12a6528a7650ce4ec3f5c93241704431ecaa4bd970cfb05ec945a9b1a5cc3e58242871be9cbdc9e3b6a17996b8cec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5beb0f8209a4af572a5916081085299bc4769ee1fcfc6a5d633d2aa276c3fc05ce5233553805badf2ac01f82d94c72f27a6dd6b5b65d4b09199477aa5a92792e', 16),
                    gmp_init('0x51a14d9f9856562059f803035536c74d465b690586807a2e8bdba2fb8ccaa49343e53db4d58ee0da0b2fc5664926acfbb569a20d877ec0254bd1fe1648c0a6f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x897c75b833807efe2580311f3e78164796acd06f4e64c105c81e900c17b190c02b71a1cf91e9d72a56f3855ef9c7e7519ed0a89832f803cc8038e94b13280dbf', 16),
                    gmp_init('0xe54ba9a84b3cfe581a3ced1822cb14f495f3c9a24ca9c5ead5a27d0c01a995af9326e1f6ddc427b95c6b8e4b40da894462543093748e79c5ccfeccc72b38349', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40cf6eb3e014c0717da628b37e20c048f8529e255cfe2f03e97cedfc6e29e42dccdcc5c01b7f2c71b1bed977b916bdbbb00e7ed4a5aa295b772c9b6a69552646', 16),
                    gmp_init('0x87ea33b2e4d7adb7030d31085594f8077fd027dab77a2d27247e633cc225f4695cc7a06fdcbcf069fae1265a515090d1e969e49a32606dd6fe01247206c8cf5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15ffa0334a7031264ab47f275c5806225b0a08f6531554823fb304d898c03688bf3593efd05a13a8e9446a0debf69b5607b88e5b37abd341a69e4b383c68ce6e', 16),
                    gmp_init('0x3f71b03847285d9a37842e6f978c21a97b4f9fa12f949ad166cd2bc01f781c5f51d9e5fd8c0db0ce10a9d87934c962de710d64eb6124e6588e20e1b3e15f9ad7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23715711c20afaab9b675a3c22ca794b7879037f41531a755daec772dd1de68cabe9a987eb57f3c212d6bc5cea3dd92a68f1dc5e64b472a0d8854d43f5973693', 16),
                    gmp_init('0x5658b55f9d82475e0b99a3a0b7d9fd5a3d1c77d6ef4e4747d93c49dd6115aa8925e3cba54b198904d6ccf42544a7d5143112f8810bf3afacf2b81a9a49972f44', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e548e96aa5024e442565088e263e9169824d777ed2f3dc6489dd03128317abaa78d9b218541c0acc53b4ee058825a578371c3d0eac7038df599717df2718108', 16),
                    gmp_init('0xdafeaf6e3c5001d757421b3e3da38ed141a651fca6f8c70b087a4ef777ba06e019da22d97a338e6a85524fa7c16e6ca93ab47485db6e54da67c641a48ccd834', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96490581d505640629171544142d588ae81837306f2d13528641383023f6563213230b0b9b9449eeeb98df77ea2b697722f3b3c2b56cd1f09f76b2c58fe6afbc', 16),
                    gmp_init('0x7926303411ee09e88bc51bb02e51dcefd3cead9bb32536dff244310e4f9330b23fe8f0469e031b637251a2ba87b4338faf1dfc8f9053cdfab4429418148a117d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e1124de5cfff183b3ce2996a557ccd22c68d0f843263e8e9fa3bef5d53c5dd44f1005a5c24d1133226d1f12b453cfad836f72130ebbe591f65c02adea1247bf', 16),
                    gmp_init('0x92983f39cd9d373a981b2c6a7502ce0d8dcc8faf81c12843cf9909bd73c575d7724fe59e7299dd53021a7f1b152fc226862b67388083cffa007f71e2736063e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91fde36a58166cd67229dbbea3560ca73b2189d0cc8262b73f7536555878b3505cb451c82ef449954531ff794f01570ffb85704431c1aeb4e538e84a1eb989e', 16),
                    gmp_init('0x51db1d8dbb3cd186e3e0f99f068744f76a215d908c6289c7de7547efe170b71b46fc01906c7a9c41fa6b89b59e3afb368e2d465fa3075de2c86740284aadf818', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bcb739e0a41fbcd9e629cea4e4b5400551a8a19ae1b8ee814b9a5546858966f8c82b5b62c77463b27fe2df80cb5aba994ef4bc4bdf472ae7eb259e2594f3a8f', 16),
                    gmp_init('0x4c7f83a8caea029fb50d58f79258858ad8d61a99306f57cbbdafc4814bd0bc4737ba088370f94a24dda58ed6aa73eec496e1d9dc7004ba2ff3e4a797d59ed46b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3277453098f94164ff9c7afc51fdf0db34e278fe08caacbc8aec286e115f09e6c4866b9fbbce36ec26ae59f328d081cf41eee78312aa0c268a3287a60d215914', 16),
                    gmp_init('0x3f5cc9db5a7502a98ff60b7f07767140ff0929f851d0c50ced18b48379f81bff32d81beed9dc09569b3eda2977a1537f33e51e30037ca8477e11fe581de0793', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x989b4ed77d0349094a183102e6424fa0233d8a96fcf1c86083c1ed7ed8d0cff8d093add569787ee533ead42af3db16ec26d0f2298760ed50c116f017cf2c34c1', 16),
                    gmp_init('0x3927ca8b3599fd048c7c6689c47d532f5c09e79d220366429a1601016a5fa491b1c998dfdbef58dcf1040b31283660dcc148bfb538e9cc952bae66d070cda096', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x487c244b8f257a1a8baa00da4ceabfec6dd2fae7110990f3fae8a95cedd42b2c42fc6a5edf1847892fb5c1bb6d7ec34723533cb43dd4208f658a1f3c852aefab', 16),
                    gmp_init('0x292a4aeba321f56ef9b42862a75546a2011038041b07681496cf04b801b668d10d167c89378c3a9a40b870bc35508586315c204b9658fb5e9a7ff17a3830235d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d67f317bd56c644f83e74be2ead0269231c2403f20acb598ded099c67e2b95b9a6933b391a0833d20f9fca8fc66be8f8e15fc6e41fe26a642219ea7afa59326', 16),
                    gmp_init('0x77a58df77cc553f39b77905b4cdb737c0fb8826669f313afcf90d55a5d0c881d8a98babc4581ca73788b01ce9d427bc393d7444f2e89e88b09856b15d287e8c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19bee6d4fd5f83d77679bfeffd9cab4650ec7ae549e1603a2e0df77395a79fe41d6150ac4a5c55f766c8141368f1b4323b80b9e6c08a339a1e247d72f558a6a0', 16),
                    gmp_init('0x632a31a1b3794f86b53eb3dee3c5520489336569a3473fd72f2b992f4d2e8c8175fbe21536a9ccfce08199b7de0cbbdc2acd0e50caff8da6e7dbde765dd7b8aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24d82527e891866d32bbf0b51166609f0a764ff001d6803d77f6a0e2881b1b7d768f26548e4a2d48fb652b86561c052e539cac0cccb23741a6230c6d5554d0af', 16),
                    gmp_init('0x54f1b3bdb4f5cf411ad372ff6306f420886e5aa87217e9fb84e297740a1cf8b02eee54c805bab8ce44a739fe4d379be770dbfb2d8200d25498929580efab3510', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70d31c4792787e9469be7abcd26c3aa6370fc8d61d5c69f2ac951f6cdbe79ffb7c4a0e1a25a3ba2986ea02081a58d7b9ce9df7ea97d40206d1084a86429e08cc', 16),
                    gmp_init('0x3c2d735894fd82450f7037fcb24601f21606dd859836b44211a730bb135da96aad900bcf0531ca73aa5e28420194757edb628f2928e15b572b01b3ad59f40a53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa63d2e84f198006b4b8837c7584a904afc35e31e60c9f0ddeb34cc64355f722a29f4d08e00605c612d45f9ef1fccb9a00cb7048cccf50ffefa6ba9df1aaf3478', 16),
                    gmp_init('0x7894665b80166ca696c56f7cbb84ca37f7e8e69f247cc63a9f28aac217f0ef20ed8870ef52fe5894a4b7f0bba3f9307ae64ae4c01025ba16f5bff79a027de6b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6508bab0d10252866257bb7587e91ac0b64f039aab7ccbdd03b88aee49f8e7aa6047316457117e40bdcdd5c7017b2bf75ac790f033764281cc76b96a407bd879', 16),
                    gmp_init('0x5712d19609716ff5351b8c6b9ee75da1c6e916a841d159b4cf6d1d02b2b5e72b495b253b46c558144034127bb6f5872be30e345e112942c967c21998ae674caf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e8207dc593c8a434eca015847a08b93d86a123d961859b52144a20af30f183c4c57a4e2c8f91c07815d23636ab1ab8f0cb5a31835d885a531936ad0d9f5623a', 16),
                    gmp_init('0x1ac5173eb3e69256a3e71766f1f724295da5c2e548640a96a20308d6d8afd842cf24f186d04656e78c4224d096d4379e949c67f844e4941d087d1124c742d01a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa48ebbd975a308c1fbb7aac58d352e0faea2683f5269dccd7046a368d16e45bf555adf36c55486ea74d8c204a0a0b3c8f98130126a4ecdb652fc0dfc865b380a', 16),
                    gmp_init('0x5c6927bd8ef852233df7224d25d3ade5deeca82ec711a594d373efd695db398665a756a34ded6281c3497953ddd29c7416fe5210837b7a319ab75c55f92d96e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x513dcaf1f629525b366695431b46e8f0b4e5f38d9410fbc315352455d02ee500ed2157fef45c2baf7db1aa86fea5593f21bb7e1de7fbeee18ebba41805cc208c', 16),
                    gmp_init('0x87e9a5e7ed33e7e8d4f4e75884b9bf2638203239368d4cbe05cd3a8b82bf0d7d2bf9f645853fb7658392de136c047fe28cf62f0a1480e1590ae8b3c26235b96c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fd02a4c30c49b5bda2407a16556083091bd223c63674b0fc765b58af12bdc37fc06259c2306bdd11377205e8f5ffac6738974422bff09f474cbdf313be9a719', 16),
                    gmp_init('0x6422bc5654f4747b5f930a914415681aa8789f847930f33ba631dd0c2f29f9876d8a532c8a8195fd07e316184971c3da5b37ba9e8bec2090b5f9e26371d69956', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7856bf60388c2c036eda75c8f50c4ca76afc1cd059e4d20cff5b6c036443935c658b33d6fb49eb1d130d4e98ee9e399e4ddd2a115450b81bcdad1705763b3ca0', 16),
                    gmp_init('0x4d80bedf14071f3553a1a1e8efe1c7f0945de2c69d78c52003ab961f7409ccbd383693e0dc5d9d4e7ac91906a456e7561cd713d48a8638173cb1bade6ef844db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x910800f2b72316595dbb359112e81ccb8bff2a01049fbeb7ef6a77a6e6d16ac8cf4ce0c85c05ea59d7ddc7e65485d15fe60015c816b1bb42085717420d7aee9c', 16),
                    gmp_init('0x52f6a8cef6644f12681a96244e288fcdfa724cc4e3844220e0d099aca5139c9adf20ba24e4fd2d48d1a066a5a5b11dfda2c66a565cfe821cd41e9bf21388f2d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54f4747d46714a8280699ea474710dd456d9f7390b35424631b9d7910f574d4bae235ad39791d6d25060faed7787a4cd9b475573930aa6e6668fa19a4eaf7877', 16),
                    gmp_init('0x7b9c91796646009b46a8a83d3b10459963ebe5bee2a2b4ff375d5ec7d4e7f43e7bb182b00d16de3fde07b673be979523778fb7d4e527c0f8b2e2e2d0d38f3a46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40f0349bb44de0226bb3caa80e48f056eb1cf4c03c31be1f0731199404f85e27e3c6e11f5f02f3c64a69ce3eef11cf4a1ceb6801beae7e8055f60383126ddb44', 16),
                    gmp_init('0x332300950307772420d54e6ccfaf978a2f1acc2c45f3000d23bd130a7cfd5332b173764381e58966c8b6cc7ab64d33667aa36631574c869832bb96152e64a4a1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x98636011935d77c62f740098cb3cf67fa533fd803d619a08c798cea967b0fb0a40db32460f8ce13c7599922619273870c8ce98119ccb23a00a927dbc1add9773', 16),
                    gmp_init('0xa6c523a278c4e7cbe8715896563ab0e8a10e05030fb5e4f4eef64498933136f8ca4775c4bbc859a7d14057d76687f9915e2683d7d7df59cb1a09db4754a3035a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66bba1b3f9e9aacec7c097dd95472fe19d9e2a032b048b290b926e6a930894c44d9a4f194e68dc082b53add477b14353a02aed4c3376b7d1568b015c5f2e7508', 16),
                    gmp_init('0x8244ea72917d11199766f089369eeb6f8d9816676cd40d8750199de9249ca5034fcc58174eb818a923f18dd089417ed223c11d44f9942bb4c6b8b0886443ce6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa59d1866c25889f248325af2c0b6f829915896d1db0bf09ba576dc8345bf4bc0dead205dd431f65562e0301bc15b065b29b23d4d33e8a92d8ea3244371a99b3b', 16),
                    gmp_init('0x9895861111a3e48d08db497625060c772297e716177a6772603728c62e5fcafe27a47dec7fc3f7d8474bf26b457329cb6678b29a414f5606efcb3fc1e6aea1c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83cda0f7deac0c53a633f99c28ce465df0c3c68f99d5455c8b8a60a99110fffac66f790f789e5fbc7b9f03dc2b103efc2d0710e01b8999a22029f2b34ab7dde9', 16),
                    gmp_init('0x49a836a4986bfd47ffeedfe2597a554fa4a74e7e4e1e11bdd27db567eb0109a3f26cd9a2ea8e9127aeda9aa6f57e9c1c4b3e15c1d2945f4ed58f1b08ce22ee57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ea1a907c34b93300174eae06787dd915181d20d65687994f2ffbf9ff34b7926fb4e0ce778aad62a7187021ed3c240d4102c6cd001a06b8760a4fc4670e9409a', 16),
                    gmp_init('0x732e80fc2364635ed655079c7c900b4a51f4bf154215f6dcccdd102e68eab48612f4ef77b4d956419c8db1515bb9821a6b8a88b62ee95ab75254dd3d6b97f8a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69a976c6aadc72c2f48abbe9a3a75c6a0160139f7b5623cf67a55a29c25d1b32dde7d7a529915728ac3e96344cd04a40ef22be04beba24ec4ac3af6183d8976b', 16),
                    gmp_init('0x9aa20cd760fdcd3c43a6803c06e764720c905a1a5d58bb12778cdb567fcaa78baf57fbf2ccdb9bd37b6e073bb833b8c136568d444b8c0cb7dbe0fa9db03c0f53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaa83b723ac1adbc7599073b553fcbacd92d8f0f6916d33fd5ebb48892d52c77ef20799886782514d8384dba5fcd02bfbc1bc529da3851965d1f9afd6f810c5e7', 16),
                    gmp_init('0x1a2cc11357e0cb8851c1af4bfec72a427016af2da6f70ab1a198668b5ecc2491ae5c51c8275f6ac9bedabd6dacdefb2f2d0bdbc3a6c31a2f5fad4b6b74e50d1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26a69764d849d13145b1f87786057b2e48eaf412c77ae7445e3e096ca274681c818cf5f705925e585493d573c09f993ec484984c05e82cfebf25efe83d57addf', 16),
                    gmp_init('0x7a7b802fc0b741b957fd0f94c9a74a1ca3ff7e1cf080c52491efe22d0b0f979d37201b23518259f60a2fcb0309092167f1963388b834d6662f93e20615d401fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x591e1367a398fbeedbdd09255eb75f0ad8ea36d8fd8c2c56e0060d7cf5602c3586b0f8a3cccd3b7c8507665f91a5fc104319a1c37b684c4aebe3d00b478b7718', 16),
                    gmp_init('0x1cf2336799e81c376b826f115466af4f0e0f293376edd122ffe96bf0014bae4bc378e89a1955226c191188cd05010bc3bd12590ffee34da2af2e86bc9b7a7c0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa768ddbed1a35df112b439f8c2a8089da25be3fbb825c672195aafe0e219d9b0fc6a4c5e2aa891706c5fe7abd2941836e742ef958d2c5609968f63857b38a2c1', 16),
                    gmp_init('0x15e248a4e65160ef9f2e433ca956e716012665264de7094a28d9ab0a46a51d28cf13939b7674df206901750a147445254cadb86045cde4be482f503918656b12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x614a5e40bb69277bccd9ea4cf696dfdc67e8e352627f8547aab154aab58a8dfa1afab87163f090990865a8b0b337151875a901361c79bd78cba73a1937b68eb3', 16),
                    gmp_init('0x8a713936e5f3e300ef9f5b61f917b65dcc791db44e2becdc236d722aaa0577174c69754b5468f2a12a0f8e08b8aad814377df932f4af2d7dd2207057ce201d20', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8853592d0eac36c1041d25253c824ca84573d1dfa533e7c4a9e575a8eeba5d32ab3357ecd71bedbf472fa0696bb09f423315d675ddee9cbf8d705e00d0adceb6', 16),
                    gmp_init('0xaa89151acda9e2f1436cfad44a7c85d847ba405ee68f306ca3fb95fe5f38de5dca95f1ae0ee4bc6690c0488bc2163f8f7c511d2a458ef123199673da6e22911a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8cb01f7111e1f67f42bcd7e631deae8ee6bde3cad2ab22782d0a05353326543c043c2e23aa4ec40819636a56d9754f577643941b2e507ce76362fe06ed339594', 16),
                    gmp_init('0x6ae135283d06db55c6bfcbf6fc96c906ad32ce45b071aa33fbacec514a064ce4b45ec23699e6603f0e0cac056971c9bbfe4c4e45cb455ea81fe066592fc5790e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9811cb07bed55987d7dcd7fa2f5106f5e613b7e04cae8ebc06cd3e1cecefe46852be075cb9aa42c0d5ea33a5d715d44f56448e77ea22facfac8e4cbfa36cf0b6', 16),
                    gmp_init('0x3aa0f0b09d3d5d86410b51796028df18189aad2f6e4d5fae600681648641495c6b9ced54965ce80c04e125055175436d02d8aaf1efb11f4263ae554623cfb249', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2b3b99bf2045e7fcafde2cafe4aa16f71d9ae6a20e4d477b94967421fcae2c92a56896e2a304687ef35a56d00b58bc9129a896e4d5f6ad50c78633de04ac3af', 16),
                    gmp_init('0x6a1f5b33403ba173698c72274830092086d6de4d2829c6222d5c67ade5ec19bc0f704441c01ca2af71d36888fc3dca5c1127171bce2c62cc155145cb0aaed93a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7255cb8fb217ef74383ba6d19590b9018414a7367b30b8676d099de289796d80d921d79066727550930e38a30cb402ec62dba3f159b5d6e521ec9f72596ba28', 16),
                    gmp_init('0x91693249bf545d573db18d862421a166abeeafd6d288df0217b1d801a1a4b506a80649d64372e6ac0147c01a39a5a40728b976e45dff80a6303785b7fec235e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58ff3a3cb31fc525eee7ba8ce42ec585909e44b810d3fde8af929466d2e6d41a98b90439dffe18abc4a60afb64e81d4338c3797608a3ce82a60364edfa088b77', 16),
                    gmp_init('0x3d2a7b4ad75b83edc8e3004f61daf0f619d08c4cfca9ad35bb01356352b9fc61eab6223232c58dc7dec156b3a3288c3ac1e6917de567b213dcede9d43debd4e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c1f194e27ec44668e8c075ef1797cf183a2113a1acc23980274cedbefb8fd250ebeac0fa4866d78d514424ae81681ed842318d39ce6cb5a3005ee84a7524353', 16),
                    gmp_init('0x4d783f5bb3942f234e5e6e0fc43843d941e04e6be70bb4bcdbe0388b81b5e98d80b49dcb244eade80f374879a8bf0a01a60d85085d30ea26e182c5a17da3d867', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30262516d1a3af752e8c6f36317e8593aa330192e6d73c9c833b3a3d98b9eb9825adc29be27ebad70c871ec89b9809c626d4592a0106245093bb99f8134d2a78', 16),
                    gmp_init('0x18ce2551850a57dd252b77850657e33f268ebddaba1afa510d29ef6c2a5e823bafd068e966970e67777375d7ca14757a1c579517851a980b2313f4cdf645db3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35262651ddfb81c8c0eff0e8f3fb90a431c0f18991574d8b15d4c71d4b8224b696c65cb8254f8c9f1a400d2c11e8f863ea601e5b73642f6a4c24b18b1985a93d', 16),
                    gmp_init('0x63b6e97d235ce839b86bf94f5217044cb9dd860774d768d17b11c9e2ebcaca78470619f0b743b9b4d047a71d813cc06d04db171f87fd740a601fb66d9f7e5dae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d233dd04b3068364988b7c10044e0ace780d3ca4fbcdc4a9ca5778997dd962992eb8ccdd3a63ce26b107ec3c14d7405475cdf335b1dec28cd4cac174b243627', 16),
                    gmp_init('0x6d444fe666deaa8c482c62186afc5b20bf1ccd3f68bd3e43d49b6bb991efd3d6869c381345722fc6c3bef9544c4221cfc2e3268e284d154b140e7d9bd1036295', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fb7af5200c4a2c63bd4af0cbf8f2c1855020a3d9bcb3d35f0164b96f8e42e1483811cc2e01dea2bc064c543c76a39d93c4e61d65326409ab0ab3c9162ac6834', 16),
                    gmp_init('0x69ecc8cb8fe780a6f46bc84ac459d179200a158c8d9c8c82f321eccc1b460e6a061e015dc9f5f4d4fbb3c306536ebd345fe0dbd3d99430129dc584b1c5124a7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28bba801a3fec2fa07affd780a5d15650db4fbcf9b6e5a97880d0f830c160bb65288336429a7b081d3f66206628e53eb8a6257dbbfe35302010bf6e84f847490', 16),
                    gmp_init('0x7615c198e11b76db91278d2dfcd60bf9bd65fe5ce767275f2cf61a9ba4cf120ebb89b010a711a47ccf7c67e591084498cf6780b5cc377248b3f915d8e9810cc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa002c4a47c8b5a76940ba3d95d2308e7cb41ed2ed3117b49a5d60f93a011b60250331a24d616198c4197bf7cc5a0e4213c007c62e963621be1d0d3947fb88da', 16),
                    gmp_init('0x3125b4fda45c7adcfd1d4b3278d819f853b0db06844a5f4af20dbefc3cbe201dcf40761930f9a28e620596430c824ca165283a979b2c3c4bff104e3be4ed9d31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x266ac2ff99edbb7df7ec8186fc2663199d3b9afb8239ca0d521c300489aa0d6a1e586a0c8d43e7f140b640899484831eda8e47c4f1b86e5b0dd9e971f0c643de', 16),
                    gmp_init('0x5c7a30170a3837737cf48234e574347057da7e43428f9d6a6e5e5d9456dfd682cb6957f9b8366dbf758a1e927f1d2d0ca11aba5248791ae7a6208be6ff172c85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d31963b7df29e78ea64f1efcdf556e9945281bc6a02950f7774d8497ccd8192e67e69845578a944a3cac1907712361e7669bb60a29bb5e1df5529f17aaaccca', 16),
                    gmp_init('0x1bfc47eb5d67a6dcf0b10891b2f60b8e0e81e7d7dc103a12c2783d4248eeff4fc518174ede3be1d4a960420892cd76c5a8d3e47efce7d1efa432aef4649938db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74fd4b5382a8bcfbee384cc101c6340817e9a45dd383d1792e750da81bdc87b023d292ba4ade4ddd3e4dc56628b71965f83e3da07a8d23673bec9b1863947e0c', 16),
                    gmp_init('0x2fb88927aa0b974e0805fdefebb3a22b95826f6d6d22b252e12c33806459dc2058bb53fe7877fb6fbc53a48ee2cdd20183eafd91d70cb7111b283da669a02997', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x245c045c0eb53e6f8f12255fe89dcbb2154006cdec219a766967bd9b843a2ae84fdda4006467957eed7c45129b509f45495b63f550eaa4b3ea3e16532b6c8b89', 16),
                    gmp_init('0x7b6eeda03af317cdc31ad491e0f9a328b3dbf544242fbc435e92b8867d035d49d74a3216bac8a400848ffabb54189545a80c5dd98caa4255a89ae419464e2d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2950f43a7c40f6c50299d7f44a4c7d085a263099043f17a2205b89c387b6a189133dc63457dc988bb1c49cc578856222606f54fe465ab410fb49c6f72ccd97ee', 16),
                    gmp_init('0x925ba4ebed50e005a0c09a613be6cf319c25d4a193a9c3baf3a5a535820a2ca59644a31d796bbf339edc19c31f86fed3217cef19b060e17bdc4e82188ece0ae4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b022c6981632c79b081d96550e42788ab08be9f865c46ec924a22f4cfd8460756f689d8990150a3f03a6e1905c88f7d29e72fe28d542e4f9bf7df5009ef74c', 16),
                    gmp_init('0x4cb75016f5829212262f048c07e3088a62359f5ac804b94f837dadc7d3d6b6bc859676be13c52fddd3d805f4de548d722bb76a180da0228c98b3500378a3afed', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x76175cbfbda83350afa638eb9fe393f160b9ec9743332e460b06595757619f1f0ddae8317f4660b448c043156cca13fc49cacbda2279a49641d64d5ecfa8b6a3', 16),
                    gmp_init('0x7fca8a8f962efafc2159a5769d3b74c531f2ef7719d9dc3324236f07882c41d822f5abceeac632aa4d8b1888b2e51c66c1a9600ca930f2e8bd47c3f4026346d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52dda073ee0d2dc3fe7fb91a3e8c76a421831932bf5a7f09ef7feec088cff9383c4a16613a3d5518030b235093645df625ad352c02c3469ee24adb64b56d0dc8', 16),
                    gmp_init('0x8e2d5b10c9e2e4389ffe8cd70703c6bcfeb4a1fd29dc4120e3168d0a784567bde64377c93fc7dc5172547a85dbe0a5dfe4e75caf44b1219596bb261e9ee0377', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507bdec1da8c2efc7c53b130bfbac3e34d21958b99507ca9139b5ea8ad7bbdb831b2a9d0783e879d445262b050c2c8af1f70621a899da13f875b9dcb52568a80', 16),
                    gmp_init('0x16b1c644e8affc4a7a35bbc8819811b88a70e9f8d4e9efdb7f3346496fc5a3a07ba9fa3905d2a7250aaa75711fa5aed45b73330f9562474f4ed077e60d4d366', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa55b0bf68743331cbf5d683bbc332dbd95b206f5dd4577163fa530f7a453fe837012d7aaa911e7955f5fc7f03c2a0db0c5f0afb2db848f27b1cb0de4aac196bd', 16),
                    gmp_init('0x3770c9b1e6f557824e8b9b804aaaba06d2b858415736b3b14edce17b1b1b37094f2fb7e0c7ed386c9561d80ef22647bdfcc54a8b88e29641f21c6102a710fe6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b5b2f0e21b41e883bb482f862c65aa762a4b6141c1878903fb80cb34bdc58842a86f602e0169206b80857a11268daa8628074adcbc220640480a94d77e394cc', 16),
                    gmp_init('0x5eac2b8ee3364f01f27bf4038637756d060f4335673ef8f165ffb77bef8e06b717a2167b518f15989560cdf06e7e9494e59bdcaa1139a54291d405335522557d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46a7018e9b6deae1a042189908c30a0f527af397f62ec7c8b9d4f6a76f49057497bcf1a5a0e011776f9fc752ad098fd1a1968c8296259e1aca46214ab4b38422', 16),
                    gmp_init('0x16b4dbd44c4f2a9863456f5aaf597af597796dd2e2b758c8df07f3b6e1091123f62ddb3a06873a1ea65b37be37403d420883aa4801407c794103b13a2ca13ed6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x660cdb36f49239bfa7e05a09befcd55d6ee347898e3158ab8bf003ee834bc37ce0884d64b784a8b2b8bc74ec0e52d9aa4dc64e14d5d7810738d1973cc8cdc150', 16),
                    gmp_init('0x3439a78d02941b9a3e89b3eaac9bdb15d2cd0f92c5d40d1b3e8ce44dd60c54aa42c80722bdb2a76e2c76a8b67c0f9375c4ed4ef5a6d5c38118f6a88a9d7afcd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4afd5ac0b941fb657c645c771b70f66e104657eb1a0388ef9151cea2834b15f00f4ddbf9451bb3293c0aa2a836a14dae0091a31310efce972404969ef7917104', 16),
                    gmp_init('0x6a6cf6f2240ec2d3b7c86ab649cd18e21250e621b2b177d4d5776e7b026329fec53c216d8e77fdb4051c44d82a0e4bd76005ac6a8bff9fdbcb15b6834e1eb767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74c0e6ecdbfa1fb69bbde6f4240f2828e685e5259f5d97087b9c9bc3cbfe7d11cd078f346d46efc7f858c51d98431cafe459d14d2a3cffcbaba2ed5e331cbbac', 16),
                    gmp_init('0x98eb23c71b708053614472b4f18314c166616c387ee5db8058870779059a01a3b3b1b274845b7638130813bc9fdd0e37c4f8612ac3aa536e13f9893324ec30a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60225c71685f2c63bcedb14de46cea4f0a078729577953180fedb8a526ecdb3815ce964afa71964221862a7509aa608fbe0e0159184e57efbed78c10ee17f8bb', 16),
                    gmp_init('0x70f038eb9510a1baef14eebc696275b6ce7bf9ab231798bf702a10d08db6dcbb92ece63138db81ad3daa0cfb285256180219eb9a12b4740e4902656dd7dae83c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69c0ffe0652d12f8c155256800381498b24ebe0a8e915e08f5ed8da5c2c75f5ab78c2c49fb28c945cb4a4646317fb13113b1090bb9ad87c1cf4bbf5c102fbac1', 16),
                    gmp_init('0x59c0ab5d1812117672a68633dea85af3f5f3fc09fb3ee46fe34b81c13eda6e15b3ef2fa064c0f7656fce6d2f69bd88e87d760b7ec80204cf56a1bc7f76b7e399', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26dd5c4f4f3855dfa1a25983e34ea4c439afec2c586dea68b7b9be38a201d10dad5b7b86583c5fbac368b03dabcd49db3244bb85c75d6432fb9642ab95e821e3', 16),
                    gmp_init('0x4f7e6e9a641c4488225811a5ddbea465e900874cf3d132bee632784a6b2528d21fecb2b650e978e30526b71435172cf2b10f9071ada69c6e747bb124239e74d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6eff56f97e8558235e6d302a0c63135f7bb5e35e4c521c95bcd1c6abf2ae67813c26f6e7edaaa7f2ad6370e718fd734132afe9abe021a8aecce301d9fa9a4920', 16),
                    gmp_init('0x1584ee8d9d7fb4931aefb7e032abe3cbd9f2e2df94e6fa2fe8fd2707c36e7eb33acc1ea340a71cb322d8f396d5de645b136d1e2b0957b5f3ac645523b70959d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f0be9ee584f6fbf486b0b6db24569a5dc99834f720a14ec84151f5f93d10370dd8de5820ca4dc9f2111fab6bde8972df07342f20d6a9ede16b6d1c9df982df1', 16),
                    gmp_init('0x1cac621d1cd10e534e0e8d5657c255ad07d852ac8fb82825f2e26a30c93a9d21a01bf3419bedebc26dc86f472c5be98db8e7a2a1000be50c6d8cc1cde292ff26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x666792aa60b4f2ae840924fdf2016dc5ef8afdc2866f5fe586e079b465e6bf0cdcb75399b02df2baf98d42e3a64f452751fd404901f9e187b9cc95ee95f0f013', 16),
                    gmp_init('0x54f107b0a833101af70d7958b6f23baef4dc639a272f1f1c804f582283fb09006b29a75d65482b7600f99366c5a2cd8e08acb0002358781e19e4d63c2c9f6cac', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e99ae32679bbe1da5672bd4086ff319811eb08c79af6a685b3f09d00f2981923967130e8e64964c1a81c3b53c082eb0bef3200940ab449e167faac905da597b', 16),
                    gmp_init('0x153c5acc08077528fadeffdeb9928c94fa8e63b9498e8b87ed4588fe4e3e98e89583035c1ffe475f4fd7b58b8f97fb121327a54cbd22a555905dd8e7d26862ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61d86f5ce313e4e14503cf99448fafe0e60e65ed131bbc8d05101f802d32def11e5f8b74b4ca97b95965c2da4c6a5688f0d62b0e708d8f7c99270f66a26abccf', 16),
                    gmp_init('0x850b1b5bbeeb86aa01029d200aace7aae404ce4631091f440b1b02e34f32b48ebedf1220d110b225df079b4da50a88132102bdbf7497a982f61372c553230a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a6062b433cfb83b5262a4f1f211ef824debb84be0ff358ffa748e8558918271ce20e79f6838b4213b03df089ac738d7f50ee5370fb86088853a242ff94aa42f', 16),
                    gmp_init('0xa37968b0b49b54023646a8b0d1c39d71d170084bf7ebcdaf73b8dd1a709ba78e37fcdaeec07b53aed19a187f006e7e772c94c9e76fadfa9f6620edc9e3277f6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x112defd3fc697932fa229df2a4b9e519499027ae75b74d48c0ff2eb69473e28e5f24ecea27661888748baaa5306ee8a152a9e23f60916c40a0ffa1c27bff9001', 16),
                    gmp_init('0xa6b1104e3cde92cc29d19a99adbbb0a32658113f1f5aa48d3e75501dab2b8a2fb6fc8a02464e11914b5430acc3dce6594d4f1541506196b0bc5b2572082502de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x83345edb03f06bc8ffaff8bae1608e18ad4b0178abe2262d468443ee10e1af2e2a954bcad26a717c2677bc59b1f3fcdd0c661f8a7cf1d5457284dc653bb8dc71', 16),
                    gmp_init('0x74f190666bf3df7ea4bf0a65e8dc8b83c5ee7ff5e8f14646a8a033992798f374c50ee4556f8ab13f5dddd9b5e5ca369688de1283f81dc7d44f475e55c1861821', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bc410033866cc036513bd63479fb6c502340679f90ab3288d30e85117f4944145262a8df6325daf2100cdd8147d9f08979d205e0264a761c4636b986b547c8d', 16),
                    gmp_init('0x1433edbb79259d296284901c1c7200afb15bf410759218388efa11c08fb31abe9b04c06993734b1bb85bb0aae45cebc247d56c58b6586d37e3ef2247e84c511e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8aff56a5165036d00a12d9b919f3e59323b6673e34fda7c1ad08940c339789fba986ed1454182383fd232a17bd8bbc50a0d8def1aa088b33db4c1551051f46ac', 16),
                    gmp_init('0x98903242fcca5fe3514d1731750449969270bd096c458168a8f3c1579d1d2f43bce50097440e75b8658ce8ec8315293fcb28ec5fb479f7d039a9b06a6d38f7b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30201da25252ba138dadc8b78215d1b780109990f3532f0d4727e63d8948f26b5beac491a024bb04e8bd6139576c0a177211998f4379e0f8b0719a7d07e03351', 16),
                    gmp_init('0x37dd46919d38f66aaa07ea14294a5e16ee984a373b5f2a809eb2af55fb04658ae062bb0e12c14e8faaa99ef7f4f20d4e11081e708c77243eabaa6667f2f88e3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e34a2d4f7b595cdc06d33c79b3e656e332736cd3e7b5cc06c71cd0de72ad132f4ec508786340b2b6485023423021874cfac575164e7b1dc9bc0bcc3f14bd82', 16),
                    gmp_init('0x208c8400ec48990f685ff8d4afa4d2404726940f6da3460b1c1d20b6c656552d9fb9ac732bc1078eb597cc4f46508e3c83db4889a09ed0b7e9edd3773375ac70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d8e7a6988a107a2f07605be70314df1acb4b5a190e6b887b4544192ec3312e1b0fb3b3e258c41095aa877820b9e0a279e1dd7e9077ff00167c6773809935a54', 16),
                    gmp_init('0x984f23b035175638b9fe88179fc3239f7d7c0b685e5ce22aa231bd565a39b3b3cf919909547a417610a19b63b03c4136558e38bd3ad742d580cef37d0bbff47f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2509b3729f978579ec530b4c5e1db6b16d771cc00bd1496ddbd610a8ce4264e6dab3d8d0ab35c283ecf9703020035d83d6da5ff8521e1eac8199a68124122235', 16),
                    gmp_init('0x941057ed8391b35674510f0486dc613cf565b8ac89906b8ee1ad7173702c212a2a6c3c8ece6afe9ca66c37768ffb7e74563d5c0ce9d41bd6a67fd4ab5225280a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3793259ae7caaff496304ba3aa9682eb8007689f20a16978142041ac489ef6d7e3153fcab82e66960cec80617f3f1d083de84d2d98c1d359f9d6099e7cce0691', 16),
                    gmp_init('0x44795605ae4867dba2bfad8e4b9d9f524eeb5b11c2ce96d59f8f04f3900c45d8a64e00eb4b71d93e7b2a0f7c1991dd6c944385a88537602be9375944aeb06f1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x847903703020f0ff04aa741a8964ae9646001160578157cf5f04c86bdcb4c3d30c4cf3ea05d7a7a0801c5ee02e71ad2ba3b3dabfd5868640707946a80b276e2e', 16),
                    gmp_init('0xa1ec59badf2d8198c4ad35976b1bc6cbb38cbf16790bcf0a51077765415d3e8b085e26db5dbeafdad4cc837875176bf59a26f93281685d3da8c95b4a39b84eb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a196c30e5ea5cb997218a58eac5c0f21315939c13a6e8e34ede7ba5bb34350f56867f6f942c6f30789a8d7daf38f44ab47dcdf9073b41b1fdfd8efc794ecb6', 16),
                    gmp_init('0x8d3b0a98b23bffa564b0ed06fd8a17fa8bfb02bf8223a2e231998c6f4f3ebaecdf70d9b4cbdf630087e1ad3d3631811a82e11e2ef66228571086af9789f12186', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe178ee313585acbc9344bc2bb50ce41290529fb17015caba4df11cfb64647b719b5cf3880c136074728f171ca023dd5283dd285747f5aa5be40f481fe6883a9', 16),
                    gmp_init('0x446649fcc0637924c23880434e8807bbc09cfa662e5434864d571db5b315b7fbc31ff2dd620efd48a47004008b44803ae3e2c8b2da26f71d65b78e980abcf67b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x28111c067efe5df043c00822f8b0b7b4a3bb57919a2a60bf887aafe618aa541fcd9ef3e7ecc840c56bb6dc1bebf5f9247c540b48a3cd6c7ee4258fe071012af1', 16),
                    gmp_init('0x6b999cd2510b6d6b22856b60fe6d1ff98dd9b268acb35d8c83c72b9859d72418a912a54d8e9ee9907eddec4a2592a2afe301d289aebc91c6219a3e79b565719b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45b7d3c04cd6acc8a2b7e0733d5e58b9fec964545679c4155af7b2fb34f950d91ecfafdfa4fbfb586ed34048387bf70bbede89034490494f4a1bcadf6482cd5e', 16),
                    gmp_init('0xa6c02cb770596d5248a63992d5c06310316a6aee0aea17ecd564d0f5851a299c13b47e2772bf60ccbf6d6f24cbbfc6e0e41efc2664616e73c25ec897749d0dae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x371a522d458313ee881fc57fae318d2e42e7c34bdee2d621d19d4d9023b3002b943f61c200a204f343c8220266d017fb784f50021ac571ef8b1c498652e30c63', 16),
                    gmp_init('0x2448511208ed249fa3b5a2ea9e643f9883fbb41641cb4a85f5243e04e035c27776103e3997bae4e17844fb20d890de9d50547d7a9a3b5f85d9c8d226ee39cfde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c8b70aa537264bc89bd59e3380bfec322d370b5fb3e2a2af61e0dd237a7a3dfd553490427fc94714065aa049293a805073224570303761ab7c92b5240fc610a', 16),
                    gmp_init('0xa7522edf881170876d1a2f3c6f1aafc950d239d331e2be49d8d434c2ab7b7ecb23de2a055cae9df2bb47006c605128d04f93a8a7a5723b1668b30c434c45e5be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48e4c75e4f5f770efa0c4e021894a4acbaa3fe618e45b5d679be4158de4183250b27caacbbd5607ca7372224aeae1d179395068fcc54405fad926cdd18dff169', 16),
                    gmp_init('0x943ca2a26d08fa6249d4e8da39814f10a5decf664153604ee79672b8576f8e5aae7d70ed2760947f7652af733394241f26826c03fbfaf450d9e07198a696d194', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11cc70ef863b1c6c1ef009e7a2ab84a9fea35143289b03e2e61f307fd72abdfc9ec996dc970268d3ec57b78858af2887f0476ea6a0816914cf6c3f50be679270', 16),
                    gmp_init('0x55568928105158a1eb88eb9002b68fd3d1355fdb0400c57495807cae93d87c232871ef364799a1ca741ba2d4efab4a056f8bc941bd0de39f0ed316deb7b71533', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e219ed90cb9271a5722de8101f0bca3536bb90682d73458fbcb3b931e116cbae9730d98ead6cc1c61c87ff514a84d9d9f555e56a68792ccb9e2030a282a1a13', 16),
                    gmp_init('0x2244a1cc90e26777bef3d73f2caf51eba861e128d66cb025fea40df4b2185891ffce0795148fdc9c8c9de5888ce4cf80a23e9a6b0f2b65c1ebc69f77d95060de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f12ff62d5fa41ca16d36a24dfb1486c15fdfbc1751b30cbf454dc6e86cf417b43d5f56f1dd9d2c8d3a4abee0db85e185ce1c9ee5db998e8ee6c2fa8ff414a46', 16),
                    gmp_init('0x3d5c1ac4ed93825567a1d530292e569e77378d4170abed70b88cd3e687311963e3b09f9ab7ffd5453922348f2c0e1d5dd587dad37a6c6f972e7def8e3e77d4e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68f468e6a15afc9a6029af9be8758edeed0b8372a927de6b15525a1faf1781d1e84b61beb145d7f129e6680d53ee6634be802963a8b50a0b6a530a81bcf5c59', 16),
                    gmp_init('0x37886a5476cdb6db2d0c31e7a00fa8680c77dd00ce304f4845d95099f5602b46553c50a2a1e4685d8cd5b55a947a9949d23e8690ed74279944592444bf00b61c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d63e771bf3e60409df7e045fde676963edf68edfe9cce83c3e33e943f54d90a723dd9c3bfdc8b37b8293caf17325bf253209f42eb35f83d40b541599a5174fa', 16),
                    gmp_init('0xa873683d145324c4c57716e5bb4da16bfcf5574255dd0e1e907d9cfd21f5f1bec3c385ac3a0c4709296fb594633593711f7b47dba0af583eaee693b2894ccec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e60d3d6ecc0d7caa22df31a167b503245550295623bf03c69351bfa1e59582d64a95c4b871a18ceeeb2fed96430c6ce2d648fb9fd07f3fcd039a3efe0ee67e4', 16),
                    gmp_init('0x77c85d49266a2a71cc23fcdece257eead0bbb11cf9d950ad97d0b6bbea10c2fd703e8185f4486137231daa3db7522b7e6fa3753b08546d3b927c9c0e24e92e34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b49ef3bc09e3d307087a526f2bdeff7b745b99a68b182bb89f0d41379612cb072250f07225f278fdb88125710f26cc3fd3476d2838f0d2fde18c2abfc578430', 16),
                    gmp_init('0x37f7e9fe2e2502349693065d4f8c4944d9a472cae549c5e4fc8d41f6634b0aa4d6559705639f1f327920fbf94aa09c9444fb7ddc1c42eb7fce3eddafa6c7efec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e51ac5c965e4a78327ae381322eca0de269b7ff65089cb7bf9218047b713c84fbff7344ae09398287ffa6cb45e8fbce3362f976a1114d9e270e36d18559d502', 16),
                    gmp_init('0x3a4a0e6f869dee79f9cfd78dedbe2a2d9d94105e4f38e9ab135e46437786cb80d6851c004dc43a5fb98cae9e31f00ca73681c177048fcd35f4bd4f307e29168d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32f54dd8715550c692e51959cfb072df0093ae7843d24273741506f18168e21a7837ac6d67062ae15f7263475890baff9feccf61862afb2e67e9beb3a53d9a0d', 16),
                    gmp_init('0x2dfa467b0b87da4ecdc4c871f68c08170bb75128a81c15321b2fe966e4827462d04727d429c926e75dfa3a5d2ae54f8fa106becfb9302c5a46678411212804e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3908837fe429ab4112a1093e01f82bbb55f628635bf73a2a5a5e8fdf20a2c6a4652596387f87a263e152d95dbdd543815c38e11a2966f9f1ce945ed31dd9b94f', 16),
                    gmp_init('0xad66fb63ff24bafb10b46a02513c9f728b834218172ef79ca9a8b2935c8a11810e982094ad5ecc90a6d84481f68eee79eba9a06971421c573437ed56c1db105', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa8dbc7d2d78b8b748a9bb5dd310ceb447935f7294adbd632cd0bd4ba3ab9cf069674f73b79a8b6f8c5f1dc612922474265221cbb8f9faa7ccbf8b64d6e50d28a', 16),
                    gmp_init('0x58e151060a53b376ba2cda770de7c9c5c84b076d1254f5473fa8f3018d9f6172a2c684a353d4e338e7ee36dab636151c1b17fc7227cd2eb985b9ea58561b30f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x199f88b51693e78a03f97ef9193e0f3750f4c4924250438114ae3b9d6d627221c1a0eb926d153f96e3bf623bcd33cefe6a88e667f951e24312a6b21df77ce88', 16),
                    gmp_init('0x62db5dd6d67572617296ecdbca4a51efc60912de17304a141dfce9f8926ca2081db6b727b24044de8fa1a9695c5ac5ccc211e9d414a8d851d92159558cdbd7a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14c387a18ef850b9edf8a011c3304e489499bf79c6029b06f015f58ed775896e016267d84bd4db613645a5350ba1f227346b466e61ede90e7eab3b8b8d41128d', 16),
                    gmp_init('0x78c15a1b8549673afe67dd84d43f94c2043e8e7575cd6df93f05c8aecca425fc6a322ea2467682d4007ec87b512515c65aed6f85cd5c3792cb0c13d1ba779470', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xab14c08a8de71e5dcc49c35460d86024d936ce783a919a4d9c99b79160c0755f01abb18bfb14a4dcf6ce118fa994dec940782855163c28984ac6ea6feef7acd', 16),
                    gmp_init('0x997831ba4bca8f871ea3a7b46bfc0f423003d3e023ee27929656a44e27f2b50c226ffa581e0fde6ecd1c3f33265753525502b8b97e8e8c6d754b92fb1bb1ff6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a32029134bb2e296383d0ad55c9d7b3926990de4044578c554bbff2cd2529616451f915ed7370a5357e467e27c0c17211fd0b67ed665717936667542011ffd', 16),
                    gmp_init('0x7f1ba2c09d469ac1ab7a60472b2ed763422980f1037090182554b2a018a9498c20045b9beebef45b547a8350de87b8ef09164e11929c32186e5810f3b2048b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71fa208a6a11673778ecb887fb2f76e2be9c5fa6b53eac89d8ea6f027b01fdbad5f2b4ec811c41c84bbe7662b75383ff1a87c0df80acc09971f99ec25f8a12ec', 16),
                    gmp_init('0x59d01170129e6ebfdea309dfe07ba8594800c896d3f042d196ad326c04f2f28ec23d7c3081e9595c41b2781a63a028d9626ad9c7267e416c7f247336edfbb4f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f79b28f7b49ad9ec08ccf15cdd91ad5251c27bc105bc8f06f5584f4d989ae78a065245bc861233b568c9e06156460b73ae76e4e8a5a991492735d180d2d2565', 16),
                    gmp_init('0x9cf691f7d48c9faa51fcf1227e143c8b7883a4d6e199fa6d54269b16b38d861cb14e7853961c04cc9ea113f002e48936549a0fadc8a1c9ff09e51b7c30df3beb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x366c4efc39588b01ced4f8c23b86df033d05ea7f593637fc6fe8d10ec8ac34730b4d39ac9cdf543e59fecae5c50bcb4ee0d279896db04f35c477b2f369e9cfe8', 16),
                    gmp_init('0xa60005d735fdd9dafcf6032f5cc29944b49d6e338e3d929ac8fe0fbe57c9ad4850750b05b27b3e502b78b3389e9cdf63f22bad30c9b55105f0c94f3d081cd49a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x136928d790df10f5d28c98e6a2d790687575759b0c196aa2b222319a8e1dcb0fc6f1c757a05a15560d96af6e5758fb784ba86a674558021bb58c8df650e32c51', 16),
                    gmp_init('0x5b532aea6f19b60e9e6bf7f10f15f9ae799dbf3a7466cb85c3d7830b48d460a03484b79c9b39835bc807c568acb36fc39c9dfe5095a0fe5f826d3f598b970b0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91c162189b7f610986540b3c5bd8f691c4cae8767ee9b2dfd86dd43d74b207bd46f8717125bf2ad8b1f4c37941d67ffb275922a9a9bfd1e600539ff3f8136ca2', 16),
                    gmp_init('0xa0f775954ad4acc0e9a2448cc62f979a60f7add876f27b3b57b4a5788e36986d476d386ed216a3a05d48fa12b62f446ca7004b301ea55e0505aa79d0502ba5e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73cb7c4539048d319b52d016186f36271b970d63ec29ab10fd4e41b66a646aaf40a910d09b9f5e13e567c48e5f1d33ee464038435aba5bc86c69effa0d5ada44', 16),
                    gmp_init('0x3817f0719c8573652ad2f122c1ebb966b115da64a95754b3335b4d54a57e4024c74ac241b389636ba391f7f8054f091af489e53fb89031e99e59f41551e05b8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6114b70b47da09450a2985a2071ac69d7c6ee12b41c9ef55e90d94fdc9a382f3e783384b51e133425c45b7bf74523534fefc959fe7935b9d1fcc4c3e8e19c9a6', 16),
                    gmp_init('0x49df51b3f082f79afdf023e100161da8623abe0422a881380c1bc1ddd00413b220712b7e096710a9e6b40350508921488c7fcbb76fbbd33d34ea2a612bca5256', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x171033fedf2cc7dad38f5464c1cca4161381ea3f2cd5886226d16404bc8fd9713f8b6775db53bb632c6019d904e90260e9f846b22283204f23ea5b0287b9267b', 16),
                    gmp_init('0x49d99a213de1995f83fe1523f7f658ab30e6c5aeeb5564ca62861512c1e72cbbf77e7681a22692a4b646dfa365be01f8748aec275b2dec8ab6e18b4c751bf091', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa220567781ca6b213577a494eca0693694a4503cf7c4df58a6d046ce1d3c6ae1f9c417fd1c7492c0efd6ae6b187859c5deac4e65494035f7bc0554cb1aefd373', 16),
                    gmp_init('0x54d4f02e743e6eab85cc636513bde353aa19241c5e273e42cf77db276fd06d165cc1de319aea0017991a78d76d56edeeca770547d8b67bb3509e5d39c8b2f423', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2117eb4628bb58473e52f8cf944210f3122800b44dc8bb2592ca61d9f0ed8ae442f294f29fad24b7c40cd3f9adab606017895cd063e034279b5baca235b5e5df', 16),
                    gmp_init('0xa4fa22b2695473f8484bef145323e4d6e40f7138310dc0e4eb9453ec35c142758d990f73866103f0df71ed91098a4a364893b6b250619819200a51c9dbe46c03', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x18c3171a2370ebc98d3c3b6e4cecf9b006bb09d145c17bd0f19b587d885f9542fc69a2c526550f2092c33da56301042b93ce5ed5903f0fe9c320c2e3f72b06c', 16),
                    gmp_init('0x9bced48c57ef0eb1e40c193229ca726f695cbfdbbd2244a0a99d148017b316363d5fa40b941030102db6e1529434ae3e1ea156ea935ecae82b4b69aaddc6cead', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3dc26072f6242ecf676fbf75d91f13bc403bc3053c3f74f9fad8a958ab9bb1dbb461bab82d67399bab9d91d3d26f4ab030cc2189aeab2b10aa478e9aa9c2c83c', 16),
                    gmp_init('0x5e10ae591f67aa0b2590e3985f58b36f37daf95cfa7dadc2b9d7789a0544b6efe3a40109f951e5333ed178d034bd45fb883eb8c3cfbf1e2791465652c57c9704', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b206745cbca8f2b97f3a02f9c15a0acabad8eef3f9aa8a07c4c3aa4d9d59db0bdc3623c56ed5af5017cff21b1d2f4b55424609dbb30ab1397cabcd80ca546bf', 16),
                    gmp_init('0x6fc9ac65b2a15a9b6553119cff9fc4c268dd7632950a25778d8def081b5cbbf5e7386a1edc3f9dd4feceae7605f72832c697421a11b3a36ab61a7e8d7364ba29', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x832dc89d950e125e08e0078a1ac571860def96aca12858edf00380b95acab647ac42903511ee8c0edb33cce43a8cf11270c166871f9d7bab09ac62ce9b37393', 16),
                    gmp_init('0x85688a85b02cbb2232e313b920625f0920192fe8d90715122dd504baa7eb90ec39baf924a932c0f51c62eaac7f3c2363b2a7d9baf0b9383b225b328146d2361b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x273295135f6a71de7810e5afc66a9d238f239dc37431a1faa36faa76b8f819e83c80cb93019f955f74630089cf6d887493603db77b317d3941561b851c5335b6', 16),
                    gmp_init('0x4b860e7db95f3206920645e1fd466e7847574c12ee1eec6c4e3d18b7fc74db52355c421647e7b19033c1c65c442145658b1009dd5f721c11f28b5909edce9710', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x334f85f9b4f05f7e4d5fcbd463250127e55c3d47cf9e27a9df848ae4ee7868ce7853f6a4d503254e0fc771f176fe68ade4c6c86fb277bdfea22990e084d426ab', 16),
                    gmp_init('0xa754dc095d23fd5a655417b0ae2a82728b17f8413360b2da5d479e0f5d2a966cd148e74e720a7bbb0aa6b387d088b1c922854a29d8021aa9a3e2e3046fef85b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x207b13dfd8332d49749cb70430d5a3d467eb7af56cf5f7dad30b3d990749076f1554b3d182edb3f4fa06f9eda71be98774118dce3c54f474b4387f96b4dc1d68', 16),
                    gmp_init('0x14ff90eb11804451a04c1eabab5b24bfc0871e2b1bb196e499f3181810ec9ffac426c888ebd6bfdc822ce34bb3afcb0c6ca63e4742ba80cc03a3d82369cbace7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f10ea6515d9d18ab795256a9bdb1e51b719cc4516a3b4d51eab2ed080777c8579602ddd6608a2d855b5a85732ab36899937c62114ea6619e101b4994b105b77', 16),
                    gmp_init('0x9801d94973d1ac343bdf955f3eed11c64ad378de2bf141ca3f34c37a0601cfbdae893ceec25a0287ff27a0059fc64471da08bd66680bba941032979e70a9de4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4444f6bc686600168ac2876506e1bd050166edda66f42650bff560793923db2d60a95657d9ccdbb6de176a96a4613a7474dfb51ff9ae2d8e3858d2b073bbbb05', 16),
                    gmp_init('0x84f4f338674e83e939ef77bb1359f9aa07f6237d72af4647e813a2521fd066f142cafed6fed09dbf037e071daba78e3aa69827e53a2326095be3ac2832eec404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x272e20d864b789ffc1f62a75cf32eb619fea19159e614138c4c58236a157d2594ce8a56deb1a2bdca204535c9540b3044344c3e9f0b47fd454600f6560248954', 16),
                    gmp_init('0x8e580238884774a21ca7eae9300049230fb1f7520d0fbbbbbbcf70523824ba0951060512813c5db61d5dc68ec3881ff8cde2f66e5e1b66c1e8d360c2e63abf2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9726798444afb4dc547e4d383b3353d9cab9a16e4ea45b3296a9ef6cd74a7a09c70d1cabc8f49d3948703532568b893986a7167f0ed4c3f959435de0ddeddf62', 16),
                    gmp_init('0x42019ce4a238d97ab698e14d9f7f13f76e178f69465eafe49560601e669cf56d37989eb65e0a35f424f64b0729bc8957c5c691911b105a41bb4ac228a9ab7bff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8738f509ada238c16d471816ef08c1c3090cdf329b5f61f34abe4333f3dc3234915612b9e1c0b9558b8706ba3c5ec34b73cb27d7d00b61194b366e03f1719be7', 16),
                    gmp_init('0x45737d9f141d9d1e11054f02ee74ee8ba48a411e433284b84227311e3e6cef204ecd19cf7efbfeee10b056aef74d956b9c913896a588d18ec6a425f1bfa9b037', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x708abf37a2a9858c973ce0879f932c06e7704d3a36d95956f95ec9f9ad3b3cdf6475649a512ab68cd9b44c3b845b5720701d4426a3434e328fa55783e8f16137', 16),
                    gmp_init('0x7b1b0acc81152ed86a9b7b529ae6eb3980c7c0cd36233d8ef5f583af36bf31f87c462fb9b7cd074deba01e77ae2be9540915ed1be406efe27eff7bb36181e824', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a3a2fe2f52b19d2afede8f8571dbf53d5e91d7dfc78dfcb6d383c1ea54de18b6e046abfa18d655e907073daf072d5a51e1d7afbd58490376fa7c971ced1d1a1', 16),
                    gmp_init('0x94679b6c8587b65780c0a26472dc7db5c9550e7367e2004decde424a663df3f8179fda05ea15b9bd3c179f593d1f64d63ef6d17939b2c319842d4fd7526a4dc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1da18c5d786c94cd678dc1f1f1bef0316beb89509fd6e07dd23153c6f9fffae097d5ca0e7907c815d15355518153e77572bc52bd044b422aaff5657c6f5ebbb8', 16),
                    gmp_init('0x38e7ae738e36f0c0c98d6eef08e7474650e61c0bbb25cae36cdd904d46dcf7ebca5ee048a2f8d767c392613681ae16454d4b95f8c794e1c7a4c25bd926be701f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7cc01c56bc64afefdb7e201cd9d13452aa258e71592f8aa8df6e21a38503b343b04a80467b06d66cd2b369a917daae10646bddaf5beade78d1b4f4e01dad43a9', 16),
                    gmp_init('0x300d72e6ba8c74b138567f56ce997bbde4eea935d127bf2d4e0b9c04711afa8d7c75522b1089ac17f5a01df72dfa9cb73a308edc7a5564c980e6a3ca3448dbaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x645642ddeee4893dc53faa2ae1f1497acf121108d9acbdc2226c59177d58be8b105357cf18b6a79b5bed0894229422ad75ace060f266c1c9acdd929bc00ac9b', 16),
                    gmp_init('0x19ef90cd3f9d168b119fba501d8568d9f13c0ebaf7497c64c88610dba331e77bff5560ad0c39d1f5f2bc9a029f97adeaf97adda322cc6985f6f5dcac720a1c26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64979de88be7e432f650f1789cc5ad17a647b727729fda0ac5be50db68926746c0fa86b3db6141d94396d630252b10f5ef96b4448ead1a91c8d897c86c21c854', 16),
                    gmp_init('0x24a9a0bed0a669c58b1120f599e61fc8d1e6f6d98be9df5ab66de0e829fbe0b5d7ebcd5fa0c69380a5bdc0f0f3e69286a09c389cc0e21808d671c39ed371c7a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe65bafdf1d7b5ad3abda72736c504286309e2acf277234001431680fd603634218ff2941e07d460c7e886235207a14715394ce1f6e55fa6980a8defbd937274', 16),
                    gmp_init('0x33ad84e290b9c6c731bd59288b60c6cd538c664978acd9e3c75726b20d62aef139941b7d79379ca7644c4deb6ef94cf67f4f0d28bccabaa526448f4bf62ff20c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x814d68e275ce46b5a3025c51a68b8aa9895f3820de81f8d6555e46d92e3b1e8839ff358fc6891f22e359586e17730211120ec987bfa3545c86d7659fcacea676', 16),
                    gmp_init('0x114ad3ac2a926eaf92b113cc9fda5ecd05b62066d2eb46c68f2a97277bbd647e25032c031bd9efd7796a35796be8eb6a1d483f5631deee40a1cddf0ccb549ddd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x281a00e0926cdeb3943cb1e77059f8dc203a7181a1fc12d279381eeab4555d6cc64b3e65600a212eed1c99c1b2bcdfb593e332eafda22c377777f7bc6e9fb77d', 16),
                    gmp_init('0x5c8cd5d4120305ee9f93f662ca03d24026ec0bab6d9cc8dcb5efb480103a48e312977822fce85784266ffb7b168d708ca7b0306d7ed0b0b8d0eedef03f6988e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70a7bd0df881f5efb6be5b0cb445492d4c0cbcb626b2c14db83f811500297dffb3015cb91bc15fb858ce70e0d92cda6ae738c6b4e417dc2d9ed8489a692ccabd', 16),
                    gmp_init('0x5a44295c7b4390758b9ec6032f69776031418361a3ffdc8d7a405f48a9a1c9be41cfdb7386c989c61c6ed21a68381055305305a2769dbda8a7af5b92c79bae0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb8586d1f10f51784968604ae595a532a3b52f80aead58913b2746767e244d7ba1d11ce63f48c4e843f7d9b2b2a7bf01cec73ff67b58a7466ef8f683aeb69b26', 16),
                    gmp_init('0x4126aec7167f1b41a7d671148c9b720abea512b1b59d57a972be28df6a518c03766346e0fe69e2981b1ba95405ba48a517b67602a06ff71639a35946b3ec9cf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9041fa808f62ce243254edaaef1d79671fbf67f79f7a0cc25f9dd4b5efb7f69c40c5a481ba63df991186e73fc6eeb3e5ca1d77380fbe8fb0e7ca475ccc7dd2da', 16),
                    gmp_init('0x7501683a3adad8172337642f25bb522c86c3544c87d9e54e894331c9f6c92b0af700342887e8e81f94bf7a221181376aaf1355a57a35a44a36cfb59fb4364f55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbe58a0cb0a4d8aa6c4680c9010a403ba17fe2c673959379e50dba05817efbc1898c2115dead322ea84162707bb965f43fbec98d8d18305ec1a4913a067a05e5', 16),
                    gmp_init('0x8a186068bf775bc1c47ca329df2dd0bc2810c0a5dd45ea0379e95af2968695f4c24f40a456572d3f1467602468acdd752225be79b349b099afbc6954587c6769', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x595cabc453b6a2be43ede1e168dff6dd31e2ea40dbfa8ec08df124303d542be6cb2237026e1302bcba24703935db23ae44b9affb75f461a6d09a8e135739919', 16),
                    gmp_init('0x4c6bd796a08539b053e12b5cc3d97c84a0f3bf46850475e379848c429e32f354441076bf314cd1349d95c51e59eb2f3944107115054b29a52eee132ddeb8cb5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b7780623a398baa4d0b907944652f4798f965e8a5b57b8ac11ffc82f8ea707e95a987edbe68bbeb9e1d12c4aa3bc2ce91c762185842dcbc87397b6482b552f', 16),
                    gmp_init('0x9b6830166af6417199964d6e68f58332b72319a905c43103a95a335de9aa0fb1a4d0c17ee38fde8b9a6a4d3e610150b9ecaaef11baeb1536169c0a7d094a9399', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85cc114a7f238892b9631d9725fb6799e7fc44c57dc912191fbc3f4a94e5669318c2ccfe12a7a569ac7d1f5f28737c8ff3959fd646decfcd54acbfd70ecdda6b', 16),
                    gmp_init('0x40481d87928e2d26f70334fc9d080410cb9c2015f0c362893cef325364a419d4fd4cc0c06fed66c3459ac1e7431353d389f7eaffe95072341812b286ff03832', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78e65fe2ba72652e348f86d3e03afbd51d993314235145b15bac0f96e4051d707f059e6e4482eaa945757a7b9363ed5abae9fe1a3fea4960812b906f304c0d32', 16),
                    gmp_init('0x67fb2fc69ed57cca028051a24fd59e83bfd769d34c6948c7b39c9710ca4918bd4f4c64d15289f1110201c07e3adff8053cabdfff3410f712aaec337fdb3b87e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x562ce86044d6ed4e98cbd32b208ab70ae979491d998ac262d09b3295577c772116c473f6e8974a6687bdce349841d3cf3a46b8ab652fcd3f109ce373719cba4f', 16),
                    gmp_init('0x86b31f400e2b3497d2889036a58437c7031b232590ce989232a229d7b8bcf0cdc4856ee6bc9accea11316fc2644b09b2516d13d3c2b5a82a59e554a2e336bd4f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a399dd645f1f9af7f953e6501e7bc203c276c1158b27567cb616cdfce528a53c2ff24f9dc8a47a7c8a4346746f7a7fd8b707bd9ac177ba69215ddd5d89b917b', 16),
                    gmp_init('0xbda25034ead9251ebae0ae8d2b53c93894cd6050e6a7259645f7016c08441e8694d45e3abcd6ccd84cfce219a1584a43dd00b3d2f85ce11baabe134b0ce4c2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c8f1fe4452bfc1dee728d0ddcd1021357f8507bb1d3831a42aa7bb33c70ed7a5f19f4dd0316c1dcfb25ed6310061b5804a5ce30bca329454db98f45956fba47', 16),
                    gmp_init('0x12ad45a2d7c8b942f16f8c9d3030f8857c5f95de51ca4f853c0b0f43b5435b766a21af858ced2b4797b504ff0cbb740cde6e9c7bd67b98d4c699c18b1e5db07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b01886a0c2d3357756f76eb616ec9f3485a995fa30b7edada903d3c27502ec1bf91bc531f12d8c3b550da862d957ac5e64b5073151d4163c3df8b0d34177acd', 16),
                    gmp_init('0x9c3ed5d486286016ad240cd02ef73d9c0d24b3c319cccac438cc610ce96b926427d1852c2d0025cabd075db9782181f1e4940a691bf4aa963dc46ee5f7667701', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa68413e648ceefb1ca369782651cec6ad616b0133a268a34b98b6c17f5b196fd58aa588458d0ef73a518010eec568a098554e44c0903bdc73e161325ecae506c', 16),
                    gmp_init('0xa134d6f0abce084c4411f2e0c0dd6430ed0eec0191d5b59c768e902748ec23ef802b5b3737caa31cbbad6e1d8948463bddd47cf3b3f91dac7a269af2939a47aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d6ac790546eb167467eae047e807a233ae5e76f91cbe6cc1c1e94c8e2ebd12e001cb388a3ee0dc7d04a47d20a67043cf807295be9a9a9e9304a6dbdcbdc076c', 16),
                    gmp_init('0x505bd2c8e517512902496b46f974b2fe43cc990d73219811c820b453ce8b70b331d786c3e17f403b6dd73d7494b9289065003fef5fa62012354662b147a9d3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf91c71917820b0175fd12a97dbcebd051229bdd52a05efe305157928f330df8ca1a733b79196d3e1f497207f0f85f04d194697e9d561c6978935ca6d9ced395', 16),
                    gmp_init('0x3c875a0e99fee894039e8c1f927d8472d41882f5c027b81d8aef0ea569b6dc2fe25034fd5dad38aa02c16734bcecb662b646f33cc236fe8c7bed2c05a3de945e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46a93a59bdcf1a7fcd9f9c116e4bcc8c8e32fba440b215504330ab49456a6173e792658a248f37dad4132b9c337f6c9dd0c126c995d5268c98a3f5d605ec3769', 16),
                    gmp_init('0x254e510ac8172b26f9b699a8e7323204152593b1125c98fee4d47dbbb9897bc571c998d41cd1c94179794c181f08ae785b25751a69efc04d2a3c56dcb6b3ce4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23e768e0c6a4c2a06ccc64559d16f458b6f7fe3dd4c8bc200585f7fadfadca9498b01786a8ea90ca3f94b27d1d5bf59209cf59a13ecbe645907fa5ae3d4370a', 16),
                    gmp_init('0x14429f0ff9d74120a8cfa29f2af2293543bd5343d6ec1d4863fc06ac5aefb0bfd835609f5e520a02eb0a36bdc1e331ba5cf2c24d3b73e55e83181950aa02e09e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1c2eb86f3762520def67239c3d1792b8523dc00813b761ddce851004c89ceb5a553cb046c1ec24889852aabfc72eabf3f375703c6be43913dc43fc8cdafa58e', 16),
                    gmp_init('0x7115238d560c80003415937f03b6f73cef6152db6d335d7a0d1ac66627e883810e35dd32f84542ec642b4f14a73b154f8db97baa23656f373cfde4d2790e9aa8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d2d53e99e4f349df665cdb8ad84687b1b485b85512b13e65f9d4ed51cbda4cbc14f28eb054a5f9c5c40f44893bd8bcd7c32404d49b7c4328172a383736b8052', 16),
                    gmp_init('0x66d1c3e5113dab0d5369c01771e291ae065000ab8b427cf1639ec4c3e2a3785030f2b1547377b80bb7f59cb25d51cecd2cc550c6cecf0c0f3227fb2b1b1db082', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb309287749279533afc2375f01875e3d417e67f7e2aed2cc40e2b0f2986d81fb65e86752b1a87fea31eefc199c745c3b7b34a8aebb57b622ecda59351f9df3d', 16),
                    gmp_init('0x359671de8aca773fc8d21fef59d129e764fcf5b71ed10000df695d65af793b340b5f07394ba673b8cf9038a3534da6abd7445dd31a9ad422edba45d042a6f8ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x988cb31097106a5c51163db88cbefa37c26eb02ea19f342ccf235a6b84e85d3db1d9c01fe0b875de0b1c7bd710001e04dbdf3e363e3a35b9e2d7db11b75d6bef', 16),
                    gmp_init('0x54ecf238b2c80d7ad05a84b3de6398c370dddb5bb97cab89d4a70c0871545eee70fe2c24bc8f55c4307b063194df4e9a9f5e24b4d78a2a242b986e2a825433b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32569112780dcdb4b3c6744ee7a71174ccabee0e1e621cd8db958fd63bebcdb4142e6e17252aaad32ace9884449d1229fd4758bade30cdd130d8e3917cf4da2f', 16),
                    gmp_init('0x1abc65edc16d9fc4c22de58b5289dc39596752a8389a88aaef97d904e65a7eb17cf861341485be46b776eeca11d90b844c5f70e98ed3bea9003313c86e06cf6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d367161b08ee652730e56dbc7eab40d3a137f893bef1c8ade8823534bb231b675de0bd0efdf1bb031bbcb014db936301d504dcf459374084793b39e07dbb100', 16),
                    gmp_init('0x7eac1064b34eaf91462b014bfc0f0af6a51390dc2fef9b3de1ab32d68cc65e03e3ef583e5f24c1eeab02422e8461b3456932bc43fc91b50c00bd4110780d4a2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98177ba5898a3a6eb1c371e8fb81ca117fd148d3d1ffaf4dd5c3fb6b2d7d65821be5a4173ef93b1ca919f493d8e3ab01b04c577de9071f658c16e5749e7dd998', 16),
                    gmp_init('0x50ad838853e4b258759bfe470bfd4c35de51d28375e7d0bf2fd92dd14854f395f14561fb58dfe00a068de78f06978acb2bad300207f1aacd3f31e66c28a12f68', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x43184d3134d6ec7d7f35a53ef0c75d549a3716dd4a8b6e14f02619b4a59895548a2c176610ec8353a65e0d9c8aaa0c68b8b3122299d5462b82fa3c6cae2545aa', 16),
                    gmp_init('0x15dd6c0b06cf14622c87a8a94a925693ac6845e72dbfc63220f2b6a0d1dde0619ff96525afd13ba3a4b6d13d6f02606be7a1a3ad9b5a0f22e9419f77dead3b9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3386ef2df50c676fd7b9a180c6e2f95211a3fe3404ca35b2615c10fb7908d65a0e07abea3fa12d1b0628a834cd3f5526b7de7775bdb748c39317f875ace47f', 16),
                    gmp_init('0x138f24806166410dd2873427a03f32d2b47ced829ddcacdd192752b68c49ea2be835c1bdf071d5d666160f12d5f2f104767c06414d047b2c21e9977223e94971', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8081b6584ea0437899f44b4c363d1a24d83180dbf1877e398d02a0287ebf5fb5db264f63ab0f6180bb05d7425f216fa4f6ac5a2c9067b47d12d2476ddd589398', 16),
                    gmp_init('0x5111cff34e80029fe8d93ceeb28ff25f38eb41fa15b53e8985f3872dbc0c33be5a265cecc241c3cdc19a7c4fe1da9c1b98805a818dfb379d38094feaf91a832a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ff1cddb091407441f4cd632b3dac4e5c88dea07bbb8732c0781675972d951bb64c47cfd3b9845c99ed8492a038acf1e90e021b5d811c0dea73565295482bd3e', 16),
                    gmp_init('0x2eb355e34ced82fc05588fa440e5efff8f5af33eaea9b67fca8dee3ea165b9a8eff5c1b6f789e97f333b277a75905107b25abc06b3aa1a4eeaa00d030e02ce54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94933f315432a4b534411487fe3dc62fdafc3e3d9a39e9448954e3e3347fb5e9a3abe4374792ca88e609d9cf4f52496b89c0aac890de5044f284b25a052dd676', 16),
                    gmp_init('0x39fcbf1320f57e9651e5e1b3ef08fdbeeaa244f18dc42882df26acbe29f70ab4867cbe7a57f3078bb66332f007daa18af44762a0467744f807e8685303472bd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x509577a30ca41c8ba9280b938fdd9727c8fd032d8ee38ae78ea9e70f2c4d63faa5b5dc1556226135852d89d54334b1c3d867fc22ecc0f3109f8980734fd235c7', 16),
                    gmp_init('0x2d78ab72c9116352727af7c1a29ae87500e45fc246cf1dec2c33272f9dfbc78a78eeeb4de8075c2f37481ede2e5c2011c3dd8dd0efa5db5ef222eb25c0014e04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa178f3d401280bc86ac317f211430dddaf0d72940e58eae5350daf0b8cf906aaefac5aee50f0cef450bb022a3e801808ea3259731ca752199f88105573e88a8a', 16),
                    gmp_init('0x6e7c675904826c5be2b79a919a2bda1c3ecc8a0c0f7be4869bd5820466cdd141e155a1f54d1a8eeaeb1dcb4099cec667c59a068fdbb883b61914186ae4fb9f37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bd929ad87c0f3c92046a094964378c0d8bdd450f2616263745bd4d74664eb5e93fb3f92fc766243c98408f6f33ec4b59982520ac9969f86820a0f1fe105f65e', 16),
                    gmp_init('0x9bb09c3cb18a2c37b76e19ca2ce9970330912ff407a09d9faea100ab7c9108c2bfea2242e89df93a7a06de2102295cb5ccf597c8d103a75176592564783a23d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fb0bbc21a96296b6dfc97e652ae533ad8899ce150eec836954e03281167135a918245d0adfe6e78b42c1cad20fe238b3733281841cd1cab62d4fd32c0935241', 16),
                    gmp_init('0xa0dafb9b8b663896aa6e199bcf27c5f78ff9175afada4954b13186e758133716639336d21b07404ee3950ef2ea33d03587b8426208202479b913c8bfa2969756', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66af199bc91f3d34c73e692f029f707e3ded9a2728c48c3803e093b2f935ca7e00ffbe40876c807f07ac9683537d83139ebb3246130709a3d0e866d83a1f575', 16),
                    gmp_init('0x31bc4fd5ff10cb1a6ef5aabf8014b9201e030a49fff0c2593bf74f8f37b99980dd17d91ac37f223e45914d3c6c35e5e2e349120306701943e33745800bb6f8e9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ac515627f50a5c4e956667db571ed670ad4f38646a8695e8f05c9f7fc210a79bc64672068d0d39a885f404b7c4d758d2bab26a7aa8fc9edcbf8631d940183d1', 16),
                    gmp_init('0x8bc3bd43728f855e8b3a13e19487eae0e73ce898c6381f0430d2dd7fe7c649319abea90852b2f2e8229dc91b641dde0c50654d0e844e37e940ad8bf4ed6c21e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe81c05f4d30feb1e66827967de247a91530c1dec83d925fbcf26d488e0065f94cfc3ab55085d80039ee200eb822e13980f4699ceac15e23e84269e96359683d', 16),
                    gmp_init('0x40b60b73ab78d86b9dadb824dc3c1b79cd4c9d1a75189da15d6c6f248c1b3100e487e369ca79d460543d8840c8c2e61ba1ff396888ee35a3906b4b531fb9894e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ac0bf027a219c55ad3d64fd8ac7ab254dc9263b40b3b59ae6808cb2120868fd5baac416efcf56bf43e26e819c2677f2b5019f2c82d6695fe01b50fc9d253c72', 16),
                    gmp_init('0xa77c5dfc2bfea55f558c775cb8f6302a1c7165a1416973291647cab7c3244e92dba5e6fea082bffb9d2bad034913f9eff419a534980ffc9b68f7284140d982ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x931092148962893b532a082306b9a29f1e3dec00bb50c2a560205081350b1a61df02fc1743bfed3179780b0f3dc3ac6afd08302e2f19b4b482b2c7a8cd3c4f5', 16),
                    gmp_init('0x64d3b0f8de7a1f592222c197971d2ab24a6e8093053d4e104c58ac031378405b05f8e718334ba08110f0bb80c547faddfbe559254915bb7f612646e2909ccb15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd083a78733ace599b201961c110bb9a9167cfbe041829c498f7b8cef5af66b7aba95d8082905f33e3fa2f9a8fa850989c70816de71eaf4702b0a4a05afedbf2', 16),
                    gmp_init('0x71c14e33e9b3dec10be96f4f9df25f76ff5ae9c92f6ce49a826ae4ecf813c1a731642e06100b431a71062017f30932d78dc7a484668096cb19aee5880fb99674', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x436e411651d7a6f46cad5c336e6570206921ad6822b4dfe6312c701e2c6c7f762b8b1338ff4956a31c2109a02891edf09ddbb8b507db5944ea6702f646d0b8f8', 16),
                    gmp_init('0x18069d90992bce07a836db5e817fee9d9ad523bbcdb326bc795807dcb692fdf04a5a257b6deddcae53473e19a2c920338cca884f468d7c713d016f8d72826b62', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e67da4f3f8273214cc051a1dd59510c4be68025f39d6b6fca8253fefdd568efcbdcbbc4e05af7f9ce86cced2c76e154f312b8965ba38ba3c12e1dc8ea061655', 16),
                    gmp_init('0x14c618cf6dcc2e91b0ee914b561d1da4488689d82bdf0eb0a273a1b0f6c611eeed2bdbaa69b7d63323be0690c9d7dd193d6ee4d822e79aa0faf9a237dec340bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e01770d01f29ee39600d81502238ffcb72c22e7b2f8e0d91a87bfaf189802ab7b37087f7f1f955e50402560b4b96446ea2f5b56f45074d94e77581bf549fe84', 16),
                    gmp_init('0x55cb1ab69cc3a1ead538143af8f1831d5284e9d5a5cf4ce06a6c830207e8d56bac3bec04fb45ad6ca07a13db24d7bd0594ea02f22c991f63a75f70d1cc1e7db6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a74700e8c0cef682324bd697ff9f8edb937dba94f6dfa2be5f33f291e0aa9974c3f073d6fdd2a04e21e414a3abca5a1fc6d1a1272ab3003eac8f86199b14add', 16),
                    gmp_init('0x842c4fc27e6d6e6f612476300c9b13e43a7a24bc9c65333898a84599c3ec2f95db40f04e281556040ddc75dd114a3f5eb6b98e17ad09da186bf68eca71861be3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fe1ad4406d8f09b2bcd96e9693f8e058ae43b264e29592c26450a8a33332a25bef194f386984921930df2a49df34c3df54424048623cbaabd9407d8ba1bd002', 16),
                    gmp_init('0x5cf0a44481fe8a79150ece8ac6011f4828fc9475d4e20236ef47846adc036a21979f82096f8082b1c0eac7f6973dfc9eed582f8cebbd2b9bc2ca54627beeffaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5024ecdb2b9adbb125a4ab56df7cde992e6b57e8a4342aaeca3c2590b8489c9faf0327009f5930ab17410ab6ed5deb2055e83cdbc53645763e6c0ba677a30fcf', 16),
                    gmp_init('0x66cf988b1b58d10db4ca2fbdd2c186bd8f5d049dc98fd36e0446a4bdaca7c948354a39cb32b366e900e1fd1ac8842336f4f11946a27a4f052ca33a94f76bb13e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x691078fd0289232f0ce32fc92e1cb15370347310ae66a7dae6c854ddbb1c6aa206646dfd61bd7027e7112cc88f758c6f1005be8a2f28bf57ee7daa56ffb2f469', 16),
                    gmp_init('0x28a7415c041a21cf8b6465094880859e9163a3da7deb2f4051137dd127ccf833a7673fb921d862f97bcc5a96d135532c50b4f5ee9d7063297cd0b0adb0721e4b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7869cb8b543c93ee31e80edefce46c38bcf5039dcd6fb437a5525f045acbdd2493355096dd1ff5bf825fc6a2b96941f1640338524ebd50e9de17b60011f71cd7', 16),
                    gmp_init('0xa280c440b5800650abe4fa9486465ef5c73ae828578f75e4e0b044a14da9786ddc2271c31e24090888375b4067430ba617b06bfc8d13e67d78aef0029df4082b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13ea7f308bcf858ef6f3cb77e37d26d0efd63d91e0f485554786139a5f49c453325945660b77686adead4eb716fa79726052baaa1544e89a79c0c04dd3b27a50', 16),
                    gmp_init('0x44b226b5de4fede70be37ebef7096c928e5aba591848f779f6e1f760ac9b862f0998990e8d4fa7fb1888bd85740454f0d59586548bd2f9b9cde6ae02b9308f60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcd114d39cc4154561f672afa53a33703e1e32b9dd453253991b94825651fb84a5bee8f0a40207f1082005db5186e91e14ba44211c9804ad0edb1be3c2868718', 16),
                    gmp_init('0x782dddb67d282968c9abfb82561729de17ad2ee6a7e1739f4a9bb315bb71ca97b1a206a430c495815edeae624b6b4098489fdb86183dc8845163c4dfb215f525', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76f6957e87593f246d6bb4ffb6f74921e835982ccda994542545447e9829d8d462e1646ed306c984f915636323e800a3ec5ad3b449aced7ecf6024448fc0fed6', 16),
                    gmp_init('0x40f1af8c43994c9e5d67d62ff9baa9fac8c5b673434772d6226bfa908210b776d634d7e65c7ebc361669e98399ea05d85ab2c8821e5c35553073bdaaa0954a6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9651489951b2ba2bac53ad3f46fffbfe659a0d1640a16d2c8486e727c39261e39fae2a8a0df1b5f65d02fc0537f135e6eef066920030f464818770b313248e6e', 16),
                    gmp_init('0x422e82f75e0f32d697cced4f9c6f1135911720722fd94546ef9c870425bccb81d9aaa0369f11c54ff4dd3f2278e48c16f016304029d8d212b28d2ffdf57082ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4301afcef69371e594770fd95dbe69c52a768a5c7b98d75135ce6294c76e603605fbe0108fb3351d1dcede6dd7d28659575696a128cb5fa5a8b2a85b4d0f6e9a', 16),
                    gmp_init('0x3ad8a0137f9f583bf0f9d532bb9b1fa45af876538897419d13acae17a6d7dd8869ab76aa494c8f2604413555c04fcd43f60c20dc1bd38acd59c86498eab00ff2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x674544383f2aefa4b6ad47ee2dd90d49c80c697338841bfedfe090e2ca2934e5e01bc7e876097e783934e80a3f85f45767daeac442423553bd21bcd86159160c', 16),
                    gmp_init('0x2d548b81ae2e003b8a93b7fe7e26354bb7ed59a95dde4e8afe0cbf8a44990ef3cf4d5c19540afff5f9d2de7b5bdcc67c339f4eaad6cf87963ad37fbc02b662e5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x982dbd6ab52fab068553371c2cce74365508130c1c6cda7b015dbd36e71e63dacf3ef5eb100a82eace38f7794e0724d26f484c7a39937343b5810a45c51ca323', 16),
                    gmp_init('0x4adeafd9a1a12791d91b59f15618087165906256487b1436188f33b6f232854694587924c5987e30015fdb653ba947e692e8f3b012767bd4655796c4dd12ffef', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5cbb8facdf559f385af55f7bd70aa9fb99328d82c7890e1781d435327095cfc6a182e0eb69d12044b7a9980a7decb0ad2542b6c5c571c63b5650f4bf2a6b4389', 16),
                    gmp_init('0xbcd72190a7b0f808f021eb0953e7e2f143a5416b7b7c604457dc0191e5735ae52948d0128d13f7161bbba84b8be3d6117952d82c422a1dad6cf5bccea4b9f63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4944abd706cf045dab16fedf9ce7edf20301c96d7e0eea6da7613946664a40a1b0db846510450493939fed6179fd51404c972d3634970464701deabc2d9a6e55', 16),
                    gmp_init('0x8d01cf26afc0ad8b41ff2fa8e0100c7e15e13ee43b6493978f6dbe4ebc5d76132212ca7a53a8630eff0ee7c443abffe479097db952f1507636147da59d27ab06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d7c6a885e971a52b4d4ffbd5300fc51685fb7bd673a3032bf0eb56aa3bf543e36456ee9f20fab9efe4d1ea8717455f30368147a2ad377fa6116257594a6d296', 16),
                    gmp_init('0x7315c6e388475501bfe45016c5a36f39f090f45d099a477037ecd0443ab3c3221b7e6d02f27349f1869426f113a2ca6d94c26009b7a15f2d6a2ff1584a6c4769', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x280c52e91f316b3cb94655dadaccf883c517bca5f63d82c2b6bac62e91673bfb233bcb80f8721b699445cc68c921ce44eef7bca999a58e8e06cf19bc38141302', 16),
                    gmp_init('0xa21a08710f8c6d7bdb7d14c08854cb32acb7c4ecab0c7e21e206822676a74a0ffa8c9e155164ddc8e9bc09bc6377eee43f6c35dbada6197ea0d7b12211ed4ba3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2557688aa2d2d467a637cb4691139a7160aff0282256c86495fa9db0efa31faf8a4c3acf731d9f95c83c7fe02fcb16dc52ad039e3d374d65ea4a3ba564521bef', 16),
                    gmp_init('0x77e21d5a411a1d164f5ba9d115b8903e6491a54eb3719ed9beec710b32096198676c29b5cbb8e046450b95ad5cd6c55605dd18436e76c6e1431c0fcb6f9f0fe8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1119aa95dd30da3a845f1a951e42d9810f2f89ab0a67ba27101e4e25c908753cd49d5da0f8840fa152b4ef028600e1f891fee70ba76a211d19058da41366978', 16),
                    gmp_init('0x694b954b49e2ae0b53e46cd615a032adc69b48ae10fdfc888c142c129dcf9507696628e49bd82600db81bc6d8b5165d91d60349c75d7e968cf002e2001861620', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36f5f2e687640e7260bc1967d90d145707b1ae6596cbef99889087f472331e10203f7bbac33abb0ccc929cce6c4b1288498be23704756c8512cbf889ba15287a', 16),
                    gmp_init('0x1289ce2cdba7bf566da03e3da3b178c8db08e876f5077dc86c54d1e67e0773c74f94ba2fd112a47018f7cfb6da774f0f34977ec295955db9c1b5fcf4fbf69e4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76eaf8c13cf6931eef165fafe6d75ffeea32e5e9d7fc4dad3292e964d22c4bdd84ed60b52071ac7aecd68a7bfa963a493a8711668a3337bcdb3830a9c1404a0e', 16),
                    gmp_init('0x1c3bde5605a53f52b10fe3f89d1475ea28218cd75d2aa6ede9c5bb401725ab6a96efe27b78007f5b6ab34a27b891f9a2da1b8d88c742591755414800c3a86d82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f85e892ff07736d2e392b832385e407afeaeec60914ab6303edc20259682304db4d0c45dd9b3639a78719997d36008dbba90d61a21bf1e64cd98bf626990ea', 16),
                    gmp_init('0x7bd49e603ada05e1a74b22f78c274d5e215131fba80686f815b5cfd6c6f86fa4f9b142bf3341882444da71a7ec58c6e8ad6acab1d99f4da1871e38b4f059cdaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x525f4a337c89ee703d9cc42043829176d874b0e4581d8dcc4137cd492db8a8ada0085915e093d54e0ba4bb31243c0dfe1cbbfbce450e8b2a8258d11383693b88', 16),
                    gmp_init('0x8362af97bc20efa3d06f78f74d5a9b3ff81293c8c07b450eff1ff7f5a5331b033a26d56c41dfdcbd07fd0b4ce52aa693ded95483478698877133ba1320d41043', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5056086af207f33988c802ab718be9532c6bb737f7c6b32d9b24b3dd07efd75ed898915335fd368644b8a848ce31a270babe6b41285eb11f96ecac942e5a9b78', 16),
                    gmp_init('0x36dbf06f737648b553dc43e258735f8331ebb8e8dc52f3c486ec8774b8bc6a8be6e59fcb0f380264cfc636bb2aa9f1ee248a9c5c3eefce4d77f8b43239736aa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x80d10882318ed7fd0af6a5f6cd329eae30aa0ce4cc6601a14abf479ab9a093889a0867ec485cd7d19ba2360b6034c29d9cd190b3760647b08399cdc203c729c', 16),
                    gmp_init('0x293ef28659e1977eebd252410752028de7e26e70c4fd5803a757d8030b7af2861c450b977d8b59cffb12aa503bdc2f80cf53a50d7f4bc891613ea96eb9a5ac3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79541a4f6c35d006fad3883a9e74336d6906ffb0027ff3a26a33a844093b9139294b0027f8ebb6de39c0fd300cf51234c4bb3cad1766177903d1b8c5f23bd4a8', 16),
                    gmp_init('0x4eb2a78ab853394cd5129bc5213cfc65e2200acd39a0dd5b11fa6da0a6364861c3afe03489a12573c5291dbf54ff05dc65e6b39689a60f618f7b4dab7aed8e0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7119c792b0cdee9d317538df3b608bd8bd42c7c247b9ba93cb271b80ba114c69465c94fdc3bc708f8cd7e99f6113beafccc9573bc630305ebaefb4e0f97bf7b', 16),
                    gmp_init('0x79018cd57ad1e89f8de4c10b007c1a39077215ccbce028789b29db867b41cb8af446f11ff7b75e570e3a38e6140ac88146a63a19c32306371e14794d74a7fd87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x988f2b4f5d451a9438e56c490497b325e96a8dee43cb5fe4e7d7d98b004ff03f4b40d92db876a787ed62939f4f8d1d6e4ee8460c3e946a9a89424123b6777bff', 16),
                    gmp_init('0x9edce88493c804c1992a7d47c9582e247cbde976e075518cd6b20c4f803ca7d0b3279218568ebec0cb618eca981dee227760f687df01543a879ffa780ddd66e4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x97f4b7a2fb276e029a453a57edb6bcb4346e6ac7da2c6ff0b62015956c0f0ce9055d1bbd4bc7d27955ad7e81e9c808dbc8c3e693cd0cb0854bf2dec574899cea', 16),
                    gmp_init('0x2476f4e2b14df485deb908f34a21233800def70162f5b91851db61dc7fca6f186da2bc38d0778f50b7504bab1fad20dc43314d0db93afb2afe2c5e1310915b04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11220b6e4dec2bdea6609eac530613845725229bf26f6f4b3b1335265e54707e68c168618bbc7d771898951d988930beed3a917002303e7b5916cbc61566ad23', 16),
                    gmp_init('0x958292c50acc5ef961627c1365b80c1eb4b8938a8a031913ac041d1bb17ce74d20c4c26aade7f384f4da602a2bd8e0d5d23e5ac96bcf2acee6558856445044a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d0311b697ea9dff949638e44ebf31dca3667b7461e6656f610023d01f852b2f572d29346bb2675890680018564a0d2378a982c104738f9a5a21499257b731c', 16),
                    gmp_init('0x143bbb7086e74c6cb4e617fc3a4c59f30a74d3ba1073697b952119f2dcb3eee36d086b967245fce72ad160a17ba9b55da2551178189aa0c3c058fe8fffd1ab89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x740234794c273cb9e1e6f4b4a1725623fd3c2764177486b8b0512bdd5e128f6a6bf8aee97cb00805aec28beabcf73fd0a15e315da57d71cbd69c8a26d4cb9b77', 16),
                    gmp_init('0x5793aecfc949c2dcaaf43775b3dc0022852a60f39609d9407667f366335c55d1e23ac2b6becc491803956a019069a441a069da37b7bc6b078f59c5f759daa0c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41c09937cb5fd6ee83a1707248ded8a55ec3a2824785128fbb8864d2175a1673b35ec35ed5e9861881ead0b2c355a304c9e66a751441be0a74ff38e378ce34d8', 16),
                    gmp_init('0x412d3b3103b1d3211fcf47da0942030eddc806a010d3fa23e370610041d284595fa5c9a6a14c1e8ea5a24e918dae13655ea11f714c405cba570d068e5855a3a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105bef3089158abfe1a2a1cec3cd4c3cd70ea16c9a228cbd0524d6176ca186814ec865d0b7a00bbfde0b68a0e81e5b7c5c6b5db9ff296704034f94c7df00908c', 16),
                    gmp_init('0x43f4d15605ab3834addaa8a92b5abe7c6e593ea530acb0eda846e2989a80207bd5624506ce995bfeb4bea24aaa84d6a0b1f52a81a2904741d608cab1563533b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79ca8ef17ecea0bd556d2d67715e306fd10800d8418f8c77fef60ae33c8c58cb3d32419cdac739a344d48e57f6dda029b810839a3a402be998fe876ac4b712c7', 16),
                    gmp_init('0x6a367b995957185d87d2d0113adf82c53bfe4dd700a4d96464530130781f43cd0aa35d283b97bfadad142862b365651a70a94ae24d1fc101aa325c8bac13ea6e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xecb5ae93010f8d3c08a5024ccd8fef2894d09ca10bf761bca47e9bbafcee78423104edf5204346faf73019212aaaa7602ce6841c5bbdee6ede0095107bcae9b', 16),
                    gmp_init('0x1cc884c3eea471132f80672b030095f7e7b09623a5fdf2065d704503aa4db04e42f10ccc30260d328457708965bbdacb834a7f0794a2bbe16150374cd996c741', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63ce46bc6ab66ff6b1931e3bc24837103dcbea0a281377f098d399dd78b1557c8f143c4fda49669680004c36fb236087e8aea2647be26315880419c58dbbba23', 16),
                    gmp_init('0x82b4ac1ca3adb53274f8d4944c6c817c7a12798849308daa82171ebfb0bd535c2c5620d9e44731295130c6423131af8c9b084aba2aa508d05a72472044ba4539', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2675bc81aeddb4f434ab1ee9a1365fdf32d1a45cc8bab245c7c6b3a550e701a0ff7cca9520eed631a34afc602dfc3bf5beeef26e39a4a24c03dabc1a85dd978d', 16),
                    gmp_init('0x58f7776269bb6701fb056fa176af8bcad019a8334822d0f58e1124393d069503630ced5ebb21740ffe68a3ce982f717a0ab6ae7b774a8e49de55d3805559b515', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2df48b9e57a0c55bcf84fa12a1b9885283523282f1726e8ff2ab3dc8c6a7dfe40b0740f388bf44f7793da7568c6f7f64c8ede4f75d4685d7548293003ec7b225', 16),
                    gmp_init('0x8791a163fbc66625e27b4ac80eb8810c435d913d23fe980a7f9f57cca516773c1ed7b1acdeb3a718cabfefc571c9a4030e488a96f684ef675f6b7204b9170aa0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95f11b57cb1858721f66a2a0fb1b07baf5defa52e0e265ffd9cfde616903b19cd693820cfd4544d8e3f61c335720359a4597836a39baa75459bee0159f41d004', 16),
                    gmp_init('0x1d04101725005680db020816c630030d940594e99027cafb2634a79b0a5a92a0a0f66513f075174b5025c0119cc973d18cce77e3d7a7f3e030c2ceb6f78a72d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b6e39aa4e9bd3bc341e3e7b803fbbab035f9be645dbb75911670936f6e87319c77c40f2b10113a09828b71948812dcd72fc016388cd08366ba670a2e97f3199', 16),
                    gmp_init('0x1c6f6106e41edef6991c1c1ab9ba8785ccc872de7d99b04c9638d4c5abe21c372166bba975d95fde33b5f473fce5972706f750a16353d919f58a9fb99d1cfb16', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x200cfd48225b338cc4695adc118d420f88527f99e60b0fdbfbef9736d50fce062ece4f8285948a847f2a8d524fc2d440a73762cd9d76c8b3fc9c9f6108bc96db', 16),
                    gmp_init('0x3100663c1a28ee3e2520af185117af0ba3e347022a8859eed5ae158a5fc5f4bde3cc6f16d5121e51cac71c8908e497e6e22209f522d37caad2c14e7149f8299c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc9b3236056cceb189db009753fa84ce6eabf58ee12808217c710eacd2d98029543464533a1a8d120ba86fc7908496cccbf7181e1e79bd39b1d294f2517dc7dc', 16),
                    gmp_init('0x9a12de641d33346f5207d6e1a4aeb12df9c0fd72b0e806f52bd96aced2c516b979990743cfe00b6b29792616f0000ca5b30a9be67f573a684ce511cc2c2a8724', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8f2cdcca7cc21ecf49161f0a081c21e4d26c70328ae460e59d759270cf2593acac402dea12217692439fed4b0aa111bc5abcbc24e29c76dc168ab4489409d301', 16),
                    gmp_init('0x7a95ee42e28540718c0ba59892311181d5c3f344332a8570cdf5962e6d9a3de155a5bba80f15770ec46fef71ce68b7a01f860eee03ca810e8cac5bee51933c75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d6d8b4710f27fe5409881c1515376fc75b3c9b353e73e9e49b535fb87c2b9b4053ba8eefe7edd9361b246602b6e52f76d8730c2a66790b536eb10047be6bb7c', 16),
                    gmp_init('0x62c921b409ce2795372005b3fb03c352864c0331c858c364146f5396b3f1b3b4671d78de1a67f4f2553c4186e0fb30bc2d54c834dd58ea8176fbb3fe49a2fd58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x152b6d81ecf9d6ea433dc4e43298e5cff8936a446b89a9e3106b5e0cf4f4bf0474336835f8287cad5f7d1d1baabf99407e1a9ae5f179ae56f14e3edddb1852f4', 16),
                    gmp_init('0x67d603c092d04a532d898a6a5f22c35e77d9c3a3817e2d7d1f6d92f99751f4b6c99e1b434b05f5b760af1ed543f5f79ba3a8b5447bc2fb5cc4d9edd56e9513a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e873de29714324439690a94109a92d8111b97db1159d21483669c75d273d6c6ac83aff7ad29865130f7fbfa004afe5b1d44cd54a7db38df34a10aea47b7ef6c', 16),
                    gmp_init('0x75b2833455facf0ca90b1d690018079690af80a798206751a1165398f06c70cacb26ffd21ee432a4837acf64a20435f31307c6fd4c36f5c6cb5ffbf98ad753e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21c1e6f31ec32cae4deda3ec6290b88ab3a199ebb1e6eb0ceede3f9979c10f58af9b4ec2ef60f6179e0ea3709d6a7e6113b8f97980dc01cd04ad8ba169bffe59', 16),
                    gmp_init('0x2bd1f4205f354a264691b265d69ffb1c564cc37907730afd94e162cc81a69217c4311a6d521d4b42837841fa7c31e92c5cbac6dd08e8f61774be6f7cfe3effdb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x316b59fc2d5e8d337392269f1c62523bcb80f72ee9276dce62f639749d37828d5fa9e19d06e7c495c8e00b44927e115c6b700087f4996df8e0bc83f921e8d275', 16),
                    gmp_init('0x3953b5e0f3e3e1cefe5dce71cdfcfd0a4e48d2561a43ed859242edf33605de455eef5ac8e68328bbcbe80cac84313e5534b0636a66f3b246198cfddd634d71d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa380f299c3fe628ce857b6ac2b0a1e0bcd4e3ba7e991c6e0a7c83177fe41e75c0c02e2e874e12fc3bee7048c41306ec14961d4a610e0abc471c36d77c35651fe', 16),
                    gmp_init('0x6a24d9d98494364692939b0b66930d0283bc2593ebdfbaf50d2f0af179ddcfb89ba476907034f2e958c0aa588dee62d4745918e4d50212f26214a32916c25b63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x761aca93e6a674dddce4ab3789a8a83d09a882ca709336143505318c0612189936efb4db2e37efd8831070181c18c2310ee963b499c815218365cf40e844e6c1', 16),
                    gmp_init('0x905db1bdc83ee8e16d386e07625a8a26922629b1fea13d1fd1630e32f26498738ba5f6c7b4adb188408ea3fefc0ae9f3eff5096f324f85d615dd9d86236affec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c9f9c56248b15b26180bfe89cc534b0205bbc273fe63e45753cfd60d425a2c2379089e07b53598d1e6efd3738d4309e4e64779cf805c53d33a0e897ec151d98', 16),
                    gmp_init('0x2411f709931a3283b786e1ee6c096a085a2a660d9495594c20d7ea8cb4f5b5bf1d4221b31d55e201a352749adf3a7293ed5fbe6c24fef0db38d831a9f0992623', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x237019b22ce3e3bf74a167c3071f53522301efc8e96c77bbc0fc3e251cf2dc4e4b321d8b12fbe6cba495e3f1d5c596a59ef96b877b68ccd9a1b09bbc9c3f788b', 16),
                    gmp_init('0x621e2e021d08b0c14b02eb4df15fbc151a9bdb92991ab3545ff2aa19d11bd3d6d3bd0b9de6964aae927867042f387f1807154d4578fbea8187d6ede5c9ba5ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1d8defefbcc91f63ab4003c65e75816b8066b48370a8d08bfb123bdb0845e8869a80fc5199e296aa55a6831371f9bb3cbac08c51cc32a13d83dace6cb43ebc0', 16),
                    gmp_init('0x4501acade3d0257a6a50849fa648364917c91556e229a461525cea296a0b02b74a79c6cc82fff5ea5f19567490f014661b985581a85b3596bb6615282932159d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e7611cdc2545215a0d62010517be0a8fcfd95063bbf967af9447da64005d0c738f92b7d967017e5c01be7e088c0450b3670738e2c255547b03d798b80e7a8a8', 16),
                    gmp_init('0xa985b5fcb23bfbbae0f998a466b3fa25d33aecdcab57eb7f624e0d935186ba83a4af7854c59a4217bb715750619cdd8730dbb98a3cbe96c1f9d26c1fe62b91e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16f1cb9c1fb7b7e319de60f51d1ebd9c110680fe774d337c27c891756cb3f0cae561dd4a47410a1c32f4da1bf0cb93eaa1cef37655cebed1b6a9f593e2fd8e1f', 16),
                    gmp_init('0x15c1c54af9c7761e58b6ca0a73d98b40b5c3272f2051b250c482b7edcff25365d65fbe0b0caae2cc7b1798649e99973fa1b917b10717b11de76d7debce32edb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x637d4c903a9c0efe8a53fd3471c786b4ad612eb7eb74da7c34f7e692f6fc996127f98f4d6c3c155db48c2289eea42e355c29d526d89f0f129bdcfb43c620cf8c', 16),
                    gmp_init('0x6bac5d1d20a52dcea8f70636bdd51f4512c9dc3f2ac61b94523eb56509fc79b285e1cb72f8657893fc1f35e4cb1a99d2e00fe64beeb14a62a25cb5f74d7408e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91f9af7faa4f8f09af02284b2b3930bc19ec5cce78b2971b5137722333f1802cc69c7e96c73554cd3f93f567b9d9eb965d019af98e36904414cc39929217a68d', 16),
                    gmp_init('0x5dd780806ef9ac75b8f00fa5acf7a52b329c0af59778f1a317187e6b96119140d259373762c2d960b84e3378a2296c69cbb74212ceba9bb43a3e6c2de610fcdb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x601a361a190153b5d125fcf58838f07639d98b5b013471ddecfea86c42034720931654d261f6827520970fde6022283b8886e6f6f986982d36c72fe956a140a4', 16),
                    gmp_init('0x3d7867ec563a4f16cab4bdfbcf06e0bef5193688e246ee5167aa4215171dfb02205558920418749b1f640ab2e494d21975b74c699156e886c0224b8af47851b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73b4c73301f821f296ff6c6b93f0bb78cf2dc13f21038eca500fc2fc3ad5586fad0c325f775564955444a951f6e6cfe92e956fd7d577f4b25460a5e8098f9415', 16),
                    gmp_init('0x5b275b58ea191f69623d6ffa2057e550467042bd7a8fe70b3937f61082910b91b3623da86a6fc609a1e2fd4c7c9d294c2054fee9f89910d9541e47e8af50f4a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6513cb14a75a5c3e9df7a7715c1581f47fa8d4f1210a3b95082385f2f4c274a3fdd618339fd51613ecdfe14c0884211466940822673838f62ab9d9a5e237c756', 16),
                    gmp_init('0x8a48f9c590096741f5528f8ef24bfc6a046cff301d17ec22b2c48a63365012db569f8fa9d988d97d3b00b4d319ec77bff90ee2a2379d83ef6a791481b3511b2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x70e2c3b27c6c3c441c1d3fb11da04dadf9e9adcbee3fcda810388e1c6d85d72d7dbc4634c04edf494a772168cc74a95f00e4cc778390e989d93d83b77b1766ff', 16),
                    gmp_init('0x19c2b1d775e32257310a9aa560e9360d480d5bb541decd1447b71c69b07c8307b48d7df303d602cda16bf0f87cbebdf990a98e2202614ebf1b8999e22f79d158', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bf60fe57bdb5568d518524966cfdbadabac32fe2b358f62d52027d71dc20837a213b162a132b685b192e13d41b4402966a011ccb7482a68a783fdbc12a57aa0', 16),
                    gmp_init('0x7f4f65683ab01d1907ef8afde4bf1764d082095e19a03d8fe44418fa809ac9845bec79939d333c6aaa04393ec28f15ead4945c979aae48c695d8810feded0250', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x191c780f057a8e2d80cdccae0ed264f02f497fca9a5a02f59322bee6cf82b6a49207d37c3bfbbaaf1fe5d742a04e4f4c1e17e1064d532bc936ff802e82f57104', 16),
                    gmp_init('0x43a998e230438ad9336742262e51c0ceb90633ad139be911cf352e79488f6c61cb1b576210ca87ba4bb5782f715f1fe8b8fd8f25ea2051d90b680d3e25de655c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x378de8fbf1f0754320af68aa40f5b7eac578b37e017c05ca6365145fd331ff83dc2996188da20f30cb119b91e8ac105603f0095833868965639222fd067b2b93', 16),
                    gmp_init('0x25aa653e6cf0ad40ac93f5a58b800342146434bf1bdd6a308aaaa2255bc97e6d1edf2d98431c6c95af68e16337e29674cd14693cb0b6563abe5dfb8c1fc6340f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48f64aa00844e997d49ea522cbc8c08c1bab31046aec90476a524c2a4886cadadd3b42ad39fe02a7bf5f2f426892395ecadf04e9e768e56966949f5e18f5294', 16),
                    gmp_init('0x4e7624e58effca4c49e164c29dea7440f96ea2a9b15de8c9dac483a271f6c8904e31770f0cc981f97d894d3486b1e20e9882d226298d3877c26462ce2b56b325', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71b768c46ce370d1ad13c3017aa39982ef02b960b161dd7ba2135dfa9a42289f207c236888c434028b8dedd82d5db81776ca1a8c07d511c9aa6b9e4605ce86f2', 16),
                    gmp_init('0xd7a114cf497c84dcb3ab6ba3f657c5d64c74cb9b2c43de8d913a1afa0eab5aec0d47c8fbdb7587d89d27ca13b676035d7da8e146454f1a79cb5c0847132a9ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b1164f7a58721123b6840b7177cbb7b339af4c85d21a99683d50a8d271377d77a511fa6ba21835ae0041b4e314e53d3cee2f8c56710f77687c0c659a3ab6268', 16),
                    gmp_init('0x2cf9f739d7eca081b33f53c10d024e7d28c74f1984520f468c0002655defe5decaee3c53d6517265646808fa8b13631f977eb10ce4af0536e58c7f07d54d1b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b9acb7b908f2ccc676126ebdc19186033d8a1f15437dc6c760f3332c0ac72f95f7cb2294d726320b52eba6a0bcbca0a5571cb05a30862ef43706ef5517efe98', 16),
                    gmp_init('0x3c3c454030a200cb9c222fa73e17fed258e766bc28cfbb9164e3fa299251f6cfe5cbfcf6b5ec92c884035cc2673fda67738ddab43d0388c41a4d39f04e4ecf0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14cfd25cbf2255a80059a19aae0e1bb28e38422489340f16da42cee8e43d7e77f7bd040ceb4dd363c5c469f5ee817e5a2886a9ffc880c020e8b81d1d9f1ed28', 16),
                    gmp_init('0x69a3df99c60f3d91579ee548006520a376d1428538ff72ce13602796cbf967da551b8293e8f327aa3ec32bf4aa0af34a7038ada3a04ce10af3f3fb40642851d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95baf774b268df410c65ba5f3bd7c69cd65435677d7e01cfa6e64ca82c826a851a7f22493ea27d3214ae95772a78ef2cba5ad73bf85d3cd25301a3ca7d834532', 16),
                    gmp_init('0xf24fef3013517cedad46f023da71c6f1c38cc2e649337b681f9afd1559a638b3342d1f11c4c26aed761de20e61b61ba7900799c3b179599d4c34159cb1896d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28dc84dd99aa068ec604da3112ea0821e2d2959890136fa16e5b63c4c23e376877a6f4b3822aca3e71be8a2a6354a76fd231f0a3de81a9b1504bf7a7e3eaa6', 16),
                    gmp_init('0x4fcd7eeeb287459d36445776c71d73091b22024d182c0b3519b62ceb706be7119e0bc0df5db0412dd3a479f0d95a19879c264c9777529cf1e3ace6ad15636278', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72c4659fbaabc6a7c1f73b61661a2dc35c8e4e0bc2a5b7aa99f2a85fc223965ad51b23a09ec1cb398b0443dba997949b49d50dd259a3094c68a482312be961d', 16),
                    gmp_init('0x7afea58fe76be21049a7100a301193aac7f8aebdaf45322545bb8d94264e973f0e6dcb8b3ca15b09c8b349220b68d9a4bd86017abb832f225f683c01a9d6f554', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x33f5009b5813e87a6972bccbd2e7fb8d4dd3146d230d85e84e0e3d63a999d7848e3d9034a806177535fa02104620ea5751d26f5a563af502c7b251f7cc97cf35', 16),
                    gmp_init('0x68963c70e4421925bcbb374e6b271d8b2c6858aad28be80814be9ecc0c89ec95c2b7da4dafc83a52facb75a32d554ae79127fc8bc45c5d3e04ea7459c8747698', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45e5c5cb7b5f77fe5ad252bad082a36b9b285ff66e5302ad05974bbc6142a000d76fbff6c7ff5dd125a69ee9d832b82f0de8a3fb9717f223b9e0a721d791d49d', 16),
                    gmp_init('0x2951a2eff27bb05561d0d152e3501c01a7464fe1f6b9f4d0efad0dababf36bba560048dfd2089b70cfda7467a81320e0322d85fc1629b60309c57b3db744c21', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b2693872a6551f837bd3a4006997f607343b33e66e585f4cbdf159d6893d5a59a02b4a2e28a05b564c7698bcc580eb9ea57d4ae62adc50107489d0e4651a90', 16),
                    gmp_init('0x14f06b77ceb9d7f535210f2664ebaa91a15f7baeb4bb385c582782962b33b4c402091e669f0eb28cd826c2dab2a9292bd0d059981d469415bf12ce7da01d1ab8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x717efeccf51e9699aa40422b05470d9be2f49ffc3a2247c189c88091f6b69828db9b437724c95a602faec48003e5fa1dbba136f0f62d07f260efa57b5e908fe', 16),
                    gmp_init('0x6996829661ca9ba5bfa6402cb1e7d65686724e188794ff1ab08de6108d6559dbf998e0a3e2d64b8264cb94385897cf682b95c3a43fb24d2cbeb85960e4b9fcff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a0153e5fe0098c5181866ccc7e0b13b2f9194fa92143162ee9fb4bdf8b66f000b7d00f733f597837b5a17391c6ad714fb7ba787cb15f2712fa116f380d249a2', 16),
                    gmp_init('0x2a9019e32a99290c2a314119ee83dece3f565189ddfc9793e40b061237c865386895657220e0bbd42f86ebf58c8459005df8c2e6419b78497c408b1a6ea336a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8aa3da2217720106c48610c134409aa0371472e1b9b0263bfccc7e8bf461486249f77ef2cadef9defc71030d4cbe26ff8b896d860fe60360cbd878ea1cd46cb8', 16),
                    gmp_init('0x2f2a93bc9ded5e5382dd2c605f54a386b361cec8ad4d325b154ba0b21d0be0215ff0a1130aafbd124a4d4eb60b4f73cbebe263e8fab4f43e948bc91df604b460', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97e5d8e832c0c52fc1b3b7b631d414c3927d0d676bdb4776540de71ad079b7c6b9d81de3d4e52268361214beec7b980ecc75b2cfd432cbe49446329d261d355', 16),
                    gmp_init('0x14559117255847e4a1d37549839a851c0201d6fa978b5e480160a003ba022aa360eeff05442dc9b992538b85612c1ce6ad5b0865bccb627c04493158a47ac712', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54fc488ab8e884da9b834d923519f85448193ac4a244f753889aee3fba90f9a0365d407b7f55684fb4a4ca0c337c71cd6d0506aa8bcfb68dbfe4a8d4468dcfd8', 16),
                    gmp_init('0x93317f05db73d2fdced96985aaeb115508854015c1dbe94f5414bacb5b8eea92f026a609e5bbeffa2d9827ea4536d8ed3c4718e8eb19ee4fe11d35e755d1d3d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f906f0e3ef9e27beb09bce40ed473acb39843922554b9ddf821a03a49b4a9bb6dd89a06bfcad5190a1296c9b8d75118406edc5e993db72f1383b126c1a36e3c', 16),
                    gmp_init('0x2a6e7a616040222cf6dab5804175df598e6d4ffa0339a23444c4b48b2ecbd64c894683429d7722dc66a7be8971baed9ce58f70150e4147f0b8a1ed905091aa1d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x439c220090f01487e3b4465fb79e8a20854914edd5e3ee8db8c9aa9de8a785707dc8e2776895d1fffcb32b66064c05bc690a688fc2ca45cdb2a0967cbdf539ca', 16),
                    gmp_init('0x6ff19bb84842681d2ba90dfe0ccf2a5bd61fbacacfb02cfd71880aab0e67c5f5dade54318fb800428a37c4cbc1a96a36fbdf5db7937844d94a412c05bd93b545', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x338168592b348f04799f25d578e607e6e495f848c3d68a10dd2be0fffc40fe0590ed8e713f21751754625a1d941094ab44f4f403ac73d43c9a0505a01ef7a347', 16),
                    gmp_init('0x7f6a5d3ea4c41525c7251bd3e9a1f3a01d64ea04c8045db89bf3ef680dd668697faa105cfc37c44db70793058b27c0fdaac785b26ec0aa95cd76ae891d895f81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91ed538c6dc97771582491fc9bdffc2be127be3fd0fc675f018ad8ae096bb00d6110347c10b37e3ac94a84093665d1cbc38770744cc399883b652fa067d1b85c', 16),
                    gmp_init('0x7c05285c4763402024fd1db91016978e2902f09d76e1b77f53bbda5abaeafa35dd7d077543afe09dfcbf5b1ff5fdce997e7a2543403a14736155fe8ce52463d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e97b7b97aec68511dd0768a89e1da1b1b570f4eb0fac7cf83c0d0eab03cd664381844c981eed5dab4477598a18491c399a1ca1046f9c0358a078063b7a8e2d0', 16),
                    gmp_init('0x64e9acef0cd503c72628f3676c8ec3de236fa76b6380415dddc10dee95d169cbfb074c9733aeb108fdafb09e4163bcd5e867a5a1952d3ff24d5386f0b339095', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6fb75f867be92d6918fc2e032f1f420176bf6843f9fa27ea2d5c14c2a6fda9af40be13361dbddfba820ec952a96b695c9f90570bc473fdb3d28cc6b5c1b8dfa', 16),
                    gmp_init('0x499e253ad4976430107c18dfc7a5fa0030df6880a2c4f6620e68ce76c8350d299f5125d89af96ab5dadf998df423ac992391b3784296c9bcf54d2161fae53fc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17a6cd9029ec37209642417ba89c35d42bfa32064c84eed369d5a3c67f82efe498815ef45cbd3664c3fd7cfd2b3da575f666a12b8221a3cb50fca4916bdd6363', 16),
                    gmp_init('0x602938749f2c5a33194b0719010229834bd295357839b4cc9f59bfd761cb5ca6aff03440225750af3aca8ec6d8f8020bf4052aadcc2a9cf331407519a98d7abe', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x406df0965a76bf8e5fcd9071ded4f6c3533fee2b84d49f1e6f363826d9ed93b0e30afcc78c8395641ab50ee5ff909d5cae14c76fc7251bb139aa94e501576193', 16),
                    gmp_init('0x1bc0c68047caaedf4d670f66d0e063f6a1eba92b7a497db2c1e1a34bbf9c1ee778a6487ed6413165279f9989e2a4c23d7ea0e4f55870a88223a0389da398c658', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x732638f9c307a1eed968b4ad56589bd6813af617689d66649e35e9fb55c785b167539ca7481202fbaacc6b09a16c9b030c790860ec577c6b13aeb5c326c7b0ae', 16),
                    gmp_init('0x151d84e3d2a3f56cda2f0cef1eb7bbb0ae8155734aae00f67dd4c55c762eca1fed618687ec3f846423ef2a127ebf92c97f402ded802eb4bf6f44a79595833839', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e35a8a19e30d5ccdf43aedd7c51d50bf582697b9678fc88fd30de0757c1b1dfc7b9dd5ede0d9b39d0d9dd901aa657bdde14b7b814c0dcd4f93063016f3b4879', 16),
                    gmp_init('0x74f4e975c04d4ecfade0af4608285ec72cce0baca764d0f220a20476bf3325f6f61651862e76d1e31b43ac0da3741c555eed1b5b35246ba1592fd3a7c8174ebd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fcc3aa75ce37c9ace70d606ed1c49fc5e69cf1532b45fb2bf7d093bd93b794399bfc51ade3f9697d8a3c3508c95c3111bb77a82ac07a71839cdaeb473fbe4e0', 16),
                    gmp_init('0x94194721d26dcaea7978c3315b1dd074faa7acba4cd94793e409a2ac3d2600938bc2433f2ca95e3162b43533a9c04e44772efb541e8b22476dc285567c3682d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2399a9f08ff73d58d26f6a4dc81768395e925a16ffc93dc2a72bb84df96e52b227d31bd35f6ed1e38c6003ce65cd0a23e1f5978ee656819dd9ed2e9d0ff031d', 16),
                    gmp_init('0x54281228496f15d341d1989c5a6281ef8d89d9418c32f40fdb8de07dd0d568dd5530282b73378c85f7bd90247950450ead9b2daa1a3aefde84d493891f1ec73f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f1b7d7d705d111c766645d90ea21b639c781a0e047426aee91cc7d195e3b3fd25146136ee29b7b3ee3e6596d687b74bf719d0934087850b647784f2948cccf1', 16),
                    gmp_init('0x69f619097e9b7c5ba28728ba207edc429b6adf5cfada1b70b7b2928d3679b60db47d567cfa9cdfd563e0d7560330095dccf95231a0e7092c5381e5c6cb62d5ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14a42cc3dd5a7e5fd804785fd6732da92707c9c30b8df07fd4f1891fe096c589f3171761d9637b6339ffe235a150e9628abf25a4a2f26cbbae22f0efdca21dc9', 16),
                    gmp_init('0x5835841aff01f3f2caa7b206bc2a48f88bf7b1eb104bd3f2186107bd1779edc296d7f8cfb67bd8bcfe09ab752a6e9398de929d929816ff4648567cb85e8cde17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54e1f3b92b18409c60a711a4551fdd427baa046525dfdef5326dde6d2dd221c5819846d187c19f11f7aee669b352e305d3b970d64b9968a4361752c8a2a1fab1', 16),
                    gmp_init('0x347ac4f1b4f4746e4a11cc3c8e7728098009771082994c1aef3c98add94f19ea6ecd5cb1b3f774d80f8235f1b70ecff81a167bb0883237d966cab525e6ceb1d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74850bdf545d328edc171c0291c77f145f33b8510f2a8b0972e05bad497ba8d58f1d064eda867640d424186f0c17c4acdcb818411166221ae724ccd1232964d0', 16),
                    gmp_init('0x456b12be9c9c235f6689f75b1f7c230a950ed00468f8cdeef8382cb517df72b99cb910ee8c99213d8c2594c4b9dc4aa04c82286e39f692aa834372b12f572718', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e77a3f1fefc93372bf3fe7556da71c412940c8175c59fb072825a08c4099a9cf3d52b58d05d0f5fb9c28a01e6b13d526255a1ca6aac7d5a6ea9bfdcd95278e7', 16),
                    gmp_init('0x3e9e868fe3bc5ac7b99cba0d360e360688beca74de022afdd79829df58d5d9abc707b10cf0de837873e67d9305caaeae627261ac45ba3af209bf6275663c215f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85b5c6954d5a2af86b2a68493d11906f3f676aad8d676063f7e1fdf0b7a63317ea3f0593279001fac58c6e9be8b1da099bddccc5bb48feeae151d56913979293', 16),
                    gmp_init('0x8852ec47f627dab22177a2d240576b914a48db20b9542f8f7eebc252a711aa05fa8a761ba538f292d217973797a947c0e492a58a295cf84b7ed1084eb86cb885', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x74162666a98ea1a484fa8bf24fae335b67f28c495a8adc171f6e93d7eda01528705549171bd91a98db8277dc196aac46f5515ea407c5e696a868c850e2cd5e5a', 16),
                    gmp_init('0x15a2d86f8d0b1c39f70547b1ccfb0b6ef47943731973ea590d6d619477f97fb466c1cf1d099d2feed00a2d5553e163f9d7633145120a6baf78f6e3d3cd604baf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bce474c89805694e1a82ca377f488c63c1c42d4294f953c531eb00badcceeb794908a6d32d3f205bf3c6216f414f0cef5fe4bc141ede9caa07d83de24b4a174', 16),
                    gmp_init('0xb6f3fbb9b558addf993e92057a020a18b0fabcf3f057bcd3d8f78320bb24aafe69484b54c125bf8fc3262b2c3f433a3c456269797ef13f6ea84a48b31990fb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b0ae946093e3ec95840c7620d4ae8db2b93b578eaba83a1a660164f2cc85d8a42ba6d40e81f22ad0387f7432e3937e1a799a9beb99780f78f08a713be010b17', 16),
                    gmp_init('0x8bc9c9132e998df02b7dc04c74bc53512a32a536fe9b4f493479512ee0769bbb321594bbe566669ff6c5ad0bceec1d1e801dec3156bec1c589d047ef916f7b0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a1a003da24e68cae30342d7d0e90dfc6d911833b1655f5b6a228f71860488ae4c6958eafc4c7543d5afe1c875507e543e527fa6122c05eea67cef14d21c16b9', 16),
                    gmp_init('0xaaa99113440c88df49ddaf6ce3b30cabe1caf9c0d0613afae40cc8c8fef68a0912f4e2eb056126b02f4191ca279a933eb899f662398399e93f1c599cd7fd53b9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x41295b6ff2f3906e2346d0cce8cd7d3581bbdff9b41a056f4fc957ba534b1bb7bbb63308324925bc07bc7e20c97dd31ad7d6c663aabef42f2e0bf3bf25f45869', 16),
                    gmp_init('0x2b00121dea07b8a57bcf70e950e39198f6e7cae3786ed246ee1c4ba32e5e91910fd33dc6639ac3f74854bf1e0c4ffc334bc6b4a26e3cf4effc9f3e47bec49f47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b6874d26c6a93f5ee33b9e9655fff8d9c54a9dc2558b10461d17f5c43d92dec2020215db4b40502cdadc3bef37fb74af84cf8e99c5a39dcb39167f26efdfbda', 16),
                    gmp_init('0x84ee4c0dbecea439cb1ff97dfc5116516f2012cb2b86a0a95b96de2da2bd77dc0642bebe9e83f214a5857b0d2f3da778ff6a802a65f82ace3c0f0f0f044e07e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50936b1daf386ec3382daa15b841cb13363a1206fbd9163c2487e0320bf5aede62719e42ace4779c35fb75d40102a155c50c569eab5246ff697a53927225db52', 16),
                    gmp_init('0x5613cb0a1f2c6e96e5124840c6ebf8d125a96477093ee1bf3a54b4d3eff14ebb79465c1456dce3da5f41953c917e2fcbeee099c7a489585674e1be51add8aa65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5547f3124efece649c9ae2deddc7fba239ef8d0076aa5d42ad6edcd4748ed0b874d104967aee3d65f8fa0606192025e52e0ff7b227065266154c9d3d53214ed3', 16),
                    gmp_init('0xc33d817051f38526f6f42ac29beb3f109fa2c1ba05006ef63a63683b4d0fb935631a8427099d6f2a48d974cdcbe7571ac8d2368ac523d9b5fa4e4d7b0c0012f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x908b65dd6851bd74c57b5354942468ff7dff22c3deedfb725d5f7d2167904b0a96d3c8a06fdd0328989c79d25f00edfd2cf03d0cc77c47f61a231a8ccff72bd5', 16),
                    gmp_init('0x9c8333085e7d89544da8673176862f87fb025cdd2a6c1f865a9c1bc42401f29ac6c81b1d40aa80e35d9a1db38a2c6165a613dfce57b18bcd13e1521e7c3f8d6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6246593a742e79f35968e63f823722d4691ee81b1820458d92aa5feb019dcff91865ebac87ac6194f226b2f07dc743a2409003bb4ee2b133df82a0d21e85b2d', 16),
                    gmp_init('0x53f29b777b3663aed329fe8322c10dba02f545d09fe95b4084037ba5004f0e1589defae328b28b784c1232e3e16aec4b43885302f4919b058552855f7b043730', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34784b04b7eeecf13abaec5d99cb6fcdb14ac2a6ac8dc6c3dd5ae87f463d3438546728d97a46d581e777369ea6ab0b3f2f62d8d5f123fd77bf4f65a00936b74f', 16),
                    gmp_init('0x7517c39f66e5a3ea98f71e9704c1b9209e011b81155fc24a811a8d84bcd6c0587757062ef9cc26091f69ffb0f405b2d94beda92ed6138d6f1408d9af15f4f8ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72412bb89370675c0169ffeb240d0f99e7ba27803b97f88beb7d68ca43aeda9c6d4abacd5702134b139d6c527338716981b00eb4c577f83899df886cff95cd96', 16),
                    gmp_init('0xa8f313e5b9275aa04edb2662ee96f75121149e04ec769c5b422fed4211d727061f2526f1d2428ddbff95a0e7c589d2d9d1e30d2ecc82e200df5cd4be8d7ff3b1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5616c50989e9ef06a35a64e66af28a571feb49c51980ad37795ed2715c9ee442ef1e1f4fdaf30a5b36588c03ceb0eeb62fe840204448398938f615e89c15f2d3', 16),
                    gmp_init('0x43cc83aa74f72a417526050952e2657bc0fd1293811d521b26a137cc0937bb5d424028e4fc15e8c871a3c912e993453dbd9ee4b3bcbedc5cd825fb7ffc15765a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x873f3ac3c543c8cfaf141106eeea74a340b2066d16e530bd44a38274f3d86e9933769d98eae0c7723e704ca3c4787e0571e321467c03179224184626c01084f2', 16),
                    gmp_init('0x2e7ac25846339d6f61deebd40d64aa23e9b50f33a8aaf4d5e47c8754164f9198d22203b24d5c3a8cfe9a62585d81c84bada5bc0c56ba7aefd01a79dd4484ebb6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdda60f5fedc85d0a57c8cf7d726a840850ac29be6fb5e122a3118f999fc714df1e2486e8036418b214e0573f7bcd23f72fc46685a90080fc1cabdc9254043e7', 16),
                    gmp_init('0x35eb221519ed9c8b7631f761fa334dd0c58f4c2bb90cc41dd37e5bf070602b5d90d62a460c9e473c470010a824d23a14d24861cfb36479ffaa6058671e31b8a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x584c18739f5b5fa7a18070058791061d111e11da43008e6102f8e0fc904c141eff0064a41969a9a23a67ed6ba0da419041d888177ec1e3418b9b2f3843a71d1f', 16),
                    gmp_init('0x1b790d855b8d635f4dd4218fcfa34b50bc385f6395317462aada35804fcc9f7d4af7517ff8cb80eb8d3d80de6687fb7e4af4b50b9bf15fdfafd0144b8d3fb2af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16dd9a1e4a8e7fac6f9b108680e20f411b24398e15fb72f01919437e28033224598ccef188ff642a50034d216538da515deebd41dfefc262cb7ded79534bc843', 16),
                    gmp_init('0x7948d6382ed9d65180828b468fcc111c1ebb91ef1712dd78fefd4bbbb11220656424003fe2079c8a157676428567a1ab9595b1542dc36c9b6364a4024e65f690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c8b03ebc5ec0a6bd1612cda93eec0a41f842bddf78e1cd7f6ba2c3f31145617fe8e0a2cdb06a1ea76202cc9804f903abb3419acb9fcf399eb61e7a1a21ca7b1', 16),
                    gmp_init('0xdcc01b11dcbf10d55fbb2a54c7eef745fc6e4e593d82e9c909a6e4591c51cafd9775b607523cb68d1644893b6fce851b5af3ead3e38063368dd7266ac6c3c48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x840bd5d916e12681ee2ba692a85688829285e784c21be488fc3204ad21562fba7eccaf4ba384b7a18d26c82ab8823c3cdad5d66105378492f2f8caa92c298896', 16),
                    gmp_init('0x1d2a3ef36186f166ba13cd236b48eafc6461e452b353f18c670492b9159ffa1ffb822361cbc7e1459962d844859f711321d366bd82e24bcfabb9e98f884b8af4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3a7a133e6e17ed2120c08860ca19146db0a401c7295bd05030ec6557095eec520f8842e8fa45f2e1232628f37ab2b4fc5cfd902fada5a22159e74e13d97135a2', 16),
                    gmp_init('0xb38cc5d303411acb629d48834ab1715b3a811a85b1273ca98be81b963b7b668ccc9e045fa4c46fc9722a186006ff238546aeb80b3ce994e4f239876958c8a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23040f1ad691c69a4cb6a871520f703177dc5368b752682f3774999b09697997d0a626da21f858f257a11a3a2f6ff962a3852045815fea920fd06833d3bf094b', 16),
                    gmp_init('0x3f4e7933c55c20e35940cfe601f4724ef9c17434551927cd88c80ff440075e85be0b99ba99ed17a574154c8c421ddcc888e407cc03afcbf46fe8c27f5f3b45b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x610010fc13db62bd1624c0701008d07a0d6d3d6681345e37a1c21a546251bddab2be37216b843a4b09b3bc4b3f4a1bdeaafae91a4c434a12aa2e3304e0acf041', 16),
                    gmp_init('0x56dc6f68bee1ba5b12c9832d1d3d39fee0e3819e25d707370a9da2c1e18ce7de8457b40c3893425d77b71be213cbb6a9a88524973c272f23bb550fafc70c8767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78b8a1f72f106d7b5d2e812c634b4d8e9b289bb216f2a7ce3d51fb4a1edcf48085a959d8455c7539fd1e52f4e746291a904e72091194e8da340801267d88d954', 16),
                    gmp_init('0x1281f5fdfb78907e8381028ee7ec16186c577db09d9f222950a93f996651b71f2d62a90f859e20780eb48649a4dd340d100206eec11783b70d97fefd1bf838c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf332c689b7dd85e9444e41e24cef0c866edc0ebcfbe9bda77efcbea313f15a5af625e38663e553136520a29b42519f4bd4bb9e0f2688b8ddb4f48a219cf856e', 16),
                    gmp_init('0x929f99a4b1f3bc842c25f36a2c31988ddf64866abd47f5de8cf28318ad29ee25ca3f3108cf8b2cf1aa9853d08042000c3128b7a2cddff8454fb84df5d494a690', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x176405dd7c27a277a8640724c6c87e1af87238109682eb42a6de1f91cad74fd101e892aee1b240544d2dce11e68807172bec5a6943b4051fac7d113a584a0ad5', 16),
                    gmp_init('0x2999b0ad24fbaedbcfc1fa21aafdc87e095d03f61de6ab8f17f3f867e2e24b2074f89e03cd5fd9c0716ceaf51b3e5c331cdb39263edceceadeefe3b60c7cebc9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c45f158b62043735247c611cf68e833826406e61a6a4460f64895c210416b2fc1182bedafb9f9309380cf62c09b353ee534fac48ce010580aee6be41b274721', 16),
                    gmp_init('0x803a1c81d32bb734acb4ed83126baef43f1f3db1ae097918b20ee39ff24f97633043acb86e269e122193dd790fdfb7e970583a8e313eaada0c8c9f0164ba44fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcfc5fab309da49d9dac89fafc9a698b22bbc1af83d45f11e4db3a39505edf87c631793121307ac2b5477670cd58cab9cd686b20b69a8aa49d53718b36dccf7f', 16),
                    gmp_init('0x90d23034c96060938dc4a36cd4d7c1543d5449966728cf56729807505529476b9ea9dd7787cd1d0d76092a8ca430a41134018d836498f2ece7c3ca4e790a32df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c036482a5f67826d1d5923aa8afe91a1945fb57cc611f00a3e32d0ffc3ea7b1992d4713bade8e34bc82fa64a2df8efa71e6c2529544b8e087e1512fa89f612f', 16),
                    gmp_init('0x6cd170d69fdffee6767a48ee2df4e57386f9627e77f92942ac10bd3ef772bcaadb1bf59ac928fe1fc96f16fe4748cb02cf6179a7ad7700bf5911caf34392be9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55e321e016d55a55dec41a1533e9124d2031ee38165fdf76e116563622a3aaa7993d9ae6f15052e6a8062a0e794485dcd9b66f7001dbc3b46bd970cd1ecc5f63', 16),
                    gmp_init('0xe0119d22ad47c03f08eeb720de010551ecc1bd4a4ec293f8d6f2907bd4ea2a45499adf4deeb9d697953fe5328a7bf125b643b8e0a71c55aca7bdd363d86ea41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3834f391eea9531111befbda4bf03d3a4103a19f72d7a8b1abfbbe74870c449ccf217ad97d46f5563bc8958793800ee4b147cf18600d7d78bed6406df3ddc26b', 16),
                    gmp_init('0xccb84bde4f5d0e030d54223fc7028654a0eb72befca6d02b0f1eb5af2a34dfdf3aea1fea7770af336269244eae8cfafead362776451b2265d8156f1d6d27bde', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4409b91ba5f0686820eeb9c8d36ab6b612004a743068f598f932a5c9eec9ffbf809e35e6a7025653c6f3a0822e269bac2052bcee7a465932fa3532d1e58c5baf', 16),
                    gmp_init('0x189817460f120e2c79e464d2bb69ee45e704d45428739983d4bfbbd468a267a22cc77227d7a4c383500d4887d460906f9491c3c71529d8cc6a49f6f6b581959c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26e824f0b7c94704b9d7751a5068cb0b6bccd6953a16c0990d81be64e71bacc49f1dedacf70da812efb6f420a2d55e487706fcd4fd5569131dd97db273b16d52', 16),
                    gmp_init('0x7f9accbfe191613893fb462a10c04b336032829709c5d3f8295b8d6bed117c8b0c107353c18251a17acae502fce5592e9cc37e5dad6c25114480f55778724887', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18d5092308688b2e21fcfbcafe6b624738d4933047a1013c47f147a8edd6c63f4e88128e9e025ac3356c74d8c20b3ac3350c1913fda3b75a2c1f5c5fcc392d8a', 16),
                    gmp_init('0x101a92daed03d795ca39fc6ba02cdc425eb90e86f552d0dc3c6f576d80154428cb2c685dde26f229e41bcdda155d5b4c5ddc22c203e01d13312cb43e149a7759', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a4050cf01e260b3a9f488c16a03a86241852f8444d8be0b879457ff77303e49f07a7dfffce2ae0f3c12a9748b1bafecf01071c0a52496953623561005bfee8a', 16),
                    gmp_init('0x59ca65e01da130dc2b1ffc90589f06aa96cbd2451f9c78661f055cfae222b8b428b4ebd855771fc9c5136411048060165eb3143b1e90737f47193716e5fd585f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x10e4f00107c3176b44882753e2fe3debc401ab3d59d2f3c5eb9ce9f8865a34fff8290e6b688eedbe58c4ee65094fa41e8a72b2855d6215df4fea24f653baf4f2', 16),
                    gmp_init('0x989843421b9a241d256c51afa12f220c7a0b1acdb63a630f5b2169aa16849a75517f6d2c2e7fedf5776a36b55edb54e3b0fc4995523e90a1a635f606931f5670', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8974476a26834ed82f48b3142e917771baeb3e972dc1f42c72816cbae9a05a648ca94b6ce265ae78d4698f3fc3bc98e7e9ea336dd50d6eb7df052b263aca6b58', 16),
                    gmp_init('0x1475cd41af551a65256479d6724e4fe3adadb1c71c0454a1d5e4aee7c8bae0da3d68d39c10e712d56eee88611f8659cc672556213927f62e4ad8b0e75c44e1e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41162f82ebd030e2504169bf1d9923d7393ae3100f845a960b09d956680690f05a426b835b6c6e6774bf612615e1ac2f0fda6e1046fc1354375b00d7afefebc4', 16),
                    gmp_init('0x99590decc922553e0d52c520dcbbd7ca669ce793c24bab2f1d47f6ff2867f4a08d517f0d5fae94fe7fe87501674fea4c1ead934fdd24c677038a50c79b400208', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x527bdc21d9b1da213f1573e287fb9c4ab87f93e0732d62ca4f7a316fbe116fd55586f66a249aa74bad2f08a6141d3a8b06e1261bd9987029114e12050967b936', 16),
                    gmp_init('0x8a039abad6edc1508ba8928fb52811bfaba8a9c295e03ad3c00ce791225902f5ed39f9cca374f7d27009c3f37668d5f96f94b075e0380aa408c40f6bf1ae8a5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xaad9f78fc8f3fc0721bc6a96abdb0ffb5a51b4bab3d0356a2b4b9905d1e13729b70aba141d1ff528da219cfb14fe17acfd8412dd39bf7e508789b1c21c482ebd', 16),
                    gmp_init('0x9cb87348b3c5d15841553af9d7169517775efc544c6da8ca4b030cd99eae416b2a54d4a6a4bc5c8775095a68fcd7467c0a383f82debec770d13b5d01c8e82a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x242de88faf3559d60d31b74ca2b6aeba00361cd477c1e66259500989ebdd156ab64d028c69da2caccde49b7937f7b8c658c3f690075d4c20b2edef5e2a81748', 16),
                    gmp_init('0x412bc986b3918f32896a82103b33055d104c95c453e972fa930b81a04323cbeae56f18885360bebc09a3fd655acd7b7320e8e6f555cdf73cd3dc1286ffc3038f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11f8be63dd1f640487f6e5cdc03980391b17347d0f2ef758a9b3906b48ff153a717cbff3265481e308488583ec23cd16c4750eabc36a4cbce827130e62a82d26', 16),
                    gmp_init('0x318409176235f47e251786a0d7f12ccdaadd8852dabfe8c971117f78c7adbbe1da5320e46f92881193b61f247c1bc0345f0debbac89541679f76d98bb4cbd6fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cc84640c2ec29e6a246977f34335ea9656656bacd2a4bd58d95be0bc68958fc76250705019d85f39bbff0f7f1ff8e70483e7bad0615ba1eb85d77f2098d2c9a', 16),
                    gmp_init('0x7fccbf43c2f9ff30cc2dc8884603aeead405117df0dada18ce66fd49fc62d4b694889ef516391cd3238abeed65329bf04fa19c60c64c335af8e5a936bc04fe2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e7ea054b11b016ebfc5a0ba941abc0de8a0f85e6d85395f88f65ac8284449ba27783fc07e97fd48c45c3a7743780915989a581908c82a83bc32831154bc6ef6', 16),
                    gmp_init('0x9f5978a42b07092517475fe38e15e5e5ae6795b02a1fa87f6f096ad3361cb4960ec004d9a1213443d3c1dc7fbcab8ca58b41ee2376210e9b9317b4044f054221', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x135f410326fc28776556cb9658cd7ba3ab93955554d9ffc65461948ee1b80c787588b11945d1204b28e18eb5bf76f3e15bd4082a6b9d333045ca142b4f750f18', 16),
                    gmp_init('0x4ea092224ac3997794699dc2c6f08440adaddbb763a4a36ab7a6acffff61ec65bcb5078476f1b4e6ad186e3ebf0015332c25b4d8118cb8811821d647d3e7a0f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6298c7d998613100903cf93178b424dfa043e2e732227edda67e49e70942b0d7d1ccb80da21df09df41be8769476248908e0dafb075471bf2bc1e4e1b1adc1b', 16),
                    gmp_init('0x2299eb2f7244cc9b6d809a222df789d34d95256dd74a8d903df261745eeee48d4187096c61d26ce820d74305a9eccbd14ade1d2c230687e1069b775a09e3c09a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x611f192c2c773219491c49bc2e99446a0c0586b3f3c9b501db4cffe9991d3f096467272f56e2d8c5a77327b5c587162e672020ce18461721a3e39818c193a66a', 16),
                    gmp_init('0x6bd910efbdc29d6c9c2f3eb81b90a266db7d82211d4043f9dfea05e98345b310d94f10a57e3cfe5745a0830ced2fb76801a1944d036fe2d283676c9e8b9f67c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68e75776ab0bad86e4922842f8a1d0cea1eab91ac33d606fb894ad7dcedf8f55bcee8c7acb6645709d7aad45238ccc4c437d8fda42f0cfa8d5ddb504e664bcea', 16),
                    gmp_init('0x6ab189a389abad8b1b53de7514034cd2dbdfe088c2da22ba0696b7d9e292b7fa6f4476abc25d96f9924accafb3fdf40f23bc3c2fd711f3e194a4e2fe7ff0072b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa560e7da65004269e7e556ae165e3fb2e51114fade1c53c98d8e1951ae2f7c8da94cbef27e7924dca08239bc39926e4daf2001cd3d207f74adaad142faa0aa6d', 16),
                    gmp_init('0x58e28dfb3e5ac88274e7b776daf8c7567650f62272493ca2bf63603cbd32ee606096d6f7dc4fb26bce517572e7c96ae463a02ae5efb0ffa6b48234d266ff6926', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ef8df2ef9a7e5ab1e41789a07838733cc85a1735d7028833e828501e0ba4c0e6d4a0a8efb9ec962e97048255c3ea5d979883c828a461a4b875c0560e9c548a7', 16),
                    gmp_init('0x4c650a65053bd69b9a79acc15b2ce86deef673ea598bce75e3e9cc51277650c64694f6e73c0179e40b70a92f1a8dab65e050f3e8ef41221e4fedd9a6d4241613', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2037b45efb32b9839a3ec84bc87e23148048d250208d2208f1c6575df6ee2d36576d23d0cd2f9ffd3aace487f15a92407a62ec1d96de0e3aa8884cfb263d1b91', 16),
                    gmp_init('0x39623d7660add1e92e71e95a2b920e0c80493b3744009a46d1d5c117b95e4413eb3aea2de75806213aaf4807b1269bfec5911d178152af95e1fb1716dda2788a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x842cdcf1b009610d2dcd550b11a839fcb4fc1aea12d8f35acf353b268b8870f6c0b58d1ebab00492e02ba9392dd7ee9dc83f5b37a8a80f99bfb8f13d57897f84', 16),
                    gmp_init('0x4a0521c895a437adb0c61a3b36594a8338eb778083ce020c229f78c0e004defec3d381cdbf89fdf3fa50aa2346141724b0cf676f28a9fb5dc376601f82216bc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22007f4536fb9e47c6b0c245a4c9332fb14e71a8c55f2890983f2ffe736be949b381dcd73d8f1ba074503ee4abb5f61fe3dbd3bb2db0353128288c1685fd7cb', 16),
                    gmp_init('0x70e515400998d71bccafc12a02e685db3a243753e03270aeb2057b56fecd19fb1bb45ef45a04fb4342eb7318310bfc9c630556aa2749a7694aa6629b89e699b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ca879e8df43e8dbc60a1866fc6657b0fdeb47861e232f390c84ad2a9fdcb1cc8b66a7e6af58f94dc045abe8f25c04545c662e35324ea004944a1f35257526f', 16),
                    gmp_init('0xa07d5afb6c8d90a6f77e0167d61832a512aef35373ef3f22c34e358409f1e7644e6d5948f5f50790ec5f7e44c675340ffc06912a01ddd1619d281d202de6aa96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bb5a12e8189d206710ace05958e88df9c35c0cc120b11249bff27f1134228adba3b3503cdaab43bb3615e93564a4a3a95758484965307a678e470f9cbc526bb', 16),
                    gmp_init('0x426e67eda7042d1728b3831ad611b507ec64d25f4ef6f4f8169f526c4cb141cb7a5b2a488dcea30f8be250318424d2785ddcabe7c2fc5410478ad3ed2b564ff8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d81b609d8254d5f43d18755d12861a44063ae3cf4bf7bfcff66abcf1ac642d59f79935e971f55565e359f3e4516cd7a34b1edacce262bd7d4186dbc201921bd', 16),
                    gmp_init('0x3ed49e4e5ce84171a7d8f67d82393a8e53968b2885c1dd7b972ab0343659f9f719b0b5bbb7eda2a679b3588473b7b076cb699a8ec4272b2297c4d807cb002e22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7269f0de65feda2bb87876e4e5ad0b4f2f463a134affcef94c00f1359c73f1da32871dc89c2bb9df308b1128d09065feb31ac73bf92481c65cdbb73c7bf89b8d', 16),
                    gmp_init('0x9c0898b771cb9527f0dbb0d32cc5a122a7683d60001967508c99e325b8449a5eb91f20a2110b4fc17b5cc6887cae2dd4427905cf624a2a812f045339334a8fc6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3113c5872fa889f0ed0dcf3de72e8361599d977673b09c8e85e9fdb46cb34a1ca062417dee287b2e8df25a2c20709fa59c9e6d22405eff33761cca025a3b57d2', 16),
                    gmp_init('0xa914434b6022c3d8bcf678b4670d705d4550e8413c5fe803520319c3402d72f83fa364019fff135531e572fcee19183faf0d951d88d8d2e6a45fe26fb6aed200', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x415bd6974161304f0041bbf2deb1cade7685bdb81fce5b706f9b4409e61fa924e5ffafbc3866d5cb29352525be6f2dc41f751561ae1540ba9cb499ec706c5887', 16),
                    gmp_init('0x405caa7d7190e9cf97929ff9813a87e22d6cd863b5448586616e2275633e695640f401e23e0f3d9cbaade06336e4b184f4479063e9cb3cd3068ba5f8cfc9be7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x252acc8f327d62febb5c8d473b7e5b7eb7b5f631eea291128f7757075a2dae212945b9410a2b74a9b7290827bb36bad72671d4fa0f69c581e6ef6e2d8ffe0259', 16),
                    gmp_init('0x26feb68fe43c62342cc677c170b33ac1b04946de16e5aadd85c1f9b68ba0435a3566418c9e5efbd33fe14cde603026d249fb837988657149ff0ee9b90aed2042', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x652fbb3f010c937df055fefb8fbe59ca11d1065c0428ace00f675fbb8e76451f70f2d9743694c7592d967b8528e4cf1d5c5d9bd270bb7372dbec60e655acb3c5', 16),
                    gmp_init('0x1402dd3345689cbd64a84dd8935254bcf50149f896e3cd60d090be586459a3798537da431de04f9b0b448ae96db8790772b444952128dd02c822bbb88696b224', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ccc2f75b14562c9fd1ca3b0357fbf5a3bd133bb0d31dca222285b29e229a5f6c57d68f87a63bd6b1ec58e151d2f18f066f507aa6779e90016b1c3ba464e687c', 16),
                    gmp_init('0xa1d75fd3fe5e947945c08f039c8d27f6ada7daa6406570a2d3f7510c18303f3bed10d1acecf007d3614880a751d2488b11de8d8a5062ae18f54fd610c65f1ff5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6572dca98b366f6e36ca9d55788c26367dd3ad93809d33f6f9ec6df9c6b868024b027224f0dab998732f96a7f1241723522fc1be1a077021ae8cd858bbaa458', 16),
                    gmp_init('0x2503ae8b84b77c53f3a50a9accc3acc4ac557d22a3006bdb69c8d0ec450ce68a03a7e58f795282bd18e95aad5f1dcfb174928567691ccdda101a67757c5706a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17306a7b40ff45132160f2ee74885e243c744be4a8f409a334ea3782f73b9c1df6ce5608447ae164310d91e37325e2dd0bcf79fdd5b5d8f0d1f664815dba7044', 16),
                    gmp_init('0xabac26bafd41233985fdfd505571006925923ea154ac24e9b8996d126f514728e96366e46670e5133269dbde67cfbbf5f63e9c2151d8be34988b5e089642e09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x392f857b7f28655045d2082b6162f7cedcabbeae2d5034088ad590186c050d48185d34e9c9f4bfc8e24cfb5ccad4a6b5d8f42e76312b8cdb0fc10f3ccc8f4468', 16),
                    gmp_init('0x8b2da4a76f19f62a049683665b3ffc576ca62a7a97f973e706a13cd48b3b2367ed971c0e10f285c4bab339f205c7fb916c1dde1c16a4faf60eb16b9af76adcdd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7ac05ef98c176558b46d23029ee49c91d172a427fe0d62c978a19c4d74c1253edc5fad5fe594bb6f600e3dc589722e2505badb65c29e041df079ca4f806e00d1', 16),
                    gmp_init('0x127f0fb35ee8b53bca9891a348449a50f40bdcbf21feda0cd230c2309da0b0ef25c4d34a5caa3ffc209b85ac392e1f4e194992ab2ec3c98ae6408deea2cc029', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5824e95219420d402c3afbb4da7112ba1dbb89e2dbff30426abf8cffbae57460d4ca7a8736b65b9d0232752c1bd26764b1db097d4cb1986aa96911d0d14c6c16', 16),
                    gmp_init('0x8809c9e9bd12e1fd65e0961defd9e2820fb315020b0dc961e8238b6f3d0ef7d95f2e0f64303a7ff95bb9ee1691b60c2e38c28950c791c436ae6332e410bca2be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61f3ca941778e736cf10a85888c320d7006fe30e4af6fc1af8b4160ba43afbbfa1f958c86ffc37e4e28dac30346efbe932fff113fce663eaf94389d7fa49c61e', 16),
                    gmp_init('0x88b8c6d0a531429d87390e31c7bb134758d6bef1f06b2e4c311e608b615a27406953b951cf1fe4c7c827ea33ca77dbd6fb5e8972cf905219a5f5211c3cf4d293', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c1122b5203f24e5acc9f53180960b1642be26fc4f1d391da7ae6099d2d442550e535c071ae1c46a5694dcda25a766e91c55791e68501e20e1446ca4fe6a4398', 16),
                    gmp_init('0x16763da62519e70ce77825caaf6363d35bfef3c65c73bc558164255ca188356ee18dac1af2baf29313deedfc911c18505204f85363118ac71cc83410eaa9fbf3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7dca7ff60904bafee55d8a6e873a41cb4bd743153ff1fcd7b0fef92cc7a1190ceb6f80bb9a7d892d7315f0dae9edb75a43e6f6698076d86264e426c332012265', 16),
                    gmp_init('0x268974fd7ffd1694566434099cfee919fc23ad67d7652385a47d99e4495dac4f046426675a261f45804d85b0a8e7c5b8a750d046e36787ed373d93c6f3627232', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43616e9a312f03ce75cd496819025a3bd808367a6a6659c1a867fe28abe076be2494249c1c2c41509350e27584a0bdf8646c8ed67adb5d1562919a0af2a003a6', 16),
                    gmp_init('0x37745c9bec9d329e00679556542ce41d5576427e26bc4005acfb5196e63b4a805a9f021cc05b60398269f57223459138434242a690ecca1ff9e09a442e2a6b0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90c1998fce6fd061d860e4888bc910665229f344f480a5b3c3832741a8036b3cfa5ecf7838f7b665fd62d7e68ffa02fc8d4bfb358400d99504bdc580dda32780', 16),
                    gmp_init('0x7712dae34c0d4fe326a494494b8f3d5fcb65c49b4a3f56e09c9a7e9c00a32919fe925d03b0282f6482fb58037416d7d2dbeb4dc5096f8a867904703389bf1d71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7988dc79779a6942838895d16864eb1d3963e0af8905c03d2bcfad3efeaff24348e3b7ca6758ae50fceb17a4e4ae645347f544eed98d13f2bb00d2f5bf944a70', 16),
                    gmp_init('0x2a3211286ff644bfe58a0f8572f15fc2834b9157b630fb1e38991e622356b3c8f11059228ced760037d077f5db6f656a19752f0e56740a432945400bec51c818', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5b0b474561b4bb95b9e486966ee52079cc82c0b71a13ff0e8dee06c594158bfa0db6388820b4f871a738702c74036f82139793b53cf15aacf00ca1b96762be7', 16),
                    gmp_init('0x17537fcbf23c3c4e0e6a281fe3465861f7304582c11dbcf66095c5717ff847affa73f0e36ed753a16390bdeb698740618e720c5e89775cdcb7782f61e4528b02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fcf5c154169713d975f73f4a05014f4092c4eccd7b62647abb8da229845c42439dc3fb127258e50572897cc85880c93a4018eae68e29375e8d6233c6edad559', 16),
                    gmp_init('0x7645d788e86690bf1561581aa8aca58751d5f461a52d5125f99169b48304e21c50a14f34ad3d561ea4951097336aad65f165f5f329b9f795e4458b3481197c8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92174103b9d032be6ee0f9e6a3e509a28e5140129aabe32ea9eb4eae1eb14b9d006ee5738817c75d51cab08130e77de28151205e3ee100f059c52cbf6a81e2e6', 16),
                    gmp_init('0x33eb336954e6f8b42a362aa2d533068588c213f45919bab94a65950b8fe244b81d8522c9a43d14c0942e8d1a5cfffa016aae19d958b94609ea91bb2ab08b253b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa2cb64222dea75a7de4cbaa427913795741ce9a6f5dd683c1fa21c5ced3bf78fdfcf066b35393cb07f2c5c4d92c265b173c8bb27471e6eb6c88e8496a58be36c', 16),
                    gmp_init('0xa15befa88c9097deccb7e5c21899bbd53ed85b965a39b93d547b2efa0eeef007a6fc880575507b27b32d192826d7c1e58bcbfee5cc9fd2667000d851e8a759ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60a09c6c7977cad8ffe771d870cb79a4db1e1a1aba9d8a3b6fb625e4492f28dae28dbd2f84ff0fa742dc0b214990039c8d8e2f3078c135c908fc4e040761c379', 16),
                    gmp_init('0x50c2a22b18483957de79115746bf2f6b322fd5736387df06c3945302ffa0b4ecf3b924796b9d90f4c9d71070322b065f880b3b7f671a7108b875facd40332cf1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa833d2aee9e1faf7d9867882e79a6cc8ec2642e69d4fa9633386a235f28b413c4362b3fc61a2b9bfd5cc6e852ddfc1136ebdbaaa0ff5daffbddc274fdbabbfa9', 16),
                    gmp_init('0x790cfa0d0ae81e9ca7b5b8686ce55974fefda6a56bbf8335f5ea4988dd106bbfc4b6e54b7b3cfeda8e2c91208edc0350ec939c14ee2e403dde90f057941a5dd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1853ff126f3731fd2d8bc3d717188f72d2193f0bddf47289b71491ec7b4952e58ac2eb3b4c667ab7cada48a264ef462a1bff82f3e7c770112ca14b6b1e9e0a2a', 16),
                    gmp_init('0x740dad58d5e4e0f02e3b532f21123c39b1c299ed272fb466e63f6e2863df221ef23bdc473df80fb0f53ec938e03aab35dcf4418a2c234b385853c01d9b8b37f8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa54327271d02d5332655a7f183518c3f27f323114ac124c84e5a422fb59a55abe09c41fc6fc5fd34e302b090e88d6713b7ec13d90d9b54cc888ec9c2aeb92962', 16),
                    gmp_init('0x13c9c3d3e5964a3a637dc99cb70d294625964f1f859c4d7a5dc38853e8f51345d7a6bb44995135b0c9bc39ba3f5f58fee3b4b0229ec116a818673edba26b7dbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5e1dc99c1e58c616c3ca45674b3d53e7a60f238810d763e7a59f857b6e09f33689055b84bb5c77674fb3bbfdbd398c20857529bd3d21a8dcb8535e1017b5930', 16),
                    gmp_init('0x22355e18b4718bde986b5d67ee47fa3cf395a6b1839c48e9b7486eea6ecfcd6974c56a5f9f4e9e28749dafacc5cacad317fa75f00112bb3fdb631dbaba9ae804', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a792028f26c4ffd3b9970fb01ae743564150f061ade3f42ffe9b2d83bc072b32e5da50ef4d64b0d8f52fc8d4419fce6943fb8fc1ae7a89427dfb09d633b2be5', 16),
                    gmp_init('0x149308f02fad4ce24b2cddf2a245c48c2df58b7390b04be54d777e009685d8b0daaa583c802f42ed4cb04f9c713dd37bbfaf7e681d536d848e55de19ae827ba2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63064436ef60c82a657af62efd1d4b5fac63062096f86c402e528dfb49f00a61c61d3a3ae78c519a0799a7b7b8aba39b0b12192bee739f11ef6215dc6a1bc33d', 16),
                    gmp_init('0x7c00f189664c274999264e15a2b53dea552b1635f0ef0572beb056cdde130cbfe8d01e64cbc3b6c95e164652480cf29eb7099bbc63f7680bc7589a88e9355b35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5d89784caac9a8f522b198c513bc4f3a568cdf58f8abf6466e170d6aa64658a62c2bec61d7d8770079a5bf12be467403f6dc213dc50a8d93ed5bafca41ae26b', 16),
                    gmp_init('0x964551f57fc3e0e6a0e534e31da4f0cfa72671c33f3e4923f4e10ac2d159e3087f6535c22083c1415fb22280715ffd5915d0f920a9f018e450753d17b1d5b5c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x885a6aa27ba1fcabed8ee754c4ac3b1b6e6e56775f8fd4693b589b0536aadbdde0174e49504dc508157603116f2f9a9ebe6ee53b16c008d1ad2a700974f819ca', 16),
                    gmp_init('0x1209c9ccb822d8fd1bd4bade8632d6304d70ffe8f2bdb79ba52e1b63a61cc4338a4e8fad450951bc038eb58cdc64244bc358458750dda0e76cd63942194c460f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41fd0ecb141e88e38d90cb38529f693cd41bc0c18617c0f038a3d1bbb7a4789f090986962c8a1adc6ce257cb13b7c8451ba80499e9f3b4cf1a1dc35665ec7a4c', 16),
                    gmp_init('0x53304290c620d197b62243f1ee0ec9d356c7571e1ccbbfb6f0d91984879e3b1adfa421b300245032ee1319ebd760778143d9c129fd013e192a6e4fe5ef2e7d35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0730aced3a8c49eab56ccd2e6d6547c73bdc5e44ac7693f8970321b6a2c36fe55782703edbe750ccd2b8a7ec3c568bfc68310ebc6a3e6cfb22c1335b9f9a5b2', 16),
                    gmp_init('0x9f9d211b35f218197cfd2362699cda2c2f888bee8ce40f3f0d080307d83997cc7a4db1a076429c2620ea833fb52e02a8dd9f21db3adebdb795ef1ba720740b3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1614ec7bffa55611b66d32a8b6e2aeacf9b737fa99a50d41b322518250096ada78479d9e347b71d12299a92ae44ed5b002bb0eb3bd64b12b836900a55998a74e', 16),
                    gmp_init('0xa5752e9b56aa5d39673d457782ad9245ceddc2b440e1612310992a0812c58af7b7a0e2ae8138680bfc60ceb98550f93746985251e508d968b110827406fe4259', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b20fd7762444a3273b4b5db6fd3ec10cdae8c5f158a643b86724cb8abb97eb65d301c4f36a637edc3e63f688e44486b8f00398af43164c0d9fd880b26e2ff6e', 16),
                    gmp_init('0x49a691b7d1290f4eb934712fccbc7628358775f21dfa50b9693d369a859ea0826da2b75c8ea502b31cb55eda9ef91614223dfde84227f6ef119d722c5e181c69', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x104fe331f763b9f112e95ae0e1ff5fec3de694286c1527e3508b2749399e52c45e252744bb4bf4ff929bd69fd4fbc6660d6179e09a50c052dad880e473c4a7e5', 16),
                    gmp_init('0x6f5e0ed57ea2d65794c080a64fb3f5ce7738067efd21f99ba237d5604b75a8a925fef2eb39bea1a49d25c9570d9ad329efff749b2577bde90b37f801c458e873', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1487f14bd4e8352fc95d62c2c768cfb0de49bfd7b6e58ec08223192f3b44298f208793245efaea4013ea3e5ff7b3bbe50abb0e60bfc1946fa38538a59a793d6b', 16),
                    gmp_init('0x357db905ec3f6f2972b90f32a7e305b413379b639f5c5885fce0d876af92c4f7326968929b333b44c3070d21aef1053a73aae41e904859b96cf2b648e5f9a293', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62103def354bc2e42bf5b5e5f963c938abf23cc0d69f0224bc1255b42c87b23d1d4082947597cbf0a2baccec9a8e1d6ee90616a0b6cbfc1d2f15559e984ca445', 16),
                    gmp_init('0x3638f67d00e1cc3b7b702021b199204acf9fd35ab2a2d684a75d58d505d279c822be50d11127e4d1c0662b7dce73de16ddbe44ff94a5c1631a5aba406c49a4c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c2d735c55723f90dc662dacb01e5f848b2a6b73fb676a83b4d61262daec32758100e78bcf94d4d640a5a594b316a12dffec8690abfca44697c33af13b733e93', 16),
                    gmp_init('0x54fcde426df65a4aeccf81e1dc6e5c337460c0b2bd0e5689ab94c71abb133ed86f1f2826853b44cae23439d864c2f6acf782031b3f053c1931907c1aa1162be8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x881ae82b5487e0dc01ee9952712b892b0982bae3580af8f36fdc2d73c2350ca4957bbf7134be3eb15bc60a92bfd5cbe34211e1e40b45c410cc3891e09ab2b82d', 16),
                    gmp_init('0x9174da7d9f880152eb2c04e3ae85eb4931e7d37874050a1a000f43025462639e7da397e0190fed27b8eb75b83b7771ed4de8cbf87d419ef753b739dccd9418c6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6e4ad2d1f68a1ec4dbcdc997acaaa58cc13d5b0cc8657b3a56300660222da534fca1b305c0018849fd1b66d7b6276d9edeb6e9ea955b2a9879725a88af88ae57', 16),
                    gmp_init('0xaa067f633dfa85169839db9bc1800a58526b441975362062caf13ffd7d5bafd0488df39df204c68e02b4f353285f4e774fec78e8c47b47d51988b498ee6d4688', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x833e43b1b9275654d8da4c41802e997ac8805c6337a904fc5a3b44f1f240b3b7ea53a72f3d55b07cf9427cd3fcc84e2b82823ec8f6db8980969739c5dc919143', 16),
                    gmp_init('0x563fbf2caff5cbda68bf0ef5b083123f1b4be587436f8d053890d3b0243211e70f1d5db01cbc317eda7b9ffa4f0d655ed55eaa858648a2df609c1bd69dfd7848', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fe5e03f3e384036d43ddccf049c33124345034df46d9a4feb91b2fe5e1c87bc18e96f06d5cc12410e1bf7634462a30e4012b9aa47f7ad78f74e778e7266d58d', 16),
                    gmp_init('0x9dc01ca5d0907cd7d3664c89cc03b57208201d7c168fab4ab9449191a6330a7e5ede7fb8ff368fd7517a121e899227361186c406a39141bbd8cb2201e927fb77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x416c5977040011a3a119828bc87f5c71558b133a057dcfc151b8d215101f75ffbe6c6356b5d3dffb4c168467283fdd2e71957bd14fa6d89160c202b737097f49', 16),
                    gmp_init('0x5138d113b24edebfbf25baf98b7d6a37b51f171b34d266e3dfacd2911c7e6501806c81e50175c53aef1b70d2f7934c95b8751f59441929a9ae8f611bf511a7c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97da93fc90d05d3a0c9c7a723350da0a58a87e622520c76a3302f8bf41ba41661769a68c3cefa22a9c8391acde7d84ab11b3261e03a12a80da4a74518a987752', 16),
                    gmp_init('0xd68481cbc722a142b2cd491555851fde2d520475e2aa9ba330f4f0d604c2dba137833696c98b44a1a8e28b48c12ca8ed395fbdc0054fc553877b82234051a1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3913759a99d088d56462085fe4a591c01eb282196b4bda1d1f09a85e95d069b40eea01889e8749407158068330e642540292f78dd89d3d76045f548a41bb9c0a', 16),
                    gmp_init('0x5ab3ae2b935efa3bd9a55c2dc807f7a8abe1e0f1d17e2a49758f58b6f735b5a789cf1baa1c58a4e88310c8679bd525e8a88e0c382ea6a8fd5333814ff46a387', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7fb2a0e99c808d2a20c3b431051a0c0270c2fa1e6695e805e2cffaeebfe455b3a8d44edda221e93cbe833dc7719d3e536abe891a16da1f7273715396ae5915', 16),
                    gmp_init('0xa8464e53b2f3473693cb79d3b9c7ceb1121adcc73be8535c229bfc76033c4741c821225144089be4cb10239a849f89b289fbc2407fdde9b81495c777d1490763', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51433e88040fca75176123a4dbdff81801628ffa0d97c6999fb4fc54f8d838a0703cfecdf83504f78260bfe5b0e85b308f177de0df7d32ea40486d2033a3eed7', 16),
                    gmp_init('0x72adfed6f2b7cfb2f2a164b6d157e8fae616d726ed4ae336116eb986ba4d6756f65fd839a6a7cb7ac88982ce953da02153e14d4902c48cd2738aac37045e3fe2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b999164aaef5deb186f821a645b938dd362380d438f9d527ecd2f4cb49624e5d62e0c702bee42661f42a0cf93f018b4a47aa349c905a86b9244bfb6939b64b9', 16),
                    gmp_init('0x5efeffca45356685859c92aa0edfb363c244e268168ea1eb2683faa3a41d471851760bb8aeb3e8288d4c9efbefba41a06f07b173048579f55115ad85264f4872', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44f20d4b4df2e5122ebd98ca1f91c80015cb5f0b8cc585a64bcef360cf202dcc55ef947f4828fed078862fb62ca9f8e4a1b2bc9244965d18fada5ba1e0b7f823', 16),
                    gmp_init('0x2213120dafe0c31df964cb4ca0a1df658ed9b9de2a672b2e49c891c5f2a9799b6c0d64bb08880fe1b52fcf3b4d0b1c63dc40b5b657ca0dd86c85bc6a98ac07ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45ca418d141fc30a188aebf648e53ad6309b64320caf1f17e237a689453abedf9b5df7f1a6cfec15c678cb3dc6a573674feeb459f47c843f6aa2d271b4fd95e9', 16),
                    gmp_init('0x243cfea2d32133b15a049fb862c86fd7ae9dc6f2f8f7b052eff970c9f5049c4674753f22bd2c5d78c1a8fee6ee062769cdf8585eaf58365b561171947e9c2d8c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47d699027bca607011a1cf49d025fc63ecd2ea0bb4a9d7f965692fb8a2c0da277bd86e4b637bfcbd3f8195b38f49faa1e6259f2110b170a7b4e5049fbb443a1e', 16),
                    gmp_init('0x6f0988b557a558b806e7949076747a14e77c57fd81317ec2099cf54e80c72c53412671e0da14d7da49507052468549457b7fa6d3bedf93f3417db167253afefd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b3171dfc3aeb9887cf8659817b0a432af0c78feccf31fd277d5491f813640c18c450e420594ffe01e30d3ef6517e4bcb23f6c15dd672c54700ebf42e167b6a7', 16),
                    gmp_init('0x1b53bf8f4aadd9b805d64a4ff71b39d5af8415618fa3edd0e1888bf23bb42aa30afa9b34cd3c5459296c2802346ec5798f11465be41d367287d3892a6aa5c033', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b9d7181dabbd52eaff102c018d72ca8aa05c34917236a98864d1af08b0322d3402281caff1b7ddd3adf06b9c0290186e6abfbede963f55d316946cf0ba330fe', 16),
                    gmp_init('0x5ead9fc5073c5312f68d8d5ebcad99210eed72d296b910357372a7ce71b9c715c25c765ad5d154f145dc7d89c7a21ff3405d2a0dcd690bcf4be6bef6263d8d48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93e0eea6e8260eb6a0b5286989584cdc391b6d29f84ea2cca2e9cd09c5c95af4255d6427441c7c2387524227e0db15db30641357eb09ac94292b8c0c8e114701', 16),
                    gmp_init('0x6f86e64392e68a01895e754ac066effa8859b5f6a01d88ef0503f55151be9dee64f3a9904b99323871f2eb1a8f35a3316bbbbf40a6994fa345f41d78322ca9c2', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x62794656f9e2beac9d2840de08da141d6c0f8113d8dd64a5506a47957d9883292faf4bbde0d0d8a88e91c7f230ccf89de5829bef961f1346604e832a340df62e', 16),
                    gmp_init('0x9e0d1e1c24bde9c197432347f18f46aa71a60e16e9c567d9385c4bd8f8bb231c35fa4ebefff49d92ac224a4bb1291202d9a2307479efd2f27a5c2d9991db43c7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43f187cd89e795827f868e01930a6dd9e37a21b344ce0b99d0a17d1c54665ce8111dc1e3feca2391b469167b46e0d5e10e7aee7acb90d75b59ed49c07d24cd34', 16),
                    gmp_init('0x69b303cfd89011d09c6c93b046102c28330ac7435e609b3c7ce275fe3021d5ff3d9de7c808433f5c2f2e3ed554030c94e7692ccf74d3927f0eb21e1521d9a05', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b3c88fd370bd99b07225ae6deed28d402baf3ae57d4583fd7131367f84e90ce5f1545ef15e2f5d6dc1859218397467744f96a1c3cb74f821f8ca913a957ea10', 16),
                    gmp_init('0x3e9836a0aef33b2bd7d7f329b41af77e0744c0e0643d4240e98c46f6f81da3e7419bc3a679db72d62b865488aec68daf82dad211acafda9335fbe29e500ef47a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71fd63533e887645975e723f8a404d69694af6bfabaa167797621b002c49a8f34daf97aa73bd22f1ea60e41f1ed511cca1cef51a8bd55f31fc696eb1ab97f867', 16),
                    gmp_init('0x3d6e2a674398910df7a6369cd15d483bff520f310d36232e82e6501d10bbb122b89607f4ab8e0e7f2a849ac635aebe863f439a2efaf95f07dc8fc5bb8872a9f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e3f844ed81e46240af8289a65887b5ba2a55eb8756bf13e7a88e1262df2da5d4a482a1d56fe6ed2dc0123eb02762ab094721a7a292f80b7b7715778a7b3ca5a', 16),
                    gmp_init('0x85754da221a40f6d8b26edcd24748bc645b9eac1559acafa88854a60587363b8d454faabfc17a79bae9433b3fa01dd6e2e207bab1397caafcaaef63ba452f5ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12808667d5dfd82ad7d8bb5e4ae8bf1c902a4b78e5abb612c38c03ab90c9dfe7db0f7b1d23f58302aff71b17646eec2a87aeb67e6a199aa0107115dc0a404235', 16),
                    gmp_init('0x322c4147675a92b3237c858dba6e955dd19723a26fc8c0c4312516fdd0b62ecd000061f0c933643c87cdabbff02e669313ce2a507ba0bf8720d526f6466667cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4914125438d2bab7221019c894716de55e7e5298dcb75ab66a22f470e2dcc4c3d2744249d132764ab8977e830e93316927332da37c3ef9392d5b5a267615322d', 16),
                    gmp_init('0xa08a922b4937a931a97285478bf41376c16ae2abf9cbd78ef46b6a83cd2a0e158a1cf4124c29aafa8bc63f5043b90d1cef253f2c23ad57f5872deb918309a866', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16dd0113abffa8ca54554ebd99764c5b64fc2b2381bd228f908f258aa0c50202f06274bd03fb8efa70839e5da4228dcaadddb3f0a0768cab5cbec3cc35648f59', 16),
                    gmp_init('0x275068dc1d24869171fb21681f35b31f1d607beba0486e363eeef2eb7262bcd2c3b70c2f11e125aadb5f7b5e72bac96572be8918bedde6aa331eade4030f626b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d8a1954e22d0115ec7e5c8753c5656a0c11555e3e8a3e14842f5c4337df70738ab45a9a0a3e99dc362b10f0487d0e1ca723c73bc736e3d3046a5ca12752bdcc', 16),
                    gmp_init('0x207042e03705956b97bb36d87f022fc7ddc509be8a5a29974c08794eec9b0194e3842f8452ae45b622f17bb4c7293be65cfcb6c1fc3d87cc5581ccc0e021ad03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bd67e590ebc676b28d7a96db6377f2f3d411b9b20e66257abd1ab989e539a0e35b52283743771dcd7ea6afc1e8e8fea99e183c46aa34bce14613c22a0636712', 16),
                    gmp_init('0x495ad39d24e3814ac3bbe76da70aa8595c5357b83f1319c04b31b1788e64d536e82e6269304135051f77f71276ca0179598ee66440b6b904b9d7f0e55337f766', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2210547c7d395ded45c627c6dbb4057bcd2c82831a7a6cbfa2a65d15aa843479365b758f35133c375e6ac0d4701460c59734a9fcc63921fb255875a1acc545b9', 16),
                    gmp_init('0x74b5f0900c40bdadf3a86c5fe7dbed40bca4814494ce21f65cdc435a95f4d7d5e1783d555d758b425ec0cc462faf73f1b52d0340ba214ab4e1e3acef9d7814f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45b07f249c62241390c29a4ba79fe13711f37e6f2f5dda0fbb72b3161a171c52093340b6b35385e4522136882d36c76969696e7d3f4724808f047ca14a588bc6', 16),
                    gmp_init('0xa917b0c57c6703be4d4f8b21d018e985b9eede8b0a6a68184559eaf249d46bc794094679b73d9c1c86acca9e4b81413806cc65da7eacb88e699704069c419d3d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x716be2ca760e63d1e136d9a89ed3a50e35963145d10fba9366d9a5f5d88364d4894674ecd722e6b4464da3d14eb21f95827acce96398c1579874f5a31fa00300', 16),
                    gmp_init('0x95006812dbdf3d88f0affb190f66a73fb902a5873331bb3f806516aa1bf9c3f9a118657f97c255e09142300f213d5f5870da246ef0eb0976615510229b29f4b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7840ff0123fd6f78a315e6960a93e8f6296ee94048f9f1a73037e70655b078116bb111ee23cf5e07176da034548ea21761e966120c455dfaf2fe939109220a76', 16),
                    gmp_init('0x33aaf0994b60965bc0ea13b7c591660c79c8f4c55a51b65042f47f5c59b2accdc3ba1bdb88a8c5eda78b625d98aba05aded8830328c69ed6b25b78c82b1f1ee7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4835fa32b50e8b69b32041da1da528043d2f1d97e7e647e879eafbb42e964fa86c236051c2286b7129cdd82a226222e982fded43fe7b3e95115d6cc2cff09824', 16),
                    gmp_init('0x1cc0a664d3daf0e40ca9983dc31b31fd27bfc4731ddb1c444fcaf8392962b678d4fd694d316e1302bdf59076db1cf67b3f12778db660965e5c15545cd5ff429', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6ab93e8820ae84fa9b8565caa08c6b45e2f2652023cbe0ab4f68b2ff0524173be0e27bd91d056130256a1a1448e7ce690ceac6c068bb4d9b468d550da02ccd34', 16),
                    gmp_init('0xa04dc44898330cabd9ee2028416e305ed5241d46ed420ba6c5ead0f44fb54db761c900596a0643c4ec59ea0dfdc1b339ca76f83742ce6cfb4785d356002b3b74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa36b551432d14ae4a52060b38abbba73aad4354fe56f2785bf6d2a3beaeae4b57af9958795f88c90002702f72caf99830d1aaef48a0dbc660f57aeafcad036ec', 16),
                    gmp_init('0x89959d1636fd9d11f70425db46e030d6bd66639a8f1d0b79b9bcf4071ff0629b9c9307af43f68de99ea6bb9241f40b92460eae5e08cfab525abfba32b486753d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8978f3a3b59130845a018502ed4daeb7f51416dc23f9dff7ba90d210d82f6a67be0d4d68ee444f6245e872c3b569bdc1dfc2dbaef02386f31f0d272cf60fa517', 16),
                    gmp_init('0x8143b0e8a7de35e1723511b0e7fbd9ade15e68956d38faf551d94d572f3fad2fc2a6cc6c95eff0b144e625dbeb6b4fb16471daf8a446caca83abbc635af09edf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2132812287b7ebbf99fdbb99817e86e6e0b5624d81c5a5f3f9f82fddc8b5fa73172a1ca852908ae98e9c51a51c16718af8484d9a48531be1996f533b1c068332', 16),
                    gmp_init('0x6174a595ddd890b3809a34034179c4696dcef7f52e397697f12b50616d5883bc1d8d0237546f6ae48abc2df8c907774eb78b128b279e81da68b976dc52cd58f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e248ff6b510c86c58edae8ada66849452353aa6a663301be6bdce77bf8cd4cb432d0d3b7f134c6bfc8d516d099526ab020fb2af6330bd8a5a0f1019878d6b8', 16),
                    gmp_init('0x6e8a98e4af75cc90fb136e5f5f8a20b693d8822686314ed7c7f24cc44fdbd0ddd64fee4824b02d341cc276980fde5bcf11c2fb6d6267fecf611347affb492883', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81694cfd3c716136cc023cb8c4935b02ca98f82603f482cc0557bc5810a70a47468854359aea082be63028aabc812ac9756d8ce655883f2c6154b8a4da5f9dcf', 16),
                    gmp_init('0x573ae78099a4cbf148abc06b9f3beba4c8bbf01aabb5cab0c1412dc11a24f85932b91026bd94fe142e2a315ec91a658bdfafcc07bd05571989a23dbce5d74f74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77e8d8beaa3999bf6339489ed269cf31449721411828a1525608fd3a9e72e22a4f164e8939b9fd98dd1c43be7c90f757fa7db184dd00dd7e9d2275ba32c7cb5e', 16),
                    gmp_init('0x4edca3815f59dcbb93f31193ab804d82d7ab4d945585a77cb820f8e62cb9f20aa5155ba662395b4f9ae572ccb700cf0bc1749c5f609af0b5a88ef330f0cfd03c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50c59afc76e32b5340897c1c0a1da2e8a559773bc7c75b3b3c5de88b8e332b63cb88bb1a61ea1340ae389cbf905dc2f6ddc9c4503d1efa7655a0db3afc196b50', 16),
                    gmp_init('0x288b50437f69ee3ef9f78e294404952b749aec434a183d29a3cfa4d034786d2b7e76d25f9a36287e1d98f37d1a064d86be8300c1c517541f7644998111dd5567', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa36cce0f2aa7846511fb1fe39dfdecf13bb6eb7c64e7890d721c2840679a5d5197b9aefafa21205b3db2e8505e9c7b6b05593d290cfad976a9c644bcae672644', 16),
                    gmp_init('0x40aaedee9d53ff8694e241c5248dccb82c4d5a4f94dc7a5af2c0667e54768f816af308a71f97dde9e821858f131a5accd5986fbab281c719ed8ef918838dced6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x887ef89d676d1b4c0f31061fa2594b2828d44c52e8d759ed12e44c8a86e2b4bc8386d1f9315fd6ece881763703f3885269c951d18d012e8cf8185bebf566c077', 16),
                    gmp_init('0x96a91dd98d71291a0001f2b15b1812a773cb0ef8559582e107bffb8b64aaf2747e10bdfa40dd87f9de802456325fa19d4d753f88790b3b7ab35371f23d51522f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b8475a65a7785fefd5c5375b6c425b6fb56dfd8cb1dcc93fb4663abb6d2dcf554aa3355a1e568f6c7c77ebb9539f281b01c2fb92c02a0c2482aeee524a3dfb9', 16),
                    gmp_init('0x9d0067985954444648faa7674d4a8e649cffd095c6b52d7ce017b953858f41339f210f8749cd1fb2ae1ba6eca7c362ed12359d8262ef315afcabb98513a1015d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7021115604ff1ad097351b157aa314faeddd351624e3912508a8e43ef157d35390c6ff08eb64f07c46915d554c2dafdd9f03a247fb78012eca89a312924bd9e2', 16),
                    gmp_init('0x6b6d7f9cf409554f5f300977ecd78ef2375ebb6da1d8b189f69e151c6e648e7b143e4a3fcf7d79f1db9336e002e46a0bc0f16ac6a0900764015f1f7496a0955e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x117079537990c8cbd755f681348b428780008300f29661e470618cb0b500891419c3606f8925e62b25d1e894cb790c837923bd085b20c8dd97802d4b11236fe9', 16),
                    gmp_init('0x9ae36fb9573d89f2696947469004e02f58e6d27291b7199686e902205ebf72e5fccec614151e401db44b707b80162ecf365f3e5175c0337e2d78a35889fb4216', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cc09164eb1e8505d91ed6afbda0d4fddd56b360360305d6869cebb213731ac7d20d9bfea4a6d7c7ee40021b6a4ffabdb45d377cdee3c6954e3da67b61c61760', 16),
                    gmp_init('0x356878b2e1a2de1f31ae2e284c05f5ce2b8c460ee544037ae64c53ac12949f2f3b9af1a44b04a1950559b5f27f94484148f7445d8583b1b589a5cee1e9e8189e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d0bef8120eda511fc4fc980596ccb76770d0d18fc630db4e572a3892966621a5e21921934cea9f0bc73ef746eb4a7cff8aa546dbb253a13677ddf2e1784af3', 16),
                    gmp_init('0xa575dc1bee576a2242752849724cc22758a9605d7d36dd48d83951578ce05179f09f7f53888ba9a3a9706f94a265aeb7219ab0ba4a695351e73f4cdd736ed508', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x65876e9500aa0346c9fa3ddea8002c6be8bdd7c2f628501d73844cd35fec661fb3d1bee7e09da23592bda5c35f9cf7cd15d538832b8a77259da23823d1d5f2fd', 16),
                    gmp_init('0xa7fd542d90d7281daed5b9a7d835e6a0d3600c86fc1f0bba312415c0dd9253ce286602c425d1a0c8f7787253463f930b44a8c03fcb69cb10fa2c7b16650b9e15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x938f75ba014b9de62a08a624b97568f76db97c24ea60061973767f61108128c25839717c5bf9cfbda335e46a0393a6cb210bb3c95bc452528a838b5c7b35d90c', 16),
                    gmp_init('0xa37f6751bd861367c0ec98f1e6513da326c26966d48fa2ad8b9192ca5a60fd9de0417c91d5703c28bfa65c4df06cd53d10882a8cb2bc61b469e618164681c342', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x642b7e62501323fe706a0f103b0f18c15ef763c41da03312711c7c0e12c98c277671c0ae914faff6012dcfa4639fbe2bb583051ff8038f818844036f0a01bc9a', 16),
                    gmp_init('0x62e6ed38c96edac4b4ab77fbc54ca4844ced8810b7976d74e1306a1efcf6c902e96b50db0f946b31794c2851cab31e2ea1f6f322061cf2bce53f8324950540d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x633c44ccc6ca61f6f6fdaebc9f8232f58621a6c3a6713969a1d46994808797bc1cf20b22cdaef5f43c08a5799353678072555b344934285aad177360f667758f', 16),
                    gmp_init('0x78ecd0bc6574f744f7b22f6c302034b1ba52ff665e48050efaf0c028d9cd7f89137f13dbde0037e409ebdc67aac7a7d07e101ccc322dc0f1b3d914873db92df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ae2efa3fab61bf838564dcaab987998e10770cb75115e290634177bb36864a61f2e150832990618eb6b79289fa05b6a4d79cc30c137613a2654b3490f2b7673', 16),
                    gmp_init('0x37c732e19c03f6a877f2f80071f6cd11e3d52c16abe0c7857f55fa1302ad232ea161e6a48c567bbec37925513cb8eebb6d34adc5f62168becd2357f301362563', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49d37161313c063e4f344f570d19879e3caf97f86f187cebe36f848d7ca2f32f430338ab8d5039082da54e1cece40b64ab7529306501f0283bb1c2daa3c021a2', 16),
                    gmp_init('0x502331343cb312da0a3b9ce5de7822369cb5cacdc175af9e5588d4dbd1d1761f446028ea02b328727a57af3dbe343574f260804c70030fe07a2153092922f163', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1abdaf1eb2cf464e1cfe6d97273fab3e442da8cfcc51b0855377720f76b394b93fccd879b9c26eb271203532ad4d35b992a98e21002fe9f7ddd06c73a834b9d0', 16),
                    gmp_init('0xa473a8da444f588e3028a85db401e41af20d7f11719931399f1eed2e118b293f716f24ac8789916929a7c36be2c6b903e56e2b3a1eb056d14e83fa95a3bd1c3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cf701a014c0ed0e886e7fce229a2300bcd5f2b61eb2a90b6e4232e1c6e83fb5bf06343c0562cea05e6751aafa490f81c022a5bbe761ae5de48ea9bf00f33f7d', 16),
                    gmp_init('0x3cd2cd2d81a6837b93740b86c00142e35f05f57f400a03dc1bbc0098fc86fd704f6bfbec0fb513bb054233b214bee1df0c3f032c12ecf8b111974f1e5d30e526', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e3b10c368113666061c236c9e0942bb4658833a47ba9f701ec5e114149d939b519c7731d3d27c5f4cf4508d61b71b78952a4ec56bc3e64c57b2ee6247fc728a', 16),
                    gmp_init('0x2e11732d1f3ce9ac154d262294bef0815bc93b7826496b07a17b01a87522928a8ed5eeac6a8c12fd75181dd21511e12c95b582a948bf8fb841e29490d0ce38cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x546757e1714b922f2968ac651985371a6e944e6e4e136c7966ee4c1b6224cd4b9b6012237c9a0c6af72aaa203205ccc306176e22062f2e9335be1e6da678193f', 16),
                    gmp_init('0x97b58658328bb8779305253581633cbd69eedfe0f57575794fb9b3c3fe5f683d5fc0a10145241bbf212ad1cb0f6668991369331d7123bde6f8563058f0bcca60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9728b35f83942b32f4bd4ce8841db4b9c208932443e19f430dd6d0abe9c44bfd84f98931f26ee2d5fd85bc060645e6208ee9e45b711ca4a869a5fe5104e1fcfd', 16),
                    gmp_init('0x58c4abe7ecba7e4bc3c1f5472169999421137f1697d8cd5d5ba099890dcb742e1613a133edd6273c20d7bebd58a2c4e994aa0b53ef6e87c6ab5b4ccee4c9cd37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a6dac8564e1e07365a938904fcb44f6e1b20c015ccf8e044d2589bf85f0368c3d6a15c963bcfd3f5bc8d6466f85c7872f7535eddef21f7cf52aea2441178ba9', 16),
                    gmp_init('0x77ff6025b15d5669a78563a0fd732aa5e8a7fe9cad5c8f308864b07a84513fe468d138c66f376a26d25e2ae9fe442dc7db83db9808572d6a6f369b605b7012d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94d7fe141d55d36e4633342a9b5f932cae75253c1261c1f3c9b1946ac63dd3ff67bb42a4e9349b1024abcdefe7db85bc1e746420ff2c1952d0a1f38e8a95c9f8', 16),
                    gmp_init('0x9ddf52435b72bc361b6fa4b0d6a61f905ef80f0c48ca9f2a3e199adefa6a7bf36fe66b0af803c1fe199602cf60741f582e25cfc6c8fe293312ff6c0aac837204', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7bade15140a217bfb8b99691dc805be6329e836d82d60f5beba7920e405d9daf6c1328924bb1d4ed111732b6db86fd9f2daf9a3bc3e55a4d6d18976b47dbf52', 16),
                    gmp_init('0x29554aaf6385a52f6848f1d7312269c332afc5dd54dab8b05c0f7e74870b95d186d605dbc07e77c23f588e38602856c66bb75fbf30fc128d62651b513e34f04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34658ae638b7ee74d22de6ba5a13e40eca9a3bfe7cd0ba3e3ae63e8eb8661ab86c5aa1952f3a49cfcc882c4925dc7a6a3a1a9e6654ab74841aef7e87e561c979', 16),
                    gmp_init('0x7802e94134bd473e3111cafc82d8317f3881737919aea6d21ac108e504c9e42b685abd9696e1a2af62778370187b000ab466056a274879f220bed60e6076320d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x677cf57cef40c5f18da5814d842537d4ec9b4282a05a89d82bdeba960aceab827ab63b1ece0a63db0c54b3af25b7bef1b719c5e8194e1034ac414ef9876513ab', 16),
                    gmp_init('0x57ed99a3a8794ebfbe29164e2122141438679040cc934ef12cb5195dc64ab7e49f46908eba91323cf2ce7920a534718187de69fb63286bfff7d8239f6ea59a7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x855496ec649e420471253f1ec78479423fe083b1836496a8ee165c04ec44e2593d6a7c655645bed7204d36911f619e54b695589f1473fcd818c70603268edaa4', 16),
                    gmp_init('0x4461ffbb0e02db0b8a5dc2edce091a405c67d01d27eb4cb4497547210ea51fbca1b03c5be4080fd7de168f49c2d0b0b70653b8e97820f6200cd93f5514def0a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81b80b1a8142b6ed1cc9164bad28654eb36bab54e11593a9065846f69cd1fc14bf66d07151495933aff23818190e314caec484e275626c66cb14b80500f5f919', 16),
                    gmp_init('0x434d692fc06d7d7b21533cbefa3fcf741d32d9fca310f57c2a534510735a68b090352eac8980ec2ee7753cabbaa74e6fbece2c94445bae4efd9e1e8326bdfdaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3e385ae2fe97e793d088b7f7be1e4936f229378b4dbe8e574209eae9e14f0ee4f1f69f5bf2b61e9487938897018f390088d728839c1db86356a36d9b6cb36a5', 16),
                    gmp_init('0x650a60f1d27e49ccc0453040f22c4666ba11da0eef3ab260b08f1aefe2a920f9c7ef1de2fc1447628ddced69cdc85a12bfdb93dce10bc7b1f39af58ce608967d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a3a85bcc5196b7a49adb1c988f9da5859516ca00cde8845c98ae573f8f6ae2b07c215420576d981acfdb411b7fa82063e0cdaa5bc49ce54e8a537ecf9aed3fd', 16),
                    gmp_init('0x176c4acdd1691f5f238b0557b90d242b176c2e8cfed52fd1bec00d3e2946c6983e7c86826f30465956dd2e98b9770e06ebd6c82c474cc60847b15ebe3caf7ecf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b586df904e6c5fd31c5ddb932c6df8c3d000d89b4120327133bcdab8e92d1de62a5fe06970687482d72c5bb2035e812fb2ffc8ed9c33570aa0cb58ec7e097bf', 16),
                    gmp_init('0x830cfa6cef28d18a43ebd25a71a35aba0b2e9cde7fe400feee5e6ba1ccf6cfff09ce4a719725e2562c03f0157c45cd6ab77d4988509be5b627391a135f346179', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9396ac2ea96b66991b87b6414a1ba33cac8a95c8175dab574885e26a829cf49f66e28e952f1daf12d66ffeb66c3a188d5346ad855d0bc8f7320a2893217c2024', 16),
                    gmp_init('0x780133eff994cf2c9157e3f3f9fb4cdb26fbc906ccc4acb663ee12680545d13ab66950cc0fe0c9a985051ef2cdd3b3d71949d27c50e0704f4ca7f06e2e879946', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bd4ab345127105c7d22a9506aac235fd619c0dc6f01df067e6ac8a72435828585691cac7eedaa3ea33d6f97f5abebac55fedfbd2892b58e69b9b9bc17502431', 16),
                    gmp_init('0x4bb05ca8d31e652f72ae99a268cdb1bc9c2855da6d3d8cb62a20141181bea3eaf9daf1ba93fa61baab5126decd8f11e9a9d586b92bf6ccf77e4e1e877f55d70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ba4ed0f089348aa353b7d4c32fdf77cafab76faeaf74778ddb9422c234584bed42584b1b2090798cace2d9f46f578665226447605c4a49cd85ace0bac814b12', 16),
                    gmp_init('0x7733493779e287d814a22f41df97565d1a378167ad44674b515ed664bc116fcf1674b3eb666a450c6281431c078b7fab7fce4013b8aa869f9880a184c4cebedf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10fe52a4da15e3ec73ebb534b8cc29a57de4742fe967977ca63bc3232bbcdef3206a2330eb374aa9f6b17d525bf08f4a840e0e46c2c09e151928f36c0ca68d3f', 16),
                    gmp_init('0x950c3cfe27120945e9a3c9210b8e5c443e7bb9cd9490afd1dc1943fd8388b93adc25c32ca3fb914e5c47b85a30d027cd0e16dacc68bcd3fdddd73d65dd2a231d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26bd1850f97e1ff7a30d5a98574cd8494eaade188f86c44fed6881d97833c8bf545270c1781111aba6ce68a96dd093bccdcd5dc9ab75a085680b857e41dd1879', 16),
                    gmp_init('0x1e1fc87db2432efd116fdc144f20cefc4c5776ce36bdce8fcc442a63829634004d413e2a2b28b3391420b7d74fc5b86ceee938c5977a0596b1119ef953850da9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd3fc9d485f1801e487e1280ed6a89c397db355b32cfb73b6bf8a607a3d3a68c84d31ba04046ff7bc4d8cf3442af1f991bec8a68f9b86448fa01624a539d10d3', 16),
                    gmp_init('0x30a8e97fe6eb01d65ef62424fcdee21dbc7c36bb52e800a0b910f91e8aef2b5db56cb948234f2494df49e1433aae03ff96d43478a5fe568a2f4389e070ff3601', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16abf39fa05aae06b3cfcbbeebe2d4bdd8d0fc08bf16859a6e1333421fa728e1179d224ba87daeda7037e2bc252e66e7bcb6c3b0e9adeff03dbe1c2a72e8fd6b', 16),
                    gmp_init('0x52cd6703f2c26639592cc4b74a8dac6a27706cfc386958a53b2e4c8c2c3e2d7fa253e4f8f765f52eb7132c131cb6197de8c2006e71fad2990416d31e7ed72182', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1813bd9ecb1006770330bfe456356ee15cde13f8f4f382462fe360bf3aa39e4de23a73c4f8c7331bf3971b4e504423981f3c118b37f58e44c8ee0e1e60f66a52', 16),
                    gmp_init('0x6b3e9b0c4e865a98f42b55a02c27d66357078fa8fb5a6a5c1bb7a43f91c04a5b985c6f1e109e870c0a2dc29c830177cba7e7ad13f623c825c54696cd190116cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36a7b2818b297e8a05ed08c9d605ebd05ce101b5664a8893ed843cfa3772cca37387dac1c66b2e5b72a7c5e8a7bc301318e28427bdf35db5e20ead4147a4c9b9', 16),
                    gmp_init('0x11d423b8d353feed150731ef2c50d4abc098218b31f4be7b383ee41a1b2951e47cfb13591b0a4303cc58f656abe41084c9fc3bef6a881c3427d5649e052cbdb4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9bbd519650386bb8818aa2ba1d40827ae23ef5d6b44b786c0a1a7e84c00b5d0e0a2692ee2a912a58c5e2e2be373560a7403efa32dc144b281f148f692fc72977', 16),
                    gmp_init('0x26aa52b4d886cd40f58584cb2157cc48acb94b9058226dbc088f0caafb4987aa11ab10beffdb0c251cbfdcece655c2f5f18ad15015d4c210d27548bb4e87bf80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25519ccd9147364eb93fc4997232b83db5f1d1c6192036e3f6c894e529aff4bcd9ed1e2d6484165ea45231c331a989df6f7401f7cf3b55edf6657b5cd7d91da9', 16),
                    gmp_init('0x8d065d582204747c48364657be587ec311407e42b0ee6d5daccf141a6856fdec99301ba8f894c642b8971949dcbc2e785dd90497d207dda367b8e0cbbe68985e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56502c818f6134532153129850953ade881b4120a492949440f133756ee608c4fdc0261456221303ce8f3dee91c75e00ea5679f29f119bc5db89e7b0df9c6518', 16),
                    gmp_init('0x26e045b84ed944db4855ec0092aa548f49d7bbb8c05012cae89c87d18ace8ed84bb514930da7860b5fa3cffbd7f2af9b562b782085cf5ec049d61c3f6105ff38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ff72b576fa0d0382306912e7ae8e4f9cf1de808e3be9fcda6e1c6d673d9c172e56f60998ae5265cd743f12494a01905330dd54ef4fb02f702e727c9f08732af', 16),
                    gmp_init('0x5a109ca42c7cfbfd3a036d3f8feaefc0520246e1e44013826a282099f19840c9cc6d292e272944f7fd422ccdb12b191857b5d02f099865d14e69e3d070225705', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27a8bd285d32073bfd39ddb5c47367bf174b3c8bd7c1f7c82135372e8ca8b18a71c59d5a8f3df7481eae3e3a3f307afd07a1cf90e059420cadf904dd3ad44435', 16),
                    gmp_init('0x3eb91d529fb41a31ef8a0caf5f2f066485de065621226f679b8f903ca8b1bda43cc8605d6ab06087d047c38f91c44bc17eafb8c88852e9e51695e921cd5c6214', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x716b91972bb75ae76ec1586cb7b4e7bead92d718600b767d4ee4190fc8ca2e0d050f0c6d9a3371174c371650139a27f6a69769353ecf7d7ea79331d8680af34d', 16),
                    gmp_init('0x73ee2396ebd70a7c2257a109d9fa5360401b4c778b45fc897f360f4530b7f5193d0624c83c3dbc3dcbba189543a061cd8b502a007cebc692a7e03cb7d5f0665a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x712fcae8e0db7dee28b6b3f96b0fd93a31a7f818619e03ce0a06ffc9c40da873432e51a9c885c3646b7b0082360019ce09305407ee7b309143be85699da53385', 16),
                    gmp_init('0x943dc90799bd2094bc5cdebb83264408e6007a33a6ae9e018a741ec9eee6150e6493d552eceadf20df60929875645e5851efd415fc2fce44f17924a7b1c408fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61233441ce021062538c518253e060d30c1013533b844df8572498ccb1c2f20188c46acaf77ff2afcb818cbd69baf20a87190c188b3bb56a24995756aa25d49', 16),
                    gmp_init('0x158daa03d0881dcfa0156d3dc3f45750db9142b70f4689069387ece594c109593b175e246ce42ff7b9ff95572fa00891e55bd47e8cb93b2e8d6e598b56cd706f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x765cb420d94f3b6f8944f488f484040c515f391cc04625694b63129c760cd34bc873254a58467d7a48cdba58928f482525dfe698f32f0e76874140d9820dbaa2', 16),
                    gmp_init('0x7102c5ef185345d53dd96d1dc22f5a0f3d9eb1350cef61915e5ef95f5c1a08b4dca77dcc962c67166102762731304b38080acbd8e23125358fcb149b8c0b41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5674c3134b214f773b091a9e093df35da8ca857f2773d7725476a4e8e8d96d28ad57621c538f4181b8473c72f6062400b3733e690196cb6e808a4cba3c52f71e', 16),
                    gmp_init('0x983d57b18b84401d0f4aa607816012b277064baef4000d9345347840bb425e97bb2da5e721e219ee75bf9ccac1916c284bfd935c681f5cad8c7e2ef608dc8f09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5e6c1603bd2164125a346e422e62605eac2f825a6d701ab1483435a20de82000cf377bb92e402d0d6c2980adabbd4eb540f691c7fdd889e5c47d7a65e867969d', 16),
                    gmp_init('0x66fd5aa320b21beaa49d76ca16433d7f9337061e013caf141e8dd3cd97dff7c71de6c98f8f78ad72ffed1b28d2b2d959ed06c2ae3fb73b90fd4df4e7fabe59ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2368fc2008576149269efd2b1ac89f3c8b4a49ecfa671bc631a3212f59d99db4ad7c8e4cbeef994bf81810f6b31701fed7a58181a962b812f339b6b5c7b156f4', 16),
                    gmp_init('0x98002ae044bef30d29b8ef09d8bb7c6d5336f2e60257838205b6158e6215a26b12acd8b87818e69b1ef3ee6587ecfcd6cb53499b66113077cd476acab2d70af6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x696592e09f082882858869d249b5cd22e2cbbb8aaa376974ece5c7db437c05c7ed69270c31038f39e73def841afb4a3b5ce7092d8fd4a39a3193a679f5eb8f8d', 16),
                    gmp_init('0x39b42f9b8199d2bd751c89b687da9e4f89fb08901d428747fe5879fc388715264cf37306d5128bf17efc2d51cbefff0f9ea78b9b1df433abce7d417d4ab24512', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507f08b8b8e1b3ddbc4ce134a6660e246448d9f939e8992e0d825a7a5a4375935c4ad6f5216b6919d0b00aae0d2255bd0d47ca2809e6891abf97bf3240d2afea', 16),
                    gmp_init('0xa05031f91b2c79241468d4a16386779a22d9ca4bc41cd0f261032b3839e7294797eabf5b35914a3cee78a39967b0838717b2a59a4b525f8ee8a20c10acfcc6d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2483845b3f054bda19ac1485a403bda032a3d20c03b1e0e83d05da8f7cc25995e74620c3ec6575cb0629878c8200cf43d650a8fb636aa467cca9165f0d0b1fe1', 16),
                    gmp_init('0x436460b8537f81c9472a0e2cd89e16fc8603f8fddc773a82463fd4cde6e40f0fbd65e2a07c575d90a0af9da64e233a767f3662acdd69c3153203790d6c86c510', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6bcb2aa7885a04631a7d05c1eb73ef8763355a85373db0baa86f7ce3e092093ee2d0a30bd4dec7892d30d4b58f27c7072c97bcb8c97866c132ecd90813ee8707', 16),
                    gmp_init('0x1b2ee8c8ae8f195bd09ebb005d93540e9f2d7154182cb9034a52b3192ae15a24b9d9449329a44bb6d025c07a4fa834c2e0633d520c0459d1e05a4b4c29a79f56', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85372fe51e9023e0744a7baf2eb0979f82b1a340201eeff88777a16ef15271ba9fc6319df71d14e6b38c387bf1bc895a3e375a2f07df84112d8a0aa6f50a054b', 16),
                    gmp_init('0x7aeffb723aaff383266c49453ea702ca5e5e462e16767f09ef7b5f633b3c7114e36978e360250b29746a2a5eda992b4a3bc4198675f6811b22b07a19913c19ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4781e2024dc8b17982318dde5275872fa3692a4d24e52d61d1aab11dd2b154c28e5cfa1d08d7a7015dd9845c82e2ee74333cc60d18cc9592d6cb3f810c5e6051', 16),
                    gmp_init('0x4c1c6bceca5b2fde9008f5144988f53e17104be43dbf13a8f05714282d1fb5199b08c259b7fb8b0afc843bfd6114687824920e40e3f30b1de518a9046f8b29ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42084c014cc410a87138ad0b9da9d92b18c26310211d576ca5c3efa8abb825b0d88eb92ae8dc01cfea7a2360fb16771918a8684202d4b8a2a0148742fdd9d1cd', 16),
                    gmp_init('0x8b2582312770dbb6fd1dd8f44c5d3d3083c85105e955543ad1de96aa3e1ee5844a21696f1a578f5ff21427685330a3bb8081b360117b0c1c476c9c08cf7d81ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e3ed28c8f9d4d053b2111b321d28c7b6f81289780c58a07bc31ab35b5a47456d695c22c9942a5a683644a31b9b012183b13e55fc5b209928ea0c4af5c8fa0f7', 16),
                    gmp_init('0x5b548b6da34947b129f5c00428215b681c1973f07e9fc42082c1d5c2d94e6de5044fb5572c90a929114225c2dba4b8a7f54c2409dd103c00dcc577bca44096ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30ae9776a19edc17454486c93a95f82d60effa11fb7e68d1c4dcf289dde60242b6aa4ed59754d56dda6495b161c4a13e50c33cc25cf63989e2b453355b269b2a', 16),
                    gmp_init('0x7fe39801774635d950889b4df9d40eb9b6484a2d1dd843e5f74beffbbc0fbd1f4c738191d76dd209fea6e4358077c7fd8627ce59ecde40886e4c307805a8b39c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d1c435c25d480c7edd367ec7915270e6968118cde649221b6e614d11b57dc58df4a91e0714d08698bf4e6abb08bccdd3d1eb98d1cd5d6c3092057c09ee356d3', 16),
                    gmp_init('0x5199f93b147352d9f3f0b7063cd9ee2539585ff2679f4e774c72e7f452db9a433e965635edf7b94526d33689054d95d7b74f3f3e3e88327de5237915483cab92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35673e2409c82db20df2a998fcb6fee5c7afac691b44d39b88614d6a1d92c6a8e9d856c45c71c9384524b01055173375d9403a44a57c6aa1d69ac45475dd0e0a', 16),
                    gmp_init('0x4a5f87c4807257291a3d94982fe6b0fd48b4eb48ce29d56defa2c550223818e0ae7bd78ce40723583c4fe6cd45b9cc9a3a51723fdb97e29b69438042d0a7495b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8772fe7d1252e1f746a130590441b7a51be7d5d377de42884c6f0da37cad98ce9776594abfab47fd080a43bee9b5a2584a3b44c9ff591a18d1ad8d20da9a8f31', 16),
                    gmp_init('0x2db0bd4266b00e7af1f283581dd35589008015df898b32f864b7c679172c4c7b2999b2bebb8604ddc97a0ed6d6c3cf840379205f1f601ad46993e2276d3eda5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57846071b6fc380bdc95c526cf5c2bcbeda2a2c634e9c6fd51defd6f53fced660bf896fd1b2679aefb0418e44339abb0d0577d5b1b10378a44977cd8b49cc8f1', 16),
                    gmp_init('0x6156c0b54bbbc44d37ce7f98bea8291f89116a8e156f4bb561494cdcbfedfe1a066558ca3da787404be72700e5a804c94567be64e0910a2ffda9780b8c87cbc1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d3684ea1eeb678e531e09c85cd018e23af3c86a492db5309ba36d7277c033470b1681bb148aa14e844b8019c18dda5b07c36b8d312a39df455a1148d78a224f', 16),
                    gmp_init('0x4654bf8eb08d7e622e264a5964dcc2cf8c7665a1fcb563de2b015d121e1066e1f2ae7025491df7e835c47ac80af8c55342a6e8f02be59d418a696ca45931398e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bc601c6c944d5dc697ff43b0c2968730a6e52b1d17d749a7bb129e51f0513c384c6e7fa590579d4101df67844fcb402ad7bf2dd817b64e101386e3b4c412325', 16),
                    gmp_init('0x3ecbec684ce4e8f33e94ad82d6a37b3a0da11489a1ec867d51408a11fa33763bcec301796ccde284d17b2f92cfdf9634fd9e5a70a35dde71a32aa5c44c93af58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9d31e89907405b9af7ce720808c6964502740e29c28792c5b77ea6cb4b8a9599f0c84060036b85186130ea79473913076f15d67ef8306f52826c5df35b617b6', 16),
                    gmp_init('0x8de854bc7798b4bdc0b148c3271805e4a13f4ebc9283cef8d89c26be24af06b15e4420572375786870fb5fae7aacd9a9b24d093b3ba9d1047c00b12d97fd475f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ff969153160aa86c3fe2cc512155a6ef5bc0397671b2f1203b0b4d576bef1c0c424d34a422074b637c33deb227dba3bbedeeddfc00367492ec9ebf195301430', 16),
                    gmp_init('0x9d31a740821fbe7c667e7d0e3f898d9bff43efd0c874912c0bfba50cf4c6d81abe2e8dfc43444214ed381a3d72642ed3e409e32225e4d42f17186782c46e89c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49fc5f7c93752d67cda68bcbbcc3d09f19df2efda7dd693b29b830981efbdbcb2a7f5ea6c5953dc1f0654fc5ff6ff187a42ba2ac5f353a426f34582c8b85cad1', 16),
                    gmp_init('0x3b2856a0ccebf8079e848ca229e60103f90f984490468dae40beb8127de7755f71638285c2342f80cebee232086fc34fc4333db0699c9d0ed186897b3ac46329', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x77f14c1460e3174dd5e8119251cef1470f3cc6eba71d570da6ab067a383b1d6c18f63b8c25f22406bc1746bd849fa6c1d9827918fbef0f866e88cc2dd96744f3', 16),
                    gmp_init('0x58054f8b0755130ff9267130897f0fd127eff70491aaf1ba204ade69cbc2079bb02fa82dedffe15e957e9198f161eda9e4472d076282cac01b995f563bfd3a9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e359877c85edc4ab5e2a077736aa68004fe7aa7b578a9f73c4d512d86a453b914f380b54003f340ed4fb4f1eab1368ee0f0f993cb751ff0d75f7f1f47dd655f', 16),
                    gmp_init('0x3968f626c99bfc281706e0a869c34403e013be435c2d1f545edc63ab59d1b4706e01d660d86b0dc951e70396fbd5efd24b7f17d29042129fc318053ae8f9f84d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c91d6b8a2ddd93217a4068b5aabf1839a2a9c64dfc4e47eb2140cac0fff2432ccbce7bcb75123e15abe98d9155f45e8938fc86c3224bc6c1e7404e5c3e59e46', 16),
                    gmp_init('0x46734d74b9e2d24365b4dc695c1e4b5b8d1c7c449b7ecd0bbe4b007ae882fa2b3086344c556a2fd510168a968cf20fc86289fc3e0d7934f0afdf2e586e183e37', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8c22344e4c40dd0ef88969cf00bfe02ddfdd1665aea08226db682f9d381ed80810dcdc95801fc9962c1e7dc49a338ecc10c126339568265209a295fa6c926ec', 16),
                    gmp_init('0x9868738b48742e9559ea0aca12643920803299090559b0517e4131bf885ac556e5cb06f1e8117f1f8c834e30b5738bf8af946decb27363da763990b6e9c4f306', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x888b0e2cfd1c29f3643fefbe4b7ab8394b34063183fa0552947d49d94b45b07d783fb7decf87b7e5ce2f4919e3086f66a94658b765afe4616ec07c6388db977', 16),
                    gmp_init('0x994834d238b234ad00982dbace61f1d67ac30384071d34628c720eef385f50601e7125f63f376c6f12f5fe13303614699c4f08acd07c60d222ab081867bfe3d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b258bd4a2b20b12b09bf4eb3712da297049125e6fca3baac67db99b6582f64979f2b8cfec6aa21c7503154a0d9943ea3445720cb00f342f8e6ef3da5e96fdaf', 16),
                    gmp_init('0x1da37353af78305320f8dccf6e284180fcc9bb4722f8f0a93061750c6495ad16645338dd53d9c2c0d928a4a89d9fbb5d8267ad08c613d84fef8722db58414e70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa985a884e816df90d46c003f4f3870f624d2d5caa69b82df99bfccc149434b427a94651b63c65d3082c10f57667a1f16bc9c5a505d93235bace146ffd5a146d9', 16),
                    gmp_init('0xac6506380b8222442efbf8e663bc658cc53c48ad7b14918024f84dc07271e26386f4b3d3bd4b15e95af453121af797ea0cd5dfb14322946f98285feeeae48e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8db3850c1b6116be1ca9102e7b69d1aadf95938595c8ee32c8d002ec94db853d5ddb0cf117a0c6d000676111397993367087930e07665c365e91a481dcfd2a4b', 16),
                    gmp_init('0x2771873af5e5eaf059a37f498302336cbb0a1bd3c8fa79b0af31d2bf38c9100adfaa4683d8e40802700035320b924ba501399fca7b5d8df73d25682b26bef790', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7312423b2e309b4234e888ec5b7e2abd907f0a56cac7eb189d001a57cb912bc2c9e6b1a5825226350e7bf43ae2ed141291358bb4c0f5a5d4bd17d93ff9bfef2b', 16),
                    gmp_init('0x759f8bd649d40fd0b82e485666f65167748e6e08cac88d9be9ee254eac2652e3462862b4dcc1ffec3f48add708e871b408e0b1c09589e3db0a856eb2dcd9c012', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61e426c3235a816cc746cf73b7a5323cfb3f079174cc9e806264bbd0da2aa37d5319b8fa4802843443318719b9352d623dca91a347d0be76bf7b35465aaaa44c', 16),
                    gmp_init('0x19544135e73e536488575fe068cc7144c825c33d7caf4dcc8a58d01f71bbd033db903215d4281149859f8fe7ce469c309be28353ad53d284f3247ad281d03f9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x752dd3a1f1a6ad4a2b5e98a173afcd0d414f41eeccfc40bb9d18de3669dccb7b3928a7bb6db0706aab6d338422c6e83e8c849d90297c0e7c34c6df40c532fa28', 16),
                    gmp_init('0x3dbf5b580769c8a496a357d74ac567c089005e28bd4dcaae777fbc2f1760c46c8b611c3adb0cf56fea0c0f736d721469d99433dc8714f80fea3497b81daf8338', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8570bea308a0680108f270552de60c8795f83cd1b432f7edd61419ac06c82bffb0d341462043949a73f93fa8c29171ddc70f4b65c0c637426ec7454a638c172', 16),
                    gmp_init('0x1abe9a8612e024d7f5996f75a23f2fa54d0d2c9b814f352842f5d272411692a5a7e78b55a7e408223d2549b0449837c8e200b6e765701c212e9ba319da60d328', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b01ac2372b83f05efdc7326211ba5ffda8cfd77c008e3de3a65b2472ca6155b1f4dc6ec79db1112b23bd910aaf9298df04a3ef083205800babf64496063612f', 16),
                    gmp_init('0x786434e3e2a7b9517f9ec108465cd6caa187ae8136875edb65cc7366373238e655a1229a35311733f384d45516a7f43537fa87ca74fc0db1fbeadcf97bfdeac1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dda2a0c8a352bfa7726aeca491987972183772793b6baada81205bed590f0bb69586638adb5eee935046b56176bd8797790e977b9431933174c857d6aa517f5', 16),
                    gmp_init('0xfc8a6fc88adae9b313aca39af1fdc09aeb9d2f35fd1823df3ef15104102790df6b7ccdc04162f3652610c625e4956df7260bd350e22f5d5d7d830b1a7d20189', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x926b25650c0294a39a96d49c5ca9e2e66fef01eb233d6a31f030e92fc689a9ac4f8abcd304d52152d9da4e4606a59853a76110d628c3bdf7e1023d0257e00104', 16),
                    gmp_init('0x8effe1bbc42521bed2a10ef4082256824d51c6fefaedc251c65c383d79abeb2fa49d52ece9d99a7ef428891b16a5c03c89528ee5d040232cc841c2fdd019572f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2c3cbf81238954a1e177a4c5b5d99935405779caa62e70e52bf1454ac0bff271b2abf4334c7c6899467de236223af8b6a67dbc4121a1b57f37dbeb5b1f98f797', 16),
                    gmp_init('0x75e0adb28f266f53ae3aba08a81ba1db14b3924986ccf5a7ef0d13d7e5b5bf4e4feac35c9fa436d81d43183d3c3edab487548205a7efe0ea2a5bce22875e1ea2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31172505345e7a358f9dabfbb0533029f2274e95e2b9e9a1b8d59c0468cf93e4b642dcb50bb9aa92bd44813f680a95b1e8981b84aebaaa02b29ec570bf1419ff', 16),
                    gmp_init('0xee7bf39865e157669753812754ddd3cbaeb54f01c7846a4c967e720971e37b6ef95c28d41860b4e0a424567b6429a576776df0ef5d0965a317c6429e977deb7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2990bc0636275dd7e4e5f562585b77a87d77ea82b2e127703022b334568eea14d6d8270e65a1ba336becf76cd49b961149844ec7ef378239289600aca67cf871', 16),
                    gmp_init('0x20262eeb262713171d34fff3c762a078c4a9d993c6711583ba0e09aaffceda3b7d33d9427d5a8808eacf820776feaa08ddc39b3b77b066f2fdf6234e3e1b6b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9611ca3b86e872f34225ee442f30fb89957d298acd7107f8e15ffaec14bb26d8939395d7013ec25634e79fa14b41ca515b3296cf1a51daa482609619bc0c3a33', 16),
                    gmp_init('0x32ddeef115fa8156b1b795a6af7d0d380229e72e53d8692f95727e28f28842c40d6ce7c2c4cb1b06a8fb5ae54032d0db4453040b7ebf190fa0fe611d54f513d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2eb61dd81e5a9cba98dfb846d55318e7054932dfdb4de22a0ea973738af50db5faffea42a36d775365a67d62aa36f6b739745757cb7d802642cc34069f590689', 16),
                    gmp_init('0x6f9c22036e2f5e7e0070fcc0c921455e5ed966d9515f44209ea993068382bb0c5b6bfb6e3df15aa3e8b45beac4a0169c5832ca200cf14f4f539765e6c4fdadec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43cbc4455da961415505665aee8c55ce7cc0ccbc74fc91c19a2ab2a598d498bc235c79e7f901aa95e5db48fd3a22c5d02c4a49f5288260b1be8c7df502f48a64', 16),
                    gmp_init('0xa73243825ddb9fc9853bb27235a11d70eff694698bdf29b0cd35fd501ba6bdfc360f343cc42e627f4069dca465fc44b2d697cdfaefff5cafb91f77e637e30f9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c973a20d4ee6c6637d3700b0e6f545833b643fb93af316c1ccee37cff9fa0a38c867013e8c32bb6d3b12c76f43c480f974299f66f4911d58c9adffdb0084b18', 16),
                    gmp_init('0x16b543b393f59b850e27b8b5120d1c325d231f60548fb8dc7c4f0e440f50f15f34715b75b0c3ca5a9d1c3ab14c6bc196cb15386254720689af2ef7e02795b82', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc350a309656c814484107ac30b67cbdb8c5fda2a7258977bfe0b777ff7058159c3af3244b84f3dd196fe7b1dc17244b248ca4de114e0d23d599cc5ec886fde4', 16),
                    gmp_init('0x109a197d2ea3438488f94b6eaaf70c65513119ed41c1c9018adaa0dafdf157816edbccac4cb1974bb2106a907e8d3ef8a31ec4268cae92e9630fd33068f3dfa0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9612403c3857b8712e42de4a0a0e3595c6d394c50c592197e3f5752e037cc955b6de203a9e78158ce855a259b657ec6514fe9c3584a937582fda84f84cfa1102', 16),
                    gmp_init('0x5c21021496c68af783353a715f8445af965659a737b7b9c14df8102b5b668a1722c3fe63946789461a1024b044a3f7b8db01b90e8b2720dfea3e80edb272ec12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x927c3938d39ee276f0ab6856d9a28431dcfbe56d5590276e7e9d864317d97ffe73da118d17d9200361d2ae1135d15a9af8c031e6f880617cd7abdfcf74b8c0ce', 16),
                    gmp_init('0xf4d9f88767b00f67e0675862e30a650bfe48ccbb4c3103e9c9c1ade37d27588bcf33b9f130b08aee22fd6306a45508cad33b236b86655ac6fdc0756984679fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x106c16ceeb5322966fd49eca4a45f8dc970e1dced43fb906f5b29899da37ff685e64c828d50dd9fbf2b3be34da0abb5de29374cafb85d30874aa2e5edb4fd028', 16),
                    gmp_init('0xd8f0b50afbdca0be8ed5338572260cf64976b14f8fc8bf2e1ec88e0e9bdb5933fa34bde6bd42b6b06a72489f9c90910579db93c2a99ada233e6323d48d970ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6081a4788a5d203e04600c007089d667cc6d49d7508be2339e0e7e5a6ca9039cec48cc695fdfd851ab28d55cfa00fa552fe45f45e6fa1fd4cf0328091e12e8c0', 16),
                    gmp_init('0x1dfcb11c9a409b35b283b77e98347a0a62d73a8ab96152e10000f32f644bbaa3fd27037ddc207bda6884f6589a226efa94e1178d955cf4869713057d5624d242', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2d3283d21568281a9f4a6b8636a81dcc858e010311bd39d54847cc2cc11d1b68b0681645551eebec3013097d17ef9dcf69d8b34989f89801b3c5c9a48d6d79e2', 16),
                    gmp_init('0x3937ff945d8ad325c855c74bac205793b1dba46357d6265b65353a03c41a3e2f0620eb07474c2d137cb728be4e4e686d59b41da7e5428078c718538302db753f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92a0bdc4735758859e72c9bfc3402850d9717d5b7ddac4bc2688a9e4b9b6b5f9669dcfa16a2b1c35e2cca37f15acb4fde921a00d855eb184181e0e412c10e6f4', 16),
                    gmp_init('0x47f647907d7485272d08ec1655801d92252e782e4e4b7a8a6b6ed06d8de674d2b5d0076f96af3116225ecbe651fc9f36a4115b796bb02d90c9920d2549dd8bac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d362ed3a07754ca2d7e3db4e3a0383a2559ab2176b95fc1c1e3dc22f96745606842677277790fb2a619f6484daed19719557655aee44c1f331068c1db22b44a', 16),
                    gmp_init('0x8db74c80a61179cec8e7b3e9ba70d7bd9bfbb40f4ab130ea655cee96b0ef9841e4f3b93faf81a5725e360565c4e59e5ca8a8a16ca61df1ef8bcfacc2dd446113', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x33ffc848f1dbb844f89f2e96148c1854959625a74b97f514994752ff31683a7a1643d6bc3e738486108a80c0611084ab9a3e83916d4d9c4227f19a957d5e4aa', 16),
                    gmp_init('0x17bc7f77072ceb9ebe02be7ab68073960bcbca10ea81d8e60df012f1a305fc9cba984c7c841a91c85d0031463da165a2fe893e0579239375741d4ce6c491deb8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fd562eb9a89085296b9fad2b6c82b1195897a5f29157aa3625740a311d470fbe704efeb8778a1b84179f453d906515a92e0989585da03cd84ded9f8e794f47f', 16),
                    gmp_init('0x7da6bb3e4e7504dc13fd4d0dd9c52a581c5b392bab972c5537473ec02eea12d294c236f508af2eb17a082a1efcc42abeed88d3d511fe644da9d952d2f41942b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8bca23cc62e45b7ff6e047a8e04b8b88e8504ea728d2813c0ba6a308946edc83ab474f2d7c36cf9dcf97f9e9febdc9a1bdb9a52447e4143724c93a2b18de226f', 16),
                    gmp_init('0x497ebd8b7c831b028867f3f93e3b3c3285cdc2b8b8637e6f5f0814a761f543ebf6cdfa03dc6cbf232f1c4f1b7da18e6890dd0735a955744cfc4481f0981729b4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3498bd203b38e3f4f40080cd27b8fcaa99eeecfa631a98031b956142b868866a3482f59b85b10df4d496dc2a49c1967ebd000cabf6b71fdbdb7f519f51ba2495', 16),
                    gmp_init('0x1d65a74366b937b5b8abb0a2f961c042e759d4cb2f48e13c6bac72889dac2e02e3bae29c06e3f2afc61af96d8b5518a6be7ddf48b2095e00897a13b9d0eedf11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95c2ae45a06b7386408f5db7bd5a76b418c8cc260f0eb80fbd89f2bec6dc565a37bf00c8cdf817e49fcb57156a45151979a1ef0c00b0f2e33b262cdb6861d275', 16),
                    gmp_init('0x6e69dc3ded5718ff2f929f80bcc723bb8d5cf19264eb4123343fb8ffa62624414721268e401387fe92f5cbdb3a780a8998fb7e2ed8bcff9b66bc55f09b862730', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63a478437ce7d5b3f847d26b3d6dbdf7f757f7c2461ddfe12d8666cea47ec7ecc2ca9f8da5a38b8c9625590f4a47b223fd20ba05d598cf43af501249fd1e5246', 16),
                    gmp_init('0x6b644809ce7e14a14e1a2e3225e26ef78833660ea27fe0ac706244f1b1c228b0ffc23fc55ce284a4dfbe98c5e4ed80bb941042865d86b1f6d9259bcbb76a9313', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f934cfcb670de392dedb174540f59799d0338429fffe3656d9db18affdf780c19579f7d7e33658cd82cadcd1249e9bc1496ab25bd5c8505d8744fb8f5686f0f', 16),
                    gmp_init('0x3d6ab8a2e38a2e80ca5eb664526a1b4196e2ca668e8d065bee340248de47be2312fd8cf21fb88eb512d4933358b26fe3dd1a71abd3a405bb7600c018a9815859', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x494169e78fae89be0c14b9b171378032e247aed4190d55a024e8937e4ab71a5d6627a1cdbbda20bc39ad56af5dc24577154ce1727ab332e8a3c0b420a441bd4b', 16),
                    gmp_init('0x63ca1770b7fb701f898383ecc6716a6d42e1526bde257e323b407d2ee4ade7993e8780d581ba6bfcf8f094c4e1267cb1f03390146fe4828ec1709949b15e607a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a38927f4f5d375d324fd297093c4cfa0ad1f925e25ff240ce27bf5b26a92a257037b5992964a0758dd1401f96a2b589c6571e4bff330d04ab4718c233926058', 16),
                    gmp_init('0x6b9e53b70fac6a0e0f72034aca62a301b1f88bdaf380a61d9b92fe0c915b10e13802e5bf360a8ee404436d49d99ef1de1f015a8c809d4e898b410ea6566a84e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c145230df87e4c13cb762791ed1166a1f3339dc5f118d8e83407cbfc6b1d4d4e5673c023e3962cd97bf0098ab2d3966ce6577a898443daee7cbe14900256272', 16),
                    gmp_init('0x237268b0682611eaa55e8c03d563ec61b053155a0017f7f24e6f71e0a7749340fb8f8f5333d3f3da4846835e01c076bf054e0cfe2797497d3850647f094c38fd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82ef989d734fe7232370b0a15034bf3dde3e4cf6938c6e523437017df9d6748050876cb0c9cd9ad5a35ba5db1526147bbac0088150067dfabfb839b7778151cc', 16),
                    gmp_init('0x7fe16e5c229d52f7c3604a5339122c67a2402a495cf28e22b8f818f970f85d2f5d5380ea4345025e90947887362611a4dc31fe3d85820b512c0d01e02d4275a5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2e50a0ff72d42939a8493c0e3d7d4a1edd73146005a96937d2162a741c8d0d55facae13eeeb1e564429b05236cb9eb5335998c070c6175d2397b87dfb5988b', 16),
                    gmp_init('0x75f78184144c512bc5b10aa2b7f01535798d6edd19ec578ceb9823d233d476612488725a290c6993c64d25d3340b51aa88f73728adccab4bd1331b65b093f88f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8453e978b77a6286276eca1d7d31045e69b8ae44afd3d57bc2608e49ab0b645cfd80e13d044c74b9ae4107df299f2453731ac868fc7fb6eb050809c99622d1eb', 16),
                    gmp_init('0x1a185e67127da95609479394bae13f04e99ab1cd42e6c859d656a9f8d9f264ec56f55b81dac005b411dd8bd51e91dc904d82055f4384e2e24732e3ae14e5c276', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a5a61c44dcc458eb708ca4fe567869d9a808006e7c790e5b45aa427329c86262dda1e5b29362d7d7557cfa7bf8cbf83a4219241d704cf81e9ac21d79f38091', 16),
                    gmp_init('0x99dd68a00eee541b9471104fad58621a186a0ac159916fc6607c92b1b38eabf82510971e88ec2606aeb847be42d9a5f74e0a6ae2d75560a096ae1deb47bc8492', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a36fe4c9e5df6c8344a189662ac69d4dd19c18a1caf0b218e7b70cbe2972a8e7f7b8a446d2d60abc38270a60e11402fe749603c0fe9249383bfee763c1c0ab6', 16),
                    gmp_init('0x57868cd68859579b05a17b732ce79fb21bc9d3b9901eb3898e3b4018af48b9ab699e1275b2f364595a56e497bc52a7408ced5280a7048dc7453347a6ce152e95', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}