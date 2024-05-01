<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Brainpool;

use Mdanter\Ecc\Optimized\Common\JacobiPoint;

trait Generator256Trait
{
    /**
     * @return JacobiPoint[][]
     */
    public function generatorTable(): array
    {
        return [
            [
                JacobiPoint::init(
                    gmp_init('0x8bd2aeb9cb7e57cb2c4b482ffc81b7afb9de27e1e3bd23c23a4453bd9ace3262', 16),
                    gmp_init('0x547ef835c3dac4fd97f8461a14611dc9c27745132ded8e545c1d54c72f046997', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x743cf1b8b5cd4f2eb55f8aa369593ac436ef044166699e37d51a14c2ce13ea0e', 16),
                    gmp_init('0x36ed163337deba9c946fe0bb776529da38df059f69249406892ada097eeb7cd4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8f217b77338f1d4d6624c3ab4f6cc16d2aa843d0c0fca016b91e2ad25cae39d', 16),
                    gmp_init('0x4b49cafc7dac26bb0aa2a6850a1b40f5fac10e4589348fb77e65cc5602b74f9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3672030bace787aa319e21d40645b2999006beec437fd084dd3fc592f5fcd77c', 16),
                    gmp_init('0x335b226ce5fac0c36a18ce42e95f43c9eed3e256bdd0c98e55a069595515d15b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x855433a3a4c8e334a5f863e8b69fc1477cf41589c0d8c3fb32f95f7c85fe101d', 16),
                    gmp_init('0xa50c95efc2ad06c4d7e172e40350d911097082129591c88bef9e224a5fd8814c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78ea164aa2a74a67a04b680bd8bb1384e7cc4db8774c50ecb9dfb344771026b1', 16),
                    gmp_init('0x10d988ff681802469b49d341f8da0a2500cad34f1e745b1437e336573d08b1be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b8bb7f53e36b6824d3300afbc27257bd432568e24e5fb5702295ecd04e9de4c', 16),
                    gmp_init('0x382f9af51ce9a3d30965a09661223af5646067c55b1a928f7252376bfc79ebf0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x545a6faf6b031b267409483a38d1942c91db2b4eb917d2bdda994b4cb3985461', 16),
                    gmp_init('0x76f4942d7ca7b4143cbedfc72c7a65194596bda3d83213bbcfb32792456303fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b5fa06d31d59d690811364099019b7cd283bd714a67c06a420d27d6784f8f12', 16),
                    gmp_init('0x41e0e0c34464b5c7ae64ed13d26d038e146f15eea266b22842be764f293b3348', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa4348db079f7ffbcfb3dfc35bd8ac67c22a85a50025cb1f37a22ba81728b1caf', 16),
                    gmp_init('0x2444fa0f5b79be1a2bd1d073c38fd136c77977f417b550d954e46dc4c8b737c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50ea43e33d2d48978ddc9c5870ea163180c350b1e1db41b03406afffde3eeed0', 16),
                    gmp_init('0x4685dceca1753941782129d70ceeb10f951970a9b39a21f923af9bdadf6fbd40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e21eaaf386828a98fcd5b4f07c9e855e4035e293fbd18273bee7e520810f159', 16),
                    gmp_init('0x6b00da07d32ce8a06dd01764c1d87a3b67c6ea5b590d0ca7bb74ad0b29b9c160', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d4243f928ee1b6a7862ac771ce2cb743439bbf4e2b459b662c969c86253556b', 16),
                    gmp_init('0x6cb4b54150658725c257d5e888eb9dadf5c5afbb15e5c033616a664e902cb740', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d36a037ab842c1d557513e3b04d9166a09aa186ee1e9916674d33a6c2b6b191', 16),
                    gmp_init('0x5b811a55dd8bf3fb10d4ff18900017e9290d2f38db9b105035e15701bc4413e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4306f8d5631ee7ac6e07a490cee907848e0917a7d5edc4b7a309a0b21557a8e', 16),
                    gmp_init('0x2ab9e5213104bc7f3aa032daf9ffd870a510f13a83e146a29377c731f7e833bd', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x653583661ef339866b0798fb767757ed3543957e92f08735b3ddcf32eaa36568', 16),
                    gmp_init('0xa6b73d0616ff459abe017d72168a0385212b4ea2d5069f1615b7ee3666c078e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3883f8092d114567ef892b72eb717fa3cb9594296bed3fb0ae3f9ba3b7b0e5c1', 16),
                    gmp_init('0x1dfc0f0273ebb915096edee34a091cc1ee2c11092177a4c40c98d90021eb0d0d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x785e4fa55b01f51c6b68cf600ef599f6ffc71276931929f973ba66a75636df16', 16),
                    gmp_init('0xb52166e7c804625966c904a7a5db8400c7b99a71ac9798dfda00ead3b390e68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c893ea0108f241b9b27d6d7e087633c32228c6f2491e540d07231ce9ff718f9', 16),
                    gmp_init('0x80f756f195f117f25f01f4d317ab4fd9399894ee635123fae641a3035ec9c86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6963f29b74a7a329df6d8fc479cca6a7c59c8472e8701b450753a7efe8796a77', 16),
                    gmp_init('0x331b5780c7e9db239252435db1d0e555adbe7d1072ef1bdf99021f92ca1325d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d38b7730342f7a572ad12ad9d63d77ed615ca95c41bdc35cf32a4bae89851b2', 16),
                    gmp_init('0x10aa7f1f1d428711a11bc737cf504e16dbd4adc1629cb1da4c07163effb37cd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8781ee156560216b27607be6456a2e883dc9439809332ba4032e0c01c63ab209', 16),
                    gmp_init('0x4da65ce441dbf13721dd233404c0df1be2b0f9b48fe18d2aed1183ff57d4c275', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7decdebc9111d3a3e5877a642f3abe8f3b0d02355a8c4de77678f3557ba8c003', 16),
                    gmp_init('0x24434771ea4fc708797aa781e5a9355d0621b98c783c66f4d744bfa4b7424d6b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43195e4ae728fff5697b6abe251d91b69ff51e243ddc33ed84aa28c8ca2e66db', 16),
                    gmp_init('0x7f6b294d71f9efdf29e17e42481fdb58464f1c8983d0a1ca4018160646a3de14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa199d33c5f7a903a206388673be10923ad82e432caa3b35c47f8dc7a6ad91993', 16),
                    gmp_init('0x52704bddff1c9d22b791e3bdfe15abfd1a4c39d6a80cb9200ab9b57aa64574b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a107675595a432f245c3e7a5bfc206f68b1533cafbdf4c8f25e073c3315b9c3', 16),
                    gmp_init('0x525f30e83ed1b24be89e9d3cf88607bee2bc11bf7bb256a9357a5a70f306082d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a05da843e52d745e28cc077d2a0b235ff5ae618dc92abb77989445da36c060f', 16),
                    gmp_init('0x65dd45ad321c94b604f3e2976f0f7e6963afe2fa591592dc37fb759c2d9dd0d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3d73b45f58b881060aae312c184d3e0d147f02eae6b4dc17f142483f24e3bd4', 16),
                    gmp_init('0x720144f7c96da5719a0f94e0d8e99e223763fffdc753342db7e55308b29f2ae1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91f63b96abc07e1df4b864f9da913a4d4bfbe69de4287234d61ef5391241ca49', 16),
                    gmp_init('0x3267808dab913f214698ca8b8441181ce586af8a307e842a516bd49e2a6a993', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a18dffafa4e131fb96a2e7963f8e61acc0e8ae362c25fdd2f5043037fd71a27', 16),
                    gmp_init('0x43b5ea079afae2cffd5c83e09f4bf70e8ea802fbb3882d35cb9e8c9427325bac', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x958073db97d2facf726d93d190f0a94b718fca3bb18c6af5a08bd1aad4295bf', 16),
                    gmp_init('0x6f68cf02c3ab6f2cff614bd33d2ccb90eac4f74c0fd922a82193d491500e65ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x329ecf26e0044dc2130ca273929fb83ddf8bd22fda7de3bf8b65a748d61b87fa', 16),
                    gmp_init('0x67ccd18e215c8857d29466398c9f60d8a45d65e33f6c477f8d5e34867178b8bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3840a2e2ad939cd34c33e4c744ce8fca360a13f64b0b7a07057aca76a30a5ea', 16),
                    gmp_init('0x8bd07b8ef647e873272d8d4d961194a9f6496fb244978f7d415b041ff369cf97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb589c4ad85bd3ed50b45948635f40423c2088ac20cf90322b7e2e8f1951d1cd', 16),
                    gmp_init('0x65b0f0ba49862b605fc6faa52480c2d4abb5420f6f45894713faffdd861ee9fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2945aae0c0e4e39dce073437907ea3e56e07d366ebf3fc655ed5638ff1798abb', 16),
                    gmp_init('0x45c6202e566d7b2ac0038285dddf35b4ba7c99d05a6ca61ef9cfdcf278eb2af7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x650d002ea026ad0e1864e82823e790366096b27c7f426c0df3af15d099c4afd9', 16),
                    gmp_init('0x4fa0e8ef550bfeb3062b410bb9f3780be8594eba3cbb3e0dc11412509e143b86', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c992410ea85c95cf4c62f1cc9669dec1a2cd020062bb796eeee20daa2e99beb', 16),
                    gmp_init('0x5f7177603504896655bb057db297257684f677dd37a39eb1fe715cc707f77af5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3378ca1d902896ed352c8be2c52481d48d5f1a0815bf6f4c2a2a7f600ef6079b', 16),
                    gmp_init('0x7fa623fb6ccbb84a81db0a7b44546f8156c41ae2456b42c60443f8273ed39307', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x771781a338640fbb85e076efaa9ea218d404447bd80f5411d3964a9f96dbd2a7', 16),
                    gmp_init('0x246d63be62cd76dc08b416e53b7a06fdf790ee3402f5f10956e84abb34411e98', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x137e86709f0ce71fcab4189b2deadfbf54e7e16e4a1fbffa9e718fe087ccdf49', 16),
                    gmp_init('0xa067e395fb00ab26479ccb43381c1a40b36e59884f22a88e55615d7e49c5ab50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6521422f5e66d9b2fefa68ead72dd4c649d12622512f5cfa33c0a867a2dbe86d', 16),
                    gmp_init('0x855df7b109a893d78d450e5b1618627f62a3100ac2ca734c2209a70b2109dead', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32d4725ae41810e7bc100e9d1c19b4406b4b2bf46e79c5e3e9280626f40d70f5', 16),
                    gmp_init('0x650993da3e697b9326657cea420ec94a199ed19b62f81f5fac2d8c8735f1c99f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a1ab5b4986f504b2509485a6b24ec3e833a5dbed5b83478af3625d0c82e893a', 16),
                    gmp_init('0x15100988e6dfabcc7e7a1cebc4d9432726bfdeea140b0899fcac41964181b29b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34be41395e577392cdff4528959d55fc36291062082324f5bc4a650fea0703f7', 16),
                    gmp_init('0x2c5514c997fdd4ae9137c518e2c6a20e1871abda07362f46217cdea63c9c2a3c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a9ef518efdd2884af3400c8c78db8153bfa4dd39becc26d1fc49244561742f4', 16),
                    gmp_init('0x82c68a319dd1a2c9773652a15595c7a5d5780a1c0140e08288616cb48822ac7c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x97bcb3b84d05fc694308b264bdc04a1a1ed38188fa29e624cedc0dd5ba5ea477', 16),
                    gmp_init('0x381ebc3558c64e6a39548953c3d83c13f37fd0d08ae0881978e88550f03aeff5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61a5a959e338dd69e027a5d670b0f6fd34e67926b091fece3eb2f3716c6493de', 16),
                    gmp_init('0x807fb89f6782aa25b583d56108acdd2d3c189679c4114faccc7439dc58855c41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a97fb4e4408848c8dfd5eb631eb4b3c06ffcfb16cdbf580f8f0976492680838', 16),
                    gmp_init('0x41af9f7521363a25c4832f00c0004ea9785bbead95c591d4360520daff4fcd12', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6bd7fb14b72a132fc5712517626235a50ffc6d98c9b698db9435b64bab7d7b36', 16),
                    gmp_init('0x2990ba3fb21dee18c1970b1c7d1c8cc983bbc9edc1757277bedb1789fc980f8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x425435e02e2b68edc4c6f48523a8498a5cd2669bdb7eba4f645b2763470d79e5', 16),
                    gmp_init('0x66028688a6948617a9bd89a1baa4c07b3cb64c1f723cb4a2177b49c7c413b055', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30047e59d92bf8a116b37349d1707576ebd7980f8119f6e0da3a98e568311930', 16),
                    gmp_init('0x5b36ec2be15815c621b954485be2e1c79d61551129fcbedadf7746118e2dd546', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x817b101c413ec30a493f3e87d195357f86e09c5e3976190cc7b5b1addd899119', 16),
                    gmp_init('0x70a35f8513172588197d5e882aa4c82047c1746d80c2cc22e57437ff478f34e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b8875356db4ab8c77e54aae3b766f2d96c87ddcaf9e55ca4a85b555e4ba1cc4', 16),
                    gmp_init('0x10ef391aa5b6cb324fad4973f4bd7ee4aafb51e7c0e9445099f610a29950e765', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcdd5ade6f0d8267a7e26a8993338dafca47c8c391ddf5427a4beb68f7103f78', 16),
                    gmp_init('0x1e3cf2c6c26abd3adbff6aa2678df2a5dc1beb8b78064445524c817a8462cacc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x705784c1710aeeaba7a4b19df01881511b5400d8a39c62ec30fa507fc095c764', 16),
                    gmp_init('0x364ff7115429277dde58b4ceab82fd4a6dfa5df66db0c45df25adc557bee1f57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9229b02c66afbf991cc9242a2333856956bee93ad2da904c872064b26935ff3d', 16),
                    gmp_init('0x99d3a88652d09e05283426d1bd6ca3e27186df9ee9362567972299002404293b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38240d168d23d2a56d6f6e56f58558008687970a9e067cf52251a4454ceb59e6', 16),
                    gmp_init('0x270078c66852c206a25a4f2b52e9c087e51b46be9b0e514f573ebece269bdc4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ff9946986abbbe6280bd04fc702ae98b543d6bc7a759e80ca66dea438491979', 16),
                    gmp_init('0x37efb2b64379bbb79db6923924623c2bacd68e4af82a26b92dcd7890c72450d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa105aa0e0d5376756997a8a4f527176c70da427cb689775b1c0323f962f28315', 16),
                    gmp_init('0x85e4ebcbc1856f674145e5556d4afd9486d9c54b3b62875ecc8ebc79923da3de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81017390d748db08de323d50ee2246f8f57cbe1fe0985a29ebc3141e22b4b3', 16),
                    gmp_init('0x6ab7480d5945e03785e63b9d2a398ee19b0b65ea016fb2010f01c86aebabbe8a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8b32bc01f6d9568c8b06acb8044c9c20fb86f4a531b9756e12dfa903e41ae56c', 16),
                    gmp_init('0x1a7f36ffd889421751ae45bf07ba029dfc57b42d0264421240d5ca2784ffb503', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c3cfb7f46d8d8436d9e82729ff23276f6a9e2396827b99ab9a09db3b9d5e498', 16),
                    gmp_init('0x24f048fba3ca94135c2c3e857a228f99f1ef1c804cd46abdf76aee34ded5331', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59e080988e863bec2dd33c29f67b574fff8bf817ebfee1ce4b42a4ed11870968', 16),
                    gmp_init('0x4b06a000a1e0d0d519843cbb8cf69d60c03f762dbd56c415683ea4b2c9bace3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51780cd1b4d1659cadc9a28f0b3800786ea0ca6eccee2f9dba32f130066e6e60', 16),
                    gmp_init('0x81cd504a5b963a8e5c62991d7c852ff8d6d3b14d86d29540cb4a140c7b1a7925', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa598f9b10cbfda2cdd73069a893a2a1dbe529f71b472cf93ca1bddaddb18ab76', 16),
                    gmp_init('0x77a0af68a9c4509471ff2b9ca0cacf24fc49ec7e6f8bb51411f2897337ffad70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x65a4e24281fab3eb8c43a81935a5ef8fb3b5ae6e5070966c32f445d8f504205e', 16),
                    gmp_init('0x966c0f139d8144303dab983a2aaf547623d9abd73b9e11aeb51cf968159714c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c1c9446fe6fa180256ddda8969aaca9da93f3eb028078fd835b5c6e3072eac6', 16),
                    gmp_init('0xa5d2a5b73cc934c7f611df3b43df4a098fcb83665c4209a25c71e668de51f75d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f130c16da5a15aac0a0b3c6f77c784ab98619c4ac4bda170853a949d59220a1', 16),
                    gmp_init('0x23dcfee73a6c70d8a398a185a6c464798e725e2bf354cc13fe1822eee0da3711', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8eb002da2257cb4ad40869560de8c10c0fa8816b6385a30e3cd14ea154bb7c1', 16),
                    gmp_init('0x76926add1970b2a9072c3f73ae27d9f9ed25ddf2fec3ab43df407dd92dbdf599', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e7b9d8c4ca0b733351b89e748a9d7f7eed8f20f397e4aa734f76477b68c405e', 16),
                    gmp_init('0xa316ae967945f559c4d8409fd535db550d35536430968e0843351e519628e135', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40c78f1c805e35c3676c90d1ad47222d486682a0db3d3eeb55d21a1e294ca7ed', 16),
                    gmp_init('0x350c052aef274f8aad25fefa151ae4daaf23b5ba86afd7c5e7ae9f3afef1b622', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28833ec513e2142d840fa1b43c7ab6b6bcdd053e9a3b8756f18a4cffd1af4d87', 16),
                    gmp_init('0x7452a72dbd13e61924f7499039de856d88348b401db08a30e1a649ab68cbfbdc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37ebc98f70ecedf4a354dc114651f6e1173ae4709f8ccd7ea105df28d21f6e8e', 16),
                    gmp_init('0x895467a369abc47050bd70797bfcb225a84caf9dda3f38e504ce4064e9ff1691', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa58f4073efe15568449ba1a02d1aa4274b6caf6c918914031eb1e039d797f8a5', 16),
                    gmp_init('0x6c3d00fdb2226cdab70ec88c3c31a5660e3f003782af77bbf789334879a6efbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d4f1872056246e094e8ce294309b8720d35596bca082615f8b8a79dd9e0c3a6', 16),
                    gmp_init('0x69fca94e04d4e5ebb1482b1889d66f681237038a44febe80563649fd230fd2c9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x96300a51ac8312c5a713ca227d3d17b28a8b54daa8790fcf76c63d982ec43e0c', 16),
                    gmp_init('0x625be5ef9fc826eb556743d1372dd8bc836e87161bfeb2d27f8e145976cac77a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1843f015e38021577c94112d420ed8b710b6cd35f0d67e507eb979f6c469f352', 16),
                    gmp_init('0xa9f6bf83a3355907ef3cda73e038942584f29a5529b523b266e4c7dc9a0fc499', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa14c3866f1a32ce8715defe9b5e6bb391c5bee1daf4ea733d038640d59fd7cdf', 16),
                    gmp_init('0x3a4ae0134dd48beb2e69914985a4c05ec6ef4c6f68f517c1654053839631d6a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1fc753f44a2c50d2d26b8ed1a062296518cd0d7bd47313e3a5fa1f5dddb3138', 16),
                    gmp_init('0x3ff206003c88b841e406b3bd4d27bb3cda01ff1eb93e9982c20b50f235ef8e1f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42872ad049dd48c6c34239185c74bbf8a532357c6fc41b23a7fa285a25b1193b', 16),
                    gmp_init('0xa0deadb7aa9336a78f90d890cbd9d76cdb2fa81bb093dbf9e7a365bc20e934ef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2018a46856f1e5e5bcf78021f4885c8b3d4c913c13bcac40d64af723ab992f4e', 16),
                    gmp_init('0x3774e04f530a12a9eef0b1162f5e672547dcf8cc112b7166c736e28c279fb8f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x945a49862053dcf9611b9ca8175dc7c0a966853faebeb4737214bd6e0d1fc57c', 16),
                    gmp_init('0x482b6a92e28cc80af7de9bb6814c4909d7c97efe3de60c5cccc46dc0a7b3034', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e5235486e20be012fcd0b20b16425575606582d072782fbf6cd66539d3834a9', 16),
                    gmp_init('0xb793047a9a350ea5a59c56d1e7f4e21341da3588a60ac5363e6c45f3865f065', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d5a41d4b2488da34af6efaa8eb90324202bb1c53dda778c7b3266b90a943fce', 16),
                    gmp_init('0x1790b53976f988d978179f98050ed8ddceed6af74fb36bc976faf795b1357fec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f4a1f5ed205b3f715750bd526f11cf07b9dcac4948be8d96c8293b2229da701', 16),
                    gmp_init('0x75211c908234288f1f0cd91806634ba50f2243b675046306d3497ca1ba755c81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19adb69db05111554e896c8c69b6e35205da55ac201ddb7ba1cdc748f3538356', 16),
                    gmp_init('0x6c0eaae7b4f57df0831456cea752e1809355f0cea7a6efb8ae3fb778e422d544', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d7b7ae953a6e3cb4c2ba8933cc714996c3c1c9c8b94797552d888b66973bfa3', 16),
                    gmp_init('0x51827bba105e6c34fa24f2e01f8860c76be995d038532aff3d154e1e050e45c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b34baba8309621a34f63b7800d015691fdbe99096cef6e09896e60ed7bfc0e9', 16),
                    gmp_init('0x9b161254fe3fe7f7bb6c6b4506819afee4bc0fc2c6eed6017350c6ebcbe4a616', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bb7ce7c979e552083e8cc5ff5acdeef9f8df0a13238dde9ad279ffd4fa22b39', 16),
                    gmp_init('0x2c6519006a968f88c1583b5a4c597799db24225f35d65b8a860a848fb8b483e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x518c66337aad1c79514d6ff401ec40b09a8c766af52e60a1c084b578e17201fa', 16),
                    gmp_init('0x870b29316da0db1e76323330302a4f7f0aef048da4c24b1e269e08a6f7ba65d1', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x11c2d5a5b045e52dea7cbb3d6e414656aa829d61e111372b6466dd03623a670d', 16),
                    gmp_init('0x72bf80087bd6185812b7017e78f2a5fa18e14eeedc3c3dd9cc16dc8e983f1d15', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bdf35638f865549dd7f27100745e09af207f20c885f8de93564e5797754d860', 16),
                    gmp_init('0x4bd0515d617ad5fd075d45d7fdc932827bbba4e10d8ac367a5061ed90b4aa483', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c3243b0628ac5ab1022cab31fa6935251340ee60bde2b96e200edce44d363ce', 16),
                    gmp_init('0x5bfa96a15286855d090c00b1b2f388d4df5eafc73abc29d759d68807f66b69ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3aba78cf27c41988029f4f198ba063325c53691abf9e7c6b3e06c8e2025727f0', 16),
                    gmp_init('0x432a9707661b499ebb5492d571937c0e1403139e0e6ded8d5879bcd58c7068bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38b6cf286aec8ea6f02fff497510deabfbba6aac5d2cc6f087c60326d89ce8e8', 16),
                    gmp_init('0x830500a3772c187c23ba7f6b69f43c04b21435e90a8ec87684a03fdbdd93f34b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32d29749e47b4d354d123b9b1aa21801a6c8c380c989b6ac0580d3b7f74da9df', 16),
                    gmp_init('0xcc8fa0444ef0af531d675b99583eae5ca48b1ba411b3e997f74d5ea9928640a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x578152161bf604965a093fb3c2ef7f1863442e6ea9fc52c5c4711f7f619bf657', 16),
                    gmp_init('0x162a5ec9c50687026c9f4cab89caf0c18af113520cb0cc35cf57ffa2445399b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39874087d4746fd4e60b9ec416a3f05c4e0cf30cae3f1534d694ab891b6e207c', 16),
                    gmp_init('0x8c49356351c0072c263622afc2cfe1e709040f41b75fe53f8956c27e3405c082', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa90c3e36dd47fbe0c5c88156c13d72b7ea9e02727c16fb2664ca614504b3e38b', 16),
                    gmp_init('0x4bd97abf32659a461ad85642fd3d7c1f924c9170df719cb699707455fbb1f032', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x943a223bfa25cea58e298c1fba0508fe27275eaea705b24283834d46aa48348c', 16),
                    gmp_init('0xa9675b55317472901feaa06c4f6a4a24e0fe340ba23cd6566eedc032caed7320', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x739af69778be4c321b7a2a660d6a844582c3133d9758a2eecb2fdb665f9ba56f', 16),
                    gmp_init('0x4f0d04665d74b7b091b80d62053a23920649fd3eb5a5a09f33319171f6807978', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bfb784d193977becf7606abff6cf2fbef491975a1cd64899bbdf9adc51b0b25', 16),
                    gmp_init('0x648e7afd84de3f26f50f5cbebc2de63d142c51b893e418376a11673741863f60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x732e4ada937d95001de4517a957ac885723c1fbea4191de9dc7d0b33407726df', 16),
                    gmp_init('0xc7e34ac49487c233d3ad71b7ce11af9baa189c59b0aead9500d3247df5569c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x35071874ec736fbe58ac804c2008e1e2617f633755a80495fc6726a85519c1fa', 16),
                    gmp_init('0x671f2c57c8e745ceae426bb5c66a0892f959be4a78c64599ec999f9bf75ab0a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ffa21e49c3c712f5902429f1e040bb848ac4cb9b67e58517c1c8b4a34857dde', 16),
                    gmp_init('0x7168e4e2da7189deac074ea9536e4711312e96deaafd4f3324b7f532dc17aa05', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3b490680234feec283828ebcf4e43c0907ba55f484a946b286980fa060280fe5', 16),
                    gmp_init('0x3660c05939ba3c5dccf903a7c5ce76ca34c4d508d0e58bd7976092b7d652f5d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5c95ef37a4887da8cbbfc304f048dbc5779dca8064a5d67c9438677a1ee339f', 16),
                    gmp_init('0x87b7e0ea87db1b286426117a56f7b072c84080e21a6e77bad0facf48e80ea63a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b975f977ef45a330587f6fdb1776f3fef22bae786d35c6c965d4ff55d841b41', 16),
                    gmp_init('0x6a5758cf53e9563cd710cd9c1b5279e22f4981f14228f228e6dd7563c33fc29b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x321b40ec133e942e5f3986d7765a64112bd2c0b3a408cd95ca68038b2c558d80', 16),
                    gmp_init('0x2d22cb8346ecad056844ea2980e91eb55b13434ffa75d513fcca5f746c1f46f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32bf67814156784f8ea9099682d861a333bcc00505cb145026da413b1aa8ec91', 16),
                    gmp_init('0x63a53fc32baf0cda0fb577ade3e252b5bb50ef49a9fe0da32077f58a2376cd33', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32b8c66be850a57a8f4443420e2cb1841aed0ebff77ee17c1c167d1d7245a66c', 16),
                    gmp_init('0x5f9bb7d203f0de824000a00c89bd94fbe88900a208ca087cacc5eebbe0e51874', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ef51255c2532e49a4cadc02167d5e3cc27616b1fc2f13c443a34f74c1e5e59a', 16),
                    gmp_init('0xa9c3e2982396777f390d46a4e257655b2ca70fefda71ca2d77af783745e8cc75', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d7fa22af6e12dde01238c2331a1fa0432c27824dce41f22453a5b8944635702', 16),
                    gmp_init('0x477e51ca3618b4560a0ca334073e9109eb527d6f6c58ebb3d94fccc485e690f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x869732588b67891dce5ae80bf29dc4b0cbd24ef0831995f723ce7ec5a814ccc8', 16),
                    gmp_init('0x745769e291505614b94834f68901a982cbabf0cd5c87b40c8bca2509bd5c0e5a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b77d544100c2b51ece2644920350358cc551e5bb6f1aa5b10e9fc66d7ff80db', 16),
                    gmp_init('0x1eaaebe374e4a7913a0113f9a246c8ae30a7f6a040d3ecdfa6681451ae22c358', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e3f76bbffc2fe5ceda73b511acb11b04a0d1623547130d4aa2e2a4ab4db5c40', 16),
                    gmp_init('0x235aac2b2a9888f3b681f2633cc8e8cd411da2369c076d9cd0f4e2943aa90f3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x21964d44d06215fd7d81bb459fd0580cf18c6ad6aacc29d87a77f3343e782d3', 16),
                    gmp_init('0xa0a19b76ce4e7e4974e6a3dfa7630a9994db086553f570afb4a930938ff9c53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7770268697ee5f6f21f6840d8f6f00a5c1b44f9e788b760bc5b0bfb125066161', 16),
                    gmp_init('0x151d7cc6c956629e8d537157aa4476060c4f0011654e013c530deb3827fbc19a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d8aa1790ac36a38eb6967d72e4a2298fcb6b50c7970db79bce2fe440e2f85c3', 16),
                    gmp_init('0x552d5a3195c0802bb81aefcbd122a86a326837b5808ae70f7b862506de3aae8d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42ac9dfcd4b5e271f8af3d5235b8176afc645bdb0fce5c98563b1f474c5b1380', 16),
                    gmp_init('0x56f293b623714e58bb290603d1c8e16ea5fe87084bbed2ba865ee02b7d4a3bff', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6261a68ddc71a50ebb8afe21b08a9447ce5126f3e0065203123ab7995f815f56', 16),
                    gmp_init('0x4f176d74858695cfd6f71deefec6626ebc36bdbf24d0d63baf417d2fc1ec9e2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92d160c21cc480e622f65fe89501210b394116e9079f0d0afe80aa69292e4cd0', 16),
                    gmp_init('0x409cba244a24cd26dd7672e7e42ac54d6d1bd51525662a89a2d2cbbe34c43ae6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46cceb5cf909ab7127e04887156e8136f9003137325d6b9c729d5333c601a7ed', 16),
                    gmp_init('0x85d0455534909f67cc1b515263efe6c58cf43cab44b3cbc79663b01d398c8fa9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c555a0388747cae3a28f2858bcd58a8627b775741deb421fd65b0f8969715c2', 16),
                    gmp_init('0x13f31f6934d495ee810790125e341df3c3eeefe896de42ae28cfe3273ef71cf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x977e42a33216dad69043bdb2670d739319c42bf97bffaae9aa1c50bab4eb7583', 16),
                    gmp_init('0x80aa8991e9fa88bd221b0a189faa33b302070ad3e7a5d250f438fd5c7335acff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x485aa9ce1ffd6f262c1576defa64bc413721cba61bbf759531863447ad93bf16', 16),
                    gmp_init('0x791c74da7d0e1a477dbde7e1decbb9124bf9aa4af727422ef1f24348a7c5347c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b00db6cda9779f3115b1cabff9449a738a086309db8eba324d7bfe412f1e2e1', 16),
                    gmp_init('0x2641a2bfb8b9d0b7df493b5eb1bb649581c37b89792d336a6471de064286f760', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20bfb5399173ee0b8f662597d68d0a6cc3b47fc9947ce0ae976815b85c28b432', 16),
                    gmp_init('0x4974f5128eff0ae0d5e36c103520fea8f81852712b7d9a8c6f0f12d772e2fa47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e98d65e82a824865ca84f7fd6a1c7ad231c7f353c7a8152e776b5d508380e1e', 16),
                    gmp_init('0x376897090dea35cbbe811efaafdd06724734c3bb4efb22e281b96162fabba348', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa034f2d184699092354533b5cdcce87f60367634f6746a4deeaf249f2a9c3ae5', 16),
                    gmp_init('0x97aeaa914c5e25fc153bf8509fd372cd546d98745b36962fea4ea2e59d065a83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x426a3f73189b88c73f7dfb6aed2c22087255d0704adca5c2287b8d884f4d93f3', 16),
                    gmp_init('0x498519d3b4e4f137c287d60b38f9671b4e44d94f6e11358bbf38e773c2ca0f2a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8865e6c465d8caa5f6e9d290243f11e6722bff89e572b73063e70393e3a20a6', 16),
                    gmp_init('0x2faf652f98fc402fa73d2d59b9e08d748b5c231d2186073077320d22810fb6c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8640445a93b92feab23d51b44fc726cd21a426ac45b7bcda474b62af425d2778', 16),
                    gmp_init('0x41700e32dc7d86874da2d3d85de396127db236ecfd22e9206176d55da57cdf27', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69c193756de35ebde70ad7a87111e09aa45f11ac8110f528de0fc94c2f366529', 16),
                    gmp_init('0x9eee4e5f9c71da733296ac985b1c0dc9bc4e215d65296a350f3d78032594c93c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e705818d01a42843a77a0d353f7bc0491e6db95ecce5afeca188985c8b87427', 16),
                    gmp_init('0x25305e12f48bd8d37479b5c4447307e8d1342307139540d92588dfc157c8c041', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x59bd3f8fdf399ec9250fa15d217762949956a15157919c35ae00990a663aced6', 16),
                    gmp_init('0x3295b57168ce9160081fc69b77dbc62f976c87b033968cb35aa79edcf411fe5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ef62af71c250908a5be946d40f14c69789e6f9f9146272b720fddee256a7530', 16),
                    gmp_init('0x6cd1274174f0aef1e4753bd96da354c8ecfa805e8ee0abd26a77b567613d2ea6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41d763b3452ec90c61fedf17169eb76dd28fc8a2a3104713eee3728c3c5787f6', 16),
                    gmp_init('0x9c1865968ce5ff57f25b650c142327f0aebe025c9ddf0422faa747f0c0f0cd80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69dae5539348975df6dd9f67b6b4987950f7686e6e5d133757fcb11cce20ebaa', 16),
                    gmp_init('0x7c473e656d19b43c3931a3676303b6f8d474f3650cbd4dd32d8dd9ea7c8dbca2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x769727edb034797e3816687e70cd91937194cc6e565bb07cce3bdb3376e5dba8', 16),
                    gmp_init('0x70b4af3404c7eebbeb2c92ee4d4986e6cd86bb376d0787eefe2fb38a16f464b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8023413d90b6c37065917fade9329df4f74abb831c7403647592bf7b040b301b', 16),
                    gmp_init('0x82d902e15c1cbf6965701ef3cdf4f678bf6d0e80e410b4e81f920c69f2a38c18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb65c493c27ab3c86e5a050ca0676644bfc27bc7686c42a7b87e8a6bed309a27', 16),
                    gmp_init('0x88d900a659bd478f2c3d8530d2ed1d6407494617623c800e03f3f237ca8f27f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37cfa2712cadc8bcf151cd66dc162bf020d9d3c1753b7099445c4c355a34f39d', 16),
                    gmp_init('0x4794151edf8d88b2916ddcac4a102807409883dec086ff7794bdeedc98df32b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e53fb3ddf2e72f584bae343e8ea64c40034b853f54839cde566c565ea08bb9', 16),
                    gmp_init('0x23a487ea3c58d209c5c1270185e48f5c080482de0563e9292d6a210507ec1bdd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x890426622c8d673a8e29a916d52e90dcac2a367b4f6bfcdbab2a333a5ccf9522', 16),
                    gmp_init('0x4e72dbe8ec6090f5df68d925ab15e2e2c10db31e4f7d895856de5761e14a915f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7519e8f8e1207514648cb39ddb0cc2bbd420e5de5bb4b762eb18490ab2dbea7f', 16),
                    gmp_init('0x86f793d8c7f83e0a2a5b3785b3359d6c452c440ff86782cc46705ca48d4c953c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16655ee0a10c92eb3da1da5e75ed90ecadb11680331f94b79207bbfc8ce4072e', 16),
                    gmp_init('0x60e28b9634dbe15ec9b6416e232f016ff2d4cc789873d55c62194e4e0081e2ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fd09089b80dc222e6cfe8d2e72ffb0c90a110d6dfc09d112881accc23b5e69a', 16),
                    gmp_init('0x4bf664aacebab76c132786f26df60d484d60daf37d816fce519df92374a2e103', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b6b0cc2248e20bc45a3a8eb85de877fe05dc487976c9914a2dfe498c8d15706', 16),
                    gmp_init('0x3244e8ecd93f6fd3f3af4a8a0be613155c9f2236448d7b89af3327928f2b8bf7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3abe840f977a798e88e3034bb39e0d2e702e2c66b7c78d262ccac7f133a49dc0', 16),
                    gmp_init('0xa67964ae9ed5e4ee75c628d0472bd4dcc977aa0731fb679baa7419c8daa08415', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6527ccf7808b0fab80dce4d54d393da06f1db93fdc54a9828088907efd4005c7', 16),
                    gmp_init('0x3f932271a6d2ec472a97ee71178e56c5a936427d970e2cb2994aa19195072725', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2df8160596ea94dfb58845df547f4e8b5d08aa7f2660e2970ba7e48a57e46e1d', 16),
                    gmp_init('0xa41b3496d959c4c0a3d7a1853c91988d373c33dfe4f671b884602180224efe60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67ad64ba691466607217da473893b054ab25004b4a590149ba952c0709c4db80', 16),
                    gmp_init('0xa65985f60c52211ee7f9eb89f891803dc46cb56a91ec6002d348d15f66256683', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6be87cc664a2d32fbebd56ad13178fb583413ffac057d5dd5861d5f98216d443', 16),
                    gmp_init('0x39c3ef77915bd032a358103129be3575371b720846edc4567a1755dde79390bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46a7d55c69ad96dbdf43d783da38c00bc09c285c315fb0ef20255a58ed26933e', 16),
                    gmp_init('0x78d5894f5f5e2f02c99b61385f60e2b1c184de73e80aacaf385df91ee07ff005', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x795e4d9b9dd59157e47abb42b0a3362b797cf82b93d1011bcc055f5e7caf587e', 16),
                    gmp_init('0x9a74ff1f60014031a220154ca5ace771d9ca126a4c488343dae92bee99dabb4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b4a38f126e2ad23f99f5f87583eaa6df415802ef377d7a8d29ae120ab0f324b', 16),
                    gmp_init('0x81177d2c2f55ba6aacc92ef92ab05d094338e28f7648238f01cf4604df46b030', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81b13370b7253d728d730ac130ab006c7c3e4dfdeb1521153a86369d8f1b1b84', 16),
                    gmp_init('0x76d5232aca72cb230eea463b51d24d2424edeaf1fe6b7372366f9b838d3aef4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6880aad583cab691e2b8ed56daf49a79bdaad6ce5eee136f350eb94c8763e07', 16),
                    gmp_init('0x2107ee9485f1ed967524f1993ae78ddfd068aa4f8a5c3d71141652a9706d3cbf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1fe48585d4f8c28a75a765fa2c18225cc4e7e5c670fd879d6d1f04e2d454eb19', 16),
                    gmp_init('0x5b32bc61f964bf1c29b6010ee1def9872bd4ea68f9076458a4e7fd06e90b0a58', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95da02dde1c9c5ca5cc67d0b774ed2b3efcccb06a4b7a8cca404ccf41838be60', 16),
                    gmp_init('0x42fd95be9b4c15c814cf54eab71b089ca5c7dbc1e64bff35f28b4029e0da6156', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73d7a7096e70732f0deb8767ae91aa388c30625ce0fb60eb2693c699f4b58d6c', 16),
                    gmp_init('0x86131341d453ff95ace3a71250b8923d3486203af733fe3954a7d095f7e3ab63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xfc5c9aeae41f52bc65a27cbe1d8ccc62dc6c1f97bece5a264728d58a4f93aa2', 16),
                    gmp_init('0x6d5686e885e016109ebde4e429bf43e2721f7d8eed600de61129c2c0542471d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cf67f2e3ab91e689bd29fadf64da056241f63be269954ef0558968e99e69659', 16),
                    gmp_init('0x64655a61c4cbf9f52eac3ce3436e8796ecf94f79cb5980f92a131cf54806e289', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61801badbef1dc77d46952e8c81930fbb05008682f6a513930bfab3bbddf78', 16),
                    gmp_init('0x9c935d21da69db03bf542c70e8d1a65f8c0e54d2959491c18193c282e96c9e9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x25ec9e0330acae60bacaaa7c81e83ec0332d2e33700c008c168bb3a7907f9786', 16),
                    gmp_init('0x65c5fd76b4768635fe2bdcea328a769f3729b798aa0328eb794cbacd152a77a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x643fff46e9b78cdc682f19d977267c46e01860c78563f6a743a35f8b49c8f466', 16),
                    gmp_init('0x1d7ed5d76c7a25a85f95c3e1e152a7786800389c6154783d7da736bb7832a4d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x313dfc59243bee93a802c2f9d6900b2b5ceb6500dd5c8a4e25af1eaa820a5abc', 16),
                    gmp_init('0x3620bcbe9c190c5abfbf3c095e2b39e8da049ddfade55a2918597ab8ccbddd11', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71b70ec42c6c8392c7b2efaea6b86340db16c331c4097179ba4fd6b5207aecec', 16),
                    gmp_init('0x727c0046db3440c7a6fd3f03f9ba5b2c21cf6d8a4fadb4b6ff97b73e01f9ae92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91524d942c60ccbf91ebd583127eca4349df990d20161bde6707e5e77300748d', 16),
                    gmp_init('0x72f5a54d3749c129a22b9f0a5aebb4f7e06160bf9724a773d5ae3d57f062c31a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x305722e5dbadcb7d08f60bba65e56aaea6a844a8340c3e311eb50b60b8644d15', 16),
                    gmp_init('0x7f6a5ada249ff1394e309ec96f0b5fb832fbba477141846d693c3246db9b9682', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9cff6ed558adf85c8f74993b0a37e09fab6aa3356b996d9a40f64d226e76de0', 16),
                    gmp_init('0x1382ab20d3958297b51487c609840d42e9085a1d407068098ba888dd26b5539f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ac1ab3ba7f7c86f8c055683db27d9bf98adb7b4f44302f7ca13833059e06029', 16),
                    gmp_init('0xa20b2a084679276df54a4bfd84d207358ebc43f68319f29a497e912be18a4a01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x716040a54d352cda776de02f7ecefe0d8ad6d96fbb3c2c15542f79261e8bd502', 16),
                    gmp_init('0x6e15d4578267effa18f16dfba2c00e551a5c212bdd4328b58eb577bead8a3db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44ac347f464877a4c2772130b4a2e40368f6ec9c3f38abcdcb8be9a813e0455e', 16),
                    gmp_init('0x436c9a269647bfe19ab032018af84cf99d7ebeb906f3ff5e939646aadd7be024', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8db6b7429475d32268729200888a0f1e28a649869be06cb36bedaf19b32e533', 16),
                    gmp_init('0x697d9f68d910ecdde380a17f3a9855599d131092920f46e0ff65c0035a1d7e84', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9ce882927a6b569d763383aec852ef3edbe311b9eacf1a6095090cd906727e', 16),
                    gmp_init('0x31f60829a6ba82f0853bb405a3674cb944dee0527595288ae1f96f3b75987170', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1b44c7844c973c319614c3d567ffb88b5f29f214d7175a98f81c37971bf5ae9', 16),
                    gmp_init('0x3d067f73df5c0421299d7066d6b2154739d9087c6acc54e622d4666f28d1a717', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ef0a28fab82914580260219d31dd69c6e141d23949ccf708bf816b558dab348', 16),
                    gmp_init('0x3b889ff6e60099ef0d1f8c0e0876a393e072efab39a6d62d320066c4196029e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38ea13fbbb6b2eb468c605afa2e85c5af62f56109909f173e6ed2270cc89d586', 16),
                    gmp_init('0x88a14b9ee8e71c7cda26f54579017e162882f322ab1262aa102eced706409b20', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x42cedcdff0c5ed7c5359b0280992f17e94d0fa77872202321c26579111562d99', 16),
                    gmp_init('0xa9669828e71a29c3350bf5bc252fbfe71ac18449c901cffc1ea48b257c5eb6f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4719e69a04a648523b419905e43e2be8b5b46d16e70f7c58c3c5c8cf1f4a5142', 16),
                    gmp_init('0x7d4bc5147bd9b539d1aeb67e32850d0020724866059187a17bc730784e54273c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6320bbcb538fb590a49f7613ce25fc37de9ed6f4f8c3f993394730e635d2f649', 16),
                    gmp_init('0x7945458843fb4c8a6439b00b2240621b629be5e73415c1208913c4b61297bc78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68a9f4096b0cff76f68977c7c695592cf0bed1f0c4b72d0e3202db3d53e0d87d', 16),
                    gmp_init('0x78435ea408365a0fa3ff1217e403ff29834cdd06780a4cab7a7a3bed34d71bd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1645271f6b0504874cdd21a7996578976018874c135bbe2f09c7761d83ff7fc6', 16),
                    gmp_init('0x8e14744b32d0e316e1c67941c52a69f0334826a0310a4bbc10e6de633602a8b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x870093243d14d2b087998ff63ab680a2c96f73368abab2c94ebc43a4b8cab8e2', 16),
                    gmp_init('0x59ce69c271d293f7ac30400c0ab774d31b1ef6498a48a771994ff9ea1092bfbd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cdc03eb71d467f04176e9ed9b9c8bcd229f9e8b7ff545e61b9c4c5ef26fe237', 16),
                    gmp_init('0x1dc9f1c3019c3ab883ac2ff7951de10da7389e956bedc0e0561ae51b911758aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dcff002425909463e6c01b0af4ccf00e66d10dc3b67d93e2ef3bd1b33ebfc4c', 16),
                    gmp_init('0x5da5ff3d8677b1defeadf317a6be782c97da0edd643540d1bdaffe0fbb8051f2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82004b474039776477f5e32e080003f3fcd1e16d882ba9dcd93ba6acb96a4c57', 16),
                    gmp_init('0xa39bc58e6617444db4fbbc2fc5ee7d3bb2eb6fb7bb4b6c74c46d8805a65a10a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c100453caa21fe58a514cbea5092184ccdf555b525bc069df947e9b913ae276', 16),
                    gmp_init('0x2f63090fad8154ae203bc130547673d0a2076b06b8b6f97510e7a60d50bfd1c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67cd856d0c0ed76280b70f2e284255e36301fbe67dca7a94e13c192f5666f560', 16),
                    gmp_init('0x624e0f2d85f96db04cd0e27d0a6bd1213f185c10e8bc6f9ea2446f2dabb0279b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6dcc30b81bf2f3d3e093495cc79f261e856a0fec110ca6992f2df58c550b9305', 16),
                    gmp_init('0x5c41951261706f10d30d75bbbc250c21ebcd2f6163db0072fa51d8bc0b87d48c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa541d837ff966e2e4cbdfa82fa3694b0511a912aec7bee8514a91ff0361dfebc', 16),
                    gmp_init('0x79a03f863f0dc6e05e33bbf3e0bd04343c35e6cf2eece096b1505a05d2a9c2e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52c7c6bdf60ac35c2375286a3efc82e5d1e8512ebc3df322ac1f6da849865f96', 16),
                    gmp_init('0x8513a086d21dbc6decfe39b6336257d01ecbfd321ab7f43a6d3978a16b825687', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62c4b9f3bc0f10c36f7cf58e104db4dfd0b26243d104de585c79aa613533e1fc', 16),
                    gmp_init('0x7540fdd4b55c6665f15a23664ae72277581170319f9266e28812999674bc6538', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x26c9c3f5b1a26fc31a4402867964824fa2bf345b214ad8849098fd60d628e067', 16),
                    gmp_init('0x6251bf4119b3a8f1aa5062b14a6e4209c0c68a31d2afeb560e55723e1d2a90b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a86e00fd8d2208344f8b0430ab85b5469b7049144a3746830ac25d2a3e9ef7b', 16),
                    gmp_init('0x914347da9c6e350228ee1a11e1cc17bdfdfce87cafdd015151438fd02f1dd1b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1f7f0eaf9f1eacd96ebcf4f4cd8d5ea20a528bf6a632a928d273092eb26541e', 16),
                    gmp_init('0x4d31c3471e01209392fc2dec82db8b5cd96f56d483a95a1c43a5304b973fc736', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3933f739daeb732c7075b45ae1b1498ead6e590e456a9e4aa37bdea01d129bfe', 16),
                    gmp_init('0x94cae7bc79078183e12dd630e454cbeba66c4c43a3d363e871b981b158a7204a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16d4c68763ab41f5dd4c92d29112f76b01cb3a52a49fc8919528f39a24aeec0', 16),
                    gmp_init('0x30c7fe3c119c60200250df488314f5527efdd78d7d51fb97920ffd8ff3beeea1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89fe3c91fc5047130ab73bfa8d64249edb08bf8885f95e64c19e4c0f4d292932', 16),
                    gmp_init('0xa6f8de9a2cdc62e3f63ae801f461bfdc3f1c1ecc48dc70629906e1c8fb56e182', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b0f887c97187d357b92d37e35b723754d1e62d4d11820afad9acdff505942e2', 16),
                    gmp_init('0x8499d8b354d0751ef48dbb9312792844eda7ee75bbb227d301c51d1dafedeac1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73098e11804fc83718ba7f172c28b95174652ea7313494af6adcf8d58c3812e0', 16),
                    gmp_init('0x4683f86b497853762b9234dd1311177f741697fa7e020d8d486756fb92498cac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b8fb0567a29f13fa560656d912939e08baccb9841de7dc33f04e33a6a8eea31', 16),
                    gmp_init('0x5885588b9dd1b03f83360a57aeee689b3e14c6905b02a2705efd316b56401aa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38603768ceddd93ad19806d4c17aa4e00e0263ad96b4d8bfaad79e14ec788e0d', 16),
                    gmp_init('0x57d1f41f456d7d6118c408277db61b014b7e97385328378d8d831f15d1547923', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ae0a303b885611a9454fd54c9ea71841d6a56c8ffbdeb86e17b0b265b486a6e', 16),
                    gmp_init('0xd00e9f904ce0031d24790ff4287e8ea95b948f679ded5f9f6e970321680a8d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b00358d2aabbc5f3af3ca95d292ee780f9b5da7f1a433ff1fc8620a20d6ff8a', 16),
                    gmp_init('0x6deb56e3605f6396f719f5ba791b8512db3671d9f1d4ca22910a9e41b554389b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d5d5767e1df5110f2ad72227d6d13c0e9923892bffc6bd34ffd51391ebe21ad', 16),
                    gmp_init('0xa2e03aaea3ce55a6dd137d98029a1cb1975547180454ed5a0e70d1422177af93', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1015aa03563d9abd47cfa40341e8b32d34a301e1d83df19a96ac85a5439638fc', 16),
                    gmp_init('0x44c3e9a148f5bf11a0bc06354b69f7651f161dab4a4510a92385e91e7a435e0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49afa6df6e283d0a01efb5b3be0697e88fcceec778207078e50dd72a9c8d8db1', 16),
                    gmp_init('0xb80d0a464fcd888055c9729d2da4551b5a15a5568541e1989a15fad5573644c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa15c266d92465ad5512cf649f23c6074b4588871a5a1c89f70ec02d1ce260692', 16),
                    gmp_init('0x71e72842c09abe74bccd6da2cb542bd03a898d018aca400e931c082a4a3014e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e65f158928705ca9668e2089715d028c9432440aa0110e2de21093867d50a9', 16),
                    gmp_init('0x86b05f47c7726b20bff10d03502cf9bd16976133bff16b12110d84b028372745', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fc43abd40ced76699e1b3764c8d3e8298748e18e07ed39572ff342a192505bb', 16),
                    gmp_init('0x6f19ad9c2bfb015a8325f1ce2ee4288d4c4ac3c4f78e0e1f4241a376db129dc7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82ee77518d1de15d27c96bc750f74eeb9c46abae6fbfa7d73f95536914c496e0', 16),
                    gmp_init('0x23960ce0582e9930b50d79595c1ef686d604fd1474bbe5d123bfd8357b52f8e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bb40b83cbd794fa55aa9dac5a7546393c85044257b0cb0a5d113bac6a3cf704', 16),
                    gmp_init('0xa1c087e2f4fc9497b288ce122f87e52cd82ec88cd127e10b1018ba80ad11f04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb649b7967b24ed1e90a0c0d5b6ae81c4158a78428b851dc7841a5163185b7ce', 16),
                    gmp_init('0x89889f8ea343f8e89570a6ff427c0c3713358e9ffa7a400ebfab335933b40668', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xddcfda4578d8d4f4650dc55318b313d251fd0876cea1ab838b3ebafbd3bcc6', 16),
                    gmp_init('0x222fed5dc596116a1c2dbc8031ad010d6e3b73948196cd84d9f5db542a7d4632', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x39a564f4ce8934605a849914614cdb0104b6f6c8f75dcfc9ebb8f3154f87e856', 16),
                    gmp_init('0x3b8e2abeafcdeff4d96d70986b7a1f6920a62818debaca1bf8824bf5f8b191b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a6f08838d1747f8291bb93da7a47b61be7d67e174519d6dbf02325d1e9cdde9', 16),
                    gmp_init('0x73d797432531c9a8540b8df4c77f83f3cc585704e4d7839d67bb3275a316f3e7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d23dc26aef57153bc30fd417d8325f1b3a351db9e8dfb7c36c4d52069c40c29', 16),
                    gmp_init('0x1063a54a70a1b52a32f4b6254328dc24fd610285b906df180c9737080b5f611b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c80355bf556618bea9c7ee90d403d9007f0aadc8d7e26443cdbf5d8e2b6f8a7', 16),
                    gmp_init('0x7fdb145e95f0e078b95e548e5fa1eb503c99b4a2a8d3663ac4bb91dee0031167', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44929160936d0269fa586d1447f8a9058e007041480092b3edda994c9fce1eda', 16),
                    gmp_init('0x631ef1e1265ac41450c547804570c8ceec28b2858543f2ad3093e2ac7520f155', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19127fdc5c3805967ee4e90c713d96bfae4e5c2b93a1b5b73603edba3b7186d8', 16),
                    gmp_init('0x5de804dbe12137c04bbe1dfd549a6546dc1977455b31f9e0b5c28aee91240839', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a3f3451a911801edf0661fbcd01fb8e572edb3949f68eb7a45435c7c5d4b304', 16),
                    gmp_init('0xb65b08c089dedfc17a39ac212ad4e7fea540399dd32d330c07c6dfcfd503eae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ea9623ef3aaa517baf13e8e333c32d1827f59cc189e56821a31125da965278b', 16),
                    gmp_init('0x9d1a14b9b64f75c98c634f9745b6c114b68a8afa392919eb9ae855ab7ffdb1b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x44d1e6dbe763014c5d8050db48659988ebc95e0584244fa9b47dfab4be19951c', 16),
                    gmp_init('0x617613db08f08cf1fab855f2e5884d288986ae5b4c213295bebd2bf96e9726f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x694f7f6f13ac7a86f6e2758a5010dd30aa5025bfc16bbb9a3ca87636d499c9a2', 16),
                    gmp_init('0x7976077a44f7bccc7e392f604b329706a3ca403c8a73681de4ffa99953f7ee38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cf91a511b1290a34307e257da9878ab9bd4dde3e3bcb755411ef6ad5ac251dd', 16),
                    gmp_init('0x6b7a26bc8d734a632ba6d1e05561fe60702dfd62a5e1d80ffd79c5ba77ee759a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ed6ee6cc8dbc97f15b5246ea8d657a81d7f3643ec6764a7f923fa532bd25ac7', 16),
                    gmp_init('0x2fe341b83a5b6cbd71b7638de13b3f770db1dff110613180f6d3873afedd8a0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x961d94a766f0ed59e0a453b90207773291db91da5f323646c8116c27da6c7357', 16),
                    gmp_init('0x99c20899fca07a0151beba98acc3548325b5790f4c82d145be238538d2cfaed2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c9e7bc555ba5fc28d426ffd2776870cd7aa0fee91073d645f8d858eaff2ad20', 16),
                    gmp_init('0x70a379444fa2c6c47f15479f4cf02e2318b03f518661606f837f0ed812ced0f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x680a51efdf48a0896fac7965b4ec66953c2f2b724ce686a4b236e7e325d731ac', 16),
                    gmp_init('0xf88e4e5730a49419a44b4405dbe3f22a30b594a0975465dab0ae5459bbe31d6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b247319f81c012d4696868497f389c536b2faf7e12a7ee5707bbd1a6b9b5937', 16),
                    gmp_init('0x5d0b0d194f528cfcb33abb92bc5b663fd5a458e4c7b617c3fc08eb1b1e3b74f8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18cd0a6360f4b4ab12dd909c0e9fb214b8cfbd2a614b830e12d5d7620783bc5c', 16),
                    gmp_init('0x7b0570a95e3087fd086962f2d5d5ee986d3f61dff35adaf9b7f2f6051f4a2bec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6adb4593e3fe4161d74926606aac3a720fcee9766a1aafb680ee93cff9172ea3', 16),
                    gmp_init('0x6ab1d60827f0617228858653dff2007e4cafa25f9bf531147f335bef9b2e562e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x924250b362fe7922a260714d0667ffd80341edce782f09782638f1d1f7183a6', 16),
                    gmp_init('0xed82ae452baa83d7f0e8b2a0a7fd1c259e5231c6a187f13445425889cf45272', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73474b05f82569de4be067eb619f5eb7ad6b6981cdd75dcde2db4c2c41fcf714', 16),
                    gmp_init('0x2998cc56f1fa3dbb98e1f0591b3ac286262181cfbb80b3f5193d77387b3ff219', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x618192fce945a499bb7516ed18cfb6f178b860437ad8e6c2584fcc637c76aa2e', 16),
                    gmp_init('0x9ff30c017aca5afea006feb11c58abd37c6b64bacb2ec2645b96e1ca4b2fbf7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91ada3e4151d496d17ee4e963e96544ae3362ff94910a2222275d6e8b1ddd6f9', 16),
                    gmp_init('0x8c475720d21a8ad0e1f72e00852b75135be5836bd7a9f3b912520a017ac61373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x396269b00820d9ebd76c95ab3a2828c171d3e8039ca9e3a079d1676ed02018d1', 16),
                    gmp_init('0x60735dc463bb7443e5225b7a237bfc2eee347c45417f0ffcc3b36ca1ef2fc7cc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x136419e3a67d29685a7673434aaa1cc83b32e8ea3b8350668855184204631f60', 16),
                    gmp_init('0x7d0dc361277c83d3d9066c0bb112d72c6372b306ca5e1b7d70e5c8586314d01', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b863096c089c610317a1bd0687122dcd69023c69fe36ca8e969e69ca39310d8', 16),
                    gmp_init('0x5817fdd5d9313425f48513c59de2976f3933e9f9aad3705b2b4ad81ad47c0d1e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5941914130991503c56d56f70d12fc952ed476add8692f65ca6ec274008dfb1', 16),
                    gmp_init('0x3326ba0486582396b779a3c264e978d43bc98b6f8ce95fc90c9b615e48156a5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cf424e6f61ed0e4295e2dec97f3187efd95df9f0f0689449f2145d90f471727', 16),
                    gmp_init('0x492c9261a5790ea33b31f8140f06e0a3b7f955a91466d2eb0fa4fdd0cef15cfd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ba422aae9649637e8827aa3f5ffbae9335d3d2fe2762d24f02fd60e644ae71e', 16),
                    gmp_init('0x9eafa9adb49c73e51271bb3e2d0b024b4a7a6daeb3f3c0e4164422d8510a5413', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6874da850f16389adf228275e0dc544d22eaf96e06af0f570a8a583a938ee2f', 16),
                    gmp_init('0x5ce29aae5d60ec360551c48f783f617e97575495c3a73eecb3faab2b49855627', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1aeb23ca41ba8202677e488dff13a8fa421bfdf4f5f8e6097c718c75689c3def', 16),
                    gmp_init('0x674f164a66f26cd1c1c71a58fd1bcab930dc762eacac8d86b0a02d2c7a345bb9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d1ade196f97c20b2f8e1c81785ac601fa8d54f3a44bd04c10613d5313ee7026', 16),
                    gmp_init('0x33a8feccd77d57bebf5b31eeb7747880021cae49eff62f7a2569d74dc1d8bbf2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f0d49e2ed0b228c892a7f57e06f35e9f10bafbb6cfe71caebed2cf1a1bf07da', 16),
                    gmp_init('0x992169d477164471201fdb478ce383d1b976b8db96917e640963d1140b90dd8b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a601d70601a3a888863d27cd09675e764b9f8fd115ba2fcf9e5f257574abb1b', 16),
                    gmp_init('0x9842aaf10b2477c21bc6ec7616a7fc4770970f7105b207f140be66c66c9d2721', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa52754fc98fa703a2f7e787d601cc46422827cb15cae900bd99247df2457c55b', 16),
                    gmp_init('0x4a20b8dc3b4800b9a95ada80ee84889b3b8b17ca76d020d27eb9ad2a4a8a0bc8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42cd30f75e2111a97a50682d94b65e70de47e7e6ea448acd7f7b3684a67afff0', 16),
                    gmp_init('0xf54eb93b88cf51d5273d7ac61a5ead4997a2ac700a039233b6989be6f20aadd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fe0426afb69000182854a40f53aa29e4b9ef7bed8f42d0e30274ecb66b83114', 16),
                    gmp_init('0x12d38ec1d84f23acf5809f839909949e3e5bee137b4bf792f2c869df30947178', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bab730c79ac6e7f499776ceed7e3faf2f59bac2f053c7e15c31258e18dceb6c', 16),
                    gmp_init('0x458b0d6a7ab2a9cc1c88d3f86e6ef21b066bc6d5431d8ad338d263791c793959', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xed702c5375319d55bd33bdef7ab2ca1437eafe660949206241644280e4c6404', 16),
                    gmp_init('0x641cab4970add4bd3673187e50c895490e35eb00e647583d573f80ca504d17cb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x90ab39b5882128e41f8cfc54b18c5f88730956d358a7d6fb0bab786bc62ab7a0', 16),
                    gmp_init('0x3fe4bd34942dadcccaa7da19c1e999ae97fb24b10bfad10f96703ad1f12971e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85d859f50061bfcb37b9fd352d9fb6952c507eb7c02213bd117c4eeb75a3d179', 16),
                    gmp_init('0x194d80d32ac8a398b94ac9c44dd3b3185e7fd42f4560deaf6894dc63cf8612ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86ee3c5cd0f144e933713b92d8b1152aea22ab8a36d48686997283d8c5ea1aee', 16),
                    gmp_init('0x5e38813aec895e7ef01744d364a24edc07d99a66bb86c882839ea0b24e65b4a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8773968c3dfe0145748f0eb77602d4fc7862fda0dfb70c14e291af3228198944', 16),
                    gmp_init('0x2dea40eb8c7cafbf762da5929f4d73b0fff19ef89fcafc34e4708dbd4ad096df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f2e5d1139f72d96d57dbf5944bcda92fec0dae823cb9383e6bf06a834ec81a7', 16),
                    gmp_init('0x6b548348db677224b12fcf04051ac873a46120cbf50a248783c688ab7d3d7265', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x555e124cfd5a1258c0a2ad861d5d6b696ea5f8ca0daa940771c6dd3d75cee9ce', 16),
                    gmp_init('0x6fe9a0de3f3322246a8ef0b1d16968ddc0b4971ed3b2202577b03aa165f4f404', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bcdb96bc80fec428dada43a140ee4c60732a83210096b72ea4fe3db2ceb5566', 16),
                    gmp_init('0x320e519c269604a7ae62cf6416edd5d1d76abfdec1f0f64de80e4d73ce01738f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6af248a3b697106200e228ec97c1898d7c1507d0f7b8bde177222f55e9991382', 16),
                    gmp_init('0x26626aec438adb46c28334f6273c6efa60e24bd4373ff74d446ea7d40903322e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e3dec2cb8e4fe4f4e939e3530748e2475f20006a06b36ad37bcc69e15b1b7fc', 16),
                    gmp_init('0x2a3e1644742092a50d6761de01a2c6e04d3e6f3c07ad1eaa999bc8159fa2814b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fa3ccb07d8f2dad82b5c41c3dac61319cff7690d6d879a5fd0718ec27bd96d0', 16),
                    gmp_init('0x2daa51343ed16dae358aa9c3114fdf092bd424b254d31d19fb8db6ebc7859eaf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x486f57b64eb9976c9e9b58c2ab623e6e7e2b1bfc48ed3d429fbd5939391bb9bc', 16),
                    gmp_init('0x6d25f088f8fce28dda1d25f76cefe6871622ab649c67796899f900a8fc0bb694', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46bdef45e5295890ec8cd5750bc4e5c0320e5b07df91763116699dc54047e0ae', 16),
                    gmp_init('0x8b1eb3f9cb4784c2c5c82316b2199c9a451bc6433673c74ac3e1a5c203c0c66', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x730e80e81e40bb14e2951e298f9383a38bf035cc2f02e0186aed9e2c20fc0c28', 16),
                    gmp_init('0x4aa683d2e3dbe0efb83bf1442fbf196220f206ab625ed08d3fbe15b8e2f274ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9bd1a52ce1ad381ef7aadda46605141d7830a3a0b153742cad730f63514b611', 16),
                    gmp_init('0x175ed85ac831c6326a4dbb693aad39e56615213dd8a0efe87e4237ee947d135c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bca55442495efad737fa4611e8bb3b4b55c4584ac93debe7f9b2e84bc776589', 16),
                    gmp_init('0x7e26960a395f0ffe5412ec9d87650211964a918576238fce26e8615c2f9ca9bb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e196a703c774526318bfee44ce265825d728f4e799a318bccbf5d8f3d50c667', 16),
                    gmp_init('0x89652db233c83348bba1dccadba5b853796f03f1676bd1b885cdeaee5ab7ec79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c74a1ccab627c1c168f5f404451dab8f7bf47cfde2b8c7bdd867e4f44868801', 16),
                    gmp_init('0xa73cf77d448894b9f56f35cf4e7f4b79f9c823bd5215e92d9dac43670e4c59f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x361584ade3918c76104f5ea91a10942650a0a8ab187be27055a1ecf19ae703df', 16),
                    gmp_init('0x15d0bd076f3bc701987458dafc4c2b293ddc38ebccc80102b51336c9a71085e2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53f5a7866eb6748371cf08e5e696c17f5964114e8864d666dd5c7da75de78fa2', 16),
                    gmp_init('0x225187456b6b2ed2b8a12bb80fc98ec65deb1c4e70cafc5271d987735f82a9de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25dcc8f78c5e19c7a28d88cc61dd85c8b8fc37653b31b56bd647684dcfe8047d', 16),
                    gmp_init('0x63f9d49c83e847a026604409198f4f958c0387c0e52cf863abb2b81987d4b6a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x673964c17f57b6554e92a2d68f4e33cb73e39af72b3546d911fc6fa593dd1c2d', 16),
                    gmp_init('0x31f01fbe1a922cac16d974a9dd37cd174114180811e386683165f123fcb56d14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e4a3fc719eaf654bcbad5837bdfbfeb5e216567d69a413edf2b403f10db9a7d', 16),
                    gmp_init('0x2c2024c8f6be2d6a42561ab4c7501da25d89e9435c8d9af94b8ef3e6fa6ba3f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17d792fafa6186c4f868b5a948cf745efaf515fd4b83620998ff7b41d757062c', 16),
                    gmp_init('0x5e817cb14151a8f64b0f8840077619c947495c2dfabc2e299241b4890f3956be', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bef79f7b94ef1a9fd936f27ad698137602b9b1304ce1b095954c9c9e1ae9496', 16),
                    gmp_init('0x428cebc1c398ae57c30158983a90e71ea90fed8258628916f502910fcaa91e99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86d6ebdc16d27f47b075c2a1f284974a68755c0f8b655fc90f9c40644a5e2cec', 16),
                    gmp_init('0x8ea0c67abe50457102ae2613a65791df84bfe88a4ab711d8fffcddcfb4a4b586', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58cfa1a053719d909e4aea522294beccd26a3c36bef1b885d0b8228863a6fa27', 16),
                    gmp_init('0x959438b6f0cd59e2ddf647b48b3339add008210bcba3b2bc0c392dfb83f8e00c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x98bca102dc91dc497e248bbc2ca5abae6c458b125e1161f8d365d01d6d4182a6', 16),
                    gmp_init('0x2a0b6d82d0fd294d5a21180ef8453cf05f3751a845a30f0e3c0d2a2194f68e02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c2703e17253fee185d6b1a89c6c4d9d2df4c0ac61fd3010d93ce07f38088af3', 16),
                    gmp_init('0x4c19b31df03a1d140204cbc85272510957db77e0bc46588c8ba470e47212574d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82b494e405b03ce98ff3c055d2925b2b71adc710c78d2a2457a55dc333f6667b', 16),
                    gmp_init('0x67b9908c3165d6ba7eb286c2409cbaf134dd637f4c2e5c31c688d63011ad0359', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b61235af97ccc4f0fd724b0024d8bb12ff2cfd1945dde4a3aafa6bd61c1d382', 16),
                    gmp_init('0x45853576cc8df69686044c955a3c8c7b00a585d8fb4c196041fc53b2ba686116', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2ba86a1695e974a7851f827c6e0fc1062171a742d2b61fbda45f012bf6794b6c', 16),
                    gmp_init('0x5edd4680ec91412333e2e69f4213bb3311937a777bb44ded0432c75f3c04b04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d499a1175a002ee9917b85c6c3f21c3647194e397b75d79cc75726f7f85870d', 16),
                    gmp_init('0x22d47ec0edd5997e7cada541567bc85d2054734cb6e1abad93458a3fb6ac2bfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x180f6cefd93dd4cad43035ab384ec8e471544e798b86a90e70bbc773ae906ea', 16),
                    gmp_init('0x4403e7dd3b38baa68a41089636326b571196fa401427c3b59bcac30ffb63ad02', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a294b12c936af3de77a426ee3de12735ec5c9a22304c09669f82f9b116ce1f2', 16),
                    gmp_init('0x97e386770e1b56a4cc9e89f29360c43927a13f790533becf990504243acd15b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c9fd32cdf118d802b05edae2b2ccc6d391d964b89074f8613e9b54fdc82661', 16),
                    gmp_init('0x201cf7803bcc34a75bd215adf7e9cc6ed1b437e29d24b546a978d120dd6d5130', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97d7894801a52cf3542c5afb4f5cb17f2c3beeb483953186007592b98547f77', 16),
                    gmp_init('0x3b106853a78de26b5e4c5362e99c6e88f078a85f2839318ce4c793f7159632fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67d1b1a6196be8205a36a52c038029830a44c5fbc114b5f3e2ef75ca1c653397', 16),
                    gmp_init('0x890b7789ca5cac024d2daf978753d5ff802049e0fc719af69a288d04b7234870', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a5814a227ccc44b4a23b9a7579fde950143f0c04af3c9a8b12e4dafffab7164', 16),
                    gmp_init('0x541d036535bedbbe80f3e824a1516600aca62022c4bb07e68302a173c56b9d0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2125e5c2f32624a2848a19d94d1f5f8dab2c3433c230c95e9b761b83565a836', 16),
                    gmp_init('0x9bdfe8fcd2b565fea8098e55517340d261f31d5ffa2bd1f84dc13f4e5df380f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa83cc4c5b2d02a573a9b60e503d51079a04ab39b718109c687d9bc365165127a', 16),
                    gmp_init('0x84d558f8f2641384d6e9daafb69d6d8a81f24cd3330510ee85a4f9361414a3ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19eca19899ca4eef4c8ba0458e7a208b7cb1571179025c822fa44a98c3824fa1', 16),
                    gmp_init('0x5bc8dc261fa35700cb213fe6a86ac3c5686cede223d1797154ddb48fd1e3e1b6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b686255a1ab52d419c3f85a186e6cb98c5929bbf557b423ca7966524bcc397b', 16),
                    gmp_init('0x11c67f7d9429c9c7181439043294c18985dd8d9ead08947b6850211dd87d4cd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x563dca1810be3429a6f66cde17e5ce9d9a01911f6b2f69244f0cc6069b6dd4e7', 16),
                    gmp_init('0x743ded865ecd14a9c94e6c54865602e137fd876dcfa19eab11f4d880623afd07', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x259cdd9a0fa12aaefdf0b74f0803a0fa9a0b9ec88a0afb4075d11b5b6fecb646', 16),
                    gmp_init('0x44c3747a4795f447d5f266a1611a6d1b8b43246b22fd4f823bbd38d5de04efac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1518e39948abb18afa7a2c9a90ad7ab3ad6753bac7fdcdfb18d9a035b62ec959', 16),
                    gmp_init('0x67eff9ef487527e33fcc139ddb9b549490a0bcab12e5f8ac0dbb6f795b89c983', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x2e61d62e97623b54149242c8ae745935547143cdb997537dec8d05b64d572576', 16),
                    gmp_init('0xa205d9fad0e8ec4ba0766de064d636ae2f563f34f2bef24a9cb8d67335dec1e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28a5c76ac168202b9167b21115cb65c07d9c24abab11c6afe541dcb3e45ba37b', 16),
                    gmp_init('0x72bcfb716176611ddab347aaf940eee86ec6ec3e6fbb6c42a65f4b535b321174', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ec44c599af05a4243e0d216f981af6aace4e59ed4a8d0fc05334d8a7a4d5cf1', 16),
                    gmp_init('0x166f8197841da6f7317b5d73c87e6050f608fed0f1bd8cd446d586fa43b5f196', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e1f1e6c11db5293395af4f2f65366e83b3b59cb789ac3bdc329ebff5e5e04ff', 16),
                    gmp_init('0x17146450cd4eb80ddcdc2d7f72b1d4203fb131847764c4e8e6a4ca6bf4e24bad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c6c081251b4d60793b56a5dfb7473358da18a5b0ecd7759714d13aab2617e5a', 16),
                    gmp_init('0x8fbc656ee7094b5f58b6609e49e6b18a6ea213a16cf763aabc88c6babf28cfa2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32f38f31a0ce76a1e541834b078e1b13b75dcdddf3172d5916b99a484c215deb', 16),
                    gmp_init('0x2e52cf849586813bbe462588d07a1b9be5caa1c7c6351890ec78ed3297cbece', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x958a71de27d378086cd90e03b4e8352f53c0071159f5141f4e19ef23f6c93538', 16),
                    gmp_init('0x66b916ed5eb3ed2a7f64c780fe37b1af55ab60d88f553771b578b338586bbb23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94a89ebeba1024be2a604172ffb636354dc7d32b36890269d7a597154bf3043e', 16),
                    gmp_init('0x23f3cb1fa81a63c4ee38eb3f0a10b8fa8edfe0251b6646433af4419ad5cb01e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4aa09aead8b35c854b6a8a58a5bca3d84a2de16e6d48d6d01eeb0194e20b1af3', 16),
                    gmp_init('0x5d55d355cc9d9c85a80e6d67d8a98d1803a6e41fc4319107fa8ede3b2c46b31e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5690f39a83df8dc80140aa5c84a52cd8e0eb01f9c7749bb15b4241b89f70531', 16),
                    gmp_init('0x6304299b2f695c97c0bd056f3715a3cae56e26d15d4750d5f5bd5bd47d6f2608', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41fa103702ea1139618e7d10ae0a8d5097b08569b423801d97470705d2bfdb76', 16),
                    gmp_init('0x49ee39e3d7d6c47d18d83ae66db3dad8e28c4ec77cfe7186e4473e1278e59c64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32249b1b69d630889673890be1a1765aa5589220d91654024ad02d1c8cce2b3b', 16),
                    gmp_init('0x84d03b12fb8fa5b4c57a4a17db22d40dc7c5a0290110aaff61d0e2f6d837d194', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54e81b4790cf0c4b53ad749cbb34d72aa5febdc901c14797a5563ab602260c06', 16),
                    gmp_init('0x2173bb901a640985e701c8df710a6c0309c252c8d76f34ee73562d0f14e65d4f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ff921c03323247023befcd61ed01c98937629c39884af292be9e0c0638d2f4c', 16),
                    gmp_init('0x4f56409a2ffd3d79bcfb552e70f9d3a12c7f3d75baec82524b5c02d42c44b77e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x248741afe6a5415673c20128ebe06ab94ec4f5bccf78bc74e23e13af9303604f', 16),
                    gmp_init('0xa6ec62642495dcfcc98e139018d11247e84a29b29a9a9428d2ba7fce47b1b98c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1a3301897c2aa77c7b2088dca71bd7e750297e8411a5da6dabab86d60a75b3c', 16),
                    gmp_init('0x9c9297dfd7782a205f1621470e19ab462a58ed3d753fdd12a7b8cecb76db161a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a96bd600786f11b8acbff65bc0b0ac3d557c9501667db3ca69d678933dcc9fe', 16),
                    gmp_init('0x7b6e878018e0ebf73dc983cacb3e9035be90b7d79d2c2cd4962786d0e55393f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xcee623e567db6a0e98479ae021e09709069c6a34c767e89f5b09aa5f5e0fe5a', 16),
                    gmp_init('0x5d5f607b213995f9dd58b5c1c0363359bba8690de474d3709483e6394db063f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60e062486571c960dbc6f24e88f420dc8b9ce1b25f76cafcd0ea175c2d8e94ca', 16),
                    gmp_init('0x28e5753e1e2040d37ca2a2c838165fc8629404f0e09d01b1169fee39e137a624', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2197affb8bdc8fe9009d9604018d2cf164391517ebcdfbe7bffa80bddd60ee83', 16),
                    gmp_init('0x3985507cfd324545d9e9e09d6bca8f827913b52a064fbdf0e06cdb943ba9db68', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e4fa2bba8c71a0446374c1fe69b065a5d3cfaff36a9586c5511238a83200e8f', 16),
                    gmp_init('0x6bb33470f719083030bc45e0495913246112e6a08b810c1610271ef238ec082c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f228dfb390a31933cbb7b40cf9f01460d41e50d62caf9954563be60fafea76f', 16),
                    gmp_init('0x51c17a0ccb3da5333a908366f7e694dfde006b26ce0b53b448bfeb44ec6e7dab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x376a16299260c313ccaff7a7b9c9281c66cf3b6b631ed7fcd847d8ab0630f1c', 16),
                    gmp_init('0x2368cd74537fc758eacf351515e4af188b00bbd0d18aa1479a0f9829a19ee66b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8928a101897ba1055d4eb4e5ee172600d4772e046559a86cce1e7595b72a449c', 16),
                    gmp_init('0xa8c201347f1e1a4e3e06fad83dde01c5e38f1c7d16a4278975a1ac2864820c4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ea886760a3b45f222dfd855ae07ae3eea703d9d2514bfa19650ca2b5c82b599', 16),
                    gmp_init('0x80a65de1fc870a412c98a5c29d2240517a1965691e6411ad547af60b8f9d0b7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x494c92ea33c92f7aa256f5ff32a2804cae2d8b28d6d6fdcfe77816c83b9d691', 16),
                    gmp_init('0x3645096354c1845573808d14bbc8477b114b9b6299d8705195123747d0c88240', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c80fdd919e269c4ea6edb6e4a3390f19757c59657eacca51195167c7c744118', 16),
                    gmp_init('0x3f808ef7034f7f00d88a9d5f4632ca2f2a01daf88d8e8869399c77e2531d1ad1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x377d65d5f3539961429c6967d65f5d87f7140a23f3b9958a4c55d1c0c3002966', 16),
                    gmp_init('0xa15d58ec49170807a2471b6d9914c2acbaa718d32d28d81acffe12cd745e8814', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3633410fe5865355324d88f6ae6c812c9f204653db470612373a29d9202abb16', 16),
                    gmp_init('0x3f00c4c2f859d1ca5c502979c9e39e75d089f07e5d0d3d5e06cff11e3305d82e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27595a43052a361c3af1366c350680af164c0d3145edbbf3ac9ae02cd5d7e051', 16),
                    gmp_init('0x53872cd801a51b13013a95e4244ee870b6310b6c7c10a1f530d81cb0ed5abecf', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x722e7cf5fb06dc82def5dd909b1651446549ab382e12532dd8bf1ed523329aa0', 16),
                    gmp_init('0x2130bbb3d4d8e783c5b6625dd3c01c469f3abe6b50681e84c8066753630e1449', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3546c6d2b51ad8b58067feef8921e6e1026735d70f25571b25a22aa5f5cc26df', 16),
                    gmp_init('0x2ae422b81c9b6520d4d68dda69489e1f27261a3697226b3194c95597c148e1e3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f40bed51d813a414b6806375bd4e10616c31565f5dbe2e539aafc049259543f', 16),
                    gmp_init('0x57ca9ed3d34a22e03ba0f78c620a14d5b46ea897e133786075f871670e2b59a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x591d90a607d3edbf63aa1dbf3e22b5e025888f9e677a4ca31b91850057e1a159', 16),
                    gmp_init('0x9effe5a9fccc9a699f52d0806fac99285b220f342d32348ba120080b20f73687', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x92d9b66bb032addf4925f13d6bd1ef545487fdb48d1c2238f0f7aac2d038e4a9', 16),
                    gmp_init('0x754f76ca0bc4ba97c78b01f985ed7e8555e9cfdcc9eb845938c4425bfa925f08', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x455ae2763a3f440cb86293eccff9e057e983e4f0d653bcd1e46df4065de390f', 16),
                    gmp_init('0xa71cb254dd5b156d78d742e236aa15b70cbd7f8026d8e16c64ad360322bbebd6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93b9cb959ee6455b91c32592e2d4d42072856e8d73cf71688ba74bbb932ed255', 16),
                    gmp_init('0x668b28315f190509b41bfd40dc72f05dc703b1401c1c76464b2c0e85a79921a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x31317dddfe1156483ac37e4956c4fc318a88d477cce2b439b4a95dc86add07b6', 16),
                    gmp_init('0x3fe0d4ca26ecf8e96b42fdaa8b79b822006d9400c0ae9470a61f22a5413bc3a4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49f14e3d266c648d7095b8a2da21b380fa020f8030c7388b3891dbe0f9b30866', 16),
                    gmp_init('0x9d4ef36a0e831d8b04a23f899d8856fcd0336d2a140ad52fd52a0654bae9c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x241183b2998ffd605915ba925a313ec8357b487e564cbed8cd21e56c16059098', 16),
                    gmp_init('0x77cfaf279792a4fd789456dd012261fa8fc134b5e9e41897d46c69aee1ab480d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x56c4712609d7dad33f5b6e4702936c95ade331e3f61a29f449505832547b3286', 16),
                    gmp_init('0xa026d186734a77582f2bf271c6172359b4ae4d1dbd7abbe2400807bfa6e89e0f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8da655e5d3a3aaaca0279891387a670dc23bb864ff50edfd4f0fabc9d9043b7b', 16),
                    gmp_init('0x8f6e9df870ef3793f997a54e96250e866b8175b556fb011176e92d819e2f9242', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x82e96b1ebb6b7c4df1ac3f91e5c024353816ab35fa5e69ebe3fce655aed42e2c', 16),
                    gmp_init('0x4872f3f45df9683731e9d5a223a6fae34167965fdea639e598a71fad5253df52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f1a27398f48bd66efd19b9e4b6b36f75f26edcc663f22297350f6665c506865', 16),
                    gmp_init('0x73d5cb9797b7b56e6b5a27b94b1a85a263ef213fae710100eb9b79503fe38756', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d1b0ecbb69f5169c5765e6ea8f6ac60e1ced5acbb6b7b8849bb2650efe96a2c', 16),
                    gmp_init('0x39dc63ce7dbd6178c2a4f9f0fba812041ce859590d8e3382786678968e0937f4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x486f615d40f8f69a66e080e57b8d02e0fb5a9ea07531e4692e659a54403ae4f2', 16),
                    gmp_init('0x2a6067f883eb211d5caf98bb91a47a0aa65f1037f0cbb34600e097caffce7333', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1849a87f403272f4809a401ab535d0639313d8b9a2d05f2055f0f0657b785837', 16),
                    gmp_init('0x23f7ad913eaa298b14f035c772e67152068f6862c91310584bffd705ff497d3e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9bd05d06642f90cda446787494aa8abe0464314eb827ea0e5853f0b6ab7f01f3', 16),
                    gmp_init('0xd1ec970f17c7263c4ff6571bcd091b6ad1bc1423bde4c60c5eeb7c95f1dd2e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38551b23256d4217ea707c4213fb3095b92bf1950ae2916ecdb51ed7be7a4395', 16),
                    gmp_init('0x26bc605f652356413d0914feb159c99e62baf497304325665a387ca0e9a25580', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59c09453d81ee05c1c3234712eb4f0123924daf943b130f75339d46cfd5f4338', 16),
                    gmp_init('0x58ed62c51983719da7eab7a549a4e42b921e62670b8218665d2a8910ca8b402f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5baa858834a7a822cf04c4926afae6b5946dc8b1ff0721f7396b6eca3756517', 16),
                    gmp_init('0xaf2e02f64d00dbb923df5a3f801689259a83c4ae742e424379b3ccf73107d5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72dfdf915fef86294fdafebee20f9e04eaca8940685a849c83abb424d630e56b', 16),
                    gmp_init('0x73798b2a6ca7031f6ce19dd1818a7c5bbbc8e0509c0201e650a07ce3c86d5de3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x466a58b223063caddb207461c5b76cc83783aa25dcb1636ba458b7a9d78f2214', 16),
                    gmp_init('0x7bfe4470e2fdc220108b5dab0c67cac4dd1461293bf01d88cfe41395e20988b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b509b252a3d8a08fbab39fd584e956e7f9860d30504da2b948300fee1109d5e', 16),
                    gmp_init('0x1cbe87c09e077b197148168c0632a4ea1013fd84fb8a3b9924ac3a1eadb7b692', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9eddf131c9995b4b6f7c59c2ff6d935b47462a115b7c3f0cde5604feae8beaf7', 16),
                    gmp_init('0x7aad381220a43eb1de907370a9038fa08ec9a368d9bc07968e1b126c1a34109c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16f3e65bc81ce1208851738af52af2d02567994e68dcb7042f27b56382a78a7e', 16),
                    gmp_init('0x892ae0b782316e8380605a3031c1b45070b83cb2df086ee4b6d4189d91bdda9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27a5077fd2e81ae9f1de8ce36d0d576fd678cecbe5b5c8c9cf58573491e3cad2', 16),
                    gmp_init('0x135c98fde90214cfbc570b5ec3a3aa1c2967a4284846c3122c646900e37055e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f87aad6afddea50e4144a02c69f40df378fa5a30b4538f650522bb9e0d6193', 16),
                    gmp_init('0x4a4144f5d1c5427430491eeb09f6cd42d174e1f9c70a0c03102aca955acef637', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51025955aba301522dbd5d797ca7fbb86ff592f8be1cff24935f46a25e7c4f56', 16),
                    gmp_init('0xa3bdf45a086e961bc4a2fa3dd65d11f8719ced400b7b74f294adce73e7fcbc9a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9d2f19a3bef4d0b4f22e46da38d9bf0898b5374f4f4e907c279cb126f6f37c4', 16),
                    gmp_init('0x7940fc51d9d2c182e4b422d70d5eeaf403d58883911af806e016a38aa518d10f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x80d7068cc8f6715d9f8bd08e50436ebdd107f0e10549e0a677e6f4c5c015e4e2', 16),
                    gmp_init('0x8a66cae8c121542f22cb08850575c00cc82d1315f1aaa10c0470d8b66be1ce89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c61c94660e8846217809433109a42d8cc3812b2d1b3c89f918906e94e1ae1fd', 16),
                    gmp_init('0x3dcc56b5ebb2300ca6c39cb2a7273e5c77d85baac4b479ef25f62ff4ed5153fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e1f807578b6a677b5e1e70a2a5e83b89327e3232d69e97555babace842066e8', 16),
                    gmp_init('0x1cb0a8d5bc58ee418512619b62ffb8cd256fee3b2211d255f002b09251b9cba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18e04952f698e2d900af525c7aebeb3687e58d66510b54137733d0410f0014c7', 16),
                    gmp_init('0x706aae10ccdec068647ca5346c550f4b86361585b80195f09d6ddd048bea5a7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x87f68fc39183b011ab734fe3c81b09006be70d155cd4de1a76c9f783dd7a97e6', 16),
                    gmp_init('0x38455190078230748c89d75571bb068f1fdd6cf1028bf25481bab9e32b757144', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43261d5bbdb271300f77c631d3ae79c6f415b11cb429fa2f91f760d9ff261496', 16),
                    gmp_init('0x653bcfc33b6463da73fc85c88f465d83fe0b7e699e6560c6812d6b9404dcdd47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8448734e39aeb9268601d606cf338639d563e77ce97a496d944967bcc79e647c', 16),
                    gmp_init('0x2f430ed97e9a6bb4f96e8067eb71d385a4c6f507a3a6c93890168445469489b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x520c07cc072e86616ecbb631bbaca4687ccb31f882f0671f3555588b9b53be93', 16),
                    gmp_init('0x95f2e6cdf72ebede0314bb4975619a17c829a9072c314a48075f12a9dcc16759', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa01fb1e6f1f1e95d8164744a226b34dc1abd70a0def88775be0b8dd0c7e3c299', 16),
                    gmp_init('0x1faf1f0ed51d42adcc94f4647a5b6512ef1d804b1b2dc476ee8a37a3519cf683', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c4337864552724f20590e0bf32b415726d6a26b17b35a70bfe2f56fb59472b3', 16),
                    gmp_init('0x27fb9f5125f946c8761979b820628f783d4ddd7b68ffa96828885c2b13a7a65a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc251edbb69d79967fd635f79f9c7b4eb9e8c6f9700b2491bf508b6bbe7c7940', 16),
                    gmp_init('0x909956e4b11fc561b055b3ebd7ed356876b4137b0ae0baa7ca6bf02c8fe67ce0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9fb719554ec8298bcb32b40285b385bee8ed3f48648f1f3d496d750fd044fae9', 16),
                    gmp_init('0x1d58a869a9921d8021fa9e77a3e339b1eea6a8ab8d4ad5aab8d3b46f0ebf5738', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9058d86001aaec0ec6649ba86c5e080ff2604df7cd87dbdafe4c94dbab63515d', 16),
                    gmp_init('0x79e49bde68b53f2a547954076c89b146e676a6dd7b2103faea05a7be0f287e2b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2273a4d7a819959e80fa9861439802819126e8dcf08c60fa5cc8e6198cc87ffe', 16),
                    gmp_init('0x5f68aff37d6c6e87a5894126b96e5b2f78eb5a951f81008e98d20bfc16d596ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x339789601c58ce8c4570906453ef64a046543f030b4ff8849df3a99b3e81b790', 16),
                    gmp_init('0x806d426506ae7edd3b44504cd644add49884deb1a402b304832bc91db4f3b90e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1eec5f14d1e22950a0387342d5fcf39511a5ee99499a80a485188cfcd4840eea', 16),
                    gmp_init('0xe232eff9175d84f6b2a0a49cf76cefb9c65e40677e9718a31f0f935b9e3c16f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77f87eb2e8f6a6ece28930cf9a0d7a0ff7b09a3b625d164c9e1f51b2ba1ef8b2', 16),
                    gmp_init('0x11ed9adc2e38117ef3485015dc6150793f6d45d61f08cf541e03ba39d1be0ffb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x343d4d7a9880a75ca160678fbfb25e8fba62e8be318f7ee9c0d985f39f87017b', 16),
                    gmp_init('0xe6db4c7c8f3273b91d20574e639fc9b45bca075b126927d340605213978515e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99547966133f8881d699130097515057ed4cbbec22c909bf725736cb9117a55f', 16),
                    gmp_init('0x26975f3c6ae3a91122a5def9874a1012f543e578aa94e00aa3153745a9fbfec2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42a81edf1af28d190dae756aa897d25199a938941696f627cfb39870bad1459a', 16),
                    gmp_init('0xa14187911d0c87e819564c5d29b31ee78e61387454c45e229034e0095b78df81', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29f7ad10e3cc9d0a6982efc8c8c8438981ad4cc234b00460d9a7824436e2f2ae', 16),
                    gmp_init('0x420c262bb7057b8b58e70d641ff9c8960b55119319edeeb3e295e53d779c5442', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3cff0cb493ee43c9233ea476180ff27db7b5aaa85839dd805bf7d086c8ff300e', 16),
                    gmp_init('0x88c8af0f69f065f139f41c1461cd0a6a9bd194fa2f9deea3b2e20ced45f802a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x403368abf1163a07819d8f14fe4d61c407e585d8eee8cac239bab587885a8d24', 16),
                    gmp_init('0xa47d4a277796a8af88705a6a426859609bee666bf2782d8de34404226814436a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x68616922818acd8ae07bea0e5f65bf77d3830f3f276a83ff57e41c8e38535dae', 16),
                    gmp_init('0x3ec2ab1eab2cda884d7f8985f427ab381138c6b06cee8c8390441e8408f82f7b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a6900b6318bf94f44206b0e5f34f350f3453951b8172210f0a331ca12fd5f9', 16),
                    gmp_init('0x5e37e206ebecb222b55fd72e512ba2dd1fd49c56ffc68074e77d2943b596cb00', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ef3ec3b20bf330f441248a36b3155658530f1ad3d22e8f7f309fdbf24f3e28d', 16),
                    gmp_init('0xa4f349bebccda172b0a00b1ba4e1029d0d41c1216e7202d7ae71f56ac9753e6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa48abdebf6efd9a0b71af553c6b0f805fcb179e663ccb2a63a86d271a5f7a25f', 16),
                    gmp_init('0x8d9885ba5ce77ce6e4755687dde98bab27adb363382969507a4cad47934532dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2e6dae8bcad456cce479a4f7a8963e5968029d9281a914c3b2b875d97303a2fd', 16),
                    gmp_init('0x55397214c80fdf90d033b93874a442a9b542aefd02fc6a6e44dcdbe1a30b318', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15f56fee6c0fc218bdc6a56d2a251834f235ccb45ee80be5d8d48ebba8d46bd7', 16),
                    gmp_init('0x7b1a9c8002004e2feca87b12f161fded9de22132dacb7b77c803bb5d2b752c46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x995e660fc3697b713ac16ef4497460506db45456b23a91d9b22dc0a52f144229', 16),
                    gmp_init('0xa9336d79eccf17ab758614476ec280248e6f8bf73fdeba1c930fbd1751601cb4', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3fb7c371bd22aaad16ea2871dacad983e16346e3c1ef77f56de422fabb5b211e', 16),
                    gmp_init('0x671bdd3bc7117a19e42cb1bcc32446b05b300084204ff1c23c2ce3075ed212b3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a17a85d3cc1a7b49d14e38592d59304b86aef2bf7fb369bf10b8653752a3b0e', 16),
                    gmp_init('0x64e782dc18beabed1d04daec213a77a9089c669fd11b0d50ac189e4a240583ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x264b072416214afb2559194b8c3c0924dca6754d3be1f3dad548f1158f5f259e', 16),
                    gmp_init('0x765488467f4f7ef25f55a3b478aafda3b4b2331f70de91d5593adeb1547b6e64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x682958d76314b7671f81b6162a815591cbb29c9b8fcc83435f949af688089264', 16),
                    gmp_init('0x8d409786195ddca7ea73ae1fea7dd8ba275c1d9500ecda9ad984c87a9bc1490f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4919106b9d74caeb9721579ac16d33e528fa6aebd61ef20b3ec7e5db98e9dc92', 16),
                    gmp_init('0x3826ac196875c9c87853a50d18c06f9579f10f9d3ccf86ac691b8b188971da9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46e235ba9464089758aed53c096d14d287f58280961ee1b7816915f5f7c30def', 16),
                    gmp_init('0xa82f3e90de1b446e728a76a6e3103f928af03be89e32ba74bde4ff9e32542e31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x298c6e0a4f526f0e9e1214bf0a1df9f47cc558a788400b4e3effc3cf6e3f40dd', 16),
                    gmp_init('0x1cd4e902a8e0116a075e917d7abfb4b8f8049aad172b5f30e6b4cea0cc4a508b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x270139348d0d71bd8f0eb99a3681aa01abbd5e9420b727d82161d448cfc810c7', 16),
                    gmp_init('0x733b2641e2abdddab11bfe646214075b40dbf5baa20ed000973f927525037b31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c97043d8f9f8703651a74f40a3951e738349105eb1b89d8b6a560bbdb8017ea', 16),
                    gmp_init('0x2bcd22c1c32d12204dca7a1434b8a85022f3c19d12108ae975d033140a0e289e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e7afc6395010a543a7c1d269ea6fe429bc8ec763956019621a0b26eb53f24d9', 16),
                    gmp_init('0x16b190ded4f6473b21e8ff01d6546afd7fc8ff1ffb24b544b8baaf13df38a94b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a47f34d6f4c65d9f09f06323d85a5346cecb938b39a2cc8490c9208b707ee77', 16),
                    gmp_init('0x133bd2fea9ae170f93410b15dcfccee61bdbd530f386aadd2abe144394a8842b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7ba3f2dae5e9ae5cb17a7926ce5179a1cf1991dc6f817cb504be6d0f686f622', 16),
                    gmp_init('0x440d2b829f092e4e68beaf3fb7cd8093a570893846bb51be6b823e64a6535b45', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57e3ddd820254e2a84534c7c19b6a0024efa2e75bdaa2fb511462145cbf5426', 16),
                    gmp_init('0x703f4531eadc5c6f1c6184251db8241ad2f5c49796123e60ca56dc771d4689dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ba1dda30369e63f2779fd4c441f462d9e5dcc3be46e8e51e6cb8fd58d420b8e', 16),
                    gmp_init('0x4012271e2223603d28ae5a0b07ef5bb4f7cf63e25bec78b378196f583c2984d7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a2d54abd5b8e4fd78a57f254af58e7e2f76a91955dad2aa79361414484fa497', 16),
                    gmp_init('0x1f6dde8d4b3a7c8483767a95b4b9c2d4412f989bd3656bb229336b0484c48cec', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x1f98a7acdfb2ec701e5e787a8b63b09ae9ea2ecf6997b156568af62038318f99', 16),
                    gmp_init('0x2b59ec4c2454202f0507e5799f3ef849b93bc7f419996f35589048d8b80d3b80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a2e7206e7967efb70222dc49c576cde41b957acbcd160b4e8e3b8536a2a2387', 16),
                    gmp_init('0x5cbc15a2861461e62d0d3c4ef86d4630e3933c8d6def5a6cfaf45b3cd239f56e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bd5cae5388fa3e150d230be53523c9133c4afa9da3eaea6aaafa388ca5e3aaf', 16),
                    gmp_init('0x3ea32904fd952a00c643d9b5c575ce5a880aa409c51206c47f692c3881d7d1aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e250640664732e0f46a790e814df407b61cd1685fcea0399897851066df4e9c', 16),
                    gmp_init('0x11764c4d4758d8c89e0ee392a39cef7683c2e2615c84e41304eef83907c4b5bb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62baa781c086c0fc496c22be590fb743d2f021de32867303d44cb8759fa3362b', 16),
                    gmp_init('0x54e5342abd49c7fa3d4a15c7a03713714d19f92c3d0b7137ab589375ca8052db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d822f13a9ce2c917e3623ebab641333994c51e5cb7ebc4444dfabdf3371e0af', 16),
                    gmp_init('0x1f1f5d8cae61bb90d1be9cef90d644bac2984eafc34a45a891c44ea81ff192d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xad74b17ed9a9bc56c2dff936f88538f43e1ac2a2f0057395a4c09b7ed648cc7', 16),
                    gmp_init('0xa89090913db8514d44aecd8a351d33cb0708f22a02a3952a33b378ce84f8fd32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x572338b988db2fc626d8540186ff9a4b6d980088bdf6329205974b991abebc13', 16),
                    gmp_init('0x4f746bb88817b65251a938c2386108b04a22c11b0b9fd5358bc75e0cc79ce0e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8401837538fb8d9e975e30ac3a30cf272e29796b936bbebaa919f3b738635bcb', 16),
                    gmp_init('0x3e1200352dc4e9a61a0a4a780375b40ef95b031de7fbc8683d740a660c71dd1a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25cd662a5dbda7728ce0670edcf118f5262d00660c9b232ede4a8dfddd8e1201', 16),
                    gmp_init('0x18044e6a1de3a16a0c212c350897e23904b7503cc0c4251bbe33c50ae0b911e6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f99b28624a7c767f7d77e9d4a9cdc19425780c9d4f25e895e18898027038a1b', 16),
                    gmp_init('0x9c4fbd1ba56a42dcade72f4cb80a1f401308fdc5ba13222a5d08dcf2df56d150', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa930ecd2147d1d8c02300725bdc1cf642f7f97412b3d2db00bd763895fe7d665', 16),
                    gmp_init('0x89a1b3236cb7942127045ee4976134eaa1dc1bad2f2e2f48147e8421f2277630', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6541307cf0886ca55be9e8cb63db4630ed462fcbd9fbea5db3caa02942c291a', 16),
                    gmp_init('0x9c2df82b1505f033d6b2c7202e42eb674e4e2f419ff6103fffd0bc6974819e1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x580db80a19a7948b97382c61c8fe139074c0952287eb6e6284c67c2759af90bb', 16),
                    gmp_init('0x77cd63722015ed5d1abdd25521f573147c29eb1568e227198c9edca3267182ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79d1e2899429914cfe1246714eb5f451e831a203e91b68256d89d95256f3e775', 16),
                    gmp_init('0x2bfc841284b6393af5da1fde916d32c79c85a66b055b09af2eeb1ecf6ee16168', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8ea063d5ee677754dd284057aa80f46d66cfc02e0f8a4bf4b8ca7ae62a4d7ba', 16),
                    gmp_init('0x6b104be07a6b2e0c9a0e2e5c2f47f0cdc13f11d0719e1fb135cf44cd84601432', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7009b95e1093478b20554b938657a179b102c7c0851f44b21a1354730bc25c49', 16),
                    gmp_init('0xa64ef3d2726c4bfe61755e3def601e9ba3c9c7e5fa0b7b3f27f0170caa11beb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1dfc60eb3842620a270458d26b2b65127f909670cc55595007318fda4c06dcd', 16),
                    gmp_init('0x9d05cc7657f775fcfa54f2a69f80325cf4dadb7f5bf54a83db29fae2f983c083', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3abf6d23883ea6d65d042a3310a217745cc065ab8fd0bb0e8ab07a23fba59803', 16),
                    gmp_init('0xa98e45f7ca11cc5eb090ebc25fff187d3580a94d7b0d3bdc2aeb301a4a80950b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9caef9bbd42612343ee9cceadabf608979d48643001e84c4549dee3242868bcb', 16),
                    gmp_init('0x3fe25e58561bac5e8913304ce80136400fcd2c141bb3d40317b08ae931875c67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11bb22b09e200155b9f47bb3db31ec12ceae68c58dc1770c14baacbe7064a3bc', 16),
                    gmp_init('0x2dc713e2347f59b95eebc199d00f349c4fc6a838bb1b85559647d66fdbbee337', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58def8cbf9a3a0fbb8730adc62d2f7ccf00ba743c4bf507d7d956a9204fcf404', 16),
                    gmp_init('0x827f262918c4832dd74399c1abfd5038b9089c558eef745d32e709277d3ea816', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a26bc699521fd2c1fe9ecc8e981b68915d3c0bc51367de83ab0d1250b22389f', 16),
                    gmp_init('0x2f746ff7f5b4f631d4ffbe0b1a1a8f8aeba7af120363634b597c6d6031d75122', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28e1801e5636938c956dbc8f655066c8f371ba9c6df23917a74e39c971f4e695', 16),
                    gmp_init('0x7790cd029237335de7f144fb903a13e807c47a78e9ed8b559d155d54ea2089d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4691b38b8461cfc9ebf4c9818455b67b67172a05e5121ea5b7416989b83a5620', 16),
                    gmp_init('0x62033626a61d9d279a0ff25816b68fc7f027d67839a115ff0b90744485f5bbd3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e20c444a3e4a55d051d2de9d215f3778946525d12f4f2dcc02459fcf1a3f494', 16),
                    gmp_init('0x2cb33c653b6ec4fab2a24b80e019c1d73d68d262a01d8836d43c70ec3f369b4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6720b13f921e021851447d94fa6387e921864d1e01b2180b3067b14ceeb2f26e', 16),
                    gmp_init('0x1c2159147dd48618ce432a915bb47ae411666d0f8e57950dabf92df355ec5d04', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52122eea8b0b2e21acedf3f8e9c93d11f7eaf595b525546d27593a25649d34d5', 16),
                    gmp_init('0x524e2704663b97e7ef483333c9549fcbeff71042ed0cc50ce2e9e955c1f7e6b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x29844cb7b6da4a71c9ed62d868451c21dd14b0e58bbf3618ce708935ed356d55', 16),
                    gmp_init('0x9992fe7f7fb39688ed0474e29719b033e263c29c01806114a7768a877dc72818', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x45b351def999f18cadcb24df0d12ca69644a4bbbef7084263a63b368e8fb2956', 16),
                    gmp_init('0x968864ae4c6916a32638b40eb0c5cbdbebbdd8e8335b031f3b9d149612ae0b33', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x12b49a8d4ae64664604fd2f975241736f773ca65e510d1f939ea0906a6dd0adb', 16),
                    gmp_init('0x71181dfc5ed73c0675430397d1c378afebfef27ae3c2b47a1d2a3623bc5ef136', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ec609b5b1d87796f94db83f6c7d10caabdd2a0b490b14fbe371dbc2690389b7', 16),
                    gmp_init('0x38b734a9e3c9fc2d14be8757d90e40a1dd9825e687087cc9d6a823cb19f6ce35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x731b85adf26e443cfd5c3f8daa913155ff08842d39b1cfd44a6f209f871ead34', 16),
                    gmp_init('0x507d50b47d516cecc78571edeb1f8b78a740c6f9252113e1985816ea5496ad88', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5dc551444a8ecdfe874d3894031ee41e39b8ed35812e38b72f3df071f3b754de', 16),
                    gmp_init('0x518d1cad868f2c3d16143409b020969559c8df55cba6873cf05e8d58beb82268', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3db6e6d28a496be3a1e233d4871eb9bc8e7a74d45078208ee9b5302ffc66bc4', 16),
                    gmp_init('0x73de198b69f2341e0993d1c2c698d88376ccaf98bf1a4d9d5a8d5f1fe40c2bb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b7db5a5bb0e85c7b609572f620b439eadffaccd215a6c19ffc7eb1abe2a914d', 16),
                    gmp_init('0x5ddc1abb00e29a1fccf93701b9c3151216bef137b71acd48d6bc1305ce33f13a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4afa63d6e6bad66d4abbc26d8d2442f1942328b33d7f7c7f5b111d75801b2915', 16),
                    gmp_init('0x5bd83c8edab0a5f99c04359f51bee752ef871c12a38a82f2aebcbad57334ba60', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x761a5e939a25b06a0663c69f5d287385505632b957ab38882306e738afda46c3', 16),
                    gmp_init('0x938bd29c280db05b2ddf0c3bc05c1645225b6ce561f8d6f5c37c48fa8977aebe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa5c6457336bb88421b53afd32b650fda9b636f7a7dae3e77e41608c7f12e152f', 16),
                    gmp_init('0x83cce9decf00f6c8c8fcf9e003d61e6859e46f2f0ebe204edd1e4db3b412fd77', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x284672c16902b374ebfd2c686d8db7f3c2e48558fb94fc38d1637b372af00d48', 16),
                    gmp_init('0x2c49139b4fed771335e741fc78fe77bf4ececc4d2fcbf126c25d83da1214e2ea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ee60a57c80a4722e40f26f2a35d45d9fb16c68aab4f0381a307eecf3585f427', 16),
                    gmp_init('0x10cb0faa4a9fc907d63e54a428367559c1bb9da1b872c3d56d5d119118f51c14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cc8e5805a7a2038372e397eca87f97e8b910ea6efc40383b1f9fbdee3e25b60', 16),
                    gmp_init('0xf4c0a3f7c63444c12e085c64cd85125f92a4e78b01c09682ce965dfd754c7f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2becc3def7b75f28f3c4ac2783ef25c498c4e449f7d64933b33aa4d2c8d9d23b', 16),
                    gmp_init('0x1852f3fe7451a67d01e89f6a1d152329596c812cffb8082e5342669ba9c67713', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x841bf93b64eb0fc40c937d1b0e1465fab0564f37b892922cf3474e2689942d69', 16),
                    gmp_init('0xa5bc0532801b5621efa180de3350c4947f5e238010ed3f2d8eeeee60f6886e1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ad1ff462d863e45e65b4ff1d1be92c057d7f21e750ac06440c9c3b6aba478a', 16),
                    gmp_init('0x5086fd234336e524ee394185565b990596a4ec834aee44c96e24350746cfe3ae', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x668d70b639668e56609ee4951ed59dccbb200f94661c1844af9307a5b69c62ce', 16),
                    gmp_init('0xe0a4b0cee628413871db2254e430c6ffa67c68d3fc8707561fc3dbe9dd6d409', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9280ffb5bb244d76b59064cabf91541c4b29fd78964b868c516f4140e6e97bb', 16),
                    gmp_init('0x228793cff6bd7d898ae54851d09e0614915f9ce6d774f057d5982e6c001725d2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6da5169eade310651446ddb5abcab3db2c08087263472ba08e6391b6a3df61be', 16),
                    gmp_init('0x65c0e83fac0f67b5585128686bb6f7cf5435295e71b4fd8e477cf848c1235d4d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73d117cdd4ca805749d8ac00964c4af3c00b587b6e05a7ba2c4c6307a86a8fb6', 16),
                    gmp_init('0x8abdcfd09f6f88a389656c878dd2dde5ffad774d1d65c82621b08c34e287fb89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46f0632961b96adbcb3ad3fa0f8afd6373c863a1a3b83755c2e7201bba3f2f9', 16),
                    gmp_init('0x521b8658dee37c714ac4f4dcd398fac0475673624e7882de608d1225c09e0a7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x341cecfe30e56e2bd62816fff465e3a62840e6fda05e2fd168d334ba1f7a8412', 16),
                    gmp_init('0x6100f1a15195126ce825b1e3dd2891c86c14c3f8e46aeee821928d1cde3387c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59e0ed443483f484ea0240c2565daae12e9278c6b8fdc62a7f04f3bc4ec102ce', 16),
                    gmp_init('0x199b0a271690575cb61c8ec349d7b97365712743a5a02287311abb3a9ba454e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93ad04da3305bc2cfc5a1fe14e9ea71a14cd86465e86f5a8619c753ed28f9031', 16),
                    gmp_init('0x946c214881e35a54fd22e564966ae802280ab08d772b48c5b2ee885955190c70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6860592cf178c0f587559d9183ce4182eb978bf60709f05a806cf1c4315319f9', 16),
                    gmp_init('0x47abe6436ac842597313b612f0a74c154f12a1526bc2ce82742d2a97df44cc73', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d9065a3bd009545b5243954fc925d06380b8a294d59fdd3c59c578b90366980', 16),
                    gmp_init('0xa3a81a28403c89adcedd07054eee31b000f1dd50f59083542cca38882cc137dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x14208aacbf37a8f1e8b27e711ea006f322ac7a153ee027582d5901f276d2e361', 16),
                    gmp_init('0x9c35164280a0923cdf141c33f2a6be62d3b5bcbf71ce9ef4bc3e14c12c53b6cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23454872a735534e560cdf973c41a60a63efac64ad10e88e5360003582be2fbf', 16),
                    gmp_init('0xa41b6f770daf6e4c5e0b12dfe831a0cc4ac19bd2bd92d11266de5ac3a4fdd4d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7c096ee12dc5e05e3e243932edda5b8221f1b4ca6a29bd2da26544eabd2d931f', 16),
                    gmp_init('0x90c5d28db43211eaa67317468045caf876987f1a82052308721b90d96ee2b22b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7800d45854568e756be6576bd2d31515103e4571915b40371efd6f12cc873a2c', 16),
                    gmp_init('0x3e7ad6ea96aab48d0314f5330c96a8d57e12cc99126b1109eb031459fa6b2670', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x855697c3b69aeb61f2f757dd2e8c1c017498da8caf412638b1332a8bfb7b3a7d', 16),
                    gmp_init('0x3c8a11245c6446bc0e9af3f89910877f968276ffde4cb3637fe7d8aa131c56eb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x738bcd7edec3b20c050dbda128b581bba16fac7105f53faaa20033ded8d781cb', 16),
                    gmp_init('0x7eb2323d5bdfbb7efb5e4bdece832ab5d9cdf4f41c0cc8fcd8d30a1af26105a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58f258ad6dbd970b98476a9bd2697c20a3c7b3b5711675cb2741ebc1b3bdaaa4', 16),
                    gmp_init('0x3b31beee516f24551580196d7f9e1a0a76d37dbcfb1df69acd28e8603fcfcdfc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51c0f1251246c04fc3bc7b8a93252281dc28637a15ca68d31ac8f6dd47cfd5ae', 16),
                    gmp_init('0x1c99f0eef6ef4d75f7e62a7132af5b37b14e2c0ab70ea71be67c73a9c4c10408', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x478626f223b354567bf2a6b5355b35384e3c3cf47618cf6f27e230ad1e253979', 16),
                    gmp_init('0xd025c70a4f773723d25778d78246cba80a18e42bf52090b406899c1b7534313', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24275f238b69661ea826abce3957087adacad50d133bee2222c6018922c12f63', 16),
                    gmp_init('0x2596ad9a41a47d17aa688881163b6128418ee1550c71c06feefd14f9ae753fd1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7764f09a4e39a55aa859110e06fa6d158fff20e2712c7b50758c86a02a0bdc', 16),
                    gmp_init('0x2664e9da8c7bb8642ac8cf3019772865c6aa7036abd7d66988f0e88bbb64bfd7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28b8cdad2287bad23d72d625a9ead978f0924472f6c32dedec8ef271d50df25e', 16),
                    gmp_init('0x66983795f6673c1b8644b8597c97c78018913c1964ece4f546001fce0fea6ac8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18882c4064c9a87dbb5358ff40cdb096497aa6806fe09c4ac17764ed73935467', 16),
                    gmp_init('0x6bfa618083f9d0be980a1594753f510a60a32e4cf497c5d38a1b8bf35bcfe667', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x876705af04fb59fe013c8174e228fcf072e5410367c5877a48bd3f2080adf4fe', 16),
                    gmp_init('0xa29b0c95ffcaa4fc128168ef2808452d9f8161302bafc2e1f4bfab0ec4f0a170', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x50823e956e5275b280352fbe9e736dd4be1b83b1a00c66935b8281a93b4594de', 16),
                    gmp_init('0x463d5c183a58b694fc8413d2004aa4c564bdeb77824d06dda1da41e49e3093d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa1366045ea2a9ab3876c81696c0f44c0e265c31a67ad842e4ab74cebbb2da2b', 16),
                    gmp_init('0xae13be72c3eadecb65ac54c09283726c70b7283910c4ec63c42af2ec6da3767', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x19ef93df27d34c5fbf3b6ab7f33a9e43c30f7e381de05081162efb03618084d6', 16),
                    gmp_init('0x8f3ef672b6f295a06cd6ce1ec62ddb2621a540a2e290687c7fc90b08a07953d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c647996028b8fcb37bb49ccc0011447ab5f9e38300ca25d44af51c2cf54032f', 16),
                    gmp_init('0x294193bfac66ec61a9a34ea68cf9c0bab1e9348cedee46f0d21d37e4402caeec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c845ad866207eaeba4d4cb0c70d56ae5039e1043079f0a735c4ddb5ce1fe6c5', 16),
                    gmp_init('0x8aa766bab9e818c6e0341032dba32b3d946f241dbe9303093d1db0e2df6becb3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x979c47f9f850fe1f1b3e9669b6b6318b81a70d37f78a69694083f2575f4d4cbb', 16),
                    gmp_init('0x8341c6324706ba3cadfbf7bcbad320c10ab4bcdc791793712c54475dc4846a11', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4a14c0303b856c94b44385117f87ed9d1200ca9b11006590eb6b651cf58472c9', 16),
                    gmp_init('0x7b81e470dae2d5efe63873498b47cc5ed544a068cd732117529c5cd628f852d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x245a28f898c1c6b398a972ce4a1590407b82757d8a693df509ffb63b8d799c2d', 16),
                    gmp_init('0x76de49a5b8a5ee1faf22b1c554b8ff09fff81b0952c01e5c34ec428fcd5ca97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x24c8f5642223799ec2af8bc4ccfb241a8b44080ae78c40aa86b933a300724cc', 16),
                    gmp_init('0x78dc099576208dae762f3c20625bfef375fdd9cf87c7ac633ee02e5a3f7ae4eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f74716c12536fb0a997e7282b0b9b367c8ba1649ea19392e5f8c8a00f519f1e', 16),
                    gmp_init('0x5cca50c7c263467d0430ce665f4b768eb6781db5a4521d06cdf4a92ffee5a8b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3447ace7f8adcfacf80f7c69ea53078868466cbfcf7841bc2401313e8cca7227', 16),
                    gmp_init('0x4732ff45218ef540dfc0cd96c41c02494975beb7b7f42ec6d8f6deb1d5cd20d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2beacd5eca6008c9350cbf4d4f0cc1aa8202d352749b5b5fa143484c3662cc7f', 16),
                    gmp_init('0x234cf47a42f4eb421c4bf274a8a5ac6996dff62389cdbbdf90cc4ea2ab39db55', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b50dfbf595c228c3dd7d7073b065551dbb2f114b81e32e62e80c7c0b296b37f', 16),
                    gmp_init('0x159c66f0fa20504ece9b635057be67b73e9e1cb586fbd2a9af705ff45684b0b8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5825ae19fe368afdd319658082b7d8bd451eaee979d5c858b8db6d4a16b7599c', 16),
                    gmp_init('0x6a28628c1212f7d97573001afb57172a7e17b0840fb670da54c83331bfe7ad5e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x759ed085f77a9b4d32da701c723f13e2c8cc5b7a6127b213e6eceb4bb830e2ff', 16),
                    gmp_init('0x83d29b3b4a71d61062bbf94c4a403cf2114c7d60398e89b2407b8d23a4d04528', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x500ea7ffd029b1a49636402e7e77e17f071e7d83e1e782ae67c05e5dedb4297c', 16),
                    gmp_init('0xa5f17dc116582f5f46ee16e87e27d42532bf80fedc3df242e1ea4584c3a4bbd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54c1dbef4c78d605caf79e022186e5621773033521b1b9e07b91bb204c7cc2c5', 16),
                    gmp_init('0x16d3eaf7ab5b2995cab9d8a42fcb082344945f11a7eb69a413d0b844feae0379', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x54a2415884ffd702beba02ba6b905976dd43b8be1ddffae7762dd4b094769dd6', 16),
                    gmp_init('0x932b77fcee2e7d57705c8dfa4af2e6200f975fd779a2279864fb3cd30c4bf91c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c032f8aae3e7572ea6e1f0f92da2a1c359c1e82e68caad42de64b26a5dd5a6', 16),
                    gmp_init('0x247533b31c49d8f9c7db2d15d1c854422fd6429985ea07315f3b459bc900371f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2de346094f73046debc6957b45e461f9dba25d319b78e1aab4856e14987c9292', 16),
                    gmp_init('0x97f7d16db8df83846935d2123a838d046bee96d0f9c92f351e04ee6e9210aa19', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x789d3439f22dfc7b275a07ac6166ed2abbff883f30be5e2527d95974c109e87c', 16),
                    gmp_init('0x4dee63d9dcbca2556b809a529d8eda62050af3060fa8b8148b54b43d7326370b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x8b6b26f5982a0c2cd72c174f53b4f27da14b79105fe587e428662be0b73dfec1', 16),
                    gmp_init('0x165219118bc7b5a803cbdef8b2f187325f72b56bda8db2da70eb2b290d0404ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x781a51eee5008044b95f235090cb0a05676ca8dd3c8f848e1d0366be99525c93', 16),
                    gmp_init('0x99c094f2af5b9e1ab1a52be7ab7e86c03892ccf695f186560f6bfc673df5799e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x574d06ab5043d9183676e2eb04ddb774c3413e9bdf10eff82302c3bbf4458c78', 16),
                    gmp_init('0x914acf5d1204553ab33fd6fc0a2393a95774c42a152294960b7b61679422fa39', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4eef0d3d52918c730e18488e290fbce33f24e6a3e7d4fa7a62419a6868b01c69', 16),
                    gmp_init('0xa09f13eaa73d9e8cd7e08436128a4afb6937246641b7244ca65b8e85a02f5718', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ec8c9917d5d1f47ad97d240c9ecf61de8747552329f2b6eeb2505b17544c5f1', 16),
                    gmp_init('0x1d19053a9aee34a5c018b32aad1cb1fdb2f6837740c47b2c8109522f7599ae7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x22da3e961f191773625665419c5e06a75d5b945aeaa396408000abbf0f782e79', 16),
                    gmp_init('0x5da12e31badf437f49bbbaf833688a8701017f9dc424222958e3280720d82506', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55e142ae149cd0769e8e1a63d9e29a9759d203a4196c883717247096f40013bf', 16),
                    gmp_init('0x8b7a10e671759e5c433016736ec0ac57dbac5574a084d6234532872354519ef3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5749f99227f1debbd8b3934dec3ba16fea76561f41b8a62b9d33759e45ac4905', 16),
                    gmp_init('0x78d649008702dfc6575e424891c02a427b0954fbabe73173cade493ab07ebd53', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x541b2649ed2fb1cf9cb5275b064fa52333ea41c1c61b5ce11c56dfbca90703b8', 16),
                    gmp_init('0x6fde6a6909e5e6025742a0b04f7d7010c95c4a2966cffac6571fba6d35fd33c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x64339c2c902a0dc8b9300bb931f8224b4746a15f49c61fe044b2584e5bc08a88', 16),
                    gmp_init('0x42a420309dbba10e2db375233e4f83af1970013cbb2b8a3bad0518c5ab7c6b35', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3347923f932526bff1a1c51f55dec0565768f7bbbd5364db4e052753e5bea75d', 16),
                    gmp_init('0x5266cd0450a1fc20ad6e031dc291502b1f2be94d19eb97b2ff267956fa3d44e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a4cf91e7132c020b2fa50a21e44b48db6281d709b13b6403e11a7b7166176d5', 16),
                    gmp_init('0x250e794cb3ed4b40afca7adc185293040675a79d07d03c9b95297f2209c53fe4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d64b5c9fe286f1d8e67d6591ecd09f9edc5fe4365930ad23cbedf140b7c1779', 16),
                    gmp_init('0x319db9a4e2cd6ca5e38c8b2422d9e93d22a840fe0383e3de2ce5df3538a1ab83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa482bdc3be1b2dae1facd33471857895c218da22aabf1ce91b8fd67cf54e08ad', 16),
                    gmp_init('0xa6c7e65512e0aaf82e1a0cde10edefd26c1b4a002dc36270774b173b7ddf2dce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78cc75d9949d51c1b11503c2a586eb9dbc0a56156e7771164c108161c2fbe87a', 16),
                    gmp_init('0x8fe057d424c3334e1e6657e20f585260973c49deda5066687487464c6e7f7688', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x46855af8cf6045f9f4ca52aaa6d95614e05bcc84e93a407cab085fe1d088be17', 16),
                    gmp_init('0x3594c6ad145a192327ec1cf586da0ed09521df593ea7a182472c7f6d10938f03', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x289f30ae2ad6d665bc8c8e56b515b1deea4a9912a02dfb27c6eefa46063eaff6', 16),
                    gmp_init('0x1e24a891859514f41a6eecbc8883553074af3ac255b03479a0fd69246dc4ae34', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d38ae31af85169aefcd976df27f6e02c3ecb9aa9308056e04ae01f7021c9ee4', 16),
                    gmp_init('0x7c8baf0852ff26235d4b0ce71d6be2a5442328b127f33f974c0678f125e984ae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x28cac02c3c20b249944347e257cdcdcc3e50509b452e41fafdeb7829bae816b0', 16),
                    gmp_init('0x76fdaa5cc185f125af87e739e7b1f131d03228f37f8e2b858068dcae76175d63', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa14029e4596b62b42ec9dd631e43d28103621e7315e9c19ac497b1bf75414b3a', 16),
                    gmp_init('0x8222210c125265ae6366db02a23358cb2f6ce412e13ec46f4bbc59258216a796', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a17156c2bac90d64997456641a01683ca64524792e941b173c20a8acc5c1913', 16),
                    gmp_init('0xf3a19b7d48bdff66ddb4be9d24a1053a30e61a62164d15d61cef709ad352d2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x94f5a945379ae718926f2327a6342d341fdb72e0a87bd312cea373eacb5d3233', 16),
                    gmp_init('0x360baea0f259eeb7c29b9a03ff6665077437d708e9d5e31479ef040adcbef022', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f55f889a302c37c32a5408b73ce6671a40bd7d80905feb67b4c2accdc602e02', 16),
                    gmp_init('0x692531fd5414215c33bc66bf17cf458c9ddc75ceede9662fbfd32bcea423306c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8c4def8dde687c60fd2090ddedd3a72c14e2bd36b1f9d6185aa7b251e1a7ea4', 16),
                    gmp_init('0x5800361cc738cf342ea537246e6037d932272ef6cafdb70ba48b076853a660d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x196a0d610013ee521af784a1a5b1f76e2924f1558bdce8df75a7f8b697d8afdb', 16),
                    gmp_init('0x8ba3873c2bb4a232e1de4d7b1915e6210dfbf39678c30b2fff4e73289335d4af', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f339727a5af81d9601833f3ea83e85e3a11022fe1a57cca4615981466b6a434', 16),
                    gmp_init('0x9b21c9211aec49a4e5ebb57568fe146a37ed4e20e83637cf0c2e2a1a20b65d6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e8d7c6525c00d8254fca6ee567d937d51072c24d073b60cf5df373967b369a1', 16),
                    gmp_init('0x477754620ac45788a71cd8d5f7d1ad5fd94b261569dcc6810bd062af7476357d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88c80260748c3f329eb994b43b3fa2f0e26fa34348269ff1ef91259752cff424', 16),
                    gmp_init('0x49a067e371e9fb7cbc382f4e7d02e1474df99c740a961da5a951a38481e06094', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6092fc5ea1eefffe9a230d0ccef8023731c1c900adbd63dd6abfa072924cacac', 16),
                    gmp_init('0x31800c9bb805d5abb70c5eebb5ee69e18f1d2f30bcebbadd36ad7d8a5b013417', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d094cebad2cf9f3af2e7eb0faff71e52d73b8d54f892087d9871a333efaedca', 16),
                    gmp_init('0x9c5a47b04796e640daa5776388c28d2c605c8bda4c4b43d9680da168f4c476ec', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7b17af91f6c95032251bed1de52eab48e4cdfefee8fdb6d435b5d5e889b9d653', 16),
                    gmp_init('0x65d9ab6c74aba8a70eb5567e1a02417bc693268bd489cffa573ded03b2cb2de7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x684e75c7d00749a6f165fd99c0fef75d2825936e1825c78f61f1f63a7b60fc10', 16),
                    gmp_init('0x710e764668af51249e7eb40bc4ea0e6da4f9a8283ef573f27d2922a3d14cadd2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20613aa022011eb9079478cfedb28da1c873c9b1ec97700e479bae9526d82d7a', 16),
                    gmp_init('0x963b5d85bd69d7af2418bd6d6bcb5ee4c515578ade7f99bdf5ab2ecaf130e78d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x95ad6671ea7907ef6c45568a9f192e8d9cfb3a8bd0c3dfa065f71bbb5b19fad3', 16),
                    gmp_init('0xf0595c524e2a575cd66abe0a21e36e702c811eb8fd03a98036fc6d7ce4e1581', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ef774a060127bbbbddbba398283a6cf4b65738f9e8f90359609c5ebe2e51ccf', 16),
                    gmp_init('0x1113e60ec1649b12b9f3ee33b2cd6f77794f70125ceb878655dd255acb5cf31a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d6a1c20f7151fae3d3f821d772219ea3c784d328476c1a851ef095628bf475b', 16),
                    gmp_init('0x8292638ed68e1d0c11ffcd68d79e63b566998e26f847dee304e36eef7c337778', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b60fb51e0d47185835a2b609ad26cf5c8b483b3a8ff09bd329cc55d05872401', 16),
                    gmp_init('0x7b76dd44892f88856d8b28d9b728c316c54867ae745d69244679ff2863152527', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97500b72e811e2009e283df55570599379300e8a116afa06e081ea7447386d53', 16),
                    gmp_init('0x5d73634156154fc503be1bb92ddea007a293a43fb94a06bba99e1e2b83145f8f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c828ee5e01b4b9834c5dcfcfe8e53ee940fe1eac44ca890a2d2496f8eb2b1de', 16),
                    gmp_init('0x3e50091ebbc6f6aedab1e2e77150b64818bb83c19ffe163a710ead8a6b475092', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x738e9ce1f9c88fa2f282c52d97bb6847be591de1839732b0f3520d633a797a75', 16),
                    gmp_init('0xa64fcbd8e8fd41d1843a2aafd192d6196ed2f00ff528826566e615f2149c8863', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa575899f4f5383d4600905a84ee7a00a13cd6378a9cc7336bcb64320a15d26a', 16),
                    gmp_init('0x7d5084ea58c454df037f121364511be521ef69d8abc0eba3b5dc3d52e07f04cf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3193f8631606ceb7a8f19424034dc73e683ba2aa6e3f493a5cbd2827edadc3b7', 16),
                    gmp_init('0x8743dec20843654434655bbf20591c2a05f1a546d831b31c19bb6edf3eb80858', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e6f2b9c66044e74bfb33a868a124f1c39f0683fece0ee37a110469aa84150ee', 16),
                    gmp_init('0x352dfb81d5e63ee72249675bf527c8c25099c99a7e74e0e4045f1e1761026bea', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73cd39cd51db8a5a6d451403920e32592b8670abf43471761e1e30b5b673a814', 16),
                    gmp_init('0x85eaaf94d0d512c4753298fa45c708ab0373f6d5ff46746ec7b6e55bd299b31d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32143f52e500ba0d0f85e352d927e688e5163d236a2514bf979b9185482ed6a1', 16),
                    gmp_init('0x8330ea80f5350f43560274edc22c71b83e70980f0385aeb57ddabcf4ee60f4dc', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x339127e61af80f90d2faf127e5ae7bf5f06875e2eeb1595a644ee55d2911915c', 16),
                    gmp_init('0x2e4d97f60055661b7395d4678cb320f5694fe9b995faefa947fc7bff71384dc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xdcf84700b1989d79cc697e9b4d1123c6ad4f651cb9dc9289f5e6fbcb8beeacf', 16),
                    gmp_init('0xed102f6b48c8c8834360f33e5e57196c8fec37f5d212533266d31dac626df41', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x715b510229ec28bdf00b49958439c4a5994e7371e1a32ecd1372da4899b3288e', 16),
                    gmp_init('0x1b0f9c5feafef9a36d63841b179d1e082fe24705ac6744bdef5b097cd7f281ed', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71a415e7c05b854b15925a0eeaab02a8be147508d997a5019ee4856f9f6151c9', 16),
                    gmp_init('0x217d9d0cbd72cad052bbaefb9a4851f3d709eaffa5c9780dc3491a05d75e1277', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d268026a0839f37f058c7264c63b62dfb3f875ef431f11a488452383e82d6fb', 16),
                    gmp_init('0x696efeaaa7ab615c6f692f13fae40013fae8186bfa902d482d93b9a8169ccf78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4a3156894275d9e720b04e7ed0198063b1fa96979ea13eb482a79b25765f6cc6', 16),
                    gmp_init('0x827945bd6d3ca737fdfdca64288745640673a1f632223c80b80784fcd7fd1b28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30f8f7c1f024355789b7854fd1589a0970fe3843dde7595e4cb88bde630e9e47', 16),
                    gmp_init('0x2dd4263b1c6803ea65176f860971633ce7b29f281d9d6aad42c399a3955fce3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x34d3a223b5c263330615b81f7ccbc0b8f866922e83eabdf2638dde7584402777', 16),
                    gmp_init('0x2c2cb17495283a45bb8ae2f37e519c0da9874063612b99ac517180dac9f1f7d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x496ae64128ffaf2b5d8b97998603d06015350fb8c4e8262dde06912760253eff', 16),
                    gmp_init('0x3e0cfc2716a28cd480181624841745e9923b83c3adc7668193b3672c20c63e3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6a0540bfb22951c0f9665e1b27c06499b0b74feb0151855d2fd9a5751000bb56', 16),
                    gmp_init('0x6047a3c482b4206a325693376188cf7e6a8d94116b7f3fa15e51fd9af522dff8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x417726da8076aa3b2ca51902ee9cf15a5cfaa2edcd4bb154e876129e252de581', 16),
                    gmp_init('0x417693382019e3d3787e7c0c451f18f5deb089f007ab9ec974eaed9397ccd38f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x935f91286db3bfa056f29eb9e28c69689087b2342912fc2e4644cd4698500704', 16),
                    gmp_init('0x26fbd937851fc11c06e73de33a97077b209b91ca6047861eb1ec0838d4f646fb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40257c67c3741a6e621d06f3ef627f3f386b4b916551a1d6dabc0d549abf4936', 16),
                    gmp_init('0x42ef7f508deeeda79f08ef35d99b00e89daa256364cf912dbde5281e18650bfb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f36ca5ac744b9ffda2fa4e381902249f497e9a8ae933c36f0171e84e1366224', 16),
                    gmp_init('0x7e6b82b0d0867d8f4962e16d54374ffe038b008695a85546d21857fc88314de9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x47f6042d386b126d30fe78555cf14100a27558dc97509f96aea74cf18868c52e', 16),
                    gmp_init('0x27e8607fbb1b73122ea6d8a02e3c621ad88960f48cb6feaed8fff6c3eb833782', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x38587c8b0632882d605e11de71873846babf61ab6e494c3310b2fccb559ad53b', 16),
                    gmp_init('0x2170f7aa9883129bcf4bb92e8fc58cbf27c51c629ec4b2629d523430d7b26afb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d721589080038b55271c983c51eeaacd30d43fd95c12e67c03284af042d2daa', 16),
                    gmp_init('0x52fc5a436763a87f84adfe1baa07a734e35520a8b69eeeee90770bdd9b224cae', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e7e9eb2f0019926e4ec8ae235a968fa606b734480a36e3a798c73833625b4e7', 16),
                    gmp_init('0x5bd78d2498c89ef1ce01a2796db65821a083944ddb9171c9a9d46a7fda08162b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1e479c988ff28118367b063dbb6f54becbd73e4c7b7c76cf888636e4d82cf4d2', 16),
                    gmp_init('0x97c6acbcb775c07b10f251211a0da9ad72afa7611fa1a9cb394e938028d5efff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5127b0463bd37aa0474d08271d36b16669a5462d4c1d83dddf62f655577a6bb8', 16),
                    gmp_init('0x570c1510bca1115b73539142ef11f2870c48ef577b3ebfc315e572ffd7cfb98e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99b251f2892a8c3d2594d77cc03ec9bf8d3207fa1116e7a96324c75a16730eba', 16),
                    gmp_init('0x5022ba4a1c637d8ec0ad12751dd89ac8c5a23cfed64a6fda6e5b3748236f71ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a95f497450c7f8cdb206b6e7d5b2e1c00295def3ca47b6b7019a3d29a4a045c', 16),
                    gmp_init('0x63061b53afaf1a085712e38a34758a8e055a6b5b5e69e76b443e5064b0ab9238', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43c23b71c1b92efddbd14358498195040b51bb941844df730b3008dc99e9ad97', 16),
                    gmp_init('0x487d2a2a6da2b519d0c8293f314d4ce95a77cca5848926104c135c6a55413958', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c4a875a9389b807ba83f54593e6c68a2ce59369175c585e922811bf2fc29e7e', 16),
                    gmp_init('0xa68b6736f5e2335ff9f210c0b2fcd8d69e20a6d1a5647aafd720afbd9974d637', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c5a6532852abe2a2ffee025d1f06226a14e705d53b09ab528c781c59836b58f', 16),
                    gmp_init('0x25ea76afe8205ee8415b6f73ea8a0cd03ba68d35b89f204a84b129e2e9690592', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a223b575be469189639505dfebc1e1d72960152d15b0e347e2be80f71e96f1', 16),
                    gmp_init('0xa6c46432092a5020ed1d46357e07756ebb41377c259339ab7ab2eeefe8968831', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xf3d058f3f2ba174a04062b239810d83d7f801e89f4daa56f549dd8f1e106975', 16),
                    gmp_init('0x7bb63507b7ce13b5b89ccbae27f709689c536803c59336eaff11fe2baf2d7ac5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2ff7a9cfb960fe4b67bf0d5c1215d2aafd8e7a5758dc213e9e836bea0e5e3237', 16),
                    gmp_init('0x27c92833d36b0e0200fbc2ffe41ec1e9b122ad38afbe6ffb3fb4250969855ab8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe5a6f5f6bd3501e5d00f1917ef44927cf86485470cde7fc825cef24d8a9f468', 16),
                    gmp_init('0x5a8e0e13c0f829a762f60082ade33d4a14421b737316e425263c36482f5326aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x905d96ab4a7bc59c5f08ef2b3a297b778647a2c7150141d78bd29f7582528d21', 16),
                    gmp_init('0x14e3eac63522ba53482ea375dfb3070061321901f6c302e2d27d7eafab261991', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa49077244836af6359055b377ab04a719d1a54096efaae52135348227811ff61', 16),
                    gmp_init('0x63c97d38783857de0408fc63a34f05213a5614868e3e4f593a9ebd201c85f0f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ca6e5a50495cde40c4a2b1825eeccbca2d21d63da5377f11caf5bed8f2c3d05', 16),
                    gmp_init('0xa3bcd1a4486736e67d466e39050198fa8ea5f1853f0e286b9ca8e9a492b47af0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5ed3ab84d136cbb62759de521c8a1915e540655a2193d03e926a527542de2133', 16),
                    gmp_init('0x553ba618d9dc12ee0eabea4512e42f9d5d51b0342f04b193ea1bdef0519fd3cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4fc7fbb02302d204a6b3da94f34076e10ecbb46a7213e11d0fd51b4298b48807', 16),
                    gmp_init('0x273753134296f41154e49d01460617ba32ffe859c57b90b7c20d2c9d96315d9b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6fb3fc987ac3a89a909de5b4e02fafebe8522d231e8bc0f24ca9e04adf399aa', 16),
                    gmp_init('0x548da428b251481b00af6c8e00110366a50cf2b8ea27506d4892d62859c57e14', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27c8a2f53ef8ec3caeeab9acc3ab70d2fae26c064634a31ad98c004ea90415c', 16),
                    gmp_init('0x8702d072e3a92174c9f314a378c0809cc43f3fc4f676e2adf2d5a4d86e971b5f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7020c3a94fab4fc89fe8d207e2da96eb1e54aae2ef50a2592ba3506114968510', 16),
                    gmp_init('0x3fbf58de1b9e2238080e864824322b01e99798a56b84f5b40569287cd29fae3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xeae76d495dd16d50a5e9474cd212712ef9dc4045a88ddaaff25d449efba0d1d', 16),
                    gmp_init('0x350eaa292c438e5059878a845409c2f8c4e0b644e6aa493bbcbee894e8533400', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4052eb502a0cbf6a4a54191707bc5c65153da9c9562f76b837cbc5347b3d7f0e', 16),
                    gmp_init('0x9d6068001ab7c638474f747a5c4add464e0f98bd85dcabe424db9e634c15c5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x822e43a2cb7d8da7fcbf0153d9d7b49a912797766cd104232eee37aab56fba58', 16),
                    gmp_init('0x856b81538c3943674e2912213fdaaafdb5cb82aaa1cd254d300d3c2a18da3288', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e006ed2c4157ac2a409572796175c300c7bf0b0dc56e77550a3083d73a543d1', 16),
                    gmp_init('0xa84cd1485fd89fc847be108a45df9be066f1faf4e33476d7d65eaa73e7eb3aa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8d8bc26c7bcae27c8d55ae459415705544d2bd06521856e665be634cffb8216c', 16),
                    gmp_init('0x834145cb2b23fc76a99d499666959cff755605c2a079a57f8dbf1c0d9c6a32c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b5aa446549fe356d879f0ac8785584ae8993fbba7cda282d916f070374eb420', 16),
                    gmp_init('0x8c586199ffa2756674fc723605a69636334774a17d706e2994eaae1f671135c2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x995f45c7f61b40935fb97e3c1d18eedc041db00fecdf2e840f494d65b8aa3dcc', 16),
                    gmp_init('0x4833afea8bcc00f71da1a48344d7b09d7f410fbc3b83696efa47390717d60f3b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bbfb627e055b5d60cd76076fcde0dd549b514864bed455c61aa3cc31f7831a7', 16),
                    gmp_init('0xa3b043293b80bc0a703a2c5857b899cf11c3d4d728a71094cbc864c4e6c79d4f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x293cf8a497ef2f579ebea2b2fe7a261a4357dcea764fe49cf1d5604d1acd08d7', 16),
                    gmp_init('0x65f147bd9a9666c46e46cb834d0cb23d6673ace19aa783d1ead15fb40e6f6890', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x491bc3e51487c7fe2787e93f0d7bede7c88684e053f0c50e864cbc95d5cacf5c', 16),
                    gmp_init('0x90b1f50ef8818290224c013eb720ee2b9d59542c8f5961a9975be920c3f04373', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x52c358c421aae3b9d63414d5f3d92c341fd68cfe140081f4724f7e5cd35090a', 16),
                    gmp_init('0x56f2d2d516e5951b11a83e2ac606f1671c4e9458f435f4608efd8defb28db76d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e0e8acad3b380eca8e6ad1065cab2060e7b56159736a5377cc0b20b9b7f0107', 16),
                    gmp_init('0x117dc928947334b7c3dfe28b4af5e3c1ed641c35ab7deb7f329bbc37b5f2109b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8df8d827e3455baac31f9bd962cddf24c27f25726e1e405d9e855ed661441f85', 16),
                    gmp_init('0x4c18c93e7c707088a3350a85db536c20f548dccf9f6797d01f62a3a48fcb7473', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x391b64b85bb59d611c49ab20abafe51e2f39e1fe67018d6c9aab05a382e8d673', 16),
                    gmp_init('0x229e929001b5ebeb2b1bc87da78137177fc50f6e471558c86a21b79a3bf5d2a9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62b11b0c5c24311b8f5f9837a9bb281ddad49a35b703789cf0e1f9e0d0c50bcd', 16),
                    gmp_init('0x91f0c9ed6922e1d0d8bd326528762d63f1dd833f1f4eda5a1543821fd942ee95', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a2164ef76314a4aa933a9b577733551c16ba8d7e53b11b70675e8c2f809881c', 16),
                    gmp_init('0x15e13eb14a3bf6e23ce22d4ba496fb695bb78a54fe7d7fec12845f695aa7d662', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61a75c3006670ac36e7a7ee0c5c8f6122d6a091d30f544b04b4437a37718e1d1', 16),
                    gmp_init('0x89f9fad929b1713ac6e806c66c601b75c9abba8405e2ea1de209aa39b81bb0bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59680e0f79aa00e7560139caaffcdc33dcb0fcc8803a366d51d54129d52d35a9', 16),
                    gmp_init('0x41d08407ca728e28bc91b5a43709bf90f4749d0b62558c267d4cd31558afb91f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f482aad71fba68c7c413f3cbab0a503d1ac93a61a26a96c56c4fc44f4ac8c9c', 16),
                    gmp_init('0x9b0763d58d06df7fa0de6a09dc462e0d8fff4a5ca3bfd5d1516653ff8851d85e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86c32533e10815ffa02af867495b14234cbe204d9127625ec301a28380283a0a', 16),
                    gmp_init('0xa0d94e079776d0ce10f119a470c6c024468102b7281cfba60dc3347059137b89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x30009417d085be407a1403380e93c839161f0e41dccdbfd5a88c09bc60d54374', 16),
                    gmp_init('0x43f5bab039d847cc2eba4afbb8c15db49a9134128b0f9ea3b142635b41793fa5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26fc8c7125c1a98e094d5669c956d7c484c440d68407b56664f3cca975218ddf', 16),
                    gmp_init('0x4b1eec1256104b8eab570679da8685ebf9e40698b06456648a9c3b0d502e5939', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fab72a2aac75efebc0564d37a20f729ee800a8c0c3b46223b0f20584640eece', 16),
                    gmp_init('0x4a5092e577f07148bd6d49c35f3e89e13b1601b041cfdc732c30997bebfcc36b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7d1279f098dded5fb2fe62a3ec2ec439ac9cda54107cc8dbdf7662816fb2e80f', 16),
                    gmp_init('0x4cc0d367d411f8572587ffde3aeb70547001059b9292b11616cea14c32d1f661', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ccb69f52403bc8715a8ce2f7a2e5082d0b075d5c6ce8e8e51cebf7fffc7c5b1', 16),
                    gmp_init('0x76bcc78c7a4db067da129a7816d229acb33e7a8712bad58a45d099d1ca759b97', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cd621809099df2878412840dd256d70aae11d99de1e22a08cfcf9ae4a51623f', 16),
                    gmp_init('0x5e7e7d0e2edf00cc9e7c02d31316b2ffd817aaf748f5d4164da4fbbc23358488', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4ec09bcf770f27785fbf23fe98ce808ab3347ab5843699038687fca8ecc51f20', 16),
                    gmp_init('0x8dee7716bc93f961b185ddc5352a27e347a4f69f2fb297d6059298b0f0e13564', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2226cb8132ce7e3532060f1ba72ff1c15c71da948d55e3fcc05801c3979e620b', 16),
                    gmp_init('0xa7664b531500e72e960334a1af15031af8928b5e3edc6d2f9a218cf8069c3672', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6140eaab005a28f4c1c9db17b870d87648b7edf4c502d80798b8255a3f42eb45', 16),
                    gmp_init('0x832d94f15c22f0c8b35d8c4568192cbab43dc942ab6bbd457afd9f21e8d14627', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d73aa993b2d33a34517980c877859c568ed2230d449012c56190aeacc7fa898', 16),
                    gmp_init('0x5466efcd35cab32e23a35c95ce32071173748f79b7684cbdabef7916defbd892', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5d7999b58121d9245d3be759695a2562d37f9fd2e92113c5e18e12bf6cdf75da', 16),
                    gmp_init('0x74ae03e4aeafc178bf916e28a738c350ac94f2ca3f912a7f71f2aae92835fe91', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88de80655a77110aa6c43cb1aac6d9c74123112e57e13aa37e372ab4c67baef4', 16),
                    gmp_init('0x2a8dca70afb2248ea4011b3ac145826b1d6885f89fafa12c1a5973deb7ced3f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91e3fabfc537592bf06c04f8596e162678a28f5df1ef9008d3f13806f18c5935', 16),
                    gmp_init('0x50408257196bdf14da342547c7fbb67262a0df53270b871c56f17179704fd063', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x959daa2bfb6461251d41c49264bc15235e5bfcb27bc6d7c443b106bdc3a41832', 16),
                    gmp_init('0xa5ee272544009502025246df88bab256899521cf75c9cf6a3c2b35aa02d065d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5143091179005be97e88dcdda10b64753fbe96c4cb974bcb9702cef6280de39a', 16),
                    gmp_init('0x4a7d14e626b231283585fb828a7f77a9bb6da74b2d0a61778efdcde83a89e8f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1cf7ef2c819a48f28d506ee30526468403354ca3faf69e46506c36aeaa00d3f2', 16),
                    gmp_init('0x134d313f9c9ce7ba3965e0531ac5a970b345a78783319999f320d6dc0a496c87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x861beddb499df76c73b60e1227be95d86ccc2d3879da3318c745cc4351ef80c8', 16),
                    gmp_init('0x6a54c8060f46b77363eb6467db06a70f8636d459426af08e02827054b63a282c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d82dea6cf8c1f950642bfa363d5febe8e28bbbed311392233b51a553314584f', 16),
                    gmp_init('0x46ed554882db0fd35667027e14166e3dbe94eae467ae4128a7e31abf7c7e278f', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x26b4f390d3b352d13ad2a4a0c5cf2b4e0b02613dd6d64cc5e418a160342978f8', 16),
                    gmp_init('0x425ab796b189d91adaebca9ef7994530de5d6a7ca2198fcff29e55110d3c823e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x825975a9d346c5701ed5d6b238ffafe2989c325d1a4c9762841800cc49bbd582', 16),
                    gmp_init('0x82e56f827552b04bc08226509df457eea8abca521c2c6587705e9f93141990a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3bd8f0436a45921b1258f437eaadbec17aef5a62457571a4b4662d00a4ea746f', 16),
                    gmp_init('0x3d4afdc5213a448420aa5c2fabbe01ecbd506b1b81a5cb9866f420267548f95d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x57ac2aca4a0e33b982cbe55b77ed50681387fc9343bca457bc7297f244fcc469', 16),
                    gmp_init('0x6eb6199a137f1449d234e1d80510b2e0177289ae37cdef3f3265fd45ec8dc7c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x90fcec85131184aa106fb92d8e08fc38ab8da52a93bebcc67511358afb030ed', 16),
                    gmp_init('0x3b660aafc61214548fcd572eec41e1f5d2ced71f39346cac9de7e6e8dceb2be3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x338f5dceffaecda4140bbfa95ac3850088607340d64b9932bceb49e7e1d5f78c', 16),
                    gmp_init('0x65a532e7cb4e09bcbe2cce4ec1e8821d92d2233cea5f0725add98eec66e91fa1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c081eb83d1de56cdee7c279c360e6162b055717fe3d4db2ac9b304238757efb', 16),
                    gmp_init('0x46bfc2a753c2e8c896e701be7b2ea20bcb24a1262634fe037c482f871b74ae8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ead5d09ad3849c1c6a5ff746a867359407a25aec60af819a25d573a62b23959', 16),
                    gmp_init('0x17054ed3c233fe2d2d2c7080bc7dc43a928200503ef89427ae6062b260513695', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4d467a0faba139909894c58ace7deba54cfb61ee2b1c9887967a96a8a2e4bf1c', 16),
                    gmp_init('0xa1152a3209b7d3545294bc1fb449bc44f3ad05f1b12eaa5c94811d9b3b7da503', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x565eab4c91f5653e59b28393b736baee0900e28e121970b7fe9372ae23bee231', 16),
                    gmp_init('0x950e722049db3caac204b21a5218969b0758c2fd672f80d0d678fcecc65d8f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e94564b0a5957df4ddc282aebef31c32b1f80542507437e27e34b34eedff9d8', 16),
                    gmp_init('0xa981732fd1e0662323d55353766e92dded0fdae11936de6219962a445c27f23f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1659c1be532f38106230c75606102985a221ceefade05da25a103e1f7a244aaa', 16),
                    gmp_init('0x29b4b6372ea308d2e75e23363fde5b7b60fef4c1290695702e3c8b020dd59b18', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ceded8a05847924fe5af90f33f1fadf1c8467dc2cd24779c549946cfd2a4645', 16),
                    gmp_init('0x2f5ab90864726f50eefb54abc2da2ffbe982ceb0f47ca53b36e8175421dadfe4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x418d3a6f89bd50141c9c307ee4c9ca856d3670a092ff6cba7f76928849bfa6db', 16),
                    gmp_init('0x6429834ec64008926e8dd90cae07aeb12902baf53a2dd721d90002ead58301c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9f22e02264385a48ede43deca49898a029cab94d584470fe1fbc916fed9ea91b', 16),
                    gmp_init('0x18f903ddace6d3081667cdb3d221143d636828af091c3ba97a9335cb505d0da7', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa7deface50515841719599d0f599aaa0904c36b0857957af78914391d755cd5a', 16),
                    gmp_init('0x6b3400ed49acfa83226875d78342f630b4384af00f680a235be65cae31d62366', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x25e212228fa4ab1d375f093108eb070368ca337baea8c5c288a95f45e21fec11', 16),
                    gmp_init('0x3a77d3ee59198e17394d199ff6f07400f8a82cbd61d4022b04fcef6735926b46', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6e5e8bc38b6c249c0f9dd2a249d5adbe8ce1273408fbd8ee2d9632357f4f9c40', 16),
                    gmp_init('0x8051c3337c15629ced2b26356036782e5fd54279e0fbb7a58c0130f49435d9f9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ac4f868e59b3627f7f49f018b2b5643619bb1f84e1b840d1a00292a3b1e4604', 16),
                    gmp_init('0x609b02744402eca668a19b9d58350df318fe10dcfc4d4443b0ce3177f0a9eec0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ac3853f12bab9e29f61db49b1cef59fc141684ecabdc2878ea7af4095db3f5c', 16),
                    gmp_init('0x925312ed7a55615113a8da06436450eda3066dd9d4f9266d0d80d02a85bf64d4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x644169955f829d972e8cc1777c6365176fddeb28b63cfe9ced8d44cbd7bc201c', 16),
                    gmp_init('0x9018149030fd3da36dafe2dd6b8aa93ae0cd68a436a360a5f92277682678bdbb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x423472f1e2ad81f630d972a5ee0ec24913e6aef35813586e0c18912e147fb0f3', 16),
                    gmp_init('0x55851a240daf61b3cd36b16f7ec442909f509e394377eca38bbc4605d7c740d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5a8c266a3f754eaf8ce36fd9a9887f7e5dc8c8c936b1935cb435865056d81528', 16),
                    gmp_init('0x5f3a3c492ed7a6033efd500850b48037a4d379e7d95da2a0f8be500251775ac9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x892f133eb90242826d87d77835b28aa4e693d3a2117135841dd24a7d8a033f07', 16),
                    gmp_init('0x703f3a4d354a18afd2a04dd83ee5919fabd5ba7cf56b7ea79d45990f264264da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42138132bf0d5b5991e2c296e248cf3909fad30587d2ca407075e8be57360f1c', 16),
                    gmp_init('0x18cc5c5f5a3f9661041c60e74ee752c0eaf36054622f3b04f83a2b7e768b0fa4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a506557020b44ed74ed2a324884a1eee0c50efa12c8fa6d53dfe17c2d0fa4ad', 16),
                    gmp_init('0x4e3a041483ed41222a167b908d01e557c612a2c8091a15cae4aca7a44c750d89', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81ccd803f263b72954a47f5c81cf7bde03649523e8d723ba864b0788d07bf3ae', 16),
                    gmp_init('0x92e070007accc19c9bc15f9223a9638c6f579dc192dd19b73a44a68477272248', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b07c08841f242392562200d7ea8f904ae71e8b584941567e0922ece78917aa0', 16),
                    gmp_init('0x11fc4b242dbf7939cc464e096ebb31bae559fca1c10766e133802226a1fef07e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a14167c236c12817ca207edad78b0f3555e0aaed7e4483ac689e509daee465', 16),
                    gmp_init('0x63c0f9de5b907388065fc515b155381b525d3afcd7f281d1b6a4cc052981a38b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3c2f53d739e1a808afc316e4c38c3f684e249b36f493687ebc878b7b304ea990', 16),
                    gmp_init('0x8a2092ad7674f13537ec2a9ce7e63c03013401d5b2911e579e9a767ea7aaef7d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x61d6ae0995b5c1978fae09609f048ef48a3e19cb24a2e4d68fd1ea6f630273ba', 16),
                    gmp_init('0x220d8c081f33e283cacad1480cfd7c6c7a6618c1e2453d51555ff88fe1852a4e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x71914beba7f860efa53a4bbb0c97928976a9b3adb8725de3dc3ee14fb81bcf69', 16),
                    gmp_init('0x4c16e0da7f72d0b709677b103939414853b176e50252bc650c8efe0f9d470096', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc7d88584938f2476a4b9aa5f9a22be27f09bc95e65ad0b5bc5707cadd755200', 16),
                    gmp_init('0x46cee9307873fdb2f685b9b491d720a560461b2d70bd9b69b987d52e2305aeb1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x512948bdb8f020af87d1135d642023e66df0561c4454534943229f551757d61e', 16),
                    gmp_init('0x591e0573b7a5042ea9b7ee0f8255efbd09ac21783a58d7a6d064737e37ea130c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78dfb7116904cb4f785cd74409c6f4ab7518c99318fc50bb104f03f5421e5370', 16),
                    gmp_init('0x425a81b761bd561e0ddca6813e17913daed400c55f3be68532516c16f82675f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x55dd5b187a9f43ac5b89013a89d2b959f13a5b8cb4377d5308ff126cd90bcac2', 16),
                    gmp_init('0x133a357be94b8d92ef08a886b31d00dcaf68fd753b028000539ff23740f33c71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d8560c78809ebb202cf83f38b41f62fd230a620de2126ecdba06f4157631db0', 16),
                    gmp_init('0x7a637474a1b7ed974ed20b0ebf663ffab3f000f50fbe4ba62d7fd997ea8bc2c4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa8e7e7fa5ca2b69666f6ec019ff4998a5a3d4a9b02576c42773b8d9da9aae2a8', 16),
                    gmp_init('0x55b380c78cb3d14753240c24b86f160507bf5088d2675403c6d2871afc1baa54', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4cbfc11226f160ebb34ea2fd8369f8c9f0767fd0fe6ad59ddc2ee295d3fc9056', 16),
                    gmp_init('0x249e6eb58c40a92717d31a92a799e3ab56ef3653822c77dad0ab58eeaa8ff689', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x515df7f1165b82e89ca6135d8e2d74d9d34482046db128f23b160447d4f90b0d', 16),
                    gmp_init('0xa2ad3ff37def494c80d66d0f5947ad2e51debfa5354960084cf8697bc99a9426', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96ee71009c516ff4f3df49a9530feb1b1ca1ff61047dfd5b67a83b17af1673e', 16),
                    gmp_init('0x9231e022a0c5c10d0218223962deffbf4bbe377f3a274420b1a6d785708bc10e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e1d03cdb8a1fbd9067585a6919e6833fe2b6730fcf599bf3fb10100cb9ce250', 16),
                    gmp_init('0x6c04981d2d525ae362c96112b406f53ed3ca09eb50322f68c49d4a5bab38b3ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b28273f89c865177d1004fcc1e2ccc42fa3c94f68331aa4639c136bbf51481e', 16),
                    gmp_init('0x72e1bc3648c1121c5c623bca28edeff93ccfb33aa6cc4a7b7bb5bb3c0ae9f718', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x247a8b025d947e8b2a6d757c25aefb9c98d07d47b5e67d8cc148a08498c2de8f', 16),
                    gmp_init('0xa4c44d9c5c568c9362e2ce7770e3708461a0b34680c4aa1e31d8ecb6199b5780', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x996a16d4d4d5bce47c0b45afb2762840e5d7ef8d4e83d9c1a1d2d1651f79a930', 16),
                    gmp_init('0x8710a431cd9cf9017d2784755b3ec2cefec06bd0e5dc1e78219d09be0cc1f823', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x26018d5cb3726a3d31deb682cb119eaf2d25b0c75d65344e2c11029c79bc035e', 16),
                    gmp_init('0x559e350427ed21cb7e72b192733779052990b2d9236e91d2c3609232c128eb50', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4f81ab230030d1c3315c52708b114614b0901311f948e6709aed6c40f0df4e8a', 16),
                    gmp_init('0x76e7485e35cd4749ba6e626e3dd4454bf9b7cf884d5456a0673dad099375d4d9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3e4d21ea7fe963906e2314a10ff174b188b57f1305dcc1eeea6eda43f0b16cca', 16),
                    gmp_init('0x42e385eeba3b17e8fc15e2778374fa8874caa84b03e6250e9c13e601f998d8b7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5cfbbfcc5752300394c6d1ff33cdfbb2bf4968baeb3f2491f8b2843969c0c285', 16),
                    gmp_init('0x31c808014cd141cdd7a22dfdcb091b5f8f8c598c979a62677e337579d0164bdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88d7f33f8c12ab9a248739945bdc491fbc330ab6c39bf732915c0b79fb6f2d62', 16),
                    gmp_init('0x210d9f19476accdf92bbeb954424c83113c98f2bb3a56e075f29c08ce181cc6f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x79c573fc49494c6b39897c697efbcc7f6d19c80bbc08658256fd1e5f47aa0a06', 16),
                    gmp_init('0x642f8f8669234661e3f794043ca9891ba9907d3b0bc1a64b204051c884dc40a6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x12d83e78c57d74886e51fcf0fcc2f82726ffc82fad18e57db038a403a9b041bd', 16),
                    gmp_init('0xa58e2e0433fbe7e3e643c56e5113853b14a8ce4432684f4145a5feb72ba8657a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb71dc23f4699071171004cfae27a72aef6b5640f3b64e0d63d73e546d286310', 16),
                    gmp_init('0xa89474b98687e90f796ee85eef1adfc5c589e6cc8621e3948a2170aee771b06d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x705efe7f306f9b4b9c58bb4f3d194fe168464f09e683ae6b6556f9ea747857c', 16),
                    gmp_init('0x94a81077c34eb6e3e7a25359da53ad45c4fee21808ac9035a6ff48819a2bbb23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x507692b052a1370b465bb68400f09790b3f596a3e684fa01bdf0ad247042cb', 16),
                    gmp_init('0xa4371c33ce072e30f4aba3f355cdad4dcfe24488529f359b065d6140ce55a43d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7154e7d1198248e8390f1107d9629c2145d9822a468dd99de0a2d65ebe5128f6', 16),
                    gmp_init('0x16340628445e856db06de891da543cf69beb0a6e6d9e58447c3c98a6c2348cd5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8e41816eaad5832b162e1cb821f8eb40251ffa4e5da4be9f685b2d33339a3be9', 16),
                    gmp_init('0x7191d0b8c95da765cda2304f96fb8c302495cd27652509679b1918f3a21dc2a3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa792498d5c33cb07161074170954699694ae215cf068423dea07a9362e3954c8', 16),
                    gmp_init('0x5303a7eeb5e126cc2c2fbfa2145c683f7c42c31dfbc4d60737a446822663b80', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2632ab7374ea62fa5374746e619ba8de711af276f87381d8780badb511ff9141', 16),
                    gmp_init('0x6ea4e5cf7630b94e5d0539e812761ba40f1d7f56e257b388a050ea78808f08e4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5801253bda48f01f278bcc3071ad77a58bd8cfbaa15b996bf5e601e7bc54fc25', 16),
                    gmp_init('0x83f1914d180d2648227a7fc5f2e745160ff46671964bf05bce7bf9ed5778adb0', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x381b4f1abc83094b8959ee37227d2da4fcbc3151b68b29af68bba091143fec2', 16),
                    gmp_init('0x6612b1ef5493a4367fc365215f3b40ed02c0bc9218fd1a40b3fec74b89af1985', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x58c64d1072a1648cef2f3ab5b371292b792dc1e7b93313aa53ad9030941b6168', 16),
                    gmp_init('0x8017ab49bd1e87c15ebe2fdbd1151a47541050272d9bbbbbea77e75bfbfe6bbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x10eae7c3d25af8c74c43420334bc0ba0bdd40a44efc79a25277e7fea308d14a6', 16),
                    gmp_init('0xa14f183d24d857da135294edf0d40bef5e6f9ee5dacd19b2d6d794b543b1254e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xe9210ee4f75a7c9a999c28d4a8c3b38d8bda26567d6e68ebec7a6e3cc039125', 16),
                    gmp_init('0x4a670945169b0b4b017e4e01a5fc5f43659422602ca4769a503a1e1db9d9bcf5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16264f0160e7488ebba0969726e43a0ea701e5fce05fdf3622ec20aed55f1b52', 16),
                    gmp_init('0x2c26935acc0428862dbf33dc6aa66588d583a27251715859add4fb6982c06385', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51cf763e2fbe1ffd60e8d5f7b0121925d481eb19863a44a5ad4433e21c0be11b', 16),
                    gmp_init('0x660de0f8c41269b416dc8c3a140ad9e4973733615fc9b7e4c9a44f642cf433a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x845adcf0ea64504af6d6becd4c941a24a28c498fba8fd515a8760836349ef71f', 16),
                    gmp_init('0x387063724f2bc8605110984106b1ed524264265823b003ca86946db39b41824f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7e23e7f487d437ce1872305d78fb81974f5b295c05727d45ef704332735a5d5e', 16),
                    gmp_init('0xccd1489cd5a0466dc29c23967c6073687ac9e82319e96287ccbb15e3ea89d57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x63707bfef33e3001f4a0ce8dfae6be15308486f3c038a1d31d50b63ea5530fe8', 16),
                    gmp_init('0x7d27a08b905e7849d4a1e9ed3fe9584fb9d1bd1214997a206785114a9e168085', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4bc032169b570191b5bdb9f4903d5a426944037c4cf529e949013f51056ecd88', 16),
                    gmp_init('0x5d0f729177fbfb8ebfe25798858d54b96a1df294353920c14d8131c0f3e944b2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26000212eb4ffd6f6c4bcaadd7f1ba924373cb54b63a32b067ca0a861b57c391', 16),
                    gmp_init('0x8a588632adea0ad03c5220170ac35f08ab121a1cc4e5a1faf4193bf7f742c392', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0a5366a1c2aa0245667184c1f1142d0e668e9642a09aa3a93f1f3d3b2cb430a', 16),
                    gmp_init('0x5fdd92bb1193d1fc7e6429477705d89123d3d6088366a697d4003f9322bfe228', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x756c71636a1cf266f05a43f159dcecf13381191755c0da273fa65dff9a93b082', 16),
                    gmp_init('0x9ed1e23dea6dbd50d210faf46c3b181297895be582cf5f475fafe3702bb37c47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x559a158dc59bd779521c9cdf9e519ea40cf19b3305c8fb4a6bc0d72c448ad689', 16),
                    gmp_init('0x4f31dcd886459426006664c4b2e4adf15863cd1e33c070cfc45fd5284851c602', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9929d58b8243800d821dd020a95981b73736b8c4835e98d5ad15e8880c1807f7', 16),
                    gmp_init('0x3a927b68b540b1f17f68da01e191eaed9db7ca7d4b1c16fdf5ced1e7569ad70d', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3ec00298d5f53bc6990079385fc8462e7a46173ecfabf7d9f5c6893b690b7bc7', 16),
                    gmp_init('0xb1ab91da62614cc574b7e107fa43b24646e37d2c81fe1ca0e5b2f790d14b838', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8999167b5774ab491c5fe510f4c20c74266c9e98e734f390d3d6cefe1b051a4c', 16),
                    gmp_init('0x19e0b601522a9d8be45a30d1f488690a85614f39d7af7b4fecc2b4de8deca896', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ce04d5dafb41ec83d1629fe1a01fb34f355409d5ad9ef1617fa2334d6fa16da', 16),
                    gmp_init('0xb5c6e2c8201eb304fe9e0a654588fcd9b0ea83e762090293c0014e932ee3957', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3d88dfca393e2475326157ccd05c183595cda20d82c9d1f671be573054379878', 16),
                    gmp_init('0x2b3319ed12849824205ce38769c075b1c2876c3a5b020b1d2ae2d94ba66bc1ff', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8f57b24a74aa316c77938637da6e98336bcfc6824038dfd88dd01fe9dbd60a61', 16),
                    gmp_init('0x14ba1727c801a7c0385d6d7cbc302ffe5697a7ece927dc460768437a74c78acb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1bbcd171aa0d1e9493381163e188f9a215c81e2c4e34248376e3031342d56ad9', 16),
                    gmp_init('0x90a0b07bdd29ab8c888a375e855df9a23311953465961fe2ad1b263876ef6f17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x969be929d6dec2dd29a272924dfcf651ce0042632ba51153e9ff268399ab838f', 16),
                    gmp_init('0x30afefd94d665537c2d83051bf7e041761d50d889647f0ecf04ea2692eb5d9ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x572349e8dd6a1b372e923ef9bc229e79ff790876fb4e7f6462d8a3ec5ef91501', 16),
                    gmp_init('0x62631195f8951b87b1fed374e7e878def31a5e80951f1055ea017aa2034dad06', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xce2090a9fe29c084ffb746ec69fbafcbb5d79db007a042f5f17ae0a3365d7ff', 16),
                    gmp_init('0x91394f133d5d77163c2778ba252e554bf163a8ac9b7ae879095b602e004c6c1c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7ab93a3f7a9ac2d0a4d8ad2cd1938a76f0fbb40533af3ab935e4bdf1fab3bd65', 16),
                    gmp_init('0x5d251064bb74177201bbb90fa46ce2c8ce5cdb8841edcdb3038653b3cd35f9c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78d65258734ad1ee975f294dc5e52f8166928599fd1eb0acae365510efae4046', 16),
                    gmp_init('0x9b1e8c2c654d529ed12b5248ea95836080861e8c97d1b3fd0637f8a93a6cdcec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x461ab39744d1c6ee99f4022407c00a63cbd7e8c352af5d59a1d99a4641c71d3a', 16),
                    gmp_init('0x4e8a0ef0c399776cf603bbe79ca894354c43e0748319836a5322589c4ec4282f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa86442e58229a19730740d6ef0be477090b86f28ef86651924dd72deee931fc7', 16),
                    gmp_init('0x6bcd2597e1796061dd1fc2b30d43ce2c48c879cff4c12d627bb527984bf62b7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7294439c1411b82dc13ee7e6b8d12141b43808293dd09a942b4a3b52a80de2e4', 16),
                    gmp_init('0x4a231cb3ed626917783dbacb145678c126841c3c8028f772e070ddf86ca2096c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa9c7fdbd311199b7a89e0fd590049b9a34dc7ca3a00f796dfd184d22165afa65', 16),
                    gmp_init('0x1086737df6e483219a77b622bc131ea71dc95aab006f4f2b436b498b75ce688b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9106f7b75648e3fe09ac5c026899438afc9fb91ddaf4efff61d016c4a9202500', 16),
                    gmp_init('0x14dc0f3ac773b8f50a02e6fe23d7889527cc2e3fc69c5761efd938e66057d2f3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ee7212ef9303d5a036df5cb10f3b7583c6301c6c0ec2d6ec26523fee727b6fb', 16),
                    gmp_init('0x4c69609658e42d7f1b511271ca79ece4085cff10eca244fb493ff307dd2222f4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6051739157da6afb49d0b86f653309b3c737f146b9a2ae75759e420e2fa65bfd', 16),
                    gmp_init('0xd05f1ce221b2fa259cfff9a80360ab23552d2b65e4e4e679f1edb60712e7b22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3ab91b919b28e67d40f85a31517e900560ee53110bc902e4d5581ab224f84f7c', 16),
                    gmp_init('0x4404d35746938661561d7bf6a678d834085d6d879a1e7908acf7f130ddd1e678', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x32f8abb78fda44869c1fc9e5acad12e34f20439a683f585d17e4ac59922afc1a', 16),
                    gmp_init('0x991aa6f502e1268b8c7891b6721dac36bbf27ec26998293fddc576ae3ab72ff8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89fd702c328d8a1cf15f8ffe06c607cb6219ef79920180dbc54a729e02b8e445', 16),
                    gmp_init('0x3573bd6c60d876b74032fa81d9e398b64ab0866f47780c1f1903295e39e09df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc8ecfb6a94a01581581b09a4b9341fddc7c8ba5078b9aeb2e2ad4b482adf74d', 16),
                    gmp_init('0x6e13c27d913918c952ae5eee067258a0382b8da1606e3631cb97da08b6acb2df', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c899eb869b39b7329cd547d4a61a87ad3b10dcffbbc5e807ecafdf6444ead37', 16),
                    gmp_init('0x9f8f121cd09540d155e9ad362fa728dc25c18300ad2e0769181fead29ce970eb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x18be2978f9fc5ef9e0b25a65c4d9d872b92d7c6e7d8a52fdeda5a47b898cc000', 16),
                    gmp_init('0x2a7a0600075412fdffea72aa186ad10e367fd307e9732c79447ca02653d8c30c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7959b4e56f40d6653f6a7be243341b2df20cf7734c7ea0a0408798b9bfd2c9a4', 16),
                    gmp_init('0x319e251e150dd43faa40c47f29f9b0595f48f3413adcc73433e754d0fd6dfae2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51436f72a023077662a0d62f1204bca4aae9032cd432853ceba5e69e8328d674', 16),
                    gmp_init('0x2b38dc6618eebf803fec9f28b9e44870cc36515cde78aa196b3b69b7f778703', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa3d99488d05f0d3c9ef5e06ddc9349d482d1a6d03db94c4021771bc8bab8aa03', 16),
                    gmp_init('0x114b1c016a63922cfbb2d7c21b8688fed82b003163c85c3b7763e1d10a4d15e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xc471a2691076482af4e5cbf253e76c9708870b7ada9719ba8d599b399b9c062', 16),
                    gmp_init('0x6bad174944c4e1811cef912dd078c226d4e5b101c667280194dd774d807fca78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41c623297a8848ae3a7260967fd573811cf4adf5ca0e62e6c3c9ea1ba8328a00', 16),
                    gmp_init('0x51892220aa5a90e2e588eb5f9bfa1992e2106a6964830809dde985c6cda45e43', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a779ae1a315d38994697fdda511e8397e3ba384d126e45ac561a187ccbdf713', 16),
                    gmp_init('0x2239b2ad03f5ef1e093d64af929236af0a9996da56b93c19b5541501b6418261', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x635872217af20aaa27c02a8ad97c626dbdf752198773980cbeff68802cf3238c', 16),
                    gmp_init('0x4304ea6f1a626ca6b9143f09a975138a6750f15ed5ffa7fcb9f40d86d059f9f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8b3e8ccdf82b55ad6e5d2b0bd7fbe7e73d470d855828de29345477410585607', 16),
                    gmp_init('0x7beccd96bff1f138e4ea913a8e9b6afb470f95e2ed46998ca663ed12d404d84f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x881627fe641a326e640d62117891cd0f4f99d3317767161b745f770be2b01ce6', 16),
                    gmp_init('0xa826caf7ee8f580d313b53846319aab7e8927461d0ca11859a857e4aab5a899d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa6a3e69e63cc6648e05c5082dc70df6edba427461b55125c6a3c8931ce26c736', 16),
                    gmp_init('0x91d4e9daadadf3436f52f48d5d44175bafe6fdcaba57382b044070c7ad1f24cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1707002264be7bbde19b989959737920b1ea626eb51c93c258a9a22f0c3a4ada', 16),
                    gmp_init('0x6404a3405b3cefdc5a042105eb1e05692a350007ba5be94bd65c40dbeb18dc7a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bfb0c30a49a5bd59defde3f49892224ef89e47df1f23a7df04c7a3fd431f459', 16),
                    gmp_init('0x803d9e97a7e78ab81ca09f77326d45fbff2c65dcdbe210b8bce259a2b2a2867e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20a725a08ef51137ec9467f26e8a0ffd925ebf893de134110143bec589370fff', 16),
                    gmp_init('0x1538503c2e1841e136debaa6c82f42fa087257a4b0bd271fb081e0c162b621b5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7d44b11a330973c0e61c23819b2cce85b8755b995efb3f27598b76429f7d4ffa', 16),
                    gmp_init('0x649f55b820c2634e476d4b376d4df1c643ef2a90c788592930b7aabfce0d00a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ce013ce150c61e16c17701fc3dcfe24c989e33c94a8538ec594875c78a9e1f3', 16),
                    gmp_init('0x984b77536c443029ae3cd92d8e26084ad7609286f223074aeddb99a72707b04f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4c14dd7b3a4a98d4464e9dbf38d36206499619f311fce35494e64ac9f86d0ef2', 16),
                    gmp_init('0xa7301de355c83049b1a2628f4ce8884d8110c29d50cf5ef9499a7a9a51e7f9ba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x847f345f069762080d523d7a1cf7ea5219b6944b1dfffea6f3a9e84941c16383', 16),
                    gmp_init('0xa56706ab8937b3ec87a2cdc3def124d213f7116acee207b123810208fa46751b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x76a10ce25bf1f54c94ed157807e8de22eafc35bf74c080b9c1543f0635beaae4', 16),
                    gmp_init('0x7c3104ebe7e44af1dcc55b1478989af24dbaa407bf6204f82ab2cf02cf432d8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x43ff46f1a193b8ead56c528a1d8487384db678507acb6077b5583de6cd521e40', 16),
                    gmp_init('0xa3b4d016c45728abd7f6a9e87af9aabeb8cabb0bf8a3a3664f6a00324f6a5a47', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d507760a0126b98f9fb14bf91e94b2331dc648b56f6f4c3aba6ec93c2c1c71b', 16),
                    gmp_init('0x7c7ac0ac378e1382a9a2191eb91d01053231699215eb754651320222be4683a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x913d9139167bd6e73484aefe66275a52838d856529d984bf35aeffc974e6b727', 16),
                    gmp_init('0x1c3805850de18f6b90fcb3b7012d767fb6748e3983c33723aa9e920c69702d43', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4ebc9484f9cbd9733a2b723400b86accb6453268155777e48d062e2693cb298d', 16),
                    gmp_init('0x502b898fd3a66bd5fc99884253e54b1ec801db8d5534eff449e12984ae09ace6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6328a06b71ca22d1af45904792fa9ec34d588d3cca6898406b136ad43719243b', 16),
                    gmp_init('0x61ae6e511c44bc3f23eb78bcffd7e6a06b5f421b0b5fe9e9c982d0ad018e31dc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6b454f42afae22a90c00cab3f8ee9c26d8f42e1e9b7bceff8557bd2e6aa861ba', 16),
                    gmp_init('0x4628abbbcb7a59b134f2b574ea868b28762e8563b18cbf5a2228e4d3ac008818', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e0d8d9ca8285d448722b07e94332d0dbf363b042cc5f260ff1dcff9abed4e9c', 16),
                    gmp_init('0x9f4319139baa7e0ed1e540c0ebc702ba8f4da00b8982325388357a6a04b1e1b9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66665bcf3f7eb37a40edb2209e4626fa239cb5090df32b83a645983895fd3394', 16),
                    gmp_init('0x62a044ff46c712af555c4cb1978d5091bd6de08bd8cbb90683667a7094f25079', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a44d92851a288e627b6d786925434866fd7601bfcaec89d213077029f0e7ba5', 16),
                    gmp_init('0x7217788f249c73782146052a4a9a3ce95f16760c4f55e178ddb5f6e90aed02c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x17690b2757ea84402d3b96025800f9bb14ebdb6c727525d32335910195a59205', 16),
                    gmp_init('0xd0741d593738b80a5cd113b07aac1d79a238df8a63c361457c0e6995f1519dd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x965abb441af48d4e9bb124358e5e5ca1836771335bd90689eeeb8f43c930ed0d', 16),
                    gmp_init('0x8de6f1dfb38b4f56248420d18727fabc422ffcb72b91b6f7c5129fd81f5d69c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23034a944a3d5f4f3e28be359f3f134ba30f93c57dd09dc0173557ee34b78642', 16),
                    gmp_init('0x5543047a8ecf459f9f4eae01b79f5002c0e684a72577004146d9e174303bb258', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5bcc737cb60eec90906b13e555ae29fe97a9a9f6a9d9557e58a136471a18b5d2', 16),
                    gmp_init('0x2637feca46015a08496f3b6f3bbdd436043e71ae86e9256019addc5b59ee7f7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x221489f3e451898d27705763c805bd2ac960b838e89a4091bf6744b2dd845bde', 16),
                    gmp_init('0x3978564fc2f40ab7d669f119a352d745ac566bab76bc8a1f035bfa78af396591', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8243a0d4b467a33109b9907a09c7a865beb27d92b19890d103309894f1b7b96e', 16),
                    gmp_init('0x7f90b9a78639358d102c6a29d633e55992cd3187ad238c6f00794ce88f6ac2aa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f469e6cfc17c2fc5bb27602e1446b8f4686744fcfd9006982e8711f895a1c9b', 16),
                    gmp_init('0xa13e3c34a9d8f70e42dc35f626fee8a175994ecf79eadb738d9da1df5c1aee67', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa0315c063eb83377edc4ab55aabaab3f1685d78b5b6c601d3a21a5e1efc56c12', 16),
                    gmp_init('0x37762c4edb477b2122382de983a993a0cb477c173db93ae38f95ec3e8317df26', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c658cb770a3f1598a91da2b1a2a39c251de80194f86512505edb67e34dafaef', 16),
                    gmp_init('0x22081f9b829479fb09c36476528b780bac0e2c625bbd5bd369bc6237fd743e5a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9e4ad3968635724262210af41be503b9566352df1971f28a11fd23a13c96711c', 16),
                    gmp_init('0x4913039e13c6d72379ee55c877db0b7d25df2ad2299546067fb7fda74b15e744', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x36646af3cc1575f4d564c4cf8e05e0cc4271e8b62a2783e0e5e12ac1cf5c9aa6', 16),
                    gmp_init('0xa439966f576f338c1416734f1d66ca8e546e5aa92eda5b9945249811b2bc35d1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4e715646c134dc3cc935e5d27d61fffa2871e9aa32ba9544a6a75051564fe88f', 16),
                    gmp_init('0x68610f645fcdf2f03b82ccc9726871154c969156696a74b6a21f1cafa87ac8a2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xb7ce4acaebffde5340cd53bdaa9b1f8b12f460b943d0e642806fac140896df0', 16),
                    gmp_init('0xa14d591c193f6245b9eb0b1186a8d784e894b86f10a3015bcd4e5a73d8827a13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1f6f8838cd28a29a0faa628b25d9117d4c8bb68449c354bfc5ec6ae1a5cc6d5b', 16),
                    gmp_init('0xa261af6994663c050ade02f3bf05056cb8dcda2074f15bc8e5dd8d03fa9fd348', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x96ef1e449c772ccb06e56d63257d101ba7034e6dc2abe4b5c6e53b30d66e54ee', 16),
                    gmp_init('0x98b04e30ad1ce72ab397f5f075c3018deaa8ffd21d1796016613082f3492dd7f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26eafd26dd2fab402440d776837ee9790dc7242c7462dff2447c6a49007e463b', 16),
                    gmp_init('0x4735c4f26b6a56c1db5b4bd625bfca5665cbb838b0c91bdaad2ce9836fde7220', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa159f76a37343f5e811f2716bfe0a231295f7420103ffed8d35e8883303ced0a', 16),
                    gmp_init('0x60e2d55a5abbc95e2606ae1b3e6b95f613b66c6e6122b22280d49ff21d086439', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x60f817488afb7b4c8d0e8bbbb2d555ca85ff18d743be835acd4931793814c26d', 16),
                    gmp_init('0x871b41e9eb469dceb506455463a30f0d62292504342e9fd7b799255227723579', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x857e26b7379af3121a5c36052436b929aeb821ebe3e2e873b56fde342bcaa30d', 16),
                    gmp_init('0x703b50bdbd6dd3affe7d9229417989adad6847115ff27181fff2af7b635d3f0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5fca3ac363a28d47023a1ad0542b736171654cd37b5f353910cdcd83c530683c', 16),
                    gmp_init('0x439c40cad5f4dfbd630f9f570f9552e8475a59c5730ca396407ee722c5af2e2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa339fcfefc855a7d84c7f73dd6719aa3d1f19c8c3e8a5a5f3ed4c6bedadacaa2', 16),
                    gmp_init('0x4404fe06dd96a6b3a1e4099b38b9baa811a266d97951d6abf39b4d4d86e69204', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x53bb5e4c3e581d1aaae358281f87e8abe574f1696fe29af69455002d3a8607a5', 16),
                    gmp_init('0x75b4257d21199cba3a192b4fe3743f449515d368d580fd3bc08431b594f68513', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x687ff18d3a59fad7c53d0f803b13b689c2ca88bddcff6f17ddff7a4e0b31870e', 16),
                    gmp_init('0x18c464bd4a041a1caf608f6ab4d0246ad87e53aef5f2aa34035097d964d18c59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x550c02a0f950e33c8ec36492b6c3ad5cdf0e1cd5927bbf0a18beb1d771374147', 16),
                    gmp_init('0x9a895d6774091e3e751ec68f48c25e84aed39a5c81ad6273fc1d6a88e10cbb0b', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x7363f06f60a9210e42728bfb79b18e334614ff4ff7c948237c3b1685feb01914', 16),
                    gmp_init('0xa06e6cce38c3103787b34e77f5f3d87938bcc3f7683ef0c95ced6e127d5a37fa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1296dbf2420d12fc4bcca989b1ae1f1e3a4f730ddf16a61c6bbd924c7b2d6bcd', 16),
                    gmp_init('0x109bdb088b9a5f1b19bfec303bd3aca641ce863df269776cc756335d91014573', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b354c877b37c81c1e8024ed32276d987775e358fe5e0b7c96e22edddd3a4035', 16),
                    gmp_init('0x1ec59f11e49482736f676d05cd9d81ed4434a53b43dacb2a6335c17e92365c28', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x869644e2d65ba7940ee15affd009919a0bfdf7a9b8dfc71665981ebed37aa8c7', 16),
                    gmp_init('0x68f2a7dec2ee0ff91e537ffccad649983bcf213cf6daf53bcf21acc22dcccaab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5c1818526d2965b180d6ff78a3639342bf51418a9c2d07af3e9e6aede8d95013', 16),
                    gmp_init('0x8043a0dc3ae4d1bf709cb1067d8d2da6612ba2e5ac120011401c20e2a144a211', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cbcf9f0f5cfb2de657efde980eec1614d3bfc22825197912fc3d89dfe966917', 16),
                    gmp_init('0x553514798e6627e301a0ab0bec7a47df9433c71e892cc92148c9139601a39177', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26a446a24883c133611cb90833c183334db9de5eaa37189676e559790e659f03', 16),
                    gmp_init('0x9e78a78a8080233bcb7cec3c727043c8a95887f232d23860085accd418753f79', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1388e472704f90566b45b723360638780e0271a794839179ed935cec5c8cc77a', 16),
                    gmp_init('0x2f13bf2c6f560991a5d10be01980e0f9103addd7fdbf3dc6d879ca05c178379d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1ed741126cb720a836298134016ece419b0f2fcd7acc70db4ef33a8061c96ab9', 16),
                    gmp_init('0x2998c4675bdaf53a3dba5edaf123c2024f56d3f27b48ade964edde10341f1dbe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x713d6fcaf63fbb43bf82336b05ebec757dbe5db277692f3232b98eaac2d7c767', 16),
                    gmp_init('0x7c17cb80e3e577c09e62ed4bca55874685998e6e8843ffb12399947403f00fdf', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x105323f29ff905ec8bac9dbb58e89e681acbb025b674ace5915d45b970bc6c57', 16),
                    gmp_init('0x928bc33a2505aeac8a4add95a384d63e94d52490291e96f2c10697458b732125', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2b70c08d54fd5555911ac78f1bf8b7e7a5db7dc82444276de8f0286419045f73', 16),
                    gmp_init('0x3af0c4db72ec356733fcb8234df3cb635f0264c90a7736904bdf1833f27352c1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x550a9e69764533be86571a44114d2e9b9707fd3e5db13a89fb233898409b21d3', 16),
                    gmp_init('0x34bfdb6e1791166d7f7df846223a8cbd390d3f8168d70f8d3b5d6512898773f5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1a61c9379bda028e1f7a702614361c20a9b157ce2c97a10b129f11074c1f7a3d', 16),
                    gmp_init('0xa5b73cd0f1327ef5c8d0e1e7dc95666ae79e1d07b0a9597227792076280c59cc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x283714985950dd11defc65f465689c073615f4c075b0283d093b8f0460e32efb', 16),
                    gmp_init('0x2e5155a58acaf6973a99235fdc15f0b9cd194066e23043e74a58b5f5205a47e9', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6bf119f2033947c95e80cfa4d042e4a783d104ff7e3a306bbfc294aade475db7', 16),
                    gmp_init('0x59e0fee5474b8d715004eac9e02b39f6bfbe7629eac85455bc1062bb6183ee7c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x785ccc3976cb941ff0d3b1dfe62fa016f36725fa1858849d9dc1272635bcbbae', 16),
                    gmp_init('0xc1d8e0c96fc410d2d41c9e0cf1e4827a77f9acf8cdba9d389478c4f03e588a0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x453d957e8a8e3a5a8322d7e1e985a023bf731ad23841250fa988fcfa36b526b8', 16),
                    gmp_init('0x340843f84f3d56f76fd1cbc72adae9064850df67f0f9ebfea8eecbe97a91e378', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x838bd048511e52edf082fc69bcff19941d800c37793c6b35fffcad236e7054a2', 16),
                    gmp_init('0x48be46fea8110a9ca11c36955cf8707f6becedeac26737324a861f8f42f991f1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b7e47f70533548bef328f93390ef310203e4b0c1182bbc01c704fc1d059d0c0', 16),
                    gmp_init('0x56e1b703f9de1ff24500cea3c53591b6921b789731ab1891ca01a552341bbf2d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c0d4d0d9e6a791ee7d6f3284ca40ff2d408dbf4568624e770c7f6bd875aea28', 16),
                    gmp_init('0xb613bd72a9661753cd5b0e1f57bcb4a00fc61211bccd97654a80ad632080a1b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x346e14b8ea7f765c075b936d0ddef50f81954712d3a49330079bbfe40ffa377f', 16),
                    gmp_init('0x96c5e603bda86ed82d46a649e8bffec442a7b9513b28f20e4fe91d1a7c2328ab', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x93f2f622f313811a42720d886376460c57a26c475dff627a6df7f94cdd7c8de5', 16),
                    gmp_init('0x7b3aa61ffb3d907ae6baf6fdb38b3006978b7d9ca4712cce341386207c65b1c3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x436aae3357e2366160370b86daaa899ddb21e820f27cfdb99d333e1ac12a9757', 16),
                    gmp_init('0x626711bbd0628bbf34d7c8b18274d732a0b2b5501711f2bb3b46d0afd32177c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xbdec0f9f4b30149351d7bd91f17938d98b2a20dacf7251ed050d75c8f00175c', 16),
                    gmp_init('0x59cbd3a0353232bb3ec46afcdfff7d46fa9e1552355e3d8d242364d9591f533d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x755238a3b21fa3e712637692b3e4f2e8596de5cf1f338604d5a272d320d41333', 16),
                    gmp_init('0x91c8528efa29d6fc801fd8b57e02fedabf0cf3d60b31e4195967e662aa501e48', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x638237cb61c98fa4313ac60be1f1b7c5e38a295bcb21584f16a22e4610f303ef', 16),
                    gmp_init('0x36d5addd8b326891184d8440eafd60c34991cfb83be9c2ae96f2db055966df65', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x573304aaac8109dd210ddc1f9dc1c4b149deed9292e28dadc20ca147ef4a40d2', 16),
                    gmp_init('0x53d9ac3c67926bd7dbb8176c7133b47bf8f7cf0450af58790b8a8d141e7a8c92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b58e170b404f9066cc752b6a3e3f3f447ca4c7afdb737a7ca83d92b3707abe8', 16),
                    gmp_init('0x68427e9f3b40b414ecfd24b7f7106cee60a47cbb7a5f58bfba18bcf5a05e064', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x72d9436bad8f46476fc7dddd6e6b2b6bcdad7a1fc3a2a3a84c0f1d653f749e64', 16),
                    gmp_init('0x74496d342d7a432c2030dfbafc37cd33566f929d138ad4a0905b7d551f3c7ddb', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0xa57d3b014578bd28b3646acb2b04e11e343b5fdd88623b9676a0dcc6b6e86ffd', 16),
                    gmp_init('0x37ea922a2822fa0a27773e848ccb6131249bb7d1155ac35a7410e8461b9f700f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6d33fff4c47ec5bd1063293393794dc115ca86cb48bb51275f0da15910075049', 16),
                    gmp_init('0x6f841bd766169698a1fc3b19812940d63dde8dbae351594adaa4121be554a000', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9c6d7bcbaa7d83f69925df3ec159da07c099481ea57a0576e3bd0bdeec4be520', 16),
                    gmp_init('0x54d3b4b018e28800542b663ff4dc9c2e0891a41a6709329704b92d46d442c171', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x568707e6597b56305b28d25c4fd273104485f6791b38b98055c53057807e31bb', 16),
                    gmp_init('0xa6ce4fb9dc10c2211ca7f8ba7f5149853646d442ff6c2d7e4dc62bc214d01470', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3240e9bc3021fc774b5c3aae6632f7701761a4adb12256c005dbde3cf27f8e11', 16),
                    gmp_init('0xb45023593acb862150c148d7153e531256e3a642208132c10c11e1e85c2404f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6f35cbf2916c1fe89f771bcd5d3a3cddb8b73fe6cf1f7b8621a2813fdda97b42', 16),
                    gmp_init('0x97889c967165aa5b16c0dfb6e81f4c94eed4e37a79995d2c733b8181a54207f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x59c9b33112e870edfd2047cd7b1253c5e6bbdb26a7f73d9ea8f893170e2ed269', 16),
                    gmp_init('0x22f224676a5a9b3153de6910162fb738847539267d45f7ff9a1ed9037e88a5ec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x27f61d28092ad0f8ac0dc45a5a06bd4d419c3ab1675e9fba3cf3061cf546d47f', 16),
                    gmp_init('0x1bddfee2b170bd34f9fdd6215146096e3d4eb3215d00373458354c656a369ffa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b49eeee2bdebf8d02038196123f77de3e82930b7e210dda90496a84faf48447', 16),
                    gmp_init('0x5cb1c3d8e153cf2128adac18a1119b7fbfca2960ca8df0413cd529b2e9a3aef', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7f81b1ce27c96f97322ae2954378ee9e98575625fcc2c6a873b0a707675c7bd8', 16),
                    gmp_init('0x3211ba65268aa9db2ee7c6a8c9712b3cdd893aeec88c70ee1c4715f3fb5271db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7efbb012480e927dcb3f1a2a34f593518b27316578237651e86d9060a7399eea', 16),
                    gmp_init('0x14dd84670b4ba2a23fe47e2b8568bbc5dea944e3daaeb60ec4cbb33254931cb0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x898e5f03443a42951502101813708eec063fe2da4b08b5e8b962932da6c0ffdf', 16),
                    gmp_init('0xa34dfafef47a01575a068025e73f241a8346471a3eeb992887fb9f14ba4f0590', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x51909d4d5952d4223c0818c5eacba22d4a6a38450684811a2b559246ac7103cc', 16),
                    gmp_init('0xa3452a5ef9fce009470c6edebe0bb2d7481cc0eeef08f4f06e26f4a561468b2c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9b64f27f38111d43b0705abb4ea4c7c479f883255910f19b524751d5163aa4c8', 16),
                    gmp_init('0x5ebcacb073b844d30943b18049f7063f0f819ce564c1bee271170a21c8eceabd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2530f01b68cd383586d6e45d7c2a6af36468246b3232356a615b901e5ad280f2', 16),
                    gmp_init('0x969aea991432c2bace4d7bb97144f83f6e69181e3c6bb9e42676cec95ebe432c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x932fe41f8e1139b5b6efa1c984362ea94c1566956f3243e61a541e2a89320fdc', 16),
                    gmp_init('0x18b00332255905a2b453945f51dc294891f93ff943893132b6f936587c4ba32d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8978fc7f23220888711da7ee632286b0cb3dcf615fa4ee7b8d25e3e1c5a84001', 16),
                    gmp_init('0x379e2a48d2055fc85140f0ef89af14aade1072eac56f2dd0413ff9424b67cf0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x37cf1c9f2397980b3813afb2281599402b7abdee27d3a2e3e14848648de5eacf', 16),
                    gmp_init('0x77706d56fe7a341014c1162b17c485b0b4f9913ef16b32709253aa8d611faf9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ba8f41a86075558e5d7b9cc9f8fcd4d0d0890a071a2e940540aa23bdc2140b8', 16),
                    gmp_init('0x991223ca0eb0e53e6d2e807d1d806479d040fe6ece727723e3c2ce6c4c7136f7', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a3881c3ac722cd8712e2721332e7f048ca1855a1daa4167809f7c69d7ac75b6', 16),
                    gmp_init('0x8e12173d057aff23303e966cd6d1b8dcc1020cb74d5c2aea0763a89eeac63e99', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1d85eb11891f9b4b48abc695d663f8787e078e56e5317f47bcd44755617af678', 16),
                    gmp_init('0x127303733eebec33d64454959fb29ddb2b8fa95b191e74f3a75c73fa094e9e9d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7cd1c6080d696347aa4860167206e34055fcd9c8406ff79836270c4d7064bea3', 16),
                    gmp_init('0x33859743e7985902e66983bc8c5f2b4aadc8a082129767007d7b1f500a944073', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b381147f7d2d037caabd823ea066b5fe1be62da98ca3d01ffcb3fb7e69ed995', 16),
                    gmp_init('0x83e74e8cdcb7c5367a264ef81d4280cfbf82c6e198c30f2cfe18c7d24b4a380f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xd8f1aa47c609e55a737a80ff9fc0600236ed7f1fa35c71a45ca92629101841f', 16),
                    gmp_init('0x33fc9def774f893f0d528378db87b6ee225bb7c239b9865738333f84e194fb0c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa373ec29063e033313c8f7da21d5662418781f50a00aa5b91ba1d3ec25636eb5', 16),
                    gmp_init('0x686b8ecacadaa169d842a184f238e2c0502ad065b396a3fefc89cfe68c7c8bba', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6def55fddad1577ab0646265d942530fccdd5f01bb8c2c4d5a1fc4f4559de10', 16),
                    gmp_init('0x5ac90d6883be572c13728b12dae49b17f1653aa94fc4734a3795b124db23104e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f3457c104d1ae23406fcab89ec5c68bc1ba6187182fe95e353a3693c3bbb1ab', 16),
                    gmp_init('0x18c6376070e207d37eea6f59fc9973b552ab0003a25e70de77c99ce9ac57a386', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x655c25b1898699514bd096bba02355095922bf827787adb8dd699dfae3d73eaa', 16),
                    gmp_init('0x93a9240216a70ed662ff1c2c7525c53c62ea48ada5315811616b624b2c8ef30e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a4aa2db8b812d80bcd8e4ae6e3ac45566efa71bcf225bf488682cd9dc97afed', 16),
                    gmp_init('0x3ec1a4724e6c926b09ab83c0614a32578335f5ec8a8f8174c6b5a8eff0a7eeaa', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa39e65ee0a30abedea64f54cc830b1b4f011783397a8e15e3a601a96f7e9110f', 16),
                    gmp_init('0x603b83d17fe95f5c5a38bb186638131049f29c26609077fec7e065ddec92f554', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x73d5ee5b856ffc129b49a543becc6a3ecbfbbcc7daab560a855d35cda3a8dc8a', 16),
                    gmp_init('0x275544bb201c5b7fcc33a8006440c34cf4ec2529dcb9c3a66b1574cbf44410cb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2bb3ec26e16b42eb7d27875f13b57c926072840a9114ef5ececde087eb5c579c', 16),
                    gmp_init('0x2b8fe67709acd69d2afcca7d99f5cc06f35c86b82b87ee6ce97ed9e09fdffb4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3af572547c0a84a0586bb1a698ee1b6998d2caebd58c8f33073c088f1f902b46', 16),
                    gmp_init('0x9b5a7e294a2ce63d387b444ce2a2a6bdf0699b29f69ae70ebeea9231dc9bdb78', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x780b847a93433c57f3726323142e9def0e3ae71450502e8495a3ce2c1b73fb86', 16),
                    gmp_init('0x1c94cd0e38d872da4b6f29f634f60bfa0e6756f6fbc5fba6c63890e4ecaf63bd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2c954271e5892235d06229fcb8f5d2dc8636e9cd417265acb6d7295930064e1c', 16),
                    gmp_init('0x4c1b289d17db3f6490f7916175eab15948a7790804297ba468650f45f144f085', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x16e2f5e9cbc5d7864590ad2d012df84f41c482b2e05b352a498640a3319d206', 16),
                    gmp_init('0x2ee390004a39d9e790fb695b8e0c10ef6d56676aad5faa115ff98583903c9c09', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7933dd5831032970c8c1bf698712bd192817edcd88a7ce91f3e40599c1e63268', 16),
                    gmp_init('0x2fb51a5f184f8facc74dd1757c6529fb643e048ca71847ff26728e5d933029f6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15dd62e73c5defc40a3f6376bb94b3471e21c710a03f072bb57f2025f7a7faa', 16),
                    gmp_init('0x28e352be888871487cf6687f406212f227844b85620fb0f1d9e15239d4b7ac4a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7124d4b73035e1a624f2a925d03dff4188ca95414e0bfe962d107575e3d3ed66', 16),
                    gmp_init('0x4bc48312bc41c0fd08b069b6658fb8acd384654ada79febd7869a2f2e75e9e64', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8226522ab6396896d61171980747f8478c9ee4d3e1e08c9089f93937674f0492', 16),
                    gmp_init('0xa3da1b78d5d0d7a6d2a6a9125e1ea619077e0af603150cc17cbcc91f0a082fc4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1602aa36b0db40a1d82fbafe161180ae5f9475fd48f41103df2bfee05293b853', 16),
                    gmp_init('0x88aca35fb5ca7a0ebbf180f59c1aacaf0482e397cf65fb70bc6c1587ac5a2ff9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x81d52dd63f55ca00e992a7a7285a11655a15315c3680a65b198f88d20fd5a13d', 16),
                    gmp_init('0x58274a4eea4690d72289a0c0d8138cd9b8d8ee378e379cf2a1bfd13a7940f051', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x11e78964eb645cc826bad262cbbda1b7e41d6ea587a58f682c70130de16fc094', 16),
                    gmp_init('0xa36b4d43cfac80d2a9c6fe2c5435c0cbbed498f382b845b73bbc7fb63a6d638', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x988a804d9b7c356205110ab7bfea71ba97b7cdfb6017b7b2ff3dea567a179a5f', 16),
                    gmp_init('0xe49cf5c5a1a6c77747557b1d55af183e3bfa1b64811fbd0fb48ff0817e5413f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c87326d78121eda93719ffd62db16d9ba29ffa88d67eb468bd1d34aa27e6dc3', 16),
                    gmp_init('0x90ef4ba68955747bec2ad2db2e5680eb13680f5c8fc740a8bb8103f8fd231696', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x436c3b13d63cf763f336fc69b8751cfeab8c8ab399483c520f50c8b05beb81d7', 16),
                    gmp_init('0x7c30fcb857c784a875b9b00af990698dcecba4619ff701d0b515b7d512af7644', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73be3fd05496e84d05408e98eb655fa71b41aca24c7cd219412fe1e702e2c6fa', 16),
                    gmp_init('0x47a1d69e8ee50ed71820ec690eb8330d48cf9f9952e1d0170998e352e747ec71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66e65bb74614e8310a21c3ea952f18d19d90f427345b6be28a0962b85345292e', 16),
                    gmp_init('0x20c3894c0388ede4b56dd304b3964b646bb7900a82275cc60cc83ef74af518de', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x286c5573666f5df7950605305d6db752e838bec78ff08534317b7b3841095bd1', 16),
                    gmp_init('0x8d30ff24dd8336cc1c623f82b081d716505929b9726337fdd3415ce61b6c5e83', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x13fc2102e07991624d0f9c1494de1a10b1fd2602cc84a8bd0b091708e18d8e14', 16),
                    gmp_init('0x120a03e5b22260d19443276426a1acdcd35d41dc2e5d61b350b793b057f0a90b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3131bcf02856c33ed006f2c8cfb5e986052099f858d4b36855b9d22499c6a256', 16),
                    gmp_init('0x2cfd9540d4596ee2b572afa129397b9fa5a18fb15eb625153c39b1456e475fc2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x557d7c584c6fa6d4d4efa377931eb5956f280b7470233a90c4c14fba0fb4254b', 16),
                    gmp_init('0x33ba09f923fa33abdc552d6850a093171d2ec82d6b8cdc8a8a19ff5d0c847f59', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x77fc526fba3f1235ed5102830288f7f0e0f973c0ff74e867501b8ee6b67ea911', 16),
                    gmp_init('0x4e8e1342cb12ae5d73c308eb3a9076809b1105955ed5325da16cd58c8845195c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x436372726c3efcf973462b9e41711b57987d296c2e83fc8e05bb74d082490f8e', 16),
                    gmp_init('0x9fe0d6b73d5b4e6c22ec223a753a759300eed1637f39830349c2e6d12d59d639', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x38040597dfbf212537add6c3b60cabe8758507f670a687854979e4e2ff17585d', 16),
                    gmp_init('0x9222d5f55e157516ec58d62de4a5fb36ffdf5ff2866ba4126489ff6a03ae2a70', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x86b3b72023253a0ad456c03fca27ea69342a107d6bffd088e9170c9faa3ae868', 16),
                    gmp_init('0x72c5f97d9b0fc326af7d5cbcd317b23e02abf30fc08ccf0c6f8bffb9b161fbe3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5f634baab7f0c69ff31051f51a8c086109d1b4b1664ab6d1cdd9bed951a39914', 16),
                    gmp_init('0xa73aaa279f810c23a135edb465ab5173c496bf67e91b248795057a73c4045d5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9d29e350e9eb5d5a62110022a766de19a74e6460f66e7c9f87ecb38b84461576', 16),
                    gmp_init('0x85327078e215d713573fc76fe1ef62287954e38d241c0eea4a47d3b5b4e2e698', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6cb8232df4e41ec7a3c369dd180486e8ce4e719fe12c59b428afb6335115f28f', 16),
                    gmp_init('0x970503dd32bbd596be4bd3f7b660a4c266d8c75192dcb78fe6e320eb5923a11b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b1fd42a4409f78fed4bf9b61c2e1913c78a942a61d75d167364318ab4d5aefd', 16),
                    gmp_init('0x9da357d8295e45d9dc47aecac5a5dc6715d0dae4b6b9cf9ed596153f7252823e', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x847395c4c05bfdcbeee53c008a7c6eded1ac69b695fc470b8e608928388545b0', 16),
                    gmp_init('0x369dd5ea698e8fdd9b50cffedeae8466d27787ce47080d8799dac9233a5105c8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8fd04560ff8cdf09af7b8e157ec33234453f1c48851ab950a97283500561e637', 16),
                    gmp_init('0x4453a3b8f4d255a6b3ffbfbd87e94e36a8c7f2135bbbbe3b42726067a9300a23', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5481e191c17ec8dec1f0be98f2ab9a50c28915e1398ed274c52b5df2de8954aa', 16),
                    gmp_init('0x55d7e9af63107cc494965deb6c6ca185f43e863555b355e1959dc47a3d66908c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b35cc89055ff5cbc6666d92586838d6cb789865e13d6387bd289e551db67610', 16),
                    gmp_init('0x1e20e3dd9d61380577a4025b0dd479ca5308601218882079c0e1c929b94d337f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9dc372327f02a3025accccb0f7b79a1ee55d94eaaefb74b1a30e6818e36a8a8b', 16),
                    gmp_init('0x844dbf3ca6964f3c71961c1ae1e04d0aefdb758f051193f2527176cb2b427063', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x40f22c3e6235b71b2ca093640df56fd4e254bfaa1a1841b2ba5cbd533a09f1dc', 16),
                    gmp_init('0x2feb95879d12c5dc6a8955d678b36a565754246189822ea6fdac6850efbd2164', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3a210f5f6108f12a9c466be9666d02fc83a3dc9ba8d7963170ec1fafe76358fe', 16),
                    gmp_init('0x348d37ee9c64812f4867430741e9eb0f9c77a6fed4ed203302c3a2186ed22b71', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7fbea0017901315b9f6213a9ed5896f91ef95911cfe1a12ebd80df026aee1e37', 16),
                    gmp_init('0x9770497a2d1fc1bf8da67a2428985ce9162d8b4d87351fdb97567b739a764e57', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2fe0361114a06962465b08cb47ad252c8a9afb87b92977002ae4223c47176cbb', 16),
                    gmp_init('0x84a74f10bb11f3c370b84bb119b3f71016f6232f5291ad26f974a9a007e055cd', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ebf873dbf2954ad697b9ec7c38876009da6d9ccd16beaf16b39404d75dfbd66', 16),
                    gmp_init('0x5b7aadf14cb7bf2f1ac2273cfacf7dffb96170b9965ec7b5600983a106fce818', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x936c1867e2c048414103d934b09acd7385758406b984b3643f05ad314cde5f9c', 16),
                    gmp_init('0x39e98d8ae4e4ef752d5722b31451b48ce81b145de2a0ad5a86fb31e366ee8575', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e2cc6c760ab25b0f1608fbf0266cc0c11cb596f5d33ec391927c3119d2a25d', 16),
                    gmp_init('0x903677dd09eeaa533ad2de44f27522b4a89270d5b8f83bbdaef93f7724630229', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41473e1db20db38986206b81a875c163a57aae1b9ffeab1740f9c25c2687f609', 16),
                    gmp_init('0x2f50433a9d353b4cd8b9e730f66981f0eb2a3602847b3040f1de8b5ae47bab2f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6c6499aa8b61ede3f39fc72842ad04d832adbaa2861fe51097417d060ae39193', 16),
                    gmp_init('0x6f79bff44b9579d264c483e3917a2a9be0764e00d7ec0b1e33fadc29a23747c0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3b51fccb759b36b15dc9a1b08a7564a489dcab6d9d90c1dd625b13f34a051c7a', 16),
                    gmp_init('0x836f60d2dd04fb99b8a7065953f39f912ea5122344c33b6a8eb41e2b6c3952b5', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x6c869bbd62fde55bec4b4578e4349aad76dcfc032e7186e08a8930194f85a27f', 16),
                    gmp_init('0x599b9e432722853db003629fac34321d95c9521fd2bafb518e7538557783d2db', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x49179a55a32e853d628b1bbac6f7ec211da3279ae180fdf0fefa4686d9de8d52', 16),
                    gmp_init('0x5639a357cf45b2df9305c1c9a7bc08f7c3af02b8f7e55b97f70c329081b709f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4408722c4052523da8f4a65313f001075495536eab59a4356e8cf1b4c04e170d', 16),
                    gmp_init('0x4c501075367c8b059282f28ae530d0811479e7649f07279db7b9cf3942b62ad4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x88d47c459f197ce503458d9d3f8a63c2e3460bdd4702e3395a3458d9955a5b14', 16),
                    gmp_init('0x68eb70bf92d9a71c841866b2d6644c21313c9ecbeb4f4777306763d53dcfece8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6fa7bf1040087f01faaa5903e686ae741f73ec4296cbdc65f4e53ac0a5bc05ad', 16),
                    gmp_init('0x3cd75ed87e87df6a488eae272ff7c69720e38f294de799cf64aeef534a7704e0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8a200bfe29ff602affd4735ffb206256ee99fdfebde7278f7a237944dfd85a71', 16),
                    gmp_init('0x5350082d969027455802adb37067b0a9512348cfc3dc6a50e0e8946c9554b2d0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85ffd6e90e71a299dd19771f8666512c649d1289ab487115fa1b2df78acce28f', 16),
                    gmp_init('0x3f86927527cc5d23592922770cec4c9755478d9b07706da97cb2bfe89450a88b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x471b4cc6a8688051db4da684b966e380aa45c2a051e97dbd83dbcc07f70cb1cb', 16),
                    gmp_init('0x3a465f1ea00c6b158f358dea1acbf4de5767883f2cd6b71ba2d25dcbc4f19613', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78b24b1cf5064df63610283d72de350eb6f406686dfbed4da99e620554e8abbd', 16),
                    gmp_init('0x3561247dfb0de6507abfb16a07b619f74846f1ff683a6b3267f29facbd5f6b32', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x590a1a8dc9fb0c903df7ba77e4222cbc03c8896c09b67c3138b906ea4a1251da', 16),
                    gmp_init('0x48287d0eac0b5b70c1def46b74299ba0cb0ddf1bb42c9453ed23b89955aa2ccb', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9be0c6dce937896233f52848279fe7716e5945bc4d9b339484f06bbc34ebf0d0', 16),
                    gmp_init('0x90ddc8d2298b5dd917809fea2da683fdcf94a130711097cc8187f02ffb29a281', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48947db27c8beff5c6ac7bbd57b1ecd9c7bfaf7f13219761b970813b87aab66b', 16),
                    gmp_init('0x10ef2670881799e478439fdd81ed8bee643f354e7e04998f0ba854fbccd6bfec', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f10fd449ca4a723b74a59fdb58892ed3a9b34ac037984a3515ac3ed2d189a7a', 16),
                    gmp_init('0x6103a4814e3f51d05b1cdf06809cd53a0e2dec11a6bce0f0b7fa4d0095e61e8a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6ae66ffe180f06b6c114328d5c74ac3cb95160aa2f8ba56d1a6508fd9561614a', 16),
                    gmp_init('0x7670433defc70335becf960924a021a2524b59db966669111bd1af2bc1cfb148', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7027d69a393d4d36052bc538c7a1ddbae3d0865116a40ba3509514f752f68aec', 16),
                    gmp_init('0x447dbdd17dd6d47ea855ff568ab05c49e8813af5eb7868c9703fecd1a1e97a94', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5c4861f9baf2078828f85ae8e4978bc4b8d9938b5b1f98c5c40a99d91cf8bc58', 16),
                    gmp_init('0x84784716b2666c2b547c28dc7f3a14e469a16c8433b059dd4d01c7b2df942db2', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x48510fd72555278664628023bf40ec34c9578316b91dd03bad91b6ce1940b544', 16),
                    gmp_init('0x14918d185dbb8e46a15a6e17044e55172dbec2a264d96f964ae280b63984b841', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9e2847eb15ea9f1ec403c44c6d088f78125c8437879899e81dfab119aa1c503b', 16),
                    gmp_init('0x8e7e2ee470a3f46433fb27de3b24c80eb1fff821b511b9138423ec245ad8ed22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8264f7880026c8aaa0ce80511ba842565640ff1e6a0abe27e7c17f8ee44d0d6d', 16),
                    gmp_init('0x2809f7834f27f16305af8143f455f20596e91a43ce3f96e7abb7cce6feaab6a8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x41e1c8aa49d5e5b4efc23c3a388b0768408622830b04fcd97118865ef31552b', 16),
                    gmp_init('0x380ab21f76b08024e52ad861d6c86f659a6a2548dc7e12a156ec78ef0035ea6a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x67c75cbd845bc6b60ce88c038838fdfa1dbd93d8c63326e52aa874ac225ed043', 16),
                    gmp_init('0x96189ab93856a7b6028c4d49093f317eb900f65d9f0c7d112f145a1c6c3db074', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x91d3159a46df0a12dcb1e4f6a1fce8ba67990f345bd6402eb4c82376e1171911', 16),
                    gmp_init('0x747703787d22adc33c557eb6ae55b5f0b3021bac0cad1a6f5e519314e4d0571f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2aa71919f792fd30462744ffa41d8ffc523fea5a16eb2d9559891ad0b308c7f5', 16),
                    gmp_init('0x8ca652a46ba83f33942c46c7cb548d7f2f9bcf63b584996da748001340a61e85', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1adad0aba4bec5f90adc01ad20fa278768fb652066684628a5861ad207e7a624', 16),
                    gmp_init('0x96d98dc45e7f0d22fe59b478f7b17601150b8df0d36a3b6ac95dc8f40419ce52', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3efd611c5f04b70ab943f468be4411729402681688a31f6a172b202d5cdfd470', 16),
                    gmp_init('0x6890c1e5dd8e0e859247eb88239b2802e189acc066c21942dbd02c31b6b713c5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x89e790afd84b0d9d4396cdc0f7f1b05a7aa363a6c7f272ec7d9be8e4487f0e79', 16),
                    gmp_init('0x4d7324ebdba8faf18d10e33a48412b59375dd930a9a990c7d07e5e30572f1624', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2586c8ec8c46881af8af0bd51e55e1cfec8626d5cb1a505d701e6269088024bf', 16),
                    gmp_init('0x62ddbe2612d673513dd8f3ff201a834536c4c0e3bbb4e28c492d1ce4651db118', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73f922eceab49e526c5abe019614fc0859b2462ec3c5e7cdcbf633f16699dba8', 16),
                    gmp_init('0x3ccbf5092e8abda9fb546b80adcda9b73669dd00fde9f50458cda1cf5ee696ce', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2a025a2ec03a9c844fc34930395297d2928e8e37c4bf03d0fe552fb173698fc0', 16),
                    gmp_init('0x5f2e3759db3b88bfea0293b29f248fbf6c99f4290c12c387f5b3774176e125d5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5635399b123c21c88da6ee9a8eb9c78239dabc28653e557a68665f90379ac3e4', 16),
                    gmp_init('0x17e2838189f9f7458d9d54c3c7ce89eac8e6a52379663260bf2398154d1bca9c', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x9541d0bc6458fc5e6c2436c9297a2a22d9e2344a58f043131a432d848d9c3dd1', 16),
                    gmp_init('0x3bcfcb62342ea6295f2b31464051216f56b3d4c4a805a52bd37d79369893536', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x6474fe14e5311a91b45f1eaedcf7f457e639dd1691d1b22a155ba19db23d4909', 16),
                    gmp_init('0x81e280894af80bb681bb9ea0552cd5251b37efb56649d24c7728a492d8db64d8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7b0c3844722213b29b7af37a3e585f12d743c5b1fc13230255d75f49080d3feb', 16),
                    gmp_init('0x1ee67b9ff9f7927a788f6b09ee81ac092d3bd7180fb5744c350e8ad7807d906b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99d864d21919260949284030b856cf2ac9c8a63ed482bc51304b3862b4848ae2', 16),
                    gmp_init('0xfd683ed6a8048f24224017f042a7c99181b89ee4b9281d53acfd9b10460f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x639bf28da319ebb0456ceacd4829b68d1689f9e8900bd865f356fd94f66d54a5', 16),
                    gmp_init('0x83c464bc7a80acd5978f2d5ca991ca1b8872722cbdeca36ba3be8d8b66394d22', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x26362d71c377f7aba20a0102ed386d94723e09239f867055410453546c13aac9', 16),
                    gmp_init('0x780d4c0d704b39e3875a4e8e36f94e0ffb56ca21b208e1a26c33ffff91f6499e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5223f7cd357aa162a5f4f12e16bd92fe624bff7b32845c256dd9c6b9c9cabba6', 16),
                    gmp_init('0x838dadf739adea5654dad37b846011dd5b736c36c2b859459d4478cb6241d5ad', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x69f6626b897ce2e2ec6fd45e5aa6c44cfb8745ed6df9d3df8ed9c74486aff48f', 16),
                    gmp_init('0x43b608da621b52ecc144b24fa466ac4c5e8e4d789049a070d0f0e6da0978b6c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x731834eb490c4dc8517e235a0bd490af2ee81d627f08b834dc8b4959177e23d7', 16),
                    gmp_init('0x83afa6cf7a5fde7ec26732ec4ba13dd6b92d82b8306fbac726e7d0ee3a3b8b7e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x392af6a1a8f9c00e3751c01da462c02eaf97d9f0493157591bfef5834e3b90d4', 16),
                    gmp_init('0x23eefffdda977ca031f0d38ab986a1d0e0719b53329cce201edd2d464e829e0e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x107e3e1a02e3857a831a3eddc32e1d58b11a480dd83e88dbb34a171a911dd56', 16),
                    gmp_init('0x27e525394ca683c639d9740e39824c3a0f8ac9147c99c2bb3c883931bd9f7c96', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x829399440227ab86ab491f7c2b70795ab0f0dfb092f76908ba90aa02cc137d90', 16),
                    gmp_init('0x4d8d2c864db666e178c2aa1d7a24ce00c5a0f429f2ccb8fa4f8e2d7a76afa0c9', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa58c1f920a2a7bb476b2d6d4dcd86e8346a4eed909be1fb508ce31c9a81c4e85', 16),
                    gmp_init('0x634bd145870aff8988be33d653c540e589cf7a0d2ab5ec5fc570e40bf90a860a', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1b6bc0ba8ab66c577ca26daae49a1ecc84f5e22fd985d66e01aa1a66a6be0492', 16),
                    gmp_init('0x3b2a290ffb248ef0998b5cb5b7cd6612008553bbfdcb28e97c06d98c063e7f13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x46b46d3afb1fcad63364b6d2d98c63e79fa68ce8165acef3ad439ae72a9124a3', 16),
                    gmp_init('0x23e412e1e93f1a9b7313ad2382bf24481cb657257cc8b98bf63889a590e8ef70', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x4b784b3df147132d6c2521a6b8336fc48acacfc096d35ec00dcdc8f682c0dad5', 16),
                    gmp_init('0x828b41031350118d653528a7b054a4e2787cf68cc700c30fa4fd9f4e575b2118', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x20810a23cc7a04c15f87748aee6e9c264ee5c047ddd878beab76ca8855228bd8', 16),
                    gmp_init('0x7607db14c6a89163327e522485a43d628eeee5ebd5e561e86146724e58e6c6fc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3502c9cc3b2e96ec4380ad9126c9f97a2f73ba48c6059adae193bacdaa6b2dc6', 16),
                    gmp_init('0x4e3ac83a81bcadb7d5d1309b200dca7fb77528ff6793a3842e9cc4ea415c1424', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3975403bd20e9a52e8bce1286d9220cdd203281bab0e8dd4cee48fa274d82e5f', 16),
                    gmp_init('0x1cbe18d42cde39c8f5c3895bc1f8d3628c655cb91411ed91a3468dc33b05fe13', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9643bacda5ae2b3cc7311911ef055eee28116b35d3ca1bb076f39cc5dbfd57db', 16),
                    gmp_init('0xa0b851d08be6db53cf1d798443d87e87dec469ef0e6e0829bc79fc88c3db69da', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2f4cc57bda095cc1c20b8b921d756b2d60345eea612073d8995c4ac0d558cce5', 16),
                    gmp_init('0x6c242a8448dbf83db24c5ca7600c8c9c9911239208db03c565934bc21d3313c6', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3f15a3de7c92c0c2e066d5895f92c45a905bbfddaf0def8161aca0fabc2fe80f', 16),
                    gmp_init('0x9cc0dcf5029b1dc13c25f8c4cbfa983fc8cf4b760e2a76049020a680816d9dc5', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8afe19a5b953874802610ba695907d3edd4ccf1d0690497f6a857aa800ced790', 16),
                    gmp_init('0xa83d0c70b2c5388fd830d75bdb65c24a06d2529ccc59f9f4b702cc7d0be24593', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x15e33f41f49e7b80e8ca56ac7bf225ebf3a4bcaef6a6aa8e682d5bad8d0db91c', 16),
                    gmp_init('0x568e1fb5ba3a42b912376632be979ce3206f0d2fdc3614808cdb5c004c050198', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x85ab5d998e05ebbe86ce507837354e38ecb0b9e5f827ec24209acd01884823aa', 16),
                    gmp_init('0x3be85c62cd3cff98d8fc2da7e5f9c459bbcf3608a21971d6f702c85ab9ceff38', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x23e17a76dd883521df9bd4f1754a9b6ffe43566540cdf17ed673c45e37cb6b27', 16),
                    gmp_init('0x76e4da3835b0f7d425072f21435570270beeadce1720c955b80e1dee8553e552', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa91c8b4ef81b10478259f4ecc403ca673c87e7eb4be0e2c0b3e691c7c31f910d', 16),
                    gmp_init('0x38c29fcd6adb7fd4c7f3c51f2a6a917a92ea5802c3b4af3ad6f7234d696a43ac', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3858255644a00066f285c35c10ecac6aa5c73ffafea021351fead3214b3cf9f4', 16),
                    gmp_init('0x97839141a0f8a2292e3e91b17459c32de5de89c73fae796a991ef231d302f2b0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5db8dd8a1f8eebb2f2809abcece821eda0bced341b2004dc15b4480ffb80f694', 16),
                    gmp_init('0x6ec92c29444f5be2403cd24d0272cc4f3a0d9df7813a1054433f5c8cada51db8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x3edd68a8f61ec2db10b50abf9a5bed3ba3df33581873ce5eca8c78755355d628', 16),
                    gmp_init('0x8a87edf04cdaccb6c94f8b6fd43206565471c9ccdb625c7ef6a6e4a3c8dffa8', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x5944fa552e71525ba155c264046add34dd843455531723253a8f53b91957b68b', 16),
                    gmp_init('0x77510fe48a35a1be02673e37d95334dc38f465ffd4ae8f8300cb4c24c93f44d', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x612a3e02827ff31e092d6ee764a19c19d23dfcf3ade64b9c8dbd2b52d1ef49af', 16),
                    gmp_init('0x20caa110e19885f21e64f005eeaaf0550f4e1f2541a225179ad0693dec0d114c', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa7004bef8fb417d916e4cbeb0ac49504f92c56f574e0211797b60115debe8e73', 16),
                    gmp_init('0x42dd4e4c845b8a374728dc51eb659c232ee88377d0644eb18daa74e9abaf60f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x99923853aba41eed58cd22eca306df1952a2e33ebb51092018d69047bd5b06c9', 16),
                    gmp_init('0x83ceb50c8f3d45068c0d022899272af761765a8e22821964a1710b2708424e8', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x66c80c40f4be05bad75feafcd7fdd70c9a2448dee66202de8805073b282adcc8', 16),
                    gmp_init('0x9ed7f3b97195613ba0fc367ff4baa7a0c5c600113ce8fde2ba8d9c986acc238b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x5b80b14f745639c0b02da5dd5c524ff2cdc91d324aa39a26c9c844fde8815da8', 16),
                    gmp_init('0x79ce0231b0c35ef688c2e11a28b4c3c218fd84792da7f4e41de33adca9257aa0', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8564dcd416cd5254d3c3bc41c71f50cf3adaa10960c4ba773449cb1fbd707713', 16),
                    gmp_init('0x23f9a03903a0021f2dafcdc960068c93858d193c866fad2122ba205cad4c7a74', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x1c2825efdd554121657b603cb65388c6cfddd5b2569b22329c2eea6ab3b8c3a2', 16),
                    gmp_init('0x71c38c256c529137362aa956adb80d072cb66504e6c6d71f36d67f65a3f41ca', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x870f8a334d72be3e8a276ccb3c996c56188b1e511deedee2243d8f537ed30d2d', 16),
                    gmp_init('0x57a3d02e89c4b45a8509a39dc1188d3f0bd442903d1a0d8afaf69b7c9d4fdec3', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4294f5c104bd00955d6cbfccba1ff182ac37786f444e72a457141724014d19d1', 16),
                    gmp_init('0x526895a37db7eadad9cc6b68e1e5eae684829bf41af97eaceafb60010cbd534f', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x61f0d0005c7e0e60d822413f6f550571aef182c2cd41ab1255c19c98c1864928', 16),
                    gmp_init('0x3e08c995dabbcb011d00748410927147892058ea315f726add7105bdd55aae9e', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa912598919d799c434633f89e78817336b1134f634178917218b82fbd0c3ee61', 16),
                    gmp_init('0x6f573773342f5ca150202f6b43a1594b57854f06eda9d9c3ea5bce9aade3c871', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9ba0e8a76f2f81d01aba2c6ac038631ed6a07b704c16ca5fecfd09d23e0a8066', 16),
                    gmp_init('0x73fa400e70862ee2fc826d72c7a750b254894125b1cac0cb74a4693cae1fac5b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x78bc0c49ae142b65cb1d763f703afa280db7921186d363bc29a25c02b04e4b11', 16),
                    gmp_init('0xa7f0791ba67d2e3a069d3261e55fde0898b4da531f06f7cb53cb4adba01fed17', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2df2d6a39251c8f22d840bd4cd26f291260e9b99d3cde916ff95b3818ed8d990', 16),
                    gmp_init('0x9337f62a20644c9e650c8e4440a5b656442a26e7dc4c84f694f829fb6b730bb6', 16),
                    gmp_init('0x1', 16)
                ),
            ],
            [
                JacobiPoint::init(
                    gmp_init('0x3f6f733b9edd7f9d2c925dbb8e107d748e188ff78f3abceb7f2e7be1db58a996', 16),
                    gmp_init('0x4f2706959191dc4d63792d0f4c3e329125a74193008ccee5f6100e8f761ad245', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x623d2b553cb2fb38b518b897111b7da139b245f1cf78f74ae15e8fd4f4d5e1c9', 16),
                    gmp_init('0x17777edb1971311ee383a6d43c69fd57884ea0d70e2385a5731d3dc45ff5f3ee', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x4b5b0dc0161379c556ba611cc847ec6f45e3997d51d8a313c3062cec0f7240f8', 16),
                    gmp_init('0x2ab876e83732d3911918e295c00cf787ffb38fac002bfb9c3700c63afa1cabe', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x9a8859133212efc731f3b8c1245d603c04b5b2feee678e1c110a0f147099532b', 16),
                    gmp_init('0x7c9523c8c42f9f4c6dad479ace1a85a62d2102e26045dc5535f93c37abefed31', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8ff635fa95220fc5145cab890063313cd8376e1cde1cb9adcab09982d3fb4828', 16),
                    gmp_init('0x58c24de38429fbb64ce1e187b6dd4a8ff6027d497090cf35789a6f148a77a879', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x596cdb7f519b62e2370c27db7e09084440bf729d34e0f996f081fcf65b7ac867', 16),
                    gmp_init('0xf006645483557da038837cd6152c15d17c5881fbd22a8db115184b218ade654', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x42d627dbfeb64d89d85c4cf07938c0e8a76ceee778fa1e35068ae081eff96bdf', 16),
                    gmp_init('0x9db3fc82304dc1cab9655caf375ee09873a4ccdefee8a42b2989bdbe7f9c36bc', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x2589d71c4c4e93b1e887d9ce9f06969acc0328ee19d578d631dcb14e6ab9d84', 16),
                    gmp_init('0x412d597cf49306b413d033e7f627d8d015f28c7725ceb95c8887d9ee0848177b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x8042e85c21d9425a6e0a727086b43be3cddc4d53cce52beb423cbe88ac95c7e6', 16),
                    gmp_init('0x92dc8ac20893a24aa5151eff8a7cc57b677b3f7a98f877ac7bff6cae1aa94d40', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x7a1ac080715918092cad3d6e63c7309fe9c441461cc413ae459f823a05f3f0b5', 16),
                    gmp_init('0x2dd31115472fff705e73a7e247f851627bdc99cb34f297e40fe5323b5e9dff0b', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x97c8bb1eabb031466069d72c961207342a89a42511f1ed3848c1d9d64250be1b', 16),
                    gmp_init('0x5b6e29eef9874ab636ca19ce87d325f541ca23aee66d8abf0b665a5a4fc11be1', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x44590d86f16170336c71b9112c4a138e83046dd0e9bd6a486035a72806b9f15c', 16),
                    gmp_init('0x50017b257af94865ee9a1028e9b05dbfae995248144307c00b0bbbd059d46d87', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0xa469fe0aaa1b583df03b4b6b8d3d1668c5364cfdd6706bc9237ce885e357219b', 16),
                    gmp_init('0x17c19f82420c8797da28c2e9ca8cbda6c15cf62992d19bc406ce3e43c1861f92', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x73698a07cc23ecb9fc80ec28111ff0e27a8525fdaadd38bd38d62dede6d084b8', 16),
                    gmp_init('0x33517140d40c957610966a55cd3e3779627bc807d90a0589ea33ebabc65c6ea4', 16),
                    gmp_init('0x1', 16)
                ),
                JacobiPoint::init(
                    gmp_init('0x62479d176cdd85d82196289500885c277d639612d2c855f68e66fedf3ae1afd2', 16),
                    gmp_init('0x19eee2debddd284aed4d3bd72680214431768612170bf37cfa6b91a8e8c2c54a', 16),
                    gmp_init('0x1', 16)
                ),
            ],
        ];
    }
}
