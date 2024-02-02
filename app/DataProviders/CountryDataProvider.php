<?php

namespace App\DataProviders;

abstract class CountryDataProvider
{
    public static function data(): array
    {
        return [
            // A country 
            ['id' => '1', 'name' => 'afghanistan', 'iso2' => 'AF', 'iso3' => 'AFG', 'numcode' => '4', 'phonecode' => '93'],
            ['id' => '2', 'name' => 'albania', 'iso2' => 'AL', 'iso3' => 'ALB', 'numcode' => '8', 'phonecode' => '355'],
            ['id' => '3', 'name' => 'algeria', 'iso2' => 'DZ', 'iso3' => 'DZA', 'numcode' => '12', 'phonecode' => '233'],
            ['id' => '4', 'name' => 'american samoa', 'iso2' => 'AS', 'iso3' => 'ASM', 'numcode' => '16', 'phonecode' => '1684'],
            ['id' => '5', 'name' => 'andorra', 'iso2' => 'AD', 'iso3' => 'AND', 'numcode' => '20', 'phonecode' => '376'],
            ['id' => '6', 'name' => 'angola', 'iso2' => 'AO', 'iso3' => 'AGO', 'numcode' => '24', 'phonecode' => '244'],
            ['id' => '7', 'name' => 'anguilla', 'iso2' => 'AI', 'iso3' => 'AIA', 'numcode' => '660', 'phonecode' => '1264'],
            ['id' => '8', 'name' => 'antarctica', 'iso2' => 'AQ', 'iso3' => 'ATA', 'numcode' => '010', 'phonecode' => '672'],
            ['id' => '9', 'name' => 'antigua and barbuda', 'iso2' => 'AG', 'iso3' => 'ATG', 'numcode' => '028', 'phonecode' => '1268'],
            ['id' => '10', 'name' => 'argentina', 'iso2' => 'AR', 'iso3' => 'ARG', 'numcode' => '32', 'phonecode' => '54'],
            ['id' => '11', 'name' => 'armenia', 'iso2' => 'AM', 'iso3' => 'ARM', 'numcode' => '51', 'phonecode' => '374'],
            ['id' => '12', 'name' => 'aruba', 'iso2' => 'AW', 'iso3' => 'ABW', 'numcode' => '533', 'phonecode' => '297'],
            ['id' => '13', 'name' => 'australia', 'iso2' => 'AU', 'iso3' => 'AUS', 'numcode' => '36', 'phonecode' => '61'],
            ['id' => '14', 'name' => 'austria', 'iso2' => 'AT', 'iso3' => 'AUT', 'numcode' => '40', 'phonecode' => '43'],
            ['id' => '15', 'name' => 'azerbaijan', 'iso2' => 'AZ', 'iso3' => 'AZE', 'numcode' => '31', 'phonecode' => '994'],

            // B country
            ['id' => '16', 'name' => 'bahamas', 'iso2' => 'BS', 'iso3' => 'BHS', 'numcode' => '44', 'phonecode' => '1242'],
            ['id' => '17', 'iso2' => 'BH', 'name' => 'Bahrain', 'iso3' => 'BHR', 'numcode' => '48', 'phonecode' => '973'],
            ['id' => '18', 'iso2' => 'BD', 'name' => 'Bangladesh', 'iso3' => 'BGD', 'numcode' => '50', 'phonecode' => '880'],
            ['id' => '19', 'iso2' => 'BB', 'name' => 'Barbados', 'iso3' => 'BRB', 'numcode' => '52', 'phonecode' => '1246'],
            ['id' => '20', 'iso2' => 'BY', 'name' => 'Belarus', 'iso3' => 'BLR', 'numcode' => '112', 'phonecode' => '375'],
            ['id' => '21', 'iso2' => 'BE', 'name' => 'Belgium', 'iso3' => 'BEL', 'numcode' => '56', 'phonecode' => '32'],
            ['id' => '22', 'iso2' => 'BZ', 'name' => 'Belize', 'iso3' => 'BLZ', 'numcode' => '84', 'phonecode' => '501'],
            ['id' => '23', 'iso2' => 'BJ', 'name' => 'Benin', 'iso3' => 'BEN', 'numcode' => '204', 'phonecode' => '229'],
            ['id' => '24', 'iso2' => 'BM', 'name' => 'Bermuda', 'iso3' => 'BMU', 'numcode' => '60', 'phonecode' => '1441'],
            ['id' => '25', 'iso2' => 'BT', 'name' => 'Bhutan', 'iso3' => 'BTN', 'numcode' => '64', 'phonecode' => '975'],
            ['id' => '26', 'iso2' => 'BO', 'name' => 'Bolivia', 'iso3' => 'BOL', 'numcode' => '68', 'phonecode' => '591'],
            ['id' => '27', 'iso2' => 'BA', 'name' => 'Bosnia and Herzegovina', 'iso3' => 'BIH', 'numcode' => '70', 'phonecode' => '387'],
            ['id' => '28', 'iso2' => 'BW', 'name' => 'Botswana', 'iso3' => 'BWA', 'numcode' => '72', 'phonecode' => '267'],
            ['id' => '29', 'iso2' => 'BV', 'name' => 'Bouvet Island', 'iso3' => 'BVT', 'numcode' => '74', 'phonecode' => '0'],
            ['id' => '30', 'iso2' => 'BR', 'name' => 'Brazil', 'iso3' => 'BRA', 'numcode' => '76', 'phonecode' => '55'],
            ['id' => '31', 'iso2' => 'IO', 'name' => 'British Indian Ocean Territory', 'iso3' => 'IOT', 'numcode' => '86', 'phonecode' => '246'],
            ['id' => '32', 'iso2' => 'BN', 'name' => 'Brunei Darussalam', 'iso3' => 'BRN', 'numcode' => '96', 'phonecode' => '673'],
            ['id' => '33', 'iso2' => 'BG', 'name' => 'Bulgaria', 'iso3' => 'BGR', 'numcode' => '100', 'phonecode' => '359'],
            ['id' => '34', 'iso2' => 'BF', 'name' => 'Burkina Faso', 'iso3' => 'BFA', 'numcode' => '854', 'phonecode' => '226'],
            ['id' => '35', 'iso2' => 'BI', 'name' => 'Burundi', 'iso3' => 'BDI', 'numcode' => '108', 'phonecode' => '257'],

            // C Country
            ['id' => '36', 'iso2' => 'KH', 'name' => 'Cambodia', 'iso3' => 'KHM', 'numcode' => '116', 'phonecode' => '855'],
            ['id' => '37', 'iso2' => 'CM', 'name' => 'Cameroon', 'iso3' => 'CMR', 'numcode' => '120', 'phonecode' => '237'],
            ['id' => '38', 'iso2' => 'CA', 'name' => 'Canada', 'iso3' => 'CAN', 'numcode' => '124', 'phonecode' => '1'],
            ['id' => '39', 'iso2' => 'CV', 'name' => 'Cape Verde', 'iso3' => 'CPV', 'numcode' => '132', 'phonecode' => '238'],
            ['id' => '40', 'iso2' => 'KY', 'name' => 'Cayman Islands', 'iso3' => 'CYM', 'numcode' => '136', 'phonecode' => '1345'],
            ['id' => '41', 'iso2' => 'CF', 'name' => 'Central African Republic', 'iso3' => 'CAF', 'numcode' => '140', 'phonecode' => '236'],
            ['id' => '42', 'iso2' => 'TD', 'name' => 'Chad', 'iso3' => 'TCD', 'numcode' => '148', 'phonecode' => '235'],
            ['id' => '43', 'iso2' => 'CL', 'name' => 'Chile', 'iso3' => 'CHL', 'numcode' => '152', 'phonecode' => '56'],
            ['id' => '44', 'iso2' => 'CN', 'name' => 'China', 'iso3' => 'CHN', 'numcode' => '156', 'phonecode' => '86'],
            ['id' => '45', 'iso2' => 'CX', 'name' => 'Christmas Island', 'iso3' => 'CXR', 'numcode' => '162', 'phonecode' => '61'],
            ['id' => '46', 'iso2' => 'CC', 'name' => 'Cocos (Keeling) Islands', 'iso3' => NULL, 'numcode' => NULL, 'phonecode' => '672'],
            ['id' => '47', 'iso2' => 'CO', 'name' => 'Colombia', 'iso3' => 'COL', 'numcode' => '170', 'phonecode' => '57'],
            ['id' => '48', 'iso2' => 'KM', 'name' => 'Comoros', 'iso3' => 'COM', 'numcode' => '174', 'phonecode' => '269'],
            ['id' => '49', 'iso2' => 'CG', 'name' => 'Congo', 'iso3' => 'COG', 'numcode' => '178', 'phonecode' => '242'],
            ['id' => '50', 'iso2' => 'CD', 'name' => 'Congo, the Democratic Republic of the', 'iso3' => 'COD', 'numcode' => '180', 'phonecode' => '242'],
            ['id' => '51', 'iso2' => 'CK', 'name' => 'Cook Islands', 'iso3' => 'COK', 'numcode' => '184', 'phonecode' => '682'],
            ['id' => '52', 'iso2' => 'CR', 'name' => 'Costa Rica', 'iso3' => 'CRI', 'numcode' => '188', 'phonecode' => '506'],
            ['id' => '53', 'iso2' => 'CI', 'name' => 'Cote D\'Ivoire', 'iso3' => 'CIV', 'numcode' => '384', 'phonecode' => '225'],
            ['id' => '54', 'iso2' => 'HR', 'name' => 'Croatia', 'iso3' => 'HRV', 'numcode' => '191', 'phonecode' => '385'],
            ['id' => '55', 'iso2' => 'CU', 'name' => 'Cuba', 'iso3' => 'CUB', 'numcode' => '192', 'phonecode' => '53'],
            ['id' => '56', 'iso2' => 'CY', 'name' => 'Cyprus', 'iso3' => 'CYP', 'numcode' => '196', 'phonecode' => '357'],
            ['id' => '57', 'iso2' => 'CZ', 'name' => 'Czech Republic', 'iso3' => 'CZE', 'numcode' => '203', 'phonecode' => '420'],

            // D country
            ['id' => '58', 'iso2' => 'DK', 'name' => 'Denmark', 'iso3' => 'DNK', 'numcode' => '208', 'phonecode' => '45'],
            ['id' => '59', 'iso2' => 'DJ', 'name' => 'Djibouti', 'iso3' => 'DJI', 'numcode' => '262', 'phonecode' => '253'],
            ['id' => '60', 'iso2' => 'DM', 'name' => 'Dominica', 'iso3' => 'DMA', 'numcode' => '212', 'phonecode' => '1767'],
            ['id' => '61', 'iso2' => 'DO', 'name' => 'Dominican Republic', 'iso3' => 'DOM', 'numcode' => '214', 'phonecode' => '1809'],

            // E country
            ['id' => '62', 'name' => 'east timor', 'iso2' => 'TL', 'iso3' => 'TLS', 'numcode' => '626', 'phonecode' => '670'],
            ['id' => '63', 'iso2' => 'EC', 'name' => 'Ecuador', 'iso3' => 'ECU', 'numcode' => '218', 'phonecode' => '593'],
            ['id' => '64', 'iso2' => 'EG', 'name' => 'Egypt', 'iso3' => 'EGY', 'numcode' => '818', 'phonecode' => '20'],
            ['id' => '65', 'iso2' => 'SV', 'name' => 'El Salvador', 'iso3' => 'SLV', 'numcode' => '222', 'phonecode' => '503'],
            ['id' => '66', 'iso2' => 'GQ', 'name' => 'Equatorial Guinea', 'iso3' => 'GNQ', 'numcode' => '226', 'phonecode' => '240'],
            ['id' => '67', 'iso2' => 'ER', 'name' => 'Eritrea', 'iso3' => 'ERI', 'numcode' => '232', 'phonecode' => '291'],
            ['id' => '68', 'iso2' => 'EE', 'name' => 'Estonia', 'iso3' => 'EST', 'numcode' => '233', 'phonecode' => '372'],
            ['id' => '69', 'iso2' => 'ET', 'name' => 'Ethiopia', 'iso3' => 'ETH', 'numcode' => '231', 'phonecode' => '251'],
            ['id' => '70', 'name' => 'external territories of australia', 'iso2' => 'CC', 'iso3' => 'CCK', 'numcode' => '166', 'phonecode' => '618'],

            // F country
            ['id' => '71', 'iso2' => 'FK', 'name' => 'Falkland Islands (Malvinas)', 'iso3' => 'FLK', 'numcode' => '238', 'phonecode' => '500'],
            ['id' => '72', 'iso2' => 'FO', 'name' => 'Faroe Islands', 'iso3' => 'FRO', 'numcode' => '234', 'phonecode' => '298'],
            ['id' => '73', 'iso2' => 'FJ', 'name' => 'Fiji', 'iso3' => 'FJI', 'numcode' => '242', 'phonecode' => '679'],
            ['id' => '74', 'iso2' => 'FI', 'name' => 'Finland', 'iso3' => 'FIN', 'numcode' => '246', 'phonecode' => '358'],
            ['id' => '75', 'iso2' => 'FR', 'name' => 'France', 'iso3' => 'FRA', 'numcode' => '250', 'phonecode' => '33'],
            ['id' => '76', 'iso2' => 'GF', 'name' => 'French Guiana', 'iso3' => 'GUF', 'numcode' => '254', 'phonecode' => '594'],
            ['id' => '77', 'iso2' => 'PF', 'name' => 'French Polynesia', 'iso3' => 'PYF', 'numcode' => '258', 'phonecode' => '689'],
            ['id' => '78', 'iso2' => 'TF', 'name' => 'French Southern Territories', 'iso3' => 'ATF', 'numcode' => '260', 'phonecode' => '0'],

            // G country
            ['id' => '79', 'iso2' => 'GA', 'name' => 'Gabon', 'iso3' => 'GAB', 'numcode' => '266', 'phonecode' => '241'],
            ['id' => '80', 'iso2' => 'GM', 'name' => 'Gambia', 'iso3' => 'GMB', 'numcode' => '270', 'phonecode' => '220'],
            ['id' => '81', 'iso2' => 'GE', 'name' => 'Georgia', 'iso3' => 'GEO', 'numcode' => '268', 'phonecode' => '995'],
            ['id' => '82', 'iso2' => 'DE', 'name' => 'Germany', 'iso3' => 'DEU', 'numcode' => '276', 'phonecode' => '49'],
            ['id' => '83', 'iso2' => 'GH', 'name' => 'Ghana', 'iso3' => 'GHA', 'numcode' => '288', 'phonecode' => '233'],
            ['id' => '84', 'iso2' => 'GI', 'name' => 'Gibraltar', 'iso3' => 'GIB', 'numcode' => '292', 'phonecode' => '350'],
            ['id' => '85', 'iso2' => 'GR', 'name' => 'Greece', 'iso3' => 'GRC', 'numcode' => '300', 'phonecode' => '30'],
            ['id' => '86', 'iso2' => 'GL', 'name' => 'Greenland', 'iso3' => 'GRL', 'numcode' => '304', 'phonecode' => '299'],
            ['id' => '87', 'iso2' => 'GD', 'name' => 'Grenada', 'iso3' => 'GRD', 'numcode' => '308', 'phonecode' => '1473'],
            ['id' => '88', 'iso2' => 'GP', 'name' => 'Guadeloupe', 'iso3' => 'GLP', 'numcode' => '312', 'phonecode' => '590'],
            ['id' => '89', 'iso2' => 'GU', 'name' => 'Guam', 'iso3' => 'GUM', 'numcode' => '316', 'phonecode' => '1671'],
            ['id' => '90', 'iso2' => 'GT', 'name' => 'Guatemala', 'iso3' => 'GTM', 'numcode' => '320', 'phonecode' => '502'],
            ['id' => '91', 'iso2' => 'GG', 'name' => 'Guernsey', 'iso3' => 'GGY', 'numcode' => '831', 'phonecode' => '44'],
            ['id' => '92', 'iso2' => 'GN', 'name' => 'Guinea', 'iso3' => 'GIN', 'numcode' => '324', 'phonecode' => '224'],
            ['id' => '93', 'iso2' => 'GW', 'name' => 'Guinea-Bissau', 'iso3' => 'GNB', 'numcode' => '624', 'phonecode' => '245'],
            ['id' => '94', 'iso2' => 'GY', 'name' => 'Guyana', 'iso3' => 'GUY', 'numcode' => '328', 'phonecode' => '592'],

            // H country
            ['id' => '95', 'iso2' => 'HT', 'name' => 'Haiti', 'iso3' => 'HTI', 'numcode' => '332', 'phonecode' => '509'],
            ['id' => '96', 'iso2' => 'HM', 'name' => 'Heard Island and Mcdonald Islands', 'iso3' => 'HMD', 'numcode' => '334', 'phonecode' => '0'],
            ['id' => '97', 'iso2' => 'HN', 'name' => 'Honduras', 'iso3' => 'HND', 'numcode' => '340', 'phonecode' => '504'],
            ['id' => '98', 'iso2' => 'HK', 'name' => 'Hong Kong', 'iso3' => 'HKG', 'numcode' => '344', 'phonecode' => '852'],
            ['id' => '99', 'iso2' => 'HU', 'name' => 'Hungary', 'iso3' => 'HUN', 'numcode' => '348', 'phonecode' => '36'],

            // I Country
            ['id' => '100', 'iso2' => 'IS', 'name' => 'Iceland', 'iso3' => 'ISL', 'numcode' => '352', 'phonecode' => '354'],
            ['id' => '101', 'iso2' => 'IN', 'name' => 'India', 'iso3' => 'IND', 'numcode' => '356', 'phonecode' => '91'],
            ['id' => '102', 'iso2' => 'ID', 'name' => 'Indonesia', 'iso3' => 'IDN', 'numcode' => '360', 'phonecode' => '62'],
            ['id' => '103', 'iso2' => 'IR', 'name' => 'Iran, Islamic Republic of', 'iso3' => 'IRN', 'numcode' => '364', 'phonecode' => '98'],
            ['id' => '104', 'iso2' => 'IQ', 'name' => 'Iraq', 'iso3' => 'IRQ', 'numcode' => '368', 'phonecode' => '964'],
            ['id' => '105', 'iso2' => 'IE', 'name' => 'Ireland', 'iso3' => 'IRL', 'numcode' => '372', 'phonecode' => '353'],
            ['id' => '106', 'iso2' => 'IL', 'name' => 'Israel', 'iso3' => 'ISR', 'numcode' => '376', 'phonecode' => '972'],
            ['id' => '107', 'iso2' => 'IT', 'name' => 'Italy', 'iso3' => 'ITA', 'numcode' => '380', 'phonecode' => '39'],

            // J country
            ['id' => '108', 'iso2' => 'JM', 'name' => 'Jamaica', 'iso3' => 'JAM', 'numcode' => '388', 'phonecode' => '1876'],
            ['id' => '109', 'iso2' => 'JP', 'name' => 'Japan', 'iso3' => 'JPN', 'numcode' => '392', 'phonecode' => '81'],
            ['id' => '110', 'name' => 'jersey', 'iso2' => 'JE', 'iso3' => 'JEY', 'numcode' => '832', 'phonecode' => '44'],
            ['id' => '111', 'iso2' => 'JO', 'name' => 'Jordan', 'iso3' => 'JOR', 'numcode' => '400', 'phonecode' => '962'],

            // K country
            ['id' => '112', 'iso2' => 'KZ', 'name' => 'Kazakhstan', 'iso3' => 'KAZ', 'numcode' => '398', 'phonecode' => '7'],
            ['id' => '113', 'iso2' => 'KE', 'name' => 'Kenya', 'iso3' => 'KEN', 'numcode' => '404', 'phonecode' => '254'],
            ['id' => '114', 'iso2' => 'KI', 'name' => 'Kiribati', 'iso3' => 'KIR', 'numcode' => '296', 'phonecode' => '686'],
            ['id' => '115', 'iso2' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of', 'iso3' => 'PRK', 'numcode' => '408', 'phonecode' => '850'],
            ['id' => '116', 'iso2' => 'KR', 'name' => 'Korea, Republic of', 'iso3' => 'KOR', 'numcode' => '410', 'phonecode' => '82'],
            ['id' => '117', 'iso2' => 'KW', 'name' => 'Kuwait', 'iso3' => 'KWT', 'numcode' => '414', 'phonecode' => '965'],
            ['id' => '118', 'iso2' => 'KG', 'name' => 'Kyrgyzstan', 'iso3' => 'KGZ', 'numcode' => '417', 'phonecode' => '996'],

            // L country
            ['id' => '119', 'iso2' => 'LA', 'name' => 'Lao People\'s Democratic Republic', 'iso3' => 'LAO', 'numcode' => '418', 'phonecode' => '856'],
            ['id' => '120', 'iso2' => 'LV', 'name' => 'Latvia', 'iso3' => 'LVA', 'numcode' => '428', 'phonecode' => '371'],
            ['id' => '121', 'iso2' => 'LB', 'name' => 'Lebanon', 'iso3' => 'LBN', 'numcode' => '422', 'phonecode' => '961'],
            ['id' => '122', 'iso2' => 'LS', 'name' => 'Lesotho', 'iso3' => 'LSO', 'numcode' => '426', 'phonecode' => '266'],
            ['id' => '123', 'iso2' => 'LR', 'name' => 'Liberia', 'iso3' => 'LBR', 'numcode' => '430', 'phonecode' => '231'],
            ['id' => '124', 'iso2' => 'LY', 'name' => 'Libyan Arab Jamahiriya', 'iso3' => 'LBY', 'numcode' => '434', 'phonecode' => '218'],
            ['id' => '125', 'iso2' => 'LI', 'name' => 'Liechtenstein', 'iso3' => 'LIE', 'numcode' => '438', 'phonecode' => '423'],
            ['id' => '126', 'iso2' => 'LT', 'name' => 'Lithuania', 'iso3' => 'LTU', 'numcode' => '440', 'phonecode' => '370'],
            ['id' => '127', 'iso2' => 'LU', 'name' => 'Luxembourg', 'iso3' => 'LUX', 'numcode' => '442', 'phonecode' => '352'],

            // M Country
            ['id' => '128', 'iso2' => 'MO', 'name' => 'Macao', 'iso3' => 'MAC', 'numcode' => '446', 'phonecode' => '853'],
            ['id' => '129', 'iso2' => 'MK', 'name' => 'Macedonia, the Former Yugoslav Republic of', 'iso3' => 'MKD', 'numcode' => '807', 'phonecode' => '389'],
            ['id' => '130', 'iso2' => 'MG', 'name' => 'Madagascar', 'iso3' => 'MDG', 'numcode' => '450', 'phonecode' => '261'],
            ['id' => '131', 'iso2' => 'MW', 'name' => 'Malawi', 'iso3' => 'MWI', 'numcode' => '454', 'phonecode' => '265'],
            ['id' => '132', 'iso2' => 'MY', 'name' => 'Malaysia', 'iso3' => 'MYS', 'numcode' => '458', 'phonecode' => '60'],
            ['id' => '133', 'iso2' => 'MV', 'name' => 'Maldives', 'iso3' => 'MDV', 'numcode' => '462', 'phonecode' => '960'],
            ['id' => '134', 'iso2' => 'ML', 'name' => 'Mali', 'iso3' => 'MLI', 'numcode' => '466', 'phonecode' => '223'],
            ['id' => '135', 'iso2' => 'MT', 'name' => 'Malta', 'iso3' => 'MLT', 'numcode' => '470', 'phonecode' => '356'],
            ['id' => '136', 'name' => 'ISLE OF MAN', 'iso2' => 'IM', 'iso3' => 'IMN', 'numcode' => '833', 'phonecode' => '44'],
            ['id' => '137', 'iso2' => 'MH', 'name' => 'Marshall Islands', 'iso3' => 'MHL', 'numcode' => '584', 'phonecode' => '692'],
            ['id' => '138', 'iso2' => 'MQ', 'name' => 'Martinique', 'iso3' => 'MTQ', 'numcode' => '474', 'phonecode' => '596'],
            ['id' => '139', 'iso2' => 'MR', 'name' => 'Mauritania', 'iso3' => 'MRT', 'numcode' => '478', 'phonecode' => '222'],
            ['id' => '140', 'iso2' => 'MU', 'name' => 'Mauritius', 'iso3' => 'MUS', 'numcode' => '480', 'phonecode' => '230'],
            ['id' => '141', 'iso2' => 'YT', 'name' => 'Mayotte', 'iso3' => 'MYT', 'numcode' => '175', 'phonecode' => '269'],
            ['id' => '142', 'iso2' => 'MX', 'name' => 'Mexico', 'iso3' => 'MEX', 'numcode' => '484', 'phonecode' => '52'],
            ['id' => '143', 'iso2' => 'FM', 'name' => 'Micronesia, Federated States of', 'iso3' => 'FSM', 'numcode' => '583', 'phonecode' => '691'],
            ['id' => '144', 'iso2' => 'MD', 'name' => 'Moldova, Republic of', 'iso3' => 'MDA', 'numcode' => '498', 'phonecode' => '373'],
            ['id' => '145', 'iso2' => 'MC', 'name' => 'Monaco', 'iso3' => 'MCO', 'numcode' => '492', 'phonecode' => '377'],
            ['id' => '146', 'iso2' => 'MN', 'name' => 'Mongolia', 'iso3' => 'MNG', 'numcode' => '496', 'phonecode' => '976'],
            ['id' => '147', 'iso2' => 'MS', 'name' => 'Montserrat', 'iso3' => 'MSR', 'numcode' => '500', 'phonecode' => '1664'],
            ['id' => '148', 'iso2' => 'MA', 'name' => 'Morocco', 'iso3' => 'MAR', 'numcode' => '504', 'phonecode' => '212'],
            ['id' => '149', 'iso2' => 'MZ', 'name' => 'Mozambique', 'iso3' => 'MOZ', 'numcode' => '508', 'phonecode' => '258'],
            ['id' => '150', 'iso2' => 'MM', 'name' => 'Myanmar', 'iso3' => 'MMR', 'numcode' => '104', 'phonecode' => '95'],

            // N Country
            ['id' => '151', 'iso2' => 'NA', 'name' => 'Namibia', 'iso3' => 'NAM', 'numcode' => '516', 'phonecode' => '264'],
            ['id' => '152', 'iso2' => 'NR', 'name' => 'Nauru', 'iso3' => 'NRU', 'numcode' => '520', 'phonecode' => '674'],
            ['id' => '153', 'iso2' => 'NP', 'name' => 'Nepal', 'iso3' => 'NPL', 'numcode' => '524', 'phonecode' => '977'],
            ['id' => '154', 'iso2' => 'NL', 'name' => 'Netherlands', 'iso3' => 'NLD', 'numcode' => '528', 'phonecode' => '31'],
            ['id' => '155', 'iso2' => 'AN', 'name' => 'Netherlands Antilles', 'iso3' => 'ANT', 'numcode' => '530', 'phonecode' => '599'],
            ['id' => '156', 'iso2' => 'NC', 'name' => 'New Caledonia', 'iso3' => 'NCL', 'numcode' => '540', 'phonecode' => '687'],
            ['id' => '157', 'iso2' => 'NZ', 'name' => 'New Zealand', 'iso3' => 'NZL', 'numcode' => '554', 'phonecode' => '64'],
            ['id' => '158', 'iso2' => 'NI', 'name' => 'Nicaragua', 'iso3' => 'NIC', 'numcode' => '558', 'phonecode' => '505'],
            ['id' => '159', 'iso2' => 'NE', 'name' => 'Niger', 'iso3' => 'NER', 'numcode' => '562', 'phonecode' => '227'],
            ['id' => '160', 'iso2' => 'NG', 'name' => 'Nigeria', 'iso3' => 'NGA', 'numcode' => '566', 'phonecode' => '234'],
            ['id' => '161', 'iso2' => 'NU', 'name' => 'Niue', 'iso3' => 'NIU', 'numcode' => '570', 'phonecode' => '683'],
            ['id' => '162', 'iso2' => 'NF', 'name' => 'Norfolk Island', 'iso3' => 'NFK', 'numcode' => '574', 'phonecode' => '672'],
            ['id' => '163', 'iso2' => 'MP', 'name' => 'Northern Mariana Islands', 'iso3' => 'MNP', 'numcode' => '580', 'phonecode' => '1670'],
            ['id' => '164', 'iso2' => 'NO', 'name' => 'Norway', 'iso3' => 'NOR', 'numcode' => '578', 'phonecode' => '47'],

            // O Country
            ['id' => '165', 'iso2' => 'OM', 'name' => 'Oman', 'iso3' => 'OMN', 'numcode' => '512', 'phonecode' => '968'],

            // P Country
            ['id' => '166', 'iso2' => 'PK', 'name' => 'Pakistan', 'iso3' => 'PAK', 'numcode' => '586', 'phonecode' => '92'],
            ['id' => '167', 'iso2' => 'PW', 'name' => 'Palau', 'iso3' => 'PLW', 'numcode' => '585', 'phonecode' => '680'],
            ['id' => '168', 'iso2' => 'PS', 'name' => 'Palestinian Territory, Occupied', 'iso3' => 'PSE','numcode' => '275','phonecode' => '970'],
            ['id' => '169', 'iso2' => 'PA', 'name' => 'Panama', 'iso3' => 'PAN', 'numcode' => '591', 'phonecode' => '507'],
            ['id' => '170', 'iso2' => 'PG', 'name' => 'Papua New Guinea', 'iso3' => 'PNG', 'numcode' => '598', 'phonecode' => '675'],
            ['id' => '171', 'iso2' => 'PY', 'name' => 'Paraguay', 'iso3' => 'PRY', 'numcode' => '600', 'phonecode' => '595'],
            ['id' => '172', 'iso2' => 'PE', 'name' => 'Peru', 'iso3' => 'PER', 'numcode' => '604', 'phonecode' => '51'],
            ['id' => '173', 'iso2' => 'PH', 'name' => 'Philippines', 'iso3' => 'PHL', 'numcode' => '608', 'phonecode' => '63'],
            ['id' => '174', 'iso2' => 'PN', 'name' => 'Pitcairn', 'iso3' => 'PCN', 'numcode' => '612', 'phonecode' => '0'],
            ['id' => '175', 'iso2' => 'PL', 'name' => 'Poland', 'iso3' => 'POL', 'numcode' => '616', 'phonecode' => '48'],
            ['id' => '176', 'iso2' => 'PT', 'name' => 'Portugal', 'iso3' => 'PRT', 'numcode' => '620', 'phonecode' => '351'],
            ['id' => '177', 'iso2' => 'PR', 'name' => 'Puerto Rico', 'iso3' => 'PRI', 'numcode' => '630', 'phonecode' => '1787'],

            // Q Country
            ['id' => '178', 'iso2' => 'QA', 'name' => 'Qatar', 'iso3' => 'QAT', 'numcode' => '634', 'phonecode' => '974'],

            // R Country
            ['id' => '179', 'iso2' => 'RE', 'name' => 'Reunion', 'iso3' => 'REU', 'numcode' => '638', 'phonecode' => '262'],
            ['id' => '180', 'iso2' => 'RO', 'name' => 'Romania', 'iso3' => 'ROM', 'numcode' => '642', 'phonecode' => '40'],
            ['id' => '181', 'iso2' => 'RU', 'name' => 'Russian Federation', 'iso3' => 'RUS', 'numcode' => '643', 'phonecode' => '70'],
            ['id' => '182', 'iso2' => 'RW', 'name' => 'Rwanda', 'iso3' => 'RWA', 'numcode' => '646', 'phonecode' => '250'],

            // S Country
            ['id' => '183', 'iso2' => 'SH', 'name' => 'Saint Helena', 'iso3' => 'SHN', 'numcode' => '654', 'phonecode' => '290'],
            ['id' => '184', 'iso2' => 'KN', 'name' => 'Saint Kitts and Nevis', 'iso3' => 'KNA', 'numcode' => '659', 'phonecode' => '1869'],
            ['id' => '185', 'iso2' => 'LC', 'name' => 'Saint Lucia', 'iso3' => 'LCA', 'numcode' => '662', 'phonecode' => '1758'],
            ['id' => '186', 'iso2' => 'PM', 'name' => 'Saint Pierre and Miquelon', 'iso3' => 'SPM', 'numcode' => '666', 'phonecode' => '508'],
            ['id' => '187', 'iso2' => 'VC', 'name' => 'Saint Vincent and the Grenadines', 'iso3' => 'VCT', 'numcode' => '670', 'phonecode' => '1784'],
            ['id' => '188', 'iso2' => 'WS', 'name' => 'Samoa', 'iso3' => 'WSM', 'numcode' => '882', 'phonecode' => '684'],
            ['id' => '189', 'iso2' => 'SM', 'name' => 'San Marino', 'iso3' => 'SMR', 'numcode' => '674', 'phonecode' => '378'],
            ['id' => '190', 'iso2' => 'ST', 'name' => 'Sao Tome and Principe', 'iso3' => 'STP', 'numcode' => '678', 'phonecode' => '239'],
            ['id' => '191', 'iso2' => 'SA', 'name' => 'Saudi Arabia', 'iso3' => 'SAU', 'numcode' => '682', 'phonecode' => '966'],
            ['id' => '192', 'iso2' => 'SN', 'name' => 'Senegal', 'iso3' => 'SEN', 'numcode' => '686', 'phonecode' => '221'],
            ['id' => '193', 'iso2' => 'CS', 'name' => 'Serbia and Montenegro', 'iso3' => NULL,'numcode' => NULL,'phonecode' => '381'],
            ['id' => '194', 'iso2' => 'SC', 'name' => 'Seychelles', 'iso3' => 'SYC', 'numcode' => '690', 'phonecode' => '248'],
            ['id' => '195', 'iso2' => 'SL', 'name' => 'Sierra Leone', 'iso3' => 'SLE', 'numcode' => '694', 'phonecode' => '232'],
            ['id' => '196', 'iso2' => 'SG', 'name' => 'Singapore', 'iso3' => 'SGP', 'numcode' => '702', 'phonecode' => '65'],
            ['id' => '197', 'iso2' => 'SK', 'name' => 'Slovakia', 'iso3' => 'SVK', 'numcode' => '703', 'phonecode' => '421'],
            ['id' => '198', 'iso2' => 'SI', 'name' => 'Slovenia', 'iso3' => 'SVN', 'numcode' => '705', 'phonecode' => '386'],
            ['id' => '199', 'name' => 'smaller territories of the uk', 'iso2' => '', 'iso3' => '', 'numcode' => '', 'phonecode' => ''],
            ['id' => '200', 'iso2' => 'SB', 'name' => 'Solomon Islands', 'iso3' => 'SLB', 'numcode' => '90', 'phonecode' => '677'],
            ['id' => '201', 'iso2' => 'SO', 'name' => 'Somalia', 'iso3' => 'SOM', 'numcode' => '706', 'phonecode' => '252'],
            ['id' => '202', 'iso2' => 'ZA', 'name' => 'South Africa', 'iso3' => 'ZAF', 'numcode' => '710', 'phonecode' => '27'],
            ['id' => '203', 'iso2' => 'GS', 'name' => 'South Georgia and the South Sandwich Islands', 'iso3' => 'SGS','numcode' => '239','phonecode' => '0'],
            ['id' => '204', 'iso2' => 'SS', 'name' => 'South Sudan', 'iso3' => 'SSD', 'numcode' => '728', 'phonecode' => '211'],
            ['id' => '205', 'iso2' => 'ES', 'name' => 'Spain', 'iso3' => 'ESP', 'numcode' => '724', 'phonecode' => '34'],
            ['id' => '206', 'iso2' => 'LK', 'name' => 'Sri Lanka', 'iso3' => 'LKA', 'numcode' => '144', 'phonecode' => '94'],
            ['id' => '207', 'iso2' => 'SD', 'name' => 'Sudan', 'iso3' => 'SDN', 'numcode' => '736', 'phonecode' => '249'],
            ['id' => '208', 'iso2' => 'SR', 'name' => 'Suriname', 'iso3' => 'SUR', 'numcode' => '740', 'phonecode' => '597'],
            ['id' => '209', 'iso2' => 'SJ', 'name' => 'Svalbard and Jan Mayen', 'iso3' => 'SJM', 'numcode' => '744', 'phonecode' => '47'],
            ['id' => '210', 'iso2' => 'SZ', 'name' => 'Swaziland', 'iso3' => 'SWZ', 'numcode' => '748', 'phonecode' => '268'],
            ['id' => '211', 'iso2' => 'SE', 'name' => 'Sweden', 'iso3' => 'SWE', 'numcode' => '752', 'phonecode' => '46'],
            ['id' => '212', 'iso2' => 'CH', 'name' => 'Switzerland', 'iso3' => 'CHE', 'numcode' => '756', 'phonecode' => '41'],
            ['id' => '213', 'iso2' => 'SY', 'name' => 'Syrian Arab Republic', 'iso3' => 'SYR', 'numcode' => '760', 'phonecode' => '963'],

            // T Country
            ['id' => '214', 'iso2' => 'TW', 'name' => 'Taiwan, Province of China', 'iso3' => 'TWN', 'numcode' => '158', 'phonecode' => '886'],
            ['id' => '215', 'iso2' => 'TJ', 'name' => 'Tajikistan', 'iso3' => 'TJK', 'numcode' => '762', 'phonecode' => '992'],
            ['id' => '216', 'iso2' => 'TZ', 'name' => 'Tanzania, United Republic of', 'iso3' => 'TZA', 'numcode' => '834', 'phonecode' => '255'],
            ['id' => '217', 'iso2' => 'TH', 'name' => 'Thailand', 'iso3' => 'THA', 'numcode' => '764', 'phonecode' => '66'],
            ['id' => '218', 'iso2' => 'TG', 'name' => 'Togo', 'iso3' => 'TGO', 'numcode' => '768', 'phonecode' => '228'],
            ['id' => '219', 'iso2' => 'TK', 'name' => 'Tokelau', 'iso3' => 'TKL', 'numcode' => '772', 'phonecode' => '690'],
            ['id' => '220', 'iso2' => 'TO', 'name' => 'Tonga', 'iso3' => 'TON', 'numcode' => '776', 'phonecode' => '676'],
            ['id' => '221', 'iso2' => 'TT', 'name' => 'Trinidad and Tobago', 'iso3' => 'TTO', 'numcode' => '780', 'phonecode' => '1868'],
            ['id' => '222', 'iso2' => 'TN', 'name' => 'Tunisia', 'iso3' => 'TUN', 'numcode' => '788', 'phonecode' => '216'],
            ['id' => '223', 'iso2' => 'TR', 'name' => 'Turkey', 'iso3' => 'TUR', 'numcode' => '792', 'phonecode' => '90'],
            ['id' => '224', 'iso2' => 'TM', 'name' => 'Turkmenistan', 'iso3' => 'TKM', 'numcode' => '795', 'phonecode' => '7370'],
            ['id' => '225', 'iso2' => 'TC', 'name' => 'Turks and Caicos Islands', 'iso3' => 'TCA', 'numcode' => '796', 'phonecode' => '1649'],
            ['id' => '226', 'iso2' => 'TV', 'name' => 'Tuvalu', 'iso3' => 'TUV', 'numcode' => '798', 'phonecode' => '688'],

            // U Country
            ['id' => '227', 'iso2' => 'UG', 'name' => 'Uganda', 'iso3' => 'UGA', 'numcode' => '800', 'phonecode' => '256'],
            ['id' => '228', 'iso2' => 'UA', 'name' => 'Ukraine', 'iso3' => 'UKR', 'numcode' => '804', 'phonecode' => '380'],
            ['id' => '229', 'iso2' => 'AE', 'name' => 'United Arab Emirates', 'iso3' => 'ARE', 'numcode' => '784', 'phonecode' => '971'],
            ['id' => '230', 'iso2' => 'GB', 'name' => 'United Kingdom', 'iso3' => 'GBR', 'numcode' => '826', 'phonecode' => '44'],
            ['id' => '231', 'iso2' => 'US', 'name' => 'United States', 'iso3' => 'USA', 'numcode' => '840', 'phonecode' => '1'],
            ['id' => '232', 'iso2' => 'UM', 'name' => 'United States Minor Outlying Islands', 'iso3' => 'UMI','numcode' => '581','phonecode' => '1'],
            ['id' => '233', 'iso2' => 'UY', 'name' => 'Uruguay', 'iso3' => 'URY', 'numcode' => '858', 'phonecode' => '598'],
            ['id' => '234', 'iso2' => 'UZ', 'name' => 'Uzbekistan', 'iso3' => 'UZB', 'numcode' => '860', 'phonecode' => '998'],

            // V Country
            ['id' => '235', 'iso2' => 'VU', 'name' => 'Vanuatu', 'iso3' => 'VUT', 'numcode' => '548', 'phonecode' => '678'],
            ['id' => '236', 'name' => 'vatican city state (holy see)', 'iso2' => 'VA', 'iso3' => 'VAT', 'numcode' => '336', 'phonecode' => '39'],
            ['id' => '237', 'iso2' => 'VE', 'name' => 'Venezuela', 'iso3' => 'VEN', 'numcode' => '862', 'phonecode' => '58'],
            ['id' => '238', 'iso2' => 'VN', 'name' => 'Vietnam', 'iso3' => 'VNM', 'numcode' => '704', 'phonecode' => '84'],
            ['id' => '239', 'iso2' => 'VG', 'name' => 'Virgin Islands, British', 'iso3' => 'VGB', 'numcode' => '92', 'phonecode' => '1284'],
            ['id' => '240', 'iso2' => 'VI', 'name' => 'Virgin Islands, U.S.', 'iso3' => 'VIR', 'numcode' => '850', 'phonecode' => '1340'],

            // W Country
            ['id' => '241', 'iso2' => 'WF', 'name' => 'Wallis and Futuna', 'iso3' => 'WLF', 'numcode' => '876', 'phonecode' => '681'],
            ['id' => '242', 'iso2' => 'EH', 'name' => 'Western Sahara', 'iso3' => 'ESH', 'numcode' => '732', 'phonecode' => '212'],

            // Y Country
            ['id' => '243', 'iso2' => 'YE', 'name' => 'Yemen', 'iso3' => 'YEM', 'numcode' => '887', 'phonecode' => '967'],
            ['id' => '244', 'name' => 'yugoslavia', 'iso2' => '', 'iso3' => 'YUG', 'numcode' => '890', 'phonecode' => ''],

            // Z Country
            ['id' => '245', 'iso2' => 'ZM', 'name' => 'Zambia', 'iso3' => 'ZMB', 'numcode' => '894', 'phonecode' => '260'],
            ['id' => '246', 'iso2' => 'ZW', 'name' => 'Zimbabwe', 'iso3' => 'ZWE', 'numcode' => '716', 'phonecode' => '263'],
            
            // Add new country here
        ];
    }
}
